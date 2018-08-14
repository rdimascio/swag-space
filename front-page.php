<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Swag_Space
 */

get_header();
?>

    <div class="home-header container flex justify-between">
        <div class="flex justify-start">
            <span class="high-converting-copy text-center items-center">
              <h1>All your favorite brands in one place.</h1>
              <p>So you can have the coolest (or cringiest) laptop in the coffee shop.</p>
              <button id="go"><img src="https://s3-us-west-1.amazonaws.com/cdn.swag.space/assets/emojis/1f447.png" width="24" /> search swag</button>
            </span>
        </div>

        <div class="avatar-bg flex justify-end">
            <span class="high-converting-design text-center items-center">
              <div class="avatar text-center items-center" id="smile"></div>
            </span>
        </div>
    </div>

    <div id="all" class="flex grid homepage justify-start items-center feed">
        <?php while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', 'swag' );
        endwhile; ?>
    </div>

<!--    <div class="modal hide fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">-->
<!--        <div class="modal-header">-->
<!--            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>-->
<!--            <h5 id="postModalHeader">Modal Header</h5>-->
<!--        </div>-->
<!--        <div class="post-modal-content"></div>-->
<!--    </div>-->

<?php
get_footer();
