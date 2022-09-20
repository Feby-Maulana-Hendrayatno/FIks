@extends('template')

@section('title', 'Tambah Spesialisasi Kami')

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
                    <i class="fa fa-plus"></i> Tambah Data
                </div>
                {{ Form::open(['url' => 'admin/spesialisasi_kami/', 'enctype' => 'multipart/form-data']) }}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {{ Form::label('foto', 'Foto') }}
                                <img src="{{ url('/gambar/gambar_upload.jpg') }}" class="img-fluid gambar-preview mb-3"
                                    id="tampilGambar">
                                {{ Form::file('foto', ['class' => 'form-control', 'onchange' => 'previewImage()' , 'required']) }}
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                {{ Form::label('deskripsi', 'Deskripsi',) }}
                                {{ Form::textarea('deskripsi', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Deskripsi',]) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    {{ Form::button('<i class="fa fa-times"></i> Batal', ['class' => 'btn btn-danger ', 'type' => 'reset']) }}
                    {{ Form::button('<i class="fa fa-plus"></i> Tambah', ['class' => 'btn btn-primary ', 'type' => 'submit']) }}
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
