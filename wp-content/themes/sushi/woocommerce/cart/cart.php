<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>
<style type="text/css">
	.page-cart {
		background: rgb(233 233 233 / 70%);
	}
	header.entry-header {
		display: none;
	}
	
	.breadcrumb {
		background-color: unset;
		border-radius: 0;
		margin: 32px 0 32px 0;
		padding: 32px 0 0;
	}
	.breadcrumb a {
		font-style: normal;
		font-weight: 400;
		font-size: 17px;
		line-height: 23px;
		color: var(--gray);
	}
	.woocommerce table.shop_table {
		background: #FFFFFF;
		border-radius: 12px;
	}

	.woocommerce table.shop_table .product-name {
		text-align: left;
	}
	.woocommerce table.shop_table .product-name a:last-child {

	}
	.woocommerce table.shop_table .product-name img {
		width: 145px;
		height: 103px;
	}
	.woocommerce table.shop_table .product-name a:last-child {
		font-size: 18px;
		color: #333333;
		margin-left: 16px;
	}
	.woocommerce-cart table.cart td {
		background: transparent !important;
		font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 22px;
    color: #333333;
	}
	.woocommerce table.shop_table th {
		padding: 10px;
		font-style: normal;
		font-weight: 600;
		font-size: 16px;
		line-height: 22px;
		color: #555555;
		background: transparent;
	}
	.woocommerce a.remove {
    height: auto;
    width: auto;
    display: flex;
		align-items: center;
		vertical-align: middle;
		outline: none;
  }

  .woocommerce a.remove span:last-child{
  	margin-left: 10px;
  }
 
	.woocommerce a span {
		color: #888888;
		font-style: normal;
    font-weight: 600;
    font-size: 16px;
    line-height: 22px;
    display: inline-block;
	}
	.woocommerce a.remove:hover {
		background: transparent !important;
	}
	.woocommerce a.remove:hover span {
		color: #B63241;
	}
	.woocommerce a.remove:hover span svg path,
	.woocommerce a.remove:hover span svg circle {
	  stroke: #B63241;
	} 


	

</style>
<div class="page-cart">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Trang chủ</a></li>
				<li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
			</ol>
		</nav>
		<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
			<thead>
				<tr>
					<!-- <th class="product-thumbnail">&nbsp;</th> -->
					<th class="product-name"><?php esc_html_e( 'Tên món ăn', 'woocommerce' ); ?></th>
					<th class="product-price"><?php esc_html_e( 'Đơn giá', 'woocommerce' ); ?></th>
					<th class="product-quantity"><?php esc_html_e( 'Số lượng', 'woocommerce' ); ?></th>
					<th class="product-subtotal"><?php esc_html_e( 'Số tiền', 'woocommerce' ); ?></th>
					<th class="product-subtotal"><?php esc_html_e( 'Thao tác', 'woocommerce' ); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php do_action( 'woocommerce_before_cart_contents' ); ?>

				<?php
				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
						?>
						<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

							<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
								<?php
								$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

								if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>
					</td>

					<td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
						<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
								?>
							</td>

							<td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
								<?php
								if ( $_product->is_sold_individually() ) {
									$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
								} else {
									$product_quantity = woocommerce_quantity_input(
										array(
											'input_name'   => "cart[{$cart_item_key}][qty]",
											'input_value'  => $cart_item['quantity'],
											'max_value'    => $_product->get_max_purchase_quantity(),
											'min_value'    => '0',
											'product_name' => $_product->get_name(),
										),
										$_product,
										false
									);
								}

						echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
					</td>

					<td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
						<?php
								echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
								?>
							</td>
							<td class="product-remove">
								<?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">
										<span><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21 6.47998C17.67 6.14998 14.32 5.97998 10.98 5.97998C9 5.97998 7.02 6.07998 5.04 6.27998L3 6.47998" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M8.5 5.47L8.72 4.16C8.88 3.21 9 2.5 10.69 2.5H13.31C15 2.5 15.13 3.25 15.28 4.17L15.5 5.47" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M18.8499 9.64001L18.1999 19.71C18.0899 21.28 17.9999 22.5 15.2099 22.5H8.7899C5.9999 22.5 5.9099 21.28 5.7999 19.71L5.1499 9.64001" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M10.3301 17H13.6601" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M9.5 13H14.5" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
										</svg></span>
										<span>Xóa</span>
										</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
								?>
							</td>
						</tr>
						<?php
					}
				}
				?>

				<?php do_action( 'woocommerce_cart_contents' ); ?>

				<tr>
					<td colspan="6" class="actions">

						<?php if ( wc_coupons_enabled() ) { ?>
							<div class="coupon">
								<label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
								<?php do_action( 'woocommerce_cart_coupon' ); ?>
							</div>
						<?php } ?>

						<button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

						<?php do_action( 'woocommerce_cart_actions' ); ?>

						<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
					</td>
				</tr>

				<?php do_action( 'woocommerce_after_cart_contents' ); ?>
			</tbody>
		</table>
		<?php do_action( 'woocommerce_after_cart_table' ); ?>
	</form>

	<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

	<div class="cart-collaterals">
		<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action( 'woocommerce_cart_collaterals' );
		?>
	</div>
</div>

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>

	

	<?php do_action( 'woocommerce_after_cart' ); ?>
</div>
