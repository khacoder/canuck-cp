<?php
/**
 * This file is the ClassicCommerce template file, used
 * for displaying ClassicCommerce content.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

global $canuckcp_include_breadcrumbs, $canuckcp_exclude_page_title, $canuckcp_page_title;
$canuckcp_layout_option       = get_theme_mod( 'canuckcp_shop_page_layout', 'right_sidebar' );
$canuckcp_include_breadcrumbs = get_theme_mod( 'canuckcp_breadcrumbs' ) ? true : false;
$canuckcp_exclude_page_title  = false;
$canuckcp_page_title          = get_theme_mod( 'canuckcp_shop_page_title', __( 'Shop Products', 'canuck-cp' ) );
get_header();
get_template_part( '/template-parts/partials', 'page-title-no-post' );
?>
<div id="main-section">
	<div id="content-wrap">
		<?php
		if ( 'left_sidebar' === $canuckcp_layout_option ) {
			?>
			<aside id="two-column-sidebar-left" class="toggle-sb-a">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'cc-a' ); ?>
			</aside>
			<div id="two-column-content">
				<?php woocommerce_content(); ?>
			</div>
			<?php
		} elseif ( 'both_sidebars' === $canuckcp_layout_option ) {
			?>
			<aside id="three-column-sidebar-left" class="toggle-sb-a">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'cc-a' ); ?>
			</aside>
			<div id="three-column-content">
				<?php woocommerce_content(); ?>
			</div>
			<aside id="three-column-sidebar-right" class="toggle-sb-b">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'cc-b' ); ?>
			</aside>
			<?php
		} elseif ( 'fullwidth' === $canuckcp_layout_option ) {
			?>
			<div id="fullwidth">
				<?php woocommerce_content(); ?>
			</div>
			<?php
		} else {
			?>
			<div id="two-column-content">
				<?php woocommerce_content(); ?>
			</div>
			<aside id="two-column-sidebar-right" class="toggle-sb-b">
				<?php get_template_part( '/template-parts/sidebars/sidebar', 'cc-a' ); ?>
			</aside>
			<?php
		}
		?>
	</div>
</div>
<div class="clearfix"></div>
<?php
get_footer();
