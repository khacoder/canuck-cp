<?php
/**
 * Canuck Home Page template part - layout option 4
 *
 * This template part is called by template-home.php
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

// Get the options.
$section11_usage        = stripslashes( get_theme_mod( 'canuckcp_section11_media_area_usage', 'image' ) );
$section11_image        = get_theme_mod( 'canuckcp_section11_image', '' );
$section11_title        = stripslashes( get_theme_mod( 'canuckcp_section11_title', '' ) );
$section11_shortcode    = stripslashes( get_theme_mod( 'canuckcp_section11_shortcode', '' ) );
$section11_text         = stripslashes( get_theme_mod( 'canuckcp_section11_text', '' ) );
$section11_include_link = get_theme_mod( 'canuckcp_section11_include_link', false );
$section11_button_link  = get_theme_mod( 'canuckcp_section11_button_link', '#' );
$section11_button_icon  = get_theme_mod( 'canuckcp_section11_button_icon', 'no icon' );// phpcs:ignore
$section11_button_label = get_theme_mod( 'canuckcp_section11_button_title', esc_html__( 'more', 'canuck-cp' ) );
$sec11_bg_image         = get_theme_mod( 'canuckcp_section11_background_image', '' );
$sec11_use_parallax     = get_theme_mod( 'canuckcp_section11_use_parallax', false );
$use_lazyload           = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
// Set up the button link.
if ( true === $section11_include_link ) {
	if ( '' === $section11_button_label ) {
		if ( 'no icon' !== $section11_button_icon ) {
			$section11_button_title = canuckcp_svg( $section11_button_icon, '14', '#7f7f7f' ) . esc_html__( 'more', 'canuck-cp' );// phpcs:ignore
		} else {
			$section11_button_title = esc_html__( '...more', 'canuck-cp' );
		}
	} else {
		if ( 'no icon' !== $section11_button_icon ) {
			$section11_button_title = canuckcp_svg( $section11_button_icon, '14', '#7f7f7f' ) . esc_html( $section11_button_label );// phpcs:ignore
		} else {
			$section11_button_title = esc_html( $section11_button_label );
		}
	}
}
if ( '' !== $sec11_bg_image ) {
	if ( true === $sec11_use_parallax ) {
		$string11 = ' class="home-11-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec11_bg_image ) . '" data-speed="0.3" data-bleed="0" style="background: transparent;"';
	} elseif ( true === $use_lazyload ) {
		$string11 = ' class="home-11-wide lazyload" data-src="' . esc_url( $sec11_bg_image ) . '"';
	} else {
		$string11 = ' class="home-11-wide" style="background-image: url( ' . esc_url( $sec11_bg_image ) . ' );"';
	}
} else {
	$string11 = ' class="home-11-wide"';
}
?>
<div <?php echo $string11;// phpcs:ignore ?>>
	<div class="home-11-wide-overlay">
		<div class="home-11-wrap">
			<div class="home-11-media">
				<?php
				if ( 'shortcode' === $section11_usage ) {
					?>
					<div class="home-11-shortcode">
						<?php
							echo do_shortcode( wp_kses_post( $section11_shortcode ) );
						?>
					</div>
					<?php
				} elseif ( 'widgetized' === $section11_usage ) {
					?>
					<div class="home-11-widget">
						<?php
						if ( ! dynamic_sidebar( 'canuckcp_home_section11_sidebar' ) ) {
							echo esc_html__( 'Section 11 media area is set up as a widget area.', 'canuck-cp' ) .
								'<br/><span class="alert">' .
								esc_html__( 'Go to Appearance->Widgets or the Customizer Widgets panel and add a widget to Home Page Section 11.', 'canuck-cp' ) .
								'</span>';
						}
						?>
					</div>
					<?php
				} else {
					?>
					<div class="home-11-image">
						<?php
						if ( true === $use_lazyload ) {
							?>
							<img class="lazyload"
								src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
								data-src="<?php echo esc_url( $section11_image ); ?>"
								alt="<?php echo esc_attr( $section11_title ); ?>" />
							<?php
						} else {
							?>
							<img src="<?php echo esc_url( $section11_image ); ?>" alt="<?php esc_attr( $section11_title ); ?>" />
							<?php
						}
						?>
					</div>
					<?php
				}
				?>
			</div>
			<div class="home-11-content">
				<div class="home-11-title">
					<h2><?php echo esc_html( $section11_title ); ?></h2>
				</div>
				<div class="home-11-text">
					<p><?php echo wp_kses_post( $section11_text ); ?></p>
				</div>
				<?php
				if ( true === $section11_include_link ) {
					?>
					<div class="home-11-button">
						<a class="button1" href="<?php echo esc_url( $section11_button_link ); ?>"><?php echo $section11_button_title;// phpcs:ignore ?></a>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
