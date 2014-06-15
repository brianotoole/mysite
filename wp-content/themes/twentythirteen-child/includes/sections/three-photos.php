<style>
.photostack {
	background: transparent;
	position: relative;
	text-align: center;
	overflow: hidden;
}

.js .photostack {
	height: 580px;
}

.photostack-start {
	cursor: pointer;
}

/* Wrapper and figures */

/* The size of this wrapper can be smaller if the items should not be scattered across the whole container */ 
.photostack > div {
	width: 100%;
	height: 100%;
	margin: 0 auto;
}

.photostack figure {
	width: 320px;
	height: 360px;
	position: relative;
	display: inline-block;
	background: #fff;
	padding: 40px;
	text-align: center;
	margin: 5px;
}

.js .photostack figure {
	position: absolute;
	display: block;
	margin: 0;
}

.photostack figcaption h2 {
	margin: 20px 0 0 0;
	color: #a7a0a2;
	font-size: 16px;
}

.photostack-img {
	outline: none;
	display: block;
	width: 240px;
	height: 240px;
	background: #f9f9f9;
}

.photostack-back {
	display: none;
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background: #fff;
	font-family: "Give You Glory", cursive;
	color: #a7a0a2;
	padding: 50px 40px;
	text-align: left;
	font-size: 22px;
	line-height: 1.25;
}

.photostack-back p {
	margin: 0;
}

.photostack-back p span {
	text-decoration: line-through;
}

/* Navigation dots */
.photostack nav {
	position: absolute;
	width: 100%;
	bottom: 30px;
	z-index: 90;
	text-align: center;
	left: 0;
	-webkit-transition: opacity 0.3s;
	transition: opacity 0.3s;
}

.photostack-start nav {
	opacity: 0;
}
 
.photostack nav span {
	position: relative;
	display: inline-block;
	margin: 0 5px;
	width: 30px;
	height: 30px;
	cursor: pointer;
	background: #aaa;
	border-radius: 50%;
	text-align: center;
	-webkit-transition: -webkit-transform 0.6s ease-in-out, background 0.3s;
	transition: transform 0.6s ease-in-out, background 0.3s;
	-webkit-transform: scale(0.48);
	transform: scale(0.48);
}

.photostack nav span:last-child {
	margin-right: 0;
}

