<?php
    /**
     * Fires after the main content, before the footer is output.
     *
     * @since 3.10
     */
    do_action('et_after_main_content');

    if (!is_page_template('page-template-blank.php')):

        $whichFooter = get_field("footer", "option");

    if ($whichFooter === "Divi footer"): ?>

		<footer id="main-footer">
		    <?php get_sidebar('footer');?>
<?php
    if (has_nav_menu('footer-menu')): ?>
		    <div id="et-footer-nav">
		        <div class="container">
		            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu',
                                'depth' => '1',
                                'menu_class' => 'bottom-nav',
                                'container' => '',
                                'fallback_cb' => '',
                            ));
                        ?>
		        </div>
		    </div> <!-- #et-footer-nav -->
		    <?php endif;?>
    <div id="footer-bottom">
        <div class="container clearfix">
            <?php
                if (false !== et_get_option('show_footer_social_icons', true)) {
                    get_template_part('includes/social_icons', 'footer');
                }
                echo et_get_footer_credits();
            ?>
        </div> <!-- .container -->
    </div>
</footer> <!-- #main-footer -->

<?php endif?>

<?php if ($whichFooter === "Boilerplate footer"): ?>

<footer id="custom-footer">

    <?php echo do_shortcode('[et_pb_section global_module="77"][/et_pb_section]'); ?>

</footer> <!-- #custom-footer -->

<?php endif?>

</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' )?>

</div> <!-- #page-container -->

<?php wp_footer();?>

</body>

</html>