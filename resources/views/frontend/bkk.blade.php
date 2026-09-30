@extends('layouts.app')

@section('title', 'Bursa Kerja Khusus - SMK INFOKOM BOGOR')
@section('description', 'Bursa Kerja Khusus (BKK) SMK INFOKOM BOGOR menghubungkan lulusan dengan dunia usaha dan
industri, termasuk program magang & kerja ke Jepang.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/bkk.css') }}">
@endpush

@section('content')

{{-- ============================= --}}
{{-- 1. HERO SECTION                --}}
{{-- ============================= --}}
<section class="bkk-hero">
    <div class="bkk-container bkk-hero__inner">
        <div class="bkk-hero__text">
            <p class="bkk-eyebrow">Bursa Kerja Khusus (BKK)</p>
            <h1 class="bkk-hero__title">Bursa Kerja Khusus <span>SMK INFOKOM BOGOR</span></h1>
            <p class="bkk-hero__desc">
                Pusat penyaluran kerja alumni dan pengembangan karir siswa di bidang teknologi informasi.
                Menghubungkan talenta digital muda dengan ekosistem DUDI (Dunia Usaha &amp; Dunia Industri)
                skala nasional hingga multinasional.
            </p>
            <div class="bkk-hero__actions">
                <a href="#lowongan" class="btn-solid">Lihat Lowongan
                    <img src="{{ asset('IMG/bkk/icon/icon.svg') }}" alt="" width="16" height="16">
                </a>
                <a href="#kontak-bkk" class="btn-outline">Hubungi BKK
                    <img src="{{ asset('IMG/bkk/icon/icon-chat.svg') }}" alt="" width="16" height="16">
                </a>
            </div>
            <div class="bkk-hero__badges">
                <span>
                    <img src="{{ asset('IMG/bkk/icon/icon-checklis.svg') }}" alt="" width="16" height="16">
                    Legalitas Izin BKK Disnaker
                </span>
                <span>
                    <img src="{{ asset('IMG/bkk/icon/icon-check.svg') }}" alt="" width="16" height="16">
                    100% Bebas Biaya Pungutan
                </span>
            </div>
        </div>

        <div class="bkk-hero__media">
            <span class="bkk-hero__floatchip bkk-hero__floatchip--top"><img
                    src="{{ asset('IMG/bkk/icon/icon-globe.svg') }}" alt="">Karier Global Terbuka</span>
            <div class="bkk-hero__image">
                <img src="{{ asset('IMG/bkk/image.png') }}" alt="Siswa SMK INFOKOM Bogor bekerja">
            </div>
            <div class="bkk-hero__floatcard">
                <span class="bkk-hero__floatcard-icon"><img src="{{ asset('IMG/bkk/icon/icon-calender.svg') }}"
                        alt=""></span>
                <div>
                    <strong>Terverifikasi</strong>
                    <small>Disnaker Kota Bogor</small>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================= --}}
{{-- 2. BANNER PROGRAM JEPANG       --}}
{{-- ============================= --}}
<section class="bkk-banner-jepang">
    <div class="bkk-container bkk-banner-jepang__inner">
        <div class="bkk-banner-jepang__text">
            <h2>Program Magang &amp; Kerja ke Jepang</h2>
            <p>
                Kesempatan magang dan bekerja di Jepang bagi siswa &amp; alumni yang menguasai Bahasa Jepang
                dengan lancar. Dilengkapi pelatihan intensif bahasa (N4/N3), budaya kerja Kaizen, pembekalan
                teknis, dan penempatan kerja resmi berjenjang standar industri Jepang.
            </p>
        </div>
        <a href="#program-jepang" class="btn-dark">Info Selengkapnya
            <img src="{{ asset('IMG/bkk/icon/icon-arrow.svg') }}" alt="" width="16" height="16">
        </a>
    </div>
</section>

