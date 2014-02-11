<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package strongpencil
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Cutive+Mono|Hammersmith+One|Allerta' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">
	<?php do_action( 'before' ); ?>
	<header>

		<div class="content">
			
			<div class="titleimage">
          		<a href="<?php echo home_url( '/' ); ?>">
          		<img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="Logo"></a>
      		</div>

      		
        	</div>

        		<!--<nav>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		
		</nav>-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
