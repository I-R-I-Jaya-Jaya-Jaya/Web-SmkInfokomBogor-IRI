@extends('layouts.app')

@section('title')
    Berita & Kabar Sekolah — SMK INFOKOM Kota Bogor
@endsection

@section('description')
    Kabar dan berita terkini seputar prestasi siswa, info akademik, PPDB, dan kemitraan industri SMK INFOKOM Kota Bogor.
@endsection

@section('page', 'berita')

@push('styles')
<link rel="stylesheet" href="{{ asset('CSS/berita.css') }}">
@endpush

@section('content')


<main id="main" class="berita-page">

  <!-- ============ HERO ============ -->
  <section class="berita-hero">
    <div class="berita-container">

      <div class="berita-hero-top">
        <span class="berita-update-info">
          Update Terakhir: <strong>Hari ini, 08.30 WIB</strong>
        </span>
      </div>

      <h1 class="berita-hero-title">
        Kabar &amp; Berita Sekolah Terkini
      </h1>

      <p class="berita-hero-desc">
        Pusat informasi resmi, terobosan inovasi teknologi, torehan prestasi
        membanggakan, dan wawasan karir vokasi dari civitas akademika
        SMK INFOKOM Kota Bogor.
      </p>

      <form action="#" method="GET" class="berita-search-form">
        <img src="IMG/icon-search.svg" alt="" class="berita-search-icon">

        <input
          type="text"
          name="q"
          class="berita-search-input"
          placeholder="Cari berita, sertifikasi, kejuaraan, atau tips karir..."
        >

        <button type="submit" class="berita-search-btn">
          Telusuri
        </button>
      </form>

    </div>
  </section>


<section class="berita-filter-section">
  <div class="berita-container">
    <div class="berita-filter-list">
      <a href="{{ url('berita') }}" class="berita-filter-chip active">Semua Topik</a>
      <a href="{{ url('berita?kategori=prestasi') }}" class="berita-filter-chip">Prestasi</a>
      <a href="{{ url('berita?kategori=akademik') }}" class="berita-filter-chip">Akademik</a>
      <a href="{{ url('berita?kategori=ppdb') }}" class="berita-filter-chip">PPDB</a>
      <a href="{{ url('berita?kategori=kemitraan') }}" class="berita-filter-chip">Kemitraan Industri</a>
      <a href="{{ url('berita?kategori=kegiatan') }}" class="berita-filter-chip">Kegiatan Sekolah</a>
    </div>
  </div>
</section>


