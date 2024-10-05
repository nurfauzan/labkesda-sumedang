<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <div class="row">
            <div class="col-lg-12">
                <!-- Default Table -->
                <div class="card">
                    <div class="card-header">
                    <h4>Ukuran kadar normal pada setiap jenis pemeriksaan</h4>
                        <div class="card-actions">
                            <a href="#!" class="btn btn-sm btn-app"><i class="fa fa-plus"></i>&nbsp; Tambah data
                            </a>
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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" width="5%">#</th>
                                    <th scope="col">Pemeriksaan</th>
                                    <th scope="col">Kadar normal</th>
                                    <th scope="col" width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kadarnormal as $kn) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $kn['id_subkategori']; ?></td>
                                        <td><?= $kn['kadar_normal']; ?></td>
                                        <td>
                                        <div class="btn-group">
                                        <span>
                                            <a href="" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Ubah"><i class="ion-android-create"></i></a>
                                        </span>
                                        <span data-toggle="modal" data-target="#delSubMenuModal">
                                            <a href="#delSubMenuModal" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Hapus"><i class="ion-android-delete"></i></a>
                                        </span>
                                    </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- .card-block -->
                </div>
                <!-- .card -->
                <!-- End Default Table -->
            </div>
            <!-- .col-lg-6 -->

        </div>
        <!-- .row -->

    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->

</main>