<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="title" content="Barbara Bonner Handbags"/>
    <meta name="description" content="A Pionerring and creative spirit forms part of London-based accessories designer Barbara Bonners’s DNA."/>
    <meta name="keywords" content="Barbara bonner, handbags, fringe, boho, in fringe we trust, womans bags"/>
    <meta name="Language" content="EN"/>
    <meta name="Author" content="Merlin Mason"/>
    <meta name="Robots" content="All"/>
    <meta name="medium" content="news"/>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
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
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/bootstrap-responsive.css" type="text/css"/>
<link rel="stylesheet" href="styles/bootstrap.css">
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.cookie.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/subscribe-popup.js"></script>
<!--<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#menu").toggle(1000);
  });
});
</script>-->
<?php
// setcookie("user", "First Time", time()+31536000);
// echo $_COOKIE["user"];
?>
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
    <div class="menu_btn">
        <button><img src="/wp-content/uploads/2014/07/menu.png" class="display-block" style="display:block;">
            <img src="/wp-content/uploads/2014/07/cross.png" class="display-none" style="display:none;">
        </button>
        <div class="title1">
            <a href="http://www.barbara-bonner.com/">
                <img class="pc" src="/wp-content/uploads/2014/07/2.png">
                <img class="mobile" src="/wp-content/uploads/2014/07/form_logo_mobile.jpg">
            </a>
        </div>
        <div class="fb-like" data-href="http://www.facebook.com/barbaraboner.co.uk" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-colorscheme="dark"></div></div>
    <div class="row-fluid">
        <nav id="menu">
            <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
         <div id="fc_minicart">
             <a href="https://barbaraboner.foxycart.com/cart?cart=view">View Cart - <span class="fc_quantity">0</span></a>
          </div>
            <div class="fb-like pc" data-href="http://www.facebook.com/barbaraboner.co.uk" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-colorscheme="dark"></div>

        </nav>
    </div>
<!--    <div class="fb-like mobile768" data-href="http://www.facebook.com/barbaraboner.co.uk" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-colorscheme="dark"></div>-->
</header>
<div id="fc_minicart" class="cart_two">
    <a href="https://barbaraboner.foxycart.com/cart?cart=view">View Cart - <span class="fc_quantity">0</span></a>
</div>


