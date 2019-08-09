<?php if ( have_rows( 'list_with_background' ) ) : ?>
    <div class="list-with-background__wrapper">
        <div class="list-with-background__container">
            <?php while ( have_rows( 'list_with_background' ) ) : the_row(); ?>
                <div class="list-with-background__intro">
                    <h2 class="list-with-background__intro--heading"><?php the_sub_field( 'heading' ); ?></h2>
                    <div class="list-with-background__intro--paragraph"><?php the_sub_field( 'intro_paragraph' ); ?></div>
                </div>
                <?php if ( have_rows( 'list' ) ) : ?>
                    <ul class="list-with-background__list">
                        <?php while ( have_rows( 'list' ) ) : the_row(); ?>
                        <li class="list-with-background__list-item">
                            <h3 class="list-with-background__list-item--heading"><?php the_sub_field( 'list_item_heading' ); ?></h3>
                                <div class="list-with-background__list-item--paragraph"><?php the_sub_field( 'list_item_paragraph' ); ?></div>
                            <?php endwhile; ?>
                        </li>
                    </ul>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
