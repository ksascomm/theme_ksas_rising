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

<div class="row single" id="content">
	<section class="seven columns">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<time><?php the_date(); ?></time>
			<h3><?php the_title(); ?></h3>
			<?php the_post_thumbnail('medium'); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</section>
	<?php locate_template('parts-sidebar.php', true, false); ?>
</div>
<?php get_footer(); ?>