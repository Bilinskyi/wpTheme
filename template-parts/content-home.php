<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PhotoTheme
 */

?>


<div class="wrapper thumb-gallery">
	<div class="tabs-main">
		<?php include(TEMPLATEPATH . '/incl/tabs-caption.php');; ?>

		<div class="tabs-content clearfix">
			<?php
			$args = array( 
				'post_type' => 'gallery1',
				'posts_per_page' => 8, 
				'after' => '2 weeks ago' 
				);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
			?>

			<div class="w-25"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				<?php the_post_thumbnail(array(200, 200)); ?>
				<?php the_title('<span>', '</span>'); ?>
			</a></div>
		<?php endwhile; ?>
		

	</div>

	<div class="tabs-content active clearfix">
		<?php
		$args = array( 
			'post_type' => 'gallery2', 
			'posts_per_page' => 8, 
			'after' => '2 weeks ago' 
			);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); 
		?>

		<div class="w-25"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			<?php the_post_thumbnail(array(200, 200)); ?>
			<?php the_title('<span>', '</span>'); ?>
		</a></div>
	<?php endwhile; ?>
	

</div>

<div class="tabs-content clearfix">
	<?php

	$args = array( 
		'post_type' => 'gallery3', 
		'posts_per_page' => 8, 
		'after' => '2 weeks ago'
		);
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post(); 
	?>

	<div class="w-25"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
		<?php the_post_thumbnail(array(200, 200)); ?>
		<?php the_title('<span>', '</span>'); ?>
	</a></div>
<?php endwhile; ?>

</div>
<div class="center">
	<a href="<?php bloginfo('url') ?>/?page_id=13" class="btn"><span>Смотреть все фото</span></a>
</div>
</div> 
</div>


<div class="section-about" style="background-image: url(<?php the_field('photo-page', 2); ?>)">
	<div class="wrapper">
		<div class="title white"><?php echo get_custom ('about_me'); ?></div>
		<div class="wrapp-about clearfix">

			<img src="<?php the_field ('image-main', 2); ?>" alt="" class="left-img">
			<p>
				<?php echo get_custom ('text_about_me'); ?>
			</p>
		</div>
		<div class="center">
			<a href="<?php bloginfo('url') ?>/?page_id=13" class="btn"><span>ПОРТФОЛИО</span></a>
		</div>
	</div>
</div>

<div class="section-posts">
	<div class="wrapper">
		<div class="title">ПОСЛЕДНИЕ ПОСТЫ</div>
		<div class="wrapp-posts clearfix blog-post main-p">

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
						<a class="none-d" href="<?php the_permalink() ?>"><?php the_title('<div class="n-post">', '</div>'); ?></a>
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

