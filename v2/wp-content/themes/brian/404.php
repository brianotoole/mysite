<?php

get_header(); ?>

	<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<div id="blog" class="grid_12">
				<h1><span>Nothing found <i>404</i></span></h1>
			</div>
			
			<div id="blog" class="grid_12">
				<p style="text-align:center;"><?php _e( 'What  you are looking for no longer exists. Have you tried searching for it?', 'twentythirteen' ); ?></p>
				<style>form{text-align:center!important;}</style>
				<?php get_search_form(); ?>
			</div>
			 
		</div>
			
	</div>
	
	<div id="blog" class="grid_12">
		<?php get_footer(); ?>	
	</div>