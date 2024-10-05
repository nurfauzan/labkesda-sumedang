<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <div class="row">
            <div class="col-lg-12">
                <!-- Default Table -->
                <div class="card">
                    <div class="card-header">
                        <h4>
                            <h5>Peran : <?= $role['role']; ?></h5>
                        </h4>
                        <div class="card-actions">
                            <a href="<?= base_url('admin/role/'); ?>" class="btn btn-sm btn-app-red"><i class="fa fa-chevron-left"></i>&nbsp; Kembali</a>
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
                                    <th scope="col">Menu</th>
                                    <th scope="col" width="10%" class="text-center">Akses</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($menu as $m) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $m['menu']; ?></td>
                                        <td class="text-center">
                                            <div class="form-check mt--2">
                                                <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
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