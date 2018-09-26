<?php
/**
 * Template Name: Reviews
 *
 * @package WordPress
 * @subpackage hie-property
 */
?>

<?php get_header(); ?>

	<div id="reviews" class="page-content"><!-- START PAGE CONTENT -->

	<div class="row"><!-- START FORM ROW -->
        <div class="small-12 medium-8 small-centered columns">

        <?php if (have_posts()) : while (have_posts()) : the_post();?>
	        <h1 style="text-align: center;"><?php the_title(); ?>:</h1>
	        <?php the_content(); ?>
	    <?php endwhile; endif; wp_reset_query(); ?>

	    <div style="text-align: center">
	    	<?php get_template_part( 'partials/image-link' ); ?>
	    </div>

        </div>  
      </div>

    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>