      <footer class="site-footer footer level" role="contentinfo">
        <a class="level-item has-text-centered" href="<?php echo esc_url( __( 'http://wordpress.org/', 'picturesandpaintings' ) ); ?>">
          <?php printf( esc_html__( 'Powered by %s', 'picturesandpaintings' ), 'Wordpress'); ?>
        </a>
        <a class="level-item has-text-centered" href="<?php echo esc_url( __( 'https://bulma.io/', 'picturesandpaintings' ) ); ?>">
          <?php printf( esc_html__( 'Bulma', 'picturesandpaintings' ), 'Bulma'); ?>
        </a>
        <p class="copyright level-item has-text-centered">copyright</p>
        <div class="level-item has-text-centered">
          <?php wp_nav_menu( [
            'theme_location' => 'footer-menu'
          ]); ?>
        </div>
      </footer>
      <script></script>
      <?php wp_footer(); ?>
    </div><!-- end of site-content -->
  </div><!-- end of page -->
</body>
</html>     