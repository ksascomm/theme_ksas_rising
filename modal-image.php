	<div id="modal_home_<?php the_id(); ?>_image" class="reveal-modal large black_bg">
			<?php the_post_thumbnail('full'); ?>
			<h3><?php the_title(); ?></h3>
			<?php the_excerpt(); ?>
		<a class="close-reveal-modal">&#215;</a>
	</div>