	<!-- Slide-out Menu Items -->	  
	<div id="sidr">
	  <!-- Your content -->
	  <ul>
		   <li><a href="<?php echo home_url(); ?>/#slide1">About <span class="pull-right"><i class="icon-double-angle-right"></i></span></a></li>
		   <li><a href="<?php echo home_url(); ?>/#slide2">Blog <span class="pull-right"><i class="icon-double-angle-right"></i></span></a></li>
		   <li><a href="<?php echo home_url(); ?>/#slide3">Work <span class="pull-right"><i class="icon-double-angle-right"></i></span></a></li>
		   <li><a href="<?php echo home_url(); ?>/#slide4">Contact <span class="pull-right"><i class="icon-double-angle-right"></i></span></a></li>
		   <li><a href="#sidr">Close Menu </a></li>
	  </ul>
	</div>
	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/waypoints.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.easing.1.3.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.sidr.min.js"></script>
	<script>
	$(document).ready(function() {
	  $('#simple-menu').sidr();
	});
	//close menu li on touch/click
	$("#sidr").on("click", "li", function () {
       $.sidr('close', 'sidr');   
    });
	</script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/scripts.js"></script>
	<?php wp_footer(); ?>
</body>
</html>