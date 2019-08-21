<?php get_header(); ?>

	<main role="main">
		<!-- Filter bar -->
		<!-- button to click on to open accordion -->
		<div class="listing-filter__wrapper">
			<div class="listing-filter__container">
				<button class="accordion-btn accordion-js">Filter</button>
				<!-- content inside accordion -->
				<div class="listing-filter__inner">
					<?php echo do_shortcode("[searchandfilter id=245]"); ?>
				</div>
			</div>
		</div>
		<!-- section -->
		<section>
			<div class="article-cards__grid">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<?php get_template_part('template-parts/blocks/article-cards'); ?> 		

				<?php endwhile; ?>

				<?php else: ?>

				<!-- article -->
				<article>

					<h1 class="article-cards__no-posts-heading"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

				<?php endif; ?>
			</div>
			<?php
			global $wp_query; // you can remove this line if everything works for you
			
			// don't display the button if there are not enough posts
			if (  $wp_query->max_num_pages > 1 )
				echo '<div class="article-cards__load-button-wrapper"><button id="js-load-more-btn" class="article-cards__load-button">Load More</button></div>';
			?>
		</section>
		<!-- /section -->

		<section>
			<?php get_template_part('template-parts/blocks/cta-banner-listings'); ?> 		
		</section>
		
	</main>

<?php get_footer(); ?>
