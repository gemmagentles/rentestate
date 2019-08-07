<!-- This block is called inside the single-listing.php file to be able to show on custom posts -->
<?php if ( have_rows( 'content_lists' ) ) : ?>

<div class="content-lists__wrapper">
	<?php while ( have_rows( 'content_lists' ) ) : the_row(); ?>
        <h2 class="content-lists__heading">Property Description</h2>
		<div class="content-lists__paragraph"><?php the_sub_field( 'property_description' ); ?></div>
        <h2 class="content-lists__list--heading">Basic Details</h2>
		<?php if ( have_rows( 'basic_details' ) ) : ?>
			<?php while ( have_rows( 'basic_details' ) ) : the_row(); ?>
            <ul class="content-lists__list">
                <li>
                    <h3 class="content-lists__sub-heading">Property Type</h3>
                    <?php the_sub_field( 'property_type' ); ?>
                </li>
                <li>
                    <h3 class="content-lists__sub-heading">Availability</h3>
                    <?php the_sub_field( 'availability' ); ?>
                </li>
                <li>
                    <h3 class="content-lists__sub-heading">Bedrooms</h3>
                    <?php the_sub_field( 'bedrooms' ); ?>
                </li>
                <li>
                    <h3 class="content-lists__sub-heading">Bathrooms</h3>
                    <?php the_sub_field( 'bathrooms' ); ?>
                </li>
                <li>
                    <h3 class="content-lists__sub-heading">Year Built</h3>
                    <?php the_sub_field( 'year_built' ); ?>
                </li>
                <li>
                    <h3 class="content-lists__sub-heading">Neighbourhood</h3>
                    <?php the_sub_field( 'neighbourhood' ); ?>
                </li>
                <li>
                    <h3 class="content-lists__sub-heading">Suite Area</h3>
                    <?php the_sub_field( 'suite_area' ); ?> SQ.FT.
                </li>
                <li>
                    <h3 class="content-lists__sub-heading">Property ID</h3>
                    <?php the_sub_field( 'property_id' ); ?>
                </li>
            </ul>
			<?php endwhile; ?>
		<?php endif; ?>
        <h2 class="content-lists__list--heading">Features</h2>
		<?php // features ( value )
		$features_array = get_sub_field( 'features' );
        if ( $features_array ):
            ?><ul class="content-lists__list content-lists__features-list"><?php
            foreach ( $features_array as $features_item ):
                ?><li class="content-lists__list--item"><?php
                    echo $features_item;
                ?></li><?php
            endforeach;
            ?></ul><?php
		endif; ?>
	<?php endwhile; ?>
    </div>
<?php endif; ?>