<div class="berita-container berita-layout">

  <!-- ============ KONTEN UTAMA ============ -->
  <div class="berita-main">

    <!-- ============ FEATURED ============ -->
    <article class="berita-featured">

      <div class="berita-featured-image">

        <span class="berita-badge berita-badge-utama">
          BERITA UTAMA
        </span>

        <span class="berita-badge berita-badge-kategori">
          Prestasi
        </span>

        <img
          src="{{ asset('IMG/berita/component/juara1web.png') }}"
          alt="Prestasi Juara 1 Web SMK INFOKOM"
          loading="lazy"
        >

      </div>


      <div class="berita-featured-content">

        <div class="berita-meta">

          <span class="berita-meta-item">
            <img
              src="{{ asset('IMG/berita/icon-calendar.svg') }}"
              alt=""
            >
            28 September 2025
          </span>

          <span class="berita-meta-dot">•</span>

          <span class="berita-meta-item">
            <img
              src="{{ asset('IMG/berita/icon-clock.svg') }}"
              alt=""
            >
            4 Menit Baca
          </span>

        </div>


        <h2 class="berita-featured-title">
          <a href="#">
            Siswa SMK INFOKOM Raih Juara 1 Kompetisi Web
          </a>
        </h2>


        <p class="berita-featured-excerpt">
          Prestasi membanggakan kembali diraih siswa SMK INFOKOM
          melalui kompetisi pengembangan website. Pencapaian ini
          menjadi bukti kreativitas dan kompetensi siswa di bidang
          teknologi informasi.
        </p>


        <div class="berita-featured-footer">

          <div class="berita-author">

            <span class="berita-author-avatar">
              AD
            </span>

            <span class="berita-author-info">
              <strong>Admin Humas</strong>
              <small>Redaksi</small>
            </span>

          </div>


          <a href="#" class="berita-link-baca">
            Baca Selengkapnya

            <img
              src="{{ asset('IMG/berita/icon-arrow-right.svg') }}"
              alt=""
            >
          </a>

        </div>

      </div>

    </article>


    <!-- ============ HEADER PUBLIKASI ============ -->
    <div class="berita-list-header">

      <h3>
        <span class="dot-yellow-bar"></span>
        Daftar Publikasi Terbaru
      </h3>

      <span class="berita-list-count">
        Menampilkan 6 dari 24 artikel
      </span>

    </div>


    <!-- ============ GRID BERITA ============ -->
    <div class="berita-grid">


      <!-- ================= CARD 1 ================= -->
      <article class="berita-card">

        <div class="berita-card-image">

          <span class="berita-card-badge">
            Prestasi
          </span>

          <img
            src="{{ asset('IMG/berita/component/juara1mlbb.jpeg') }}"
            alt="Juara 1 Mobile Legends SMK INFOKOM"
            loading="lazy"
          >

        </div>


        <div class="berita-card-content">

          <span class="berita-card-date">

            <img
              src="{{ asset('IMG/berita/icon-calendar.svg') }}"
              alt=""
            >

            25 September 2025

          </span>


          <h4 class="berita-card-title">
            <a href="#">
              Tim Esports SMK INFOKOM Raih Juara 1 MLBB
            </a>
          </h4>


          <p class="berita-card-excerpt">
            Tim esports SMK INFOKOM berhasil meraih juara pertama
            dalam kompetisi Mobile Legends dan membawa nama sekolah
            di ajang perlombaan antarsekolah.
          </p>


          <div class="berita-card-footer">

            <span class="berita-card-views">

              <img
                src="{{ asset('IMG/berita/icon-eye.svg') }}"
                alt=""
              >

              342 views

            </span>


            <a href="#" class="berita-card-link">

              Rincian

              <img
                src="{{ asset('IMG/berita/icon-arrow-right.svg') }}"
                alt=""
              >

            </a>

          </div>

        </div>

      </article>



      <!-- ================= CARD 2 ================= -->
      <article class="berita-card">

        <div class="berita-card-image">

          <span class="berita-card-badge">
            Prestasi
          </span>

          <img
            src="{{ asset('IMG/berita/component/juara1mlbb2.jpeg') }}"
            alt="Prestasi Mobile Legends SMK INFOKOM"
            loading="lazy"
          >

        </div>


        <div class="berita-card-content">

          <span class="berita-card-date">

            <img
              src="{{ asset('IMG/berita/icon-calendar.svg') }}"
              alt=""
            >

            20 September 2025

          </span>


          <h4 class="berita-card-title">
            <a href="#">
              Kembali Torehkan Prestasi di Kompetisi MLBB
            </a>
          </h4>


          <p class="berita-card-excerpt">
            Prestasi siswa kembali hadir dari bidang esports.
            Tim SMK INFOKOM menunjukkan kemampuan, kekompakan,
            dan strategi dalam pertandingan Mobile Legends.
          </p>


          <div class="berita-card-footer">

            <span class="berita-card-views">

              <img
                src="{{ asset('IMG/berita/icon-eye.svg') }}"
                alt=""
              >

              1.280 views

            </span>


            <a href="#" class="berita-card-link">

              Rincian

              <img
                src="{{ asset('IMG/berita/icon-arrow-right.svg') }}"
                alt=""
              >

            </a>

          </div>

        </div>

      </article>



      <!-- ================= CARD 3 ================= -->
      <article class="berita-card">

        <div class="berita-card-image">

          <span class="berita-card-badge">
            Kegiatan
          </span>

          <img
            src="{{ asset('IMG/berita/component/batiknasional.png') }}"
            alt="Kegiatan Hari Batik Nasional"
            loading="lazy"
          >

        </div>


        <div class="berita-card-content">

          <span class="berita-card-date">

            <img
              src="{{ asset('IMG/berita/icon-calendar.svg') }}"
              alt=""
            >

            15 September 2025

          </span>


          <h4 class="berita-card-title">
            <a href="#">
              SMK INFOKOM Meriahkan Peringatan Hari Batik Nasional
            </a>
          </h4>


          <p class="berita-card-excerpt">
            Warga sekolah turut memperingati Hari Batik Nasional
            sebagai bentuk apresiasi terhadap budaya dan warisan
            bangsa Indonesia.
          </p>


          <div class="berita-card-footer">

            <span class="berita-card-views">

              <img
                src="{{ asset('IMG/berita/icon-eye.svg') }}"
                alt=""
              >

              876 views

            </span>


            <a href="#" class="berita-card-link">

              Rincian

              <img
                src="{{ asset('IMG/berita/icon-arrow-right.svg') }}"
                alt=""
              >

            </a>

          </div>

        </div>

      </article>



      <!-- ================= CARD 4 ================= -->
      <article class="berita-card">

        <div class="berita-card-image">

          <span class="berita-card-badge">
            Kemitraan
          </span>

          <img
            src="{{ asset('IMG/berita/component/gotojapan.png') }}"
            alt="Program Go To Japan"
            loading="lazy"
          >

        </div>


        <div class="berita-card-content">

          <span class="berita-card-date">

            <img
              src="{{ asset('IMG/berita/icon-calendar.svg') }}"
              alt=""
            >

            10 September 2025

          </span>


          <h4 class="berita-card-title">
            <a href="#">
              Program Go To Japan Buka Wawasan Siswa ke Dunia Internasional
            </a>
          </h4>


          <p class="berita-card-excerpt">
            Program Go To Japan menjadi salah satu kegiatan yang
            memperkenalkan siswa pada pengalaman belajar, budaya,
            dan lingkungan internasional.
          </p>


          <div class="berita-card-footer">

            <span class="berita-card-views">

              <img
                src="{{ asset('IMG/berita/icon-eye.svg') }}"
                alt=""
              >

              654 views

            </span>


            <a href="#" class="berita-card-link">

              Rincian

              <img
                src="{{ asset('IMG/berita/icon-arrow-right.svg') }}"
                alt=""
              >

            </a>

          </div>

        </div>

      </article>



      <!-- ================= CARD 5 ================= -->
      <article class="berita-card">

        <div class="berita-card-image">

          <span class="berita-card-badge">
            Kegiatan
          </span>

          <img
            src="{{ asset('IMG/berita/component/maulidnabi.png') }}"
            alt="Peringatan Maulid Nabi Muhammad SAW"
            loading="lazy"
          >

        </div>


        <div class="berita-card-content">

          <span class="berita-card-date">

            <img
              src="{{ asset('IMG/berita/icon-calendar.svg') }}"
              alt=""
            >

            05 September 2025

          </span>


          <h4 class="berita-card-title">
            <a href="#">
              Peringatan Maulid Nabi Muhammad SAW di SMK INFOKOM
            </a>
          </h4>


          <p class="berita-card-excerpt">
            Keluarga besar SMK INFOKOM mengikuti kegiatan peringatan
            Maulid Nabi Muhammad SAW sebagai momentum memperkuat
            nilai keagamaan dan kebersamaan warga sekolah.
          </p>


          <div class="berita-card-footer">

            <span class="berita-card-views">

              <img
                src="{{ asset('IMG/berita/icon-eye.svg') }}"
                alt=""
              >

              921 views

            </span>


            <a href="#" class="berita-card-link">

              Rincian

              <img
                src="{{ asset('IMG/berita/icon-arrow-right.svg') }}"
                alt=""
              >

            </a>

          </div>

        </div>

      </article>



      <!-- ================= CARD 6 ================= -->
      <article class="berita-card">

        <div class="berita-card-image">

          <span class="berita-card-badge">
            Kegiatan Sekolah
          </span>

          <img
            src="{{ asset('IMG/berita/component/poster-pancasila.png') }}"
            alt="Kegiatan Pancasila"
            loading="lazy"
          >

        </div>


        <div class="berita-card-content">

          <span class="berita-card-date">

            <img
              src="{{ asset('IMG/berita/icon-calendar.svg') }}"
              alt=""
            >

            01 September 2025

          </span>


          <h4 class="berita-card-title">
            <a href="#">
              Menanamkan Nilai Pancasila dalam Kehidupan Sekolah
            </a>
          </h4>


          <p class="berita-card-excerpt">
            Kegiatan sekolah menjadi bagian dari upaya menanamkan
            nilai-nilai Pancasila kepada siswa melalui pembelajaran
            dan aktivitas positif di lingkungan sekolah.
          </p>


          <div class="berita-card-footer">

            <span class="berita-card-views">

              <img
                src="{{ asset('IMG/berita/icon-eye.svg') }}"
                alt=""
              >

              1.105 views

            </span>


            <a href="#" class="berita-card-link">

              Rincian

              <img
                src="{{ asset('IMG/berita/icon-arrow-right.svg') }}"
                alt=""
              >

            </a>

          </div>

        </div>

      </article>

    </div>



    <!-- ============ PAGINATION ============ -->
    <div class="berita-pagination">

      <a href="#" class="berita-page-nav">

        <img
          src="{{ asset('IMG/berita/icon-chevron-left.svg') }}"
          alt=""
        >

        Sebelumnya

      </a>


      <div class="berita-page-numbers">

        <span class="berita-page-number active">
          1
        </span>

        <a href="#" class="berita-page-number">
          2
        </a>

        <a href="#" class="berita-page-number">
          3
        </a>

        <span class="berita-page-ellipsis">
          ...
        </span>

        <a href="#" class="berita-page-number">
          7
        </a>

      </div>


      <a href="#" class="berita-page-nav">

        Selanjutnya

        <img
          src="{{ asset('IMG/berita/icon-chevron-right.svg') }}"
          alt=""
        >

      </a>

    </div>

  </div>



  <!-- ============ SIDEBAR ============ -->
  <aside class="berita-sidebar">


    <!-- PAPAN PENGUMUMAN -->
    <div class="sidebar-card">

      <div class="sidebar-card-header">

        <h5>

          <img
            src="{{ asset('IMG/icon-pengumuman.svg') }}"
            alt=""
          >

          Papan Pengumuman

        </h5>

        <span class="sidebar-badge-penting">
          PENTING
        </span>

      </div>


      <ul class="sidebar-pengumuman-list">


        <li>

          <div class="sidebar-pengumuman-meta">

            <span class="dot-red"></span>

            <span class="sidebar-pengumuman-status">
              Pengumuman
            </span>

            <span class="sidebar-pengumuman-tanggal">
              28 Sep 2025
            </span>

          </div>

          <p>
            Jadwal Ujian Tengah Semester Ganjil 2025/2026
          </p>

        </li>


        <li>

          <div class="sidebar-pengumuman-meta">

            <span class="dot-red"></span>

            <span class="sidebar-pengumuman-status">
              PPDB
            </span>

            <span class="sidebar-pengumuman-tanggal">
              20 Sep 2025
            </span>

          </div>

          <p>
            Pendaftaran PPDB Gelombang 1 dibuka mulai 1 September
          </p>

        </li>


        <li>

          <div class="sidebar-pengumuman-meta">

            <span class="dot-red"></span>

            <span class="sidebar-pengumuman-status">
              Kegiatan
            </span>

            <span class="sidebar-pengumuman-tanggal">
              15 Sep 2025
            </span>

          </div>

          <p>
            Workshop UI/UX Design bersama praktisi industri
          </p>

        </li>

      </ul>

    </div>


    <!-- CTA PPDB -->
    <a
      href="{{ url('ppdb') }}"
      class="sidebar-cta-button"
    >
      Daftar Trial Class Gratis
    </a>

  </aside>

</div>

  <!-- ============ NEWSLETTER CTA ============ -->
  <section class="berita-newsletter">
    <div class="berita-container berita-newsletter-inner">

      <div class="berita-newsletter-text">
        <p class="berita-eyebrow-dark">TETAP TERHUBUNG</p>

        <h3>
          Dapatkan Informasi Beasiswa &amp; Kegiatan Langsung di Email Anda
        </h3>

        <p>
          Berlangganan newsletter bulanan SMK INFOKOM untuk update turnamen,
          pembukaan PPDB, dan jadwal sertifikasi IT.
        </p>
      </div>

      <form action="#" method="POST" class="berita-newsletter-form">
        <input
          type="email"
          name="email"
          class="berita-newsletter-input"
          placeholder="Masukkan alamat email Anda"
          required
        >

        <button type="submit" class="berita-newsletter-btn">
          Langganan
        </button>
      </form>

    </div>
  </section>

</main>


@push('scripts')
<script src="{{ asset('JS/berita-animasi.js') }}"></script>
@endpush
@endsection