<?php
/*
Template Name: Collections
*/
?>
<?php get_header(); ?>

<section id="collection1">
    <div class="pc"><div id="slider1" class="slider">
        <ul>
            <?php if(get_field('gallery')): ?>
                <?php while(the_repeater_field('gallery')): ?>
                    <li>
                    <div><img src="<?php the_sub_field('image'); ?>" style="height:500px;"/></div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
        <div class="controls">
            <a href="#" class="prev-slide"></a>
            <a href="#" class="next-slide"></a>
        </div>
    </div>
    <div id="chengge_slider" class="chengge_slider" style="display: none;">
        <ul>
            <?php if(get_field('gallery')): ?>
                <?php while(the_repeater_field('gallery')): ?>
                    <li>
                        <div><img src="<?php the_sub_field('image'); ?>" style=""/></div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</section>

<div id="collectionlogo">
	<img src="<?php the_field('logo'); ?>">
</div>

<script src="<?php bloginfo('template_url'); ?>/js/lemmon-slider.js"></script>
	<script>
	window.onload = function(){

		// slider 1
		$( '#slider1' ).lemmonSlider({
			infinite: false
		});
		
	
	}

/* Key board Navigation */
jQuery(document).keydown( function(eventObject) {
     if(eventObject.which==37) {//left arrow
        jQuery('.controls .prev-slide').click();//emulates click on prev button 
     } else if(eventObject.which==39) {//right arrow
        jQuery('.controls .next-slide').click();//emulates click on next button
     }
} );
/* Key board Navigation */
	</script>



	<style type="text/css" media="screen">
	body div.slider    { overflow:hidden; position:relative; width:100%;}
	body div.slider ul { margin:0; padding:0; }
	body div.slider li { float:left; list-style:none; margin:0 5px 0 0; }
	body div.slider li { text-align:center; line-height:160px; font-size:25px; }
	.controls a.prev-slide { background: url(<?php bloginfo('template_url'); ?>/img/leftbk.png) no-repeat center center;
	left: 32%;
margin: 0 0 0 -40px;
-webkit-transition: all 0.2s;
-moz-transition: all 0.2s;
-ms-transition: all 0.2s;
-o-transition: all 0.2s;
transition: all 0.2s;
position: absolute;
bottom: 7%;
width: 30px;
height: 49px;
z-index: 8;}
.controls a.next-slide { background: url(<?php bloginfo('template_url'); ?>/img/rightbk.png) no-repeat center center;
margin: 0 0 0 -40px;
-webkit-transition: all 0.2s;
-moz-transition: all 0.2s;
-ms-transition: all 0.2s;
-o-transition: all 0.2s;
transition: all 0.2s;
position: absolute;
right: 29%;
bottom: 7%;
width: 30px;
height: 49px;
z-index: 8;
}
	
	
	</style>	

<?php get_footer(); ?>
