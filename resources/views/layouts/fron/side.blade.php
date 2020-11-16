<nav id="side-nav">
    <ul class="side-nav-menu">

        <li class="item-has-children">
            <a href="#">Akademik</a>
            <ul class="sub-menu">
                <li><a href="diploma.html">LPPM</a></li>
                <li><a href="graduate.html">PJM</a></li>
                <li><a href="master.html">Tata Tertib</a></li>
                <li><a href="apply_online.html">Pendaftaran</a></li>
                <li><a href="staff.html">OJS</a></li>
            </ul>
        </li> <!-- item-has-children -->
        <li class="item-has-children">
            <a href="#">Profil Kampus</a>
            <ul class="sub-menu">
                <li><a href="about.html">Tentang Kami</a></li>
                <li class="item-has-children">
                    <a href="#">Visi Dan Misi</a>
                    <ul class="sub-menu">
                        <li>
                            <a>Teknik Informatika</a>
                        </li>
                        <li>
                            <a>Sistem Informasi</a>
                        </li>
                    </ul>
                </li>
                <li><a href="staff.html">Struktur Organisasi</a></li>
                <li><a href="gallery.html">Staf Pengajar</a></li>
            </ul>
        </li> <!-- item-has-children -->
        <li>
        <li class="item-has-children">
            <a href="#">Kemahasiswaan</a>
            <ul class="sub-menu">
                <li><a href="#">BEM</a></li>
                <li><a href="#">UKM</a></li>
                <li><a href="#">Beasiswa</a></li>
                <li><a href="#">Lowongan Kerja</a></li>
                <li><a href="#">Alumni</a></li>

            </ul>
        </li> <!-- item-has-children -->
        <li>
            <ul class="side-nav-menu single-item-wp">
                <li><a href="{{ route('tour') }}">Tour</a></li>
                <li><a href="blog.html">Berita</a></li>
                <li><a href="contacts.html">Kontak Kami</a></li>
            </ul>
            <!--single-item-wp -->
            <ul class="side-nav-menu single-item-wp">
                @if (auth()->check())
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                @else

                <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                @endif

                <li class="hidden-lg hidden-md"><a href="#search">Search</a></li>
                <li><a href="#0">Terms &amp; Conditions</a></li>
            </ul>
            <!--single-item-wp -->
        </li>
    </ul> <!-- side-nav-menu -->
    <div id="social">
        <ul>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-google"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
        </ul>
    </div>
</nav>