@extends('layouts.app')

@section('title')
Profil SMK INFOKOM Kota Bogor
@endsection

@section('description')
Profil SMK INFOKOM Kota Bogor sebagai sekolah menengah kejuruan pusat keunggulan.
@endsection

@section('page', 'profil')

{{-- CSS khusus halaman profil --}}
@push('styles')
<link rel="stylesheet" href="{{ asset('CSS/profil.css') }}">
@endpush

@section('content')


<main>

  <!-- ==================== HERO ==================== -->
  <section class="profil-hero">
    <div class="profil-container">

      <div class="profil-breadcrumb">
        Beranda <img src="{{ asset('IMG/profil/icon/arrow-right.svg') }}" alt=""><span>Profil Sekolah</span>
      </div>

      <h1>
        Profil &amp; Dedikasi Pendidikan Vokasi Digital
      </h1>

      <p class="profil-hero-text">
        Membentuk Generasi Berkarakter, Unggul Teknologi &amp; Berdaya Saing
        Global melalui ekosistem kurikulum sinkron, praktik langsung,
        dan integrasi digital terkini.
      </p>

      <div class="profil-stat-grid">

        <div class="profil-stat">
          <strong>A</strong>
          <span>AKREDITASI SEKOLAH</span>
        </div>

        <div class="profil-stat">
          <strong>98.4%</strong>
          <span>CAPAIAN SISWA &amp; LULUSAN</span>
        </div>

        <div class="profil-stat">
          <strong>45+</strong>
          <span>MITRA INDUSTRI &amp; KORPORASI</span>
        </div>

        <div class="profil-stat">
          <strong>100%</strong>
          <span>KEGIATAN PRAKTIK BERBASIS INDUSTRI</span>
        </div>

      </div>

    </div>
  </section>


  <!-- ==================== SAMBUTAN KEPALA SEKOLAH ==================== -->
  <section class="sambutan-section">
    <div class="profil-container">

      <div class="sambutan-grid">

        <div class="sambutan-photo">
          <img
            src="{{ asset('IMG/profil/foto-guru/principal.png') }}"
            alt="Kepala Sekolah SMK INFOKOM Kota Bogor"
          >

          <div class="sambutan-photo-info">
            <span>Kepala Sekolah SMK INFOKOM</span>
            <strong>Ir. Hj. Liliek Rahmaningsih, M.MPd.</strong>
          </div>
        </div>


        <div class="sambutan-content">

          <p class="section-label">
            <img src="{{ asset('IMG/profil/icon/sambutan.svg') }}" alt="">
            SAMBUTAN PIMPINAN LEMBAGA
          </p>

          <h2>
            "Menyiapkan Arsitek Masa Depan Teknologi
            yang Adaptif, Berkarakter, dan
            Berintegritas."
          </h2>

          <p>
            Selamat datang di SMK INFOKOM Kota Bogor. Di era percepatan kecerdasan buatan dan
            komputasi awan saat ini, pendidikan vokasi tidak boleh hanya berorientasi pada transfer
            pengetahuan teks semata. Kami meyakini bahwa kurikulum harus menjadi jembatan
            hidup antara ruang kelas dan ekosistem industri dunia kerja sesungguhnya.
          </p>

          <p>
            Di Sekolah ini, setiap siswa diasah untuk berpikir logis sistematis, menguasai standar
            teknologi terkini (MikroTik, Cisco, Adobe, Cloud Native), dan yang paling fundamental:
            memiliki etika kerja tangguh, kepemimpinan adaptif, dan empati sosial. Kami bangga
            menjadi wadah lahirnya ribuan profesional muda yang kini berkarya di korporasi nasional,
            perintis startup teknologi, maupun melanjutkan studi ke perguruan tinggi unggulan.
          </p>

          <div class="sambutan-signature">
            <strong>Ir. Hj. Liliek Rahmaningsih, M.MPd.</strong>
            <span>NIP. 19740812 200212 1 003</span>
          </div>

        </div>

      </div>

    </div>
  </section>


  <!-- ==================== VISI & MISI ==================== -->
