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
                <form>
                    <div class="form-group">
                        <label class="col-form-label">Nama Barang</label>
                        <input id="nama" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="input-select">Kategori Barang</label>
                        <select class="form-control" id="kategori">
                            <option>Choose Example</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputText4" class="col-form-label">Harga</label>
                        <input id="harga" type="number" class="form-control" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <label for="inputText4" class="col-form-label">Stok</label>
                        <input id="stok" type="number" class="form-control" placeholder="Stok">
                    </div>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Gambar</label>
                    </div>
                    <a href="#" type="submit" class="btn btn-primary">Simpan</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end basic form  -->
<!-- ============================================================== -->
@endsection