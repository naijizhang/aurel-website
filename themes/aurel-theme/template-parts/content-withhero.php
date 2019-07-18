<?php

/**
 * Template part for displaying page content in withhero.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
	<?php the_title('<h1 class="hero-title">', '</h1>'); ?>
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->