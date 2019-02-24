<?php

  //add theme support
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post-formats', 
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
  function picturesandpaintings_enqueue_styles() {
    wp_enqueue_style( 'bulma', 'https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css' );
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css',[], 1.0  );
  }
  add_action( 'wp_enqueue_scripts', 'picturesandpaintings_enqueue_styles' );

  register_nav_menus( [
    'main-menu' => esc_html__( 'Main Menu', 'wpheirarchy' ),
    'footer-menu' => esc_html__( 'Footer Menu', 'wpheirarchy' ),
  ] );

  //setup widget areas
  function picturesandpaintings_widgets_init() {
    register_sidebar([
      'name'          => esc_html__( 'Main Sidebar', 'picturesandpaintings' ),
      'id'            => 'main-sidebar',
      'description'   => esc_html__( 'Add widgets for main sidebar here','picturesandpaintings' ),
      'before_widget' => '<section class="widget">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title subtitle">',
      'after_title'   => '</h2>'
    ]);
  }
  add_action( 'widgets_init', 'picturesandpaintings_widgets_init' );


?>