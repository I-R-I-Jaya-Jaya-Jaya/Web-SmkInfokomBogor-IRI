@extends('layouts.app')

@section('title')
    Berita & Kabar Kampus — SMK INFOKOM Kota Bogor
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
        Kabar &amp; Berita Kampus Terkini
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


  <!-- ============ FILTER KATEGORI ============ -->
  <section class="berita-filter-section">
    <div class="berita-container">
      <div class="berita-filter-list">
        <a href="berita.html" class="berita-filter-chip active">Semua Topik</a>
        <a href="berita.html?kategori=prestasi" class="berita-filter-chip">Prestasi</a>
        <a href="berita.html?kategori=akademik" class="berita-filter-chip">Akademik</a>
        <a href="berita.html?kategori=ppdb" class="berita-filter-chip">PPDB</a>
        <a href="berita.html?kategori=kemitraan" class="berita-filter-chip">Kemitraan Industri</a>
        <a href="berita.html?kategori=kegiatan" class="berita-filter-chip">Kegiatan Sekolah</a>
      </div>
    </div>
  </section>


  <div class="berita-container berita-layout">

    <!-- ============ KONTEN UTAMA ============ -->
    <div class="berita-main">

      <!-- FEATURED -->
      <article class="berita-featured">

        <div class="berita-featured-image">
          <span class="berita-badge berita-badge-utama">BERITA UTAMA</span>
          <span class="berita-badge berita-badge-kategori">Prestasi</span>

          <img
            src="IMG/berita/contoh-featured.jpg"
            alt="Juara LKS Provinsi"
            loading="lazy"
          >
        </div>

        <div class="berita-featured-content">

          <div class="berita-meta">
            <span class="berita-meta-item">
              <img src="IMG/berita/icon-calendar.svg" alt="">
              28 September 2025
            </span>

            <span class="berita-meta-dot">•</span>

            <span class="berita-meta-item">
              <img src="IMG/berita/icon-clock.svg" alt="">
              4 Menit Baca
            </span>
          </div>

          <h2 class="berita-featured-title">
            <a href="#">Tim RPL SMK INFOKOM Raih Juara 1 LKS Provinsi Jawa Barat 2025</a>
          </h2>

          <p class="berita-featured-excerpt">
            Siswa jurusan Rekayasa Perangkat Lunak berhasil meraih medali emas
            pada Lomba Kompetensi Siswa tingkat Provinsi Jawa Barat kategori
            Web Technologies. Prestasi ini menambah deretan juara nasional sekolah.
          </p>

          <div class="berita-featured-footer">

            <div class="berita-author">
              <span class="berita-author-avatar">AD</span>

              <span class="berita-author-info">
                <strong>Admin Humas</strong>
                <small>Redaksi</small>
              </span>
            </div>

            <a href="#" class="berita-link-baca">
              Baca Selengkapnya
              <img src="IMG/berita/icon-arrow-right.svg" alt="">
            </a>

          </div>

        </div>

      </article>


      <!-- DAFTAR PUBLIKASI -->
      <div class="berita-list-header">
        <h3>
          <span class="dot-yellow-bar"></span>
          Daftar Publikasi Terbaru
        </h3>

        <span class="berita-list-count">
          Menampilkan 6 dari 24 artikel
        </span>
      </div>

      <div class="berita-grid">

        <!-- Card 1 -->
        <article class="berita-card">
          <div class="berita-card-image">
            <span class="berita-card-badge">Akademik</span>
            <img src="IMG/berita/contoh-1.jpg" alt="Workshop AI" loading="lazy">
          </div>

          <div class="berita-card-content">
            <span class="berita-card-date">
              <img src="IMG/berita/icon-calendar.svg" alt="">
              25 September 2025
            </span>

            <h4 class="berita-card-title">
              <a href="#">Workshop Artificial Intelligence untuk Siswa RPL &amp; TKJ</a>
            </h4>

            <p class="berita-card-excerpt">
              Siswa mengikuti pelatihan dasar machine learning dan penerapan AI
              dalam proyek aplikasi web modern bersama mentor industri.
            </p>

            <div class="berita-card-footer">
              <span class="berita-card-views">
                <img src="IMG/berita/icon-eye.svg" alt="">
                342 views
              </span>

              <a href="#" class="berita-card-link">
                Rincian
                <img src="IMG/berita/icon-arrow-right.svg" alt="">
              </a>
            </div>
          </div>
        </article>

        <!-- Card 2 -->
        <article class="berita-card">
          <div class="berita-card-image">
            <span class="berita-card-badge">PPDB</span>
            <img src="IMG/berita/contoh-2.jpg" alt="PPDB 2026" loading="lazy">
          </div>

          <div class="berita-card-content">
            <span class="berita-card-date">
              <img src="IMG/berita/icon-calendar.svg" alt="">
              20 September 2025
            </span>

            <h4 class="berita-card-title">
              <a href="#">PPDB Tahun Ajaran 2026/2027 Gelombang 1 Resmi Dibuka</a>
            </h4>

            <p class="berita-card-excerpt">
              Pendaftaran siswa baru kelas X dibuka mulai 1 September 2026
              untuk empat program keahlian: TKJ, RPL, Multimedia, dan PSPT.
            </p>

            <div class="berita-card-footer">
              <span class="berita-card-views">
                <img src="IMG/berita/icon-eye.svg" alt="">
                1.280 views
              </span>

              <a href="#" class="berita-card-link">
                Rincian
                <img src="IMG/berita/icon-arrow-right.svg" alt="">
              </a>
            </div>
          </div>
        </article>

        <!-- Card 3 -->
        <article class="berita-card">
          <div class="berita-card-image">
            <span class="berita-card-badge">Kemitraan</span>
            <img src="IMG/berita/contoh-3.jpg" alt="MoU Industri" loading="lazy">
          </div>

          <div class="berita-card-content">
            <span class="berita-card-date">
              <img src="IMG/berita/icon-calendar.svg" alt="">
              15 September 2025
            </span>

            <h4 class="berita-card-title">
              <a href="#">Penandatanganan MoU dengan 5 Perusahaan Teknologi</a>
            </h4>

            <p class="berita-card-excerpt">
              SMK INFOKOM memperkuat kemitraan industri untuk program magang
              dan penempatan kerja lulusan di bidang IT dan multimedia.
            </p>

            <div class="berita-card-footer">
              <span class="berita-card-views">
                <img src="IMG/berita/icon-eye.svg" alt="">
                876 views
              </span>

              <a href="#" class="berita-card-link">
                Rincian
                <img src="IMG/berita/icon-arrow-right.svg" alt="">
              </a>
            </div>
          </div>
        </article>

        <!-- Card 4 -->
        <article class="berita-card">
          <div class="berita-card-image">
            <span class="berita-card-badge">Kegiatan</span>
            <img src="IMG/berita/contoh-4.jpg" alt="Class Meeting" loading="lazy">
          </div>

          <div class="berita-card-content">
            <span class="berita-card-date">
              <img src="IMG/berita/icon-calendar.svg" alt="">
              10 September 2025
            </span>

            <h4 class="berita-card-title">
              <a href="#">Class Meeting &amp; Pentas Seni Akhir Semester</a>
            </h4>

            <p class="berita-card-excerpt">
              Rangkaian kegiatan class meeting menampilkan bakat siswa
              di bidang seni, olahraga, dan kreativitas digital.
            </p>

            <div class="berita-card-footer">
              <span class="berita-card-views">
                <img src="IMG/berita/icon-eye.svg" alt="">
                654 views
              </span>

              <a href="#" class="berita-card-link">
                Rincian
                <img src="IMG/berita/icon-arrow-right.svg" alt="">
              </a>
            </div>
          </div>
        </article>

        <!-- Card 5 -->
        <article class="berita-card">
          <div class="berita-card-image">
            <span class="berita-card-badge">Prestasi</span>
            <img src="IMG/berita/contoh-5.jpg" alt="Film Festival" loading="lazy">
          </div>

          <div class="berita-card-content">
            <span class="berita-card-date">
              <img src="IMG/berita/icon-calendar.svg" alt="">
              05 September 2025
            </span>

            <h4 class="berita-card-title">
              <a href="#">Siswa PSPT Raih Juara 2 Festival Film Pelajar Nasional</a>
            </h4>

            <p class="berita-card-excerpt">
              Karya film pendek siswa jurusan Produksi Siaran Program Televisi
              berhasil meraih juara 2 kategori fiksi di tingkat nasional.
            </p>

            <div class="berita-card-footer">
              <span class="berita-card-views">
                <img src="IMG/berita/icon-eye.svg" alt="">
                921 views
              </span>

              <a href="#" class="berita-card-link">
                Rincian
                <img src="IMG/berita/icon-arrow-right.svg" alt="">
              </a>
            </div>
          </div>
        </article>

        <!-- Card 6 -->
        <article class="berita-card">
          <div class="berita-card-image">
            <span class="berita-card-badge">Akademik</span>
            <img src="IMG/berita/contoh-6.jpg" alt="Sertifikasi" loading="lazy">
          </div>

          <div class="berita-card-content">
            <span class="berita-card-date">
              <img src="IMG/berita/icon-calendar.svg" alt="">
              01 September 2025
            </span>

            <h4 class="berita-card-title">
              <a href="#">120 Siswa Lulus Sertifikasi BNSP &amp; MikroTik MTCNA</a>
            </h4>

            <p class="berita-card-excerpt">
              Program sertifikasi kompetensi resmi berhasil dilalui siswa
              TKJ dan RPL sebagai bekal memasuki dunia kerja.
            </p>

            <div class="berita-card-footer">
              <span class="berita-card-views">
                <img src="IMG/berita/icon-eye.svg" alt="">
                1.105 views
              </span>

              <a href="#" class="berita-card-link">
                Rincian
                <img src="IMG/berita/icon-arrow-right.svg" alt="">
              </a>
            </div>
          </div>
        </article>

      </div>


      <!-- PAGINATION (statis) -->
      <div class="berita-pagination">
        <a href="#" class="berita-page-nav">
          <img src="IMG/berita/icon-chevron-left.svg" alt="">
          Sebelumnya
        </a>

        <div class="berita-page-numbers">
          <span class="berita-page-number active">1</span>
          <a href="#" class="berita-page-number">2</a>
          <a href="#" class="berita-page-number">3</a>
          <span class="berita-page-ellipsis">...</span>
          <a href="#" class="berita-page-number">7</a>
        </div>

        <a href="#" class="berita-page-nav">
          Selanjutnya
          <img src="IMG/berita/icon-chevron-right.svg" alt="">
        </a>
      </div>

    </div>


    <!-- ============ SIDEBAR ============ -->
    <aside class="berita-sidebar">

      <!-- PAPAN PENGUMUMAN -->
      <div class="sidebar-card">
        <div class="sidebar-card-header">
          <h5>
            <img src="IMG/icon-pengumuman.svg" alt="">
            Papan Pengumuman
          </h5>
          <span class="sidebar-badge-penting">PENTING</span>
        </div>

        <ul class="sidebar-pengumuman-list">
          <li>
            <div class="sidebar-pengumuman-meta">
              <span class="dot-red"></span>
              <span class="sidebar-pengumuman-status">Pengumuman</span>
              <span class="sidebar-pengumuman-tanggal">28 Sep 2025</span>
            </div>
            <p>Jadwal Ujian Tengah Semester Ganjil 2025/2026</p>
          </li>

          <li>
            <div class="sidebar-pengumuman-meta">
              <span class="dot-red"></span>
              <span class="sidebar-pengumuman-status">PPDB</span>
              <span class="sidebar-pengumuman-tanggal">20 Sep 2025</span>
            </div>
            <p>Pendaftaran PPDB Gelombang 1 dibuka mulai 1 September</p>
          </li>

          <li>
            <div class="sidebar-pengumuman-meta">
              <span class="dot-red"></span>
              <span class="sidebar-pengumuman-status">Kegiatan</span>
              <span class="sidebar-pengumuman-tanggal">15 Sep 2025</span>
            </div>
            <p>Workshop UI/UX Design bersama praktisi industri</p>
          </li>
        </ul>
      </div>

      <a href="ppdb.html" class="sidebar-cta-button">
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