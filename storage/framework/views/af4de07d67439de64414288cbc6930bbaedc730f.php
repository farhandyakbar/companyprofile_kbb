<?php $__env->startSection('content'); ?>
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
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Nama Barang</label>
                <input type="text" class="form-control" value="<?php echo e($barang->nama); ?>" name="nama" disabled>
                </div>
                <div class="form-group">
                    <label>Kategori Barang</label> 
                    <input class="form-control" value="<?php echo e($barang->kategori->nama); ?>" name="deskripsi" rows="3" disabled>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                <input class="form-control" value="<?php echo e($barang->deskripsi); ?>" name="deskripsi" rows="3" disabled>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                <input type="number" class="form-control" value="<?php echo e($barang->harga); ?>" name="harga" disabled>
                </div>
                <div class="form-group">
                    <label>Stok</label>
                <input id="stok" type="number" class="form-control" value="<?php echo e($barang->stok); ?>" placeholder="Stok" name="stok" disabled>
                </div>
                <div class="form-group">
                    <?php $__currentLoopData = $barangDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e(asset('images/gambar/'.$item->gambar)); ?>" alt="" width="350" height="250" disabled>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="form-groupgit">
                    <a href="<?php echo e(route('barang.index')); ?>" class="btn btn-secondary">Kembali</a>
                    <a href="<?php echo e(route('barang.edit',$barang->id )); ?>" class="btn btn-primary">Ubah</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ============================================================== -->
<!-- end basic form  -->
<!-- ============================================================== -->
<?php $__env->stopSection(); ?>

<script>
    function resetForm() {
        document.getElementById("tambahBarang").reset();
    }
</script>
<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WEB\kp-company_profile_kbb\resources\views/admin/barang/detail.blade.php ENDPATH**/ ?>