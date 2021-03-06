@extends('layouts.master')

@section('header')
    <header>
        <nav class="navbar navbar-default navbar-main navbar-fixed-top darkHeader" role="navigation">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown singleDrop active">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Home </a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li class="dropdown singleDrop active "><a href="index.html">Home Main</a></li>
                                <li class="dropdown singleDrop  "><a href="index-v2.html">Home City</a></li>
                                <li class="dropdown singleDrop  "><a href="index-v3.html">Home Destination</a></li>
                            </ul>
                        </li>
                        <li class="dropdown megaDropMenu ">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">Tours</a>
                            <ul class="row dropdown-menu">
                                <li class="col-sm-3 col-xs-12">
                                    <ul class="list-unstyled">
                                        <li>Tour Packages Grid View</li>
                                        <li class=""><a href="packages-grid-left-sidebar.html">Packages Sidebar Left</a></li>
                                        <li class=""><a href="packages-grid-right-sidebar.html">Packages Sidebar Right</a></li>
                                        <li class=""><a href="packages-grid.html">Packages 3 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3 col-xs-12">
                                    <ul class="list-unstyled">
                                        <li>Tour Packages List View</li>
                                        <li class=""><a href="packages-list-left-sidebar.html">Packages Sidebar Left</a></li>
                                        <li class=""><a href="packages-list-right-sidebar.html">Packages Sidebar Right</a></li>
                                        <li class=""><a href="packages-list.html">Packages List</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3 col-xs-12">
                                    <ul class="list-unstyled">
                                        <li>Single Package</li>
                                        <li class=""><a href="single-package-left-sidebar.html">Packages Sidebar Left</a></li>
                                        <li class=""><a href="single-package-right-sidebar.html">Packages Sidebar Right</a></li>
                                        <li class=""><a href="single-package-fullwidth.html">Package Fullwidth</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3 col-xs-12">
                                    <ul class="list-unstyled">
                                        <li>Booking Steps</li>
                                        <li class=""><a href="booking-1.html">Step 1 - Personal Info</a></li>
                                        <li class=""><a href="booking-2.html">Step 2 - Payment Info</a></li>
                                        <li class=""><a href="booking-3.html">Step 3 - Confirmation</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown megaDropMenu ">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">Hotels</a>
                            <ul class="row dropdown-menu">
                                <li class="col-sm-3 col-xs-12">
                                    <ul class="list-unstyled">
                                        <li>Hotels Grid View</li>
                                        <li class=""><a href="hotels-grid-left-sidebar.html">Hotels Sidebar Left</a></li>
                                        <li class=""><a href="hotels-grid-right-sidebar.html">Hotels Sidebar Right</a></li>
                                        <li class=""><a href="hotels-grid.html">Hotels 3 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3 col-xs-12">
                                    <ul class="list-unstyled">
                                        <li>Hotels List View</li>
                                        <li class=""><a href="hotels-list-left-sidebar.html">Hotels Sidebar Left</a></li>
                                        <li class=""><a href="hotels-list-right-sidebar.html">Hotels Sidebar Right</a></li>
                                        <li class=""><a href="hotels-list.html">Hotels List</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3 col-xs-12">
                                    <ul class="list-unstyled">
                                        <li>Single Hotel</li>
                                        <li class=""><a href="single-hotel-left-sidebar.html">Hotels Sidebar Left</a></li>
                                        <li class=""><a href="single-hotel-right-sidebar.html">Hotels Sidebar Right</a></li>
                                        <li class=""><a href="single-hotel-fullwidth.html">Hotels Fullwidth</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3 col-xs-12">
                                    <ul class="list-unstyled">
                                        <li>Booking Steps</li>
                                        <li class=""><a href="booking-1.html">Step 1 - Personal Info</a></li>
                                        <li class=""><a href="booking-2.html">Step 2 - Payment Info</a></li>
                                        <li class=""><a href="booking-3.html">Step 3 - Confirmation</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown singleDrop ">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGES</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class=""><a href="about-us.html">About Us</a></li>
                                <li class=""><a href="contact.html">Contact Us</a></li>
                                <li class="dropdown dropdown-submenu ">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Gallery <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu ">
                                        <li class=""><a href="gallery-grid.html">Gallery Grid</a></li>
                                        <li class=""><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                        <li class=""><a href="gallery-photo-slider.html">Photo Slider</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu ">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Destinations <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-left">
                                        <li class=""><a href="destination-cities.html">Destination Cities</a></li>
                                        <li class=""><a href="destination-single-city.html">Single Destination</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.html">404 Not Found</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li class="dropdown singleDrop ">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown dropdown-submenu">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog Grid View <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class=""><a href="blog-grid-three-col.html">Blog Grid 3 Col</a></li>
                                        <li class=""><a href="blog-grid-two-col.html">Blog Grid 2 Col</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Blog List View <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class=""><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                        <li class=""><a href="blog-list-left-sidebar.html">blog-list-left-sidebar.html</a></li>
                                        <li class=""><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Single Blog Post <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class=""><a href="blog-single-right-sidebar.html">Right Sidebar</a></li>
                                        <li class=""><a href="blog-single-left-sidebar.html">Left Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown singleDrop ">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class=""><a href="dashboard.html">Dashboard</a></li>
                                <li class=""><a href="booking.html">Booking</a></li>
                                <li class=""><a href="profile.html">Profile</a></li>
                                <li class=""><a href="setting.html">Settings</a></li>
                                <li class=""><a href="#" data-toggle="modal" data-target="#signup">Signup</a></li>
                                <li class=""><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                            </ul>
                        </li>
                        <li class="dropdown singleDrop ">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shortcodes</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class=""><a href="accordion-and-toggles.html">Accordions &amp; Toggles</a></li>
                                <li class=""><a href="tabs-and-dropdown.html">Tabs &amp; Dropdowns</a></li>
                                <li class=""><a href="pricing-table.html">Pricing Tables</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
