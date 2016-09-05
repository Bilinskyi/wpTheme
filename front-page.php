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



<?php

get_template_part( 'template-parts/content', 'home' );

?>


<?php
get_footer();