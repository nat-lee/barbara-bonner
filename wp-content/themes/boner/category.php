<?php
	if ( have_posts() ) { the_post(); rewind_posts(); }
	if ( in_category(shop) ) {
		include(TEMPLATEPATH . '/shop.php');
	}
	else if ( in_category(locations) ) {
		include(TEMPLATEPATH . '/locations.php');
	}
	else {
		include(TEMPLATEPATH . '/404.php');
	}
?>