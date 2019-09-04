<?php

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<div id="primary" class="content-area content-contact  content-all-page">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part('template-parts/content-page'); ?>

		<?php endwhile; // End of the loop. 
		?>



		<div class="request-container">
			<article class="each-block">
				<a class="btn btn-primary faq-toggle-button" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
					Request a Quote
				</a>
				<div class="collapse multi-collapse" id="multiCollapseExample1">
					<div class="card card-body">
						<form id="contact-form">
							<div id="group-cadsim">
								<input id="checkbox-cadsim" type="checkbox" name="item" value="CADSIM-Plus">
								<label for="checkbox-cadsim">CADSIM Plus</label>
							</div>
							<div id="group-cadsim-run">
								<input id="checkbox-cadsim-run" type="checkbox" name="item" value="CADSIM-Plus-Runtime">
								<label for="checkbox-cadsim-run">CADSIM Plus Runtime</label>
							</div>
							<div id="group-purchase">
								<input id="checkbox-purchase" type="checkbox" name="item" value="Purchase">
								<label for="checkbox-purchase">Purchase</label>
							</div>
							<div id="group-lease">
								<input id="checkbox-lease" type="checkbox" name="item" value="Lease">
								<label for="checkbox-lease">Lease</label>
							</div>

							<p>Optional libraries:</p>
							<div>
								<input id="checkbox-fiber" type="checkbox" name="libraries" value="Fiber">
								<label for="checkbox-fiber">Fiber</label>
							</div>
							<div>
								<input id="checkbox-power" type="checkbox" name="libraries" value="Power">
								<label for="checkbox-power">Power</label>
							</div>
							<div>
								<input id="checkbox-mineral" type="checkbox" name="libraries" value="Mineral">
								<label for="checkbox-mineral">Mineral</label>
							</div>
							<div>
								<input id="checkbox-HPG" type="checkbox" name="libraries" value="Hydrocarbon Process Group">
								<label for="checkbox-HPG">Hydrocarbon Process Group</label>
							</div>
							<div>
								<input id="checkbox-HPDB" type="checkbox" name="libraries" value="Hydrocarbon Properties Data Base">
								<label for="checkbox-HPDB">Hydrocarbon Properties Data Base</label>
							</div>
							<div>
								<input id="checkbox-AAU" type="checkbox" name="libraries" value="AutoCAD Annotation Utility">
								<label for="checkbox-AAU">AutoCAD Annotation Utility</label>
							</div>

							<div>
								<label for="licences">Number of Licences (1-10):</label>
								<input type="number" id="licences" name="licences" min="1" max="10">
								<span class="red">*</span>
							</div>

							<div>
								<label for="name">Name:</label>
								<input type="text" id="name" name="name">
								<span class="red">*</span>
							</div>
							<div>
								<label for="company">Company:</label>
								<input type="text" id="company" name="company">
								<span class="red">*</span>
							</div>
							<div>
								<label for="email">Email:</label>
								<input type="text" id="email" name="email">
								<span class="red">*</span>
							</div>
							<div>
								<label for="country">Country:</label>
								<input type="text" id="country" name="country">
								<span class="red">*</span>
							</div>
							<div>
								<label for="comments">Comments:</label>
								<textarea id="comments" rows="4" cols="50"></textarea>
							</div>

							<input id="contact-submit" type="button" value="Submit" data-toggle="modal">
						</form>
					</div>
				</div>
			</article>
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
		<div class="modal fade" id="thanksModal" tabindex="-1" role="dialog" aria-labelledby="thanksModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="thanksModalLabel">Aurel Systems Inc.</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Thanks for contacting us. Have a nice day!
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>