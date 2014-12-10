<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<!-- Meta tags --> 
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="title" content=""/> 
	<meta name="description" content=""/> 
	<meta name="keywords" content="commar, sepperated, list"/> 
	<meta name="Language" content="EN"/> 
	<meta name="Author" content="Merlin Mason"/> 
	<meta name="Robots" content="All"/> 
	<meta name="medium" content="news"/>
<meta name="viewport" content="width=device-width, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.png">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/skin.css" />

<?php wp_enqueue_script('jquery'); ?>

<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/bootstrap-responsive.css" type="text/css"/> 
<link rel="stylesheet" href="styles/bootstrap.css">
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script> 
<!--<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#menu").toggle(1000);
  });
});
</script>-->

<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#menu").toggle();
  });
});
</script>


<script>
$(document).ready(function(){
  $("button").click(function(){
    $(".display-none").toggle();
  });
});
</script>



<script>
$(document).ready(function(){
  $("button").click(function(){
    $(".display-block").toggle();
  });
});
</script>
<header>
<div class="menu_btn"><button><img src="/wp-content/uploads/2014/07/menu.png" class="display-block" style="display:block;"><img src="/wp-content/uploads/2014/07/cross.png" class="display-none" style="display:none;"></button> <div class="title1"><a href="http://www.bonner2.technodiggtest.com/"><img src="/wp-content/uploads/2014/07/2.png"></a></div><div class="fb-like" data-href="http://www.facebook.com/barbaraboner.co.uk" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-colorscheme="dark"></div></div>
<div class="row-fluid">
	<nav id="menu">
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		<div id="fc_minicart" class="cart_one">
			<a href="https://barbaraboner.foxycart.com/cart?cart=view">View Cart - <span class="fc_quantity">0</span></a>
		</div>		
	</nav>
	</div>
</header>
<div id="fc_minicart" class="cart_two">
			<a href="https://barbaraboner.foxycart.com/cart?cart=view">View Cart - <span class="fc_quantity">0</span></a>
		</div>


