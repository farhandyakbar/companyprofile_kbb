<?php $__env->startSection('content'); ?>
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
                <h2 class="card-title" style="display: inline-block;">Master Kategori</h2>
                <a href="#" class="btn btn-info float-right mb-3" data-toggle="modal" data-target="#createModal"> <i class="fa fa-plus"></i>
                    Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($loop->iteration); ?></th>
                                <td><?php echo e($item->nama); ?></td>
                                <td><?php echo e($item->keterangan); ?></td>
                                <td>
                                    <button href="<?php echo e(route('kategori.update', $item->id )); ?>" class="btn btn-primary"
                                    id="editKategori" data-id="<?php echo e($item->id); ?>" data-nama="<?php echo e($item->nama); ?>" data-keterangan="<?php echo e($item->keterangan); ?>">Edit</button>
                                    <button href="<?php echo e(route('kategori.destroy', $item->id)); ?>" id="delete"
                                        data-title="<?php echo e($item->nama); ?>" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <?php echo $__env->make('admin.kategori.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.kategori.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>

<form action="" method="post" id="deleteForm">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('DELETE')); ?>

</form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php echo $__env->make('templates.partials._sweetalert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
    $('button#delete').on('click', function () {
        var href = $(this).attr('href');
        var name = $(this).data('title');
        Swal.fire({
                title: "Anda yakin untuk menghapus kategori \"" + name + "\"?",
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('templates.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WEB\kp-company_profile_kbb\resources\views/admin/kategori/index.blade.php ENDPATH**/ ?>