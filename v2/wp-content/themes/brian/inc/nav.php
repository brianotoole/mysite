<?php if ( is_front_page() && is_home() ) { //default homepage, doesn't need anchor links in <li> ?>
<div class="menu">
	<div class="container clearfix">
		<div id="nav" class="grid_12 omega">
			<ul class="navigation">
				<li data-slide="1">About</li>
				<li data-slide="2">Blog</li>
				<li data-slide="3">Work</li>
				<li data-slide="4">Contact</li>
			</ul>
		</div>
	</div>
</div>
	
<?php } elseif ( is_single() ) { //blog view, needs anchor links in <li> ?>
<div class="menu">
	<div class="container clearfix">
		<div id="nav" class="grid_12 omega">
			<ul class="navigation">
				<li><a href="http://brianzotoole.com/#slide1">About</a></li>
				<li><a href="http://brianzotoole.com/archives">Blog</a></li>
				<li><a href="http://brianzotoole.com/#slide3">Work</a></li>
				<li><a href="http://brianzotoole.com/#slide4">Contact</a></li>
			</ul>
		</div>
	</div>
</div>
<?php } else { //others ?>
<div class="menu">
	<div class="container clearfix">
		<div id="nav" class="grid_12 omega">
			<ul class="navigation">
				<li><a href="http://brianzotoole.com/#slide1">About</a></li>
				<li><a href="http://brianzotoole.com/archives">Blog</a></li>
				<li><a href="http://brianzotoole.com/#slide3">Work</a></li>
				<li><a href="http://brianzotoole.com/#slide4">Contact</a></li>
			</ul>
		</div>
	</div>
</div>
<?php } ?>
