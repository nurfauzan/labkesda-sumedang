<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <div class="row">
            <form class="form-horizontal" action="<?= base_url(''); ?>" method="post" enctype="multipart/form-data">
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
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td style="width:30%;">Tanggal periksa</td>
                                        <input class="form-control" type="hidden" id="id" name="id" value="<?= $hasil->id; ?>">
                                        <td class=""><?= $hasil->tgl_periksa; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:30%;">No. Kwitansi</td>
                                        <td class=""><?= $hasil->no_kwitansi; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:30%;">Nama</td>
                                        <td class=""><?= $hasil->nama_pasien; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:30%;">Umur</td>
                                        <td class=""><?= $hasil->umur_pasien; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:30%;">No. Telepon</td>
                                        <td class=""><?= $hasil->no_telepon; ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width:30%;">Alamat</td>
                                        <td class=""><?= $hasil->alamat_pasien; ?></td>
                                    </tr>
                                </tbody>
                            </table>

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