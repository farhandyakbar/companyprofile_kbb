@extends('templates.default')

@section('content')
<!-- ============================================================== -->
<!-- pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader -->
<!-- ============================================================== -->
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title" style="display: inline-block;">Master Karyawan</h2>
                <a href="#" class="btn btn-info float-right mb-3" data-toggle="modal" data-target="#createModal"> <i
                    class="fa fa-plus"></i>
                Tambah Data</a>
            <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>                             
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawan as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->password }}</td>
                                <td>
                                    <button href="{{ route('karyawan.update', $item->id ) }}"
                                        class="btn btn-primary" id="editKaryawan" data-id="{{ $item->id }}"
                                        data-username="{{ $item->username }}"
                                        data-password="{{ $item->password }}" 
                                        data-nama="{{ $item->nama }}">Edit</button>
                                    <button href="{{ route('karyawan.destroy', $item->id) }}" id="delete"
                                        data-title="{{ $item->username }}" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>                             
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        @include('admin.karyawan.create')
        @include('admin.karyawan.edit')
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>

<form action="" method="post" id="deleteForm">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
</form>
@endsection

@push('script')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@include('templates.partials._sweetalert')
<script>
    $('button#delete').on('click', function () {
        var href = $(this).attr('href');
        var name = $(this).data('title');
        Swal.fire({
                title: "Anda yakin untuk menghapus karyawan \"" + name + "\"?",
                text: "Setelah dihapus, data tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Ya, hapus'
            })
            .then((willDelete) => {
                if (willDelete.value) {
                    $('#deleteForm').attr('action', href);
                    $('#deleteForm').submit();
                }
            })
    });

    $('button#editKaryawan').on('click', function () {
        var id = $(this).data("id");
        var username = $(this)data("username")
        var nama = $(this).data("nama");
        var ket = $(this).data("password");
        var href = $(this).attr('href');

        $('#updateForm').attr('action', href);
        $('#username').val(username);
        $('#nama').val(nama);
        $('#keterangan').val(password);
        $("#editModal").modal('show');
    });

</script>
@endpush
