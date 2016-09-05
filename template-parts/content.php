<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PhotoTheme
 */

?>

<div class="line clearfix">
	<div class="line-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/line-logo.png" alt="" width="81" height="80"></div>
	<div class="center-y">
		<div class="head"><?php the_title(); ?></div>
		<div class="dsc"><?php the_time('d-m-Y'); ?></div>
	</div>
</div>


	<div class="box clearfix">
		<?php the_content(); ?>
		<div class="social-block">
			<div class="center">
				<div>Рассказать друзьям:</div>
				<div>
					<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
					<script src="//yastatic.net/share2/share.js"></script>
					<div class="ya-share2" data-services="vkontakte,facebook,twitter"></div>
				</div>
			</div>
		</div>
	</div>



