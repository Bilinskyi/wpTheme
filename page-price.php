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


<div class="section-bg">
	<div class="wrapper">
		<div class="line clearfix">
			<div class="line-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/line-logo.png" alt="" width="81" height="80"></div>
			<div class="center-y">
				<div class="head">Услуги и цены</div>
			</div>
		</div>

		<div class="box price">
			<?php
			while ( have_posts() ) : the_post();



			the_content(); 


		endwhile; // End of the loop.
		?>

	</div>


</div>
</div>

<div id="form-c" class="hide">
	<form class="form-popup contact-form" method="post" id="feedback-valid-4" action="sendmail.php" novalidate="novalidate">
		<div class="head">Напишите Ваш отзыв</div>
		<div class="inline-bl">
			<input type="text" name="name" placeholder="Ваше имя">  
			<input type="email" name="email" placeholder="Ваш e-mail"> 
		</div>
		<div class="inline-bl">
			<textarea name="comm" placeholder="Ваше сообщение"></textarea>
		</div>

		<button type="submit" class="btn">ОТПРАВИТЬ СООБЩЕНИЕ</button>
	</form>
</div>


<div class="modal hide">
	<h3>Ваш отзыв отправлен</h3>
	<p>
		Ваш отзыв отзыв появится на сайте<br>
		после обработки модератором. Спасибо!
	</p>
</div>

<?php
get_footer();