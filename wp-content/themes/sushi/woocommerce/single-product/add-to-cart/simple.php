<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
			<?php
			do_action( 'woocommerce_before_add_to_cart_quantity' );

			woocommerce_quantity_input(
				array(
					'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
					'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
					'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
				)
			);

			do_action( 'woocommerce_after_add_to_cart_quantity' );
			?>
		
		<div class="btn-action">
			<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="shopping-cart">
				<span>Cho Vào Giỏ Hàng</span>
	                 <svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
	                   <path d="M1.5 5.25C1.08579 5.25 0.75 5.58579 0.75 6C0.75 6.41422 1.08579 6.75 1.5 6.75L1.5 5.25ZM17.5 6.75C17.9142 6.75 18.25 6.41421 18.25 6C18.25 5.58579 17.9142 5.25 17.5 5.25V6.75ZM14.028 0.467309C13.7338 0.175726 13.2589 0.177844 12.9673 0.472041C12.6757 0.766238 12.6778 1.24111 12.972 1.53269L14.028 0.467309ZM15.263 2.74731L14.735 3.28L15.263 2.74731ZM15.263 9.25269L15.7909 9.78538L15.263 9.25269ZM12.972 10.4673C12.6778 10.7589 12.6757 11.2338 12.9673 11.528C13.2589 11.8222 13.7338 11.8243 14.028 11.5327L12.972 10.4673ZM17.4801 5.68667L18.2241 5.59184V5.59184L17.4801 5.68667ZM17.4801 6.31333L18.2241 6.40816V6.40816L17.4801 6.31333ZM1.5 6.75L17.5 6.75V5.25L1.5 5.25L1.5 6.75ZM12.972 1.53269L14.735 3.28L15.7909 2.21462L14.028 0.467309L12.972 1.53269ZM14.735 8.72L12.972 10.4673L14.028 11.5327L15.7909 9.78538L14.735 8.72ZM14.735 3.28C15.4505 3.98914 15.9413 4.47718 16.2734 4.8907C16.596 5.2924 16.7067 5.55042 16.7361 5.7815L18.2241 5.59184C18.1453 4.97372 17.8504 4.45878 17.4429 3.95146C17.045 3.45597 16.4814 2.89892 15.7909 2.21462L14.735 3.28ZM15.7909 9.78538C16.4814 9.10108 17.045 8.54403 17.4429 8.04854C17.8504 7.54121 18.1453 7.02628 18.2241 6.40816L16.7361 6.2185C16.7067 6.44958 16.596 6.7076 16.2734 7.10929C15.9413 7.52282 15.4505 8.01086 14.735 8.72L15.7909 9.78538ZM16.7361 5.7815C16.7546 5.92659 16.7546 6.07341 16.7361 6.2185L18.2241 6.40816C18.2586 6.13714 18.2586 5.86286 18.2241 5.59184L16.7361 5.7815Z" fill="#B63241"></path>
	                 </svg>
			</button>

			<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class=" buy-now">
				<span>Mua Ngay</span>
         	<svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M1.5 5.25C1.08579 5.25 0.75 5.58579 0.75 6C0.75 6.41422 1.08579 6.75 1.5 6.75L1.5 5.25ZM17.5 6.75C17.9142 6.75 18.25 6.41421 18.25 6C18.25 5.58579 17.9142 5.25 17.5 5.25V6.75ZM14.028 0.467309C13.7338 0.175726 13.2589 0.177844 12.9673 0.472041C12.6757 0.766238 12.6778 1.24111 12.972 1.53269L14.028 0.467309ZM15.263 2.74731L14.735 3.28L15.263 2.74731ZM15.263 9.25269L15.7909 9.78538L15.263 9.25269ZM12.972 10.4673C12.6778 10.7589 12.6757 11.2338 12.9673 11.528C13.2589 11.8222 13.7338 11.8243 14.028 11.5327L12.972 10.4673ZM17.4801 5.68667L18.2241 5.59184V5.59184L17.4801 5.68667ZM17.4801 6.31333L18.2241 6.40816V6.40816L17.4801 6.31333ZM1.5 6.75L17.5 6.75V5.25L1.5 5.25L1.5 6.75ZM12.972 1.53269L14.735 3.28L15.7909 2.21462L14.028 0.467309L12.972 1.53269ZM14.735 8.72L12.972 10.4673L14.028 11.5327L15.7909 9.78538L14.735 8.72ZM14.735 3.28C15.4505 3.98914 15.9413 4.47718 16.2734 4.8907C16.596 5.2924 16.7067 5.55042 16.7361 5.7815L18.2241 5.59184C18.1453 4.97372 17.8504 4.45878 17.4429 3.95146C17.045 3.45597 16.4814 2.89892 15.7909 2.21462L14.735 3.28ZM15.7909 9.78538C16.4814 9.10108 17.045 8.54403 17.4429 8.04854C17.8504 7.54121 18.1453 7.02628 18.2241 6.40816L16.7361 6.2185C16.7067 6.44958 16.596 6.7076 16.2734 7.10929C15.9413 7.52282 15.4505 8.01086 14.735 8.72L15.7909 9.78538ZM16.7361 5.7815C16.7546 5.92659 16.7546 6.07341 16.7361 6.2185L18.2241 6.40816C18.2586 6.13714 18.2586 5.86286 18.2241 5.59184L16.7361 5.7815Z" fill="#B63241"></path>
         	</svg>
			</button>
		</div>
		

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>