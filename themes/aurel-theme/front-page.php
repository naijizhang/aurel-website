<?php

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area content-home-page">
    <main id="main" class="site-main" role="main">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol> -->
            <div class="carousel-inner slides-container">
                <div class="carousel-item active each-slide-item slide-item1">
                    <div class="slide1-hook">
                        <p>Are you sure that the capital project that you are planning will provide the economic benefits that you need?</p>
                        <p> What if you could look into the future and know for sure? </p>
                    </div>
                    <div class="slide1-bottom-content">
                        <p>See the future... with</p>
                        <a class="software-link" href="<?php echo get_home_url(); ?>">
                            <img class="software-logo" alt="home logo" src='<?php echo get_template_directory_uri() . '/assets/images/cp(blue3black).bmp'; ?>'>
                        </a>
                    </div>
                </div>
                <!-- <div class="carousel-item each-slide-item slide-item2">
                </div> -->
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
        <div class="polygon1"></div>

        <div class="polygon2"></div>

        <?php /* Start the Loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content'); ?>

        <?php endwhile; ?>


        <div class="polygon1"></div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>