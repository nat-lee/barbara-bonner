<?php get_header(); ?>

<section id="shop" class="single">
	<?php //OMG:17/01/2014 Adding a back to shop link?>
	<div id="shop-single-back">
		<div class="center-wrapper">
			<a href="/shop" title="Return to the shop">&lt Back</a>
		</div>
	</div>
	<aside class="group">
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
<?php $sale_price = get_field('sale_price'); ?>
		<div class="details">
			<h2 class="h med"><?php the_title(); ?><span class="fr <?php if($sale_price){ echo 'fr_newsale';}?>"><?php if($sale_price){ ?>ON SALE £<del><?php the_field('price'); ?></del><ins>£<?php echo $sale_price;?></ins><?php } else {?>£<?php the_field('price'); } ?></span></h2>
			<div class="description">
				<?php the_field('description'); ?>
			</div>
			<ul>
				<li><span class="spec">Materials</span> — <?php the_field('material'); ?></li>
				<li><span class="spec">Details</span> — <?php the_field('detail'); ?></li>
				<li><span class="spec">Colour</span> — <?php the_field('colour'); ?></li>
				<?php //EGR:20/01/2014 Setting the condition if the Measurements field is filled ?>
				<?php $measurements = get_field('measurements'); ?>
				<?php //OMG:17/01/2014 Adding the new Measurements field?>
				<?php if ($measurements != ''): ?><li><span class="spec">Measurements</span> — <?php the_field('measurements'); ?></li><?php endif; ?>
			</ul>
			<?php
				if(get_field('stock')) { ?>
					<a href="https://barbaraboner.foxycart.com/cart?name=<?php the_title(); ?>&price=<?php if($sale_price){ echo $sale_price; } else { the_field('price'); } ?>&code=<?php the_ID(); ?>" class="btn">Add to Cart</a>
				<?php } else { ?>
					<a href="#" class="btn error">Sorry, currently out of stock</a>
				<?php }
			?>

			<ul class="actions">
				<li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php the_field('thumbnail'); ?>" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a></li>
				<li><div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-width="280" data-layout="button_count" data-show-faces="false" data-colorscheme="dark"></div></li>
			</ul>
		</div>
	</aside>

</section>

<?php get_footer(); ?>
