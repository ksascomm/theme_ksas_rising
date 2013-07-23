
<section role="main" class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php $format = get_post_format();  //Determine post format
			if ( false === $format ) { $format = 'standard'; }
				if ( $format == 'standard' ) : locate_template('loop-story.php', true, false); endif;
				if ( $format == 'video' ) : locate_template('loop-video.php', true, false); endif;
				if ( $format == 'image' ) : locate_template('loop-image.php', true, false); endif;
				if ( $format == 'gallery' ) : locate_template('loop-gallery.php', true, false); endif;
				if ( $format == 'link' ) : locate_template('loop-link.php', true, false); endif;
		?>
<?php endwhile; endif; ?>
</section>