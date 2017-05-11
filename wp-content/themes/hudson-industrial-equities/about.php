<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage hudson-industrial-equities
 */
?>

<?php get_header(); ?>

	<div id="about" class="page-content"><!-- START PAGE CONTENT -->
      <div class="row lead-in"><!-- START HEADER ROW -->
        <div class="small-12 medium-9 medium-centered columns">
          <h1><?php the_title(); ?></h1>
          <p class="lead">
      			<?php if (have_posts()) : while (have_posts()) : the_post();?>
      			<?php the_content(); ?>
      			<?php endwhile; endif; wp_reset_query(); ?>
          </p>
        </div>
      </div><!-- END HEADER 1 ROW -->
      
      <?php $loop = new WP_Query( array( 'post_type' => 'hie_about_bio', 'posts_per_page' => -1 ) ); ?>
      <?php $c = 0; ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <?php $c++; ?>
      <?php if( $c % 2 != 0 ) : ?>
        
        <div class="row about-row"><!-- START ABOUT ROW -->
          <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <div class="small-12 medium-6 medium-push-6 columns about-photo" style="background-image: url('<?php echo $image[0]; ?>');"><!-- START ABOUT PHOTO -->
            </div>
          <?php endif; ?>
          <!-- END ABOUT PHOTO -->
          <div class="small-12 medium-6 medium-pull-6 columns about-text"><!-- START ABOUT TEXT -->
            <div><!-- START INNER CONTAINER -->
              <h3><?php the_title(); ?></h3>
              <h5><?php the_field( 'job_title' ); ?></h5>
              <p><?php the_content(); ?></p>
            </div><!-- END INNER CONTAINER -->
          </div><!-- END ABOUT TEXT -->
        </div><!-- END ABOUT ROW -->
        
      <?php else : ?>
      
        <div class="row about-row"><!-- START ABOUT ROW -->
          <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <div class="small-12 medium-6 columns about-photo" style="background-image: url('<?php echo $image[0]; ?>');"><!-- START ABOUT PHOTO -->
            </div>
          <?php endif; ?>
          <!-- END ABOUT PHOTO -->
          <div class="small-12 medium-6 columns about-text"><!-- START ABOUT TEXT -->
            <div><!-- START INNER CONTAINER -->
              <h3><?php the_title(); ?></h3>
              <h5><?php the_field( 'job_title' ); ?></h5>
              <p><?php the_content(); ?></p>
            </div><!-- END INNER CONTAINER -->
          </div><!-- END ABOUT TEXT -->
        </div><!-- END ABOUT ROW -->

      <?php endif; ?>
      <?php endwhile; wp_reset_query(); ?>

    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>
