<?php

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area newsletters-content">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content-page'); ?>

        <?php endwhile; // End of the loop. 
        ?>

        <div class="newsletters-container">
            <?php $newsletters = aurel_get_newsletters();
            $count = 0; ?>
            <?php foreach ($newsletters as $post) : setup_postdata($post); ?>
                <article data-aos="zoom-out-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000" class="each-newsletter">
                    <?php if ($count === 0) : ?>
                        <div class="badge badge-pill badge-danger new-badge">New!</div>
                    <?php endif ?>

                    <a class="btn btn-primary newsletter-toggle-button" data-toggle="collapse" href="#multiCollapseExample<?php echo $count ?>" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><?php echo the_title(); ?></a>
                    <div class="collapse multi-collapse" id="multiCollapseExample<?php echo $count ?>">
                        <div class="card card-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>
                <?php $count++; ?>
            <?php endforeach;
            wp_reset_postdata(); ?>
        </div>



    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>