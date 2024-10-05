<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md m-t">
        <div class="card card-profile">
            <div class="card-block card-profile-block text-xs-center text-sm-left">
                <img class="img-avatar img-avatar-96" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="" />
                <div class="profile-info font-500"> <?= $user['name'] ?>
                    <div class="small text-muted m-t-xs"><?= $user['email'] ?></div>
                    <div class="small text-muted m-t-xs">registered since <?= date('d F Y', $user['date_created']); ?></div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <ul class="nav nav-tabs nav-stacked">
                        <li class="active">
                            <a href="#profile-tab1" data-toggle="tab">Pengaturan</a>
                        </li>
                        <li>
                            <a href="#profile-tab2" data-toggle="tab">Ubah Kata Sandi</a>
                        </li>
                    </ul>
                    <!-- .nav-tabs -->
                </div>
                <!-- .card -->
            </div>
            <!-- .col-md-4 -->

            <div class="col-md-8">
                <div class="card">
                    <div class="mt-2"><?= $this->session->flashdata('message'); ?></div>
                    <div class="card-block tab-content">

                        <!-- Profile tab 1 -->
                        <div class="tab-pane fade in active" id="profile-tab1">
                            <?= form_open_multipart('user/edit'); ?>
                            <h4 class="m-t-sm m-b">Atur profil</h4>
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <label for="name">Nama lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <div class="custom-file">
                                        <label for="image">Pilih gambar</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="row narrow-gutter">
                                <div class="col-xs-6 col-xs-offset-3">
                                    <button type="submit" class="btn btn-app btn-block">Perbarui<span class="hidden-xs"> profil</span></button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- End profile tab 1 -->

                        <!-- Profile tab 2 -->
                        <div class="tab-pane fade" id="profile-tab2">
                            <form class="fieldset" action="<?= base_url('user/changepassword'); ?>" method="post">
                                <h4 class="m-t-sm m-b">Ubah kata sandi</h4>
                                <div class="form-group row">
                                    <div class="col-xs-12">
                                        <label for="current_password">Kata sandi saat ini</label>
                                        <input type="password" class="form-control" name="current_password" id="current_password" />
                                        <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-xs-6">
                                        <label for="new_password1">Kata sandi baru</label>
                                        <input type="password" class="form-control" name="new_password1" id="new_password1" />
                                        <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-xs-6">
                                        <label for="new_password2">Konfirmasi</label>
                                        <input type="password" class="form-control" name="new_password2" id="new_password2" />
                                        <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="row narrow-gutter">
                                    <div class="col-xs-6 col-xs-offset-3">
                                        <button type="submit" class="btn btn-app btn-block">Perbarui<span class="hidden-xs"> kata sandi</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- End profile tab 2 -->

                    </div>
                    <!-- .card-block .tab-content -->
                </div>
                <!-- .card -->
            </div>
            <!-- .col-md-8 -->
        </div>
        <!-- .row -->
    </div>
    <!-- End Page Content -->

</main>