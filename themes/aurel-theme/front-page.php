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
                        <a class="software-link" href="<?php echo get_permalink(get_page_by_path("cadsim-plus")); ?>">
                            <img class="software-logo" alt="home logo" src='<?php echo get_template_directory_uri() . '/assets/images/cp(blue3black).bmp'; ?>'>
                        </a>
                    </div>
                </div>
                <!-- <div class="carousel-item each-slide-item slide-item2">
                </div> -->
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
        <section class="section-what-we-do">
            <div class="polygon1"></div>
            <h1 class="what-we-do">What we do?</h1>
            <div class="main-services-container">
                <div class="each-services service-block1">
                    <h2>CADSIM Plus Process Simulator</h2>
                    <p>Sales</p>
                    <p>Support</p>
                    <p>Training</p>
                </div>
                <div class="other-services-container">
                    <div class="each-services service-block2">
                        <h2>Modeling services</h2>
                        <p>Just-in-time Modeling Assistance</p>
                        <p>Turnkey Simulations</p>
                        <p>Custom Module Development</p>
                    </div>
                    <div class="each-services service-block3">
                        <h2>Realtime Optimization</h2>
                        <p>Dynamic Data Reconciliation</p>
                        <p>Product Tracking</p>
                        <p>Energy Tracking</p>
                    </div>
                </div>
            </div>
            <div class="what-we-do-container">
                <div class="hexagon" data-aos="fade-right">
                    <div class="hexagon-industry-container1">
                        <a class="industry-link" href="<?php echo get_permalink(get_page_by_path("pulp-paper")); ?>">
                            <div class="industry-logo-container industry1-container">
                                <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/paper.svg'; ?>'>
                                <p class="industry-title">Pulp & Paper</p>
                            </div>

                        </a>
                    </div>
                    <div class="hexagon-industry-container2">
                        <a class="industry-link" href="<?php echo get_permalink(get_page_by_path("forest-products")); ?>">
                            <div class="industry-logo-container industry2-container">
                                <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/rose.svg'; ?>'>
                                <p class="industry-title">Forest Products</p>
                            </div>
                        </a>
                        <a class="industry-link" href="<?php echo get_permalink(get_page_by_path("food-processing")); ?>">
                            <div class="industry-logo-container industry3-container">
                                <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/pizza.svg'; ?>'>
                                <p class="industry-title">Food Processing</p>
                            </div>
                        </a>
                    </div>
                    <div class="hexagon-industry-container3">
                        <a class="industry-link" href="<?php echo get_permalink(get_page_by_path("water-waste-water")); ?>">
                            <div class="industry-logo-container industry4-container">
                                <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/water.svg'; ?>'>
                                <p class="industry-title">Water & Waste Water</p>
                            </div>
                        </a>
                        <a class="industry-link" href="<?php echo get_permalink(get_page_by_path("mineral-processing")); ?>">
                            <div class="industry-logo-container industry5-container">
                                <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/hammer.svg'; ?>'>
                                <p class="industry-title">Mineral Processing</p>
                            </div>
                        </a>
                    </div>
                    <div class="hexagon-industry-container4">
                        <a class="industry-link" href="<?php echo get_permalink(get_page_by_path("research-learning")); ?>">
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


                <div class="front-page-linear-background-picture"></div>
            </div>
            <div class="polygon2"></div>
        </section>


        <div class="front-page-bottom-banner">
            <div class="row-first">
                <a id="software-overview-link" href="<?php echo get_permalink(get_page_by_path("cadsim-plus")); ?>">
                    <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000" class="polygon-container" id="polygon-block1">
                        <h3>CADSIM Plus</h3>
                        <h3>software</h3>
                        <div class="overlay">
                            <a href="<?php echo get_permalink(get_page_by_path("cadsim-plus")); ?>">Chemical Process Simulation Software</a>
                            <a href="<?php echo get_permalink(get_page_by_path("module-libraries", OBJECT, "post")); ?>">Unit Modules</a>
                            <a href="<?php echo get_post_permalink(get_page_by_path("data-reconciliation", OBJECT, "post")); ?>">Dynamic Data Reconciliation</a>
                            <a href="<?php echo get_post_permalink(get_page_by_path("product-tracking", OBJECT, "post")); ?>">Product Tracking</a>
                        </div>
                    </div>
                </a>

                <div class="cadsim-logo-container">
                    <img class="cadsim-logo" alt="cadsim logo" src='<?php echo get_template_directory_uri() . '/assets/images/cp(blue3black).bmp'; ?>'>
                </div>

                <a id="training-link" href="<?php echo get_permalink(get_page_by_path("training")); ?>">
                    <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500" class="polygon-container" id="polygon-block2">
                        <h3>CADSIM Plus</h3>
                        <h3>training</h3>
                        <div class="overlay">
                            <a href="<?php echo get_permalink(get_page_by_path("training")); ?>">Onsite Customized Training</a>
                            <a href="<?php echo get_post_permalink(get_page_by_path("training")); ?>">On-line Training</a>
                            <a href="<?php echo get_post_permalink(get_page_by_path("training")); ?>">Open courses at Aurel</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row-second">
                <a id="moduling-services-link" href="<?php echo get_permalink(get_page_by_path("process-modeling")); ?>">
                    <div data-aos="flip-left" data-aos-easing="ease-out-cub ic" data-aos-duration="1500" class="polygon-container" id="polygon-block3">
                        <h3>Moduling</h3>
                        <h3>services</h3>
                        <div class="overlay">
                            <a href="<?php echo get_permalink(get_page_by_path("process-modeling")); ?>">Just-in-time Modeling Assistance</a>
                            <a href="<?php echo get_post_permalink(get_page_by_path("process-modeling")); ?>">Turnkey Simulations</a>
                            <a href="<?php echo get_post_permalink(get_page_by_path("custom-modules")); ?>">Custom Module Development</a>
                        </div>
                    </div>
                </a>
                <a id="online-application-link" href="<?php echo get_permalink(get_page_by_path("online-applications")); ?>">
                    <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000" class="polygon-container" id="polygon-block4">
                        <h3>Online</h3>
                        <h3>application</h3>
                        <div class="overlay">
                            <a href="<?php echo get_permalink(get_page_by_path("dynamic-data-reconciliation")); ?>">Dynamic Data Reconciliation</a>
                            <a href="<?php echo get_post_permalink(get_page_by_path("product-tracking", OBJECT, "post")); ?>">Product Tracking</a>
                            <a href="<?php echo get_post_permalink(get_page_by_path("energy-tracking", OBJECT, "post")); ?>">Energy Tracking</a>
                        </div>
                    </div>
                </a>

            </div>
        </div>



        <div class="front-page-linear-background"></div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>