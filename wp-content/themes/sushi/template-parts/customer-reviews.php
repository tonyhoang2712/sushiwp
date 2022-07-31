<div class="comment-of-customer">
	<div class="container custome-container">
		<div class="comment-of-customer-title">
			<span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower-2.png"></span>
			<h3 class="mb-0">Nhận Xét Của Khách Hàng</h3>
			<span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icon-flower-2.png"></span>
		</div>

		<div class="comment-of-customer-content owl-carousel owl-theme">
			<?php
			$args = array(
				'post_type' => 'customer_reviews',
				'post_status'    => 'publish',
				'posts_per_page' => -1, 
			);

			$query = new WP_Query($args);
			if ($query->have_posts()) {
				$i = 0;
				while ($query->have_posts()) {
					$query->the_post();
					?>
					<div class="item">
						<div class="comment-of-customer-item clearfix">
							<div class="customer-img"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"></div>
							<div class="customer-text">
								<span class="qoute-up"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/quote-up.png" class="img-fluid"></span>
								<div class="customer-message">
									<?php echo get_the_content(); ?>
								</div>
								<div class="customer-bottom">
									<div class="customer-name">
										<?php echo get_post_meta( get_the_ID(), 'customer_name', true ); ?>
									</div>
									<div class="customer-start">
										<?php 
											$stars = get_post_meta( get_the_ID(), 'customer_star', true );
											for($i = 0; $i < $stars; $i++) { ?>
												<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Star.png">
											<?php }
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
			} else {
        // no content
			}
			wp_reset_postdata();
			?>





		</div>
	</div>
</div>