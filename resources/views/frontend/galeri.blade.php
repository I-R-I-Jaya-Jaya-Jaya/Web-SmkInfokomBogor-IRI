@extends('layouts.app')

@section('title')
    Galeri Kampus & Aktivitas Siswa — SMK INFOKOM Kota Bogor
@endsection

@section('description')
    Dokumentasi kegiatan praktikum, prestasi, kunjungan industri, dan keseharian siswa SMK INFOKOM Kota Bogor.
@endsection

@section('page', 'galeri')

@push('styles')
<link rel="stylesheet" href="{{ asset('CSS/galeri.css') }}">
@endpush

@section('content')

<main id="main" class="galeri-page">

  <!-- ============ HERO ============ -->
  <section class="galeri-hero">
    <div class="galeri-container galeri-hero-inner">

      <div class="galeri-hero-text">
        <h1 class="galeri-hero-title">
          Galeri Kampus &amp; Aktivitas Siswa
        </h1>

        <p class="galeri-hero-desc">
          Momen-momen inspiratif, karya inovasi siswa, dan keseharian civitas
          akademika SMK INFOKOM dalam membentuk calon jawara teknologi masa depan.
        </p>
      </div>

      <div class="galeri-hero-stats">
        <div class="galeri-stat">
          <strong>500+</strong>
          <span>DOKUMENTASI</span>
        </div>

        <div class="galeri-stat">
          <strong>50+</strong>
          <span>LIPUTAN JUARA</span>
        </div>

        <div class="galeri-stat galeri-stat-yellow">
          <strong>100%</strong>
          <span>KARYA ORISINIL</span>
        </div>
      </div>

    </div>
  </section>


  <!-- ============ FILTER KATEGORI ============ -->
  <section class="galeri-filter-section">
    <div class="galeri-container">

      <div class="galeri-filter-list">
        <a href="galeri.html" class="galeri-filter-chip active">Semua</a>
        <a href="galeri.html?kategori=praktikum" class="galeri-filter-chip">Praktikum</a>
        <a href="galeri.html?kategori=prestasi" class="galeri-filter-chip">Prestasi</a>
        <a href="galeri.html?kategori=kunjungan" class="galeri-filter-chip">Kunjungan Industri</a>
        <a href="galeri.html?kategori=kegiatan" class="galeri-filter-chip">Kegiatan Sekolah</a>
        <a href="galeri.html?kategori=karya" class="galeri-filter-chip">Karya Siswa</a>
      </div>

      <p class="galeri-filter-count">
        <img src="IMG/galeri/icon-grid.svg" alt="">
        Menampilkan 24 Koleksi
      </p>

    </div>
  </section>


  <!-- ============ GRID GALERI ============ -->
  <section class="galeri-grid-section">
    <div class="galeri-container">

      <!-- Featured (besar) -->
      <div class="galeri-grid galeri-grid-featured">
        <article class="galeri-card galeri-card-lg">
          <div class="galeri-card-image">
            <span class="galeri-badge">Praktikum</span>
            <img src="IMG/galeri/featured-1.jpg" alt="Praktikum Lab TKJ" loading="lazy">
          </div>
          <div class="galeri-card-content">
            <h3>Praktikum Konfigurasi Jaringan Enterprise</h3>
            <p>Siswa jurusan TKJ melakukan instalasi dan konfigurasi router MikroTik di laboratorium jaringan.</p>
          </div>
        </article>

        <article class="galeri-card galeri-card-lg">
          <div class="galeri-card-image">
            <span class="galeri-badge">Prestasi</span>
            <img src="IMG/galeri/featured-2.jpg" alt="Juara LKS" loading="lazy">
          </div>
          <div class="galeri-card-content">
            <h3>Juara 1 LKS Provinsi Jawa Barat</h3>
            <p>Tim RPL SMK INFOKOM meraih medali emas pada Lomba Kompetensi Siswa tingkat provinsi.</p>
          </div>
        </article>
      </div>

      <!-- Grid 3 kolom -->
      <div class="galeri-grid galeri-grid-3">
        <article class="galeri-card">
          <div class="galeri-card-image">
            <span class="galeri-badge">Kegiatan Sekolah</span>
            <img src="IMG/galeri/galeri-1.jpg" alt="Upacara Bendera" loading="lazy">
          </div>
          <div class="galeri-card-content">
            <h3>Upacara Bendera Senin Pagi</h3>
            <p>Kegiatan rutin penanaman disiplin dan nasionalisme.</p>
          </div>
        </article>

        <article class="galeri-card">
          <div class="galeri-card-image">
            <span class="galeri-badge">Karya Siswa</span>
            <img src="IMG/galeri/galeri-2.jpg" alt="Karya Multimedia" loading="lazy">
          </div>
          <div class="galeri-card-content">
            <h3>Produksi Video Sinematik Siswa</h3>
            <p>Hasil karya jurusan Multimedia untuk kompetisi film pendek.</p>
          </div>
        </article>

        <article class="galeri-card">
          <div class="galeri-card-image">
            <span class="galeri-badge">Kunjungan Industri</span>
            <img src="IMG/galeri/galeri-3.jpg" alt="Kunjungan Industri" loading="lazy">
          </div>
          <div class="galeri-card-content">
            <h3>Kunjungan ke Data Center Telkom</h3>
            <p>Siswa melihat langsung infrastruktur cloud dan jaringan skala nasional.</p>
          </div>
        </article>
      </div>

      <div class="galeri-grid galeri-grid-3">
        <article class="galeri-card">
          <div class="galeri-card-image">
            <span class="galeri-badge">Praktikum</span>
            <img src="IMG/galeri/galeri-4.jpg" alt="Studio TV" loading="lazy">
          </div>
          <div class="galeri-card-content">
            <h3>Latihan Live Broadcasting Studio</h3>
            <p>Siswa PSPT berlatih switcher multi-kamera dan lighting studio.</p>
          </div>
        </article>

        <article class="galeri-card">
          <div class="galeri-card-image">
            <span class="galeri-badge">Prestasi</span>
            <img src="IMG/galeri/galeri-5.jpg" alt="Hackathon" loading="lazy">
          </div>
          <div class="galeri-card-content">
            <h3>Finalis Hackathon Nasional</h3>
            <p>Tim RPL masuk final kompetisi coding tingkat nasional.</p>
          </div>
        </article>

        <article class="galeri-card">
          <div class="galeri-card-image">
            <span class="galeri-badge">Kegiatan Sekolah</span>
            <img src="IMG/galeri/galeri-6.jpg" alt="Sholat Dhuha" loading="lazy">
          </div>
          <div class="galeri-card-content">
            <h3>Sholat Dhuha &amp; Kajian Jumat Berkah</h3>
            <p>Pembinaan karakter spiritual setiap Jumat pagi.</p>
          </div>
        </article>
      </div>

    </div>
  </section>


  <!-- ============ TUR VIRTUAL ============ -->
  <section class="galeri-video-section">
    <div class="galeri-container">

      <div class="galeri-video-header">
        <div>
          <p class="galeri-eyebrow-dark">
            <img src="IMG/galeri/icon-video.svg" alt="">
            SOROTAN VIDEO KAMPUS
          </p>
          <h2>Jelajahi Fasilitas Melalui Tur Virtual</h2>
        </div>

        <p class="galeri-video-desc">
          Saksikan dokumentasi sinematik dinamika belajar di ruang lab,
          studio kreatif, dan atmosfer kebersamaan siswa SMK INFOKOM BOGOR.
        </p>
      </div>

      <div class="galeri-video-player" id="galeriVideoPlayer">

        <!-- COVER + PLAY BUTTON -->
        <div class="galeri-video-cover-wrapper" id="videoCover">
          <img
            src="IMG/galeri/tur-virtual-cover.jpg"
            alt="Tur Virtual Kampus SMK INFOKOM"
            class="galeri-video-cover"
          >

          <button type="button" class="galeri-video-play-btn" id="playVideoBtn" aria-label="Putar video tur virtual">
            <span class="play-ripple"></span>
            <img src="IMG/galeri/icon/icon-play.svg" alt="">
          </button>

          <div class="galeri-video-info">
            <strong>Putar Tur Virtual 360° &amp; Profil Sekolah</strong>
            <span>Durasi: 04:28 • Resolusi 4K Ultra HD</span>
          </div>

          <div class="galeri-video-footer">
            <span class="galeri-video-tag">
              <span class="dot-yellow"></span>
              Liputan Resmi Eksekutif Sekolah 2024/2025
            </span>
            <span class="galeri-video-credit">
              Direncanakan &amp; Diproduksi oleh Tim Multimedia Infokom
            </span>
          </div>
        </div>

        <!-- VIDEO MP4 -->
        <div class="galeri-video-iframe" id="videoIframe" style="display:none;">
          <video id="localVideo" controls playsinline>
            <source src="IMG/galeri/tur-virtual.mp4" type="video/mp4">
            Browser Anda tidak mendukung pemutaran video.
          </video>
        </div>

      </div>
    </div>
  </section>


  <!-- ============ CTA DOKUMENTASI TERBUKA ============ -->
  <section class="galeri-cta-section">
    <div class="galeri-container galeri-cta-inner">

      <div class="galeri-cta-text">
        <span class="galeri-cta-badge">
          <img src="IMG/galeri/icon/icon-check.svg" alt="">
          DOKUMENTASI TERBUKA
        </span>

        <h2>
          Ingin Melihat Karya Lengkap &amp; Keseharian Siswa Secara Real-Time?
        </h2>

        <p>
          Ikuti feed media sosial resmi sekolah kami untuk update kompetisi
          harian, live demo karya coding siswa, serta liputan langsung kegiatan
          seru setiap minggunya.
        </p>
      </div>

      <div class="galeri-cta-buttons">
        <a href="https://instagram.com/smkinfokom" target="_blank" rel="noopener" class="galeri-cta-btn galeri-cta-btn-dark">
          <img src="IMG/galeri/icon/icon-instagram.svg" alt="">
          Instagram @smkinfokom
        </a>

        <a href="kontak.html" class="galeri-cta-btn galeri-cta-btn-outline">
          <img src="IMG/galeri/icon/icon-maps.svg" alt="">
          Jadwal Kunjungan Kampus
        </a>
      </div>

    </div>
  </section>

</main>

@push('scripts')
<script src="{{ asset('JS/galeri-animasi.js') }}"></script>
@endpush
@endsection