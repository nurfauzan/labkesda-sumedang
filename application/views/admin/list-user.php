<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <div class="row">
            <div class="col-lg-12">
                <!-- Default Table -->
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar akun yang telah terktivasi sebagai pengelola data pada Website ini</h4>
                        <div class="card-actions">
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
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Peran</th>
                                    <th scope="col">Tanggal Daftar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($userMenu as $u) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><img src="<?= base_url('assets/img/profile/') . $u['image']; ?>" width="50px" class="img-responsive" style="border-radius:5px"></td>
                                        <td><?= $u['name']; ?></td>
                                        <td><?= $u['email']; ?></td>
                                        <td><?= $u['role']; ?></td>
                                        <td><?= date('d F Y', $u['date_created']); ?></td>
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