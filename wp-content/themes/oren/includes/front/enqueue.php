<?php
 function oren_styles(){
  wp_register_style('custom_css', get_template_directory_uri() . '/style.css' );
  wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css' );
  wp_register_style('fontawesome', get_template_directory_uri() . '/assets/css/vendor/font-awesome.min.css' );
  wp_register_style('owlcarousel', get_template_directory_uri() . '/assets/css/vendor/owl.carousel.min.css' );
  wp_register_style('themedefault', get_template_directory_uri() . '/assets/css/vendor/owl.theme.default.min.css' );
  wp_register_style('magnific', get_template_directory_uri() . '/assets/css/vendor/magnific-popup.css' );
  wp_register_style('animate', get_template_directory_uri() . '/assets/css/vendor/animate.min.css' );
  wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css' );
  wp_enqueue_style('custom_css');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('owlcarousel');
  wp_enqueue_style('themedefault');
  wp_enqueue_style('magnific');
  wp_enqueue_style('animate');
  wp_enqueue_style('style');


   wp_register_script('bootstrap_js', get_template_directory_uri(). '/assets/js/vendor/bootstrap.min.js', array('jquery'), false, true);

   wp_register_script('modernizr', get_template_directory_uri(). '/assets/js/vendor/modernizr.min.js', array('jquery'), false, true);


   wp_register_script('owlcarouseljs', get_template_directory_uri(). '/assets/js/vendor/owl.carousel.js', array('jquery'), false, true);
   wp_register_script('popup', get_template_directory_uri(). '/assets/js/vendor/jquery.magnific-popup.min.js', array('jquery'), false, true);
   wp_register_script('pkgd', get_template_directory_uri(). '/assets/js/vendor/isotope.pkgd.min.js', array('jquery'), false, true);
   wp_register_script('loaded', get_template_directory_uri(). '/assets/js/vendor/imagesloaded.pkgd.min.js', array('jquery'), false, true);
   wp_register_script('validator', get_template_directory_uri(). '/assets/js/vendor/validator.min.js', array('jquery'), false, true);
   wp_register_script('formscripts', get_template_directory_uri(). '/assets/js/vendor/form-scripts.js', array('jquery'), false, true);
   wp_register_script('scripts', get_template_directory_uri(). '/assets/js/script.js', array('jquery'), false, true);

   wp_enqueue_script('modernizr');
   wp_enqueue_script('jquery');
   wp_enqueue_script('bootstrap_js');
   wp_enqueue_script('owlcarouseljs');
   wp_enqueue_script('popup');
   wp_enqueue_script('pkgd');
   wp_enqueue_script('loaded');
   wp_enqueue_script('validator');
   wp_enqueue_script('formscripts');
   wp_enqueue_script('scripts');




 }
 add_action('wp_enqueue_scripts', 'oren_styles');



 ?>
