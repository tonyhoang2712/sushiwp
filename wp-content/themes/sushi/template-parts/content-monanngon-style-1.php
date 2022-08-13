<div class="col-lg-3 col-md-4 col-sm-6">
	<div class="product">
		<div class="product-item">
			<div class="product-img">
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnails'); ?>" 
							alt="<?php echo get_the_title(); ?>" 
							class="img-fluid">
			</div>
			<div class="product-name">
				<h3 class="product-name-big"><?php echo get_the_title(); ?></h3>
				<div class="product-name-small"><?php echo get_post_meta( $post->ID, 'woo_my_subtitle', true ); ?></div>
				<div class="product-price">
					<?php 
						$price = get_post_meta( get_the_ID(), '_regular_price', true );
						echo $price . "đ/ 1ps";
					?>
				</div>
			</div>
			<div class="product-cart">
				<a href="<?php echo esc_url(get_permalink()) ?>" title="<?php echo get_the_title(); ?>"class="product-cart-img product-cart-on">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-on.png" class="product-cart-img product-cart-on img-fluid">
				</a>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart-off.png" class="product-cart-img product-cart-off img-fluid">
			</div>
		</div>
	</div>
</div>