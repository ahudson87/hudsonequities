<?php
/**
 * The Template for displaying all single developments
 *
 * @package WordPress
 * @subpackage hudson-industrial-equities
 */
?>

<?php get_header(); ?>

  <div id="dev-details" class="page-content with-hero"><!-- START PAGE CONTENT -->
      <div class="row"><!-- START UI ROW -->
        <div class="small-12 columns sub-page-ui details"><!-- START SUB-PAGE UI -->

            <?php next_post_link( '%link', 'Previous' ) ?>
            <a href="<?php echo get_page_link(10); ?>">All</a>
            <?php previous_post_link( '%link', 'Next' ) ?>
            
        </div><!-- END SUB-PAGE UI -->
      </div><!-- END UI ROW -->
      <div id="hero"><!-- START HERO ROW -->
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
          <div class="hero-bg-image" style="background-image: url('<?php echo $image[0]; ?>'); background-position:<?php echo the_field( 'feature_image_alignment_hero' ); ?>;")><!-- START HERO BACKGROUND -->
          </div><!-- END HERO BACKGROUND -->
        <?php endif; wp_reset_query(); ?>
      </div><!-- END HERO ROW -->
      <div class="row development-details"><!-- START DEVELOPMENT DETAILS -->
        <div class="small-12 medium-6 columns"><!-- START LEFT COLUMN -->
          <div class="details-body"><!-- START DETAILS BODY -->
            <h1><?php the_title(); ?></h1>
            <h4><?php the_field( 'development_address' ); ?></h4>

            <p>
              <?php the_field( 'completed_estimated' ); ?>
              <?php the_field( 'associated_date' ); ?>
            </p>

            <?php if (have_posts()) : while (have_posts()) : the_post();?>
              <?php the_content(); ?>
            <?php endwhile; endif; wp_reset_query(); ?>
          </div><!-- END DETAILS BODY -->


          <?php if( post_custom('comparison-chart' ) == 'Yes'): ?>
          <div class="roi-section"><!-- START ROI SECTION -->
            <h6>Cost/Value Comparison*</h6>
            <div id="roi-chart-holder"><!-- START ROI CHART -->
              <div class="roi-bar-holder clearfix"><!-- START ROI BAR HOLDER -->
                <div id="roi-bar-investment" class="roi-bar" style="width: 20%;"><!-- START ROI BAR INVESTMENT -->
                  <span id="roi-data-investment">$<?php the_field( 'investment' ); ?>M</span>
                </div><!-- END ROI BAR INVESTMENT -->
                <span>Investment</span>
              </div><!-- END ROI BAR HOLDER -->
              <div class="roi-bar-holder clearfix"><!-- START ROI BAR HOLDER -->
                <div id="roi-bar-return" class="roi-bar" style="width: 78%;"><!-- START ROI BAR RETURN -->
                  <span id="roi-data-return">$<?php the_field( 'return' ); ?>M</span>
                </div><!-- END ROI BAR RETURN -->
                <span>Return</span>
              </div><!-- END ROI BAR HOLDER -->
            </div><!-- END ROI CHART -->
            <p class="caption">*Historical financial or economic results are not indicative nor a guaranty of future results</p>
          </div><!-- END ROI SECTION -->
          <?php endif; ?>

        </div><!-- END LEFT COLUMN -->
        
        <div class="small-12 medium-6 columns dev-stats-holder"><!-- START RIGHT COLUMN -->
          <div class="dev-stats-holder"><!-- START STATS HOLDER -->
            <?php if ( post_custom('sf-detached-homes') ): ?>
              <div class="dev-stats clearfix"><!-- START STAT -->
                <h2><?php the_field( 'sf-detached-homes' ); ?></h2>
                <h3>Single Family Detached Homes</h3>
              </div><!-- END STAT -->
            <?php endif; ?>

            <?php if ( post_custom('sf-attached-homes') ): ?>
              <div class="dev-stats clearfix"><!-- START STAT -->
                <h2><?php the_field( 'sf-attached-homes' ); ?></h2>
                <h3>Single Family Attached Homes</h3>
              </div><!-- END STAT -->
            <?php endif; ?>

            <?php if ( post_custom('individual-units') ): ?>
              <div class="dev-stats clearfix"><!-- START STAT -->
                <h2><?php the_field( 'individual-units' ); ?></h2>
                <h3>Individual units</h3>
              </div><!-- END STAT -->
            <?php endif; ?>

            <?php if ( post_custom('unique-floorplans') ): ?>
              <div class="dev-stats clearfix"><!-- START STAT -->
                <h2><?php the_field( 'unique-floorplans' ); ?></h2>
                <h3>Unique Floorplans</h3>
              </div><!-- END STAT -->
            <?php endif; ?>

            <?php if ( post_custom('ave-sq-ft') ): ?>
              <div class="dev-stats clearfix"><!-- START STAT -->
                <h2><?php the_field( 'ave-sq-ft' ); ?></h2>
                <h3>Average Square Footage</h3>
              </div><!-- END STAT -->
            <?php endif; ?>

            <?php if ( post_custom('total-sq-ft') ): ?>
              <div class="dev-stats clearfix"><!-- START STAT -->
                <h2><?php the_field( 'total-sq-ft' ); ?></h2>
                <h3>Total Square Footage</h3>
              </div><!-- END STAT -->
            <?php endif; ?>

            <?php if ( post_custom('ave-selling-price') ): ?>
              <div class="dev-stats clearfix"><!-- START STAT -->
                <h2>$<?php the_field( 'ave-selling-price' ); ?>K</h2>
                <h3>Average Selling Price</h3>
              </div><!-- END STAT -->
            <?php endif; ?>

            <?php if ( post_custom('ave-monthly-rev') ): ?>
              <div class="dev-stats clearfix"><!-- START STAT -->
                <h2>$<?php the_field( 'ave-monthly-rev' ); ?>K</h2>
                <h3>Average Monthly Revenue</h3>
              </div><!-- END STAT -->
            <?php endif; ?>

          </div><!-- END STATS HOLDER -->
          <div class="more-photos"><!-- START MORE PHOTOS ROW -->
            <div class="small-6 columns"><!-- START LEFT PHOTO COL -->
              <?php 
                $image = get_field('photo-1');
                if( !empty($image) ): ?>
                  <a href="<?php echo $image['url']; ?>" target="_blank">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </a>
              <?php endif; ?>
              <?php 
                $image = get_field('photo-3');
                if( !empty($image) ): ?>
                <a href="<?php echo $image['url']; ?>" target="_blank">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </a>
              <?php endif; ?>
              <?php 
                $image = get_field('photo-5');
                if( !empty($image) ): ?>
                <a href="<?php echo $image['url']; ?>" target="_blank">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </a>
              <?php endif; ?>
            </div><!-- END LEFT PHOTO CALL -->
            <div class="small-6 columns"><!-- START RIGHT PHOTO COL -->
              <?php 
                $image = get_field('photo-2');
                if( !empty($image) ): ?>
                <a href="<?php echo $image['url']; ?>" target="_blank">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </a>
              <?php endif; ?>
              <?php 
                $image = get_field('photo-4');
                if( !empty($image) ): ?>
                <a href="<?php echo $image['url']; ?>" target="_blank">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </a>
              <?php endif; ?>
              <?php 
                $image = get_field('photo-6');
                if( !empty($image) ): ?>
                <a href="<?php echo $image['url']; ?>" target="_blank">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  </a>
              <?php endif; ?>
            </div><!-- END RIGHT PHOTO COL -->
          </div><!-- END MORE PHOTOS ROW -->
        </div><!-- END RIGHT COLUMN -->
      </div><!-- END DEVELOPMENT DETAILS -->
    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>
