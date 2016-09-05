<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PhotoTheme
 */

get_header(); ?>

<div class="wrapper text-l">
	<div class="left-side">
		<h6>Запечатли</h6>
		<h2>ЛЮБОВЬ<br><span>НА ВЕЧНУЮ</span><br>ПАМЯТЬ</h2>
		<a href="#call" class="btn modal-form"><span>ЗАКАЗАТЬ СЪЁМКУ</span></a>
	</div>
</div>
</header>

<div class="wrapper thumb-gallery">
	<div class="tabs-main">
		<?php include(TEMPLATEPATH . '/incl/tabs-caption.php');; ?>
		<div class="tabs-content clearfix">
			<div id="loop">
				<?php
				$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$temp = $wp_query;
				$wp_query = null;
				$args = array( 
				'post_type' => 'gallery1',
				'posts_per_page' => 4,
				 'paged' => $paged
				);
				$wp_query = new WP_Query($args);
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

				<div class="w-25 post"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php the_post_thumbnail(array(200, 200)); ?>
					<?php the_title('<span>', '</span>'); ?>
				</a></div>


			<?php endwhile; // end of the loop. ?>  
		</div>

		<div class="center">
			<div id="pagination"><?php next_posts_link(__('<span>Показать еще</span>')); ?></div>
		</div>


	</div>

	<div class="tabs-content active clearfix">
		<div id="loop2">
			
				<?php
				$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$temp = $wp_query;
				$wp_query = null;
				$args = array( 
				'post_type' => 'gallery2',
				'posts_per_page' => 4,
				 'paged' => $paged
				);
				$wp_query = new WP_Query($args);
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

				<div class="w-25 post"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php the_post_thumbnail(array(200, 200)); ?>
					<?php the_title('<span>', '</span>'); ?>
				</a></div>


			<?php endwhile; // end of the loop. ?>  
		
		</div>

	<div class="center">
		<div id="pagination2"><?php next_posts_link(__('<span>Показать еще</span>')); ?></div>
	</div>


</div>

<div class="tabs-content clearfix">
	<div id="loop3">
		
				<?php
				$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$temp = $wp_query;
				$wp_query = null;
				$args = array( 
				'post_type' => 'gallery3',
				'posts_per_page' => 4,
				 'paged' => $paged
				);
				$wp_query = new WP_Query($args);
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

				<div class="w-25 post"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php the_post_thumbnail(array(200, 200)); ?>
					<?php the_title('<span>', '</span>'); ?>
				</a></div>


			<?php endwhile; // end of the loop. ?>  
		
	</div>

<div class="center">
	<div id="pagination3"><?php next_posts_link(__('<span>Показать еще</span>')); ?></div>
</div>


</div>

</div> <!-- tabs -->  

</div>





<?php
get_footer();