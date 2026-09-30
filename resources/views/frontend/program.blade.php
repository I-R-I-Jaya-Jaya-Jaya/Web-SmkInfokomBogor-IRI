@extends('layouts.app')

@section('title', 'Program Keahlian - SMK INFOKOM Kota Bogor')
@section('description', 'Program Keahlian berbasis industri di SMK INFOKOM Kota Bogor')
@section('page', 'program')

@push('styles')
<link rel="stylesheet" href="{{ asset('CSS/program.css') }}">
@endpush

@section('content')
<main>

    <!-- ==================== HERO ==================== -->
    <section class="program-hero">
        <div class="program-container">

            <div class="program-hero-content">
                <div class="program-hero-text">
                    <h1>Program Keahlian Berbasis Industri</h1>
                    <p>
                        Kurikulum link & match industri teknologi terkini menyiapkan lulusan siap kerja,
                        berwirausaha digital mandiri, dan siap melanjutkan studi ke perguruan tinggi unggulan.
                    </p>
                </div>

            </div>

            <!-- Tab Navigasi -->
            <div class="program-tabs">
                <a href="#rpl" class="tab-item">
                    <span class="tab-icon"><img src="{{asset('IMG/program/icon/icon-rpl.svg')}}" alt=""></span> Rekayasa
                    Perangkat Lunak
                </a>
                <a href="#tkj" class="tab-item">
                    <span class="tab-icon"><img src="{{asset('IMG/program/icon/icon-tkj.svg')}}" alt=""></span> Komputer
                    & Jaringan
                </a>
                <a href="#dkv" class="tab-item">
                    <span class="tab-icon"><img src="{{asset('IMG/program/icon/icon-dkv.svg')}}" alt=""></span> Desain
                    Komunikasi Visual
                </a>
                <a href="#pspt" class="tab-item">
                    <span class="tab-icon"><img src="{{asset('IMG/program/icon/icon-pspt.svg')}}" alt=""></span>
                    Produksi & Siaran Televisi
                </a>
                <div class="tab-right">
                </div>
            </div>

        </div>
    </section>


    <!-- ==================== RPL ==================== -->
    <section class="jurusan-section" id="rpl">
        <div class="program-container">
            <div class="jurusan-card">

                <div class="jurusan-image">
                    <img src="{{ asset('IMG/program/component/lab-rpl.svg') }}" alt="Rekayasa Perangkat Lunak">
                    <div class="jurusan-overlay">
                        <div class="jurusan-badge">
                            <span>PROGRAM UNGGULAN</span>
                            <strong>TEKNOLOGI REKAYASA & INFORMATIKA</strong>
                        </div>
                        <h3>Rekayasa Perangkat Lunak</h3>
                        <p>Mencetak Web/Mobile App Developer & Fullstack Engineer dengan portofolio aplikasi berstandar
                            industri.</p>
                    </div>
                </div>

                <div class="jurusan-content">
                    <div class="kompetensi-header">
                        <h4>Kompetensi Inti Kurikulum</h4>
                    </div>

                    <div class="kompetensi-grid">
                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-code.svg') }}"
                                            alt=""></span>
                                    <strong>Web & Mobile Dev</strong>
                                </div>
                                <p>Arsitektur modern, RESTful API, Reactive UI, dan Progressive Web Apps (PWA).</p>
                            </div>
                        </div>

                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-db.svg') }}"
                                            alt=""></span>
                                    <strong>Cloud & Database</strong>
                                </div>
                                <p>PostgreSQL, MongoDB, Supabase, containerization Docker dasar, dan Cloud Deploy.</p>
                            </div>
                        </div>

                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-fundamental.svg') }}"
                                            alt=""></span>
                                    <strong>Fundamental AI & ML</strong>
                                </div>
                                <p>Pengenalan Prompt Engineering, integrasi LLM API, serta pemrosesan data terstruktur.
                                </p>
                            </div>
                        </div>

                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-git.svg') }}"
                                            alt=""></span>
                                    <strong>QA & Git Collab</strong>
                                </div>
                                <p>Git workflow profesional (GitHub/GitLab), unit testing, CI/CD pipeline fundamentals.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tech-stack">
                        <span>TECH STACK & FRAMEWORK UTAMA:</span>
                        <div class="tech-tags">
                            <span>React.js</span>
                            <span>Flutter</span>
                            <span>Python</span>
                            <span>Node.js</span>
                            <span>Next.js</span>
                            <span>Git VCS</span>
                        </div>
                    </div>

                    <div class="prospek">
                        <span>PROSPEK KARIR LULUSAN</span>
                        <p>Junior Fullstack Dev, Mobile App Programmer, Frontend Engineer, Software QA</p>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- ==================== TKJ ==================== -->
    <section class="jurusan-section alt" id="tkj">
        <div class="program-container">
            <div class="jurusan-card reverse">

                <div class="jurusan-image">
                    <img src="{{ asset('IMG/program/component/lab-tkj.svg') }}" alt="Teknik Komputer & Jaringan">
                    <div class="jurusan-overlay">
                        <div class="jurusan-badge">
                            <span>MIKROTIK & CISCO ACADEMY</span>
                            <strong>INFRASTRUKTUR & KEAMANAN SIBER</strong>
                        </div>
                        <h3>Teknik Komputer & Jaringan</h3>
                        <p>Menguasai rancang bangun network enterprise, cloud administration, fiber optics, dan cyber
                            defense.</p>
                    </div>
                </div>

                <div class="jurusan-content">
                    <div class="kompetensi-header">
                        <h4>Kompetensi Inti Kurikulum</h4>
                    </div>

                    <div class="kompetensi-grid">
                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-network.svg') }}"
                                            alt=""></span>
                                    <strong>Network Routing & Switching</strong>
                                </div>
                                <p>Konfigurasi VLAN, OSPF, BGP, load balancing berbasis perangkat Cisco dan MikroTik.
                                </p>
                            </div>
                        </div>

                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-cyber.svg') }}"
                                            alt=""></span>
                                    <strong>Cyber Security & Firewall</strong>
                                </div>
                                <p>Penetration IDS/IPS, enkripsi data, packet sniffing inspection, hardening Linux
                                    server.</p>
                            </div>
                        </div>

                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-fiber.svg') }}"
                                            alt=""></span>
                                    <strong>Fiber Optic Infrastructure</strong>
                                </div>
                                <p>Penyambungan kabel optik (Fusion Splicer), pengukuran OTDR, dan arsitektur FTTH.</p>
                            </div>
                        </div>

                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-cloud-server.svg') }}"
                                            alt=""></span>
                                    <strong>Cloud Server & DevOps</strong>
                                </div>
                                <p>Virtualisasi Proxmox/VMware, Ubuntu Server administrasi, dan cloud hosting AWS
                                    basics.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tech-stack">
                        <span>STANDAR LISENSI & SERTIFIKASI INDUSTRI:</span>
                        <div class="tech-tags">
                            <span>MikroTik MTCNA</span>
                            <span>Cisco CCNA Prep</span>
                            <span>BNSP Teknisi Madya</span>
                            <span>Linux Professional (LPIC)</span>
                        </div>
                    </div>

                    <div class="prospek">
                        <span>PROSPEK KARIR LULUSAN</span>
                        <p>Network Engineer, Systems Administrator, Cyber Sec Analyst, FTTH Technician</p>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- ==================== DKV ==================== -->
    <section class="jurusan-section" id="dkv">
        <div class="program-container">
            <div class="jurusan-card">

                <div class="jurusan-image">
                    <img src="{{ asset('IMG/program/component/lab-dkv.svg') }}" alt="Desain Komunikasi Visual">
                    <div class="jurusan-overlay">
                        <div class="jurusan-badge">
                            <span>INDUSTRI KREATIF & GAME</span>
                            <strong>SENI DIGITAL & MEDIA INTERAKTIF</strong>
                        </div>
                        <h3>Desain Komunikasi Visual</h3>
                        <p>Mengasah kapabilitas visual storytelling: UI/UX product design, 3D asset creation, motion
                            graphics & cinematic video.</p>
                    </div>
                </div>

                <div class="jurusan-content">
                    <div class="kompetensi-header">
                        <h4>Kompetensi Inti Kurikulum</h4>

                    </div>

                    <div class="kompetensi-grid">
                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-uiux.svg') }}"
                                            alt=""></span>
                                    <strong>UI/UX & Product Design</strong>
                                </div>
                                <p>User journey mapping, wireframing, high-fidelity prototyping, dan design system di
                                    Figma.</p>
                            </div>
                        </div>

                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-3d.svg') }}"
                                            alt=""></span>
                                    <strong>3D Modeling & Animation</strong>
                                </div>
                                <p>Blender 3D mesh modeling, texturing, rigging, visual rendering untuk game asset.</p>
                            </div>
                        </div>

                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-motion.svg') }}"
                                            alt=""></span>
                                    <strong>Motion Graphic & VFX</strong>
                                </div>
                                <p>After Effects compositing, kinetic typography, audio-visual synchronizing commercial.
                                </p>
                            </div>
                        </div>

                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-cinema.svg') }}"
                                            alt=""></span>
                                    <strong>Sinematografi & Post-Pro</strong>
                                </div>
                                <p>Teknik pencahayaan studio, multi-cam live broadcast, color grading Premiere &
                                    DaVinci.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-stack">
                        <span>STANDARD SOFTWARE INDUSTRI:</span>
                        <div class="tech-tags">
                            <span>Figma</span>
                            <span>Blender 3D</span>
                            <span>Adobe Illustrator</span>
                            <span>Adobe Premiere Pro</span>
                            <span>After Effects</span>
                            <span>DaVinci Resolve</span>
                        </div>
                    </div>

                    <div class="prospek">
                        <span>PROSPEK KARIR LULUSAN</span>
                        <p>UI/UX Designer, Motion Graphic Artist, 3D Modeler, Digital Content Creator</p>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- ==================== BISNIS DIGITAL ==================== -->
    <!-- ==================== PSPT ==================== -->
    <section class="jurusan-section alt" id="pspt">
        <div class="program-container">
            <div class="jurusan-card reverse">

                <div class="jurusan-image">
                    <img src="{{ asset('IMG/program/component/lab-pspt.svg') }}"
                        alt="Produksi dan Siaran Program Televisi">
                    <div class="jurusan-overlay">
                        <div class="jurusan-badge">
                            <span>BROADCASTING & FILM</span>
                            <strong>PRODUKSI & SIARAN TELEVISI</strong>
                        </div>
                        <h3>Produksi dan Siaran Program Televisi</h3>
                        <p>Menguasai produksi konten siaran, teknik pengoperasian kamera studio, live broadcasting
                            switcher, audio engineering, dan tata artistik.</p>
                    </div>
                </div>

                <div class="jurusan-content">
                    <div class="kompetensi-header">
                        <h4>Kompetensi Inti Kurikulum</h4>

                    </div>

                    <div class="kompetensi-grid">
                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-kamera.svg') }}"
                                            alt=""></span>
                                    <strong>Teknik Kamera & Shooting</strong>
                                </div>
                                <p>Pengoperasian kamera studio & lapangan, framing, lighting setup, dan multi-camera
                                    production.</p>
                            </div>
                        </div>

                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-cinema.svg') }}"
                                            alt=""></span>
                                    <strong>Live Switching & Directing</strong>
                                </div>
                                <p>Operasi vision mixer / switcher, live directing, cueing, dan koordinasi kru siaran
                                    langsung.</p>
                            </div>
                        </div>

                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-audio.svg') }}"
                                            alt=""></span>
                                    <strong>Audio Engineering</strong>
                                </div>
                                <p>Mixing console, microphone technique, sound design, dan audio post-production untuk
                                    siaran.</p>
                            </div>
                        </div>

                        <div class="kompetensi-item">
                            <div>
                                <div class="card-kurikulum">
                                    <span class="icon"><img src="{{ asset('IMG/program/icon/icon-editing.svg') }}"
                                            alt=""></span>
                                    <strong>Editing & Post Production</strong>
                                </div>
                                <p>Adobe Premiere Pro, DaVinci Resolve, color grading, motion graphic overlay, dan
                                    finishing siaran.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tech-stack">
                        <span>TOOLS & PLATFORM PRAKTIK NYATA:</span>
                        <div class="tech-tags">
                            <span>Live Switcher</span>
                            <span>Studio Lighting</span>
                            <span>Multi-Camera</span>
                            <span>Sound Eng.</span>
                            <span>Premiere Pro</span>
                            <span>DaVinci Resolve</span>
                        </div>
                    </div>

                    <div class="prospek">
                        <span>PROSPEK KARIR LULUSAN</span>
                        <p>Program Director, Camera Operator, Video Editor, Live Streaming Producer, Content Creator TV
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ==================== KOMPARASI TABEL ==================== -->
    <section class="komparasi-section" id="sertifikasi">
        <div class="program-container">

            <div class="section-heading left">
                <span class="section-label">STANDARISASI INDUSTRI</span>
                <h2>Komparasi Fasilitas & Sertifikasi Kejuruan</h2>
                <p>Setiap siswa dibekali fasilitas workstation modern serta lisensi kompetensi bertaraf nasional dan
                    global sebelum lulus.</p>
            </div>

            <div class="table-wrapper">
                <table class="komparasi-table">
                    <thead>
                        <tr>
                            <th>Jurusan</th>
                            <th>Spesifikasi Lab Praktik</th>
                            <th>Sertifikasi Resmi</th>
                            <th>Output Proyek Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="dot rpl"></span> <strong>RPL</strong></td>
                            <td>Lab Mac & Core i7, Dual-Monitor Workstation, Gigabit Internet
                                Dedicated, Local Cloud Server</td>
                            <td>
                                <div class="sertifikasi">
                                    <span>BNSP Rekayasa Perangkat Lunak</span>
                                    <p>Oracle Certified Associate (OCA)</p>
                                </div>
                            </td>
                            <td>

                                <h4 class="proyek-akhir">Aplikasi Web/Mobile Siap Pakai di Play Store & Live
                                    Production Server</h4>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="dot tkj"></span> <strong>TKJ</strong></td>
                            <td>Server Rack 42U, Mikrotik Router RB-Series, Cisco Switch Catalyst,
