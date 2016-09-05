<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PhotoTheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js">
	</script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>

		<?php 
		if( is_page( 'home' ) ){
			$headerD = "class='main-page'";
			$imglogo = '';
		} elseif ( is_page( 'portfolio' ) ){
			$headerD = "class='portfolio main-page'";
			$imglogo = '';
		}else {
			$headerD = "class='all-page'";
			$imglogo = '-all';
		}
		?>
		<header <?php echo "$headerD"; ?>>
			<div class="wrapper top-line justify-c">
			<a href="<?php bloginfo( 'url' ); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo<?php echo $imglogo; ?>.png" alt="" width="197" height="94"></a>
				<div class="top-right">

					<?php
					wp_nav_menu( array(
						'theme_location' => 'header_menu',
						'container' => '',
						'container_class' => '',
						'menu_id' => 'main-menu',
						'menu_class' => 'menu'
						));		
						?>


						
						
					</div>
				</div>



