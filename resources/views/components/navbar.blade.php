<!-- ===== Top Bar ===== -->
<div class="top-bar">
    <div class="top-bar-inner">
        <div class="top-bar-contact">
            <a href="tel:{{ $kontak['kontak_telepon'] ?? '02518328999' }}">
                <img src="{{ asset('IMG/home/phone-icon.svg') }}" alt="Telepon">
                <span>{{ $kontak['kontak_telepon'] ?? '(0251) 8328-999' }}</span>
            </a>

            <span class="top-bar-divider">•</span>

            <a href="mailto:{{ $kontak['kontak_email'] ?? 'info@smkinfokom.sch.id' }}">
                <img src="{{ asset('IMG/home/email-icon.svg') }}" alt="Email">
                <span>{{ $kontak['kontak_email'] ?? 'info@smkinfokom.sch.id' }}</span>
            </a>
        </div>

        <a href="{{ route('ppdb') }}" class="top-bar-ppdb">
            <span class="top-bar-dot"></span>
            PPDB 2025/2026 DIBUKA
        </a>
    </div>
</div>


<!-- ===== Navbar ===== -->
<header id="navbar" class="main-header">
    <nav class="nav-container" aria-label="Navigasi utama">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="nav-logo">
            <span class="logo-box">
                <img src="{{ asset('IMG/home/logo-infokom.svg') }}" alt="Logo SMK INFOKOM">
            </span>
            <span class="logo-text">
                <span class="logo-title">SMK INFOKOM</span>
                <span class="logo-subtitle">KOTA BOGOR</span>
            </span>
        </a>

        <!-- Menu desktop -->
        <ul id="main-menu" class="nav-menu">

            <!-- Beranda -->
            <li>
                <a href="{{ route('home') }}"
                   class="navlink {{ request()->routeIs('home') ? 'is-active' : '' }}">
                    Beranda
                </a>
            </li>

            <!-- Profil ▾ -->
            <li class="has-dropdown">
                <button type="button"
                        class="navlink dropdown-toggle {{ request()->routeIs('profil','kontak') ? 'is-active' : '' }}"
                        aria-haspopup="true" aria-expanded="false">
                    Profil
                    <svg class="chevron" viewBox="0 0 24 24" width="14" height="14" fill="none"
                         stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <ul class="dropdown">
                    <li><a href="{{ route('profil') }}#profil-sekolah">Profil Sekolah</a></li>
                    <li><a href="{{ route('profil') }}#visi-misi">Visi Misi</a></li>
                    <li><a href="{{ route('kontak') }}">Lokasi &amp; Kontak</a></li>
                </ul>
            </li>

            <!-- Program Keahlian -->
            <li>
                <a href="{{ route('program') }}"
                   class="navlink {{ request()->routeIs('program') ? 'is-active' : '' }}">
                    Program Keahlian
                </a>
            </li>

            <!-- Fasilitas -->
            <li>
                <a href="{{ route('fasilitas') }}"
                   class="navlink {{ request()->routeIs('fasilitas') ? 'is-active' : '' }}">
                    Fasilitas
                </a>
            </li>

            <!-- Kegiatan ▾ -->
            <li class="has-dropdown">
                <button type="button"
                        class="navlink dropdown-toggle {{ request()->routeIs('galeri','berita') ? 'is-active' : '' }}"
                        aria-haspopup="true" aria-expanded="false">
                    Kegiatan
                    <svg class="chevron" viewBox="0 0 24 24" width="14" height="14" fill="none"
                         stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <ul class="dropdown">
                    <li><a href="{{ route('galeri') }}">Galeri</a></li>
                    <li><a href="{{ route('berita') }}">Berita</a></li>
                </ul>
            </li>

            <!-- Layanan ▾ -->
            <li class="has-dropdown">
                <button type="button"
                        class="navlink dropdown-toggle {{ request()->routeIs('ppdb','bkk','mitra') ? 'is-active' : '' }}"
                        aria-haspopup="true" aria-expanded="false">
                    Layanan
                    <svg class="chevron" viewBox="0 0 24 24" width="14" height="14" fill="none"
                         stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path stroke-linecap="round" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <ul class="dropdown">
                    <li><a href="{{ route('ppdb') }}">PPDB</a></li>
                    <li><a href="{{ route('bkk') }}">BKK</a></li>
                    <li><a href="{{ route('mitra') }}#mitra">Mitra Kerja Sama</a></li>
                </ul>
            </li>

        </ul>

        <!-- Action -->
        <div class="nav-actions">
            <a href="{{ route('ppdb') }}" class="btn-daftar">
                Daftar Sekarang
            </a>

            <button
                id="menu-toggle"
                type="button"
                class="menu-toggle"
                aria-label="Buka menu navigasi"
                aria-expanded="false"
                aria-controls="mobile-menu"
            >
                <svg id="icon-open" class="icon" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>
                </svg>
                <svg id="icon-close" class="icon is-hidden" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" d="M6 18 18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="mobile-menu hidden">
        <div class="container mobile-menu-list">

            <a href="{{ route('home') }}"
               class="navlink-mobile {{ request()->routeIs('home') ? 'is-active' : '' }}">Beranda</a>

            <!-- Profil (mobile accordion) -->
            <details class="mobile-group">
                <summary class="navlink-mobile">Profil</summary>
                <div class="mobile-sub">
                    <a href="{{ route('profil') }}#profil-sekolah">Profil Sekolah</a>
                    <a href="{{ route('profil') }}#visi-misi">Visi Misi</a>
                    <a href="{{ route('kontak') }}">Lokasi &amp; Kontak</a>
                </div>
            </details>

            <a href="{{ route('program') }}"
               class="navlink-mobile {{ request()->routeIs('program') ? 'is-active' : '' }}">Program Keahlian</a>

            <a href="{{ route('fasilitas') }}"
               class="navlink-mobile {{ request()->routeIs('fasilitas') ? 'is-active' : '' }}">Fasilitas</a>

            <!-- Kegiatan (mobile accordion) -->
            <details class="mobile-group">
                <summary class="navlink-mobile">Kegiatan</summary>
                <div class="mobile-sub">
                    <a href="{{ route('galeri') }}">Galeri</a>
                    <a href="{{ route('berita') }}">Berita</a>
                </div>
            </details>

            <!-- Layanan (mobile accordion) -->
            <details class="mobile-group">
                <summary class="navlink-mobile">Layanan</summary>
                <div class="mobile-sub">
                    <a href="{{ route('ppdb') }}">PPDB</a>
                    <a href="{{ route('bkk') }}">BKK</a>
                    <a href="{{ route('mitra') }}#mitra">Mitra Kerja Sama</a>
                </div>
            </details>

            <div class="mobile-cta">
                <a href="{{ route('ppdb') }}" class="btn-daftar">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</header>