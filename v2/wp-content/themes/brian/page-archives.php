<?php
/*
Template Name: Archives 
*/

get_header(); 
?>

	<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="blog" class="grid_12">
				<h1><span>blog <i>archives</i></span></h1>
			</div>

			<!-- get latest posts ordered by $latest -->
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php $latest = array(
					'posts_per_page' => 12,
					'order'=> 'DESC');
				  $postslist = get_posts( $latest); foreach ( $postslist as $post ) : setup_postdata( $post );
			 ?> 

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
			
			<!-- /get posts, reset post data()-->
			<?php endforeach; wp_reset_postdata();?>
			<?php endwhile; else: ?>
				<p><?php _e('No posts yet.'); ?></p>
			<?php endif; ?>
		
		</div>
	</div>

			<div id="blog" class="grid_12">
				<?php get_footer(); ?>	
			</div>