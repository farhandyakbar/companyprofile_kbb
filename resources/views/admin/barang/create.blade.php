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
                <form id="tambahBarang">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Kategori Barang</label>
                        <select class="form-control" id="kategori" name="kategori">
                            <option>Choose Example</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="kategori" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" class="form-control" name="harga">
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
                    <a href="#" class="btn btn-danger">Batal</a>
                    <a href="#" onclick="resetForm()" class="btn btn-warning">Hapus Field</a>
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