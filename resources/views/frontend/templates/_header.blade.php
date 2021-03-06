<header class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper d-flex flex-wrap justify-content-sm-between">
                <div class="header-top-left mt-10">
                    <ul class="header-meta">
                        <li><a href="mailto://ponpespmkgmail.com">ponpespmk@gmail.com</a></li>
                    </ul>
                </div>
                <div class="header-top-right mt-10">
                    <div class="header-link">
                        {{-- <a class="notice" href="#">Daftar Online</a> --}}
                        <a class="login" href="https://udawak.com/coming-soon/" target="blank">Login</a>
                        <a class="register" href="register.html">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="navigation" class="navigation navigation-landscape">
        <div class="container-xl position-relative">
            <div class="row align-items-center">
                <div class="col-lg-1">
                    <div class="header-logo">
                        <a href="{{ route('homepage') }}"><img src="assets/images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 position-static">
                    <div class="nav-toggle"></div>
                    <nav class="nav-menus-wrapper">
                        <ul class="nav-menu">
                            {{-- <li>
                                <a class="active" href="#">BERANDA</a>
                            </li> --}}
                            <li>
                                <a href="#">PROFIL</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="{{ route('legalitas') }}">Legalitas Yayasan</a></li>
                                    <li><a href="event-2.html">Visi dan Misi</a></li>
                                    <li><a href="event-details.html">Sejarah Singkat</a></li>
                                    <li><a href="event-details.html">Sejarah Pembangunan</a></li>
                                    <li><a href="event-details.html">Profil Pimpinan</a></li>
                                    <li><a href="{{ route('pendidik') }}">Pendidik</a></li>
                                    <li><a href="event-details.html">Tenaga Kependidikan</a></li>
                                    <li><a href="event-details.html">Struktur Organisasi</a></li>
                                    <li>
                                        <a href="#">Keuangan</a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li>

                                            </li>
                                            <li>

                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="event-details.html">Makna Logo</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">PONPES PMK</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="about-us.html">Tentang Pondok</a></li>
                                    <li><a href="about-us.html">MI</a></li>
                                    <li><a href="teachers.html">MTs</a></li>
                                    <li><a href="teacher-details.html">MA</a></li>
                                    <li><a href="gallery.html">Salafiyah</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">KEUANGAN</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="#">ZIZWAF</a></li>
                                    <li><a href="{{ route('keuangan') }}">Pengelolaan Keuangan Yayasan</a></li>
                                    <li><a href="#">Usaha Penunjang Biaya Operasional Masa Mendatang</a></li>

                                    {{-- <li><a href="#">Kegiatan Rutin</a></li>
                                    <li><a href="#">Kegiatan Ramadhan</a></li>
                                    <li><a href="#">Ekstrakulikuler</a></li> --}}
                                </ul>
                            </li>
                            <li>
                                <a href="#">BERITA</a>
                            </li>
                            <li>
                                <a href="#">GALERI</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="#">Galeri Foto</a></li>
                                    <li><a href="#">Galeri Vidio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('psb') }}">PPDB</a>
                            </li>
                            <li>
                                <a href="#">KONTAK</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="#">Donasi</a></li>
                                    <li><a href="{{ route('cp') }}">Kontak</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 position-static">
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