Fusion Splicer Fiber Optic</td>
                            <td>
                                <div class="sertifikasi">
                                    <span>MikroTik Certified Network
Associate</span>
                                    <p>Cisco CCNA Prep / BNSP TKJ</p>
                                </div>
                            </td>
                            <td>
                                <h4 class="proyek-akhir">Topologi Jaringan Enterprise Aman & Implementasi
Fiber Distribution Node</h4 class="proyek-akhir">
                            </td>
                        </tr>
                        <tr>
                            <td><span class="dot dkv"></span> <strong>DKV</strong></td>
                            <td>Lab GPU RTX Studio, Pen Display Huion/Wacom, Studio Foto &
Podcast Green Screen Multi-cam</td>
                            <td>
                                <div class="sertifikasi">
                                    <span>Adobe Certified Professional
(ACP)
                                        Kamera Televisi</span>
                                    <p>Google Digital Garage & Meta Certified<br>BNSP Tenaga Pemasar Operasional</p>
                                </div>
                            </td>
                            <td>
                                <h4 class="proyek-akhir">Toko E-Commerce dengan Penjualan Nyata & Laporan Laba Bersih
                                    Tervalidasi</h4 class="proyek-akhir">
                            </td>
                        </tr>
                        <tr>
                            <td class="d-flex gap-1" style="align-items: center;"><span class="dot bisnis"></span><strong>PSPT</strong></td>
                            <td>Studio TV Kedap Suara, Multi-Camera Setup 4K, Lighting Grid, Video
                                Switcher Console & Audio Mixer, Teleprompter Room</td>
                            <td>
                                <div class="sertifikasi">
                                    <span>BNSP Penyiaran dan Penataan
                                        Kamera Televisi</span>
                                    <p>Google Digital Garage & Meta Certified<br>BNSP Tenaga Pemasar Operasional</p>
                                </div>
                            </td>
                            <td>
                                <h4 class="proyek-akhir">Toko E-Commerce dengan Penjualan Nyata & Laporan Laba Bersih
                                    Tervalidasi</h4 class="proyek-akhir">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>


    <!-- ==================== ALUR 3 TAHUN ==================== -->
    <section class="alur-section" id="alur">
        <div class="program-container">

            <div class="section-heading d-flex justify-content-center">
                <div class="text-center">
                    <span class="section-label">ROADMAP PRESTASI</span>
                    <h2>Alur 3 Tahun Menuju Profesional Muda</h2>

                    <p class="mx-auto text-center" style="max-width: 80%;">Didesain sistematis dari penguasaan fondasi
                        logika hingga integrasi langsung dengan
                        problem riil dunia kerja.</p>
                </div>
            </div>

            <div class="alur-grid">
                <div class="alur-card">
                  <div class="d-flex mb-3">
                    <div class="alur-number-1">10</div>
                      <span class="alur-year">Tahun ke-1</span>

                  </div>
                    <h3>Fondasi, Logika & Basic Tools</h3>
                    <p>Membangun kedisiplinan komputasi, algoritma pemrograman, etika profesional IT, dan pemahaman
                        teknis dasar peralatan thinking/laboratorium.</p>
                    <ul>
                        <div class="d-flex gap-2 mt-2">
                            <img src="{{asset('IMG/program/icon/icon-check.svg')}}" alt=""><span>Computational Thinking
                                & Logika</span>
                        </div>
                        <div class="d-flex gap-2 mt-2">
                            <img src="{{asset('IMG/program/icon/icon-check.svg')}}" alt=""><span>Pengenalan Hardware &
                                OS Linux</span>
                        </div>
                        <div class="d-flex gap-2 mt-2">
                            <img src="{{asset('IMG/program/icon/icon-check.svg')}}" alt=""><span>English for Technology
                                Communication</span>
                        </div>
                    </ul>
                    <div class="alur-capai">CAPAIAN KELAS:<br>Sertifikat Dasar Vokasi & Portofolio Mini 1.0</div>
                </div>

                <div class="alur-card highlight">
                  <div class="d-flex mb-3">

                    <div class="alur-number-2">11</div>
                      <span class="alur-year">Tahun ke-2</span>
                  </div>
                    <h3>Spesialisasi & Project-Based Learning</h3>
                    <p>Pendalaman konsentrasi secara intensif. Siswa mengerjakan simulasi pesanan klien melalui Teaching
                        Factory SMK INFOKOM.</p>
                    <ul>
                        <div class="d-flex gap-2 mt-2">
                            <img src="{{asset('IMG/program/icon/icon-check.svg')}}" alt=""><span>Proyek Perangkat Lunak
                                / Jaringan Skala Penuh</span>
                        </div>
                        <div class="d-flex gap-2 mt-2">
                            <img src="{{asset('IMG/program/icon/icon-check.svg')}}" alt=""><span>Teaching Factory (TeFa)
                                Real Order</span>
                        </div>
                        <div class="d-flex gap-2 mt-2">
                            <img src="{{asset('IMG/program/icon/icon-check.svg')}}" alt=""><span>Ujian Sertifikasi
                                Vendor (MikroTik/Adobe/Oracle)</span>
                        </div>
                    </ul>
                    <div class="alur-capai yellow">CAPAIAN KELAS:<br>Sertifikasi Vendor Internasional Terbit</div>
                </div>

                <div class="alur-card">
                  <div class="d-flex mb-3">
                    
                    <div class="alur-number-3">12</div>
                      <span class="alur-year">Tahun ke-3</span>
                  </div>
                    <h3>Prakerin 6 Bulan & Uji Kompetensi BNSP</h3>
                    <p>Penerjunan magang kerja nyata di perusahaan mitra industri selama 6 bulan penuh, diakhiri dengan
                        Uji Kompetensi Keahlian (UKK).</p>
                    <ul>
                        <div class="d-flex gap-2 mt-2">
                            <img src="{{asset('IMG/program/icon/icon-check.svg')}}" alt=""><span>Magang Industri 6 Bulan
                                Penuh (Prakerin)</span>
                        </div>
                        <div class="d-flex gap-2 mt-2">
                            <img src="{{asset('IMG/program/icon/icon-check.svg')}}" alt=""><span>Sidang Laporan &
                                Showcase Portofolio</span>
                        </div>
                        <div class="d-flex gap-2 mt-2">
                            <img src="{{asset('IMG/program/icon/icon-check.svg')}}" alt=""><span>Job Fair Eksklusif &
                                Rekrutmen Kerja Cepat</span>
                        </div>
                    </ul>
                    <div class="alur-capai">CAPAIAN KELAS:<br>Sertifikat BNSP Garuda Emas & Penempatan Kerja</div>
                </div>
            </div>

        </div>
    </section>




 <!-- ==================== CTA ==================== -->
