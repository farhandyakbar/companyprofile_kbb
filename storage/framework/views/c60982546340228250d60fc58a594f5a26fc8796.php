<?php $__env->startSection('content'); ?>
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
                <form class="form-horizontal form-label-left" id="form-data" method="post" enctype="multipart/form-data" action="<?php echo e(route('barang.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" class="form-control" value="<?php echo e(old('nama')); ?>" required="" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Kategori Barang</label>
                        <select class="form-control" id="id_kategori" name="id_kategori">
                            <option value="">Pilih Kategori</option>
                                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="3"><?php echo e(old('deskirpsi')); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" class="form-control" name="harga" value="<?php echo e(old('harga')); ?>"> 
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input id="stok" type="number" class="form-control" placeholder="Stok" name="stok" value="<?php echo e(old('stok')); ?>">
                    </div>
                    <div class="form-group">
                        <label>Masukkan Gambar</label>
                        <input type="file" class="form-control" name="gambar[]" multiple value="<?php echo e(old('gambar')); ?>">
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
<?php $__env->stopSection(); ?>

<script>
    function resetForm() {
        document.getElementById("tambahBarang").reset();
    }
</script>
<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WEB\kp-company_profile_kbb\resources\views/admin/barang/create.blade.php ENDPATH**/ ?>