	<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="blog" class="grid_12">
				<h1><span><?php printf( __( '%s', 'twentythirteen' ), single_tag_title( '', false ) ); ?> <i>articles</i></span></h1>
			</div>

			<!-- if posts available show posts-->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php if ( is_tag() ) : ?>

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
			<?php endif; ?>

		</div>
			
	</div>
			<div id="blog" class="grid_12">
				<?php include( TEMPLATEPATH . '/includes/sections/five.php' ); // get 404.php page ?>	
			</div>