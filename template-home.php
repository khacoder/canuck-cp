<?php
/**
 * Template Name: Home Page
 *
 * The template for displaying the theme's static home page.
 *
 * @package   Canuck CP ClassicPress Theme
 * @copyright Copyright (C) 2020 or later Kevin Archibald
 * @license   http://www.gnu.org/licenses/gpl-2.0.html
 * @author    Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $canuckcp_exclude_page_title,$canuckcp_include_breadcrumbs, $canuckcp_feature_category;
$canuckcp_home_feature     = get_theme_mod( 'canuckcp_home_feature', 'no_feature' );
$canuckcp_feature_category = sanitize_text_field( get_theme_mod( 'canuckcp_home_feature_category', '' ) );
get_header( 'home' );
if ( 'button_nav' === $canuckcp_home_feature ) {
	?>
	<div id="feature-slider-wide">
		<div id="feature-slider-wrap">
			<?php
			if ( '' === $canuckcp_feature_category ) {
				?>
				<span class="error"><?php esc_html_e( 'You need to select a category in the "Canuck Home Page => Home Feature Options" panel!', 'canuck-cp' ); ?></span>
				<?php
			} else {
				get_template_part( '/template-parts/feature-slider-parts/slider', 'button-nav-3to1' );
			}
			?>
		</div>
	</div>
	<?php
} elseif ( 'fullsize' === $canuckcp_home_feature ) {
	?>
	<div id="feature-slider-wide">
		<div id="feature-slider-wrap">
			<?php
			if ( '' === $canuckcp_feature_category ) {
				?>
				<span class="error"><?php esc_html_e( 'You need to select a category in the \"Canuck Home Page => Home Feature Options\" panel!', 'canuck-cp' ); ?></span>
				<?php
			} else {
				get_template_part( '/template-parts/feature-slider-parts/slider', 'button-nav-fullsize' );
			}
			?>
		</div>
	</div>
	<?php
} elseif ( 'thumbnail' === $canuckcp_home_feature ) {
	?>
	<div id="feature-slider-wide">
		<div id="feature-slider-wrap">
			<?php
			if ( '' === $canuckcp_feature_category ) {
				?>
				<span class="error"><?php esc_html_e( 'You need to select a category in the \"Canuck Home Page => Home Feature Options\" panel!', 'canuck-cp' ); ?></span>
				<?php
			} else {
				get_template_part( '/template-parts/feature-slider-parts/slider', 'thumbnail' );
			}
			?>
		</div>
	</div>
	<?php
} elseif ( 'widgetized' === $canuckcp_home_feature ) {
	?>
	<div id="feature-slider-wide">
		<div id="feature-slider-wrap">
			<?php
			if ( ! dynamic_sidebar( 'canuckcp_home_feature' ) ) {
				echo '<span class="feature-no-video">' .
					esc_html__( 'Your Home page Feature area is set up for widgets.', 'canuck-cp' ) .
					'<br/>' .
					esc_html__( 'Go to Appearance->Widgets or the Customizer Widgets panel and add a widget to Home Page Feature.', 'canuck-cp' ) .
					'</span>';
			}
			?>
		</div>
	</div>
	<?php
}
?>
<div id="main-section-home">
	<div id="content-wrap-home">
		<div id="fullwidth-home">
			<?php canuckcp_home_page_sections(); ?>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<?php
get_footer();

