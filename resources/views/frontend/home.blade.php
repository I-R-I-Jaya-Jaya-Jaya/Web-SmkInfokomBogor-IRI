@extends('layouts.app')

@section('title')
    SMK INFOKOM Kota Bogor — Sekolah Menengah Kejuruan Pusat Keunggulan
@endsection

@section('description')
    SMK Pusat Keunggulan terakreditasi A di Kota Bogor dengan program keahlian teknologi informasi, desain, dan bisnis digital.
@endsection

@section('page', 'index')

@section('content')


      <main id="main">
        <!-- ============ 3. HERO ============ -->
        <section id="beranda" class="hero-section">
          <!-- Layer Latar Belakang (Gambar & Overlay) -->
          <div class="hero-bg-image" aria-hidden="true">
            <img src="IMG/home/smkinfokom.svg" alt="" loading="lazy" />
          </div>
          <div class="hero-bg-grid" aria-hidden="true"></div>
          <div class="hero-bg-overlay" aria-hidden="true"></div>

          <!-- Konten Utama -->
          <div class="hero-container">
            <div class="hero-content">
              <!-- Badge Pengumuman PPDB -->

              <!-- Judul Utama (Heading 1) -->
              <h1 class="hero-title">
                Menempa Generasi<br />
                <span class="text-highlight">Pemimpin Digital Unggul</span>
                &amp;<br />
                Berkarakter
              </h1>

              <!-- Deskripsi/Paragraf -->
              <p class="hero-description">
                Sekolah Menengah Kejuruan Pusat Keunggulan terakreditasi “A” di
                Kota Bogor. Memadukan kurikulum teknologi mutakhir, etika
                profesional industri global, dan integritas kepemimpinan masa
                depan.
              </p>

              <!-- Tombol Aksi (CTA Buttons) -->
              <div class="hero-actions">
                <a href="ppdb.html" class="btn btn-primary">
                  Daftar PPDB 2025/2026
                  <img src="IMG/home/user.svg" alt="" class="btn-icon" />
                </a>
                <a href="program.html" class="btn btn-ghost">
                  <img src="IMG/home/eksplorasi.svg" alt="" class="btn-icon" />
                  Eksplorasi Keahlian
                </a>
              </div>

              <!-- Fitur Utama / Keunggulan (Badges) -->
              <ul class="hero-features">
                <!-- <li class="feature-item">
                  <img src="IMG/home/terakreditasi.svg" alt="" class="feature-icon" />
                  Terakreditasi “A” (Unggul)
                </li>
                <li class="feature-item">
                  <img src="IMG/home/smkpk.svg" alt="" class="feature-icon" />
                  SMK PK Kemendikbud
                </li>
                <li class="feature-item">
                  <img src="IMG/home/mitra.svg" alt="" class="feature-icon" />
                  100+ Mitra Industri IT
                </li> -->
              </ul>
            </div>
          </div>
          <div class="hero-illustration">
            <img src="IMG/home/bawah-hero.png" alt="" class="hero-illustration" />
          </div>
        </section>

        <!-- ============ 4. STATS ============ -->
        <section class="stats-section">
          <div class="stats-container">
            <!-- Wrapper Grid Utama untuk Kartu Stats -->
            <div class="stats-grid">
              <!-- Kartu 1: Siswa Aktif -->
              <div class="stats-card">
                <div class="stats-header text-blue">
                  <img src="IMG/home/siswa.svg" alt="" class="stats-icon" />
                  <span class="stats-number">1.500+</span>
                </div>
                <p class="stats-title">Siswa &amp; Siswi Aktif</p>
                <p class="stats-desc">
                  Terbagi dalam 4 kompetensi keahlian digital masa depan.
                </p>
              </div>

              <!-- Kartu 2: Tahun Mendidik -->
              <div class="stats-card">
                <div class="stats-header text-green">
                  <img src="IMG/home/tahun.svg" alt="" class="stats-icon" />
                  <span class="stats-number">15+</span>
                </div>

                <p class="stats-title">Tahun Mendidik</p>
                <p class="stats-desc">
                  Membangun ekosistem vokasi teknologi yang adaptif &amp;
                  kredibel.
                </p>
              </div>

              <!-- Kartu 3: Guru & Staf -->
              <div class="stats-card">
                <div class="stats-header text-orange">
                  <img src="IMG/home/penyerapan.svg" alt="" class="stats-icon" />
                  <span class="stats-number">35</span>
                </div>
                <p class="stats-title">Guru &amp; Staf</p>
                <p class="stats-desc">
                  Bekerja di industri teknologi, wirausaha, &amp; PTN ternama.
                </p>
              </div>

              <!-- Kartu 4: Jumlah Prestasi -->
              <div class="stats-card">
                <div class="stats-header text-amber">
                  <img src="IMG/home/prestasi.svg" alt="" class="stats-icon" />
                  <span class="stats-number">25+</span>
                </div>
                <p class="stats-title">Prestasi Bergengsi</p>
                <p class="stats-desc">
                  Juara LKS Nasional, Hackathon, &amp; kompetisi inovasi digital.
                </p>
              </div>
            </div>
          </div>
        </section>

        <!-- ============ 5. PROGRAM KEAHLIAN ============ -->
        <section id="program" class="program-section">
          <div class="program-container">
            <div class="program-header">
              <div class="program-heading">
                <p class="program-eyebrow">
                  <span></span>
                  Program Keahlian Masa Depan
                </p>

                <h2>4 Jurusan Unggulan SMK INFOKOM</h2>

                <p class="program-description">
                  Didukung kurikulum berbasis industri terkini, laboratorium
                  berstandar enterprise, dan sertifikasi BNSP serta internasional.
                </p>
              </div>

              <a href="kontak.html" class="program-consult">
                Konsultasi Jurusan PPDB
                <img src="IMG/home/info.svg" alt="" class="program-consult-icon" />
              </a>
            </div>

            <div class="program-grid">
              <!-- TKJ -->
              <article class="program-card">
                <div class="program-image tkj">
                  <img src="IMG/home/tkj.svg" alt="Teknik Komputer dan Jaringan" />

                  <span class="program-badge-tkj">TKJ</span>

                  <div class="program-image-title">
                    MikroTik &amp; Cisco Academy
                  </div>
                </div>

                <div class="program-content">
                  <p class="program-category">NETWORK &amp; SECURITY</p>

                  <h3>Teknik Komputer &amp; Jaringan</h3>

                  <p class="program-text">
                    Konfigurasi routing enterprise, fiber optic splicing, server
                    Linux/Windows, cyber defense, dan cloud computing.
                  </p>

                  <div class="program-tags">
                    <span>MikroTik</span>
                    <span>Cisco</span>
                    <span>Fiber Optic</span>
                    <span>AWS Cloud</span>
                  </div>

                  <a href="kontak.html" class="program-button">
                    Lihat Silabus Lengkap
                  </a>
                </div>
              </article>

              <!-- RPL -->
              <article class="program-card">
                <div class="program-image rpl">
                  <img src="IMG/home/rpl.svg" alt="Rekayasa Perangkat Lunak" />

                  <span class="program-badge-rpl">RPL</span>

                  <div class="program-image-title">
                    Fullstack Web &amp; Mobile
                  </div>
                </div>

                <div class="program-content">
                  <p class="program-category">SOFTWARE ENGINEERING</p>

                  <h3>Rekayasa Perangkat Lunak</h3>

                  <p class="program-text">
                    Pengembangan aplikasi web, mobile apps, database modern,
                    RESTful API, dan integrasi Artificial Intelligence.
                  </p>

                  <div class="program-tags">
                    <span>React</span>
                    <span>Next.js</span>
                    <span>Flutter</span>
                    <span>Python</span>
                    <span>Laravel</span>
                  </div>

                  <a href="kontak.html" class="program-button">
                    Lihat Silabus Lengkap
                  </a>
                </div>
              </article>

              <!-- DKV -->
              <article class="program-card">
                <div class="program-image dkv">
                  <img src="IMG/home/dkv.svg" alt="Desain Komunikasi Visual" />

                  <span class="program-badge-dkv">DKV</span>

                  <div class="program-image-title">UI/UX &amp; 3D Animation</div>
                </div>

                <div class="program-content">
                  <p class="program-category">CREATIVE MEDIA</p>

                  <h3>Desain Komunikasi Visual</h3>

                  <p class="program-text">
                    Desain UI/UX digital, motion graphic, videografi sinematik,
                    branding visual perusahaan, dan permodelan animasi 3D Blender.
                  </p>

                  <div class="program-tags">
                    <span>Figma UI/UX</span>
                    <span>Adobe Suite</span>
                    <span>Blender 3D</span>
                    <span>Premiere Pro</span>
                  </div>

                  <a href="kontak.html" class="program-button">
                    Lihat Silabus Lengkap
                  </a>
                </div>
              </article>

              <!-- PSPT -->
              <article class="program-card">
                <div class="program-image pspt">
                  <img src="IMG/home/pspt.svg" alt="Produksi dan Siaran Televisi" />

                  <span class="program-badge-pspt">PSPT</span>

                  <div class="program-image-title">Studio Broadcast &amp; TV</div>
                </div>

                <div class="program-content">
                  <p class="program-category">BROADCASTING &amp; FILM</p>

                  <h3>Produksi &amp; Siaran Televisi</h3>

                  <p class="program-text">
                    Manajemen studio siaran, teknik pengoperasian kamera studio,
                    live broadcasting switcher, audio engineering, dan tata
                    artistik.
                  </p>

                  <div class="program-tags">
                    <span>Live Switcher</span>
                    <span>Studio Lighting</span>
                    <span>Multi-Camera</span>
                    <span>Sound Eng.</span>
                  </div>

                  <a href="kontak.html" class="program-button">
                    Lihat Silabus Lengkap
                  </a>
                </div>
              </article>
            </div>
          </div>
        </section>

        <!-- ============ 6. KEGIATAN KARAKTER ============ -->
        <section id="karakter" class="karakter-section">
          <div class="karakter-container">
            <div class="karakter-header">
              <p class="karakter-eyebrow">Kedisiplinan &amp; Budi Pekerti</p>

              <h2>Kegiatan Pembentukan Karakter Unggul</h2>

              <p>
                Di SMK INFOKOM, keahlian teknologi berjalan seiring dengan
                integritas kepribadian, ketakwaan spiritual, dan etika kerja
                industri yang berdisiplin tinggi.
              </p>
            </div>

            <div class="karakter-grid">
              <!-- Upacara -->
              <article class="karakter-card">
                <div class="karakter-image upacara">
                  <img src="IMG/home/upacara.jpeg" alt="Upacara Bendera" />

                  <span class="karakter-badge upacara">
                    <img
                      src="IMG/home/bendera.svg"
                      alt=""
                      class="karakter-badge-icon"
                    />
                    SENIN PAGI</span
                  >
                </div>

                <div class="karakter-content">
                  <h3>
                    <img
                      src="IMG/home/pimpinan.svg"
                      alt="Upacara Bendera"
                      class="karakter-badge-icon"
                    />
                    Upacara Bendera &amp; Disiplin
                  </h3>
                  <p>
                    Menanamkan rasa nasionalisme, cinta tanah air, integritas
                    moral, serta ketepatan waktu dalam pembuka pekan belajar
                    secara khidmat dan tertib.
                  </p>

                  <div class="karakter-info">
                    <img
                      src="IMG/home/ceklis.svg"
                      alt=""
                      class="karakter-badge-icon"
                    />
                    Pemeriksaan kerapihan seragam &amp; kedisiplinan
                  </div>
                </div>
              </article>

              <!-- 5S -->
              <article class="karakter-card">
                <div class="karakter-image budaya">
                  <img src="IMG/home/kepala-sekolah-pidato.jpg" alt="Budaya Kerja 5S" />

                  <span class="karakter-badge budaya"
                    ><img src="IMG/home/disiplin.svg" alt="Budaya Kerja 5S" />KAMIS
                    PAGI</span
                  >
                </div>

                <div class="karakter-content">
                  <h3>
                    <img
                      src="IMG/home/pembinaan.svg"
                      alt="Upacara Bendera"
                      class="karakter-badge-icon"
                    />Pembinaan Karakter &amp; Soft Skills
                  </h3>

                  <p>
                    Membangun etika komunikasi profesional, kerja sama tim,
                    problem solving, pembiasaan standar industri internasional,
                    dan kepemimpinan vokasi.
                  </p>

                  <div class="karakter-info">
                    <img
                      src="IMG/home/ceklis.svg"
                      alt=""
                      class="karakter-badge-icon"
                    />
                    Mentoring wali kelas &amp; konseling terarah
                  </div>
                </div>
              </article>

              <!-- Rohani -->
              <article class="karakter-card">
                <div class="karakter-image rohani">
                  <img src="IMG/home/dhuha.jpeg" alt="Kegiatan Rohani" />

                  <span class="karakter-badge rohani">
                    <img
                      src="IMG/home/rohani.svg"
                      alt=""
                      class="karakter-badge-icon"
                    />
                    JUMAT BERKAH
                  </span>
                </div>

                <div class="karakter-content">
                  <h3>
                    <img
                      src="IMG/home/rohani-icon.svg"
                      alt="Upacara Bendera"
                      class="karakter-badge-icon"
                    />Sholat Dhuha &amp; Rohani Bersama
                  </h3>

                  <p>
                    Membina ketenangan batin melalui pembacaan Asmaul Husna,
                    sholat dhuha berjamaah, kajian motivasi Islami, dan sedekah
                    rutin sebagai wujud kepedulian sosial.
                  </p>

                  <div class="karakter-info">
                    <img
                      src="IMG/home/ceklis.svg"
                      alt=""
                      class="karakter-badge-icon"
                    />
                    Kajian etika moral &amp; kepedulian sosial sesama
                  </div>
                </div>
              </article>
            </div>
          </div>
        </section>

        <!-- ============ 7. MENGAPA MEMILIH ============ -->
        <section id="keunggulan" class="keunggulan-section">
          <div class="keunggulan-container">
            <div class="keunggulan-header">
              <p class="keunggulan-eyebrow">Keunggulan Lembaga</p>

              <h2>Mengapa Memilih SMK INFOKOM BOGOR?</h2>

              <p>
                Kami memadukan disiplin pembentukan karakter dengan fasilitas
                mutakhir agar setiap siswa memiliki keunggulan kompetitif di era
                revolusi industri.
              </p>
            </div>

            <div class="keunggulan-grid">
              <!-- 1. Kurikulum -->
              <article class="keunggulan-card">
                <span class="keunggulan-icon kurikulum">
                  <img src="IMG/home/kurikulum-icon.svg" alt="" class="keunggulan-icon-img" />
                </span>

                <h3>Kurikulum Selaras Industri</h3>

                <p>
                  Disusun bersama pimpinan teknis startup dan perusahaan teknologi
                  nasional sehingga siswa mempelajari teknologi yang sedang
                  dipakai di lapangan.
                </p>
              </article>

              <!-- 2. Fasilitas -->
              <article class="keunggulan-card">
                <span class="keunggulan-icon fasilitas">
                  <img src="IMG/home/fasilitas-icon.svg" alt="" class="keunggulan-icon-img" />
                </span>

                <h3>Fasilitas Lab Komputer Modern</h3>

                <p>
                  Dilengkapi perangkat PC workstation spek tinggi, server jaringan
                  rack-mount berkapasitas besar, dan akses internet gigabit
                  dedicated fiber optic.
                </p>
              </article>

              <!-- 3. Sertifikasi -->
              <article class="keunggulan-card">
                <span class="keunggulan-icon sertifikasi">
                  <img src="IMG/home/sertifikasi-icon.svg" alt="" class="keunggulan-icon-img" />
                </span>

                <h3>Sertifikasi Internasional &amp; BNSP</h3>

                <p>
                  Lulusan dibekali sertifikat kompetensi resmi MikroTik MTCNA,
                  Cisco CCNA, Adobe Certified Professional, serta sertifikasi
                  resmi BNSP Indonesia.
                </p>
              </article>

              <!-- 4. Magang -->
              <article class="keunggulan-card">
                <span class="keunggulan-icon magang">
                  <img src="IMG/home/penyaluran-icon.svg" alt="" class="keunggulan-icon-img" />
                </span>

                <h3>Penyaluran Magang Jepang &amp; Karir Nyata</h3>

                <p>
                  Kerja sama aktif dengan 100+ korporasi teknologi ternama
                  menjamin program Praktik Kerja Industri (Prakerin) berkualitas
                  dan bursa kerja khusus (BKK).
                </p>
              </article>

              <!-- 5. Pengajar -->
              <article class="keunggulan-card">
                <span class="keunggulan-icon pengajar">
                  <img src="IMG/home/pengajar-icon.svg" alt="" class="keunggulan-icon-img" />
                </span>

                <h3>Pengajar Praktisi Berpengalaman</h3>

                <p>
                  Kombinasi guru bersertifikasi profesi pendidik dan instruktur
                  tamu dari jajaran engineer serta creative director industri
                  aktif.
                </p>
              </article>

              <!-- 6. Karakter -->
              <article class="keunggulan-card">
                <span class="keunggulan-icon karakter">
                  <img src="IMG/home/pendidikan-icon.svg" alt="" class="keunggulan-icon-img" />
                </span>

                <h3>Pendidikan Karakter &amp; Disiplin</h3>

                <p>
                  Membentuk integritas moral, etika kerja profesional, sopan
                  santun, ketangguhan mental, dan semangat kewirausahaan digital
                  mandiri.
                </p>
              </article>
            </div>
          </div>
        </section>

        <!-- ============ 8. JALUR KULIAH ============ -->
        <section id="jalur-kuliah" class="jalur-kuliah">
          <div class="shell">

            <!-- Header -->
            <div class="jalur-header">
              <p class="karakter-eyebrow">Lanjut Studi ke Perguruan Tinggi</p>

              <h2>Lulusan SMK INFOKOM</h2>

              <p>
                Lulusan SMK INFOKOM memiliki bekal portofolio kompetensi dan nilai
                akademik yang kuat untuk menembus Perguruan Tinggi Negeri maupun
                Perguruan Tinggi Swasta favorit.
              </p>
            </div>


            <!-- Container PTN & PTS -->
            <div class="jalur-container">

              <!-- ================= PTN ================= -->
              <div class="jalur-card">

                <div class="jalur-card-header">

                  <div class="jalur-title">
                    <div class="jalur-icon jalur-icon-ptn">
                      <img src="IMG/home/PTN-icon.svg" alt="" class="jalur-icon-img" />
                    </div>

                    <div>
                      <h3>Perguruan Tinggi Negeri (PTN)</h3>
                      <p>Jalur SNBP, SNBT, Prestasi &amp; Mandiri</p>
                    </div>
                  </div>

                  <span class="jalur-badge ptn-badge">
                    Jalur Prestasi
                  </span>

                </div>


                <!-- Daftar PTN -->
                <div class="kampus-list">

                  <div class="kampus-item">
                    <img src="IMG/home/logo/ipb-university.jpg" alt="Logo IPB University">

                    <div>
                      <h4>IPB University</h4> 
                      <p>Ilmu Komputer &amp; Sekolah Vokasi</p>
                    </div>
                  </div>

                  <!--
                  <div class="kampus-item">
                    <img src="IMG/home/logo/universitas-indonesia.jpg" alt="Logo Universitas Indonesia">

                    <div>
                      <h4>Universitas Indonesia</h4>
                      <p>Fasilkom &amp; Program Vokasi UI</p>
                    </div>
                  </div> -->


                  <div class="kampus-item">
                    <img src="IMG/home/logo/upi.jpg" alt="Logo UPI">

                    <div>
                      <h4>UPI Bandung</h4>
                      <p>Pendidikan Ilmu Komputer / Teknik</p>
                    </div>
                  </div>

                  <!--
                  <div class="kampus-item">
                    <img src="IMG/home/logo/politeknik-negeri-jakarta.jpg" alt="Logo Politeknik Negeri Jakarta">

                    <div>
                      <h4>Politeknik Negeri Jakarta</h4>
                      <p>Teknik Informatika &amp; Komputer</p>
                    </div>
                  </div> -->

                  <!--
                  <div class="kampus-item">
                    <img src="IMG/home/logo/universitas-negeri-malang.jpg" alt="Logo Universitas Negeri Malang">

                    <div>
                      <h4>Universitas Negeri Malang</h4>
                      <p>Teknologi Informasi / Rekayasa Perangkat Lunak</p>
                    </div>
                  </div> -->


                  <div class="kampus-item">
                    <img src="IMG/home/logo/universitas-siliwangi.jpg" alt="Logo Universitas Siliwangi">

                    <div>
                      <h4>Universitas Siliwangi</h4>
                      <p>Informatika &amp; Sistem Informasi</p>
                    </div>
                  </div>


                  <div class="kampus-item">
                    <img src="IMG/home/logo/upn-veteran-jakarta.jpg" alt="Logo UPN Veteran Jakarta">

                    <div>
                      <h4>UPN “Veteran” Jakarta</h4>
                      <p>Fakultas Ilmu Komputer &amp; Sains Informasi</p>
                    </div>
                  </div>

                </div>

              </div>


              <!-- ================= PTS ================= -->
              <div class="jalur-card">

                <div class="jalur-card-header">

                  <div class="jalur-title">
                    <div class="jalur-icon jalur-icon-pts">
                      <img src="IMG/home/PTS-icon.svg" alt="" class="jalur-icon-img" />
                    </div>

                    <div>
                      <h3>Perguruan Tinggi Swasta (PTS)</h3>
                      <p>Jalur Kemitraan Khusus &amp; Beasiswa</p>
                    </div>
                  </div>

                  <span class="jalur-badge pts-badge">
                    Beasiswa MoU
                  </span>

                </div>

                <!-- Daftar PTS -->
                <div class="kampus-list">

                  <div class="kampus-item">
                    <img src="IMG/home/logo/telkom-university.jpg" alt="Logo Telkom University">

                    <div>
                      <h4>Telkom University</h4>
                      <p>Informatika &amp; Desain Kreatif</p>
                    </div>
                  </div>

                  <!--
                  <div class="kampus-item">
                    <img src="IMG/home/logo/binus-university.jpg" alt="Logo BINUS University">

                    <div>
                      <h4>BINUS University</h4>
                      <p>School of Computer Science &amp; DKV</p>
                    </div>
                  </div> -->


                  <div class="kampus-item">
                    <img src="IMG/home/logo/universitas-bsi.jpg" alt="Logo Universitas BSI">

                    <div>
                      <h4>Universitas BSI</h4>
                      <p>Sistem Informasi &amp; Broadcasting</p>
                    </div>
                  </div>


                  <div class="kampus-item">
                    <img src="IMG/home/logo/universitas-pakuan.jpg" alt="Logo Universitas Pakuan">

                    <div>
                      <h4>Universitas Pakuan Bogor</h4>
                      <p>Ilmu Komputer &amp; Manajemen Bisnis</p>
                    </div>
                  </div>


                  <div class="kampus-item">
                    <img src="IMG/home/logo/universitas-gunadarma.jpg" alt="Logo Universitas Gunadarma">

                    <div>
                      <h4>Universitas Gunadarma</h4>
                      <p>Teknologi Informasi &amp; Rekayasa</p>
                    </div>
                  </div>


                  <div class="kampus-item">
                    <img src="IMG/home/logo/umn.jpg" alt="Logo Universitas Multimedia Nusantara">

                    <div>
                      <h4>Universitas Multimedia Nusantara</h4>
                      <p>Visual Communication &amp; Film</p>
                    </div>
                  </div>

                  <!--
                  <div class="kampus-item kampus-full">
                    <img src="IMG/home/logo/uika.jpg" alt="Logo Universitas Ibn Khaldun">

                    <div>
                      <h4>Universitas Ibn Khaldun (UIKA)</h4>
                      <p>Teknik Informatika &amp; Rekayasa Sistem</p>
                    </div>
                  </div> -->

                </div>

              </div>

            </div>
          </div>
        </section>


        <!-- ============ 9. TESTIMONI ============ -->
        <section class="testimoni">
          <div class="shell">

            <div class="testimoni-header">
              <p class="keunggulan-eyebrow">Suara Komunitas</p>

              <h2>
                Apa Kata Alumni &amp; Orang Tua?
              </h2>

              <p>
                Kisah nyata perjalanan mereka bertransformasi bersama ekosistem
                pendidikan SMK INFOKOM Bogor.
              </p>
            </div>

            {{-- Testimoni masih statis (belum ada model/controller).
                 Salin blok <figure> untuk menambah testimoni. Inisial di
                 avatar diisi manual. --}}
            <div class="testimoni-list">

              <!-- Testimoni 1 -->
              <figure class="testimoni-card">

                <div class="rating" role="img" aria-label="Penilaian 5 dari 5 bintang">
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 1" class="rating-icon" />
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 2" class="rating-icon" />
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 3" class="rating-icon" />
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 4" class="rating-icon" />
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 5" class="rating-icon" />
                </div>

                <blockquote>
                  “Di SMK INFOKOM saya langsung praktek teknologi industri nyata.
                  Portofolio coding proyek riil membuat saya langsung diterima
                  sebagai Software Engineer di salah satu tech unicorn Jakarta
                  bahkan sebelum wisuda.”
                </blockquote>

                <figcaption class="testimoni-user">
                  <span class="user-avatar avatar-dark">RA</span>

                  <span>
                    <span class="user-name">Rian Ardiansyah</span>
                    <span class="user-role">
                      Alumni RPL • Software Engineer di Tech Unicorn
                    </span>
                  </span>
                </figcaption>

              </figure>

              <!-- Testimoni 2 (placeholder, ganti isinya) -->
              <figure class="testimoni-card">

                <div class="rating" role="img" aria-label="Penilaian 5 dari 5 bintang">
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 1" class="rating-icon" />
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 2" class="rating-icon" />
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 3" class="rating-icon" />
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 4" class="rating-icon" />
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 5" class="rating-icon" />
                </div>

                <blockquote>
                  “Isi testimoni alumni di sini.”
                </blockquote>

                <figcaption class="testimoni-user">
                  <span class="user-avatar avatar-dark">NA</span>

                  <span>
                    <span class="user-name">Nama Alumni</span>
                    <span class="user-role">Alumni</span>
                  </span>
                </figcaption>

              </figure>

              <!-- Testimoni 3 (placeholder, ganti isinya) -->
              <figure class="testimoni-card">

                <div class="rating" role="img" aria-label="Penilaian 5 dari 5 bintang">
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 1" class="rating-icon" />
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 2" class="rating-icon" />
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 3" class="rating-icon" />
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 4" class="rating-icon" />
                  <img src="IMG/home/staron-icon.svg" alt="Bintang 5" class="rating-icon" />
                </div>

                <blockquote>
                  “Isi testimoni orang tua siswa di sini.”
                </blockquote>

                <figcaption class="testimoni-user">
                  <span class="user-avatar avatar-dark">NO</span>

                  <span>
                    <span class="user-name">Nama Orang Tua</span>
                    <span class="user-role">Orang Tua Siswa</span>
                  </span>
                </figcaption>

              </figure>

            </div>

          </div>
        </section>

        <!-- ============ 10. CTA / PPDB ============ -->
        <section id="ppdb-cta" class="ppdb-cta">
          <div class="shell">

            <div class="ppdb-box">

              <div class="ppdb-grid-lines"></div>

              <div class="ppdb-circle"></div>

              <div class="ppdb-content">

                <p class="ppdb-label">
                  <img src="IMG/home/laudspeker-icon.svg" alt="" class="ppdb-icon" />
                  KUOTA TERBATAS — GELOMBANG I PPDB
                </p>

                <h2>
                  Siap Menjadi Talenta IT Masa Depan?<br>
                  <span>Bergabunglah Bersama Kami Sekarang!</span>
                </h2>

                <p class="ppdb-description">
                  Dapatkan beasiswa prestasi, potongan biaya sarana pendidikan,
                  dan jaminan lingkungan belajar vokasi yang mendukung masa depan
                  karir digital Anda.
                </p>


                <div class="ppdb-buttons">

                  <a href="kontak.html" class="btn-daftarppdb">
                    <img src="IMG/home/user-icon.svg" alt="Daftar">
                    Daftar PPDB Online
                  </a>

                  <a href="https://wa.me/62251832899"
                     class="btn-whatsapp" target="_blank" rel="noopener">
                    <img src="IMG/home/konsultasi-icon.svg" alt="WhatsApp">
                    Konsultasi via WhatsApp
                  </a>

                </div>


                <a href="#" class="download-brosur">
                  <img src="IMG/home/unduh.svg" alt="Brosur PPDB">
                  Unduh Brosur PPDB (PDF)
                </a>


                <ul class="ppdb-info">

                  <li>
                    <img src="IMG/home/telpn-icon.svg" alt="Hotline PPDB">
                    Hotline PPDB: (0251) 8328-999
                  </li>

                  <li>
                    <img src="IMG/home/maps-icon.svg" alt="Alamat Sekretariat">
                    Sekretariat: Jl. Letjen Ibrahim Adjie No. 178, Sindangbarang, Bogor Barat
                  </li>

                </ul>

              </div>
            </div>
          </div>
        </section>

      </main>

@endsection