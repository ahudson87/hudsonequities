<?php
/**
 * Template Name: Single Column
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
        <div class="small-12 small-centered medium-9 columns left-column"><!-- START SINGLE COL -->    

         <?php
            if( the_field( 'body_content' ) ):
            the_field( 'body_content' );
          endif; ?>

         <?php if (get_field( 'has_prices' ) === "Yes"): ?>
          <table class="pricing-table">
          <thead>
            <tr>
              <td>Unit Size</td>
              <td class="text-right">Downstairs</td>
              <td class="text-right">Upstairs</td>
              <td class="text-right">Exterior</td>
            </tr>
          </thead>
          <tbody>
           <?php
            if( have_rows('pricing_table') ):
                while ( have_rows('pricing_table') ) : the_row();
                    echo '<tr>';
                    echo '<td>' . get_sub_field('unit_size') . '</td>';
                    echo '<td>' . get_sub_field('price_upstairs') . '</td>';
                    echo '<td>' . get_sub_field('price_downstairs') . '</td>';
                    echo '<td>' . get_sub_field('price_exterior') . '</td>';
                    echo '</tr>';
                endwhile;
            endif; ?>
          </tbody>
          </table>
        <?php endif; ?>

        </div><!-- END SINGLE COL -->

      </div><!-- END SECONDARY ROW -->
    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>