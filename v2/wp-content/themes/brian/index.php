<?php //breaking up theme into custom parts to avoid using unnecessary code
	
if ( is_front_page() && is_home() ) {
  // default homepage
  include('inc/header.php');
  include('inc/content-home.php');
  include('inc/footer.php');
  
} elseif ( is_front_page() ) {
  // static homepage
  echo "<h1>Static homepage, fix 'index.php' conditional</h1>";
  
} elseif ( is_home() ) {
  // blog page
} else {
  //everything else
  include('inc/header.php');
  include('inc/content-home.php');
  include('inc/footer.php');
}
	
?>
