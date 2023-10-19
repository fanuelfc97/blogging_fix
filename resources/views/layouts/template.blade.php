<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="post-template-default single single-post postid-16426 single-format-standard blog">
	<section class="header">
		<header id="header" class="container-fluid px-6">
			<nav class="navbar navbar-expand-lg navbar-light bg-light px-0">
			  <a class="navbar-brand " href="https://www.bootstrapdash.com">
			    <img src="https://www.bootstrapdash.com/blog/wp-content/themes/bootstradash/images/home-page/new-logo.svg" alt="Bootstrap dash Logo" class="img-fluid" width="184" height="35">			  </a>
			  <button class="navbar-toggler navbar-light px-0" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse pl-lg-4 pb-lg-0 pb-4" id="navbarTogglerDemo02">
			    <div class="menu-header-menu-container">
			      <ul id="menu-header-menu" class="navbar-nav mr-auto mt-2 mt-lg-0">
			        <li id="menu-item-36029" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-36029">
			          <a href="#" class="nav-link">Templates</a>
			          <ul class="sub-menu">
			            <li id="menu-item-68726" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68726">
			              <a href="https://www.bootstrapdash.com/premium-admin-templates" class="nav-link">All Premium Templates</a>
			            </li>
			            <li id="menu-item-36077" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36077">
			              <a href="https://www.bootstrapdash.com/bootstrap-admin-template" class="nav-link">Bootstrap Templates</a>
			            </li>
			            <li id="menu-item-18912" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18912">
			              <a href="https://www.bootstrapdash.com/ui-kit/" class="nav-link">UI Kits</a>
			            </li>
			            <li id="menu-item-19165" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19165">
			              <a href="https://www.bootstrapdash.com/laravel-templates/" class="nav-link">Laravel Templates</a>
			            </li>
			            <li id="menu-item-15614" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15614">
			              <a href="/angular-admin-templates/" class="nav-link">Angular Admin Templates</a>
			            </li>
			            <li id="menu-item-15893" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15893">
			              <a href="/react-admin-templates/" class="nav-link">React Admin Templates</a>
			            </li>
			            <li id="menu-item-15615" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15615">
			              <a href="/vue-admin-templates/" class="nav-link">Vue Admin Templates</a>
			            </li>
			            <li id="menu-item-16190" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16190">
			              <a href="https://www.bootstrapdash.com/material-design-dashboard/" class="nav-link">Material Admin</a>
			            </li>
			            <li id="menu-item-15617" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15617">
			              <a href="/html5-basic-template/" class="nav-link">Basic html5 templates</a>
			            </li>
			          </ul>
			        </li>
			        <li id="menu-item-16911" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16911">
			          <a href="#" class="nav-link">Bundles <span class="notification-badge ">UPTO 85% off</span>
			          </a>
			          <ul class="sub-menu">
			            <li id="menu-item-20527" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20527">
			              <a href="https://www.bootstrapdash.com/mega-bundle" class="nav-link">Mega Bundle</a>
			            </li>
			            <li id="menu-item-20347" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20347">
			              <a href="https://www.bootstrapdash.com/bootstrap-bundle" class="nav-link">Bootstrap</a>
			            </li>
			            <li id="menu-item-20346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20346">
			              <a href="https://www.bootstrapdash.com/angular-bundle" class="nav-link">Angular</a>
			            </li>
			            <li id="menu-item-20344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20344">
			              <a href="https://www.bootstrapdash.com/react-bundle" class="nav-link">React</a>
			            </li>
			            <li id="menu-item-20345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20345">
			              <a href="https://www.bootstrapdash.com/vue-bundle" class="nav-link">Vue</a>
			            </li>
			          </ul>
			        </li>
			        <li id="menu-item-36026" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-36026">
			          <a href="#" class="nav-link">Freebies</a>
			          <ul class="sub-menu">
			            <li id="menu-item-172554" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-172554">
			              <a href="https://www.bootstrapdash.com/all-free-templates" class="nav-link">All Free templates</a>
			            </li>
			            <li id="menu-item-15618" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15618">
			              <a href="/bootstrap-free-admin-templates/" class="nav-link">Admin &amp; Dashboards</a>
			            </li>
			            <li id="menu-item-18911" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18911">
			              <a href="https://www.bootstrapdash.com/free-ui-kits/" class="nav-link">UI Kits <span class="new-badge">New</span>
			              </a>
			            </li>
			            <li id="menu-item-16191" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16191">
			              <a href="https://www.bootstrapdash.com/product/material-design-template-free/" class="nav-link">Material Design</a>
			            </li>
			            <li id="menu-item-15619" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15619">
			              <a href="/free-landing-page-templates/" class="nav-link">Landing, Pricing and more</a>
			            </li>
			          </ul>
			        </li>
			        <li id="menu-item-14766" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14766">
			          <a href="https://www.bootstrapdash.com/blog" class="nav-link">Blog</a>
			        </li>
			        <li id="menu-item-118713" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118713">
			          <a href="https://www.bootstrapdash.com/offers" class="nav-link">
			            <span class="text-danger">Offers</span>
			          </a>
			        </li>
			      </ul>
			    </div>
			    <div class="nav-right-item mr-0 ml-auto">
			      <ul class="navbar-nav mr-auto align-items-lg-center align-items-start">
			        <li class="nav-item">
			          <a class="nav-link cart-n-count d-flex" href="https://www.bootstrapdash.com/cart">
			            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
			              <path d="M0.5 1.25C0.5 0.835786 0.835786 0.5 1.25 0.5H1.80826C2.75873 0.5 3.32782 1.13899 3.65325 1.73299C3.87016 2.12894 4.02708 2.58818 4.14982 3.00395C4.18306 3.00134 4.21674 3 4.2508 3H16.7481C17.5783 3 18.1778 3.79442 17.9502 4.5928L16.1224 11.0019C15.7856 12.1832 14.7062 12.9978 13.4779 12.9978H7.52977C6.29128 12.9978 5.2056 12.1699 4.87783 10.9756L4.11734 8.20455L2.85874 3.95578L2.8567 3.94834C2.701 3.38051 2.55487 2.85005 2.33773 2.4537C2.12686 2.0688 1.95877 2 1.80826 2H1.25C0.835786 2 0.5 1.66421 0.5 1.25ZM7 18C8.10457 18 9 17.1046 9 16C9 14.8954 8.10457 14 7 14C5.89543 14 5 14.8954 5 16C5 17.1046 5.89543 18 7 18ZM14 18C15.1046 18 16 17.1046 16 16C16 14.8954 15.1046 14 14 14C12.8954 14 12 14.8954 12 16C12 17.1046 12.8954 18 14 18Z" fill="black"></path>
			            </svg>
			          </a>
			        </li>
			        <li class="nav-item ">
			          <a class="navbar-btn" href="https://www.bootstrapdash.com/my-account"> Login/Register </a>
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>
		</header>
	</section>
	<main>
