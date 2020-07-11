@extends('templates.default')

@section('content')
<!-- ============================================================== -->
<!-- basic form  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Detail Data Barang</h3>
        </div>
        <div class="card">
            <div class="card-body"> 
                @csrf
                <div class="form-group">
                    <label>Nama Barang</label>
                <input type="text" class="form-control" value="{{ $barang->nama }}" name="nama" disabled>
                </div>
                <div class="form-group">
                    <label>Kategori Barang</label> 
                    <input class="form-control" value="{{ $barang->kategori->nama }}" name="deskripsi" rows="3" disabled>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                <input class="form-control" value="{{ $barang->deskripsi }}" name="deskripsi" rows="3" disabled>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                <input type="number" class="form-control" value="{{ $barang->harga }}" name="harga" disabled>
                </div>
                <div class="form-group">
                    <label>Stok</label>
                <input id="stok" type="number" class="form-control" value="{{ $barang->stok }}" placeholder="Stok" name="stok" disabled>
                </div>
                <div class="form-group">
                @foreach ($barangDetail as $item)
                <img src="{{ asset('images/gambar/'.$item->gambar) }}" alt="" width="300" height="200">
                @endforeach
                </div>
                <div class="form-group">
                    <div class="ml-3">
                        <a href="{{ route('barang.edit',$barang->id ) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ============================================================== -->
<!-- end basic form  -->
<!-- ============================================================== -->
@endsection

<script>
    function resetForm() {
        document.getElementById("tambahBarang").reset();
    }
</script>