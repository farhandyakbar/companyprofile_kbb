<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, td, th {
            border: 1px solid black;
        }
    </style>

    <center>
        <h3>Laporan Transaksi Penjualan</h3>
    </center>
    
    @php $i=1 @endphp
    @foreach($transaksi as $t)
    <table style="margin-bottom: 30px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal</th>
                <th>Subtotal</th>
                <th>No. Telp</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$t->pelanggan->nama}}</td>
                <td>{{$t->tanggal}}</td>
                <td>{{$t->subtotal}}</td>
                <td>{{$t->pelanggan->no_telp}}</td>
                <td>{{$t->pelanggan->email}}</td>
            </tr>
            <tr>
                <th colspan="6">Detail Barang</th>
            </tr>
            <tr>
                <th>No</th>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
            @foreach($t->detailTransaksi as $dt)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $dt->id_barang}}</td>
                <td>{{ $dt->nama_barang}}</td>
                <td>{{ $dt->harga_barang }}</td>
                <td>{{ $dt->jumlah }}</td>
                <td>{{ $dt->total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endforeach
</body>

</html>
