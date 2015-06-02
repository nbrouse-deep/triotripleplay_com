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
        <p><h3><span style="font-style:italic:">Trio</span> NOW HAS PRODUCTS ON AMAZON</h3></p>
        <p><h3><a href="http://www.amazon.com/Trio/pages/default" target="_blank">Order from Amazon</a></h3></p>
		<div id="contact-us">
			<h2>Contact Us</h2>
			<?php gravity_form(9, false, false, false, '', false, 900); ?>
		</div>
		<p class="legal">&copy; <?php echo date('Y'); ?> Nestl&eacute; Professional. All rights reserved.<br />All trademarks and other intellectual properties on this site are owned by Soci&eacute;t&eacute; des Produits Nestl&eacute; S.A., Vevey, Switzerland or are used with permission.</p>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
<img src="https://s.amazon-adsystem.com/iui3?d=3p-hbg&ex-src=www.triotripleplay.com&ex-hargs=v%3D1.0%3Bc%3D9940702346028%3Bp%3D0d15c243-1e12-d291-7b8b-b28f4ea2a94f" width=1 height=1 border=0>
</body>
</html>
