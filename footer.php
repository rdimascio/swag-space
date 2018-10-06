<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Swag_Space
 */

?>

        <footer class="footer">
            <div class="flex justify-between items-center">

            </div>
        </footer><!-- .footer -->
    </div><!-- .page-wrapper -->

    <div id="submit-modal-overlay">
        <div id="submit-modal-popup" class="text-center items-center align-items">
            <div class="submit-modal-intro-gif"></div>
            <div class="submit-modal-intro-header">
                <h2><img src="<?= get_template_directory_uri() . '/images/emoji/praise.png'; ?>" width="32" /> Enter your company info and we'll be in touch</h2>
            </div>
            <div class="submit-modal-content">
                <form sheetsu="https://sheetsu.com/apis/v1.0/4301842a73a1" sheetsu-sheet="submissions" sheetsu-after-submit="/thank-you">
                    <input class="modal_input" type="text" id="Name" name="Name" required placeholder="Full Name">
                    <input class="modal_input" type="text" id="Email" name="Email" required placeholder="Company Email">
                    <input class="modal_input" type="text" id="Company" name="Company" required placeholder="Company Name">
                    <input class="modal_input" type="text" id="URL" name="URL" required placeholder="Company URL">
                    <input class="modal_input submit" id="submit" type="submit">
                </form>
            </div>
        </div>
    </div>

    <div id="request-modal-overlay">
        <div id="request-modal-popup">
            <div class="request-modal-intro-img"></div>
            <div class="request-modal-content text-center items-center align-items">
                <h2>This is a popup</h2>
                <p>You just triggered a popup</p>
            </div>
        </div>
    </div>

<!--     <div id="loading">
        <div class="loading-content">
            <h1>Munching Pixels...</h1>
            <img id="loading-image" src="https://s3-us-west-1.amazonaws.com/cdn.swag.space/assets/Pacman-1s-200px.gif" alt="Loading..."/>
        </div>
    </div> --><!-- #loading -->

</div><!-- #page -->

<script src="https://platform.wip.chat/widgets.js" type="text/javascript"></script>
<a href="https://wip.chat/@dimasc_io" data-wip>Made by Ryan DiMascio</a>

<?php wp_footer(); ?>

<script>
    $(document).ready(function(){
        // clicking button with class "category-toggle"
        $(".category-toggle").click(function(){
            // get the data-filter value of the button
            var filterValue = $(this).attr('data-filter');
            // show all items
            if(filterValue == "all") {
                // by default, show all items
                $(".all").show("fast");
            }
            else {
                // hide all items
                $(".all").not('.'+filterValue).hide("fast");
                // and then, show only items with selected data-filter value
                $(".all").filter('.'+filterValue).show("fast");
            }
        });

        $(window).scroll(function(){
            var winTop = $(window).scrollTop();

            if(winTop >= 120){
                $(".sticky-header").addClass("sticky");
            }
            else {
                $(".sticky-header").removeClass("sticky");
            }//if-else
        });//win func.

        $("#go").click(function() {
            window.scroll({
                top: 620,
                left: 0,
                behavior: 'smooth'
            });
        });

        $('#submit-modal-trigger').click(function() {
            $('#submit-modal-overlay').fadeIn(300);
        });

        $(document).click(function(event) {
            //if you click on anything except the modal itself or the "open modal" link, close the modal
            if (!$(event.target).closest("#submit-modal-trigger,#submit-modal-popup").length) {
                $("body").find("#submit-modal-overlay").fadeOut(300);
            }
        });

        $('#request-modal-trigger').click(function() {
            $('#request-modal-overlay').fadeIn(300);
        });

        $(document).click(function(event) {
            //if you click on anything except the modal itself or the "open modal" link, close the modal
            if (!$(event.target).closest("#request-modal-trigger,#request-modal-popup").length) {
                $("body").find("#request-modal-overlay").fadeOut(300);
            }
        });

        // function hide_loading(){
        //     $("#loading").hide();
        // };
        // window.setTimeout( hide_loading, 1500 ); // 1.5 seconds

    });
</script>

</body>
</html>
