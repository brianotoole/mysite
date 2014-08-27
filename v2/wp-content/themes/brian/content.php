<?php

get_header(); ?>

	<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
		<div class="container clearfix">
			<div id="blog" class="grid_12">
				<h1><span><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></span></h1>
			</div>
			<div id="blog" class="grid_12">
				<?php the_content(); ?>
			</div>
			<div id="blog" class="grid_12">
			<?php get_template_part( 'comments' ); ?>
			</div>
		</div>	
	</div>
	<div id="blog" class="grid_12">
		<?php get_footer(); ?>	
	</div>