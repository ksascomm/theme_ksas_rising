		<?php $category = get_the_category(); ?>
		<div class="ss-row">
			<div class="left">
	            <a  href="#" data-reveal-id="modal_home_<?php the_id(); ?>_image" onclick="ga('send', 'event', 'Photo', 'View', '<?php the_title(); ?>');" class="<?php echo $category[0]->category_nicename; ?>"><?php the_post_thumbnail('circle', array('class' => 'circle')); ?></a>
	        </div>
	        <div class="right">	
	        	<div class="title">
	        	<time><?php the_date(); ?></time>
	            <h3>
	            	<span class="icon-photo <?php echo $category[0]->category_nicename;?>"></span>
	                <a href="#" data-reveal-id="modal_home_<?php the_id(); ?>_image" onclick="ga('send', 'event', 'Photo', 'View', '<?php the_title(); ?>');"><?php the_title(); ?></a>
	            </h3>
	        	</div>
	        </div>
	    </div>