<?php
/**
 * WooCommerce functions file.
 *
 * This file contains custom functions that are loaded
 * when the WooCommerce plugin is installed.
 * Thank you AJ Clarke!
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      modified by Kevin Archibald <https://kevinsspace.ca/contact/>
 * @link        http://www.wpexplorer.com/woocommerce-compatible-theme/
 */

/**
 * Change number of products that are displayed per page.
 *
 * @param integer $cols is columns to use.
 */
function canuckcp_cc_new_loop_shop_per_page( $cols ) {
	$cols = 12; // insert the number to be shown per page.
	return $cols;
}
add_filter( 'loop_shop_per_page', 'canuckcp_cc_new_loop_shop_per_page', 20 );

/**
 * Alter shop columns.
 *
 * @param integer $columns is columns to use.
 */
function canuckcp_cc_shop_columns( $columns ) {
	return 4;
}
add_filter( 'loop_shop_columns', 'canuckcp_cc_shop_columns' );

/**
 * Add correct body class for shop columns.
 *
 * @param string $classes are css classes.
 */
function canuckcp_cc_shop_columns_body_class( $classes ) {
	if ( is_shop() || is_product_category() || is_product_tag() ) {
		$classes[] = 'columns-4';
	}
	return $classes;
}
add_filter( 'body_class', 'canuckcp_cc_shop_columns_body_class' );

/**
 * Change pagination pointers.
 *
 * @param array $args is array of html.
 */
function canuckcp_cc_pagination_args( $args ) {
	$args['prev_text'] = '<i class="font-icon">' . canuckcp_svg( 'angle-double-left', $icon_width = '14', $icon_color = '#7f7f7f' ) . '</i>';
	$args['next_text'] = '<i class="fa fa-angle-right">' . canuckcp_svg( 'angle-double-right', $icon_width = '14', $icon_color = '#7f7f7f' ) . '</i>';
	return $args;
}
add_filter( 'woocommerce_pagination_args', 'canuckcp_cc_pagination_args' );

/**
 * Change sale text.
 */
function canuckcp_cc_sale_flash() {
	return '<span class="onsale">' . esc_html__( 'Sale', 'canuck-cp' ) . '</span>';
}
add_filter( 'woocommerce_sale_flash', 'canuckcp_cc_sale_flash' );

/**
 * Set related products to display 4 products.
 *
 * @param array $args is array of data.
 */
function canuckcp_cc_related_posts_per_page( $args ) {
	$args['posts_per_page'] = 8;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'canuckcp_cc_related_posts_per_page' );

/**
 * Filter up-sells columns
 *
 * @param integer $columns is columns to use.
 */
function canuckcp_cc_single_loops_columns( $columns ) {
	return 4;
}
add_filter( 'woocommerce_up_sells_columns', 'canuckcp_cc_single_loops_columns' );

/**
 * Filter related args.
 *
 * @param array $args is array of data.
 */
function canuckcp_cc_related_columns( $args ) {
	$args['columns'] = 4;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'canuckcp_cc_related_columns', 10 );

/**
 * Filter body classes to add column class.
 *
 * @param string $classes are css classes.
 */
function canuckcp_cc_single_loops_columns_body_class( $classes ) {
	if ( is_singular( 'product' ) ) {
		$classes[] = 'columns-4';
	}
	return $classes;
}
add_filter( 'body_class', 'canuckcp_cc_single_loops_columns_body_class' );

/**
 * Add the cart link to menu
 *
 * @param string $items contains lists html..
 * @param array  $args is array of data.
 */
function canuckcp_add_menu_cart_item_to_menus( $items, $args ) {
	// Make sure your change to your Menu location !!!!
	if ( 'canuckcp_primary' === $args->theme_location ) {
		$css_class = 'menu-item menu-item-type-cart menu-item-type-woocommerce-cart'; // phpcs:ignore
		if ( is_cart() ) {
			$css_class .= ' current-menu-item';
		}
		$items .= '<li class="' . esc_attr( $css_class ) . '">';
		$items .= canuckcp_menu_cart_item();
		$items .= '</li>';
	}
	return $items;
}
add_filter( 'wp_nav_menu_items', 'canuckcp_add_menu_cart_item_to_menus', 10, 2 );

