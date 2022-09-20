@extends('template')

@section('title', ' Profil Perusahaan')

@section('app_breadcrumb')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">@yield('title')</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/admin/dashboard') }}" class="breadcrumb-link">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                @yield('title')
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('app_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if (empty($profil_perusahaan))
                        <i class="fa fa-plus"></i> Tambah Data
                    @else
                        <i class="fa fa-edit"></i> Edit Data
                    @endif
                </div>
                @if (empty($profil_perusahaan))
                    {{ Form::open(['url' => 'admin/profil_perusahaan', 'enctype' => 'multipart/form-data']) }}
                @else
                    {{ Form::open(['url' => 'admin/profil_perusahaan/' . encrypt($profil_perusahaan->id), 'enctype' => 'multipart/form-data']) }}
                    @method('PUT')
                    @php
                        $hasil = trim($profil_perusahaan->logo, url('/'));

                        $print = substr($hasil, 8);
                    @endphp
                    {{ Form::hidden('gambarLama', $print) }}
                @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            {{ Form::label('logo', 'Foto') }}
                            @if (empty($profil_perusahaan->logo))
                                <img src="{{ url('/gambar/gambar_upload.jpg') }}" class="img-fluid gambar-preview mb-3"
                                    id="tampilGambar">
                            @else
                                <img src="{{ $profil_perusahaan->logo }}" class="img-fluid gambar-preview mb-3"
                                    id="tampilGambar">
                            @endif
                            {{ Form::file('logo', ['class' => 'form-control', 'onchange' => 'previewImage()']) }}
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('singkatan', 'Singkatan') }}
                                        {{ Form::text('singkatan', empty($profil_perusahaan->singkatan) ? null : $profil_perusahaan->singkatan, ['class' => 'form-control', 'placeholder' => 'Masukkan Singkatan']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('no_hp', 'No. HP') }}
                                        {{ Form::number('no_hp', empty($profil_perusahaan->no_hp) ? null : $profil_perusahaan->no_hp, ['class' => 'form-control', 'min' => 1, 'placeholder' => '0']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('nama', 'Nama') }}
                                {{ Form::text('nama', empty($profil_perusahaan->nama) ? null : $profil_perusahaan->nama, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('alamat', 'Alamat') }}
                                {{ Form::textarea('alamat', empty($profil_perusahaan->alamat) ? null : $profil_perusahaan->alamat, ['class' => 'form-control', 'placeholder' => 'Masukkan Alamat']) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    {{ Form::button("<i class='fa fas fa-sync-alt'></i> Batal", ['class' => 'btn btn-warning btn-sm ', 'type' => 'reset']) }}
                    @if (empty($profil_perusahaan))
                        {{ Form::button("<i class='fa fa-plus'></i> Tambah", ['class' => 'btn btn-primary btn-sm ', 'type' => 'submit', 'title' => 'Tambah Data']) }}
                    @else
                        {{ Form::button("<i class='fa fa-save'></i> Simpan", ['class' => 'btn btn-success btn-sm ', 'type' => 'submit' , 'title' => 'Simpan Data']) }}
                    @endif
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection

@section('app_js')

    <script type="text/javascript">
        function previewImage() {
            const image = document.querySelector("#logo");
            const imgPreview = document.querySelector(".gambar-preview");

            imgPreview.style.display = "block";

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                $("#tampilGambar").addClass('mb-3');
                $("#tampilGambar").height("250");
            }
        }
    </script>
@endsection
