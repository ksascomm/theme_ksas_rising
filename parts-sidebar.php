<?php $category = get_the_category();
		$category_slug = $category[0]->category_nicename;
		$category_name = $category[0]->cat_name;
		if ( false === ( $campaign_sidebar_query = get_transient( 'campaign_' . $category_slug . 'sidebar_query' ) ) ) {
		$campaign_sidebar_query = new WP_Query(array(
							'category_name' => $category_slug,
							'post_type' => 'post',
							'posts_per_page' => '3')); 
					set_transient( 'campaign_' . $category_slug . 'sidebar_query', $campaign_sidebar_query, 2592000 ); }
?>
<aside class="four columns" role="complementary" id="sidebar">
	<h3 class="<?php echo $category_slug; ?>">Other <?php echo $category_name; ?> Stories</h3>
	<?php if ( $campaign_sidebar_query->have_posts() ) : while ( $campaign_sidebar_query->have_posts() ) : $campaign_sidebar_query->the_post(); ?>
		<article class="row">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('thumbnail', array('class'=>'circle-thumb')); ?>
				<h4><?php the_title(); ?></h4>
			</a>
		</article>
	<?php endwhile; endif; ?>
</aside>