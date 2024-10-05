<main class="app-layout-content">
    <!-- Page Content -->
    <div class="container-fluid p-y-md">

        <!-- Dynamic Table Full -->
        <div class="card">
            <div class="card-header">
                <h4>Arsip hasil pemeriksaan</h4>
                <div class="card-actions">
                    <a href="<?= base_url('pemeriksaan/'); ?>" class="btn btn-sm btn-app"><i class="fa fa-plus"></i>&nbsp; Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-block">
                <?php if ($this->session->flashdata('success') == true) {
                    echo '<p class="alert alert-success">' . $this->session->flashdata('success') . '</p>';
                } elseif ($this->session->flashdata('hapus') == true) {
                    echo '<p class="alert alert-success">' . $this->session->flashdata('hapus') . '</p>';
                } ?>
                <?php if ($this->session->flashdata('message') == true) {
                    echo '<p class="alert alert-danger">' . $this->session->flashdata('message') . '</p>';
                } ?>
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">#</th>
                            <th scope="col">Nama pasien</th>
                            <th scope="col">No. Kwitansi</th>
                            <th scope="col">Tanggal periksa</th>
                            <th scope="col">No. telepon</th>
                            <th scope="col" width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($arsip as $a) : ?>
                            <tr>
                                <th class="text-center" scope="row"><?= $i; ?></th>
                                <td><?= $a['nama_pasien']; ?></td>
                                <td><?= $a['no_kwitansi']; ?></td>
                                <td><?= $a['tgl_periksa']; ?></td>
                                <td><?= $a['no_telepon']; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <span>
                                            <a href="<?= base_url(); ?>pemeriksaan/print/<?php echo $a['id'] ?>" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Unduh hasil"><i class="ion-android-download"></i></a>
                                        </span>
                                        <span>
                                            <a href="<?= base_url(); ?>pemeriksaan/detail/<?php echo $a['id'] ?>" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Detail"><i class="ion-eye"></i></a>
                                        </span>
                                        <span>
                                            <a href="<?= base_url(); ?>pemeriksaan/edit/<?php echo $a['id'] ?>" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Ubah"><i class="ion-android-create"></i></a>
                                        </span>
                                        <span data-toggle="modal" data-target="#delArsipModal">
                                            <a href="#delArsipModal" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Hapus"><i class="ion-android-delete"></i></a>
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
<div class="modal fade" id="delArsipModal" tabindex="-1" role="dialog" aria-hidden="true">
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
            <form action="<?= base_url('pemeriksaan/hapus/') . $a['id']; ?>" method="post">
                <div class="card-block">
                    Apa anda yakin ingin menghapus data?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-sm btn-app" type="submit"><i class="ion-checkmark"></i> Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>