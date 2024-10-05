<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <div class="row">
            <?php if ($cekLandasanHukum > 0) { ?>
                <div class="col-lg-12">
                    <!-- Default Table -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Landasan Hukum LABKESDA Sumedang</h4>
                            <div class="card-actions">
                                <a href="<?php echo base_url(); ?>profil/editLandasanHukum/<?php echo $dataLandasanHukum->id; ?>" class="btn btn-sm btn-app"><i class="fa fa-cog"></i>&nbsp; Pengaturan</a>
                            </div>
                        </div>
                        <div class="card-block">
                            <?php if (validation_errors()) : ?>
                                <br>
                                <div class="alert alert-danger mb--1 pb-1" role="alert">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php endif; ?>
                            <div class="mt-3 mb--2"><?= $this->session->flashdata('message'); ?></div>
                            <div class="card-body mt--4">
                                <div class="card-text text-justify">
                                    <p><?php echo $dataLandasanHukum->landasan_hukum; ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- .card -->
                    <!-- End Default Table -->
                </div>
                <!-- .col-lg-6 -->
            <?php } else { ?>

                <div class="box-header text-center">
                    <h2>
                        Tidak Ada Data</h2>
                    <h3 class="box-title">
                        <a href="<?php echo base_url(); ?>profil/tambahLandasanHukum" class="btn btn-app btn-sm">
                            <i class="fa fa-plus"></i> Tambahkan Landasan Hukum
                        </a>
                    </h3>
                </div>

            <?php } ?>

        </div>
        <!-- .row -->

    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->

</main>