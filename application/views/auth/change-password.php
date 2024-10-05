    <!-- Page content -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <!-- Login card -->
                <div class="col-sm-6 col-sm-offset-3">
                    <!-- Icon/Text Groups -->
                    <div class="card">
                        <div class="card-header text-center">
                            <img class="img-responsive img-center display-2" src="<?= base_url(); ?>/assets/img/logo/logo-login-.png" width="280px" />
                        </div>
                        <div class="card-block">
                            <div class="text-center mb-4">
                                <h5 class="h5 text-gray-900">Ubah kata sandi untuk :</h5>
                                <h5 class="h5 text-green"><?= $this->session->userdata('reset_email'); ?></h5>
                            </div>
                            <br>

                            <?= $this->session->flashdata('message'); ?>
                            <form role="form" class="form-horizontal" method="post" action="<?= base_url('auth/changepassword') ?>">
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input class="form-control" placeholder="Kata sandi" id="password1" name="password1" type="password" />
                                        </div>
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input class="form-control" placeholder="Konfirmasi kata sandi" id="password2" name="password2" type="password" />
                                        </div>
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-app btn-block">Atur Kata Sandi</button>
                                </div>
                                <br>
                            </form>

                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- .card -->
                    <!-- End Icon/Text Groups -->
                </div>
                <!-- .col-md-4 -->


            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- End page content -->