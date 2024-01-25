<?php
function basetheme_setup() {

  // Enable custom header
  add_theme_support( "custom-header" );

  // Enable title in header
  add_theme_support( "title-tag" );

  // Enable feed link
  add_theme_support( 'automatic-feed-links' );

  // Enable align wide & full
  add_theme_support( 'align-wide' );

  // Enable featured image
  add_theme_support( 'post-thumbnails' );

  // Image-size
  add_image_size('image-small', 350, 270, true);
  add_image_size('image-big', 1400, 900, true);

  // Page the_excerpt
  add_post_type_support( 'page', 'excerpt' );

  // Custom menu areas
  register_nav_menus( array(
    'header' => esc_html__( 'Header', 'basetheme' )
  ));

}

add_action( 'after_setup_theme', 'basetheme_setup' );


/*  Enqueue css
/* ------------------------------------ */

function basetheme_styles() {

	wp_enqueue_style( 'basetheme-style', get_template_directory_uri().'/style.css');

}

add_action( 'wp_enqueue_scripts', 'basetheme_styles' );

require_once('custom/custom-function.php');

?>
