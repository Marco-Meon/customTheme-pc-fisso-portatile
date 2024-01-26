<?php

  /*  Enqueue javascript
  /* ------------------------------------ */
  function pcfissoportatile_scripts() {
    wp_enqueue_script( 'pcfissoportatile-bundle', get_template_directory_uri() . '/custom/bundle.min.js','','', true );
    wp_enqueue_script( 'pcfissoportatile-scripts', get_template_directory_uri() . '/custom/custom-script.js','','', true );  
  }
  add_action( 'wp_enqueue_scripts', 'pcfissoportatile_scripts' );

  /*  Enqueue css
  /* ------------------------------------ */

  function pcfissoportatile_custom_styles() {
    wp_enqueue_style( 'pcfissoportatile-custom-style', get_template_directory_uri().'/custom/custom-style.css');
    wp_enqueue_style( 'pcfissoportatile-font-1', 'https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swa');
  }
  add_action( 'wp_enqueue_scripts', 'pcfissoportatile_custom_styles' );

?>

