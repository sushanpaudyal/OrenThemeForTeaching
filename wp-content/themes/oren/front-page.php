<?php get_header(); ?>
	<!-- BANNER -->
	<div id="oc-fullslider" class="banner owl-carousel">

		<?php
		   $args = array(
          'post_type' => 'sliders',
					'posts_per_page' => -1,
					'orderby' => 'title',
					'order' => 'ASC'
			 );
			 $sliders = new WP_Query($args);
			 while($sliders->have_posts()) : $sliders->the_post();
   ?>
        <div class="owl-slide">
        	<div class="item">
	            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="Slider">
	            <div class="slider-pos">
		            <div class="container">
		            	<div class="wrap-caption text-center">
			                <h1 class="caption-heading"><?php the_title(); ?></h1>
			                <p class=""><?php the_content(); ?></p>
			                <a href="#" class="btn btn-primary">Learn More</a> <a href="#" class="btn btn-ghost-light">Get Started</a>
			            </div>
		            </div>
	            </div>
        	</div>
        </div>

<?php endwhile; wp_reset_postdata(); ?>
    </div>

	<div class="clearfix"></div>

	<!-- ABOUT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row mb-5">
					<div class="col-sm-12 col-md-12">

						<h2 class="section-heading text-primary text-center no-after mb-4">
							Welcome to Oren.
						</h2>
						<p class="subheading text-center mb-4">We provide high standar clean website for your business solutions</p>
					</div>
				</div>
				<div class="row">
					<!-- Item 1 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-icon-info-3">
							<div class="info-icon">
								<i class="fa fa-trophy"></i>
								<h4 class="text-black">Best In Pekanbaru</h4>
							</div>
							<div class="info-text">
								Dolor sit amet, dolor gravida, placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.
							</div>
						</div>
					</div>
					<!-- Item 2 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-icon-info-3">
							<div class="info-icon">
								<i class="fa fa-users"></i>
								<h4 class="text-black">Creative Team</h4>
							</div>
							<div class="info-text">
								Dolor sit amet, dolor gravida, placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.
							</div>
						</div>
					</div>
					<!-- Item 3 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-icon-info-3">
							<div class="info-icon">
								<i class="fa fa-rocket"></i>
								<h4 class="text-black">Awesome Support</h4>
							</div>
							<div class="info-text">
								Dolor sit amet, dolor gravida, placerat liberolorem ipsum dolor consectetur adipiscing elit, sed do eiusmod.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- WHO WE ARE -->
	<div class="section bg-gray-light">
		<div class="content-wrap pt-0 pb-0">
			<div class="sideright-img bgi-cover-center" data-background="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-900x600.jpg">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-900x600.jpg" alt="" class="img-fluid">
			</div>
			<div class="container">
				<div class="row align-items-center">

					<div class="col-sm-12 col-md-12 col-lg-6">
						<div class="spacer-content"></div>
						<h2 class="section-heading text-primary no-after mb-4">
							We create, design, & develop.
						</h2>
						<p class="subheading mb-4"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</em></p>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
						<div class="spacer-30"></div>
						<a href="#" class="btn btn-primary">Learn More</a>
						<div class="spacer-content"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- PORTFOLIO -->
	<div id="projects">
		<div class="content-wrap">
			<div class="container">

				<div class="row mb-5">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center text-primary no-after mb-5">
							Recent Works
						</h2>
						<p class="subheading text-center">We provide high standar clean website for your business solutions</p>
					</div>
				</div>

				<div class="row popup-gallery gutter-5">
					<div class="col-12 col-sm-6 col-md-4">
						<div class="box-gallery">
							<a href="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" title="Gallery #1">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4">
						<div class="box-gallery">
							<a href="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" title="Gallery #2">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4">
						<div class="box-gallery">
							<a href="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" title="Gallery #3">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4">
						<div class="box-gallery">
							<a href="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" title="Gallery #4">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4">
						<div class="box-gallery">
							<a href="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" title="Gallery #5">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4">
						<div class="box-gallery">
							<a href="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" title="Gallery #6">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" alt="" class="img-fluid">
								<div class="project-info">
									<div class="project-icon">
										<span class="fa fa-search"></span>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="text-center mt-5">
					<a href="#" class="btn btn-primary">View All Work</a>
				</div>

			</div>
		</div>
	</div>

	<!-- WHAT CLIENT'S SAY -->
	<div class="section bgi-cover-center" data-background="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-1920x900-3.jpg">
		<div class="content-wrap">
			<div class="container">

				<div class="row mb-5">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center no-after text-primary mb-5">
							What Client's Say
						</h2>
						<p class="subheading text-center text-white">We provide high standar clean website for your business solutions</p>
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-md-12">
						<div id="carousel-2">
							<!-- Item 1 -->
							<div class="item">
								<div class="rs-testimonial-2 text-white">
								   	<div class="body">
								      	<p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum.</em> </p>
								   	</div>
								   	<div class="media">
								   		<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-400x400.jpg" alt="" class="rounded-circle">
								   	</div>
							      	<div class="rs-testimonial-footer text-primary">
							      		John Doel <cite title="Source Title" class="text-white">Graphicriver</cite>
							      	</div>
								</div>
							</div>

							<!-- Item 2 -->
							<div class="item">
								<div class="rs-testimonial-2 text-white">
								   	<div class="body">
								      	<p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum.</em> </p>
								   	</div>
								   	<div class="media">
								   		<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-400x400.jpg" alt="" class="rounded-circle">
								   	</div>
							      	<div class="rs-testimonial-footer text-primary">
							      		Laura Doel <cite title="Source Title" class="text-white">Themeforest</cite>
							      	</div>
								</div>
							</div>

							<!-- Item 3 -->
							<div class="item">
								<div class="rs-testimonial-2 text-white">
								   	<div class="body">
								      	<p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum.</em> </p>
								   	</div>
								   	<div class="media">
								   		<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-400x400.jpg" alt="" class="rounded-circle">
								   	</div>
							      	<div class="rs-testimonial-footer text-primary">
							      		Donju Doel <cite title="Source Title" class="text-white">Source Title</cite>
							      	</div>
								</div>
							</div>

							<!-- Item 4 -->
							<div class="item">
								<div class="rs-testimonial-2 text-white">
								   	<div class="body">
								      	<p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum.</em> </p>
								   	</div>
								   	<div class="media">
								   		<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-400x400.jpg" alt="" class="rounded-circle">
								   	</div>
							      	<div class="rs-testimonial-footer text-primary">
							      		John Doel <cite title="Source Title" class="text-white">Themeforest</cite>
							      	</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- MEET OREN TEAM -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row mb-5">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center no-after text-primary mb-5">
							Meet Oren Team
						</h2>
						<p class="subheading text-center">We provide high standar clean website for your business solutions</p>
					</div>
				</div>

				<div class="row">

					<!-- Item 1 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-team-1">
							<div class="desc">
								<p>Hello, I am Doel graphic designer & web developer at Rometheme.net. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<div class="media shadow"><img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-400x400.jpg" alt="" class="img-fluid"></div>
							<div class="body">
								<div class="title">John Doel</div>
								<div class="position">Web Developer</div>
								<ul class="social-icon">
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-skype"></span></a></li>
									<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Item 2 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-team-1">
							<div class="desc">
								<p>Hello, I am Doel graphic designer & web developer at Rometheme.net. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<div class="media shadow"><img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-400x400.jpg" alt="" class="img-fluid"></div>
							<div class="body">
								<div class="title">Pinky Doel</div>
								<div class="position">Marketing</div>
								<ul class="social-icon">
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-skype"></span></a></li>
									<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- Item 3 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="rs-team-1">
							<div class="desc">
								<p>Hello, I am Doel graphic designer & web developer at Rometheme.net. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
							<div class="media shadow"><img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-400x400.jpg" alt="" class="img-fluid"></div>
							<div class="body">
								<div class="title">Yahdi Romelo</div>
								<div class="position">Graphic Designer</div>
								<ul class="social-icon">
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-skype"></span></a></li>
									<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- WHO WE ARE -->
	<div class="section bg-gray-light">
		<div class="content-wrap pt-0 pb-0">
			<div class="sideleft-img bgi-cover-center" data-background="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-900x600.jpg">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-900x600.jpg" alt="" class="img-fluid">
			</div>
			<div class="container">
				<div class="row align-items-center">

					<div class="col-sm-12 col-md-12 col-lg-6 offset-lg-6">
						<div class="spacer-content"></div>
						<h2 class="section-heading text-primary no-after mb-4">
							Oren Skills
						</h2>
						<p class="subheading mb-5"><em>We provide high standar clean website for your business solutions</em></p>
						<div class="rs-progress mb-4">
	              			<div class="name">Development</div>
	          			  	<div class="persen">80%</div>
	              			<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="rs-progress mb-4">
	              			<div class="name">Html</div>
	          			  	<div class="persen">90%</div>
	              			<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="rs-progress mb-4">
	              			<div class="name">Marketing</div>
	          			  	<div class="persen">70%</div>
	              			<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="rs-progress mb-4">
	              			<div class="name">Adobe Apps</div>
	          			  	<div class="persen">80%</div>
	              			<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="spacer-content"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- FUN FACT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<!-- Item 1 -->
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="rs-icon-funfact">
							<div class="icon">
								<i class="fa fa-rocket"></i>
							</div>
							<div class="body-content">
								<h2 class="text-black">270</h2>
								<p class="uk18">Project Completed</p>
							</div>
						</div>
					</div>

					<!-- Item 2 -->
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="rs-icon-funfact">
							<div class="icon">
								<i class="fa fa-trophy"></i>
							</div>
							<div class="body-content">
								<h2 class="text-black">430</h2>
								<p class="uk18">Winner Awards</p>
							</div>
						</div>
					</div>

					<!-- Item 3 -->
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="rs-icon-funfact">
							<div class="icon">
								<i class="fa fa-users"></i>
							</div>
							<div class="body-content">
								<h2 class="text-black">69</h2>
								<p class="uk18">Team Creative</p>
							</div>
						</div>
					</div>

					<!-- Item 4 -->
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="rs-icon-funfact">
							<div class="icon">
								<i class="fa fa-coffee"></i>
							</div>
							<div class="body-content">
								<h2 class="text-black">815</h2>
								<p class="uk18">Clients Order</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- OUR CLIENTS -->
	<div class="section bgi-cover-center" data-background="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-1920x900-3.jpg">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center text-primary no-after mb-5">
							Our Clients
						</h2>
						<p class="subheading text-center text-white">We provide high standar clean website for your business solutions</p>
					</div>
				</div>
				<div class="row">
					<div class="col-6 col-sm-4 col-md-4 col-lg-2">
						<div class="client-img">
							<a href="#">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/client1w.png" alt="" class="img-fluid">
							</a>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-md-4 col-lg-2">
						<div class="client-img">
							<a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/client2w.png" alt="" class="img-fluid"></a>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-md-4 col-lg-2">
						<div class="client-img">
							<a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/client3w.png" alt="" class="img-fluid"></a>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-md-4 col-lg-2">
						<div class="client-img">
							<a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/client4w.png" alt="" class="img-fluid"></a>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-md-4 col-lg-2">
						<div class="client-img">
							<a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/client5w.png" alt="" class="img-fluid"></a>
						</div>
					</div>

					<div class="col-6 col-sm-4 col-md-4 col-lg-2">
						<div class="client-img">
							<a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/client6w.png" alt="" class="img-fluid"></a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- OUR ARTICLES -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading text-center text-primary no-after mb-5">
							From Our Blog
						</h2>
						<p class="subheading text-center">We provide high standar clean website for your business solutions</p>
					</div>
				</div>

				<div class="row mt-4">

					<!-- Item 1 -->
					<div class="col-12 col-sm-12 col-md-4 mb-5">
						<div class="rs-news-1">
							<div class="meta-category">Desain</div>
							<div class="media">
								<a href="blog-single.html">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="body">
								<div class="title"><a href="blog-single.html">Cup Mockup with Orange</a></div>
								<div class="meta-date">May 12, 2017</div>
								<p>We provide high quality design at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores...</p>
							</div>
						</div>
					</div>

					<!-- Item 2 -->
					<div class="col-12 col-sm-12 col-md-4 mb-5">
						<div class="rs-news-1">
							<div class="meta-category">Resume</div>
							<div class="media">
								<a href="blog-single.html">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="body">
								<div class="title"><a href="blog-single.html">Brand Identity Tutorial</a></div>
								<div class="meta-date">May 12, 2017</div>
								<p>We provide high quality design at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores...</p>
							</div>
						</div>
					</div>

					<!-- Item 3 -->
					<div class="col-12 col-sm-12 col-md-4 mb-5">
						<div class="rs-news-1">
							<div class="meta-category">Print</div>
							<div class="media">
								<a href="blog-single.html">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/dummy-img-600x400.jpg" alt="" class="img-fluid">
								</a>
							</div>
							<div class="body">
								<div class="title"><a href="blog-single.html">Brown Tshirt Label</a></div>
								<div class="meta-date">May 12, 2017</div>
								<p>We provide high quality design at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores...</p>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<!-- CTA -->
	<div class="section cta bg-gradient-primary">
		<div class="content-wrap py-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-sm-12 col-md-12">
						<div class="cta-1">
			              	<div class="body-text text-white mb-3">
			                	<h2 class="my-1">Interested in Hiring Us?</h2>
			                	<p class="uk18 mb-0">We provide high standar clean website for your business solutions</p>
			              	</div>
			              	<div class="body-action">
			                	<a href="#" class="btn btn-light">Let's Talk Now</a>
			              	</div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