@endsection

@section('banner')
	<section class="bannercontainer">
		<div id="rev_slider_wrapper1" class="rev_slider_wrapper fullscreen-container" data-alias="christmas-snow-scene" data-source="gallery" style="background-color:transparent;padding:0px;">
			<!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
			<div id="rev_slider_container" class="rev_slider custom_rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
				<ul>
					<!-- SLIDE 1 -->
					<li data-transition="parallaxvertical" >
						<!-- MAIN IMAGE -->
						<img src="img/home/slider/slider-01.jpg" alt="slidebg1"   data-bgparallax="3" class="rev-slidebg" data-no-retina>

						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="container">
							<div class="tp-caption tp-resizeme slide-layer-1" id="slide-layer-1"
								 data-x="left"
								 data-y="center"
								 data-hoffset="['20', '40', '80', '60']"
								 data-voffset="['-105']"
								 data-width="['auto']"
								 data-height="['auto']"
								 data-type="text"
								 data-responsive_offset="on"
								 data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
								 data-textAlign="['left']"
								 data-fontsize="['30', '30', '25', '16']"
								 data-color="#fff"
								 data-visibility="['on', 'on', 'on', 'on']"
								 style="z-index: 1; text-transform: uppercase; ">Discover The Most Amazing

							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption tp-resizeme slide-layer-2" id="slide-layer-2"
								 data-x="left"
								 data-y="center"
								 data-hoffset="['20', '40', '80', '60']"
								 data-voffset="-50"
								 data-width="['auto']"
								 data-height="['auto']"
								 data-type="text"
								 data-responsive_offset="on"
								 data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
								 data-textAlign="['left']"
								 data-fontsize="['64', '54', '44', '34']"
								 data-color="#fff"
								 data-fontweight="bold"

								 style="z-index: 1; text-transform: uppercase;">Travel Template

							</div>

							<!-- LAYER NR. 3 -->

							<div class="tp-caption tp-resizeme slide-layer-2" id="slide-layer-2"
								 data-x="left"
								 data-y="center"
								 data-hoffset="['20', '40', '80', '60']"
								 data-voffset="20"
								 data-width="['auto']"
								 data-height="['auto']"
								 data-type="text"
								 data-responsive_offset="on"
								 data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
								 data-textAlign="['left']"
								 data-fontsize="['14', '14', '14', '14']"
								 data-color="#fff"
								 data-visibility="['on','on','off','off']"

								 style="z-index: 1;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex consequat.

							</div>


							<!-- LAYER NR. 4 -->
							<div class="tp-caption tp-resizeme slide-layer-4" id="slide-layer-4"
								 data-x="['left','left','left','left']"
								 data-y="center"
								 data-hoffset="['20', '40', '80', '60']"
								 data-voffset="['108', '108', 15, '15']"
								 data-width="auto"
								 data-height="auto"
								 data-type="text"
								 data-responsive_offset="on"
								 data-frames='[{"delay":1400,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
								 data-textAlign="['left']"
								 data-lineheight="['45', '40', '35', '30']"
								 data-color="#FFF"
								 data-border="0"
								 data-paddingleft="30"
								 data-paddingright="30"
								 data-visibility="['on','on','on','on']"

								 style="z-index: 500; border-radius: 4px"><span class="page-scroll"><a target="_blank" href="#">Buy Now</a></span>
							</div>
						</div>
					</li>

					<!-- SLIDE 2 -->
					<li data-transition="parallaxvertical">
						<!-- MAIN IMAGE -->
						<img src="img/home/slider/slider-02.jpg" alt="slidebg1"   data-bgparallax="3" class="rev-slidebg" data-no-retina>

						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption tp-resizeme slide-layer-1" id="slide-layer-1"
							 data-x="center" data-hoffset=""
							 data-y="center" data-voffset="-105"
							 data-width="['auto']"
							 data-height="['auto']"
							 data-type="text"
							 data-responsive_offset="on"
							 data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							 data-textAlign="['center']"
							 data-fontsize="['30', '30', '30', '25']"
							 data-color="#fff"
							 style="z-index: 1; text-transform: uppercase; ">Discover The Most Amazing

						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption tp-resizeme slide-layer-2" id="slide-layer-2"
							 data-x="center" data-hoffset=""
							 data-y="center" data-voffset="-50"
							 data-width="['auto']"
							 data-height="['auto']"
							 data-type="text"
							 data-responsive_offset="on"
							 data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							 data-textAlign="['center']"
							 data-fontsize="['64', '54', '44', '34']"
							 data-color="#fff"
							 data-fontweight="bold"

							 style="z-index: 1; text-transform: uppercase;">Travel Template

						</div>

						<!-- LAYER NR. 3 -->

						<div class="tp-caption tp-resizeme slide-layer-2" id="slide-layer-2"
							 data-x="center" data-hoffset="0"
							 data-y="center" data-voffset="20"
							 data-width="['auto']"
							 data-height="['auto']"
							 data-type="text"
							 data-responsive_offset="on"
							 data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							 data-textAlign="['center']"
							 data-fontsize="['14', '14', '14', '14']"
							 data-color="#fff"
							 data-visibility="['on','on','off','off']"

							 style="z-index: 1;">Maecenas nec sodales justo. Vivamus auctor pulvinar mattis. Ut at elementum nunc. Quisque condimentum ligula ante, non <br> luctus enim pulvinar sed. Fusce quis congue odio.

						</div>


						<!-- LAYER NR. 4 -->
						<div class="tp-caption tp-resizeme slide-layer-4" id="slide-layer-4"
							 data-y="center"
							 data-x="center"
							 data-hoffset=""
							 data-voffset="['108', '108', 15, '15']"
							 data-width="auto"
							 data-height="auto"
							 data-type="text"
							 data-responsive_offset="on"
							 data-frames='[{"delay":1400,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							 data-textAlign="['center']"
							 data-lineheight="['45', '40', '35', '30']"
							 data-color="#FFF"
							 data-border="0"
							 data-paddingleft="30"
							 data-paddingright="30"

							 style="z-index: 500; border-radius: 4px"><span class="page-scroll"><a target="_blank" href="#">Buy Now</a></span>
						</div>
					</li>

					<!-- slide 3   -->
					<li data-transition="parallaxvertical">
						<!-- MAIN IMAGE -->
						<img src="img/home/slider/slider-03.jpg" alt="slidebg1"   data-bgparallax="3" class="rev-slidebg" data-no-retina>

						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption tp-resizeme slide-layer-1" id="slide-layer-1"
							 data-x="left"
							 data-y="center"
							 data-hoffset="['20', '40', '80', '60']"
							 data-voffset="['-105']"
							 data-width="['auto']"
							 data-height="['auto']"
							 data-type="text"
							 data-responsive_offset="on"
							 data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							 data-textAlign="['left']"
							 data-fontsize="['30', '30', '30', '25']"
							 data-color="#fff"
							 style="z-index: 1; text-transform: uppercase; ">Enjoy Ultimate Freedom

						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption tp-resizeme slide-layer-2" id="slide-layer-2"
							 data-x="left"
							 data-y="center"
							 data-hoffset="['20', '40', '80', '60']"
							 data-voffset="-50"
							 data-width="['auto']"
							 data-height="['auto']"
							 data-type="text"
							 data-responsive_offset="on"
							 data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							 data-textAlign="['left']"
							 data-fontsize="['64', '54', '44', '34']"
							 data-color="#fff"
							 data-fontweight="bold"

							 style="z-index: 1; text-transform: uppercase;">Bootstrap Theme

						</div>

						<!-- LAYER NR. 3 -->

						<div class="tp-caption tp-resizeme slide-layer-2" id="slide-layer-2"
							 data-x="left"
							 data-y="center"
							 data-hoffset="['20', '40', '80', '60']"
							 data-voffset="20"
							 data-width="['auto']"
							 data-height="['auto']"
							 data-type="text"
							 data-responsive_offset="on"
							 data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							 data-textAlign="['left']"
							 data-fontsize="['14', '14', '14', '14']"
							 data-color="#fff"
							 data-visibility="['on','on','off','off']"

							 style="z-index: 1;">Aenean congue nisi elit, vitae viverra leo luctus et. Donec interdum erat id mi scelerisque, vitae ullamcorper lorem gravida. <br> Nunc sed maximus ante. Nulla dictum turpis vitae vehicula auctor.

						</div>


						<!-- LAYER NR. 4 -->
						<div class="tp-caption tp-resizeme slide-layer-4" id="slide-layer-4"
							 data-x="['left','left','left','left']"
							 data-y="center"
							 data-hoffset="['20', '40', '80', '60']"
							 data-voffset="['108', '108', 15, '15']"
							 data-width="auto"
							 data-height="auto"
							 data-type="text"
							 data-responsive_offset="on"
							 data-frames='[{"delay":1400,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							 data-textAlign="['left']"
							 data-lineheight="['45', '40', '35', '30']"
							 data-color="#FFF"
							 data-border="0"
							 data-paddingleft="30"
							 data-paddingright="30"

							 style="z-index: 500; border-radius: 4px"><span class="page-scroll"><a target="_blank" href="#">Buy Now</a></span>
						</div>
					</li>

					<!-- SLIDE 4 -->
					<li data-transition="parallaxvertical">
						<!-- MAIN IMAGE -->
						<img src="img/home/slider/slider-04.jpg" alt="slidebg1"   data-bgparallax="3" class="rev-slidebg" data-no-retina>

						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption tp-resizeme slide-layer-1" id="slide-layer-1"
							 data-x="center" data-hoffset=""
							 data-y="center" data-voffset="-105"
							 data-width="['autp']"
							 data-height="['auto']"
							 data-type="text"
							 data-responsive_offset="on"
							 data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							 data-textAlign="['center']"
							 data-fontsize="['30', '30', '30', '25']"
							 data-color="#fff"
							 style="z-index: 1; text-transform: uppercase; ">Go Where You Wanna Go

						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption tp-resizeme slide-layer-2" id="slide-layer-2"
							 data-x="center" data-hoffset=""
							 data-y="center" data-voffset="-50"
							 data-width="['auto']"
							 data-height="['auto']"
							 data-type="text"
							 data-responsive_offset="on"
							 data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							 data-textAlign="['center']"
							 data-fontsize="['64', '54', '44', '34']"
							 data-color="#fff"
							 data-fontweight="bold"

							 style="z-index: 1; text-transform: uppercase;">24/7 Quick Support

						</div>

						<!-- LAYER NR. 3 -->

						<div class="tp-caption tp-resizeme slide-layer-2" id="slide-layer-2"
							 data-x="center" data-hoffset=""
							 data-y="center" data-voffset="20"
							 data-width="['auto']"
							 data-height="['auto']"
							 data-type="text"
							 data-responsive_offset="on"
							 data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							 data-textAlign="['center']"
							 data-fontsize="['14', '14', '14', '14']"
							 data-color="#fff"
							 data-visibility="['on','on','off','off']"

							 style="z-index: 1;">Maecenas et leo nec nunc rutrum tempor. Mauris pharetra porttitor odio eget convallis. Praesent facilisis mattis pretium. <br> Aliquam sagittis efficitur risus, interdum euismod urna. Pellentesque vel augue augue.

						</div>


						<!-- LAYER NR. 4 -->
						<div class="tp-caption tp-resizeme slide-layer-4" id="slide-layer-4"
							 data-y="center"
							 data-x="center"
							 data-hoffset=""
							 data-voffset="['108', '108', 15, '15']"
							 data-width="auto"
							 data-height="auto"
							 data-type="text"
							 data-responsive_offset="on"
							 data-frames='[{"delay":1400,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
							 data-textAlign="['center']"
							 data-lineheight="['45', '40', '35', '30']"
							 data-color="#FFF"
							 data-border="0"
							 data-paddingleft="30"
							 data-paddingright="30"

							 style="z-index: 500; border-radius: 4px"><span class="page-scroll"><a target="_blank" href="#">Buy Now</a></span>
						</div>
					</li>
				</ul>

				<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
			</div>
		</div>
	</section>
