			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<center>
						<a href="https://www.facebook.com/lynchsyndrome"><img alt="Facebook" src="../../images/ic_fb.png" /></a>
						<a href="http://twitter.com/CCAREfightlynch"><img alt="Twitter" src="../../images/ic_tw.png" /></a>
						<a href="https://www.youtube.com/channel/UCl2BpIR3ds6sHQz19c9O15Q"><img alt="Youtube" src="../../images/ic_yt.png" /></a>
						<p>Information on this website is for informational purposes only. It is not meant for diagnosis or treatment of any condition.
						Please discuss all personal health issues with your physician.</p>
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> Colon Cancer Alliance for Research and Education for Lynch Syndrome</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
