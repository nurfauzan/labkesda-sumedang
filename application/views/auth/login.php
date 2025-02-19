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
                        <?php if (validation_errors()) : ?>
                            <br>
                            <div class="alert alert-danger mb--1 pb-1" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <div class="mt-3 mb--2"><?= $this->session->flashdata('message'); ?></div>
                        <form method="post" class="form-horizontal" method="post" action="<?= base_url('auth') ?>">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input class="form-control" type="text" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" />
                                    </div>
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input class="form-control" type="password" id="password" name="password" placeholder="Kata sandi" />
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-app btn-block">Login</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 text-center">
                                    <br>
                                    <a href="<?= base_url('auth/forgotpassword'); ?>" class="text-muted small">Lupa kata sandi?</a>
                                </div>
                                <div class="col-xs-12 text-center">
                                    <a href="<?= base_url('auth/registration'); ?>" class="text-muted small text-right">Belum punya akun? Daftar!</a>
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