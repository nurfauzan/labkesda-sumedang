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
                            <?= $this->session->flashdata('message'); ?>
                            <form class="form-horizontal" method="post" action="<?= base_url('auth/forgotpassword'); ?>">
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

                                <div class="text-center">
                                    <button type="submit" class="btn btn-app btn-block">Atur Ulang</button>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12 text-center">
                                        <br>
                                        <a href="<?= base_url('auth'); ?>" class="text-muted small">Kembali ke halaman login!</a>
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