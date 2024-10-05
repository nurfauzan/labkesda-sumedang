</div>
<!-- .app-layout-container -->
</div>
<!-- .app-layout-canvas -->
<div class="app-ui-mask-modal"></div>

<!-- Fade In Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-header bg-green bg-inverse">
                <h4>Logout</h4>
                <ul class="card-actions">
                    <li>
                        <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                    </li>
                </ul>
            </div>
            <div class="card-block">
                Aksi ini akan mengakhiri sesi anda. Apakah anda yakin ingin keluar?
            </div>
            <form action="<?= base_url('auth/logout'); ?>" method="post">
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-sm btn-app" type="submit"><i class="ion-checkmark"></i> Ok</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Fade In Modal -->
<script src="<?= base_url('assets/'); ?>js/jquery-3.2.1.js"></script>
<!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
<script src="<?= base_url('assets/'); ?>js/core/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/core/jquery.slimscroll.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/core/jquery.scrollLock.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/core/jquery.placeholder.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/app.js"></script>
<script src="<?= base_url('assets/'); ?>js/app-custom.js"></script>

<!-- Page Plugins -->
<script src="<?= base_url('assets/'); ?>js/plugins/slick/slick.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/plugins/chartjs/Chart.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/plugins/flot/jquery.flot.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/plugins/flot/jquery.flot.stack.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/plugins/flot/jquery.flot.resize.min.js"></script>
<!-- Page JS Plugins -->
<script src="<?= base_url('assets/'); ?>js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/plugins/select2/select2.full.min.js"></script>
<!-- Page JS Plugins -->
<script src="<?= base_url('assets/'); ?>js/plugins/datatables/jquery.dataTables.min.js"></script>

<!-- Page JS Code -->
<script src="<?= base_url('assets/'); ?>js/pages/base_tables_datatables.js"></script>

<!-- Page JS Code -->
<script>
    $(function() {
        // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
        App.initHelpers(['datepicker', 'colorpicker', 'select2', 'masked-inputs', 'tags-inputs']);
    });
</script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });


    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: "post",
            data: {
                '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        });

    });
</script>

<script>
    $(function() {
        // Init page helpers (Slick Slider plugin)
        App.initHelpers('slick');
    });
</script>

</body>

</html>