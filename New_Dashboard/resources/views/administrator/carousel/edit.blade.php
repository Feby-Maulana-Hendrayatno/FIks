@extends('template')

@section('title', 'Edit Carousel')

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
                            <li class="breadcrumb-item">
                                <a href="{{ url('/admin/carousel') }}" class="breadcrumb-link">
                                    Carousel
                                </a>
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
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-edit"></i> Tambah Data
                </div>
                {{ Form::open(['url' => 'admin/carousel/' . encrypt($edit->id), 'enctype' => 'multipart/form-data']) }}
                @method('PUT')
                {{ csrf_field() }}
                @php
                    $hasil = trim($edit->foto, url('/'));
                    $hasilIcon = trim($edit->icon, url('/'));

                    $print = substr($hasil, 8);
                    $printIcon = substr($hasilIcon, 8);
                @endphp
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="hidden" name="gambarLama" value="{{ $print }}">
                                {{ Form::label('foto', 'Foto') }}
                                @if (empty($edit->foto))
                                    <img src="{{ url('/gambar/gambar_upload.jpg') }}" class="img-fluid gambar-preview"
                                        id="tampilGambar">
                                @else
                                    <img src="{{ $edit->foto }}" class="img-fluid gambar-preview mb-3" id="tampilGambar">
                                @endif
                                {{ Form::file('foto', ['class' => 'form-control', 'onchange' => 'previewImage()']) }}
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="padding-top:6.3rem">
                                        {{ Form::label('warna', 'Warna Link') }}
                                        {{ Form::color('warna', $edit->warna, ['class' => 'form-control', ]) }}
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" name="IconLama" value="{{ $printIcon }}">
                                            @if (empty($edit->icon))
                                            <img src="{{ url('/gambar/gambar_upload.jpg') }}" class=" gambar-icon-preview mb-3"
                                                id="tampilGambarIcon" height="100px " width="100px">
                                            @else
                                                <img src="{{ $edit->icon }}" class="gambar-icon-preview mb-3" height="100px " width="100px" id="tampilGambarIcon">
                                            @endif
                                            {{ Form::label('icon', 'Icon (oposional) ') }}
                                            {{ Form::file('icon', ['class' => 'form-control', 'onchange' => 'previewIcon()' ]) }}
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('nm_link', 'Nama Link') }}
                                        {{ Form::text('nm_link', $edit->nm_link, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Link (oposional) ']) }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('link', 'Link') }}
                                        {{ Form::text('link', $edit->link, ['class' => 'form-control', 'placeholder' => 'Masukan Tautan Link']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('deskripsi', 'Deskripsi',) }}
                                {{ Form::textarea('deskripsi', $edit->deskripsi, ['class' => 'form-control', 'placeholder' => 'Masukkan Deskripsi',]) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    {{ Form::button('<i class="fa fa-times"></i> Reset', ['class' => 'btn btn-danger btn-sm ', 'type' => 'reset']) }}
                    {{ Form::button('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-success btn-sm ', 'type' => 'submit']) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection

@section('app_js')

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: '#deskripsi'
        });

        function previewImage() {
            const image = document.querySelector("#foto");
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


        function previewIcon() {
            const image = document.querySelector("#icon");
            const imgPreview = document.querySelector(".gambar-icon-preview");

            imgPreview.style.display = "block";

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                $("#tampilGambarIcon").addClass('mb-3');
                $("#tampilGambarIcon").height("109px");
                $("#tampilGambarIcon").width("150px");
            }
        }
    </script>

@endsection
