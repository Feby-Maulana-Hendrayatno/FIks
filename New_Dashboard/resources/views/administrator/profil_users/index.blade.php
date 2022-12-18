@extends('template')

@section('title', 'Profil ' . Auth::user()->nama)

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
                    <i class="fa fa-edit"></i> Edit @yield('title')
                </div>
                {{ Form::open(['url' => 'admin/profil_saya/' . encrypt(auth::user()->id), 'enctype' => 'multipart/form-data']) }}
                @method('PUT')
                @if (empty(Auth::user()->foto))
                @else
                    <input type="hidden" name="gambarLama" value="{{ auth::user()->foto }}">
                @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <center>
                                @if (empty(Auth::user()->foto))
                                    <img src="{{ url('/gambar/gambar_user.png') }}" class="img-fluid mb-3 gambar-preview"
                                        id="tampilGambar">
                                @else
                                    <img src="{{ url('/storage/' .$profil_user->foto) }}" class="img-fluid mb-3 gambar-preview"
                                        id="tampilGambar">
                                @endif
                            </center>
                            {{ Form::file('foto', ['class' => 'form-control', 'onchange' => 'previewImage()']) }}
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                {{ Form::label('nama', 'Nama') }}
                                {{ Form::text('nama', auth::user()->nama, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::email('email', auth::user()->email, ['class' => 'form-control', 'placeholder' => 'Masukkan Email']) }}
                            </div>
                            <a href="#" data-toggle="modal" data-target="#exampleModal"
                                class="btn btn-primary btn-sm btn-rounded btn-block">
                                <i class="fa fa-edit"></i> Ganti Password
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    {{ Form::button("<i class='fa fa-times'></i> Batal", ['class' => 'btn btn-danger btn-sm ', 'type' => 'reset']) }}
                    {{ Form::button("<i class='fa fa-save'></i> Simpan", ['class' => 'btn btn-success btn-sm ', 'type' => 'submit']) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

    <!-- Ganti Password -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <i class="fa fa-edit"></i> Ganti Password
                    </h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                {{ Form::open(['url' => 'admin/profil_saya/simpan']) }}
                @method('PUT')
                <div class="modal-body" id="modal-content-edit">
                    <div class="form-group">
                        {{ Form::label('ganti_password', 'Ganti Password') }}
                        {{ Form::password('ganti_password', ['class' => 'form-control', 'placeholder' => 'Ganti Password']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('konfirmasi_password', 'Konfirmasi Password') }}
                        {{ Form::password('konfirmasi_password', ['class' => 'form-control', 'placeholder' => 'Konfirmasi Password']) }}
                    </div>
                </div>
                <div class="modal-footer">
                    {{ Form::button('<i class="fa fa-times"></i> Batal', ['class' => 'btn btn-danger btn-sm btn-rounded', 'type' => 'reset']) }}
                    {{ Form::button('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-success btn-sm btn-rounded', 'type' => 'submit']) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <!-- END -->

@endsection

@section('app_js')

    <script type="text/javascript">
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
