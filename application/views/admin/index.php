<main class="app-layout-content">
    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <!-- Stats -->
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <a class="card" href="<?= base_url('pemeriksaan/arsip_pemeriksaan'); ?>">
                    <div class="card-block clearfix">
                        <div class="pull-right text-right">
                            <p class="h6 text-muted m-t-0 m-b-xs">Arsip pemeriksaan</p>
                            <p class="h3 text-blue m-t-sm m-b-0"><?= $total_pemeriksaan; ?> berkas</p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-document-text fa-1-5x"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- .col-sm-6 -->

            <div class="col-sm-6 col-lg-3">
                <a class="card bg-green bg-inverse" href="<?= base_url('admin/listuser'); ?>">
                    <div class="card-block clearfix">
                        <div class="pull-right text-right">
                            <p class="h6 text-muted m-t-0 m-b-xs">Jumlah admin</p>
                            <p class="h3 m-t-sm m-b-0"><?= $total_user; ?> orang</p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="fa fa-users fa-1-5x"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- .col-sm-6 -->

            <div class="col-sm-6 col-lg-3">
                <a class="card bg-blue bg-inverse" href="<?= base_url('profil/strukturorg'); ?>">
                    <div class="card-block clearfix">
                        <div class="pull-right text-right">
                            <p class="h6 text-muted m-t-0 m-b-xs">Jumlah staff</p>
                            <p class="h3 m-t-sm m-b-0"><?= $total_staff; ?> orang</p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="fa fa-sitemap fa-1-5x"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- .col-sm-6 -->

            <div class="col-sm-6 col-lg-3">
                <a class="card bg-purple bg-inverse" href="<?= base_url('admin/role'); ?>">
                    <div class="card-block clearfix">
                        <div class="pull-right text-right">
                            <p class="h6 text-muted m-t-0 m-b-xs">Jumlah peran</p>
                            <p class="h3 m-t-sm m-b-0"><?= $total_peran; ?> peran</p>
                        </div>
                        <div class="pull-left m-r">
                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="fa fa-user-md fa-1-5x"></i></span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- .col-sm-6 -->
        </div>
        <!-- .row -->
        <!-- End stats -->

    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->

</main>