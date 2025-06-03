<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<title>ICT </title>
	<meta charset="utf-8" />
	<?php $this->load->view('partisi/css'); ?>
</head>

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
			<?php $this->load->view('partisi/sidebar'); ?>
			<div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
				<div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
					<?php $this->load->view('partisi/iconbrand'); ?>
					<div class="app-sidebar-navs flex-column-fluid py-6" id="kt_app_sidebar_navs">
						<div id="kt_app_sidebar_navs_wrappers" class="app-sidebar-wrapper hover-scroll-y my-2" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header" data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">
							<div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary">
								<?php $this->load->view('navigasi/nav_menu_utama'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="app-main flex-column flex-row-fluid " id="kt_app_main">
					<div class="d-flex flex-column flex-column-fluid">
						<div id="kt_app_content" class="app-content  flex-column-fluid ">
							<div id="kt_app_content_container" class="app-container  container-fluid">
								<div id="contentdata">
									<span>halo</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<i class="ki-outline ki-arrow-up"></i>
	</div>
	<script>
		var hostUrl = "<?= base_url('public/'); ?>";
	</script>
	<script src="<?= base_url('public/'); ?>demo38/assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?= base_url('public/'); ?>demo38/assets/js/scripts.bundle.js"></script>

	<script src="<?= base_url('public/'); ?>demo38/assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<script src="<?= base_url('public/'); ?>demo38/assets/js/widgets.bundle.js"></script>
	<script src="<?= base_url('public/'); ?>demo38/assets/js/custom/widgets.js"></script>
	<script>
		function ToController(controller, menuId) {
			var base = "<?= base_url(); ?>";
			var content = $('#contentdata');
			var url = base + controller;

			$('.nav-link').removeClass('active');
			$("#preloading").fadeIn();
			content.load(url, function() {
				$("#preloading").fadeOut();
				$('#' + menuId).addClass('active');
			});

			return false;
		}

		function load_form(url, active) {
			var content;
			content = $("#contentdata");
			$("#preloading").fadeIn();
			content.load(url);
			$("#preloading").fadeOut();
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
	</script>
</body>


</html>
