<?php
/**
 * Template Name: Specials
 *
 * @package WordPress
 * @subpackage hie-property
 */
?>

<?php get_header(); ?>

	<div id="specials" class="page-content"><!-- START PAGE CONTENT -->

	<div class="row"><!-- START FORM ROW -->
        <div class="small-10 large-8 small-centered columns">

        <?php if (have_posts()) : while (have_posts()) : the_post();?>
	        <h1 class="specials-headline"><?php the_title(); ?>:</h1>
	        <ul class="specials-list">
            <?php if( have_rows('current_specials') ):
              while ( have_rows('current_specials') ) : the_row(); ?>
                <li class="specials-item">
                  <div class="specials-col specials-col-left">
                    <h3 class="specials-item-headline"><?php echo get_sub_field('special_title'); ?></h3>
                    <p class="specials-body"><?php echo get_sub_field('text_description'); ?></p>
                    <div class="specials-social">
                      <?php get_template_part( 'partials/specials-social-links' ); ?>
                    </div>
                  </div>
                  <?php if( get_sub_field('promotional_image') ): ?>
                  <div class="specials-col specials-col-right">
                    <img src="<?php echo get_sub_field('promotional_image'); ?>" class="specials-image" />
                  </div>
                  <?php endif; ?>
                </li>
              <?php endwhile; endif; ?>
          </ul>
	    <?php endwhile; endif; wp_reset_query(); ?>

	    <div style="text-align: center">
	    	<?php get_template_part( 'partials/image-link' ); ?>
	    </div>

        </div>  
      </div>

    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>