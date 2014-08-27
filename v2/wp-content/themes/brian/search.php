<?php

get_header(); ?>

	<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
		<div class="container clearfix">
		

			<div id="blog" class="grid_12">
				<h1><span>search results for <i><?php printf( __( '%s', 'twentythirteen' ), get_search_query() ); ?></i></span></h1>
			</div>
			
			<!-- if posts available show posts-->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php if ( is_search() ) : ?>

			<div id="blog" class="grid_11">
				<h3 class="entry-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h3>
			<div class="entry-meta">
				<?php twentythirteen_entry_meta(); ?>
			</div><!-- .entry-meta -->
			</div>
			
			<div id="blog" class="grid_1 omega">
				<div class="blog-thumb">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="Click to Read"><?php the_post_thumbnail(); ?></a>
				</div>
			</div>
			
			<div id="blog" class="grid_12">
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
				<hr>
			</div>
			<?php endif; ?>
			<?php endwhile; ?>
			
			<?php else : ?>
			<div id="blog" class="grid_12">
				<p style="text-align:center;"><?php _e( 'No search results found. Want to try searching again?', 'twentythirteen' ); ?></p>
				<style>form{text-align:center!important;}</style>
				<?php get_search_form(); ?>
			</div>
			<?php endif; ?>
			 
		</div>
			
	</div>
	
	<div id="blog" class="grid_12">
		<?php get_footer(); ?>		
	</div>