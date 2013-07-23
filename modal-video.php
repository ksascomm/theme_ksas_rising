	    <div id="modal_home_<?php the_id(); ?>_video" class="reveal-modal large black_bg">
	    	<h3><?php the_title(); ?></h3>
			<div class="flex-video"></div>
			<?php the_excerpt(); ?>
			<a class="close-reveal-modal">&#215;</a>
		</div>
		<script>
			<?php $vid_url = get_the_content();
					$embed_vid = "[embed]" . $vid_url . "[/embed]"; 
					$wp_embed = new WP_Embed();
					$post_embed = $wp_embed->run_shortcode($embed_vid); ?>
			var $d = jQuery.noConflict();
	            $d('a[data-reveal-id="modal_home_<?php the_id(); ?>_video"]').click( function(){
	                $d('<?php echo $post_embed; ?>').appendTo('#modal_home_<?php the_id();?>_video .flex-video');
	            });
        </script>
