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
                        <form action="{{ route('pelanggan.store') }}" method="POST"
                            data-parsley-validate="">
                            @csrf
                            <div class="form-group">
                                <label for="inputUserName">Username</label>
                                <input type="text" name="username" data-parsley-trigger="change" required=""
                                    placeholder="Username" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputUserName">Password</label>
                                <input type="text" name="password" data-parsley-trigger="change" required=""
                                    placeholder="Password" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputUserName">Email</label>
                                <input type="email" name="email" data-parsley-trigger="change" required=""
                                    placeholder="email" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputUserName">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" data-parsley-trigger="change" required=""
                                    placeholder="Nama lengkap" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName">No. Telepon</label>
                                <input type="text" name="no_telp" data-parsley-trigger="change" required="" 
                                    placeholder="No. Telp" autocomplete="off" class="form-control">
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
