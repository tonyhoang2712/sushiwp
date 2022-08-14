<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<style type="text/css">
   .woocommerce nav.woocommerce-pagination ul li span.current {
        background: #ebe9eb;
        color: #8a7e88;
        background: #B63241;
        border: 1px solid #B63241;
        color: #FFFFFF;
        width: 35px;
        height: 35px;
        font-size: 16px;
        line-height: 22px;
        display: flex;
        align-items: center;
    }
    .woocommerce nav.woocommerce-pagination ul li a {
        width: 35px;
        height: 35px;
        border: 1px solid #B63241;
        font-size: 16px;
        line-height: 22px;
        display: flex;
        align-items: center;
        color: #333333;
    }
    .woocommerce nav.woocommerce-pagination ul li,
    .woocommerce nav.woocommerce-pagination ul {
        border: none;
    }
    .woocommerce nav.woocommerce-pagination ul li:not(:last-child) {
        margin-right: 5px;
    }
    
</style>
<div class="row" style="width: 100%;">
