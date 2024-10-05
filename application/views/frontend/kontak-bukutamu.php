<main class="app-layout-content">

    <!-- Page header -->
    <div class="page-header bg-app bg-inverse">
        <div class="container">
            <div class="p-y-lg text-center">
                <h1 class="display-2">Hubungi kami</h1>
                <p class="text-muted">Berikan tanggapan anda mengenai pelayanan yang kami berikan. Satu masukan dari anda sangat berarti untuk evaluasi terhadap pelayanan yang kami berikan.</p>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <div class="page-content bg-white">
        <div class="container">
            <!-- Section Content -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php if (validation_errors()) : ?>
                        <br>
                        <div class="alert alert-danger mb--1 pb-1" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="mt-3 mb--2"><?= $this->session->flashdata('message'); ?></div>
                    <form class="form-horizontal" action="<?= base_url('frontend_kontak/'); ?>" method="post">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" id="nama" name="nama" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <label for="pesan">Pesan</label>
                                <textarea class="form-control" id="pesan" name="pesan" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-app btn-block" type="submit">Kirim</button>
                            </div>
                        </div>
                        <span class="help-block">Masukan dari anda sangat berarti bagi kami.</span>
                    </form>
                </div>
            </div>
            <!-- .row -->
            <!-- End Section Content -->
        </div>
        <!-- .container -->
    </div>
    <!-- .section -->

<div class="page-content bg-white">
        <div class="container">
            <!-- Section Content -->
            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d990.3443478656928!2d107.9277596!3d-6.845281!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d1383a939e6f%3A0x216a063547831891!2sPuskesmas+Kotakaler!5e0!3m2!1sid!2sid!4v1562263887364!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <!-- .row -->
            <!-- End Section Content -->
        </div>
        <!-- .container -->
    </div>
    <!-- .section -->

</main>