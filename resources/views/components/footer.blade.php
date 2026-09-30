<footer class="footer">

    <div class="shell footer-grid">

        <!-- Tentang -->
        <div class="footer-about">
            <a href="{{ route('home') }}" class="footer-brand">
                <span class="footer-logo">
                    <img
                        src="{{ asset('IMG/logo-infokom.svg') }}"
                        alt="Logo SMK INFOKOM"
                    >
                </span>
                <span class="footer-brand-text">
                    <span class="footer-school-name">
                        SMK INFOKOM
                    </span>
                </span>
            </a>

            <p class="footer-description">
                Lembaga pendidikan kejuruan teknologi unggulan yang berfokus
                melahirkan talenta digital kompetitif, berkarakter, dan berdaya
                saing industri global.
            </p>

            <p class="footer-accreditation">
                <img
                    src="{{ asset('IMG/terakreditasi-icon.svg') }}"
                    alt="Akreditasi A"
                    class="footer-accreditation-icon"
                >
                Terakreditasi A (Unggul)
            </p>
        </div>

        <!-- Program -->
        <div>
            <h2 class="footer-title">
                Program Keahlian
            </h2>
            <ul class="footer-links">
                <li>
                    <a href="{{ route('program') }}#rpl">
                        Rekayasa Perangkat Lunak (RPL)
                    </a>
                </li>
                <li>
                    <a href="{{ route('program') }}#tkj">
                        Teknik Komputer &amp; Jaringan (TKJ)
                    </a>
                </li>
                <li>
                    <a href="{{ route('program') }}#dkv">
                        Multimedia / DKV
                    </a>
                </li>
                <li>
                    <a href="{{ route('program') }}#bisnis">
                        Bisnis Digital &amp; Marketing
                    </a>
                </li>
                <li>
                    <a href="{{ route('program') }}">
                        Broadcasting &amp; Perfilman
                    </a>
                </li>
            </ul>
        </div>

        <!-- Tautan -->
        <div>
            <h2 class="footer-title">
                Tautan Cepat
            </h2>
            <ul class="footer-links">
                <li>
                    <a href="{{ route('profil') }}#visi-misi">
                        Profil &amp; Visi Misi
                    </a>
                </li>
                <li>
                    <a href="{{ route('ppdb') }}">
                        Informasi PPDB Online
                    </a>
                </li>
                <li>
                    <a href="{{ route('berita') }}">
                        Agenda &amp; Berita Sekolah
                    </a>
                </li>
                <li>
                    <a href="{{ route('galeri') }}">
                        Galeri Aktivitas Siswa
                    </a>
                </li>
                <li>
                    <a href="{{ route('kontak') }}">
                        Hubungi Kami
                    </a>
                </li>
            </ul>
        </div>

        <!-- Kontak (DINAMIS) -->
        <div>
            <h2 class="footer-title">
                Kampus &amp; Kontak
            </h2>

            <ul class="footer-contact">
                <!-- Alamat -->
                <li>
                    <span>
                        {{ $kontak['kontak_alamat'] ?? 'Jl. Letjen Ibrahim Adjie No. 178, Sindangbarang, Kec. Bogor Barat, Kota Bogor, Jawa Barat 16117' }}
                    </span>
                </li>

                <!-- Telepon -->
                <li>
                    <img
                        src="{{ asset('IMG/phone-icon.svg') }}"
                        alt="Telepon"
                        class="footer-contact-icon"
                    >
                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $kontak['kontak_telepon'] ?? '+622518328999') }}">
                        {{ $kontak['kontak_telepon'] ?? '(0251) 8328-999' }}
                    </a>
                </li>

                <!-- Email -->
                <li>
                    <img
                        src="{{ asset('IMG/email-icon.svg') }}"
                        alt="Email"
                        class="footer-contact-icon"
                    >
                    <a href="mailto:{{ $kontak['kontak_email'] ?? 'info@smkinfokom.sch.id' }}">
                        {{ $kontak['kontak_email'] ?? 'info@smkinfokom.sch.id' }}
                    </a>
                </li>
            </ul>

            <!-- Social Media (opsional) -->
            <div class="footer-social">
                @if(!empty($kontak['kontak_instagram']))
                    <a href="{{ $kontak['kontak_instagram'] }}" target="_blank" rel="noopener" aria-label="Instagram">
                        {{-- Ganti dengan icon Instagram kamu --}}
                        Instagram
                    </a>
                @endif

                @if(!empty($kontak['kontak_youtube']))
                    <a href="{{ $kontak['kontak_youtube'] }}" target="_blank" rel="noopener" aria-label="YouTube">
                        {{-- Ganti dengan icon YouTube kamu --}}
                        YouTube
                    </a>
                @endif
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="shell footer-bottom-inner">
            <p>
                &copy;
                <span data-year>{{ date('Y') }}</span>
                SMK INFOKOM KOTA BOGOR.
                Hak Cipta Dilindungi Undang-Undang.
            </p>

            <div class="footer-legal">
                <a href="#">
                    Kebijakan Privasi
                </a>
                <a href="#">
                    Syarat &amp; Ketentuan
                </a>
            </div>
        </div>
    </div>

</footer>