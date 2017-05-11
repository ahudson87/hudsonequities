<?php
/**
 * The Template for displaying all single press releases
 *
 * @package WordPress
 * @subpackage hudson-industrial-equities
 */
?>

<?php get_header(); ?>

  <div id="press-release" class="page-content"><!-- START PAGE CONTENT -->
    <div class="row"><!-- START PRESS RELEASE TEMPLATE -->
      <div class="small-12 columns"><!-- START TYPE & DATE COL -->
        <h1><span id="press-release-type"><?php the_field( 'press_type' ); ?></span> | <span id="press-release-date">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
          <?php the_title(); ?>
        <?php endwhile; endif; wp_reset_query(); ?>
        </span></h1>
      </div><!-- END TYPE & DATE COL -->
      <div class="small-12 columns"><!-- START COMPANY COL -->
        <p class="lead"><?php the_field( 'press_title' ); ?></p>
      </div><!-- END COMPANY COL -->
      <div class="small-12 columns prop-address-col"><!-- START ADDRESS COL -->
        <p>
          <!-- <span id="prop-address-name">Fleetwood Almaden Estates</span>
          <span id="prop-address-street">123 Fleetwood Drive</span>
          <span id="prop-address-2">San Jose, CA 95125</span> -->
          <?php the_field( 'address' ); ?>
        </p>
      </div><!-- END ADDRESS COL -->
      <div class="small-12 columns"><!-- START CONTACT COL -->
        <?php if ( post_custom('phone') ): ?>
        <p class="press-contact"><span>Contact: </span><?php the_field( 'phone' ); ?></p>
      <?php endif; ?>
      </div><!-- END CONTACT COL -->
      <div class="small-12 columns press-release-content"><!-- START CONTENT COL -->
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
          <?php the_content(); ?>
        <?php endwhile; endif; wp_reset_query(); ?>
      </div><!-- END CONTENT COL -->
      <div class="small-12 columns press-release-footer"><!-- START INFO COL -->
        <p>
          <span>Hudson Industrial Equities, Inc.</span>
          <span>For more information please visit our website at:</span>
          <a href="http://www.hudsonequities.com" target="_blank">www.hudsonequities.com</a>
        </p>
      </div><!-- END INFO COL -->
    </div><!-- END PRESS RELEASE TEMPLATE -->

  </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>
