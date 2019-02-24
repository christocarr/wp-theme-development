<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class();?>>
          <?php the_title( '<h2>', '</h2>' ); ?>
          <div class="content-entry">
            <?php the_content(); ?>
          </div>
        </article>
      
      <?php endwhile; else: ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class();?>>

          <h2><?php esc_html_e( '404', 'picturesandpaintings' ); ?></h2>
          <div class="content-entry">
            <p>
              <?php esc_html_e( 'Sorry! No content found', 'picturesandpaintings' ); ?>
            </p>
          </div>
        </article>
      <?php endif; ?>
     
    </main>

  </div>
  
  <?php get_sidebar(); ?>

  <?php get_footer(); ?>