<section class="program-cta">
    <div class="program-container">
        <div class="cta-box">

            <!-- Kiri -->
            <div class="cta-left">
                <span class="cta-label">PANDUAN CALON PESERTA DIDIK</span>

                <h2>Masih Ragu Menentukan Jurusan<br>yang Tepat?</h2>

                <p>
                    Unduh e-book lengkap silabus mata pelajaran 3 tahun, rincian biaya,
                    prospek gaji pemula, serta ikuti tes minat bakat digital gratis secara online.
                </p>

                <div class="cta-buttons">
                    <a href="#" class="btn-primary">
                        <img src="{{ asset('IMG/program/icon/icon-unduh.svg') }}" alt="Download" class="btn-icon">
                        Unduh Silabus Lengkap (PDF)
                    </a>

                    <a href="#" class="btn-secondary">
                        <img src="{{ asset('IMG/program/icon/icon-konsultasi.svg') }}" alt="Konsultasi" class="btn-icon">
                        Konsultasi Jurusan Gratis
                    </a>
                </div>
            </div>

            <!-- Kanan -->
            <div class="cta-right">
                <div class="cta-info-item">
                    <img src="{{ asset('IMG/program/icon/icon-terakditasi.svg') }}" alt="Terakreditasi" class="cta-icon">
                    <div>
                        <strong>Terakreditasi Unggul</strong>
                        <p>Akreditasi A dari Badan Akreditasi Nasional (BAN-SM).</p>
                    </div>
                </div>

                <div class="cta-info-item">
                    <img src="{{ asset('IMG/program/icon/icon-beasiswa.svg') }}" alt="Beasiswa" class="cta-icon">
                    <div>
                        <strong>Beasiswa Prestasi &amp; IT</strong>
                        <p>Potongan uang gedung hingga 100% untuk talenta berprestasi.</p>
                    </div>
                </div>

                <div class="cta-info-item">
                    <img src="{{ asset('IMG/program/icon/icon-layanan.svg') }}" alt="Hotline PPDB" class="cta-icon">
                    <div>
                        <strong>Layanan Hotline PPDB</strong>
                        <p>Chat langsung dengan konselor jurusan via WhatsApp: 0812-9988-7766</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

</main>

@push('scripts')
<script src="{{ asset('JS/program-animasi.js') }}"></script>
@endpush
@endsection