{{-- ============================= --}}
{{-- 3. REKAPITULASI / STATISTIK    --}}
{{-- ============================= --}}
<section class="bkk-stats">
    <div class="bkk-container">
        <div class="bkk-section-head bkk-section-head--center">
            <p class="bkk-eyebrow bkk-eyebrow--center">Akuntabilitas &amp; Rekam Jejak</p>
            <h2>Rekapitulasi Capaian Penyaluran BKK</h2>
            <p class="bkk-section-desc">Data kumulatif keterikatan lulusan SMK INFOKOM Bogor pada sektor industri
                berbasis keahlian teknologi informasi.</p>
        </div>

        <div class="bkk-stats__grid">
            {{-- 1. Alumni Tersalurkan --}}
            <div class="bkk-stat-card">
                <div class="bkk-stat-card__icon">
                    <img src="{{ asset('IMG/bkk/icon/icon-alumni.svg') }}" alt="" width="22" height="22">
                </div>
                <h3 class="bkk-stat-card__angka">500+</h3>
                <p class="bkk-stat-card__label">Alumni Tersalurkan</p>
            </div>
            {{-- 2. Perusahaan Mitra --}}
            <div class="bkk-stat-card">
                <div class="bkk-stat-card__icon">
                    <img src="{{ asset('IMG/bkk/icon/icon-perusahaan.svg') }}" alt="" width="22" height="22">
                </div>
                <h3 class="bkk-stat-card__angka">10+</h3>
                <p class="bkk-stat-card__label">Perusahaan Mitra</p>
            </div>
            {{-- 3. Penyerapan Kerja --}}
            <div class="bkk-stat-card">
                <div class="bkk-stat-card__icon">
                    <img src="{{ asset('IMG/bkk/icon/icon-penyerapan.svg') }}" alt="" width="22" height="22">
                </div>
                <h3 class="bkk-stat-card__angka">95%</h3>
                <p class="bkk-stat-card__label">Penyerapan Kerja</p>
            </div>
            {{-- 4. Lowongan Aktif --}}
            <div class="bkk-stat-card">
                <div class="bkk-stat-card__icon">
                    <img src="{{ asset('IMG/bkk/icon/icon-lowongan.svg') }}" alt="" width="22" height="22">
                </div>
                <h3 class="bkk-stat-card__angka">12+</h3>
                <p class="bkk-stat-card__label">Lowongan Aktif</p>
            </div>
            {{-- 5. Magang Jepang (highlight) --}}
            <div class="bkk-stat-card bkk-stat-card--highlight">
                <div class="bkk-stat-card__icon">
                    <img src="{{ asset('IMG/bkk/icon/icon-globe.svg') }}" alt="" width="22" height="22">
                </div>
                <h3 class="bkk-stat-card__angka">Tersedia</h3>
                <p class="bkk-stat-card__label">Magang Jepang</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================= --}}
{{-- 4. LOWONGAN KERJA TERKINI      --}}
{{-- ============================= --}}

