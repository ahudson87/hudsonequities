<?php
/**
 * Template Name: Developments
 *
 * @package WordPress
 * @subpackage hudson-industrial-equities
 */
?>

<?php get_header(); ?>

	<div id="developments" class="page-content"><!-- START PAGE CONTENT -->
      <!-- start if statement if there are any new developments -->
      <div class="row lead-in"><!-- START HEADER ROW -->
        <div class="small-12 medium-9 medium-centered columns">
          <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <h1><?php the_field( 'new_developments_header' ); ?></h1>
            <p class="lead"><?php the_field( 'new_devs_subtitle' ); ?></p>
          <?php endwhile; endif; wp_reset_query(); ?>
        </div>
      </div><!-- END HEADER 1 ROW -->

      <div class="row developments-row"><!-- START DEVELOPMENTS ROW -->

      <!-- START NEW DEVELOPMENTS LOOP -->
      <?php $loopNewDevs = new WP_Query( array( 'post_type' => 'hie_development', 'posts_per_page' => -1, 'category_name' => 'New Developments' ) ); ?>
      <?php $count = $loopNewDevs->post_count; ?>
      <?php while ( $loopNewDevs->have_posts() ) : $loopNewDevs->the_post(); ?>

      <?php if ( $count > 1 ): ?>

        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="dev-bucket" style="background-image: url('<?php echo $image[0]; ?>'); background-position:<?php echo the_field( 'feature_image_alignment_small' ); ?>;"><!-- START DEVELOPMENT -->
          <a href="<?php the_permalink(); ?>">
            <div class="dev-label"><?php the_title(); ?><span class="hover-icon icon-icon_arrow"></span></div>
          </a>
        </div><!-- END DEVELOPMENT -->
        <?php endif; ?>

        <?php else : ?>

        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="dev-bucket full" style="background-image: url('<?php echo $image[0]; ?>'); background-position:<?php echo the_field( 'feature_image_alignment_small' ); ?>;"><!-- START DEVELOPMENT -->
          <a href="<?php the_permalink(); ?>">
            <div class="dev-label"><?php the_title(); ?><span class="hover-icon icon-icon_arrow"></span></div>
          </a>
        </div><!-- END DEVELOPMENT -->
        <?php endif; ?>

      <?php endif; ?>
      <?php endwhile; wp_reset_query(); ?>
      <!-- END NEW DEVELOPMENTS LOOP -->

      </div><!-- END DEVELOPMENTS ROW -->
      <!-- end if statement if there are any new developments -->

      <div class="row lead-in"><!-- START HEADER ROW -->
        <div class="small-12 medium-9 medium-centered columns">
          <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <h1><?php the_field( 'past_developments_header' ); ?></h1>
            <p class="lead"><?php the_field( 'past_devs_subtitle' ); ?></p>
          <?php endwhile; endif; wp_reset_query(); ?>
        </div>
      </div><!-- END HEADER 1 ROW -->

      <!-- ******* -->
      <!-- HIDING THIS FOR NOW WITH DISPLAY NONE -->
      <div class="row" style="display:none;"><!-- START UI ROW -->
        <div class="small-12 columns sub-page-ui details">
          <button id="dev-mobile-filter-btn">Filter</button>
          <div class="full-ui"><!-- START UI FOR MEDIUM UP -->
            <button class="active">All</button>
            <button>Residential</button>
            <button>Retail/Office</button>
            <button>Storage</button>
          </div><!-- END UI FOR MEDIUM UP -->
          <!-- <a class="filter-toggle"><span id="date-label-newest">Newest</span><span id="date-label-oldest">Oldest</span><span> First</span><span class="hover-icon icon-icon_arrow"></span></a> -->
        </div>
      </div><!-- END UI ROW -->
      <!-- HIDING THIS FOR NOW WITH DISPLAY NONE -->
      <!-- ******* -->



      <div class="row developments-row"><!-- START DEVELOPMENTS ROW -->

      <!-- START PAST DEVELOPMENTS LOOP -->

      <?php $loopOtherDevs = new WP_Query( array( 'post_type' => 'hie_development', 'posts_per_page' => -1, 'cat' => -5 ) ); ?>      
      <?php while ( $loopOtherDevs->have_posts() ) : $loopOtherDevs->the_post(); ?>
     
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="dev-bucket" style="background-image: url('<?php echo $image[0]; ?>'); background-position:<?php echo the_field( 'feature_image_alignment_small' ); ?>;"><!-- START DEVELOPMENT -->
          <a href="<?php the_permalink(); ?>">
            <div class="dev-label"><?php the_title(); ?><span class="hover-icon icon-icon_arrow"></span></div>
          </a>
        </div><!-- END DEVELOPMENT -->
        <?php endif; ?>
  
      <?php endwhile; wp_reset_query(); ?>
      <!-- END PAST DEVELOPMENTS LOOP -->

    </div><!-- END DEVELOPMENTS ROW -->
    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>
