<!-- ============================================================== -->
<!-- modal  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <!-- Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Karyawan</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <form id="updateForm" action="" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo e(method_field('PUT')); ?>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" data-parsley-trigger="change" required="">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" id="username" data-parsley-trigger="change" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password" id="password" data-parsley-trigger="change" required="">
                            </div>
                            <div class="row">
                                <div class="ml-3">
                                    <p class="text-left">
                                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                        <button class="btn btn-space btn-secondary" data-dismiss="modal">Cancel</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic form -->
                <!-- ============================================================== -->
            </div>
            
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- modal  -->
<!-- ============================================================== -->
<?php /**PATH C:\xampp\htdocs\WEB\kp-company_profile_kbb\resources\views/admin/karyawan/edit.blade.php ENDPATH**/ ?>