$(function () {

	$('.tombolTambahData').on('click', function () {
		$$('#RoleModalLabel').html('Tambah peran');
	});

	$('.tampilModalEditRole').on('click', function () {
		$('#RoleModalLabel').html('Ubah peran');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/labkesda-sumedang/admin/getubah',
			data: {
				id: id
			},
			method: 'post',
			success: function (data) {
				console.log(data);
			}
		});

	});

});
