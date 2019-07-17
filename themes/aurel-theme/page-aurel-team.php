<?php

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content-page'); ?>
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
                                    <img height="106" id="expand-jump-1" class="card__img" src="<?php echo get_the_post_thumbnail_url();?>" alt="Fashion 1" />
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
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?>
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



    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>