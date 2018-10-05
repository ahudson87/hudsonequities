<?php
/**
 * Template Name: Unit Sizes
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
        <div class="small-12 medium-6 columns promotions-column"><!-- START PROMOTIONS COL -->

          <?php
          if( the_field( 'sub_header' ) ):
          the_field( 'sub_header' );
          endif; ?>

          <?php
          if( have_rows('unit_size') ):
              while ( have_rows('unit_size') ) : the_row();
                  echo '<h4 style="margin-top: 20px;">' . get_sub_field('size') . '</h4>';
                  echo '<p>' . get_sub_field('description') . '</p>';
              endwhile;
          endif; ?>
        </div><!-- END PROMOTIONS COL -->
        
        <div class="small-12 medium-6 columns news-column" style="text-align: center;"><!-- START NEWS COL -->
          
        <?php get_template_part( 'partials/image-link' ); ?>

        <?php
          $images = get_field('featured_images');

          if( $images ): ?>
          <?php foreach( $images as $image ): ?>
            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" style="margin-bottom: 20px; max-width: 270px;" />
            <?php endforeach; ?>
          <?php endif; ?>


        </div><!-- END NEWS COL -->
      </div><!-- END SECONDARY ROW -->

    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>