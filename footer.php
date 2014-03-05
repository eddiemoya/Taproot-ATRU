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
			<?php dynamic_sidebar( 'footer' ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu' ) ); ?>

<div id="copyright">&copy; 2014. Auditorium Theatre of Roosevelt University. All Rights Reserved.</div>
		</div><!-- .site-info -->
	
		
	</footer><!-- #colophon -->
	<div id="footer-padding">&nbsp;</div>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>