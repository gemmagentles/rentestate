<?php if ( have_rows( 'hero_block' ) ) : ?>
    <div class="hero__wrapper">
        <div class="hero__background"></div>
        <div class="hero__container">
            <?php while ( have_rows( 'hero_block' ) ) : the_row(); ?>

            <?php $position = get_sub_field( 'position_of_text' ); ?>

                <?php $heading = get_sub_field( 'heading' ); ?>
                <?php $paragraph = get_sub_field( 'paragraph' ); ?>
                <!-- check if there is actually text to show, if yes then check where the user wants the text to be positioned -->
                <?php if ( $heading || $paragraph ) { ?><div class="<?php if ( $position == above ) { ?> hero__text-wrapper--above<?php } else { ?>hero__text-wrapper--ontop<?php } ?>"><?php } ?>

                    <?php if ( $heading ) { ?>
                        <h1 class="hero__heading"><?php the_sub_field( 'heading' ); ?><span class="hero__period">.</span></h1>
                    <?php } ?>
                    <?php if ( $paragraph ) { ?>
                        <div class="hero__paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
                    <?php } ?>

                <?php if ( $heading || $paragraph ) { ?></div><?php } ?>

                <?php $image = get_sub_field( 'image' ); ?>		
                <img class="hero__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
