<?php

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content-page'); ?>

		<?php endwhile; // End of the loop. 
		?>
		<div class="contact-block">
			<div class="column">
				<h3>What can <?php echo the_title();?> do for you?</h3>
				<p>We are happy to provide more information!</p>
				<p>Click to e-mail or call us at 604.299.7707</p>
			</div>
			<a href="mailto:mail@aurelsystems.com?subject=*Get%20more%20info%20about%20CADSIM%20Plus">
				<img class="cheatbox-logo" alt="cheatbox logo" src='<?php echo get_template_directory_uri() . '/assets/icons/chatboxes.svg'; ?>'>
				Get more info...
			</a>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>