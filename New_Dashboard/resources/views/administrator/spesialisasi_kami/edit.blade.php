@extends('template')

@section('title', 'Edit Spesialisasi Kami')

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
                                <a href="{{ url('/admin/spesialisasi_kami') }}" class="breadcrumb-link">
                                    Spesialisasi Kami
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
                    <i class="fa fa-edit"></i> Edit Data
                </div>
                {{ Form::open(['url' => 'admin/spesialisasi_kami/' . encrypt($edit->id), 'enctype' => 'multipart/form-data']) }}
                @method('PUT')
                {{ csrf_field() }}
                @php
                    $hasil = trim($edit->foto, url('/'));

                    $print = substr($hasil, 8);
                @endphp
                <input type="hidden" name="gambarLama" value="{{ $print }}">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
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
                            <div class="form-group">
                                {{ Form::label('deskripsi', 'Deskripsi') }}
                                {{ Form::textarea('deskripsi', $edit->deskripsi, ['class' => 'form-control', 'placeholder' => 'Masukkan Deskripsi']) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    {{ Form::button('<i class="fa fa-times"></i> Batal', ['class' => 'btn btn-danger btn-sm ', 'type' => 'reset']) }}
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
    </script>

@endsection
