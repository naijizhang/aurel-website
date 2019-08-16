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
                            <img class="software-logo" alt="home logo" src='<?php echo get_template_directory_uri() . '/assets/images/CADSIM-Plus_PrimaryLogo.png'; ?>'>
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
        <div class="big-curve1"><img alt="curved background" src='<?php echo get_template_directory_uri() . '/assets/images/curve-background1.svg'; ?>'></div>
        <section class="section-what-we-do">
            <h1 class="what-we-do">What we do?</h1>
            <div class="main-services-container">
                <div class="each-services service-block1">
                    <h2> <a class="software-link" href="<?php echo get_permalink(get_page_by_path("cadsim-plus")); ?>"><img class="software-logo" alt="home logo" src='<?php echo get_template_directory_uri() . '/assets/images/CADSIM-Plus_PrimaryLogo.png'; ?>'></a><br>Process Simulator</h2>
                    <a href="<?php echo get_post_permalink(get_page_by_path("cadsim-plus")); ?>">
                        <p>Sales</p>
                    </a>
                    <a href="<?php echo get_post_permalink(get_page_by_path("support")); ?>">
                        <p>Support</p>
                    </a>
                    <a href="<?php echo get_post_permalink(get_page_by_path("training")); ?>">
                        <p>Training</p>
                    </a>
                </div>
                <div class="other-services-container">
                    <div class="each-services service-block2">
                        <h2>Modeling Services</h2>
                        <a href="<?php echo get_permalink(get_page_by_path("process-modeling")); ?>">
                            <p>Custom Modeling Assistance</p>
                        </a>
                        <a href="<?php echo get_post_permalink(get_page_by_path("dcs-check-out")); ?>">
                            <p>DCS Check Out</p>
                        </a>
                        <a href="<?php echo get_post_permalink(get_page_by_path("operator-training-simulators")); ?>">
                            <p>Operator Training Simulators</p>
                        </a>
                    </div>
                    <div class="each-services service-block3">
                        <h2>Real-time Optimization</h2>
                        <a href="<?php echo get_permalink(get_page_by_path("dynamic-data-reconciliation")); ?>">
                            <p>Dynamic Data Reconciliation</p>
                        </a>
                        <a href="<?php echo get_post_permalink(get_page_by_path("product-tracking", OBJECT, "post")); ?>">
                            <p>Product and Energy Tracking</p>
                        </a>
                        <a href="<?php echo get_post_permalink(get_page_by_path("process-optimization", OBJECT)); ?>">
                            <p>Process Optimization</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="what-we-do-container">
                 <div class="right-column">
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
                        <!-- <div class="polygon-container" id="polygon-block1"> -->
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
                    <img class="cadsim-logo" alt="cadsim logo" src='<?php echo get_template_directory_uri() . '/assets/images/CADSIM-Plus_PrimaryLogo.png'; ?>'>
                </div>

                <a id="training-link" href="<?php echo get_permalink(get_page_by_path("training")); ?>">
                    <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1500" class="polygon-container" id="polygon-block2">
                        <!-- <div class="polygon-container" id="polygon-block2"> -->
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
                        <!-- <div class="polygon-container" id="polygon-block3"> -->
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
                        <!-- <div class="polygon-container" id="polygon-block4"> -->
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
        <button type="button" class="btn btn-primary get-contact-info" data-toggle="modal" data-target="#exampleModal">
            <div class="contact-icon-container">
                <img class="button-icon-top" alt="contact us" src='<?php echo get_template_directory_uri() . '/assets/icons/phone.svg'; ?>' />
                <p class="contact-hint">Contact</p>
                <img class="button-icon-bottom" alt="contact us" src='<?php echo get_template_directory_uri() . '/assets/icons/mail.svg'; ?>' />
            </div>
            <p class="contact-fixed-text">Click To Contact Us</p>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        We are happy to provide more information!<br>
                        Click to e-mail or call us at 604.299.7707
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="mailto:mail@aurelsystems.com?subject=*Get%20more%20info%20about%20CADSIM%20Plus">
                            <button type="button" class="btn btn-primary">Email</button>
                        </a>
                        <a href="tel:6042997707">
                            <button type="button" class="btn btn-primary">Call</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>