<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header">

	<!-- home page blog archive content-->
	<div id="test" class="grid_12">	
		<?php if ( is_home() ) : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></h1></a>
		</h1>
	</div>
	
	<div id="test" class="grid_4">
		<div class="entry-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div>
	</div>
	
    <div id="test" class="grid_8 omega">
	    <div class="entry-meta">
			<?php twentythirteen_entry_meta(); ?>
		</div><!-- .entry-meta -->
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

	</div><!--/.grid_8 omega-->
	<?php endif;  // home() ?>
	
	
	
	
	
	
	
	
	<!-- single page default post type content-->
	<?php if ( is_single() ) : ?>

	<div id="test" class="grid_1">	
		<?php the_post_thumbnail(); ?>
		<div class="entry-meta">
			<?php twentythirteen_entry_meta(); ?>
		</div><!-- .entry-meta -->

	</div>
	
	<div id="test" class="grid_10 omega">	
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		</div><!-- .entry-content -->
	</div>
	<?php endif; // archive() ?>
	
</header>	

	<footer class="entry-meta">
		
	</footer><!-- .entry-meta -->
</article><!-- #post -->
