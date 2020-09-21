<?php // phpcs:ignore WordPress.Files.FileName.InvalidClassFileName
/**
 * Canuck CP Theme Customizer.
 * This file sets up the options for the theme.
 *
 * @package   Canuck CP ClassicPress Theme
 * @copyright Copyright (C) 2017-2019, kevinhaig
 * @license   GPLv2 or later http://www.gnu.org/licenses/quick-guide-gplv2.html
 * @author    kevinhaig <kevinsspace.ca/contact/>
 * Canuck is distributed under the terms of the GNU GPL.
 */

/**
 * PANEL and SECTION ARRAY
 *
 * This function contains the array that is used to set up the panels and sub panels.
 */
function canuckcp_get_customizer_groups() {
	$groups = array(
		'canuckcp_general' => array(
			'name'        => 'canuckcp_general',
			'title'       => esc_html__( 'Canuck CP General', 'canuck-cp' ),
			'description' => '',
			'priority'    => 1,
			'sections'    => array(
				'general_misc_options'     => array(
					'name'        => 'general_misc_options',
					'title'       => esc_html__( 'Miscelaneous Options', 'canuck-cp' ),
					'description' => esc_html__( 'Miscelaneous Options for the Canuck Theme.', 'canuck-cp' ),
					'priority'    => 1,
				),
				'general_backup_options'   => array(
					'name'        => 'general_backup_options',
					'title'       => esc_html__( 'Backup Options', 'canuck-cp' ),
					'description' => esc_html__( 'Backup options to a private page accessible with the password:Canuck.', 'canuck-cp' ),
					'priority'    => 2,
				),
				'general_category_exclude' => array(
					'name'        => 'general_category_exclude',
					'title'       => esc_html__( 'Exclude Categories', 'canuck-cp' ),
					'description' => esc_html__( 'Exclude Categories from posts and lists', 'canuck-cp' ),
					'priority'    => 3,
				),
				'general_flex'             => array(
					'name'        => 'general_flex',
					'title'       => esc_html__( 'Slider Options', 'canuck-cp' ),
					'description' => '',
					'priority'    => 4,
				),
				'general_jquery'           => array(
					'name'        => 'general_jquery',
					'title'       => esc_html__( 'jQuery Options', 'canuck-cp' ),
					'description' => '',
					'priority'    => 5,
				),
			),
		),
		'canuckcp_social'  => array(
			'name'        => 'canuckcp_social',
			'title'       => esc_html__( 'Canuck CP Social Links', 'canuck-cp' ),
			'description' => 'Enter up to 8 social links',
			'priority'    => 2,
			'sections'    => array(
				'social_links' => array(
					'name'        => 'social_links',
					'title'       => esc_html__( 'Canuck: Social Links', 'canuck-cp' ),
					'description' => esc_html__( 'Social links for your website', 'canuck-cp' ),
					'priority'    => 1,
				),
			),
		),
		'canuckcp_layouts' => array(
			'name'        => 'canuckcp_layouts',
			'title'       => esc_html__( 'Canuck CP Layouts', 'canuck-cp' ),
			'description' => '',
			'priority'    => 3,
			'sections'    => array(
				'layouts_general'  => array(
					'name'        => 'layouts_general',
					'title'       => esc_html__( 'General Layout Options', 'canuck-cp' ),
					'description' => '',
					'priority'    => 1,
				),
				'layouts_index'    => array(
					'name'        => 'layouts_index',
					'title'       => esc_html__( 'Default Page Setup', 'canuck-cp' ),
					'description' => '',
					'priority'    => 2,
				),
				'layouts_author'   => array(
					'name'        => 'layouts_author',
					'title'       => esc_html__( 'Author Page Setup', 'canuck-cp' ),
					'description' => '',
					'priority'    => 3,
				),
				'layouts_category' => array(
					'name'        => 'layouts_category',
					'title'       => esc_html__( 'Category Page Setup', 'canuck-cp' ),
					'description' => '',
					'priority'    => 4,
				),
				'layouts_date'     => array(
					'name'        => 'layouts_date',
					'title'       => esc_html__( 'Date Page Setup', 'canuck-cp' ),
					'description' => '',
					'priority'    => 5,
				),
				'layouts_search'   => array(
					'name'        => 'layouts_search',
					'title'       => esc_html__( 'Search Page Setup', 'canuck-cp' ),
					'description' => '',
					'priority'    => 6,
				),
				'layouts_single'   => array(
					'name'        => 'layouts_single',
					'title'       => esc_html__( 'Single Page Setup', 'canuck-cp' ),
					'description' => '',
					'priority'    => 7,
				),
				'layouts_tag'      => array(
					'name'        => 'layouts_tag',
					'title'       => esc_html__( 'Tag Page Setup', 'canuck-cp' ),
					'description' => '',
					'priority'    => 8,
				),
				'layouts_404'      => array(
					'name'        => 'layouts_404',
					'title'       => esc_html__( 'Error Page Setup', 'canuck-cp' ),
					'description' => '',
					'priority'    => 9,
				),
			),
		),
		'canuckcp_header'  => array(
			'name'        => 'canuckcp_header',
			'title'       => esc_html__( 'Canuck CP Headers', 'canuck-cp' ),
			'description' => '',
			'priority'    => 4,
			'sections'    => array(
				'image_header'  => array(
					'name'        => 'image_header',
					'title'       => esc_html__( 'Image background options', 'canuck-cp' ),
					'description' => esc_html__( 'These options will be used when you are using a header image in your blog or in your home page.', 'canuck-cp' ) .
									esc_html__( 'The options are applied to the menu and logo that overlay the image.', 'canuck-cp' ),
					'priority'    => 1,
				),
				'contact_strip' => array(
					'name'        => 'contact_strip',
					'title'       => esc_html__( 'Contact Information', 'canuck-cp' ),
					'description' => esc_html__( 'This information will appear in the top header strip on the left hand side.', 'canuck-cp' ),
					'priority'    => 2,
				),
			),
		),
		'canuckcp_footer'  => array(
			'name'        => 'canuckcp_footer',
			'title'       => esc_html__( 'Canuck CP Footer', 'canuck-cp' ),
			'description' => '',
			'priority'    => 5,
			'sections'    => array(
				'footer_footer'    => array(
					'name'        => 'footer_footer',
					'title'       => esc_html__( 'Footer Options', 'canuck-cp' ),
					'description' => '',
					'priority'    => 1,
				),
				'footer_copyright' => array(
					'name'        => 'footer_copyright',
					'title'       => esc_html__( 'Copyright Strip Options', 'canuck-cp' ),
					'description' => '',
					'priority'    => 2,
				),
			),
		),
		'canuckcp_styles'  => array(
			'name'        => 'canuckcp_styles',
			'title'       => esc_html__( 'Canuck CP Styles', 'canuck-cp' ),
			'description' => '',
			'priority'    => 6,
			'sections'    => array(
				'styles_general' => array(
					'name'        => 'styles_general',
					'title'       => esc_html__( 'Canuck CP: General Styles', 'canuck-cp' ),
					'description' => esc_html__( 'General style changes', 'canuck-cp' ),
					'priority'    => 1,
				),
			),
		),
		'canuckcp_blog'    => array(
			'name'        => 'canuckcp_blog',
			'title'       => esc_html__( 'Canuck CP Blog', 'canuck-cp' ),
			'description' => '',
			'priority'    => 7,
			'sections'    => array(
				'blog_general' => array(
					'name'        => 'blog_general',
					'title'       => esc_html__( 'General Blog Options', 'canuck-cp' ),
					'description' => '',
					'priority'    => 1,
				),
				'blog_posts'   => array(
					'name'        => 'blog_posts',
					'title'       => esc_html__( 'Post Options', 'canuck-cp' ),
					'description' => '',
					'priority'    => 2,
				),
			),
		),
		'canuckcp_home'    => array(
			'name'        => 'canuckcp_home',
			'title'       => esc_html__( 'Canuck CP Home Page', 'canuck-cp' ),
			'description' => esc_html__( 'Build a landing page with these options. ', 'canuck-cp' ) .
							esc_html__( 'These options only apply when you create a new page and set Template = Home Page found in the page setup section.', 'canuck-cp' ),
			'priority'    => 8,
			'sections'    => array(
				'home_one'        => array(
					'name'        => 'home_one',
					'title'       => esc_html__( 'Home Feature Options', 'canuck-cp' ),
					'description' => esc_html__( 'You can add a feature slider or image to your home page.', 'canuck-cp' ),
					'priority'    => 1,
				),
				'home_layout'     => array(
					'name'        => 'home_layout',
					'title'       => esc_html__( 'Home Layout Options', 'canuck-cp' ),
					'description' => esc_html__( 'You can use any Section you want and stack them in any order you want.', 'canuck-cp' ),
					'priority'    => 1,
				),
				'home_section_1'  => array(
					'name'        => 'home_section_1',
					'title'       => esc_html__( 'Sec 1 Text/Shortcode/Widget', 'canuck-cp' ),
					'description' => esc_html__( 'Section 1 contains html text and an optional button, plus an optional shortcode or widget.', 'canuck-cp' ),
					'priority'    => 2,
				),
				'home_section_2'  => array(
					'name'        => 'home_section_2',
					'title'       => esc_html__( 'Sec 2 Three Service Boxes', 'canuck-cp' ),
					'description' => esc_html__( 'Section 2 contains 3 service boxes, allowing an image,title,html text,and a button.', 'canuck-cp' ),
					'priority'    => 3,
				),
				'home_section_3'  => array(
					'name'        => 'home_section_3',
					'title'       => esc_html__( 'Sec 3 Text/Shortcode/Widget', 'canuck-cp' ),
					'description' => esc_html__( 'Section 3 contains html text and an optional button, plus an optional shortcode or widget.', 'canuck-cp' ),
					'priority'    => 4,
				),
				'home_section_4'  => array(
					'name'        => 'home_section_4',
					'title'       => esc_html__( 'Sec 4 Two Service Boxes', 'canuck-cp' ),
					'description' => esc_html__( 'Section 4 contains 2 service boxes, allowing an image,title,html text,and a button.', 'canuck-cp' ),
					'priority'    => 5,
				),
				'home_section_5'  => array(
					'name'        => 'home_section_5',
					'title'       => esc_html__( 'Sec 5 Text/Shortcode/Widget', 'canuck-cp' ),
					'description' => esc_html__( 'Section 5 contains html text and an optional button, plus an optional shortcode or widget.', 'canuck-cp' ),
					'priority'    => 6,
				),
				'home_section_6'  => array(
					'name'        => 'home_section_6',
					'title'       => esc_html__( 'Sec 6 Two Service Boxes', 'canuck-cp' ),
					'description' => esc_html__( 'Section 6 contains 2 service boxes, allowing an image,title,html text,and a button.', 'canuck-cp' ),
					'priority'    => 7,
				),
				'home_section_7'  => array(
					'name'        => 'home_section_7',
					'title'       => esc_html__( 'Sec 7 Text/Shortcode/Widget', 'canuck-cp' ),
					'description' => esc_html__( 'Section 7 contains html text and an optional button, plus an optional shortcode or widget.', 'canuck-cp' ),
					'priority'    => 8,
				),
				'home_section_8'  => array(
					'name'        => 'home_section_8',
					'title'       => esc_html__( 'Sec 8 Four Service Boxes', 'canuck-cp' ),
					'description' => esc_html__( 'Section contains 4 service boxes, allowing an image,title,html text,and a button.', 'canuck-cp' ),
					'priority'    => 9,
				),
				'home_section_9'  => array(
					'name'        => 'home_section_9',
					'title'       => esc_html__( 'Sec 9 Portfolio', 'canuck-cp' ),
					'description' => esc_html__( 'This section contains a simplified portfolio.', 'canuck-cp' ) . ' ' .
									esc_html__( 'The portfolio is simply an image with a link to the featured post or a custom page.', 'canuck-cp' ) . ' ' .
									esc_html__( 'Set up featured posts with the category selected.', 'canuck-cp' ) . ' ' .
									esc_html__( 'Make sure to fill out Image Caption and Description as they show on the hover effect.', 'canuck-cp' ),
					'priority'    => 10,
				),
				'home_section_10' => array(
					'name'        => 'home_section_10',
					'title'       => esc_html__( 'Sec 10 Media/Content', 'canuck-cp' ),
					'description' => esc_html__( 'Section contains a media area on the left half, title, text and button on the right half.', 'canuck-cp' ),
					'priority'    => 11,
				),
				'home_section_11' => array(
					'name'        => 'home_section_11',
					'title'       => esc_html__( 'Sec 11 Content/Media', 'canuck-cp' ),
					'description' => esc_html__( 'Section contains title, text, button on left half, media area on right half', 'canuck-cp' ),
					'priority'    => 12,
				),
				'home_section_12' => array(
					'name'        => 'home_section_12',
					'title'       => esc_html__( 'Sec 12 Medium Portfolio Carousel', 'canuck-cp' ),
					'description' => esc_html__( 'Section contains title, text, medium sized carousel.', 'canuck-cp' ),
					'priority'    => 13,
				),
				'home_section_13' => array(
					'name'        => 'home_section_13',
					'title'       => esc_html__( 'Sec 13 Small Portfolio Carousel', 'canuck-cp' ),
					'description' => esc_html__( 'Section contains title, text, small sized carousel.', 'canuck-cp' ),
					'priority'    => 14,
				),
				'home_section_14' => array(
					'name'        => 'home_section_14',
					'title'       => esc_html__( 'Section 14 Three Service Boxes', 'canuck-cp' ),
					'description' => esc_html__( 'Section 14 contains 3 service boxes, allowing an image,title,html text,and a button.', 'canuck-cp' ),
					'priority'    => 14,
				),
				'home_section_15' => array(
					'name'        => 'home_section_15',
					'title'       => esc_html__( 'Section 15 Three Service Boxes', 'canuck-cp' ),
					'description' => esc_html__( 'Section 15 contains 4 service boxes, allowing an image,title,html text,and a button.', 'canuck-cp' ),
					'priority'    => 14,
				),
			),
		),
	);
	return apply_filters( 'canuckcp_get_customizer_groups', $groups );
}

/**
 * OPTIONS ARRAY.
 *
 * This function sets up the array with the option parameters.
 *
 * format:
 *
 * 'option_id' => array(
 *    'name'         => 'canuckcp_id',// keep the name the same as the option key. ALL OPTION NAMES MUST BE UNIQUE
 *    'title'        => esc_html__( 'Title of Option' ,'text domain' ),// title to show in option
 *    'option_type'  => 'text', // text, textarea, checkbox, radio, select, range, image, color, upload, scat, stag, mcat
 *                              // scat-single category dropdown, stag-single tag drop down, mcat-multiple category checkbox
 *    'setting_type' => 'theme_mod',  //theme_mod->saves to theme options table called theme_mods_canuck[]
 *                                    //  ->will have to be re-entered for child theme
 *    'description'  => esc_html__("Description of option", 'canuck-cp' ), //additional documentation for option
 *    'section'      => 'panel1_section1', //panel you want the option to appear under
 *    'priority'     => 1, // order within the section that the option is displayed
 *    'default'      => '', // sane default, what default do you want to use if the user does not update this option
 *    'transport'    => 'refresh', // refresh-> page must be reloaded to use the option
 *                                 // postMessage-> you have custom Javascript to instantly update the preview window
 *    'sanitize'     => 'is_email' // sanitize callback function you want to use, see recommended below
 *                               // checkbox=>wp_validate_boolean,
 *                               // text(email) => is_email,text(nohtml)=>sanitize_text_field,
 *                               // text(html allowed)=>wp_kses_post,text(link) => esc_url_raw,
 *                               // textarea(no html allowed)=>esc_html,textarea(html allowed)=> wp_kses_post
 *                               // radio=>sanitize_text_field,select=>sanitize_text_field,
 *                               // image=>esc_url_raw,upload=>esc_url_raw,
 *                               // range=>sanitize_text_field,color=>sanitize_hex_color,
 *                               // scat=>sanitize_text_field,stag=>sanitize_text_field
 * ),
 *
 * For select and radio lists and the range slider there is a choices array to also set up, see the defaults below.
 *
 * NOTE: Panel 1 Section 1 contains a comlete set of option examples available for this script
 * Simply cut and paste to add the option of your choice
 */
