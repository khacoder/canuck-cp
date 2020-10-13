<?php
/**
 * Canuck Home Page template part - layout option 3
 *
 * This template part is called by template-home.php
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

// Get the options.
$section3_usage        = esc_html( get_theme_mod( 'canuckcp_section3_usage', 'normal' ) );
$section3_text         = stripslashes( get_theme_mod( 'canuckcp_section3_text', '' ) );
$section3_shortcode    = stripslashes( get_theme_mod( 'canuckcp_section3_shortcode', '' ) );
$section3_include_link = get_theme_mod( 'canuckcp_include_section3_button', false );
$section3_link         = get_theme_mod( 'canuckcp_section3_button_link', '#' );
$section3_button_icon  = get_theme_mod( 'canuckcp_section3_button_icon', 'no icon' );// phpcs:ignore
$section3_button_label = get_theme_mod( 'canuckcp_section3_button_name', esc_html__( 'more', 'canuck-cp' ) );
$sec3_bg_image         = get_theme_mod( 'canuckcp_section3_background_image', '' );
$sec3_use_parallax     = get_theme_mod( 'canuckcp_section3_use_parallax', false );
$use_lazyload          = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;

if ( '' !== $sec3_bg_image ) {
	if ( true === $sec3_use_parallax ) {
		$string3 = ' class="home-3-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec3_bg_image ) . '" data-speed="0.3" data-bleed="0" style="background: transparent;"';
	} elseif ( true === $use_lazyload ) {
		$string3 = ' class="home-3-wide lazyload" data-src="' . esc_url( $sec3_bg_image ) . '"';
	} else {
		$string3 = ' class="home-3-wide" style="background-image: url( ' . esc_url( $sec3_bg_image ) . ' );"';
	}
} else {
	$string3 = ' class="home-3-wide"';
}
?>
<div <?php echo $string3;// phpcs:ignore ?>>
	<div class="home-3-wide-overlay">
		<div class="home-3-wrap">
			<?php
			if ( '' !== $section3_text ) {
				?>
				<div class="home-3-text">
					<?php echo wp_kses_post( $section3_text ); ?>
				</div>
				<?php
			}
			if ( true === $section3_include_link ) {
				if ( '' === $section3_button_label ) {
					if ( 'no icon' !== $section3_button_icon ) {
						$section3_button_label = canuckcp_svg( $section3_button_icon, '18', '#7f7f7f' ) . esc_html__( 'more', 'canuck-cp' );// phpcs:ignore
					} else {
						$section3_button_label = esc_html__( '...more', 'canuck-cp' );
					}
				} else {
					if ( 'no icon' !== $section3_button_icon ) {
						$section3_button_label = canuckcp_svg( $section3_button_icon, '18', '#7f7f7f' ) . esc_html( $section3_button_label );// phpcs:ignore
					} else {
						$section3_button_label = esc_html( $section3_button_label );
					}
				}
				?>
				<div class="home-3-button">
					<a class="button1" href="<?php echo esc_url( $section3_link ); ?>">
						<?php echo $section3_button_label;// phpcs:ignore ?>
					</a>
				</div>
				<?php
			}
			?>
			<div class="clearfix"></div>
			<?php
			if ( 'shortcode' === $section3_usage ) {
				?>
				<div class="home-3-shortcode">
					<?php echo do_shortcode( wp_kses_post( $section3_shortcode ) ); ?>
				</div>
				<?php
			} elseif ( 'widgetized' === $section3_usage ) {
				?>
				<div class="home-3-widget">
					<?php
					if ( ! dynamic_sidebar( 'canuckcp_home_section3_sidebar' ) ) {
						?>
						<span>
							<?php esc_html_e( 'Section 3 is set up as a widget area.', 'canuck-cp' ); ?>
						</span>
						<br/>
						<span class="alert">
							<?php esc_html_e( 'Go to Appearance->Widgets or the Customizer Widgets panel and add a widget to Home Page Section 3.', 'canuck-cp' ); ?>
						</span>
						<?php
					}
					?>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</div>
