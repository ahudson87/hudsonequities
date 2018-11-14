<?php
/**
 * Template Name: Blog Archive
 *
 * @package WordPress
 * @subpackage hie-property
 */
?>

<?php get_header(); ?>

	<div class="page-content blog-archive"><!-- START PAGE CONTENT -->

	<div class="row"><!-- START FORM ROW -->

          <?php
          $posts_page = get_option( 'page_for_posts' );
          $title = get_post( $posts_page )->post_title; ?>
          <h1 class="blog-archive-headline"><?php echo $title; ?></h1>
          <div class="blog-archive-flex-container">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
              <section class="blog-archive-item">
                <span class="blog-date"><?php echo get_the_date('M j, Y'); ?></span>
                <a class="blog-archive-anchor" href="<?php echo get_permalink(); ?>">
                  <h2 class="blog-archive-subhead"><?php the_title(); ?></h2>
                </a>
                <span class="blog-author">By <?php echo get_the_author(); ?></span>
                <p class="blog-archive-exerpt"><?php echo wp_trim_words( get_the_content(), 44 ); ?></p>
                <a href="<?php echo get_permalink(); ?>" class="blog-archive-item-cta">Read the post</a>
              </section>
            <?php endwhile; endif; wp_reset_query(); ?>
          </div>

        </div>
        
    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>