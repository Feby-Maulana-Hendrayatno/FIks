@php
use App\Models\ProfilPerusahaan;
@endphp
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layout.partials.css.css')
    @yield('app_css')
    @php
        $profil = ProfilPerusahaan::select('nama', 'logo')->first();
    @endphp
    <link rel="icon" type="image/png" href="{{ $profil->logo }}" />
    <title>
        @if (empty($profil->nama))
            Jaring
        @else
            {{ $profil->nama }}
        @endif
        | @yield('title')
    </title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        @include('layout.partials.navbar.navbar')

        @include('layout.partials.sidebar.sidebar')

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    @yield('app_breadcrumb')
                    @yield('app_content')

                </div>
            </div>
            @include('layout.partials.footer.footer')
        </div>
    </div>
    @include('layout.partials.js.js')
    @if (session('message'))
        {!! session('message') !!}
    @endif
    @yield('app_js')
</body>

</html>
