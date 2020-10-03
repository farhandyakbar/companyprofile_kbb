@extends('templates.default')

@section('content')
<!-- ============================================================== -->
<!-- basic form  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="section-block" id="basicform">
            <h3 class="section-title">Detail Data Transaksi</h3>
        </div>
        <div class="card">
            <div class="card-body">
                @csrf
                <div class="form-group">
                    <label>ID Transaksi</label>
                    <input type="text" class="form-control" value="{{ $transaksi->id }}" name="id_transaksi"
                        disabled>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input id="stok" type="text" class="form-control" value="{{ $transaksi->tanggal }}" name="jumlah" disabled>
                </div>
                <div class="form-group">
                    <label>Subtotal</label>
                    <input type="number" class="form-control" value="{{ $transaksi->subtotal }}" name="total" disabled>
                </div>
                <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input class="form-control" value="{{ $transaksi->pelanggan->nama }}" name="id_barang" rows="3" disabled>
                </div>
                <div class="form-group">
                    <label>Kontak</label>
                    <input class="form-control" value="{{ $transaksi->pelanggan->no_telp }}" name="id_barang" rows="3" disabled>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" value="{{ $transaksi->pelanggan->email }}" name="id_barang" rows="3" disabled>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="margin-top: 56px">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <img src="{{ asset('images/buktiPembayaran/' . $transaksi->bukti_pembayaran) }}" alt="" width="350" height="400"
                        disabled>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title" style="display: inline-block;"></h2>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Barang</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksiDetail as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->id_barang}}</td>
                                <td>{{ $item->nama_barang}}</td>
                                <td>{{ $item->harga_barang }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->total }}</td>
                                {{-- <td>{{ $item->deskripsi }}</td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
