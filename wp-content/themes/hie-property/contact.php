<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage hie-property
 */
?>

<?php get_header(); ?>

	<div id="contact" class="page-content with-hero"><!-- START PAGE CONTENT -->
      <div id="hero"><!-- START HERO -->
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="hero-bg-image"
              style="background-image: url('<?php echo $image[0]; ?>');"><!-- START HERO BACKGROUND -->
          <?php get_template_part( 'partials/hero-frame' ); ?>
        </div>
        <?php endif; ?>
        <!-- END HERO BACKGROUND -->
        <div class="row overlay-row"><!-- START OVERLAY BG ROW -->
          <div class="small-12 medium-9 large-6 columns dark-diagonal-overlay overlay">
          </div>
        </div><!-- END OVERLAY BG ROW -->
        <div class="row"><!-- START TEXT ROW -->
          <div class="small-12 medium-8 large-6 columns">
            <div class="overlay-text">
              <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <h1><?php the_title(); ?></h1>
                <p><?php the_field( 'office_location' ); ?></p>
                <?php if ( get_option('global_company_phone') ): ?>
                  <a href="tel:<?php echo preg_replace("/[^0-9,.]/", "", get_option('global_company_phone')); ?>" class="primary-contact-link"><span class="icon-icon_phone"></span><?php echo get_option('global_company_phone'); ?></a>
                <?php endif; ?>
                <?php if ( get_option('global_company_fax') ): ?>
                  <a href="tel:<?php echo preg_replace("/[^0-9,.]/", "", get_option('global_company_fax')); ?>" class="primary-contact-link"><span class="icon-icon_fax"></span><?php echo get_option('global_company_fax'); ?></a>
                <?php endif; ?>
              <?php endwhile; endif; wp_reset_query(); ?>
            </div>
          </div>
        </div><!-- END TEXT ROW -->
      </div><!-- END HERO -->

      <div class="row" style="margin-top: 60px;"><!-- START FORM ROW -->
        <div class="small-12 medium-8 small-centered columns">

 
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
          
          <div style="margin-bottom: 1rem;">

            <div class="google-map map-responsive">
             <?php echo get_option('global_google_map'); ?>
            </div>

            <?php the_content(); ?>
          </div>

          <?php echo do_shortcode( '[contact-form-7 id="322" title="Reserve A Unit"]' ); ?>

          </div>  
        </div>


      <?php endwhile; endif; wp_reset_query(); ?>

    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>
