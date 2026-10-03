@extends('layouts.app')

@section('title')
PPDB 2025/2026 SMK INFOKOM Kota Bogor
@endsection

@section('description')
Informasi lengkap Pendaftaran Peserta Didik Baru SMK INFOKOM Bogor Tahun Ajaran 2025/2026.
@endsection

@section('page', 'ppdb')

@push('styles')
<link rel="stylesheet" href="{{ asset('CSS/ppdb.css') }}">
@endpush

@section('content')


<main id="main" class="ppdb-page">

  <!-- ============ HERO ============ -->
  <section class="ppdb-hero">
    <div class="ppdb-container ppdb-hero-inner">

      <div class="ppdb-hero-text">
        <h1 class="ppdb-hero-title">
          PPDB 2025/2026<br>
          <span class="text-yellow">SMK INFOKOM BOGOR</span>
        </h1>

        <p class="ppdb-hero-desc">
          Wujudkan karier masa depan di era kecerdasan buatan dan teknologi
          industri. Siapkan dirimu menjadi Software Engineer, Network
          Specialist, dan Digital Creator berstandar global.
        </p>
      </div>

      <div class="ppdb-hero-actions">
        <div class="ppdb-hero-buttons">
          <a href="#form-pendaftaran" class="ppdb-btn-yellow">
            <img src="IMG/ppdb/icon/icon-user-check.svg" alt="">
            Daftar Sekarang Online
          </a>

          <a href="#investasi" class="ppdb-btn-outline-light">
            <img src="IMG/ppdb/icon/icon-unduh.svg" alt="">
            Unduh Rincian Biaya
          </a>
        </div>

        <div class="ppdb-hero-stats">
          <div class="ppdb-hero-stat">
            <strong>100%</strong>
            <span>Kurikulum Industri</span>
          </div>
          <div class="ppdb-hero-stat">
            <strong>Akreditasi A</strong>
            <span>Predikat Unggul</span>
          </div>
          <div class="ppdb-hero-stat">
            <strong>45+ Mitra</strong>
            <span>Penyaluran Kerja</span>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- ============ BANNER GELOMBANG ============ -->
  <div class="ppdb-banner-gelombang">
    <div class="ppdb-container ppdb-banner-inner">

      <span class="ppdb-banner-text">
        <img src="IMG/ppdb/icon/icon-pengumuman.svg" alt="">
        <span>
          <strong>Gelombang 1 Masih Dibuka</strong>
          Hemat biaya registrasi s.d Rp 500rb
        </span>
      </span>

      <a href="#form-pendaftaran" class="ppdb-banner-btn">
        Daftar Cepat
      </a>

    </div>
  </div>


  <!-- ============ ALUR PENDAFTARAN ============ -->
  <section class="ppdb-alur-section">
    <div class="ppdb-container">

      <div class="ppdb-section-header">
        <h2>Alur Pendaftaran Mudah &amp; Terstruktur</h2>
        <p>
          Proses pendaftaran dirancang cepat dan transparan, mulai dari
          registrasi daring hingga verifikasi akhir.
        </p>
      </div>

      <div class="ppdb-alur-grid">

        <div class="ppdb-alur-card">
          <span class="ppdb-alur-number">01</span>
          <h3>Pendaftaran Online</h3>
          <p>
            Isi formulir biodata mandiri melalui website ini dan dapatkan
            Nomor Registrasi serta akun seleksi calon siswa.
          </p>
          <span class="ppdb-alur-time">
            <img src="IMG/ppdb/icon/icon-clock.svg" alt="">
            Estimasi 5 Menit
          </span>
        </div>

        <div class="ppdb-alur-card">
          <span class="ppdb-alur-number">02</span>
          <h3>Tes Pemetaan Bakat IT</h3>
          <p>
            Uji penalaran logika, dasar komputasi, dan asesmen psikometrik
            minat bakat untuk penempatan kompetensi keahlian.
          </p>
          <span class="ppdb-alur-time">
            <img src="IMG/ppdb/icon/icon-brain.svg" alt="">
            CBT Online / Offline Lab
          </span>
        </div>

        <div class="ppdb-alur-card">
          <span class="ppdb-alur-number">03</span>
          <h3>Wawancara Siswa &amp; Ortu</h3>
          <p>
            Konseling tatap muka atau video call untuk menyelaraskan
            komitmen kedisiplinan, peminatan, serta pembiayaan studi.
          </p>
          <span class="ppdb-alur-time">
            <img src="IMG/ppdb/icon/icon-group.svg" alt="">
            Offline di Sekolah / Daring
          </span>
        </div>

        <div class="ppdb-alur-card ppdb-alur-card-active">
          <span class="ppdb-alur-number">04</span>
          <h3>Pengumuman &amp; Daftar Ulang</h3>
          <p>
            Penerbitan Surat Keputusan Penerimaan (SKP) dan penyelesaian
            registrasi administrasi seragam serta orientasi awal.
          </p>
          <span class="ppdb-alur-time ppdb-alur-time-highlight">
            <img src="IMG/ppdb/icon/icon-check.svg" alt="">
            Hasil Real-Time Portal
          </span>
        </div>

      </div>
    </div>
  </section>


  <!-- ============ OPSI JALUR MASUK ============ -->
  <section class="ppdb-jalur-section">
    <div class="ppdb-container">

      <div class="ppdb-jalur-header">
        <div>
          <p class="ppdb-label-mini">OPSI JALUR MASUK</p>
          <h2>Pilih Jalur Sesuai Potensi Terbaikmu</h2>
        </div>
        <p class="ppdb-jalur-desc">
          SMK INFOKOM BOGOR memberikan apresiasi khusus bagi talenta
          berprestasi dan kreator digital berbakat.
        </p>
      </div>

      <div class="ppdb-jalur-grid">

        <!-- JALUR PRESTASI -->
        <div class="ppdb-jalur-card">
          <span class="ppdb-jalur-badge ppdb-jalur-badge-yellow">
            POTONGAN SPP S.D 50%
          </span>

          <span class="ppdb-jalur-icon">
            <img src="IMG/ppdb/icon/icon-prestasi.svg" alt="">
          </span>

          <h3>Jalur Prestasi Akademik &amp; Non-Akademik</h3>
          <p>
            Dikhususkan bagi lulusan berprestasi juara 1-3
            tingkat Kota/Provinsi/Nasional (O2SN, FLS2N, OSN) atau
            nilai rapor rata-rata minimal 85.
          </p>

          <ul class="ppdb-jalur-benefit">
            <li>
              <img src="IMG/ppdb/icon/icon-centang.svg" alt="">
              Bebas Biaya Formulir Pendaftaran
            </li>
            <li>
              <img src="IMG/ppdb/icon/icon-centang.svg" alt="">
              Beasiswa Sumbangan Pembinaan hingga 50%
            </li>
            <li>
              <img src="IMG/ppdb/icon/icon-centang.svg" alt="">
              Prioritas pemilihan konsentrasi keahlian
            </li>
          </ul>

          <a href="#form-pendaftaran" class="ppdb-jalur-btn ppdb-jalur-btn-dark">
            Pilih Jalur Prestasi
          </a>
        </div>

        <!-- JALUR TALENTA DIGITAL -->
        <div class="ppdb-jalur-card ppdb-jalur-card-highlight">
          <span class="ppdb-jalur-badge ppdb-jalur-badge-outline">
            JALUR TALENTA DIGITAL
          </span>

          <span class="ppdb-jalur-icon ppdb-jalur-icon-yellow">
            <img src="IMG/ppdb/icon/icon-code.svg" alt="">
          </span>

          <h3>Jalur Minat Bakat IT &amp; Portofolio</h3>
          <p>
            Untuk calon siswa yang telah memiliki karya nyata:
            portofolio coding, web/game dev, desain grafis UI/UX,
            video editing, atau prestasi E-Sports.
          </p>

          <ul class="ppdb-jalur-benefit">
            <li>
              <img src="IMG/ppdb/icon/icon.svg" alt="">
              Tanpa tes tertulis (review kurasi portofolio)
            </li>
            <li>
              <img src="IMG/ppdb/icon/icon.svg" alt="">
              Mentoring langsung dari Tech Lead Laboratorium
            </li>
            <li>
              <img src="IMG/ppdb/icon/icon.svg" alt="">
              Subsidi alat praktik &amp; sertifikasi internasional
            </li>
          </ul>

          <a href="#form-pendaftaran" class="ppdb-jalur-btn ppdb-jalur-btn-yellow">
            Kirim Portofolio IT
          </a>
        </div>

        <!-- JALUR REGULER -->
        <div class="ppdb-jalur-card">
          <span class="ppdb-jalur-icon">
            <img src="IMG/ppdb/icon/icon-study.svg" alt="">
          </span>

          <h3>Jalur Reguler</h3>
          <p>
            Terbuka bagi seluruh lulusan SMP/MTs sederajat negeri
            maupun swasta yang ingin mendalami kejuruan bidang
            teknologi informasi.
          </p>

          <ul class="ppdb-jalur-benefit">
            <li>
              <img src="IMG/ppdb/icon/icon-centang.svg" alt="">
              Peluang cicilan pembiayaan hingga 4 tahap
            </li>
            <li>
              <img src="IMG/ppdb/icon/icon-centang.svg" alt="">
              Fasilitas workshop pengenalan logika coding gratis
            </li>
            <li>
              <img src="IMG/ppdb/icon/icon-centang.svg" alt="">
              Jaminan magang kerja di industri rekanan
            </li>
          </ul>

          <a href="#form-pendaftaran" class="ppdb-jalur-btn ppdb-jalur-btn-outline">
            Daftar Jalur Reguler
          </a>
        </div>

      </div>
    </div>
  </section>


  <!-- ============ SYARAT + INVESTASI ============ -->
  <section class="ppdb-syarat-section" id="investasi">
    <div class="ppdb-container ppdb-syarat-grid">

      <!-- SYARAT ADMINISTRASI -->
      <div class="ppdb-syarat-card">
        <h4>
          <img src="IMG/ppdb/icon/icon-file.svg" alt="">
          SYARAT ADMINISTRASI
        </h4>

        <h3>Dokumen Wajib Disiapkan</h3>
        <p>
          Dokumen dapat diunggah dalam format PDF/JPG melalui portal calon
          siswa atau diserahkan langsung ke ruang PPDB.
        </p>

        <ul class="ppdb-dokumen-list">
          <li>
            <span class="ppdb-dokumen-icon">
              <img src="IMG/ppdb/icon/icon-dokumen.svg" alt="">
            </span>
            <div>
              <strong>Scan Ijazah / Surat Keterangan Lulus (SKL)</strong>
              <span>Bagi yang belum lulus, dapat menyusul menggunakan Surat Keterangan Siswa Aktif.</span>
            </div>
          </li>

          <li>
            <span class="ppdb-dokumen-icon">
              <img src="IMG/ppdb/icon/icon-book.svg" alt="">
            </span>
            <div>
              <strong>Scan Rapor Semester 1 s.d 5</strong>
              <span>Nilai mata pelajaran Matematika, Bahasa Indonesia, dan Bahasa Inggris.</span>
            </div>
          </li>

          <li>
            <span class="ppdb-dokumen-icon">
              <img src="IMG/ppdb/icon/icon-komunity.svg" alt="">
            </span>
            <div>
              <strong>Kartu Keluarga (KK) &amp; Akta Kelahiran</strong>
              <span>Dokumen kependudukan yang valid untuk sinkronisasi Dapodik Kemendikbud.</span>
            </div>
          </li>

          <li>
            <span class="ppdb-dokumen-icon">
              <img src="IMG/ppdb/icon/icon-user.svg" alt="">
            </span>
            <div>
              <strong>Pas Foto Berwarna Terbaru</strong>
              <span>Ukuran 3×4 (2 lembar) berlatar belakang merah/biru sesuai seragam sekolah asal.</span>
            </div>
          </li>
        </ul>

        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener" class="ppdb-chat-cs">
          <img src="IMG/ppdb/icon/icon-service.svg" alt="">
          Bantuan Verifikasi Berkas?
          <span>Chat CS</span>
        </a>
      </div>

      <!-- INVESTASI BIAYA -->
      <div class="ppdb-biaya-card">
        <div class="ppdb-biaya-header">
          <h4>
            <img src="IMG/ppdb/icon/icon-money.svg" alt="">
            INVESTASI MASA DEPAN
          </h4>
          <span class="ppdb-biaya-tahun">Tahun Ajaran 2025/2026</span>
        </div>

        <h3>Transparansi Biaya Pendidikan</h3>
        <p>
          Semua fasilitas laboratorium komputer, internet gigabit, dan
          software lisensi telah terintegrasi tanpa ada pungutan liar di
          tengah semester.
        </p>

        <div class="ppdb-biaya-list">
          <div class="ppdb-biaya-item">
            <div>
              <strong>Biaya Formulir &amp; Tes CBT</strong>
              <span>Satu kali saat pendaftaran awal</span>
            </div>
            <strong class="ppdb-biaya-nominal">Rp 200.000</strong>
          </div>

          <div class="ppdb-biaya-item">
            <div>
              <strong>DSP / Pengembangan Sarana (Gelombang 1)</strong>
              <span>Termasuk 4 stel seragam, jas almamater, atribut, kartu pelajar cerdas</span>
            </div>
            <div class="ppdb-biaya-nominal-group">
              <strong class="ppdb-biaya-nominal">Rp 3.500.000</strong>
              <span class="ppdb-biaya-cicil">Dapat dicicil 4×</span>
            </div>
          </div>

          <div class="ppdb-biaya-item">
            <div>
              <strong>SPP Bulanan (Praktikum &amp; Akademik)</strong>
              <span>Bebas biaya lab, internet fiber, akun Cloud &amp; Google Workspace Edu</span>
            </div>
            <strong class="ppdb-biaya-nominal">Rp 450.000<small>/bln</small></strong>
          </div>
        </div>

        <div class="ppdb-biaya-garansi">
          <img src="IMG/ppdb/icon/icon-defense.svg" alt="">
          <div>
            <strong>Garansi Tanpa Biaya Tersembunyi</strong>
            <span>
              SMK INFOKOM BOGOR berkomitmen tidak mengenakan biaya tambahan
              untuk ujian semester berbasis komputer (CBT), penggunaan studio
              multimedia, dan maintenance perangkat laboratorium.
            </span>
          </div>
        </div>

        <div class="ppdb-biaya-buttons">
          <a href="files/brosur-ppdb.pdf" class="ppdb-btn-dark-outline" download="Brosur-PPDB-SMK-INFOKOM-BOGOR.pdf">
            <img src="IMG/ppdb/icon/icon-pdf.svg" alt="">
            Unduh Formulir Pendaftaran Lengkap (PDF)
          </a>

          <a href="#form-pendaftaran" class="ppdb-btn-yellow-solid">
            Isi Form Pendaftaran
          </a>
        </div>
      </div>

    </div>
  </section>


  <!-- ============ FORM REGISTRASI ============ -->
  <section class="ppdb-form-section" id="form-pendaftaran">
    <div class="ppdb-container ppdb-form-wrapper">

      <div class="ppdb-form-header">
        <p class="ppdb-label-mini ppdb-label-center">FORMULIR MANDIRI</p>
        <h2>Registrasi Calon Peserta Didik Baru</h2>
        <p>
          Lengkapi formulir singkat di bawah ini. Tim panitia PPDB akan
          mengonfirmasi jadwal asesmen dalam kurun waktu 1×24 jam kerja.
        </p>
      </div>

      <form action="#" method="POST" id="form-ppdb" class="ppdb-form">

        <div class="ppdb-form-group">
          <label for="nama_lengkap">Nama Lengkap Siswa *</label>
          <input type="text" name="nama_lengkap" id="nama_lengkap"
            placeholder="Sesuai Akta Kelahiran / Ijazah SMP" required>
        </div>

        <div class="ppdb-form-row">
          <div class="ppdb-form-group">
            <label for="asal_sekolah">Asal Sekolah (SMP / MTs) *</label>
            <input type="text" name="asal_sekolah" id="asal_sekolah"
              placeholder="Contoh: SMP Negeri 1 Bogor" required>
          </div>

          <div class="ppdb-form-group">
            <label for="nisn">Nomor Induk Siswa Nasional (NISN)</label>
            <input type="text" name="nisn" id="nisn"
              placeholder="10 Digit NISN (Opsional)">
          </div>
        </div>

        <div class="ppdb-form-group">
          <label for="pilihan_jurusan_1">Pilihan Jurusan *</label>
          <select name="pilihan_jurusan_1" id="pilihan_jurusan_1" required>
            <option value="">Pilih Konsentrasi Keahlian</option>
            <option value="tkj">Teknik Komputer dan Jaringan (TKJ)</option>
            <option value="rpl">Rekayasa Perangkat Lunak (RPL)</option>
            <option value="multimedia">Multimedia / Desain Komunikasi Visual</option>
            <option value="pspt">Produksi dan Siaran Program Televisi (PSPT)</option>
          </select>
        </div>

        <div class="ppdb-form-group">
          <label for="jalur">Pilihan Jalur Masuk *</label>
          <select name="jalur" id="jalur" required>
            <option value="">Pilih Jalur Pendaftaran</option>
            <option value="reguler">Jalur Reguler Gelombang 1</option>
            <option value="prestasi">Jalur Prestasi Akademik &amp; Non-Akademik</option>
            <option value="talenta">Jalur Minat Bakat IT &amp; Portofolio</option>
          </select>
        </div>

        <div class="ppdb-form-row">
          <div class="ppdb-form-group">
            <label for="no_whatsapp_siswa">Nomor WhatsApp Siswa *</label>
            <input type="text" name="no_whatsapp_siswa" id="no_whatsapp_siswa"
              placeholder="0812xxxxxxxx" required>
          </div>

          <div class="ppdb-form-group">
            <label for="no_whatsapp_ortu">Nomor WhatsApp Orang Tua / Wali *</label>
            <input type="text" name="no_whatsapp_ortu" id="no_whatsapp_ortu"
              placeholder="08xxxxxxxxxx" required>
          </div>
        </div>

        <div class="ppdb-form-group">
          <label for="alamat">Alamat Domisili Lengkap *</label>
          <textarea name="alamat" id="alamat" rows="3"
            placeholder="Jalan, Kelurahan, Kecamatan, Kota/Kabupaten" required></textarea>
        </div>

        <label class="ppdb-form-checkbox">
          <input type="checkbox" name="persetujuan" id="persetujuan" required>
          <span>
            Saya menyatakan bahwa data yang diisikan adalah benar dan
            bersedia mengikuti prosedur seleksi Penerimaan Peserta Didik
            Baru SMK INFOKOM BOGOR Tahun Ajaran 2025/2026.
          </span>
        </label>

        <button type="submit" class="ppdb-form-submit">
          <img src="IMG/ppdb/icon/icon-kirim.svg" alt="">
          Kirim Formulir Pendaftaran Online
        </button>

      </form>
    </div>
  </section>


  <!-- ============ FAQ ============ -->
  <section class="ppdb-faq-section">
    <div class="ppdb-container">

      <div class="ppdb-faq-header">
        <p class="ppdb-label-mini ppdb-label-center">PUSAT BANTUAN</p>
        <h2>Pertanyaan Seputar PPDB</h2>
        <p>
          Temukan jawaban cepat untuk pertanyaan umum calon siswa dan orang tua.
        </p>
      </div>

      <div class="ppdb-faq-list">

        <details class="ppdb-faq-item">
          <summary>
            Apakah siswa diperbolehkan membawa laptop pribadi saat praktikum?
            <img src="IMG/ppdb/icon/icon-arrow.svg" alt="" class="ppdb-faq-icon">
          </summary>
          <p>
            Diperbolehkan, namun tidak diwajibkan — seluruh laboratorium sudah
            dilengkapi unit PC/iMac standar industri yang dapat digunakan siswa
            secara individual selama jam praktikum.
          </p>
        </details>

        <details class="ppdb-faq-item">
          <summary>
            Bagaimana sistem pembayaran DSP bagi yang memerlukan cicilan?
            <img src="IMG/ppdb/icon/icon-arrow.svg" alt="" class="ppdb-faq-icon">
          </summary>
          <p>
            DSP dapat dicicil hingga 4 tahap tanpa bunga tambahan selama Gelombang
            1 masih berlangsung. Skema cicilan dapat didiskusikan langsung dengan
            bagian administrasi keuangan saat daftar ulang.
          </p>
        </details>

        <details class="ppdb-faq-item">
          <summary>
            Apakah jika belum memiliki sertifikat coding bisa mendaftar RPL?
            <img src="IMG/ppdb/icon/icon-arrow.svg" alt="" class="ppdb-faq-icon">
          </summary>
          <p>
            Bisa. Sertifikat coding hanya menjadi nilai tambah untuk Jalur Minat
            Bakat IT &amp; Portofolio, bukan syarat wajib. Jalur Reguler dan
            Prestasi tetap terbuka tanpa memerlukan sertifikat tersebut.
          </p>
        </details>

        <details class="ppdb-faq-item">
          <summary>
            Kapan Gelombang 1 PPDB akan ditutup?
            <img src="IMG/ppdb/icon/icon-arrow.svg" alt="" class="ppdb-faq-icon">
          </summary>
          <p>
            Jadwal penutupan resmi akan diumumk     an melalui website dan media sosial
            sekolah begitu kuota tiap konsentrasi keahlian mendekati batas. Segera
            daftar untuk mendapatkan potongan biaya registrasi Gelombang 1.
          </p>
        </details>

      </div>
    </div>
  </section>

</main>

@push('scripts')
<script src="{{ asset('JS/ppdb-animasi.js') }}"></script>
@endpush
@endsection