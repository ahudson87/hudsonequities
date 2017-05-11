<?php
/**
 * Template Name: Press
 *
 * @package WordPress
 * @subpackage hudson-industrial-equities
 */
?>

<?php get_header(); ?>

	<div id="press" class="page-content"><!-- START PAGE CONTENT -->
      <div class="row"><!-- START ROW -->
        <div class="small-12 medium-8 medium-push-3 columns news-column"><!-- START NEWS COL -->
          <div class="news-header"><!-- START NEWS HEADER -->
            <div class="dark-diagonal-overlay">
              <h2>News & Events</h2>
            </div>
          </div><!-- END NEWS HEADER -->
          
        <ul class="news-items"><!-- START NEWS ITEMS -->
        <?php $loop = new WP_Query( array( 'post_type' => 'hie_press_release', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <li>
            <p class="news-item-title">
              <span class="news-type"><?php the_field( 'press_type' ); ?></span> | <span class="news-year"><?php the_title(); ?></span>
            </p>
            <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>">Read more<span class="hover-icon icon-icon_arrow"></a>
          </li>
        <?php endwhile; wp_reset_query(); ?>
        </ul><!-- END NEWS ITEMS -->

        </div><!-- END NEWS COL -->

        <!-- ******* -->
        <!-- HIDING THIS FOR NOW WITH DISPLAY NONE -->
        <div class="small-12 medium-2 medium-pull-10 columns archive-column sub-page-ui" style="display: none;"><!-- START ARCHIVE ROW -->
          <button class="press-archive-btn">Archive</button>
          <h4>Archive</h4>
          <ul class="press-archive-list"><!-- START ARCHIVE LINKS LIST -->
            <li><!-- START ARCHIVE LIST ITEM -->
              <a href="#">2014</a>
            </li><!-- END ARCHIVE LIST ITEM -->
            <li><!-- START ARCHIVE LIST ITEM -->
              <a href="#">2013</a>
            </li><!-- END ARCHIVE LIST ITEM -->
            <li><!-- START ARCHIVE LIST ITEM -->
              <a href="#">2012</a>
            </li><!-- END ARCHIVE LIST ITEM -->
          </ul><!-- END ARCHIVE LINKS LIST -->
        </div><!-- END ARCHIVE ROW -->
        <!-- ******* -->
        <!-- HIDING THIS FOR NOW WITH DISPLAY NONE -->

      </div><!-- END ROW -->

    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>
