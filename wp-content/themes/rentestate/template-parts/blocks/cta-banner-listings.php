<?php if ( have_rows( 'cta_banner_block', 'option' ) ) : ?>
    <?php while ( have_rows( 'cta_banner_block', 'option' ) ) : the_row(); ?>
        <div class="cta-banner__wrapper" style="background-image: url('<?php the_sub_field( 'banner_image' ); ?>');">
            <div class="cta-banner__container">
                <div class="cta-banner__text-box">
                    <h3><?php the_sub_field( 'heading' ); ?></h3>
                    <p class="cta-banner__paragraph"><?php the_sub_field( 'paragraph' ); ?></p>
                    <?php $button_link = get_sub_field( 'button_link' ); ?>
                    <?php if ( $button_link ) { ?>
                        <a class="cta-banner__button dark-button" href="<?php echo $button_link['url']; ?>" target="<?php echo $button_link['target']; ?>"><?php echo $button_link['title']; ?>
                            <svg class="cta-banner__button--icon dark-button--icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-arrow" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-arrow"/></svg>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
