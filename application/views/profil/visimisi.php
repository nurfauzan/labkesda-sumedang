<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <div class="row">
            <?php if ($cekVisiMisi > 0) { ?>
                <div class="col-lg-12">
                    <!-- Default Table -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Visi, Misi, Falsafah dan Motto LABKESDA Sumedang</h4>
                            <div class="card-actions">
                                <a href="<?php echo base_url(); ?>profil/editVisiMisi/<?php echo $dataVisiMisi->id; ?>" class="btn btn-sm btn-app"><i class="fa fa-cog"></i>&nbsp; Pengaturan</a>
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
                                    <p><?php echo $dataVisiMisi->visimisi; ?></p>
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
                    <h4>
                        Tidak Ada Data</h4>
                    <h5 class="box-title">
                        <a href="<?php echo base_url(); ?>profil/tambah" class="btn btn-app btn-sm">
                            <i class="fa fa-plus"></i> Tambahkan Visi & Misi
                        </a>
                    </h5>
                </div>

            <?php } ?>
        </div>
        <!-- .row -->

    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->

</main>