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

			<div id="copyright">&copy; 2014. Auditorium Theatre of Roosevelt University. All Rights Reserved.<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-taproot_thanks.png" alt="website designed pro bono by Taproot Foundation" /></div>
			
			
		</div><!-- .site-info -->
		
	
			
	</footer><!-- #colophon -->
	<div id="footer-padding">&nbsp;</div>

</div><!-- #page -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19201079-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>
</body>
</html>