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

<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.png">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/skin.css" />
<?php wp_enqueue_script('jquery'); ?>

<?php wp_head(); ?>

</head>
		
<body <?php body_class(); ?> id="bg" style="background-image: url('<?php the_field('img'); ?>');">

<header>
	<nav id="menu">
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		<div id="fc_minicart">
			<a href="https://barbaraboner.foxycart.com/cart?cart=view">View Cart - <span class="fc_quantity">0</span></a>
		</div>
		<div class="fb-like" data-href="http://www.facebook.com/barbaraboner.co.uk" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-colorscheme="dark"></div>
	</nav>
<noscript>chengge <?php the_field('img'); ?></noscript>	
</header>
