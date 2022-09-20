@php
use App\Models\ProfilPerusahaan;
@endphp

<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="#">
            @php
                $profil = ProfilPerusahaan::select('nama')->first();
            @endphp
            @if (empty($profil))
                JARING
            @else
                {{ $profil->nama }}
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        @if (empty(Auth::user()->foto))
                            <img src="{{ url('/gambar') }}/gambar_user.png" alt=""
                                class="user-avatar-md rounded-circle">
                        @else
                            <img src="{{ url('/storage/' . Auth::user()->foto) }}" class="user-avatar-md rounded-circle">
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                        aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name">
                                {{ Auth::user()->nama }}
                            </h5>
                            <span class="status"></span>
                            <span class="ml-2">Administrator</span>
                        </div>
                        <a class="dropdown-item" href="{{ url('/admin/profil_saya') }}">
                            <i class="fas fa-cog mr-2"></i>Setting
                        </a>
                        <a class="dropdown-item" href="{{ url('/admin/logout') }}">
                            <i class="fas fa-power-off mr-2"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
