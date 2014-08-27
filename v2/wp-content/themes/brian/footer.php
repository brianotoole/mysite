<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

		</footer><!-- #colophon -->
	</div><!-- #page -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/combined.js"></script>
	<?php wp_footer(); ?>
</body>
</html>