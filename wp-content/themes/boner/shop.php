<?php
/*
Template Name: Shop
*/
?>
<?php get_header(); ?>

<section id="shop">

	<?php
		$args = array( 'numberposts' => 99, 'category' => '1' );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post);
	?><?php $sale_price = get_field('sale_price'); ?>
	<article class="product" id="<?php the_ID(); ?>">
		<?php //OMG:17/01/2014 Add link to product page. ?>
		<?php //<a class="more" href="#"> ?>
		<a class="more" href="<?php the_permalink(); ?>">
			<img class="scale" src="<?php the_field('thumbnail'); ?>">
			<h1 class="meta h small center">
				<span class="title"><?php the_title(); ?></span>
				<span class="price_view">
				<span class="price">£<?php if($sale_price){ ?> <del><?php the_field('price'); ?></del><ins>£<?php echo $sale_price;?></ins><?php } else { the_field('price'); } ?></span>
				<span class="view">View &raquo;</span>
				</span>
			</h1>
		</a>

		<?php 	/*	OMG:17/01/2014 REMOVED the <aside> completly, no longer needed. Now the article link will work to a specific product page. */ ?>
		<?php if (false) {?>
		<aside>
			<div id="productslides">
				<ul>
					<?php if(get_field('slideshow_images')): ?>
						<?php while(the_repeater_field('slideshow_images')): ?>
							<li>
								<img src="<?php the_sub_field('slide'); ?>">
							</li>
						<?php endwhile; ?>
		 			<?php endif; ?>
				</ul>
			</div>

			<div class="details">
				<h2 class="h med"><?php the_title(); ?><span class="fr <?php if($sale_price){ echo 'fr_newsale';}?>"><?php if($sale_price){ ?>ON SALE £<del><?php the_field('price'); ?></del><ins>£<?php echo $sale_price;?></ins><?php } else {?>£<?php the_field('price'); } ?></span></h2>
				<div class="description">
					<?php the_field('description'); ?>
				</div>
				<ul>
					<li><span class="spec">Materials</span> — <?php the_field('material'); ?></li>
					<li><span class="spec">Details</span> — <?php the_field('detail'); ?></li>
					<li><span class="spec">Colour</span> — <?php the_field('colour'); ?></li>
				</ul>
				<?php
					if(get_field('stock')) { ?>
						<a class="btn" href="https://barbaraboner.foxycart.com/cart?name=<?php the_title(); ?>&price=<?php if($sale_price){ echo $sale_price; } else { the_field('price'); } ?>&code=<?php the_ID(); ?>">Add to Cart</a>
					<?php } else { ?>
						<a href="#" class="btn error">Currently out of Stock</a>
					<?php }
				?>

				<ul class="actions group">
					<li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_field('thumbnail'); ?>" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></li>
					<li><div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-width="280" data-layout="button_count" data-show-faces="false" data-colorscheme="dark"></div></li>
				</ul>
				<div class="navigation group"></div>
			</div>

			<a class="close" href="#">&#10005;</a>
		</aside>
		<?php } ?>
		
	</article><?php
		endforeach;
		wp_reset_query();
	?>

</section>

<?php get_footer(); ?>