<div class="cover-container d-flex mx-auto flex-column header-bg">
</div>
<section class="post-archive-section">
	<div class="container-fluid post-archive mb-5 px-6 py-6">
		<div class="row">
			<div class="col-lg-9 ">
				 
											<div class="row">
							<div class="bd-post-thumbnail mt-2 mb-4">
																	<img class="img-fluid rounded pl-lg-3" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2019/11/Laravel-Bootstrap-Templates.jpg" alt=" 10+ Best &amp; Fully Responsive Laravel Admin Dashboard For Faster Web Development.">
																</div>
							<div class="col-lg-3 mb-3">
								<div class="toc">
									<h4>Table of content</h4> 
																	</div>
							</div>
							<div class="bd-post-archive col-lg-9">
								<div class="d-md-flex bd-post-header  text-capitalize px-5 pt-3 pb-2">
									<div class="col-sm-12 p-0 align-self-center">
										<div class="d-md-flex p-0">
											<p class=""><a href="https://www.bootstrapdash.com/blog/category/bootstrap">Bootstrap</a></p>
											<div class="ml-md-auto mr-md-0 d-md-flex">
												<a href="https://www.bootstrapdash.com/blog/2019/11/13" class="border-right-date"><!-- <time datetime="2019-11-13">November 13, 2019</time>-->November 13, 2019</a><p class=" p-0 pl-md-3">
													By &nbsp;<a href="https://www.bootstrapdash.com/blog/author/dhanya" class="">Sofia Sha</a></p>
												</div>
											</div>
										</div>
						<!--<div class="col-sm-3 d-flex  align-self-center  p-0 social-icons">
							<ul class="p-0 m-0 mr-sm-0 ml-sm-auto d-flex">
								<p class="align-self-center mr-2">Share</p>
								<li class="ml-1">
									<a href="#" class="align-self-center">							
										<i class="fa fa-facebook "></i>							
									</a>
								</li>
								<li class="ml-1">
									<a href="#" class="align-self-center">							
										<i class="fa fa-twitter"></i>							
									</a>
								</li>
							</ul>
						</div>-->
					</div>
					
					<div class="bd-post-details my-3 d-flex flex-column px-5">
						<h1>10+ Best &amp; Fully Responsive Laravel Admin Dashboard For Faster Web Development.</h1>
						<div class="single-page-content pb-5">
							<p><span style="font-weight: 400;">Laravel framework has gained widespread popularity among developers and users over the last few years. It has the ability to easily and quickly facilitate complex processes like authentication, routing, and more. This, in turn, simplifies the process of web development and helps you easily build powerful web applications. This article is a list of the best Laravel <a href="https://www.bootstrapdash.com/bootstrap-admin-template">bootstrap templates</a> you can find in 2021.</span></p>
