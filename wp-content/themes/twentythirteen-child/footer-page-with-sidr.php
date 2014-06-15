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
	
	<!-- Slide-out Menu Items -->	  
	<div id="sidr">
	  <ul>
		   <li><a href="<?php echo home_url(); ?>/#slide1">About <span class="pull-right"><i class="icon-double-angle-right"></i></span></a></li>
		   <li><a href="<?php echo home_url(); ?>/#slide2">Blog <span class="pull-right"><i class="icon-double-angle-right"></i></span></a></li>
		   <li><a href="<?php echo home_url(); ?>/#slide3">Work <span class="pull-right"><i class="icon-double-angle-right"></i></span></a></li>
		   <li><a href="<?php echo home_url(); ?>/#slide4">Contact <span class="pull-right"><i class="icon-double-angle-right"></i></span></a></li>
		   <li><a href="#sidr">Close Menu </a></li>
	  </ul>
	</div>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.sidr.min.js"></script>
	<script>
	jQuery(document).ready(function() {
	  jQuery('#simple-menu').sidr();
	});
	//close menu li on touch/click
	jQuery("#sidr").on("click", "li", function () {
       jQuery.sidr('close', 'sidr');   
    });
    //back to top
    jQuery(document).ready(function($){
	jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() < 200) {
			jQuery('#smoothup') .fadeOut();
        } else {
			jQuery('#smoothup') .fadeIn();
        }
    });
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