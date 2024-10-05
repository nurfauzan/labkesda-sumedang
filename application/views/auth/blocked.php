<!DOCTYPE html>

<html class="app-ui">

<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- Document title -->
    <title>Akses Terlarang</title>

    <meta name="description" content="AppUI - Frontend Template & UI Framework" />
    <meta name="robots" content="noindex, nofollow" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url('assets/'); ?>img/favicons/apple-touch-icon.png" />
    <link rel="icon" href="<?= base_url('assets/'); ?>img/favicons/favicon.ico" />

    <!-- Google fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

    <!-- AppUI CSS stylesheets -->
    <link rel="stylesheet" id="css-font-awesome" href="<?= base_url('assets/'); ?>css/font-awesome.css" />
    <link rel="stylesheet" id="css-ionicons" href="<?= base_url('assets/'); ?>css/ionicons.css" />
    <link rel="stylesheet" id="css-bootstrap" href="<?= base_url('assets/'); ?>css/bootstrap.css" />
    <link rel="stylesheet" id="css-app" href="<?= base_url('assets/'); ?>css/app.css" />
    <link rel="stylesheet" id="css-app-custom" href="<?= base_url('assets/'); ?>css/app-custom.css" />
    <!-- End Stylesheets -->
</head>

<body class="app-ui">
    <div class="app-layout-canvas">
        <div class="app-layout-container">
            <main class="app-layout-content">

                <!-- Error Content -->
                <div class="page-content bg-white text-center">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <!-- Error Titles -->
                                <h1 class="display-4 m-b-0 text-green animated bounceIn" data-text="403">403</h1>
                                <h2>Akses terlarang</h2>
                                <p class="m-b-lg">Anda tidak memiliki izin untuk mengakses halaman ini...</p>

                                <a href="<?= base_url('user'); ?>" class="text-grey">&larr; Kembali ke Dashboard</a>
                                <!-- End Error Titles -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Error Content -->

            </main>

        </div>
        <!-- .app-layout-container -->
    </div>
    <!-- .app-layout-canvas -->

    <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
    <script src="<?= base_url('assets/'); ?>js/core/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/core/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/core/jquery.scrollLock.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/core/jquery.placeholder.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/app.js"></script>
    <script src="<?= base_url('assets/'); ?>js/app-custom.js"></script>

</body>

</html>