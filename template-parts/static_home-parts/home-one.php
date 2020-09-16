<?php
/**
 * Canuck Home Page template part - area 1
 *
 * This template part is called by template-home.php
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/quick-guide-gplv2.html  GNU Public License
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

// Get options.
$section1_usage        = esc_html( stripslashes( get_theme_mod( 'canuckcp_section1_usage', 'normal' ) ) );
$section1_text         = stripslashes( get_theme_mod( 'canuckcp_section1_text', '' ) );
$section1_shortcode    = stripslashes( get_theme_mod( 'canuckcp_section1_shortcode', '' ) );
$section1_include_link = get_theme_mod( 'canuckcp_include_section1_button', false );
$section1_link         = get_theme_mod( 'canuckcp_section1_button_link', '#' );
$section1_button_icon  = get_theme_mod( 'canuckcp_section1_button_icon', 'no icon' );
$section1_button_label = stripslashes( get_theme_mod( 'canuckcp_section1_button_name', esc_html__( 'more', 'canuck-cp' ) ) );
$sec1_bg_image         = get_theme_mod( 'canuckcp_section1_background_image', '' );
$sec1_use_parallax     = get_theme_mod( 'canuckcp_section1_use_parallax', false );
$use_lazyload          = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
if ( '' !== $sec1_bg_image ) {
	if ( true === $sec1_use_parallax ) {
		$string1 = ' class="home-1-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec1_bg_image ) . '" data-speed="0.3" data-bleed="0" style="background: transparent;"';
	} elseif ( true === $use_lazyload ) {
		$string1 = ' class="home-1-wide lazyload" data-src="' . esc_url( $sec1_bg_image ) . '"';
	} else {
		$string1 = ' class="home-1-wide" style="background-image: url( ' . esc_url( $sec1_bg_image ) . ' );"';
	}
} else {
	$string1 = ' class="home-1-wide"';
}
?>
<div <?php echo $string1;// phpcs:ignore ?>>
	<div class="home-1-wide-overlay">
		<div class="home-1-wrap">
			<?php
			if ( '' !== $section1_text ) {
				?>
				<div class="home-1-text">
					<?php echo wp_kses_post( $section1_text ); ?>
				</div>
				<?php
			}
			if ( true === $section1_include_link ) {
				if ( '' === $section1_button_label ) {
					if ( 'no icon' !== $section1_button_icon ) {
						$section1_button_label = canuckcp_svg( $section1_button_icon, '18', '#7f7f7f' ) . esc_html__( 'more', 'canuck-cp' );// phpcs:ignore
					} else {
						$section1_button_label = esc_html__( '...more', 'canuck-cp' );
					}
				} else {
					if ( 'no icon' !== $section1_button_icon ) {
						$section1_button_label = canuckcp_svg( $section1_button_icon, '18', '#7f7f7f' ) . esc_html( $section1_button_label );// phpcs:ignore
					} else {
						$section1_button_label = esc_html( $section1_button_label );
					}
				}
				?>
				<div class="home-1-button">
					<a class="button1" href="<?php echo esc_url( $section1_link ); ?>" title="<?php esc_attr_e( 'more', 'canuck-cp' ); ?>">
						<?php echo $section1_button_label;// phpcs:ignore ?>
					</a>
				</div>
				<?php
			}
			?>
			<div class="clearfix"></div>
			<?php
			if ( 'shortcode' === $section1_usage ) {
				?>
				<div class="home-1-shortcode">
					<?php echo do_shortcode( wp_kses_post( $section1_shortcode ) ); ?>
				</div>
				<?php
			} elseif ( 'widgetized' === $section1_usage ) {
				?>
				<div class="home-1-widget">
					<?php
					if ( ! dynamic_sidebar( 'canuckcp_home_section1_sidebar' ) ) {
						?>
						<span>
							<?php esc_html_e( 'Section 1 is set up as a widget area.', 'canuck-cp' ); ?>
						</span>
						<br/>
						<span class="alert">
							<?php esc_html_e( 'Go to Appearance->Widgets or the Customizer Widgets panel and add a widget to Home Page Section 1.', 'canuck-cp' ); ?>
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
