<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

</div><!-- #page -->

<footer id="global-footer" role="contentinfo">
	<div class="footer-wrap">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'class' => 'footer-nav' ) ); ?>
		<address>
			<span><a href="http://nestleprofessional.com" style="display: block; width: inherit; height: inherit;">Nestl&eacute; Professional&trade;</a></span>
			P.O. Box 457<br />Rogers, MN 55374-1618<br />1-800-288-8682
		</address>
		<div id="contact-us">
			<h2>Contact Us</h2>
			<?php gravity_form(9, false, false, false, '', false, 900); ?>
		</div>
		<p class="legal">&copy; <?php echo date('Y'); ?> Nestl&eacute; Professional. All rights reserved.<br />All trademarks and other intellectual properties on this site are owned by Soci&eacute;t&eacute; des Produits Nestl&eacute; S.A., Vevey, Switzerland or are used with permission.</p>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>