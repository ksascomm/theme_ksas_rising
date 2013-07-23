<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  
		$category = get_the_category();
		$category_slug = $category[0]->category_nicename;
		$category_name = $category[0]->cat_name;
?>

<section class="<?php echo $category_slug; ?>" role="main" id="main">
	<div class="row">
	<div class="five columns">
			<?php the_content(); ?>
			<div class="row">
			<a href="http://rising.jhu.edu">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/rising.png" align="middle" />
			</a>
			</div>
	</div>
	</div>
</section>
<?php endwhile; endif; ?>

<section role="main" id="container" class="container">
		<?php if ( false === ( $campaign_home_query = get_transient( 'campaign_home_query' ) ) ) {
		$campaign_home_query = new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' => '-1')); 
					set_transient( 'campaign_home_query', $campaign_home_query, 2592000 ); }

 if ( $campaign_home_query->have_posts() ) : while ( $campaign_home_query->have_posts() ) : $campaign_home_query->the_post(); 
  $format = get_post_format();  //Determine post format
			if ( false === $format ) { $format = 'standard'; }
				if ( $format == 'standard' ) : locate_template('loop-story.php', true, false); endif;
				if ( $format == 'video' ) : locate_template('loop-video.php', true, false); endif;
				if ( $format == 'image' ) : locate_template('loop-image.php', true, false); endif;
				if ( $format == 'gallery' ) : locate_template('loop-gallery.php', true, false); endif;
				if ( $format == 'link' ) : locate_template('loop-link.php', true, false); endif;
	 endwhile; endif; ?>
</section>

<?php get_footer(); ?>