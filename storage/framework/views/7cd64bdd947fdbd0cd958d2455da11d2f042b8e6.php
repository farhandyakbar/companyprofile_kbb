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
    
    <?php $i=1 ?>
    <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($t->pelanggan->nama); ?></td>
                <td><?php echo e($t->tanggal); ?></td>
                <td><?php echo e($t->subtotal); ?></td>
                <td><?php echo e($t->pelanggan->no_telp); ?></td>
                <td><?php echo e($t->pelanggan->email); ?></td>
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
            <?php $__currentLoopData = $t->detailTransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($dt->id_barang); ?></td>
                <td><?php echo e($dt->nama_barang); ?></td>
                <td><?php echo e($dt->harga_barang); ?></td>
                <td><?php echo e($dt->jumlah); ?></td>
                <td><?php echo e($dt->total); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\WEB\kp-company_profile_kbb\resources\views/admin/transaksi/transaksi_pdf.blade.php ENDPATH**/ ?>