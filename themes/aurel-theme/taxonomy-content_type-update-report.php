<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area content-archive-version">
    <main id="main" class="site-main" role="main">

        <header class="entry-header">
            <h1 class="entry-title">Version History</h1>
        </header><!-- .page-header -->
        <p class="archive-description">This is a comprehensive list of CADSIM Plus software feature updates and fixes, by version number:</p>
        <div class="qa-container remove-margin">
            <?php $timecount = 1000;
            $count = 0; ?>
            <?php while (have_posts()) : the_post(); ?>


                <article data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="<?php echo $timecount;$timecount += 300; ?>" class="each-newsletter">
                <?php if ($count === 0) : ?>
                        <div class="badge badge-pill badge-danger new-badge">New!</div>
                    <?php endif ?>
                    <a class="btn btn-primary item-toggle-button" data-toggle="collapse" href="#multiCollapse<?php the_ID(); ?>" role="button" aria-expanded="false" aria-controls="multiCollapse<?php the_ID(); ?>">



                        <?php the_title('<p>', '</p>'); ?>
                    </a>
                    <div class="collapse multi-collapse" id="multiCollapse<?php the_ID(); ?>">
                        <div class="card card-body">


                            <?php the_content(); ?>

                        </div>
                    </div>
                </article>
                <?php $count++; ?>


            <?php endwhile; ?>
        </div>




    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>