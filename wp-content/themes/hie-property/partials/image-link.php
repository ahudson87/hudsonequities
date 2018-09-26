<?php if ( post_custom('image_link_destination') && post_custom('image_link_source') ): ?>

<a href="<?php the_field( 'image_link_destination' ); ?>" style="display: block; margin-bottom: 20px;">
	<img src="<?php the_field( 'image_link_source' ); ?>" />
	<?php if ( post_custom('link_text') ): ?>
	<h4 style="margin-top: 10px;"><?php the_field( 'link_text' ); ?></h4>
	<?php endif; ?>
</a>

<?php endif; ?>