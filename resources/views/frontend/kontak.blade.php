@extends('layouts.app')

@section('title')
    Hubungi Kami — SMK INFOKOM Kota Bogor
@endsection

@section('description')
    Pusat informasi dan layanan aspirasi orang tua, siswa, dan kemitraan industri SMK INFOKOM Kota Bogor.
@endsection

@section('page', 'kontak')

@push('styles')
<link rel="stylesheet" href="{{ asset('CSS/kontak.css') }}">
@endpush

@section('content')

<main id="main" class="kontak-page">

    {{-- ============ HERO ============ --}}
    <section class="kontak-hero">
        <div class="kontak-container kontak-hero-inner">

            <div class="kontak-hero-text">

             
                <h1 class="kontak-hero-title">
                    Hubungi Kami
                </h1>

                <p class="kontak-hero-desc">
                    Pusat Informasi &amp; Layanan Aspirasi Orang Tua, Siswa, dan Kemitraan Industri
                    SMK INFOKOM BOGOR. Kami siap melayani konsultasi akademik, pendaftaran
                    PPDB, dan kolaborasi dunia usaha.
                </p>

            </div>

            <div class="kontak-hero-actions">

                <span class="kontak-status-badge">
                    <img src="{{ asset('IMG/kontak/icon/icon-defense.svg') }}" alt="">
                    <span>
                        STATUS PELAYANAN
                        <strong>Online &amp; Siap Melayani</strong>
                    </span>
                </span>

                <a href="https://wa.me/{{ $kontak['kontak_whatsapp'] ?? '6281234567890' }}"
                   target="_blank" rel="noopener"
                   class="kontak-btn-whatsapp">
                    <img src="{{ asset('IMG/kontak/icon/icon-ruestion.svg') }}" alt="">
                    WhatsApp CS
                </a>

            </div>

        </div>
    </section>


    {{-- ============ STATISTIK CEPAT ============ --}}
    <section class="kontak-stats-section">
        <div class="kontak-container kontak-stats-grid">

            <div class="kontak-stat-card">
                <span class="kontak-stat-icon">
                    <img src="{{ asset('IMG/kontak/icon/icon-jam.svg') }}" alt="">
                </span>
                <div>
                    <strong>&lt; 15 Menit</strong>
                    <span>Rata-rata Respon Chat</span>
                </div>
            </div>

            <div class="kontak-stat-card">
                <span class="kontak-stat-icon">
                    <img src="{{ asset('IMG/kontak/icon/icon-pendidikan.svg') }}" alt="">
                </span>
                <div>
                    <strong>4 Jurusan</strong>
                    <span>Konsultasi Kejuruan IT</span>
                </div>
            </div>

            <div class="kontak-stat-card">
                <span class="kontak-stat-icon">
                    <img src="{{ asset('IMG/kontak/icon/icon-kerjasama.svg') }}" alt="">
                </span>
                <div>
                    <strong>80+ Mitra</strong>
                    <span>Kemitraan Industri Aktif</span>
                </div>
            </div>

            <div class="kontak-stat-card">
                <span class="kontak-stat-icon">
                    <img src="{{ asset('IMG/kontak/icon/icon-kota.svg') }}" alt="">
                </span>
                <div>
                    <strong>Kota Bogor</strong>
                    <span>Akses Strategis 10 Mnt</span>
                </div>
            </div>

        </div>
    </section>


    {{-- ============ INFO + FORM ============ --}}
    <section class="kontak-main-section">
        <div class="kontak-container kontak-main-grid">

            {{-- KIRI — INFORMASI KONTAK --}}
            <div class="kontak-info-col">

                <p class="kontak-label-mini">KANAL KOMUNIKASI TERVERIFIKASI</p>

                <h2 class="kontak-section-title">
                    Kunjungi Sekolah Kami Atau Terhubung Secara Digital
                </h2>

                <p class="kontak-section-desc">
                    Tim front office dan Customer Service kami siap mendampingi proses
                    pendaftaran, konsultasi minat bakat calon siswa, hingga penjajakan MoU
                    institusi.
                </p>

                <div class="kontak-info-card kontak-info-card-alamat">

                    <div class="kontak-info-icon">
                        <img src="{{ asset('IMG/kontak/icon/icon-maps.svg') }}" alt="">
                    </div>

                    <div class="kontak-info-body">
                        <span class="kontak-info-tag">Sekolah Utama</span>

                        <strong>Alamat Sekolah SMK INFOKOM</strong>

                        <p>{{ $kontak['kontak_alamat'] ?? 'Jl. Letjen Ibrahim Adjie No. 178, Sindangbarang, Bogor Barat, Kota Bogor, Jawa Barat 16117.' }}</p>

                        <ul class="kontak-info-jarak">
                            <li>
                                <img src="{{ asset('IMG/kontak/icon/icon-transportasi.svg') }}" alt="">
                                5 Menit dari Terminal Laladon / Bubulak
                            </li>
                            <li>
                                <img src="{{ asset('IMG/kontak/icon/icon-transportasi.svg') }}" alt="">
                                15 Menit dari Stasiun Bogor
                            </li>
                        </ul>
                    </div>

                </div>

                {{-- TELEPON & WHATSAPP --}}
                <div class="kontak-info-row">

                    <div class="kontak-info-card kontak-info-card-sm">
                        <div class="kontak-info-icon kontak-info-icon-navy">
                            <img src="{{ asset('IMG/kontak/icon/icon-telp.svg') }}" alt="">
                        </div>

                        <div class="kontak-info-body">
                            <span class="kontak-info-tag">Telepon Kantor / Hunting</span>
                            <strong>{{ $kontak['kontak_telepon'] ?? '(0251) 8328-999' }}</strong>
                            <span class="kontak-info-sub">Senin - Jumat (07.30 - 16.00 WIB)</span>

                            <a href="tel:{{ $kontak['kontak_telepon'] ?? '0251832899' }}" class="kontak-info-link">
                                Hubungi Sekarang →
                            </a>
                        </div>
                    </div>

                    <div class="kontak-info-card kontak-info-card-sm">
                        <div class="kontak-info-icon kontak-info-icon-yellow">
                            <img src="{{ asset('IMG/kontak/icon/icon-service.svg') }}" alt="">
                        </div>

                        <div class="kontak-info-body">
                            <span class="kontak-info-tag">WhatsApp Center &amp; PPDB</span>
                            <strong>+{{ $kontak['kontak_whatsapp'] ?? '62 812-3456-7890' }}</strong>
                            <span class="kontak-info-sub">Konsultasi Jurusan &amp; Jadwal Tes</span>

                            <a href="https://wa.me/{{ $kontak['kontak_whatsapp'] ?? '6281234567890' }}"
                               target="_blank" rel="noopener"
                               class="kontak-info-link">
                                Buka Chat WhatsApp
                                <img src="{{ asset('IMG/kontak/icon-external.svg') }}" alt="">
                            </a>
                        </div>
                    </div>

                </div>

                {{-- EMAIL & JAM LAYANAN --}}
                <div class="kontak-info-row">

                    <div class="kontak-info-card kontak-info-card-sm">
                        <div class="kontak-info-icon">
                            <img src="{{ asset('IMG/kontak/icon/icon-message.svg') }}" alt="">
                        </div>

                        <div class="kontak-info-body">
                            <span class="kontak-info-tag">Email Resmi</span>

                            <div class="kontak-email-list">
                                <div>
                                    <small>Layanan Umum:</small>
                                    <strong>{{ $kontak['kontak_email'] ?? 'info@smkinfokom.sch.id' }}</strong>
                                </div>
                                <div>
                                    <small>Pendaftaran PPDB:</small>
                                    <strong>ppdb@smkinfokom.sch.id</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kontak-info-card kontak-info-card-sm">
                        <div class="kontak-info-icon">
                            <img src="{{ asset('IMG/kontak/icon/icon-clock.svg') }}" alt="">
                        </div>

                        <div class="kontak-info-body">
                            <span class="kontak-info-tag">Jam Layanan Sekolah</span>

                            <div class="kontak-jam-list">
                                <p>
                                    Senin - Jumat:<br>
                                    <strong>{{ $kontak['kontak_jam_weekday'] ?? '07.30 - 16.00 WIB' }}</strong>
                                </p>
                                <p>
                                    Sabtu:<br>
                                    <strong>{{ $kontak['kontak_jam_sabtu'] ?? '08.00 - 13.00 WIB' }}</strong>
                                </p>
                                <p class="kontak-jam-libur">
                                    {{ $kontak['kontak_jam_minggu'] ?? 'Minggu & Hari Libur Nasional: Tutup' }}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- PANDUAN AKSES TRANSPORTASI --}}
                <div class="kontak-transport-card">

                    <h4>
                        <img src="{{ asset('IMG/kontak/icon/icon-transport.svg') }}" alt="">
                        Panduan Akses Transportasi
                    </h4>

                    <ul>
                        <li>
                            <img src="{{ asset('IMG/kontak/icon/icon-check.svg') }}" alt="">
                            Angkutan Kota: Naik trayek 03 (Bubulak - Baranangsiang) atau 15
                            (Sindangbarang - Merdeka) langsung turun tepat di seberang gerbang
                            utama SMK Infokom.
                        </li>
                        <li>
                            <img src="{{ asset('IMG/kontak/icon/icon-check.svg') }}" alt="">
                            Ojek Online / Kendaraan Pribadi: Cukup ketik "SMK INFOKOM KOTA
                            BOGOR" di Google Maps atau Waze; tersedia area parkir motor dan
                            mobil representatif.
                        </li>
                    </ul>

                </div>

            </div>


            {{-- KANAN — FORM --}}
            <div class="kontak-form-col">

                <div class="kontak-form-card">

                    <span class="kontak-form-badge">FORMULIR ASPIRASI &amp; PERTANYAAN</span>

                    <h3>Kirim Pesan Langsung</h3>

                    <p class="kontak-form-desc">
                        Tuliskan pertanyaan atau kebutuhan konsultasi Anda. Petugas layanan
                        kami akan merespons melalui WhatsApp atau email resmi dalam 1×24 jam
                        kerja.
                    </p>

                    <form action="#" method="POST" id="form-kontak" class="kontak-form">
                        @csrf

                        <div class="kontak-form-group">
                            <label for="nama_lengkap">Nama Lengkap *</label>
                            <div class="kontak-input-with-icon">
                                <img src="{{ asset('IMG/kontak/icon/icon-user.svg') }}" alt="">
                                <input
                                    type="text"
                                    name="nama_lengkap"
                                    id="nama_lengkap"
                                    placeholder="Contoh: Muhammad Rayhan"
                                    required
                                >
                            </div>
                        </div>

                        <div class="kontak-form-row">

                            <div class="kontak-form-group">
                                <label for="email">Email Aktif *</label>
                                <div class="kontak-input-with-icon">
                                    <img src="{{ asset('IMG/kontak/icon/icon-email.svg') }}" alt="">
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        placeholder="nama@domain.com"
                                        required
                                    >
                                </div>
                            </div>

                            <div class="kontak-form-group">
                                <label for="whatsapp">Nomor WhatsApp *</label>
                                <div class="kontak-input-with-icon">
                                    <img src="{{ asset('IMG/kontak/icon/icon-nohp.svg') }}" alt="">
                                    <input
                                        type="text"
                                        name="whatsapp"
                                        id="whatsapp"
                                        placeholder="0812xxxxxxxx"
                                        required
                                    >
                                </div>
                            </div>

                        </div>

                        <div class="kontak-form-group">
                            <label for="status_pemohon">Status Anda *</label>
                            <div class="kontak-input-with-icon">
                                <img src="{{ asset('IMG/kontak/icon/icon-tag.svg') }}" alt="">
                                <select name="status_pemohon" id="status_pemohon" required>
                                    <option value="">Pilih Kategori Pemohon</option>
                                    <option value="calon_siswa">Calon Siswa</option>
                                    <option value="orang_tua">Orang Tua / Wali</option>
                                    <option value="alumni">Alumni</option>
                                    <option value="mitra_industri">Mitra Industri</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div class="kontak-form-group">
                            <label for="subjek">Subjek Pertanyaan *</label>
                            <div class="kontak-input-with-icon">
                                <img src="{{ asset('IMG/kontak/icon/icon-quest.svg') }}" alt="">
                                <input
                                    type="text"
                                    name="subjek"
                                    id="subjek"
                                    placeholder="Misal: Info Beasiswa Prestasi RPL & Jadwal Tes"
                                    required
                                >
                            </div>
                        </div>

                        <div class="kontak-form-group">
                            <label for="pesan">Pesan &amp; Keterangan Lengkap *</label>
                            <textarea
                                name="pesan"
                                id="pesan"
                                rows="4"
                                placeholder="Tuliskan rincian pesan atau pertanyaan Anda di sini secara jelas..."
                                required
                            ></textarea>
                        </div>

                        <p class="kontak-form-privacy">
                            <img src="{{ asset('IMG/kontak/icon/icon-privasi.svg') }}" alt="">
                            Data Anda dijaga kerahasiaannya dan hanya digunakan untuk
                            keperluan pelayanan sekolah.
                        </p>

                        <button type="submit" class="kontak-form-submit">
                            Kirim Pesan Sekarang
                            <img src="{{ asset('IMG/kontak/icon/icon-pesan.svg') }}" alt="">
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </section>


    {{-- ============ PETA INTERAKTIF ============ --}}
    <section class="kontak-map-section">
        <div class="kontak-container">

            <div class="kontak-map-header">
                <div>
                    <p class="kontak-label-mini">PETA INTERAKTIF SEKOLAH</p>
                    <h2>Lokasi Strategis di Jantung Kota Bogor Barat</h2>
                </div>

                <a href="{{ $kontak['kontak_gmaps'] ?? 'https://maps.google.com' }}"
                   target="_blank" rel="noopener"
                   class="kontak-map-btn">
                    <img src="{{ asset('IMG/kontak/icon/icon-goglemaps.svg') }}" alt="">
                    Buka di Google Maps Langsung
                </a>
            </div>

            <div class="kontak-map-frame">

                <img
                    src="{{ asset('IMG/kontak/maps.png') }}"
                    alt="Peta Lokasi SMK INFOKOM Kota Bogor"
                    class="kontak-map-image"
                >

                <div class="kontak-map-pin-info">
                    <span class="kontak-map-pin-icon">
                        <img src="{{ asset('IMG/kontak/icon/icon-study.svg') }}" alt="">
                    </span>

                    <div>
                        <strong>SMK INFOKOM BOGOR</strong>
                        <span>Gedung Pendidikan &amp; Laboratorium Komputer Modern Berstandar Industri Internasional.</span>

                        <ul>
                            <li>Parkir Luas</li>
                            <li>Free Wi-Fi Area</li>
                            <li>Masjid Sekolah</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- ============ FASILITAS ============ --}}
    <section class="kontak-fasilitas-section">
        <div class="kontak-container kontak-fasilitas-inner">

            <div class="kontak-fasilitas-text">

                <p class="kontak-label-mini">FASILITAS PRAKTIK UNGGULAN</p>

                <h2>Ingin Meninjau Fasilitas Lab Secara Langsung?</h2>

                <p>
                    Kami menyambut hangat kunjungan santai maupun formal bagi calon siswa
                    bersama orang tua. Anda dapat mencoba langsung fasilitas iMac Lab,
                    Jaringan Fiber Optic, Studio Broadcast TV, dan Laboratorium Rekayasa
                    Perangkat Lunak.
                </p>

                <div class="kontak-fasilitas-buttons">
                    <a href="#" class="kontak-btn-dark">
                        <img src="{{ asset('IMG/kontak/icon/icon-kalender.svg') }}" alt="">
                        Jadwalkan Campus Tour
                    </a>

                    <a href="{{ route('fasilitas') }}" class="kontak-btn-outline">
                        Lihat Semua Fasilitas
                    </a>
                </div>

            </div>

            <div class="kontak-fasilitas-photos">
                <img src="{{ asset('IMG/kontak/fasilitas-1.jpg') }}" alt="Lab Praktik Siswa">
                <img src="{{ asset('IMG/kontak/fasilitas-2.jpg') }}" alt="Ruang Server Lab Jaringan">
            </div>

        </div>
    </section>


    {{-- ============ FAQ ============ --}}
    <section class="kontak-faq-section">
        <div class="kontak-container">

            <div class="kontak-faq-header">
                <p class="kontak-label-mini kontak-label-center">BANTUAN &amp; PANDUAN CEPAT</p>
                <h2>Frequently Asked Questions</h2>
                <p>
                    Hal-hal yang sering ditanyakan perihal kunjungan ke sekolah, pendaftaran
                    PPDB, dan proses administrasi.
                </p>
            </div>

            <div class="kontak-faq-list">

                <details class="kontak-faq-item" open>
                    <summary>
                        Apakah kunjungan sekolah (Sekolah Tour) harus membuat janji terlebih dahulu?
                        <img src="{{ asset('IMG/kontak/icon/icon-arrow.svg') }}" alt="" class="kontak-faq-icon">
                    </summary>

                    <p>
                        Untuk kunjungan perseorangan (orang tua &amp; calon siswa), Anda dapat
                        langsung datang pada jam pelayanan kerja (Senin - Jumat 07.30 - 16.00
                        WIB). Namun jika berencana datang bersama rombongan sekolah (SMP/MTs)
                        atau ingin mencoba simulasi lab khusus, kami sarankan menghubungi Admin
                        WhatsApp minimal H-2 untuk pendampingan optimal.
                    </p>
                </details>

                <details class="kontak-faq-item">
                    <summary>
                        Apakah tes peminatan dan wawancara PPDB dilakukan secara tatap muka?
                        <img src="{{ asset('IMG/kontak/icon/icon-arrow.svg') }}" alt="" class="kontak-faq-icon">
                    </summary>

                    <p>
                        Tes peminatan dapat dilakukan secara CBT online maupun offline di lab
                        sekolah, sedangkan wawancara bisa tatap muka langsung di sekolah atau
                        melalui video call, tergantung jalur pendaftaran yang dipilih.
                    </p>
                </details>

                <details class="kontak-faq-item">
                    <summary>
                        Bagaimana alur kemitraan industri, magang (PKL), atau rekrutmen kerja?
                        <img src="{{ asset('IMG/kontak/icon/icon-arrow.svg') }}" alt="" class="kontak-faq-icon">
                    </summary>

                    <p>
                        Perusahaan mitra dapat menghubungi tim Humas &amp; Kemitraan Industri
                        melalui email resmi atau WhatsApp Center untuk penjajakan MoU,
                        penempatan siswa PKL, maupun rekrutmen alumni.
                    </p>
                </details>

                <details class="kontak-faq-item">
                    <summary>
                        Apakah tersedia fasilitas beasiswa untuk siswa berprestasi &amp; kurang mampu?
                        <img src="{{ asset('IMG/kontak/icon/icon-arrow.svg') }}" alt="" class="kontak-faq-icon">
                    </summary>

                    <p>
                        Tersedia beasiswa jalur prestasi akademik/non-akademik serta keringanan
                        biaya bagi siswa kurang mampu. Informasi lebih lanjut dapat ditanyakan
                        melalui formulir di halaman ini atau saat pendaftaran PPDB.
                    </p>
                </details>

            </div>

        </div>
    </section>


    {{-- ============ CTA BAWAH ============ --}}
    <section class="kontak-cta-section">
        <div class="kontak-container kontak-cta-inner">

            <div class="kontak-cta-text">
                <p class="kontak-eyebrow">
                    <span class="dot-yellow"></span>
                    PENDAFTARAN TAHUN AJARAN 2025/2026
                </p>

                <h2>Siap Menjadi Talenta Digital Masa Depan?</h2>

                <p>
                    Dapatkan formulir dan nomor pendaftaran online sekarang sebelum kuota
                    masing-masing jurusan terpenuhi.
                </p>
            </div>

            <div class="kontak-cta-buttons">
                <a href="{{ route('ppdb') }}" class="kontak-btn-yellow">
                    Daftar PPDB Online
                    <img src="{{ asset('IMG/kontak/icon/icon-right.svg') }}" alt="">
                </a>

                <a href="https://wa.me/{{ $kontak['kontak_whatsapp'] ?? '6281234567890' }}"
                   target="_blank" rel="noopener"
                   class="kontak-btn-outline-light">
                    <img src="{{ asset('IMG/kontak/icon/icon-kontak.svg') }}" alt="">
                    Tanya Admin PPDB
                </a>
            </div>

        </div>
    </section>

</main>

@push('scripts')
<script src="{{ asset('JS/kontak-animasi.js') }}"></script>
@endpush

@endsection