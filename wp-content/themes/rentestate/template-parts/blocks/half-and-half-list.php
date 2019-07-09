<?php if ( have_rows( 'half_and_half_list_block' ) ) : ?>
<div class="half-and-half-list__wrapper">
    <?php while ( have_rows( 'half_and_half_list_block' ) ) : the_row(); ?>
        <div class="half-and-half-list__text-half">
            <h2 class="half-and-half-list__heading"><?php the_sub_field( 'heading' ); ?></h2>
            <div class="half-and-half-list__paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
            <?php $button_link = get_sub_field( 'button_link' ); ?>
            <?php if ( $button_link ) { ?>
                <a class="half-and-half-list__text-button text-button" href="<?php echo $button_link['url']; ?>" target="<?php echo $button_link['target']; ?>"><?php echo $button_link['title']; ?>
                    <svg class="half-and-half-list__text-button--icon text-button--icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-arrow" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-arrow"/></svg>
                </a>
            <?php } ?>
        </div>
        <div class="half-and-half-list__list-half">
            <h3 class="half-and-half-list__list-title"><?php the_sub_field( 'list_title' ); ?></h3>
            <?php if ( have_rows( 'list' ) ) : ?>
                <ul class="half-and-half-list__list-wrapper">
                    <?php while ( have_rows( 'list' ) ) : the_row(); ?>
                        <li class="half-and-half-list__list-item"><?php the_sub_field( 'list_item' ); ?></li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
            <?php $list_button_link = get_sub_field( 'list_button_link' ); ?>
            <?php if ( $list_button_link ) { ?>
                <a class="half-and-half-list__list-button light-button" href="<?php echo $list_button_link['url']; ?>" target="<?php echo $list_button_link['target']; ?>">
                    <?php echo $list_button_link['title']; ?>
                    <svg class="half-and-half-list__list-button--icon light-button--icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-arrow" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-arrow"/></svg>
                </a>
            <?php } ?>
        </div>        
    <?php endwhile; ?>
</div>
<?php endif; ?>