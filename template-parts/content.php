
<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
  <?php the_title( '<h2>', '</h2>' ); ?>
  <div class="content-entry">
    <?php the_content(); ?>
  </div>
</article>