.photostack nav span::after {
	content: "\e600";
	font-family: 'icons';
	font-size: 80%;
	speak: none;
	display: inline-block;
	vertical-align: top;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 30px;
	color: #fff;
	opacity: 0;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	-webkit-transition: opacity 0.3s;
	transition: opacity 0.3s;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.photostack nav span.current {
	background: #888;
	-webkit-transform: scale(1);
	transform: scale(1);
}

.photostack nav span.current.flip {
	-webkit-transform: scale(1) rotateY(-180deg) translateZ(-1px);
	transform: scale(1) rotateY(-180deg) translateZ(-1px);
	background: #555;
}

.photostack nav span.flippable::after {
	opacity: 1;
	-webkit-transition-delay: 0.4s;
	transition-delay: 0.4s;
}

/* Overlays */

/* Initial overlay on photostack container */
.js .photostack::before {
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	background: transparent;
	top: 0;
	left: 0;
	z-index: 100;
	-webkit-transition: opacity 0.3s, visibility 0s 0.3s;
	transition: opacity 0.3s, visibility 0s 0.3s;
}

.js .photostack-start::before {
	-webkit-transition: opacity 0.3s;
	transition: opacity 0.3s;
}

/* Button on photostack container */
.js .photostack::after {
	content: 'View Gallery';
	font-weight: 400;
	position: absolute;
	border: 3px solid #fff;
	text-align: center;
	white-space: nowrap;
	left: 50%;
	top: 50%;
	-webkit-transform: translateY(-50%) translateX(-50%);
	transform: translateY(-50%) translateX(-50%);
	padding: 10px 20px;
	color: #fff;
	text-transform: uppercase;
	letter-spacing: 1px;
	cursor: pointer;
	z-index: 101;
}

.js .photostack::before,
.js .photostack::after {
	opacity: 0;
	visibility: hidden;
}

.js .photostack-start::before,
.js .photostack-start:hover::after,
.touch .photostack-start::after  {
	opacity: 1;
	visibility: visible;
}

/* Overlay on figure */
.photostack figure::after {
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	visibility: visible;
	opacity: 1;
	background: rgba(0,0,0,0.05);
	-webkit-transition: opacity 0.6s;
	transition: opacity 0.6s;
}

/* Hide figure overlay when it becomes current */
figure.photostack-current::after {
	-webkit-transition: opacity 0.6s, visibility 0s 0.6s;
	transition: opacity 0.6s, visibility 0s 0.6s;
	opacity: 0;
	visibility: hidden;
}

/* Special classes for transitions and perspective */
.photostack-transition figure {
	-webkit-transition: -webkit-transform 0.6s ease-in-out;
	transition: transform 0.6s ease-in-out;
}

.photostack-perspective {
	-webkit-perspective: 1800px;
	perspective: 1800px;
}

.photostack-perspective > div,
.photostack-perspective figure {
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

.photostack-perspective figure,
.photostack-perspective figure div {
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.photostack-perspective figure.photostack-flip {
	-webkit-transform-origin: 0% 50%;
	transform-origin: 0% 50%;
}

.csstransformspreserve3d figure.photostack-flip .photostack-back {
	-webkit-transform: rotateY(180deg);
	transform: rotateY(180deg);
	display: block;
}

.no-csstransformspreserve3d figure.photostack-showback .photostack-back {
	display: block;
}

/* The no-JS fallback look does not need to be boring ;) */
.no-js .photostack figure {
	box-shadow: -2px 2px 0 rgba(0,0,0,0.05);
}

.no-js .photostack figure::after {
	display: none;
}

.no-js .photostack figure:nth-child(3n) {
	-webkit-transform: translateX(-10%) rotate(5deg);
	transform: translateX(-10%) rotate(5deg);
}

.no-js .photostack figure:nth-child(3n-2) {
	-webkit-transform: translateY(10%) rotate(-3deg);
	transform: translateY(10%) rotate(-3deg);
}

/* Some custom styles for the demo */

/* Since we don't have back sides for the first photo stack, we don't want the current dot to become too big */
#photostack-1 nav span.current {
	background: #888;
	-webkit-transform: scale(0.61);
	transform: scale(0.61);
}
.full{
	display: inline-block;
	position: absolute;
    top: 200px;
    left: 0;
    width: 100%;
    height: 6em;
}
</style>

	<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
		<div class="container clearfix">
		<script src="<?php bloginfo('stylesheet_directory') ?>/assets/js/modernizr.custom.js"></script>

			<div id="work" class="grid_12" style="height:706px;">
				<h1><span>some of my recent <i>work</i></span></h1>
			</div>
			<div id="work" class="full">
				<section id="photostack-1" class="photostack photostack-start">
				<div>
					<figure>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img src="<?php bloginfo('stylesheet_directory') ?>/img/1.jpg" alt="img01"/></a>
						<figcaption>
							<h2 class="photostack-title">Serenity Beach</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/fhwlSP" class="photostack-img"><img src="<?php bloginfo('stylesheet_directory') ?>/img/2.jpg" alt="img02"/></a>
						<figcaption>
							<h2 class="photostack-title">Happy Days</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/Jmvr4u" class="photostack-img"><img src="<?php bloginfo('stylesheet_directory') ?>/img/3.jpg" alt="img03"/></a>
						<figcaption>
							<h2 class="photostack-title">Beautywood</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/49lN3k" class="photostack-img"><img src="<?php bloginfo('stylesheet_directory') ?>/img/4.jpg" alt="img04"/></a>
						<figcaption>
							<h2 class="photostack-title">Heaven of time</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/NJ1Dhf" class="photostack-img"><img src="<?php bloginfo('stylesheet_directory') ?>/img/5.jpg" alt="img05"/></a>
						<figcaption>
							<h2 class="photostack-title">Speed Racer</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/Ms7VDl" class="photostack-img"><img src="<?php bloginfo('stylesheet_directory') ?>/img/6.jpg" alt="img06"/></a>
						<figcaption>
							<h2 class="photostack-title">Forever this</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="<?php bloginfo('stylesheet_directory') ?>/img/7.jpg" alt="img07"/></a>
						<figcaption>
							<h2 class="photostack-title">Lovely Green</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="<?php bloginfo('stylesheet_directory') ?>/img/8.jpg" alt="img08"/></a>
						<figcaption>
							<h2 class="photostack-title">Wonderful</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="<?php bloginfo('stylesheet_directory') ?>/img/9.jpg" alt="img09"/></a>
						<figcaption>
							<h2 class="photostack-title">Love Addict</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="<?php bloginfo('stylesheet_directory') ?>/img/10.jpg" alt="img10"/></a>
						<figcaption>
							<h2 class="photostack-title">Friendship</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="<?php bloginfo('stylesheet_directory') ?>/img/11.jpg" alt="img11"/></a>
						<figcaption>
							<h2 class="photostack-title">White Nights</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="<?php bloginfo('stylesheet_directory') ?>/img/12.jpg" alt="img12"/></a>
						<figcaption>
							<h2 class="photostack-title">Serendipity</h2>
						</figcaption>
					</figure>
				</div>
			</section>
			</div>
			
			<script src="<?php bloginfo('stylesheet_directory') ?>/assets/js/classie.js"></script>
			<script src="<?php bloginfo('stylesheet_directory') ?>/assets/js/photostack.js"></script>
			<script>
			// [].slice.call( document.querySelectorAll( '.photostack' ) ).forEach( function( el ) { new Photostack( el ); } );
			
			new Photostack( document.getElementById( 'photostack-1' ), {
				callback : function( item ) {
					//console.log(item)
				}
			} );
		</script>

		</div>
	</div>