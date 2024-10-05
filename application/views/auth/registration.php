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
                            <div class="mt-3 mb--2"><?= $this->session->flashdata('message'); ?></div>
                            <form class="form-horizontal" method="post" action="<?= base_url('auth/registration'); ?>">
                                <div class="form-group has error">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-bars"></i></span>
                                            <input class="form-control" type="text" id="name" name="name" placeholder="Nama lengkap" value="<?= set_value('name') ?>" />
                                        </div>
                                        <div class="input-group">
                                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control" type="text" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" />
                                        </div>
                                        <div class="input-group">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
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
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-app btn-block">Buat Akun</button>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 text-center">
                                        <br>
                                        <a href="<?= base_url('auth/forgotpassword'); ?>" class="text-muted small">Lupa kata sandi?</a>
                                    </div>
                                    <div class="col-xs-12 text-center">
                                        <a href="<?= base_url('auth'); ?>" class="text-muted small text-right">Sudah punya akun? Login!</a>
                                    </div>
                                </div>
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