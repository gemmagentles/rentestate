<?php if ( have_rows( 'anchor_list_block' ) ) : ?>
    <div class="anchor-list__wrapper">
        <div class="anchor-list__container">
            <?php while ( have_rows( 'anchor_list_block' ) ) : the_row(); ?>
                <?php if ( have_rows( 'list' ) ) : $i = 0; ?>
                <div class="anchor-list__sidebar">
                    <h3 class="anchor-list__sidebar--heading">Select a service</h3>
                    <ul class="anchor-list__anchor-links-wrapper">
                        <?php while ( have_rows( 'list' ) ) : $i++; the_row(); ?>
                        <li class="anchor-list__anchor-link">
                            <a href="#anchor-<?php echo $i; ?>" class="anchor-list__anchor-link--link"><?php the_sub_field( 'heading' ); ?></a>
                            <?php endwhile; ?>
                        </li>
                    </ul>
                </div>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
                <?php if ( have_rows( 'list' ) ) : $i = 0; ?>
                    <ul class="anchor-list__list">
                        <?php while ( have_rows( 'list' ) ) : $i++; the_row(); ?>
                        <li class="anchor-list__list-item">
                            <h3 id="anchor-<?php echo $i; ?>" class="anchor-list__list-item--heading"><?php the_sub_field( 'heading' ); ?></h3>
                                <div class="anchor-list__list-item--paragraph"><?php the_sub_field( 'paragraph' ); ?></div>
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
