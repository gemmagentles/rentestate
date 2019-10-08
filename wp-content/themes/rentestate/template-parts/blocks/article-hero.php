<!-- This block is called inside the single-listing.php file to be able to show on custom posts -->
<?php if ( have_rows( 'article_hero_block' ) ) : ?>
<div class="article-hero__wrapper">
	<?php while ( have_rows( 'article_hero_block' ) ) : the_row(); ?>
	<div class="article-hero__background"></div>
    <div class="article-hero__container">
		<div class="article-hero__text">
			<p class="article-hero__sub-heading"><?php the_sub_field( 'address' ); ?></p>
			<h1 class="article-hero__heading"><?php the_sub_field( 'heading' ); ?></h1>
			<div class="article-hero__features-wrapper">
				<p class="article-hero__features"><?php the_sub_field( 'number_of_bedrooms' ); ?> Bed</p>
				<p class="article-hero__features"><?php the_sub_field( 'number_of_bathrooms' ); ?> Bath</p>
				<p class="article-hero__features"><?php the_sub_field( 'square_feet' ); ?> SF</p>
			</div>
		</div>
		<?php if ( have_rows( 'slider' ) ) : ?>
		<div class="article-hero__slider">
			<?php while ( have_rows( 'slider' ) ) : the_row(); ?>

				<?php $availability = get_sub_field( 'availability' ); ?>
				<?php if ( $availability == 'Available' ) { ?>
					<p class="article-hero__tag article-hero__tag--availability-price">$<?php the_sub_field( 'price' ); ?></p>
				<?php } elseif ( $availability == 'Coming Soon' ) { ?>
					<p class="article-hero__tag article-hero__tag--coming-soon">Coming Soon</p>
				<?php } else { ?>
					<p class="article-hero__tag article-hero__tag--rented">Rented</p>
				<?php } ?>

				<?php if ( have_rows( 'image_slider' ) ) : ?>
				<div class="article-hero__slides">
						<?php while ( have_rows( 'image_slider' ) ) : the_row(); ?>
							<?php $image = get_sub_field( 'image' ); ?>
							<?php if ( $image ) { ?>
								<div>
									<a data-fslightbox="rentestate-gallery" href="<?php echo $image['url']; ?>"> 
										<img class="article-hero__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									</a>
								</div>
							<?php } ?>
						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
				</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
    </div>
	<?php endwhile; ?>
</div>
<?php endif; ?>
