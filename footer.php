<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">

			<div id="menu-footer-nav-wrapper">
				<?php wp_nav_menu( array( 'theme_location' => 'footer',  'menu_id' => 'footer-navigation', 'container_class' => 'menu-footer-nav-container') ); ?>
			</div>
			<div id="social-media-label">
				connect with us:
				<?php wp_nav_menu( array( 'theme_location' => 'footer-social-media',  'menu_id' => 'footer-social-media', 'container_class' => 'menu-footer-social-media') ); ?>
			</div>

			<div id="copyright">&copy; 2014. Auditorium Theatre of Roosevelt University. All Rights Reserved.</div>
			
		</div><!-- .site-info -->
		
	
			
	</footer><!-- #colophon -->
	<div id="footer-padding">&nbsp;</div>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>