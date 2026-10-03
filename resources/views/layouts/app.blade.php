<!doctype html>

<html lang="id">

<head>
    <meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
    @yield('title', 'SMK INFOKOM Kota Bogor')
</title>

<meta
    name="description"
    content="@yield('description', 'SMK INFOKOM Kota Bogor - Sekolah Menengah Kejuruan Pusat Keunggulan.')"
>

<link rel="icon" type="image/svg+xml" href="{{ asset('IMG/home/logo-infokom.svg') }}?v=1">
<link rel="shortcut icon" type="image/svg+xml" href="{{ asset('IMG/home/logo-infokom.svg') }}?v=1">

<meta name="theme-color" content="#000A1E">

{{-- Token CSRF untuk chatbot (fetch POST) --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta
    property="og:title"
    content="@yield('title', 'SMK INFOKOM Kota Bogor')"
>

<meta
    property="og:description"
    content="@yield('description', 'SMK INFOKOM Kota Bogor - Sekolah Menengah Kejuruan Pusat Keunggulan.')"
>

<meta property="og:type" content="website">


{{-- ============================================================
     PAGE TRANSITION - BOOT (harus di <head>, sebelum CSS lain)
     Tugasnya: langsung menutup layar dengan overlay sebelum
     halaman sempat tergambar (tidak ada "kedip"), membaca
     status transisi dari halaman sebelumnya, dan menyediakan
     data nama halaman untuk teks di tengah loading.
     ============================================================ --}}
@php
    $ptPages = [
        'home'      => ['Beranda',          'Halaman utama SMK INFOKOM Kota Bogor'],
        'profil'    => ['Profil Sekolah',   'Mengenal sejarah dan identitas sekolah kami'],
        'program'   => ['Program Keahlian', 'Jurusan unggulan siap kerja dan kuliah'],
        'fasilitas' => ['Fasilitas',        'Ruang belajar dan laboratorium modern'],
        'galeri'    => ['Galeri',           'Potret kegiatan dan momen terbaik siswa'],
        'berita'    => ['Berita',           'Kabar terbaru dan informasi sekolah'],
        'ppdb'      => ['PPDB',             'Pendaftaran peserta didik baru'],
        'bkk'       => ['BKK',              'Bursa Kerja Khusus untuk lulusan'],
        'mitra'     => ['Mitra Kerja Sama', 'Industri dan perguruan tinggi mitra kami'],
        'kontak'    => ['Lokasi & Kontak',  'Temukan dan hubungi kami dengan mudah'],
        'prestasi'  => ['Prestasi',         'Pencapaian siswa dan sekolah'],
    ];

    $ptMap = [];
    foreach ($ptPages as $routeName => $meta) {
        if (!\Illuminate\Support\Facades\Route::has($routeName)) {
            continue;
        }
        $path = rtrim(parse_url(route($routeName), PHP_URL_PATH) ?: '/', '/') ?: '/';
        $ptMap[$path] = [
            'title' => $meta[0],
            'sub'   => $meta[1],
            'home'  => $routeName === 'home',
        ];
        // Tautan anchor di dropdown Profil
        if ($routeName === 'profil') {
            $ptMap[$path . '#visi-misi'] = [
                'title' => 'Visi & Misi',
                'sub'   => 'Arah dan tujuan SMK INFOKOM ke depan',
                'home'  => false,
            ];
        }
    }
@endphp

<script>
(function () {
  var d = document.documentElement;
  var map = {{ \Illuminate\Support\Js::from($ptMap) }};
  var P = window.aiPT = { map: map, state: null, p: 0, ctrl: false };
  var R = null, lastN = -1, lastS = '';

  function norm(path) { return path.replace(/\/+$/, '') || '/'; }

  P.resolve = function (url) {
    try {
      var u = new URL(url, location.href);
      var path = norm(u.pathname);
      return map[path + u.hash] || map[path] || null;
    } catch (e) { return null; }
  };

  P.firstInfo = function () {
    var i = P.resolve(location.href);
    if (!i) return { eyebrow: 'Memuat halaman', title: 'SMK INFOKOM', sub: 'Kota Bogor' };
    if (i.home) {
      return {
        eyebrow: 'Selamat datang di',
        title: 'SMK INFOKOM',
        sub: 'Kota Bogor · Sekolah Menengah Kejuruan Pusat Keunggulan'
      };
    }
    return { eyebrow: 'Membuka halaman', title: i.title, sub: i.sub };
  };

  function refs() {
    if (R) return R;
    var el = document.getElementById('ptr');
    if (!el) return null;
    R = {
      el: el,
      ring: el.querySelector('.ptr-prog'),
      bar: el.querySelector('.ptr-bar'),
      pct: el.querySelector('.ptr-pct'),
      st: el.querySelector('.ptr-status'),
      eb: el.querySelector('.ptr-eyebrow-text'),
      title: el.querySelector('.ptr-title'),
      sub: el.querySelector('.ptr-sub')
    };
    return R;
  }

  /* Perbarui progress (0..1): ring, bar, persen, dan status */
  P.setP = function (v) {
    var r = refs(); if (!r) return;
    v = Math.max(0, Math.min(1, v));
    P.p = v;
    r.ring.style.strokeDashoffset = String(1 - v);
    r.bar.style.transform = 'scaleX(' + v + ')';
    var n = Math.round(v * 100);
    if (n !== lastN) { lastN = n; r.pct.textContent = n + '%'; }
    var s = v >= 1 ? 'Siap!' : v < .3 ? 'Menghubungkan…' : v < .7 ? 'Memuat konten…' : 'Menyiapkan tampilan…';
    if (s !== lastS) { lastS = s; r.st.textContent = s; }
  };

  /* Isi teks overlay. intro=true -> jalankan animasi masuk teks */
  P.paint = function (info, intro, p) {
    var r = refs(); if (!r) return;
    r.eb.textContent = info.eyebrow || 'Menuju halaman';
    r.sub.textContent = info.sub || '';
    r.title.setAttribute('aria-label', info.title);
    r.title.textContent = '';
    var n = 0;
    String(info.title).split(' ').forEach(function (word, wi, arr) {
      var w = document.createElement('span');
      w.className = 'ptr-w';
      w.setAttribute('aria-hidden', 'true');
      word.split('').forEach(function (c) {
        var s = document.createElement('span');
        s.className = 'ptr-ch';
        s.style.setProperty('--i', n++);
        s.textContent = c;
        w.appendChild(s);
      });
      r.title.appendChild(w);
      if (wi < arr.length - 1) r.title.appendChild(document.createTextNode(' '));
    });
    r.el.classList.toggle('is-intro', !!intro);
    lastN = -1; lastS = '';
    P.setP(p || 0);
  };

  try {
    var reduce = window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (!reduce) {
      var st = null;
      try {
        var raw = sessionStorage.getItem('ai-pt');
        sessionStorage.removeItem('ai-pt');
        if (raw) {
          st = JSON.parse(raw);
          if (!st || Date.now() - st.t > 10000) st = null;
        }
      } catch (e) { st = null; }

      // Tombol Back/Forward: tetap terasa menyambung
      if (!st) {
        var nav = performance.getEntriesByType && performance.getEntriesByType('navigation')[0];
        var info = P.resolve(location.href);
        if (nav && nav.type === 'back_forward' && info) {
          st = { p: .4, eyebrow: 'Kembali ke', title: info.title, sub: info.sub };
        }
      }

      P.state = st;
      d.classList.add('ai-pt');

      // Pengaman: bila script utama gagal dimuat, overlay tidak boleh menutup selamanya
      setTimeout(function () {
        if (!P.ctrl) d.classList.remove('ai-pt');
      }, 8000);
    }
  } catch (e) { /* abaikan */ }
})();
</script>


{{-- Google Font --}}
<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap"
    rel="stylesheet"
>


{{-- Bootstrap 5.3 --}}
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
>


{{-- Bootstrap Icons --}}
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    rel="stylesheet"
>


{{-- CSS Custom --}}
<link
    rel="stylesheet"
    href="{{ asset('CSS/style.css') }}"
>

{{-- CSS Page Transition --}}
<link
    rel="stylesheet"
    href="{{ asset('CSS/page-transition.css') }}"
>

{{-- CSS Chatbot AI --}}
<link
    rel="stylesheet"
    href="{{ asset('CSS/chatbot.css') }}"
>

@stack('styles')


</head>

<body data-page="@yield('page', '')">


{{-- ============================================================
     PAGE TRANSITION OVERLAY
     Satu overlay yang sama dipakai sebelum & sesudah pindah page
     ============================================================ --}}
<div id="ptr" class="ptr" role="status" aria-live="polite" aria-label="Memuat halaman">

    <div class="ptr-bg" aria-hidden="true">
        <div class="ptr-layer ptr-l1"><span class="ptr-glow a"></span></div>
        <div class="ptr-layer ptr-l2"><span class="ptr-glow b"></span></div>

        <div class="ptr-grid-mask"><span class="ptr-grid"></span></div>

        @for ($i = 0; $i < 16; $i++)
            <span class="ptr-dot" style="
                --x: {{ ($i * 37 + 8) % 96 }}%;
                --s: {{ 2 + ($i % 3) }}px;
                --d: {{ 6 + ($i * 7) % 6 }}s;
                --dl: -{{ ($i * 5) % 9 }}s;
                --dx: {{ (($i % 2) ? 1 : -1) * (14 + ($i * 11) % 40) }}px;
            "></span>
        @endfor
    </div>

    <div class="ptr-center">

        <div class="ptr-emblem" aria-hidden="true">
            <div class="ptr-emblem-in">
                <span class="ptr-orbit"></span>
                <span class="ptr-orbit two"></span>
                <span class="ptr-pulse"></span>

                <svg class="ptr-ring" viewBox="0 0 100 100">
                    <defs>
                        <linearGradient id="ptrGrad" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0" stop-color="#F5E707"/>
                            <stop offset="1" stop-color="#FFB800"/>
                        </linearGradient>
                    </defs>
                    <circle class="ptr-track" cx="50" cy="50" r="46"/>
                    <circle class="ptr-prog" cx="50" cy="50" r="46" pathLength="1"/>
                </svg>

                <div class="ptr-core">
                    <img src="{{ asset('IMG/home/logo-infokom.svg') }}" alt="" decoding="async">
                </div>
            </div>
        </div>

        <p class="ptr-eyebrow"><span class="ptr-eyebrow-text">Menuju halaman</span></p>

        <h2 class="ptr-title" id="ptr-title">SMK INFOKOM</h2>

        <p class="ptr-sub"></p>

        <div class="ptr-meter">
            <div class="ptr-bartrack"><span class="ptr-bar"></span></div>
            <div class="ptr-meta">
                <span class="ptr-status">Menghubungkan…</span>
                <span class="ptr-pct">0%</span>
            </div>
        </div>
    </div>

    <div class="ptr-foot" aria-hidden="true">SMK INFOKOM · Kota Bogor</div>
</div>

<script>
/* Isi teks overlay SEKARANG juga (sebelum konten lain di-parse),
   supaya tidak ada teks default yang sempat terlihat. */
(function () {
  var P = window.aiPT;
  if (!P || !document.documentElement.classList.contains('ai-pt')) return;
  var s = P.state;
  if (s) P.paint(s, false, s.p || 0);        // melanjutkan transisi
  else P.paint(P.firstInfo(), true, 0);       // kunjungan pertama
})();
</script>


{{-- Navbar --}}
@include('components.navbar')


{{-- Main Content --}}
<main id="main">

    @yield('content')

</main>


{{-- Footer --}}
@include('components.footer')


{{-- Chatbot AI (widget kanan bawah) --}}
@include('components.chatbot')


{{-- Bootstrap JavaScript --}}
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>


{{-- JavaScript Custom --}}
<script src="{{ asset('JS/script.js') }}"></script>

{{-- JavaScript Chatbot AI --}}
<script src="{{ asset('JS/chatbot.js') }}"></script>

@stack('scripts')


</body>

</html>