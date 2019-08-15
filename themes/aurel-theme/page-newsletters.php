<?php

/**
 * The template for displaying all pages.
 * Template name: Newsletter
 * @package RED_Starter_Theme
 */

get_header(); ?>

<?php get_sidebar(); ?>
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
        <div class="contact-block">
            <div class="column">
                <h3>Have a story for our newsletter?</h3>
                <p>Let us know how you are using CADSIM Plus!</p>
                <p>Click to e-mail or call us at 604.299.7707</p>
            </div>
            <a href="mailto:mail@aurelsystems.com?subject=*Get%20more%20info%20about%20CADSIM%20Plus">
                Article ideas...
            </a>
        </div>
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