function canuckcp_get_customizer_option_partameters() {
	// First get the color scheme to allow defaults button hovers.
	$color_scheme = get_theme_mod( 'canuckcp_color_scheme', 'gray_pink' );
	if ( 'gray-green' === $color_scheme ) {
		$button_hover_default = '#19c143';
	} elseif ( 'gray-red' === $color_scheme ) {
		$button_hover_default = '#f20202';
	} elseif ( 'gray-blue' === $color_scheme ) {
		$button_hover_default = '#16aee5';
	} else {
		$button_hover_default = '#ed1651';
	}
	$options = array(
		// Panel:canuckcp_general Section:general_misc_options.
		'canuckcp_include_pinit'                           => array(
			'name'        => 'canuckcp_include_pinit',
			'title'       => esc_html__( 'Include Pinterest PinIt', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'If checked a Pinterest Pinit button will show on portfolio based and masonry galleries.', 'canuck-cp' ),
			'section'     => 'general_misc_options',
			'priority'    => 1,
			'default'     => 0, // Leave as 1.
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:themeslug_intro Section:intro_intro.
		'canuckcp_backup_options_to_post'                  => array(
			'name'        => 'canuckcp_backup_options_to_post',
			'title'       => esc_html__( 'Backup Canuck CP Option Content', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Canuck CP options contains significant content creation.', 'canuck-cp' ) . ' ' .
							esc_html__( 'Content creation is in the options that require some form of text input.', 'canuck-cp' ) . ' ' .
							esc_html__( 'Select the checkbox above to save your content to a Private page, available only to users signed in with admin privledges.', 'canuck-cp' ) . ' ' .
							esc_html__( 'You will then be able to access this content while setting up a different theme. ', 'canuck-cp' ) . '<br/><br/>' .
							'<span style="color:red">' . esc_html__( 'If the box is checked , the page will be updated each time a Customize save is completed. ', 'canuck-cp' ) .
							esc_html__( 'You can optionally check the box and Save, then un-check the box and save to update the page one time. ', 'canuck-cp' ) . '</span>',
			'section'     => 'general_backup_options',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuckcp_general Section:general_category_exclude.
		'canuckcp_exclude_categories'                      => array(
			'name'        => 'canuckcp_exclude_categories',
			'title'       => esc_html__( 'Exclude Category IDs', 'canuck-cp' ),
			'option_type' => 'mcat',
			'description' => esc_html__( 'Check category ids to exclude from posts and lists.', 'canuck-cp' ),
			'section'     => 'general_category_exclude',
			'priority'    => 1,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		// Panel:canuckcp_general Section:general_flex.
		'canuckcp_flex_slider_auto'                        => array(
			'name'        => 'canuckcp_flex_slider_auto',
			'title'       => esc_html__( 'Feature Slider Auto Mode', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'If checked the slider will start automatically.', 'canuck-cp' ),
			'section'     => 'general_flex',
			'priority'    => 1,
			'default'     => 1, // Leave as 1.
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_flex_slider_effect'                      => array(
			'name'        => 'canuckcp_flex_slider_effect',
			'title'       => esc_html__( 'Feature Slider Transition Effect', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'slide' => esc_html__( 'Slide', 'canuck-cp' ),
				'fade'  => esc_html__( 'Fade', 'canuck-cp' ),
			),
			'description' => esc_html__( 'Use either a slide or fade to switch slides.', 'canuck-cp' ),
			'section'     => 'general_flex',
			'priority'    => 2,
			'default'     => 'fade',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_flex_effect',
		),
		'canuckcp_flex_slider_pause'                       => array(
			'name'        => 'canuckcp_flex_slider_pause',
			'title'       => esc_html__( 'Feature Slider Pause Time', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_flex_slider_pause_choices(),
			'description' => esc_html__( 'How long before the slide changes in milliseconds.', 'canuck-cp' ),
			'section'     => 'general_flex',
			'priority'    => 3,
			'default'     => '5000',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_flex_pause',
		),
		'canuckcp_flex_slider_trans'                       => array(
			'name'        => 'canuckcp_flex_slider_trans',
			'title'       => esc_html__( 'Feature Slider Transition Time', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_flex_slider_transition_choices(),
			'description' => esc_html__( 'How long for the slide to switch from start of change to end of change in milliseconds.', 'canuck-cp' ),
			'section'     => 'general_flex',
			'priority'    => 4,
			'default'     => '600',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_flex_trans',
		),
		'canuckcp_disable_widget_slider'                   => array(
			'name'        => 'canuckcp_disable_widget_slider',
			'title'       => esc_html__( 'Disable the widget slider', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'If users do not want to use the widget slider, check this box.', 'canuck-cp' ),
			'section'     => 'general_flex',
			'priority'    => 9,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuckcp_general Section:general_jquery.
		'canuckcp_disable_colorboxjs'                      => array(
			'name'        => 'canuckcp_disable_colorboxjs',
			'title'       => esc_html__( 'Disable colorbox.js plugin', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'colorbox.js is a javascript image plugin', 'canuck-cp' ),
			'section'     => 'general_jquery',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_disable_fitvidsjs'                       => array(
			'name'        => 'canuckcp_disable_fitvidsjs',
			'title'       => esc_html__( 'Disable fitvids.js plugin', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'fitvids.js is the responsive video javascript plugin', 'canuck-cp' ),
			'section'     => 'general_jquery',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_disable_smoothscroll'                    => array(
			'name'        => 'canuckcp_disable_smoothscroll',
			'title'       => esc_html__( 'Disable smooth scroll js script', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Click to disable this feature', 'canuck-cp' ),
			'section'     => 'general_jquery',
			'priority'    => 3,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_use_lazyload'                            => array(
			'name'        => 'canuckcp_use_lazyload',
			'title'       => esc_html__( 'Use lazyload.js plugin', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Click to use this feature. ', 'canuck-cp' ) .
							esc_html__( 'Lazy load delays loading of off screen images and improves page speed.', 'canuck-cp' ),
			'section'     => 'general_jquery',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_disable_scrollreveal'                    => array(
			'name'        => 'canuckcp_disable_scrollreveal',
			'title'       => esc_html__( 'Disable scrollreveal.js plugin', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Click to disable this feature. ', 'canuck-cp' ) .
							esc_html__( 'Scroll Reveal is used for home page section animation.', 'canuck-cp' ),
			'section'     => 'general_jquery',
			'priority'    => 5,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuckcp_social.
		'canuckcp_social_type1'                            => array(
			'name'        => 'canuckcp_social_type1',
			'title'       => esc_html__( 'Social Link 1 Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_social_select(),
			'description' => esc_html__( 'Select a name from the list', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 1,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_social_url1'                             => array(
			'name'        => 'canuckcp_social_url1',
			'title'       => esc_html__( 'Social Link 1 URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Enter the url for your social link, ex: https://www.facebook.com/your link/', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_social_type2'                            => array(
			'name'        => 'canuckcp_social_type2',
			'title'       => esc_html__( 'Social Link 2 Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_social_select(),
			'description' => esc_html__( 'Select a name from the list', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_social_url2'                             => array(
			'name'        => 'canuckcp_social_url2',
			'title'       => esc_html__( 'Social Link 2 URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Enter the url for your social link, ex: https://www.facebook.com/your link/', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 4,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_social_type3'                            => array(
			'name'        => 'canuckcp_social_type3',
			'title'       => esc_html__( 'Social Link 3 Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_social_select(),
			'description' => esc_html__( 'Select a name from the list', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 5,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_social_url3'                             => array(
			'name'        => 'canuckcp_social_url3',
			'title'       => esc_html__( 'Social Link 3 URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Enter the url for your social link, ex: https://www.facebook.com/your link/', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 6,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_social_type4'                            => array(
			'name'        => 'canuckcp_social_type4',
			'title'       => esc_html__( 'Social Link 4 Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_social_select(),
			'description' => esc_html__( 'Select a name from the list', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 7,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_social_url4'                             => array(
			'name'        => 'canuckcp_social_url4',
			'title'       => esc_html__( 'Social Link 4 URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Enter the url for your social link, ex: https://www.facebook.com/your link/', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 8,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_social_type5'                            => array(
			'name'        => 'canuckcp_social_type5',
			'title'       => esc_html__( 'Social Link 5 Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_social_select(),
			'description' => esc_html__( 'Select a name from the list', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_social_url5'                             => array(
			'name'        => 'canuckcp_social_url5',
			'title'       => esc_html__( 'Social Link 5 URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Enter the url for your social link, ex: https://www.facebook.com/your link/', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_social_type6'                            => array(
			'name'        => 'canuckcp_social_type6',
			'title'       => esc_html__( 'Social Link 6 Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_social_select(),
			'description' => esc_html__( 'Select a name from the list', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 11,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_social_url6'                             => array(
			'name'        => 'canuckcp_social_url6',
			'title'       => esc_html__( 'Social Link 6 URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Enter the url for your social link, ex: https://www.facebook.com/your link/', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 12,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_social_type7'                            => array(
			'name'        => 'canuckcp_social_type7',
			'title'       => esc_html__( 'Social Link 7 Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_social_select(),
			'description' => esc_html__( 'Select a name from the list', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 13,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_social_url7'                             => array(
			'name'        => 'canuckcp_social_url7',
			'title'       => esc_html__( 'Social Link 7 URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Enter the url for your social link, ex: https://www.facebook.com/your link/', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 14,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_social_type8'                            => array(
			'name'        => 'canuckcp_social_type8',
			'title'       => esc_html__( 'Social Link 8 Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_social_select(),
			'description' => esc_html__( 'Select a name from the list', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 15,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_social_url8'                             => array(
			'name'        => 'canuckcp_social_url8',
			'title'       => esc_html__( 'Social Link 8 URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Enter the url for your social link, ex: https://www.facebook.com/your link/', 'canuck-cp' ),
			'section'     => 'social_links',
			'priority'    => 16,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		// Panel:canuckcp_layouts Section:layouts_general.
		'canuckcp_breadcrumbs'                             => array(
			'name'        => 'canuckcp_breadcrumbs',
			'title'       => esc_html__( 'Include Breadcrumbs', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'To use breadcrumbs you must install a plugin called "Breadcrumb Trail" by Justin Tadlock.', 'canuck-cp' ),
			'section'     => 'layouts_general',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_use_feature'                             => array(
			'name'        => 'canuckcp_use_feature',
			'title'       => esc_html__( 'Include Feature Images', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Include feature images on archive, author, category, search, and tag pages.', 'canuck-cp' ),
			'section'     => 'layouts_general',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		// Panel:canuckcp_layouts Section:layouts_index.
		'canuckcp_index_layout'                            => array(
			'name'        => 'canuckcp_index_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck-cp' ),
			'option_type' => 'radio_image',
			'choices'     => canuckcp_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck-cp' ),
			'section'     => 'layouts_index',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_layout',
		),
		'canuckcp_index_title'                             => array(
			'name'        => 'canuckcp_index_title',
			'title'       => esc_html__( 'Disable Title', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to remove the title', 'canuck-cp' ),
			'section'     => 'layouts_index',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuckcp_layouts Section:layouts_author.
		'canuckcp_author_layout'                           => array(
			'name'        => 'canuckcp_author_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck-cp' ),
			'option_type' => 'radio_image',
			'choices'     => canuckcp_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck-cp' ),
			'section'     => 'layouts_author',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_layout',
		),
		'canuckcp_include_author_bio'                      => array(
			'name'        => 'canuckcp_include_author_bio',
			'title'       => esc_html__( 'Include author bio', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check this include author avatar and bio', 'canuck-cp' ),
			'section'     => 'layouts_author',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuckcp_layouts Section:layouts_category.
		'canuckcp_category_layout'                         => array(
			'name'        => 'canuckcp_category_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck-cp' ),
			'option_type' => 'radio_image',
			'choices'     => canuckcp_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck-cp' ),
			'section'     => 'layouts_category',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_layout',
		),
		// Panel:canuckcp_layouts Section:layouts_date.
		'canuckcp_date_layout'                             => array(
			'name'        => 'canuckcp_date_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck-cp' ),
			'option_type' => 'radio_image',
			'choices'     => canuckcp_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck-cp' ),
			'section'     => 'layouts_date',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_layout',
		),
		// Panel:canuckcp_layouts Section:layouts_search.
		'canuckcp_search_layout'                           => array(
			'name'        => 'canuckcp_search_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck-cp' ),
			'option_type' => 'radio_image',
			'choices'     => canuckcp_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck-cp' ),
			'section'     => 'layouts_search',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_layout',
		),
		// Panel:canuckcp_layouts Section:layouts_single.
		'canuckcp_single_post_layout'                      => array(
			'name'        => 'canuckcp_single_post_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck-cp' ),
			'option_type' => 'radio_image',
			'choices'     => canuckcp_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck-cp' ),
			'section'     => 'layouts_single',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_layout',
		),
		'canuckcp_single_title'                            => array(
			'name'        => 'canuckcp_single_title',
			'title'       => esc_html__( 'Disable Title', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to remove the title', 'canuck-cp' ),
			'section'     => 'layouts_single',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_single_sidebar_a'                        => array(
			'name'        => 'canuckcp_single_sidebar_a',
			'title'       => esc_html__( 'Sidebar A', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_sidebar_choices(),
			'description' => esc_html__( 'select the widget panel you want to use', 'canuck-cp' ),
			'section'     => 'layouts_single',
			'priority'    => 3,
			'default'     => 'blog-a',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_select',
		),
		'canuckcp_single_sidebar_b'                        => array(
			'name'        => 'canuckcp_single_sidebar_b',
			'title'       => esc_html__( 'Sidebar B', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_sidebar_choices(),
			'description' => esc_html__( 'select the widget panel you want to use', 'canuck-cp' ),
			'section'     => 'layouts_single',
			'priority'    => 4,
			'default'     => 'blog-b',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_select',
		),
		// Panel:canuckcp_layouts Section:layouts_tag.
		'canuckcp_tag_layout'                              => array(
			'name'        => 'canuckcp_tag_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck-cp' ),
			'option_type' => 'radio_image',
			'choices'     => canuckcp_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck-cp' ),
			'section'     => 'layouts_tag',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_layout',
		),
		// Panel:canuckcp_layouts Section:layouts_error.
		'canuckcp_404_layout'                              => array(
			'name'        => 'canuckcp_404_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck-cp' ),
			'option_type' => 'radio_image',
			'choices'     => canuckcp_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck-cp' ),
			'section'     => 'layouts_404',
			'priority'    => 1,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_layout',
		),
		// Panel:canuckcp_header Section: image_header.
		'canuckcp_image_header_background_color'           => array(
			'name'        => 'canuckcp_image_header_background_color',
			'title'       => esc_html__( 'Header Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Used for the header overlay when a background image is used in the blog or home page.', 'canuck-cp' ),
			'section'     => 'image_header',
			'priority'    => 1,
			'default'     => '#000000',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_image_header_background_opacity'         => array(
			'name'        => 'canuckcp_image_header_background_opacity',
			'title'       => esc_html__( 'Header Background Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the menu area background image.', 'canuck-cp' ),
			'section'     => 'image_header',
			'priority'    => 2,
			'default'     => 0.5,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_image_header_logo'                       => array(
			'name'        => 'canuckcp_image_header_logo',
			'title'       => esc_html__( 'Logo to overlay image backgrounds', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'This logo will be used to overlay image backgrounds, if used on the home page and/or blog page. ', 'canuck-cp' ) .
							esc_html__( 'If blank the logo set up in the "Site Identity" panel will be used. ', 'canuck-cp' ) .
							esc_html__( 'Keep the logo less than 230px wide and 100px high.', 'canuck-cp' ),
			'section'     => 'image_header',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		// Panel:canuckcp_header Section: image_header.
		'canuckcp_contact_hours'                           => array(
			'name'        => 'canuckcp_contact_hours',
			'title'       => esc_html__( 'Hours of Operation', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'No HTML allowed, suggest : M-F, 9-5', 'canuck-cp' ),
			'section'     => 'contact_strip',
			'priority'    => 1,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_contact_phone'                           => array(
			'name'        => 'canuckcp_contact_phone',
			'title'       => esc_html__( 'Phone Number', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'No HTML allowed, Suggest : 1-800-123-4567', 'canuck-cp' ),
			'section'     => 'contact_strip',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_contact_page'                            => array(
			'name'        => 'canuckcp_contact_page',
			'title'       => esc_html__( 'Contact Page Link', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Create a contact page and provide the link here.', 'canuck-cp' ),
			'section'     => 'contact_strip',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		// Panel:canuckcp_footer Section:footer_footer.
		'canuckcp_show_footer_top_strip'                   => array(
			'name'        => 'canuckcp_show_footer_top_strip',
			'title'       => esc_html__( 'Show Contact/Social strip in footer', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'This strip will be placed at the top of the footer.', 'canuck-cp' ),
			'section'     => 'footer_footer',
			'priority'    => 1,
			'default'     => true,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_show_footer'                             => array(
			'name'        => 'canuckcp_show_footer',
			'title'       => esc_html__( 'Show footer area', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'The footer area with 3 or 4 widgetized columns will be shown.', 'canuck-cp' ),
			'section'     => 'footer_footer',
			'priority'    => 2,
			'default'     => true,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_footer_background_image'                 => array(
			'name'        => 'canuckcp_footer_background_image',
			'title'       => esc_html__( 'Footer Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image', 'canuck-cp' ),
			'section'     => 'footer_footer',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_footer_overlay_opacity'                  => array(
			'name'        => 'canuckcp_footer_overlay_opacity',
			'title'       => esc_html__( 'Footer-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'footer_footer',
			'priority'    => 4,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_footer_cols'                             => array(
			'name'        => 'canuckcp_footer_cols',
			'title'       => esc_html__( 'Select footer columns', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'3' => '3',
				'4' => '4',
			),
			'description' => esc_html__( 'you can have 3 or 4 footer columns', 'canuck-cp' ),
			'section'     => 'footer_footer',
			'priority'    => 5,
			'default'     => '3',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_select',
		),
		'canuckcp_footer_background_color'                 => array(
			'name'        => 'canuckcp_footer_background_color',
			'title'       => esc_html__( 'Footer Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'footer_footer',
			'priority'    => 6,
			'default'     => '#161616',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_footer_text_color'                       => array(
			'name'        => 'canuckcp_footer_text_color',
			'title'       => esc_html__( 'Footer Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color.', 'canuck-cp' ),
			'section'     => 'footer_footer',
			'priority'    => 7,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_footer_link_color'                       => array(
			'name'        => 'canuckcp_footer_link_color',
			'title'       => esc_html__( 'Footer Link Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a link text color.', 'canuck-cp' ),
			'section'     => 'footer_footer',
			'priority'    => 8,
			'default'     => '#c9c9c9',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_footer_link_hover_color'                 => array(
			'name'        => 'canuckcp_footer_link_hover_color',
			'title'       => esc_html__( 'Footer Link Hover Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a link hover color.', 'canuck-cp' ),
			'section'     => 'footer_footer',
			'priority'    => 9,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Panel:canuckcp_footer Section:footer_copyright.
		'canuckcp_show_copyright_strip'                    => array(
			'name'        => 'canuckcp_show_copyright_strip',
			'title'       => esc_html__( 'Show Copyright Strip', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'you can choose to not show a copyright strip', 'canuck-cp' ),
			'section'     => 'footer_copyright',
			'priority'    => 1,
			'default'     => true,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_left_copyright_text'                     => array(
			'name'        => 'canuckcp_left_copyright_text',
			'title'       => esc_html__( 'Copyright left text', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Some HTML allowed, suggest :', 'canuck-cp' ) . ' &#38;copy; ' . esc_html__( 'copyright YEAR', 'canuck-cp' ) . "&#60;a href='#'&#62;www.yoursite.url&#60;/a&#62;",
			'section'     => 'footer_copyright',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_middle_copyright_text'                   => array(
			'name'        => 'canuckcp_middle_copyright_text',
			'title'       => esc_html__( 'Copyright middle text', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Some HTML allowed, suggest : site by', 'canuck-cp' ) . " &#38;nbsp; &#60;a href='#'&#62;www.developer.url&#60;/a&#62;",
			'section'     => 'footer_copyright',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_right_copyright_text'                    => array(
			'name'        => 'canuckcp_right_copyright_text',
			'title'       => esc_html__( 'Copyright right text', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Some HTML allowed,', 'canuck-cp' ),
			'section'     => 'footer_copyright',
			'priority'    => 4,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Panel:canuckcp_styles Section:styles_general.
		'canuckcp_color_scheme'                            => array(
			'name'        => 'canuckcp_color_scheme',
			'title'       => esc_html__( 'Color Scheme', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'gray-pink'  => esc_html__( 'Pink and Blue accents', 'canuck-cp' ),
				'gray-green' => esc_html__( 'Green and Blue accents', 'canuck-cp' ),
				'gray-red'   => esc_html__( 'Red and Green accents', 'canuck-cp' ),
				'gray-blue'  => esc_html__( 'Blue and Violet accents', 'canuck-cp' ),
			),
			'description' => esc_html__( 'Select a color scheme for your site', 'canuck-cp' ),
			'section'     => 'styles_general',
			'priority'    => 1,
			'default'     => 'gray-pink',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_select',
		),
		'canuckcp_use_custom_accent_colors'                => array(
			'name'        => 'canuckcp_use_custom_accent_colors',
			'title'       => esc_html__( 'Use Custom Accent Colors', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'The custom accent colors you select below will be used.', 'canuck-cp' ),
			'section'     => 'styles_general',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_custom_primary_accent_color'             => array(
			'name'        => 'canuckcp_custom_primary_accent_color',
			'title'       => esc_html__( 'Custom Primary Accent Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Select a color for', 'canuck-cp' ),
			'section'     => 'styles_general',
			'priority'    => 3,
			'default'     => '#ed1651',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_custom_secondary_accent_color'           => array(
			'name'        => 'canuckcp_custom_secondary_accent_color',
			'title'       => esc_html__( 'Custom Primary Accent Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Select a color for', 'canuck-cp' ),
			'section'     => 'styles_general',
			'priority'    => 4,
			'default'     => '#16aee5',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_header_font'                             => array(
			'name'        => 'canuckcp_header_font',
			'title'       => esc_html__( 'Font for Headers', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_font_choices(),
			'description' => esc_html__( 'Select a font for headers', 'canuck-cp' ),
			'section'     => 'styles_general',
			'priority'    => 5,
			'default'     => 'Open Sans',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_font_select',
		),
		'canuckcp_body_font'                               => array(
			'name'        => 'canuckcp_body_font',
			'title'       => esc_html__( 'Font for Body Text', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_font_choices(),
			'description' => esc_html__( 'Select a font for main text', 'canuck-cp' ),
			'section'     => 'styles_general',
			'priority'    => 6,
			'default'     => 'Open Sans',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_font_select',
		),
		'canuckcp_page_title_font'                         => array(
			'name'        => 'canuckcp_page_title_font',
			'title'       => esc_html__( 'Font for Page Titles', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_font_choices(),
			'description' => esc_html__( 'Select a font for page titles', 'canuck-cp' ),
			'section'     => 'styles_general',
			'priority'    => 7,
			'default'     => 'Open Sans',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_font_select',
		),
		'canuckcp_display_font_options'                    => array(
			'name'        => 'canuckcp_display_font_options',
			'title'       => esc_html__( 'Font Display Loading Options', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'auto'     => esc_html__( 'auto-use browser default loading strategy', 'canuck-cp' ),
				'block'    => esc_html__( 'block-gives the font face a short block period', 'canuck-cp' ),
				'swap'     => esc_html__( 'swap-use a fallback until font is available', 'canuck-cp' ),
				'fallback' => esc_html__( 'fallback-use fallback if font download is slow', 'canuck-cp' ),
				'optional' => esc_html__( 'optional-let the browser decide', 'canuck-cp' ),
			),
			'description' => esc_html__( 'Font loading optimization, may use fallback font.', 'canuck-cp' ),
			'section'     => 'styles_general',
			'priority'    => 8,
			'default'     => 'auto',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_font_display',
		),
		// Panel:canuckcp_blog Section:blog_general.
		'canuckcp_blog_title'                              => array(
			'name'        => 'canuckcp_blog_title',
			'title'       => esc_html__( 'Blog Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'If you choose to display a title this one is used', 'canuck-cp' ),
			'section'     => 'blog_general',
			'priority'    => 1,
			'default'     => 'Blog',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_blog_title_option'                       => array(
			'name'        => 'canuckcp_blog_title_option',
			'title'       => esc_html__( 'Disable Title', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to remove the title', 'canuck-cp' ),
			'section'     => 'blog_general',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_blog_layout'                             => array(
			'name'        => 'canuckcp_blog_layout',
			'title'       => esc_html__( 'Layout Option', 'canuck-cp' ),
			'option_type' => 'radio_image',
			'choices'     => canuckcp_page_layout_choices(),
			'description' => esc_html__( 'Select a layout from the list', 'canuck-cp' ),
			'section'     => 'blog_general',
			'priority'    => 3,
			'default'     => 'right_sidebar',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_layout',
		),
		'canuckcp_blog_style'                              => array(
			'name'        => 'canuckcp_blog_style',
			'title'       => esc_html__( 'Blog Style', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'top_feature'       => esc_html__( 'Top Feature - all layouts except fullwidth', 'canuck-cp' ),
				'side_feature'      => esc_html__( 'Side Feature - all layouts except two sidebars', 'canuck-cp' ),
				'two_column_grid'   => esc_html__( 'Two Column Grid - all layouts except two sidebars', 'canuck-cp' ),
				'three_column_grid' => esc_html__( 'Three Column Grid - only full width layouts', 'canuck-cp' ),
				'two_stamp'         => esc_html__( 'Two Stamp Grid - all layouts except two sidebars', 'canuck-cp' ),
				'three_stamp'       => esc_html__( 'Three Stamp Grid - only full width layouts', 'canuck-cp' ),
			),
			'description' => esc_html__( 'Select a blog style from the dropdown list.', 'canuck-cp' ),
			'section'     => 'blog_general',
			'priority'    => 4,
			'default'     => 'top_feature',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_blog_style',
		),
		'canuckcp_blog_feature'                            => array(
			'name'        => 'canuckcp_blog_feature',
			'title'       => esc_html__( 'Blog Feature Options', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'background_image' => esc_html__( 'Header Image', 'canuck-cp' ),
				'button_nav'       => esc_html__( 'Slider 3:1 aspect ratio', 'canuck-cp' ),
				'fullsize'         => esc_html__( 'Slider fullsize', 'canuck-cp' ),
				'thumbnail'        => esc_html__( 'Slider Thumbnail Nav', 'canuck-cp' ),
				'widgetized'       => esc_html__( 'Widget (allows video)', 'canuck-cp' ),
				'no_feature'       => esc_html__( 'No feature', 'canuck-cp' ),
			),
			'description' => esc_html__( 'If you are using the Header Image option, set up the header image in the customizer "Header Image" tab. Keep the aspect ratio between 1.5:1 and 3:1, and use an image width of 1600px. Also note if you select "Slider fullsize" the original images you uploaded will be used. Make sure they are EXACTLY the same size and optimized for the web.', 'canuck-cp' ),
			'section'     => 'blog_general',
			'priority'    => 5,
			'default'     => 'background_image',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_feature',
		),
		'canuckcp_blog_feature_category'                   => array(
			'name'        => 'canuckcp_blog_feature_category',
			'title'       => esc_html__( 'Feature Slider Category', 'canuck-cp' ),
			'option_type' => 'scat',
			'description' => esc_html__( 'If using the Slider option, set up posts with a feature image.', 'canuck-cp' ) . ' ' .
							esc_html__( 'Select the special category you use for those posts in the dropdown.', 'canuck-cp' ),
			'section'     => 'blog_general',
			'priority'    => 6,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_use_post_gallery_captions'               => array(
			'name'        => 'canuckcp_use_post_gallery_captions',
			'title'       => esc_html__( 'Use Post Gallery Captions', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Captions from the image meta will be used if checked. This will not work on block galleries.', 'canuck-cp' ),
			'section'     => 'blog_general',
			'priority'    => 7,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuckcp_blog Section:blog_posts.
		'canuckcp_use_excerpts'                            => array(
			'name'        => 'canuckcp_use_excerpts',
			'title'       => esc_html__( 'Use excerpts', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'The Top Feature and Side Feature blog layout options offer this feature.', 'canuck-cp' ) . ' ' .
							esc_html__( 'Other layout options use excerpts.', 'canuck-cp' ),
			'section'     => 'blog_posts',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_excerpt_length'                          => array(
			'name'        => 'canuckcp_excerpt_length',
			'title'       => esc_html__( 'Excerpt Length', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Enter the excerpt length in words.', 'canuck-cp' ),
			'section'     => 'blog_posts',
			'priority'    => 2,
			'default'     => '30',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_exclude_author'                          => array(
			'name'        => 'canuckcp_exclude_author',
			'title'       => esc_html__( 'Exclude author name in blog posts', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check and the author will not show', 'canuck-cp' ),
			'section'     => 'blog_posts',
			'priority'    => 3,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_exclude_timestamp'                       => array(
			'name'        => 'canuckcp_exclude_timestamp',
			'title'       => esc_html__( 'Exclude date in blog posts', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check and the timestamp will not show', 'canuck-cp' ),
			'section'     => 'blog_posts',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_exclude_category'                        => array(
			'name'        => 'canuckcp_exclude_category',
			'title'       => esc_html__( 'Exclude categories in blog posts', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check and the category will not show', 'canuck-cp' ),
			'section'     => 'blog_posts',
			'priority'    => 5,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_exclude_tags'                            => array(
			'name'        => 'canuckcp_exclude_tags',
			'title'       => esc_html__( 'Exclude tags in blog posts', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check and the tags will not show', 'canuck-cp' ),
			'section'     => 'blog_posts',
			'priority'    => 7,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_exclude_no_comments_link'                => array(
			'name'        => 'canuckcp_exclude_no_comments_link',
			'title'       => esc_html__( 'Exclude No Comments link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Comments link will not be shown if there are no comments.', 'canuck-cp' ),
			'section'     => 'blog_posts',
			'priority'    => 8,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		// Panel:canuckcp_home Section:Home Template.
		'canuckcp_home_feature'                            => array(
			'name'        => 'canuckcp_home_feature',
			'title'       => esc_html__( 'Home Page Feature', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'background_image' => esc_html__( 'Header Image', 'canuck-cp' ),
				'button_nav'       => esc_html__( 'Slider 3:1 aspect ratio', 'canuck-cp' ),
				'fullsize'         => esc_html__( 'Slider fullsize', 'canuck-cp' ),
				'thumbnail'        => esc_html__( 'Slider Thumbnail Nav', 'canuck-cp' ),
				'widgetized'       => esc_html__( 'Widget(allows video)', 'canuck-cp' ),
				'no_feature'       => esc_html__( 'No feature', 'canuck-cp' ),
			),
			'description' => esc_html__( 'If you are using the Header Image option, set up the header image in the customizer "Header Image" tab.', 'canuck-cp' ) . ' ' .
							esc_html__( 'If you select full size the original images you uploaded will be used. Make sure they are EXACTLY the same size and optimized for the web.', 'canuck-cp' ),
			'section'     => 'home_one',
			'priority'    => 1,
			'default'     => 'background_image',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_feature',
		),
		'canuckcp_home_feature_category'                   => array(
			'name'        => 'canuckcp_home_feature_category',
			'title'       => esc_html__( 'Home Slider Feature Category', 'canuck-cp' ),
			'option_type' => 'scat',
			'description' => esc_html__( 'If using the Slider option, set up posts with a feature image.', 'canuck-cp' ) . ' ' .
							esc_html__( 'Select the special category you use for those posts in the dropdown.', 'canuck-cp' ),
			'section'     => 'home_one',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_home_title'                              => array(
			'name'        => 'canuckcp_home_title',
			'title'       => esc_html__( 'Home Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Used when Home Page Feature is set to background image.', 'canuck-cp' ) . ' ' .
							esc_html__( 'Uses Blog Title if blank.', 'canuck-cp' ),
			'section'     => 'home_one',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_home_description'                        => array(
			'name'        => 'canuckcp_home_description',
			'title'       => esc_html__( 'Home Description', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Used when Home Page Feature is set to background image.', 'canuck-cp' ) . ' ' .
							esc_html__( 'Uses Blog Description if blank.', 'canuck-cp' ),
			'section'     => 'home_one',
			'priority'    => 4,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		// Panel:canuckcp_home Section:home_layout.
		'canuckcp_home_area_1'                             => array(
			'name'        => 'canuckcp_home_area_1',
			'title'       => esc_html__( 'Home Page Area 1', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 1', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 1,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_2'                             => array(
			'name'        => 'canuckcp_home_area_2',
			'title'       => esc_html__( 'Home Page Area 2', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 2', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 2,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_3'                             => array(
			'name'        => 'canuckcp_home_area_3',
			'title'       => esc_html__( 'Home Page Area 3', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 3', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 3,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_4'                             => array(
			'name'        => 'canuckcp_home_area_4',
			'title'       => esc_html__( 'Home Page Area 4', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 4', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 4,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_5'                             => array(
			'name'        => 'canuckcp_home_area_5',
			'title'       => esc_html__( 'Home Page Area 5', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 5', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 5,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_6'                             => array(
			'name'        => 'canuckcp_home_area_6',
			'title'       => esc_html__( 'Home Page Area 6', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 6', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 6,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_7'                             => array(
			'name'        => 'canuckcp_home_area_7',
			'title'       => esc_html__( 'Home Page Area 7', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 7', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 7,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_8'                             => array(
			'name'        => 'canuckcp_home_area_8',
			'title'       => esc_html__( 'Home Page Area 8', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 8', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 8,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_9'                             => array(
			'name'        => 'canuckcp_home_area_9',
			'title'       => esc_html__( 'Home Page Area 9', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 8', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 9,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_10'                            => array(
			'name'        => 'canuckcp_home_area_10',
			'title'       => esc_html__( 'Home Page Area 10', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 10', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 10,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_11'                            => array(
			'name'        => 'canuckcp_home_area_11',
			'title'       => esc_html__( 'Home Page Area 11', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 11', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 11,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_12'                            => array(
			'name'        => 'canuckcp_home_area_12',
			'title'       => esc_html__( 'Home Page Area 12', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 12', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 12,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_13'                            => array(
			'name'        => 'canuckcp_home_area_13',
			'title'       => esc_html__( 'Home Page Area 13', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 13', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 13,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_14'                            => array(
			'name'        => 'canuckcp_home_area_14',
			'title'       => esc_html__( 'Home Page Area 14', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 14', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 14,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		'canuckcp_home_area_15'                            => array(
			'name'        => 'canuckcp_home_area_15',
			'title'       => esc_html__( 'Home Page Area 15', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_home_area_choices(),
			'description' => esc_html__( 'Set the section for Area 15', 'canuck-cp' ),
			'section'     => 'home_layout',
			'priority'    => 15,
			'default'     => 'none',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_homearea_select',
		),
		// Panel:canuckcp_home Section:home_section_1 ********************************************.
		'canuckcp_section1_usage'                          => array(
			'name'        => 'canuckcp_section1_usage',
			'title'       => esc_html__( 'Section 1-Usage Options', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'normal'     => 'normal',
				'shortcode'  => 'shortcode',
				'widgetized' => 'widgetized',
			),
			'description' => esc_html__( 'Normal - widget and shortcode input box are not used.', 'canuck-cp' ) . '<br/>' .
							esc_html__( 'Widgetized - Drag your widget over to "Home Page Section 1" under "Appearance->Widgets".', 'canuck-cp' ) . ' ' .
							esc_html__( 'Shortcode - Enter the shortcode you want to use in the shortcode text area box.', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 1,
			'default'     => 'normal',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_useage',
		),
		'canuckcp_section1_background_option_toggle'       => array(
			'name'        => 'canuckcp_section1_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section1_background_image'               => array(
			'name'        => 'canuckcp_section1_background_image',
			'title'       => esc_html__( 'Section 1-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section1_overlay_opacity'                => array(
			'name'        => 'canuckcp_section1_overlay_opacity',
			'title'       => esc_html__( 'Section 1-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 4,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section1_use_parallax'                   => array(
			'name'        => 'canuckcp_section1_use_parallax',
			'title'       => esc_html__( 'Section 1-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 5,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section1_background_color'               => array(
			'name'        => 'canuckcp_section1_background_color',
			'title'       => esc_html__( 'Section 1-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 6,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section1_background_color_opacity'       => array(
			'name'        => 'canuckcp_section1_background_color_opacity',
			'title'       => esc_html__( 'Section 1-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 7,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section1_text_color'                     => array(
			'name'        => 'canuckcp_section1_text_color',
			'title'       => esc_html__( 'Section 1-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 8,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section1_text'                           => array(
			'name'        => 'canuckcp_section1_text',
			'title'       => esc_html__( 'Section 1-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section1_shortcode'                      => array(
			'name'        => 'canuckcp_section1_shortcode',
			'title'       => esc_html__( 'Section 1-Shortcode', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'Add your shortcode here if using shortcode as a Useage Option.', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_include_section1_button'                 => array(
			'name'        => 'canuckcp_include_section1_button',
			'title'       => esc_html__( 'Section 1-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link, then use the options below.', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 11,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section1_button_icon'                    => array(
			'name'        => 'canuckcp_section1_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 12,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section1_button_name'                    => array(
			'name'        => 'canuckcp_section1_button_name',
			'title'       => esc_html__( 'Section 1-Button Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 13,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section1_button_link'                    => array(
			'name'        => 'canuckcp_section1_button_link',
			'title'       => esc_html__( 'Section 1-Button URI', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/contact/', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 14,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section1_button_background_color'        => array(
			'name'        => 'canuckcp_section1_button_background_color',
			'title'       => esc_html__( 'Section 1-Button Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 15,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section1_button_text_color'              => array(
			'name'        => 'canuckcp_section1_button_text_color',
			'title'       => esc_html__( 'Section 1-Button Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a color for button text.', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 16,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section1_button_hover_background_color'  => array(
			'name'        => 'canuckcp_section1_button_hover_background_color',
			'title'       => esc_html__( 'Section 1-Button Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 17,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section1_button_hover_text_color'        => array(
			'name'        => 'canuckcp_section1_button_hover_text_color',
			'title'       => esc_html__( 'Section 1-Button Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_1',
			'priority'    => 18,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Panel:canuckcp_home Section:home_section_2 ====================================================.
		// General options for Section 2.
		'canuckcp_section2_text_color'                     => array(
			'name'        => 'canuckcp_section2_text_color',
			'title'       => esc_html__( 'Section 2-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 1,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section2_background_option_toggle'       => array(
			'name'        => 'canuckcp_section2_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section2_background_image'               => array(
			'name'        => 'canuckcp_section2_background_image',
			'title'       => esc_html__( 'Section 2-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section2_overlay_opacity'                => array(
			'name'        => 'canuckcp_section2_overlay_opacity',
			'title'       => esc_html__( 'Section 2-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 4,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section2_use_parallax'                   => array(
			'name'        => 'canuckcp_section2_use_parallax',
			'title'       => esc_html__( 'Section 2-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 5,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section2_background_color'               => array(
			'name'        => 'canuckcp_section2_background_color',
			'title'       => esc_html__( 'Section 2-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 6,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section2_background_color_opacity'       => array(
			'name'        => 'canuckcp_section2_background_color_opacity',
			'title'       => esc_html__( 'Section 2-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 7,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section2_button_colors_toggle'           => array(
			'name'        => 'canuckcp_section2_button_colors_toggle',
			'title'       => esc_html__( 'Show/Hide Button Colors', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to change link button colors.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 8,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section2_button_background_color'        => array(
			'name'        => 'canuckcp_section2_button_background_color',
			'title'       => esc_html__( 'Section 2-Button Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 9,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section2_button_text_color'              => array(
			'name'        => 'canuckcp_section2_button_text_color',
			'title'       => esc_html__( 'Section 2-Button Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 10,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section2_button_hover_background_color'  => array(
			'name'        => 'canuckcp_section2_button_hover_background_color',
			'title'       => esc_html__( 'Section 2-Button or Image Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it. If using an image link this is the dropdown hover color, opacity of 0.7.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 11,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section2_button_hover_text_color'        => array(
			'name'        => 'canuckcp_section2_button_hover_text_color',
			'title'       => esc_html__( 'Section 2-Button Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button or image text changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 12,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Service box 1.
		'canuckcp_section2_box1_toggle'                    => array(
			'name'        => 'canuckcp_section2_box1_toggle',
			'title'       => esc_html__( 'Show/Hide Box 1 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 1 options.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 13,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section2_box1_use_font_icon'             => array(
			'name'        => 'canuckcp_section2_box1_use_font_icon',
			'title'       => esc_html__( 'Section 2-Box 1-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 14,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section2_box1_image_font'                => array(
			'name'        => 'canuckcp_section2_box1_image_font',
			'title'       => esc_html__( 'Section 2-Box 1-Font Icon Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 15,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section2_box1_icon_color'                => array(
			'name'        => 'canuckcp_section2_box1_icon_color',
			'title'       => esc_html__( 'Section 2-Box 1 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 16,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section2_box1_image'                     => array(
			'name'        => 'canuckcp_section2_box1_image',
			'title'       => esc_html__( 'Section 2-Box 1-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 17,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section2_box1_title'                     => array(
			'name'        => 'canuckcp_section2_box1_title',
			'title'       => esc_html__( 'Section 2-Box 1-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 18,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section2_box1_text'                      => array(
			'name'        => 'canuckcp_section2_box1_text',
			'title'       => esc_html__( 'Section 2-Box 1-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 19,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section2_box1_include_link'              => array(
			'name'        => 'canuckcp_section2_box1_include_link',
			'title'       => esc_html__( 'Section 2-Box 1-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 20,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section2_box1_button_link'               => array(
			'name'        => 'canuckcp_section2_box1_button_link',
			'title'       => esc_html__( 'Section 2-Box 1-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 21,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section2_box1_button_icon'               => array(
			'name'        => 'canuckcp_section2_box1_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 22,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section2_box1_button_title'              => array(
			'name'        => 'canuckcp_section2_box1_button_title',
			'title'       => esc_html__( 'Section 2-Box 1-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : ...more', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 23,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service box 2.
		'canuckcp_section2_box2_toggle'                    => array(
			'name'        => 'canuckcp_section2_box2_toggle',
			'title'       => esc_html__( 'Show/Hide Box 2 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 2 options.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 24,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section2_box2_use_font_icon'             => array(
			'name'        => 'canuckcp_section2_box2_use_font_icon',
			'title'       => esc_html__( 'Section 2-Box 2-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 25,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section2_box2_image_font'                => array(
			'name'        => 'canuckcp_section2_box2_image_font',
			'title'       => esc_html__( 'Section 2-Box 2-Font Icon Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 26,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section2_box2_icon_color'                => array(
			'name'        => 'canuckcp_section2_box2_icon_color',
			'title'       => esc_html__( 'Section 2-Box 2 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 27,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section2_box2_image'                     => array(
			'name'        => 'canuckcp_section2_box2_image',
			'title'       => esc_html__( 'Section 2-Box 2-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 28,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section2_box2_title'                     => array(
			'name'        => 'canuckcp_section2_box2_title',
			'title'       => esc_html__( 'Section 2-Box 2-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 29,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section2_box2_text'                      => array(
			'name'        => 'canuckcp_section2_box2_text',
			'title'       => esc_html__( 'Section 2-Box 2-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 30,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section2_box2_include_link'              => array(
			'name'        => 'canuckcp_section2_box2_include_link',
			'title'       => esc_html__( 'Section 2-Box 2-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 31,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section2_box2_button_link'               => array(
			'name'        => 'canuckcp_section2_box2_button_link',
			'title'       => esc_html__( 'Section 2-Box 2-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 32,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section2_box2_button_icon'               => array(
			'name'        => 'canuckcp_section2_box2_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 33,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section2_box2_button_title'              => array(
			'name'        => 'canuckcp_section2_box2_button_title',
			'title'       => esc_html__( 'Section 2-Box 2-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : ...more', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 34,
			'default'     => esc_html__( '...more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service box 3.
		'canuckcp_section2_box3_toggle'                    => array(
			'name'        => 'canuckcp_section2_box3_toggle',
			'title'       => esc_html__( 'Show/Hide Box 3 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 3 options.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 35,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section2_box3_use_font_icon'             => array(
			'name'        => 'canuckcp_section2_box3_use_font_icon',
			'title'       => esc_html__( 'Section 2-Box 3-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 36,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section2_box3_image_font'                => array(
			'name'        => 'canuckcp_section2_box3_image_font',
			'title'       => esc_html__( 'Section 2-Box 3-Font Icon Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 37,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section2_box3_icon_color'                => array(
			'name'        => 'canuckcp_section2_box3_icon_color',
			'title'       => esc_html__( 'Section 2-Box 3 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 38,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section2_box3_image'                     => array(
			'name'        => 'canuckcp_section2_box3_image',
			'title'       => esc_html__( 'Section 2-Box 3-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 39,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section2_box3_title'                     => array(
			'name'        => 'canuckcp_section2_box3_title',
			'title'       => esc_html__( 'Section 2-Box 3-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 40,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section2_box3_text'                      => array(
			'name'        => 'canuckcp_section2_box3_text',
			'title'       => esc_html__( 'Section 2-Box 3-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 41,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section2_box3_include_link'              => array(
			'name'        => 'canuckcp_section2_box3_include_link',
			'title'       => esc_html__( 'Section 2-Box 3-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 42,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section2_box3_button_link'               => array(
			'name'        => 'canuckcp_section2_box3_button_link',
			'title'       => esc_html__( 'Section 2-Box 3-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 43,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section2_box3_button_icon'               => array(
			'name'        => 'canuckcp_section2_box3_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 44,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section2_box3_button_title'              => array(
			'name'        => 'canuckcp_section2_box3_button_title',
			'title'       => esc_html__( 'Section 2-Box 3-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : ...more', 'canuck-cp' ),
			'section'     => 'home_section_2',
			'priority'    => 45,
			'default'     => esc_html__( '...more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Panel:canuckcp_home Section:home_section_3 ********************************************.
		'canuckcp_section3_usage'                          => array(
			'name'        => 'canuckcp_section3_usage',
			'title'       => esc_html__( 'Section 3-Usage Options', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'normal'     => 'normal',
				'shortcode'  => 'shortcode',
				'widgetized' => 'widgetized',
			),
			'description' => esc_html__( 'Normal - widget and shortcode input box are not used.', 'canuck-cp' ) . '<br/>' .
							esc_html__( 'Widgetized - Drag your widget over to "Home Page Section 3" under "Appearance->Widgets".', 'canuck-cp' ) . ' ' .
							esc_html__( 'Shortcode - Enter the shortcode you want to use in the shortcode text area box.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 1,
			'default'     => 'normal',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_useage',
		),
		'canuckcp_section3_background_option_toggle'       => array(
			'name'        => 'canuckcp_section3_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section3_background_image'               => array(
			'name'        => 'canuckcp_section3_background_image',
			'title'       => esc_html__( 'Section 3-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section3_overlay_opacity'                => array(
			'name'        => 'canuckcp_section3_overlay_opacity',
			'title'       => esc_html__( 'Section 3-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 4,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section3_use_parallax'                   => array(
			'name'        => 'canuckcp_section3_use_parallax',
			'title'       => esc_html__( 'Section 3-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 5,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section3_background_color'               => array(
			'name'        => 'canuckcp_section3_background_color',
			'title'       => esc_html__( 'Section 3-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 6,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section3_background_color_opacity'       => array(
			'name'        => 'canuckcp_section3_background_color_opacity',
			'title'       => esc_html__( 'Section 3-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 7,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section3_text_color'                     => array(
			'name'        => 'canuckcp_section3_text_color',
			'title'       => esc_html__( 'Section 3-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 8,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section3_text'                           => array(
			'name'        => 'canuckcp_section3_text',
			'title'       => esc_html__( 'Section 3-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section3_shortcode'                      => array(
			'name'        => 'canuckcp_section3_shortcode',
			'title'       => esc_html__( 'Section 3-Shortcode', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'Add your shortcode here if using shortcode as a Useage Option.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_include_section3_button'                 => array(
			'name'        => 'canuckcp_include_section3_button',
			'title'       => esc_html__( 'Section 3-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link, then use the options below.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 11,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section3_button_icon'                    => array(
			'name'        => 'canuckcp_section3_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 12,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section3_button_name'                    => array(
			'name'        => 'canuckcp_section3_button_name',
			'title'       => esc_html__( 'Section 3-Button Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, note use single quotes for classes.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 13,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section3_button_link'                    => array(
			'name'        => 'canuckcp_section3_button_link',
			'title'       => esc_html__( 'Section 3-Button URI', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/contact/', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 14,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section3_button_background_color'        => array(
			'name'        => 'canuckcp_section3_button_background_color',
			'title'       => esc_html__( 'Section 3-Button Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 15,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section3_button_text_color'              => array(
			'name'        => 'canuckcp_section3_button_text_color',
			'title'       => esc_html__( 'Section 3-Button Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a color for button text.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 16,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section3_button_hover_background_color'  => array(
			'name'        => 'canuckcp_section3_button_hover_background_color',
			'title'       => esc_html__( 'Section 3-Button Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 17,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section3_button_hover_text_color'        => array(
			'name'        => 'canuckcp_section3_button_hover_text_color',
			'title'       => esc_html__( 'Section 3-Button Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_3',
			'priority'    => 18,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Panel:canuckcp_home Section:home_section_4 ===============================================.
		'canuckcp_section4_background_option_toggle'       => array(
			'name'        => 'canuckcp_section4_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section4_background_image'               => array(
			'name'        => 'canuckcp_section4_background_image',
			'title'       => esc_html__( 'Section 4-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section4_overlay_opacity'                => array(
			'name'        => 'canuckcp_section4_overlay_opacity',
			'title'       => esc_html__( 'Section 4-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 3,
			'default'     => 3,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section4_use_parallax'                   => array(
			'name'        => 'canuckcp_section4_use_parallax',
			'title'       => esc_html__( 'Section 4-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section4_background_color'               => array(
			'name'        => 'canuckcp_section4_background_color',
			'title'       => esc_html__( 'Section 4-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section4_background_color_opacity'       => array(
			'name'        => 'canuckcp_section4_background_color_opacity',
			'title'       => esc_html__( 'Section 4-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section4_text_color'                     => array(
			'name'        => 'canuckcp_section4_text_color',
			'title'       => esc_html__( 'Section 4-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section4_button_colors_toggle'           => array(
			'name'        => 'canuckcp_section4_button_colors_toggle',
			'title'       => esc_html__( 'Show/Hide Button Colors', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit link button colors.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 8,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section4_button_background_color'        => array(
			'name'        => 'canuckcp_section4_button_background_color',
			'title'       => esc_html__( 'Section 4-Button Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 9,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section4_button_text_color'              => array(
			'name'        => 'canuckcp_section4_button_text_color',
			'title'       => esc_html__( 'Section 4-Button Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 10,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section4_button_hover_background_color'  => array(
			'name'        => 'canuckcp_section4_button_hover_background_color',
			'title'       => esc_html__( 'Section 4-Button or Image Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it. If using an image link this is the dropdown hover color, opacity of 0.7.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 11,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section4_button_hover_text_color'        => array(
			'name'        => 'canuckcp_section4_button_hover_text_color',
			'title'       => esc_html__( 'Section 4-Button or Image Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button or image text changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 12,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Service Box 1.
		'canuckcp_section4_box1_toggle'                    => array(
			'name'        => 'canuckcp_section4_box1_toggle',
			'title'       => esc_html__( 'Show/Hide Box 1 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 1 options.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 13,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section4_box1_use_font_icon'             => array(
			'name'        => 'canuckcp_section4_box1_use_font_icon',
			'title'       => esc_html__( 'Section 4-Box 1-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 14,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section4_box1_icon_color'                => array(
			'name'        => 'canuckcp_section4_box1_icon_color',
			'title'       => esc_html__( 'Section 4-Box 1 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 15,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section4_box1_image_font'                => array(
			'name'        => 'canuckcp_section4_box1_image_font',
			'title'       => esc_html__( 'Section 4-Box 1-Font Icon Code', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 16,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section4_box1_image'                     => array(
			'name'        => 'canuckcp_section4_box1_image',
			'title'       => esc_html__( 'Section 4-Box 1-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 400px wide x 267px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 17,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section4_box1_title'                     => array(
			'name'        => 'canuckcp_section4_box1_title',
			'title'       => esc_html__( 'Section 4-Box 1-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 18,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section4_box1_text'                      => array(
			'name'        => 'canuckcp_section4_box1_text',
			'title'       => esc_html__( 'Section 4-Box 1-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 19,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section4_box1_include_link'              => array(
			'name'        => 'canuckcp_section4_box1_include_link',
			'title'       => esc_html__( 'Section 4-Box 1-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 20,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section4_box1_button_link'               => array(
			'name'        => 'canuckcp_section4_box1_button_link',
			'title'       => esc_html__( 'Section 4-Box 1-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 21,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section4_box1_button_icon'               => array(
			'name'        => 'canuckcp_section4_box1_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 22,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section4_box1_button_title'              => array(
			'name'        => 'canuckcp_section4_box1_button_title',
			'title'       => esc_html__( 'Section 4-Box 1-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : ...more', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 23,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service Box 2.
		'canuckcp_section4_box2_toggle'                    => array(
			'name'        => 'canuckcp_section4_box2_toggle',
			'title'       => esc_html__( 'Show/Hide Box 2 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 2 options.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 24,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section4_box2_use_font_icon'             => array(
			'name'        => 'canuckcp_section4_box2_use_font_icon',
			'title'       => esc_html__( 'Section 4-Box 2-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 25,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section4_box2_icon_color'                => array(
			'name'        => 'canuckcp_section4_box2_icon_color',
			'title'       => esc_html__( 'Section 4-Box 2 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 26,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section4_box2_image_font'                => array(
			'name'        => 'canuckcp_section4_box2_image_font',
			'title'       => esc_html__( 'Section 4-Box 2-Font Icon Code', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 27,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section4_box2_image'                     => array(
			'name'        => 'canuckcp_section4_box2_image',
			'title'       => esc_html__( 'Section 4-Box 2-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 400px wide x 267px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 28,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section4_box2_title'                     => array(
			'name'        => 'canuckcp_section4_box2_title',
			'title'       => esc_html__( 'Section 4-Box 2-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 29,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section4_box2_text'                      => array(
			'name'        => 'canuckcp_section4_box2_text',
			'title'       => esc_html__( 'Section 4-Box 2-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 30,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section4_box2_include_link'              => array(
			'name'        => 'canuckcp_section4_box2_include_link',
			'title'       => esc_html__( 'Section 4-Box 2-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 31,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section4_box2_button_link'               => array(
			'name'        => 'canuckcp_section4_box2_button_link',
			'title'       => esc_html__( 'Section 4-Box 2-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 32,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section4_box2_button_icon'               => array(
			'name'        => 'canuckcp_section4_box2_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 33,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section4_box2_button_title'              => array(
			'name'        => 'canuckcp_section4_box2_button_title',
			'title'       => esc_html__( 'Section 4-Box 2-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : more', 'canuck-cp' ),
			'section'     => 'home_section_4',
			'priority'    => 34,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Panel:canuckcp_home Section:home_section_5.
		'canuckcp_section5_usage'                          => array(
			'name'        => 'canuckcp_section5_usage',
			'title'       => esc_html__( 'Section 5-Usage Options', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'normal'     => 'normal',
				'shortcode'  => 'shortcode',
				'widgetized' => 'widgetized',
			),
			'description' => esc_html__( 'Normal - widget and shortcode input box are not used.', 'canuck-cp' ) . '<br/>' .
							esc_html__( 'Widgetized - Drag your widget over to "Home Page Section 5" under "Appearance->Widgets".', 'canuck-cp' ) . ' ' .
							esc_html__( 'Shortcode - Enter the shortcode you want to use in the shortcode text area box.', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 1,
			'default'     => 'normal',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_useage',
		),
		'canuckcp_section5_background_option_toggle'       => array(
			'name'        => 'canuckcp_section5_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section5_background_image'               => array(
			'name'        => 'canuckcp_section5_background_image',
			'title'       => esc_html__( 'Section 5-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section5_overlay_opacity'                => array(
			'name'        => 'canuckcp_section5_overlay_opacity',
			'title'       => esc_html__( 'Section 5-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 4,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section5_use_parallax'                   => array(
			'name'        => 'canuckcp_section5_use_parallax',
			'title'       => esc_html__( 'Section 5-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 5,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section5_background_color'               => array(
			'name'        => 'canuckcp_section5_background_color',
			'title'       => esc_html__( 'Section 5-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 6,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section5_background_color_opacity'       => array(
			'name'        => 'canuckcp_section5_background_color_opacity',
			'title'       => esc_html__( 'Section 5-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 7,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section5_text_color'                     => array(
			'name'        => 'canuckcp_section5_text_color',
			'title'       => esc_html__( 'Section 5-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 8,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section5_text'                           => array(
			'name'        => 'canuckcp_section5_text',
			'title'       => esc_html__( 'Section 5-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section5_shortcode'                      => array(
			'name'        => 'canuckcp_section5_shortcode',
			'title'       => esc_html__( 'Section 5-Shortcode', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'Add your shortcode here if using shortcode as a Useage Option.', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_include_section5_button'                 => array(
			'name'        => 'canuckcp_include_section5_button',
			'title'       => esc_html__( 'Section 5-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link, then use the options below.', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 11,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section5_button_icon'                    => array(
			'name'        => 'canuckcp_section5_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 12,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section5_button_name'                    => array(
			'name'        => 'canuckcp_section5_button_name',
			'title'       => esc_html__( 'Section 5-Button Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, note use single quotes for classes.', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 13,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section5_button_link'                    => array(
			'name'        => 'canuckcp_section5_button_link',
			'title'       => esc_html__( 'Section 5-Button URI', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/contact/', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 14,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section5_button_background_color'        => array(
			'name'        => 'canuckcp_section5_button_background_color',
			'title'       => esc_html__( 'Section 5-Button Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 15,
			'default'     => '#fffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section5_button_text_color'              => array(
			'name'        => 'canuckcp_section5_button_text_color',
			'title'       => esc_html__( 'Section 5-Button Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a color for button text.', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 16,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section5_button_hover_background_color'  => array(
			'name'        => 'canuckcp_section5_button_hover_background_color',
			'title'       => esc_html__( 'Section 5-Button Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 17,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section5_button_hover_text_color'        => array(
			'name'        => 'canuckcp_section5_button_hover_text_color',
			'title'       => esc_html__( 'Section 5-Button Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_5',
			'priority'    => 18,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Panel:canuckcp_home Section:home_section_6 =======================================.
		'canuckcp_section6_background_option_toggle'       => array(
			'name'        => 'canuckcp_section6_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section6_background_image'               => array(
			'name'        => 'canuckcp_section6_background_image',
			'title'       => esc_html__( 'Section 6-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section6_overlay_opacity'                => array(
			'name'        => 'canuckcp_section6_overlay_opacity',
			'title'       => esc_html__( 'Section 6-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section6_use_parallax'                   => array(
			'name'        => 'canuckcp_section6_use_parallax',
			'title'       => esc_html__( 'Section 6-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section6_background_color'               => array(
			'name'        => 'canuckcp_section6_background_color',
			'title'       => esc_html__( 'Section 6-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section6_background_color_opacity'       => array(
			'name'        => 'canuckcp_section6_background_color_opacity',
			'title'       => esc_html__( 'Section 6-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section6_text_color'                     => array(
			'name'        => 'canuckcp_section6_text_color',
			'title'       => esc_html__( 'Section 6-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section6_button_colors_toggle'           => array(
			'name'        => 'canuckcp_section6_button_colors_toggle',
			'title'       => esc_html__( 'Show/Hide Button Colors', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit link button colors.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 8,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section6_button_background_color'        => array(
			'name'        => 'canuckcp_section6_button_background_color',
			'title'       => esc_html__( 'Section 6-Button Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 9,
			'default'     => '#fffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section6_button_text_color'              => array(
			'name'        => 'canuckcp_section6_button_text_color',
			'title'       => esc_html__( 'Section 6-Button Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 10,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section6_button_hover_background_color'  => array(
			'name'        => 'canuckcp_section6_button_hover_background_color',
			'title'       => esc_html__( 'Section 6-Button or Image Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it. If using an image link this is the dropdown hover color, opacity of 0.7.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 11,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section6_button_hover_text_color'        => array(
			'name'        => 'canuckcp_section6_button_hover_text_color',
			'title'       => esc_html__( 'Section 6-Button or Image Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button or image text changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 12,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Service Box 1.
		'canuckcp_section6_box1_toggle'                    => array(
			'name'        => 'canuckcp_section6_box1_toggle',
			'title'       => esc_html__( 'Show/Hide Box 1 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 1 options.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 13,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section6_box1_use_font_icon'             => array(
			'name'        => 'canuckcp_section6_box1_use_font_icon',
			'title'       => esc_html__( 'Section 6-Box 1-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 14,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section6_box1_image_font'                => array(
			'name'        => 'canuckcp_section6_box1_image_font',
			'title'       => esc_html__( 'Section 6-Box 1-Font Icon Code', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 15,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section6_box1_icon_color'                => array(
			'name'        => 'canuckcp_section6_box1_icon_color',
			'title'       => esc_html__( 'Section 6-Box 1 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 16,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section6_box1_image'                     => array(
			'name'        => 'canuckcp_section6_box1_image',
			'title'       => esc_html__( 'Section 6-Box 1-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 400px wide x 267px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 17,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section6_box1_title'                     => array(
			'name'        => 'canuckcp_section6_box1_title',
			'title'       => esc_html__( 'Section 6-Box 1-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 18,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section6_box1_text'                      => array(
			'name'        => 'canuckcp_section6_box1_text',
			'title'       => esc_html__( 'Section 6-Box 1-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 19,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section6_box1_include_link'              => array(
			'name'        => 'canuckcp_section6_box1_include_link',
			'title'       => esc_html__( 'Section 6-Box 1-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 20,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section6_box1_button_link'               => array(
			'name'        => 'canuckcp_section6_box1_button_link',
			'title'       => esc_html__( 'Section 6-Box 1-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 21,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section6_box1_button_icon'               => array(
			'name'        => 'canuckcp_section6_box1_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 22,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section6_box1_button_title'              => array(
			'name'        => 'canuckcp_section6_box1_button_title',
			'title'       => esc_html__( 'Section 6-Box 1-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : more', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 23,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service Box 2.
		'canuckcp_section6_box2_toggle'                    => array(
			'name'        => 'canuckcp_section6_box2_toggle',
			'title'       => esc_html__( 'Show/Hide Box 2 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 2 options.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 24,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section6_box2_use_font_icon'             => array(
			'name'        => 'canuckcp_section6_box2_use_font_icon',
			'title'       => esc_html__( 'Section 6-Box 2-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 25,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section6_box2_image_font'                => array(
			'name'        => 'canuckcp_section6_box2_image_font',
			'title'       => esc_html__( 'Section 6-Box 2-Font Icon Code', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 26,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section6_box2_icon_color'                => array(
			'name'        => 'canuckcp_section6_box2_icon_color',
			'title'       => esc_html__( 'Section 6-Box 2 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 27,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section6_box2_image'                     => array(
			'name'        => 'canuckcp_section6_box2_image',
			'title'       => esc_html__( 'Section 6-Box 2-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 400px wide x 267px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 28,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section6_box2_title'                     => array(
			'name'        => 'canuckcp_section6_box2_title',
			'title'       => esc_html__( 'Section 6-Box 2-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 29,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section6_box2_text'                      => array(
			'name'        => 'canuckcp_section6_box2_text',
			'title'       => esc_html__( 'Section 6-Box 2-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 30,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section6_box2_include_link'              => array(
			'name'        => 'canuckcp_section6_box2_include_link',
			'title'       => esc_html__( 'Section 6-Box 2-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 31,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section6_box2_button_link'               => array(
			'name'        => 'canuckcp_section6_box2_button_link',
			'title'       => esc_html__( 'Section 6-Box 2-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 32,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section6_box2_button_icon'               => array(
			'name'        => 'canuckcp_section6_box2_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 33,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section6_box2_button_title'              => array(
			'name'        => 'canuckcp_section6_box2_button_title',
			'title'       => esc_html__( 'Section 6-Box 2-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : more', 'canuck-cp' ),
			'section'     => 'home_section_6',
			'priority'    => 34,
			'default'     => "<i class='fa fa-link'></i> " . esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Panel:canuckcp_home Section:home_section_7.
		'canuckcp_section7_usage'                          => array(
			'name'        => 'canuckcp_section7_usage',
			'title'       => esc_html__( 'Section 7-Usage Options', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'normal'     => 'normal',
				'shortcode'  => 'shortcode',
				'widgetized' => 'widgetized',
			),
			'description' => esc_html__( 'Normal - widget and shortcode input box are not used.', 'canuck-cp' ) . '<br/>' .
							esc_html__( 'Widgetized - Drag your widget over to "Home Page Section 7" under "Appearance->Widgets".', 'canuck-cp' ) . ' ' .
							esc_html__( 'Shortcode - Enter the shortcode you want to use in the shortcode text area box.', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 1,
			'default'     => 'normal',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_useage',
		),
		'canuckcp_section7_background_option_toggle'       => array(
			'name'        => 'canuckcp_section7_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section7_background_image'               => array(
			'name'        => 'canuckcp_section7_background_image',
			'title'       => esc_html__( 'Section 7-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section7_use_parallax'                   => array(
			'name'        => 'canuckcp_section7_use_parallax',
			'title'       => esc_html__( 'Section 7-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section7_overlay_opacity'                => array(
			'name'        => 'canuckcp_section7_overlay_opacity',
			'title'       => esc_html__( 'Section 7-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 5,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section7_background_color'               => array(
			'name'        => 'canuckcp_section7_background_color',
			'title'       => esc_html__( 'Section 7-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 6,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section7_background_color_opacity'       => array(
			'name'        => 'canuckcp_section7_background_color_opacity',
			'title'       => esc_html__( 'Section 7-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 7,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section7_text_color'                     => array(
			'name'        => 'canuckcp_section7_text_color',
			'title'       => esc_html__( 'Section 7-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 8,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section7_text'                           => array(
			'name'        => 'canuckcp_section7_text',
			'title'       => esc_html__( 'Section 7-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section7_shortcode'                      => array(
			'name'        => 'canuckcp_section7_shortcode',
			'title'       => esc_html__( 'Section 7-Shortcode', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'Add your shortcode here if using shortcode as a Useage Option.', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_include_section7_button'                 => array(
			'name'        => 'canuckcp_include_section7_button',
			'title'       => esc_html__( 'Section 7-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link, then use the options below.', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 11,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section7_button_icon'                    => array(
			'name'        => 'canuckcp_section7_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 12,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section7_button_name'                    => array(
			'name'        => 'canuckcp_section7_button_name',
			'title'       => esc_html__( 'Section 7-Button Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, note use single quotes for classes.', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 13,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section7_button_link'                    => array(
			'name'        => 'canuckcp_section7_button_link',
			'title'       => esc_html__( 'Section 7-Button URI', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/contact/', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 14,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section7_button_background_color'        => array(
			'name'        => 'canuckcp_section7_button_background_color',
			'title'       => esc_html__( 'Section 7-Button Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 15,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section7_button_text_color'              => array(
			'name'        => 'canuckcp_section7_button_text_color',
			'title'       => esc_html__( 'Section 7-Button Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a color for button text.', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 16,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section7_button_hover_background_color'  => array(
			'name'        => 'canuckcp_section7_button_hover_background_color',
			'title'       => esc_html__( 'Section 7-Button Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 17,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section7_button_hover_text_color'        => array(
			'name'        => 'canuckcp_section7_button_hover_text_color',
			'title'       => esc_html__( 'Section 7-Button Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_7',
			'priority'    => 18,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Panel:canuckcp_home Section:home_section_8 ================================================.
		// General options for Section 8.
		'canuckcp_section8_background_option_toggle'       => array(
			'name'        => 'canuckcp_section8_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_background_image'               => array(
			'name'        => 'canuckcp_section8_background_image',
			'title'       => esc_html__( 'Section 8-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section8_overlay_opacity'                => array(
			'name'        => 'canuckcp_section8_overlay_opacity',
			'title'       => esc_html__( 'Section 8-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section8_use_parallax'                   => array(
			'name'        => 'canuckcp_section8_use_parallax',
			'title'       => esc_html__( 'Section 8-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_background_color'               => array(
			'name'        => 'canuckcp_section8_background_color',
			'title'       => esc_html__( 'Section 8-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section8_background_color_opacity'       => array(
			'name'        => 'canuckcp_section8_background_color_opacity',
			'title'       => esc_html__( 'Section 8-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section8_text_color'                     => array(
			'name'        => 'canuckcp_section8_text_color',
			'title'       => esc_html__( 'Section 8-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section8_button_colors_toggle'           => array(
			'name'        => 'canuckcp_section8_button_colors_toggle',
			'title'       => esc_html__( 'Show/Hide Button Colors', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit link button colors.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 8,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_button_background_color'        => array(
			'name'        => 'canuckcp_section8_button_background_color',
			'title'       => esc_html__( 'Section 8-Button Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 9,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section8_button_text_color'              => array(
			'name'        => 'canuckcp_section8_button_text_color',
			'title'       => esc_html__( 'Section 8-Button Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 10,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section8_button_hover_background_color'  => array(
			'name'        => 'canuckcp_section8_button_hover_background_color',
			'title'       => esc_html__( 'Section 8-Button or Image Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it. If using an image link this is the dropdown hover color, opacity of 0.7.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 11,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section8_button_hover_text_color'        => array(
			'name'        => 'canuckcp_section8_button_hover_text_color',
			'title'       => esc_html__( 'Section 8-Button or Image Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button or image hover text changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 12,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Service box 1.
		'canuckcp_section8_box1_toggle'                    => array(
			'name'        => 'canuckcp_section8_box1_toggle',
			'title'       => esc_html__( 'Show/Hide Box 1 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 1 options.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 13,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_box1_use_font_icon'             => array(
			'name'        => 'canuckcp_section8_box1_use_font_icon',
			'title'       => esc_html__( 'Section 8-Box 1-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 14,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_box1_image_font'                => array(
			'name'        => 'canuckcp_section8_box1_image_font',
			'title'       => esc_html__( 'Section 8-Box 1-Font Icon Code', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 15,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section8_box1_icon_color'                => array(
			'name'        => 'canuckcp_section8_box1_icon_color',
			'title'       => esc_html__( 'Section 8-Box 1 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 16,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section8_box1_image'                     => array(
			'name'        => 'canuckcp_section8_box1_image',
			'title'       => esc_html__( 'Section 8-Box 1-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 17,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section8_box1_title'                     => array(
			'name'        => 'canuckcp_section8_box1_title',
			'title'       => esc_html__( 'Section 8-Box 1-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 18,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section8_box1_text'                      => array(
			'name'        => 'canuckcp_section8_box1_text',
			'title'       => esc_html__( 'Section 8-Box 1-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 19,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section8_box1_include_link'              => array(
			'name'        => 'canuckcp_section8_box1_include_link',
			'title'       => esc_html__( 'Section 8-Box 1-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 20,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_box1_button_link'               => array(
			'name'        => 'canuckcp_section8_box1_button_link',
			'title'       => esc_html__( 'Section 8-Box 1-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 21,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section8_box1_button_icon'               => array(
			'name'        => 'canuckcp_section8_box1_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 22,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section8_box1_button_title'              => array(
			'name'        => 'canuckcp_section8_box1_button_title',
			'title'       => esc_html__( 'Section 8-Box 1-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : more', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 23,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service box 2.
		'canuckcp_section8_box2_toggle'                    => array(
			'name'        => 'canuckcp_section8_box2_toggle',
			'title'       => esc_html__( 'Show/Hide Box 2 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 2 options.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 24,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_box2_use_font_icon'             => array(
			'name'        => 'canuckcp_section8_box2_use_font_icon',
			'title'       => esc_html__( 'Section 8-Box 2-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 25,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_box2_image_font'                => array(
			'name'        => 'canuckcp_section8_box2_image_font',
			'title'       => esc_html__( 'Section 8-Box 2-Font Icon Code', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 26,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section8_box2_icon_color'                => array(
			'name'        => 'canuckcp_section8_box2_icon_color',
			'title'       => esc_html__( 'Section 8-Box 2 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 27,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section8_box2_image'                     => array(
			'name'        => 'canuckcp_section8_box2_image',
			'title'       => esc_html__( 'Section 8-Box 2-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 28,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section8_box2_title'                     => array(
			'name'        => 'canuckcp_section8_box2_title',
			'title'       => esc_html__( 'Section 8-Box 2-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 29,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section8_box2_text'                      => array(
			'name'        => 'canuckcp_section8_box2_text',
			'title'       => esc_html__( 'Section 8-Box 2-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 30,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section8_box2_include_link'              => array(
			'name'        => 'canuckcp_section8_box2_include_link',
			'title'       => esc_html__( 'Section 8-Box 2-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 31,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_box2_button_link'               => array(
			'name'        => 'canuckcp_section8_box2_button_link',
			'title'       => esc_html__( 'Section 8-Box 2-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 32,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section8_box2_button_icon'               => array(
			'name'        => 'canuckcp_section8_box2_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 33,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section8_box2_button_title'              => array(
			'name'        => 'canuckcp_section8_box2_button_title',
			'title'       => esc_html__( 'Section 8-Box 2-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default: more', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 34,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Sservice box 3.
		'canuckcp_section8_box3_toggle'                    => array(
			'name'        => 'canuckcp_section8_box3_toggle',
			'title'       => esc_html__( 'Show/Hide Box 3 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 3 options.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 35,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_box3_use_font_icon'             => array(
			'name'        => 'canuckcp_section8_box3_use_font_icon',
			'title'       => esc_html__( 'Section 8-Box 3-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 36,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_box3_image_font'                => array(
			'name'        => 'canuckcp_section8_box3_image_font',
			'title'       => esc_html__( 'Section 8-Box 3-Font Icon Code', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 37,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section8_box3_icon_color'                => array(
			'name'        => 'canuckcp_section8_box3_icon_color',
			'title'       => esc_html__( 'Section 8-Box 3 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 38,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section8_box3_image'                     => array(
			'name'        => 'canuckcp_section8_box3_image',
			'title'       => esc_html__( 'Section 8-Box 3-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 39,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section8_box3_title'                     => array(
			'name'        => 'canuckcp_section8_box3_title',
			'title'       => esc_html__( 'Section 8-Box 3-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 40,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section8_box3_text'                      => array(
			'name'        => 'canuckcp_section8_box3_text',
			'title'       => esc_html__( 'Section 8-Box 3-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 41,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section8_box3_include_link'              => array(
			'name'        => 'canuckcp_section8_box3_include_link',
			'title'       => esc_html__( 'Section 8-Box 3-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 42,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_box3_button_link'               => array(
			'name'        => 'canuckcp_section8_box3_button_link',
			'title'       => esc_html__( 'Section 8-Box 3-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 43,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section8_box3_button_icon'               => array(
			'name'        => 'canuckcp_section8_box3_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 44,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section8_box3_button_title'              => array(
			'name'        => 'canuckcp_section8_box3_button_title',
			'title'       => esc_html__( 'Section 8-Box 3-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : more', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 45,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service box 4.
		'canuckcp_section8_box4_toggle'                    => array(
			'name'        => 'canuckcp_section8_box4_toggle',
			'title'       => esc_html__( 'Show/Hide Box 4 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 4 options.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 46,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_box4_use_font_icon'             => array(
			'name'        => 'canuckcp_section8_box4_use_font_icon',
			'title'       => esc_html__( 'Section 8-Box 4-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 47,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_box4_image_font'                => array(
			'name'        => 'canuckcp_section8_box4_image_font',
			'title'       => esc_html__( 'Section 8-Box 4-Font Icon Code', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 48,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section8_box4_icon_color'                => array(
			'name'        => 'canuckcp_section8_box4_icon_color',
			'title'       => esc_html__( 'Section 8-Box 4 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 49,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section8_box4_image'                     => array(
			'name'        => 'canuckcp_section8_box4_image',
			'title'       => esc_html__( 'Section 8-Box 4-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 50,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section8_box4_title'                     => array(
			'name'        => 'canuckcp_section8_box4_title',
			'title'       => esc_html__( 'Section 8-Box 4-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 51,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section8_box4_text'                      => array(
			'name'        => 'canuckcp_section8_box4_text',
			'title'       => esc_html__( 'Section 8-Box 4-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 52,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section8_box4_include_link'              => array(
			'name'        => 'canuckcp_section8_box4_include_link',
			'title'       => esc_html__( 'Section 8-Box 4-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 53,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section8_box4_button_link'               => array(
			'name'        => 'canuckcp_section8_box4_button_link',
			'title'       => esc_html__( 'Section 8-Box 4-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 54,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section8_box4_button_icon'               => array(
			'name'        => 'canuckcp_section8_box4_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 55,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section8_box4_button_title'              => array(
			'name'        => 'canuckcp_section8_box4_button_title',
			'title'       => esc_html__( 'Section 8-Box 4-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : more', 'canuck-cp' ),
			'section'     => 'home_section_8',
			'priority'    => 56,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Section 9 : Portfolio.
		'canuckcp_section9_background_option_toggle'       => array(
			'name'        => 'canuckcp_section9_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_9',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section9_background_image'               => array(
			'name'        => 'canuckcp_section9_background_image',
			'title'       => esc_html__( 'Section 9-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck-cp' ),
			'section'     => 'home_section_9',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section9_overlay_opacity'                => array(
			'name'        => 'canuckcp_section9_overlay_opacity',
			'title'       => esc_html__( 'Section 9-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_9',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section9_use_parallax'                   => array(
			'name'        => 'canuckcp_section9_use_parallax',
			'title'       => esc_html__( 'Section 9-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_9',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section9_background_color'               => array(
			'name'        => 'canuckcp_section9_background_color',
			'title'       => esc_html__( 'Section 9-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_9',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section9_background_color_opacity'       => array(
			'name'        => 'canuckcp_section9_background_color_opacity',
			'title'       => esc_html__( 'Section 9-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_9',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section9_text_color'                     => array(
			'name'        => 'canuckcp_section9_text_color',
			'title'       => esc_html__( 'Section 9-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_9',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section9_image_hover_background_color'   => array(
			'name'        => 'canuckcp_section9_image_hover_background_color',
			'title'       => esc_html__( 'Section 9-Image Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'This is dropdown hover color, opacity of 0.7.', 'canuck-cp' ),
			'section'     => 'home_section_9',
			'priority'    => 8,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section9_image_hover_text_color'         => array(
			'name'        => 'canuckcp_section9_image_hover_text_color',
			'title'       => esc_html__( 'Section 9-Image Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The image hover text uses this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_9',
			'priority'    => 9,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section9_title'                          => array(
			'name'        => 'canuckcp_section9_title',
			'title'       => esc_html__( 'Section 9-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_9',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section9_text'                           => array(
			'name'        => 'canuckcp_section9_text',
			'title'       => esc_html__( 'Section 9-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_9',
			'priority'    => 11,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section9_portfolio_category'             => array(
			'name'        => 'canuckcp_section9_portfolio_category',
			'title'       => esc_html__( 'Section 9-Portfolio Category', 'canuck-cp' ),
			'option_type' => 'scat',
			'description' => esc_html__( 'Select the category you have used for the feature posts you are using for this portfolio section.', 'canuck-cp' ),
			'section'     => 'home_section_9',
			'priority'    => 12,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section9_portfolio_columns'              => array(
			'name'        => 'canuckcp_section9_portfolio_columns',
			'title'       => esc_html__( 'Section 9-Portfolio Columns', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'3' => '3',
				'4' => '4',
			),
			'description' => esc_html__( 'you can have 3 or 4 portfolio columns', 'canuck-cp' ),
			'section'     => 'home_section_9',
			'priority'    => 13,
			'default'     => '3',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_select',
		),
		// Section 10 : Media Left - Content Right.
		'canuckcp_section10_background_option_toggle'      => array(
			'name'        => 'canuckcp_section10_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section10_background_image'              => array(
			'name'        => 'canuckcp_section10_background_image',
			'title'       => esc_html__( 'Section 10-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section10_overlay_opacity'               => array(
			'name'        => 'canuckcp_section10_overlay_opacity',
			'title'       => esc_html__( 'Section 10-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section10_use_parallax'                  => array(
			'name'        => 'canuckcp_section10_use_parallax',
			'title'       => esc_html__( 'Section 10-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section10_background_color'              => array(
			'name'        => 'canuckcp_section10_background_color',
			'title'       => esc_html__( 'Section 10-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section10_background_color_opacity'      => array(
			'name'        => 'canuckcp_section10_background_color_opacity',
			'title'       => esc_html__( 'Section 10-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section10_text_color'                    => array(
			'name'        => 'canuckcp_section10_text_color',
			'title'       => esc_html__( 'Section 10-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section10_media_area_usage'              => array(
			'name'        => 'canuckcp_section10_media_area_usage',
			'title'       => esc_html__( 'Section 10-Media Area Usage Options', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'normal'     => 'image',
				'shortcode'  => 'shortcode',
				'widgetized' => 'widgetized',
			),
			'description' => esc_html__( 'You can use an image for the media area or use a shortcode or widget in the media area.', 'canuck-cp' ) . ' ' .
							esc_html__( 'If using an image, upload the image below.', 'canuck-cp' ) . ' ' .
							esc_html__( 'If using a shortcode, enter the scortcode in the shortcode entry box below.', 'canuck-cp' ) . ' ' .
							esc_html__( 'If using a widget set up your widget in Appearence -> widgets using the Home Page Section 10 tab.', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 8,
			'default'     => 'normal',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_useage',
		),
		'canuckcp_section10_image'                         => array(
			'name'        => 'canuckcp_section10_image',
			'title'       => esc_html__( 'Section 10-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 800px wide x 533px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section10_shortcode'                     => array(
			'name'        => 'canuckcp_section10_shortcode',
			'title'       => esc_html__( 'Section 10-Shortcode', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'Add your shortcode here if using shortcode as a Media Area Useage Option.', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section10_title'                         => array(
			'name'        => 'canuckcp_section10_title',
			'title'       => esc_html__( 'Section 10-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 11,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section10_text'                          => array(
			'name'        => 'canuckcp_section10_text',
			'title'       => esc_html__( 'Section 10-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 12,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section10_include_link'                  => array(
			'name'        => 'canuckcp_section10_include_link',
			'title'       => esc_html__( 'Section 10-Include Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 13,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section10_button_link'                   => array(
			'name'        => 'canuckcp_section10_button_link',
			'title'       => esc_html__( 'Section 10-Button Link', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 14,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section10_button_icon'                   => array(
			'name'        => 'canuckcp_section10_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 15,
			'default'     => 'no icon',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section10_button_title'                  => array(
			'name'        => 'canuckcp_section10_button_title',
			'title'       => esc_html__( 'Section 10-Button Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : more', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 16,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section10_button_background_color'       => array(
			'name'        => 'canuckcp_section10_button_background_color',
			'title'       => esc_html__( 'Section 10-Button Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 17,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section10_button_text_color'             => array(
			'name'        => 'canuckcp_section10_button_text_color',
			'title'       => esc_html__( 'Section 10-Button Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a color for button text.', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 18,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section10_button_hover_background_color' => array(
			'name'        => 'canuckcp_section10_button_hover_background_color',
			'title'       => esc_html__( 'Section 10-Button Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 19,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section10_button_hover_text_color'       => array(
			'name'        => 'canuckcp_section10_button_hover_text_color',
			'title'       => esc_html__( 'Section 10-Button Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_10',
			'priority'    => 20,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Section 11: Content Left - Media Right.
		'canuckcp_section11_background_option_toggle'      => array(
			'name'        => 'canuckcp_section11_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section11_background_image'              => array(
			'name'        => 'canuckcp_section11_background_image',
			'title'       => esc_html__( 'Section 11-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section11_overlay_opacity'               => array(
			'name'        => 'canuckcp_section11_overlay_opacity',
			'title'       => esc_html__( 'Section 11-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section11_use_parallax'                  => array(
			'name'        => 'canuckcp_section11_use_parallax',
			'title'       => esc_html__( 'Section 11-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section11_background_color'              => array(
			'name'        => 'canuckcp_section11_background_color',
			'title'       => esc_html__( 'Section 11-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section11_background_color_opacity'      => array(
			'name'        => 'canuckcp_section11_background_color_opacity',
			'title'       => esc_html__( 'Section 11-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section11_text_color'                    => array(
			'name'        => 'canuckcp_section11_text_color',
			'title'       => esc_html__( 'Section 11-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section11_media_area_usage'              => array(
			'name'        => 'canuckcp_section11_media_area_usage',
			'title'       => esc_html__( 'Section 11-Media Area Usage Options', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => array(
				'normal'     => 'image',
				'shortcode'  => 'shortcode',
				'widgetized' => 'widgetized',
			),
			'description' => esc_html__( 'You can use an image for the media area or use a shortcode or widget in the media area.', 'canuck-cp' ) . ' ' .
							esc_html__( 'If using an image, upload the image below.', 'canuck-cp' ) . ' ' .
							esc_html__( 'If using a shortcode, enter the scortcode in the shortcode box below.', 'canuck-cp' ) . ' ' .
							esc_html__( 'If using a widget set up your widget in Appearence -> widgets using the Home Page Section 11 tab.', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 8,
			'default'     => 'normal',
			'transport'   => 'refresh',
			'sanitize'    => 'canuckcp_sanitize_useage',
		),
		'canuckcp_section11_image'                         => array(
			'name'        => 'canuckcp_section11_image',
			'title'       => esc_html__( 'Section 11-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 800px wide x 533px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 9,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section11_shortcode'                     => array(
			'name'        => 'canuckcp_section11_shortcode',
			'title'       => esc_html__( 'Section 11-Shortcode', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'Add your shortcode here if using shortcode as a Media Area Useage Option.', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section11_title'                         => array(
			'name'        => 'canuckcp_section11_title',
			'title'       => esc_html__( 'Section 11-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 11,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section11_text'                          => array(
			'name'        => 'canuckcp_section11_text',
			'title'       => esc_html__( 'Section 11-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 12,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section11_include_link'                  => array(
			'name'        => 'canuckcp_section11_include_link',
			'title'       => esc_html__( 'Section 11-Include Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 13,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section11_button_link'                   => array(
			'name'        => 'canuckcp_section11_button_link',
			'title'       => esc_html__( 'Section 11-Button Link', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 14,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section11_button_icon'                   => array(
			'name'        => 'canuckcp_section11_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 15,
			'default'     => 'no icon',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section11_button_title'                  => array(
			'name'        => 'canuckcp_section11_button_title',
			'title'       => esc_html__( 'Section 11-Button Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link.', 'canuck-cp' ) . ' ' . esc_html__( 'Default : ', 'canuck-cp' ) . "&lt;i class='fa fa-link'&gt;&lt;/i&gt; more ",
			'section'     => 'home_section_11',
			'priority'    => 16,
			'default'     => '...more',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section11_button_background_color'       => array(
			'name'        => 'canuckcp_section11_button_background_color',
			'title'       => esc_html__( 'Section 11-Button Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 17,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section11_button_text_color'             => array(
			'name'        => 'canuckcp_section11_button_text_color',
			'title'       => esc_html__( 'Section 11-Button Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a color for button text.', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 18,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section11_button_hover_background_color' => array(
			'name'        => 'canuckcp_section11_button_hover_background_color',
			'title'       => esc_html__( 'Section 11-Button Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 19,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section11_button_hover_text_color'       => array(
			'name'        => 'canuckcp_section11_button_hover_text_color',
			'title'       => esc_html__( 'Section 11-Button Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button text changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_11',
			'priority'    => 20,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Section 12 : Carousel.
		'canuckcp_section12_background_option_toggle'      => array(
			'name'        => 'canuckcp_section12_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_12',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section12_background_image'              => array(
			'name'        => 'canuckcp_section12_background_image',
			'title'       => esc_html__( 'Section 12-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image', 'canuck-cp' ),
			'section'     => 'home_section_12',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section12_overlay_opacity'               => array(
			'name'        => 'canuckcp_section12_overlay_opacity',
			'title'       => esc_html__( 'Section 12-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_12',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section12_use_parallax'                  => array(
			'name'        => 'canuckcp_section12_use_parallax',
			'title'       => esc_html__( 'Section 12-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_12',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section12_background_color'              => array(
			'name'        => 'canuckcp_section12_background_color',
			'title'       => esc_html__( 'Section 12-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_12',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section12_background_color_opacity'      => array(
			'name'        => 'canuckcp_section12_background_color_opacity',
			'title'       => esc_html__( 'Section 12-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_12',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section12_text_color'                    => array(
			'name'        => 'canuckcp_section12_text_color',
			'title'       => esc_html__( 'Section 12-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_12',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section12_image_hover_background_color'  => array(
			'name'        => 'canuckcp_section12_image_hover_background_color',
			'title'       => esc_html__( 'Section 12-Image Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'This is dropdown hover color, opacity of 0.7.', 'canuck-cp' ),
			'section'     => 'home_section_12',
			'priority'    => 8,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section12_image_hover_text_color'        => array(
			'name'        => 'canuckcp_section12_image_hover_text_color',
			'title'       => esc_html__( 'Section 12-Image Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The image hover text uses this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_12',
			'priority'    => 9,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section12_title'                         => array(
			'name'        => 'canuckcp_section12_title',
			'title'       => esc_html__( 'Section 12-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_12',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section12_text'                          => array(
			'name'        => 'canuckcp_section12_text',
			'title'       => esc_html__( 'Section 12-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_12',
			'priority'    => 11,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section12_portfolio_category'            => array(
			'name'        => 'canuckcp_section12_portfolio_category',
			'title'       => esc_html__( 'Section 12-Portfolio Category', 'canuck-cp' ),
			'option_type' => 'scat',
			'description' => esc_html__( 'Select the category you have used for the feature posts you are using for this portfolio section.', 'canuck-cp' ),
			'section'     => 'home_section_12',
			'priority'    => 12,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		// Section 13 : Carousel.
		'canuckcp_section13_background_option_toggle'      => array(
			'name'        => 'canuckcp_section13_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_13',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section13_background_image'              => array(
			'name'        => 'canuckcp_section13_background_image',
			'title'       => esc_html__( 'Section 13-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image', 'canuck-cp' ),
			'section'     => 'home_section_13',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section13_overlay_opacity'               => array(
			'name'        => 'canuckcp_section13_overlay_opacity',
			'title'       => esc_html__( 'Section 13-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_13',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section13_use_parallax'                  => array(
			'name'        => 'canuckcp_section13_use_parallax',
			'title'       => esc_html__( 'Section 13-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_13',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section13_background_color'              => array(
			'name'        => 'canuckcp_section13_background_color',
			'title'       => esc_html__( 'Section 13-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_13',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section13_background_color_opacity'      => array(
			'name'        => 'canuckcp_section13_background_color_opacity',
			'title'       => esc_html__( 'Section 13-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_13',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section13_text_color'                    => array(
			'name'        => 'canuckcp_section13_text_color',
			'title'       => esc_html__( 'Section 13-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_13',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section13_image_hover_background_color'  => array(
			'name'        => 'canuckcp_section13_image_hover_background_color',
			'title'       => esc_html__( 'Section 13-Image Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'This is dropdown hover color, opacity of 0.7.', 'canuck-cp' ),
			'section'     => 'home_section_13',
			'priority'    => 8,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section13_image_hover_text_color'        => array(
			'name'        => 'canuckcp_section13_image_hover_text_color',
			'title'       => esc_html__( 'Section 13-Image Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The image hover text uses this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_13',
			'priority'    => 9,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section13_title'                         => array(
			'name'        => 'canuckcp_section13_title',
			'title'       => esc_html__( 'Section 13-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_13',
			'priority'    => 10,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section13_text'                          => array(
			'name'        => 'canuckcp_section13_text',
			'title'       => esc_html__( 'Section 13-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_13',
			'priority'    => 11,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section13_portfolio_category'            => array(
			'name'        => 'canuckcp_section13_portfolio_category',
			'title'       => esc_html__( 'Section 13-Portfolio Category', 'canuck-cp' ),
			'option_type' => 'scat',
			'description' => esc_html__( 'Select the category you have used for the feature posts you are using for this portfolio section.', 'canuck-cp' ),
			'section'     => 'home_section_13',
			'priority'    => 12,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		// Panel:canuckcp_home Section:home_section_14 ====================================================.
		// General options for Section 14.
		'canuckcp_section14_text_color'                    => array(
			'name'        => 'canuckcp_section14_text_color',
			'title'       => esc_html__( 'Section 14-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 1,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section14_background_option_toggle'      => array(
			'name'        => 'canuckcp_section14_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 2,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section14_background_image'              => array(
			'name'        => 'canuckcp_section14_background_image',
			'title'       => esc_html__( 'Section 14-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 3,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section14_overlay_opacity'               => array(
			'name'        => 'canuckcp_section14_overlay_opacity',
			'title'       => esc_html__( 'Section 14-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 4,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section14_use_parallax'                  => array(
			'name'        => 'canuckcp_section14_use_parallax',
			'title'       => esc_html__( 'Section 14-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 5,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section14_background_color'              => array(
			'name'        => 'canuckcp_section14_background_color',
			'title'       => esc_html__( 'Section 14-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 6,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section14_background_color_opacity'      => array(
			'name'        => 'canuckcp_section14_background_color_opacity',
			'title'       => esc_html__( 'Section 14-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 7,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section14_button_colors_toggle'          => array(
			'name'        => 'canuckcp_section14_button_colors_toggle',
			'title'       => esc_html__( 'Show/Hide Button Colors', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to change link button colors.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 8,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section14_button_background_color'       => array(
			'name'        => 'canuckcp_section14_button_background_color',
			'title'       => esc_html__( 'Section 14-Button Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 9,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section14_button_text_color'             => array(
			'name'        => 'canuckcp_section14_button_text_color',
			'title'       => esc_html__( 'Section 14-Button Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 10,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section14_button_hover_background_color' => array(
			'name'        => 'canuckcp_section14_button_hover_background_color',
			'title'       => esc_html__( 'Section 14-Button or Image Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it. If using an image link this is the dropdown hover color, opacity of 0.7.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 11,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section14_button_hover_text_color'       => array(
			'name'        => 'canuckcp_section14_button_hover_text_color',
			'title'       => esc_html__( 'Section 14-Button or Image Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button or image text changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 12,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Service box 1.
		'canuckcp_section14_box1_toggle'                   => array(
			'name'        => 'canuckcp_section14_box1_toggle',
			'title'       => esc_html__( 'Show/Hide Box 1 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 1 options.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 13,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section14_box1_use_font_icon'            => array(
			'name'        => 'canuckcp_section14_box1_use_font_icon',
			'title'       => esc_html__( 'Section 14-Box 1-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 14,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section14_box1_image_font'               => array(
			'name'        => 'canuckcp_section14_box1_image_font',
			'title'       => esc_html__( 'Section 14-Box 1-Font Icon Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 15,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section14_box1_icon_color'               => array(
			'name'        => 'canuckcp_section14_box1_icon_color',
			'title'       => esc_html__( 'Section 14-Box 1 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 16,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section14_box1_image'                    => array(
			'name'        => 'canuckcp_section14_box1_image',
			'title'       => esc_html__( 'Section 14-Box 1-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 17,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section14_box1_title'                    => array(
			'name'        => 'canuckcp_section14_box1_title',
			'title'       => esc_html__( 'Section 14-Box 1-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 18,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section14_box1_text'                     => array(
			'name'        => 'canuckcp_section14_box1_text',
			'title'       => esc_html__( 'Section 14-Box 1-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 19,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section14_box1_include_link'             => array(
			'name'        => 'canuckcp_section14_box1_include_link',
			'title'       => esc_html__( 'Section 14-Box 1-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 20,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section14_box1_button_link'              => array(
			'name'        => 'canuckcp_section14_box1_button_link',
			'title'       => esc_html__( 'Section 14-Box 1-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 21,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section14_box1_button_icon'              => array(
			'name'        => 'canuckcp_section14_box1_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 22,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section14_box1_button_title'             => array(
			'name'        => 'canuckcp_section14_box1_button_title',
			'title'       => esc_html__( 'Section 14-Box 1-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : ...more', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 23,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service box 2.
		'canuckcp_section14_box2_toggle'                   => array(
			'name'        => 'canuckcp_section14_box2_toggle',
			'title'       => esc_html__( 'Show/Hide Box 2 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 2 options.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 24,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section14_box2_use_font_icon'            => array(
			'name'        => 'canuckcp_section14_box2_use_font_icon',
			'title'       => esc_html__( 'Section 14-Box 2-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 25,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section14_box2_image_font'               => array(
			'name'        => 'canuckcp_section14_box2_image_font',
			'title'       => esc_html__( 'Section 14-Box 2-Font Icon Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 26,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section14_box2_icon_color'               => array(
			'name'        => 'canuckcp_section14_box2_icon_color',
			'title'       => esc_html__( 'Section 14-Box 2 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 27,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section14_box2_image'                    => array(
			'name'        => 'canuckcp_section14_box2_image',
			'title'       => esc_html__( 'Section 14-Box 2-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 28,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section14_box2_title'                    => array(
			'name'        => 'canuckcp_section14_box2_title',
			'title'       => esc_html__( 'Section 14-Box 2-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 29,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section14_box2_text'                     => array(
			'name'        => 'canuckcp_section14_box2_text',
			'title'       => esc_html__( 'Section 14-Box 2-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 30,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section14_box2_include_link'             => array(
			'name'        => 'canuckcp_section14_box2_include_link',
			'title'       => esc_html__( 'Section 14-Box 2-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 31,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section14_box2_button_link'              => array(
			'name'        => 'canuckcp_section14_box2_button_link',
			'title'       => esc_html__( 'Section 14-Box 2-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 32,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section14_box2_button_icon'              => array(
			'name'        => 'canuckcp_section14_box2_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 33,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section14_box2_button_title'             => array(
			'name'        => 'canuckcp_section14_box2_button_title',
			'title'       => esc_html__( 'Section 14-Box 2-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : ...more', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 34,
			'default'     => esc_html__( '...more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service box 3.
		'canuckcp_section14_box3_toggle'                   => array(
			'name'        => 'canuckcp_section14_box3_toggle',
			'title'       => esc_html__( 'Show/Hide Box 3 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 3 options.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 35,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section14_box3_use_font_icon'            => array(
			'name'        => 'canuckcp_section14_box3_use_font_icon',
			'title'       => esc_html__( 'Section 14-Box 3-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 36,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section14_box3_image_font'               => array(
			'name'        => 'canuckcp_section14_box3_image_font',
			'title'       => esc_html__( 'Section 14-Box 3-Font Icon Name', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 37,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section14_box3_icon_color'               => array(
			'name'        => 'canuckcp_section14_box3_icon_color',
			'title'       => esc_html__( 'Section 14-Box 3 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 38,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section14_box3_image'                    => array(
			'name'        => 'canuckcp_section14_box3_image',
			'title'       => esc_html__( 'Section 14-Box 3-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 39,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section14_box3_title'                    => array(
			'name'        => 'canuckcp_section14_box3_title',
			'title'       => esc_html__( 'Section 14-Box 3-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 40,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section14_box3_text'                     => array(
			'name'        => 'canuckcp_section14_box3_text',
			'title'       => esc_html__( 'Section 14-Box 3-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 41,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section14_box3_include_link'             => array(
			'name'        => 'canuckcp_section14_box3_include_link',
			'title'       => esc_html__( 'Section 14-Box 3-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 42,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section14_box3_button_link'              => array(
			'name'        => 'canuckcp_section14_box3_button_link',
			'title'       => esc_html__( 'Section 2-Box 3-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 43,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section14_box3_button_icon'              => array(
			'name'        => 'canuckcp_section14_box3_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 44,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section14_box3_button_title'             => array(
			'name'        => 'canuckcp_section14_box3_button_title',
			'title'       => esc_html__( 'Section 14-Box 3-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : ...more', 'canuck-cp' ),
			'section'     => 'home_section_14',
			'priority'    => 45,
			'default'     => esc_html__( '...more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Panel:canuckcp_home Section:home_section_15 ================================================.
		// General options for Section 15.
		'canuckcp_section15_background_option_toggle'      => array(
			'name'        => 'canuckcp_section15_background_option_toggle',
			'title'       => esc_html__( 'Show/Hide Background Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check show background options.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 1,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_background_image'              => array(
			'name'        => 'canuckcp_section15_background_image',
			'title'       => esc_html__( 'Section 15-Background Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'Upload and use a background image.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 2,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section15_overlay_opacity'               => array(
			'name'        => 'canuckcp_section15_overlay_opacity',
			'title'       => esc_html__( 'Section 15-Overlay Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to place a dark shadow over the background image.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 3,
			'default'     => 0,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section15_use_parallax'                  => array(
			'name'        => 'canuckcp_section15_use_parallax',
			'title'       => esc_html__( 'Section 15-Use Parallax', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use parallax effect for the image.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 4,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_background_color'              => array(
			'name'        => 'canuckcp_section15_background_color',
			'title'       => esc_html__( 'Section 15-Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 5,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section15_background_color_opacity'      => array(
			'name'        => 'canuckcp_section15_background_color_opacity',
			'title'       => esc_html__( 'Section 15-Background Color Opacity', 'canuck-cp' ),
			'option_type' => 'range',
			'choices'     => canuckcp_opacity_range_choices(),
			'description' => esc_html__( 'This option allows you to set the opacity of the background color.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 6,
			'default'     => 1,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section15_text_color'                    => array(
			'name'        => 'canuckcp_section15_text_color',
			'title'       => esc_html__( 'Section 15-Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 7,
			'default'     => '#4c4c4c',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section15_button_colors_toggle'          => array(
			'name'        => 'canuckcp_section15_button_colors_toggle',
			'title'       => esc_html__( 'Show/Hide Button Colors', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit link button colors.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 8,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_button_background_color'       => array(
			'name'        => 'canuckcp_section15_button_background_color',
			'title'       => esc_html__( 'Section 15-Button Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a background color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 9,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section15_button_text_color'             => array(
			'name'        => 'canuckcp_section15_button_text_color',
			'title'       => esc_html__( 'Section 15-Button Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose a text color for the button.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 10,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section15_button_hover_background_color' => array(
			'name'        => 'canuckcp_section15_button_hover_background_color',
			'title'       => esc_html__( 'Section 15-Button or Image Hover Background Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button changes to this color when a mouse pointer hovers over it. If using an image link this is the dropdown hover color, opacity of 0.7.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 11,
			'default'     => $button_hover_default,
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section15_button_hover_text_color'       => array(
			'name'        => 'canuckcp_section15_button_hover_text_color',
			'title'       => esc_html__( 'Section 15-Button or Image Hover Text Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'The button or image hover text changes to this color when a mouse pointer hovers over it.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 12,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		// Service box 1.
		'canuckcp_section15_box1_toggle'                   => array(
			'name'        => 'canuckcp_section15_box1_toggle',
			'title'       => esc_html__( 'Show/Hide Box 1 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 1 options.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 13,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_box1_use_font_icon'            => array(
			'name'        => 'canuckcp_section15_box1_use_font_icon',
			'title'       => esc_html__( 'Section 15-Box 1-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 14,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_box1_image_font'               => array(
			'name'        => 'canuckcp_section15_box1_image_font',
			'title'       => esc_html__( 'Section 15-Box 1-Font Icon Code', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 15,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section15_box1_icon_color'               => array(
			'name'        => 'canuckcp_section15_box1_icon_color',
			'title'       => esc_html__( 'Section 15-Box 1 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 16,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section15_box1_image'                    => array(
			'name'        => 'canuckcp_section15_box1_image',
			'title'       => esc_html__( 'Section 15-Box 1-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 17,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section15_box1_title'                    => array(
			'name'        => 'canuckcp_section15_box1_title',
			'title'       => esc_html__( 'Section 15-Box 1-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 18,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section15_box1_text'                     => array(
			'name'        => 'canuckcp_section15_box1_text',
			'title'       => esc_html__( 'Section 15-Box 1-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 19,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section15_box1_include_link'             => array(
			'name'        => 'canuckcp_section15_box1_include_link',
			'title'       => esc_html__( 'Section 15-Box 1-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 20,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_box1_button_link'              => array(
			'name'        => 'canuckcp_section15_box1_button_link',
			'title'       => esc_html__( 'Section 15-Box 1-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 21,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section15_box1_button_icon'              => array(
			'name'        => 'canuckcp_section15_box1_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 22,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section15_box1_button_title'             => array(
			'name'        => 'canuckcp_section15_box1_button_title',
			'title'       => esc_html__( 'Section 15-Box 1-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : more', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 23,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service box 2.
		'canuckcp_section15_box2_toggle'                   => array(
			'name'        => 'canuckcp_section15_box2_toggle',
			'title'       => esc_html__( 'Show/Hide Box 2 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 2 options.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 24,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_box2_use_font_icon'            => array(
			'name'        => 'canuckcp_section15_box2_use_font_icon',
			'title'       => esc_html__( 'Section 15-Box 2-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 25,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_box2_image_font'               => array(
			'name'        => 'canuckcp_section15_box2_image_font',
			'title'       => esc_html__( 'Section 15-Box 2-Font Icon Code', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 26,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section15_box2_icon_color'               => array(
			'name'        => 'canuckcp_section15_box2_icon_color',
			'title'       => esc_html__( 'Section 15-Box 2 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 27,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section15_box2_image'                    => array(
			'name'        => 'canuckcp_section15_box2_image',
			'title'       => esc_html__( 'Section 15-Box 2-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 28,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section15_box2_title'                    => array(
			'name'        => 'canuckcp_section15_box2_title',
			'title'       => esc_html__( 'Section 15-Box 2-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 29,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section15_box2_text'                     => array(
			'name'        => 'canuckcp_section15_box2_text',
			'title'       => esc_html__( 'Section 15-Box 2-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 30,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section15_box2_include_link'             => array(
			'name'        => 'canuckcp_section15_box2_include_link',
			'title'       => esc_html__( 'Section 15-Box 2-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 31,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_box2_button_link'              => array(
			'name'        => 'canuckcp_section15_box2_button_link',
			'title'       => esc_html__( 'Section 15-Box 2-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 32,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section15_box2_button_icon'              => array(
			'name'        => 'canuckcp_section15_box2_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 33,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section15_box2_button_title'             => array(
			'name'        => 'canuckcp_section15_box2_button_title',
			'title'       => esc_html__( 'Section 15-Box 2-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default: more', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 34,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Sservice box 3.
		'canuckcp_section15_box3_toggle'                   => array(
			'name'        => 'canuckcp_section15_box3_toggle',
			'title'       => esc_html__( 'Show/Hide Box 3 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 3 options.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 35,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_box3_use_font_icon'            => array(
			'name'        => 'canuckcp_section15_box3_use_font_icon',
			'title'       => esc_html__( 'Section 15-Box 3-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 36,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_box3_image_font'               => array(
			'name'        => 'canuckcp_section15_box3_image_font',
			'title'       => esc_html__( 'Section 15-Box 3-Font Icon Code', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 37,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section15_box3_icon_color'               => array(
			'name'        => 'canuckcp_section15_box3_icon_color',
			'title'       => esc_html__( 'Section 15-Box 3 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 38,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section15_box3_image'                    => array(
			'name'        => 'canuckcp_section15_box3_image',
			'title'       => esc_html__( 'Section 15-Box 3-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 39,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section15_box3_title'                    => array(
			'name'        => 'canuckcp_section15_box3_title',
			'title'       => esc_html__( 'Section 15-Box 3-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 40,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section15_box3_text'                     => array(
			'name'        => 'canuckcp_section15_box3_text',
			'title'       => esc_html__( 'Section 15-Box 3-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 41,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section15_box3_include_link'             => array(
			'name'        => 'canuckcp_section15_box3_include_link',
			'title'       => esc_html__( 'Section 15-Box 3-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 42,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_box3_button_link'              => array(
			'name'        => 'canuckcp_section15_box3_button_link',
			'title'       => esc_html__( 'Section 15-Box 3-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 43,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section15_box3_button_icon'              => array(
			'name'        => 'canuckcp_section15_box3_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 44,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section15_box3_button_title'             => array(
			'name'        => 'canuckcp_section15_box3_button_title',
			'title'       => esc_html__( 'Section 15-Box 3-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : more', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 45,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		// Service box 4.
		'canuckcp_section15_box4_toggle'                   => array(
			'name'        => 'canuckcp_section15_box4_toggle',
			'title'       => esc_html__( 'Show/Hide Box 4 Options', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Check to edit box 4 options.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 46,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_box4_use_font_icon'            => array(
			'name'        => 'canuckcp_section15_box4_use_font_icon',
			'title'       => esc_html__( 'Section 15-Box 4-Font Icon', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'Use font icon instead of image', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 47,
			'default'     => false, // 0 for off
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_box4_image_font'               => array(
			'name'        => 'canuckcp_section15_box4_image_font',
			'title'       => esc_html__( 'Section 15-Box 4-Font Icon Code', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'Select a Font Awesome icon.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 48,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section15_box4_icon_color'               => array(
			'name'        => 'canuckcp_section15_box4_icon_color',
			'title'       => esc_html__( 'Section 15-Box 4 Icon Color', 'canuck-cp' ),
			'option_type' => 'color',
			'description' => esc_html__( 'Choose an icon color. Note this will not be used if a background image is set up.', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 49,
			'default'     => '#ffffff',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_hex_color',
		),
		'canuckcp_section15_box4_image'                    => array(
			'name'        => 'canuckcp_section15_box4_image',
			'title'       => esc_html__( 'Section 15-Box 4-Image', 'canuck-cp' ),
			'option_type' => 'image',
			'description' => esc_html__( 'upload and use an image, 300px wide x 200px high recommended', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 50,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section15_box4_title'                    => array(
			'name'        => 'canuckcp_section15_box4_title',
			'title'       => esc_html__( 'Section 15-Box 4-Title', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'no html', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 51,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'sanitize_text_field',
		),
		'canuckcp_section15_box4_text'                     => array(
			'name'        => 'canuckcp_section15_box4_text',
			'title'       => esc_html__( 'Section 15-Box 4-Content', 'canuck-cp' ),
			'option_type' => 'textarea',
			'description' => esc_html__( 'html allowed', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 52,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
		'canuckcp_section15_box4_include_link'             => array(
			'name'        => 'canuckcp_section15_box4_include_link',
			'title'       => esc_html__( 'Section 15-Box 4-Link', 'canuck-cp' ),
			'option_type' => 'checkbox',
			'description' => esc_html__( 'check to use a link', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 53,
			'default'     => false,
			'transport'   => 'refresh',
			'sanitize'    => 'wp_validate_boolean',
		),
		'canuckcp_section15_box4_button_link'              => array(
			'name'        => 'canuckcp_section15_box4_button_link',
			'title'       => esc_html__( 'Section 15-Box 4-Link URL', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'Format:http://your.website.url/page/', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 54,
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_url_raw',
		),
		'canuckcp_section15_box4_button_icon'              => array(
			'name'        => 'canuckcp_section15_box4_button_icon',
			'title'       => esc_html__( 'Use a button font icon', 'canuck-cp' ),
			'option_type' => 'select',
			'choices'     => canuckcp_icon_select(),
			'description' => esc_html__( 'The icon should load in the previewer', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 55,
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize'    => 'esc_html',
		),
		'canuckcp_section15_box4_button_title'             => array(
			'name'        => 'canuckcp_section15_box4_button_title',
			'title'       => esc_html__( 'Section 15-Box 4-Link Label', 'canuck-cp' ),
			'option_type' => 'text',
			'description' => esc_html__( 'html allowed, use single quotes for classes. Note: Leave this blank to use image or icon as the link. Default : more', 'canuck-cp' ),
			'section'     => 'home_section_15',
			'priority'    => 56,
			'default'     => esc_html__( 'more', 'canuck-cp' ),
			'transport'   => 'refresh',
			'sanitize'    => 'wp_kses_post',
		),
	);
	return apply_filters( 'canuckcp_get_customizer_option_parameters', $options );
}

/**
 * Register set up the options.
 *
 * @param array $wp_customize global array.
 */
function canuckcp_customize_register( $wp_customize ) {
	global $wp_customize;
	// Start by adding custom controls.
	canuckcp_add_custom_controls();
	// Set up Customizer Panels and Sections.
	canuckcp_setup_panels_sections();
	// Set up the options.
	$canuckcp_customize_options = canuckcp_get_customizer_option_partameters();

	foreach ( $canuckcp_customize_options as $canuckcp_option ) {
		// Add option setting.
		canuckcp_add_setting_theme_mod( $canuckcp_option );
		// Add option control.
		canuckcp_add_control_theme_mod( $canuckcp_option );
	}
	if ( is_child_theme() ) {
		$wp_customize->add_setting(
			'canuckcp_import_parent_theme_options',
			array(
				'default'           => false,
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'theme_supports'    => '',
				'transport'         => 'refresh',
				'sanitize_callback' => 'wp_validate_boolean',
			)
		);
		$wp_customize->add_control(
			'canuckcp_import_parent_theme_options',
			array(
				'label'       => esc_html__( 'Import Parent Theme Options', 'canuck-cp' ),
				'section'     => 'general_backup_options',
				'settings'    => 'canuckcp_import_parent_theme_options',
				'type'        => 'checkbox',
				'description' => esc_html__( 'This option is being displayed because you are using a child theme.', 'canuck-cp' ) . ' ' .
								esc_html__( 'When you initially set up a child theme, all options are reset to defaults.', 'canuck-cp' ) . ' ' .
								esc_html__( 'If you check the box above and then "Save and Publish", all Canuck custom options from the parent theme will be imported to the child theme. ', 'canuck-cp' ) . '<br/><br/>' .
								esc_html__( 'Options that are set to the default value in the child theme will be overwritten by options in the Parent Theme that are not default. ', 'canuck-cp' ) .
								esc_html__( 'Only use for initial set up of the child theme, and do not use again or you may lose default settings you wish to keep.', 'canuck-cp' ) . '<br/><br/>' .
								'<span style="color:red">' . esc_html__( 'Un-check the box and "Save & Publish" after you do the import to prevent it from happening again.', 'canuck-cp' ) . '</span><br/><br/>',
				'priority'    => 2,
			)
		);
	}
}
add_action( 'customize_register', 'canuckcp_customize_register' );

/**
 * SETUP PANELS AND SECTIONS
 *
 * This helper function sets up panels and sections for Theme Customizer.
 */
function canuckcp_setup_panels_sections() {
	global $wp_customize;
	$groups = array();
	$group  = array();
	$groups = canuckcp_get_customizer_groups();
	foreach ( $groups as $group ) {
		// Add panel.
		$wp_customize->add_panel(
			$group['name'],
			array(
				'priority'       => $group['priority'],
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => $group['title'],
				'description'    => $group['description'],
			)
		);
		// Add sections in panel.
		foreach ( $group['sections'] as $section ) {
			$wp_customize->add_section(
				$section['name'],
				array(
					'priority'       => $section['priority'],
					'capability'     => 'edit_theme_options',
					'theme_supports' => '',
					'title'          => $section['title'],
					'description'    => $section['description'],
					'panel'          => $group['name'],
				)
			);
		}
	}
}

/**
 * ADD SETTING THEME MOD TABLE
 *
 * This helper function loads adds a setting in Theme Customizer.
 * This setting function applies to options with 'setting_type'=>'theme_mod'.
 *
 * -------- capability --------------------------------------------------------------.
 * Note that capability is set to 'edit_theme_options' and will apply to all settings.
 * If you want to add different capabilities to each setting then change it to
 * $canuckcp_option['capability'] and add 'capability' => 'capability you want' to the
 * options array below.
 * -------- theme_supports ----------------------------------------------------------.
 * Note that theme_supports is set to '' and will apply to all settings.
 * If you want to add theme_cupports to each setting then change it to
 * $canuckcp_option['supports'] and add 'supports' => 'support you want' to the
 * options array below.
 * -------- sanitize_js_callback ----------------------------------------------------------.
 * Note that sanitize_js_callback is commented out. I initially set to '', but themecheck
 * was giving errors, and I was informed to just comment it out.
 * If you want to add sanitize_js_callback to each setting then change it to
 * $canuckcp_option['sanitize_js_callback'] and add 'sanitize_js_callback' => 'your js callback'
 * to the options array below.
 * ----------------------------------------------------------------------------------.
 * ref: https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_setting.
 *
 * @param array $canuckcp_option contains the custom option parameters.
 */
function canuckcp_add_setting_theme_mod( $canuckcp_option ) {
	global $wp_customize;
	// Add_setting for option.
	$wp_customize->add_setting(
		$canuckcp_option['name'],
		array(
			'default'           => $canuckcp_option['default'],
			'capability'        => 'edit_theme_options',
			'theme_supports'    => '',
			'transport'         => $canuckcp_option['transport'],
			'sanitize_callback' => $canuckcp_option['sanitize'],
		)
	);
}

/**
 * ADD CONTROL THEME MOD TABLE
 *
 * This helper function adds a control for Theme Customizer.
 * This function applies to options with 'setting_type'=>'theme_mod'.
 *
 * ref:https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control.
 *
 * @param array $canuckcp_option contains the custom option parameters.
 */
function canuckcp_add_control_theme_mod( $canuckcp_option ) {
	global $wp_customize;
	if ( 'text' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			$canuckcp_option['name'],
			array(
				'label'       => $canuckcp_option['title'],
				'section'     => $canuckcp_option['section'],
				'settings'    => $canuckcp_option['name'],
				'type'        => $canuckcp_option['option_type'],
				'description' => $canuckcp_option['description'],
				'priority'    => $canuckcp_option['priority'],
			)
		);
	} elseif ( 'textarea' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			$canuckcp_option['name'],
			array(
				'label'       => $canuckcp_option['title'],
				'section'     => $canuckcp_option['section'],
				'settings'    => $canuckcp_option['name'],
				'type'        => $canuckcp_option['option_type'],
				'description' => $canuckcp_option['description'],
				'priority'    => $canuckcp_option['priority'],
			)
		);
	} elseif ( 'checkbox' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			$canuckcp_option['name'],
			array(
				'label'       => $canuckcp_option['title'],
				'section'     => $canuckcp_option['section'],
				'settings'    => $canuckcp_option['name'],
				'type'        => $canuckcp_option['option_type'],
				'description' => $canuckcp_option['description'],
				'priority'    => $canuckcp_option['priority'],
			)
		);
	} elseif ( 'radio' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			$canuckcp_option['name'],
			array(
				'label'       => $canuckcp_option['title'],
				'section'     => $canuckcp_option['section'],
				'settings'    => $canuckcp_option['name'],
				'type'        => $canuckcp_option['option_type'],
				'description' => $canuckcp_option['description'],
				'priority'    => $canuckcp_option['priority'],
				'choices'     => $canuckcp_option['choices'],
			)
		);
	} elseif ( 'select' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			$canuckcp_option['name'],
			array(
				'label'       => $canuckcp_option['title'],
				'section'     => $canuckcp_option['section'],
				'settings'    => $canuckcp_option['name'],
				'type'        => $canuckcp_option['option_type'],
				'description' => $canuckcp_option['description'],
				'priority'    => $canuckcp_option['priority'],
				'choices'     => $canuckcp_option['choices'],
			)
		);
	} elseif ( 'range' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			$canuckcp_option['name'],
			array(
				'label'       => $canuckcp_option['title'],
				'section'     => $canuckcp_option['section'],
				'settings'    => $canuckcp_option['name'],
				'type'        => $canuckcp_option['option_type'],
				'description' => $canuckcp_option['description'],
				'priority'    => $canuckcp_option['priority'],
				'input_attrs' => $canuckcp_option['choices'],
			)
		);
	} elseif ( 'color' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$canuckcp_option['name'],
				array(
					'label'       => $canuckcp_option['title'],
					'section'     => $canuckcp_option['section'],
					'settings'    => $canuckcp_option['name'],
					'type'        => $canuckcp_option['option_type'],
					'description' => $canuckcp_option['description'],
					'priority'    => $canuckcp_option['priority'],
				)
			)
		);
	} elseif ( 'image' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				$canuckcp_option['name'],
				array(
					'label'       => $canuckcp_option['title'],
					'section'     => $canuckcp_option['section'],
					'settings'    => $canuckcp_option['name'],
					'type'        => $canuckcp_option['option_type'],
					'description' => $canuckcp_option['description'],
					'priority'    => $canuckcp_option['priority'],
				)
			)
		);
	} elseif ( 'upload' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			new WP_Customize_Upload_Control(
				$wp_customize,
				$canuckcp_option['name'],
				array(
					'label'       => $canuckcp_option['title'],
					'section'     => $canuckcp_option['section'],
					'settings'    => $canuckcp_option['name'],
					'type'        => $canuckcp_option['option_type'],
					'description' => $canuckcp_option['description'],
					'priority'    => $canuckcp_option['priority'],
				)
			)
		);
	} elseif ( 'scat' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			new Canuck_Category_Dropdown_Custom_Control(
				$wp_customize,
				$canuckcp_option['name'],
				array(
					'label'       => $canuckcp_option['title'],
					'section'     => $canuckcp_option['section'],
					'settings'    => $canuckcp_option['name'],
					'type'        => $canuckcp_option['option_type'],
					'description' => $canuckcp_option['description'],
					'priority'    => $canuckcp_option['priority'],
				)
			)
		);
	} elseif ( 'stag' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			new Canuck_Tags_Dropdown_Custom_Control(
				$wp_customize,
				$canuckcp_option['name'],
				array(
					'label'       => $canuckcp_option['title'],
					'section'     => $canuckcp_option['section'],
					'settings'    => $canuckcp_option['name'],
					'type'        => $canuckcp_option['option_type'],
					'description' => $canuckcp_option['description'],
					'priority'    => $canuckcp_option['priority'],
				)
			)
		);
	} elseif ( 'mcat' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			new Canuck_Category_Checkboxes_Control(
				$wp_customize,
				$canuckcp_option['name'],
				array(
					'label'       => $canuckcp_option['title'],
					'section'     => $canuckcp_option['section'],
					'settings'    => $canuckcp_option['name'],
					'type'        => $canuckcp_option['option_type'],
					'description' => $canuckcp_option['description'],
					'priority'    => $canuckcp_option['priority'],
				)
			)
		);
	} elseif ( 'fa' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			new Canuck_Customizer_Fontawesome_Control(
				$wp_customize,
				$canuckcp_option['name'],
				array(
					'label'       => $canuckcp_option['title'],
					'section'     => $canuckcp_option['section'],
					'settings'    => $canuckcp_option['name'],
					'type'        => $canuckcp_option['option_type'],
					'description' => $canuckcp_option['description'],
					'priority'    => $canuckcp_option['priority'],
					'choices'     => $canuckcp_option['choices'],
				)
			)
		);
	} elseif ( 'radio_image' === $canuckcp_option['option_type'] ) {
		$wp_customize->add_control(
			new Canuck_Custom_Radio_Image_Control(
				$wp_customize,
				$canuckcp_option['name'],
				array(
					'label'       => $canuckcp_option['title'],
					'section'     => $canuckcp_option['section'],
					'settings'    => $canuckcp_option['name'],
					'type'        => $canuckcp_option['option_type'],
					'description' => $canuckcp_option['description'],
					'priority'    => $canuckcp_option['priority'],
					'choices'     => $canuckcp_option['choices'],
				)
			)
		);
	}
}
/**
 * CUSTOM CONTROLS
 *
 * This helper function loads the Custom Controls for Theme Customizer
 */
function canuckcp_add_custom_controls() {
	if ( class_exists( 'WP_Customize_Control' ) ) {
		/**
		 * Class to create a custom category control.
		 *
		 * Source: https://github.com/bueltge/Wordpress-Theme-Customizer-Custom-Controls.
		 */
		class Canuck_Category_Dropdown_Custom_Control extends WP_Customize_Control {
			/**
			 * Render Content
			 */
			public function render_content() {
				?>
				<label>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
					<select <?php $this->link(); ?>>
						<?php
						$args = array();
						$cats = get_categories( $args );
						foreach ( $cats as $cat ) {
							echo '<option value="' . esc_attr( $cat->name ) . '"' . selected( $this->value(), $cat->name ) . '>' . esc_html( $cat->name ) . '</option>';
						}
						?>
					</select>
				</label>
				<?php
			}
		}
	}

	if ( class_exists( 'WP_Customize_Control' ) ) {
		/**
		 * Class to create a custom tags control.
		 * Modified from //source https://github.com/bueltge/Wordpress-Theme-Customizer-Custom-Controls.
		 */
		class Canuck_Tags_Dropdown_Custom_Control extends WP_Customize_Control {// phpcs:ignore
			/**
			 * Render the content on the theme customizer page
			 */
			public function render_content() {
				?>
				<label>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
					<select <?php $this->link(); ?>>
						<?php
						$tags = get_tags();
						foreach ( $tags as $tag ) {
							echo '<option value="' . esc_attr( $tag->name ) . '" ' . selected( $this->value, $tag->name ) . '>' . esc_html( $tag->name ) . '</option>';
						}
						?>
					</select>
				</label>
				<?php
			}
		}
	}

	if ( class_exists( 'WP_Customize_Control' ) ) {
		/**
		 * Adds multiple category selection support to the theme customizer via checkboxes.
		 *
		 * The category IDs are saved in the database as a comma separated string.
		 *
		 * ref: http://themefoundation.com/customizer-multiple-category-control/
		 */
		// phpcs:ignore
		class Canuck_Category_Checkboxes_Control extends WP_Customize_Control {// phpcs:ignore
			/**
			 * Declare the control type.
			 *
			 * @access public
			 * @var string
			 */
			public $type = 'category-checkboxes';
			/**
			 * Enqueue control js.
			 */
			public function enqueue() {
				wp_enqueue_script( 'canuck-customize-mcat', get_template_directory_uri() . '/js/kha-customize-mcat.js', array( 'jquery' ), CANUCKCP_VERSION );// phpcs:ignore
			}
			/**
			 * Render the content.
			 */
			public function render_content() {
				// Display checkbox heading and description.
				?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php
				// Displays category checkboxes.
				foreach ( get_categories() as $category ) {
					echo '<label><input type="checkbox" name="category-' . esc_attr( $category->term_id ) . '" id="category-' . esc_attr( $category->term_id ) . '" class="cstmzr-category-checkbox"> ' . esc_html( $category->cat_name ) . '</label><br>';
				}
				// Loads the hidden input field that stores the saved category list.
				?>
				<input type="hidden" id="<?php echo esc_attr( $this->id ); ?>" class="cstmzr-hidden-categories" <?php esc_url( $this->link() ); ?> value="<?php echo esc_attr( $this->value() ); ?>">
				<?php
			}
		}
	}

	if ( class_exists( 'WP_Customize_Control' ) ) {
		/**
		 * Create a Radio-Image control
		 *
		 * This class incorporates code from the Kirki Customizer Framework and from a tutorial
		 * written by Otto Wood.
		 *
		 * The Kirki Customizer Framework, Copyright Aristeides Stathopoulos (@aristath),
		 * is licensed under the terms of the GNU GPL, Version 2 (or later).
		 *
		 * @link https://github.com/reduxframework/kirki/
		 * @link http://ottopress.com/2012/making-a-custom-control-for-the-theme-customizer/
		 */
		class Canuck_Custom_Radio_Image_Control extends WP_Customize_Control {// phpcs:ignore
			/**
			 * Declare the control type.
			 *
			 * @access public
			 * @var string
			 */
			public $type = 'radio_image';
			/**
			 * Enqueue scripts and styles for the custom control.
			 *
			 * Scripts are hooked at {@see 'customize_controls_enqueue_scripts'}.
			 *
			 * Note, you can also enqueue stylesheets here as well. Stylesheets are hooked
			 * at 'customize_controls_print_styles'.
			 *
			 * @access public
			 */
			public function enqueue() {
				wp_enqueue_script( 'jquery-ui-button' );
			}
			/**
			 * Render the control to be displayed in the Customizer.
			 */
			public function render_content() {
				if ( empty( $this->choices ) ) {
					return;
				}
				$name = '_customize-radio-' . $this->id;
				?>
				<span class="customize-control-title">
					<?php echo esc_attr( $this->label ); ?>
					<?php
					if ( ! empty( $this->description ) ) {
						?>
						<span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>
						<?php
					}
					?>
				</span>
				<div id="input_<?php echo esc_attr( $this->id ); ?>" class="image">
					<?php
					foreach ( $this->choices as $value => $label ) {
						?>
						<input class="image-select" type="radio" value="<?php echo esc_attr( $value ); ?>" 
								id="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>" 
								name="<?php echo esc_attr( $name ); ?>" 
								<?php $this->link(); ?>
								<?php checked( $this->value(), $value ); ?>>
							<label for="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>">
								<img src="<?php echo esc_url( $label ); ?>" alt="<?php echo esc_attr( $value ); ?>" title="<?php echo esc_attr( $value ); ?>">
							</label>
						</input>
						<?php
					}
					?>
				</div>
				<script>jQuery(document).ready(function(jQuery) { jQuery( '[id="input_<?php echo esc_attr( $this->id ); ?>"]' ).buttonset(); });</script>
				<?php
			}
		}
	}
	if ( class_exists( 'WP_Customize_Control' ) ) {
		/**
		 * Class to add a Fontawesome dropdown selection c/w icons
		 */
		class Canuck_Customizer_Fontawesome_Control extends WP_Customize_Control {// phpcs:ignore
			/**
			 * Declare the control type.
			 *
			 * @access public
			 * @var string
			 */
			public $type = 'canuck-icon-picker';
			/**
			 * Enqueue css
			 */
			public function enqueue() {
				wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', array(), CANUCKCP_VERSION );
			}
			/**
			 * Render content.
			 */
			public function render_content() {
				if ( empty( $this->choices ) ) {
					return;
				}
				?>
				<label>
					<?php
					if ( ! empty( $this->label ) ) {
						?>
						<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
						<?php
					}
					if ( ! empty( $this->description ) ) {
						?>
						<span class="description customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>
						<?php
					}
					?>
					<select <?php $this->link(); ?> style="font-family: 'FontAwesome', Arial;">
						<?php
						foreach ( $this->choices as $value => $label ) {
							// Note $label must not be escaped or it will not work, $label is from a hardcoded array so escaping is not really necessary.
							echo '<option value="' . $value . '"' . selected( $this->value(), $value, false ) . '>' . $label . ' ' . wp_kses_post( $value ) . '</option>';// phpcs:ignore
						}
						?>
					</select>
				</label>
				<?php
			}
		}
	}
}
/**
 * This function adds some styles to the WordPress Customizer
 */
function canuckcp_customizer_styles() {
	wp_enqueue_style( 'canuck-template', get_theme_file_uri( '/css/customizer.css' ), array(), '1.0' );
}
add_action( 'customize_controls_print_styles', 'canuckcp_customizer_styles', 999 );

/**
 * Function to back up options to a post..
 */
function canuckcp_backup_options() {
	$canuckcp_backup_options_to_post = get_theme_mod( 'canuckcp_backup_options_to_post' ) ? true : false;
	if ( true === $canuckcp_backup_options_to_post ) {
		$postarray = array();
		$content   = '';
		$content  .= '<p>' . esc_html__( 'This page contains a backup of content created by the Canuck CP ClassicPress Theme. The purpose for the backup is to prevent content loss on theme switch. When a user switches themes this content will still be available to the user when setting up their site on the new theme. Please note the following : ', 'canuck-cp' ) . PHP_EOL;
		$content  .= ' * ' . esc_html__( 'Leave this page as private, available only to users with admin priviledges.', 'canuck-cp' ) . PHP_EOL;
		$content  .= ' * ' . esc_html__( 'You can delete this page any time and regenerate it from within the Canuck CP options menu, General section.', 'canuck-cp' ) . '</p>' . PHP_EOL;
		$content  .= PHP_EOL;
		// General post setup.
		$postarray['post_title']     = 'Canuck CP Created Content Backup'; // phpcs:ignore
		$postarray['post_type']      = 'page';
		$postarray['post_status']    = 'private';
		$postarray['comment_status'] = 'closed';
		$content                    .= canuckcp_general_options_backup();
		$content                    .= canuckcp_social_links_backup();
		$content                    .= canuckcp_layout_options_backup();
		$content                    .= canuckcp_header_options_backup();
		$content                    .= canuckcp_footer_options_backup();
		$content                    .= canuckcp_style_options_backup();
		$content                    .= canuckcp_blog_options_backup();
		$content                    .= canuckcp_home_options_backup();
		$content                    .= canuckcp_custom_widget_content_backup();
		$page                        = get_page_by_title( 'Canuck CP Created Content Backup' );
		if ( isset( $page ) && '' !== $page->ID ) {
			$postarray['ID']           = $page->ID;
			$postarray['post_content'] = $content;
			wp_update_post( $postarray );
		} else {
			$postarray['ID']           = 0;
			$postarray['post_content'] = $content;
			wp_insert_post( $postarray );
		}
	}
}
add_action( 'customize_save_after', 'canuckcp_backup_options' );

/**
 * Canuck CP General Options Backup.
 */
function canuckcp_general_options_backup() {
	$include_pinit                  = get_theme_mod( 'canuckcp_include_pinit', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_exclude_categories    = esc_html( get_theme_mod( 'canuckcp_exclude_categories', '' ) );
	$canuckcp_flex_slider_auto      = get_theme_mod( 'canuckcp_include_pinit', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_flex_slider_effect    = esc_html( get_theme_mod( 'canuckcp_flex_slider_effect', 'fade' ) );
	$canuckcp_flex_slider_pause     = intval( get_theme_mod( 'canuckcp_flex_slider_pause', '5000' ) );
	$canuckcp_flex_slider_trans     = intval( get_theme_mod( 'canuckcp_flex_slider_trans', '600' ) );
	$canuckcp_disable_widget_slider = get_theme_mod( 'canuckcp_disable_widget_slider', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_disable_colorboxjs    = get_theme_mod( 'canuckcp_disable_colorboxjs', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_disable_fitvidsjs     = get_theme_mod( 'canuckcp_disable_fitvidsjs', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_disable_smoothscroll  = get_theme_mod( 'canuckcp_disable_smoothscroll', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_use_lazyload          = get_theme_mod( 'canuckcp_use_lazyload', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_disable_scrollreveal  = get_theme_mod( 'canuckcp_disable_scrollreveal', false ) ? 'Checked' : 'Unchecked';
	$phone                          = esc_html( get_theme_mod( 'canuckcp_contact_phone', '' ) );
	$contact_page                   = esc_url( get_theme_mod( 'canuckcp_contact_page', '' ) );
	// get category ids.
	$category_ids   = explode( ',', $canuckcp_exclude_categories );
	$category_names = array();
	// display options.
	$string  = '';
	$string .= '<h2 style="line-height:1em;background-color:#eaeaea;">' . esc_html__( 'Canuck CP General Options', 'canuck-cp' ) . '</h2>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Miscellaneous Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Include Pinterest Pinit: ', 'canuck-cp' ) . $include_pinit . '</span>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Exclude Category IDs', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'IDs to exclude: ', 'canuck-cp' );
	foreach ( $category_ids as $id ) {
		$category_name = get_cat_name( $id );
		$string       .= $category_name . ',  ';
	}
	$string .= '</span>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Slider Options', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;">' . esc_html__( 'Feature Slider', 'canuck-cp' ) . '</h6>' . PHP_EOL;
	$string .= '<span style="line-height:1em;">' . esc_html__( 'Feature Slider Auto Mode: ', 'canuck-cp' ) . $canuckcp_flex_slider_auto . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Feature Slider Transition Effect: ', 'canuck-cp' ) . $canuckcp_flex_slider_effect . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Feature Slider Pause Time(milliseconds): ', 'canuck-cp' ) . $canuckcp_flex_slider_pause . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Feature Slider Transition Time(milliseconds): ', 'canuck-cp' ) . $canuckcp_flex_slider_trans . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;">' . esc_html__( 'Gallery Slider', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Gallery Slider Auto Mode: ', 'canuck-cp' ) . $canuckcp_flex_gallery_auto . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Gallery Slider Transition Effect: ', 'canuck-cp' ) . $canuckcp_flex_gallery_effect . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Gallery Slider Pause Time(milliseconds): ', 'canuck-cp' ) . '</span>' . $canuckcp_flex_gallery_pause . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Gallery Slider Transition Time(milliseconds): ', 'canuck-cp' ) . $canuckcp_flex_gallery_trans . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;">' . esc_html__( 'Widget Slider', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Disable the widget slider: ', 'canuck-cp' ) . $canuckcp_disable_widget_slider . '</span>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'jQuery Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Disable colorbox.js plugin: ', 'canuck-cp' ) . $canuckcp_disable_colorboxjs . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Disable fitvids.js plugin: ', 'canuck-cp' ) . $canuckcp_disable_fitvidsjs . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Disable smooth scroll js script: ', 'canuck-cp' ) . $canuckcp_disable_smoothscroll . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use Lazyload: ', 'canuck-cp' ) . $canuckcp_use_lazyload . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Disable scrollreveal.js plugin: ', 'canuck-cp' ) . $canuckcp_disable_scrollreveal . '</span>' . PHP_EOL;
	$string .= PHP_EOL;
	return $string;
}

/**
 * Canuck Social Links Backup.
 */
function canuckcp_social_links_backup() {
	$string     = '';
	$link1_name = esc_html( get_theme_mod( 'canuckcp_social_type1', '' ) );
	$link1_url  = esc_url( get_theme_mod( 'canuckcp_social_url1', '' ) );
	$link2_name = esc_html( get_theme_mod( 'canuckcp_social_type2', '' ) );
	$link2_url  = esc_url( get_theme_mod( 'canuckcp_social_url2', '' ) );
	$link3_name = esc_html( get_theme_mod( 'canuckcp_social_type3', '' ) );
	$link3_url  = esc_url( get_theme_mod( 'canuckcp_social_url3', '' ) );
	$link4_name = esc_html( get_theme_mod( 'canuckcp_social_type4', '' ) );
	$link4_url  = esc_url( get_theme_mod( 'canuckcp_social_url4', '' ) );
	$link5_name = esc_html( get_theme_mod( 'canuckcp_social_type5', '' ) );
	$link5_url  = esc_url( get_theme_mod( 'canuckcp_social_url5', '' ) );
	$link6_name = esc_html( get_theme_mod( 'canuckcp_social_type6', '' ) );
	$link6_url  = esc_url( get_theme_mod( 'canuckcp_social_url6', '' ) );
	$link7_name = esc_html( get_theme_mod( 'canuckcp_social_type7', '' ) );
	$link7_url  = esc_url( get_theme_mod( 'canuckcp_social_url7', '' ) );
	$link8_name = esc_html( get_theme_mod( 'canuckcp_social_type8', '' ) );
	$link8_url  = esc_url( get_theme_mod( 'canuckcp_social_url8', '' ) );
	$string    .= '<h2 style="line-height:1em;background-color:#eaeaea;">' . esc_html__( 'Canuck CP Social Links', 'canuck-cp' ) . '</h2>' . PHP_EOL;
	$string    .= '<span>' . esc_html__( 'Social Link 1 Name: ', 'canuck-cp' ) . $link1_name . ' , ' . esc_html__( 'Social Link 1 URL: ', 'canuck-cp' ) . $link1_url . '</span>' . PHP_EOL;
	$string    .= '<span>' . esc_html__( 'Social Link 2 Name: ', 'canuck-cp' ) . $link2_name . ' , ' . esc_html__( 'Social Link 2 URL: ', 'canuck-cp' ) . $link2_url . '</span>' . PHP_EOL;
	$string    .= '<span>' . esc_html__( 'Social Link 3 Name: ', 'canuck-cp' ) . $link3_name . ' , ' . esc_html__( 'Social Link 3 URL: ', 'canuck-cp' ) . $link3_url . '</span>' . PHP_EOL;
	$string    .= '<span>' . esc_html__( 'Social Link 4 Name: ', 'canuck-cp' ) . $link4_name . ' , ' . esc_html__( 'Social Link 4 URL: ', 'canuck-cp' ) . $link4_url . '</span>' . PHP_EOL;
	$string    .= '<span>' . esc_html__( 'Social Link 5 Name: ', 'canuck-cp' ) . $link5_name . ' , ' . esc_html__( 'Social Link 5 URL: ', 'canuck-cp' ) . $link5_url . '</span>' . PHP_EOL;
	$string    .= '<span>' . esc_html__( 'Social Link 6 Name: ', 'canuck-cp' ) . $link6_name . ' , ' . esc_html__( 'Social Link 6 URL: ', 'canuck-cp' ) . $link6_url . '</span>' . PHP_EOL;
	$string    .= '<span>' . esc_html__( 'Social Link 7 Name: ', 'canuck-cp' ) . $link7_name . ' , ' . esc_html__( 'Social Link 7 URL: ', 'canuck-cp' ) . $link7_url . '</span>' . PHP_EOL;
	$string    .= '<span>' . esc_html__( 'Social Link 8 Name: ', 'canuck-cp' ) . $link8_name . ' , ' . esc_html__( 'Social Link 8 URL: ', 'canuck-cp' ) . $link8_url . '</span>' . PHP_EOL;
	$string    .= PHP_EOL;
	return $string;
}

/**
 * Canuck Layout Options Backup.
 */
function canuckcp_layout_options_backup() {
	// get the options.
	$include_breadcrumbs         = get_theme_mod( 'canuckcp_breadcrumbs', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_use_feature        = get_theme_mod( 'canuckcp_use_feature', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_index_layout       = esc_html( get_theme_mod( 'canuckcp_index_layout', 'right_sidebar' ) );
	$canuckcp_index_title        = get_theme_mod( 'canuckcp_index_title', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_author_layout      = esc_html( get_theme_mod( 'canuckcp_author_layout', 'right_sidebar' ) );
	$canuckcp_include_author_bio = get_theme_mod( 'canuckcp_include_author_bio', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_category_layout    = esc_html( get_theme_mod( 'canuckcp_category_layout', 'right_sidebar' ) );
	$canuckcp_date_layout        = esc_html( get_theme_mod( 'canuckcp_date_layout', 'right_sidebar' ) );
	$canuckcp_search_layout      = esc_html( get_theme_mod( 'canuckcp_search_layout', 'right_sidebar' ) );
	$canuckcp_single_post_layout = esc_html( get_theme_mod( 'canuckcp_single_post_layout', 'right_sidebar' ) );
	$canuckcp_single_title       = get_theme_mod( 'canuckcp_single_title', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_single_sidebar_a   = esc_html( get_theme_mod( 'canuckcp_single_sidebar_a', 'blog-a' ) );
	$canuckcp_single_sidebar_b   = esc_html( get_theme_mod( 'canuckcp_single_sidebar_b', 'blog-b' ) );
	$canuckcp_tag_layout         = esc_html( get_theme_mod( 'canuckcp_tag_layout', 'right_sidebar' ) );
	$canuckcp_404_layout         = esc_html( get_theme_mod( 'canuckcp_404_layout', 'right_sidebar' ) );
	// display the options.
	$string  = '';
	$string .= '<h2 style="line-height:1em;background-color:#eaeaea;">' . esc_html__( 'Canuck CP Layouts', 'canuck-cp' ) . '</h2>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'General Layout Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Include Breadcrumbs: ', 'canuck-cp' ) . $include_breadcrumbs . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Include Feature Images: ', 'canuck-cp' ) . $canuckcp_use_feature . '</span>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Default Page Setup', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Layout Option: ', 'canuck-cp' ) . $canuckcp_index_layout . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Disable Title: ', 'canuck-cp' ) . $canuckcp_index_title . '</span>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Author Page Setup', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Layout Option: ', 'canuck-cp' ) . $canuckcp_author_layout . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Include author bio: ', 'canuck-cp' ) . $canuckcp_include_author_bio . '</span>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Category Page Setup', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Layout Option: ', 'canuck-cp' ) . $canuckcp_category_layout . '</span>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Date Page Setup', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Layout Option: ', 'canuck-cp' ) . $canuckcp_date_layout . '</span>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Search Page Setup', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Layout Option: ', 'canuck-cp' ) . $canuckcp_search_layout . '</span>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Single Page Setup', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Layout Option: ', 'canuck-cp' ) . $canuckcp_single_post_layout . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Disable Title: ', 'canuck-cp' ) . $canuckcp_single_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Sidebar A: ', 'canuck-cp' ) . $canuckcp_single_sidebar_a . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Sidebar B: ', 'canuck-cp' ) . $canuckcp_single_sidebar_b . '</span>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Tag Page Setup', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Layout Option: ', 'canuck-cp' ) . $canuckcp_tag_layout . '</span>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Error Page Setup', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Layout Option: ', 'canuck-cp' ) . $canuckcp_404_layout . '</span>' . PHP_EOL;
	$string .= PHP_EOL;
	return $string;
}

/**
 * Canuck Header Option Backup.
 */
function canuckcp_header_options_backup() {
	// get options.
	$canuckcp_image_header_background_color   = esc_html( get_theme_mod( 'canuckcp_image_header_background_color', '#000000' ) );
	$canuckcp_image_header_background_opacity = esc_html( get_theme_mod( 'canuckcp_image_header_background_opacity', '0.5' ) );
	$canuckcp_image_header_logo               = esc_url( get_theme_mod( 'canuckcp_image_header_logo', '' ) );
	$hrs                                      = esc_html( get_theme_mod( 'canuckcp_contact_hours', '' ) );
	$phone                                    = esc_html( get_theme_mod( 'canuckcp_contact_phone', '' ) );
	$contact_page                             = esc_url( get_theme_mod( 'canuckcp_contact_page', '' ) );
	// display options.
	$string  = '';
	$string .= '<h2 style="line-height:1em;background-color:#eaeaea;">' . esc_html__( 'Canuck CP Headers', 'canuck-cp' ) . '</h2>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Image background options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Header Background Color: ', 'canuck-cp' ) . '</span>' . $canuckcp_image_header_background_color . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Header Background Opacity: ', 'canuck-cp' ) . '</span>' . $canuckcp_image_header_background_opacity . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Logo to overlay image backgrounds: ', 'canuck-cp' ) . '</span>' . $canuckcp_image_header_logo . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Contact Information', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Hours of Operation: ', 'canuck-cp' ) . $hrs . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Phone Number: ', 'canuck-cp' ) . $phone . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Contact Page Link: ', 'canuck-cp' ) . $contact_page . '</span>' . PHP_EOL;
	$string .= PHP_EOL;
	return $string;
}

/**
 * Canuck Footer Options Backup.
 */
function canuckcp_footer_options_backup() {
	// get options.
	$canuckcp_show_footer_top_strip   = get_theme_mod( 'canuckcp_show_footer_top_strip', true ) ? 'Checked' : 'Unchecked';
	$canuckcp_show_footer             = get_theme_mod( 'canuckcp_show_footer', true ) ? 'Checked' : 'Unchecked';
	$canuckcp_footer_background_image = esc_url( get_theme_mod( 'canuckcp_footer_background_image', '' ) );
	$canuckcp_footer_overlay_opacity  = esc_html( get_theme_mod( 'canuckcp_footer_overlay_opacity', '0' ) );
	$canuckcp_footer_cols             = esc_html( get_theme_mod( 'canuckcp_footer_cols', '3' ) );
	$canuckcp_footer_background_color = esc_html( get_theme_mod( 'canuckcp_footer_background_color', '#161616' ) );
	$canuckcp_footer_text_color       = esc_html( get_theme_mod( 'canuckcp_footer_text_color', '#ffffff' ) );
	$canuckcp_footer_link_color       = esc_html( get_theme_mod( 'canuckcp_footer_link_color', '#c9c9c9' ) );
	$canuckcp_footer_link_hover_color = esc_html( get_theme_mod( 'canuckcp_footer_link_hover_color', '#ffffff' ) );
	$canuckcp_show_copyright_strip    = get_theme_mod( 'canuckcp_show_copyright_strip', true ) ? 'Checked' : 'Unchecked';
	$canuckcp_left_copyright_text     = esc_html( get_theme_mod( 'canuckcp_left_copyright_text', '' ) );
	$canuckcp_middle_copyright_text   = esc_html( get_theme_mod( 'canuckcp_middle_copyright_text', '' ) );
	$canuckcp_right_copyright_text    = esc_html( get_theme_mod( 'canuckcp_right_copyright_text', '' ) );
	// display options.
	$string  = '';
	$string .= '<h2 style="line-height:1em;background-color:#eaeaea;">' . esc_html__( 'Canuck CP Footer', 'canuck-cp' ) . '</h2>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Footer Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Show Contact/Social strip in footer: ', 'canuck-cp' ) . $canuckcp_show_footer_top_strip . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Show footer area: ', 'canuck-cp' ) . $canuckcp_show_footer . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Footer Background Image: ', 'canuck-cp' ) . $canuckcp_footer_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Footer-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_footer_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Select footer columns: ', 'canuck-cp' ) . $canuckcp_footer_cols . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Footer Background Color: ', 'canuck-cp' ) . $canuckcp_footer_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Footer Text Color: ', 'canuck-cp' ) . $canuckcp_footer_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Footer Link Color: ', 'canuck-cp' ) . $canuckcp_footer_link_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Footer Link Hover Color: ', 'canuck-cp' ) . $canuckcp_footer_link_color . '</span>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Copyright Strip Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Show Copyright Strip: ', 'canuck-cp' ) . $canuckcp_show_copyright_strip . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Copyright left text: ', 'canuck-cp' ) . $canuckcp_left_copyright_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Copyright middle text: ', 'canuck-cp' ) . $canuckcp_middle_copyright_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Copyright right text: ', 'canuck-cp' ) . $canuckcp_right_copyright_text . '</span>' . PHP_EOL;
	return $string;
}

/**
 * Canuck Style Option Backup.
 */
function canuckcp_style_options_backup() {
	// get options.
	$canuckcp_color_scheme         = esc_html( get_theme_mod( 'canuckcp_color_scheme', 'gray-pink' ) );
	$canuckcp_header_font          = esc_html( get_theme_mod( 'canuckcp_header_font', 'Open Sans' ) );
	$canuckcp_body_font            = esc_html( get_theme_mod( 'canuckcp_body_font', 'Open Sans' ) );
	$canuckcp_page_title_font      = esc_html( get_theme_mod( 'canuckcp_page_title_font', 'Open Sans' ) );
	$canuckcp_display_font_options = esc_html( get_theme_mod( 'canuckcp_display_font_options', 'auto' ) );
	// display options.
	$string  = '';
	$string .= '<h2 style="line-height:1em;background-color:#eaeaea;">' . esc_html__( 'Canuck CP Styles', 'canuck-cp' ) . '</h2>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Color Scheme: ', 'canuck-cp' ) . '</span>' . $canuckcp_color_scheme . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Font for Headers: ', 'canuck-cp' ) . '</span>' . $canuckcp_header_font . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Font for Body Text: ', 'canuck-cp' ) . '</span>' . $canuckcp_body_font . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Font for Page Titles: ', 'canuck-cp' ) . $canuckcp_page_title_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Font Display Loading Options: ', 'canuck-cp' ) . $canuckcp_display_font_options . '</span>' . PHP_EOL;
	$string .= PHP_EOL;
	return $string;
}

/**
 * Canuck Blog Option Backup.
 */
function canuckcp_blog_options_backup() {
	// get options.
	$canuckcp_blog_title                = esc_html( get_theme_mod( 'canuckcp_blog_title', 'Blog' ) );
	$canuckcp_blog_title_option         = get_theme_mod( 'canuckcp_blog_title_option', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_blog_layout               = esc_html( get_theme_mod( 'canuckcp_blog_layout', 'right_sidebar' ) );
	$canuckcp_blog_style                = esc_url( get_theme_mod( 'canuckcp_blog_style', 'top_feature' ) );
	$canuckcp_blog_feature              = esc_html( get_theme_mod( 'canuckcp_blog_feature', 'background_image' ) );
	$canuckcp_blog_feature_category     = esc_html( get_theme_mod( 'canuckcp_blog_feature_category', '' ) );
	$canuckcp_use_post_gallery_captions = get_theme_mod( 'canuckcp_use_post_gallery_captions', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_use_excerpts              = get_theme_mod( 'canuckcp_use_excerpts', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_excerpt_length            = esc_html( get_theme_mod( 'canuckcp_excerpt_length', '30' ) );
	$canuckcp_exclude_author            = get_theme_mod( 'canuckcp_exclude_author', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_exclude_timestamp         = get_theme_mod( 'canuckcp_exclude_timestamp', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_exclude_category          = get_theme_mod( 'canuckcp_exclude_category', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_exclude_tags              = get_theme_mod( 'canuckcp_exclude_tags', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_exclude_no_comments_link  = get_theme_mod( 'canuckcp_exclude_no_comments_link', false ) ? 'Checked' : 'Unchecked';
	// display options.
	$string  = '';
	$string .= '<h2 style="line-height:1em;background-color:#eaeaea;">' . esc_html__( 'Canuck CP Blog', 'canuck-cp' ) . '</h2>' . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'General Blog Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Blog Title: ', 'canuck-cp' ) . '</span>' . $canuckcp_blog_title . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Disable Title: ', 'canuck-cp' ) . '</span>' . $canuckcp_blog_title_option . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Layout Option: ', 'canuck-cp' ) . '</span>' . $canuckcp_blog_layout . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Blog Style: ', 'canuck-cp' ) . '</span>' . $canuckcp_blog_style . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Blog Feature Options: ', 'canuck-cp' ) . '</span>' . $canuckcp_blog_feature . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Feature Slider Category: ', 'canuck-cp' ) . '</span>' . $canuckcp_blog_feature_category . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use Post Galley Captions: ', 'canuck-cp' ) . '</span>' . $canuckcp_use_post_gallery_captions . PHP_EOL;
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Post Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use excerpts: ', 'canuck-cp' ) . $canuckcp_use_excerpts . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Excerpt Length: ', 'canuck-cp' ) . $canuckcp_excerpt_length . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Exclude author name in blog posts: ', 'canuck-cp' ) . $canuckcp_exclude_author . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Exclude date in blog posts: ', 'canuck-cp' ) . $canuckcp_exclude_timestamp . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Exclude categories in blog posts: ', 'canuck-cp' ) . $canuckcp_exclude_category . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Exclude tags in blog posts: ', 'canuck-cp' ) . $canuckcp_exclude_tags . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Exclude No Comments link: ', 'canuck-cp' ) . $canuckcp_exclude_no_comments_link . '</span>' . PHP_EOL;
	$string .= PHP_EOL;
	return $string;
}

/**
 * Canuck Option Content: Canuck Home Page.
 */
function canuckcp_home_options_backup() {
	$string  = '';
	$string .= '<h2 style="line-height:1em;background-color:#eaeaea;">' . esc_html__( 'Canuck CP Home Page', 'canuck-cp' ) . '</h2>' . PHP_EOL;
	// Home Feature Options =============================================================================================================================================.
	$canuckcp_home_feature          = esc_html( get_theme_mod( 'canuckcp_home_feature', 'background_image' ) );
	$canuckcp_home_feature_category = esc_html( get_theme_mod( 'canuckcp_home_feature_category', '' ) );
	$canuckcp_home_title            = esc_html( get_theme_mod( 'canuckcp_home_title', '' ) );
	$canuckcp_home_description      = esc_html( get_theme_mod( 'canuckcp_home_description', '' ) );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Home Feature Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Feature: ', 'canuck-cp' ) . $canuckcp_home_feature . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Slider Feature Category: ', 'canuck-cp' ) . $canuckcp_home_feature_category . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Title: ', 'canuck-cp' ) . $canuckcp_home_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Description: ', 'canuck-cp' ) . $canuckcp_home_description . '</span>' . PHP_EOL;
	// Home Layout Options =============================================================================================================================================.
	$canuckcp_home_area_1  = esc_html( get_theme_mod( 'canuckcp_home_area_1', 'none' ) );
	$canuckcp_home_area_2  = esc_html( get_theme_mod( 'canuckcp_home_area_2', 'none' ) );
	$canuckcp_home_area_3  = esc_html( get_theme_mod( 'canuckcp_home_area_3', 'none' ) );
	$canuckcp_home_area_4  = esc_html( get_theme_mod( 'canuckcp_home_area_4', 'none' ) );
	$canuckcp_home_area_5  = esc_html( get_theme_mod( 'canuckcp_home_area_5', 'none' ) );
	$canuckcp_home_area_6  = esc_html( get_theme_mod( 'canuckcp_home_area_6', 'none' ) );
	$canuckcp_home_area_7  = esc_html( get_theme_mod( 'canuckcp_home_area_7', 'none' ) );
	$canuckcp_home_area_8  = esc_html( get_theme_mod( 'canuckcp_home_area_8', 'none' ) );
	$canuckcp_home_area_9  = esc_html( get_theme_mod( 'canuckcp_home_area_9', 'none' ) );
	$canuckcp_home_area_10 = esc_html( get_theme_mod( 'canuckcp_home_area_10', 'none' ) );
	$canuckcp_home_area_11 = esc_html( get_theme_mod( 'canuckcp_home_area_11', 'none' ) );
	$canuckcp_home_area_12 = esc_html( get_theme_mod( 'canuckcp_home_area_12', 'none' ) );
	$canuckcp_home_area_13 = esc_html( get_theme_mod( 'canuckcp_home_area_13', 'none' ) );
	$canuckcp_home_area_14 = esc_html( get_theme_mod( 'canuckcp_home_area_14', 'none' ) );
	$canuckcp_home_area_15 = esc_html( get_theme_mod( 'canuckcp_home_area_15', 'none' ) );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Home Layout Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 1: ', 'canuck-cp' ) . $canuckcp_home_area_1 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 2: ', 'canuck-cp' ) . $canuckcp_home_area_2 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 3: ', 'canuck-cp' ) . $canuckcp_home_area_3 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 4: ', 'canuck-cp' ) . $canuckcp_home_area_4 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 5: ', 'canuck-cp' ) . $canuckcp_home_area_5 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 6: ', 'canuck-cp' ) . $canuckcp_home_area_6 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 7: ', 'canuck-cp' ) . $canuckcp_home_area_7 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 8: ', 'canuck-cp' ) . $canuckcp_home_area_8 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 9: ', 'canuck-cp' ) . $canuckcp_home_area_9 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 10: ', 'canuck-cp' ) . $canuckcp_home_area_10 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 11: ', 'canuck-cp' ) . $canuckcp_home_area_11 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 12: ', 'canuck-cp' ) . $canuckcp_home_area_12 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 13: ', 'canuck-cp' ) . $canuckcp_home_area_13 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 14: ', 'canuck-cp' ) . $canuckcp_home_area_14 . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Home Page Area 15: ', 'canuck-cp' ) . $canuckcp_home_area_15 . '</span>' . PHP_EOL;
	// Section 1 Options ===============================================================================================================================================.
	$canuckcp_section1_usage                         = esc_html( get_theme_mod( 'canuckcp_section1_usage', 'normal' ) );
	$canuckcp_section1_background_image              = esc_url( get_theme_mod( 'canuckcp_section1_background_image', '' ) );
	$canuckcp_section1_overlay_opacity               = esc_html( get_theme_mod( 'canuckcp_section1_overlay_opacity', 0 ) );
	$canuckcp_section1_use_parallax                  = get_theme_mod( 'canuckcp_section1_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section1_background_color              = esc_html( get_theme_mod( 'canuckcp_section1_background_color', '#ffffff' ) );
	$canuckcp_section1_background_color_opacity      = esc_html( get_theme_mod( 'canuckcp_section1_background_color_opacity', '1' ) );
	$canuckcp_section1_text_color                    = esc_html( get_theme_mod( 'canuckcp_section1_text_color', '#4c4c4c' ) );
	$canuckcp_section1_text                          = esc_html( get_theme_mod( 'canuckcp_section1_text', '' ) );
	$canuckcp_section1_shortcode                     = esc_html( get_theme_mod( 'canuckcp_section1_shortcode', '' ) );
	$canuckcp_include_section1_button                = get_theme_mod( 'canuckcp_include_section1_button', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section1_button_icon                   = esc_html( get_theme_mod( 'canuckcp_section1_button_icon', '' ) );
	$canuckcp_section1_button_name                   = esc_html( get_theme_mod( 'canuckcp_section1_button_name', 'more' ) );
	$canuckcp_section1_button_link                   = esc_url( get_theme_mod( 'canuckcp_section1_button_link', '' ) );
	$canuckcp_section1_button_background_color       = esc_html( get_theme_mod( 'canuckcp_section1_button_background_color', '#ffffff' ) );
	$canuckcp_section1_button_text_color             = esc_html( get_theme_mod( 'canuckcp_section1_button_text_color', '#474747' ) );
	$canuckcp_section1_button_hover_background_color = esc_html( get_theme_mod( 'canuckcp_section1_button_hover_background_color', '#474747' ) );
	$canuckcp_section1_button_hover_text_color       = esc_html( get_theme_mod( 'canuckcp_section1_button_hover_text_color', '#ffffff' ) );
	$canuckcp_section1_shortcode_encoded             = str_replace( '[', '*left-square-bracket*', $canuckcp_section1_shortcode, );
	$canuckcp_section1_shortcode_encoded             = str_replace( ']', '*right-square-bracket*', $canuckcp_section1_shortcode_encoded, );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Sec 1 Text/Shortcode/Widget Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Usage Options: ', 'canuck-cp' ) . $canuckcp_section1_usage . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Background Image: ', 'canuck-cp' ) . $canuckcp_section1_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section1_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section1_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Background Color: ', 'canuck-cp' ) . $canuckcp_section1_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section1_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Text Color: ', 'canuck-cp' ) . $canuckcp_section1_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Content: ', 'canuck-cp' ) . $canuckcp_section1_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Shortcode: ', 'canuck-cp' ) . $canuckcp_section1_shortcode_encoded . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Link: ', 'canuck-cp' ) . $canuckcp_include_section1_button . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section1_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Button Label: ', 'canuck-cp' ) . $canuckcp_section1_button_name . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Button URI: ', 'canuck-cp' ) . $canuckcp_section1_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Button Background Color: ', 'canuck-cp' ) . $canuckcp_section1_button_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Button Text Color: ', 'canuck-cp' ) . $canuckcp_section1_button_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Button Hover Background Color: ', 'canuck-cp' ) . $canuckcp_section1_button_hover_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 1-Button Hover Text Color: ', 'canuck-cp' ) . $canuckcp_section1_button_hover_text_color . '</span>' . PHP_EOL;
	// Section 2 Options ===============================================================================================================================================.
	$canuckcp_section2_text_color                    = esc_html( get_theme_mod( 'canuckcp_section2_text_color', '#4c4c4c' ) );
	$canuckcp_section2_background_image              = esc_url( get_theme_mod( 'canuckcp_section2_background_image', '' ) );
	$canuckcp_section2_overlay_opacity               = esc_html( get_theme_mod( 'canuckcp_section2_overlay_opacity', '0' ) );
	$canuckcp_section2_use_parallax                  = get_theme_mod( 'canuckcp_section2_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section2_background_color              = esc_html( get_theme_mod( 'canuckcp_section2_background_color', '#ffffff' ) );
	$canuckcp_section2_background_color_opacity      = esc_html( get_theme_mod( 'canuckcp_section2_background_color_opacity', '1' ) );
	$canuckcp_section2_button_background_color       = esc_html( get_theme_mod( 'canuckcp_section2_button_background_color', '#ffffff' ) );
	$canuckcp_section2_button_text_color             = esc_html( get_theme_mod( 'canuckcp_section2_button_text_color', '#474747' ) );
	$canuckcp_section2_button_hover_background_color = esc_html( get_theme_mod( 'canuckcp_section2_button_hover_background_color', '#474747' ) );
	$canuckcp_section2_button_hover_text_color       = esc_html( get_theme_mod( 'canuckcp_section2_button_hover_text_color', '#ffffff' ) );
	$canuckcp_section2_box1_use_font_icon            = get_theme_mod( 'canuckcp_section2_box1_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section2_box1_image_font               = esc_html( get_theme_mod( 'canuckcp_section2_box1_image_font', '' ) );
	$canuckcp_section2_box1_icon_color               = esc_html( get_theme_mod( 'canuckcp_section2_box1_icon_color', '#474747' ) );
	$canuckcp_section2_box1_image                    = esc_url( get_theme_mod( 'canuckcp_section2_box1_image', '' ) );
	$canuckcp_section2_box1_title                    = esc_html( get_theme_mod( 'canuckcp_section2_box1_title', '' ) );
	$canuckcp_section2_box1_text                     = esc_html( get_theme_mod( 'canuckcp_section2_box1_text', '' ) );
	$canuckcp_section2_box1_include_link             = get_theme_mod( 'canuckcp_section2_box1_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section2_box1_button_link              = esc_html( get_theme_mod( 'canuckcp_section2_box1_button_link', '' ) );
	$canuckcp_section2_box1_button_icon              = esc_html( get_theme_mod( 'canuckcp_section2_box1_button_icon', '' ) );
	$canuckcp_section2_box1_button_title             = esc_html( get_theme_mod( 'canuckcp_section2_box1_button_title', '' ) );
	$canuckcp_section2_box2_use_font_icon            = get_theme_mod( 'canuckcp_section2_box2_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section2_box2_image_font               = esc_html( get_theme_mod( 'canuckcp_section2_box2_image_font', '' ) );
	$canuckcp_section2_box2_icon_color               = esc_html( get_theme_mod( 'canuckcp_section2_box2_icon_color', '#474747' ) );
	$canuckcp_section2_box2_image                    = esc_url( get_theme_mod( 'canuckcp_section2_box2_image', '' ) );
	$canuckcp_section2_box2_title                    = esc_html( get_theme_mod( 'canuckcp_section2_box2_title', '' ) );
	$canuckcp_section2_box2_text                     = esc_html( get_theme_mod( 'canuckcp_section2_box2_text', '' ) );
	$canuckcp_section2_box2_include_link             = get_theme_mod( 'canuckcp_section2_box2_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section2_box2_button_link              = esc_html( get_theme_mod( 'canuckcp_section2_box2_button_link', '' ) );
	$canuckcp_section2_box2_button_icon              = esc_html( get_theme_mod( 'canuckcp_section2_box2_button_icon', '' ) );
	$canuckcp_section2_box2_button_title             = esc_html( get_theme_mod( 'canuckcp_section2_box2_button_title', '' ) );
	$canuckcp_section2_box3_use_font_icon            = get_theme_mod( 'canuckcp_section2_box3_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section2_box3_image_font               = esc_html( get_theme_mod( 'canuckcp_section2_box3_image_font', '' ) );
	$canuckcp_section2_box3_icon_color               = esc_html( get_theme_mod( 'canuckcp_section2_box3_icon_color', '#474747' ) );
	$canuckcp_section2_box3_image                    = esc_url( get_theme_mod( 'canuckcp_section2_box3_image', '' ) );
	$canuckcp_section2_box3_title                    = esc_html( get_theme_mod( 'canuckcp_section2_box3_title', '' ) );
	$canuckcp_section2_box3_text                     = esc_html( get_theme_mod( 'canuckcp_section2_box3_text', '' ) );
	$canuckcp_section2_box3_include_link             = get_theme_mod( 'canuckcp_section2_box3_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section2_box3_button_link              = esc_html( get_theme_mod( 'canuckcp_section2_box3_button_link', '' ) );
	$canuckcp_section2_box3_button_icon              = esc_html( get_theme_mod( 'canuckcp_section2_box3_button_icon', '' ) );
	$canuckcp_section2_box3_button_title             = esc_html( get_theme_mod( 'canuckcp_section2_box3_button_title', '' ) );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Sec 2 Three Service Boxes', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'General Options', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Text Color: ', 'canuck-cp' ) . $canuckcp_section2_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Background Image: ', 'canuck-cp' ) . $canuckcp_section2_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section2_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section2_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Background Color: ', 'canuck-cp' ) . $canuckcp_section2_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section2_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Button Background Color: ', 'canuck-cp' ) . $canuckcp_section2_button_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Button Text Color: ', 'canuck-cp' ) . $canuckcp_section2_button_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Button Hover Background Color: ', 'canuck-cp' ) . $canuckcp_section2_button_hover_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Button Hover Text Color: ', 'canuck-cp' ) . $canuckcp_section2_button_hover_text_color . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 1', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 1-Font Icon: ', 'canuck-cp' ) . $canuckcp_section2_box1_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 1-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section2_box1_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 1 Icon Color: ', 'canuck-cp' ) . $canuckcp_section2_box1_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 1-Image: ', 'canuck-cp' ) . $canuckcp_section2_box1_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 1-Title: ', 'canuck-cp' ) . $canuckcp_section2_box1_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 1-Content: ', 'canuck-cp' ) . $canuckcp_section2_box1_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 1-Link: ', 'canuck-cp' ) . $canuckcp_section2_box1_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 1-Link URL: ', 'canuck-cp' ) . $canuckcp_section2_box1_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section2_box1_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 1-Link Label: ', 'canuck-cp' ) . $canuckcp_section2_box1_button_title . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 2', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 2-Font Icon: ', 'canuck-cp' ) . $canuckcp_section2_box2_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 2-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section2_box2_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 2 Icon Color: ', 'canuck-cp' ) . $canuckcp_section2_box2_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 2-Image: ', 'canuck-cp' ) . $canuckcp_section2_box2_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 2-Title: ', 'canuck-cp' ) . $canuckcp_section2_box2_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 2-Content: ', 'canuck-cp' ) . $canuckcp_section2_box2_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 2-Link: ', 'canuck-cp' ) . $canuckcp_section2_box2_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 2-Link URL: ', 'canuck-cp' ) . $canuckcp_section2_box2_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section2_box2_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 2-Link Label: ', 'canuck-cp' ) . $canuckcp_section2_box2_button_title . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 3', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 3-Font Icon: ', 'canuck-cp' ) . $canuckcp_section2_box3_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 3-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section2_box3_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 3 Icon Color: ', 'canuck-cp' ) . $canuckcp_section2_box3_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 3-Image: ', 'canuck-cp' ) . $canuckcp_section2_box3_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 3-Title: ', 'canuck-cp' ) . $canuckcp_section2_box3_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 3-Content: ', 'canuck-cp' ) . $canuckcp_section2_box3_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 3-Link: ', 'canuck-cp' ) . $canuckcp_section2_box3_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 3-Link URL: ', 'canuck-cp' ) . $canuckcp_section2_box3_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section2_box3_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 2-Box 3-Link Label: ', 'canuck-cp' ) . $canuckcp_section2_box3_button_title . '</span>' . PHP_EOL;
	// Section 3 Options ===============================================================================================================================================.
	$canuckcp_section3_usage                         = esc_html( get_theme_mod( 'canuckcp_section3_usage', 'normal' ) );
	$canuckcp_section3_background_image              = esc_url( get_theme_mod( 'canuckcp_section3_background_image', '' ) );
	$canuckcp_section3_overlay_opacity               = esc_html( get_theme_mod( 'canuckcp_section3_overlay_opacity', 0 ) );
	$canuckcp_section3_use_parallax                  = get_theme_mod( 'canuckcp_section3_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section3_background_color              = esc_html( get_theme_mod( 'canuckcp_section3_background_color', '#ffffff' ) );
	$canuckcp_section3_background_color_opacity      = esc_html( get_theme_mod( 'canuckcp_section3_background_color_opacity', '1' ) );
	$canuckcp_section3_text_color                    = esc_html( get_theme_mod( 'canuckcp_section3_text_color', '#4c4c4c' ) );
	$canuckcp_section3_text                          = esc_html( get_theme_mod( 'canuckcp_section3_text', '' ) );
	$canuckcp_section3_shortcode                     = esc_html( get_theme_mod( 'canuckcp_section3_shortcode', '' ) );
	$canuckcp_include_section3_button                = get_theme_mod( 'canuckcp_include_section3_button', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section3_button_icon                   = esc_html( get_theme_mod( 'canuckcp_section3_button_icon', '' ) );
	$canuckcp_section3_button_name                   = esc_html( get_theme_mod( 'canuckcp_section3_button_name', 'more' ) );
	$canuckcp_section3_button_link                   = esc_url( get_theme_mod( 'canuckcp_section3_button_link', '' ) );
	$canuckcp_section3_button_background_color       = esc_html( get_theme_mod( 'canuckcp_section3_button_background_color', '#ffffff' ) );
	$canuckcp_section3_button_text_color             = esc_html( get_theme_mod( 'canuckcp_section3_button_text_color', '#474747' ) );
	$canuckcp_section3_button_hover_background_color = esc_html( get_theme_mod( 'canuckcp_section3_button_hover_background_color', '#474747' ) );
	$canuckcp_section3_button_hover_text_color       = esc_html( get_theme_mod( 'canuckcp_section3_button_hover_text_color', '#ffffff' ) );
	$canuckcp_section3_shortcode_encoded             = str_replace( '[', '*left-square-bracket*', $canuckcp_section3_shortcode, );
	$canuckcp_section3_shortcode_encoded             = str_replace( ']', '*right-square-bracket*', $canuckcp_section3_shortcode_encoded, );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Section 3 Text/Shortcode/Widget Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Usage Options: ', 'canuck-cp' ) . $canuckcp_section3_usage . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Background Image: ', 'canuck-cp' ) . $canuckcp_section3_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section3_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section3_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Background Color: ', 'canuck-cp' ) . $canuckcp_section3_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section3_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Text Color: ', 'canuck-cp' ) . $canuckcp_section3_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Content: ', 'canuck-cp' ) . $canuckcp_section3_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Shortcode: ', 'canuck-cp' ) . $canuckcp_section3_shortcode_encoded . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Link: ', 'canuck-cp' ) . $canuckcp_include_section3_button . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section3_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Button Label: ', 'canuck-cp' ) . $canuckcp_section3_button_name . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Button URI: ', 'canuck-cp' ) . $canuckcp_section3_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Button Background Color: ', 'canuck-cp' ) . $canuckcp_section3_button_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Button Text Color: ', 'canuck-cp' ) . $canuckcp_section3_button_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Button Hover Background Color: ', 'canuck-cp' ) . $canuckcp_section3_button_hover_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 3-Button Hover Text Color: ', 'canuck-cp' ) . $canuckcp_section3_button_hover_text_color . '</span>' . PHP_EOL;
	// Section 4 Options ===============================================================================================================================================.
	$canuckcp_section4_background_image              = esc_url( get_theme_mod( 'canuckcp_section4_background_image', '' ) );
	$canuckcp_section4_overlay_opacity               = esc_html( get_theme_mod( 'canuckcp_section4_overlay_opacity', 0 ) );
	$canuckcp_section4_use_parallax                  = get_theme_mod( 'canuckcp_section4_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section4_background_color              = esc_html( get_theme_mod( 'canuckcp_section4_background_color', '#ffffff' ) );
	$canuckcp_section4_background_color_opacity      = esc_html( get_theme_mod( 'canuckcp_section4_background_color_opacity', '1' ) );
	$canuckcp_section4_text_color                    = esc_html( get_theme_mod( 'canuckcp_section4_text_color', '#4c4c4c' ) );
	$canuckcp_section4_button_background_color       = esc_html( get_theme_mod( 'canuckcp_section4_button_background_color', '#ffffff' ) );
	$canuckcp_section4_button_text_color             = esc_html( get_theme_mod( 'canuckcp_section4_button_text_color', '#474747' ) );
	$canuckcp_section4_button_hover_background_color = esc_html( get_theme_mod( 'canuckcp_section4_button_hover_background_color', '#474747' ) );
	$canuckcp_section4_button_hover_text_color       = esc_html( get_theme_mod( 'canuckcp_section4_button_hover_text_color', '#ffffff' ) );
	$canuckcp_section4_box1_use_font_icon            = get_theme_mod( 'canuckcp_section4_box1_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section4_box1_icon_color               = esc_html( get_theme_mod( 'canuckcp_section4_box1_icon_color', '#474747' ) );
	$canuckcp_section4_box1_image_font               = esc_html( get_theme_mod( 'canuckcp_section4_box1_image_font', '' ) );
	$canuckcp_section4_box1_image                    = esc_url( get_theme_mod( 'canuckcp_section4_box1_image', '' ) );
	$canuckcp_section4_box1_title                    = esc_html( get_theme_mod( 'canuckcp_section4_box1_title', '' ) );
	$canuckcp_section4_box1_text                     = esc_html( get_theme_mod( 'canuckcp_section4_box1_text', '' ) );
	$canuckcp_section4_box1_include_link             = get_theme_mod( 'canuckcp_section4_box1_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section4_box1_button_link              = esc_html( get_theme_mod( 'canuckcp_section4_box1_button_link', '' ) );
	$canuckcp_section4_box1_button_icon              = esc_html( get_theme_mod( 'canuckcp_section4_box1_button_icon', '' ) );
	$canuckcp_section4_box1_button_title             = esc_html( get_theme_mod( 'canuckcp_section4_box1_button_title', '' ) );
	$canuckcp_section4_box2_use_font_icon            = get_theme_mod( 'canuckcp_section4_box2_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section4_box2_icon_color               = esc_html( get_theme_mod( 'canuckcp_section4_box2_icon_color', '#474747' ) );
	$canuckcp_section4_box2_image_font               = esc_html( get_theme_mod( 'canuckcp_section4_box2_image_font', '' ) );
	$canuckcp_section4_box2_image                    = esc_url( get_theme_mod( 'canuckcp_section4_box2_image', '' ) );
	$canuckcp_section4_box2_title                    = esc_html( get_theme_mod( 'canuckcp_section4_box2_title', '' ) );
	$canuckcp_section4_box2_text                     = esc_html( get_theme_mod( 'canuckcp_section4_box2_text', '' ) );
	$canuckcp_section4_box2_include_link             = get_theme_mod( 'canuckcp_section4_box2_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section4_box2_button_link              = esc_html( get_theme_mod( 'canuckcp_section4_box2_button_link', '' ) );
	$canuckcp_section4_box2_button_icon              = esc_html( get_theme_mod( 'canuckcp_section4_box2_button_icon', '' ) );
	$canuckcp_section4_box2_button_title             = esc_html( get_theme_mod( 'canuckcp_section4_box2_button_title', '' ) );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Sec 4 Two Service Boxes', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'General Options', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Background Image: ', 'canuck-cp' ) . $canuckcp_section4_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section4_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section4_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Background Color: ', 'canuck-cp' ) . $canuckcp_section4_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section4_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Text Color: ', 'canuck-cp' ) . $canuckcp_section4_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Button Background Color: ', 'canuck-cp' ) . $canuckcp_section4_button_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Button Text Color: ', 'canuck-cp' ) . $canuckcp_section4_button_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Button Hover Background Color: ', 'canuck-cp' ) . $canuckcp_section4_button_hover_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Button Hover Text Color: ', 'canuck-cp' ) . $canuckcp_section4_button_hover_text_color . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 1', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 1-Font Icon: ', 'canuck-cp' ) . $canuckcp_section4_box1_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 1-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section4_box1_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 1 Icon Color: ', 'canuck-cp' ) . $canuckcp_section4_box1_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 1-Image: ', 'canuck-cp' ) . $canuckcp_section4_box1_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 1-Title: ', 'canuck-cp' ) . $canuckcp_section4_box1_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 1-Content: ', 'canuck-cp' ) . $canuckcp_section4_box1_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 1-Link: ', 'canuck-cp' ) . $canuckcp_section4_box1_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 1-Link URL: ', 'canuck-cp' ) . $canuckcp_section4_box1_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section4_box1_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 1-Link Label: ', 'canuck-cp' ) . $canuckcp_section4_box1_button_title . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 2', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 2-Font Icon: ', 'canuck-cp' ) . $canuckcp_section4_box2_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 2-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section4_box2_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 2 Icon Color: ', 'canuck-cp' ) . $canuckcp_section4_box2_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 2-Image: ', 'canuck-cp' ) . $canuckcp_section4_box2_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 2-Title: ', 'canuck-cp' ) . $canuckcp_section4_box2_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 2-Content: ', 'canuck-cp' ) . $canuckcp_section4_box2_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 2-Link: ', 'canuck-cp' ) . $canuckcp_section4_box2_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 2-Link URL: ', 'canuck-cp' ) . $canuckcp_section4_box2_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section4_box2_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 4-Box 2-Link Label: ', 'canuck-cp' ) . $canuckcp_section4_box2_button_title . '</span>' . PHP_EOL;
	// Section 5 Options ===============================================================================================================================================.
	$canuckcp_section5_usage                         = esc_html( get_theme_mod( 'canuckcp_section5_usage', 'normal' ) );
	$canuckcp_section5_background_image              = esc_url( get_theme_mod( 'canuckcp_section5_background_image', '' ) );
	$canuckcp_section5_overlay_opacity               = esc_html( get_theme_mod( 'canuckcp_section5_overlay_opacity', 0 ) );
	$canuckcp_section5_use_parallax                  = get_theme_mod( 'canuckcp_section5_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section5_background_color              = esc_html( get_theme_mod( 'canuckcp_section5_background_color', '#ffffff' ) );
	$canuckcp_section5_background_color_opacity      = esc_html( get_theme_mod( 'canuckcp_section5_background_color_opacity', '1' ) );
	$canuckcp_section5_text_color                    = esc_html( get_theme_mod( 'canuckcp_section5_text_color', '#4c4c4c' ) );
	$canuckcp_section5_text                          = esc_html( get_theme_mod( 'canuckcp_section5_text', '' ) );
	$canuckcp_section5_shortcode                     = esc_html( get_theme_mod( 'canuckcp_section5_shortcode', '' ) );
	$canuckcp_include_section5_button                = get_theme_mod( 'canuckcp_include_section5_button', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section5_button_icon                   = esc_html( get_theme_mod( 'canuckcp_section5_button_icon', '' ) );
	$canuckcp_section5_button_name                   = esc_html( get_theme_mod( 'canuckcp_section5_button_name', 'more' ) );
	$canuckcp_section5_button_link                   = esc_url( get_theme_mod( 'canuckcp_section5_button_link', '' ) );
	$canuckcp_section5_button_background_color       = esc_html( get_theme_mod( 'canuckcp_section5_button_background_color', '#ffffff' ) );
	$canuckcp_section5_button_text_color             = esc_html( get_theme_mod( 'canuckcp_section5_button_text_color', '#474747' ) );
	$canuckcp_section5_button_hover_background_color = esc_html( get_theme_mod( 'canuckcp_section5_button_hover_background_color', '#474747' ) );
	$canuckcp_section5_button_hover_text_color       = esc_html( get_theme_mod( 'canuckcp_section5_button_hover_text_color', '#ffffff' ) );
	$canuckcp_section5_shortcode_encoded             = str_replace( '[', '*left-square-bracket*', $canuckcp_section5_shortcode, );
	$canuckcp_section5_shortcode_encoded             = str_replace( ']', '*right-square-bracket*', $canuckcp_section5_shortcode_encoded, );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Section 5 Text/Shortcode/Widget Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Usage Options: ', 'canuck-cp' ) . $canuckcp_section5_usage . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Background Image: ', 'canuck-cp' ) . $canuckcp_section5_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section5_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section5_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Background Color: ', 'canuck-cp' ) . $canuckcp_section5_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section5_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Text Color: ', 'canuck-cp' ) . $canuckcp_section5_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Content: ', 'canuck-cp' ) . $canuckcp_section5_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Shortcode: ', 'canuck-cp' ) . $canuckcp_section5_shortcode_encoded . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Link: ', 'canuck-cp' ) . $canuckcp_include_section5_button . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section5_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Button Label: ', 'canuck-cp' ) . $canuckcp_section5_button_name . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Button URI: ', 'canuck-cp' ) . $canuckcp_section5_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Button Background Color: ', 'canuck-cp' ) . $canuckcp_section5_button_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Button Text Color: ', 'canuck-cp' ) . $canuckcp_section5_button_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Button Hover Background Color: ', 'canuck-cp' ) . $canuckcp_section5_button_hover_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 5-Button Hover Text Color: ', 'canuck-cp' ) . $canuckcp_section5_button_hover_text_color . '</span>' . PHP_EOL;
	// Section 6 Options ===============================================================================================================================================.
	$canuckcp_section6_background_image              = esc_url( get_theme_mod( 'canuckcp_section6_background_image', '' ) );
	$canuckcp_section6_overlay_opacity               = esc_html( get_theme_mod( 'canuckcp_section6_overlay_opacity', 0 ) );
	$canuckcp_section6_use_parallax                  = get_theme_mod( 'canuckcp_section6_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section6_background_color              = esc_html( get_theme_mod( 'canuckcp_section6_background_color', '#ffffff' ) );
	$canuckcp_section6_background_color_opacity      = esc_html( get_theme_mod( 'canuckcp_section6_background_color_opacity', '1' ) );
	$canuckcp_section6_text_color                    = esc_html( get_theme_mod( 'canuckcp_section6_text_color', '#4c4c4c' ) );
	$canuckcp_section6_button_background_color       = esc_html( get_theme_mod( 'canuckcp_section6_button_background_color', '#ffffff' ) );
	$canuckcp_section6_button_text_color             = esc_html( get_theme_mod( 'canuckcp_section6_button_text_color', '#474747' ) );
	$canuckcp_section6_button_hover_background_color = esc_html( get_theme_mod( 'canuckcp_section6_button_hover_background_color', '#474747' ) );
	$canuckcp_section6_button_hover_text_color       = esc_html( get_theme_mod( 'canuckcp_section6_button_hover_text_color', '#ffffff' ) );
	$canuckcp_section6_box1_use_font_icon            = get_theme_mod( 'canuckcp_section6_box1_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section6_box1_icon_color               = esc_html( get_theme_mod( 'canuckcp_section6_box1_icon_color', '#474747' ) );
	$canuckcp_section6_box1_image_font               = esc_html( get_theme_mod( 'canuckcp_section6_box1_image_font', '' ) );
	$canuckcp_section6_box1_image                    = esc_url( get_theme_mod( 'canuckcp_section6_box1_image', '' ) );
	$canuckcp_section6_box1_title                    = esc_html( get_theme_mod( 'canuckcp_section6_box1_title', '' ) );
	$canuckcp_section6_box1_text                     = esc_html( get_theme_mod( 'canuckcp_section6_box1_text', '' ) );
	$canuckcp_section6_box1_include_link             = get_theme_mod( 'canuckcp_section6_box1_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section6_box1_button_link              = esc_html( get_theme_mod( 'canuckcp_section6_box1_button_link', '' ) );
	$canuckcp_section6_box1_button_icon              = esc_html( get_theme_mod( 'canuckcp_section6_box1_button_icon', '' ) );
	$canuckcp_section6_box1_button_title             = esc_html( get_theme_mod( 'canuckcp_section6_box1_button_title', '' ) );
	$canuckcp_section6_box2_use_font_icon            = get_theme_mod( 'canuckcp_section6_box2_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section6_box2_icon_color               = esc_html( get_theme_mod( 'canuckcp_section6_box2_icon_color', '#474747' ) );
	$canuckcp_section6_box2_image_font               = esc_html( get_theme_mod( 'canuckcp_section6_box2_image_font', '' ) );
	$canuckcp_section6_box2_image                    = esc_url( get_theme_mod( 'canuckcp_section6_box2_image', '' ) );
	$canuckcp_section6_box2_title                    = esc_html( get_theme_mod( 'canuckcp_section6_box2_title', '' ) );
	$canuckcp_section6_box2_text                     = esc_html( get_theme_mod( 'canuckcp_section6_box2_text', '' ) );
	$canuckcp_section6_box2_include_link             = get_theme_mod( 'canuckcp_section6_box2_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section6_box2_button_link              = esc_html( get_theme_mod( 'canuckcp_section6_box2_button_link', '' ) );
	$canuckcp_section6_box2_button_icon              = esc_html( get_theme_mod( 'canuckcp_section6_box2_button_icon', '' ) );
	$canuckcp_section6_box2_button_title             = esc_html( get_theme_mod( 'canuckcp_section6_box2_button_title', '' ) );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Sec 6 Two Service Boxes', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'General Options', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Background Image: ', 'canuck-cp' ) . $canuckcp_section6_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section6_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section6_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Background Color: ', 'canuck-cp' ) . $canuckcp_section6_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section6_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Text Color: ', 'canuck-cp' ) . $canuckcp_section6_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Button Background Color: ', 'canuck-cp' ) . $canuckcp_section6_button_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Button Text Color: ', 'canuck-cp' ) . $canuckcp_section6_button_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Button Hover Background Color: ', 'canuck-cp' ) . $canuckcp_section6_button_hover_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Button Hover Text Color: ', 'canuck-cp' ) . $canuckcp_section6_button_hover_text_color . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 1', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 1-Font Icon: ', 'canuck-cp' ) . $canuckcp_section6_box1_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 1-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section6_box1_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 1 Icon Color: ', 'canuck-cp' ) . $canuckcp_section6_box1_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 1-Image: ', 'canuck-cp' ) . $canuckcp_section6_box1_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 1-Title: ', 'canuck-cp' ) . $canuckcp_section6_box1_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 1-Content: ', 'canuck-cp' ) . $canuckcp_section6_box1_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 1-Link: ', 'canuck-cp' ) . $canuckcp_section6_box1_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 1-Link URL: ', 'canuck-cp' ) . $canuckcp_section6_box1_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section6_box1_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 1-Link Label: ', 'canuck-cp' ) . $canuckcp_section6_box1_button_title . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 2', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 2-Font Icon: ', 'canuck-cp' ) . $canuckcp_section6_box2_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 2-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section6_box2_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 2 Icon Color: ', 'canuck-cp' ) . $canuckcp_section6_box2_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 2-Image: ', 'canuck-cp' ) . $canuckcp_section6_box2_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 2-Title: ', 'canuck-cp' ) . $canuckcp_section6_box2_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 2-Content: ', 'canuck-cp' ) . $canuckcp_section6_box2_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 2-Link: ', 'canuck-cp' ) . $canuckcp_section6_box2_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 2-Link URL: ', 'canuck-cp' ) . $canuckcp_section6_box2_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section6_box2_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 6-Box 2-Link Label: ', 'canuck-cp' ) . $canuckcp_section6_box2_button_title . '</span>' . PHP_EOL;
	// Section 7 Options ===============================================================================================================================================.
	$canuckcp_section7_usage                         = esc_html( get_theme_mod( 'canuckcp_section7_usage', 'normal' ) );
	$canuckcp_section7_background_image              = esc_url( get_theme_mod( 'canuckcp_section7_background_image', '' ) );
	$canuckcp_section7_overlay_opacity               = esc_html( get_theme_mod( 'canuckcp_section7_overlay_opacity', 0 ) );
	$canuckcp_section7_use_parallax                  = get_theme_mod( 'canuckcp_section7_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section7_background_color              = esc_html( get_theme_mod( 'canuckcp_section7_background_color', '#ffffff' ) );
	$canuckcp_section7_background_color_opacity      = esc_html( get_theme_mod( 'canuckcp_section7_background_color_opacity', '1' ) );
	$canuckcp_section7_text_color                    = esc_html( get_theme_mod( 'canuckcp_section7_text_color', '#4c4c4c' ) );
	$canuckcp_section7_text                          = esc_html( get_theme_mod( 'canuckcp_section7_text', '' ) );
	$canuckcp_section7_shortcode                     = esc_html( get_theme_mod( 'canuckcp_section7_shortcode', '' ) );
	$canuckcp_include_section7_button                = get_theme_mod( 'canuckcp_include_section7_button', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section7_button_icon                   = esc_html( get_theme_mod( 'canuckcp_section7_button_icon', '' ) );
	$canuckcp_section7_button_name                   = esc_html( get_theme_mod( 'canuckcp_section7_button_name', 'more' ) );
	$canuckcp_section7_button_link                   = esc_url( get_theme_mod( 'canuckcp_section7_button_link', '' ) );
	$canuckcp_section7_button_background_color       = esc_html( get_theme_mod( 'canuckcp_section7_button_background_color', '#ffffff' ) );
	$canuckcp_section7_button_text_color             = esc_html( get_theme_mod( 'canuckcp_section7_button_text_color', '#474747' ) );
	$canuckcp_section7_button_hover_background_color = esc_html( get_theme_mod( 'canuckcp_section7_button_hover_background_color', '#474747' ) );
	$canuckcp_section7_button_hover_text_color       = esc_html( get_theme_mod( 'canuckcp_section7_button_hover_text_color', '#ffffff' ) );
	$canuckcp_section7_shortcode_encoded             = str_replace( '[', '*left-square-bracket*', $canuckcp_section7_shortcode, );
	$canuckcp_section7_shortcode_encoded             = str_replace( ']', '*right-square-bracket*', $canuckcp_section7_shortcode_encoded, );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Section 7 Text/Shortcode/Widget Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Usage Options: ', 'canuck-cp' ) . $canuckcp_section7_usage . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Background Image: ', 'canuck-cp' ) . $canuckcp_section7_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section7_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section7_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Background Color: ', 'canuck-cp' ) . $canuckcp_section7_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section7_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Text Color: ', 'canuck-cp' ) . $canuckcp_section7_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Content: ', 'canuck-cp' ) . $canuckcp_section7_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Shortcode: ', 'canuck-cp' ) . $canuckcp_section7_shortcode_encoded . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Link: ', 'canuck-cp' ) . $canuckcp_include_section7_button . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section7_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Button Label: ', 'canuck-cp' ) . $canuckcp_section7_button_name . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Button URI: ', 'canuck-cp' ) . $canuckcp_section7_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Button Background Color: ', 'canuck-cp' ) . $canuckcp_section7_button_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Button Text Color: ', 'canuck-cp' ) . $canuckcp_section7_button_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Button Hover Background Color: ', 'canuck-cp' ) . $canuckcp_section7_button_hover_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 7-Button Hover Text Color: ', 'canuck-cp' ) . $canuckcp_section7_button_hover_text_color . '</span>' . PHP_EOL;
	// Section 8 Options ===============================================================================================================================================.
	$canuckcp_section8_background_image              = esc_url( get_theme_mod( 'canuckcp_section8_background_image', '' ) );
	$canuckcp_section8_overlay_opacity               = esc_html( get_theme_mod( 'canuckcp_section8_overlay_opacity', '0' ) );
	$canuckcp_section8_use_parallax                  = get_theme_mod( 'canuckcp_section8_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section8_background_color              = esc_html( get_theme_mod( 'canuckcp_section8_background_color', '#ffffff' ) );
	$canuckcp_section8_background_color_opacity      = esc_html( get_theme_mod( 'canuckcp_section8_background_color_opacity', '1' ) );
	$canuckcp_section8_text_color                    = esc_html( get_theme_mod( 'canuckcp_section8_text_color', '#4c4c4c' ) );
	$canuckcp_section8_button_background_color       = esc_html( get_theme_mod( 'canuckcp_section8_button_background_color', '#ffffff' ) );
	$canuckcp_section8_button_text_color             = esc_html( get_theme_mod( 'canuckcp_section8_button_text_color', '#474747' ) );
	$canuckcp_section8_button_hover_background_color = esc_html( get_theme_mod( 'canuckcp_section8_button_hover_background_color', '#474747' ) );
	$canuckcp_section8_button_hover_text_color       = esc_html( get_theme_mod( 'canuckcp_section8_button_hover_text_color', '#ffffff' ) );
	$canuckcp_section8_box1_use_font_icon            = get_theme_mod( 'canuckcp_section8_box1_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section8_box1_image_font               = esc_html( get_theme_mod( 'canuckcp_section8_box1_image_font', '' ) );
	$canuckcp_section8_box1_icon_color               = esc_html( get_theme_mod( 'canuckcp_section8_box1_icon_color', '#474747' ) );
	$canuckcp_section8_box1_image                    = esc_url( get_theme_mod( 'canuckcp_section8_box1_image', '' ) );
	$canuckcp_section8_box1_title                    = esc_html( get_theme_mod( 'canuckcp_section8_box1_title', '' ) );
	$canuckcp_section8_box1_text                     = esc_html( get_theme_mod( 'canuckcp_section8_box1_text', '' ) );
	$canuckcp_section8_box1_include_link             = get_theme_mod( 'canuckcp_section8_box1_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section8_box1_button_link              = esc_html( get_theme_mod( 'canuckcp_section8_box1_button_link', '' ) );
	$canuckcp_section8_box1_button_icon              = esc_html( get_theme_mod( 'canuckcp_section8_box1_button_icon', '' ) );
	$canuckcp_section8_box1_button_title             = esc_html( get_theme_mod( 'canuckcp_section8_box1_button_title', '' ) );
	$canuckcp_section8_box2_use_font_icon            = get_theme_mod( 'canuckcp_section8_box2_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section8_box2_image_font               = esc_html( get_theme_mod( 'canuckcp_section8_box2_image_font', '' ) );
	$canuckcp_section8_box2_icon_color               = esc_html( get_theme_mod( 'canuckcp_section8_box2_icon_color', '#474747' ) );
	$canuckcp_section8_box2_image                    = esc_url( get_theme_mod( 'canuckcp_section8_box2_image', '' ) );
	$canuckcp_section8_box2_title                    = esc_html( get_theme_mod( 'canuckcp_section8_box2_title', '' ) );
	$canuckcp_section8_box2_text                     = esc_html( get_theme_mod( 'canuckcp_section8_box2_text', '' ) );
	$canuckcp_section8_box2_include_link             = get_theme_mod( 'canuckcp_section8_box2_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section8_box2_button_link              = esc_html( get_theme_mod( 'canuckcp_section8_box2_button_link', '' ) );
	$canuckcp_section8_box2_button_icon              = esc_html( get_theme_mod( 'canuckcp_section8_box2_button_icon', '' ) );
	$canuckcp_section8_box2_button_title             = esc_html( get_theme_mod( 'canuckcp_section8_box2_button_title', '' ) );
	$canuckcp_section8_box3_use_font_icon            = get_theme_mod( 'canuckcp_section8_box3_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section8_box3_image_font               = esc_html( get_theme_mod( 'canuckcp_section8_box3_image_font', '' ) );
	$canuckcp_section8_box3_icon_color               = esc_html( get_theme_mod( 'canuckcp_section8_box3_icon_color', '#474747' ) );
	$canuckcp_section8_box3_image                    = esc_url( get_theme_mod( 'canuckcp_section8_box3_image', '' ) );
	$canuckcp_section8_box3_title                    = esc_html( get_theme_mod( 'canuckcp_section8_box3_title', '' ) );
	$canuckcp_section8_box3_text                     = esc_html( get_theme_mod( 'canuckcp_section8_box3_text', '' ) );
	$canuckcp_section8_box3_include_link             = get_theme_mod( 'canuckcp_section8_box3_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section8_box3_button_link              = esc_html( get_theme_mod( 'canuckcp_section8_box3_button_link', '' ) );
	$canuckcp_section8_box3_button_icon              = esc_html( get_theme_mod( 'canuckcp_section8_box3_button_icon', '' ) );
	$canuckcp_section8_box3_button_title             = esc_html( get_theme_mod( 'canuckcp_section8_box3_button_title', '' ) );
	$canuckcp_section8_box4_use_font_icon            = get_theme_mod( 'canuckcp_section8_box4_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section8_box4_image_font               = esc_html( get_theme_mod( 'canuckcp_section8_box4_image_font', '' ) );
	$canuckcp_section8_box4_icon_color               = esc_html( get_theme_mod( 'canuckcp_section8_box4_icon_color', '#474747' ) );
	$canuckcp_section8_box4_image                    = esc_url( get_theme_mod( 'canuckcp_section8_box4_image', '' ) );
	$canuckcp_section8_box4_title                    = esc_html( get_theme_mod( 'canuckcp_section8_box4_title', '' ) );
	$canuckcp_section8_box4_text                     = esc_html( get_theme_mod( 'canuckcp_section8_box4_text', '' ) );
	$canuckcp_section8_box4_include_link             = get_theme_mod( 'canuckcp_section8_box4_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section8_box4_button_link              = esc_html( get_theme_mod( 'canuckcp_section8_box4_button_link', '' ) );
	$canuckcp_section8_box4_button_icon              = esc_html( get_theme_mod( 'canuckcp_section8_box4_button_icon', '' ) );
	$canuckcp_section8_box4_button_title             = esc_html( get_theme_mod( 'canuckcp_section8_box4_button_title', '' ) );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Sec 8 Four Service Boxes', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'General Options', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Text Color: ', 'canuck-cp' ) . $canuckcp_section8_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Background Image: ', 'canuck-cp' ) . $canuckcp_section8_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section8_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section8_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Background Color: ', 'canuck-cp' ) . $canuckcp_section8_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section8_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Button Background Color: ', 'canuck-cp' ) . $canuckcp_section8_button_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Button Text Color: ', 'canuck-cp' ) . $canuckcp_section8_button_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Button Hover Background Color: ', 'canuck-cp' ) . $canuckcp_section8_button_hover_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Button Hover Text Color: ', 'canuck-cp' ) . $canuckcp_section8_button_hover_text_color . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 1', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 1-Font Icon: ', 'canuck-cp' ) . $canuckcp_section8_box1_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 1-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section8_box1_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 1 Icon Color: ', 'canuck-cp' ) . $canuckcp_section8_box1_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 1-Image: ', 'canuck-cp' ) . $canuckcp_section8_box1_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 1-Title: ', 'canuck-cp' ) . $canuckcp_section8_box1_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 1-Content: ', 'canuck-cp' ) . $canuckcp_section8_box1_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 1-Link: ', 'canuck-cp' ) . $canuckcp_section8_box1_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 1-Link URL: ', 'canuck-cp' ) . $canuckcp_section8_box1_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section8_box1_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 1-Link Label: ', 'canuck-cp' ) . $canuckcp_section8_box1_button_title . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 2', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 2-Font Icon: ', 'canuck-cp' ) . $canuckcp_section8_box2_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 2-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section8_box2_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 2 Icon Color: ', 'canuck-cp' ) . $canuckcp_section8_box2_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 2-Image: ', 'canuck-cp' ) . $canuckcp_section8_box2_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 2-Title: ', 'canuck-cp' ) . $canuckcp_section8_box2_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 2-Content: ', 'canuck-cp' ) . $canuckcp_section8_box2_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 2-Link: ', 'canuck-cp' ) . $canuckcp_section8_box2_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 2-Link URL: ', 'canuck-cp' ) . $canuckcp_section8_box2_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section8_box2_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 2-Link Label: ', 'canuck-cp' ) . $canuckcp_section8_box2_button_title . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 3', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Font Icon: ', 'canuck-cp' ) . $canuckcp_section8_box3_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section8_box3_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3 Icon Color: ', 'canuck-cp' ) . $canuckcp_section8_box3_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Image: ', 'canuck-cp' ) . $canuckcp_section8_box3_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Title: ', 'canuck-cp' ) . $canuckcp_section8_box3_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Content: ', 'canuck-cp' ) . $canuckcp_section8_box3_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Link: ', 'canuck-cp' ) . $canuckcp_section8_box3_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Link URL: ', 'canuck-cp' ) . $canuckcp_section8_box3_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section8_box3_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Link Label: ', 'canuck-cp' ) . $canuckcp_section8_box3_button_title . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 4', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Font Icon: ', 'canuck-cp' ) . $canuckcp_section8_box4_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section8_box4_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3 Icon Color: ', 'canuck-cp' ) . $canuckcp_section8_box4_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Image: ', 'canuck-cp' ) . $canuckcp_section8_box4_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Title: ', 'canuck-cp' ) . $canuckcp_section8_box4_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Content: ', 'canuck-cp' ) . $canuckcp_section8_box4_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Link: ', 'canuck-cp' ) . $canuckcp_section8_box4_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Link URL: ', 'canuck-cp' ) . $canuckcp_section8_box4_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section8_box4_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 8-Box 3-Link Label: ', 'canuck-cp' ) . $canuckcp_section8_box4_button_title . '</span>' . PHP_EOL;
	// Section 9 Options ===============================================================================================================================================.
	$canuckcp_section9_background_image         = esc_url( get_theme_mod( 'canuckcp_section9_background_image', '' ) );
	$canuckcp_section9_overlay_opacity          = esc_html( get_theme_mod( 'canuckcp_section9_overlay_opacity', '0' ) );
	$canuckcp_section9_use_parallax             = get_theme_mod( 'canuckcp_section9_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section9_background_color         = esc_html( get_theme_mod( 'canuckcp_section9_background_color', '#ffffff' ) );
	$canuckcp_section9_background_color_opacity = esc_html( get_theme_mod( 'canuckcp_section9_background_color_opacity', '1' ) );
	$canuckcp_section9_text_color               = esc_html( get_theme_mod( 'canuckcp_section9_text_color', '#4c4c4c' ) );
	$canuckcp_section9_title                    = esc_html( get_theme_mod( 'canuckcp_section9_title', '' ) );
	$canuckcp_section9_text                     = esc_html( get_theme_mod( 'canuckcp_section9_text', '' ) );
	$canuckcp_section9_portfolio_category       = esc_html( get_theme_mod( 'canuckcp_section9_portfolio_category', '' ) );
	$canuckcp_section9_portfolio_columns        = esc_html( get_theme_mod( 'canuckcp_section9_portfolio_columns', '' ) );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Section 9 Portfolio Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 9-Background Image: ', 'canuck-cp' ) . $canuckcp_section9_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 9-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section9_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 9-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section9_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 9-Background Color: ', 'canuck-cp' ) . $canuckcp_section9_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 9-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section9_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 9-Text Color: ', 'canuck-cp' ) . $canuckcp_section9_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 9-Title: ', 'canuck-cp' ) . $canuckcp_section9_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 9-Content: ', 'canuck-cp' ) . $canuckcp_section9_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 9-Portfolio Category: ', 'canuck-cp' ) . $canuckcp_section9_portfolio_category . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 9-Portfolio Columns: ', 'canuck-cp' ) . $canuckcp_section9_portfolio_columns . '</span>' . PHP_EOL;
	// Section 10 Options ===============================================================================================================================================.
	$canuckcp_section10_background_image              = esc_url( get_theme_mod( 'canuckcp_section10_background_image', '' ) );
	$canuckcp_section10_overlay_opacity               = esc_html( get_theme_mod( 'canuckcp_section10_overlay_opacity', '0' ) );
	$canuckcp_section10_use_parallax                  = get_theme_mod( 'canuckcp_section10_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section10_background_color              = esc_html( get_theme_mod( 'canuckcp_section10_background_color', '#ffffff' ) );
	$canuckcp_section10_background_color_opacity      = esc_html( get_theme_mod( 'canuckcp_section10_background_color_opacity', '1' ) );
	$canuckcp_section10_text_color                    = esc_html( get_theme_mod( 'canuckcp_section10_text_color', '#4c4c4c' ) );
	$canuckcp_section10_media_area_usage              = esc_html( get_theme_mod( 'canuckcp_section10_media_area_usage', 'normal' ) );
	$canuckcp_section10_image                         = esc_url( get_theme_mod( 'canuckcp_section10_image', '' ) );
	$canuckcp_section10_shortcode                     = esc_html( get_theme_mod( 'canuckcp_section10_shortcode', '' ) );
	$canuckcp_section10_title                         = esc_html( get_theme_mod( 'canuckcp_section10_title', '' ) );
	$canuckcp_section10_text                          = esc_html( get_theme_mod( 'canuckcp_section10_text', '' ) );
	$canuckcp_section10_include_link                  = get_theme_mod( 'canuckcp_section10_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section10_button_link                   = esc_url( get_theme_mod( 'canuckcp_section10_button_link', '' ) );
	$canuckcp_section10_button_icon                   = esc_html( get_theme_mod( 'canuckcp_section10_button_icon', '' ) );
	$canuckcp_section10_button_title                  = esc_html( get_theme_mod( 'canuckcp_section10_button_title', 'more' ) );
	$canuckcp_section10_button_background_color       = esc_html( get_theme_mod( 'canuckcp_section10_button_background_color', '#ffffff' ) );
	$canuckcp_section10_button_text_color             = esc_html( get_theme_mod( 'canuckcp_section10_button_text_color', '#4c4c4c' ) );
	$canuckcp_section10_button_hover_background_color = esc_html( get_theme_mod( 'canuckcp_section10_button_hover_background_color', '#4c4c4c' ) );
	$canuckcp_section10_button_hover_text_color       = esc_html( get_theme_mod( 'canuckcp_section10_button_hover_text_color', '#ffffff' ) );
	$canuckcp_section10_shortcode_encoded             = str_replace( '[', '*left-square-bracket*', $canuckcp_section10_shortcode, );
	$canuckcp_section10_shortcode_encoded             = str_replace( ']', '*right-square-bracket*', $canuckcp_section10_shortcode_encoded, );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Section 10 Media/Content Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Background Image: ', 'canuck-cp' ) . $canuckcp_section10_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section10_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section10_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Background Color: ', 'canuck-cp' ) . $canuckcp_section10_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section10_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Text Color: ', 'canuck-cp' ) . $canuckcp_section10_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Media Area Usage Options: ', 'canuck-cp' ) . $canuckcp_section10_media_area_usage . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Image: ', 'canuck-cp' ) . $canuckcp_section10_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Shortcode: ', 'canuck-cp' ) . $canuckcp_section10_shortcode_encoded . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Title: ', 'canuck-cp' ) . $canuckcp_section10_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Content: ', 'canuck-cp' ) . $canuckcp_section10_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Include Link: ', 'canuck-cp' ) . $canuckcp_section10_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Button Link: ', 'canuck-cp' ) . $canuckcp_section10_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section10_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Button Label: ', 'canuck-cp' ) . $canuckcp_section10_button_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Button Background Color: ', 'canuck-cp' ) . $canuckcp_section10_button_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Button Text Color: ', 'canuck-cp' ) . $canuckcp_section10_button_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Button Hover Background Color: ', 'canuck-cp' ) . $canuckcp_section10_button_hover_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 10-Button Hover Text Color: ', 'canuck-cp' ) . $canuckcp_section10_button_hover_text_color . '</span>' . PHP_EOL;
	// Section 11 Options ===============================================================================================================================================.
	$canuckcp_section11_background_image              = esc_url( get_theme_mod( 'canuckcp_section11_background_image', '' ) );
	$canuckcp_section11_overlay_opacity               = esc_html( get_theme_mod( 'canuckcp_section11_overlay_opacity', '0' ) );
	$canuckcp_section11_use_parallax                  = get_theme_mod( 'canuckcp_section11_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section11_background_color              = esc_html( get_theme_mod( 'canuckcp_section11_background_color', '#ffffff' ) );
	$canuckcp_section11_background_color_opacity      = esc_html( get_theme_mod( 'canuckcp_section11_background_color_opacity', '1' ) );
	$canuckcp_section11_text_color                    = esc_html( get_theme_mod( 'canuckcp_section11_text_color', '#4c4c4c' ) );
	$canuckcp_section11_media_area_usage              = esc_html( get_theme_mod( 'canuckcp_section11_media_area_usage', 'normal' ) );
	$canuckcp_section11_image                         = esc_url( get_theme_mod( 'canuckcp_section11_image', '' ) );
	$canuckcp_section11_shortcode                     = esc_html( get_theme_mod( 'canuckcp_section11_shortcode', '' ) );
	$canuckcp_section11_title                         = esc_html( get_theme_mod( 'canuckcp_section11_title', '' ) );
	$canuckcp_section11_text                          = esc_html( get_theme_mod( 'canuckcp_section11_text', '' ) );
	$canuckcp_section11_include_link                  = get_theme_mod( 'canuckcp_section11_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section11_button_link                   = esc_url( get_theme_mod( 'canuckcp_section11_button_link', '' ) );
	$canuckcp_section11_button_icon                   = esc_html( get_theme_mod( 'canuckcp_section11_button_icon', '' ) );
	$canuckcp_section11_button_title                  = esc_html( get_theme_mod( 'canuckcp_section11_button_title', 'more' ) );
	$canuckcp_section11_button_background_color       = esc_html( get_theme_mod( 'canuckcp_section11_button_background_color', '#ffffff' ) );
	$canuckcp_section11_button_text_color             = esc_html( get_theme_mod( 'canuckcp_section11_button_text_color', '#4c4c4c' ) );
	$canuckcp_section11_button_hover_background_color = esc_html( get_theme_mod( 'canuckcp_section11_button_hover_background_color', '#4c4c4c' ) );
	$canuckcp_section11_button_hover_text_color       = esc_html( get_theme_mod( 'canuckcp_section11_button_hover_text_color', '#ffffff' ) );
	$canuckcp_section11_shortcode_encoded             = str_replace( '[', '*left-square-bracket*', $canuckcp_section11_shortcode, );
	$canuckcp_section11_shortcode_encoded             = str_replace( ']', '*right-square-bracket*', $canuckcp_section11_shortcode_encoded, );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Section 11 Content/Media Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Background Image: ', 'canuck-cp' ) . $canuckcp_section11_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section11_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section11_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Background Color: ', 'canuck-cp' ) . $canuckcp_section11_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section11_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Text Color: ', 'canuck-cp' ) . $canuckcp_section11_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Media Area Usage Options: ', 'canuck-cp' ) . $canuckcp_section11_media_area_usage . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Image: ', 'canuck-cp' ) . $canuckcp_section11_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Shortcode: ', 'canuck-cp' ) . $canuckcp_section11_shortcode_encoded . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Title: ', 'canuck-cp' ) . $canuckcp_section11_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Content: ', 'canuck-cp' ) . $canuckcp_section11_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Include Link: ', 'canuck-cp' ) . $canuckcp_section11_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Button Link: ', 'canuck-cp' ) . $canuckcp_section11_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section11_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Button Label: ', 'canuck-cp' ) . $canuckcp_section11_button_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Button Background Color: ', 'canuck-cp' ) . $canuckcp_section11_button_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Button Text Color: ', 'canuck-cp' ) . $canuckcp_section11_button_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Button Hover Background Color: ', 'canuck-cp' ) . $canuckcp_section11_button_hover_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 11-Button Hover Text Color: ', 'canuck-cp' ) . $canuckcp_section11_button_hover_text_color . '</span>' . PHP_EOL;
	// Section 12 Options ===============================================================================================================================================.
	$canuckcp_section12_background_image         = esc_url( get_theme_mod( 'canuckcp_section12_background_image', '' ) );
	$canuckcp_section12_overlay_opacity          = esc_html( get_theme_mod( 'canuckcp_section12_overlay_opacity', '0' ) );
	$canuckcp_section12_use_parallax             = get_theme_mod( 'canuckcp_section12_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section12_background_color         = esc_html( get_theme_mod( 'canuckcp_section12_background_color', '#ffffff' ) );
	$canuckcp_section12_background_color_opacity = esc_html( get_theme_mod( 'canuckcp_section12_background_color_opacity', '1' ) );
	$canuckcp_section12_text_color               = esc_html( get_theme_mod( 'canuckcp_section12_text_color', '#4c4c4c' ) );
	$canuckcp_section12_title                    = esc_html( get_theme_mod( 'canuckcp_section12_title', '' ) );
	$canuckcp_section12_text                     = esc_html( get_theme_mod( 'canuckcp_section12_text', '' ) );
	$canuckcp_section12_portfolio_category       = esc_html( get_theme_mod( 'canuckcp_section12_portfolio_category', '' ) );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Section 12 Medium Portfolio Carousel Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 12-Background Image: ', 'canuck-cp' ) . $canuckcp_section12_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 12-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section12_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 12-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section12_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 12-Background Color: ', 'canuck-cp' ) . $canuckcp_section12_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 12-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section12_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 12-Text Color: ', 'canuck-cp' ) . $canuckcp_section12_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 12-Title: ', 'canuck-cp' ) . $canuckcp_section12_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 12-Content: ', 'canuck-cp' ) . $canuckcp_section12_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 12-Portfolio Category: ', 'canuck-cp' ) . $canuckcp_section12_portfolio_category . '</span>' . PHP_EOL;
	// Section 13 Options ===============================================================================================================================================.
	$canuckcp_section13_background_image         = esc_url( get_theme_mod( 'canuckcp_section13_background_image', '' ) );
	$canuckcp_section13_overlay_opacity          = esc_html( get_theme_mod( 'canuckcp_section13_overlay_opacity', '0' ) );
	$canuckcp_section13_use_parallax             = get_theme_mod( 'canuckcp_section13_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section13_background_color         = esc_html( get_theme_mod( 'canuckcp_section13_background_color', '#ffffff' ) );
	$canuckcp_section13_background_color_opacity = esc_html( get_theme_mod( 'canuckcp_section13_background_color_opacity', '1' ) );
	$canuckcp_section13_text_color               = esc_html( get_theme_mod( 'canuckcp_section13_text_color', '#4c4c4c' ) );
	$canuckcp_section13_title                    = esc_html( get_theme_mod( 'canuckcp_section13_title', '' ) );
	$canuckcp_section13_text                     = esc_html( get_theme_mod( 'canuckcp_section13_text', '' ) );
	$canuckcp_section13_portfolio_category       = esc_html( get_theme_mod( 'canuckcp_section13_portfolio_category', '' ) );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Section 13 Small Portfolio Carousel Options', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 13-Background Image: ', 'canuck-cp' ) . $canuckcp_section13_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 13-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section13_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 13-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section13_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 13-Background Color: ', 'canuck-cp' ) . $canuckcp_section13_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 13-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section13_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 13-Text Color: ', 'canuck-cp' ) . $canuckcp_section13_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 13-Title: ', 'canuck-cp' ) . $canuckcp_section13_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 13-Content: ', 'canuck-cp' ) . $canuckcp_section13_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 13-Portfolio Category: ', 'canuck-cp' ) . $canuckcp_section13_portfolio_category . '</span>' . PHP_EOL;
	// Section 14 Options ===============================================================================================================================================.
	$canuckcp_section14_text_color                    = esc_html( get_theme_mod( 'canuckcp_section14_text_color', '#4c4c4c' ) );
	$canuckcp_section14_background_image              = esc_url( get_theme_mod( 'canuckcp_section14_background_image', '' ) );
	$canuckcp_section14_overlay_opacity               = esc_html( get_theme_mod( 'canuckcp_section14_overlay_opacity', '0' ) );
	$canuckcp_section14_use_parallax                  = get_theme_mod( 'canuckcp_section14_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section14_background_color              = esc_html( get_theme_mod( 'canuckcp_section14_background_color', '#ffffff' ) );
	$canuckcp_section14_background_color_opacity      = esc_html( get_theme_mod( 'canuckcp_section14_background_color_opacity', '1' ) );
	$canuckcp_section14_button_background_color       = esc_html( get_theme_mod( 'canuckcp_section14_button_background_color', '#ffffff' ) );
	$canuckcp_section14_button_text_color             = esc_html( get_theme_mod( 'canuckcp_section14_button_text_color', '#474747' ) );
	$canuckcp_section14_button_hover_background_color = esc_html( get_theme_mod( 'canuckcp_section14_button_hover_background_color', '#474747' ) );
	$canuckcp_section14_button_hover_text_color       = esc_html( get_theme_mod( 'canuckcp_section14_button_hover_text_color', '#ffffff' ) );
	$canuckcp_section14_box1_use_font_icon            = get_theme_mod( 'canuckcp_section14_box1_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section14_box1_image_font               = esc_html( get_theme_mod( 'canuckcp_section14_box1_image_font', '' ) );
	$canuckcp_section14_box1_icon_color               = esc_html( get_theme_mod( 'canuckcp_section14_box1_icon_color', '#474747' ) );
	$canuckcp_section14_box1_image                    = esc_url( get_theme_mod( 'canuckcp_section14_box1_image', '' ) );
	$canuckcp_section14_box1_title                    = esc_html( get_theme_mod( 'canuckcp_section14_box1_title', '' ) );
	$canuckcp_section14_box1_text                     = esc_html( get_theme_mod( 'canuckcp_section14_box1_text', '' ) );
	$canuckcp_section14_box1_include_link             = get_theme_mod( 'canuckcp_section14_box1_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section14_box1_button_link              = esc_html( get_theme_mod( 'canuckcp_section14_box1_button_link', '' ) );
	$canuckcp_section14_box1_button_icon              = esc_html( get_theme_mod( 'canuckcp_section14_box1_button_icon', '' ) );
	$canuckcp_section14_box1_button_title             = esc_html( get_theme_mod( 'canuckcp_section14_box1_button_title', '' ) );
	$canuckcp_section14_box2_use_font_icon            = get_theme_mod( 'canuckcp_section14_box2_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section14_box2_image_font               = esc_html( get_theme_mod( 'canuckcp_section14_box2_image_font', '' ) );
	$canuckcp_section14_box2_icon_color               = esc_html( get_theme_mod( 'canuckcp_section14_box2_icon_color', '#474747' ) );
	$canuckcp_section14_box2_image                    = esc_url( get_theme_mod( 'canuckcp_section14_box2_image', '' ) );
	$canuckcp_section14_box2_title                    = esc_html( get_theme_mod( 'canuckcp_section14_box2_title', '' ) );
	$canuckcp_section14_box2_text                     = esc_html( get_theme_mod( 'canuckcp_section14_box2_text', '' ) );
	$canuckcp_section14_box2_include_link             = get_theme_mod( 'canuckcp_section14_box2_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section14_box2_button_link              = esc_html( get_theme_mod( 'canuckcp_section14_box2_button_link', '' ) );
	$canuckcp_section14_box2_button_icon              = esc_html( get_theme_mod( 'canuckcp_section14_box2_button_icon', '' ) );
	$canuckcp_section14_box2_button_title             = esc_html( get_theme_mod( 'canuckcp_section14_box2_button_title', '' ) );
	$canuckcp_section14_box3_use_font_icon            = get_theme_mod( 'canuckcp_section14_box3_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section14_box3_image_font               = esc_html( get_theme_mod( 'canuckcp_section14_box3_image_font', '' ) );
	$canuckcp_section14_box3_icon_color               = esc_html( get_theme_mod( 'canuckcp_section14_box3_icon_color', '#474747' ) );
	$canuckcp_section14_box3_image                    = esc_url( get_theme_mod( 'canuckcp_section14_box3_image', '' ) );
	$canuckcp_section14_box3_title                    = esc_html( get_theme_mod( 'canuckcp_section14_box3_title', '' ) );
	$canuckcp_section14_box3_text                     = esc_html( get_theme_mod( 'canuckcp_section14_box3_text', '' ) );
	$canuckcp_section14_box3_include_link             = get_theme_mod( 'canuckcp_section14_box3_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section14_box3_button_link              = esc_html( get_theme_mod( 'canuckcp_section14_box3_button_link', '' ) );
	$canuckcp_section14_box3_button_icon              = esc_html( get_theme_mod( 'canuckcp_section14_box3_button_icon', '' ) );
	$canuckcp_section14_box3_button_title             = esc_html( get_theme_mod( 'canuckcp_section14_box3_button_title', '' ) );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Sec 14 Three Service Boxes', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'General Options', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Text Color: ', 'canuck-cp' ) . $canuckcp_section14_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Background Image: ', 'canuck-cp' ) . $canuckcp_section14_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section14_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section14_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Background Color: ', 'canuck-cp' ) . $canuckcp_section14_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section14_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Button Background Color: ', 'canuck-cp' ) . $canuckcp_section14_button_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Button Text Color: ', 'canuck-cp' ) . $canuckcp_section14_button_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Button Hover Background Color: ', 'canuck-cp' ) . $canuckcp_section14_button_hover_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Button Hover Text Color: ', 'canuck-cp' ) . $canuckcp_section14_button_hover_text_color . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 1', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 1-Font Icon: ', 'canuck-cp' ) . $canuckcp_section14_box1_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 1-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section14_box1_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 1 Icon Color: ', 'canuck-cp' ) . $canuckcp_section14_box1_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 1-Image: ', 'canuck-cp' ) . $canuckcp_section14_box1_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 1-Title: ', 'canuck-cp' ) . $canuckcp_section14_box1_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 1-Content: ', 'canuck-cp' ) . $canuckcp_section14_box1_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 1-Link: ', 'canuck-cp' ) . $canuckcp_section14_box1_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 1-Link URL: ', 'canuck-cp' ) . $canuckcp_section14_box1_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section14_box1_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 1-Link Label: ', 'canuck-cp' ) . $canuckcp_section14_box1_button_title . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 2', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 2-Font Icon: ', 'canuck-cp' ) . $canuckcp_section14_box2_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 2-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section14_box2_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 2 Icon Color: ', 'canuck-cp' ) . $canuckcp_section14_box2_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 2-Image: ', 'canuck-cp' ) . $canuckcp_section14_box2_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 2-Title: ', 'canuck-cp' ) . $canuckcp_section14_box2_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 2-Content: ', 'canuck-cp' ) . $canuckcp_section14_box2_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 2-Link: ', 'canuck-cp' ) . $canuckcp_section14_box2_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 2-Link URL: ', 'canuck-cp' ) . $canuckcp_section14_box2_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section14_box2_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 2-Link Label: ', 'canuck-cp' ) . $canuckcp_section14_box2_button_title . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 3', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 3-Font Icon: ', 'canuck-cp' ) . $canuckcp_section14_box3_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 3-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section14_box3_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 3 Icon Color: ', 'canuck-cp' ) . $canuckcp_section14_box3_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 3-Image: ', 'canuck-cp' ) . $canuckcp_section14_box3_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 3-Title: ', 'canuck-cp' ) . $canuckcp_section14_box3_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 3-Content: ', 'canuck-cp' ) . $canuckcp_section14_box3_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 3-Link: ', 'canuck-cp' ) . $canuckcp_section14_box3_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 3-Link URL: ', 'canuck-cp' ) . $canuckcp_section14_box3_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section14_box3_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 14-Box 3-Link Label: ', 'canuck-cp' ) . $canuckcp_section14_box3_button_title . '</span>' . PHP_EOL;
	// Section 15 Options ===============================================================================================================================================.
	$canuckcp_section15_background_image              = esc_url( get_theme_mod( 'canuckcp_section15_background_image', '' ) );
	$canuckcp_section15_overlay_opacity               = esc_html( get_theme_mod( 'canuckcp_section15_overlay_opacity', '0' ) );
	$canuckcp_section15_use_parallax                  = get_theme_mod( 'canuckcp_section15_use_parallax', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section15_background_color              = esc_html( get_theme_mod( 'canuckcp_section15_background_color', '#ffffff' ) );
	$canuckcp_section15_background_color_opacity      = esc_html( get_theme_mod( 'canuckcp_section15_background_color_opacity', '1' ) );
	$canuckcp_section15_text_color                    = esc_html( get_theme_mod( 'canuckcp_section15_text_color', '#4c4c4c' ) );
	$canuckcp_section15_button_background_color       = esc_html( get_theme_mod( 'canuckcp_section15_button_background_color', '#ffffff' ) );
	$canuckcp_section15_button_text_color             = esc_html( get_theme_mod( 'canuckcp_section15_button_text_color', '#474747' ) );
	$canuckcp_section15_button_hover_background_color = esc_html( get_theme_mod( 'canuckcp_section15_button_hover_background_color', '#474747' ) );
	$canuckcp_section15_button_hover_text_color       = esc_html( get_theme_mod( 'canuckcp_section15_button_hover_text_color', '#ffffff' ) );
	$canuckcp_section15_box1_use_font_icon            = get_theme_mod( 'canuckcp_section15_box1_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section15_box1_image_font               = esc_html( get_theme_mod( 'canuckcp_section15_box1_image_font', '' ) );
	$canuckcp_section15_box1_icon_color               = esc_html( get_theme_mod( 'canuckcp_section15_box1_icon_color', '#474747' ) );
	$canuckcp_section15_box1_image                    = esc_url( get_theme_mod( 'canuckcp_section15_box1_image', '' ) );
	$canuckcp_section15_box1_title                    = esc_html( get_theme_mod( 'canuckcp_section15_box1_title', '' ) );
	$canuckcp_section15_box1_text                     = esc_html( get_theme_mod( 'canuckcp_section15_box1_text', '' ) );
	$canuckcp_section15_box1_include_link             = get_theme_mod( 'canuckcp_section15_box1_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section15_box1_button_link              = esc_html( get_theme_mod( 'canuckcp_section15_box1_button_link', '' ) );
	$canuckcp_section15_box1_button_icon              = esc_html( get_theme_mod( 'canuckcp_section15_box1_button_icon', '' ) );
	$canuckcp_section15_box1_button_title             = esc_html( get_theme_mod( 'canuckcp_section15_box1_button_title', '' ) );
	$canuckcp_section15_box2_use_font_icon            = get_theme_mod( 'canuckcp_section15_box2_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section15_box2_image_font               = esc_html( get_theme_mod( 'canuckcp_section15_box2_image_font', '' ) );
	$canuckcp_section15_box2_icon_color               = esc_html( get_theme_mod( 'canuckcp_section15_box2_icon_color', '#474747' ) );
	$canuckcp_section15_box2_image                    = esc_url( get_theme_mod( 'canuckcp_section15_box2_image', '' ) );
	$canuckcp_section15_box2_title                    = esc_html( get_theme_mod( 'canuckcp_section15_box2_title', '' ) );
	$canuckcp_section15_box2_text                     = esc_html( get_theme_mod( 'canuckcp_section15_box2_text', '' ) );
	$canuckcp_section15_box2_include_link             = get_theme_mod( 'canuckcp_section15_box2_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section15_box2_button_link              = esc_html( get_theme_mod( 'canuckcp_section15_box2_button_link', '' ) );
	$canuckcp_section15_box2_button_icon              = esc_html( get_theme_mod( 'canuckcp_section15_box2_button_icon', '' ) );
	$canuckcp_section15_box2_button_title             = esc_html( get_theme_mod( 'canuckcp_section15_box2_button_title', '' ) );
	$canuckcp_section15_box3_use_font_icon            = get_theme_mod( 'canuckcp_section15_box3_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section15_box3_image_font               = esc_html( get_theme_mod( 'canuckcp_section15_box3_image_font', '' ) );
	$canuckcp_section15_box3_icon_color               = esc_html( get_theme_mod( 'canuckcp_section15_box3_icon_color', '#474747' ) );
	$canuckcp_section15_box3_image                    = esc_url( get_theme_mod( 'canuckcp_section15_box3_image', '' ) );
	$canuckcp_section15_box3_title                    = esc_html( get_theme_mod( 'canuckcp_section15_box3_title', '' ) );
	$canuckcp_section15_box3_text                     = esc_html( get_theme_mod( 'canuckcp_section15_box3_text', '' ) );
	$canuckcp_section15_box3_include_link             = get_theme_mod( 'canuckcp_section15_box3_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section15_box3_button_link              = esc_html( get_theme_mod( 'canuckcp_section15_box3_button_link', '' ) );
	$canuckcp_section15_box3_button_icon              = esc_html( get_theme_mod( 'canuckcp_section15_box3_button_icon', '' ) );
	$canuckcp_section15_box3_button_title             = esc_html( get_theme_mod( 'canuckcp_section15_box3_button_title', '' ) );
	$canuckcp_section15_box4_use_font_icon            = get_theme_mod( 'canuckcp_section15_box4_use_font_icon', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section15_box4_image_font               = esc_html( get_theme_mod( 'canuckcp_section15_box4_image_font', '' ) );
	$canuckcp_section15_box4_icon_color               = esc_html( get_theme_mod( 'canuckcp_section15_box4_icon_color', '#474747' ) );
	$canuckcp_section15_box4_image                    = esc_url( get_theme_mod( 'canuckcp_section15_box4_image', '' ) );
	$canuckcp_section15_box4_title                    = esc_html( get_theme_mod( 'canuckcp_section15_box4_title', '' ) );
	$canuckcp_section15_box4_text                     = esc_html( get_theme_mod( 'canuckcp_section15_box4_text', '' ) );
	$canuckcp_section15_box4_include_link             = get_theme_mod( 'canuckcp_section15_box4_include_link', false ) ? 'Checked' : 'Unchecked';
	$canuckcp_section15_box4_button_link              = esc_html( get_theme_mod( 'canuckcp_section15_box4_button_link', '' ) );
	$canuckcp_section15_box4_button_icon              = esc_html( get_theme_mod( 'canuckcp_section15_box4_button_icon', '' ) );
	$canuckcp_section15_box4_button_title             = esc_html( get_theme_mod( 'canuckcp_section15_box4_button_title', '' ) );
	// display options.
	$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Sec 15 Four Service Boxes', 'canuck-cp' ) . '</h3>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'General Options', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Text Color: ', 'canuck-cp' ) . $canuckcp_section15_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Background Image: ', 'canuck-cp' ) . $canuckcp_section15_background_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Overlay Opacity: ', 'canuck-cp' ) . $canuckcp_section15_overlay_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Use Parallax: ', 'canuck-cp' ) . $canuckcp_section15_use_parallax . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Background Color: ', 'canuck-cp' ) . $canuckcp_section15_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Background Color Opacity: ', 'canuck-cp' ) . $canuckcp_section15_background_color_opacity . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Button Background Color: ', 'canuck-cp' ) . $canuckcp_section15_button_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Button Text Color: ', 'canuck-cp' ) . $canuckcp_section15_button_text_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Button Hover Background Color: ', 'canuck-cp' ) . $canuckcp_section15_button_hover_background_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Button Hover Text Color: ', 'canuck-cp' ) . $canuckcp_section15_button_hover_text_color . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 1', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 1-Font Icon: ', 'canuck-cp' ) . $canuckcp_section15_box1_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 1-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section15_box1_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 1 Icon Color: ', 'canuck-cp' ) . $canuckcp_section15_box1_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 1-Image: ', 'canuck-cp' ) . $canuckcp_section15_box1_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 1-Title: ', 'canuck-cp' ) . $canuckcp_section15_box1_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 1-Content: ', 'canuck-cp' ) . $canuckcp_section15_box1_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 1-Link: ', 'canuck-cp' ) . $canuckcp_section15_box1_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 1-Link URL: ', 'canuck-cp' ) . $canuckcp_section15_box1_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section15_box1_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 1-Link Label: ', 'canuck-cp' ) . $canuckcp_section15_box1_button_title . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 2', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 2-Font Icon: ', 'canuck-cp' ) . $canuckcp_section15_box2_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 2-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section15_box2_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 2 Icon Color: ', 'canuck-cp' ) . $canuckcp_section15_box2_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 2-Image: ', 'canuck-cp' ) . $canuckcp_section15_box2_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 2-Title: ', 'canuck-cp' ) . $canuckcp_section15_box2_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 2-Content: ', 'canuck-cp' ) . $canuckcp_section15_box2_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 2-Link: ', 'canuck-cp' ) . $canuckcp_section15_box2_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 2-Link URL: ', 'canuck-cp' ) . $canuckcp_section15_box2_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section15_box2_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 2-Link Label: ', 'canuck-cp' ) . $canuckcp_section15_box2_button_title . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 3', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Font Icon: ', 'canuck-cp' ) . $canuckcp_section15_box3_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section15_box3_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3 Icon Color: ', 'canuck-cp' ) . $canuckcp_section15_box3_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Image: ', 'canuck-cp' ) . $canuckcp_section15_box3_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Title: ', 'canuck-cp' ) . $canuckcp_section15_box3_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Content: ', 'canuck-cp' ) . $canuckcp_section15_box3_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Link: ', 'canuck-cp' ) . $canuckcp_section15_box3_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Link URL: ', 'canuck-cp' ) . $canuckcp_section15_box3_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section15_box3_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Link Label: ', 'canuck-cp' ) . $canuckcp_section15_box3_button_title . '</span>' . PHP_EOL;
	$string .= '<h4 style="line-height:1em;background-color:#efedb1;">' . esc_html__( 'Service Box 4', 'canuck-cp' ) . '</h4>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Font Icon: ', 'canuck-cp' ) . $canuckcp_section15_box4_use_font_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Font Icon Name: ', 'canuck-cp' ) . $canuckcp_section15_box4_image_font . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3 Icon Color: ', 'canuck-cp' ) . $canuckcp_section15_box4_icon_color . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Image: ', 'canuck-cp' ) . $canuckcp_section15_box4_image . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Title: ', 'canuck-cp' ) . $canuckcp_section15_box4_title . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Content: ', 'canuck-cp' ) . $canuckcp_section15_box4_text . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Link: ', 'canuck-cp' ) . $canuckcp_section15_box4_include_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Link URL: ', 'canuck-cp' ) . $canuckcp_section15_box4_button_link . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Use a button font icon: ', 'canuck-cp' ) . $canuckcp_section15_box4_button_icon . '</span>' . PHP_EOL;
	$string .= '<span>' . esc_html__( 'Section 15-Box 3-Link Label: ', 'canuck-cp' ) . $canuckcp_section15_box4_button_title . '</span>' . PHP_EOL;
	return $string;
}

/**
 * Canuck Option Content: Custom Widget Content Creation.
 */
function canuckcp_custom_widget_content_backup() {
	$string         = '';
	$widget_authors = get_option( 'widget_canuckcp_author_widget' );
	$count          = 1;
	$lastone        = count( $widget_authors );
	foreach ( $widget_authors as $widget_author ) {
		if ( $count !== $lastone ) {
			$string .= '<h3 style="line-height:1em;background-color:#c2fccf;">' . esc_html__( 'Canuck CP Author Widget: ', 'canuck-cp' ) . '</h3>' . $count . PHP_EOL;
			$string .= '<span>' . esc_html__( 'Title', 'canuck-cp' ) . '</span>' . PHP_EOL;
			$string .= '<span>' . esc_html( $widget_author['canuckcp_author_title'] ) . '</span>' . PHP_EOL;
			$string .= '<span>' . esc_html__( 'Name: ', 'canuck-cp' ) . '</span>' . PHP_EOL;
			$string .= '<span>' . esc_html( $widget_author['canuckcp_author_name'] ) . '</span>' . PHP_EOL;
			$string .= '<span>' . esc_html__( 'Email: ', 'canuck-cp' ) . '</span>' . PHP_EOL;
			$string .= '<span>' . esc_html( $widget_author['canuckcp_author_email'] ) . '</span>' . PHP_EOL;
			$string .= '<span>' . esc_html__( 'Website: ', 'canuck-cp' ) . '</span>' . PHP_EOL;
			$string .= '<span>' . esc_url( $widget_author['canuckcp_author_website'] ) . '</span>' . PHP_EOL;
			$string .= '<span>' . esc_html__( 'Biography: ', 'canuck-cp' ) . '</span>' . PHP_EOL;
			$string .= '<span>' . wp_kses_post( $widget_author['canuckcp_author_bio'] ) . '</span>' . PHP_EOL;
			$string .= PHP_EOL;
			$count++;
		}
	}
	return $string;
}

/**
 * Function to import parent theme Canuck custom options.
 */
function canuckcp_import_parent_options() {
	$canuckcp_import_parent_options = get_theme_mod( 'canuckcp_import_parent_theme_options' ) ? true : false;
	if ( true === $canuckcp_import_parent_options ) {
		$options_setup     = canuckcp_get_customizer_option_partameters();
		$parent_theme_mods = get_option( 'theme_mods_canuck' );
		// Start by turning off the switch to import options.
		set_theme_mod( 'canuckcp_import_parent_theme_options', false );
		// Only update if the option in the child theme is not set.
		foreach ( $parent_theme_mods as $option_slug => $option_value ) {
			if ( ! get_theme_mod( $option_slug ) ) {
				set_theme_mod( $option_slug, $option_value );
			}
		}
	}
}
add_action( 'customize_save_after', 'canuckcp_import_parent_options' );

/**
 * =========================================================================================================
 *                       choices arrays for option select elements
 * =========================================================================================================
 */
/**
 * Flex slider pause time choices.
 */
function canuckcp_flex_slider_pause_choices() {
	return array(
		'4000'  => '4000',
		'5000'  => '5000',
		'6000'  => '6000',
		'7000'  => '7000',
		'8000'  => '8000',
		'9000'  => '9000',
		'10000' => '10000',
		'11000' => '11000',
		'12000' => '12000',
	);
}

/**
 * Flex slider transition time choices.
 */
function canuckcp_flex_slider_transition_choices() {
	return array(
		'500'  => '500',
		'600'  => '600',
		'750'  => '750',
		'1000' => '1000',
		'1250' => '1250',
		'1500' => '1500',
		'1750' => '1750',
		'2000' => '2000',
	);
}

/**
 * Page layout choices.
 */
function canuckcp_page_layout_choices() {
	return array(
		'left_sidebar'  => get_template_directory_uri() . '/images/A-C.png',
		'right_sidebar' => get_template_directory_uri() . '/images/C-A.png',
		'both_sidebars' => get_template_directory_uri() . '/images/A-C-B.png',
		'fullwidth'     => get_template_directory_uri() . '/images/FW.png',
	);
}

/**
 * Sidebar choices.
 */
function canuckcp_sidebar_choices() {
	return array(
		'default-a' => esc_html__( 'Default Sidebar A', 'canuck-cp' ),
		'default-b' => esc_html__( 'Default Sidebar B', 'canuck-cp' ),
		'blog-a'    => esc_html__( 'Blog Sidebar A', 'canuck-cp' ),
		'blog-b'    => esc_html__( 'Blog Sidebar B', 'canuck-cp' ),
		'sidebar-1' => esc_html__( 'Extra Sidebar 1', 'canuck-cp' ),
		'sidebar-2' => esc_html__( 'Extra Sidebar 2', 'canuck-cp' ),
		'sidebar-3' => esc_html__( 'Extra Sidebar 3', 'canuck-cp' ),
		'sidebar-4' => esc_html__( 'Extra Sidebar 4', 'canuck-cp' ),
		'sidebar-5' => esc_html__( 'Extra Sidebar 5', 'canuck-cp' ),
		'sidebar-6' => esc_html__( 'Extra Sidebar 6', 'canuck-cp' ),
	);
}

/**
 * Font choices.
 */
function canuckcp_font_choices() {
	return array(
		'default'             => esc_html__( 'default', 'canuck-cp' ),
		'Arial'               => esc_html__( 'Arial', 'canuck-cp' ),
		'Artifika'            => esc_html__( 'Artifika', 'canuck-cp' ),
		'Arvo'                => esc_html__( 'Arvo', 'canuck-cp' ),
		'Book Antiqua'        => esc_html__( 'Book Antiqua', 'canuck-cp' ),
		'Bubbler One'         => esc_html__( 'Bubbler One', 'canuck-cp' ),
		'Cabin'               => esc_html__( 'Cabin', 'canuck-cp' ),
		'Cambria'             => esc_html__( 'Cambria', 'canuck-cp' ),
		'Comic Sans MS'       => esc_html__( 'Comic Sans MS', 'canuck-cp' ),
		'Corben'              => esc_html__( 'Corben', 'canuck-cp' ),
		'Droid Sans'          => esc_html__( 'Droid Sans', 'canuck-cp' ),
		'Droid Serif'         => esc_html__( 'Droid Serif', 'canuck-cp' ),
		'Great Vibes'         => esc_html__( 'Great Vibes', 'canuck-cp' ),
		'Georgia'             => esc_html__( 'Georgia', 'canuck-cp' ),
		'Josefin Sans'        => esc_html__( 'Josefin Sans', 'canuck-cp' ),
		'Josefin Slab'        => esc_html__( 'Josefin Slab', 'canuck-cp' ),
		'Karla'               => esc_html__( 'Karla', 'canuck-cp' ),
		'Lato'                => esc_html__( 'Lato', 'canuck-cp' ),
		'Lobster'             => esc_html__( 'Lobster', 'canuck-cp' ),
		'Old Standard TT'     => esc_html__( 'Old Standard TT', 'canuck-cp' ),
		'Open Sans'           => esc_html__( 'Open Sans', 'canuck-cp' ),
		'Playfair Display SC' => esc_html__( 'Playfair Display SC', 'canuck-cp' ),
		'PT Sans'             => esc_html__( 'PT Sans', 'canuck-cp' ),
		'PT Sans'             => esc_html__( 'PT Sans', 'canuck-cp' ),
		'PT Serif'            => esc_html__( 'PT Serif', 'canuck-cp' ),
		'Puritan'             => esc_html__( 'Puritan', 'canuck-cp' ),
		'Raleway'             => esc_html__( 'Raleway', 'canuck-cp' ),
		'Rock Salt'           => esc_html__( 'Rock Salt', 'canuck-cp' ),
		'Tahoma'              => esc_html__( 'Tahoma', 'canuck-cp' ),
		'Times New Roman'     => esc_html__( 'Times New Roman', 'canuck-cp' ),
		'Titillium Web'       => esc_html__( 'Titillium Web', 'canuck-cp' ),
		'Trebuchet MS'        => esc_html__( 'Trebuchet MS', 'canuck-cp' ),
		'Ubuntu'              => esc_html__( 'Ubuntu', 'canuck-cp' ),
		'Verdana'             => esc_html__( 'Verdana', 'canuck-cp' ),
		'Vollkorn'            => esc_html__( 'Vollkorn', 'canuck-cp' ),
	);
}

/**
 *  Choices
 */
function canuckcp_home_area_choices() {
	return array(
		'Section 1'  => esc_html__( 'Section 1 - one column and button', 'canuck-cp' ),
		'Section 2'  => esc_html__( 'Section 2 - three column service box', 'canuck-cp' ),
		'Section 3'  => esc_html__( 'Section 3 - one column and button', 'canuck-cp' ),
		'Section 4'  => esc_html__( 'Section 4 - two column service box', 'canuck-cp' ),
		'Section 5'  => esc_html__( 'Section 5 - one column and button', 'canuck-cp' ),
		'Section 6'  => esc_html__( 'Section 6 - two column service box', 'canuck-cp' ),
		'Section 7'  => esc_html__( 'Section 7 - one column and button', 'canuck-cp' ),
		'Section 8'  => esc_html__( 'Section 8 - four column service box', 'canuck-cp' ),
		'Section 9'  => esc_html__( 'Section 9 - portfolio', 'canuck-cp' ),
		'Section 10' => esc_html__( 'Section 10 - image left, content right', 'canuck-cp' ),
		'Section 11' => esc_html__( 'Section 11 - content left, image right', 'canuck-cp' ),
		'Section 12' => esc_html__( 'Section 12 - carousel medium size', 'canuck-cp' ),
		'Section 13' => esc_html__( 'Section 13 - carousel small size', 'canuck-cp' ),
		'Section 14' => esc_html__( 'Section 14 - three column service box', 'canuck-cp' ),
		'Section 15' => esc_html__( 'Section 15 - four column service box', 'canuck-cp' ),
		'none'       => esc_html__( 'none', 'canuck-cp' ),
	);
}

/**
 *  Choices
 */
function canuckcp_opacity_range_choices() {
	return array(
		'min'   => 0,
		'max'   => 1,
		'step'  => 0.1,
		'class' => 'range1-class',
		'style' => 'color: #B26969',
	);
}

/**
 * =========================================================================================================
 *                       Sanitization callback functions
 * =========================================================================================================
 */
/**
 * Select sanitization callback
 *
 * - Sanitization: select
 * - Control: select, radio
 *
 * Sanitization callback for 'select' and 'radio' type controls. This callback sanitizes `$input`
 * as a slug, and then validates `$input` against the choices defined for the control.
 *
 * @see     sanitize_key()               https://developer.wordpress.org/reference/functions/sanitize_key/
 * @see     $wp_customize->get_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/get_control/
 *
 * @param   string               $input   Slug to sanitize.
 * @param   WP_Customize_Setting $setting Setting instance.
 * @return  string Sanitized slug if it is a valid choice; otherwise, the setting default.
 * @link    https://github.com/WPTRT/code-examples/blob/master/customizer/sanitization-callbacks.php
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 */
function canuckcp_sanitize_select( $input, $setting ) {
	// Ensure input is a slug.
	$input = sanitize_key( $input );
	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;
	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
/**
 * Whitelist font choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuckcp_sanitize_font_select( $input ) {
	$choices = array(
		'default',
		'Arial',
		'Artifika',
		'Arvo',
		'Book Antiqua',
		'Bubbler One',
		'Cabin',
		'Cambria',
		'Comic Sans MS',
		'Corben',
		'Droid Sans',
		'Droid Serif',
		'Great Vibes',
		'Georgia',
		'Josefin Sans',
		'Josefin Slab',
		'Karla',
		'Lato',
		'Lobster',
		'Old Standard TT',
		'Open Sans',
		'Playfair Display SC',
		'PT Sans',
		'PT Serif',
		'Puritan',
		'Raleway',
		'Rock Salt',
		'Tahoma',
		'Times New Roman',
		'Titillium Web',
		'Trebuchet MS',
		'Ubuntu',
		'Verdana',
		'Vollkorn',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'Open Sans'; // phpcs:ignore
	}
}

/**
 * Whitelist flex slider effect choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuckcp_sanitize_flex_effect( $input ) {
	$choices = array(
		'slide',
		'fade',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'fade';
	}
}

/**
 * Whitelist flex slider pause time choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuckcp_sanitize_flex_pause( $input ) {
	$choices = array(
		'4000',
		'5000',
		'6000',
		'7000',
		'8000',
		'9000',
		'10000',
		'11000',
		'12000',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return '5000';
	}
}

/**
 * Whitelist fex slider transform time choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuckcp_sanitize_flex_trans( $input ) {
	$choices = array(
		'500',
		'600',
		'750',
		'1000',
		'1250',
		'1500',
		'1750',
		'2000',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return '600';
	}
}

/**
 * Whitelist layout choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuckcp_sanitize_layout( $input ) {
	$choices = array(
		'left_sidebar',
		'right_sidebar',
		'both_sidebars',
		'fullwidth',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'right_sidebar';
	}
}

/**
 * Whitelist feature choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuckcp_sanitize_feature( $input ) {
	$choices = array(
		'background_image',
		'button_nav',
		'fullsize',
		'thumbnail',
		'widgetized',
		'no_feature',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'background_image';
	}
}

/**
 * Whitelist home area section choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuckcp_sanitize_homearea_select( $input ) {
	$choices = array(
		'Section 1',
		'Section 2',
		'Section 3',
		'Section 4',
		'Section 5',
		'Section 6',
		'Section 7',
		'Section 8',
		'Section 9',
		'Section 10',
		'Section 11',
		'Section 12',
		'Section 13',
		'Section 14',
		'Section 15',
		'none',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'none';
	}
}

/**
 * Whitelist useage choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuckcp_sanitize_useage( $input ) {
	$choices = array(
		'normal',
		'shortcode',
		'widgetized',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'normal';
	}
}

/**
 * Whitelist blog choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuckcp_sanitize_blog_style( $input ) {
	$choices = array(
		'top_feature',
		'side_feature',
		'two_column_grid',
		'three_column_grid',
		'two_stamp',
		'three_stamp',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'top_feature';
	}
}

/**
 * Whitelist font display choices.
 *
 * @param   string $input Slug to sanitize.
 */
function canuckcp_sanitize_font_display( $input ) {
	$choices = array(
		'auto',
		'block',
		'swap',
		'fallback',
		'optional',
	);
	if ( in_array( $input, $choices, true ) ) {
		return $input;
	} else {
		return 'auto';
	}
}

/**
 * Load customizer-control.js.
 */
function canuckcp_customize_control_js() {
	wp_enqueue_script( 'canuckcp_customizer_control', get_template_directory_uri() . '/js/kha-customizer-controls.js', array( 'customize-controls', 'jquery' ), CANUCKCP_VERSION, true );
}
add_action( 'customize_controls_enqueue_scripts', 'canuckcp_customize_control_js' );
