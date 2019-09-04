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
		<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu',"depth"=>1)); ?>
	</nav><!-- #footer-navigation -->
	<div id="footer-middle-column">
		<img class="footer-tagline" alt="tagline" src='<?php echo get_template_directory_uri() . '/assets/images/Tagline-White.png'; ?>'>
		<div class="social-media-container">
			<a class="link-googlePlus" href="https://www.youtube.com/channel/UC--bNftPX31Tuw1JtWQCQUQ">
				<img class="googleplus-logo" alt="google plus logo" src='<?php echo get_template_directory_uri() . '/assets/icons/youtube.svg'; ?>'>
			</a>
			<a class="link-linkedin" href="https://www.linkedin.com/groups/4336849/profile">
				<img class="linkedin-logo" alt="linkedin logo" src='<?php echo get_template_directory_uri() . '/assets/icons/linkedin.svg'; ?>'>
			</a>
		</div>
		<p class="copyright">&copy;2019 Aurel System Inc.</p>
	</div>
	<div id="footer-right-column">
		<a class="software-link" href="<?php echo get_permalink(get_page_by_path("cadsim-plus")); ?>">
			<img class="software-logo" alt="home logo" src='<?php echo get_template_directory_uri() . '/assets/images/CADSIM-Plus_PrimaryLogo.png'; ?>'>
		</a>


	</div>

</footer><!-- #myFooter -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init();
</script>
</body>

</html>