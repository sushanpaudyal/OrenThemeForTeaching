<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="OREN is responsive multi-purpose HTML5 template compatible with Bootstrap 4. Take your Startup business website to the next level. It is designed for agency, creative studio, freelance, personal, corporate digital, businesses or any type of person or business who wants to showcase their work, services and professional way.">
    <meta name="keywords" content="agency, business, corporate, creative studio, freelance, gradient, multipurpose. photography, parallax, personal, responsive">
    <meta name="author" content="rometheme.net">


  <?php wp_head(); ?>




</head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>

	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out" style="  background: #e63f64 url(<?php echo get_template_directory_uri() ?>/assets/images/cd-top-arrow.svg) no-repeat center 50%;">Top</a>

	<!-- HEADER -->
    <div class="header header-1">

		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav id="navbar-example" class="navbar navbar-expand-lg">

        <?php if(has_custom_logo() || is_customize_preview()){
          the_custom_logo();
        } else { ?>

			        <a class="navbar-brand" href="index.html">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="" />
					</a>
        <?php } ?>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav ml-auto">
			            	<li class="nav-item dropdown dmenu">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          HOME
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="index.html">Creative</a>
	          						<a class="dropdown-item" href="index-business.html">Business</a>
	          						<a class="dropdown-item" href="index-corporate.html">Corporate</a>
	          						<a class="dropdown-item" href="index-app.html">App</a>
	          						<a class="dropdown-item" href="index-personal.html">Personal</a>
	          						<a class="dropdown-item" href="index-portfolio.html">Portfolio</a>
							    </div>
			                </li>
			                <li class="nav-item dropdown dmenu">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          PAGES
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="page-about.html">About Us 01</a>
			                    	<a class="dropdown-item" href="page-about-2.html">About Us 02</a>
			                    	<a class="dropdown-item" href="page-about-me.html">About Me</a>
			                    	<a class="dropdown-item" href="page-services.html">Services 01</a>
			                    	<a class="dropdown-item" href="page-services-2.html">Services 02</a>
			                    	<a class="dropdown-item" href="page-services-3.html">Services 03</a>
			                    	<a class="dropdown-item" href="page-team-member.html">Team Member</a>
			                    	<a class="dropdown-item" href="page-career.html">Career</a>
			                    	<a class="dropdown-item" href="page-page-404.html">404 Page</a>
							    </div>
			                </li>
			                <li class="nav-item dropdown dmenu">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          WORK
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="work-portfolio.html">Porfolio 01</a>
	          						<a class="dropdown-item" href="work-portfolio-2.html">Porfolio 02</a>
	          						<a class="dropdown-item" href="work-portfolio-3.html">Porfolio 03</a>
	          						<a class="dropdown-item" href="work-portfolio-4.html">Porfolio 04</a>
	          						<a class="dropdown-item" href="work-single.html">Single Work</a>
							    </div>
			                </li>
			                <li class="nav-item dropdown dmenu">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          BLOG
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="blog.html">Blog 01</a>
			                    	<a class="dropdown-item" href="blog-2.html">Blog 02</a>
	          						<a class="dropdown-item" href="blog-single.html">Single Blog</a>
							    </div>
			                </li>
			                <li class="nav-item dropdown dmenu">
			                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          CONTACT
						        </a>
			                    <div class="dropdown-menu">
			                    	<a class="dropdown-item" href="contact.html">Contact 01</a>
			                    	<a class="dropdown-item" href="contact-2.html">Contact 02</a>
			                    	<a class="dropdown-item" href="contact-3.html">Contact 03</a>
							    </div>
			                </li>
			            </ul>
			            <div class="sosmed-icon no-bg-hover float-right d-inline-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
			        </div>
			    </nav> <!-- -->

			</div>
		</div>

    </div>
