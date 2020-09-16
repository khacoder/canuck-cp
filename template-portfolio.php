<?php
/**
 * Template Name: Portfolio
 *
 * Page for displaying special feature posts in a portfolio format
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $canuckcp_include_breadcrumbs,$canuckcp_exclude_page_title;
$canuckcp_layout_option       = esc_html( ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_page_layout', true ) ? 'right_sidebar' : get_post_meta( $post->ID, 'canuckcp_metabox_page_layout', true ) ) );
$canuckcp_include_breadcrumbs = get_theme_mod( 'canuckcp_breadcrumbs' ) ? true : false;
$canuckcp_exclude_page_title  = get_post_meta( $post->ID, 'canuckcp_metabox_title', true ) ? true : false;
$canuckcp_sidebar_a           = esc_html( ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_sidebar_a', true ) ? 'default-a' : get_post_meta( $post->ID, 'canuckcp_metabox_sidebar_a', true ) ) );
$canuckcp_sidebar_b           = esc_html( ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_sidebar_b', true ) ? 'default-b' : get_post_meta( $post->ID, 'canuckcp_metabox_sidebar_b', true ) ) );
$canuckcp_portfolio_type      = esc_html( ( '' === get_post_meta( $post->ID, 'canuckcp_portfolio_type', true ) ? 'classic1' : get_post_meta( $post->ID, 'canuckcp_portfolio_type', true ) ) );
get_header( 'no-feature' );
get_template_part( '/template-parts/partials', 'page-title' );
?>
<div id="main-section">
	<div id="content-wrap">
		<?php
		if ( 'left_sidebar' === $canuckcp_layout_option ) {
			echo '<aside id="two-column-sidebar-left" class="toggle-sb-a">';
				get_template_part( '/template-parts/sidebars/sidebar', $canuckcp_sidebar_a );
			echo '</aside>';
			echo '<div id="two-column-content">';
				get_template_part( '/template-parts/portfolio-parts/portfolio', 'content' );
				get_template_part( '/template-parts/portfolio-parts/portfolio', $canuckcp_portfolio_type );
			echo '</div>';
		} elseif ( 'both_sidebars' === $canuckcp_layout_option ) {
			echo '<aside id="three-column-sidebar-left" class="toggle-sb-a">';
				get_template_part( '/template-parts/sidebars/sidebar', $canuckcp_sidebar_a );
			echo '</aside>';
			echo '<div id="three-column-content">';
				get_template_part( '/template-parts/portfolio-parts/portfolio', 'content' );
				get_template_part( '/template-parts/portfolio-parts/portfolio', $canuckcp_portfolio_type );
			echo '</div>';
			echo '<aside id="three-column-sidebar-right" class="toggle-sb-b">';
				get_template_part( '/template-parts/sidebars/sidebar', $canuckcp_sidebar_b );
			echo '</aside>';
		} elseif ( 'fullwidth' === $canuckcp_layout_option ) {
			echo '<div id="fullwidth">';
				get_template_part( '/template-parts/portfolio-parts/portfolio', 'content' );
				get_template_part( '/template-parts/portfolio-parts/portfolio', $canuckcp_portfolio_type );
			echo '</div>';
		} else {
			echo '<div id="two-column-content">';
				get_template_part( '/template-parts/portfolio-parts/portfolio', 'content' );
				get_template_part( '/template-parts/portfolio-parts/portfolio', $canuckcp_portfolio_type );
			echo '</div>';
			echo '<aside id="two-column-sidebar-right" class="toggle-sb-b">';
				get_template_part( '/template-parts/sidebars/sidebar', $canuckcp_sidebar_a );
			echo '</aside>';
		}
		?>
	</div>
</div>
<div class="clearfix"></div>
<?php
get_footer();
