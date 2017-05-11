<?php get_header(); ?>

		<div id="home" class="page-content with-hero"><!-- START PAGE CONTENT -->
      <div id="hero"><!-- START HERO -->
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="hero-bg-image"
              style="background-image: url('<?php echo $image[0]; ?>');"><!-- START HERO BACKGROUND -->
          <div class="hero-frame"></div>
          <div class="hero-frame"></div>
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
              <h1>Welcome to Hudson Industrial Equities</h1>
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
        <div class="small-12 medium-6 columns promotions-column"><!-- START PROMOTIONS COL -->

          <?php if ( post_custom('display_specific_development_1') == 'Yes' ): ?>
            <?php
            $post_object = get_field('select_development_1');
            if( $post_object ): 
              // override $post
              $post = $post_object;
              setup_postdata( $post ); 
              ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <div class="promo" style="background-image: url('<?php echo $image[0]; ?>'); background-position:<?php echo the_field( 'feature_image_alignment_small' ); ?>;"><!-- START PROMO -->
                  <a href="<?php the_permalink(); ?>">
                    <span class="promo-label"><?php the_title(); ?><span class="hover-icon icon-icon_arrow"></span></span>
                  </a>
                </div><!-- END PROMO -->
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
          <?php endif; ?>
          <?php if ( post_custom('display_specific_development_1') == 'No' ): ?>
          <!-- promotional_image_1 -->
          <div class="promo" style="background-image: url('<?php echo the_field( 'promotion_image_1' ); ?>');"><!-- START PROMO -->
                  <a href="<?php echo the_field( 'promotion_link_1' ); ?>" target="_blank">
                    <span class="promo-label"><?php the_field( 'promotion_text_1' ); ?><span class="hover-icon icon-icon_arrow"></span></span>
                  </a>
                </div><!-- END PROMO -->
          <?php endif; ?>

          <?php if ( post_custom('display_specific_development_2') == 'Yes' ): ?>
            <?php
            $post_object = get_field('select_development_2');
            if( $post_object ): 
              // override $post
              $post = $post_object;
              setup_postdata( $post ); 
              ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <div class="promo" style="background-image: url('<?php echo $image[0]; ?>'); background-position:<?php echo the_field( 'feature_image_alignment_small' ); ?>;"><!-- START PROMO -->
                  <a href="<?php the_permalink(); ?>">
                    <span class="promo-label"><?php the_title(); ?><span class="hover-icon icon-icon_arrow"></span></span>
                  </a>
                </div><!-- END PROMO -->
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
          <?php endif; ?>
          <?php if ( post_custom('display_specific_development_2') == 'No' ): ?>
          <!-- promotional_image_1 -->
          <div class="promo" style="background-image: url('<?php echo the_field( 'promotion_image_2' ); ?>');"><!-- START PROMO -->
                  <a href="<?php echo the_field( 'promotion_link_2' ); ?>" target="_blank">
                    <span class="promo-label"><?php the_field( 'promotion_text_2' ); ?><span class="hover-icon icon-icon_arrow"></span></span>
                  </a>
                </div><!-- END PROMO -->
          <?php endif; ?>

          <?php if ( post_custom('display_specific_development_3') == 'Yes' ): ?>
            <?php
            $post_object = get_field('select_development_3');
            if( $post_object ): 
              // override $post
              $post = $post_object;
              setup_postdata( $post ); 
              ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <div class="promo" style="background-image: url('<?php echo $image[0]; ?>'); background-position:<?php echo the_field( 'feature_image_alignment_small' ); ?>;"><!-- START PROMO -->
                  <a href="<?php the_permalink(); ?>">
                    <span class="promo-label"><?php the_title(); ?><span class="hover-icon icon-icon_arrow"></span></span>
                  </a>
                </div><!-- END PROMO -->
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
          <?php endif; ?>
          <?php if ( post_custom('display_specific_development_3') == 'No' ): ?>
          <!-- promotional_image_1 -->
          <div class="promo" style="background-image: url('<?php echo the_field( 'promotion_image_3' ); ?>');"><!-- START PROMO -->
                  <a href="<?php echo the_field( 'promotion_link_3' ); ?>" target="_blank">
                    <span class="promo-label"><?php the_field( 'promotion_text_3' ); ?><span class="hover-icon icon-icon_arrow"></span></span>
                  </a>
                </div><!-- END PROMO -->
          <?php endif; ?>

          
        </div><!-- END PROMOTIONS COL -->
        
        <div class="small-12 medium-6 columns news-column"><!-- START NEWS COL -->
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
                  <a href="<?php the_permalink(); ?> ">Read more<span class="hover-icon icon-icon_arrow"></a>
              </li>
            <?php endwhile; wp_reset_query(); ?>
          </ul><!-- END NEWS ITEMS -->
        </div><!-- END NEWS COL -->
      </div><!-- END SECONDARY ROW -->
    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>