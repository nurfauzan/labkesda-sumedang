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
                        <form class="form-horizontal" action="<?php echo base_url(); ?>profil/simpanedit/<?php echo $editOrg->id ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-xs-12" for="nip">NIP</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="nip" name="nip" value="<?php echo $editOrg->nip; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="nama">Nama</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="nama" name="nama" value="<?php echo $editOrg->nama; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="jabatan">Jabatan</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="jabatan" name="jabatan" value="<?php echo $editOrg->jabatan ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-3">
                                    <img width="200px" class="img-responsive" style="border-radius:5px;" src="<?= base_url('assets/img/struktur_org/') . $editOrg->foto ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="foto">Ubah foto</label>
                                <div class="col-xs-9">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="foto" name="foto">
                                    </div>
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