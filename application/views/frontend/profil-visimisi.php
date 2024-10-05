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
            <div class="row m-b-lg text-justify">
                <div class="col-md-10 col-md-offset-1">
                    <?php foreach ($visimisi as $vm) : ?>
                        <h1 class="display-2 m-t-0">Visi & Misi</h1>
                        <p class="lead"><?= $vm['visimisi']; ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- .container -->
    </div>
    <!-- .section -->
    <!-- End features 1 -->

</main>