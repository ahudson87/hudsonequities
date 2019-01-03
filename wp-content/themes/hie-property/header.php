<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo wp_title(""); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <?php wp_head(); ?>
    <style>
      #header {
        background-color: <?php echo get_option('global_company_color'); ?> !important;
      }

      #header nav ul li a {
        border-color: <?php echo get_option('global_company_color'); ?> !important;
      }

      #header nav ul li.active a,
      html.no-touch #header nav ul li:hover a {
        color: <?php echo get_option('global_company_color'); ?> !important;
        border-color: white !important;
      }

      #hero .hero-frame {
        background-image: linear-gradient(to right, rgba(50, 153, 170, 0) 25%, <?php echo get_option('global_company_color'); ?> 75%);
      }

      h1, h2, h3, h4, h5, h6 {
        color: <?php echo get_option('global_company_color'); ?> !important;
      }

      #hero .overlay-text h1, #hero .overlay-text p {
        color: #ffffff !important;
      }

      #hero .hero-frame .ornament-inner {
        background-color: <?php echo get_option('global_company_color'); ?> !important;
      }

      html.no-touch a:hover {
        color: <?php echo get_option('global_company_color'); ?> !important;
      }

      html.no-touch #footer a:hover {
        color: #ffffff !important;
      }

      input:not([type]):focus, input[type="text"]:focus, input[type="password"]:focus, input[type="date"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="month"]:focus, input[type="week"]:focus, input[type="email"]:focus, input[type="number"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="time"]:focus, input[type="url"]:focus, input[type="color"]:focus, textarea:focus {
        border-color: <?php echo get_option('global_company_color'); ?> !important;
      }

      @media only screen and (min-width: 40.0625em) {
        #hero .hero-frame {
          background-image: linear-gradient(to right, rgba(50, 153, 170, 0) 40%, <?php echo get_option('global_company_color'); ?> 75%);
        }
      }
      .tips li {
        margin: 10px 0;
      }

      .call-now {
        background-color: <?php echo get_option('global_accent_color'); ?> !important;
      }

      .blog-single .blog-footer-call,
      .blog-single .blog-footer-email {
        background-color: <?php echo get_option('global_company_color'); ?> !important;
      }
      .blog-single .blog-footer-call:hover,
      .blog-single .blog-footer-email:hover {
        background-color: white !important;
        border-color: <?php echo get_option('global_company_color'); ?> !important;
      }

      .yelp-promo {
        border-color: <?php echo get_option('global_company_color'); ?> !important;
      }

      input:not([type]), input[type="text"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], input[type="color"], textarea {
        border-color: #dadada;
      }

      html.no-touch .call-now a:hover {
        color: white !important;
        text-decoration: underline;
      }

      blockquote {
        color: <?php echo get_option('global_company_color'); ?> !important;
        box-shadow: 0 0 10px <?php echo get_option('global_company_color'); ?> !important;
      }
    </style>
  </head>
  <body>

    <?php get_template_part( 'partials/call-now-module' ); ?>   
    
    <div id="header"><!-- START THE HEADER -->
      <div class="row"><!-- START CONTAINER ROW -->
        <div id="logo-holder" class="rect"><!-- START LOGO HOLDER -->
          <a href="<?php echo get_site_url(); ?>"><!-- START LOGO LINK -->
            <img src="<?php echo get_option('upload_image'); ?>" alt="Logo">
          </a><!-- END LOGO LINK -->
        </div><!-- END LOGO HOLDER -->
        <div id="mobile-menu-btn-holder"><!-- START MOBILE BUTTON HOLDER -->
          <button id="mobile-menu-btn">Menu</button>
        </div><!-- END MOBILE BUTTON HOLDER -->
        <nav><!-- START PRIMARY NAV -->
          <?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_class' => 'nav-menu', 'menu_id' => 'header-menu' ) ); ?>
        </nav><!-- END PRIMARY NAV -->
      </div><!-- END CONTAINER ROW -->
    </div><!-- END THE HEADER -->