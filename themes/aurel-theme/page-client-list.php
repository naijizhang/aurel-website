<?php

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<?php get_sidebar(); ?>

<div id="primary" class="content-area content-client-list">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content-withhero'); ?>

        <?php endwhile; // End of the loop. 
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>