<!doctype html>
<html lang="en">

<head>
	<title>:: Iconic :: Table Normal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?= base_url('public/dist/') ?>favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?= base_url('public/dist/') ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('public/dist/') ?>assets/vendor/font-awesome/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= base_url('public/dist/') ?>assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url('public/dist/') ?>assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url('public/dist/') ?>assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url('public/dist/') ?>assets/vendor/sweetalert/sweetalert.css" />

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url('public/dist/') ?>assets/css/main.css">
	<style>
		.breadcrumb-item.pointer:hover {
			cursor: pointer;
		}
	</style>
</head>

<body data-theme="light" class="font-nunito right_icon_toggle">

	<div id="wrapper" class="theme-cyan">

		<!-- Page Loader -->
		<div class="page-loader-wrapper">
			<div class="loader">
				<div class="m-t-30"><img src="<?= base_url('public/dist/') ?>assets/images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
				<p>Please wait...</p>
			</div>
		</div>

		<!-- Top navbar div start -->
		<nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-brand">
					<button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
					<button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
					<a href="index.html">ICONIC</a>
				</div>

				<div class="navbar-right">
					<form id="navbar-search" class="navbar-form search-form">
						<input value="" class="form-control" placeholder="Search here..." type="text">
						<button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
					</form>

					<div id="navbar-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="fa fa-bell"></i>
									<span class="notification-dot"></span>
								</a>
								<ul class="dropdown-menu notifications">
									<li class="header"><strong>You have 4 new Notifications</strong></li>
									<li>
										<a href="javascript:void(0);">
											<div class="media">
												<div class="media-left">
													<i class="icon-info text-warning"></i>
												</div>
												<div class="media-body">
													<p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
													<span class="timestamp">10:00 AM Today</span>
												</div>
											</div>
										</a>
									</li>

									<li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
								</ul>
							</li>
							<li>
								<a onclick="logout()" class="icon-menu"><i class="fa fa-power-off"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<!-- main left menu -->
		<div id="left-sidebar" class="sidebar">
			<button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
			<div class="sidebar-scroll">
				<div class="user-account">
					<img src="<?= base_url('public/dist/') ?>assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
					<div class="dropdown">
						<span>Welcome,</span>
						<a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Pamela Petrus</strong></a>
						<ul class="dropdown-menu dropdown-menu-right account">
							<li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>

							<li class="divider"></li>
							<li><a onclick="logout()"><i class="icon-power"></i>Logout</a></li>
						</ul>
					</div>
				</div>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content padding-0">
					<div class="tab-pane active" id="menu">
						<nav id="left-sidebar-nav" class="sidebar-nav">
							<ul id="main-menu" class="metismenu li_animation_delay">
								<?php if ($role == 'Administrator') {
									$this->load->view('template/sidemenu_admin');
								} else if ($role == 'HRD') {
									$this->load->view('template/sidemenu_hrd');
								} else if ($role == 'HOD') {
									$this->load->view('template/sidemenu_hod');
								}
								?>

							</ul>
						</nav>
					</div>
					<div class="tab-pane" id="setting">
						<h6>Choose Skin</h6>
						<ul class="choose-skin list-unstyled">
							<li data-theme="purple">
								<div class="purple"></div>
							</li>
							<li data-theme="blue">
								<div class="blue"></div>
							</li>
							<li data-theme="cyan" class="active">
								<div class="cyan"></div>
							</li>
							<li data-theme="green">
								<div class="green"></div>
							</li>
							<li data-theme="orange">
								<div class="orange"></div>
							</li>
							<li data-theme="blush">
								<div class="blush"></div>
							</li>
							<li data-theme="red">
								<div class="red"></div>
							</li>
						</ul>

						<ul class="list-unstyled font_setting mt-3">
							<li>
								<label class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" name="font" value="font-nunito" checked="">
									<span class="custom-control-label">Nunito Google Font</span>
								</label>
							</li>
							<li>
								<label class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
									<span class="custom-control-label">Ubuntu Font</span>
								</label>
							</li>
							<li>
								<label class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" name="font" value="font-raleway">
									<span class="custom-control-label">Raleway Google Font</span>
								</label>
							</li>
							<li>
								<label class="custom-control custom-radio custom-control-inline">
									<input type="radio" class="custom-control-input" name="font" value="font-IBMplex">
									<span class="custom-control-label">IBM Plex Google Font</span>
								</label>
							</li>
						</ul>

						<ul class="list-unstyled mt-3">
							<li class="d-flex align-items-center mb-2">
								<label class="toggle-switch theme-switch">
									<input type="checkbox">
									<span class="toggle-switch-slider"></span>
								</label>
								<span class="ml-3">Enable Dark Mode!</span>
							</li>
							<li class="d-flex align-items-center mb-2">
								<label class="toggle-switch theme-rtl">
									<input type="checkbox">
									<span class="toggle-switch-slider"></span>
								</label>
								<span class="ml-3">Enable RTL Mode!</span>
							</li>
							<li class="d-flex align-items-center mb-2">
								<label class="toggle-switch theme-high-contrast">
									<input type="checkbox">
									<span class="toggle-switch-slider"></span>
								</label>
								<span class="ml-3">Enable High Contrast Mode!</span>
							</li>
						</ul>

						<hr>
						<h6>General Settings</h6>
						<ul class="setting-list list-unstyled">
							<li>
								<label class="fancy-checkbox">
									<input type="checkbox" name="checkbox" checked>
									<span>Allowed Notifications</span>
								</label>
							</li>
							<li>
								<label class="fancy-checkbox">
									<input type="checkbox" name="checkbox">
									<span>Offline</span>
								</label>
							</li>
							<li>
								<label class="fancy-checkbox">
									<input type="checkbox" name="checkbox">
									<span>Location Permission</span>
								</label>
							</li>
						</ul>


					</div>

				</div>
			</div>
		</div>

		<!-- mani page content body part -->

		<div id="main-content">
			<div class="container-fluid">
				<div id="contentdata">

					<div class="block-header">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<?php if (isset($title)) { ?>
									<h2><?= $title; ?></h2>
									<ul class="breadcrumb">
										<li class="breadcrumb-item "><a href="<?= base_url(); ?>" title="Dashboard"><i class="fa fa-dashboard"></i></a></li>
										<li class="breadcrumb-item pointer"><?= $title; ?></li>
										<li class="breadcrumb-item pointer active">Jquery Datatable</li>
									</ul>
								<?php } ?>
							</div>
						</div>
					</div>

					<div class="row clearfix">
						<div class="col-lg-12">

							<div class="text-center">
								<h4>Welcome To Payyrol System</h4>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>

	</div>

	<!-- Javascript -->
	<script src="<?= base_url('public/dist/') ?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?= base_url('public/dist/') ?>assets/bundles/vendorscripts.bundle.js"></script>
	<script src="<?= base_url('public/dist/') ?>assets/bundles/datatablescripts.bundle.js"></script>
	<script src="<?= base_url('public/dist/') ?>assets/vendor/sweetalert/sweetalert.min.js"></script>
	<!-- page js file -->
	<script src="<?= base_url('public/dist/') ?>assets/bundles/mainscripts.bundle.js"></script>
	<script>
		function ToController(controller, menuId) {
			var base = "<?php echo base_url(); ?>";
			var content = $('#contentdata');
			var url = base + controller;
			// Show loading spinner

			$(".page-loader-wrapper").fadeIn();
			content.load(url, function() {
				// Hide loading spinner after content is loaded
				$(".page-loader-wrapper").fadeOut();
			});

			return false;
		}

		function load_form(url, active) {
			var content;
			content = $("#contentdata");
			$(".page-loader-wrapper").fadeIn();
			content.load(url);
			$(".page-loader-wrapper").fadeOut();
		}

		function logout() {
			swal({
				title: "Apa kamu yakin?",
				text: "Anda akan keluar dan mengakhiri sesi ini!",
				type: "warning",
				showCancelButton: true,
				confirmButtonColor: "#dc3545",
				confirmButtonText: "YA, Keluar!",
				cancelButtonText: "Tidak, Tetap Disini!",
				closeOnConfirm: false,
				closeOnCancel: false,
				showLoaderOnConfirm: true,
			}, function(isConfirm) {
				if (isConfirm) {
					setTimeout(function() {
						swal("Ajax request finished!");
					}, 2000);
				} else {
					swal("Tetap Disini", "Senang Ada Tetap Disini", "success");
				}
			});
		}

		function is_aktif(id, typ) {
		}
	</script>
</body>

</html>
