<?php

/**
 * The template for displaying all pages.
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area content-company-history">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>
            <?php the_title('<h2>', '</h2>'); ?>
            <div class="company-history-container">
                <?php the_content(); ?>
            </div>
        <?php endwhile; // End of the loop. 
        ?>

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>