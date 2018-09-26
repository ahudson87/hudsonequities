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

        <p>Bacon ipsum dolor amet drumstick tail pork chop tri-tip, shank shankle cupim chuck ball tip jowl salami bacon. Burgdoggen bresaola beef, kevin pork belly sausage meatball shoulder swine prosciutto turkey. Shoulder corned beef pork chop porchetta, spare ribs doner cupim drumstick ball tip shankle venison pork belly leberkas tail sausage. Spare ribs beef fatback, tri-tip brisket shoulder pork short loin ham hock.</p>

        <p>Biltong chicken boudin tail shankle t-bone brisket. Drumstick kielbasa venison biltong shoulder short ribs, chicken alcatra beef pancetta shank. Pork belly ribeye t-bone porchetta short ribs beef sirloin landjaeger doner spare ribs. Leberkas tenderloin andouille short ribs, porchetta prosciutto tongue brisket turkey bacon cow kevin. Beef ribs filet mignon andouille tenderloin kielbasa t-bone porchetta drumstick bresaola jowl pork loin salami pork sirloin alcatra. Cupim tongue meatloaf brisket, tenderloin capicola beef rump shankle. Ground round prosciutto pastrami hamburger short ribs kielbasa shankle shank jowl spare ribs chicken jerky.</p>

        <p>Drumstick pork belly porchetta doner pancetta bresaola swine chuck tenderloin tongue leberkas ground round beef ribs venison spare ribs. Strip steak pork swine leberkas frankfurter filet mignon hamburger ground round tongue tri-tip meatloaf picanha. Pork chop pork loin pancetta bresaola shank biltong. Frankfurter salami pork belly sausage alcatra ham hock kevin. Bresaola pork salami, swine doner shoulder ham pig flank brisket venison bacon ball tip shankle. Burgdoggen brisket pork loin ball tip short loin chuck rump shankle salami.</p>

        </div><!-- END SINGLE COL -->

      </div><!-- END SECONDARY ROW -->
    </div><!-- END PAGE CONTENT -->

<?php get_footer(); ?>