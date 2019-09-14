<?php if ( get_field( 'horizontal_slider' ) == 1 ) { 
     // echo 'true'; ?>

		<div class="horizontal-slider__wrapper">
			<h2 class="horizontal-slider__wrapper--heading">Latest Listings</h2>
		<?php
		$queryObject = new WP_Query( 'post_type=listing&posts_per_page=5' );
		// The Loop!
		if ($queryObject->have_posts()) {
			?>
			<div class="horizontal-slider__slides">
			<?php
			while ($queryObject->have_posts()) {
                $queryObject->the_post();
                
                ?>
                <div id="individual-slide">
				<?php $listings_id = get_the_ID(); ?>
					<?php if ( have_rows( 'article_hero_block', $listings_id ) ) : ?>
						<?php while ( have_rows( 'article_hero_block', $listings_id ) ) : the_row(); ?>
						<div class="horizontal-slider__card">

						<!-- This is only a slider when you click into the individual page -->
						<?php if ( have_rows( 'slider', $listings_id ) ) : ?>
							<div class="horizontal-slider__image-wrapper">


								<?php while ( have_rows( 'slider', $listings_id ) ) : the_row(); ?>
								<p class="horizontal-slider__price"><?php the_sub_field( 'price', $listings_id ); ?></p>
									<?php if ( have_rows( 'image_slider', $listings_id ) ) : ?>
									

									<div class="horizontal-slider__image-container">

											<?php while ( have_rows( 'image_slider', $listings_id ) ) : the_row(); ?>
												<?php $image = get_sub_field( 'image', $listings_id ); ?>
												<?php if ( $image ) { ?>
													<div>
														<a class="horizontal-slider__link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
															<img class="horizontal-slider__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
														</a>
													</div>
												<?php } ?>
											<?php endwhile; ?>
											
									</div>
										
									
									<?php else : ?>
										<?php // no rows found ?>
									<?php endif; ?>
								<?php endwhile; ?>
								

							</div>
							<?php endif; ?>

							<div class="horizontal-slider__text">
								<p class="horizontal-slider__sub-heading"><?php the_sub_field( 'address', $listings_id ); ?></p>
								<a class="horizontal-slider__link" href="<?php the_permalink(); ?>"><h1 class="horizontal-slider__heading"><?php the_sub_field( 'heading', $listings_id ); ?></h1></a>
								<div class="horizontal-slider__features-wrapper">
									<p class="horizontal-slider__features"><?php the_sub_field( 'number_of_bedrooms', $listings_id ); ?> Bed</p>
									<p class="horizontal-slider__features"><?php the_sub_field( 'number_of_bathrooms', $listings_id ); ?> Bath</p>
									<p class="horizontal-slider__features"><?php the_sub_field( 'square_feet', $listings_id ); ?> SF</p>
								</div>
							</div>

						</div>
						<?php endwhile; ?>
					<?php endif; ?>

                </div>
			<?php
			}
			?>
			</div>
			<?php
		}
		?>
			<!-- <div class="horizontal-slider__background"></div> -->
		</div>

    <?php
	} else { 
     // echo 'false'; 
	} ?>
