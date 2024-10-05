<!-- Page JS Code -->
<script src="<?= base_url('assets/'); ?>js/jquery-3.2.1.js"></script>
<script src="<?= base_url('assets/'); ?>js/pages/base_tables_datatables.js"></script>
<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <div class="row">
            <div class="col-lg-12">

                <!-- Dynamic Table Full -->
                <div class="card">
                    <div class="card-header">
                        <h4>Pengelolaan Data Menu</h4>
                        <div class="card-actions">
                            <a href="#!" class="btn btn-sm btn-app" data-toggle="modal" data-target="#menu_Add"><i class="fa fa-plus"></i>&nbsp; Tambah Menu
                            </a>
                        </div>
                    </div>
                    <div class="card-block">
                        <?php if (validation_errors()) : ?>
                            <br>
                            <div class="alert alert-danger mb--1 pb-1" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <div class="mt-3 mb--2"><?= $this->session->flashdata('message'); ?></div>
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter" id="mydata">
                            <thead>
                                <tr>
                                    <th scope="col">Menu</th>
                                    <th scope="col" width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="show_datamenu">

                            </tbody>
                        </table>
                    </div> <!-- .card-block -->
                </div>
                <!-- .card -->
                <!-- End Dynamic Table Full -->

            </div>
            <!-- .col-lg-6 -->

        </div>
        <!-- .row -->

    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->

</main>


<!--New Role Modal-->
<form>
    <div class="modal fade" id="menu_Add" tabindex="-1" role="dialog" aria-labelledby="newRoleModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card-header bg-green bg-inverse">
                    <h4 class="modal-title" id="newRoleModalLabel">Tambah menu</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-folder"></i></span>
                            <input class="form-control" type="text" id="menu" name="menu" placeholder="Masukkan nama menu" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Tutup</button>
                    <button id="btn_save" class="btn btn-sm btn-app" type="submit"><i class="ion-checkmark"></i> Simpan</button>
                </div>

            </div>
        </div>
    </div>
</form>
<!-- End Fade In Modal -->



<!--Edit Role Modal-->
<div class="modal fade" id="Menu_Edit" tabindex="-1" role="dialog" aria-labelledby="editRoleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-header bg-green bg-inverse">
                <h4 class="modal-title" id="editRoleModalLabel">Ubah menu</h4>
                <ul class="card-actions">
                    <li>
                        <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                    </li>
                </ul>
            </div>
            <form>
                <div class="card-block">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="hidden" name="id_update" id="id_update" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-folder"></i></span>
                            <input class="form-control" type="text" id="menu_update" name="menu_update" placeholder="Masukkan nama peran" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Tutup</button>
                    <button id="btn_update" class="btn btn-sm btn-app" type="submit"><i class="ion-checkmark"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Fade In Modal -->



<!--Delete Role Modal-->
<div class="modal fade" id="Menu_Delete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-header bg-green bg-inverse">
                <h4>Hapus menu</h4>
                <ul class="card-actions">
                    <li>
                        <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                    </li>
                </ul>
            </div>
            <div class="card-block">
                Anda yakin ingin menghapus data ini?
            </div>
            <form>
                <div class="modal-footer">
                    <input type="hidden" name="id_delete" id="id_delete" class="form-control">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Tutup</button>
                    <button id="btn_delete" class="btn btn-sm btn-app" type="submit"><i class="ion-trash"></i> Hapus</button>
                </div>
            </form>

        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        show_menu(); //call function show all product

        $('#mydata').dataTable();

        //function show all product
        function show_menu() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('Menu/menu_data') ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].menu + '</td>' +
                            '<td style="text-align:left;">' +
                            '<a href="javascript:void(0);" class="btn btn-xs btn-default item_edit" data-toggle="tooltip" title="Ubah" data-id="' + data[i].id + '" data-menu="' + data[i].menu + '"><i class="ion-android-create"></i></a>' + ' ' +
                            '<a href="javascript:void(0);" class="btn btn-xs btn-default item_delete" data-toggle="tooltip" title="Hapus" data-id="' + data[i].id + '"><i class="ion-android-delete"></i></a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#show_datamenu').html(html);
                }

            });
        }

        //Save product
        $('#btn_save').on('click', function() {
            var menu = $('#menu').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Menu/menu_save') ?>",
                dataType: "JSON",
                data: {
                    menu: menu
                },
                success: function(data) {
                    $('[name="menu"]').val("");
                    $('#menu_Add').modal('hide');
                    show_menu();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_datamenu').on('click', '.item_delete', function() {
            var id = $(this).data('id');

            $('#Menu_Delete').modal('show');
            $('[name="id_delete"]').val(id);
        });

        //delete record to database
        $('#btn_delete').on('click', function() {
            var id = $('#id_delete').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Menu/menu_delete') ?>",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(data) {
                    $('[name="id_delete"]').val("");
                    $('#Menu_Delete').modal('hide');
                    show_menu();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_datamenu').on('click', '.item_edit', function() {
            var id = $(this).data('id');
            var menu = $(this).data('menu');

            $('#Menu_Edit').modal('show');
            $('[name="id_update"]').val(id);
            $('[name="menu_update"]').val(menu);
        });

        //update record to database
        $('#btn_update').on('click', function() {
            var id_update = $('#id_update').val();
            var menu_update = $('#menu_update').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Menu/menu_update') ?>",
                dataType: "JSON",
                data: {
                    id_update: id_update,
                    menu_update: menu_update
                },
                success: function(data) {
                    $('[name="id_update"]').val("");
                    $('[name="menu_update"]').val("");
                    $('#Menu_Edit').modal('hide');
                    show_menu();
                }
            });
            return false;
        });

    });
</script>