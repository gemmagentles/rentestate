        <footer class="footer" role="contentinfo">
			<div class="footer__container">
				<!-- Social Media -->
				<?php if ( have_rows( 'social_media', 'option' ) ) : ?>
					<div class="footer__social">
					<?php the_field( 'newsletter_sign_up_form', 'option' ); ?>
						<?php while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>
							<?php $social_icon = get_sub_field( 'social_icon' ); ?>
							<?php if ( $social_icon ) { ?>
								<img class="footer__social--icon" src="<?php echo $social_icon['url']; ?>" alt="<?php echo $social_icon['alt']; ?>" />
							<?php } ?>
							<?php the_sub_field( 'social_link' ); ?>
						<?php endwhile; ?>
					</div>
					<?php else : ?>
						<?php // no rows found ?>
				<?php endif; ?>
				<!-- Menu -->
				<nav class="footer__nav" role="navigation">
                    <?php html5blank_nav(); ?>
				</nav>
				<!-- Contact Details -->
				<?php if ( have_rows( 'contact_details', 'option' ) ) : ?>
					<div class="footer__contact">
						<?php while ( have_rows( 'contact_details', 'option' ) ) : the_row(); ?>
						<div class="footer__contact--row">
							<p class="footer__contact--name"><?php the_sub_field( 'name' ); ?></p>
							<p class="footer__contact--phone"><?php the_sub_field( 'phone_number' ); ?></p>
							<p><a class="footer__contact--email" href="mailto:<?php the_sub_field( 'email_address' ); ?>" target="_top"><?php the_sub_field( 'email_address' ); ?></a></p>
						</div>
						<?php endwhile; ?>
					</div>
					<?php else : ?>
						<?php // no rows found ?>
				<?php endif; ?>
			</div>
			<div class="footer__bottom-footer">
				<p class="footer__copyright">
					&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a class="footer__copyright--link" href="/terms-and-conditions/">Terms and Conditions</a> | <a class="footer__copyright--link" href="/site-map/">Site Map</a>
				</p>
				<a href="javascript:" id="top" title="Top">
					<svg class="footer__top-arrow"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-top-arrow" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-top-arrow"/></svg>
				</a>
			</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
