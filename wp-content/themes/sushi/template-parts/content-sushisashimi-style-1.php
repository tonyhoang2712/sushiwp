<li class="item">
	<div class="product product-horizontal">
		<div class="product-item-horizontal">
			<div class="product-img">
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
			</div>

			<div class="product-name">
				<h3 class="product-name-big product-name-big-custom"><?php echo get_the_title(); ?></h3>
				<div class="product-price product-price-horizontal">
					<?php 
						$price = get_post_meta( get_the_ID(), '_regular_price', true );
						echo $price . "đ/ 1ps";
					?>
				</div>
			</div>
			<div class="product-cart-hozirontal">
				<a href="<?php echo esc_url(get_permalink()) ?>" title="<?php echo get_the_title(); ?>">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
				</a>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
			</div>

		</div>
	</div>
</li>