<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area content-archive-version  content-all-page">
	<main id="main" class="site-main" role="main">

		<header class="entry-header">
			<h1 class="entry-title">Past Updates & Fixes</h1>
		</header><!-- .page-header -->
		<p class="archive-description">This is a comprehensive list of CADSIM Plus software feature updates and fixes, by version number:</p>
		<div class="qa-container remove-margin">
			<?php $timecount = 1000;
			$count = 0; ?>
			<?php $updates = aurel_get_updates(); ?>
			<?php foreach ($updates as $post) : setup_postdata($post); ?>
			<article data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="<?php echo $timecount;
																									$timecount += 200; ?>" class="each-newsletter">
				<?php if ($count === 0) : ?>
				<div class="badge badge-pill badge-danger new-badge">New!</div>
				<?php endif ?>
				<a class="btn btn-primary item-toggle-button" data-toggle="collapse" href="#multiCollapse<?php the_ID(); ?>" role="button" aria-expanded="false" aria-controls="multiCollapse<?php the_ID(); ?>">

					<?php the_title('<p>', '</p>'); ?>
				</a>
				<div class="collapse multi-collapse" id="multiCollapse<?php the_ID(); ?>">
					<div class="card card-body">
						<?php the_content(); ?>
					</div>
				</div>
			</article>
			<?php $count++; ?>


			<?php endforeach;
			wp_reset_postdata(); ?>
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

<?php get_sidebar(); ?>
<?php get_footer(); ?>