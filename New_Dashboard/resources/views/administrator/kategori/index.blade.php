@extends('template')

@section('app_css')
    <link rel="stylesheet" type="text/css" href="{{ url('/ui') }}/assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/ui') }}/assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/ui') }}/assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('/ui') }}/assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
@endsection

@section('title', 'Kategori')

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
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-plus"></i> Tambah Data
                </div>
                {{ Form::open(['url' => 'admin/kategori', 'id' => 'formKategori']) }}
                <div class="card-body">
                    {{ Form::label('nama_kategori', 'Nama Kategori') }}
                    {{ Form::text('nama_kategori', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Kategori']) }}
                </div>
                <div class="card-footer">
                    {{ Form::button('<i class="fa fas fa-sync-alt"></i> Batal', ['class' => 'btn btn-warning btn-sm btn-rounded', 'type' => 'reset', 'title' => 'Reset Data']) }}
                    {{ Form::button('<i class="fa fa-plus"></i> Tambah', ['class' => 'btn btn-primary btn-sm btn-rounded', 'type' => 'submit', 'title' => 'Hapus Data']) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-bars"></i> Data @yield('title')
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered first" style="width: 100%">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama Kategori</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=0 @endphp
                                @foreach ($data_kategori as $data)
                                    <tr>
                                        <td class="text-center">{{ ++$no }}.</td>
                                        <td>{{ $data->nama_kategori }}</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="modal" data-target="#exampleModal"
                                                class="btn btn-warning btn-sm btn-rounded " title="Edit Data"
                                                onclick="editKategori({{ $data->id }})">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <button id="hapusKategori" data-id="{{ $data->id }}"
                                                class="btn btn-danger btn-sm btn-rounded" title="Hapus Data">
                                                <i class="fa fa-trash" ></i> Hapus
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

    <!-- Edit Data -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <i class="fa fa-edit"></i> Edit Data
                    </h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                {{ Form::open(['url' => 'admin/kategori/simpan']) }}
                @method('PUT')
                <div class="modal-body" id="modal-content-edit">

                </div>
                <div class="modal-footer">
                    {{ Form::button('<i class="fa fas fa-sync-alt"></i> Batal', ['class' => 'btn btn-warning btn-sm btn-rounded', 'type' => 'reset' , 'title' => 'Reset Data']) }}
                    {{ Form::button('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-success btn-sm btn-rounded', 'type' => 'submit', 'title' => 'Simpan Data']) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    <!-- END -->
@endsection

@section('app_js')

    <script src="{{ url('build/js/jquery.validate.min.js') }}"></script>
    <script src="{{ url('build/js/additional-methods.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/ui') }}/assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>

    <script src="{{ url('/ui') }}/assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('/ui') }}/assets/vendor/datatables/js/data-table.js"></script>

    <script>
        function editKategori(id) {
            $.ajax({
                url: "{{ url('/admin/kategori/edit') }}",
                type: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $("#modal-content-edit").html(data);
                    return true;
                }
            });
        }

        $("body").on("click", "#hapusKategori", function() {
            let id = $(this).data('id');

            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete kategori'
            }).then((result) => {
                if (result.isConfirmed) {
                    form_string =
                        "<form method=\"POST\" action=\"{{ url('/admin/kategori') }}/" +
                        id +
                        "\" accept-charset=\"UTF-8\"><input name=\"_method\" type=\"hidden\" value=\"DELETE\"><input name=\"_token\" type=\"hidden\" value=\"{{ csrf_token() }}\"></form>"
                    form = $(form_string)
                    form.appendTo('body');
                    form.submit();
                } else {
                    Swal.fire('Konfirmasi Diterima!', 'Data Anda Masih Terdata', 'success');
                }
            });
        });
    </script>
@endsection
