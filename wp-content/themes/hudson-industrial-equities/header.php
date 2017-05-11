<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo wp_title(""); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-53406626-3', 'auto');
      ga('send', 'pageview');

    </script>
    <?php wp_head(); ?>
  </head>
  <body>
    
    <div id="header"><!-- START THE HEADER -->
      <div class="row"><!-- START CONTAINER ROW -->
        <div id="logo-holder"><!-- START LOGO HOLDER -->
          <a href="<?php echo get_site_url(); ?>"><!-- START LOGO LINK -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/HIE-logo.png" alt="HIE logo">
          </a><!-- END LOGO LINK -->
        </div><!-- END LOGO HOLDER -->
        <div id="mobile-menu-btn-holder"><!-- START MOBILE BUTTON HOLDER -->
          <button id="mobile-menu-btn">Menu</button>
        </div><!-- END MOBILE BUTTON HOLDER -->
        <nav><!-- START PRIMARY NAV -->
          <?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_class' => 'nav-menu', 'menu_id' => 'header-menu' ) ); ?>
          <!-- <ul>
            <li><a href="about.html">About Us</a></li>
            <li><a href="developments.html">Developments</a></li>
            <li><a href="press.html">Press</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul> -->
        </nav><!-- END PRIMARY NAV -->
      </div><!-- END CONTAINER ROW -->
    </div><!-- END THE HEADER -->