<section id="visi-misi" class="visi-section">
  <div class="profil-container">

    <div class="section-heading">

      <p class="program-eyebrow">
        <span></span>
        ARAH LANGKAH STRATEGIS
      </p>

      <h2>
        Visi &amp; Misi Institusi
      </h2>

      <p>
        Pilar komitmen fundamental SMK INFOKOM dalam membentuk ekosistem
        pendidikan berkarakter dan berorientasi teknologi.
      </p>

    </div>


    <div class="visi-grid">

      <!-- VISI -->
      <div class="visi-card">

        <div class="visi-icon">
          <img src="IMG/profil/icon/vision.svg" alt="">
        </div>

        <p class="visi-small">
          VISI KAMI
        </p>

        <h3>
          "Menjadi Sekolah Menengah
          Kejuruan Berbasis Teknologi
          Informasi Terdepan di Indonesia yang
          Menghasilkan Lulusan Berakhlak
          Mulia, Kompeten Standar Global,
          dan Siap Memimpin Inovasi Industri."
        </h3>

        <span class="visi-year">
          <img src="IMG/profil/icon/bendera.svg" alt="">
          Target Strategis Pendidikan 2025–2030
        </span>

      </div>


      <!-- MISI -->
      <div class="misi-list">

        <div class="misi-item">
          <span>01</span>
          <div>
            <h3>Karakter &amp; Budi Pekerti Luhur</h3>
            <p>
              Menyelenggarakan pembinaan keagamaan dan karakter Pancasila yang kokoh,
              berintegritas, mandiri, dan berbudaya kerja profesional.
            </p>
          </div>
        </div>

        <div class="misi-item">
          <span>02</span>
          <div>
            <h3>Kurikulum Presisi Industri 4.0</h3>
            <p>
              Menerapkan kurikulum berbasis Teaching Factory (TeFa) yang selaras secara dinamis
              dengan tuntutan dunia usaha dan dunia industri (DUDI).
            </p>
          </div>
        </div>

        <div class="misi-item">
          <span>03</span>
          <div>
            <h3>Sertifikasi &amp; Standarisasi Internasional</h3>
            <p>
              Membekali setiap lulusan dengan sertifikasi kompetensi keahlian resmi BNSP serta
              sertifikasi vendor global terakreditasi.
            </p>
          </div>
        </div>

        <div class="misi-item">
          <span>04</span>
          <div>
            <h3>Fasilitas &amp; Ekosistem Digital Berdaya Saing</h3>
            <p>
              Mengembangkan infrastruktur pembelajaran modern berbasis high-end cloud
              workstation, studio multimedia, dan cyber lab berstandar korporat.
            </p>
          </div>
        </div>

        <div class="misi-item">
          <span>05</span>
          <div>
            <h3>Kewirausahaan Digital &amp; Inkubasi Startup</h3>
            <p>
              Mendorong daya cipta talenta muda untuk menghasilkan solusi teknologi tepat guna
              yang mampu menciptakan lapangan kerja mandiri.
            </p>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

  <!-- ==================== NILAI BUDAYA ==================== -->
  <section class="nilai-section">
    <div class="profil-container">

      <div class="section-heading left">

        <p class="section-label mb-1">
          DNA KEBANGGAAN
        </p>

        <h2>
          Nilai Budaya Sekolah: I-N-F-O-K-O-M
        </h2>

        <p>
          Tujuh prinsip utama yang menjadi DNA organisasi dalam menjalankan
          seluruh aktivitas pendidikan di SMK INFOKOM.
        </p>

      </div>


      <div class="nilai-grid">

        <article class="nilai-card">
          <span>I</span>
          <h3>Integrity</h3>
          <p>Menjunjung tinggi kejujuran, tanggung jawab, dan integritas.</p>
        </article>

        <article class="nilai-card">
          <span>N</span>
          <h3>Novelty</h3>
          <p>Terbuka terhadap inovasi dan perkembangan teknologi.</p>
        </article>

        <article class="nilai-card">
          <span>F</span>
          <h3>Future</h3>
          <p>Berorientasi pada masa depan dan kebutuhan industri.</p>
        </article>

        <article class="nilai-card">
          <span>O</span>
          <h3>Optimistic</h3>
          <p>Memiliki semangat positif dalam menghadapi tantangan.</p>
        </article>

        <article class="nilai-card">
          <span>K</span>
          <h3>Knowledge</h3>
          <p>Mengembangkan pengetahuan dan kompetensi secara berkelanjutan.</p>
        </article>

        <article class="nilai-card">
          <span>O</span>
          <h3>Openness</h3>
          <p>Terbuka terhadap kolaborasi, kritik, dan pembelajaran.</p>
        </article>

        <article class="nilai-card">
          <span>M</span>
          <h3>Moral</h3>
          <p>Menempatkan etika dan akhlak sebagai dasar tindakan.</p>
        </article>

      </div>

    </div>
  </section>


  <!-- ==================== SEJARAH ==================== -->
  <section class="sejarah-section">
    <div class="profil-container">

      <div class="sejarah-grid">

        <div class="sejarah-photo">

          <img
            src="{{ asset('IMG/profil/component/smk-infokom.png') }}"
            alt="Sejarah SMK INFOKOM Kota Bogor"
          >

          <div class="sejarah-caption">
            Lebih dari Dua Dekade Mencetak
            Pionir Teknologi di Bogor
          </div>

        </div>


        <div class="sejarah-content">

          <p class="section-label mb-1">
            SEJARAH SMK INFOKOM
          </p>

          <h2>
            Sejarah Perjalanan SMK INFOKOM
          </h2>

          <p>
            Tumbuh dan bertransformasi dari laboratorium perakitan komputer perintis
            menjadi institusi kejuruan teknologi papan atas.
          </p>


          <div class="timeline">

            <div class="timeline-item">
              <span>Tahun 2002</span>
              <div>
                <h3>Pendirian Yayasan &amp; Program Jurusan Pertama</h3>
                <p>
                  Diresmikan dengan fokus mencetak teknisi perangkat keras komputer dan jaringan
                  perdana di kawasan Sindangbarang, Kota Bogor.
                </p>
              </div>
            </div>

            <div class="timeline-item">
              <span>Tahun 2012</span>
              <div>
                <h3>Ekspansi Rekayasa Perangkat Lunak &amp; Multimedia</h3>
                <p>
                  Menanggapi ledakan era web dan mobile application dengan meresmikan gedung
                  laboratorium modern dan kemitraan software house.
                </p>
              </div>
            </div>

            <div class="timeline-item">
              <span>Tahun 2020 - Sekarang</span>
              <div>
                <h3>Transformasi SMK Pusat Keunggulan &amp; Akreditasi A</h3>
                <p>
                  Memperoleh status Akreditasi Unggul 'A' dari BAN-SM serta mengadopsi kurikulum
                  Cloud Computing, Artificial Intelligence, dan Studio Broadcasting digital.
                </p>
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>
  </section>



  <!-- ==================== TENAGA PENDIDIK ==================== -->
  <section class="guru-section">
    <div class="profil-container">

      <div class="section-heading left">

        <p class="section-label">
          TENAGA PENDIDIK
        </p>

        <h2>
          Tenaga Pendidik &amp; Instruktur Tersertifikasi
        </h2>

        <p>
          Didampingi oleh tenaga pendidik berpengalaman dan praktisi
          industri untuk memberikan pembelajaran yang relevan.
        </p>

      </div>

      <div class="guru-grid">

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Bu%20Yeni-Photoroom.png') }}" alt="Yeni Yuliawati, S.Pd.Gr" loading="lazy">
          </div>
          <h3>Yeni Yuliawati, S.Pd.Gr</h3>
          <p>Guru Bahasa Indonesia</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Bu%20Vera-Photoroom.png') }}" alt="Vera Yuni Astuti, SP., M.I.Kom." loading="lazy">
          </div>
          <h3>Vera Yuni Astuti, SP., M.I.Kom.</h3>
          <p>Guru PKK</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Bu%20Putri-Photoroom.png') }}" alt="Putri Riandini, S.Hut." loading="lazy">
          </div>
          <h3>Putri Riandini, S.Hut.</h3>
          <p>Guru Matematika</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Bu%20Popon-Photoroom.png') }}" alt="Dra. Popon Puspitasari" loading="lazy">
          </div>
          <h3>Dra. Popon Puspitasari</h3>
          <p>Guru Agama &amp; BTQ</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Bu%20Nabila-Photoroom.png') }}" alt="Nabila Ahmad Pratama, S.Pd." loading="lazy">
          </div>
          <h3>Nabila Ahmad Pratama, S.Pd.</h3>
          <p>Guru Bahasa Indonesia</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Bu%20Heni-Photoroom.png') }}" alt="Heny Handayani, S.Pd." loading="lazy">
          </div>
          <h3>Heny Handayani, S.Pd.</h3>
          <p>Guru Seni</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Bu%20Eva-Photoroom.png') }}" alt="Eva Farida Rahayu, S.Pd." loading="lazy">
          </div>
          <h3>Eva Farida Rahayu, S.Pd.</h3>
          <p>Guru Bahasa Indonesia</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Bu%20Dian-Photoroom.png') }}" alt="Dian Hardianti, S.Kom." loading="lazy">
          </div>
          <h3>Dian Hardianti, S.Kom.</h3>
          <p>Guru Basis Data</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Bu%20Diana-Photoroom.png') }}" alt="Dra. Diana Octaria" loading="lazy">
          </div>
          <h3>Dra. Diana Octaria</h3>
          <p>Guru PPKn</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Bu%20Dara-Photoroom.png') }}" alt="Dara Purwanita, S.Pd." loading="lazy">
          </div>
          <h3>Dara Purwanita, S.Pd.</h3>
          <p>Guru Bahasa Inggris</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Bu%20Ara-Photoroom.png') }}" alt="Ara Widyatama, S.Pd." loading="lazy">
          </div>
          <h3>Ara Widyatama, S.Pd.</h3>
          <p>Guru PKK</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Fauzan-Photoroom.png') }}" alt="M. Fauzan Arifin, S.I.Kom." loading="lazy">
          </div>
          <h3>M. Fauzan Arifin, S.I.Kom.</h3>
          <p>Guru Desain Publikasi &amp; Fotografi</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Bu%20Restu-Photoroom.png') }}" alt="R. Radiani Srirestuti Dewi, SS." loading="lazy">
          </div>
          <h3>R. Radiani Srirestuti Dewi, SS.</h3>
          <p>Guru Bahasa Jepang</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Bu%20Mila-Photoroom.png') }}" alt="Mila Yaelasari, M.Pd." loading="lazy">
          </div>
          <h3>Mila Yaelasari, M.Pd.</h3>
          <p>Guru Matematika</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Yadi-Photoroom.png') }}" alt="Yadi Setiadi, S.Sos." loading="lazy">
          </div>
          <h3>Yadi Setiadi, S.Sos.</h3>
          <p>Guru PKK</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Puji-Photoroom.png') }}" alt="Drs. Puji Marhaen" loading="lazy">
          </div>
          <h3>Drs. Puji Marhaen</h3>
          <p>Guru PPKn</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Khotib-Photoroom.png') }}" alt="A. Hotib, S.Pd.I" loading="lazy">
          </div>
          <h3>A. Hotib, S.Pd.I</h3>
          <p>Guru Agama &amp; BTQ</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Jayadi-Photoroom.png') }}" alt="Jayadi, S.Pd." loading="lazy">
          </div>
          <h3>Jayadi, S.Pd.</h3>
          <p>Guru PJOK</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Azis-Photoroom.png') }}" alt="Abdul Azis, S.Pd.I" loading="lazy">
          </div>
          <h3>Abdul Azis, S.Pd.I</h3>
          <p>Guru Agama Islam</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/pak%20Erli-Photoroom.png') }}" alt="Erli Suherli, A.Md." loading="lazy">
          </div>
          <h3>Erli Suherli, A.Md.</h3>
          <p>Guru Broadcasting</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Reza-Photoroom.png') }}" alt="Reza Prafitriansyah, S.Kom." loading="lazy">
          </div>
          <h3>Reza Prafitriansyah, S.Kom.</h3>
          <p>Guru Dasar DKV</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Dea-Photoroom.png') }}" alt="Dea Rijalul Fikri, S.Kom." loading="lazy">
          </div>
          <h3>Dea Rijalul Fikri, S.Kom.</h3>
          <p>Guru Fotografi &amp; Videografi</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Agus-Photoroom.png') }}" alt="Agus Tiyono, M.Pd." loading="lazy">
          </div>
          <h3>Agus Tiyono, M.Pd.</h3>
          <p>Guru PPKn &amp; Sejarah</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Erwin-Photoroom.png') }}" alt="Erwin Hasiholan, G., S.Kom." loading="lazy">
          </div>
          <h3>Erwin Hasiholan, G., S.Kom.</h3>
          <p>Guru Produktif RPL</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Ibnu-Photoroom.png') }}" alt="M. Ibnu Arif, S.IKOM" loading="lazy">
          </div>
          <h3>M. Ibnu Arif, S.IKOM</h3>
          <p>Kepala Program (DKV)</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Ridwan-Photoroom.png') }}" alt="Ridwan Hala, S.Kom" loading="lazy">
          </div>
          <h3>Ridwan Hala, S.Kom</h3>
          <p>Kepala Program (RPL)</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Adit-Photoroom.png') }}" alt="Aditya Nugraha, ST." loading="lazy">
          </div>
          <h3>Aditya Nugraha, ST.</h3>
          <p>Kepala Program (TKJ)</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Rozi-Photoroom.png') }}" alt="Cahyadi Rozi, ST." loading="lazy">
          </div>
          <h3>Cahyadi Rozi, ST.</h3>
          <p>Kepala Tata Usaha</p>
        </article>

        <article class="guru-card">
          <div class="guru-foto">
            <div class="guru-bg"></div>
            <img src="{{ asset('IMG/profil/foto-guru/Pak%20Richo-Photoroom.png') }}" alt="Richo Santana, S.Kom" loading="lazy">
          </div>
          <h3>Richo Santana, S.Kom</h3>
          <p>Guru PWPB</p>
        </article>

      </div>

    </div>
  </section>


  <!-- ==================== LANDASAN YURIDIS ==================== -->
  <section class="yuridis-section">
    <div class="profil-container">

      <div class="yuridis-box">

        <div class="yuridis-main">

          <div class="terakreditasi-A">
            <img
              src="{{ asset('IMG/profil/icon/icon-terakreditasi.svg') }}"
              alt="Ikon Akreditasi"
            >
          </div>

          <p class="section-label">
            STATUS AKREDITASI RESMI
          </p>

          <div class="yuridis-grade">
            "A"
          </div>

          <p class="predikat">
            PREDIKAT UNGGUL (BAN-SM)
          </p>

          <span class="sertifikasi-A">
            Sertifikat BAN-SM No: 1214/BAN-SM/SK/2021
            berlaku sampai November 2026.
          </span>

        </div>


        <div class="yuridis-content">

          <span>KEPATUHAN HUKUM &amp; PERIZINAN</span>

          <h2>
            Landasan Yuridis Penyelenggaraan Pendidikan
          </h2>

          <p>
            SMK INFOKOM Kota Bogor beroperasi secara sah berdasarkan
            keputusan kementerian dan dinas pendidikan terkait.
          </p>

          <div class="yuridis-grid">

            <div>
              <strong><img src="{{ asset('IMG/profil/icon/icon-npsn.svg') }}" alt=""> NPSN NASIONAL</strong>
              <span>
                20220297<br>
                <p>Terdaftar resmi di Data Pokok Pendidikan (DAPODIK) Kemdikbudristek.</p>
              </span>
            </div>

            <div>
              <strong><img src="{{ asset('IMG/profil/icon/icon-sk.svg') }}" alt=""> SK PENDIRIAN SEKOLAH</strong>
              <span>
                421.3/87–Disdik/2002<br>
                <p>Diterbitkan oleh Dinas Pendidikan Pemerintah Kota Bogor.</p>
              </span>
            </div>

            <div>
              <strong><img src="{{ asset('IMG/profil/icon/icon-operasional.svg') }}" alt=""> SK IZIN OPERASIONAL</strong>
              <span>
                No. 503/48–Izin–SMK/BPPT/2012<br>
                <p>Badan Pelayanan Perizinan Terpadu Provinsi Jawa Barat.</p>
              </span>
            </div>

            <div>
              <strong><img src="{{ asset('IMG/profil/icon/icon-npsn.svg') }}" alt=""> YAYASAN PENYELENGGARA</strong>
              <span>
                Yayasan Infokom Jaya<br>
                <p>Akta Notaris No. 42 / Kemenkumham RI.</p>
              </span>
            </div>

          </div>

        </div>

      </div>

    </div>
  </section>


  <!-- ==================== CTA PPDB ==================== -->
  <section class="profil-cta">
    <div class="profil-container">

      <div class="cta-box">

        <div class="cta-content">

          <p class="section-label">
            <span class="cta-dot"></span>
            PENERIMAAN PESERTA DIDIK BARU
          </p>

          <h2>
            Siap Menjadi Pionir Talenta Digital<br>
            Masa Depan?
          </h2>

          <p class="cta-description">
            Bergabunglah bersama keluarga besar SMK INFOKOM Kota Bogor
            Tahun Ajaran 2025/2026. Kuota beasiswa jalur prestasi dan
            kemitraan industri terbatas!
          </p>

          <div class="cta-buttons">

            <a href="#ppdb" class="btn-primary">
              Daftar PPDB Online
              <span><img src="{{ asset('IMG/profil/icon/icon-arrow.svg') }}" alt=""></span>
            </a>

            <a href="#kontak" class="btn-secondary">
              <span class="btn-icon"><img src="{{ asset('IMG/profil/icon/icon-mesage.svg') }}" alt=""></span>
              Konsultasi Jurusan
            </a>

          </div>

        </div>

        <div class="cta-decoration">
          INFOKOM
        </div>

      </div>

    </div>
  </section>

</main>

@push('scripts')
<script src="{{ asset('JS/profil-animasi.js') }}"></script>
@endpush
@endsection