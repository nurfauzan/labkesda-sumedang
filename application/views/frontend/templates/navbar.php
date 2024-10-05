<!-- Header -->
<header class="app-layout-header">
    <nav class="navbar navbar-default p-y">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Header logo -->
                <a class="navbar-brand" href="<?= base_url(); ?>">
                    <img class="img-responsive" src="<?= base_url('assets/'); ?>img/logo/logo-depan.png" title="UPT LABKESDA SUMEDANG" alt="UPT LABKESDA SUMEDANG" />
                </a>
            </div>

            <div class="collapse navbar-collapse" id="header-navbar-collapse">
                <!-- Header search form -->
                <form class="navbar-form navbar-right app-search-form" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" type="search" id="search-input" placeholder="Cari..." />
                            <span class="input-group-btn">
                                <button class="btn" type="button"><i class="ion-ios-search-strong"></i></button>
                            </span>
                        </div>
                    </div>
                </form>

                <!-- Header navigation menu -->
                <ul id="main-menu" class="nav navbar-nav navbar-left">

                    <li class="active">
                        <a href="<?= base_url(); ?>">Home</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Profil <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li>
                                <a href="<?= base_url('frontend_profil/'); ?>">Latar Belakang</a>
                            </li>

                            <li>
                                <a href="<?= base_url('frontend_profil/visimisi'); ?>">Visi & Misi</a>
                            </li>

                            <li>
                                <a href="<?= base_url('frontend_profil/struktur_organisasi'); ?>">Struktur Organisasi</a>
                            </li>

                            <li>
                                <a href="<?= base_url('frontend_profil/landasan_hukum'); ?>">Landasan Hukum</a>
                            </li>

                            <li>
                                <a href="<?= base_url('frontend_profil/sarana_prasarana'); ?>">Sarana & Prasarana</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Layanan <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?= base_url('frontend_layanan/'); ?>">Cek Hasil Pemeriksaan</a>
                            </li>
                            <li>
                                <a href="<?= base_url('frontend_layanan/tarif_pemeriksaan'); ?>">Informasi Operasional</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Kontak <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?= base_url('frontend_kontak/'); ?>">Bukutamu</a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- End header navigation menu -->
            </div>
        </div>
        <!-- .container -->
    </nav>
    <!-- .navbar -->
</header>
<!-- End header -->