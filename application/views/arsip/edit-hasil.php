<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <div class="row">
            <form class="form-horizontal" action="<?= base_url('pemeriksaan/prosesedit'); ?>" method="post" enctype="multipart/form-data">
                <div class="col-lg-9">
                    <!-- Default Elements -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Pasien</h4>
                            <div class="card-actions">
                                <a href="<?= base_url('pemeriksaan/'); ?>" class="btn btn-sm btn-app"><i class="fa fa-plus"></i>&nbsp; Input Hasil</a>
                                <a href="<?= base_url('pemeriksaan/arsip_pemeriksaan/'); ?>" class="btn btn-sm btn-app"><i class="fa fa-eye"></i>&nbsp; Lihat Arsip</a>
                            </div>
                        </div>
                        <div class="card-block">
                            <?php if ($this->session->flashdata('success') == true) {
                                echo '<p class="alert alert-success">' . $this->session->flashdata('success') . '</p>';
                            } elseif ($this->session->flashdata('hapus') == true) {
                                echo '<p class="alert alert-danger">' . $this->session->flashdata('hapus') . '</p>';
                            } ?>
                            <?php if ($this->session->flashdata('message') == true) {
                                echo '<p class="alert alert-danger">' . $this->session->flashdata('message') . '</p>';
                            } ?>
                            <div class="form-group">
                                <label class="col-xs-12" for="example-text-input">Tanggal periksa</label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="hidden" id="id" name="id" value="<?= $hasil->id; ?>">
                                    <input class="js-datepicker form-control" type="text" id="example-datepicker3" name="tgl_periksa" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value="<?= $hasil->tgl_periksa; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="no_kwitansi">No. Kwitansi</label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" id="no_kwitansi" name="no_kwitansi" value="<?= $hasil->no_kwitansi; ?>" placeholder="No. Kwitansi" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="nama_pasien">Nama</label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" id="nama_pasien" name="nama_pasien" value="<?= $hasil->nama_pasien; ?>" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="umur_pasien">Umur</label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" id="umur_pasien" name="umur_pasien" value="<?= $hasil->umur_pasien; ?>" placeholder="Umur" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="no_telepon">No. Telepon</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $hasil->no_telepon; ?>" placeholder="No. telepon" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="alamat_pasien">Alamat</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="alamat_pasien" name="alamat_pasien" rows="6" placeholder="Jl. Belimbing, Perum Kenanga Blok A No. 101 RT/RW 004/014 Kec. Sumedang Utara Kab. Sumedang"><?= $hasil->alamat_pasien; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- .card -->
                    <!-- End Default Elements -->
                </div>
                <!-- .col-lg-6 -->

                <div class="col-lg-9">
                    <!-- Default Elements -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Input Hasil Pemeriksaan</h4>
                        </div>
                        <div class="card-block">
                            <!-- Section Content -->
                            <!-- Introduction -->
                            <div class="form-group">
                                <label class="col-xs-12" for="doc_hasil">Upload Dokumen</label>
                                <div class="col-xs-12">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" id="doc_hasil" name="doc_hasil" value="<?= $hasil->doc_hasil; ?>">
                                        <div class="help-block">Catatan : File yang akan di upload wajib berbentuk .pdf untuk menghindari manipulasi data hasil pemeriksaan! Ukuran maksimal dokumen 15 MB</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-xs-12 text-right">
                                    <button type="submit" name="submit" class="btn btn-sm btn-app"><i class="fa fa-check"></i>&nbsp; Perbarui<span class="hidden-xs"> data</span></button>
                                </div>
                            </div>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- .card -->
                    <!-- End Default Elements -->
                </div>
                <!-- .col-lg-6 -->
            </form>
        </div>
        <!-- .row -->

    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->

</main>