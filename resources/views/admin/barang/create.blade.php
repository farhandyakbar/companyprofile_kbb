@extends('templates.default')

@section('content')
<!-- ============================================================== -->
<!-- basic form  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Tambah Data Barang</h3>
        </div>
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-label-left" id="form-data" method="post" enctype="multipart/form-data" action="{{ route('barang.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" required="" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Kategori Barang</label>
                        <select class="form-control" id="id_kategori" name="id_kategori">
                            <option value="">Pilih Kategori</option>
                                @foreach($kategori as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" class="form-control" name="harga">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input id="stok" type="number" class="form-control" placeholder="Stok" name="stok">
                    </div>
                    <div class="form-group">
                        <label>Masukkan Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    <div class="row">
                        <div class="ml-3">
                            <p class="text-left">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                                <button class="btn btn-space btn-warning" onclick="resetForm()">Hapus Field</button>
                            </p>
                        </div>
                    </div>
                </form>
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