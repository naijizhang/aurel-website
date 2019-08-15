<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        <div id="content" class="site-content site-cadsim">


            <?php get_sidebar(); ?>

            <div id="primary" class="content-area cadsim-content">
                <main id="main" class="site-main" role="main">

                    <section class="cadsim-banner-container">
                        <div class="cadsim-title-content">
                            <header class="entry-header">
                                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                            </header><!-- .entry-header -->
                            <p>CADSIM Plus is chemical process simulation software that can perform mass and energy balances and simulate dynamic conditions. It is a first-principles dynamic chemical process simulator and a full-featured Computer Assisted Drawing<a href="https://www.aurelsystems.com/sample-screenshots/">&nbsp;(CAD) front-end</a>&nbsp;in one package. CADSIM Plus includes a comprehensive set of&nbsp;<a href="https://www.aurelsystems.com/module-libraries/">generic process modules</a>&nbsp;and has a number of&nbsp;<a href="https://www.aurelsystems.com/optional-module-libraries/">optional module libraries</a>&nbsp;for various applications.</p>
                        </div>

                        <div id="flask">
                            <div class="background"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113 130">
                                <g>
                                    <path fill='rgb(27,68,127)' d="M0,0v130h112.084L111.75,0H0zM94.75,128C71,128,56,128,56,128s-14.873,0-38.623,0s-13.945-19.422-6.33-35.945S40,41.25,40,41.25V3h16h11v38.25c0,0,23.901,34.283,31.517,50.805S118.5,128,94.75,128z"></path>
                                    <path fill="none" stroke="#fff" stroke-width="5" stroke-miterlimit="10" d="M56,127.5c0,0-14.873,0-38.623,0s-13.695-19.172-6.08-35.695C18.912,75.283,40.5,41.25,40.5,41.25V2.5h-9H56h19.5h-8v38.75c0,0,23.651,34.033,31.267,50.555c7.615,16.523,19.733,35.695-4.017,35.695S56,127.5,56,127.5z"></path>
                                </g>
                            </svg>
                            <div class="bubble b0"></div>
                            <div class="bubble b1"></div>
                            <div class="bubble b2"></div>
                            <div class="bubble b3"></div>
                            <div class="bubble b4"></div>
                            <div class="bubble b5"></div>
                            <div class="bubble b6"></div>
                            <div class="bubble b7"></div>
                            <div class="bubble b8"></div>
                            <div class="bubble b9"></div>
                            <div class="swirl s0"></div>
                            <div class="swirl s1"></div>
                            <div class="swirl s2"></div>
                            <div class="swirl s3"></div>
                            <div class="swirl s4"></div>
                            <div class="swirl s5"></div>
                        </div>
                    </section>
                    <div class="cadsim-banner-helper"></div>

                    <?php while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->

                    <?php endwhile; // End of the loop. 
                    ?>

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
        </div><!-- #content -->

        <footer id="myFooter" class="site-footer cadsim-footer" role="contentinfo">
            <nav id="footer-navigation" role="navigation">
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
            </nav><!-- #footer-navigation -->
            <div id="footer-middle-column">
                <p class="footer-brief-description">Aurel offers software sales and training and a full line of services, along with custom unit module development. </p>
                <p class="copyright">&copy;2019 Aurel System Inc.</p>
            </div>
            <div id="footer-right-column">
                <a class="software-link" href="<?php echo get_permalink(get_page_by_path("cadsim-plus")); ?>">
                    <img class="software-logo" alt="home logo" src='<?php echo get_template_directory_uri() . '/assets/images/CADSIM-Plus_PrimaryLogo.png'; ?>'>
                </a>
                <div class="social-media-container">
                    <a class="link-googlePlus" href="https://plus.google.com/112787646309351873263">
                        <img class="googleplus-logo" alt="google plus logo" src='<?php echo get_template_directory_uri() . '/assets/icons/googleplus.svg'; ?>'>
                    </a>
                    <a class="link-linkedin" href="https://www.linkedin.com/groups/4336849/profile">
                        <img class="linkedin-logo" alt="linkedin logo" src='<?php echo get_template_directory_uri() . '/assets/icons/linkedin.svg'; ?>'>
                    </a>
                </div>

            </div>

        </footer><!-- #myFooter -->
    </div><!-- #page -->

    <?php wp_footer(); ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>