<?php

  //add theme support
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post_format', 
    [
      'aside', 
      'gallery', 
      'link', 
      'image',
    ] );
  add_theme_support( 'html5' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'custom-header' );
  add_theme_support( 'custom-logo' );

  //load CSS
  function wphierarchy_enqueue_styles() {
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css',[], 1.0  );
  }
  add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles' );



?>