@extends('layouts.app')

@section('title')
    Galeri Sekolah & Aktivitas Siswa — SMK INFOKOM Kota Bogor
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
          Galeri Sekolah Infokom &amp; Aktivitas Siswa
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

<section class="galeri-filter-section">
  <div class="galeri-container">

    <div class="galeri-filter-list">

      <a href="{{ url('galeri') }}" class="galeri-filter-chip active">
        Semua
      </a>

      <a href="{{ url('galeri?kategori=praktikum') }}" class="galeri-filter-chip">
        Praktikum
      </a>

      <a href="{{ url('galeri?kategori=prestasi') }}" class="galeri-filter-chip">
        Prestasi
      </a>

      <a href="{{ url('galeri?kategori=kunjungan') }}" class="galeri-filter-chip">
        Kunjungan Industri
      </a>

      <a href="{{ url('galeri?kategori=kegiatan') }}" class="galeri-filter-chip">
        Kegiatan Sekolah
      </a>

      <a href="{{ url('galeri?kategori=karya') }}" class="galeri-filter-chip">
        Karya Siswa
      </a>

    </div>


    <p class="galeri-filter-count">

      <img
        src="{{ asset('IMG/galeri/icon-grid.svg') }}"
        alt=""
      >

      Menampilkan 4 Koleksi

    </p>

  </div>
</section>



<!-- ============ GRID GALERI ============ -->
<section class="galeri-grid-section">
  <div class="galeri-container">


    <!-- ============ FEATURED ============ -->
    <div class="galeri-grid galeri-grid-featured">


      <!-- Featured 1 -->
      <article class="galeri-card galeri-card-lg">

        <div class="galeri-card-image">

          <span class="galeri-badge">
            Praktikum
          </span>

          <img
            src="{{ asset('IMG/galeri/component/ujiantkj.png') }}"
            alt="Praktikum TKJ"
            loading="lazy"
          >

        </div>


        <div class="galeri-card-content">

          <h3>
            Praktikum Konfigurasi Jaringan Enterprise
          </h3>

          <p>
            Siswa jurusan TKJ melakukan instalasi dan konfigurasi
            router MikroTik serta praktik jaringan di laboratorium.
          </p>

        </div>

      </article>



      <!-- Featured 2 -->
      <article class="galeri-card galeri-card-lg">

        <div class="galeri-card-image">

          <span class="galeri-badge">
            Prestasi
          </span>

          <img
            src="{{ asset('IMG/galeri/component/juara1.png') }}"
            alt="Juara 1 Web Design"
            loading="lazy"
          >

        </div>


        <div class="galeri-card-content">

          <h3>
            Juara 1 Web Design
          </h3>

          <p>
            Tim RPL SMK INFOKOM meraih prestasi melalui kompetisi
            pengembangan website dan menunjukkan kemampuan siswa
            di bidang teknologi.
          </p>

        </div>

      </article>

    </div>



    <!-- ============ GRID 3 KOLOM ============ -->
    <div class="galeri-grid galeri-grid-3">


      <!-- Card 3 -->
      <article class="galeri-card">

        <div class="galeri-card-image">

          <span class="galeri-badge">
            Kegiatan Sekolah
          </span>

          <img
            src="{{ asset('IMG/galeri/component/kegiatanupacara.jpeg') }}"
            alt="Upacara Bendera"
            loading="lazy"
          >

        </div>


        <div class="galeri-card-content">

          <h3>
            Upacara Bendera Senin Pagi
          </h3>

          <p>
            Kegiatan rutin sekolah sebagai bentuk penanaman
            disiplin, tanggung jawab, dan nasionalisme siswa.
          </p>

        </div>

      </article>



      <!-- Card 4 -->
      <article class="galeri-card">

        <div class="galeri-card-image">

          <span class="galeri-badge">
            Akademik
          </span>

          <img
            src="{{ asset('IMG/galeri/component/ujiansekolahrpl.jpg') }}"
            alt="Ujian Sekolah RPL"
            loading="lazy"
          >

        </div>


        <div class="galeri-card-content">

          <h3>
            Ujian Sekolah Siswa RPL
          </h3>

          <p>
            Siswa RPL mengikuti kegiatan ujian sekolah sebagai
            bagian dari proses evaluasi pembelajaran dan kompetensi.
          </p>

        </div>

      </article>



      <!-- Card 5 -->
      <article class="galeri-card">

        <div class="galeri-card-image">

          <span class="galeri-badge">
            Praktikum
          </span>

          <img
            src="{{ asset('IMG/galeri/component/ujiantkj.png') }}"
            alt="Ujian Praktikum TKJ"
            loading="lazy"
          >

        </div>


        <div class="galeri-card-content">

          <h3>
            Praktikum dan Ujian Kompetensi TKJ
          </h3>

          <p>
            Siswa TKJ mengaplikasikan kemampuan jaringan melalui
            praktik dan pengujian kompetensi di laboratorium.
          </p>

        </div>

      </article>

    </div>



    <!-- ============ GRID TAMBAHAN ============ -->
    <div class="galeri-grid galeri-grid-3">


      <!-- Card 6 -->
      <article class="galeri-card">

        <div class="galeri-card-image">

          <span class="galeri-badge">
            Prestasi
          </span>

          <img
            src="{{ asset('IMG/galeri/component/juara1.png') }}"
            alt="Prestasi Juara 1"
            loading="lazy"
          >

        </div>


        <div class="galeri-card-content">

          <h3>
            Prestasi Juara 1 Siswa SMK INFOKOM
          </h3>

          <p>
            Dokumentasi prestasi siswa dalam kompetisi sebagai
            bentuk apresiasi terhadap pencapaian dan kreativitas.
          </p>

        </div>

      </article>



      <!-- Card 7 -->
      <article class="galeri-card">

        <div class="galeri-card-image">

          <span class="galeri-badge">
            Kegiatan Sekolah
          </span>

          <img
            src="{{ asset('IMG/galeri/component/kegiatanupacara.jpeg') }}"
            alt="Kegiatan Upacara Sekolah"
            loading="lazy"
          >

        </div>


        <div class="galeri-card-content">

          <h3>
            Kegiatan Upacara Sekolah
          </h3>

          <p>
            Dokumentasi kegiatan upacara sebagai bagian dari
            pembentukan karakter dan kedisiplinan siswa.
          </p>

        </div>

      </article>



      <!-- Card 8 -->
      <article class="galeri-card">

        <div class="galeri-card-image">

          <span class="galeri-badge">
            Akademik
          </span>

          <img
            src="{{ asset('IMG/galeri/component/ujiansekolahrpl.jpg') }}"
            alt="Kegiatan Ujian RPL"
            loading="lazy"
          >

        </div>


        <div class="galeri-card-content">

          <h3>
            Evaluasi Kompetensi Siswa RPL
          </h3>

          <p>
            Kegiatan evaluasi pembelajaran siswa RPL melalui
            ujian dan praktik sesuai kompetensi keahlian.
          </p>

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
            SOROTAN VIDEO SEKOLAH 
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
          Jadwal Kunjungan Sekolah
        </a>
      </div>

    </div>
  </section>

</main>

@push('scripts')
<script src="{{ asset('JS/galeri-animasi.js') }}"></script>
@endpush
@endsection