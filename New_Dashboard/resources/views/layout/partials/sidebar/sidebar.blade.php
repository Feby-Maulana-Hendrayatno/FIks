<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="{{ url('/admin/dashboard') }}">
                            <i class="fa fa-fw fa-user-circle"></i>
                            Dashboard
                            <span class="badge badge-success">6</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-bars"></i>
                            Data Master
                        </a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/carousel') }}">Carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/spesialisasi_kami') }}">Spesialisasi Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/layanan') }}">Layanan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/proyek') }}">Proyek</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/kategori') }}">Kategori</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-pengaturan" aria-controls="submenu-pengaturan"><i
                                class="fa fa-fw fa-map"></i>
                            Pengaturan
                        </a>
                        <div id="submenu-pengaturan" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/profil_perusahaan') }}">
                                        Profil Perusahaan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/tentang_kami') }}">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/informasi_login') }}">
                                        Informasi Login
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/footer') }}">
                                        Footer
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-akun" aria-controls="submenu-akun"><i class="fa fa-fw fa-users"></i>
                            Akun
                        </a>
                        <div id="submenu-akun" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                @if (Auth::user()->created_by != 0)
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/admin/users') }}">
                                            Users
                                        </a>
                                    </li>
                                @endif
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/admin/profil_saya') }}">
                                        Profil Saya
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
