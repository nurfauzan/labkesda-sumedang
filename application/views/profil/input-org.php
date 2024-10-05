<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <div class="row">
            <div class="col-lg-12">
                <!-- Default Elements -->
                <div class="card">
                    <div class="card-header">
                        <h4>Struktur Organisasi LABKESDA Sumedang</h4>
                        <div class="card-actions">
                            <a href="<?= base_url('profil/strukturorg'); ?>" class="btn btn-sm btn-app"><i class="fa fa-chevron-left"></i>&nbsp; Kembali
                            </a>
                        </div>
                    </div>
                    <div class="card-block">
                        <?php echo (isset($message)) ? $message : ""; ?>
                        <form class="form-horizontal" action="<?= base_url('profil/simpan/'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-xs-12" for="nip">NIP</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="nip" name="nip" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="nama">Nama</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="nama" name="nama" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="jabatan">Jabatan</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="jabatan" name="jabatan" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="foto">Foto</label>
                                <div class="custom-file col-sm-9">
                                    <input type="file" class="form-control" id="foto" name="foto">
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-xs-12">
                                    <button class="btn btn-sm btn-app" type="submit"><i class="fa fa-check"></i>&nbsp; Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- .card-block -->
                </div>
                <!-- .card -->
                <!-- End Default Elements -->
            </div>
            <!-- .col-lg-6 -->

        </div>
        <!-- .row -->

    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->

</main>