@endsection

@section('body')

	<!-- TOP DEALS -->
	<section class="mainContentSection packagesSection">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="sectionTitle">
						<h2><span class="lightBg">Our Top Deals</span></h2>
						<p>Quisque lacus augue, blandit non est a, dictum malesuada odio.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div class="thumbnail deals">
						<img src="img/home/deal/deal-01.jpg" alt="deal-image">
						<a href="single-package-right-sidebar.html" class="pageLink"></a>
						<div class="discountInfo">
							<div class="discountOffer">
								<h4>
									50% <span>OFF</span>
								</h4>
							</div>
							<ul class="list-inline rating homePage">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<ul class="list-inline duration">
								<li>7 days</li>
								<li>15 hrs</li>
								<li>15 min</li>
							</ul>
						</div>
						<div class="caption">
							<h4><a href="single-package-right-sidebar.html" class="captionTitle">Suspendisse Blandit</a></h4>
							<p>Integer purus ex, dictum nec elementum eu, tristique vel lectus. Donec rutrum lectus et pharetra egestas.</p>
							<div class="detailsInfo">
								<h5>
									<span>Start From</span>
									$299
								</h5>
								<ul class="list-inline detailsBtn">
									<li><a href='booking-1.html' class="btn buttonTransparent">Book now</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="thumbnail deals">
						<img src="img/home/deal/deal-02.jpg" alt="deal-image">
						<a href="single-package-fullwidth.html" class="pageLink"></a>
						<div class="discountInfo">
							<div class="discountOffer">
								<h4>
									Free <span>Gift</span>
								</h4>
							</div>
							<ul class="list-inline rating homePage">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<ul class="list-inline duration">
								<li>12 days</li>
								<li>3 hrs</li>
								<li>12 min</li>
							</ul>
						</div>
						<div class="caption">
							<h4><a href="single-package-fullwidth.html" class="captionTitle">Suspendisse Eros Erat</a></h4>
							<p>Proin convallis magna vel libero accumsan sollicitudin. Quisque dapibus vitae turpis eu magna sagittis.</p>
							<div class="detailsInfo">
								<h5>
									<span>Start From</span>
									$499
								</h5>
								<ul class="list-inline detailsBtn">
									<li><a data-toggle="modal" data-target="#inquiryModal" href="#" class="btn buttonTransparent">Inquiry</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="thumbnail deals">
						<img src="img/home/deal/deal-03.jpg" alt="deal-image">
						<a href="single-package-left-sidebar.html" class="pageLink"></a>
						<div class="discountInfo">
							<div class="discountOffer">
								<h4>
									25% <span>OFF</span>
								</h4>
							</div>
							<ul class="list-inline rating homePage">
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
								<li><i class="fa fa-star" aria-hidden="true"></i></li>
							</ul>
							<ul class="list-inline duration">
								<li>17 days</li>
								<li>13 hrs</li>
								<li>18 min</li>
							</ul>
						</div>
						<div class="caption">
							<h4><a href="single-package-left-sidebar.html" class="captionTitle">Quisque Placerat Nunc</a></h4>
							<p>Vivamus eu mattis nibh. Quisque eget ipsum at odio fringilla consequat vel id erat. Suspendisse non feugiat mi.</p>
							<div class="detailsInfo">
								<h5>
									<span>Start From</span>
									$399
								</h5>
								<ul class="list-inline detailsBtn">
									<li><a href='booking-1.html' class="btn buttonTransparent">Book now</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="btnArea">
						<a href="packages-grid.html" class="btn buttonTransparent">view all</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- PROMOTION PARALLAX -->
	<section class="promotionWrapper">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="promotionTable">
						<div class="promotionTableInner">
							<div class="promotionInfo">
								<span>Winter Promotion</span>
								<h2>Greek Island Vacetion Tour</h2>
								<ul class="list-inline rating">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
								<p>$599 per person - 5 nights</p>
								<a href="single-package-right-sidebar.html" class="btn buttonCustomPrimary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- DESTINATIONS -->
	<section class="whiteSection">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="sectionTitle">
						<h2><span>Our Destinations</span></h2>
						<p>Nullam vitae risus commodo arcu tincidunt ultricies</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="media destinations">
						<a class="media-left" href="destination-cities.html">
							<img class="media-object" src="img/home/destination.jpg" alt="Destination">
						</a>
						<div class="media-body">
							<h3 class="media-heading">Choose <br>Your Destination</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<div class="clearfix">
								<ul class="list-unstyled">
									<li><i class="fa fa-minus" aria-hidden="true"></i>Asia</li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Aenean</a></li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Etiam</a></li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Donec</a></li>
								</ul>
								<ul class="list-unstyled">
									<li><i class="fa fa-minus" aria-hidden="true"></i>Europe</li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Maecenas</a></li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Cras Sagittis</a></li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Vestibulum</a></li>
								</ul>
								<ul class="list-unstyled">
									<li><i class="fa fa-minus" aria-hidden="true"></i>America</li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Morbi Sed</a></li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Pellentesque</a></li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Proin</a></li>
								</ul>
								<ul class="list-unstyled">
									<li><i class="fa fa-minus" aria-hidden="true"></i>Africa</li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Duis Eu</a></li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Morbi Nisl</a></li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Curabitur</a></li>
								</ul>
								<ul class="list-unstyled">
									<li><i class="fa fa-minus" aria-hidden="true"></i>Australia</li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Vivamus</a></li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Nibh Odio</a></li>
									<li><a href="destination-single-city.html"><i class="fa fa-square" aria-hidden="true"></i>Dictum</a></li>
								</ul>
							</div>
							<div class="media-btn">
								<a href="destination-cities.html" class="btn buttonTransparent">View All</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- COUNTING PARALLAX -->
	<section class="countUpSection">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="text-center">
						<div class="icon">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="counter">179</div>
						<h5>Destinations</h5>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="text-center">
						<div class="icon">
							<i class="fa fa-gift" aria-hidden="true"></i>
						</div>
						<div class="counter">48</div>
						<h5>tour pack</h5>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="text-center">
						<div class="icon">
							<i class="fa fa-smile-o" aria-hidden="true"></i>
						</div>
						<div class="counter">4562</div>
						<h5>happy clients</h5>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="text-center">
						<div class="icon">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
						</div>
						<div class="counter">24</div>
						<h5>hours support</h5>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- TOUR PACKAGES -->
	<section class="whiteSection">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="sectionTitle">
						<h2><span>Our Packages</span></h2>
						<p>Ut facilisis facilisis metus quis semper</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="filter-container isotopeFilters">
						<ul class="list-inline filter">
							<li class="active"><a href="#" data-filter="*">All Places</a></li>
							<li><a href="#" data-filter=".asia">Asia</a></li>
							<li><a href="#" data-filter=".america">America</a></li>
							<li><a href="#" data-filter=".africa">Africa</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row isotopeContainer">
				<div class="col-sm-4 isotopeSelector asia">
					<article class="">
						<figure>
							<img src="img/home/packages/packages-1.jpg" alt="">
							<h4>Vestibulum Tour</h4>
							<div class="overlay-background">
								<div class="inner"></div>
							</div>
							<div class="overlay">
								<a class="fancybox-pop" href="single-package-fullwidth.html">
									<div class="overlayInfo">
										<h5>from <span>$399</span></h5>
										<p><i class="fa fa-calendar" aria-hidden="true"></i>27 Jan, 2017</p>
									</div>
								</a>
							</div>
						</figure>
					</article>
				</div>
				<div class="col-sm-4 isotopeSelector america africa">
					<article class="">
						<figure>
							<img src="img/home/packages/packages-2.jpg" alt="">
							<h4>Maecenas Tour</h4>
							<div class="overlay-background">
								<div class="inner"></div>
							</div>
							<div class="overlay">
								<a class="fancybox-pop" href="single-package-fullwidth.html">
									<div class="overlayInfo">
										<h5>from <span>$599</span></h5>
										<p><i class="fa fa-calendar" aria-hidden="true"></i>09 Feb, 2017</p>
									</div>
								</a>
							</div>
						</figure>
					</article>
				</div>
				<div class="col-sm-4 isotopeSelector africa">
					<article class="">
						<figure>
							<img src="img/home/packages/packages-3.jpg" alt="">
							<h4>Lobortis Tour</h4>
							<div class="overlay-background">
								<div class="inner"></div>
							</div>
							<div class="overlay">
								<a class="fancybox-pop" href="single-package-fullwidth.html">
									<div class="overlayInfo">
										<h5>from <span>$299</span></h5>
										<p><i class="fa fa-calendar" aria-hidden="true"></i>14 Feb, 2017</p>
									</div>
								</a>
							</div>
						</figure>
					</article>
				</div>
				<div class="col-sm-4 isotopeSelector asia america">
					<article class="">
						<figure>
							<img src="img/home/packages/packages-4.jpg" alt="">
							<h4>Leo Lacus Tour</h4>
							<div class="overlay-background">
								<div class="inner"></div>
							</div>
							<div class="overlay">
								<a class="fancybox-pop" href="single-package-fullwidth.html">
									<div class="overlayInfo">
										<h5>from <span>$399</span></h5>
										<p><i class="fa fa-calendar" aria-hidden="true"></i>11 Jan, 2017</p>
									</div>
								</a>
							</div>
						</figure>
					</article>
				</div>
				<div class="col-sm-4 isotopeSelector america">
					<article class="">
						<figure>
							<img src="img/home/packages/packages-5.jpg" alt="">
							<h4>Nullam Tour</h4>
							<div class="overlay-background">
								<div class="inner"></div>
							</div>
							<div class="overlay">
								<a class="fancybox-pop" href="single-package-fullwidth.html">
									<div class="overlayInfo">
										<h5>from <span>$199</span></h5>
										<p><i class="fa fa-calendar" aria-hidden="true"></i>02 Feb, 2017</p>
									</div>
								</a>
							</div>
						</figure>
					</article>
				</div>
				<div class="col-sm-4 isotopeSelector africa asia">
					<article class="">
						<figure>
							<img src="img/home/packages/packages-6.jpg" alt="">
							<h4>Hendrerit Tour</h4>
							<div class="overlay-background">
								<div class="inner"></div>
							</div>
							<div class="overlay">
								<a class="fancybox-pop" href="single-package-fullwidth.html">
									<div class="overlayInfo">
										<h5>from <span>$799</span></h5>
										<p><i class="fa fa-calendar" aria-hidden="true"></i>26 Feb, 2017</p>
									</div>
								</a>
							</div>
						</figure>
					</article>
				</div>
			</div>
		</div>
	</section>


	<!-- INQUIRY MODAL -->
	<div class="modal fade bookingModal modalBook" id="inquiryModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Inquiry About Tour</h4>
				</div>
				<div class="modal-body">
					<form action="#">
						<div class="form-group">
							<input type="text" class="form-control" id="yourName" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="yourEmail" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="3" placeholder="Message"></textarea>
						</div>
						<button type="submit" class="btn buttonCustomPrimary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection