<?php
/**
 * Custom header functions file
 *
 * This file contains custom functions for the theme
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

/**
 * The custom header functions used here from the WordPress.org twentseventeen theme
 */
function canuckcp_custom_header_setup() {

	/**
	 * Filter Canuck custom-header support arguments.
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-image          Default image of the header.
	 *     @type string $default_text_color     Default color of the header text.
	 *     @type int    $width                  Width in pixels of the custom header image. Default 954.
	 *     @type int    $height                 Height in pixels of the custom header image. Default 1300.
	 *     @type string $wp-head-callback       Callback function used to styles the header image and text
	 *                                          displayed on the blog.
	 *     @type string $flex-height            Flex support for height of header.
	 * }
	 */
	add_theme_support(
		'custom-header',
		apply_filters(
			'canuckcp_custom_header_args',
			array(
				'default-image'    => '',
				'width'            => 1600,
				'height'           => 733,
				'flex-width'       => true,
				'flex-height'      => true,
				'video'            => false,
				'wp-head-callback' => 'canuckcp_header_style',
			)
		)
	);

	register_default_headers(
		array(
			'default-image' => array(
				'url'           => '%s/images/headerdefault.jpg',
				'thumbnail_url' => '%s/images/headerdefault.jpg',
				'description'   => esc_html__( 'Default Header Image', 'canuck-cp' ),
			),
		)
	);
}
add_action( 'after_setup_theme', 'canuckcp_custom_header_setup' );

if ( ! function_exists( 'canuckcp_header_style' ) ) :
	/**
	 * Custom header callback
	 */
	function canuckcp_header_style() {
		$header_text_color = get_header_textcolor();
		// If no custom options for text are set, let's bail.
		// get_header_textcolor() options: add_theme_support( 'custom-header' ) is default, hide text (returns 'blank') or any hex value.
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}
		// If we get this far, we have custom styles. Let's do this.
		?>
		<style id="canuck-cp-custom-header-styles" type="text/css">
		<?php
		// Has the text been hidden?
		if ( 'blank' === $header_text_color ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
			<?php
			// If the user has set a custom color for the text use that.
		else :
			?>
			.header-image-overlay {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;

/**
 * Customize video play/pause button in the custom header.
 *
 * @param array $settings Video settings.
 */
function canuckcp_video_controls( $settings ) {
	$settings['l10n']['play']  = '<span class="screen-reader-text">' . __( 'Play background video', 'canuck-cp' ) . '</span><i class="fa fa-play fa-lg"></i>';
	$settings['l10n']['pause'] = '<span class="screen-reader-text">' . __( 'Pause background video', 'canuck-cp' ) . '</span><i class="fa fa-pause fa-lg"></i>';
	return $settings;
}
add_filter( 'header_video_settings', 'canuckcp_video_controls' );
