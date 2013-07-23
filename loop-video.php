		<?php $category = get_the_category(); ?>
		<div class="ss-row">
			<div class="left">
	            <a href="#" data-reveal-id="modal_home_<?php the_id(); ?>_video" class="<?php echo $category[0]->category_nicename; ?> trigger"><?php the_post_thumbnail('circle', array('class' => 'circle')); ?></a>
	        </div>
	        <div class="right">
	        	<div class="title">
	        	<time><?php the_date(); ?></time>
	            <h3>
	            <span class="icon-video <?php echo $category[0]->category_nicename;?>"></span>
	                <a href="#" data-reveal-id="modal_home_<?php the_id(); ?>_video"><?php the_title(); ?></a>
	            </h3>
	        	</div>
	        </div>
	    </div>