<p><span style="font-weight: 400;">Laravel is one of the best options available out there when dealing with complex web development projects. There are plenty of Laravel Bootstrap templates out there that can help you develop stunning web applications. Bootstrap Laravel templates you do not want to miss in 2020 are given here.</span></p>
<h2><span style="font-weight: 400;">Star Admin Laravel</span></h2>
<p><img decoding="async" fetchpriority="high" class="alignnone wp-image-29785 size-full" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/star-admin-laravel.png" alt="star admin laravel bootstrap template" width="2800" height="1800"></p>
<p><span style="font-weight: 400;">Star Admin Laravel template is designed to look simple, unique, and elegant. It contains a neatly designed and carefully crafted dashboard. The template offers users access to a wide range of features and components that are essential when building powerful web applications.&nbsp;</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">5+ Ecommerce Pages</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Well-designed Error, General, and User pages</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Charts and Tables for Data Visualization</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Editors, Forms, Icons, Maps, and more</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Plenty of basic and advanced UI elements</span></li>
</ul>
<p><a class="button" href="https://www.bootstrapdash.com/product/star-admin-pro-laravel/" target="_blank" rel="noopener noreferrer">More Info</a>&nbsp;<a class="button" href="https://www.bootstrapdash.com/demo/star-laravel-pro/template/" target="_blank" rel="noopener noreferrer">Preview</a><a class="button" href="https://www.bootstrapdash.com/product/star-admin-laravel/" target="_blank" rel="noopener noreferrer">Free</a></p>
<h2><span style="font-weight: 400;">Purple Admin</span></h2>
<p><img decoding="async" class="alignnone wp-image-29445 size-full" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/purple-laravel-1.png" alt="purple laravel bootstrap template" width="2800" height="1800"></p>
<p><span style="font-weight: 400;">Purple is a beautifully designed admin template built with the Laravel framework. It was carefully designed to ease the process of web app development and increase productivity. The template is available to users in both dark and light versions too.&nbsp;</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">A neatly designed dashboard</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Basic and advanced UI elements</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">5+ Pre-built Apps</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Forms, Editors, Icons, Maps, and more</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">General, User, Error, and E-commerce pages</span></li>
</ul>
<p><a class="button" href="https://www.bootstrapdash.com/product/purple-laravel/" target="_blank" rel="noopener noreferrer">More Info</a>&nbsp;<a class="button" href="https://bootstrapdash.com/demo/purple/laravel/template/demo_1/" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">Stellar</span></h2>
<p><img decoding="async" class="alignnone wp-image-29446 size-full" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/1_stellar-laravel.png" alt="stellar laravel bootstrap template" width="2800" height="1800"></p>
<p><span style="font-weight: 400;">Stellar admin templates offer you everything you will need to build a stunning admin dashboard or web application. The template boasts a fine collection of essential components and useful elements that will allow you to easily and quickly build web applications. Stellar also features a beautiful and eye-catchy design.&nbsp;</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Tables &amp; Charts for data representation and visualization</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">3 Separate Maps</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Code and Text Editors</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Forms, Icons, Notifications, and more features</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">10 Stunning General Pages</span></li>
</ul>
<p><a class="button" href="https://www.bootstrapdash.com/product/stellar-laravel/" target="_blank" rel="noopener noreferrer">More Info</a>&nbsp;<a class="button" href="https://www.bootstrapdash.com/demo/stellar-admin/laravel/template/demo_1/" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">JustDo Laravel</span></h2>
<p><img decoding="async" loading="lazy" class="alignnone wp-image-29447 size-full" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/1_just-do-laravel.png" alt="just do laravel bootstrap template" width="2800" height="1800"></p>
<p><span style="font-weight: 400;">JustDo Laravel admin template features a simple, elegant, and well-designed dashboard. With JustDo, you will gain access to charts, tables, icons, maps, and plenty more useful components. The template that comes with both dark and light-themed versions also has horizontal and vertical layouts.&nbsp;</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Basic and advanced UI elements</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Code and Text Editor</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Five different icon sets</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">5+ Pre-built Apps</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Multiple General, Error, User, and Ecommerce pages&nbsp;</span></li>
</ul>
<p><a class="button" href="https://themeforest.net/item/justdo-laravel-responsive-admin-template/25909539?ref=web14" target="_blank" rel="noopener noreferrer">More Info</a>&nbsp;<a class="button" href="https://www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-light/" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">OneUI</span></h2>
<p><img decoding="async" loading="lazy" class="alignnone wp-image-16448 size-full" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/demo.pixelcave.com_oneui-remastered_be_pages_dashboard.htmlPreview.jpg" alt="one ui laravel bootstrap templates" width="1400" height="900"></p>
<p><span style="font-weight: 400;">Designed based on <a href="https://getbootstrap.com/">Bootstrap</a> 4, OneUI is an ideal candidate for developing powerful and complex web applications.&nbsp;</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Lightweight and incredibly flexible</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">PHP and HTML versions available</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Multiple E-commerce pages</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Neat and simple design</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Can be customized easily</span></li>
</ul>
<p><a class="button" href="https://themeforest.net/item/oneui-bootstrap-admin-dashboard-template-ui-framework-angularjs/11820082?ref=web14" target="_blank" rel="noopener noreferrer">More Info</a>&nbsp;<a class="button" href="https://preview.themeforest.net/item/oneui-bootstrap-admin-dashboard-template-ui-framework-angularjs/full_screen_preview/11820082?_ga=2.121919755.1270839360.1573558235-2086729678.1561697499?ref=web14" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">Vuexy</span></h2>
<p><img decoding="async" loading="lazy" class="alignnone wp-image-3476 size-large" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/Screenshot_2019-11-20-Vuexy-Vuejs-HTML-Laravel-Admin-Dashboard-Template-1024x739.png" alt="Vuexy laravel bootstrap templates" width="1024" height="739"></p>
<p><span style="font-weight: 400;">Vuexy is one of the most popular and widely used HTML, Laravel, and Vuejs admin dashboard template.</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Lazy loading, Code Splitting, and more features</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Multiple Dashboards</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">5 Workable Apps</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Video Player</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Wishlist, Checkout, and Payment pages&nbsp;</span></li>
</ul>
<p><a class="button" href="https://themeforest.net/item/vuexy-vuejs-html-laravel-admin-dashboard-template/23328599?ref=web14" target="_blank" rel="noopener noreferrer">Buy Now</a>&nbsp;<a class="button" href="https://preview.themeforest.net/item/vuexy-vuejs-html-laravel-admin-dashboard-template/full_screen_preview/23328599?_ga=2.237174144.1839223685.1574250335-812679127.1562227698?ref=web14" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">Codebase</span></h2>
<p><img decoding="async" loading="lazy" class="alignnone wp-image-16446 size-full" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/demo.pixelcave.com_codebase_be_pages_dashboard.phpPreview.png" alt="codebase laravel bootstrap templates" width="1400" height="900"></p>
<p><span style="font-weight: 400;">Codebase is another excellent Bootstrap Laravel template that has everything needed to build stunning web apps.</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Based on Bootstrap 4</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Clean and simple code</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">6 Attractive color schemes</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">More than 1100 Font icons</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Plenty of widgets and components&nbsp;</span></li>
</ul>
<p><a class="button" href="https://themeforest.net/item/codebase-bootstrap-4-admin-dashboard-template-ui-framework/20289243?ref=web14" target="_blank" rel="noopener noreferrer">More Info</a>&nbsp;<a class="button" href="https://preview.themeforest.net/item/codebase-bootstrap-4-admin-dashboard-template-ui-framework/full_screen_preview/20289243?_ga=2.171369504.1286387958.1573558075-2086729678.1561697499?ref=web14" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">Dashmix</span></h2>
<p><img decoding="async" loading="lazy" class="alignnone wp-image-16447 size-full" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/demo.pixelcave.com_dashmix_be_pages_dashboard.htmlPreview.jpg" alt="" width="1400" height="900"></p>
<p><span style="font-weight: 400;">Dashmix is a Laravel 6 starter kit and <a href="https://www.bootstrapdash.com/bootstrap-4-admin-templates/">Bootstrap 4 admin template</a> featuring a simple, unique, and eye-catchy design.&nbsp;</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Multiple Page layouts</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Icon Lists, Background Overlays, Date time picker, and more</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">6 Beautiful color schemes</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Flexible sidebars</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Detailed documentation&nbsp;</span></li>
</ul>
<p><a class="button" href="https://themeforest.net/item/dashmix-bootstrap-4-admin-dashboard-template/21682338?ref=web14" target="_blank" rel="noopener noreferrer">More Info</a>&nbsp;<a class="button" href="https://preview.themeforest.net/item/dashmix-bootstrap-4-admin-dashboard-template/full_screen_preview/21682338?_ga=2.218266393.1477791116.1573558058-2086729678.1561697499?ref=web14" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">Admire</span></h2>
<p><img decoding="async" loading="lazy" class="alignnone wp-image-16449 size-full" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/demo.admireadmin.com_admire2_Preview.jpg" alt="" width="1400" height="900"></p>
<p><span style="font-weight: 400;">Everything you will need to build a powerful web application will be available with the Admire Bootstrap Laravel template.</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">9 Elegant layouts</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">More than 60 page styles</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Over 1000 components</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">300+ Widgets</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">15+ Color skins&nbsp;</span></li>
</ul>
<p><a class="button" href="https://themeforest.net/item/admire-bootstrap-4-admin-template/18841413?ref=web14" target="_blank" rel="noopener noreferrer">More Info</a>&nbsp;<a class="button" href="https://preview.themeforest.net/item/admire-bootstrap-4-admin-template/full_screen_preview/18841413?_ga=2.186133036.4048273.1573557894-2086729678.1561697499?ref=web14" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">Veltrix</span></h2>
<p><img decoding="async" loading="lazy" class="alignnone wp-image-16455 size-full" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/themesbrand.com_veltrix_layouts_horizontal_index.htmlPreview.jpg" alt="" width="1400" height="900"></p>
<p><span style="font-weight: 400;">The modern and multipurpose admin and dashboard template, Veltrix ensures a fine user experience across different browsers and devices. </span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">PHP, AJAX, Laravel, Nodejs, and Reactjs versions available</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">&nbsp;Error, Register, and Login pages</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Google Maps and Datatables</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Drop Zone file upload feature</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Clean, simple, and unique design&nbsp;</span></li>
</ul>
<p><a class="button" href="https://themeforest.net/item/veltrix-the-ultimate-admin-dashboard-template/23359749?ref=web14" target="_blank" rel="noopener noreferrer">More Info</a>&nbsp;<a class="button" href="https://preview.themeforest.net/item/veltrix-the-ultimate-admin-dashboard-template/full_screen_preview/23359749?_ga=2.252255049.1153109871.1573557864-2086729678.1561697499?ref=web14" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">Devmix</span></h2>
<p><img decoding="async" loading="lazy" class="alignnone wp-image-16450 size-full" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/rtsolutionz.com_raven_laravel_devmix-laravel_indexPreview.jpg" alt="" width="1400" height="900"></p>
<p><span style="font-weight: 400;">The Bootstrap and Laravel template, Devmix gives you access to plenty of handy features and essential components.&nbsp;</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">3 Dashboards</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Over 100 elements</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Clean and simple code</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Calendar, Drop Zone, Image Cropper, and more</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Multiple page layouts&nbsp;</span></li>
</ul>
<p><a class="button" href="https://themeforest.net/item/devmix-bootstrap-4-laravel-admin-dashboard-template/23325221?ref=web14" target="_blank" rel="noopener noreferrer">More Info</a>&nbsp;<a class="button" href="https://preview.themeforest.net/item/devmix-bootstrap-4-laravel-admin-dashboard-template/full_screen_preview/23325221?_ga=2.1915889.1134344711.1573557787-2086729678.1561697499?ref=web14" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">Lucid Laravel</span></h2>
<p><span style="font-weight: 400;"><img decoding="async" loading="lazy" class="alignnone wp-image-16456 size-full" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/wrraptheme.com_templates_lucid_laravel_public_dashboard_analyticalPreview.jpg" alt="" width="1400" height="900">Lucid Laravel is a feature-packed and easy to use <strong>admin dashboard template</strong> suitable for building admin panels.</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">More than 90 page styles</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Over 10 well-designed dashboards</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">6 Color schemes</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">3000+ icons</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Google Fonts&nbsp;</span></li>
</ul>
<p><a class="button" href="https://themeforest.net/item/lucid-laravel-bootstrap-4-admin-template/23267359?ref=web14" target="_blank" rel="noopener noreferrer">More Info</a>&nbsp;<a class="button" href="https://preview.themeforest.net/item/lucid-laravel-bootstrap-4-admin-template/full_screen_preview/23267359?_ga=2.195678506.745586102.1573557746-2086729678.1561697499?ref=web14" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">Zare</span></h2>
<p><img decoding="async" loading="lazy" class="alignnone wp-image-16454 size-full" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/rtsolutionz.com_raven_laravel_zare-laravel_indexPreview.jpg" alt="" width="1400" height="900"></p>
<p><span style="font-weight: 400;">Designed based on the <a href="https://www.w3schools.com/bootstrap4/" target="_blank" rel="noopener noreferrer">latest version of Bootstrap</a>, Zare has an attractive design and eye-catchy color tone.</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Dark and light colored versions</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">More than 100 elements</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">400+ icons</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Dropdowns, Tooltipls, UI cards, and more</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Profile, Invoice, and Error pages</span></li>
</ul>
<p><a class="button" href="https://themeforest.net/item/zare-bootstrap-4-laravel-admin-dashboard-template/23403920?ref=web14" target="_blank" rel="noopener noreferrer">More Info</a>&nbsp;<a class="button" href="https://themeforest.net/item/zare-bootstrap-4-laravel-admin-dashboard-template/full_screen_preview/23403920?_ga=2.188631208.1462755055.1573557706-2086729678.1561697499?ref=web14" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">Infinio</span></h2>
<p><img decoding="async" loading="lazy" class="alignnone size-full wp-image-29440" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/infinio-laravel.png" alt="infinio laravel" width="2800" height="1800"></p>
<p><span style="font-weight: 400;">The Laravel and Bootstrap admin template, Infinio is an excellent choice when you are developing backend websites, CRM, CMS, and admin dashboards.</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">6 Attractive color schemes</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Dark and light themed versions</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">More than 3000 icons</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Inbox, Calendar, and Chat Application</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Excellent documentation&nbsp;</span></li>
</ul>
<p><a class="button" href="https://themeforest.net/item/infinio-laravel-bootstrap-admin-template/23323066?ref=web14" target="_blank" rel="noopener noreferrer">More Info</a>&nbsp;<a class="button" href="https://thememakker.com/templates/infinio/laravel/public/dashboard/index" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">Scutum&nbsp;</span></h2>
<p><img decoding="async" loading="lazy" class="alignnone wp-image-29442 size-full" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/scutum-laravel.png" alt="scutum laravel bootstrap templates" width="2800" height="1800"></p>
<p><span style="font-weight: 400;">Scutum, which is designed based on the UIkit 3 framework is available in different versions.</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Multiple Custom Pages</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Tabs, Filters, Dropdowns, Filters, and more</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">80+ Page styles</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">More than 5 integrated plugins</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Multiple charting libraries</span></li>
</ul>
<p><a class="button" href="https://themeforest.net/item/scutum-professional-material-design-uikit-admin-template/23542323?ref=web14" target="_blank" rel="noopener noreferrer">Buy Now</a>&nbsp;<a class="button" href="https://scutum-html.tzdthemes.com/" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">Argon Dashboard Laravel</span></h2>
<p><img decoding="async" loading="lazy" class="alignnone size-full wp-image-29441" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/argon-laravel.png" alt="argon laravel" width="2800" height="1800"></p>
<p><span style="font-weight: 400;">Argon is a bright and neatly designed Bootstrap Laravel template with an amazing dashboard.</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Clean and simple design</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Easy to use and customize</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Fully responsive design</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Striking color scheme</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Login, Profile, and Register pages&nbsp;</span></li>
</ul>
<p><a class="button" href="https://www.creative-tim.com/product/argon-dashboard-laravel?partner=120410" target="_blank" rel="noopener noreferrer">Free Download</a>&nbsp;<a class="button" href="https://argon-dashboard-laravel.creative-tim.com/home?partner=120410" target="_blank" rel="noopener noreferrer">Preview</a></p>
<h2><span style="font-weight: 400;">Material Dashboard Laravel</span></h2>
<p><img decoding="async" loading="lazy" class="alignnone size-full wp-image-29439" src="https://www.bootstrapdash.com/blog/wp-content/uploads/2023/07/material-dashboard-laravel.png" alt="material-dashboard-laravel" width="2800" height="1800"></p>
<p><span style="font-weight: 400;">Material is a well-designed and carefully crafted Laravel Bootstrap template whose design is inspired by the <a href="https://material.io/design/" target="_blank" rel="noopener noreferrer">Material Design of Google</a>.&nbsp;</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">Based on Bootstrap 4</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Modern and simple design</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Profile, Login, and Register pages</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Responsive design</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">Clean and well-commented code&nbsp;</span></li>
</ul>
<p><a class="button" href="https://www.creative-tim.com/product/material-dashboard-laravel?partner=120410" target="_blank" rel="noopener noreferrer">Free Download</a>&nbsp;<a class="button" href="https://material-dashboard-laravel.creative-tim.com/home?partner=120410" target="_blank" rel="noopener noreferrer">Preview</a></p>
						</div>
					</div>
										<div class="post-comments px-5">
						
