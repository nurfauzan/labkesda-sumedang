<main class="app-layout-content">
    <!-- Page Content -->
    <div class="container-fluid p-y-md">

        <!-- Dynamic Table Full -->
        <div class="card">
            <div class="card-header">
                <h4>Struktur Organisasi LABKESDA Sumedang</h4>
                <div class="card-actions">
                    <a href="<?= base_url('profil/inputOrg'); ?>" class="btn btn-sm btn-app"><i class="fa fa-plus"></i>&nbsp; Tambah Data
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
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">#</th>
                            <th scope="col" width="5%">Foto</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col" width="5%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($struktur as $o) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><img src="<?= base_url('assets/img/struktur_org/') . $o['foto']; ?>" width="100px" class="img-responsive" style="border-radius:5px"></td>
                                </td>
                                <td><?= $o['nip']; ?></td>
                                <td><?= $o['nama']; ?></td>
                                <td><?= $o['jabatan']; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <span>
                                            <a href="<?= base_url(); ?>profil/editOrg/<?php echo $o['id'] ?>" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Ubah"><i class="ion-android-create"></i></a>
                                        </span>
                                        <span data-toggle="modal" data-target="#delOrgModal">
                                            <a href="#delOrgModal" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Hapus"><i class="ion-android-delete"></i></a>
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


<!--Delete SubMenu Modal-->
<div class="modal fade" id="delOrgModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-header bg-green bg-inverse">
                <h4>Hapus data</h4>
                <ul class="card-actions">
                    <li>
                        <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                    </li>
                </ul>
            </div>
            <form action="<?= base_url(); ?>profil/hapusOrg/<?php echo $o['id'] ?>" method="post">
                <div class="card-block">
                    Apa anda yakin ingin menghapus data?
                    <input class="form-control" placeholder="Link" name="id_delete" id="id_delete" type="hidden">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-sm btn-app" type="submit"><i class="ion-checkmark"></i> Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>