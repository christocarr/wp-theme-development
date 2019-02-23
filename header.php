<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
  <div id="page">

    <a href="#content" class="skip-link screen-reader-text">
      <?php esc_html_e( 'Skip to content', 'Pictures and Paintings' ); ?>
    </a>

    <body <?php body_class(); ?> >
      
    <header id="masthead" class="site-header" role="banner">

      <div class="site-branding">
        <p class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </p>
        <p class="site-description">
          <?php bloginfo( 'description' ); ?>
        </p>
      </div>

      <nav class="main-navigation" role="navigation">
        <?php wp_nav_menu( [
          'theme_location' => 'main-menu'
        ]); ?>
      </nav>

    </header>

    <div class="site-content">

