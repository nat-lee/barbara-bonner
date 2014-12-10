<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div id="homeslides">
		<ul>
			<?php if(get_field('slideshow')): ?>
				<?php while(the_repeater_field('slideshow')): ?>
					<li>
						<div class="main" style="background:url(<?php the_sub_field('main'); ?>) no-repeat center center fixed;
							-webkit-background-size: cover;
							-moz-background-size: cover;
							-o-background-size: cover;
							background-size: cover;">
						</div>
						<?php // check we have an image before dumping it in the dom ?>
						<?php
							$overlay = get_sub_field('overlay');
							$overlay_url = get_sub_field('overlay_url');
                    		if ($overlay=="") { ?>
                          <!--noslide--> <?php
                        }
                        else {
                          if (strlen($overlay_url)>0)
                            echo "<a href='$overlay_url'>";
                          echo "<img class=\"overlay\" src=\"$overlay\" alt=\"\" />";
                          if (strlen($overlay_url)>0)
                            echo "</a>";
                        }
                    	?>
					</li>
				<?php endwhile; ?>
		 	<?php endif; ?>
		</ul>
	</div>
<?php endwhile; ?>


<?php get_footer(); ?>