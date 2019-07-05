<?php

/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="myFooter" class="site-footer" role="contentinfo">
	<nav id="footer-navigation" role="navigation">
		<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
	</nav><!-- #footer-navigation -->
	<div id="footer-middle-column">
		<p class="footer-brief-description">Aurel offers software sales and training and a full line of services, along with custom unit module development. </p>
		<p class="copyright">&copy;2019 Aurel System Inc.</p>
	</div>
	<div id="footer-right-column">
		<a class="software-link" href="<?php echo get_home_url(); ?>">
			<img class="software-logo" alt="home logo" src='<?php echo get_template_directory_uri() . '/assets/images/cp(blue3black).bmp'; ?>'>
		</a>
		<div class="social-media-container">
			<a class="link-googlePlus" href="<?php echo esc_url( 'http://www.google.ca' ); ?>">
				<img class="googleplus-logo" alt="google plus logo" src='<?php echo get_template_directory_uri() . '/assets/icons/googleplus.svg'; ?>'>
			</a>
			<a class="link-linkedin"  href="<?php echo esc_url( 'http://www.google.ca' ); ?>">
				<img class="linkedin-logo" alt="linkedin logo" src='<?php echo get_template_directory_uri() . '/assets/icons/linkedin.svg'; ?>'>
			</a>
		</div>

	</div>

</footer><!-- #myFooter -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>