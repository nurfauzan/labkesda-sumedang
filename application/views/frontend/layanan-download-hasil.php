<main class="app-layout-content">

    <!-- Page header -->
    <div class="page-header bg-app bg-inverse">
        <div class="container">
            <div class="p-y-lg text-center">
                <h1 class="display-2">Layanan Online</h1>
                <p class="text-muted">Anda dapat mendownload file surat hasil pemeriksaan melalui link dibawah ini.</p>
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
                    <?php
                    if (count($cari) > 0) {
                        foreach ($cari as $data) {
                            echo $data->No . Kwitansi . " => " . $data->Nama . "<br>";
                        }
                    } else {
                        echo "Data tidak ditemukan";
                    }
                    ?>
                    <div class="row m-t">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
                            <label class="h4">Surat Hasil Pemeriksaan</label>
                            <br>
                            <form action="" method="post">
                                <div class="input-group input-group-lg">
                                    <input class="form-control" type="text" value="" readonly />
                                    <div class="input-group-btn">
                                        <a href="" class="btn btn btn-default" type="button" data-toggle="tooltip" title="Download"><i class="fa fa-download"></i></a>
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