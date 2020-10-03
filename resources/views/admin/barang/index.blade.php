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
                <h2 class="card-title" style="display: inline-block;">Master Barang</h2>
                <a href="{{ route("barang.create") }}" class="btn btn-info float-right mb-3"> <i class="fa fa-plus"></i>
                        Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                {{-- <th>Deskripsi</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kategori->nama }}</td>
                                {{-- <td>{{ $item->deskripsi }}</td> --}}
                                <td>
                                    <a href="{{ route('barang.edit', $item->id ) }}" class="btn btn-primary" >Edit</a>
                                    <a href="{{ route('barang.show', $item->id ) }}" class="btn btn-warning" >Detail</a>
                                    <button href="{{ route('barang.destroy', $item->id) }}" id="delete"
                                        data-title="{{ $item->nama }}" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                {{-- <th>Deskripsi</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        @include('admin.kategori.create')
        @include('admin.kategori.edit')
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
                title: "Anda yakin untuk menghapus barang \"" + name + "\"?",
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

    $('button#editKategori').on('click', function () {
        var id = $(this).data("id");
        var nama = $(this).data("nama");
        var ket = $(this).data("keterangan");
        var href = $(this).attr('href');

        $('#updateForm').attr('action', href);
        $('#nama').val(nama);
        $('#keterangan').val(ket);
        $("#editModal").modal('show');
    });

</script>
@endpush
