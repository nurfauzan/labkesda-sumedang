<main class="app-layout-content">

    <!-- Page header -->
    <div class="page-header bg-app bg-inverse">
        <div class="container">
            <!-- Section Content -->
            <div class="p-y-lg text-center">
                <h1 class="display-2">Struktur Organisasi</h1>
                <p class="section-tag">UPT LABKESDA KABUPATEN SUMEDANG</p>
            </div>
            <!-- End Section Content -->
        </div>
    </div>
    <!-- End Page header -->

    <!-- Team -->
    <div class="p-y-lg bg-white">
        <div class="container">
            <!-- Section Content -->
            
            <div class="row p-t-lg p-b-xl">
                <?php foreach ($struktur_org as $so) : ?>
                    <div class="col-md-3">
                        <div class="p-x-md text-center">
                            <div class="p-x">
                                <img class="img-responsive img-rounded" width="100%" style="border-radius:5px" src="<?= base_url('assets/img/struktur_org/') . $so['foto']; ?>" alt="" />
                            </div>
                            <h5><?= $so['nama']; ?> 
                            <br/> 
                            <small class="text-muted"><?= $so['nip']; ?></small>
                            </h5>
                            <small><?= $so['jabatan']; ?></small>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- .row -->
            <!-- End Section Content -->
        </div>
    </div>
    <!-- End Team -->
</main>