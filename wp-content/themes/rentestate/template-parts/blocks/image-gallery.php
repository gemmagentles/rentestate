<?php if ( have_rows( 'image_gallery_block' ) ) : ?>
<div class="image-gallery__wrapper">
    <h2 class="image-gallery__heading">Image Gallery</h2>
    <div class="image-gallery__container">
        <?php while ( have_rows( 'image_gallery_block' ) ) : the_row(); ?>
            <?php $image = get_sub_field( 'image' ); ?>
            <?php if ( $image ) { ?>
                <a data-fslightbox="rentestate-gallery" href="<?php echo $image['url']; ?>"> 
                    <img class="image-gallery__image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a> 
            <?php } ?>
        <?php endwhile; ?>
    </div>
</div>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
