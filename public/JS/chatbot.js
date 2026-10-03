/* ==========================================================================
   CHATBOT AI - SMK INFOKOM
   Widget chat kanan bawah. Berbicara dengan POST /chatbot (ChatbotController),
   yang meneruskan ke Google Gemini. API key tidak pernah ada di file ini.
   ========================================================================== */
(function () {
  'use strict';

  var root = document.getElementById('ai-chatbot');
  if (!root) return;

  /* ---------- Elemen ---------- */
  var $ = function (sel) { return root.querySelector(sel); };
  var fab = $('#cbFab');
  var win = $('#cbWindow');
  var body = $('#cbBody');
  var form = $('#cbForm');
  var input = $('#cbInput');
  var sendBtn = $('#cbSend');
  var resetBtn = $('#cbReset');
  var closeBtn = $('#cbClose');
  var teaser = $('#cbTeaser');
  var teaserClose = $('#cbTeaserClose');
  var teaserCta = $('#cbTeaserCta');
  var counter = $('#cbCount');

  /* ---------- Konfigurasi ---------- */
  var ENDPOINT = root.getAttribute('data-endpoint');
  var LOGO = root.getAttribute('data-logo') || '';
  var CSRF = (document.querySelector('meta[name="csrf-token"]') || {}).content || '';
  var STORE_KEY = 'ai-chatbot-v2';
  var MAX_LEN = 500;        // sama dengan batas di server
  var MAX_SEND = 10;        // jumlah pesan riwayat yang dikirim ke server
  var MAX_STORED = 24;      // jumlah pesan yang disimpan di browser
  var TIMEOUT_MS = 55000;
  var TEASER_DELAY = 2400;   // jeda (ms) sebelum pop up pemberitahuan muncul
  var TEASER_SHOW_MS = 16000; // lama pop up tampil bila tidak disentuh
  var TEASER_MAX = 3;        // maksimal muncul per sesi (bila tidak ditutup / dibuka)

  var QUICK_QUESTIONS = [
    'Jurusan apa saja yang tersedia?',
    'Berapa biaya pendaftaran PPDB?',
    'Bagaimana alur pendaftaran?',
    'Apa saja fasilitas sekolah?',
    'Info BKK & magang Jepang',
    'Alamat & jam layanan sekolah'
  ];

  var BOT_SVG =
    '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' +
    '<rect x="4" y="8" width="16" height="11" rx="3.5"/><path d="M12 8V5"/><circle cx="12" cy="4" r="1"/>' +
    '<circle cx="9" cy="13.5" r="1" fill="currentColor"/><circle cx="15" cy="13.5" r="1" fill="currentColor"/></svg>';

  /* ---------- State ---------- */
  var state = { open: false, busy: false, teaserSeen: false, teaserCount: 0, seen: false, history: [] };
  var typingEl = null;
  var teaserTimer = null;
  var welcomeEl = null;

  /* ---------- Penyimpanan (sessionStorage; tahan pindah halaman) ---------- */
  function load() {
    try {
      var raw = sessionStorage.getItem(STORE_KEY);
      if (!raw) return;
      var s = JSON.parse(raw);
      if (s && typeof s === 'object') {
        state.open = !!s.open;
        state.teaserSeen = !!s.teaserSeen;
        state.teaserCount = +s.teaserCount || 0;
        state.seen = !!s.seen;
        state.history = Array.isArray(s.history) ? s.history.filter(function (m) {
          return m && (m.role === 'user' || m.role === 'bot') && typeof m.text === 'string';
        }).slice(-MAX_STORED) : [];
      }
    } catch (e) { /* abaikan */ }
  }
  function save() {
    try {
      sessionStorage.setItem(STORE_KEY, JSON.stringify({
        open: state.open,
        teaserSeen: state.teaserSeen,
        teaserCount: state.teaserCount,
        seen: state.seen,
        history: state.history.slice(-MAX_STORED)
      }));
    } catch (e) { /* abaikan */ }
  }

  /* ---------- Util ---------- */
  function pad(n) { return (n < 10 ? '0' : '') + n; }
  function clock(ts) {
    var d = ts ? new Date(ts) : new Date();
    return pad(d.getHours()) + '.' + pad(d.getMinutes());
  }
  function esc(s) {
    return String(s).replace(/[&<>"']/g, function (c) {
      return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c];
    });
  }
  function el(tag, cls, html) {
    var n = document.createElement(tag);
    if (cls) n.className = cls;
    if (html != null) n.innerHTML = html;
    return n;
  }
  function isMobile() { return window.innerWidth <= 720; }

  /* Pembersih teks jawaban: tanpa emoji, tanpa tanda pisah panjang (em/en dash) */
  var EMOJI_RE;
  try {
    EMOJI_RE = new RegExp('[\\u{1F000}-\\u{1FAFF}\\u{2600}-\\u{27BF}\\u{2B00}-\\u{2BFF}\\u{231A}-\\u{23FF}\\uFE0F\\u200D\\u20E3]', 'gu');
  } catch (e) {
    // Browser lama tanpa dukungan flag "u"
    EMOJI_RE = /[\uD83C-\uD83E][\uDC00-\uDFFF]|[\u2600-\u27BF\u2B00-\u2BFF\u231A-\u23FF\uFE0F\u200D\u20E3]/g;
  }
  function clean(s) {
    return String(s)
      .replace(EMOJI_RE, '')
      .replace(/[ \t]*[\u2014\u2015][ \t]*/g, ' - ')   // em dash -> " - "
      .replace(/[ \t]+\u2013[ \t]+/g, ' - ')           // en dash bersepasi -> " - "
      .replace(/\u2013/g, '-')                          // en dash rapat (rentang) -> "-"
      .replace(/(\S)[ \t]{2,}/g, '$1 ')
      .replace(/[ \t]+$/gm, '')
      .trim();
  }

  /* ---------- Render markdown ringan (aman: semua teks di-escape lebih dulu) ---------- */
  var SAFE_URL = /^(\/(?!\/)[^\s]*|https?:\/\/[^\s]+|mailto:[^\s]+|tel:[^\s]+)$/i;

  function inline(raw) {
    var tokens = [];
    var s = esc(raw.replace(/[\u0000-\u0008\u000B-\u001F]/g, ''));

    // [teks](url) -> hanya url yang diizinkan
    s = s.replace(/\[([^\]\n]+)\]\(([^)\s]+)\)/g, function (m, label, url) {
      if (!SAFE_URL.test(url)) return label;
      var external = /^https?:/i.test(url);
      var a = '<a class="cb-link" href="' + url + '"' +
        (external ? ' target="_blank" rel="noopener noreferrer"' : '') + '>' + label + '</a>';
      tokens.push(a);
      return '\u0001' + (tokens.length - 1) + '\u0001';
    });

    // URL polos
    s = s.replace(/(^|[\s(])(https?:\/\/[^\s<]+[^\s<.,;:!?)\]])/g, function (m, pre, url) {
      tokens.push('<a class="cb-link" href="' + url + '" target="_blank" rel="noopener noreferrer">' + url + '</a>');
      return pre + '\u0001' + (tokens.length - 1) + '\u0001';
    });

    // Email
    s = s.replace(/([A-Za-z0-9._%+-]+@[A-Za-z0-9-]+(?:\.[A-Za-z0-9-]+)+)/g, function (m) {
      tokens.push('<a class="cb-link" href="mailto:' + m + '">' + m + '</a>');
      return '\u0001' + (tokens.length - 1) + '\u0001';
    });

    s = s.replace(/\*\*([^*\n]+?)\*\*/g, '<strong>$1</strong>');
    s = s.replace(/(^|[^*\w])\*([^*\s][^*\n]*?)\*(?![*\w])/g, '$1<em>$2</em>');

    return s.replace(/\u0001(\d+)\u0001/g, function (m, i) { return tokens[+i]; });
  }

  function renderMarkdown(text) {
    var lines = clean(text).replace(/\r/g, '').split('\n');
    var blocks = [];
    var para = [];
    var list = null;

    function flushPara() {
      if (para.length) { blocks.push('<p>' + para.map(inline).join('<br>') + '</p>'); para = []; }
    }
    function flushList() {
      if (list) {
        blocks.push('<' + list.type + '>' + list.items.map(function (i) { return '<li>' + inline(i) + '</li>'; }).join('') + '</' + list.type + '>');
        list = null;
      }
    }

    lines.forEach(function (line) {
      var l = line.trim();
      if (!l) { flushPara(); flushList(); return; }

      var ul = /^[-*•]\s+(.*)$/.exec(l);
      var ol = /^(\d+)[.)]\s+(.*)$/.exec(l);
      var h = /^#{1,6}\s+(.*)$/.exec(l);

      if (ul) {
        flushPara();
        if (!list || list.type !== 'ul') { flushList(); list = { type: 'ul', items: [] }; }
        list.items.push(ul[1]);
      } else if (ol) {
        flushPara();
        if (!list || list.type !== 'ol') { flushList(); list = { type: 'ol', items: [] }; }
        list.items.push(ol[2]);
      } else if (h) {
        flushPara(); flushList();
        blocks.push('<p><strong>' + inline(h[1].replace(/\*+/g, '')) + '</strong></p>');
      } else {
        flushList();
        para.push(l);
      }
    });
    flushPara(); flushList();

    return blocks.map(function (b, i) {
      return '<div class="cb-b" style="--i:' + i + '">' + b + '</div>';
    }).join('');
  }

  /* ---------- Tampilan pesan ---------- */
  function scrollBottom(smooth) {
    var go = function () {
      if (smooth && !matchMedia('(prefers-reduced-motion: reduce)').matches && body.scrollTo) {
        body.scrollTo({ top: body.scrollHeight, behavior: 'smooth' });
      } else {
        body.scrollTop = body.scrollHeight;
      }
    };
    go();
    setTimeout(go, 120); // setelah animasi blok jawaban
  }

  function miniAvatar() {
    var a = el('span', 'cb-mini', BOT_SVG);
    if (LOGO) {
      var img = new Image();
      img.alt = '';
      img.onerror = function () { img.remove(); };
      img.onload = function () { var svg = a.querySelector('svg'); if (svg) svg.style.display = 'none'; };
      img.src = LOGO;
      a.appendChild(img);
    }
    return a;
  }

  function addMessage(role, text, opts) {
    opts = opts || {};
    var row = el('div', 'cb-msg cb-msg--' + (role === 'user' ? 'user' : 'bot') + (opts.error ? ' cb-msg--error' : ''));
    if (opts.instant) row.style.animation = 'none';

    if (role !== 'user') row.appendChild(miniAvatar());

    var col = el('div', 'cb-col');
    var bubble = el('div', 'cb-bubble');

    if (role === 'user') {
      bubble.textContent = text;
    } else {
      bubble.innerHTML = renderMarkdown(text);
      if (opts.instant) {
        Array.prototype.forEach.call(bubble.querySelectorAll('.cb-b'), function (b) { b.style.animation = 'none'; });
      }
    }
    col.appendChild(bubble);

    if (opts.retry) {
      var btn = el('button', 'cb-retry', 'Coba lagi');
      btn.type = 'button';
      btn.addEventListener('click', function () {
        row.remove();
        request(opts.retry);
      });
      bubble.appendChild(btn);
    }

    col.appendChild(el('span', 'cb-time', clock(opts.ts)));
    row.appendChild(col);
    body.appendChild(row);
    return row;
  }

  function showTyping() {
    hideTyping();
    typingEl = el('div', 'cb-msg cb-msg--bot');
    typingEl.appendChild(miniAvatar());
    var col = el('div', 'cb-col');
    col.appendChild(el('div', 'cb-bubble',
      '<span class="cb-typing" aria-hidden="true"><i></i><i></i><i></i></span>' +
      '<span class="sr-only" style="position:absolute;left:-9999px">Asisten sedang mengetik…</span>'));
    typingEl.appendChild(col);
    body.appendChild(typingEl);
    scrollBottom(true);
  }
  function hideTyping() {
    if (typingEl) { typingEl.remove(); typingEl = null; }
  }

  function buildWelcome(animated) {
    var w = el('div', 'cb-welcome');
    if (!animated) w.style.animation = 'none';
    w.innerHTML =
      '<p class="cb-welcome-hi">Halo, selamat datang!</p>' +
      '<p>Saya <strong>Asisten Virtual SMK INFOKOM Kota Bogor</strong>. Tanyakan seputar jurusan, PPDB &amp; biaya, fasilitas, BKK, mitra, dan kontak sekolah.</p>';

    var chips = el('div', 'cb-chips');
    chips.setAttribute('aria-label', 'Pertanyaan cepat');
    QUICK_QUESTIONS.forEach(function (q, i) {
      var c = el('button', 'cb-chip');
      c.type = 'button';
      c.textContent = q;
      c.style.setProperty('--i', i);
      if (!animated) c.style.animation = 'none';
      c.addEventListener('click', function () { send(q); });
      chips.appendChild(c);
    });
    w.appendChild(chips);
    return w;
  }

  function collapseChips() {
    var chips = body.querySelector('.cb-chips');
    if (!chips || chips.classList.contains('is-gone')) return;
    chips.style.maxHeight = chips.scrollHeight + 'px';
    void chips.offsetHeight; // paksa reflow agar transisi berjalan
    chips.classList.add('is-gone');
    chips.style.maxHeight = '0px';
  }

  function renderAll() {
    body.innerHTML = '';
    welcomeEl = buildWelcome(state.history.length === 0);
    body.appendChild(welcomeEl);

    if (state.history.length) {
      var chips = welcomeEl.querySelector('.cb-chips');
      if (chips) chips.remove();
      state.history.forEach(function (m) {
        addMessage(m.role, m.text, { instant: true, ts: m.t });
      });
    }
    scrollBottom(false);
  }

  /* ---------- Kirim & terima ---------- */
  function setBusy(v) {
    state.busy = v;
    sendBtn.classList.toggle('is-busy', v);
    resetBtn.disabled = v;
    updateSend();
  }
  function updateSend() {
    var has = input.value.trim().length > 0;
    sendBtn.disabled = state.busy || !has;
  }

  function send(text) {
    text = String(text || '').replace(/\s+\n/g, '\n').trim();
    if (!text || state.busy) return;
    if (text.length > MAX_LEN) text = text.slice(0, MAX_LEN);

    setOpen(true);
    collapseChips();
    addMessage('user', text);
    input.value = '';
    autosize();
    updateSend();
    scrollBottom(true);
    request(text);
  }

  function errorMessage(status, json) {
    if (status === 419) return 'Sesi Anda sudah berakhir. Muat ulang halaman (tekan F5), lalu coba lagi.';
    if (status === 422) return 'Pesan tidak dapat diproses. Pastikan pertanyaan tidak kosong dan maksimal ' + MAX_LEN + ' karakter.';
    if (status === 429 && !(json && json.reply)) return 'Terlalu banyak pesan dalam waktu singkat. Mohon tunggu sebentar lalu coba lagi.';
    if (json && typeof json.reply === 'string' && json.reply) return json.reply;
    return 'Maaf, terjadi gangguan saat menghubungi asisten. Silakan coba lagi.';
  }

  function request(text) {
    if (state.busy) return;
    setBusy(true);
    showTyping();

    var payload = {
      message: text,
      history: state.history.slice(-MAX_SEND).map(function (m) { return { role: m.role, text: m.text }; })
    };

    var ctrl = ('AbortController' in window) ? new AbortController() : null;
    var timer = setTimeout(function () { if (ctrl) ctrl.abort(); }, TIMEOUT_MS);
    var minDelay = new Promise(function (r) { setTimeout(r, 450); }); // agar animasi mengetik terasa natural

    var done = function (fn) {
      clearTimeout(timer);
      minDelay.then(function () {
        hideTyping();
        fn();
        setBusy(false);
        scrollBottom(true);
        if (state.open && !isMobile()) input.focus({ preventScroll: true });
      });
    };

    fetch(ENDPOINT, {
      method: 'POST',
      credentials: 'same-origin',
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-CSRF-TOKEN': CSRF,
        'X-Requested-With': 'XMLHttpRequest'
      },
      body: JSON.stringify(payload),
      signal: ctrl ? ctrl.signal : undefined
    })
      .then(function (res) {
        return res.json().catch(function () { return {}; }).then(function (json) {
          return { ok: res.ok, status: res.status, json: json || {} };
        });
      })
      .then(function (r) {
        done(function () {
          if (r.ok && typeof r.json.reply === 'string' && r.json.reply) {
            var now = Date.now();
            state.history.push({ role: 'user', text: text, t: now });
            state.history.push({ role: 'bot', text: r.json.reply, t: now });
            state.history = state.history.slice(-MAX_STORED);
            save();
            addMessage('bot', r.json.reply, { ts: now });
          } else {
            if (r.json && r.json.debug && window.console) console.error('[Chatbot]', r.json.debug);
            addMessage('bot', errorMessage(r.status, r.json), { error: true, retry: text });
          }
        });
      })
      .catch(function (err) {
        done(function () {
          var aborted = err && err.name === 'AbortError';
          addMessage('bot', aborted
            ? 'Jawaban terlalu lama. Silakan coba lagi.'
            : 'Tidak dapat terhubung ke server. Periksa koneksi internet Anda, lalu coba lagi.',
          { error: true, retry: text });
        });
      });
  }

  /* ---------- Buka / tutup ---------- */
  function setOpen(v) {
    v = !!v;
    if (state.open === v && root.classList.contains('is-open') === v) return;
    state.open = v;
    root.classList.toggle('is-open', v);
    fab.setAttribute('aria-expanded', v ? 'true' : 'false');
    fab.setAttribute('aria-label', v ? 'Tutup chat' : 'Buka chat dengan Asisten SMK INFOKOM');
    win.setAttribute('aria-hidden', v ? 'false' : 'true');

    if (v) {
      state.seen = true;
      root.classList.add('is-seen');
      hideTeaser(true);
      scrollBottom(false);
      if (!isMobile()) setTimeout(function () { input.focus({ preventScroll: true }); }, 380);
    }
    save();
  }

  /* ---------- Pop up pemberitahuan ---------- */
  function showTeaser() {
    if (state.open || state.teaserSeen) return;
    state.teaserCount += 1;
    save();
    teaser.setAttribute('aria-hidden', 'false');
    teaser.classList.add('is-show');
    clearTimeout(teaserTimer);
    teaserTimer = setTimeout(function () { hideTeaser(false); }, TEASER_SHOW_MS);
  }
  // remember = true  -> tidak muncul lagi pada sesi ini (ditutup / chat dibuka)
  // remember = false -> hanya disembunyikan (hilang sendiri), boleh muncul di halaman berikutnya
  function hideTeaser(remember) {
    clearTimeout(teaserTimer);
    teaser.classList.remove('is-show');
    teaser.setAttribute('aria-hidden', 'true');
    if (remember) { state.teaserSeen = true; save(); }
  }

  /* ---------- Input ---------- */
  function autosize() {
    input.style.height = 'auto';
    input.style.height = Math.min(input.scrollHeight, 112) + 'px';
    var n = input.value.length;
    counter.textContent = n >= 400 ? n + '/' + MAX_LEN : '';
  }

  /* ---------- Event ---------- */
  fab.addEventListener('click', function () { setOpen(!state.open); });
  closeBtn.addEventListener('click', function () { setOpen(false); fab.focus({ preventScroll: true }); });
  teaserClose.addEventListener('click', function (e) { e.stopPropagation(); hideTeaser(true); });
  teaser.addEventListener('click', function () { setOpen(true); });
  teaserCta.addEventListener('click', function (e) { e.stopPropagation(); setOpen(true); });

  resetBtn.addEventListener('click', function () {
    if (state.busy) return;
    state.history = [];
    save();
    renderAll();
    input.focus({ preventScroll: true });
  });

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    send(input.value);
  });
  input.addEventListener('input', function () { autosize(); updateSend(); });
  input.addEventListener('keydown', function (e) {
    if (e.key === 'Enter' && !e.shiftKey && !e.isComposing) {
      e.preventDefault();
      form.requestSubmit ? form.requestSubmit() : send(input.value);
    }
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && state.open) { setOpen(false); fab.focus({ preventScroll: true }); }
  });

  // Tautan di dalam jawaban: di HP, tutup chat setelah pindah/loncat ke bagian halaman
  body.addEventListener('click', function (e) {
    var a = e.target.closest ? e.target.closest('a.cb-link') : null;
    if (a && isMobile() && !a.target) setTimeout(function () { setOpen(false); }, 150);
  });

  /* ---------- Mulai ---------- */
  load();
  renderAll();

  if (state.seen) root.classList.add('is-seen');
  if (state.open) {
    root.classList.add('is-open');
    fab.setAttribute('aria-expanded', 'true');
    fab.setAttribute('aria-label', 'Tutup chat');
    win.setAttribute('aria-hidden', 'false');
  }
  autosize();
  updateSend();

  // Lepas mode "boot" (tanpa animasi) setelah posisi awal terpasang
  requestAnimationFrame(function () {
    requestAnimationFrame(function () {
      root.classList.remove('cb-boot');
      scrollBottom(false);
    });
  });

  if (!state.open && !state.teaserSeen && state.teaserCount < TEASER_MAX) setTimeout(showTeaser, TEASER_DELAY);
})();