<!-- You can start editing here. -->

<!--  -->

			<!-- If comments are open, but there are no comments. -->

	 <!--  -->
	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/blog/laravel-bootstrap-templates#respond" style="display:none;">Cancel reply</a></small></h3><form action="https://www.bootstrapdash.com/blog/wp-comments-post.php" method="post" id="commentform" class="comment-form"><p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> <span class="required-field-message">Required fields are marked <span class="required">*</span></span></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name" required="required"></p>
<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" autocomplete="email" required="required"></p>
<p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="text" value="" size="30" maxlength="200" autocomplete="url"></p>
<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
<p class="comment-form-comment"><label for="comment">Comment <span class="required">*</span></label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p><p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="16426" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
</p></form>	</div><!-- #respond -->
						</div>
				 
						
					</div> <!--  post archive end -->
	</div>

</div>
<div class="col-lg-3 pl-lg-5 my-5 ">
	    
		<div id="block-7" class="widget widget_block"><h3 class="widget-title">Featured Posts</h3><div class="wp-widget-group__inner-blocks"><p></p><ul class="custom-posts-list"><li><a href="https://www.bootstrapdash.com/blog/what-is-bootstrap-framework">What is Bootstrap? What are the Benefits of Bootstrap Templates?</a></li><li><a href="https://www.bootstrapdash.com/blog/streamline-your-website-for-customer-communication">How To Streamline Your Website For Customer Communication?</a></li><li><a href="https://www.bootstrapdash.com/blog/awesome-chatgpt-prompts-for-coders">50 Useful ChatGPT Prompts for Coders</a></li><li><a href="https://www.bootstrapdash.com/blog/top-google-analytics-alternatives">Top 10+ Google Analytics Alternatives For Your Website</a></li><li><a href="https://www.bootstrapdash.com/blog/pros-cons-using-bootstrap-web-development">The Pros and Cons of Using Bootstrap in Web Development</a></li></ul><p></p>
