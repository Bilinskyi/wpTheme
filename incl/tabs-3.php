<div class="tabs-content clearfix">
	<div id="loop">
		<?php
		$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$temp = $wp_query;
		$wp_query = null;
		$wp_query = new WP_Query();
		$wp_query -> query('post_type=gallery1'.'&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<div class="w-25 post"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			<?php the_post_thumbnail(array(200, 200)); ?>
			<?php the_title('<span>', '</span>'); ?>
		</a></div>


	<?php endwhile; // end of the loop. ?>  
</div>

<div class="btn" id="pagination"><?php next_posts_link(__('<span>Показать еще</span>')); ?></div>


</div>