<?php get_header(); ?>

		<div id="home" class="page-content with-hero"><!-- START PAGE CONTENT -->
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
              <h1><?php the_title(); ?></h1>
              <p>
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <?php the_content(); ?>
                <?php endwhile; endif; wp_reset_query(); ?>
              </p>
            </div>
          </div>
        </div><!-- END TEXT ROW -->
      </div><!-- END HERO -->

      <div class="row"><!-- START SECONDARY ROW -->
        <div class="small-12 medium-6 columns left-column"><!-- START LEFT COL -->     

          <?php get_template_part( 'partials/yelp-cta' ); ?>

          <?php echo do_shortcode( '[contact-form-7 id="322" title="Reserve A Unit"]' ); ?>

        </div><!-- END LEFT COL -->
        
        <div class="small-12 medium-6 columns right-column"><!-- START RIGHT COL -->

        <div class="centered-content">
            <?php get_template_part( 'partials/image-link' ); ?>
          </div>

          <?php
          if( the_field( 'sub_header' ) ):
          the_field( 'sub_header' );
          endif; ?>


        </div><!-- END RIGHT COL -->
      </div><!-- END SECONDARY ROW -->
    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>