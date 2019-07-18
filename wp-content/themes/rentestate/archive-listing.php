<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="article-cards__grid">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/blocks/article-cards'); ?> 		

			<?php endwhile; ?>

			<?php else: ?>

			<!-- article -->
			<article>

				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

			</article>
			<!-- /article -->

			<?php endif; ?>
			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->

		<?php
		global $wp_query; // you can remove this line if everything works for you
		
		// don't display the button if there are not enough posts
		if (  $wp_query->max_num_pages > 1 )
			echo '<section class="article-cards__load-button-wrapper"><button id="js-load-more-btn" class="article-cards__load-button">Load More</button></section>';
		?>

		<!-- <section class="article-cards__load-button-wrapper"> -->
			<!-- <button id="js-load-more-btn" class="article-cards__load-button">Load More</button> -->
		<!-- </section> -->

		<section>
			<?php get_template_part('template-parts/blocks/cta-banner-listings'); ?> 		
		</section>
		
	</main>

<?php get_footer(); ?>
