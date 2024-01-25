<?php
  /*  Enqueue javascript
  /* ------------------------------------ */
  function basetheme_scripts() {
  
    wp_enqueue_script( 'basetheme-bundle', get_template_directory_uri() . '/custom/bundle.min.js','','', true );

    wp_enqueue_script( 'basetheme-scripts', get_template_directory_uri() . '/custom/custom-script.js','','', true );
    //if ( is_singular() && get_option( 'thread_comments' ) )  { wp_enqueue_script( 'comment-reply' ); }
  
  }
  add_action( 'wp_enqueue_scripts', 'basetheme_scripts' );

  /*  Enqueue css
  /* ------------------------------------ */

  function basetheme_custom_styles() {

    wp_enqueue_style( 'basetheme-custom-style', get_template_directory_uri().'/custom/custom-style.css');

  }

  add_action( 'wp_enqueue_scripts', 'basetheme_custom_styles' );
?>

