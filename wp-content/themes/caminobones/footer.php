			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
                    </nav>
                    <div class="social"><a href="https://www.facebook.com/El-Camino-de-Los-Altos-204331693004057/timeline/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/1444485090_circle-facebook_.png" ></a><a href="https://de.pinterest.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/1444485032_pinterest.png"></a></div>

					<div class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</div>

				</div>

			</footer>

		</div>
        <!--<script type="text/javascript" src="<?php bloginfo( //'template_url' );?>/library/slider/js/jquery.flexslider.js" > </script>
<script type="text/javascript">
        //Can also be used with $(document).ready()
        jQuery(window) .load(function() {
            animation: "slide"
        });
    });
</script> -->

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
