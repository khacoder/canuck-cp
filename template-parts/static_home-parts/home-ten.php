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
$section10_usage        = stripslashes( get_theme_mod( 'canuckcp_section10_media_area_usage', 'image' ) );
$section10_image        = get_theme_mod( 'canuckcp_section10_image', '' );
$section10_title        = stripslashes( get_theme_mod( 'canuckcp_section10_title', '' ) );
$section10_shortcode    = stripslashes( get_theme_mod( 'canuckcp_section10_shortcode', '' ) );
$section10_text         = stripslashes( get_theme_mod( 'canuckcp_section10_text', '' ) );
$section10_include_link = get_theme_mod( 'canuckcp_section10_include_link', false );
$section10_button_link  = get_theme_mod( 'canuckcp_section10_button_link', '#' );
$section10_button_icon  = get_theme_mod( 'canuckcp_section10_button_icon', 'no icon' );// phpcs:ignore
$section10_button_label = get_theme_mod( 'canuckcp_section10_button_title', esc_html__( 'more', 'canuck-cp' ) );
$sec10_bg_image         = get_theme_mod( 'canuckcp_section10_background_image', '' );
$sec10_use_parallax     = get_theme_mod( 'canuckcp_section10_use_parallax', false );
$use_lazyload           = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
// Set up the button link.
if ( true === $section10_include_link ) {
	if ( '' === $section10_button_label ) {
		if ( 'no icon' !== $section10_button_icon ) {
			$section10_button_title = canuckcp_svg( $section10_button_icon, '14', '#7f7f7f' ) . esc_html__( 'more', 'canuck-cp' );// phpcs:ignore
		} else {
			$section10_button_title = esc_html__( '...more', 'canuck-cp' );
		}
	} else {
		if ( 'no icon' !== $section10_button_icon ) {
			$section10_button_title = canuckcp_svg( $section10_button_icon, '14', '#7f7f7f' ) . esc_html( $section10_button_label );// phpcs:ignore
		} else {
			$section10_button_title = esc_html( $section10_button_label );
		}
	}
}
if ( '' !== $sec10_bg_image ) {
	if ( true === $sec10_use_parallax ) {
		$string10 = ' class="home-10-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec10_bg_image ) . '" data-speed="0.3" data-bleed="0" style="background: transparent;"';
	} elseif ( true === $use_lazyload ) {
		$string10 = ' class="home-10-wide lazyload" data-src="' . esc_url( $sec10_bg_image ) . '"';
	} else {
		$string10 = ' class="home-10-wide" style="background-image: url( ' . esc_url( $sec10_bg_image ) . ' );"';
	}
} else {
	$string10 = ' class="home-10-wide"';
}
?>
<div <?php echo $string10;// phpcs:ignore ?>>
	<div class="home-10-wide-overlay">
		<div class="home-10-wrap">
			<div class="home-10-media">
				<?php
				if ( 'shortcode' === $section10_usage ) {
					?>
					<div class="home-10-shortcode">
						<?php
							echo do_shortcode( wp_kses_post( $section10_shortcode ) );
						?>
					</div>
					<?php
				} elseif ( 'widgetized' === $section10_usage ) {
					?>
					<div class="home-10-widget">
						<?php
						if ( ! dynamic_sidebar( 'canuckcp_home_section10_sidebar' ) ) {
							echo esc_html__( 'Section 10 media area is set up as a widget area.', 'canuck-cp' ) .
								'<br/><span class="alert">' .
								esc_html__( 'Go to Appearance->Widgets or the Customizer Widgets panel and add a widget to Home Page Section 10.', 'canuck-cp' ) .
								'</span>';
						}
						?>
					</div>
					<?php
				} else {
					?>
					<div class="home-10-image">
						<?php
						if ( true === $use_lazyload ) {
							?>
							<img class="lazyload"
								src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
								data-src="<?php echo esc_url( $section10_image ); ?>"
								alt="<?php echo esc_attr( $section10_title ); ?>" />
							<?php
						} else {
							?>
							<img src="<?php echo esc_url( $section10_image ); ?>" alt="<?php esc_attr( $section10_title ); ?>" />
							<?php
						}
						?>
					</div>
					<?php
				}
				?>
			</div>		
			<div class="home-10-content">
				<div class="home-10-title">
					<h2><?php echo esc_html( $section10_title ); ?></h2>
				</div>
				<div class="home-10-text">
					<p><?php echo wp_kses_post( $section10_text ); ?></p>
				</div>
				<?php
				if ( true === $section10_include_link ) {
					?>
					<div class="home-10-button">
						<a class="button1" href="<?php echo esc_url( $section10_button_link ); ?>"><?php echo $section10_button_title;// phpcs:ignore ?></a>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
