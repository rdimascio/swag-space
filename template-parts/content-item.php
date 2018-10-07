<?php if( have_rows('brand_items') ): ?>

    <?php while( have_rows('brand_items') ): the_row(); ?>

        <article id="post-<?= the_ID(); ?>" class="grid-item brand-item all <?= the_sub_field('item_type'); ?>">
            <a target="_blank" href="<?php the_sub_field('item_link'); ?>">
                <div class="brand_item-header flex">
                    <div class="item-title flex justify-between items-center">
                        <h5><?php the_sub_field('item_name'); ?></h5>
                    </div>
                </div>
                <div class="item-image" style="background-image: url(<?php the_sub_field('item_image'); ?>)"></div>
            </a>
        </article>
 
    <?php endwhile; ?>
 
<?php endif; ?>