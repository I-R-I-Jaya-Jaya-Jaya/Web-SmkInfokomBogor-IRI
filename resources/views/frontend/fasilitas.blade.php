@extends('layouts.app')

@section('title', 'Fasilitas Kampus - SMK INFOKOM BOGOR')
@section('description', 'Katalog laboratorium, studio, smart classroom, dan fasilitas berstandar industri di SMK INFOKOM
Kota Bogor.')

@section('page', 'fasilitas')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
@endpush

@section('content')

<main id="main" class="fas-page">

    <section class="fas-hero" aria-labelledby="hero-title">
        <div class="shell fas-hero__inner">
            <div class="fas-hero__main">
                <div>
                    <h1 id="hero-title" class="fas-hero__title">
                        Sarana Modern Pencetak<br>
                        <span>Talenta Digital Unggul</span>
                    </h1>
                    <p class="fas-hero__desc">
                        Seluruh sarana dan prasarana di SMK INFOKOM KOTA BOGOR dirancang terintegrasi dengan kebutuhan
                        industri teknologi mutakhir, menciptakan atmosfer belajar autentik siap kerja bagi generasi
                        vokasi Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="fas-filter" aria-label="Filter fasilitas">
        <div class="shell">
            <div class="fas-filter__tabs" role="tablist" aria-label="Kategori fasilitas">
                <button type="button" role="tab" class="fas-tab is-active" data-filter="all" aria-selected="true"
                    tabindex="0">Semua Fasilitas <span class="fas-tab__count">12</span></button>
                <button type="button" role="tab" class="fas-tab" data-filter="lab" aria-selected="false"
                    tabindex="-1">Laboratorium <span class="fas-tab__count">3</span></button>
                <button type="button" role="tab" class="fas-tab" data-filter="kelas" aria-selected="false"
                    tabindex="-1">Ruang Kelas <span class="fas-tab__count">1</span></button>
                <button type="button" role="tab" class="fas-tab" data-filter="perpus" aria-selected="false"
                    tabindex="-1">Perpustakaan <span class="fas-tab__count">1</span></button>
                <button type="button" role="tab" class="fas-tab" data-filter="studio" aria-selected="false"
                    tabindex="-1">Studio &amp; Media <span class="fas-tab__count">2</span></button>
                <button type="button" role="tab" class="fas-tab" data-filter="bengkel" aria-selected="false"
                    tabindex="-1">Bengkel &amp; Data Center <span class="fas-tab__count">3</span></button>
                <button type="button" role="tab" class="fas-tab" data-filter="olahraga" aria-selected="false"
                    tabindex="-1">Olahraga <span class="fas-tab__count">1</span></button>
            </div>
        </div>
    </section>


    <section id="katalog" class="fas-catalog" aria-labelledby="katalog-title">
        <div class="shell">

            <div class="fas-section-head">
                <div>
                    <p class="fas-eyebrow">
                        <img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-building.svg') }}" alt="">
                        Inventaris &amp; Fasilitas Kampus
                    </p>
                    <h2 id="katalog-title" class="fas-section-title">Katalog Ruang Praktik &amp; Fasilitas</h2>
                </div>
                <p class="fas-section-lead">
                    Dilengkapi instruktur tersertifikasi industri internasional serta jadwal rotasi praktik intensif
                    berstandar Teaching Factory.
                </p>
            </div>

            <p id="filter-status" class="fas-sr-only" role="status" aria-live="polite"></p>

            <div class="fas-grid">

                <article class="fas-card" data-category="lab">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/lab-rpl.jpg') }}"
                            alt="Lab Rekayasa Perangkat Lunak" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/icon-kategori-lab.svg') }}" alt="">Laboratorium</span>
                        <span class="fas-card__tag">Core i7 • 32GB RAM</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Lab Rekayasa Perangkat Lunak</h3>
                        <p class="fas-card__desc">Dirancang untuk pengembangan software modern berskala enterprise,
                            arsitektur microservices, dan deployment cloud dengan workstation spesifikasi tinggi.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Kapasitas: <strong>36 Siswa</strong></p>
                            <span class="fas-card__link" href="#kunjungan">
                                Ruang Ber-AC & Fiber Optic 1 Gbps <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="lab">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/lab-jaringan.jpg') }}"
                            alt="Lab Teknik Komputer dan Jaringan" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/icon-kategori-lab.svg') }}" alt="">Laboratorium</span>
                        <span class="fas-card__tag">Cisco &amp; MikroTik Academy</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Lab Teknik Komputer dan Jaringan</h3>
                        <p class="fas-card__desc">Fasilitas hands-on penggelaran kabel fiber optic, konfigurasi routing
                            switching enterprise, dan simulasi topologi jaringan skala kampus.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Kapasitas: <strong>36 Siswa</strong></p>
                            <span class="fas-card__link" href="#kunjungan">MikroTik Certified Academy <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="lab">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/lab-dkv.jpg') }}"
                            alt="Lab Desain Komunikasi Visual" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/icon-kategori-lab.svg') }}" alt="">Laboratorium</span>
                        <span class="fas-card__tag">RTX 4070 • 100% sRGB</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Lab Desain Komunikasi Visual</h3>
                        <p class="fas-card__desc">Studio kreatif multimedia untuk rendering 3D Blender, animasi 2D/3D,
                            motion graphic, dan desain UI/UX dengan monitor akurasi warna tinggi.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Kapasitas: <strong>32 Siswa</strong></p>
                            <span class="fas-card__link" href="#kunjungan">
Komputer desain dan alat pencetak sablon <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>


                <article class="fas-card" data-category="studio">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/studio-broadcasting.jpg') }}"
                            alt="Lab Produksi dan Siaran Program Televisi" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/icon-kategori-studio.svg') }}" alt="">Studio &amp;
                            Media</span>
                        <span class="fas-card__tag">4K Broadcast Multi-Cam</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Lab Produksi dan Siaran Program Televisi</h3>
                        <p class="fas-card__desc">Studio produksi siaran langsung dengan cyclorama infinity green
                            screen, switcher multi-kamera, dan ruang kontrol audio-video terpadu.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Kapasitas: <strong>24 Siswa</strong></p>
                            <span class="fas-card__link" href="#kunjungan">Peredam Akustik Standar TV <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="kelas">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/smart-classroom.jpg') }}"
                            alt="Ruang Kelas Yang Nyaman" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/icon-kategori-kelas.svg') }}" alt="">Ruang
                            Kelas</span>
                        <span class="fas-card__tag">Smartboard 75" • Full AC</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Ruang Kelas Yang Nyaman</h3>
                        <p class="fas-card__desc">Ruang kelas interaktif dengan perabot modular fleksibel yang dapat
                            diatur untuk model pembelajaran diskusi, proyek kelompok, dan presentasi.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Kapasitas: <strong>36 Siswa</strong></p>
                           <span class="fas-card__link" href="#kunjungan">Fasilitas Pembelajaran <img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="perpus">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/perpustakaan.jpg') }}"
                            alt="Perpustakaan" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/icon-kategori-perpus.svg') }}"
                                alt="">Perpustakaan</span>
                        <span class="fas-card__tag">10.000+ E-Books</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Perpustakaan</h3>
                        <p class="fas-card__desc">Pusat literasi digital dengan terminal riset berspesifikasi tinggi,
                            akses jurnal internasional, dan repositori karya ilmiah siswa.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Kapasitas: <strong>80 Siswa</strong></p>
                            <span class="fas-card__link" href="#kunjungan">Sistem Barcode & RFID <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>


                <article class="fas-card" data-category="bengkel">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/kantin.jpg') }}" alt="Kantin Sekolah"
                            loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/icon-kategori-bengkel.svg') }}" alt="">Bengkel &amp;
                            Data Center</span>
                        <span class="fas-card__tag">Higienis &amp; Nyaman</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Kantin Sekolah</h3>
                        <p class="fas-card__desc">Fasilitas kantin yang bersih dan nyaman untuk memenuhi kebutuhan makan
                            dan istirahat siswa serta warga sekolah selama di kampus.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Kapasitas: <strong>100+ Orang</strong></p>
                           <span class="fas-card__link" href="#kunjungan">Area Makan &amp; Istirahat Siswa <img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="bengkel">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/mushola.jpg') }}" alt="Mushola"
                            loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/icon-kategori-bengkel.svg') }}" alt="">Bengkel &amp;
                            Data Center</span>
                        <span class="fas-card__tag">Nyaman &amp; Bersih</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Mushola</h3>
                        <p class="fas-card__desc">Tempat ibadah yang nyaman dan bersih untuk siswa, guru, dan staf.
                            Dilengkapi area wudhu dan fasilitas pendukung ibadah sehari-hari.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Kapasitas: <strong>80 Jamaah</strong></p>
                            <span class="fas-card__link" href="#kunjungan">Tempat Wudhu Dan WC<img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>


                <article class="fas-card" data-category="studio">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/studio-podcast.jpg') }}"
                            alt="Studio Podcast" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/icon-kategori-studio.svg') }}" alt="">Studio &amp;
                            Media</span>
                        <span class="fas-card__tag">Shure SM7B • Rodecaster Pro</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Studio Podcast</h3>
                        <p class="fas-card__desc">Ruang kedap suara untuk rekam voice-over, produksi podcast talkshow
                            edukatif, dan post-production audio profesional.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Kapasitas: <strong>6 Pembicara</strong></p>
                           <span class="fas-card__link" href="#kunj ungan">Produksi Audio &amp; Podcast <img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>




                <article class="fas-card" data-category="olahraga">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/lapangan.jpg') }}"
                            alt="Lapangan Upacara &amp; Parkir" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/icon-kategori-olahraga.svg') }}" alt="">Olahraga &amp;
                            Hall</span>
                        <span class="fas-card__tag">Lantai Interlock Outdoor</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Lapangan Upacara &amp; Parkir</h3>
                        <p class="fas-card__desc">Area multifungsi di depan kampus yang digunakan untuk upacara bendera,
                            pengumuman, parkir kendaraan, serta kegiatan sekolah outdoor.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Luas: <strong>±800 m²</strong></p>
                            <span class="fas-card__link" href="#kunjungan">Area Olahraga &amp; Kegiatan Sekolah <img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                                  
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="lab">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/mikrotik-lab.jpg') }}"
                            alt="Alat MikroTik Lengkap" loading="lazy" data-fallback>
                        <span class="fas-card__cat">
                            <img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-kategori-lab.svg') }}"
                                alt="">Laboratorium
                        </span>
                        <span class="fas-card__tag">MikroTik Academy</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Alat MikroTik Lengkap</h3>
                        <p class="fas-card__desc">
                            Perangkat jaringan MikroTik lengkap untuk praktik konfigurasi routing, switching, wireless,
                            firewall, dan manajemen bandwidth sesuai standar MikroTik Academy.
                        </p>

                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Kapasitas: <strong>36 Siswa</strong></p>
                            <span class="fas-card__link" href="#kunjungan">Praktik Jaringan MikroTik <img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <section class="fas-standar" aria-labelledby="standar-title">
        <div class="shell">
            <div class="fas-standar__head">
                <p class="fas-badge fas-badge--light">
                    <img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-repeat.svg') }}" alt="">
                    Standarisasi Link &amp; Match
                </p>
                <h2 id="standar-title" class="fas-standar__title">Fasilitas Sekolah yang Menjawab Kebutuhan Nyata
                    Industri</h2>
                <p class="fas-standar__lead">
                    Kami menolak kompromi dalam kualitas infrastruktur vokasi. Setiap alat, lisensi software, dan
                    topologi laboratorium disesuaikan langsung dengan rekomendasi mitra industri teknologi terkemuka.
                </p>
            </div>

            <div class="fas-standar__grid">
                <article class="fas-feature">
                    <span class="fas-feature__icon"><img class="fas-icon"
                            src="{{ asset('IMG/fasilitas/icon/icon-sertifikasi.svg') }}" alt=""></span>
                    <h3 class="fas-feature__title">Sertifikasi &amp; Kurikulum Industri</h3>
                    <p class="fas-feature__desc">Laboratorium kami memenuhi standar Tempat Uji Kompetensi (TUK) LSP-P1
                        BNSP, MikroTik MTCNA Academy, Cisco CCNA, dan Adobe Certified Professional.</p>
                    <ul class="fas-checklist">
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-check.svg') }}" alt="">Uji
                            Kompetensi Langsung di Kampus</li>
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-check.svg') }}" alt="">Lisensi
                            Perangkat Lunak Resmi (Genuine)</li>
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-check.svg') }}" alt="">Standar
                            K3 Kejuruan Internasional</li>
                    </ul>
                </article>

                <article class="fas-feature">
                    <span class="fas-feature__icon"><img class="fas-icon"
                            src="{{ asset('IMG/fasilitas/icon/icon-konektivitas.svg') }}" alt=""></span>
                    <h3 class="fas-feature__title">Konektivitas Ultra-Reliable 1 Gbps</h3>
                    <p class="fas-feature__desc">Didukung jaringan serat optik redundan dual ISP failover dengan Service
                        Level Agreement 99.9% uptime, menjamin kelancaran streaming, cloud dev, dan e-learning.</p>
                    <ul class="fas-checklist">
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-check.svg') }}" alt="">Dual ISP
                            Redundancy System</li>
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-check.svg') }}" alt="">Wi-Fi 6
                            Mesh Enterprise Coverage</li>
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-check.svg') }}"
                                alt="">Bandwidth Manajemen Per Siswa</li>
                    </ul>
                </article>

                <article class="fas-feature">
                    <span class="fas-feature__icon"><img class="fas-icon"
                            src="{{ asset('IMG/fasilitas/icon/icon-factory.svg') }}" alt=""></span>
                    <h3 class="fas-feature__title">Kultur Nyata Teaching Factory</h3>
                    <p class="fas-feature__desc">Bukan sekadar simulasi teori. Ruang praktik ditata mengikuti alur kerja
                        perusahaan industri, lengkap dengan budaya 5S (Seiri, Seiton, Seiso, Seiketsu, Shitsuke).</p>
                    <ul class="fas-checklist">
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-check.svg') }}" alt="">Standar
                            Budaya Kerja 5S</li>
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-check.svg') }}" alt="">Simulasi
                            Ruang Rapat Scrum &amp; Agile</li>
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-check.svg') }}"
                                alt="">Ekosistem Proyek Klien Komersial</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section id="kunjungan" class="fas-cta" aria-labelledby="cta-title">
        <div class="shell">
            <div class="fas-cta__box">
                <p class="fas-badge fas-badge--yellow fas-badge--square">
                    <img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-building-cta.svg') }}" alt="">
                    Agendakan Kunjungan Kampus
                </p>
                <h2 id="cta-title" class="fas-cta__title">Ingin Mengamati dan Mencoba Fasilitas Kami Secara Langsung?
                </h2>
                <p class="fas-cta__desc">
                    Kami mengundang calon siswa beserta orang tua untuk mengikuti sesi Campus Tour Eksklusif. Rasakan
                    langsung atmosfer belajar di laboratorium modern kami dan diskusikan rencana masa depan buah hati
                    bersama kepala jurusan.
                </p>
                <div class="fas-cta__actions">
                    <a class="btn btn-primary"
                        href="https://wa.me/62251832899?text=Halo%2C%20saya%20ingin%20menjadwalkan%20Campus%20Tour%20SMK%20INFOKOM%20Kota%20Bogor."
                        target="_blank" rel="noopener">
                        Jadwalkan Campus Tour
                        <img class="btn-icon" src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt="">
                    </a>
                    <a class="btn btn-ghost" href="https://wa.me/62251832899" target="_blank" rel="noopener">
                        <img class="btn-icon" src="{{ asset('IMG/fasilitas/icon/icon-message.svg') }}" alt="">
                        Tanya Admin via WhatsApp
                    </a>
                </div>
                <ul class="fas-cta__info">
                    <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-zap.svg') }}" alt="">Respon Cepat
                        &lt; 15 Menit</li>
                    <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-award.svg') }}" alt="">Gratis Biaya
                        Kunjungan &amp; Konsultasi</li>
                    <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/icon-pin.svg') }}" alt="">Sindangbarang,
                        Bogor Barat</li>
                </ul>
            </div>
        </div>
    </section>

</main>

@endsection