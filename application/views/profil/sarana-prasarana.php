<main class="app-layout-content">
    <!-- Page Content -->
    <div class="container-fluid p-y-md">

        <!-- Dynamic Table Full -->
        <div class="card">
            <div class="card-header">
                <h4></h4>
                <div class="card-actions">
                    <a href="#!" class="btn btn-sm btn-app"><i class="fa fa-plus"></i>&nbsp; Tambah Data Bangunan
                    </a>
                </div>
            </div>
            <div class="card-block">
                <div class="mt-3 mb--2"><?= $this->session->flashdata('message'); ?></div>
                <h3 class="mb-0">Fasilitas bangunan</h3>
                <div class="text-justify">
                    <?php foreach ($desc_bangunan as $d) : ?>
                        <?= $d['desc_bangunan']; ?>
                    <?php endforeach; ?>
                </div>
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable">
                    <thead>
                        <tr>
                            <th scope="col" class="" width="5%">#</th>
                            <th scope="col" class="">Bangunan</th>
                            <th scope="col" class="text-center" width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $a = 1; ?>
                        <?php foreach ($bangunan as $b) : ?>
                            <tr>
                                <th class="text-center"><?= $a; ?></th>
                                <td><?= $b['bangunan']; ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <span data-toggle="modal" data-target="#editSubmenuModal">
                                            <a href="#editSubmenuModal" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Ubah"><i class="ion-android-create"></i></a>
                                        </span>
                                        <span data-toggle="modal" data-target="#delSubMenuModal">
                                            <a href="#delSubMenuModal" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Hapus"><i class="ion-android-delete"></i></a>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <?php $a++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- .card-block -->
        </div>
        <div class="card">
            <div class="card-header">
                <h4></h4>
                <div class="card-actions">
                    <a href="#!" class="btn btn-sm btn-app"><i class="fa fa-plus"></i>&nbsp; Tambah Data Peralatan
                    </a>
                </div>
            </div>
            <div class="card-block">
                <div class="mt-3 mb--2"><?= $this->session->flashdata('message'); ?></div>
                <h3 class="mb-0">Peralatan</h3>
                <div class="text-justify">
                    <?php foreach ($desc_peralatan as $p) : ?>
                        <?= $p['desc_peralatan']; ?>
                    <?php endforeach; ?>
                </div>
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">#</th>
                            <th scope="col">Nama barang</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col" width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($peralatan as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $p['nama_barang']; ?></td>
                                <td><?= $p['jumlah']; ?></td>
                                <td><?= $p['ket']; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <span data-toggle="modal" data-target="#editSubmenuModal">
                                            <a href="#editSubmenuModal" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Ubah"><i class="ion-android-create"></i></a>
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
        <!-- End Dynamic Table Full -->

    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->

</main>