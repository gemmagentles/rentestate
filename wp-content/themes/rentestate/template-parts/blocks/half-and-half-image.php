<?php if ( have_rows( 'half_and_half_image_block' ) ) : ?>
    <div class="half-and-half-image__wrapper">
        <?php while ( have_rows( 'half_and_half_image_block' ) ) : the_row(); ?>
            <div class="half-and-half-image__text-wrapper">
                <h2 class="half-and-half-image__heading"><?php the_sub_field( 'heading' ); ?></h2>
                <div class="half-and-half-image__paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
                <?php $button = get_sub_field( 'button' ); ?>
                <?php if ( $button ) { ?>
                    <a class="half-and-half-image__button dark-button" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?>
                    <svg class="half-and-half-image__button--icon dark-button--icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-arrow" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-arrow"/></svg>
                    </a>
                <?php } ?>
            </div>
            <div class="half-and-half-image__image-wrapper">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php if ( $image ) { ?>
                    <img class="half-and-half-image__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php } ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
    