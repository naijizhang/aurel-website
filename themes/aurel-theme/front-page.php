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
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
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
                <div class="carousel-item each-slide-item slide-item2">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="polygon1"></div>
        <h1 class="what-we-do">What we do?</h1>
        <div class="what-we-do-container">

            <div class="hexagon" data-aos="fade-right">
                <div class="hexagon-industry-container1">
                    <a class="industry-link" href="<?php echo get_home_url(); ?>">
                        <div class="industry-logo-container industry1-container">
                            <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/paper.svg'; ?>'>
                            <p class="industry-title">Pulp & Paper</p>
                        </div>

                    </a>
                </div>
                <div class="hexagon-industry-container2">
                    <a class="industry-link" href="<?php echo get_home_url(); ?>">
                        <div class="industry-logo-container industry2-container">
                            <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/rose.svg'; ?>'>
                            <p class="industry-title">Forest Products</p>
                        </div>
                    </a>
                    <a class="industry-link" href="<?php echo get_home_url(); ?>">
                        <div class="industry-logo-container industry3-container">
                            <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/pizza.svg'; ?>'>
                            <p class="industry-title">Food Processing</p>
                        </div>
                    </a>
                </div>
                <div class="hexagon-industry-container3">
                    <a class="industry-link" href="<?php echo get_home_url(); ?>">
                        <div class="industry-logo-container industry4-container">
                            <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/water.svg'; ?>'>
                            <p class="industry-title">Water & Waste Water</p>
                        </div>
                    </a>
                    <a class="industry-link" href="<?php echo get_home_url(); ?>">
                        <div class="industry-logo-container industry5-container">
                            <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/hammer.svg'; ?>'>
                            <p class="industry-title">Mineral Processing</p>
                        </div>
                    </a>
                </div>
                <div class="hexagon-industry-container4">
                    <a class="industry-link" href="<?php echo get_home_url(); ?>">
                        <div class="industry-logo-container industry6-container">
                            <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/book.svg'; ?>'>
                            <p class="industry-title">Research & learning</p>
                        </div>
                    </a>
                </div>
                <div class="position-helper-container">
                    <p>Industries</p>
                </div>
            </div>

            <div class="right-column" data-aos="fade-left">
                <p>Aurel Systems has been providing dynamic chemical process simulation software tools and services to chemical engineers for 30+ years.</p>
                <p>Our CADSIM Plus process simulation tools and services can help you design, investigate, improve, operate and optimize a new or existing process.</p>
                <p>Save money and time by using the right tools to validate your design before you invest in a capital project.</p>
            </div>


        </div>
        <div class="front-page-linear-background-picture"></div>
        <div class="polygon2"></div>


        <div class="front-page-bottom-banner">
            <div class="row-first">
                <a>
                    <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000" class="polygon-container" id="polygon-block1">
                        <h3>CADSIM Plus</h3>
                        <h3>software</h3>
                    </div>
                </a>
                <img class="cadsim-logo" alt="cadsim logo" src='<?php echo get_template_directory_uri() . '/assets/images/cp(blue3black).bmp'; ?>'>
                <a>
                    <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500" class="polygon-container" id="polygon-block2">
                        <h3>CADSIM Plus</h3>
                        <h3>training</h3>
                    </div>
                </a>

            </div>
            <div class="row-second">
                <a>
                    <div data-aos="flip-left" data-aos-easing="ease-out-cub ic" data-aos-duration="1500" class="polygon-container" id="polygon-block3">
                        <h3>Moduling</h3>
                        <h3>services</h3>
                    </div>
                </a>
                <a>
                    <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000" class="polygon-container" id="polygon-block4">
                        <h3>Online</h3>
                        <h3>application</h3>
                    </div>
                </a>

            </div>
        </div>



        <div class="front-page-linear-background"></div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>