<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <div class="row">
            <div class="col-lg-12">
                <!-- Default Table -->
                <div class="card">
                    <div class="card-header">
                        <h4>Tanggapan dari pengunjung website</h4>
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
                                    <th scope="col" width="3%">#</th>
                                    <th scope="col" width="13%">Nama</th>
                                    <th scope="col" width="17%">Email</th>
                                    <th scope="col">Pesan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($bukutamu as $bt) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $bt['nama']; ?></td>
                                        <td><?= $bt['email']; ?></td>
                                        <td><?= $bt['pesan']; ?></td>
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