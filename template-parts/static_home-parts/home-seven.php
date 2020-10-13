<?php
/**
 * Canuck Home Page template part - layout option 7
 *
 * This template part is called by template-home.php
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

// Get the options.
$section7_usage        = get_theme_mod( 'canuckcp_section7_usage', 'normal' );
$section7_text         = stripslashes( get_theme_mod( 'canuckcp_section7_text', '' ) );
$section7_shortcode    = stripslashes( get_theme_mod( 'canuckcp_section7_shortcode', '' ) );
$section7_include_link = get_theme_mod( 'canuckcp_include_section7_button', false );
$section7_link         = get_theme_mod( 'canuckcp_section7_button_link', '#' );
$section7_button_icon  = get_theme_mod( 'canuckcp_section7_button_icon', 'no icon' );// phpcs:ignore
$section7_button_label = get_theme_mod( 'canuckcp_section7_button_name', esc_html__( 'more', 'canuck-cp' ) );
$sec7_bg_image         = get_theme_mod( 'canuckcp_section7_background_image', '' );
$sec7_use_parallax     = get_theme_mod( 'canuckcp_section7_use_parallax', false );
$use_lazyload          = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
if ( '' !== $sec7_bg_image ) {
	if ( true === $sec7_use_parallax ) {
		$string7 = ' class="home-7-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec7_bg_image ) . '" data-speed="0.3" data-bleed="0" style="background: transparent;"';
	} elseif ( true === $use_lazyload ) {
		$string7 = ' class="home-7-wide lazyload" data-src="' . esc_url( $sec7_bg_image ) . '"';
	} else {
		$string7 = ' class="home-7-wide" style="background-image: url( ' . esc_url( $sec7_bg_image ) . ' );"';
	}
} else {
	$string7 = ' class="home-7-wide"';
}
?>
<div <?php echo $string7;// phpcs:ignore ?>>
	<div class="home-7-wide-overlay">
		<div class="home-7-wrap">
			<?php
			if ( '' !== $section7_text ) {
				?>
				<div class="home-7-text">
					<?php echo wp_kses_post( $section7_text ); ?>
				</div>
				<?php
			}
			if ( true === $section7_include_link ) {
				if ( '' === $section7_button_label ) {
					if ( 'no icon' !== $section7_button_icon ) {
						$section7_button_label = canuckcp_svg( $section7_button_icon, '18', '#7f7f7f' ) . esc_html__( 'more', 'canuck-cp' );// phpcs:ignore
					} else {
						$section7_button_label = esc_html__( '...more', 'canuck-cp' );
					}
				} else {
					if ( 'no icon' !== $section7_button_icon ) {
						$section7_button_label = canuckcp_svg( $section7_button_icon, '18', '#7f7f7f' ) . esc_html( $section7_button_label );// phpcs:ignore
					} else {
						$section7_button_label = esc_html( $section7_button_label );
					}
				}
				?>
				<div class="home-7-button">
					<a class="button1" href="<?php echo esc_url( $section7_link ); ?>" title="<?php esc_attr_e( 'more', 'canuck-cp' ); ?>">
						<?php echo $section7_button_label;// phpcs:ignore ?>
					</a>
				</div>
				<?php
			}
			?>
			<div class="clearfix"></div>
			<?php
			if ( 'shortcode' === $section7_usage ) {
				?>
				<div class="home-7-shortcode">
					<?php echo do_shortcode( wp_kses_post( $section7_shortcode ) ); ?>
				</div>
				<?php
			} elseif ( 'widgetized' === $section7_usage ) {
				?>
				<div class="home-7-widget">
					<?php
					if ( ! dynamic_sidebar( 'canuckcp_home_section7_sidebar' ) ) {
						?>
						<span>
							<?php esc_html_e( 'Section 7 is set up as a widget area.', 'canuck-cp' ); ?>
						</span>
						<br/>
						<span class="alert">
							<?php esc_html_e( 'Go to Appearance->Widgets or the Customizer Widgets panel and add a widget to Home Page Section 7.', 'canuck-cp' ); ?>
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
