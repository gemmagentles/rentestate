<?php /* Template Name: Rent Estate Contact Page Template */ get_header(); ?>

	<main role="main" class="contact-page">
		<!-- section -->
		<section class="contact-page__wrapper">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<h1 class="contact-page__heading">Contact<span class="contact-page__period">.</span></h1>

				<div class="contact-page__container">
					<div class="contact-page__left">

						<!-- Intro -->
						<p class="contact-page__paragraph">We’d love to hear from you. You can get in touch with us by using any of the means below:</p>

						<!-- Personal Contact Details -->
						<?php if ( have_rows( 'contact_details', 'option' ) ) : ?>
							<div class="contact-page__contact-details">
								<?php while ( have_rows( 'contact_details', 'option' ) ) : the_row(); ?>
								<div class="contact-page__contact--row">
									<p class="contact-page__name"><?php the_sub_field( 'name' ); ?></p>
									<p class="contact-page__job-role"><?php the_sub_field( 'job_role' ); ?></p>
									<p class="contact-page__phone"><?php the_sub_field( 'phone_number' ); ?></p>
									<p><a class="contact-page__email" href="mailto:<?php the_sub_field( 'email_address' ); ?>" target="_top"><?php the_sub_field( 'email_address' ); ?></a></p>
								</div>
								<?php endwhile; ?>
							</div>
							<?php else : ?>
								<?php // no rows found ?>
						<?php endif; ?>

						<!-- Generic Office Contact Details -->
						<?php if ( have_rows( 'generic_contact_details', 'option' ) ) : ?>
							<div class="contact-page__contact-details">
								<?php while ( have_rows( 'generic_contact_details', 'option' ) ) : the_row(); ?>
								<div>
									<p class="contact-page__phone">P. <?php the_sub_field( 'phone_number' ); ?></p>
									<p class="contact-page__phone">F. <?php the_sub_field( 'fax_number' ); ?></p>
									<p><a class="contact-page__email" href="mailto:<?php the_sub_field( 'email' ); ?>" target="_top"><?php the_sub_field( 'email' ); ?></a></p>
								</div>
								<div class="contact-page__address">
									<p><?php the_sub_field( 'address' ); ?></p>
								</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>

						<!-- Social Media -->
						<?php if ( have_rows( 'social_media', 'option' ) ) : ?>
							<div class="contact-page__social">
								<?php while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>
									<?php $social_icon = get_sub_field( 'social_icon' ); ?>
									<?php if ( $social_icon ) { ?>
										<a title="<?php echo $social_icon['alt']; ?>" target="_blank" href="<?php the_sub_field( 'social_link' ); ?>">
										<img class="footer__social--icon" src="<?php echo $social_icon['url']; ?>" alt="<?php echo $social_icon['alt']; ?>" /></a>
									<?php } ?>
								<?php endwhile; ?>
							</div>
							<?php else : ?>
								<?php // no rows found ?>
						<?php endif; ?>
						
					</div>
										
					<!-- Newsletter -->
					<div class="contact-page__right">
						<div class="contact-page__newsletter-wrapper">
							<?php the_field( 'newsletter_sign_up_form', 'option' ); ?>
						</div>
					</div>
				</div>

				<br class="clear">


			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->

		<!-- Footer -->
		<footer>
			<div class="contact-footer">
				<div class="contact-footer__container">
					<p class="contact-footer__copyright">
						&copy; <?php echo date('Y'); ?> RE Rent Estate Property Management | <a class="footer__copyright--link" href="/terms-and-conditions/">Terms and Conditions</a> | <a class="footer__copyright--link" href="/site-map/">Site Map</a>
					</p>
				</div>
			</div>
		</footer>
	</main>
