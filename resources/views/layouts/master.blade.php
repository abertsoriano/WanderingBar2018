<!DOCTYPE html>
<html lang="en">
<head>

	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wandering Bar</title>

	<!-- PLUGINS CSS STYLE -->
	<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="plugins/selectbox/select_option1.css">
	<link rel="stylesheet" type="text/css" href="plugins/datepicker/datepicker.css">
	<link rel="stylesheet" type="text/css" href="plugins/isotope/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="plugins/isotope/isotope.css">
	<!-- REVOLUTION SLIDER -->
	<link rel="stylesheet" href="plugins/revolution/css/settings.css">
	<link rel="stylesheet" href="plugins/revolution/css/layers.css">
	<link rel="stylesheet" href="plugins/revolution/css/navigation.css">


	<!-- GOOGLE FONT -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700' rel='stylesheet' type='text/css'>

	<!-- CUSTOM CSS -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/colors/default.css" id="option_color">

	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>


<body class="body-wrapper">
<div class="main-wrapper">

	@yield('header')

	@yield('banner')

	@section('body')
	@show

	<footer>
		<div class="footer clearfix">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<div class="footerContent">
							<a href="index.html" class="footer-logo"><img src="img/logo-color-sm.png" alt="footer-logo"></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute </p>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="footerContent">
							<h5>contact us</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod.</p>
							<ul class="list-unstyled">
								<li><i class="fa fa-home" aria-hidden="true"></i>61 Park Street, Fifth Avenue, NY</li>
								<li><i class="fa fa-phone" aria-hidden="true"></i>[88] 657 524 332</li>
								<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailTo:info@star-travel.com">info@star-travel.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="footerContent imgGallery">
							<h5>Gallery</h5>
							<div class="row">
								<div class="col-xs-4">
									<a class="fancybox-pop" href="img/home/gallery/gallery-1.jpg"><img src="img/home/gallery/thumb-gallery-1.jpg" alt="image"></a>
								</div>
								<div class="col-xs-4">
									<a class="fancybox-pop" href="img/home/gallery/gallery-2.jpg"><img src="img/home/gallery/thumb-gallery-2.jpg" alt="image"></a>
								</div>
								<div class="col-xs-4">
									<a class="fancybox-pop" href="img/home/gallery/gallery-3.jpg"><img src="img/home/gallery/thumb-gallery-3.jpg" alt="image"></a>
								</div>
								<div class="col-xs-4">
									<a class="fancybox-pop" href="img/home/gallery/gallery-4.jpg"><img src="img/home/gallery/thumb-gallery-4.jpg" alt="image"></a>
								</div>
								<div class="col-xs-4">
									<a class="fancybox-pop" href="img/home/gallery/gallery-5.jpg"><img src="img/home/gallery/thumb-gallery-5.jpg" alt="image"></a>
								</div>
								<div class="col-xs-4">
									<a class="fancybox-pop" href="img/home/gallery/gallery-6.jpg"><img src="img/home/gallery/thumb-gallery-6.jpg" alt="image"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div class="footerContent">
							<h5>newsletter</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do. </p>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Enter your email" aria-describedby="basic-addon21">
								<span class="input-group-addon" id="basic-addon21"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
							</div>
							<ul class="list-inline">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyRight clearfix">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-push-6 col-xs-12">
						<ul class="list-inline">
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-sm-pull-6 col-xs-12">
						<div class="copyRightText">
							<p>Copyright © 2016. All Rights Reserved by <a target="_blank" href="http://www.iamabdus.com/">Abdus</a>.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="plugins/jquery/jquery-2.2.4.min.js"></script>
<script src="plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="plugins/jquery/waypoints.min.js"></script>
<script src="plugins/counter-up/jquery.counterup.min.js"></script>
<script src="plugins/isotope/isotope.min.js"></script>
<script src="plugins/isotope/jquery.fancybox.pack.js"></script>
<script src="plugins/isotope/isotope-triger.js"></script>
<script src="plugins/countdown/jquery.syotimer.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="js/custom.js"></script>

@yield('scripts')
</body>

</html>