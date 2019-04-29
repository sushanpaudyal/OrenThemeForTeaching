<?php
   function oren_setup_theme(){
     add_theme_support('title-tag');
     add_theme_support('custom-logo');
     add_theme_support('post-thumbnails');
     add_image_size('team', 400,400, true);
   }
   add_action('after_setup_theme', 'oren_setup_theme');
 ?>
