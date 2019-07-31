<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<section>
			<?php get_template_part('template-parts/blocks/article-hero'); ?> 		
		</section>

		<section class="individual-listing__layout">
			<?php get_template_part('template-parts/blocks/content-lists'); ?> 	
			<div class="sidebar-form-test">Sidebar Form Placement</div>	
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
