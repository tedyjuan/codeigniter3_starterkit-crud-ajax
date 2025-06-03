<div class="block-header">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			<?php if (isset($title)) { ?>
				<h2><?= $title; ?></h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item "><a href="<?= base_url(); ?>" title="Dashboard"><i class="fa fa-dashboard"></i></a></li>
					<li onclick="load_form('<?= $url_index; ?>', 'list  Data')" class="breadcrumb-item pointer"><?= $title; ?></li>
					<li onclick="load_form('<?= $url_sub; ?>', 'Refresh')" class="breadcrumb-item pointer active"><?= $title_sub; ?></li>
				</ul>
			<?php } ?>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<div class="d-flex flex-row-reverse">
				<div class="page_action">
					<button onclick="load_form('<?= $url_index; ?>', 'list Data')" type="button" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back to List</button>
					<button onclick="load_form('<?= $url_sub; ?>', 'Refresh')" type="button" class="btn btn-secondary"><i class="fa fa-refresh"></i> Refresh</button>
				</div>
				<div class="p-2 d-flex">

				</div>
			</div>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<h2>Form Tambah Agama</h2>
		<form name="form_simpan" method="post">
			<div class="form-group">
				<label>Kode Agama</label>
				<input type="text" id="kode" name="kode" value="<?= $kode; ?>" class="form-control" required readonly>
			</div>
			<div class="form-group">
				<label for="nm_agama">Nama Agama</label>
				<input type="text" class="form-control" id="nm_agama" name="nm_agama" required placeholder="Masukkan Nama Agama">
			</div>
			<button type="button" onclick="btnsimpan()" id="btnSimpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
		</form>


		<div class="row mb-2">

			<div class="col-lg-6 col-md-6 col-sm-12">

			</div>
		</div>

	</div>
</div>
<script>
	function btnsimpan() {
		// Disable tombol submit
		$("#btnSimpan").prop("disabled", true);
		$(".page-loader-wrapper").fadeIn();
		var form = $("form[name=form_simpan]");
		$.ajax({
			type: 'POST',
			url: "<?= base_url('C_agama/simnpan_data') ?>",
			method: 'POST',
			dataType: 'JSON',
			data: form.serialize(),
			success: function(data) {
				if (data.hasil == 'true') {
					Swal.fire({
						icon: 'success',
						title: data.pesan,
					});
					load_form("<?= $url_index ?>");
				} else {
					$('#preloading').delay(100).fadeOut();
					Swal.fire({
						icon: 'info',
						title: data.pesan,
					});
					$("#btnSimpan").prop("disabled", false);
				}
			}
		});
	}
</script>
