<?php

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<?php get_sidebar(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content-page'); ?>

        <?php endwhile; // End of the loop. 
        ?>

        <div class="content-industries">

            <p>Today, Aurel serves many sectors in the water-based industries with tools and services that are designed to meet the needs of a variety of audiences:</p>

            <div class="what-we-do-container" id="what-we-do-industries">
                <div class="hexagon" id="industries-hexagon" data-aos="fade-right">
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
                                <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/christmas-tree.svg'; ?>'>
                                <p class="industry-title">Forest Products</p>
                            </div>
                        </a>
                        <a class="industry-link" href="<?php echo get_permalink(get_page_by_path("food-processing")); ?>">
                            <div class="industry-logo-container industry3-container">
                                <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/dish.svg'; ?>'>
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
                                <img class="industry-logo" alt="industry logo" src='<?php echo get_template_directory_uri() . '/assets/icons/gold-bars.svg'; ?>'>
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
            </div>
            <div class='references'>
                <p class="reference-title">Icon References</p>
                <div class='references-text'>
                    <div>Gold Bar Icons made by <a href="https://www.flaticon.com/authors/prettycons" title="prettycons">prettycons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                    <div>Dish Icons made by <a href="https://www.flaticon.com/authors/pause08" title="Pause08">Pause08</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                    <div>Tree Icons made by <a href="https://www.flaticon.com/authors/good-ware" title="Good Ware">Good Ware</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                    <div>Other Icons are from Ionicons</div>
                </div>
            </div>
            <p>In addition to the industries listed above, CADSIM Plus has been used for a huge variety of puposes. Our generic modules in the&nbsp;<a href="https://www.aurelsystems.com/module-libraries/">Standard Library</a>&nbsp;(bundled with every copy of CADSIM Plus) includes units that can be adapted for any number of applications. Our software has even been used to model the flow of dollars in a financial model of the banking system!</p>
            <p>If it can flow through a pipe (and even if it can't) CADSIM Plus can be used to model it.</p>


        </div>
        <button type="button" class="btn btn-primary get-contact-info" data-toggle="modal" data-target="#exampleModal">
            <div class="contact-icon-container">
                <img class="button-icon" alt="contact us" src='<?php echo get_template_directory_uri() . '/assets/icons/phone.svg'; ?>' />
                <p class="contact-hint">Contact Us</p>
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