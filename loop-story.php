		<?php $category = get_the_category(); ?>
		<div class="ss-row">

			<div class="left">
	            <a href="<?php the_permalink(); ?>" class="<?php echo $category[0]->category_nicename; ?>"><?php the_post_thumbnail('circle', array('class' => 'circle')); ?></a>
	        </div>
	        <div class="right">
	        	<div class="title">
	        	<time><?php the_date(); ?></time>
	            <h3>
	            	<span class="icon-news <?php echo $category[0]->category_nicename;?>"></span>
	                <a href="<? the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	            </h3>
	        	</div>
	        </div>
	    </div>
