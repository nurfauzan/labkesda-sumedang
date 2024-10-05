<!-- Page JS Code -->
<script src="<?= base_url(); ?>assets/js/jquery-3.4.1.js"></script>
<script src="<?= base_url(); ?>assets/js/pages/base_tables_datatables.js"></script>
<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <div class="row">
            <div class="col-lg-12">
                <!-- Default Table -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions">
                            <a href="#!" class="btn btn-sm btn-app float-right tombolTambahData" data-toggle="modal" data-target="#modal_Add"><i class="fa fa-plus"></i>&nbsp; Tambah Peran
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
                        <table class="table table-bordered table-striped table-vcenter" id="mydata">
                            <thead>
                                <tr>
                                    <th scope="col" width="86%">Peran</th>
                                    <th scope="col" width="14%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="show_data">

                            </tbody>
                        </table>
                    </div>
                    <!-- .card-block -->
                </div>
                <!-- .card -->
                <!-- End Default Table -->
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
    <div class="modal fade" id="modal_Add" tabindex="-1" role="dialog" aria-labelledby="newRoleModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card-header bg-green bg-inverse">
                    <h4 class="modal-title" id="newRoleModalLabel">Tambah peran</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="ion-person"></i></span>
                            <input class="form-control" type="text" id="role" name="role" placeholder="Masukkan nama peran" />
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
<div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="editRoleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-header bg-green bg-inverse">
                <h4 class="modal-title" id="editRoleModalLabel">Ubah peran</h4>
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
                            <span class="input-group-addon"><i class="ion-person"></i></span>
                            <input class="form-control" type="text" id="role_update" name="role_update" placeholder="Masukkan nama peran" />
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
<div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-header bg-green bg-inverse">
                <h4>Hapus peran</h4>
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
        show_role(); //call function show all product

        $('#mydata').dataTable();

        //function show all product
        function show_role() {
            $.ajax({
                type: 'ajax',
                url: '<?= base_url('Admin/role_data') ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].role + '</td>' +
                            '<td style="text-align:left;">' +
                            '<a href="<?= base_url('admin/roleaccess/'); ?>' + data[i].id + '" class="btn btn-xs btn-default" data-toggle="tooltip" title="Set akses" data-id="' + data[i].id + '"><i class="ion-android-lock"></i></a>' + ' ' +
                            '<a href="javascript:void(0);" class="btn btn-xs btn-default item_edit" data-toggle="tooltip" title="Ubah" data-id="' + data[i].id + '" data-role="' + data[i].role + '"><i class="ion-android-create"></i></a>' + ' ' +
                            '<a href="javascript:void(0);" class="btn btn-xs btn-default item_delete" data-toggle="tooltip" title="Hapus" data-id="' + data[i].id + '"><i class="ion-android-delete"></i></a>' +
                            '</td>' +
                            '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //Save product
        $('#btn_save').on('click', function() {
            var role = $('#role').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Admin/role_save') ?>",
                dataType: "JSON",
                data: {
                    role: role
                },
                success: function(data) {
                    $('[name="role"]').val("");
                    $('#modal_Add').modal('hide');
                    show_role();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click', '.item_delete', function() {
            var id = $(this).data('id');

            $('#Modal_Delete').modal('show');
            $('[name="id_delete"]').val(id);
        });

        //delete record to database
        $('#btn_delete').on('click', function() {
            var id = $('#id_delete').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Admin/role_delete') ?>",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(data) {
                    $('[name="id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_role();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click', '.item_edit', function() {
            var id = $(this).data('id');
            var role = $(this).data('role');

            $('#Modal_Edit').modal('show');
            $('[name="id_update"]').val(id);
            $('[name="role_update"]').val(role);
        });

        //update record to database
        $('#btn_update').on('click', function() {
            var id_update = $('#id_update').val();
            var role_update = $('#role_update').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Admin/role_update') ?>",
                dataType: "JSON",
                data: {
                    id_update: id_update,
                    role_update: role_update
                },
                success: function(data) {
                    $('[name="id_update"]').val("");
                    $('[name="role_update"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_role();
                }
            });
            return false;
        });

    });
</script>