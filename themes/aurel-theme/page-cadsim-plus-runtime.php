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




            <div id="primary" class="content-area cadsim-runtime-content">
                <main id="main" class="site-main" role="main">

                    <section class="cadsim-banner-container">
                        <div class="cadsim-title-content">
                            <img class="software-logo" alt="software logo" src='<?php echo get_template_directory_uri() . '/assets/images/CADSIM-Plus_PrimaryLogo.png'; ?>'>
                            <h1>Runtime</h1>
                        </div>

                        <div class="three-boxes-container">
                            <!-- <div id="box1" class="box"></div> -->
                            <div id="box2" class="box"></div>
                            <!-- <div id="box3" class="box"></div> -->
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
                    <div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Get a quote...</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form id="contact-form">
                                        <p id="libarary-text">Please select all that apply...</p>
                                        <div id="group-cadsim" class="item50">
                                            <input id="checkbox-cadsim" type="checkbox" name="item" value="CADSIM-Plus">
                                            <label for="checkbox-cadsim">CADSIM Plus</label>
                                        </div>
                                        <div id="group-cadsim-run" class="item50">
                                            <input id="checkbox-cadsim-run" type="checkbox" name="item" value="CADSIM-Plus-Runtime">
                                            <label for="checkbox-cadsim-run">CADSIM Plus Runtime</label>
                                        </div>
                                        <div id="group-purchase" class="item50">
                                            <input id="checkbox-purchase" type="checkbox" name="item" value="Purchase">
                                            <label for="checkbox-purchase">Purchase</label>
                                        </div>
                                        <div id="group-lease" class="item50">
                                            <input id="checkbox-lease" type="checkbox" name="item" value="Lease">
                                            <label for="checkbox-lease">Lease</label>
                                        </div>

                                        <p id="libarary-text">Optional libraries:</p>
                                        <div class="library-container">
                                            <div class="item20">
                                                <input id="checkbox-fiber" type="checkbox" name="libraries" value="Fiber">
                                                <label for="checkbox-fiber">Fiber</label>
                                            </div>
                                            <div class="item20">
                                                <input id="checkbox-power" type="checkbox" name="libraries" value="Power">
                                                <label for="checkbox-power">Power</label>
                                            </div>
                                            <div class="item20">
                                                <input id="checkbox-mineral" type="checkbox" name="libraries" value="Mineral">
                                                <label for="checkbox-mineral">Mineral</label>
                                            </div>
                                            <div class="item60">
                                                <input id="checkbox-HPG" type="checkbox" name="libraries" value="Hydrocarbon Process Group">
                                                <label for="checkbox-HPG">Hydrocarbon Process Group</label>
                                            </div>
                                            <div class="item60">
                                                <input id="checkbox-HPDB" type="checkbox" name="libraries" value="Hydrocarbon Properties Data Base">
                                                <label for="checkbox-HPDB">Hydrocarbon Properties Data Base</label>
                                            </div>
                                            <div class="item60">
                                                <input id="checkbox-AAU" type="checkbox" name="libraries" value="AutoCAD Annotation Utility">
                                                <label for="checkbox-AAU">AutoCAD Annotation Utility</label>
                                            </div>
                                        </div>
                                        <div class="item70">
                                            <label for="licences">Number of Licences (1-10):</label>
                                            <input type="number" id="licences" name="licences" min="1" max="10">
                                            <span class="red">*</span>
                                        </div>

                                        <div class="item70 long-text">
                                            <label for="name">Name:</label>
                                            <input type="text" id="name" name="name">
                                            <span class="red">*</span>
                                        </div>
                                        <div class="item70 long-text">
                                            <label for="company">Company:</label>
                                            <input type="text" id="company" name="company">
                                            <span class="red">*</span>
                                        </div>
                                        <div class="item70 long-text">
                                            <label for="email">Email:</label>
                                            <input type="text" id="email" name="email">
                                            <span class="red">*</span>
                                        </div>
                                        <div class="item70 long-text">
                                            <label for="country">Country:</label>
                                            <input type="text" id="country" name="country">
                                            <span class="red">*</span>
                                        </div>
                                        <div class="comment-container">
                                            <label for="comments">Comments:</label>
                                            <textarea id="comments" rows="4" cols="50"></textarea>
                                        </div>

                                        <input id="contact-submit" type="button" value="Submit" data-toggle="modal">
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>

                </main><!-- #main -->
            </div><!-- #primary -->
            <?php get_sidebar(); ?>
            <?php get_footer(); ?>