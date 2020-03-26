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
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Pelanggan</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <form id="updateForm" action="" method="POST">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="inputUserName">Username</label>
                                <input type="text" name="username" data-parsley-trigger="change" required="" id="username"
                                    autocomplete="off" class="form-control">
                            </div>
                            <div>
                                <label for="inputUserName">Password</label>
                                <input type="text" name="password" data-parsley-trigger="change" required="" id="password"
                                    autocomplete="off" class="form-control">
                            </div>
                            <div>
                                <label for="inputUserName">Email</label>
                                <input type="text" name="email" data-parsley-trigger="change" required="" id="email"
                                    autocomplete="off" class="form-control">
                            </div>
                            <div>
                                <label for="inputUserName">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" data-parsley-trigger="change" required="" id="nama_lengkap"
                                    autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Alamat</label>
                                <textarea id="keterangan" class="form-control" rows="3" name="alamat" id="alamat"></textarea>
                            </div>
                            <div>
                                <label for="inputUserName">No. Telp</label>
                                <input type="text" name="no_telp" data-parsley-trigger="change" required="" id="no_telp"
                                    autocomplete="off" class="form-control">
                            </div>
                            <div class="row">
                                <div class="ml-3 mt-3">
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
            {{-- <div class="modal-footer">
                <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div> --}}
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- modal  -->
<!-- ============================================================== -->