/**
 * Function returns the main menu cart link
 */
function canuckcp_menu_cart_item() {
	$output     = '';
	$cart_count = WC()->cart->cart_contents_count;
	$css_class  = 'canuck-cp-menu-cart-total canuck-cart-total-' . intval( $cart_count ); // phpcs:ignore
	if ( $cart_count ) {
		$url = wc_get_cart_url();
	} else {
		$url = wc_get_page_permalink( 'shop' );
	}
	$html    = WC()->cart->get_cart_total();
	$html    = str_replace( 'amount', '', $html );
	$output .= '<a href="' . esc_url( $url ) . '" class="' . esc_attr( $css_class ) . '">';
	$output .= '<span class="font-icon">' . canuckcp_svg( 'shopping-cart', $icon_width = '14', $icon_color = '#7f7f7f' ) . '</span>';
	$output .= wp_kses_post( $html );
	$output .= '</a>';
	return $output;
}

/**
 * Update cart link with AJAX.
 *
 * @param array $fragments is array of data.
 */
function canuckcp_main_menu_cart_link_fragments( $fragments ) {
	$fragments['.canuck-menu-cart-total'] = canuckcp_menu_cart_item();
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'canuckcp_main_menu_cart_link_fragments' );

/**
 * Set up layout options for the shop page
 */
function canuckcp_cc_shop_options() {
	global $wp_customize;
	// Add panel.
	$wp_customize->add_panel(
		'canuckcp_cc',
		array(
			'priority'    => 9,
			'capability'  => 'edit_theme_options',
			'title'       => esc_html__( 'Canuck ClassicCommerce Options', 'canuck-cp' ),
			'description' => esc_html__( 'Theme specific options when ClassicCommerce is installed.', 'canuck-cp' ),
		)
	);
	// Add sections in panel.
	$wp_customize->add_section(
		'canuckcp_shop_page',
		array(
			'priority'    => 1,
			'capability'  => 'edit_theme_options',
			'title'       => esc_html__( 'ClassicCommerce Shop Page Layouts', 'canuck-cp' ),
			'description' => esc_html__( 'Pick the layout you want. Sidebars will be in the Appearance->Widgets Panel.', 'canuck-cp' ),
			'panel'       => 'canuckcp_cc',
		)
	);
	$wp_customize->add_setting(
		'canuckcp_shop_page_layout',
		array(
			'default'           => 'right_sidebar',
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		new CanuckCP_Custom_Radio_Image_Control(
			$wp_customize,
			'canuckcp_shop_page_layout',
			array(
				'label'       => esc_html__( 'Shop Page Layout', 'canuck-cp' ),
				'section'     => 'canuckcp_shop_page',
				'settings'    => 'canuckcp_shop_page_layout',
				'type'        => 'radio_image',
				'description' => esc_html__( 'Select a layout option for your shop page.', 'canuck-cp' ),
				'priority'    => 1,
				'choices'     => canuckcp_page_layout_choices(),
			)
		)
	);
	$wp_customize->add_setting(
		'canuckcp_shop_page_title',
		array(
			'default'           => esc_html__( 'Shop Products', 'canuck-cp' ),
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'canuckcp_shop_page_title',
		array(
			'label'       => esc_html__( 'Shop Page Layout', 'canuck-cp' ),
			'section'     => 'canuckcp_shop_page',
			'settings'    => 'canuckcp_shop_page_title',
			'type'        => 'text',
			'description' => esc_html__( 'Input a title for your Shop Page, no html allowed.', 'canuck-cp' ),
			'priority'    => 2,
		)
	);
}
add_action( 'customize_register', 'canuckcp_cc_shop_options' );
