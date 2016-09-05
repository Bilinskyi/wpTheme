<?php
/*
Single Post Template: Singlegallerrys
Description: This part is optional, but helpful for describing the Post Template
*/
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PhotoTheme
 */

get_header(); ?>

</header>

<div class="section-all-post">

  <div class="wrapper">
    <div class="line clearfix">
      <div class="line-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/line-logo.png" alt="" width="81" height="80"></div>
      <div class="center-y">
        <div class="head"><?php echo get_custom('tab_2') ?></div>
        <div class="dsc"><?php the_title(); ?></div>
      </div>
    </div>
  </div>

  <div class="wrapper gallery-opened">


    <?php
    while ( have_posts() ) : the_post();

    the_content();

		endwhile; // End of the loop.
		?>

  </div>
</div>
<?php

get_footer();
