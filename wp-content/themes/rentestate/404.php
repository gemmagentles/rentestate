<?php  /* Template Name: Rent Estate 404 Page Template */ get_header(); ?>

	<main role="main" class="contact-page">
		<!-- section -->
		<section class="contact-page__wrapper">

			<!-- article -->
			<article id="post-404">

				<h1 class="contact-page__heading">Page not found<span class="contact-page__period">.</span></h1>
				
				<div class="contact-page__container">
					<div class="contact-page__left">

						<!-- Intro -->
						<p class="contact-page__paragraph">You may have miss typed the address or the page may have moved.</p>

							<a class="not-found__button dark-button" href="/"><span>Go to Home</span>
								<svg class="not-found__button--icon dark-button--icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-arrow" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-arrow"/></svg>
							</a>

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
				</div>

			</article>
			<!-- /article -->

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
