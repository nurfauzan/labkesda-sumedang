<main class="app-layout-content">

    <!-- Page header -->
    <div class="page-header bg-app bg-inverse">
        <div class="container">
            <div class="p-y-lg text-center">
                <h1 class="display-2">Layanan Online</h1>
                <p class="text-muted">No. Kwitansi bisa anda dapatkan ketika melakukan pembayaran pemeriksaan.</p>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <div class="page-content bg-white">
        <div class="container">
            <!-- Section Content -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                </div>
            </div>
            <!-- .row -->
            <!-- End Section Content -->
        </div>
        <!-- .container -->
    </div>
    <!-- .section -->

    <div class="page-content bg-white text-center">
        <div class="container">
            <!-- Section Content -->
            <div class="row">
                <div class="col-md-10 col-sm-offset-1">
                    <?php if (validation_errors()) : ?>
                        <br>
                        <div class="alert alert-danger mb--1 pb-1" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="mt-3 mb--2"><?= $this->session->flashdata('message'); ?></div>
                    <!-- Search form -->
                    <div class="row m-t">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
                            <label class="h4">Masukkan nomor kwitansi.</label>
                            <br>
                            <form action="<?= base_url('frontend_layanan/download_hasil'); ?>" action="POST">
                                <div class="input-group input-group-lg">
                                    <input class="form-control" type="text" placeholder="Masukkan No. Kwitansi" />
                                    <div class="input-group-btn">
                                        <a href="<?= base_url('frontend_layanan/download_hasil'); ?>"> 
                                        <button class="btn btn-default"><i class="ion-ios-search-strong"></i></button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End search form -->
                </div>
            </div>
            <!-- .row -->
            <!-- End Section Content -->
        </div>
        <!-- .container -->
    </div>
    <!-- .section -->

    <div class="page-content bg-white">
        <div class="container">
            <!-- Section Content -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                </div>
            </div>
            <!-- .row -->
            <!-- End Section Content -->
        </div>
        <!-- .container -->
    </div>
    <!-- .section -->

</main>