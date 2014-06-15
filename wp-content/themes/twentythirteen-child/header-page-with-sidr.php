<?php
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<style>
	/* Sidr Mobile Queries */
    #simple-menu {
      display: none;
    }
    #mobile-header #responsive-menu-button .icon-reorder {
    margin-top: 0!important;
    }
  @media only screen and (max-width: 1024px){
    #simple-menu {
      display: block;
      float: left;
      position: absolute;
	  margin-top: -70px;
	  font-size: 36px;
      color: #8D8D8D;
      }
    .navigation{
      display: none;
      }
    }
	</style>
</head>

<body>
	<div id="top"></div><!-- back to top anchor-->
	<?php include( TEMPLATEPATH . '/includes/nav-page.php' ); // get individual page nav ?>
	</div>

		<div id="main" class="site-main">
