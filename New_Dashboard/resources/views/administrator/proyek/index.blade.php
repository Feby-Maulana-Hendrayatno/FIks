@extends('template')

@section('title', 'Proyek')

@section('app_css')
    <link rel="stylesheet" type="text/css" href="{{ url('/ui') }}/assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/ui') }}/assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/ui') }}/assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('/ui') }}/assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
@endsection

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
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-book pt-2"></i> Data @yield('title')
                    <div class="float-right">
                        <button type="button" class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#modal-default" title="Tambah Data">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered first" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Nama Produk</th>
                                    <th class="text-center">device</th>
                                    <th class="text-center">Foto Produk</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 0;
                                @endphp
                                @foreach ($data_produk as $data)
                                    <tr>
                                        <td class="text-center">{{ ++$no }}.</td>
                                        <td class="text-center">{{ $data->nm_proyek }}</td>
                                        <td class="text-center">{{ $data->device }}</td>
                                        <td class="text-center">
                                            {{-- <img src="{{ url($data->foto_proyek) }}" width="150" height="135" > --}}
                                            <img src="{{ $data->foto_proyek }}" width="200">
                                        </td>
                                        <td class="text-center">
                                            <button onclick="editProyek({{ $data->id }})" type="button" class="btn btn-rounded btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-edit" title="Edit Data">
                                                <i class="fa fa-edit"> Edit </i>
                                            </button>
                                            <button id="deleteProyek" data-id="{{ $data->id }}"
                                                class="btn btn-danger btn-rounded btn-sm" title="Hapus Data">
                                                <i class="fa fa-trash"></i> Hapus
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Tambah Data -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> <i class="fa fa-plus"></i> Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ url('/admin/proyek/') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_layanan"> Nama Produk </label>
                            <input type="text" class="form-control" name="nm_proyek" required placeholder="Masukkan Nama Produk yang dibuat">
                        </div>
                        <div class="form-group">
                            <label>Icon </label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <img src="{{ url('/gambar/upload.jpg') }}" class="img-fluid gambar-preview" id="tampilGambar">
                            <input type="file" class="form-control" name="foto_proyek" id="foto_proyek"
                                required onchange="previewImage()">
                        </div>
                        <div class="form-group">
                            <label for="id"> Device </label>
                            <select required class="form-control" style="width: 100%;" name="device">
                                <option value="">- Pilih -</option>
                                @foreach($data_kategori as $kategori)
                                <option value="{{ $kategori->nama_kategori }}">
                                    {{ $kategori->nama_kategori }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="reset" class="btn btn-social btn-warning btn-flat bt-sm" title="Reset Data">
                            <i class="fa fas fa-sync-alt"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-social btn-success btn-flat bt-sm" title="Tambah Data">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- END -->

    <!-- Edit Data -->
    <div class="modal fade" id="modal-default-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ url('/admin/proyek/edit/') }}" enctype="multipart/form-data">
                    @method("PUT")
                    @csrf
                    <div class="modal-body" id="modal-content-edit">

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="reset" class="btn btn-social btn-warning btn-flat bt-sm" title="Reset Data">
                            <i class="fa fas fa-sync-alt"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-social btn-success btn-flat bt-sm" title="Simpan Data">
                            <i class="fa fas fa-save"></i> Save
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- END -->

@endsection


@section('app_js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/ui') }}/assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('/ui') }}/assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('/ui') }}/assets/vendor/datatables/js/data-table.js"></script>
    <script type="text/javascript">
    function previewImage() {
            const image = document.querySelector("#foto_proyek");
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


        function editProyek(id) {
            $.ajax({
                url: "{{ url('/admin/proyek/edit') }}",
                type: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $("#modal-content-edit").html(data);
                    return true;
                }
            })
        }

        $(document).ready(function() {
            $('body').on('click', '#deleteProyek', function() {
                let id = $(this).data('id');

                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete proyek'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form_string =
                            "<form method=\"POST\" action=\"{{ url('/admin/proyek/') }}/" +
                            id +
                            "\" accept-charset=\"UTF-8\"><input name=\"_method\" type=\"hidden\" value=\"DELETE\"><input name=\"_token\" type=\"hidden\" value=\"{{ csrf_token() }}\"></form>"

                        form = $(form_string)
                        form.appendTo('body');
                        form.submit();
                    } else {
                        Swal.fire('Konfirmasi Diterima!', 'Data Anda Masih Terdata', 'success');
                    }
                })
            })
        })
    </script>
    <script src="{{ url('sweetalert/dist/sweetalert2.all.min.js') }}"></script>
    @if (session('message'))
        {!! session('message') !!}
    @endif
@endsection


@section('app_js')

@endsection


