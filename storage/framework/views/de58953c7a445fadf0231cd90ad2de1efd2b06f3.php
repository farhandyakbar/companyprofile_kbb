<!-- ============================================================== -->
<!-- modal  -->
<!-- ============================================================== -->
<div class="row" id="tambahModal">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <!-- Modal -->
        <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan Baru</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <form action="<?php echo e(route('pelanggan.store')); ?>" method="POST"
                            data-parsley-validate="">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" data-parsley-trigger="change" required="">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password" data-parsley-trigger="change" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" data-parsley-trigger="change" required="">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" data-parsley-trigger="change" required="" >
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label>No. Telepon</label>
                                <input type="text" class="form-control" name="no_telp" data-parsley-trigger="change" required="">
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
<?php /**PATH C:\xampp\htdocs\WEB\kp-company_profile_kbb\resources\views/admin/pelanggan/create.blade.php ENDPATH**/ ?>