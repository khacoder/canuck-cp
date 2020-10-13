<?php
/**
 * Template Name: Masonry Gallery
 *
 * Page for displaying galleries in a mosaic format.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

global $canuckcp_include_breadcrumbs,$canuckcp_exclude_page_title;
$canuckcp_layout_option       = esc_html( ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_page_layout', true ) ? 'right_sidebar' : get_post_meta( $post->ID, 'canuckcp_metabox_page_layout', true ) ) );
$canuckcp_include_breadcrumbs = get_theme_mod( 'canuckcp_breadcrumbs' ) ? true : false;
$canuckcp_exclude_page_title  = get_post_meta( $post->ID, 'canuckcp_metabox_title', true ) ? true : false;
$canuckcp_sidebar_a           = esc_html( ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_sidebar_a', true ) ? 'default-a' : get_post_meta( $post->ID, 'canuckcp_metabox_sidebar_a', true ) ) );
$canuckcp_sidebar_b           = esc_html( ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_sidebar_b', true ) ? 'default-b' : get_post_meta( $post->ID, 'canuckcp_metabox_sidebar_b', true ) ) );
$canuckcp_exclude_page_share  = get_post_meta( $post->ID, 'canuckcp_exclude_share', true ) ? true : false;
get_header( 'no-feature' );
get_template_part( '/template-parts/partials', 'page-title' );
?>
<div id="main-section">
	<div id="content-wrap">
		<?php
		if ( 'left_sidebar' === $canuckcp_layout_option ) {
			?>
			<aside id="two-column-sidebar-left" class="toggle-sb-a">
				<?php get_template_part( '/template-parts/sidebars/sidebar', $canuckcp_sidebar_a ); ?>
			</aside>
			<div id="two-column-content">
				<?php
				get_template_part( '/template-parts/partials', 'masonry' );
				if ( ! $canuckcp_exclude_page_share && canuckcp_page_share() ) {
					echo canuckcp_page_share();// phpcs:ignore
				}
				?>
			</div>
			<?php
		} elseif ( 'both_sidebars' === $canuckcp_layout_option ) {
			?>
			<aside id="three-column-sidebar-left" class="toggle-sb-a">
				<?php get_template_part( '/template-parts/sidebars/sidebar', $canuckcp_sidebar_a ); ?>
			</aside>
			<div id="three-column-content">
				<?php
				get_template_part( '/template-parts/partials', 'masonry' );
				if ( ! $canuckcp_exclude_page_share && canuckcp_page_share() ) {
					echo canuckcp_page_share();// phpcs:ignore
				}
				?>
			</div>
			<aside id="three-column-sidebar-right" class="toggle-sb-b">
				<?php get_template_part( '/template-parts/sidebars/sidebar', $canuckcp_sidebar_b ); ?>
			</aside>
			<?php
		} elseif ( 'fullwidth' === $canuckcp_layout_option ) {
			?>
			<div id="fullwidth">
				<?php
				get_template_part( '/template-parts/partials', 'masonry' );
				if ( ! $canuckcp_exclude_page_share && canuckcp_page_share() ) {
					echo canuckcp_page_share();// phpcs:ignore
				}
				?>
			</div>
			<?php
		} else {
			?>
			<div id="two-column-content">
				<?php
				get_template_part( '/template-parts/partials', 'masonry' );
				if ( ! $canuckcp_exclude_page_share && canuckcp_page_share() ) {
					echo canuckcp_page_share();// phpcs:ignore
				}
				?>
			</div>
			<aside id="two-column-sidebar-right" class="toggle-sb-b">
				<?php get_template_part( '/template-parts/sidebars/sidebar', $canuckcp_sidebar_a ); ?>
			</aside>
			<?php
		}
		?>
	</div>
</div>
<div class="clearfix"></div>
<?php
get_footer();
