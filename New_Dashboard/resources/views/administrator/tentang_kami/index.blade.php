@extends('template')

@section('title', 'Tentang Kami')


@section('app_breadcrumb')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">@yield('title')</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tentang Kami</a></li>
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
                    <button type="button" class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#exampleModal" title="Tambah Data">
                        <i class="fa fa-plus"></i> Tambah Data
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tentang Kami</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=0 @endphp
                        @foreach ($data_tentang_kami as $data)
                        <tr>
                            <td class="text-center">{{ ++$no }}.</td>
                            <td>{{ $data->tentang_km }}</td>
                            <td class="text-center">
                                <button onclick="editTentangKami({{ $data->id }})" type="button" class="btn btn-rounded btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-edit" title="Edit Data">
                                    <i class="fa fa-edit"> Edit </i>
                                </button>
                                <button id="deleteTentangKami" data-id="{{ $data->id }}"
                                    class="btn btn-danger btn-rounded btn-sm">
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-plus"></i> Tambah
                </h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <form action="{{ url('/admin/tentang_kami') }}" method="POST">
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputText3">Tentang Kami</label>
                        <input id="text" type="text" name="tentang_km" required class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset"  class="btn btn-social btn-warning btn-flat bt-sm" title="Reset Data">
                        <i class="fa fas fa-sync-alt"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-social btn-success btn-flat bt-sm" title="Tambah Data">
                        <i class="fa fa-plus"></i> Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
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
            <form action="{{ url('/admin/tentang_kami/$id') }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body" id="modal-content-edit">

                </div>
                <div class="modal-footer">
                    <button type="reset"  class="btn btn-social btn-warning btn-flat bt-sm" title="Reset Data">
                        <i class="fa fas fa-sync-alt"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-social btn-success btn-flat bt-sm" title="Sace Data">
                        <i class="fa fa-save"></i> Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END -->
@endsection







@section('app_js')
    <script type="text/javascript">
        function editTentangKami(id) {
            $.ajax({
                url: "{{ url('/admin/tentang_kami/edit') }}",
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
            $('body').on('click', '#deleteTentangKami', function() {
                let id = $(this).data('id');

                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete tentang kami'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form_string =
                            "<form method=\"POST\" action=\"{{ url('/admin/tentang_kami') }}/" +
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
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/ui') }}/assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>

    <script src="{{ url('/ui') }}/assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('/ui') }}/assets/vendor/datatables/js/data-table.js"></script>
@endsection

