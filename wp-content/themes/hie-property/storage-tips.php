<?php
/**
 * Template Name: Storage Tips
 *
 * @package WordPress
 * @subpackage hie-property
 */
?>

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

                <?php if (have_posts()) : while (have_posts()) : the_post();?>
	              <?php the_content(); ?>
	            <?php endwhile; endif; wp_reset_query(); ?>

            </div>
          </div>
        </div><!-- END TEXT ROW -->
      </div><!-- END HERO -->

      <div class="row"><!-- START SECONDARY ROW -->
        <div class="small-12 medium-6 columns promotions-column" style="padding-right: 30px;"><!-- START PROMOTIONS COL -->

          <?php
            if( the_field( 'sub_header' ) ):
            the_field( 'sub_header' );
          endif; ?>

        </div><!-- END PROMOTIONS COL -->
        
        <div class="small-12 medium-6 columns news-column" style="text-align: center;"><!-- START NEWS COL -->
         
        <?php get_template_part( 'partials/image-link' ); ?>

        </div><!-- END NEWS COL -->
      </div><!-- END SECONDARY ROW -->

      <div class="row" style="margin-top: 30px;"><!-- ROW -->



        <?php
          if( have_rows('tips_blocks') ):
              while ( have_rows('tips_blocks') ) : the_row();
                  echo '<div class="small-12 medium-6 columns end"><!-- START COL -->';
                  echo '<h4>' . get_sub_field('tip_section') . '</h4>';

                    if( have_rows('tip_list') ):
                        echo '<ul class="tips">';
                        while ( have_rows('tip_list') ) : the_row();
                            
                            echo '<li>' . get_sub_field('tip') . '</li>';
                            
                        endwhile;
                        echo '</ul>';
                    endif;


                  echo '</div><!-- END COL -->';
              endwhile;
          endif; ?>


        
        </div><!-- ROW -->



    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>