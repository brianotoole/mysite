	<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="blog" class="grid_12">
				<h1><span>learn with <i>me</i></span></h1>
			</div>
		
			<!-- homepage blog loop -->
			<?php query_posts('posts_per_page=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php if ( is_home() ) : ?>

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
			</div><!-- /.entry-summary -->
				<hr>
			</div>
			
			<?php endif; ?><!--/ if is_home() -->
			<?php endwhile; else: ?>
				<p><?php _e('No posts yet.'); ?></p>
			<?php endif; ?>
			<!-- /homepage blog loop -->


			<div id="about" class="grid_9">
			</div>

			<div id="about" class="grid_3 omega text-button">
				<a class="btn-txt" href="/archives">View More Articles</a>
			</div>
		
		
		</div>
	</div>