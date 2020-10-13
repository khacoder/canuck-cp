<?php
/**
 * Date template file
 *
 * This file is the Date Page template file, which is output whenever
 * a date link is clicked
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

global $canuckcp_include_breadcrumbs,$canuckcp_exclude_page_title,$canuckcp_page_title;
$canuckcp_layout_option       = get_theme_mod( 'canuckcp_date_layout', 'right_sidebar' );
$canuckcp_include_breadcrumbs = get_theme_mod( 'canuckcp_breadcrumbs' ) ? true : false;
$canuckcp_use_feature         = get_theme_mod( 'canuckcp_use_feature' ) ? true : false;
$canuckcp_exclude_page_title  = false;

if ( is_day() ) {
	$canuckcp_page_title = esc_html__( 'Posts for : ', 'canuck-cp' ) . esc_html( get_the_time( get_option( 'date_format' ) ) );
} elseif ( is_month() ) {
	$canuckcp_page_title = esc_html__( 'Posts for : ', 'canuck-cp' ) . single_month_title( ' ', false );
} elseif ( is_year() ) {
	$canuckcp_page_title = esc_html__( 'Posts for : ', 'canuck-cp' ) . esc_html( get_the_time( 'Y' ) );
}

get_header( 'no-feature' );

get_template_part( '/template-parts/partials', 'page-title-no-post' );
?>
<div id="main-section">
	<div id="content-wrap">
		<?php
		if ( 'left_sidebar' === $canuckcp_layout_option ) {
			echo '<aside id="two-column-sidebar-left" class="toggle-sb-a">';
				get_template_part( '/template-parts/sidebars/sidebar', 'default-a' );
			echo '</aside>';
			echo '<div id="two-column-content">';
			if ( true === $canuckcp_use_feature ) {
				get_template_part( '/template-parts/partials', 'general-posts-side-feature' );
			} else {
				get_template_part( '/template-parts/partials', 'general-posts' );
			}
			get_template_part( '/template-parts/partials', 'page-navi' );
			echo '</div>';
		} elseif ( 'both_sidebars' === $canuckcp_layout_option ) {
			echo '<aside id="three-column-sidebar-left" class="toggle-sb-a">';
				get_template_part( '/template-parts/sidebars/sidebar', 'default-a' );
			echo '</aside>';
			echo '<div id="three-column-content">';
			if ( true === $canuckcp_use_feature ) {
				get_template_part( '/template-parts/partials', 'general-posts-top-feature' );
			} else {
				get_template_part( '/template-parts/partials', 'general-posts' );
			}
			get_template_part( '/template-parts/partials', 'page-navi' );
			echo '</div>';
			echo '<aside id="three-column-sidebar-right" class="toggle-sb-b">';
				get_template_part( '/template-parts/sidebars/sidebar', 'default-b' );
			echo '</aside>';
		} elseif ( 'fullwidth' === $canuckcp_layout_option ) {
			echo '<div id="fullwidth">';
			if ( true === $canuckcp_use_feature ) {
				get_template_part( '/template-parts/partials', 'general-posts-side-feature' );
			} else {
				get_template_part( '/template-parts/partials', 'general-posts' );
			}
			get_template_part( '/template-parts/partials', 'page-navi' );
			echo '</div>';
		} else {
			echo '<div id="two-column-content">';
			if ( true === $canuckcp_use_feature ) {
				get_template_part( '/template-parts/partials', 'general-posts-side-feature' );
			} else {
				get_template_part( '/template-parts/partials', 'general-posts' );
			}
			get_template_part( '/template-parts/partials', 'page-navi' );
			echo '</div>';
			echo '<aside id="two-column-sidebar-right" class="toggle-sb-b">';
				get_template_part( '/template-parts/sidebars/sidebar', 'default-a' );
			echo '</aside>';
		}
		?>
	</div>
</div>
<div class="clearfix"></div>
<?php
get_footer();

