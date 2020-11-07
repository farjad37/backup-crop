<?php
//ini_set('display_errors', 1);
ob_start();
?>

<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>
	<base href="">
	<meta charset="utf-8"/>
	<!--		<title > (<?php //echo $numb; ?>) Central | Dashboard</title>-->
	<title id=""> Central | Dashboard </title>
	<meta name="description" content="Login page example">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

	<!--end::Fonts -->

	<!--begin::Page Custom Styles(used by this page) -->
	<link href="assets/css/pages/login/login-5.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/pages/wizard/wizard-2.css" rel="stylesheet" type="text/css"/>
	<!--end::Page Custom Styles -->
	<link href="assets/css/pages/wizard/wizard-3.css" rel="stylesheet" type="text/css">
	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>

	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->
	<link href="assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css"/>

	<!--end::Layout Skins -->
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<!--
<style>
	#kt_header, .kt-subheader, .kt-portlet,.kt-footer{
		background-image: linear-gradient(to right, #570606, #6c080c, #830a10, #9a0d13, #b11115, #b11115, #b11115, #b11115, #9a0d13, #830a10, #6c080c, #570606);
	}	
</style>
-->

<body class="">

	<!-- begin:: Page -->

	<!-- begin:: Header Mobile -->
	<?php include('header_mobile.php'); ?>

	<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

			<!-- begin:: Aside -->

			<!-- Uncomment this to display the close button of the panel
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
-->


			<!-- end:: Aside -->
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

				<!-- begin:: Header -->
				<?php include('header.php'); ?>
				<!-- end:: Header -->
				<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

				

					<!-- begin:: Content -->

					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
					
						<!-- Enter Your Code Here-->
					</div>

						



					</div>
					<!-- end:: Content -->
				</div>
				<!--<div id='all_data1'></div>-->
				<!-- begin:: Footer -->
				
				<?php include('footer.php'); ?>
				</div>
				

				<!-- end:: Footer -->
			</div>
		</div>
	</div>

	<!-- end:: Page -->

	<!-- begin::Quick Panel -->


	<!-- end::Quick Panel -->

	<!-- begin::Scrolltop -->
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
	</div>

	<!-- end::Scrolltop -->

	<!-- begin::Sticky Toolbar -->


	<!-- end::Sticky Toolbar -->

	<!-- begin::Demo Panel -->


	<!-- end::Demo Panel -->

	<!--Begin:: Chat-->


	<!--ENd:: Chat-->

	<!-- begin::Global Config(global config for global JS sciprts) -->
	<script>
		var KTAppOptions = {
			"colors": {
				"state": {
					"brand": "#5d78ff",
					"dark": "#282a3c",
					"light": "#ffffff",
					"primary": "#5867dd",
					"success": "#34bfa3",
					"info": "#36a3f7",
					"warning": "#ffb822",
					"danger": "#fd3995"
				},
				"base": {
					"label": [
						"#c5cbe3",
						"#a1a8c3",
						"#3d4465",
						"#3e4466"
					],
					"shape": [
						"#f0f3ff",
						"#d9dffa",
						"#afb4d4",
						"#646c9a"
					]
				}
			}
		};
	</script>

	<!-- end::Global Config -->

	<!--begin::Global Theme Bundle(used by all pages) -->

	<!--end::Global Theme Bundle -->


	<!-- end::Body -->
</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="assets/plugins/custom/gmaps/gmaps.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="assets/js/pages/dashboard.js" type="text/javascript"></script>

<!--end::Page Scripts -->


</head>

<body>


</html>