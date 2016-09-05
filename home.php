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

</header>

<div class="section-all-post">
	<div class="wrapp-posts blog-wp blog-post">
		<div class="wrapper" id="loop">

			<?php
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$temp = $wp_query;
			$wp_query = null;
			$args = array( 
				'post_type' => 'post',
				'posts_per_page' => 4,
				 'paged' => $paged
				);
			$wp_query = new WP_Query($args);
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

			<div class="w-33 post">
				<div class="post-item">
					<?php the_post_thumbnail(); ?> <!-- Картинка поста -->
					<div class="border-post">
						<div class="text-post">

							<?php the_title('<div class="n-post">', '</div>'); ?>
							<div class="d-post"><?php the_time('d-m-Y'); ?></div>
							<?php the_content('Читать далее'); ?>
						</div>
					</div>

				</div>
			</div>


		<?php endwhile; // end of the loop. ?>


	</div>
	<div class="center bottom-btn">
		<div id="pagination" class="btn"><?php next_posts_link(__('<span>Показать еще</span>')); ?></div>
	</div>
</div>
</div>

<?php
get_footer();