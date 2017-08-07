<?php
/**
 * Result Count
 *
 * Shows text: Showing x - x of x results
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $wp_query;

if ( ! woocommerce_products_will_display() )
	return;
?>
<p class="woocommerce-result-count">
	<?php
		$paged    = max( 1, $wp_query->get( 'paged' ) );
		$per_page = $wp_query->get( 'posts_per_page' );
		$total    = $wp_query->found_posts;
		$first    = ( $per_page * $paged ) - $per_page + 1;
		$last     = min( $total, $wp_query->get( 'posts_per_page' ) * $paged );

		if ( 1 == $total ) {
			_e( 'Showing the single result', 'accesspress-store' );
		} elseif ( $total <= $per_page || -1 == $per_page ) {
			printf( __( 'Hiển thị <span class="total-products">%d sản phẩm</span>', 'accesspress-store' ), $total );
		} else {
			printf( _x( 'Hiển thị %1$d&ndash;%2$d của <span class="total-products">%3$d sản phẩm</span>', '%1$d = first, %2$d = last, %3$d = total', 'accesspress-store' ), $first, $last, $total );
		}
	?>
</p>
