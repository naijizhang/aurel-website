<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Aurel Systems Inc. Chemical process simulation software. Dynamic and steady-state process modeling. CADSIM Plus process engineering tools and services.">
    <meta name="keywords" content="chemical process simulation software,cadsim plus,chemical engineering software,process simulator,dynamic process modeling,process engineering,design,chemical simulator,optimization,dynamic data reconciliation,steady state simulation,pulp and paper,water balance,product tracking,heat and material balance">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

        <header id="masthead" class="site-header" role="banner">
            <div class="header-container">

                <a class="logo-link" href="<?php echo get_home_url(); ?>">
                    <img class="site-logo" alt="home logo" src='<?php echo get_template_directory_uri() . '/assets/images/Aurel_Logo-1.png'; ?>'>
                </a>

                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button> -->
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                </nav><!-- #site-navigation -->
            </div>
            <input type="checkbox" id="nav-trigger" class="nav-trigger " />
            <label for="nav-trigger"> <img class="hamburger-menu-logo" alt="menu logo" src='<?php echo get_template_directory_uri() . '/assets/icons/menu.svg'; ?>'></label>
        </header><!-- #masthead -->

        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'mobile-menu')); ?>

        <div id="content" class="site-content site-home">

            <div id="primary" class="content-area content-home-page">
                <main id="main" class="site-main" role="main">
                    <!-- <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel"> -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <!-- <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                        </ol> -->
                        <div class="carousel-inner slides-container">
                            <div class="carousel-item active each-slide-item slide-item1">
                             <div class="slide1-hook">
                                 <p class="paragraph1">
                                    "Is our capital project going to provide the economic benefits we need?"
                                 </p>
                                 <p class="paragraph2">
                                    Look into the future and find out with <span class="tear">CADSIM Plus</span>.
                                 </p>
                             </div>
                                
                                <img class="banner-img" alt="banner picture" src='<?php echo get_template_directory_uri() . '/assets/banners/Banner1B.png'; ?>'>
                            </div>
                            <!-- <div class="carousel-item each-slide-item slide-item2">
                                <img class="banner-img" alt="banner picture" src='<?php //echo get_template_directory_uri() . '/assets/banners/banner2.png'; ?>'>
                            </div>
                            <div class="carousel-item each-slide-item slide-item3">
                                <img class="banner-img" alt="banner picture" src='<?php //echo get_template_directory_uri() . '/assets/banners/banner3.png'; ?>'>
                            </div>
                            <div class="carousel-item each-slide-item slide-item4">
                                <img class="banner-img" alt="banner picture" src='<?php //echo get_template_directory_uri() . '/assets/banners/banner4.png'; ?>'>
                            </div>
                            <div class="carousel-item each-slide-item slide-item5">
                                <img class="banner-img" alt="banner picture" src='<?php //echo get_template_directory_uri() . '/assets/banners/banner5.png'; ?>'>
                            </div>
                            <div class="carousel-item each-slide-item slide-item6">
                                <img class="banner-img" alt="banner picture" src='<?php //echo get_template_directory_uri() . '/assets/banners/banner6.png'; ?>'>
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
                    <!-- <div class="big-curve1"><img alt="curved background" src='<?php //echo get_template_directory_uri() . '/assets/images/curve-background1.svg';                                             
                                                                                    ?>'></div> -->
                    <section class="section-what-we-do">
                        <div class="what-we-do-container">
                            <h1 class="what-we-do-title">What we do?</h1>
                            <div class="right-column">
                                <p>Aurel Systems has been providing dynamic chemical process simulation software tools and services to chemical engineers for 30+ years.</p>
                                <p>Our CADSIM Plus process simulation tools and services can help you design, investigate, improve, operate and optimize a new or existing process.</p>
                                <p>Save money and time by using the right tools to validate your design before you invest in a capital project.</p>
                            </div>
                        </div>
                        <div class="main-services-container">
                            <div class="each-services">
                                <a class="software-link" href="<?php echo get_permalink(get_page_by_path("cadsim-plus")); ?>">
                                    <div class="service-block service-block1">
                                        <div class="white-block">
                                            <h2>Process Simulation Software</h2>
                                        </div>
                                    </div>
                                </a>
                                <div class="three-links-container">
                                    <!-- <a href="<?php //echo get_post_permalink(get_page_by_path("cadsim-plus")); 
                                                    ?>">
                                        <p>Sales</p>
                                    </a> -->
                                    <a href="<?php echo get_post_permalink(get_page_by_path("support")); ?>">
                                        <p>Support</p>
                                    </a>
                                    <a href="<?php echo get_post_permalink(get_page_by_path("training")); ?>">
                                        <p>Training</p>
                                    </a>
                                </div>
                            </div>
                            <div class="each-services">
                                <div class="service-block service-block2">
                                    <div class="white-block">
                                        <h2>Advanced Modeling Services</h2>
                                    </div>
                                </div>
                                <div class="three-links-container">
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
                            </div>

                            <div class="each-services">
                                <div class="service-block service-block3">
                                    <div class="white-block">
                                        <h2>Process Digital Twin</h2>
                                    </div>
                                </div>
                                <div class="three-links-container">
                                    <a href="<?php echo get_permalink(get_page_by_path("dynamic-data-reconciliation")); ?>">
                                        <p>Dynamic Data Reconciliation</p>
                                    </a>
                                    <a href="<?php echo get_post_permalink(get_page_by_path("product-tracking", OBJECT, "post")); ?>">
                                        <p>Product and Energy Tracking</p>
                                    </a>
                                    <a href="<?php echo get_post_permalink(get_page_by_path("process-optimization", OBJECT)); ?>">
                                        <p>Real-time Optimization</p>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </section>


                    <h2 class="industry-list-title">Industries we serve...</h2>
                    <div class="industry-list-container">
                        <a class="industry-link link30" href="<?php echo get_permalink(get_page_by_path("pulp-paper")); ?>">
                            <div class="each-button" id="pulp">Pulp & Water</div>
                        </a>
                        <a class="industry-link link30" href="<?php echo get_permalink(get_page_by_path("forest-products")); ?>">
                            <div class="each-button" id="forest">Forest Products</div>
                        </a>
                        <a class="industry-link link30" href="<?php echo get_permalink(get_page_by_path("food-processing")); ?>">
                            <div class="each-button" id="food">Food Processing</div>
                        </a>
                        <a class="industry-link link40" href="<?php echo get_permalink(get_page_by_path("water-waste-water")); ?>">
                            <div class="each-button" id="water">Water & Waste Water Treatment</div>
                        </a>
                        <a class="industry-link link25" href="<?php echo get_permalink(get_page_by_path("mineral-processing")); ?>">
                            <div class="each-button" id="mineral">Mineral Processing</div>
                        </a>
                        <a class="industry-link link25" href="<?php echo get_permalink(get_page_by_path("research-learning")); ?>">
                            <div class="each-button" id="research">Research & Learning</div>
                        </a>
                    </div>

            </div>
            <div class="front-page-linear-background"></div>
            <button type="button" class="btn btn-primary get-contact-info" data-toggle="modal" data-target="#exampleModal">
                <div class="contact-icon-container">
                    <img class="button-icon-top" alt="contact us" src='<?php echo get_template_directory_uri() . '/assets/icons/mail.svg'; ?>' />
                    <p class="contact-hint">Contact</p>
                    <img class="button-icon-bottom" alt="contact us" src='<?php echo get_template_directory_uri() . '/assets/icons/phone.svg'; ?>' />
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