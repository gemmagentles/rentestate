<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<section>
			<?php get_template_part('template-parts/blocks/article-hero'); ?> 		
		</section>

		<section class="individual-listing__layout">
			<div class="individual-listing__layout--left">
				<?php get_template_part('template-parts/blocks/content-lists'); ?> 	
				<?php get_template_part('template-parts/blocks/map'); ?> 	
			</div>
			<div class="individual-listing__layout--right">
				<div class="sidebar-form-test">Sidebar Form Placement</div>	
			</div>
		</section>
		
	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->

	<section>
		<?php get_template_part('template-parts/blocks/cta-banner-listings'); ?> 		
	</section>

	</main>

<?php get_footer(); ?>
