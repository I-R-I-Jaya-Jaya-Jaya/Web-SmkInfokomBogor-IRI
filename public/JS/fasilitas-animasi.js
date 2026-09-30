  /* ==========================================================
     7. FILTER FASILITAS — khusus halaman Fasilitas
     ========================================================== */
  function initFasilitasFilter() {
    var tabs = Array.prototype.slice.call(document.querySelectorAll('.fas-tab'));
    var cards = Array.prototype.slice.call(document.querySelectorAll('.fas-card'));
    var status = document.getElementById('filter-status');
    if (!tabs.length || !cards.length) return;

    // Hitung jumlah kartu per kategori otomatis
    tabs.forEach(function (tab) {
      var f = tab.dataset.filter;
      var total = f === 'all'
        ? cards.length
        : cards.filter(function (c) { return c.dataset.category === f; }).length;
      var badge = tab.querySelector('.fas-tab__count');
      if (badge) badge.textContent = total;
    });

    function apply(filter, focusTab) {
      var visible = 0;

      cards.forEach(function (card) {
        var show = filter === 'all' || card.dataset.category === filter;
        card.hidden = !show;
        if (show) {
          visible++;
          card.classList.remove('is-entering');
          void card.offsetWidth; // restart animasi
          card.classList.add('is-entering');
        }
      });

      tabs.forEach(function (tab) {
        var on = tab.dataset.filter === filter;
        tab.classList.toggle('is-active', on);
        tab.setAttribute('aria-selected', String(on));
        tab.tabIndex = on ? 0 : -1;
        if (on) {
          if (focusTab) tab.focus();
          tab.scrollIntoView({
            behavior: reduced ? 'auto' : 'smooth',
            inline: 'center',
            block: 'nearest'
          });
        }
      });

      if (status) status.textContent = 'Menampilkan ' + visible + ' fasilitas.';
    }

    tabs.forEach(function (tab, i) {
      tab.addEventListener('click', function () { apply(tab.dataset.filter, false); });

      // Panah kiri/kanan antar tab
      tab.addEventListener('keydown', function (e) {
        var next = null;
        if (e.key === 'ArrowRight') next = tabs[(i + 1) % tabs.length];
        if (e.key === 'ArrowLeft')  next = tabs[(i - 1 + tabs.length) % tabs.length];
        if (e.key === 'Home')       next = tabs[0];
        if (e.key === 'End')        next = tabs[tabs.length - 1];
        if (next) {
          e.preventDefault();
          apply(next.dataset.filter, true);
        }
      });
    });

    // Tautan langsung, contoh: /fasilitas?kategori=studio
    var initial = new URLSearchParams(window.location.search).get('kategori');
    if (initial && tabs.some(function (t) { return t.dataset.filter === initial; })) {
      apply(initial, false);
    }

    // Kalau foto belum ada / gagal dimuat, tampilkan gradasi
    document.querySelectorAll('img[data-fallback]').forEach(function (img) {
      function fallback() {
        var media = img.closest('.fas-card__media');
        if (media) media.classList.add('img-fallback');
      }
      if (img.complete && img.naturalWidth === 0) fallback();
      else img.addEventListener('error', fallback, { once: true });
    });
  }