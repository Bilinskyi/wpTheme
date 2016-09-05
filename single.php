<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PhotoTheme
 */

get_header(); ?>

</header>	

<div class="section-bg">
	<div class="wrapper">
		
		
		<?php
		while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', get_post_format() );

		

		

		endwhile; // End of the loop.
		?>

	</div>
</div>


<div class="section-posts">
	<div class="wrapper">
		<div class="title">ПОСЛЕДНИЕ ПОСТЫ</div>
		<div class="wrapp-posts wrapper blog-post main-p">

			<?php
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$temp = $wp_query;
			$wp_query = null;
			$args = array( 
				'post_type' => 'post',
				'posts_per_page' => 3,
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

	<div class="center">
		<a href="<?php bloginfo('url') ?>/?page_id=17" class="btn"><span>ПОКАЗАТЬ ДРУГИЕ ПОСТЫ</span></a>
	</div>
</div>
</div>





<?php
get_footer();
