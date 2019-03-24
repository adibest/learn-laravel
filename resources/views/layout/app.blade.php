<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Blank Page | Okler Themes | Porto-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/octopus/octopus/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="/octopus/octopus/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="/octopus/octopus/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="/octopus/octopus/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/octopus/octopus/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/octopus/octopus/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/octopus/octopus/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="/octopus/octopus/assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			@include('layout.header')
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				@include('layout.sidebarleft')
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					@yield('content')
				</section>
			</div>

			@include('layout.sidebarright')
		</section>

		<!-- Vendor -->
		<script src="/octopus/octopus/assets/vendor/jquery/jquery.js"></script>
		<script src="/octopus/octopus/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="/octopus/octopus/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="/octopus/octopus/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="/octopus/octopus/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="/octopus/octopus/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="/octopus/octopus/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/octopus/octopus/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/octopus/octopus/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/octopus/octopus/assets/javascripts/theme.init.js"></script>

	</body>
</html>