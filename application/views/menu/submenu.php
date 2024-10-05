<script src="<?= base_url('assets/'); ?>js/jquery-3.2.1.js"></script>
<script src="<?= base_url('assets/'); ?>js/pages/base_tables_datatables.js"></script>
<main class="app-layout-content">
    <!-- Page Content -->
    <div class="container-fluid p-y-md">

        <!-- Dynamic Table Full -->
        <div class="card">
            <div class="card-header">
                <h4>Pengelolaan Data Submenu</h4>
                <div class="card-actions">
                    <a href="#!" class="btn btn-sm btn-app" data-toggle="modal" data-target="#newSubMenuModal"><i class="fa fa-plus"></i>&nbsp; Tambah Submenu
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
                            <th scope="col">Judul</th>
                            <th scope="col">Menu</th>
                            <th scope="col">Link</th>
                            <th scope="col" width="10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="show_data">

                    </tbody>
                </table>
            </div>
            <!-- .card-block -->
        </div>
        <!-- .card -->
        <!-- End Dynamic Table Full -->

    </div>
    <!-- .container-fluid -->
    <!-- End Page Content -->

</main>


<!--New Submenu Modal-->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-header bg-green bg-inverse">
                <h4>Tambah submenu</h4>
                <ul class="card-actions">
                    <li>
                        <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                    </li>
                </ul>
            </div>
            <form role="form" action="<?= base_url('menu/submenu'); ?>" method="post">
                <div class="card-block">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-table"></i></span>
                            <input class="form-control" placeholder="Nama submenu" name="title" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-folder"></i></span>
                            <select name="menu_id" id="menu_id" class="form-control">
                                <option value="">Pilih Menu</option>
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                            <input class="form-control" placeholder="Link" name="url" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-square"></i></span>
                            <input class="form-control" placeholder="Icon" name="icon" type="text">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-sm btn-app" type="submit"><i class="ion-checkmark"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- edit modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-header bg-green bg-inverse">
                <h4>Tambah submenu</h4>
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
                            <span class="input-group-addon"><i class="fa fa-table"></i></span>
                            <input class="form-control" placeholder="Nama submenu" name="title_update" id="title_update" type="text">
                            <input class="form-control" placeholder="Nama submenu" name="id_sub_menu_update" id="id_sub_menu_update" type="hidden">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-folder"></i></span>
                            <select name="menu_id_update" id="menu_id_update" class="form-control">
                                <option value="">Pilih Menu</option>
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                            <input class="form-control" placeholder="Link" name="url_update" id="url_update" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-square"></i></span>
                            <input class="form-control" placeholder="Icon" name="icon_update" id="icon_update" type="text">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-sm btn-app" type="submit" id="btn_update"><i class="ion-checkmark"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!--Delete SubMenu Modal-->
<div class="modal fade" id="delSubMenuModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-header bg-green bg-inverse">
                <h4>Hapus submenu</h4>
                <ul class="card-actions">
                    <li>
                        <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                    </li>
                </ul>
            </div>
            <form action="<?= base_url('menu/hapussubmenu'); ?>" method="post">
                <div class="card-block">
                    Apa anda yakin ingin menghapus data?
                    <input class="form-control" placeholder="Link" name="id_delete" id="id_delete" type="hidden">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Tutup</button>
                    <button class="btn btn-sm btn-app" type="submit"><i class="ion-checkmark"></i> Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        show_product(); //call function show all product

        $('#mydata').dataTable();

        //function show all product
        function show_product() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('Menu/sub_menu_data') ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].title + '</td>' +
                            '<td>' + data[i].menu + '</td>' +
                            '<td>' + data[i].url + '</td>' +
                            '<td style="text-align:left;">' +
                            '<a href="javascript:void(0);" class="btn btn-xs btn-default item_edit" data-toggle="tooltip" title="Ubah" data-id="' + data[i].id + '" data-menu="' + data[i].menu + '" data-menu_id="' + data[i].id_menu + '" data-title="' + data[i].title + '" data-url="' + data[i].url + '" data-icon="' + data[i].icon + '"><i class="ion-android-create"></i></a>' + ' ' +
                            '<a href="javascript:void(0);" class="btn btn-xs btn-default item_delete" data-toggle="tooltip" title="Hapus" data-id="' + data[i].id + '"><i class="ion-android-delete"></i></a>' +
                            '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }


        //get data for delete record
        $('#show_data').on('click', '.item_delete', function() {
            var id = $(this).data('id');

            $('#delSubMenuModal').modal('show');
            $('[name="id_delete"]').val(id);
        });

        //get data for update record
        $('#show_data').on('click', '.item_edit', function() {
            var id = $(this).data('id');
            var menu = $(this).data('menu');
            var menu_id = $(this).data('menu_id');
            var title = $(this).data('title');
            var url = $(this).data('url');
            var icon = $(this).data('icon');

            $('#editModal').modal('show');
            $('[name="id_sub_menu_update"]').val(id);
            $('[name="title_update"]').val(title);
            $('[name="menu_id_update"]').val(menu_id);
            $('[name="url_update"]').val(url);
            $('[name="icon_update"]').val(icon);
        });

        //update record to database
        $('#btn_update').on('click', function() {
            var id_update = $('#id_sub_menu_update').val();
            var menu_id_update = $('#menu_id_update').val();
            var title_update = $('#title_update').val();
            var url_update = $('#url_update').val();
            var icon_update = $('#icon_update').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Menu/sub_menu_update') ?>",
                dataType: "JSON",
                data: {
                    id_update: id_update,
                    menu_id_update: menu_id_update,
                    title_update: title_update,
                    url_update: url_update,
                    icon_update: icon_update
                },
                success: function(data) {
                    $('#editModal').modal('show');
                    $('[name="id_sub_menu_update"]').val("");
                    $('[name="title_update"]').val("");
                    $('[name="menu_id_update"]').val("");
                    $('[name="url_update"]').val("");
                    $('[name="icon_update"]').val("");
                    $('#editModal').modal('hide');
                    show_product();
                }
            });
            return false;
        });

    });
</script>