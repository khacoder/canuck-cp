<?php
/**
 * Canuck Home Page template part - layout option 5
 *
 * This template part is called by template-home.php
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

// Get the options.
$section5_usage        = get_theme_mod( 'canuckcp_section5_usage', 'normal' );
$section5_text         = stripslashes( get_theme_mod( 'canuckcp_section5_text', '' ) );
$section5_shortcode    = stripslashes( get_theme_mod( 'canuckcp_section5_shortcode', '' ) );
$section5_include_link = get_theme_mod( 'canuckcp_include_section5_button', false );
$section5_link         = get_theme_mod( 'canuckcp_section5_button_link', '#' );
$section5_button_icon  = get_theme_mod( 'canuckcp_section5_button_icon', 'no icon' );
$section5_button_label = get_theme_mod( 'canuckcp_section5_button_name', esc_html__( 'more', 'canuck-cp' ) );
$sec5_bg_image         = get_theme_mod( 'canuckcp_section5_background_image', '' );
$sec5_use_parallax     = get_theme_mod( 'canuckcp_section5_use_parallax', false );
$use_lazyload          = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
if ( '' !== $sec5_bg_image ) {
	if ( true === $sec5_use_parallax ) {
		$string5 = ' class="home-5-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec5_bg_image ) . '" data-speed="0.3" data-bleed="0" style="background: transparent;"';
	} elseif ( true === $use_lazyload ) {
		$string5 = ' class="home-5-wide lazyload" data-src="' . esc_url( $sec5_bg_image ) . '"';
	} else {
		$string5 = ' class="home-5-wide" style="background-image: url( ' . esc_url( $sec5_bg_image ) . ' );"';
	}
} else {
	$string5 = ' class="home-5-wide"';
}
?>
<div <?php echo $string5;// phpcs:ignore ?>>
	<div class="home-5-wide-overlay">
		<div class="home-5-wrap">
			<?php
			if ( '' !== $section5_text ) {
				?>
				<div class="home-5-text">
					<?php echo wp_kses_post( $section5_text ); ?>
				</div>
				<?php
			}
			if ( true === $section5_include_link ) {
				if ( '' === $section5_button_label ) {
					if ( 'no icon' !== $section5_button_icon ) {
						$section5_button_label = canuckcp_svg( $section5_button_icon, '18', '#7f7f7f' ) . esc_html__( 'more', 'canuck-cp' );// phpcs:ignore
					} else {
						$section5_button_label = esc_html__( '...more', 'canuck-cp' );
					}
				} else {
					if ( 'no icon' !== $section5_button_icon ) {
						$section5_button_label = canuckcp_svg( $section5_button_icon, '18', '#7f7f7f' ) . esc_html( $section5_button_label );// phpcs:ignore
					} else {
						$section5_button_label = esc_html( $section5_button_label );
					}
				}
				?>
				<div class="home-5-button">
					<a class="button1" href="<?php echo esc_url( $section5_link ); ?>" title="<?php esc_attr_e( 'more', 'canuck-cp' ); ?>">
						<?php echo $section5_button_label;// phpcs:ignore ?>
					</a>
				</div>
				<?php
			}
			?>
			<div class="clearfix"></div>
			<?php
			if ( 'shortcode' === $section5_usage ) {
				?>
				<div class="home-5-shortcode">
					<?php echo do_shortcode( wp_kses_post( $section5_shortcode ) ); ?>
				</div>
				<?php
			} elseif ( 'widgetized' === $section5_usage ) {
				?>
				<div class="home-5-widget">
					<?php
					if ( ! dynamic_sidebar( 'canuckcp_home_section5_sidebar' ) ) {
						?>
						<span>
							<?php esc_html_e( 'Section 5 is set up as a widget area.', 'canuck-cp' ); ?>
						</span>
						<br/>
						<span class="alert">
							<?php esc_html_e( 'Go to Appearance->Widgets or the Customizer Widgets panel and add a widget to Home Page Section 5.', 'canuck-cp' ); ?>
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
