<?php
/**
 * Template part for displaying swag content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Swag_Space
 */

?>

<?php
$args = array( 'post_type' => 'brand', 'posts_per_page' => 16, 'orderby' => 'date', 'order' => 'ASC' );
$loop = new WP_Query( $args );
$brand_cat = get_the_category();

while ( $loop->have_posts() ) : $loop->the_post(); ?>



    <article id="post-<?= the_ID(); ?>" <?= post_class('grid-item all'); ?>>
        <a data-toggle="modal" class="open_post" data-target="#postModal" href="<?= the_permalink(); ?>">
            <div class="item-header flex">
                <div class="item-logo flex justify-start items-center">
                    <img src="https://s3-us-west-1.amazonaws.com/cdn.swag.space/icons/<?= the_field('brand_logo'); ?>.svg" class="logo" />
                </div>
                <div class="item-title flex justify-between items-center">
                    <h5><?= the_title(); ?></h5>
                </div>
            </div><!-- .item-header -->
            <div class="item-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
        </a>
    </article><!-- .grid-item -->

<?php endwhile; ?>
