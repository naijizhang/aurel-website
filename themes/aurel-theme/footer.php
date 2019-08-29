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
		<p class="footer-brief-description">BETTER INFORMATION >>> BETTER OPERATION</p>
		<p class="copyright">&copy;2019 Aurel System Inc.</p>
	</div>
	<div id="footer-right-column">
		<a class="software-link" href="<?php echo get_permalink(get_page_by_path("cadsim-plus")); ?>">
			<img class="software-logo" alt="home logo" src='<?php echo get_template_directory_uri() . '/assets/images/CADSIM-Plus_PrimaryLogo.png'; ?>'>
		</a>
		<div class="social-media-container">
			<a class="link-googlePlus" href="https://www.youtube.com/channel/UC--bNftPX31Tuw1JtWQCQUQ">
				<img class="googleplus-logo" alt="google plus logo" src='<?php echo get_template_directory_uri() . '/assets/icons/youtube.svg'; ?>'>
			</a>
			<a class="link-linkedin" href="https://www.linkedin.com/groups/4336849/profile">
				<img class="linkedin-logo" alt="linkedin logo" src='<?php echo get_template_directory_uri() . '/assets/icons/linkedin.svg'; ?>'>
			</a>
		</div>

	</div>

</footer><!-- #myFooter -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init();
</script>
</body>

</html>