</div></div>	</div>
</div>
</div>

</section>
	<script type="text/javascript">
		var currentRequest = null; 
		function fetch(){
			var keyword=jQuery('#keyword').val();
			var len=keyword.length;
			if(len<3){
				jQuery('#datafetch').css('display','none');	
				jQuery('#datafetch').parent('.bd-search-results').removeClass('active');	
			}
			else{
				jQuery('#datafetch').css('display','block');
				jQuery('#bd-search-btn').hide();
				jQuery('#bd-search-loader').show();
				jQuery('#datafetch').parent('.bd-search-results').addClass('active');
			}


			currentRequest = jQuery.ajax({

				url: 'https://www.bootstrapdash.com/blog/wp-admin/admin-ajax.php',
				type: 'post',
				data: { action: 'data_fetch', keyword: jQuery('#keyword').val() },
				beforeSend : function()    {           
					if(currentRequest != null) {
						currentRequest.abort();
					}

				},
				success: function(data) {
					jQuery('#bd-search-btn').show();
					jQuery('#bd-search-loader').hide();
					jQuery('#datafetch').html( data );


				}
			});

		}
	</script>

	<script type="text/javascript" src="https://www.bootstrapdash.com/blog/wp-includes/js/comment-reply.min.js?ver=6.3.2" id="comment-reply-js"></script>
