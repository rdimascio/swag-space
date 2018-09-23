<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Swag_Space_v0.1
 */

get_header('brand');
?>

    <?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', get_post_type() );

//			the_post_navigation();

    endwhile; // End of the loop.
    ?>

    <div id="all" class="flex grid brand-page justify-start items-center feed">
        <?php while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', 'item' );
        endwhile; ?>
    </div>

<?php
get_footer();