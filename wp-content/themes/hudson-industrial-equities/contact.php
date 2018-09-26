<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage hudson-industrial-equities
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
                <h1>Hudson Industrial Equities, Inc.</h1>
                <p><?php the_field( 'office_location' ); ?></p>
                <?php if ( post_custom('office_phone') ): ?>
                  <a href="#" class="primary-contact-link"><span class="icon-icon_phone"></span><?php the_field( 'office_phone' ); ?></a>
                <?php endif; ?>
                <?php if ( post_custom('office_fax') ): ?>
                  <a href="#" class="primary-contact-link"><span class="icon-icon_fax"></span><?php the_field( 'office_fax' ); ?></a>
                <?php endif; ?>
              <?php endwhile; endif; wp_reset_query(); ?>
            </div>
          </div>
        </div><!-- END TEXT ROW -->
      </div><!-- END HERO -->

      <div class="row"><!-- START SECONDARY ROW -->
        <div class="small-12 medium-6 columns contacts-list"><!-- START CONTACTS LIST COLUMN -->
          <ul>
            <?php $loop = new WP_Query( array( 'post_type' => 'hie_about_bio', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'ASC', 'meta_key' => 'contacts_yes', 'meta_value'  => 'Yes' ) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <li>
              <a href="mailto:<?php the_field( 'email_address' ); ?>">
                <h5><span class="contact-name"><?php the_title(); ?></span> - <span class="job-title"><?php the_field( 'job_title' ); ?></span></h5>
                <span class="icon-icon_email"></span>
                <?php if ( post_custom('department') ): ?>
                  <span class="department"><?php the_field( 'department' ); ?></span>
                <?php endif; ?>
                <span class="mailto"><?php the_field( 'email_address' ); ?></span>
              </a>
            </li>
            <?php endwhile; wp_reset_query(); ?>
          </ul>
        </div><!-- END CONTACTS LIST COLUMN -->
        <div class="small-12 medium-6 columns contact-form"><!-- START CONTACT FORM COLUMN -->
          <h2><?php the_field( 'contact_message' ); ?></h2>
          
          <?php echo do_shortcode('[contact-form-7 id="52" title="Contact Page"]'); ?>
        </div><!-- END CONTACT FORM COLUMN -->
      </div><!-- END SECONDARY ROW -->

    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>
