<div id="footer"><!-- START FOOTER -->
      <div class="row sitemap"><!-- START CONTAINER ROW -->
        <nav>
          <ul>
            <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-menu', 'menu_id' => 'footer-menu' ) ); ?>
          </ul>
        </nav>
      </div><!-- END CONTAINER ROW -->
      <div id="copyright"><!-- START COPYRIGHT -->
        <div class="row">
          <p><?php echo comicpress_copyright(); ?></p>
          
        </div>
      </div><!-- END COPYRIGHT -->
    </div><!-- END FOOTER -->

    <?php wp_footer(); ?>
  </body>
</html>
