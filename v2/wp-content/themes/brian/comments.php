<?php
if ( post_password_required() )
	return;
?>
<header class="entry-header">
<div id="comments" class="comments-area">
		<h1><span>leave your <i>thoughts</i></span></h1>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=175195112639351"; //change app ID# when site is live
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div class="fb-comments"data-href="<?php the_permalink(); ?>" data-num-posts="5" mobile="false" width="100%"></div>
<style>.fb-comments, .fb-comments iframe[style], .fb-like-box, .fb-like-box iframe[style] {width: 100% !important;}
.fb-comments span, .fb-comments iframe span[style], .fb-like-box span, .fb-like-box iframe span[style] {width: 100% !important;}
</style>
</div><!-- #comments -->
</header>