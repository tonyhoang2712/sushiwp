<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<style type="text/css">
	header {
		box-shadow: 0 4px 45px rgb(19 23 61 / 8%);
	}
	.woocommerce div.product .product_title {
		color: #023047;
		font-style: normal;
		font-weight: 700;
		font-size: 25px;
		line-height: 160%;
	}
	.woocommerce div.product p.price, .woocommerce div.product span.price {
		color: #E24D2D;
		font-style: normal;
		font-weight: 700;
		font-size: 25px;
		line-height: 160%;
	}

	.woocommerce-product-details__short-description {
		font-style: normal;
		font-weight: 400;
		font-size: 17px;
		line-height: 17px;
		color: #333;
	}
	.posted_in {
		font-style: normal;
    font-weight: 600;
    font-size: 17px;
    line-height: 17px;
    color: #333;
	}
	.posted_in a {
		color: #333;
	}
	.woocommerce div.product p.price {
		margin-bottom: 1rem;
	}
	
	.wc-tabs {
		display: none;
	}
	.woocommerce div.product .woocommerce-tabs .panel > h2{
		color: #B63241;
		font-weight: 700;
		font-size: 25px;
		margin: 50px 0 34px 0;
	}
	.related.products h2 {
		color: #B63241;
		font-weight: 700;
		font-size: 25px;
		margin: 80px 0 0;
	}
	.shopping-cart {
		border: 1px solid #B63241;
		border-radius: 8px;
		font-weight: 600;
		font-size: 20px;
		color: #B63241;
		padding: 15px;
		cursor: pointer;
		background: #fff;
		width: 235px;
	}
	.shopping-cart svg {
		display: none;
		margin: 0 0 0 5px;
	}
	.shopping-cart:hover svg {
		display: inline-block;;
	}
	.buy-now {
		border: 1px solid #B63241;
		border-radius: 8px;
		font-weight: 600;
		font-size: 20px;
		padding: 0 0 0 15px;
		cursor: pointer;
		background: #B63241;
		width: 154px;
		color: #fff;
		height: 53px;
		margin: 0 0 0 24px;
	}
	.buy-now:hover {
		background: #fff;
		color: #B63241;
		border: none;
	}
	.woocommerce div.product form.cart div.quantity {
		width: 100%;
	}
	.woocommerce-tabs.wc-tabs-wrapper {
		padding-top: 1px;
	}
	.single-product div.product form.cart .quantity {
	    float: none;
	    margin: 0;
	    display: inline-block;
	}
	.my-quantity-text {
		display: block;
	}

</style>

<main class="woo-product-details">
	<div class="container">

		<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
		?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

		<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
		?>
	</div>
</main>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
