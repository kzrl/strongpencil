<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package strongpencil
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<a href="/about">
          		<img id="aboutme" src="<?php echo get_template_directory_uri(); ?>/images/about.png" alt="About"></a>
			<a href="/about">
          		<img id="aboutpic" src="<?php echo get_template_directory_uri(); ?>/images/anna.png" alt="Pic"></a>
          	
          	<a href="http://annafarrell.net">
          		<img src="<?php echo get_template_directory_uri(); ?>/images/professional.png" alt="Portfolio"></a>
          	<a href="http://myholidayinhawaii.blogspot.com/">
          		<img src="<?php echo get_template_directory_uri(); ?>/images/hawaii.png" alt="Otherblog"></a>

          	<a href="http://twitter.com/strongpencil">
          		<img class="social" src="<?php echo get_template_directory_uri(); ?>/images/tweet3.png" alt="Twitter"></a>
          	<a href="http://instagram.com/annafg">
          		<img class="social" src="<?php echo get_template_directory_uri(); ?>/images/insta3.png" alt="Instagram"></a>
				
			</aside>

			
		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
