<?php

/**
 * The template for displaying all pages.
 * Template name: Aurel Team
 * @package RED_Starter_Theme
 */

get_header(); ?>

<?php get_sidebar(); ?>
<div id="primary" class="content-area team-content">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>
            <article id="team-top-banner-container" <?php post_class(); ?>>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->
                <header class="entry-header">
                    <?php the_title('<h1 id="team-page-title">', '</h1>'); ?>
                </header><!-- .entry-header -->
            </article><!-- #post-## -->
        <?php endwhile; // End of the loop. 
        ?>

        <div class="team-member-container">
            <div class="row">
                <?php $members = aurel_get_members(); ?>
                <?php foreach ($members as $post) : setup_postdata($post); ?>

                    <article class="card__cell is-collapsed col-md-3 col-xs-6">
                        <div class="card--basic">
                            <a href="#expand-jump-" id="expand-jump-1">
                                <div class="card__img-container">
                                    <img height="106" id="expand-jump-1" class="card__img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Fashion 1" />
                                </div>
                                <div class="card__text-container">
                                    <!-- <span class="card__text"> -->
                                    <div class="member-brief-text">
                                        <h3 class="member-name">
                                            <?php echo CFS()->get('name'); ?>
                                        </h3>
                                        <p class="member-role">
                                            <?php echo CFS()->get('role_or_title'); ?>
                                        </p>
                                    </div>
                                    <!-- </span> -->
                                </div>
                            </a>
                            <div class="arrow--down"></div>
                        </div>
                        <div class="card--expand">
                            <div class="card--expand__container">
                                <a href="#close-jump-1" class="expand__close"></a>
                                <div id="profile-large-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large'); ?>
                                    <?php endif; ?>
                                    <p class="member-role-expanded">
                                        <?php echo CFS()->get('role_or_title'); ?>
                                    </p>
                                </div>
                                <div class="member-detail-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>


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