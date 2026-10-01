@extends('layouts.app')

@section('title', 'Fasilitas Kampus - SMK INFOKOM BOGOR')
@section('description', 'Fasilitas SMK INFOKOM Kota Bogor: laboratorium TKJ, RPL, DKV, dan PSPT, ruang kelas, perpustakaan, mushola, kantin, dan lapangan.')

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
                        Sarana Belajar Pencetak<br>
                        <span>Talenta Digital Siap Kerja</span>
                    </h1>
                    <p class="fas-hero__desc">
                        Dari laboratorium empat program keahlian, ruang belajar, perpustakaan, mushola, hingga
                        lapangan, SMK INFOKOM Kota Bogor menyediakan sarana yang mendukung siswa untuk siap kerja,
                        mandiri, dan berkarakter.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="fas-filter" aria-label="Filter fasilitas">
        <div class="shell">
            <div class="fas-filter__tabs" role="tablist" aria-label="Kategori fasilitas">
                <button type="button" role="tab" class="fas-tab is-active" data-filter="all" aria-selected="true"
                    tabindex="0">Semua Fasilitas <span class="fas-tab__count">11</span></button>
                <button type="button" role="tab" class="fas-tab" data-filter="lab" aria-selected="false"
                    tabindex="-1">Laboratorium <span class="fas-tab__count">4</span></button>
                <button type="button" role="tab" class="fas-tab" data-filter="kelas" aria-selected="false"
                    tabindex="-1">Ruang Kelas <span class="fas-tab__count">1</span></button>
                <button type="button" role="tab" class="fas-tab" data-filter="perpus" aria-selected="false"
                    tabindex="-1">Perpustakaan <span class="fas-tab__count">1</span></button>
                <button type="button" role="tab" class="fas-tab" data-filter="studio" aria-selected="false"
                    tabindex="-1">Studio &amp; Media <span class="fas-tab__count">2</span></button>
                <button type="button" role="tab" class="fas-tab" data-filter="penunjang" aria-selected="false"
                    tabindex="-1">Sarana Penunjang <span class="fas-tab__count">2</span></button>
                <button type="button" role="tab" class="fas-tab" data-filter="olahraga" aria-selected="false"
                    tabindex="-1">Olahraga <span class="fas-tab__count">1</span></button>
            </div>
        </div>
    </section>


    <section id="katalog" class="fas-catalog" aria-labelledby="katalog-title">
        <div class="shell">

            <div class="fas-section-head">
                <div>
                    <p class="karakter-eyebrow">
                        Sarana &amp; Prasarana Sekolah
                    </p>
                    <h2 id="katalog-title" class="fas-section-title">Katalog Ruang Praktik &amp; Fasilitas</h2>
                </div>
                <p class="fas-section-lead">
                    Laboratorium empat program keahlian, ruang belajar, dan fasilitas penunjang di kampus seluas
                    2.600 m², Jl. Letjen Ibrahim Adjie No. 178, Sindangbarang, Bogor.
                </p>
            </div>

            <p id="filter-status" class="fas-sr-only" role="status" aria-live="polite"></p>

            <div class="fas-grid">

                <article class="fas-card" data-category="lab">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/component/lab-rpl.jpg') }}"
                            alt="Lab Rekayasa Perangkat Lunak" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/rpl.svg') }}" alt="">Laboratorium</span>
                        <span class="fas-card__tag">Pemrograman Desktop, Web &amp; Mobile</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Lab Rekayasa Perangkat Lunak</h3>
                        <p class="fas-card__desc">Tempat siswa RPL berlatih pemrograman aplikasi desktop, web, dan
                            mobile, serta analisis dan perancangan sistem.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Jurusan: <strong>RPL</strong></p>
                            <span class="fas-card__link">
                                PC Spesifikasi Tinggi <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="lab">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/component/lab-tkj.jpg') }}"
                            alt="Lab Teknik Komputer dan Jaringan" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/tkj.svg') }}" alt="">Laboratorium</span>
                        <span class="fas-card__tag">MikroTik &amp; Cisco</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Lab Teknik Komputer dan Jaringan</h3>
                        <p class="fas-card__desc">Tempat siswa TKJ berlatih merakit dan memperbaiki komputer,
                            mengonfigurasi jaringan LAN dan WAN, serta mempelajari MikroTik, Cisco, dan server Linux.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Jurusan: <strong>TKJ</strong></p>
                            <span class="fas-card__link">MikroTik Pembelajaran <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="lab">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/component/lab-dkv.jpg') }}"
                            alt="Lab Desain Komunikasi Visual" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/dkv.svg') }}" alt="">Laboratorium</span>
                        <span class="fas-card__tag">Desain &amp; Animasi Digital</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Lab Desain Komunikasi Visual</h3>
                        <p class="fas-card__desc">Tempat siswa berlatih membuat citra dan animasi digital,
                            mengembangkan laman web interaktif, serta merekam dan menyunting audio-video.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Jurusan: <strong>DKV</strong></p>
                            <span class="fas-card__link">
                                Alat Pencetak Sablon <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="studio">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/component/lab-pspt.jpg') }}"
                            alt="Lab Produksi dan Siaran Program Televisi" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/pspt.svg') }}" alt="">Studio &amp;
                            Media</span>
                        <span class="fas-card__tag">Produksi Program TV</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Lab Produksi dan Siaran Program Televisi</h3>
                        <p class="fas-card__desc">Tempat siswa PSPT berlatih produksi program televisi:
                            penyutradaraan, kameramen, penyuntingan, penataan artistik dan suara, serta penulisan
                            naskah.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Jurusan: <strong>PSPT</strong></p>
                            <span class="fas-card__link">Dilengkapi kamera HD <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="kelas">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/component/ruang-kelas.jpeg') }}"
                            alt="Ruang Kelas" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/ruang-kelas.svg') }}" alt="">Ruang
                            Kelas</span>
                        <span class="fas-card__tag">Dilengkapi Proyektor</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Ruang Kelas yang Nyaman</h3>
                        <p class="fas-card__desc">Sepuluh ruang belajar untuk kegiatan belajar mengajar sehari-hari
                            seluruh program keahlian.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Jumlah: <strong>10 Ruang</strong></p>
                            <span class="fas-card__link">Fasilitas Pembelajaran <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="perpus">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/component/perpustakaan.jpg') }}"
                            alt="Perpustakaan" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/perpustakaan.svg') }}"
                                alt="">Perpustakaan</span>
                        <span class="fas-card__tag">Pusat Literasi</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Perpustakaan</h3>
                        <p class="fas-card__desc">Tempat membaca dan meminjam buku untuk menunjang pembelajaran dan
                            menambah wawasan siswa.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Jumlah: <strong>1 Ruang</strong></p>
                            <span class="fas-card__link">Ruang Baca Siswa <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="penunjang">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/component/kantin.jpeg') }}"
                            alt="Kantin Sekolah" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/kantin.svg') }}" alt="">Kantin Sekolah</span>
                        <span class="fas-card__tag">Higienis &amp; Nyaman</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Kantin Sekolah</h3>
                        <p class="fas-card__desc">Kantin yang bersih dan nyaman untuk memenuhi kebutuhan makan dan
                            istirahat siswa serta warga sekolah selama berada di sekolah.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Kapasitas: <strong>100+ Orang</strong></p>
                            <span class="fas-card__link">Area Istirahat Siswa <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="penunjang">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/component/mushola.jpg') }}"
                            alt="Mushola" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/mushola.svg') }}" alt="">Mushola</span>
                        <span class="fas-card__tag">Nyaman &amp; Bersih</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Mushola</h3>
                        <p class="fas-card__desc">Tempat ibadah yang nyaman dan bersih untuk siswa, guru, dan staf,
                            dilengkapi area wudhu untuk mendukung pembinaan iman dan taqwa.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Jumlah: <strong>1 Mushola</strong></p>
                            <span class="fas-card__link">Tempat Wudhu &amp; WC <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="studio">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/component/podcast.png') }}"
                            alt="Studio Podcast" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/podcast.svg') }}" alt="">Studio &amp;
                            Media</span>
                        <span class="fas-card__tag">Rekam Audio &amp; Video</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Studio Podcast</h3>
                        <p class="fas-card__desc">Ruang untuk merekam podcast, voice-over, dan konten audio-video
                            karya siswa.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Fungsi: <strong>Rekaman Audio</strong></p>
                            <span class="fas-card__link">Podcast <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="olahraga">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/component/lapangan.jpg') }}"
                            alt="Lapangan Olahraga &amp; Upacara" loading="lazy" data-fallback>
                        <span class="fas-card__cat"><img class="fas-icon"
                                src="{{ asset('IMG/fasilitas/icon/lapangan.svg') }}" alt="">Olahraga &amp;
                            Kegiatan</span>
                        <span class="fas-card__tag">Outdoor</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Lapangan Olahraga &amp; Upacara</h3>
                        <p class="fas-card__desc">Area terbuka di kampus untuk upacara bendera, kegiatan olahraga,
                            parkir kendaraan, dan kegiatan sekolah di luar ruangan.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Jumlah: <strong>1 Lapangan</strong></p>
                            <span class="fas-card__link">Lapangan Kegiatan Sekolah <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

                <article class="fas-card" data-category="lab">
                    <div class="fas-card__media">
                        <img class="fas-card__img" src="{{ asset('IMG/fasilitas/component/alat.jpg') }}"
                            alt="Alat MikroTik Lengkap" loading="lazy" data-fallback>
                        <span class="fas-card__cat">
                            <img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/peralatan.svg') }}"
                                alt="">Laboratorium
                        </span>
                        <span class="fas-card__tag">Peralatan Lengkap</span>
                    </div>
                    <div class="fas-card__body">
                        <h3 class="fas-card__title">Alat MikroTik Lengkap</h3>
                        <p class="fas-card__desc">Perangkat jaringan MikroTik untuk praktik konfigurasi routing,
                            wireless, firewall, dan manajemen bandwidth siswa TKJ.</p>
                        <div class="fas-card__foot">
                            <p class="fas-card__meta">Jurusan: <strong>TKJ</strong></p>
                            <span class="fas-card__link">Peralatan MikroTik <img class="fas-icon"
                                    src="{{ asset('IMG/fasilitas/icon/icon-arrow.svg') }}" alt=""></span>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <section class="fas-standar" aria-labelledby="standar-title">
        <div class="shell">
            <div class="fas-standar__head">
                <p class="karakter-eyebrow">
                    Dukungan Pembelajaran
                </p>
                <h2 id="standar-title" class="fas-standar__title">Fasilitas yang Mendukung Siswa dari Kelas hingga
                    Dunia Kerja</h2>
                <p class="fas-standar__lead">
                    Sarana fisik didukung sistem pembelajaran digital dan kerja sama dengan dunia usaha dan dunia
                    industri (DU/DI), agar lulusan siap bekerja, berwirausaha, atau melanjutkan pendidikan.
                </p>
            </div>

            <div class="fas-standar__grid">
                <article class="fas-feature">
                    <span class="fas-feature__icon"><img class="fas-icon"
                            src="{{ asset('IMG/fasilitas/icon/shield.svg') }}" alt=""></span>
                    <h3 class="fas-feature__title">Laboratorium Tiap Program Keahlian</h3>
                    <p class="fas-feature__desc">Setiap program keahlian memiliki laboratorium sendiri sehingga siswa
                        dapat berlatih langsung sesuai bidang yang dipelajari.</p>
                    <ul class="fas-checklist">
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/check.svg') }}" alt="">4
                            Laboratorium: TKJ, RPL, DKV, dan PSPT</li>
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/check.svg') }}" alt="">Praktik
                            langsung di laboratorium jurusan</li>
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/check.svg') }}"
                                alt="">Pembelajaran berstandar nasional</li>
                    </ul>
                </article>

                <article class="fas-feature">
                    <span class="fas-feature__icon"><img class="fas-icon"
                            src="{{ asset('IMG/fasilitas/icon/speedo.svg') }}" alt=""></span>
                    <h3 class="fas-feature__title">Pembelajaran Digital Terpadu</h3>
                    <p class="fas-feature__desc">Pembelajaran tidak berhenti di ruang kelas. Siswa dan guru memakai
                        layanan digital sekolah untuk belajar, ujian, dan pengelolaan mutu.</p>
                    <ul class="fas-checklist">
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/check.svg') }}" alt="">E-Learning
                            sekolah</li>
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/check.svg') }}" alt="">Ujian
                            berbasis komputer (CBT)</li>
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/check.svg') }}"
                                alt="">School Management Mutu (SMS)</li>
                    </ul>
                </article>

                <article class="fas-feature">
                    <span class="fas-feature__icon"><img class="fas-icon"
                            src="{{ asset('IMG/fasilitas/icon/pembelajaran.svg') }}" alt=""></span>
                    <h3 class="fas-feature__title">Terhubung dengan Dunia Kerja</h3>
                    <p class="fas-feature__desc">Sekolah menjalin kemitraan dengan DU/DI untuk membekali siswa
                        pengalaman kerja nyata dan membantu lulusan memasuki dunia kerja.</p>
                    <ul class="fas-checklist">
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/check.svg') }}" alt="">Praktik
                            Kerja Lapangan (PKL)</li>
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/check.svg') }}" alt="">Bursa
                            Kerja Khusus (BKK)</li>
                        <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/check.svg') }}"
                                alt="">Kemitraan industri &amp; tracer study</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section id="kunjungan" class="fas-cta" aria-labelledby="cta-title">
        <div class="shell">
            <div class="fas-cta__box">
                <p class="karakter-eyebrow">
                    Kunjungan Sekolah
                </p>
                <h2 id="cta-title" class="fas-cta__title">Ingin Melihat Langsung Fasilitas Sekolah Kami?
                </h2>
                <p class="fas-cta__desc">
                    Calon siswa dan orang tua dipersilakan mengenal lebih dekat kampus SMK INFOKOM Kota Bogor.
                    Hubungi humas sekolah untuk menanyakan jadwal kunjungan atau informasi pendaftaran.
                </p>
                <div class="fas-cta__actions">
                    <a class="btn btn-primary"
                        href="https://wa.me/6287873071400?text=Halo%2C%20saya%20ingin%20menanyakan%20jadwal%20kunjungan%20ke%20SMK%20INFOKOM%20Kota%20Bogor."
                        target="_blank" rel="noopener">
                        Jadwalkan Kunjungan
                        <img class="btn-icon" src="{{ asset('IMG/fasilitas/icon/arrow.svg') }}" alt="">
                    </a>
                    <a class="btn btn-ghost" href="https://wa.me/6287873071400" target="_blank" rel="noopener">
                        <img class="btn-icon" src="{{ asset('IMG/fasilitas/icon/message.svg') }}" alt="">
                        Hubungi Humas via WhatsApp
                    </a>
                </div>
                <ul class="fas-cta__info">
                    <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/fast.svg') }}" alt="">Senin
                        &ndash; Jumat, 07.00 &ndash; 17.00 WIB</li>
                    <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/teach.svg') }}" alt="">Telp.
                        sekolah (0251) 834-8108</li>
                    <li><img class="fas-icon" src="{{ asset('IMG/fasilitas/icon/maps.svg') }}" alt="">Sindangbarang,
                        Bogor Barat</li>
                </ul>
            </div>
        </div>
    </section>

</main>

@endsection