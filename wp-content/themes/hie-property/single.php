<?php
/**
 * Template Name: Blog Template
 *
 * @package WordPress
 * @subpackage hie-property
 */
?>

<?php get_header(); ?>

	<div class="page-content blog-single"><!-- START PAGE CONTENT -->

		<div class="row">
            <!-- START FORM ROW -->
            <div class="small-12 medium-8 small-centered columns">
                <div class="blog-header">
                  <span class="blog-date"><?php echo get_the_date('M j, Y'); ?></span>
                  <?php get_template_part( 'partials/blog-social-links' ); ?>
                </div>
                
            	<?php if (have_posts()) : while (have_posts()) : the_post();?>
            	<h1 class="blog-headline"><?php the_title(); ?></h1>
            	<span class="blog-author">By <?php echo get_the_author(); ?></span>
                <?php the_content(); ?>
                <?php endwhile; endif; wp_reset_query(); ?>

                <div class="blog-footer">
                  <p>Want to learn more from <?php echo get_the_author(); ?>?</p>
                    <div class="blog-footer-flex blog-footer-contact">
                      <a class="blog-footer-call" href="tel:<?php echo preg_replace("/[^0-9,.]/", "", get_option('global_company_phone')); ?>">Call <?php echo get_option('global_company_phone'); ?></a>
                      <a href="<?php echo get_page_link(8); ?>" class="blog-footer-email">Email us</a>
                  </div>
                  <div class="blog-footer-flex blog-footer-social">
                      <a class="blog-archive-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Back to blog archive</a>
                      <?php get_template_part( 'partials/blog-social-links' ); ?>
                  </div>
                </div>
                
            </div>
        </div>

    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>