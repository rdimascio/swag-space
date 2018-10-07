<?php if( have_rows('brand_items') ): ?>

    <?php while( have_rows('brand_items') ): the_row(); ?>

        <article id="post-<?= the_ID(); ?>" class="grid-item all <?= the_sub_field('item_type'); ?>">
            <a target="_blank" href="<?php the_sub_field('item_link'); ?>">
                <div class="item-header flex">
                    <!-- <div class="item-logo flex justify-start items-center">
                        <img src="https://s3-us-west-1.amazonaws.com/cdn.swag.space/icons/<?= the_field('brand_logo'); ?>.svg" class="logo" />
                    </div> -->
                    <div class="item-title flex justify-between items-center">
                        <h5><?php the_sub_field('item_name'); ?></h5>
                    </div>
                </div><!-- .item-header -->
                <div class="item-image" style="background-image: url(<?php the_sub_field('item_image'); ?>)"></div>
            </a>
        </article><!-- .grid-item -->
 
    <?php endwhile; ?>
 
<?php endif; ?>