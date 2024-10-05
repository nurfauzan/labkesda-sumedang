<main class="app-layout-content">

    <!-- Page header -->
    <figure class="banner bg-img bg-app bg-inverse" data-height="500" style="background-image: url(assets/img/misc/frontend_header_bg.png)">
        <figcaption class="banner-caption text-center">
            <div class="container">
                <div class="row vcenter-md">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="display-2 m-b">UPT LABKESDA KABUPATEN SUMEDANG</h1>
                    </div>
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p class="lead">Cepat, Tepat dan Akurat</p>
                        <p class="lead">Sapa, Senyum dan Santun</p>
                    </div>
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </figcaption>
    </figure>
    <!-- End page header -->

    <!-- Features 1 -->
    <div class="section bg-white p-y-xl">
        <div class="container">
            <div class="row text-justify">
                <div class="col-md-8 col-md-offset-2">
                    <?php foreach ($desc_bangunan as $d) : ?>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <p class="lead"></p>
                                <div class="row">
                                </div>
                            </div>
                        </div>
                        <!-- .row -->
                        <h1 class="display-1 m-t-0">Daftar fasilitas bangunan</h1>
                        <p class="lead"><?= $d['desc_bangunan']; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- .row -->
            <div class="row vcenter-md">
                <div class="col-md-5 hidden-sm hidden-xs">
                    <img class="img-responsive img-full" style="box-shadow: 3px 3px 3px #333; border-radius: 5px;" src="<?= base_url('assets/img/profil/'); ?>bangunan.jpg" />
                    <br>
                    <img class="img-responsive img-full" style="box-shadow: 3px 3px 3px #333; border-radius: 5px;" src="<?= base_url('assets/img/profil/'); ?>bangunan_2.jpg" />
                </div>
                <!-- .col-md-6 -->

                <div class="col-md-5 col-md-offset-1">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th scope="col" class="" width="5%">#</th>
                                <th scope="col" class="">Nama Bangunan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $a = 1; ?>
                            <?php foreach ($bangunan as $b) : ?>
                                <tr>
                                    <th class="text-center"><?= $a; ?></th>
                                    <td><?= $b['bangunan']; ?></td>
                                </tr>
                                <?php $a++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    </ol>
                </div>
                <!-- .col-md-4-->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .section -->
    <!-- End features 1 -->
</main>