<section class="bkk-lowongan" id="lowongan">
    <div class="bkk-container">
        <div class="bkk-section-head">
            <p class="bkk-eyebrow"><span class="bkk-dot"></span> Peluang Karir Eksklusif</p>
            <h2>Lowongan Kerja Terkini</h2>
            <p class="bkk-section-desc">Peluang karir eksklusif bagi siswa tingkat akhir dan alumni SMK INFOKOM BOGOR
                terverifikasi BKK.</p>
        </div>

        <div class="bkk-lowongan__filter">
            @foreach (['Semua', 'Software', 'Networking', 'Multimedia', 'Lainnya'] as $i => $filter)
            <button type="button" class="bkk-filter-btn {{ $i === 0 ? 'is-active' : '' }}" data-filter="{{ $filter }}">
                {{ $filter }}
            </button>
            @endforeach
        </div>

        {{-- Lowongan masih statis (belum ada model/controller).
             Isi di bawah hanya CONTOH, ganti dengan data asli.
             Salin blok .bkk-job-card untuk menambah lowongan.
             data-kategori harus sama dengan salah satu tombol filter di atas. --}}
        <div class="bkk-lowongan__grid">

            {{-- Lowongan 1: Software --}}
            <div class="bkk-job-card" data-kategori="Software">
                <div class="bkk-job-card__top">
                    <div class="bkk-job-card__logo">NP</div>
                    <span class="bkk-job-card__type">Full-time</span>
                </div>
                <p class="bkk-job-card__perusahaan">Nama Perusahaan</p>
                <h3 class="bkk-job-card__posisi">Junior Web Developer</h3>

                <ul class="bkk-job-card__meta">
                    <li>
                        <img src="{{ asset('IMG/bkk/icon/icon-map-pin.svg') }}" alt="" width="14" height="14">
                        Bogor, Jawa Barat
                    </li>
                    <li>
                        <img src="{{ asset('IMG/bkk/icon/icon-gaji.svg') }}" alt="" width="14" height="14">
                        Sesuai kesepakatan
                    </li>
                    <li class="bkk-job-card__deadline">
                        <img src="{{ asset('IMG/bkk/icon/icon-deadline.svg') }}" alt="" width="14" height="14">
                        Batas: 31 Oktober 2026
                    </li>
                </ul>

                <div class="bkk-job-card__skills">
                    <span>Laravel</span>
                    <span>MySQL</span>
                    <span>Git</span>
                </div>

                <div class="bkk-job-card__footer">
                    <span class="bkk-job-card__kuota">Kuota: 3 Siswa</span>
                    <a href="#kontak-bkk" class="btn-solid btn-sm">
                        Lamar Sekarang
                        <img src="{{ asset('IMG/bkk/icon/icon-share.svg') }}" alt="" width="14" height="14">
                    </a>
                </div>
            </div>

            {{-- Lowongan 2: Networking --}}
            <div class="bkk-job-card" data-kategori="Networking">
                <div class="bkk-job-card__top">
                    <div class="bkk-job-card__logo">NP</div>
                    <span class="bkk-job-card__type">Magang</span>
                </div>
                <p class="bkk-job-card__perusahaan">Nama Perusahaan</p>
                <h3 class="bkk-job-card__posisi">Network Support</h3>

                <ul class="bkk-job-card__meta">
                    <li>
                        <img src="{{ asset('IMG/bkk/icon/icon-map-pin.svg') }}" alt="" width="14" height="14">
                        Bogor, Jawa Barat
                    </li>
                    <li>
                        <img src="{{ asset('IMG/bkk/icon/icon-gaji.svg') }}" alt="" width="14" height="14">
                        Sesuai kesepakatan
                    </li>
                    <li class="bkk-job-card__deadline">
                        <img src="{{ asset('IMG/bkk/icon/icon-deadline.svg') }}" alt="" width="14" height="14">
                        Batas: 31 Oktober 2026
                    </li>
                </ul>

                <div class="bkk-job-card__skills">
                    <span>MikroTik</span>
                    <span>Cisco</span>
                    <span>Linux</span>
                </div>

                <div class="bkk-job-card__footer">
                    <span class="bkk-job-card__kuota">Kuota: 5 Siswa</span>
                    <a href="#kontak-bkk" class="btn-solid btn-sm">
                        Lamar Sekarang
                        <img src="{{ asset('IMG/bkk/icon/icon-share.svg') }}" alt="" width="14" height="14">
                    </a>
                </div>
            </div>

            {{-- Lowongan 3: Multimedia --}}
            <div class="bkk-job-card" data-kategori="Multimedia">
                <div class="bkk-job-card__top">
                    <div class="bkk-job-card__logo">NP</div>
                    <span class="bkk-job-card__type">Kontrak</span>
                </div>
                <p class="bkk-job-card__perusahaan">Nama Perusahaan</p>
                <h3 class="bkk-job-card__posisi">UI/UX &amp; Graphic Designer</h3>

                <ul class="bkk-job-card__meta">
                    <li>
                        <img src="{{ asset('IMG/bkk/icon/icon-map-pin.svg') }}" alt="" width="14" height="14">
                        Bogor, Jawa Barat
                    </li>
                    <li>
                        <img src="{{ asset('IMG/bkk/icon/icon-gaji.svg') }}" alt="" width="14" height="14">
                        Sesuai kesepakatan
                    </li>
                    <li class="bkk-job-card__deadline">
                        <img src="{{ asset('IMG/bkk/icon/icon-deadline.svg') }}" alt="" width="14" height="14">
                        Batas: 31 Oktober 2026
                    </li>
                </ul>

                <div class="bkk-job-card__skills">
                    <span>Figma</span>
                    <span>Adobe Photoshop</span>
                    <span>Illustrator</span>
                </div>

                <div class="bkk-job-card__footer">
                    <span class="bkk-job-card__kuota">Kuota: 2 Siswa</span>
                    <a href="#kontak-bkk" class="btn-solid btn-sm">
                        Lamar Sekarang
                        <img src="{{ asset('IMG/bkk/icon/icon-share.svg') }}" alt="" width="14" height="14">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================= --}}
{{-- 5. PROGRAM UNGGULAN            --}}
{{-- ============================= --}}
<section class="bkk-program" id="program-jepang">
    <div class="bkk-container">
        <div class="bkk-section-head bkk-section-head--center">
            <p class="bkk-eyebrow bkk-eyebrow--center">Akselerasi Kompetensi</p>
            <h2>Program Unggulan Penyaluran BKK</h2>
            <p class="bkk-section-desc">Dua pilar utama pembinaan karir yang dirancang presisi untuk memastikan lulusan
                memiliki daya saing tinggi di pasar kerja domestik dan global.</p>
        </div>

        <div class="bkk-program__grid">
            {{-- kiri: domestik --}}
            <div class="bkk-program-card">
                <div class="bkk-program-card__icon">
                    <img src="{{ asset('IMG/bkk/icon/icon-jalurperusahaan.svg') }}" alt="" width="24" height="24">
                </div>
                <p class="bkk-program-card__eyebrow">Jalur Karir Nasional</p>
                <h3>Penyaluran Kerja Domestik</h3>
                <p class="bkk-program-card__desc">Kemitraan strategis dengan perusahaan teknologi lokal dan nasional.
                    Penyelenggaraan On-Campus Recruitment rutin, Walk-in Interview terpadu, dan integrasi kurikulum
                    industri dengan sertifikasi resmi Badan Nasional Sertifikasi Profesi (BNSP).</p>
                <ul class="bkk-program-card__list">
                    <li>85+ Mitra Perusahaan Nasional Terverifikasi</li>
                    <li>Kampus Rekrutmen Terpadu &amp; Seleksi Langsung</li>
                    <li>Penyaluran Cepat sebelum Wisuda Kelulusan</li>
                </ul>
                <div class="bkk-program-card__footer">
                    <span>Bekerja sama dengan KADIN &amp; APJII</span>
                    <a href="#lowongan">Eksplor Lowongan
                        <img src="{{ asset('IMG/bkk/icon/icon-right.svg') }}" alt="" width="14" height="14">
                    </a>
                </div>
            </div>

            {{-- kanan: jepang --}}
            <div class="bkk-program-card bkk-program-card--dark">
                <div class="bkk-program-card__icon bkk-program-card__icon--yellow">
                    <img src="{{ asset('IMG/bkk/icon/icon-globe.svg') }}" alt="" width="24" height="24">
                </div>
                <p class="bkk-program-card__eyebrow bkk-program-card__eyebrow--yellow">Jalur Karir Internasional</p>
                <h3>Program Magang &amp; Kerja ke Jepang</h3>
                <p class="bkk-program-card__desc">Khusus siswa dan alumni yang fasih atau berminat mendalami Bahasa
                    Jepang. Program komprehensif mulai dari kelas bahasa, standardisasi kedisiplinan kerja, hingga
                    keberangkatan dan penempatan resmi di industri teknologi dan manufaktur presisi di Jepang.</p>
                <ul class="bkk-program-card__list bkk-program-card__list--dark">
                    <li>Pembekalan Bahasa Jepang Intensif (Level N4 / N3)</li>
                    <li>Pelatihan Budaya Kerja Kaizen, 5S &amp; Etika Industri Jepang</li>
                    <li>Gaji Standar Industri Jepang &amp; Visa Kerja Resmi (SSW)</li>
                    <li>Fasilitas Asrama, Asuransi Kesehatan &amp; Pendampingan Penuh</li>
                </ul>
                <div class="bkk-program-card__footer">
                    <span>Mitra LPK Berizin Resmi Kemnaker</span>
                    <a href="#" class="btn-solid btn-sm">Daftar Seleksi</a>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ============================= --}}
{{-- 7. MENGENAL BKK                --}}
{{-- ============================= --}}
<section class="bkk-tentang">
    <div class="bkk-container">
        <div class="bkk-tentang__head">
            <div>
                <p class="bkk-eyebrow">Peran Lembaga</p>
                <h2>Mengenal Bursa Kerja Khusus (BKK)</h2>
                <p class="bkk-section-desc">
                    Bursa Kerja Khusus (BKK) SMK INFOKOM BOGOR adalah unit pelaksana resmi yang dibentuk untuk
                    menjembatani alumni dan siswa tingkat akhir dengan Dunia Usaha dan Dunia Industri (DUDI).
                    Kami memastikan proses transisi dari bangku sekolah menuju dunia profesional berjalan
                    terarah, kredibel, dan berkesinambungan.
                </p>
            </div>
            <div class="bkk-tentang__badge">
                <span class="bkk-tentang__badge-icon"><img src="{{ asset('IMG/bkk/icon/icon-kerjasama.svg') }}"
                        alt=""></span>
                <div>
                    <strong>Mitra Resmi DUDI</strong>
                    <small>Terdaftar di Dinas Tenaga Kerja Kota Bogor</small>
                </div>
            </div>
        </div>

        <div class="bkk-tentang__grid">
            {{-- 1. Informasi Lowongan --}}
            <div class="bkk-layanan-card">
                <div class="bkk-layanan-card__icon">
                    <img src="{{ asset('IMG/bkk/icon/icon-lowongan.svg') }}" alt="" width="22" height="22">
                </div>
                <h3>Informasi Lowongan</h3>
                <p>Penyediaan informasi loker terverifikasi dari industri rekanan tanpa perantara dan dipungut biaya
                    apapun.</p>
            </div>

            {{-- 2. Penyaluran Kerja --}}
            <div class="bkk-layanan-card">
                <div class="bkk-layanan-card__icon">
                    <img src="{{ asset('IMG/bkk/icon/icon-penyaluran.svg') }}" alt="" width="22" height="22">
                </div>
                <h3>Penyaluran Kerja</h3>
                <p>Fasilitasi psikotes, tes teknis kompetensi, dan wawancara kerja yang diselenggarakan langsung di
                    lingkungan kampus.</p>
            </div>

            {{-- 3. Pelatihan Karir --}}
            <div class="bkk-layanan-card">
                <div class="bkk-layanan-card__icon">
                    <img src="{{ asset('IMG/bkk/icon/icon-pelatihan.svg') }}" alt="" width="22" height="22">
                </div>
                <h3>Pelatihan Karir</h3>
                <p>Bedah CV standar ATS, kurasi portofolio digital GitHub/Behance, serta simulasi mock interview bersama
                    praktisi HRD.</p>
            </div>

            {{-- 4. Tracer Study --}}
            <div class="bkk-layanan-card">
                <div class="bkk-layanan-card__icon">
                    <img src="{{ asset('IMG/bkk/icon/icon-tracker.svg') }}" alt="" width="22" height="22">
                </div>
                <h3>Tracer Study</h3>
                <p>Pemantauan berkala rekam jejak karir studi lanjut alumni untuk evaluasi berkelanjutan mutu kurikulum
                    vokasi.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================= --}}
{{-- 8. CERITA SUKSES ALUMNI        --}}
{{-- ============================= --}}
<section class="bkk-testimoni">
    <div class="bkk-container">
        <div class="bkk-section-head bkk-section-head--center">
            <p class="bkk-eyebrow bkk-eyebrow--center">Kisah Inspiratif</p>
            <h2>Cerita Sukses Alumni</h2>
            <p class="bkk-section-desc">Bukti nyata dedikasi BKK SMK INFOKOM dalam mengantarkan generasi muda mengukir
                karir gemilang di industri digital.</p>
        </div>

        {{-- Testimoni masih statis (belum ada model/controller).
             Isi di bawah hanya CONTOH, ganti dengan data asli.
             Untuk foto, ganti <div class="bkk-testimoni-card__avatar"></div>
             dengan <img src="{{ asset('IMG/bkk/alumni/nama.jpg') }}" alt="Nama" class="bkk-testimoni-card__avatar"
             style="width:48px;height:48px;border-radius:50%;object-fit:cover"> --}}
        <div class="bkk-testimoni__grid">

            <div class="bkk-testimoni-card">
                <span class="bkk-testimoni-card__quote">&ldquo;</span>
                <p class="bkk-testimoni-card__isi">Isi testimoni alumni pertama di sini.</p>
                <div class="bkk-testimoni-card__profil">
                    <div class="bkk-testimoni-card__avatar"></div>
                    <div>
                        <strong>Nama Alumni 1</strong>
                        <small>Angkatan 20XX, Posisi di Perusahaan</small>
                    </div>
                </div>
            </div>

            <div class="bkk-testimoni-card">
                <span class="bkk-testimoni-card__quote">&ldquo;</span>
                <p class="bkk-testimoni-card__isi">Isi testimoni alumni kedua di sini.</p>
                <div class="bkk-testimoni-card__profil">
                    <div class="bkk-testimoni-card__avatar"></div>
                    <div>
                        <strong>Nama Alumni 2</strong>
                        <small>Angkatan 20XX, Posisi di Perusahaan</small>
                    </div>
                </div>
            </div>

            <div class="bkk-testimoni-card">
                <span class="bkk-testimoni-card__quote">&ldquo;</span>
                <p class="bkk-testimoni-card__isi">Isi testimoni alumni ketiga di sini.</p>
                <div class="bkk-testimoni-card__profil">
                    <div class="bkk-testimoni-card__avatar"></div>
                    <div>
                        <strong>Nama Alumni 3</strong>
                        <small>Angkatan 20XX, Posisi di Perusahaan</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================= --}}
{{-- 9. PUSAT PELAYANAN & KONSULTASI --}}
{{-- ============================= --}}
<section class="bkk-kontak" id="kontak-bkk">
    <div class="bkk-container bkk-kontak__inner">
        <div class="bkk-kontak__text">
            <p class="bkk-eyebrow bkk-eyebrow--light"><span class="bkk-dot"></span> Layanan Informasi Terpadu</p>
            <h2>Pusat Pelayanan &amp; Konsultasi Karir BKK</h2>
            <p>Pintu gerbang komunikasi bagi siswa, alumni, maupun perwakilan HRD perusahaan yang ingin menjalin
                kerjasama berprestasi bersama SMK INFOKOM BOGOR.</p>

            <div class="bkk-kontak__grid">
                <div class="bkk-kontak__item">
                    <img src="{{ asset('IMG/bkk/icon/icon-lock.svg') }}" alt="" width="20" height="20">
                    <div>
                        <strong>Jam Operasional Kantor</strong>
                        <small>Senin - Jumat: 08.00 - 16.00 WIB<br>Sabtu: 08.00 - 12.00 WIB</small>
                    </div>
                </div>
                <div class="bkk-kontak__item">
                    <img src="{{ asset('IMG/bkk/icon/icon-maps.svg') }}" alt="" width="20" height="20">
                    <div>
                        <strong>Sekretariat BKK</strong>
                        <small>Gedung A Lt. 1 SMK INFOKOM BOGOR<br>Jl. Letjen Ibrahim Adjie No. 178 Bogor</small>
                    </div>
                </div>
                <div class="bkk-kontak__item">
                    <img src="{{ asset('IMG/bkk/icon/icon-message.svg') }}" alt="" width="20" height="20">
                    <div>
                        <strong>WhatsApp Hotline BKK</strong>
                        <small>+62 878-7307-1400</small>
                    </div>
                </div>
                <div class="bkk-kontak__item">
                    <img src="{{ asset('IMG/bkk/icon/icon-mail.svg') }}" alt="" width="20" height="20">
                    <div>
                        <strong>Surel Resmi BKK</strong>
                        <small>bkk@smkinfokom-bogor.sch.id</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="bkk-kontak__card">
            <span class="bkk-kontak__card-icon"><img src="{{ asset('IMG/bkk/icon/icon-service.svg') }}" alt=""></span>
            <h3>Konsultasi Karir Instan</h3>
            <p>Tim BKK siap menjawab pertanyaan seputar lowongan, magang Jepang, serta kerjasama berprestasi CV.</p>
            <a href="https://wa.me/6287873071400" target="_blank" rel="noopener" class="btn-solid">
                <img src="{{ asset('IMG/bkk/icon/icon-mail2.svg') }}" alt="" width="16" height="16">
                Hubungi via WhatsApp
            </a>
            <small class="bkk-kontak__card-note">Respon cepat dalam jam kerja operasional</small>
        </div>
    </div>
</section>


@push('scripts')
<script src="{{ asset('JS/bkk-animasi.js') }}"></script>
@endpush
@endsection