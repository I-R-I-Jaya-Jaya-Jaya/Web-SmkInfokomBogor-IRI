<!-- ===== Top Bar ===== -->
<div class="top-bar">

    <div class="top-bar-inner">

        <div class="top-bar-contact">

            <a href="tel:{{ $kontak['kontak_telepon'] ?? '02518328999' }}">
                <img
                    src="{{ asset('IMG/home/phone-icon.svg') }}"
                    alt="Telepon"
                >
                <span>
                    {{ $kontak['kontak_telepon'] ?? '(0251) 8328-999' }}
                </span>
            </a>

            <span class="top-bar-divider">•</span>

            <a
                href="mailto:{{ $kontak['kontak_email'] ?? 'info@smkinfokom.sch.id' }}"
            >
                <img
                    src="{{ asset('IMG/home/email-icon.svg') }}"
                    alt="Email"
                >
                <span>
                    {{ $kontak['kontak_email'] ?? 'info@smkinfokom.sch.id' }}
                </span>
            </a>

        </div>


        <a
            href="{{ route('ppdb') }}"
            class="top-bar-ppdb"
        >
            <span class="top-bar-dot"></span>
            PPDB 2025/2026 DIBUKA
        </a>

    </div>

</div>


<!-- ===== Navbar ===== -->

<header id="navbar" class="main-header">

    <nav class="nav-container" aria-label="Navigasi utama">

        <!-- Logo -->
        <a
            href="{{ route('home') }}"
            class="nav-logo"
        >

            <span class="logo-box">
                <img
                    src="{{ asset('IMG/home/logo-infokom.svg') }}"
                    alt="Logo SMK INFOKOM"
                >
            </span>

            <span class="logo-text">
                <span class="logo-title">
                    SMK INFOKOM
                </span>

                <span class="logo-subtitle">
                    KOTA BOGOR
                </span>
            </span>

        </a>


        <!-- Menu -->
        <ul id="main-menu" class="nav-menu">

            <li>
                <a
                    href="{{ route('home') }}"
                    class="navlink {{ request()->routeIs('home') ? 'is-active' : '' }}"
                >
                    Beranda
                </a>
            </li>

            <li>
                <a
                    href="{{ route('profil') }}"
                    class="navlink {{ request()->routeIs('profil') ? 'is-active' : '' }}"
                >
                    Profil Sekolah
                </a>
            </li>

            <li>
                <a
                    href="{{ route('program') }}"
                    class="navlink {{ request()->routeIs('program') ? 'is-active' : '' }}"
                >
                    Program Keahlian
                </a>
            </li>

              <li>
                <a
                    href="{{ route('fasilitas') }}"
                    class="navlink {{ request()->routeIs('fasilitas') ? 'is-active' : '' }}"
                >
                    Fasilitas
                </a>
            </li>

            <li>
                <a
                    href="{{ route('bkk') }}"
                    class="navlink {{ request()->routeIs('bkk') ? 'is-active' : '' }}"
                >
                    BKK
                </a>
            </li>

            <li>
                <a
                    href="{{ route('mitra') }}#mitra"
                    class="navlink"
                >
                    Mitra Kerja Sama
                </a>
            </li>

            <li>
                <a
                    href="{{ route('galeri') }}"
                    class="navlink {{ request()->routeIs('galeri') ? 'is-active' : '' }}"
                >
                    Galeri
                </a>
            </li>

            <li>
                <a
                    href="{{ route('berita') }}"
                    class="navlink {{ request()->routeIs('berita') ? 'is-active' : '' }}"
                >
                    Berita
                </a>
            </li>

            <li>
                <a
                    href="{{ route('kontak') }}"
                    class="navlink {{ request()->routeIs('kontak') ? 'is-active' : '' }}"
                >
                    Kontak
                </a>
            </li>

        </ul>


        <!-- Action -->
        <div class="nav-actions">

            <a
                href="{{ route('ppdb') }}"
                class="btn-daftar"
            >
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

                <svg
                    id="icon-open"
                    class="icon"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"
                    />
                </svg>

                <svg
                    id="icon-close"
                    class="icon is-hidden"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        d="M6 18 18 6M6 6l12 12"
                    />
                </svg>

            </button>

        </div>

    </nav>

</header>