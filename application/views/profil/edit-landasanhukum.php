<script src="<?= base_url('assets/'); ?>js/plugins/ckeditor/ckeditor.js"></script>
<main class="app-layout-content">

    <!-- Page Content -->
    <!-- class="container-fluid p-y-md">
        <!-- class="row">
            <!-- class="col-lg-12">
                <!-- Default Table -->
    <form action="<?php echo base_url(); ?>profil/prosesEditLandasanHukum/<?php echo $editLandasanHukum->id; ?>" method="POST">
        <div class="card">
            <div class="card-header">
                <h4>Landasan Hukum LABKESDA Sumedang</h4>
                <div class="card-actions">
                    <button class="btn btn-sm btn-app" type="submit" name="submit"><i class="fa fa-check"></i>&nbsp; Perbarui</button>
                    <a href="<?= base_url('profil/landasanhukum') ?>" class="btn btn-sm btn-app-red"><i class="fa fa-chevron-left"></i>&nbsp; Kembali</a>
                </div>
            </div>
            <div class="card-block">
                <?php if (validation_errors()) : ?>
                    <br>
                    <div class="alert alert-danger mb--1 pb-1" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <div class="card-body mt--4">
                    <div class="row card-text text-justify">
                        <div class="form-group">
                            <div class="col">
                                <textarea id="ckeditor" name="isi" style="height: 800px;"><?php echo $editLandasanHukum->landasan_hukum; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- .card -->
    <!-- End Default Table -->
    </!-->
    <!-- .col-lg-6 -->

    </!-->
    <!-- .row -->

    </!-->
    <!-- .container-fluid -->
    <!-- End Page Content -->

</main>
<script>
    var ckeditor = CKEDITOR.replace('isi', {
        height: '600px'
    });
    CKEDITOR.disableAutoInline = true;
    CKEDITOR.inline('editable');
</script>