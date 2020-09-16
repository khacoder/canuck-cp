/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 * 
 * @package   Canuck CP ClassicPress Theme 
 * @copyright Copyright (C) 2017-2019, kevinhaig
 * @license   GPLv2 or later http://www.gnu.org/licenses/quick-guide-gplv2.html
 * @author	  kevinhaig <www.kevinsspace.ca/contact/>
 * Canuck is distributed under the terms of the GNU GPL
 * 
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {
	/**
	 * Run function when customizer is ready.
	 */
	wp.customize.bind('ready', function () {
		// Show or hide footer options
		wp.customize.control('canuckcp_show_footer', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_footer_background_image').show();
						$('#customize-control-canuckcp_footer_overlay_opacity').show();
						$('#customize-control-canuckcp_footer_cols').show();
						break;
					case false:
						$('#customize-control-canuckcp_footer_background_image').hide();
						$('#customize-control-canuckcp_footer_overlay_opacity').hide();
						$('#customize-control-canuckcp_footer_cols').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_show_footer' ).get() ) {
				$('#customize-control-canuckcp_footer_background_image').hide();
				$('#customize-control-canuckcp_footer_overlay_opacity').hide();
				$('#customize-control-canuckcp_footer_cols').hide();
			} else {
				$('#customize-control-canuckcp_footer_background_image').show();
				$('#customize-control-canuckcp_footer_overlay_opacity').show();
				$('#customize-control-canuckcp_footer_cols').show();
			}
		});
		// Show or hide copyright strip options
		wp.customize.control('canuckcp_show_copyright_strip', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_left_copyright_text').show();
						$('#customize-control-canuckcp_middle_copyright_text').show();
						$('#customize-control-canuckcp_right_copyright_text').show();
						break;
					case false:
						$('#customize-control-canuckcp_left_copyright_text').hide();
						$('#customize-control-canuckcp_middle_copyright_text').hide();
						$('#customize-control-canuckcp_right_copyright_text').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_show_copyright_strip' ).get() ) {
				$('#customize-control-canuckcp_left_copyright_text').hide();
				$('#customize-control-canuckcp_middle_copyright_text').hide();
				$('#customize-control-canuckcp_right_copyright_text').hide();
			} else {
				$('#customize-control-canuckcp_left_copyright_text').show();
				$('#customize-control-canuckcp_middle_copyright_text').show();
				$('#customize-control-canuckcp_right_copyright_text').show();
			}
		});
		// ================= Home Page Section 1 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section1_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section1_background_image').show();
						$('#customize-control-canuckcp_section1_overlay_opacity').show();
						$('#customize-control-canuckcp_section1_use_parallax').show();
						$('#customize-control-canuckcp_section1_background_color').show();
						$('#customize-control-canuckcp_section1_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section1_background_image').hide();
						$('#customize-control-canuckcp_section1_overlay_opacity').hide();
						$('#customize-control-canuckcp_section1_use_parallax').hide();
						$('#customize-control-canuckcp_section1_background_color').hide();
						$('#customize-control-canuckcp_section1_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section1_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section1_background_image').hide();
				$('#customize-control-canuckcp_section1_overlay_opacity').hide();
				$('#customize-control-canuckcp_section1_use_parallax').hide();
				$('#customize-control-canuckcp_section1_background_color').hide();
				$('#customize-control-canuckcp_section1_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section1_background_image').show();
				$('#customize-control-canuckcp_section1_overlay_opacity').show();
				$('#customize-control-canuckcp_section1_use_parallax').show();
				$('#customize-control-canuckcp_section1_background_color').show();
				$('#customize-control-canuckcp_section1_background_color_opacity').show();
			}
		});
		// Show or hide shortcode input
		wp.customize.control('canuckcp_section1_usage', function (control) {
			control.setting.bind(function (value) {
				if ( 'shortcode' === value ) {
					$('#customize-control-canuckcp_section1_shortcode').show();
				} else {
					$('#customize-control-canuckcp_section1_shortcode').hide();
				}
			});
			// Saved state.
			if ( 'shortcode' === wp.customize.instance( 'canuckcp_section1_usage' ).get() ) {
				$('#customize-control-canuckcp_section1_shortcode').show();
			} else {
				$('#customize-control-canuckcp_section1_shortcode').hide();
			}
		});
		// Show or hide button options
		wp.customize.control('canuckcp_include_section1_button', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section1_button_icon').show();
						$('#customize-control-canuckcp_section1_button_name').show();
						$('#customize-control-canuckcp_section1_button_link').show();
						$('#customize-control-canuckcp_section1_button_background_color').show();
						$('#customize-control-canuckcp_section1_button_text_color').show();
						$('#customize-control-canuckcp_section1_button_hover_background_color').show();
						$('#customize-control-canuckcp_section1_button_hover_text_color').show();
						break;
					case false:
						$('#customize-control-canuckcp_section1_button_icon').hide();	
						$('#customize-control-canuckcp_section1_button_name').hide();
						$('#customize-control-canuckcp_section1_button_link').hide();
						$('#customize-control-canuckcp_section1_button_background_color').hide();
						$('#customize-control-canuckcp_section1_button_text_color').hide();
						$('#customize-control-canuckcp_section1_button_hover_background_color').hide();
						$('#customize-control-canuckcp_section1_button_hover_text_color').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_include_section1_button' ).get() ) {
				$('#customize-control-canuckcp_section1_button_icon').hide();
				$('#customize-control-canuckcp_section1_button_name').hide();
				$('#customize-control-canuckcp_section1_button_link').hide();
				$('#customize-control-canuckcp_section1_button_background_color').hide();
				$('#customize-control-canuckcp_section1_button_text_color').hide();
				$('#customize-control-canuckcp_section1_button_hover_background_color').hide();
				$('#customize-control-canuckcp_section1_button_hover_text_color').hide();
			} else {
				$('#customize-control-canuckcp_section1_button_icon').show();
				$('#customize-control-canuckcp_section1_button_name').show();
				$('#customize-control-canuckcp_section1_button_link').show();
				$('#customize-control-canuckcp_section1_button_background_color').show();
				$('#customize-control-canuckcp_section1_button_text_color').show();
				$('#customize-control-canuckcp_section1_button_hover_background_color').show();
				$('#customize-control-canuckcp_section1_button_hover_text_color').show();
			}
		});
		// ================= Home Page Section 2 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section2_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section2_background_image').show();
						$('#customize-control-canuckcp_section2_overlay_opacity').show();
						$('#customize-control-canuckcp_section2_use_parallax').show();
						$('#customize-control-canuckcp_section2_background_color').show();
						$('#customize-control-canuckcp_section2_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section2_background_image').hide();
						$('#customize-control-canuckcp_section2_overlay_opacity').hide();
						$('#customize-control-canuckcp_section2_use_parallax').hide();
						$('#customize-control-canuckcp_section2_background_color').hide();
						$('#customize-control-canuckcp_section2_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section2_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section2_background_image').hide();
				$('#customize-control-canuckcp_section2_overlay_opacity').hide();
				$('#customize-control-canuckcp_section2_use_parallax').hide();
				$('#customize-control-canuckcp_section2_background_color').hide();
				$('#customize-control-canuckcp_section2_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section2_background_image').show();
				$('#customize-control-canuckcp_section2_overlay_opacity').show();
				$('#customize-control-canuckcp_section2_use_parallax').show();
				$('#customize-control-canuckcp_section2_background_color').show();
				$('#customize-control-canuckcp_section2_background_color_opacity').show();
			}
		});
		// Show or hide button colors
		wp.customize.control('canuckcp_section2_button_colors_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section2_button_background_color').show();
						$('#customize-control-canuckcp_section2_button_text_color').show();
						$('#customize-control-canuckcp_section2_button_hover_background_color').show();
						$('#customize-control-canuckcp_section2_button_hover_text_color').show();
						break;
					case false:
						$('#customize-control-canuckcp_section2_button_background_color').hide();
						$('#customize-control-canuckcp_section2_button_text_color').hide();
						$('#customize-control-canuckcp_section2_button_hover_background_color').hide();
						$('#customize-control-canuckcp_section2_button_hover_text_color').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section2_button_colors_toggle' ).get() ) {
				$('#customize-control-canuckcp_section2_button_background_color').hide();
				$('#customize-control-canuckcp_section2_button_text_color').hide();
				$('#customize-control-canuckcp_section2_button_hover_background_color').hide();
				$('#customize-control-canuckcp_section2_button_hover_text_color').hide();
			} else {
				$('#customize-control-canuckcp_section2_button_background_color').show();
				$('#customize-control-canuckcp_section2_button_text_color').show();
				$('#customize-control-canuckcp_section2_button_hover_background_color').show();
				$('#customize-control-canuckcp_section2_button_hover_text_color').show();
			}
		});
		// Show or hide box1
		wp.customize.control('canuckcp_section2_box1_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section2_box1_use_font_icon').show();
						$('#customize-control-canuckcp_section2_box1_image_font').show();
						$('#customize-control-canuckcp_section2_box1_icon_color').show();
						$('#customize-control-canuckcp_section2_box1_image').show();
						$('#customize-control-canuckcp_section2_box1_title').show();
						$('#customize-control-canuckcp_section2_box1_text').show();
						$('#customize-control-canuckcp_section2_box1_include_link').show();
						$('#customize-control-canuckcp_section2_box1_button_link').show();
						$('#customize-control-canuckcp_section2_box1_button_icon').show();
						$('#customize-control-canuckcp_section2_box1_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section2_box1_use_font_icon').hide();
						$('#customize-control-canuckcp_section2_box1_image_font').hide();
						$('#customize-control-canuckcp_section2_box1_icon_color').hide();
						$('#customize-control-canuckcp_section2_box1_image').hide();
						$('#customize-control-canuckcp_section2_box1_title').hide();
						$('#customize-control-canuckcp_section2_box1_text').hide();
						$('#customize-control-canuckcp_section2_box1_include_link').hide();
						$('#customize-control-canuckcp_section2_box1_button_link').hide();
						$('#customize-control-canuckcp_section2_box1_button_icon').hide();
						$('#customize-control-canuckcp_section2_box1_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section2_box1_toggle' ).get() ) {
				$('#customize-control-canuckcp_section2_box1_use_font_icon').hide();
				$('#customize-control-canuckcp_section2_box1_image_font').hide();
				$('#customize-control-canuckcp_section2_box1_icon_color').hide();
				$('#customize-control-canuckcp_section2_box1_image').hide();
				$('#customize-control-canuckcp_section2_box1_title').hide();
				$('#customize-control-canuckcp_section2_box1_text').hide();
				$('#customize-control-canuckcp_section2_box1_include_link').hide();
				$('#customize-control-canuckcp_section2_box1_button_link').hide();
				$('#customize-control-canuckcp_section2_box1_button_icon').hide();
				$('#customize-control-canuckcp_section2_box1_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section2_box1_use_font_icon').show();
				$('#customize-control-canuckcp_section2_box1_image_font').show();
				$('#customize-control-canuckcp_section2_box1_icon_color').show();
				$('#customize-control-canuckcp_section2_box1_image').show();
				$('#customize-control-canuckcp_section2_box1_title').show();
				$('#customize-control-canuckcp_section2_box1_text').show();
				$('#customize-control-canuckcp_section2_box1_include_link').show();
				$('#customize-control-canuckcp_section2_box1_button_link').show();
				$('#customize-control-canuckcp_section2_box1_button_title').show();
			}
		});
		// Show or hide box2
		wp.customize.control('canuckcp_section2_box2_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section2_box2_use_font_icon').show();
						$('#customize-control-canuckcp_section2_box2_image_font').show();
						$('#customize-control-canuckcp_section2_box2_icon_color').show();
						$('#customize-control-canuckcp_section2_box2_image').show();
						$('#customize-control-canuckcp_section2_box2_title').show();
						$('#customize-control-canuckcp_section2_box2_text').show();
						$('#customize-control-canuckcp_section2_box2_include_link').show();
						$('#customize-control-canuckcp_section2_box2_button_link').show();
						$('#customize-control-canuckcp_section2_box2_button_icon').show();
						$('#customize-control-canuckcp_section2_box2_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section2_box2_use_font_icon').hide();
						$('#customize-control-canuckcp_section2_box2_image_font').hide();
						$('#customize-control-canuckcp_section2_box2_icon_color').hide();
						$('#customize-control-canuckcp_section2_box2_image').hide();
						$('#customize-control-canuckcp_section2_box2_title').hide();
						$('#customize-control-canuckcp_section2_box2_text').hide();
						$('#customize-control-canuckcp_section2_box2_include_link').hide();
						$('#customize-control-canuckcp_section2_box2_button_link').hide();
						$('#customize-control-canuckcp_section2_box2_button_icon').hide();
						$('#customize-control-canuckcp_section2_box2_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section2_box2_toggle' ).get() ) {
				$('#customize-control-canuckcp_section2_box2_use_font_icon').hide();
				$('#customize-control-canuckcp_section2_box2_image_font').hide();
				$('#customize-control-canuckcp_section2_box2_icon_color').hide();
				$('#customize-control-canuckcp_section2_box2_image').hide();
				$('#customize-control-canuckcp_section2_box2_title').hide();
				$('#customize-control-canuckcp_section2_box2_text').hide();
				$('#customize-control-canuckcp_section2_box2_include_link').hide();
				$('#customize-control-canuckcp_section2_box2_button_link').hide();
				$('#customize-control-canuckcp_section2_box2_button_icon').hide();
				$('#customize-control-canuckcp_section2_box2_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section2_box2_use_font_icon').show();
				$('#customize-control-canuckcp_section2_box2_image_font').show();
				$('#customize-control-canuckcp_section2_box2_icon_color').show();
				$('#customize-control-canuckcp_section2_box2_image').show();
				$('#customize-control-canuckcp_section2_box2_title').show();
				$('#customize-control-canuckcp_section2_box2_text').show();
				$('#customize-control-canuckcp_section2_box2_include_link').show();
				$('#customize-control-canuckcp_section2_box2_button_link').show();
				$('#customize-control-canuckcp_section2_box2_button_icon').show();
				$('#customize-control-canuckcp_section2_box2_button_title').show();
			}
		});
		// Show or hide box 3
		wp.customize.control('canuckcp_section2_box3_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section2_box3_use_font_icon').show();
						$('#customize-control-canuckcp_section2_box3_image_font').show();
						$('#customize-control-canuckcp_section2_box3_icon_color').show();
						$('#customize-control-canuckcp_section2_box3_image').show();
						$('#customize-control-canuckcp_section2_box3_title').show();
						$('#customize-control-canuckcp_section2_box3_text').show();
						$('#customize-control-canuckcp_section2_box3_include_link').show();
						$('#customize-control-canuckcp_section2_box3_button_link').show();
						$('#customize-control-canuckcp_section2_box3_button_icon').show();
						$('#customize-control-canuckcp_section2_box3_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section2_box3_use_font_icon').hide();
						$('#customize-control-canuckcp_section2_box3_image_font').hide();
						$('#customize-control-canuckcp_section2_box3_icon_color').hide();
						$('#customize-control-canuckcp_section2_box3_image').hide();
						$('#customize-control-canuckcp_section2_box3_title').hide();
						$('#customize-control-canuckcp_section2_box3_text').hide();
						$('#customize-control-canuckcp_section2_box3_include_link').hide();
						$('#customize-control-canuckcp_section2_box3_button_link').hide();
						$('#customize-control-canuckcp_section2_box3_button_icon').hide();
						$('#customize-control-canuckcp_section2_box3_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section2_box3_toggle' ).get() ) {
				$('#customize-control-canuckcp_section2_box3_use_font_icon').hide();
				$('#customize-control-canuckcp_section2_box3_image_font').hide();
				$('#customize-control-canuckcp_section2_box3_icon_color').hide();
				$('#customize-control-canuckcp_section2_box3_image').hide();
				$('#customize-control-canuckcp_section2_box3_title').hide();
				$('#customize-control-canuckcp_section2_box3_text').hide();
				$('#customize-control-canuckcp_section2_box3_include_link').hide();
				$('#customize-control-canuckcp_section2_box3_button_link').hide();
				$('#customize-control-canuckcp_section2_box3_button_icon').hide();
				$('#customize-control-canuckcp_section2_box3_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section2_box3_use_font_icon').show();
				$('#customize-control-canuckcp_section2_box3_image_font').show();
				$('#customize-control-canuckcp_section2_box3_icon_color').show();
				$('#customize-control-canuckcp_section2_box3_image').show();
				$('#customize-control-canuckcp_section2_box3_title').show();
				$('#customize-control-canuckcp_section2_box3_text').show();
				$('#customize-control-canuckcp_section2_box3_include_link').show();
				$('#customize-control-canuckcp_section2_box3_button_link').show();
				$('#customize-control-canuckcp_section2_box3_button_icon').show();
				$('#customize-control-canuckcp_section2_box3_button_title').show();
			}
		});
		// ================= Home Page Section 3 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section3_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section3_background_image').show();
						$('#customize-control-canuckcp_section3_overlay_opacity').show();
						$('#customize-control-canuckcp_section3_use_parallax').show();
						$('#customize-control-canuckcp_section3_background_color').show();
						$('#customize-control-canuckcp_section3_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section3_background_image').hide();
						$('#customize-control-canuckcp_section3_overlay_opacity').hide();
						$('#customize-control-canuckcp_section3_use_parallax').hide();
						$('#customize-control-canuckcp_section3_background_color').hide();
						$('#customize-control-canuckcp_section3_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section3_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section3_background_image').hide();
				$('#customize-control-canuckcp_section3_overlay_opacity').hide();
				$('#customize-control-canuckcp_section3_use_parallax').hide();
				$('#customize-control-canuckcp_section3_background_color').hide();
				$('#customize-control-canuckcp_section3_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section3_background_image').show();
				$('#customize-control-canuckcp_section3_overlay_opacity').show();
				$('#customize-control-canuckcp_section3_use_parallax').show();
				$('#customize-control-canuckcp_section3_background_color').show();
				$('#customize-control-canuckcp_section3_background_color_opacity').show();
			}
		});
		// Show or hide shortcode input
		wp.customize.control('canuckcp_section3_usage', function (control) {
			control.setting.bind(function (value) {
				if ( 'shortcode' === value ) {
					$('#customize-control-canuckcp_section3_shortcode').show();
				} else {
					$('#customize-control-canuckcp_section3_shortcode').hide();
				}
			});
			// Saved state.
			if ( 'shortcode' === wp.customize.instance( 'canuckcp_section3_usage' ).get() ) {
				$('#customize-control-canuckcp_section3_shortcode').show();
			} else {
				$('#customize-control-canuckcp_section3_shortcode').hide();
			}
		});
		// Show or hide button options
		wp.customize.control('canuckcp_include_section3_button', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section3_button_icon').show();
						$('#customize-control-canuckcp_section3_button_name').show();
						$('#customize-control-canuckcp_section3_button_link').show();
						$('#customize-control-canuckcp_section3_button_background_color').show();
						$('#customize-control-canuckcp_section3_button_text_color').show();
						$('#customize-control-canuckcp_section3_button_hover_background_color').show();
						$('#customize-control-canuckcp_section3_button_hover_text_color').show();
						break;
					case false:
						$('#customize-control-canuckcp_section3_button_icon').hide();
						$('#customize-control-canuckcp_section3_button_name').hide();
						$('#customize-control-canuckcp_section3_button_link').hide();
						$('#customize-control-canuckcp_section3_button_background_color').hide();
						$('#customize-control-canuckcp_section3_button_text_color').hide();
						$('#customize-control-canuckcp_section3_button_hover_background_color').hide();
						$('#customize-control-canuckcp_section3_button_hover_text_color').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_include_section3_button' ).get() ) {
				$('#customize-control-canuckcp_section3_button_icon').hide();
				$('#customize-control-canuckcp_section3_button_name').hide();
				$('#customize-control-canuckcp_section3_button_link').hide();
				$('#customize-control-canuckcp_section3_button_background_color').hide();
				$('#customize-control-canuckcp_section3_button_text_color').hide();
				$('#customize-control-canuckcp_section3_button_hover_background_color').hide();
				$('#customize-control-canuckcp_section3_button_hover_text_color').hide();
			} else {
				$('#customize-control-canuckcp_section3_button_icon').show();
				$('#customize-control-canuckcp_section3_button_name').show();
				$('#customize-control-canuckcp_section3_button_link').show();
				$('#customize-control-canuckcp_section3_button_background_color').show();
				$('#customize-control-canuckcp_section3_button_text_color').show();
				$('#customize-control-canuckcp_section3_button_hover_background_color').show();
				$('#customize-control-canuckcp_section3_button_hover_text_color').show();
			}
		});
		// ================= Home Page Section 4 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section4_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section4_background_image').show();
						$('#customize-control-canuckcp_section4_overlay_opacity').show();
						$('#customize-control-canuckcp_section4_use_parallax').show();
						$('#customize-control-canuckcp_section4_background_color').show();
						$('#customize-control-canuckcp_section4_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section4_background_image').hide();
						$('#customize-control-canuckcp_section4_overlay_opacity').hide();
						$('#customize-control-canuckcp_section4_use_parallax').hide();
						$('#customize-control-canuckcp_section4_background_color').hide();
						$('#customize-control-canuckcp_section4_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section4_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section4_background_image').hide();
				$('#customize-control-canuckcp_section4_overlay_opacity').hide();
				$('#customize-control-canuckcp_section4_use_parallax').hide();
				$('#customize-control-canuckcp_section4_background_color').hide();
				$('#customize-control-canuckcp_section4_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section4_background_image').show();
				$('#customize-control-canuckcp_section4_overlay_opacity').show();
				$('#customize-control-canuckcp_section4_use_parallax').show();
				$('#customize-control-canuckcp_section4_background_color').show();
				$('#customize-control-canuckcp_section4_background_color_opacity').show();
			}
		});
		// Show or hide button colors
		wp.customize.control('canuckcp_section4_button_colors_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section4_button_background_color').show();
						$('#customize-control-canuckcp_section4_button_text_color').show();
						$('#customize-control-canuckcp_section4_button_hover_background_color').show();
						$('#customize-control-canuckcp_section4_button_hover_text_color').show();
						break;
					case false:
						$('#customize-control-canuckcp_section4_button_background_color').hide();
						$('#customize-control-canuckcp_section4_button_text_color').hide();
						$('#customize-control-canuckcp_section4_button_hover_background_color').hide();
						$('#customize-control-canuckcp_section4_button_hover_text_color').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section4_button_colors_toggle' ).get() ) {
				$('#customize-control-canuckcp_section4_button_background_color').hide();
				$('#customize-control-canuckcp_section4_button_text_color').hide();
				$('#customize-control-canuckcp_section4_button_hover_background_color').hide();
				$('#customize-control-canuckcp_section4_button_hover_text_color').hide();
			} else {
				$('#customize-control-canuckcp_section4_button_background_color').show();
				$('#customize-control-canuckcp_section4_button_text_color').show();
				$('#customize-control-canuckcp_section4_button_hover_background_color').show();
				$('#customize-control-canuckcp_section4_button_hover_text_color').show();
			}
		});
		// Show or hide box1
		wp.customize.control('canuckcp_section4_box1_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section4_box1_use_font_icon').show();
						$('#customize-control-canuckcp_section4_box1_image_font').show();
						$('#customize-control-canuckcp_section4_box1_icon_color').show();
						$('#customize-control-canuckcp_section4_box1_image').show();
						$('#customize-control-canuckcp_section4_box1_title').show();
						$('#customize-control-canuckcp_section4_box1_text').show();
						$('#customize-control-canuckcp_section4_box1_include_link').show();
						$('#customize-control-canuckcp_section4_box1_button_link').show();
						$('#customize-control-canuckcp_section4_box1_button_icon').show();
						$('#customize-control-canuckcp_section4_box1_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section4_box1_use_font_icon').hide();
						$('#customize-control-canuckcp_section4_box1_image_font').hide();
						$('#customize-control-canuckcp_section4_box1_icon_color').hide();
						$('#customize-control-canuckcp_section4_box1_image').hide();
						$('#customize-control-canuckcp_section4_box1_title').hide();
						$('#customize-control-canuckcp_section4_box1_text').hide();
						$('#customize-control-canuckcp_section4_box1_include_link').hide();
						$('#customize-control-canuckcp_section4_box1_button_link').hide();
						$('#customize-control-canuckcp_section4_box1_button_icon').hide();
						$('#customize-control-canuckcp_section4_box1_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section4_box1_toggle' ).get() ) {
				$('#customize-control-canuckcp_section4_box1_use_font_icon').hide();
				$('#customize-control-canuckcp_section4_box1_image_font').hide();
				$('#customize-control-canuckcp_section4_box1_icon_color').hide();
				$('#customize-control-canuckcp_section4_box1_image').hide();
				$('#customize-control-canuckcp_section4_box1_title').hide();
				$('#customize-control-canuckcp_section4_box1_text').hide();
				$('#customize-control-canuckcp_section4_box1_include_link').hide();
				$('#customize-control-canuckcp_section4_box1_button_link').hide();
				$('#customize-control-canuckcp_section4_box1_button_icon').hide();
				$('#customize-control-canuckcp_section4_box1_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section4_box1_use_font_icon').show();
				$('#customize-control-canuckcp_section4_box1_image_font').show();
				$('#customize-control-canuckcp_section4_box1_icon_color').show();
				$('#customize-control-canuckcp_section4_box1_image').show();
				$('#customize-control-canuckcp_section4_box1_title').show();
				$('#customize-control-canuckcp_section4_box1_text').show();
				$('#customize-control-canuckcp_section4_box1_include_link').show();
				$('#customize-control-canuckcp_section4_box1_button_link').show();
				$('#customize-control-canuckcp_section4_box1_button_icon').show();
				$('#customize-control-canuckcp_section4_box1_button_title').show();
			}
		});
		// Show or hide box2
		wp.customize.control('canuckcp_section4_box2_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section4_box2_use_font_icon').show();
						$('#customize-control-canuckcp_section4_box2_image_font').show();
						$('#customize-control-canuckcp_section4_box2_icon_color').show();
						$('#customize-control-canuckcp_section4_box2_image').show();
						$('#customize-control-canuckcp_section4_box2_title').show();
						$('#customize-control-canuckcp_section4_box2_text').show();
						$('#customize-control-canuckcp_section4_box2_include_link').show();
						$('#customize-control-canuckcp_section4_box2_button_link').show();
						$('#customize-control-canuckcp_section4_box2_button_icon').show();
						$('#customize-control-canuckcp_section4_box2_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section4_box2_use_font_icon').hide();
						$('#customize-control-canuckcp_section4_box2_image_font').hide();
						$('#customize-control-canuckcp_section4_box2_icon_color').hide();
						$('#customize-control-canuckcp_section4_box2_image').hide();
						$('#customize-control-canuckcp_section4_box2_title').hide();
						$('#customize-control-canuckcp_section4_box2_text').hide();
						$('#customize-control-canuckcp_section4_box2_include_link').hide();
						$('#customize-control-canuckcp_section4_box2_button_link').hide();
						$('#customize-control-canuckcp_section4_box2_button_icon').hide();
						$('#customize-control-canuckcp_section4_box2_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section4_box2_toggle' ).get() ) {
				$('#customize-control-canuckcp_section4_box2_use_font_icon').hide();
				$('#customize-control-canuckcp_section4_box2_image_font').hide();
				$('#customize-control-canuckcp_section4_box2_icon_color').hide();
				$('#customize-control-canuckcp_section4_box2_image').hide();
				$('#customize-control-canuckcp_section4_box2_title').hide();
				$('#customize-control-canuckcp_section4_box2_text').hide();
				$('#customize-control-canuckcp_section4_box2_include_link').hide();
				$('#customize-control-canuckcp_section4_box2_button_link').hide();
				$('#customize-control-canuckcp_section4_box2_button_icon').hide();
				$('#customize-control-canuckcp_section4_box2_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section4_box2_use_font_icon').show();
				$('#customize-control-canuckcp_section4_box2_image_font').show();
				$('#customize-control-canuckcp_section4_box2_icon_color').show();
				$('#customize-control-canuckcp_section4_box2_image').show();
				$('#customize-control-canuckcp_section4_box2_title').show();
				$('#customize-control-canuckcp_section4_box2_text').show();
				$('#customize-control-canuckcp_section4_box2_include_link').show();
				$('#customize-control-canuckcp_section4_box2_button_link').show();
				$('#customize-control-canuckcp_section4_box2_button_icon').show();
				$('#customize-control-canuckcp_section4_box2_button_title').show();
			}
		});
		// ================= Home Page Section 5 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section5_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section5_background_image').show();
						$('#customize-control-canuckcp_section5_overlay_opacity').show();
						$('#customize-control-canuckcp_section5_use_parallax').show();
						$('#customize-control-canuckcp_section5_background_color').show();
						$('#customize-control-canuckcp_section5_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section5_background_image').hide();
						$('#customize-control-canuckcp_section5_overlay_opacity').hide();
						$('#customize-control-canuckcp_section5_use_parallax').hide();
						$('#customize-control-canuckcp_section5_background_color').hide();
						$('#customize-control-canuckcp_section5_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section5_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section5_background_image').hide();
				$('#customize-control-canuckcp_section5_overlay_opacity').hide();
				$('#customize-control-canuckcp_section5_use_parallax').hide();
				$('#customize-control-canuckcp_section5_background_color').hide();
				$('#customize-control-canuckcp_section5_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section5_background_image').show();
				$('#customize-control-canuckcp_section5_overlay_opacity').show();
				$('#customize-control-canuckcp_section5_use_parallax').show();
				$('#customize-control-canuckcp_section5_background_color').show();
				$('#customize-control-canuckcp_section5_background_color_opacity').show();
			}
		});
		// Show or hide shortcode input
		wp.customize.control('canuckcp_section5_usage', function (control) {
			control.setting.bind(function (value) {
				if ( 'shortcode' === value ) {
					$('#customize-control-canuckcp_section5_shortcode').show();
				} else {
					$('#customize-control-canuckcp_section5_shortcode').hide();
				}
			});
			// Saved state.
			if ( 'shortcode' === wp.customize.instance( 'canuckcp_section5_usage' ).get() ) {
				$('#customize-control-canuckcp_section5_shortcode').show();
			} else {
				$('#customize-control-canuckcp_section5_shortcode').hide();
			}
		});
		// Show or hide button options
		wp.customize.control('canuckcp_include_section5_button', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section5_button_icon').show();
						$('#customize-control-canuckcp_section5_button_name').show();
						$('#customize-control-canuckcp_section5_button_link').show();
						$('#customize-control-canuckcp_section5_button_background_color').show();
						$('#customize-control-canuckcp_section5_button_text_color').show();
						$('#customize-control-canuckcp_section5_button_hover_background_color').show();
						$('#customize-control-canuckcp_section5_button_hover_text_color').show();
						break;
					case false:
						$('#customize-control-canuckcp_section5_button_icon').hide();
						$('#customize-control-canuckcp_section5_button_name').hide();
						$('#customize-control-canuckcp_section5_button_link').hide();
						$('#customize-control-canuckcp_section5_button_background_color').hide();
						$('#customize-control-canuckcp_section5_button_text_color').hide();
						$('#customize-control-canuckcp_section5_button_hover_background_color').hide();
						$('#customize-control-canuckcp_section5_button_hover_text_color').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_include_section5_button' ).get() ) {
				$('#customize-control-canuckcp_section5_button_icon').hide();
				$('#customize-control-canuckcp_section5_button_name').hide();
				$('#customize-control-canuckcp_section5_button_link').hide();
				$('#customize-control-canuckcp_section5_button_background_color').hide();
				$('#customize-control-canuckcp_section5_button_text_color').hide();
				$('#customize-control-canuckcp_section5_button_hover_background_color').hide();
				$('#customize-control-canuckcp_section5_button_hover_text_color').hide();
			} else {
				$('#customize-control-canuckcp_section5_button_icon').show();
				$('#customize-control-canuckcp_section5_button_name').show();
				$('#customize-control-canuckcp_section5_button_link').show();
				$('#customize-control-canuckcp_section5_button_background_color').show();
				$('#customize-control-canuckcp_section5_button_text_color').show();
				$('#customize-control-canuckcp_section5_button_hover_background_color').show();
				$('#customize-control-canuckcp_section5_button_hover_text_color').show();
			}
		});
		// ================= Home Page Section 6 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section6_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section6_background_image').show();
						$('#customize-control-canuckcp_section6_overlay_opacity').show();
						$('#customize-control-canuckcp_section6_use_parallax').show();
						$('#customize-control-canuckcp_section6_background_color').show();
						$('#customize-control-canuckcp_section6_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section6_background_image').hide();
						$('#customize-control-canuckcp_section6_overlay_opacity').hide();
						$('#customize-control-canuckcp_section6_use_parallax').hide();
						$('#customize-control-canuckcp_section6_background_color').hide();
						$('#customize-control-canuckcp_section6_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section6_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section6_background_image').hide();
				$('#customize-control-canuckcp_section6_overlay_opacity').hide();
				$('#customize-control-canuckcp_section6_use_parallax').hide();
				$('#customize-control-canuckcp_section6_background_color').hide();
				$('#customize-control-canuckcp_section6_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section6_background_image').show();
				$('#customize-control-canuckcp_section6_overlay_opacity').show();
				$('#customize-control-canuckcp_section6_use_parallax').show();
				$('#customize-control-canuckcp_section6_background_color').show();
				$('#customize-control-canuckcp_section6_background_color_opacity').show();
			}
		});
		// Show or hide button colors
		wp.customize.control('canuckcp_section6_button_colors_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section6_button_background_color').show();
						$('#customize-control-canuckcp_section6_button_text_color').show();
						$('#customize-control-canuckcp_section6_button_hover_background_color').show();
						$('#customize-control-canuckcp_section6_button_hover_text_color').show();
						break;
					case false:
						$('#customize-control-canuckcp_section6_button_background_color').hide();
						$('#customize-control-canuckcp_section6_button_text_color').hide();
						$('#customize-control-canuckcp_section6_button_hover_background_color').hide();
						$('#customize-control-canuckcp_section6_button_hover_text_color').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section6_button_colors_toggle' ).get() ) {
				$('#customize-control-canuckcp_section6_button_background_color').hide();
				$('#customize-control-canuckcp_section6_button_text_color').hide();
				$('#customize-control-canuckcp_section6_button_hover_background_color').hide();
				$('#customize-control-canuckcp_section6_button_hover_text_color').hide();
			} else {
				$('#customize-control-canuckcp_section6_button_background_color').show();
				$('#customize-control-canuckcp_section6_button_text_color').show();
				$('#customize-control-canuckcp_section6_button_hover_background_color').show();
				$('#customize-control-canuckcp_section6_button_hover_text_color').show();
			}
		});
		// Show or hide box1
		wp.customize.control('canuckcp_section6_box1_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section6_box1_use_font_icon').show();
						$('#customize-control-canuckcp_section6_box1_image_font').show();
						$('#customize-control-canuckcp_section6_box1_icon_color').show();
						$('#customize-control-canuckcp_section6_box1_image').show();
						$('#customize-control-canuckcp_section6_box1_title').show();
						$('#customize-control-canuckcp_section6_box1_text').show();
						$('#customize-control-canuckcp_section6_box1_include_link').show();
						$('#customize-control-canuckcp_section6_box1_button_link').show();
						$('#customize-control-canuckcp_section6_box1_button_icon').show();
						$('#customize-control-canuckcp_section6_box1_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section6_box1_use_font_icon').hide();
						$('#customize-control-canuckcp_section6_box1_image_font').hide();
						$('#customize-control-canuckcp_section6_box1_icon_color').hide();
						$('#customize-control-canuckcp_section6_box1_image').hide();
						$('#customize-control-canuckcp_section6_box1_title').hide();
						$('#customize-control-canuckcp_section6_box1_text').hide();
						$('#customize-control-canuckcp_section6_box1_include_link').hide();
						$('#customize-control-canuckcp_section6_box1_button_link').hide();
						$('#customize-control-canuckcp_section6_box1_button_icon').hide();
						$('#customize-control-canuckcp_section6_box1_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section6_box1_toggle' ).get() ) {
				$('#customize-control-canuckcp_section6_box1_use_font_icon').hide();
				$('#customize-control-canuckcp_section6_box1_image_font').hide();
				$('#customize-control-canuckcp_section6_box1_icon_color').hide();
				$('#customize-control-canuckcp_section6_box1_image').hide();
				$('#customize-control-canuckcp_section6_box1_title').hide();
				$('#customize-control-canuckcp_section6_box1_text').hide();
				$('#customize-control-canuckcp_section6_box1_include_link').hide();
				$('#customize-control-canuckcp_section6_box1_button_link').hide();
				$('#customize-control-canuckcp_section6_box1_button_icon').hide();
				$('#customize-control-canuckcp_section6_box1_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section6_box1_use_font_icon').show();
				$('#customize-control-canuckcp_section6_box1_image_font').show();
				$('#customize-control-canuckcp_section6_box1_icon_color').show();
				$('#customize-control-canuckcp_section6_box1_image').show();
				$('#customize-control-canuckcp_section6_box1_title').show();
				$('#customize-control-canuckcp_section6_box1_text').show();
				$('#customize-control-canuckcp_section6_box1_include_link').show();
				$('#customize-control-canuckcp_section6_box1_button_link').show();
				$('#customize-control-canuckcp_section6_box1_button_icon').show();
				$('#customize-control-canuckcp_section6_box1_button_title').show();
			}
		});
		// Show or hide box2
		wp.customize.control('canuckcp_section6_box2_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section6_box2_use_font_icon').show();
						$('#customize-control-canuckcp_section6_box2_image_font').show();
						$('#customize-control-canuckcp_section6_box2_image').show();
						$('#customize-control-canuckcp_section6_box2_icon_color').show();
						$('#customize-control-canuckcp_section6_box2_title').show();
						$('#customize-control-canuckcp_section6_box2_text').show();
						$('#customize-control-canuckcp_section6_box2_include_link').show();
						$('#customize-control-canuckcp_section6_box2_button_link').show();
						$('#customize-control-canuckcp_section6_box2_button_icon').show();
						$('#customize-control-canuckcp_section6_box2_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section6_box2_use_font_icon').hide();
						$('#customize-control-canuckcp_section6_box2_image_font').hide();
						$('#customize-control-canuckcp_section6_box2_icon_color').hide();
						$('#customize-control-canuckcp_section6_box2_image').hide();
						$('#customize-control-canuckcp_section6_box2_title').hide();
						$('#customize-control-canuckcp_section6_box2_text').hide();
						$('#customize-control-canuckcp_section6_box2_include_link').hide();
						$('#customize-control-canuckcp_section6_box2_button_link').hide();
						$('#customize-control-canuckcp_section6_box2_button_icon').hide();
						$('#customize-control-canuckcp_section6_box2_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section6_box2_toggle' ).get() ) {
				$('#customize-control-canuckcp_section6_box2_use_font_icon').hide();
				$('#customize-control-canuckcp_section6_box2_image_font').hide();
				$('#customize-control-canuckcp_section6_box2_icon_color').hide();
				$('#customize-control-canuckcp_section6_box2_image').hide();
				$('#customize-control-canuckcp_section6_box2_title').hide();
				$('#customize-control-canuckcp_section6_box2_text').hide();
				$('#customize-control-canuckcp_section6_box2_include_link').hide();
				$('#customize-control-canuckcp_section6_box2_button_link').hide();
				$('#customize-control-canuckcp_section6_box2_button_icon').hide();
				$('#customize-control-canuckcp_section6_box2_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section6_box2_use_font_icon').show();
				$('#customize-control-canuckcp_section6_box2_image_font').show();
				$('#customize-control-canuckcp_section6_box2_icon_color').show();
				$('#customize-control-canuckcp_section6_box2_image').show();
				$('#customize-control-canuckcp_section6_box2_title').show();
				$('#customize-control-canuckcp_section6_box2_text').show();
				$('#customize-control-canuckcp_section6_box2_include_link').show();
				$('#customize-control-canuckcp_section6_box2_button_link').show();
				$('#customize-control-canuckcp_section6_box2_button_icon').show();
				$('#customize-control-canuckcp_section6_box2_button_title').show();
			}
		});
		// ================= Home Page Section 7 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section7_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section7_background_image').show();
						$('#customize-control-canuckcp_section7_overlay_opacity').show();
						$('#customize-control-canuckcp_section7_use_parallax').show();
						$('#customize-control-canuckcp_section7_background_color').show();
						$('#customize-control-canuckcp_section7_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section7_background_image').hide();
						$('#customize-control-canuckcp_section7_overlay_opacity').hide();
						$('#customize-control-canuckcp_section7_use_parallax').hide();
						$('#customize-control-canuckcp_section7_background_color').hide();
						$('#customize-control-canuckcp_section7_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section7_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section7_background_image').hide();
				$('#customize-control-canuckcp_section7_overlay_opacity').hide();
				$('#customize-control-canuckcp_section7_use_parallax').hide();
				$('#customize-control-canuckcp_section7_background_color').hide();
				$('#customize-control-canuckcp_section7_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section7_background_image').show();
				$('#customize-control-canuckcp_section7_overlay_opacity').show();
				$('#customize-control-canuckcp_section7_use_parallax').show();
				$('#customize-control-canuckcp_section7_background_color').show();
				$('#customize-control-canuckcp_section7_background_color_opacity').show();
			}
		});
		// Show or hide shortcode input
		wp.customize.control('canuckcp_section7_usage', function (control) {
			control.setting.bind(function (value) {
				if ( 'shortcode' === value ) {
					$('#customize-control-canuckcp_section7_shortcode').show();
				} else {
					$('#customize-control-canuckcp_section7_shortcode').hide();
				}
			});
			// Saved state.
			if ( 'shortcode' === wp.customize.instance( 'canuckcp_section7_usage' ).get() ) {
				$('#customize-control-canuckcp_section7_shortcode').show();
			} else {
				$('#customize-control-canuckcp_section7_shortcode').hide();
			}
		});
		// Show or hide button options
		wp.customize.control('canuckcp_include_section7_button', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section7_button_icon').show();
						$('#customize-control-canuckcp_section7_button_name').show();
						$('#customize-control-canuckcp_section7_button_link').show();
						$('#customize-control-canuckcp_section7_button_background_color').show();
						$('#customize-control-canuckcp_section7_button_text_color').show();
						$('#customize-control-canuckcp_section7_button_hover_background_color').show();
						$('#customize-control-canuckcp_section7_button_hover_text_color').show();
						break;
					case false:
						$('#customize-control-canuckcp_section7_button_icon').hide();
						$('#customize-control-canuckcp_section7_button_name').hide();
						$('#customize-control-canuckcp_section7_button_link').hide();
						$('#customize-control-canuckcp_section7_button_background_color').hide();
						$('#customize-control-canuckcp_section7_button_text_color').hide();
						$('#customize-control-canuckcp_section7_button_hover_background_color').hide();
						$('#customize-control-canuckcp_section7_button_hover_text_color').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_include_section7_button' ).get() ) {
				$('#customize-control-canuckcp_section7_button_icon').hide();
				$('#customize-control-canuckcp_section7_button_name').hide();
				$('#customize-control-canuckcp_section7_button_link').hide();
				$('#customize-control-canuckcp_section7_button_background_color').hide();
				$('#customize-control-canuckcp_section7_button_text_color').hide();
				$('#customize-control-canuckcp_section7_button_hover_background_color').hide();
				$('#customize-control-canuckcp_section7_button_hover_text_color').hide();
			} else {
				$('#customize-control-canuckcp_section7_button_icon').show();
				$('#customize-control-canuckcp_section7_button_name').show();
				$('#customize-control-canuckcp_section7_button_link').show();
				$('#customize-control-canuckcp_section7_button_background_color').show();
				$('#customize-control-canuckcp_section7_button_text_color').show();
				$('#customize-control-canuckcp_section7_button_hover_background_color').show();
				$('#customize-control-canuckcp_section7_button_hover_text_color').show();
			}
		});
		// ================= Home Page Section 8 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section8_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section8_background_image').show();
						$('#customize-control-canuckcp_section8_overlay_opacity').show();
						$('#customize-control-canuckcp_section8_use_parallax').show();
						$('#customize-control-canuckcp_section8_background_color').show();
						$('#customize-control-canuckcp_section8_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section8_background_image').hide();
						$('#customize-control-canuckcp_section8_overlay_opacity').hide();
						$('#customize-control-canuckcp_section8_use_parallax').hide();
						$('#customize-control-canuckcp_section8_background_color').hide();
						$('#customize-control-canuckcp_section8_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section8_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section8_background_image').hide();
				$('#customize-control-canuckcp_section8_overlay_opacity').hide();
				$('#customize-control-canuckcp_section8_use_parallax').hide();
				$('#customize-control-canuckcp_section8_background_color').hide();
				$('#customize-control-canuckcp_section8_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section8_background_image').show();
				$('#customize-control-canuckcp_section8_overlay_opacity').show();
				$('#customize-control-canuckcp_section8_use_parallax').show();
				$('#customize-control-canuckcp_section8_background_color').show();
				$('#customize-control-canuckcp_section8_background_color_opacity').show();
			}
		});
		// Show or hide button colors
		wp.customize.control('canuckcp_section8_button_colors_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section8_button_background_color').show();
						$('#customize-control-canuckcp_section8_button_text_color').show();
						$('#customize-control-canuckcp_section8_button_hover_background_color').show();
						$('#customize-control-canuckcp_section8_button_hover_text_color').show();
						break;
					case false:
						$('#customize-control-canuckcp_section8_button_background_color').hide();
						$('#customize-control-canuckcp_section8_button_text_color').hide();
						$('#customize-control-canuckcp_section8_button_hover_background_color').hide();
						$('#customize-control-canuckcp_section8_button_hover_text_color').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section8_button_colors_toggle' ).get() ) {
				$('#customize-control-canuckcp_section8_button_background_color').hide();
				$('#customize-control-canuckcp_section8_button_text_color').hide();
				$('#customize-control-canuckcp_section8_button_hover_background_color').hide();
				$('#customize-control-canuckcp_section8_button_hover_text_color').hide();
			} else {
				$('#customize-control-canuckcp_section8_button_background_color').show();
				$('#customize-control-canuckcp_section8_button_text_color').show();
				$('#customize-control-canuckcp_section8_button_hover_background_color').show();
				$('#customize-control-canuckcp_section8_button_hover_text_color').show();
			}
		});
		// Show or hide box1
		wp.customize.control('canuckcp_section8_box1_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section8_box1_use_font_icon').show();
						$('#customize-control-canuckcp_section8_box1_image_font').show();
						$('#customize-control-canuckcp_section8_box1_icon_color').show();
						$('#customize-control-canuckcp_section8_box1_image').show();
						$('#customize-control-canuckcp_section8_box1_title').show();
						$('#customize-control-canuckcp_section8_box1_text').show();
						$('#customize-control-canuckcp_section8_box1_include_link').show();
						$('#customize-control-canuckcp_section8_box1_button_link').show();
						$('#customize-control-canuckcp_section8_box1_button_icon').show();
						$('#customize-control-canuckcp_section8_box1_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section8_box1_use_font_icon').hide();
						$('#customize-control-canuckcp_section8_box1_image_font').hide();
						$('#customize-control-canuckcp_section8_box1_icon_color').hide();
						$('#customize-control-canuckcp_section8_box1_image').hide();
						$('#customize-control-canuckcp_section8_box1_title').hide();
						$('#customize-control-canuckcp_section8_box1_text').hide();
						$('#customize-control-canuckcp_section8_box1_include_link').hide();
						$('#customize-control-canuckcp_section8_box1_button_link').hide();
						$('#customize-control-canuckcp_section8_box1_button_icon').hide();
						$('#customize-control-canuckcp_section8_box1_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section8_box1_toggle' ).get() ) {
				$('#customize-control-canuckcp_section8_box1_use_font_icon').hide();
				$('#customize-control-canuckcp_section8_box1_image_font').hide();
				$('#customize-control-canuckcp_section8_box1_icon_color').hide();
				$('#customize-control-canuckcp_section8_box1_image').hide();
				$('#customize-control-canuckcp_section8_box1_title').hide();
				$('#customize-control-canuckcp_section8_box1_text').hide();
				$('#customize-control-canuckcp_section8_box1_include_link').hide();
				$('#customize-control-canuckcp_section8_box1_button_link').hide();
				$('#customize-control-canuckcp_section8_box1_button_icon').hide();
				$('#customize-control-canuckcp_section8_box1_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section8_box1_use_font_icon').show();
				$('#customize-control-canuckcp_section8_box1_image_font').show();
				$('#customize-control-canuckcp_section8_box1_icon_color').show();
				$('#customize-control-canuckcp_section8_box1_image').show();
				$('#customize-control-canuckcp_section8_box1_title').show();
				$('#customize-control-canuckcp_section8_box1_text').show();
				$('#customize-control-canuckcp_section8_box1_include_link').show();
				$('#customize-control-canuckcp_section8_box1_button_link').show();
				$('#customize-control-canuckcp_section8_box1_button_icon').show();
				$('#customize-control-canuckcp_section8_box1_button_title').show();
			}
		});
		// Show or hide box2
		wp.customize.control('canuckcp_section8_box2_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section8_box2_use_font_icon').show();
						$('#customize-control-canuckcp_section8_box2_image_font').show();
						$('#customize-control-canuckcp_section8_box2_icon_color').show();
						$('#customize-control-canuckcp_section8_box2_image').show();
						$('#customize-control-canuckcp_section8_box2_title').show();
						$('#customize-control-canuckcp_section8_box2_text').show();
						$('#customize-control-canuckcp_section8_box2_include_link').show();
						$('#customize-control-canuckcp_section8_box2_button_link').show();
						$('#customize-control-canuckcp_section8_box2_button_icon').show();
						$('#customize-control-canuckcp_section8_box2_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section8_box2_use_font_icon').hide();
						$('#customize-control-canuckcp_section8_box2_image_font').hide();
						$('#customize-control-canuckcp_section8_box2_icon_color').hide();
						$('#customize-control-canuckcp_section8_box2_image').hide();
						$('#customize-control-canuckcp_section8_box2_title').hide();
						$('#customize-control-canuckcp_section8_box2_text').hide();
						$('#customize-control-canuckcp_section8_box2_include_link').hide();
						$('#customize-control-canuckcp_section8_box2_button_link').hide();
						$('#customize-control-canuckcp_section8_box2_button_icon').hide();
						$('#customize-control-canuckcp_section8_box2_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section8_box2_toggle' ).get() ) {
				$('#customize-control-canuckcp_section8_box2_use_font_icon').hide();
				$('#customize-control-canuckcp_section8_box2_image_font').hide();
				$('#customize-control-canuckcp_section8_box2_icon_color').hide();
				$('#customize-control-canuckcp_section8_box2_image').hide();
				$('#customize-control-canuckcp_section8_box2_title').hide();
				$('#customize-control-canuckcp_section8_box2_text').hide();
				$('#customize-control-canuckcp_section8_box2_include_link').hide();
				$('#customize-control-canuckcp_section8_box2_button_link').hide();
				$('#customize-control-canuckcp_section8_box2_button_icon').hide();
				$('#customize-control-canuckcp_section8_box2_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section8_box2_use_font_icon').show();
				$('#customize-control-canuckcp_section8_box2_image_font').show();
				$('#customize-control-canuckcp_section8_box2_icon_color').show();
				$('#customize-control-canuckcp_section8_box2_image').show();
				$('#customize-control-canuckcp_section8_box2_title').show();
				$('#customize-control-canuckcp_section8_box2_text').show();
				$('#customize-control-canuckcp_section8_box2_include_link').show();
				$('#customize-control-canuckcp_section8_box2_button_link').show();
				$('#customize-control-canuckcp_section8_box2_button_icon').show();
				$('#customize-control-canuckcp_section8_box2_button_title').show();
			}
		});
		// Show or hide box 3
		wp.customize.control('canuckcp_section8_box3_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section8_box3_use_font_icon').show();
						$('#customize-control-canuckcp_section8_box3_image_font').show();
						$('#customize-control-canuckcp_section8_box3_icon_color').show();
						$('#customize-control-canuckcp_section8_box3_image').show();
						$('#customize-control-canuckcp_section8_box3_title').show();
						$('#customize-control-canuckcp_section8_box3_text').show();
						$('#customize-control-canuckcp_section8_box3_include_link').show();
						$('#customize-control-canuckcp_section8_box3_button_link').show();
						$('#customize-control-canuckcp_section8_box3_button_icon').show();
						$('#customize-control-canuckcp_section8_box3_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section8_box3_use_font_icon').hide();
						$('#customize-control-canuckcp_section8_box3_image_font').hide();
						$('#customize-control-canuckcp_section8_box3_icon_color').hide();
						$('#customize-control-canuckcp_section8_box3_image').hide();
						$('#customize-control-canuckcp_section8_box3_title').hide();
						$('#customize-control-canuckcp_section8_box3_text').hide();
						$('#customize-control-canuckcp_section8_box3_include_link').hide();
						$('#customize-control-canuckcp_section8_box3_button_link').hide();
						$('#customize-control-canuckcp_section8_box3_button_icon').hide();
						$('#customize-control-canuckcp_section8_box3_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section8_box3_toggle' ).get() ) {
				$('#customize-control-canuckcp_section8_box3_use_font_icon').hide();
				$('#customize-control-canuckcp_section8_box3_image_font').hide();
				$('#customize-control-canuckcp_section8_box3_icon_color').hide();
				$('#customize-control-canuckcp_section8_box3_image').hide();
				$('#customize-control-canuckcp_section8_box3_title').hide();
				$('#customize-control-canuckcp_section8_box3_text').hide();
				$('#customize-control-canuckcp_section8_box3_include_link').hide();
				$('#customize-control-canuckcp_section8_box3_button_link').hide();
				$('#customize-control-canuckcp_section8_box3_button_icon').hide();
				$('#customize-control-canuckcp_section8_box3_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section8_box3_use_font_icon').show();
				$('#customize-control-canuckcp_section8_box3_image_font').show();
				$('#customize-control-canuckcp_section8_box3_icon_color').show();
				$('#customize-control-canuckcp_section8_box3_image').show();
				$('#customize-control-canuckcp_section8_box3_title').show();
				$('#customize-control-canuckcp_section8_box3_text').show();
				$('#customize-control-canuckcp_section8_box3_include_link').show();
				$('#customize-control-canuckcp_section8_box3_button_link').show();
				$('#customize-control-canuckcp_section8_box3_button_icon').show();
				$('#customize-control-canuckcp_section8_box3_button_title').show();
			}
		});
		// Show or hide box 4
		wp.customize.control('canuckcp_section8_box4_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section8_box4_use_font_icon').show();
						$('#customize-control-canuckcp_section8_box4_image_font').show();
						$('#customize-control-canuckcp_section8_box4_icon_color').show();
						$('#customize-control-canuckcp_section8_box4_image').show();
						$('#customize-control-canuckcp_section8_box4_title').show();
						$('#customize-control-canuckcp_section8_box4_text').show();
						$('#customize-control-canuckcp_section8_box4_include_link').show();
						$('#customize-control-canuckcp_section8_box4_button_link').show();
						$('#customize-control-canuckcp_section8_box4_button_icon').show();
						$('#customize-control-canuckcp_section8_box4_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section8_box4_use_font_icon').hide();
						$('#customize-control-canuckcp_section8_box4_image_font').hide();
						$('#customize-control-canuckcp_section8_box4_icon_color').hide();
						$('#customize-control-canuckcp_section8_box4_image').hide();
						$('#customize-control-canuckcp_section8_box4_title').hide();
						$('#customize-control-canuckcp_section8_box4_text').hide();
						$('#customize-control-canuckcp_section8_box4_include_link').hide();
						$('#customize-control-canuckcp_section8_box4_button_link').hide();
						$('#customize-control-canuckcp_section8_box4_button_icon').hide();
						$('#customize-control-canuckcp_section8_box4_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section8_box4_toggle' ).get() ) {
				$('#customize-control-canuckcp_section8_box4_use_font_icon').hide();
				$('#customize-control-canuckcp_section8_box4_image_font').hide();
				$('#customize-control-canuckcp_section8_box4_icon_color').hide();
				$('#customize-control-canuckcp_section8_box4_image').hide();
				$('#customize-control-canuckcp_section8_box4_title').hide();
				$('#customize-control-canuckcp_section8_box4_text').hide();
				$('#customize-control-canuckcp_section8_box4_include_link').hide();
				$('#customize-control-canuckcp_section8_box4_button_link').hide();
				$('#customize-control-canuckcp_section8_box4_button_icon').hide();
				$('#customize-control-canuckcp_section8_box4_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section8_box4_use_font_icon').show();
				$('#customize-control-canuckcp_section8_box4_image_font').show();
				$('#customize-control-canuckcp_section8_box4_icon_color').show();
				$('#customize-control-canuckcp_section8_box4_image').show();
				$('#customize-control-canuckcp_section8_box4_title').show();
				$('#customize-control-canuckcp_section8_box4_text').show();
				$('#customize-control-canuckcp_section8_box4_include_link').show();
				$('#customize-control-canuckcp_section8_box4_button_link').show();
				$('#customize-control-canuckcp_section8_box4_button_icon').show();
				$('#customize-control-canuckcp_section8_box4_button_title').show();
			}
		});
		// ================= Home Page Section 9 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section9_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section9_background_image').show();
						$('#customize-control-canuckcp_section9_overlay_opacity').show();
						$('#customize-control-canuckcp_section9_use_parallax').show();
						$('#customize-control-canuckcp_section9_background_color').show();
						$('#customize-control-canuckcp_section9_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section9_background_image').hide();
						$('#customize-control-canuckcp_section9_overlay_opacity').hide();
						$('#customize-control-canuckcp_section9_use_parallax').hide();
						$('#customize-control-canuckcp_section9_background_color').hide();
						$('#customize-control-canuckcp_section9_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section9_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section9_background_image').hide();
				$('#customize-control-canuckcp_section9_overlay_opacity').hide();
				$('#customize-control-canuckcp_section9_use_parallax').hide();
				$('#customize-control-canuckcp_section9_background_color').hide();
				$('#customize-control-canuckcp_section9_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section9_background_image').show();
				$('#customize-control-canuckcp_section9_overlay_opacity').show();
				$('#customize-control-canuckcp_section9_use_parallax').show();
				$('#customize-control-canuckcp_section9_background_color').show();
				$('#customize-control-canuckcp_section9_background_color_opacity').show();
			}
		});
		// ================= Home Page Section 10 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section10_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section10_background_image').show();
						$('#customize-control-canuckcp_section10_overlay_opacity').show();
						$('#customize-control-canuckcp_section10_use_parallax').show();
						$('#customize-control-canuckcp_section10_background_color').show();
						$('#customize-control-canuckcp_section10_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section10_background_image').hide();
						$('#customize-control-canuckcp_section10_overlay_opacity').hide();
						$('#customize-control-canuckcp_section10_use_parallax').hide();
						$('#customize-control-canuckcp_section10_background_color').hide();
						$('#customize-control-canuckcp_section10_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section10_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section10_background_image').hide();
				$('#customize-control-canuckcp_section10_overlay_opacity').hide();
				$('#customize-control-canuckcp_section10_use_parallax').hide();
				$('#customize-control-canuckcp_section10_background_color').hide();
				$('#customize-control-canuckcp_section10_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section10_background_image').show();
				$('#customize-control-canuckcp_section10_overlay_opacity').show();
				$('#customize-control-canuckcp_section10_use_parallax').show();
				$('#customize-control-canuckcp_section10_background_color').show();
				$('#customize-control-canuckcp_section10_background_color_opacity').show();
			}
		});
		// Show or hide shortcode, image input
		wp.customize.control('canuckcp_section10_media_area_usage', function (control) {
			control.setting.bind(function (value) {
				if ( 'shortcode' === value ) {
					$('#customize-control-canuckcp_section10_shortcode').show();
					$('#customize-control-canuckcp_section10_image').hide();
				} else if ( 'widgetized' === value ) {
					$('#customize-control-canuckcp_section10_shortcode').hide();
					$('#customize-control-canuckcp_section10_image').hide();
				} else {
					$('#customize-control-canuckcp_section10_image').show();
					$('#customize-control-canuckcp_section10_shortcode').hide();
				}
			});
			// Saved state.
			if ( 'shortcode' === wp.customize.instance( 'canuckcp_section10_media_area_usage' ).get() ) {
				$('#customize-control-canuckcp_section10_shortcode').show();
				$('#customize-control-canuckcp_section10_image').hide();
			} else if( 'widget' === wp.customize.instance( 'canuckcp_section10_media_area_usage' ).get() ) {
				$('#customize-control-canuckcp_section10_shortcode').hide();
				$('#customize-control-canuckcp_section10_image').hide();
			} else {
				$('#customize-control-canuckcp_section10_image').show();
				$('#customize-control-canuckcp_section10_shortcode').hide();
			}
		});
		// Show or hide button options
		wp.customize.control('canuckcp_section10_include_link', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section10_button_icon').show();
						$('#customize-control-canuckcp_section10_button_title').show();
						$('#customize-control-canuckcp_section10_button_link').show();
						$('#customize-control-canuckcp_section10_button_background_color').show();
						$('#customize-control-canuckcp_section10_button_text_color').show();
						$('#customize-control-canuckcp_section10_button_hover_background_color').show();
						$('#customize-control-canuckcp_section10_button_hover_text_color').show();
						break;
					case false:
						$('#customize-control-canuckcp_section10_button_icon').hide();	
						$('#customize-control-canuckcp_section10_button_title').hide();
						$('#customize-control-canuckcp_section10_button_link').hide();
						$('#customize-control-canuckcp_section10_button_background_color').hide();
						$('#customize-control-canuckcp_section10_button_text_color').hide();
						$('#customize-control-canuckcp_section10_button_hover_background_color').hide();
						$('#customize-control-canuckcp_section10_button_hover_text_color').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section10_include_link' ).get() ) {
				$('#customize-control-canuckcp_section10_button_icon').hide();
				$('#customize-control-canuckcp_section10_button_title').hide();
				$('#customize-control-canuckcp_section10_button_link').hide();
				$('#customize-control-canuckcp_section10_button_background_color').hide();
				$('#customize-control-canuckcp_section10_button_text_color').hide();
				$('#customize-control-canuckcp_section10_button_hover_background_color').hide();
				$('#customize-control-canuckcp_section10_button_hover_text_color').hide();
			} else {
				$('#customize-control-canuckcp_section10_button_icon').show();
				$('#customize-control-canuckcp_section10_button_title').show();
				$('#customize-control-canuckcp_section10_button_link').show();
				$('#customize-control-canuckcp_section10_button_background_color').show();
				$('#customize-control-canuckcp_section10_button_text_color').show();
				$('#customize-control-canuckcp_section10_button_hover_background_color').show();
				$('#customize-control-canuckcp_section10_button_hover_text_color').show();
			}
		});
		// ================= Home Page Section 11 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section11_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section11_background_image').show();
						$('#customize-control-canuckcp_section11_overlay_opacity').show();
						$('#customize-control-canuckcp_section11_use_parallax').show();
						$('#customize-control-canuckcp_section11_background_color').show();
						$('#customize-control-canuckcp_section11_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section11_background_image').hide();
						$('#customize-control-canuckcp_section11_overlay_opacity').hide();
						$('#customize-control-canuckcp_section11_use_parallax').hide();
						$('#customize-control-canuckcp_section11_background_color').hide();
						$('#customize-control-canuckcp_section11_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section11_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section11_background_image').hide();
				$('#customize-control-canuckcp_section11_overlay_opacity').hide();
				$('#customize-control-canuckcp_section11_use_parallax').hide();
				$('#customize-control-canuckcp_section11_background_color').hide();
				$('#customize-control-canuckcp_section11_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section11_background_image').show();
				$('#customize-control-canuckcp_section11_overlay_opacity').show();
				$('#customize-control-canuckcp_section11_use_parallax').show();
				$('#customize-control-canuckcp_section11_background_color').show();
				$('#customize-control-canuckcp_section11_background_color_opacity').show();
			}
		});
		// Show or hide shortcode, image input
		wp.customize.control('canuckcp_section11_media_area_usage', function (control) {
			control.setting.bind(function (value) {
				if ( 'shortcode' === value ) {
					$('#customize-control-canuckcp_section11_shortcode').show();
					$('#customize-control-canuckcp_section11_image').hide();
				} else if ( 'widgetized' === value ) {
					$('#customize-control-canuckcp_section11_shortcode').hide();
					$('#customize-control-canuckcp_section11_image').hide();
				} else {
					$('#customize-control-canuckcp_section11_image').show();
					$('#customize-control-canuckcp_section11_shortcode').hide();
				}
			});
			// Saved state.
			if ( 'shortcode' === wp.customize.instance( 'canuckcp_section11_media_area_usage' ).get() ) {
				$('#customize-control-canuckcp_section11_shortcode').show();
				$('#customize-control-canuckcp_section11_image').hide();
			} else if( 'widget' === wp.customize.instance( 'canuckcp_section11_media_area_usage' ).get() ) {
				$('#customize-control-canuckcp_section11_shortcode').hide();
				$('#customize-control-canuckcp_section11_image').hide();
			} else {
				$('#customize-control-canuckcp_section11_image').show();
				$('#customize-control-canuckcp_section11_shortcode').hide();
			}
		});
		// Show or hide button options
		wp.customize.control('canuckcp_section11_include_link', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section11_button_icon').show();
						$('#customize-control-canuckcp_section11_button_title').show();
						$('#customize-control-canuckcp_section11_button_link').show();
						$('#customize-control-canuckcp_section11_button_background_color').show();
						$('#customize-control-canuckcp_section11_button_text_color').show();
						$('#customize-control-canuckcp_section11_button_hover_background_color').show();
						$('#customize-control-canuckcp_section11_button_hover_text_color').show();
						break;
					case false:
						$('#customize-control-canuckcp_section11_button_icon').hide();
						$('#customize-control-canuckcp_section11_button_title').hide();
						$('#customize-control-canuckcp_section11_button_link').hide();
						$('#customize-control-canuckcp_section11_button_background_color').hide();
						$('#customize-control-canuckcp_section11_button_text_color').hide();
						$('#customize-control-canuckcp_section11_button_hover_background_color').hide();
						$('#customize-control-canuckcp_section11_button_hover_text_color').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section11_include_link' ).get() ) {
				$('#customize-control-canuckcp_section11_button_icon').hide();
				$('#customize-control-canuckcp_section11_button_title').hide();
				$('#customize-control-canuckcp_section11_button_link').hide();
				$('#customize-control-canuckcp_section11_button_background_color').hide();
				$('#customize-control-canuckcp_section11_button_text_color').hide();
				$('#customize-control-canuckcp_section11_button_hover_background_color').hide();
				$('#customize-control-canuckcp_section11_button_hover_text_color').hide();
			} else {
				$('#customize-control-canuckcp_section11_button_icon').show();
				$('#customize-control-canuckcp_section11_button_title').show();
				$('#customize-control-canuckcp_section11_button_link').show();
				$('#customize-control-canuckcp_section11_button_background_color').show();
				$('#customize-control-canuckcp_section11_button_text_color').show();
				$('#customize-control-canuckcp_section11_button_hover_background_color').show();
				$('#customize-control-canuckcp_section11_button_hover_text_color').show();
			}
		});
		// ================= Home Page Section 12 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section12_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section12_background_image').show();
						$('#customize-control-canuckcp_section12_overlay_opacity').show();
						$('#customize-control-canuckcp_section12_use_parallax').show();
						$('#customize-control-canuckcp_section12_background_color').show();
						$('#customize-control-canuckcp_section12_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section12_background_image').hide();
						$('#customize-control-canuckcp_section12_overlay_opacity').hide();
						$('#customize-control-canuckcp_section12_use_parallax').hide();
						$('#customize-control-canuckcp_section12_background_color').hide();
						$('#customize-control-canuckcp_section12_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section12_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section12_background_image').hide();
				$('#customize-control-canuckcp_section12_overlay_opacity').hide();
				$('#customize-control-canuckcp_section12_use_parallax').hide();
				$('#customize-control-canuckcp_section12_background_color').hide();
				$('#customize-control-canuckcp_section12_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section12_background_image').show();
				$('#customize-control-canuckcp_section12_overlay_opacity').show();
				$('#customize-control-canuckcp_section12_use_parallax').show();
				$('#customize-control-canuckcp_section12_background_color').show();
				$('#customize-control-canuckcp_section12_background_color_opacity').show();
			}
		});
		// ================= Home Page Section 13 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section13_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section13_background_image').show();
						$('#customize-control-canuckcp_section13_overlay_opacity').show();
						$('#customize-control-canuckcp_section13_use_parallax').show();
						$('#customize-control-canuckcp_section13_background_color').show();
						$('#customize-control-canuckcp_section13_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section13_background_image').hide();
						$('#customize-control-canuckcp_section13_overlay_opacity').hide();
						$('#customize-control-canuckcp_section13_use_parallax').hide();
						$('#customize-control-canuckcp_section13_background_color').hide();
						$('#customize-control-canuckcp_section13_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section13_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section13_background_image').hide();
				$('#customize-control-canuckcp_section13_overlay_opacity').hide();
				$('#customize-control-canuckcp_section13_use_parallax').hide();
				$('#customize-control-canuckcp_section13_background_color').hide();
				$('#customize-control-canuckcp_section13_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section13_background_image').show();
				$('#customize-control-canuckcp_section13_overlay_opacity').show();
				$('#customize-control-canuckcp_section13_use_parallax').show();
				$('#customize-control-canuckcp_section13_background_color').show();
				$('#customize-control-canuckcp_section13_background_color_opacity').show();
			}
		});
		// ================= Home Page Section 14 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section14_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section14_background_image').show();
						$('#customize-control-canuckcp_section14_overlay_opacity').show();
						$('#customize-control-canuckcp_section14_use_parallax').show();
						$('#customize-control-canuckcp_section14_background_color').show();
						$('#customize-control-canuckcp_section14_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section14_background_image').hide();
						$('#customize-control-canuckcp_section14_overlay_opacity').hide();
						$('#customize-control-canuckcp_section14_use_parallax').hide();
						$('#customize-control-canuckcp_section14_background_color').hide();
						$('#customize-control-canuckcp_section14_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section14_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section14_background_image').hide();
				$('#customize-control-canuckcp_section14_overlay_opacity').hide();
				$('#customize-control-canuckcp_section14_use_parallax').hide();
				$('#customize-control-canuckcp_section14_background_color').hide();
				$('#customize-control-canuckcp_section14_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section14_background_image').show();
				$('#customize-control-canuckcp_section14_overlay_opacity').show();
				$('#customize-control-canuckcp_section14_use_parallax').show();
				$('#customize-control-canuckcp_section14_background_color').show();
				$('#customize-control-canuckcp_section14_background_color_opacity').show();
			}
		});
		// Show or hide button colors
		wp.customize.control('canuckcp_section14_button_colors_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section14_button_background_color').show();
						$('#customize-control-canuckcp_section14_button_text_color').show();
						$('#customize-control-canuckcp_section14_button_hover_background_color').show();
						$('#customize-control-canuckcp_section14_button_hover_text_color').show();
						break;
					case false:
						$('#customize-control-canuckcp_section14_button_background_color').hide();
						$('#customize-control-canuckcp_section14_button_text_color').hide();
						$('#customize-control-canuckcp_section14_button_hover_background_color').hide();
						$('#customize-control-canuckcp_section14_button_hover_text_color').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section14_button_colors_toggle' ).get() ) {
				$('#customize-control-canuckcp_section14_button_background_color').hide();
				$('#customize-control-canuckcp_section14_button_text_color').hide();
				$('#customize-control-canuckcp_section14_button_hover_background_color').hide();
				$('#customize-control-canuckcp_section14_button_hover_text_color').hide();
			} else {
				$('#customize-control-canuckcp_section14_button_background_color').show();
				$('#customize-control-canuckcp_section14_button_text_color').show();
				$('#customize-control-canuckcp_section14_button_hover_background_color').show();
				$('#customize-control-canuckcp_section14_button_hover_text_color').show();
			}
		});
		// Show or hide box1
		wp.customize.control('canuckcp_section14_box1_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section14_box1_use_font_icon').show();
						$('#customize-control-canuckcp_section14_box1_image_font').show();
						$('#customize-control-canuckcp_section14_box1_icon_color').show();
						$('#customize-control-canuckcp_section14_box1_image').show();
						$('#customize-control-canuckcp_section14_box1_title').show();
						$('#customize-control-canuckcp_section14_box1_text').show();
						$('#customize-control-canuckcp_section14_box1_include_link').show();
						$('#customize-control-canuckcp_section14_box1_button_link').show();
						$('#customize-control-canuckcp_section14_box1_button_icon').show();
						$('#customize-control-canuckcp_section14_box1_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section14_box1_use_font_icon').hide();
						$('#customize-control-canuckcp_section14_box1_image_font').hide();
						$('#customize-control-canuckcp_section14_box1_icon_color').hide();
						$('#customize-control-canuckcp_section14_box1_image').hide();
						$('#customize-control-canuckcp_section14_box1_title').hide();
						$('#customize-control-canuckcp_section14_box1_text').hide();
						$('#customize-control-canuckcp_section14_box1_include_link').hide();
						$('#customize-control-canuckcp_section14_box1_button_link').hide();
						$('#customize-control-canuckcp_section14_box1_button_icon').hide();
						$('#customize-control-canuckcp_section14_box1_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section14_box1_toggle' ).get() ) {
				$('#customize-control-canuckcp_section14_box1_use_font_icon').hide();
				$('#customize-control-canuckcp_section14_box1_image_font').hide();
				$('#customize-control-canuckcp_section14_box1_icon_color').hide();
				$('#customize-control-canuckcp_section14_box1_image').hide();
				$('#customize-control-canuckcp_section14_box1_title').hide();
				$('#customize-control-canuckcp_section14_box1_text').hide();
				$('#customize-control-canuckcp_section14_box1_include_link').hide();
				$('#customize-control-canuckcp_section14_box1_button_link').hide();
				$('#customize-control-canuckcp_section14_box1_button_icon').hide();
				$('#customize-control-canuckcp_section14_box1_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section14_box1_use_font_icon').show();
				$('#customize-control-canuckcp_section14_box1_image_font').show();
				$('#customize-control-canuckcp_section14_box1_icon_color').show();
				$('#customize-control-canuckcp_section14_box1_image').show();
				$('#customize-control-canuckcp_section14_box1_title').show();
				$('#customize-control-canuckcp_section14_box1_text').show();
				$('#customize-control-canuckcp_section14_box1_include_link').show();
				$('#customize-control-canuckcp_section14_box1_button_link').show();
				$('#customize-control-canuckcp_section14_box1_button_title').show();
			}
		});
		// Show or hide box2
		wp.customize.control('canuckcp_section14_box2_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section14_box2_use_font_icon').show();
						$('#customize-control-canuckcp_section14_box2_image_font').show();
						$('#customize-control-canuckcp_section14_box2_icon_color').show();
						$('#customize-control-canuckcp_section14_box2_image').show();
						$('#customize-control-canuckcp_section14_box2_title').show();
						$('#customize-control-canuckcp_section14_box2_text').show();
						$('#customize-control-canuckcp_section14_box2_include_link').show();
						$('#customize-control-canuckcp_section14_box2_button_link').show();
						$('#customize-control-canuckcp_section14_box2_button_icon').show();
						$('#customize-control-canuckcp_section14_box2_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section14_box2_use_font_icon').hide();
						$('#customize-control-canuckcp_section14_box2_image_font').hide();
						$('#customize-control-canuckcp_section14_box2_icon_color').hide();
						$('#customize-control-canuckcp_section14_box2_image').hide();
						$('#customize-control-canuckcp_section14_box2_title').hide();
						$('#customize-control-canuckcp_section14_box2_text').hide();
						$('#customize-control-canuckcp_section14_box2_include_link').hide();
						$('#customize-control-canuckcp_section14_box2_button_link').hide();
						$('#customize-control-canuckcp_section14_box2_button_icon').hide();
						$('#customize-control-canuckcp_section14_box2_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section14_box2_toggle' ).get() ) {
				$('#customize-control-canuckcp_section14_box2_use_font_icon').hide();
				$('#customize-control-canuckcp_section14_box2_image_font').hide();
				$('#customize-control-canuckcp_section14_box2_icon_color').hide();
				$('#customize-control-canuckcp_section14_box2_image').hide();
				$('#customize-control-canuckcp_section14_box2_title').hide();
				$('#customize-control-canuckcp_section14_box2_text').hide();
				$('#customize-control-canuckcp_section14_box2_include_link').hide();
				$('#customize-control-canuckcp_section14_box2_button_link').hide();
				$('#customize-control-canuckcp_section14_box2_button_icon').hide();
				$('#customize-control-canuckcp_section14_box2_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section14_box2_use_font_icon').show();
				$('#customize-control-canuckcp_section14_box2_image_font').show();
				$('#customize-control-canuckcp_section14_box2_icon_color').show();
				$('#customize-control-canuckcp_section14_box2_image').show();
				$('#customize-control-canuckcp_section14_box2_title').show();
				$('#customize-control-canuckcp_section14_box2_text').show();
				$('#customize-control-canuckcp_section14_box2_include_link').show();
				$('#customize-control-canuckcp_section14_box2_button_link').show();
				$('#customize-control-canuckcp_section14_box2_button_icon').show();
				$('#customize-control-canuckcp_section14_box2_button_title').show();
			}
		});
		// Show or hide box 3
		wp.customize.control('canuckcp_section14_box3_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section14_box3_use_font_icon').show();
						$('#customize-control-canuckcp_section14_box3_image_font').show();
						$('#customize-control-canuckcp_section14_box3_icon_color').show();
						$('#customize-control-canuckcp_section14_box3_image').show();
						$('#customize-control-canuckcp_section14_box3_title').show();
						$('#customize-control-canuckcp_section14_box3_text').show();
						$('#customize-control-canuckcp_section14_box3_include_link').show();
						$('#customize-control-canuckcp_section14_box3_button_link').show();
						$('#customize-control-canuckcp_section14_box3_button_icon').show();
						$('#customize-control-canuckcp_section14_box3_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section14_box3_use_font_icon').hide();
						$('#customize-control-canuckcp_section14_box3_image_font').hide();
						$('#customize-control-canuckcp_section14_box3_icon_color').hide();
						$('#customize-control-canuckcp_section14_box3_image').hide();
						$('#customize-control-canuckcp_section14_box3_title').hide();
						$('#customize-control-canuckcp_section14_box3_text').hide();
						$('#customize-control-canuckcp_section14_box3_include_link').hide();
						$('#customize-control-canuckcp_section14_box3_button_link').hide();
						$('#customize-control-canuckcp_section14_box3_button_icon').hide();
						$('#customize-control-canuckcp_section14_box3_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section14_box3_toggle' ).get() ) {
				$('#customize-control-canuckcp_section14_box3_use_font_icon').hide();
				$('#customize-control-canuckcp_section14_box3_image_font').hide();
				$('#customize-control-canuckcp_section14_box3_icon_color').hide();
				$('#customize-control-canuckcp_section14_box3_image').hide();
				$('#customize-control-canuckcp_section14_box3_title').hide();
				$('#customize-control-canuckcp_section14_box3_text').hide();
				$('#customize-control-canuckcp_section14_box3_include_link').hide();
				$('#customize-control-canuckcp_section14_box3_button_link').hide();
				$('#customize-control-canuckcp_section14_box3_button_icon').hide();
				$('#customize-control-canuckcp_section14_box3_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section14_box3_use_font_icon').show();
				$('#customize-control-canuckcp_section14_box3_image_font').show();
				$('#customize-control-canuckcp_section14_box3_icon_color').show();
				$('#customize-control-canuckcp_section14_box3_image').show();
				$('#customize-control-canuckcp_section14_box3_title').show();
				$('#customize-control-canuckcp_section14_box3_text').show();
				$('#customize-control-canuckcp_section14_box3_include_link').show();
				$('#customize-control-canuckcp_section14_box3_button_link').show();
				$('#customize-control-canuckcp_section14_box3_button_icon').show();
				$('#customize-control-canuckcp_section14_box3_button_title').show();
			}
		});
		// ================= Home Page Section 15 ===========================================
		// Show or hide home section background
		wp.customize.control('canuckcp_section15_background_option_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section15_background_image').show();
						$('#customize-control-canuckcp_section15_overlay_opacity').show();
						$('#customize-control-canuckcp_section15_use_parallax').show();
						$('#customize-control-canuckcp_section15_background_color').show();
						$('#customize-control-canuckcp_section15_background_color_opacity').show();
						break;
					case false:
						$('#customize-control-canuckcp_section15_background_image').hide();
						$('#customize-control-canuckcp_section15_overlay_opacity').hide();
						$('#customize-control-canuckcp_section15_use_parallax').hide();
						$('#customize-control-canuckcp_section15_background_color').hide();
						$('#customize-control-canuckcp_section15_background_color_opacity').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section15_background_option_toggle' ).get() ) {
				$('#customize-control-canuckcp_section15_background_image').hide();
				$('#customize-control-canuckcp_section15_overlay_opacity').hide();
				$('#customize-control-canuckcp_section15_use_parallax').hide();
				$('#customize-control-canuckcp_section15_background_color').hide();
				$('#customize-control-canuckcp_section15_background_color_opacity').hide();
			} else {
				$('#customize-control-canuckcp_section15_background_image').show();
				$('#customize-control-canuckcp_section15_overlay_opacity').show();
				$('#customize-control-canuckcp_section15_use_parallax').show();
				$('#customize-control-canuckcp_section15_background_color').show();
				$('#customize-control-canuckcp_section15_background_color_opacity').show();
			}
		});
		// Show or hide button colors
		wp.customize.control('canuckcp_section15_button_colors_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section15_button_background_color').show();
						$('#customize-control-canuckcp_section15_button_text_color').show();
						$('#customize-control-canuckcp_section15_button_hover_background_color').show();
						$('#customize-control-canuckcp_section15_button_hover_text_color').show();
						break;
					case false:
						$('#customize-control-canuckcp_section15_button_background_color').hide();
						$('#customize-control-canuckcp_section15_button_text_color').hide();
						$('#customize-control-canuckcp_section15_button_hover_background_color').hide();
						$('#customize-control-canuckcp_section15_button_hover_text_color').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section15_button_colors_toggle' ).get() ) {
				$('#customize-control-canuckcp_section15_button_background_color').hide();
				$('#customize-control-canuckcp_section15_button_text_color').hide();
				$('#customize-control-canuckcp_section15_button_hover_background_color').hide();
				$('#customize-control-canuckcp_section15_button_hover_text_color').hide();
			} else {
				$('#customize-control-canuckcp_section15_button_background_color').show();
				$('#customize-control-canuckcp_section15_button_text_color').show();
				$('#customize-control-canuckcp_section15_button_hover_background_color').show();
				$('#customize-control-canuckcp_section15_button_hover_text_color').show();
			}
		});
		// Show or hide box1
		wp.customize.control('canuckcp_section15_box1_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section15_box1_use_font_icon').show();
						$('#customize-control-canuckcp_section15_box1_image_font').show();
						$('#customize-control-canuckcp_section15_box1_icon_color').show();
						$('#customize-control-canuckcp_section15_box1_image').show();
						$('#customize-control-canuckcp_section15_box1_title').show();
						$('#customize-control-canuckcp_section15_box1_text').show();
						$('#customize-control-canuckcp_section15_box1_include_link').show();
						$('#customize-control-canuckcp_section15_box1_button_link').show();
						$('#customize-control-canuckcp_section15_box1_button_icon').show();
						$('#customize-control-canuckcp_section15_box1_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section15_box1_use_font_icon').hide();
						$('#customize-control-canuckcp_section15_box1_image_font').hide();
						$('#customize-control-canuckcp_section15_box1_icon_color').hide();
						$('#customize-control-canuckcp_section15_box1_image').hide();
						$('#customize-control-canuckcp_section15_box1_title').hide();
						$('#customize-control-canuckcp_section15_box1_text').hide();
						$('#customize-control-canuckcp_section15_box1_include_link').hide();
						$('#customize-control-canuckcp_section15_box1_button_link').hide();
						$('#customize-control-canuckcp_section15_box1_button_icon').hide();
						$('#customize-control-canuckcp_section15_box1_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section15_box1_toggle' ).get() ) {
				$('#customize-control-canuckcp_section15_box1_use_font_icon').hide();
				$('#customize-control-canuckcp_section15_box1_image_font').hide();
				$('#customize-control-canuckcp_section15_box1_icon_color').hide();
				$('#customize-control-canuckcp_section15_box1_image').hide();
				$('#customize-control-canuckcp_section15_box1_title').hide();
				$('#customize-control-canuckcp_section15_box1_text').hide();
				$('#customize-control-canuckcp_section15_box1_include_link').hide();
				$('#customize-control-canuckcp_section15_box1_button_link').hide();
				$('#customize-control-canuckcp_section15_box1_button_icon').hide();
				$('#customize-control-canuckcp_section15_box1_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section15_box1_use_font_icon').show();
				$('#customize-control-canuckcp_section15_box1_image_font').show();
				$('#customize-control-canuckcp_section15_box1_icon_color').show();
				$('#customize-control-canuckcp_section15_box1_image').show();
				$('#customize-control-canuckcp_section15_box1_title').show();
				$('#customize-control-canuckcp_section15_box1_text').show();
				$('#customize-control-canuckcp_section15_box1_include_link').show();
				$('#customize-control-canuckcp_section15_box1_button_link').show();
				$('#customize-control-canuckcp_section15_box1_button_icon').show();
				$('#customize-control-canuckcp_section15_box1_button_title').show();
			}
		});
		// Show or hide box2
		wp.customize.control('canuckcp_section15_box2_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section15_box2_use_font_icon').show();
						$('#customize-control-canuckcp_section15_box2_image_font').show();
						$('#customize-control-canuckcp_section15_box2_icon_color').show();
						$('#customize-control-canuckcp_section15_box2_image').show();
						$('#customize-control-canuckcp_section15_box2_title').show();
						$('#customize-control-canuckcp_section15_box2_text').show();
						$('#customize-control-canuckcp_section15_box2_include_link').show();
						$('#customize-control-canuckcp_section15_box2_button_link').show();
						$('#customize-control-canuckcp_section15_box2_button_icon').show();
						$('#customize-control-canuckcp_section15_box2_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section15_box2_use_font_icon').hide();
						$('#customize-control-canuckcp_section15_box2_image_font').hide();
						$('#customize-control-canuckcp_section15_box2_icon_color').hide();
						$('#customize-control-canuckcp_section15_box2_image').hide();
						$('#customize-control-canuckcp_section15_box2_title').hide();
						$('#customize-control-canuckcp_section15_box2_text').hide();
						$('#customize-control-canuckcp_section15_box2_include_link').hide();
						$('#customize-control-canuckcp_section15_box2_button_link').hide();
						$('#customize-control-canuckcp_section15_box2_button_icon').hide();
						$('#customize-control-canuckcp_section15_box2_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section15_box2_toggle' ).get() ) {
				$('#customize-control-canuckcp_section15_box2_use_font_icon').hide();
				$('#customize-control-canuckcp_section15_box2_image_font').hide();
				$('#customize-control-canuckcp_section15_box2_icon_color').hide();
				$('#customize-control-canuckcp_section15_box2_image').hide();
				$('#customize-control-canuckcp_section15_box2_title').hide();
				$('#customize-control-canuckcp_section15_box2_text').hide();
				$('#customize-control-canuckcp_section15_box2_include_link').hide();
				$('#customize-control-canuckcp_section15_box2_button_link').hide();
				$('#customize-control-canuckcp_section15_box2_button_icon').hide();
				$('#customize-control-canuckcp_section15_box2_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section15_box2_use_font_icon').show();
				$('#customize-control-canuckcp_section15_box2_image_font').show();
				$('#customize-control-canuckcp_section15_box2_icon_color').show();
				$('#customize-control-canuckcp_section15_box2_image').show();
				$('#customize-control-canuckcp_section15_box2_title').show();
				$('#customize-control-canuckcp_section15_box2_text').show();
				$('#customize-control-canuckcp_section15_box2_include_link').show();
				$('#customize-control-canuckcp_section15_box2_button_link').show();
				$('#customize-control-canuckcp_section15_box2_button_icon').show();
				$('#customize-control-canuckcp_section15_box2_button_title').show();
			}
		});
		// Show or hide box 3
		wp.customize.control('canuckcp_section15_box3_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section15_box3_use_font_icon').show();
						$('#customize-control-canuckcp_section15_box3_image_font').show();
						$('#customize-control-canuckcp_section15_box3_icon_color').show();
						$('#customize-control-canuckcp_section15_box3_image').show();
						$('#customize-control-canuckcp_section15_box3_title').show();
						$('#customize-control-canuckcp_section15_box3_text').show();
						$('#customize-control-canuckcp_section15_box3_include_link').show();
						$('#customize-control-canuckcp_section15_box3_button_link').show();
						$('#customize-control-canuckcp_section15_box3_button_icon').show();
						$('#customize-control-canuckcp_section15_box3_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section15_box3_use_font_icon').hide();
						$('#customize-control-canuckcp_section15_box3_image_font').hide();
						$('#customize-control-canuckcp_section15_box3_icon_color').hide();
						$('#customize-control-canuckcp_section15_box3_image').hide();
						$('#customize-control-canuckcp_section15_box3_title').hide();
						$('#customize-control-canuckcp_section15_box3_text').hide();
						$('#customize-control-canuckcp_section15_box3_include_link').hide();
						$('#customize-control-canuckcp_section15_box3_button_link').hide();
						$('#customize-control-canuckcp_section15_box3_button_icon').hide();
						$('#customize-control-canuckcp_section15_box3_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section15_box3_toggle' ).get() ) {
				$('#customize-control-canuckcp_section15_box3_use_font_icon').hide();
				$('#customize-control-canuckcp_section15_box3_image_font').hide();
				$('#customize-control-canuckcp_section15_box3_icon_color').hide();
				$('#customize-control-canuckcp_section15_box3_image').hide();
				$('#customize-control-canuckcp_section15_box3_title').hide();
				$('#customize-control-canuckcp_section15_box3_text').hide();
				$('#customize-control-canuckcp_section15_box3_include_link').hide();
				$('#customize-control-canuckcp_section15_box3_button_link').hide();
				$('#customize-control-canuckcp_section15_box3_button_icon').hide();
				$('#customize-control-canuckcp_section15_box3_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section15_box3_use_font_icon').show();
				$('#customize-control-canuckcp_section15_box3_image_font').show();
				$('#customize-control-canuckcp_section15_box3_icon_color').show();
				$('#customize-control-canuckcp_section15_box3_image').show();
				$('#customize-control-canuckcp_section15_box3_title').show();
				$('#customize-control-canuckcp_section15_box3_text').show();
				$('#customize-control-canuckcp_section15_box3_include_link').show();
				$('#customize-control-canuckcp_section15_box3_button_link').show();
				$('#customize-control-canuckcp_section15_box3_button_icon').show();
				$('#customize-control-canuckcp_section15_box3_button_title').show();
			}
		});
		// Show or hide box 4
		wp.customize.control('canuckcp_section15_box4_toggle', function (control) {
			control.setting.bind(function (value) {
				switch (value) {
					case true:
						$('#customize-control-canuckcp_section15_box4_use_font_icon').show();
						$('#customize-control-canuckcp_section15_box4_image_font').show();
						$('#customize-control-canuckcp_section15_box4_icon_color').show();
						$('#customize-control-canuckcp_section15_box4_image').show();
						$('#customize-control-canuckcp_section15_box4_title').show();
						$('#customize-control-canuckcp_section15_box4_text').show();
						$('#customize-control-canuckcp_section15_box4_include_link').show();
						$('#customize-control-canuckcp_section15_box4_button_link').show();
						$('#customize-control-canuckcp_section15_box4_button_icon').show();
						$('#customize-control-canuckcp_section15_box4_button_title').show();
						break;
					case false:
						$('#customize-control-canuckcp_section15_box4_use_font_icon').hide();
						$('#customize-control-canuckcp_section15_box4_image_font').hide();
						$('#customize-control-canuckcp_section15_box4_icon_color').hide();
						$('#customize-control-canuckcp_section15_box4_image').hide();
						$('#customize-control-canuckcp_section15_box4_title').hide();
						$('#customize-control-canuckcp_section15_box4_text').hide();
						$('#customize-control-canuckcp_section15_box4_include_link').hide();
						$('#customize-control-canuckcp_section15_box4_button_link').hide();
						$('#customize-control-canuckcp_section15_box4_button_icon').hide();
						$('#customize-control-canuckcp_section15_box4_button_title').hide();
						break;
				}
			});
			// Saved state.
			if ( false === wp.customize.instance( 'canuckcp_section15_box4_toggle' ).get() ) {
				$('#customize-control-canuckcp_section15_box4_use_font_icon').hide();
				$('#customize-control-canuckcp_section15_box4_image_font').hide();
				$('#customize-control-canuckcp_section15_box4_icon_color').hide();
				$('#customize-control-canuckcp_section15_box4_image').hide();
				$('#customize-control-canuckcp_section15_box4_title').hide();
				$('#customize-control-canuckcp_section15_box4_text').hide();
				$('#customize-control-canuckcp_section15_box4_include_link').hide();
				$('#customize-control-canuckcp_section15_box4_button_link').hide();
				$('#customize-control-canuckcp_section15_box4_button_icon').hide();
				$('#customize-control-canuckcp_section15_box4_button_title').hide();
			} else {
				$('#customize-control-canuckcp_section15_box4_use_font_icon').show();
				$('#customize-control-canuckcp_section15_box4_image_font').show();
				$('#customize-control-canuckcp_section15_box4_icon_color').show();
				$('#customize-control-canuckcp_section15_box4_image').show();
				$('#customize-control-canuckcp_section15_box4_title').show();
				$('#customize-control-canuckcp_section15_box4_text').show();
				$('#customize-control-canuckcp_section15_box4_include_link').show();
				$('#customize-control-canuckcp_section15_box4_button_link').show();
				$('#customize-control-canuckcp_section15_box4_button_icon').show();
				$('#customize-control-canuckcp_section15_box4_button_title').show();
			}
		});
	});
} )( jQuery );