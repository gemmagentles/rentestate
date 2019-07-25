<?php if ( have_rows( 'split_text_block' ) ) : ?>
<div class="split-text__wrapper">
    <div class="split-text__container">
        <?php while ( have_rows( 'split_text_block' ) ) : the_row(); ?>
            <div class="split-text__heading-container">
                <h2 class="split-text__heading"><?php the_sub_field( 'heading' ); ?></h2>
            </div>
            <div class="split-text__paragraph">
                <?php the_sub_field( 'paragraph' ); ?>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>