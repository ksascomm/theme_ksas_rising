<?php get_header();
		$category = get_the_category();
		$category_slug = $category[0]->category_nicename;
		$category_name = $category[0]->cat_name; ?>
<div class="<?php echo $category_slug; ?>" id="head">
	<div class="row">
		<div class="four columns last">
			<a href="http://rising.jhu.edu">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/rising.png" class="rising" />
			</a>
		</div>
	</div>
</div>

<section class="row <?php echo $category_slug; ?>" id="content" role="main">
<div class="initiative seven columns offset-by-three">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
</section>

<section class="row container" role="complementary" id="container">
		<?php 
		if ( false === ( $campaign_query = get_transient( 'campaign_' . $category_slug . 'query' ) ) ) {
		$campaign_query = new WP_Query(array(
							'post_type' => 'post',
							'category_name' => $category_slug,
							'posts_per_page' => '-1')); 
					set_transient( 'campaign_' . $category_slug . 'query', $campaign_query, 2592000 ); }
		if ( $campaign_query->have_posts() ) : while ( $campaign_query->have_posts() ) : $campaign_query->the_post();
		$format = get_post_format();  //Determine post format
			if ( false === $format ) { $format = 'standard'; }
				if ( $format == 'standard' ) : locate_template('loop-story.php', true, false); endif;
				if ( $format == 'video' ) : locate_template('loop-video.php', true, false); endif;
				if ( $format == 'image' ) : locate_template('loop-image.php', true, false); endif;
				if ( $format == 'gallery' ) : locate_template('loop-gallery.php', true, false); endif;
				if ( $format == 'link' ) : locate_template('loop-link.php', true, false); endif;
		endwhile; endif;
		?> 
</section>
<?php get_footer(); ?>