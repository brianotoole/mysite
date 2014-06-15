<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>
			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				&copy; <?php echo date('Y') ?> | <a href="#">brianzotoole.com</a><a href="#" id="smoothup"></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<script>
    //back to top
    jQuery(document).ready(function($){
	jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() < 200) {
			jQuery('#smoothup') .fadeOut();
        } else {
			jQuery('#smoothup') .fadeIn();
        }
    });
    //smooth up back to top
	jQuery('#smoothup').on('click', function(){
		jQuery('html, body').animate({scrollTop:0}, 'fast');
		return false;
		});
	});
	</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "ur-890bc20-da0d-dcb2-afc6-1de125fb68d4", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>

	<?php wp_footer(); ?>
</body>
</html>