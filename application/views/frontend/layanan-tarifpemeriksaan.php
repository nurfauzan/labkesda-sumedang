<main class="app-layout-content">

    <!-- Page header -->
    <div class="page-header bg-app bg-inverse">
        <section class="container">
            <!-- Section Content -->
            <div class="p-y-lg text-center">
                <h1 class="display-2">Informasi operasional</h1>
                <p class="text-muted">Cek tarif pemeriksaan dan jam operasional UPT LABKESDA Kabupaten Sumedang</p>
            </div>
            <!-- End Section Content -->
        </section>
    </div>
    <!-- End Page header -->

    <!-- Pricing -->
    <div class="page-content bg-white">
        <section class="container">
            <!-- Section Content -->
            <div class="row m-y">

                <div class="col-sm-12 col-lg-12">
                    <!-- Developer Plan -->
                    <a class="card hover-shadow-3 text-center" href="javascript:void(0)">
                        <div class="card-header">
                            <h3>Jam Operasional UPT LABKESDA Kabupaten Sumedang</h3>
                        </div>
                        <div class="card-block bg-gray-lighter-o">
                            <div class="h5 m-t-0 m-b-0">
                                <table class="table table-borderless table-condensed">
                                    <tbody>
                                        <tr>
                                            <td class="lead"><strong> </strong>Senin s/d Kamis</td>
                                            <td class="lead">:</td>
                                            <td class="lead">07.30 - 14.30 WIB</td>
                                        </tr>
                                        <tr>
                                            <td class="lead"><strong> </strong>Jumat</td>
                                            <td class="lead">:</td>
                                            <td class="lead">07.30 - 11.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td class="lead"><strong> </strong>Sabtu</td>
                                            <td class="lead">:</td>
                                            <td class="lead">07.30 - 14.00 WIB</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- <div class="card-block bg-gray-lighter-o">
                                            <span class="btn btn-default">Sign Up</span>
                                        </div> -->
                    </a>
                    <!-- End Developer Plan -->
                </div>
                <!-- .col-sm-6 -->
                <div class="col-lg-12">
                    <a class="card hover-shadow-3 text-center">
                        <div class="card-header">
                            <p class="h3 text-center">Besaran tarif pelayanan pada UPTD LABKESDA Sumedang
                            </p>
                        </div>
                    </a>
                </div>
                <?php foreach ($tarif as $t) : ?>
                    <div class="col-sm-6 col-lg-3">
                        <!-- Developer Plan -->
                        <a class="card hover-shadow-3 text-center" href="javascript:void(0)">

                            <div class="card-block bg-gray-lighter-o">
                                <div class="h5 m-y-sm"><?= $t['jenis_pemeriksaan']; ?></div>
                                <div class="h5 m-t-0">
                                    <p class="lead"><?= $t['jenis_layanan']; ?></p>
                                </div>
                            </div>
                            <div class="card-block">
                                <table class="table table-borderless table-condensed">
                                    <tbody>
                                        <tr>
                                            <td><strong>Rp. </strong> <?= $t['tarif']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- <div class="card-block bg-gray-lighter-o">
                                                                                                                                                                                                                                                                                                                                                        <span class="btn btn-default">Sign Up</span>
                                                                                                                                                                                                                                                                                                                                                    </div> -->
                        </a>
                        <!-- End Developer Plan -->
                    </div>
                    <!-- .col-sm-6 -->
                <?php endforeach; ?>

            </div>
            <!-- .row -->

            <!-- End Section Content -->
        </section>
    </div>
    <!-- End Pricing -->

</main>