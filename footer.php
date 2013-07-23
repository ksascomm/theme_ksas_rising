  <footer>
  	<div class="row"> 
  		<div class="four columns">
  			<a href="http://kreiger.jhu.edu">
  				<img src="<?php echo get_template_directory_uri() ?>/assets/images/krieger.png" />
  			</a>
  		</div>
  		
  		<div class="four columns pull-five" id="contact">
  			<p>Office of External Affairs<br>
	  			3400 N. Charles Street, Wyman 500W<br>
	  			Baltimore, MD 21218-2685<br>
	  			410-516-8722<br>
	  			<a href="mailto:lannon@jhu.edu">lannon@jhu.edu</a></p>
  		</div> 		
	
	</div>
  </footer>
  <?php if(is_front_page()){
  	$campaign_home_query = get_transient( 'campaign_home_query' );
  	if ( $campaign_home_query->have_posts() ) : while ( $campaign_home_query->have_posts() ) : $campaign_home_query->the_post(); 
  	$format = get_post_format();  //Determine post format
			if ( false === $format ) { $format = 'standard'; }
				if ( $format == 'video' ) : locate_template('modal-video.php', true, false); endif;
				if ( $format == 'image' ) : locate_template('modal-image.php', true, false); endif;
				if ( $format == 'link' ) : locate_template('modal-link.php', true, false); endif;
	 endwhile; endif; }
	 elseif (is_page()) {
		$category = get_the_category();
		$category_slug = $category[0]->category_nicename;
		$category_name = $category[0]->cat_name;
		$campaign_query = get_transient( 'campaign_' . $category_slug . 'query' );
				while ( $campaign_query->have_posts() ) : $campaign_query->the_post();
		$format = get_post_format();  //Determine post format
			if ( false === $format ) { $format = 'standard'; }
				if ( $format == 'video' ) : locate_template('modal-video.php', true, false); endif;
				if ( $format == 'image' ) : locate_template('modal-image.php', true, false); endif;
				if ( $format == 'link' ) : locate_template('modal-link.php', true, false); endif;
	 endwhile;  }
	 ?>

  <?php locate_template('parts-script-initiators.php', true, false); ?>
	</body>
</html>