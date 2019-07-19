<?php if ( have_rows( 'article_hero_block' ) ) : ?>
	<?php while ( have_rows( 'article_hero_block' ) ) : the_row(); ?>
    <div class="article-cards__card">

    <!-- This is only a slider when you click into the individual page -->
    <?php if ( have_rows( 'slider' ) ) : ?>
		<div class="article-cards__image-wrapper">


			<?php while ( have_rows( 'slider' ) ) : the_row(); ?>
			<p class="article-cards__price">$<?php the_sub_field( 'price' ); ?></p>
                <?php if ( have_rows( 'image_slider' ) ) : ?>
                

				<div class="article-cards__image-container">

						<?php while ( have_rows( 'image_slider' ) ) : the_row(); ?>
							<?php $image = get_sub_field( 'image' ); ?>
							<?php if ( $image ) { ?>
								<div>
                                    <a class="article-cards__link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <img class="article-cards__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
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

		<div class="article-cards__text">
			<p class="article-cards__sub-heading"><?php the_sub_field( 'address' ); ?></p>
			<a class="article-cards__link" href="<?php the_permalink(); ?>"><h1 class="article-cards__heading"><?php the_sub_field( 'heading' ); ?></h1></a>
			<div class="article-cards__features-wrapper">
				<p class="article-cards__features"><?php the_sub_field( 'number_of_bedrooms' ); ?> Bed</p>
				<p class="article-cards__features"><?php the_sub_field( 'number_of_bathrooms' ); ?> Bath</p>
				<p class="article-cards__features"><?php the_sub_field( 'square_feet' ); ?> SF</p>
			</div>
        </div>

	</div>
    <?php endwhile; ?>
    
<?php endif; ?>