<script type="text/javascript" src="https://www.bootstrapdash.com/blog/wp-content/themes/bootstradash/assets/js/owl.carousel.min.js" id="owljs-js"></script>
<script type="text/javascript" src="https://www.bootstrapdash.com/blog/wp-content/themes/bootstradash/assets/js/custom-owl-carousel.js" id="customowljs-js"></script>
<script type="text/javascript" src="https://www.bootstrapdash.com/blog/wp-content/themes/bootstradash/bootstrap/js/bootstrap.bundle.min.js?ver=3.3.6" id="bootstrap-js"></script>
<script type="text/javascript" id="ajaxjs-js-extra">
/* <![CDATA[ */
var ajax_auth_object = {"ajaxurl":"https:\/\/www.bootstrapdash.com\/blog\/wp-admin\/admin-ajax.php","redirecturl":"https:\/\/www.bootstrapdash.com\/blog\/thank-you","loadingmessage":"Sending user info, please wait..."};
/* ]]> */
</script>
<script type="text/javascript" src="https://www.bootstrapdash.com/blog/wp-content/themes/bootstradash/assets/js/ajax-login-script.js" id="ajaxjs-js"></script>
<script type="text/javascript" src="https://www.bootstrapdash.com/blog/wp-content/themes/bootstradash/assets/js/bd.js" id="bdjs-js"></script>
</main>
<footer>
	<div class="container-fluid py-5 px-6">
	  <div class=" footer1 ">
	    <div>
	      <div class="textwidget custom-html-widget">
	        <div class="row">
	          <div class="col-12 col-lg-8">
	            <div class="row">
	              <div class="col-12 col-xl-3 col-sm-6 mb-5">
	                <div class="">
	                  <h3 class="footer-title">Products</h3>
	                  <ul>
	                    <li>
	                      <a href="https://www.bootstrapdash.com/premium-admin-templates/">Templates</a>
	                    </li>
	                    <li>
	                      <a href="https://www.bootstrapdash.com/free-landing-page-templates/">Free Themes</a>
	                    </li>
	                    <li>
	                      <a href="https://www.bootstrapdash.com/mega-bundle/">Bundles</a>
	                    </li>
	                    <li>
	                      <a href="https://www.bootstrapdash.com/ui-kit/">UI Kits</a>
	                    </li>
	                  </ul>
	                </div>
	              </div>
	              <div class="col-12 col-xl-3 col-sm-6 mb-5">
	                <div class="">
	                  <h3 class="footer-title">Resources</h3>
	                  <ul>
	                    <li>
	                      <a href="https://www.bootstrapdash.com/bootstrap-4-tutorial/introduction/">Bootstrap Tutorial</a>
	                    </li>
	                    <li>
	                      <a href="https://www.bootstrapdash.com/custom-ui-development/">Custom UI Development</a>
	                    </li>
	                    <li>
	                      <a href="https://www.bootstrapdash.com/blog/">Blog</a>
	                    </li>
	                  </ul>
	                </div>
	              </div>
	              <div class="col-12 col-xl-3 col-sm-6 mb-5">
	                <div class="">
	                  <h3 class="footer-title">Company</h3>
	                  <ul>
	                    <li>
	                      <a href="https://www.bootstrapdash.com/about-us/">About us</a>
	                    </li>
	                    <li>
	                      <a href="https://www.bootstrapdash.com/affiliate/">Become an affiliate</a>
	                    </li>
	                    <li>
	                      <a href="https://bootstrapdash.freshdesk.com/support/tickets/new">Get support</a>
	                    </li>
	                  </ul>
	                </div>
	              </div>
	              <div class="col-12 col-xl-3 col-sm-6 mb-5">
	                <div class="">
	                  <h3 class="footer-title">Legal</h3>
	                  <ul>
	                    <li>
	                      <a href="https://www.bootstrapdash.com/license/">Product License</a>
	                    </li>
	                    <li>
	                      <a href="https://www.bootstrapdash.com/terms-conditions/">Terms &amp; Conditions</a>
	                    </li>
	                    <li>
	                      <a href="https://www.bootstrapdash.com/privacy-policy/">Privacy Policy</a>
	                    </li>
	                    <li>
	                      <a href="https://www.bootstrapdash.com/cookie-policy/">Cookie Policy</a>
	                    </li>
	                  </ul>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-12 col-lg-4">
	            <div class="news-letter">
	              <h3 class="footer-title">Want more Bootstrap themes, templates, and UI tools?</h3>
	              <p>Subscribe to get updated when new templates release and to get special discount codes every month!</p>
	              <!-- Begin Mailchimp Signup Form -->
	              <div id="mc_embed_signup">
	                <form action="https://bootstrapdash.us4.list-manage.com/subscribe/post-json?u=ee767995c9acb17848b80a3cd&amp;id=d4565d388e&amp;c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
	                  <div id="mc_embed_signup_scroll">
	                    <div id="mce-responses" class="clear">
	                      <div class="response" id="mce-error-response" style="display:none"></div>
	                      <div class="response" id="mce-success-response" style="display:none"></div>
	                    </div>
	                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
	                      <input type="text" name="b_ee767995c9acb17848b80a3cd_d4565d388e" tabindex="-1" value="">
	                    </div>
	                    <div class="mc-field-group input-group">
	                      <input type="email" value="" name="mceEmail" class="form-control required email" id="mce-EMAIL" placeholder="Enter your email">
	                      <div class="input-group-append">
	                        <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button ">
	                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
	                            <path d="M8 0L6.59 1.41L12.17 7H0V9H12.17L6.59 14.59L8 16L16 8L8 0Z" fill="white"></path>
	                          </svg>
	                        </button>
	                      </div>
	                    </div>
	                  </div>
	                </form>
	                <p id="subscribeMsg" class="small mt-2 mb-0"></p>
	              </div>
	              <!--End mc_embed_signup-->
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="footer2 mb-5 mt-5 mt-lg-0">
	    <div>
	      <div class="textwidget custom-html-widget">
	        <div class="row">
	          <div class="col-12">
	            <h3 class="footer-title">Follow us on</h3>
	            <div class="social-icons d-sm-flex text-center text-sm-left">
	              <a href="https://www.facebook.com/bootstrapdash">
	                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	                  <path d="M21.9963 0.738281H1.97919C1.29378 0.738693 0.738144 1.2946 0.738281 1.98029V21.9974C0.738693 22.6828 1.2946 23.2384 1.98029 23.2383H12.7573V14.5371H9.83496V11.1313H12.7573V8.62495C12.7573 5.71838 14.5318 4.13635 17.1245 4.13635C18.3664 4.13635 19.4336 4.22891 19.7446 4.27025V7.30811H17.9567C16.5461 7.30811 16.2729 7.97841 16.2729 8.96223V11.1313H19.6458L19.2063 14.5371H16.2729V23.2383H21.9963C22.6821 23.2384 23.2381 22.6826 23.2383 21.9968C23.2383 21.9967 23.2383 21.9966 23.2383 21.9963V1.97919C23.238 1.29378 22.682 0.738144 21.9963 0.738281Z" fill="#B8BABE"></path>
	                </svg>
	              </a>
	              <a href="https://www.instagram.com/bootstrapdash/">
	                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	                  <g clip-path="url(#clip0)">
	                    <path d="M23.9773 7.05607C23.9211 5.78085 23.7149 4.90416 23.4195 4.14449C23.1147 3.33812 22.6459 2.61617 22.0316 2.01602C21.4315 1.40652 20.7048 0.932921 19.9077 0.632936C19.1437 0.337529 18.2715 0.131312 16.9963 0.0750879C15.7116 0.0141019 15.3037 0 12.0453 0C8.78685 0 8.379 0.0141019 7.09903 0.0703262C5.82381 0.126551 4.94712 0.332951 4.18763 0.628174C3.38108 0.932922 2.65914 1.40176 2.05898 2.01602C1.44949 2.61617 0.976072 3.34288 0.675904 4.13991C0.380498 4.90416 0.174281 5.77609 0.118057 7.0513C0.0570706 8.33604 0.0429688 8.7439 0.0429688 12.0023C0.0429688 15.2608 0.0570706 15.6686 0.113295 16.9486C0.169519 18.2238 0.375919 19.1005 0.671326 19.8602C0.976072 20.6666 1.44949 21.3885 2.05898 21.9887C2.65914 22.5982 3.38584 23.0718 4.18287 23.3718C4.94712 23.6672 5.81905 23.8734 7.09445 23.9296C8.37424 23.986 8.78227 23.9999 12.0407 23.9999C15.2992 23.9999 15.707 23.986 16.987 23.9296C18.2622 23.8734 19.1389 23.6672 19.8984 23.3718C21.5113 22.7482 22.7865 21.4729 23.4101 19.8602C23.7053 19.096 23.9117 18.2238 23.968 16.9486C24.0242 15.6686 24.0383 15.2608 24.0383 12.0023C24.0383 8.7439 24.0335 8.33604 23.9773 7.05607ZM21.8161 16.8549C21.7644 18.027 21.5675 18.6599 21.4034 19.0819C21.0002 20.1274 20.1703 20.9572 19.1248 21.3605C18.7028 21.5246 18.0653 21.7215 16.8978 21.7729C15.6319 21.8293 15.2523 21.8433 12.0501 21.8433C8.84784 21.8433 8.46343 21.8293 7.20213 21.7729C6.03003 21.7215 5.3971 21.5246 4.97514 21.3605C4.45484 21.1682 3.98123 20.8634 3.59682 20.4649C3.19831 20.0758 2.89356 19.6069 2.70126 19.0866C2.53717 18.6647 2.34029 18.027 2.28883 16.8596C2.23242 15.5937 2.2185 15.2139 2.2185 12.0117C2.2185 8.80946 2.23242 8.42505 2.28883 7.16394C2.34029 5.99183 2.53717 5.3589 2.70126 4.93694C2.89356 4.41645 3.19831 3.94303 3.60158 3.55843C3.99057 3.15992 4.45941 2.85517 4.9799 2.66306C5.40186 2.49896 6.03955 2.30209 7.2069 2.25044C8.47277 2.19422 8.8526 2.18011 12.0546 2.18011C15.2616 2.18011 15.6413 2.19422 16.9026 2.25044C18.0747 2.30209 18.7076 2.49896 19.1296 2.66306C19.6499 2.85517 20.1235 3.15992 20.5079 3.55843C20.9064 3.94761 21.2111 4.41645 21.4034 4.93694C21.5675 5.3589 21.7644 5.99641 21.8161 7.16394C21.8723 8.42981 21.8864 8.80946 21.8864 12.0117C21.8864 15.2139 21.8723 15.589 21.8161 16.8549Z" fill="#B8BABE"></path>
	                    <path d="M12.0442 5.83691C8.64049 5.83691 5.87891 8.59832 5.87891 12.0022C5.87891 15.406 8.64049 18.1674 12.0442 18.1674C15.448 18.1674 18.2094 15.406 18.2094 12.0022C18.2094 8.59832 15.448 5.83691 12.0442 5.83691ZM12.0442 16.0014C9.83604 16.0014 8.04492 14.2105 8.04492 12.0022C8.04492 9.79386 9.83604 8.00293 12.0442 8.00293C14.2525 8.00293 16.0434 9.79386 16.0434 12.0022C16.0434 14.2105 14.2525 16.0014 12.0442 16.0014Z" fill="#B8BABE"></path>
	                    <path d="M19.8925 5.59336C19.8925 6.3882 19.248 7.03267 18.453 7.03267C17.6581 7.03267 17.0137 6.3882 17.0137 5.59336C17.0137 4.79835 17.6581 4.15405 18.453 4.15405C19.248 4.15405 19.8925 4.79835 19.8925 5.59336Z" fill="#B8BABE"></path>
	                  </g>
	                  <defs>
	                    <clipPath id="clip0">
	                      <rect width="24" height="24" fill="white"></rect>
	                    </clipPath>
	                  </defs>
	                </svg>
	              </a>
	              <a href="https://twitter.com/bootstrapdash">
	                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	                  <path d="M7.81828 21.0103C16.3093 21.0103 20.9527 13.9757 20.9527 7.87588C20.9527 7.67609 20.9485 7.47712 20.9396 7.27926C21.8409 6.6276 22.6242 5.81439 23.2423 4.88878C22.4152 5.25657 21.5249 5.50384 20.5913 5.6157C21.5443 5.04399 22.2761 4.13997 22.6212 3.0623C21.7293 3.59109 20.7414 3.97526 19.6899 4.18276C18.8476 3.28549 17.6481 2.72437 16.3202 2.72437C13.771 2.72437 11.7036 4.79163 11.7036 7.33994C11.7036 7.70237 11.7442 8.05462 11.8233 8.39256C7.9867 8.19951 4.58446 6.36272 2.30791 3.56949C1.91163 4.25156 1.68294 5.04412 1.68294 5.8898C1.68294 7.49116 2.49793 8.90525 3.73714 9.73221C2.9798 9.70896 2.26842 9.50105 1.64648 9.15499C1.64579 9.17439 1.64579 9.19324 1.64579 9.21388C1.64579 11.4496 3.23697 13.3162 5.3495 13.7392C4.96148 13.8447 4.55323 13.9016 4.13218 13.9016C3.83524 13.9016 3.54574 13.8724 3.26449 13.8183C3.85217 15.6525 5.55645 16.9872 7.57693 17.0246C5.9969 18.263 4.00655 19.0006 1.84338 19.0006C1.47132 19.0006 1.10352 18.9793 0.742188 18.9367C2.78524 20.2462 5.21122 21.0104 7.81842 21.0104" fill="#B8BABE"></path>
	                </svg>
	              </a>
	              <a href="https://www.linkedin.com/in/bootstrapdash/">
	                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	                  <path d="M3.46687 1.21899C1.817 1.21899 0.738281 2.30238 0.738281 3.72635C0.738281 5.11887 1.78487 6.23315 3.40356 6.23315H3.43488C5.11702 6.23315 6.16388 5.11887 6.16388 3.72635C6.13243 2.30238 5.11702 1.21899 3.46687 1.21899Z" fill="#B8BABE"></path>
	                  <path d="M1.02344 8.21436H5.84671V22.7253H1.02344V8.21436Z" fill="#B8BABE"></path>
	                  <path d="M17.6858 7.87354C15.0838 7.87354 13.339 10.3185 13.339 10.3185V8.21411H8.51562V22.7252H13.3388V14.6216C13.3388 14.1878 13.3702 13.7547 13.4977 13.4444C13.8463 12.5782 14.6398 11.6807 15.9723 11.6807C17.7177 11.6807 18.4157 13.0114 18.4157 14.9622V22.7252H23.2386V14.4048C23.2386 9.94762 20.8589 7.87354 17.6858 7.87354Z" fill="#B8BABE"></path>
	                </svg>
	              </a>
	              <a href="https://dribbble.com/bootstrapdash">
	                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	                  <g clip-path="url(#clip0)">
	                    <path d="M12 0.000976562C5.38313 0.000976562 0 5.3841 0 12.0008C0 18.6176 5.38313 24.0007 12 24.0007C18.6169 24.0007 24 18.6176 24 12.0008C24 5.3841 18.6169 0.000976562 12 0.000976562ZM19.8199 5.6604C21.1671 7.31866 21.9965 9.41172 22.0654 11.6933C19.57 11.1767 17.3103 11.2374 15.3155 11.6285C14.9543 10.7838 14.5804 9.97908 14.203 9.21854C16.3755 8.28266 18.2667 7.08733 19.8199 5.6604ZM18.4681 4.28652C16.9264 5.69379 15.1397 6.73576 13.3102 7.50504C11.9674 5.0495 10.6826 3.20036 9.9 2.14953C10.5777 2.00515 11.2799 1.9277 12 1.9277C14.4607 1.9277 16.7169 2.81579 18.4681 4.28652ZM7.95402 2.77879C8.545 3.5446 9.95267 5.46207 11.4648 8.19018C7.66449 9.42829 3.97701 9.63689 2.20507 9.65629C2.94364 6.57096 5.10427 4.03399 7.95402 2.77879ZM1.93725 11.5879C1.95626 11.5879 1.97463 11.588 1.99403 11.588C3.21839 11.588 5.46161 11.5057 8.1025 11.0241C9.6092 10.7494 11.0379 10.3796 12.3785 9.92128C12.7275 10.6168 13.0745 11.3505 13.4109 12.1195C11.5337 12.7239 9.95074 13.5935 8.69683 14.4569C6.59414 15.9049 5.12109 17.5114 4.31675 18.5047C2.82753 16.7484 1.92672 14.4785 1.92672 12.0008C1.92672 11.8624 1.9316 11.7251 1.93725 11.5879ZM5.70515 19.8566C6.39761 18.9847 7.80707 17.3977 9.84593 16.0052C11.2315 15.0588 12.665 14.3557 14.1407 13.8942C14.9969 16.1135 15.7279 18.5657 16.1638 21.1695C14.8937 21.7485 13.4846 22.074 12 22.074C9.6196 22.074 7.43097 21.2423 5.70515 19.8566ZM17.9364 20.132C17.4872 17.7407 16.8173 15.4922 16.0429 13.4373C17.9478 13.1159 19.9165 13.1822 21.9385 13.6364C21.5025 16.294 20.0236 18.604 17.9364 20.132Z" fill="#B8BABE"></path>
	                  </g>
	                  <defs>
	                    <clipPath id="clip1">
	                      <rect width="24" height="24" fill="white"></rect>
	                    </clipPath>
	                  </defs>
	                </svg>
	              </a>
	              <a href="https://github.com/BootstrapDash">
	                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	                  <g clip-path="url(#clip0)">
	                    <path d="M12 0.500244C5.37 0.500244 0 5.78024 0 12.2922C0 17.5032 3.438 21.9222 8.205 23.4802C8.805 23.5912 9.025 23.2262 9.025 22.9132C9.025 22.6332 9.015 21.8912 9.01 20.9082C5.672 21.6192 4.968 19.3262 4.968 19.3262C4.422 17.9652 3.633 17.6012 3.633 17.6012C2.546 16.8702 3.717 16.8852 3.717 16.8852C4.922 16.9672 5.555 18.1002 5.555 18.1002C6.625 19.9032 8.364 19.3822 9.05 19.0812C9.158 18.3182 9.467 17.7992 9.81 17.5042C7.145 17.2092 4.344 16.1952 4.344 11.6772C4.344 10.3902 4.809 9.33824 5.579 8.51324C5.444 8.21524 5.039 7.01624 5.684 5.39224C5.684 5.39224 6.689 5.07624 8.984 6.60124C9.944 6.33924 10.964 6.20924 11.984 6.20324C13.004 6.20924 14.024 6.33924 14.984 6.60124C17.264 5.07624 18.269 5.39224 18.269 5.39224C18.914 7.01624 18.509 8.21524 18.389 8.51324C19.154 9.33824 19.619 10.3902 19.619 11.6772C19.619 16.2072 16.814 17.2042 14.144 17.4942C14.564 17.8482 14.954 18.5712 14.954 19.6762C14.954 21.2542 14.939 22.5222 14.939 22.9052C14.939 23.2142 15.149 23.5832 15.764 23.4652C20.565 21.9172 24 17.4952 24 12.2922C24 5.78024 18.627 0.500244 12 0.500244Z" fill="#B8BABE"></path>
	                  </g>
	                  <defs>
	                    <clipPath id="clip2">
	                      <rect width="24" height="24" fill="white"></rect>
	                    </clipPath>
	                  </defs>
	                </svg>
	              </a>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="footer3 pt-5 border-top">
	    <div>
	      <div class="textwidget custom-html-widget">
	        <div class="row">
	          <div class="col-12 col-md-9">
	            <div class="">
	              <p class="mb-0 ">© 2023 BootstrapDash - All right reserved</p>
	            </div>
	          </div>
	          <div class="col-12 col-md-3 mt-5 mt-md-0 text-center text-md-right text-sm-left">
	            <img src="https://www.bootstrapdash.com/blog/wp-content/themes/bootstradash/images/payment-cards.svg" alt="payment-cards">
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
</footer>

</body>

</html>
