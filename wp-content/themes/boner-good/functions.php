<?php 

// call my minifed JS file which includes jQuery
function wpfme_jquery_enqueue() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', "/wp-content/themes/boner/js/production-min.js", false, null);
	wp_enqueue_script('jquery');
}
if (!is_admin()) add_action("wp_enqueue_scripts", "wpfme_jquery_enqueue", 11);


// Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function socialtwitter_widgets_init() {

	register_sidebar( array(
		'name' => 'Twitter Social',
		'id' => 'twitter_social_widget',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'socialtwitter_widgets_init' );



// Add custom menus
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'wpfme' ),
	//'example' => __( 'Example Navigation', 'wpfme' ),
) );


// Create custom sizes
// This is then pulled through to your theme useing the_post_thumbnail('custombig'); 
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size('customsmall', 300, 200, true); //narrow column
	add_image_size('custombig', 400, 500, true); //wide column
}


// Stop images getting wrapped up in p tags when they get dumped out with the_content() for easier theme styling
function wpfme_remove_img_ptags($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'wpfme_remove_img_ptags');


// Call Googles HTML5 Shim, but only for users on old versions of IE
function wpfme_IEhtml5_shim () {
	global $is_IE;
	if ($is_IE)
	echo '<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->';
}
add_action('wp_head', 'wpfme_IEhtml5_shim');


// Remove the version number of WP
// Warning - this info is also available in the readme.html file in your root directory - delete this file!
remove_action('wp_head', 'wp_generator');


// Obscure login screen error messages
function wpfme_login_obscure(){ return '<strong>Sorry</strong>: Think you have gone wrong somwhere!';}
add_filter( 'login_errors', 'wpfme_login_obscure' );


// Disable the theme / plugin text editor in Admin
define('DISALLOW_FILE_EDIT', true);

?>