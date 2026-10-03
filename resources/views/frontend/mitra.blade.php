@extends('layouts.app')

@section('title')
    Mitra Kerja Sama — SMK INFOKOM Kota Bogor
@endsection

@section('description')
    Kolaborasi strategis SMK INFOKOM Kota Bogor dengan lembaga pemerintah, industri, media, dan dunia usaha (DUDI) di Bogor dan nasional.
@endsection

@section('page', 'mitra')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/mitra.css') }}">
@endpush

@section('content')

<main id="main" class="mitra-page">

  <!-- ============ 1. HERO ============ -->
  <section class="mitra-hero">
    <div class="mitra-shell mitra-hero-grid">

      <div class="mitra-hero-copy">
        <h1 class="mitra-hero-title">
          Mitra Kerja Sama<br>
          <span class="mitra-hero-title-strong">SMK INFOKOM BOGOR</span>
        </h1>

        <p class="mitra-hero-desc mb-5">
          Bersama membangun SDM unggul melalui kolaborasi strategis dengan
          lembaga pemerintah, industri, media, dan dunia usaha di Kota Bogor
          dan nasional.
        </p>

        <div class="mitra-hero-actions">
          <a href="kontak.html" class="mitra-btn mitra-btn-primary">
            Jadi Mitra Kami
            <img src="IMG/mitra/icon-right.svg" alt="" class="mitra-btn-icon">
          </a>
          <a href="#mitra" class="mitra-btn mitra-btn-ghost">
            Lihat Daftar Mitra
          </a>
        </div>

        <ul class="mitra-hero-badges">
          <li>
            <img src="IMG/mitra/icon-cheklis.svg" alt="" class="mitra-check-icon">
            Sinkronisasi Kurikulum Kemendikbudristek
          </li>
          <li>
            <img src="IMG/mitra/icon-prestasi.svg" alt="" class="mitra-check-icon">
            LSP-P1 Berlisensi BNSP
          </li>
        </ul>
      </div>

      <div class="mitra-hero-visual">
        <div class="mitra-hero-card">
          <div class="mitra-hero-card-top">
            <span class="mitra-hero-card-kicker">DUDI Hub Infokom</span>
            <span class="mitra-hero-card-pill">Bogor Tech Ecosystem</span>
          </div>

          <div class="mitra-hero-card-main">
            <span class="mitra-hero-card-icon">
              <img src="IMG/mitra/icon-mou.svg" alt="">
            </span>
            <div>
              <h2 class="mitra-hero-card-title">MoU Kemitraan DUDI</h2>
              <p class="mitra-hero-card-subtitle">Sinkronisasi Kejuruan &amp; Industri</p>
            </div>
          </div>

          <div class="mitra-hero-card-metric">
            <div class="mitra-hero-card-metric-row">
              <span>Realisasi Penyerapan Lulusan</span>
              <strong>89.4% Siap Kerja</strong>
            </div>
            <div class="mitra-progress">
              <div class="mitra-progress-bar" style="width: 89.4%"></div>
            </div>
          </div>

          <div class="mitra-hero-card-badges">
            <span class="mitra-mini-badge">
              <img src="IMG/mitra/icon-cheklis.svg" alt="">
              Terakreditasi A BAN-SM Unggul
            </span>
            <span class="mitra-mini-badge">
              <img src="IMG/mitra/icon-mitra.svg" alt="">
              Mitra DUDI Regional &amp; Nasional
            </span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ============ 2. STATS STRIP ============ -->
  <section class="mitra-stats">
    <div class="mitra-shell mitra-stats-grid">

      <article class="mitra-stat-card">
        <div class="mitra-stat-top">
          <span class="mitra-stat-label">Total Kolaborasi</span>
          <span class="mitra-stat-icon">
            <img src="IMG/mitra/icon-mitra.svg" alt="">
          </span>
        </div>
        <p class="mitra-stat-number">10+</p>
        <p class="mitra-stat-desc">Mitra Resmi</p>
      </article>

      <article class="mitra-stat-card">
        <div class="mitra-stat-top">
          <span class="mitra-stat-label">Sektor Publik</span>
          <span class="mitra-stat-icon">
            <img src="IMG/mitra/icon-lembaga.svg" alt="">
          </span>
        </div>
        <p class="mitra-stat-number">5+</p>
        <p class="mitra-stat-desc">Lembaga Pemerintah</p>
      </article>

      <article class="mitra-stat-card">
        <div class="mitra-stat-top">
          <span class="mitra-stat-label">Diseminasi &amp; Pers</span>
          <span class="mitra-stat-icon">
            <img src="IMG/mitra/icon-media.svg" alt="">
          </span>
        </div>
        <p class="mitra-stat-number">3+</p>
        <p class="mitra-stat-desc">Media Nasional</p>
      </article>

      <article class="mitra-stat-card">
        <div class="mitra-stat-top">
          <span class="mitra-stat-label">Status Sinergi</span>
          <span class="mitra-stat-icon">
            <img src="IMG/mitra/icon-sinergi.svg" alt="">
          </span>
        </div>
        <p class="mitra-stat-number">100%</p>
        <p class="mitra-stat-desc">Kolaborasi Aktif</p>
      </article>

    </div>
  </section>

  <!-- ============ 3. BENTUK & JENIS KERJA SAMA ============ -->
  <section class="mitra-skema">
    <div class="mitra-shell">
      <div class="mitra-section-header mitra-section-header--center">
        <p class="mitra-eyebrow mitra-eyebrow--plain">Skema Kolaborasi</p>
        <h2>Bentuk &amp; Jenis Kerja Sama</h2>
        <p class="mitra-section-desc">
          Beragam model sinergi yang terjalin antara SMK INFOKOM BOGOR dengan
          mitra institusi dan industri.
        </p>
      </div>

      <div class="mitra-skema-grid">

        <article class="mitra-skema-card">
          <span class="mitra-skema-icon mitra-skema-icon--blue">
            <img src="IMG/mitra/icon-magang.svg" alt="">
          </span>
          <span class="mitra-skema-tag mitra-skema-tag--blue">Vokasi Nyata</span>
          <h3>Magang / Prakerin</h3>
          <p>Program Praktik Kerja Lapangan 6 bulan bagi siswa RPL, TKJ, DKV, dan PSPT di lingkungan kerja profesional.</p>
          <a href="#mitra" class="mitra-skema-link">Standar Industri Terapan
            <img src="IMG/mitra/icon-right.svg" alt="">
          </a>
        </article>

        <article class="mitra-skema-card">
          <span class="mitra-skema-icon mitra-skema-icon--amber">
            <img src="IMG/mitra/icon-penyaluran.svg" alt="">
          </span>
          <span class="mitra-skema-tag mitra-skema-tag--amber">Karier BKK</span>
          <h3>Rekrutmen &amp; Penyaluran</h3>
          <p>Jalur prioritas perekrutan alumni terampil melalui BKK (Bursa Kerja Khusus) dengan kompetensi terverifikasi sertifikasi BNSP.</p>
          <a href="#mitra" class="mitra-skema-link">Fast-Track Onboarding
            <img src="IMG/mitra/icon-right.svg" alt="">
          </a>
        </article>

        <article class="mitra-skema-card">
          <span class="mitra-skema-icon mitra-skema-icon--indigo">
            <img src="IMG/mitra/icon-mou.svg" alt="">
          </span>
          <span class="mitra-skema-tag mitra-skema-tag--indigo">Legal &amp; Link-and-Match</span>
          <h3>MoU &amp; Kerja Sama Strategis</h3>
          <p>Kolaborasi formal jangka panjang, penyelarasan kurikulum berbasis kebutuhan industri, dan sinkronisasi standar kompetensi kerja.</p>
          <a href="#mitra" class="mitra-skema-link">Penyelarasan Kurikulum
            <img src="IMG/mitra/icon-right.svg" alt="">
          </a>
        </article>

        <article class="mitra-skema-card">
          <span class="mitra-skema-icon mitra-skema-icon--purple">
            <img src="IMG/mitra/icon-guru.svg" alt="">
          </span>
          <span class="mitra-skema-tag mitra-skema-tag--purple">Transfer Knowledge</span>
          <h3>Guru Tamu &amp; Pelatihan</h3>
          <p>Hadirnya praktisi ahli industri sebagai pengajar tamu, workshop teknologi terkini, serta pelatihan intensif bagi siswa dan guru.</p>
          <a href="#mitra" class="mitra-skema-link">Kuliah Industri Berkala
            <img src="IMG/mitra/icon-right.svg" alt="">
          </a>
        </article>

      </div>
    </div>
  </section>

  <!-- ============ 4. DAFTAR MITRA RESMI ============ -->
  <section class="mitra-daftar" id="mitra">
    <div class="mitra-shell">

      <div class="mitra-daftar-header">
        <div>
          <p class="mitra-eyebrow mitra-eyebrow--plain">Jaringan Resmi</p>
          <h2>Mitra Kerja Sama Resmi</h2>
          <p class="mitra-section-desc mitra-section-desc--left">
            Bekerja sama dengan lembaga dan perusahaan terpercaya
          </p>
        </div>

        <div class="mitra-filter-pills" role="tablist" aria-label="Filter kategori mitra">
          <button type="button" class="mitra-pill is-active" data-filter="semua">Semua Mitra (12)</button>
          <button type="button" class="mitra-pill" data-filter="pemerintah">Pemerintah &amp; Publik (5)</button>
          <button type="button" class="mitra-pill" data-filter="pendidikan">Pendidikan Tinggi (3)</button>
          <button type="button" class="mitra-pill" data-filter="media">Media &amp; Penyiaran (2)</button>
          <button type="button" class="mitra-pill" data-filter="teknologi">Teknologi &amp; Percetakan (2)</button>
        </div>
      </div>

      <div class="mitra-partner-grid">

        <!-- Contoh Mitra 1 -->
        <article class="mitra-partner-card" data-category="pemerintah">
          <div class="mitra-partner-top">
            <span class="mitra-partner-logo">
              <span class="mitra-partner-logo-fallback">DIS</span>
            </span>
            <span class="mitra-status-badge"><i></i>Mitra Aktif</span>
          </div>
          <h3>Dinas Pendidikan Kota Bogor</h3>
          <p class="mitra-partner-sub">Pemerintah Daerah</p>
          <span class="mitra-cat-tag mitra-cat-tag--green">Pemerintah &amp; Publik</span>
          <p class="mitra-partner-desc">Kolaborasi dalam pengembangan kurikulum dan program kejuruan berbasis kebutuhan daerah.</p>
          <div class="mitra-partner-footer">
            <span>
              <img src="IMG/mitra/icon-location.svg" alt="">
              Kota Bogor
            </span>
            <span>
              <img src="IMG/mitra/icon-list.svg" alt="">
              Pendidikan &amp; Kebijakan
            </span>
          </div>
        </article>

        <!-- Contoh Mitra 2 -->
        <article class="mitra-partner-card" data-category="teknologi">
          <div class="mitra-partner-top">
            <span class="mitra-partner-logo">
              <span class="mitra-partner-logo-fallback">TEL</span>
            </span>
            <span class="mitra-status-badge"><i></i>Mitra Aktif</span>
          </div>
          <h3>PT Telkom Indonesia</h3>
          <p class="mitra-partner-sub">BUMN Telekomunikasi</p>
          <span class="mitra-cat-tag mitra-cat-tag--amber">Teknologi</span>
          <p class="mitra-partner-desc">Program magang, sertifikasi, dan penyaluran lulusan di bidang jaringan dan digital service.</p>
          <div class="mitra-partner-footer">
            <span>
              <img src="IMG/mitra/icon-location.svg" alt="">
              Nasional
            </span>
            <span>
              <img src="IMG/mitra/icon-list.svg" alt="">
              Jaringan &amp; Cloud
            </span>
          </div>
        </article>

        <!-- Contoh Mitra 3 -->
        <article class="mitra-partner-card" data-category="pendidikan">
          <div class="mitra-partner-top">
            <span class="mitra-partner-logo">
              <span class="mitra-partner-logo-fallback">IPB</span>
            </span>
            <span class="mitra-status-badge"><i></i>Mitra Aktif</span>
          </div>
          <h3>IPB University</h3>
          <p class="mitra-partner-sub">Perguruan Tinggi Negeri</p>
          <span class="mitra-cat-tag mitra-cat-tag--purple">Pendidikan Tinggi</span>
          <p class="mitra-partner-desc">Kerja sama jalur kuliah, magang penelitian, dan pengembangan kompetensi digital.</p>
          <div class="mitra-partner-footer">
            <span>
              <img src="IMG/mitra/icon-location.svg" alt="">
              Bogor
            </span>
            <span>
              <img src="IMG/mitra/icon-list.svg" alt="">
              Ilmu Komputer &amp; Vokasi
            </span>
          </div>
        </article>

        <!-- Contoh Mitra 4 -->
        <article class="mitra-partner-card" data-category="media">
          <div class="mitra-partner-top">
            <span class="mitra-partner-logo">
              <span class="mitra-partner-logo-fallback">TV</span>
            </span>
            <span class="mitra-status-badge"><i></i>Mitra Aktif</span>
          </div>
          <h3>TVRI Jawa Barat</h3>
          <p class="mitra-partner-sub">Lembaga Penyiaran Publik</p>
          <span class="mitra-cat-tag mitra-cat-tag--red">Media &amp; Penyiaran</span>
          <p class="mitra-partner-desc">Magang produksi siaran, liputan, dan pelatihan broadcasting bagi siswa PSPT.</p>
          <div class="mitra-partner-footer">
            <span>
              <img src="IMG/mitra/icon-location.svg" alt="">
              Bandung / Jawa Barat
            </span>
            <span>
              <img src="IMG/mitra/icon-list.svg" alt="">
              Produksi &amp; Siaran
            </span>
          </div>
        </article>

      </div>

      <p class="mitra-empty-state" hidden>Belum ada mitra pada kategori ini.</p>
    </div>
  </section>

  <!-- ============ 5. MENGAPA BERKOLABORASI ============ -->
  <section class="mitra-alasan">
    <div class="mitra-shell">
      <div class="mitra-section-header mitra-section-header--center">
        <p class="mitra-eyebrow mitra-eyebrow--plain">Mutual Advantage</p>
        <h2>Mengapa Berkolaborasi dengan<br>SMK INFOKOM BOGOR?</h2>
        <p class="mitra-section-desc">Nilai tambah nyata bagi dunia industri dan instansi pemerintahan.</p>
      </div>

      <div class="mitra-alasan-grid">

        <article class="mitra-alasan-card">
          <span class="mitra-alasan-icon mitra-alasan-icon--navy">
            <img src="IMG/mitra/icon-lulusan.svg" alt="">
          </span>
          <h3>Akses Lulusan Siap Kerja</h3>
          <p>Rekrutan kandidat teknis muda dengan etos kerja tinggi yang siap terjun langsung tanpa adaptasi panjang.</p>
          <span class="mitra-alasan-tag">Standar Kompetensi DUDI</span>
        </article>

        <article class="mitra-alasan-card">
          <span class="mitra-alasan-icon mitra-alasan-icon--amber">
            <img src="IMG/mitra/icon-colaborasi.svg" alt="">
          </span>
          <h3>Kolaborasi Kurikulum</h3>
          <p>Kesempatan merancang silabus pembelajaran kejuruan yang presisi sesuai standar industri perusahaan Anda.</p>
          <span class="mitra-alasan-tag">Link and Match Resmi</span>
        </article>

        <article class="mitra-alasan-card">
          <span class="mitra-alasan-icon mitra-alasan-icon--indigo">
            <img src="IMG/mitra/icon-branding.svg" alt="">
          </span>
          <h3>Branding Institusi di Sekolah</h3>
          <p>Eksposur brand positif di hadapan ribuan siswa, orang tua, dan jejaring pendidikan kejuruan di Kota Bogor.</p>
          <span class="mitra-alasan-tag">Visibilitas Generasi Muda</span>
        </article>

        <article class="mitra-alasan-card">
          <span class="mitra-alasan-icon mitra-alasan-icon--leaf">
            <img src="IMG/mitra/icon-rekrutmen.svg" alt="">
          </span>
          <h3>Magang &amp; Rekrutmen Terpadu</h3>
          <p>Kemudahan penyelenggaraan campus recruitment khusus, walk-in interview, dan on-site testing.</p>
          <span class="mitra-alasan-tag">Fasilitas Lab &amp; Aula Sekolah</span>
        </article>

        <article class="mitra-alasan-card">
          <span class="mitra-alasan-icon mitra-alasan-icon--ember">
            <img src="IMG/mitra/icon-dukungan.svg" alt="">
          </span>
          <h3>Dukungan Program CSR Pendidikan</h3>
          <p>Penyaluran program tanggung jawab sosial perusahaan (CSR) yang terukur, berdampak sosial tinggi, dan transparan.</p>
          <span class="mitra-alasan-tag">Laporan Akuntabilitas Terverifikasi</span>
        </article>

      </div>
    </div>
  </section>

  <!-- ============ 7. CTA (DARK) ============ -->
  <section class="mitra-cta">
    <div class="mitra-shell mitra-cta-inner">

      <span class="mitra-cta-badge">Bergabung Bersama Kami</span>
      <h2>Ingin Menjadi Mitra Kerja Sama?</h2>
      <p>
        Mari jalin sinergi strategis untuk mencetak talenta digital Indonesia masa
        depan. Hubungi tim Hubungan Industri (Hubin &amp; BKK) kami untuk
        penandatanganan MoU dan skema kemitraan kustom.
      </p>

      <a href="kontak.html" class="mitra-btn mitra-btn-primary mitra-btn-lg">
        <img src="IMG/mitra/icon-email.svg" alt="" class="mitra-btn-icon">
        Hubungi Kami untuk Kerja Sama
      </a>

      <div class="mitra-cta-info">
        <div>
          <span class="mitra-cta-info-label">Telepon Hubin</span>
          <span class="mitra-cta-info-value">(0251) 8328-999</span>
        </div>
        <div>
          <span class="mitra-cta-info-label">Email Resmi</span>
          <span class="mitra-cta-info-value">kemitraan@smkinfokom.sch.id</span>
        </div>
        <div>
          <span class="mitra-cta-info-label">Lokasi Kantor</span>
          <span class="mitra-cta-info-value">Ruang Hubin Sekolah SMK INFOKOM Bogor</span>
        </div>
      </div>

    </div>
  </section>

</main>

@endsection

@push('scripts')
    <script src="{{ asset('js/mitra.js') }}" defer></script>
@endpush