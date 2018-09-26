<?php
/**
 * Template Name: Reserve A Unit
 *
 * @package WordPress
 * @subpackage hie-property
 */
?>

<?php get_header(); ?>

	<div id="reserve" class="page-content"><!-- START PAGE CONTENT -->

	<div class="row"><!-- START FORM ROW -->
        <div class="small-12 medium-8 small-centered columns">

 
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
	        
	        <h1><?php the_title(); ?></h1>
	        <div style="margin-bottom: 1rem;">
	        	<?php the_content(); ?>
	        </div>

	        <?php echo do_shortcode( '[contact-form-7 id="322" title="Reserve A Unit"]' ); ?>

	        <div style="text-align: center">
		    	<?php get_template_part( 'partials/image-link' ); ?>
		    </div>

          </div>  
      	</div>


	    <?php endwhile; endif; wp_reset_query(); ?>

    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>