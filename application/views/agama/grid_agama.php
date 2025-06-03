  <div class="card">
  	<div class="card-body">
  		<div class="row mb-2">
  			<div class="col-lg-6 col-md-6 col-sm-12">
  				<?php if (isset($title)) { ?>
  					<h2><?= $title; ?></h2>
  				<?php } ?>
  			</div>
  			<div class="col-lg-6 col-md-6 col-sm-12">
  				<div class="d-flex flex-row-reverse">
  					<button onclick="adddata()" type="button" class="btn btn-primary ml-1"><i class="fa fa-plus"></i> Tambah Data</button>
  					<button onclick="load_form('<?= $url_index; ?>', 'Add Data')" type="button" class="btn btn-secondary"><i class="fa fa-refresh"></i> Refresh</button>
  				</div>
  			</div>
  		</div>
  		<div class="row ">
  			<div class="table-responsive">
  				<table class="table table-bordered table-custom table-striped table-hover " id="mytable" style="width: 100%;">
  					<thead>
  						<tr>
  							<th style="width: 10%;">No</th>
  							<th>Nama Agama</th>
  							<th style="width: 10%;" class="text-center">Aksi</th>
  						</tr>
  					</thead>
  					<tbody>

  					</tbody>
  				</table>
  			</div>
  		</div>
  	</div>
  </div>
  <script>
  	$(document).ready(function() {
  		var url = "<?= $url_grid ?>";
  		var table = $('#mytable').DataTable({
  			"processing": true,
  			"serverSide": false,
  			"ajax": {
  				"url": url,
  				"type": "POST",
  				"dataType": "json",
  				"dataSrc": function(json) {
  					if (json.hasil === 'true') {
  						return json.data_grid;
  					} else {
  						return [];
  					}
  				}
  			},
  			"columns": [{
  					"data": "id_agama"
  				},
  				{
  					"data": "nama_agama"
  				},
  				{
  					"data": "id_agama",
  					"render": function(data, type, row) {
  						return `
						<div class="btn-group" role="group" aria-label="Basic example">
							<button type="button" class="btn btn-primary" onclick="aksi('update', '${row.id_agama}')"><i class="fa fa-pencil"></i></button>
							<button type="button" class="btn btn-danger" onclick="aksi('delete', '${row.id_agama}')"><i class="fa fa-trash"></i></button>
						</div>
						`;
  					}
  				}
  			]
  		});

  	});

  	function adddata() {
  		load_form('<?= $url_add; ?>', 'Add Data');
  	}

  	function aksi(type, id) {
  		if (type == 'update') {
  			var urledit = '<?= base_url('C_agama/edit/') ?>' + id;
  			load_form(urledit, 'edit Data');
  		} else {
  			Swal.fire({
  				title: "Apa kamu yakin?",
  				text: "Anda akan Data ini!",
  				icon: "warning",
  				showCancelButton: true,
  				confirmButtonColor: "#3085d6",
  				cancelButtonColor: "#d33",
  				confirmButtonText: "Ya, Hapus!"
  			}).then((result) => {
  				if (result.isConfirmed) {
  					var urlhapus = '<?= base_url('C_agama/delete/') ?>' + id;
  					$.ajax({
  						url: urlhapus,
  						type: "POST",
  						dataType: "JSON",
  						data: {
  							post_id: id,
  						},
  						beforeSend: function() {
  							$(".page-loader-wrapper").show();
  						},
  						success: function(data) {
  							if (data.hasil == "true") {
  								Swal.fire({
  									icon: "success",
  									title: "Deleted!",
  									text: "Your file has been deleted.",
  								});
  								load_form('<?= $url_index; ?>', 'Add Data');
  							} else {
  								Swal.fire({
  									icon: "error",
  									title: "Data gagal Di Hapus!",
  									text: "Silahkan prikasa kembali data yang akan di hapus",
  								});
  							}
  						}
  					});
  				}
  			});
  		}
  	}
  	// Tombol filter reload data
  	// $('#btn_filter').on('click', function() {
  	// 	table.ajax.reload();
  	// });
  </script>
