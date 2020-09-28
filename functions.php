<?php
/**
 * Main functions file
 *
 * This file is the WordPress functions.php file, which which contains many
 * of the functions for set up and operation of the theme
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

// Theme version.
define( 'CANUCKCP_VERSION', '0.0.1' );
/**
 * ---- load files ---------------
 */
require get_template_directory() . '/css/custom-css.php';
require get_template_directory() . '/css/skin-css.php';
require get_template_directory() . '/includes/post-functions.php';
require get_template_directory() . '/includes/custom-functions.php';
require get_template_directory() . '/includes/custom-header.php';
require get_template_directory() . '/includes/icons.php';
if ( is_admin() ) {
	require get_template_directory() . '/includes/metabox-functions.php';
	require get_template_directory() . '/includes/theme-page.php';
}
if ( is_customize_preview() ) {
	require get_template_directory() . '/includes/kha-customizer.php';
}
require get_template_directory() . '/widgets/class-canuck-cp-author-widget.php';
require get_template_directory() . '/widgets/class-canuck-cp-category-widget.php';
require get_template_directory() . '/widgets/class-canuck-cp-recent-posts-widget.php';
require get_template_directory() . '/widgets/class-canuck-cp-archives-widget.php';
if ( false === get_theme_mod( 'canuckcp_disable_widget_slider' ) ? true : false ) {
	require get_template_directory() . '/widgets/class-canuck-cp-slider-widget.php';
}
if ( false === get_theme_mod( 'canuckcp_use_contact_form' ) ? true : false ) {
	require get_template_directory() . '/widgets/class-canuck-cp-contact-form-widget.php';
}
require get_template_directory() . '/includes/media-grabber.php';
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/classiccommerce-functions.php';
}
if ( false !== get_theme_mod( 'canuckcp_breadcrumbs' ) ? true : false ) {
	require get_template_directory() . '/includes/class-canuckcp-breadcrumb-trail.php';
}

if ( ! function_exists( 'canuckcp_load_js' ) ) {
	/**
	 * Load jQuery Scripts
	 *
	 * Function to load jquery scripts. Some of the functions are conditionally loaded
	 * so that the user can disable naughty scripts.
	 *
	 * @uses is_admin() @uses wp_enqueue_script @uses get_template_directory_uri()
	 */
	function canuckcp_load_js() {
		$page_template           = basename( get_page_template() );
		$use_one_plugin_file     = get_theme_mod( 'canuckcp_use_one_plugins_file' ) ? true : false;
		$disable_colorbox        = get_theme_mod( 'canuckcp_disable_colorboxjs' ) ? true : false;
		$disable_fitvidsjs       = get_theme_mod( 'canuckcp_disable_fitvidsjs' ) ? true : false;
		$disable_smoothscroll    = get_theme_mod( 'canuckcp_disable_smoothscroll' ) ? true : false;
		$disable_scrollreveal    = get_theme_mod( 'canuckcp_disable_scrollreveal' ) ? true : false;
		$disable_widget_slider   = get_theme_mod( 'canuckcp_disable_widget_slider' ) ? true : false;
		$disable_splide          = get_theme_mod( 'canuckcp_disable_splide' ) ? true : false;
		$include_pinterest_pinit = get_theme_mod( 'canuckcp_include_pinit' ) ? true : false;
		$use_lazyload            = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
		$use_recaptcha           = get_theme_mod( 'canuckcp_use_recaptcha' ) ? true : false;
		if ( ! is_admin() ) {
			if ( true === $use_lazyload ) {
				// Lazyload plugin, doc ready included in minified file.
				wp_enqueue_script( 'jquery-lazy', get_template_directory_uri() . '/js/jquery.lazy.min.js', array( 'jquery' ), CANUCKCP_VERSION, false );
			}
			// Static home page specific scripts.
			if ( 'template-home.php' === $page_template ) {
				wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/parallax.min.js', array( 'jquery' ), CANUCKCP_VERSION, true );
				// Load scroll reveal, doc ready included in minified file.
				if ( false === $disable_scrollreveal ) {
					wp_enqueue_script( 'scrollreveal-js', get_template_directory_uri() . '/js/scrollreveal.min.js', array( 'jquery' ), CANUCKCP_VERSION, true );
				}
			}
			// Option to disable fitvids, doc ready included in minified file.
			if ( false === $disable_fitvidsjs ) {
				wp_enqueue_script( 'jquery-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.min.js', array( 'jquery' ), CANUCKCP_VERSION, true );
			}
			// Option to disable smoothscroll.
			if ( false === $disable_smoothscroll ) {
				wp_enqueue_script( 'canuck-cp-smoothscroll', get_template_directory_uri() . '/js/smooth-scroll-scripts.js', array( 'jquery' ), CANUCKCP_VERSION, true );
			}
			// Option to disable colorbox, doc ready included in minified file.
			if ( false === $disable_colorbox ) {
				wp_enqueue_script( 'jquery-colorbox', get_template_directory_uri() . '/js/colorbox/jquery.colorbox-min.js', array( 'jquery' ), CANUCKCP_VERSION, true );
			}
			// Load custom js.
			wp_enqueue_script( 'canuck-cp-custom_js', get_template_directory_uri() . '/js/doc-ready-scripts.js', array( 'jquery' ), CANUCKCP_VERSION, true );
			if ( true !== $disable_splide ) {
				// Load splide slider.
				wp_enqueue_script( 'jquery-splide-slider', get_template_directory_uri() . '/js/splide/js/splide.min.js', array(), CANUCKCP_VERSION, true );
				wp_enqueue_script( 'canuckcp-splide-js', get_template_directory_uri() . '/js/splide/splide-doc-ready-scripts.js', array( 'jquery-splide-slider' ), CANUCKCP_VERSION, true );
			}
			if ( 'template-masonry.php' === $page_template || 'template-portfolio.php' === $page_template ) {
				wp_enqueue_script( 'jquery-masonry' );
				wp_enqueue_script( 'imagesloaded' );
				wp_enqueue_script( 'canuck-cp-masonry', get_template_directory_uri() . '/js/masonry-doc-ready-scripts.js', array( 'jquery' ), CANUCKCP_VERSION, true );
			}
			// Pinterest Pin It.
			if ( true === $include_pinterest_pinit ) {
				wp_enqueue_script( 'pinit-js', get_template_directory_uri() . '/js/pinit.js', array( 'jquery' ), CANUCKCP_VERSION, true );
			}
			// use reCaptcha.
			if ( true === $use_recaptcha ) {
				// CaptchaCallback is in the doc ready so it is loaded first.
				wp_enqueue_script( 'canuckcp-recaptcha-doc-ready', get_template_directory_uri() . '/js/canuckcp_recaptcha.js', array( 'jquery' ), CANUCKCP_VERSION, false );
				wp_enqueue_script( 'canuckcp-google-recaptcha', 'https://www.google.com/recaptcha/api.js?onload=CanuckCPCaptchaCallback&render=explicit', array( 'canuckcp-recaptcha-doc-ready' ), CANUCKCP_VERSION, false );
			}
			// Load threaded comments.
			if ( is_singular() && comments_open() && 1 === ( get_option( 'thread_comments' ) ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
			// localize scripts for keyboard navigation.
			wp_localize_script(
				'canuck-cp-custom_js',
				'accessibleNavigationScreenReaderText',
				array(
					'expandMain'    => __( '````````````````````````Open Main Menu', 'canuck-cp' ),
					'collapseMain'  => __( 'Close Main Menu', 'canuck-cp' ),
					'expandChild'   => __( 'Expand Submenu', 'canuck-cp' ),
					'collapseChild' => __( 'Collapse Submenu', 'canuck-cp' ),
				)
			);
		}
	}
	add_action( 'wp_enqueue_scripts', 'canuckcp_load_js' );
}

if ( ! function_exists( 'canuckcp_styles' ) ) {
	/**
	 * Load CSS Styles
	 *
	 * Function to load css styles. Some of the style sheets are conditionally loaded
	 * so as they are part of jQuery plugins.
	 *
	 * WordPress functions - see codex
	 *
	 * @uses wp_register_style() @uses wp_enqueue_style @uses get_template_directory_uri()
	 * @uses get_template_directory_uri()
	 */
	function canuckcp_styles() {
		$page_template = get_page_template_slug();
		$display_font  = get_theme_mod( 'canuckcp_display_font_options', 'auto' );
		// Load theme fonts.
		$theme_fonts = canuckcp_fonts();
		if ( 'google' === $theme_fonts['header']['type'] ) {
			wp_enqueue_style( 'canuck-cp-google-1', 'https://fonts.googleapis.com/css?family=' . $theme_fonts['header']['enqueue'] . '&display=' . $display_font, array(), CANUCKCP_VERSION );
		}
		if ( 'google' === $theme_fonts['body']['type'] ) {
			if ( $theme_fonts['header']['enqueue'] !== $theme_fonts['body']['enqueue'] ) {
				wp_enqueue_style( 'canuck-cp-google-2', 'https://fonts.googleapis.com/css?family=' . $theme_fonts['body']['enqueue'] . '&display=' . $display_font, array(), CANUCKCP_VERSION );
			}
		}
		if ( 'google' === $theme_fonts['page']['type'] ) {
			if ( $theme_fonts['header']['enqueue'] !== $theme_fonts['page']['enqueue'] && $theme_fonts['body']['enqueue'] !== $theme_fonts['page']['enqueue'] ) {
				wp_enqueue_style( 'canuck-cp-google-3', 'https://fonts.googleapis.com/css?family=' . $theme_fonts['page']['enqueue'] . '&display=' . $display_font, array(), CANUCKCP_VERSION );
			}
		}
		// Load skins.
		$skinfile       = get_theme_mod( 'canuckcp_color_scheme', 'gray-pink' );
		$disable_splide = get_theme_mod( 'canuckcp_disable_splide' ) ? true : false;
		// Load option css.
		$ka_css      = canuckcp_custom_css();
		$ka_skin_css = canuckcp_skin_css();
		if ( is_child_theme() ) {
			wp_enqueue_style( 'canuck-cp-parent', get_template_directory_uri() . '/style.css', array(), CANUCKCP_VERSION );
			if ( 'template-portfolio.php' === $page_template ) {
				wp_enqueue_style( 'canuck-cp-template-child', get_template_directory_uri() . '/css/template-portfolio-style.css', array( 'canuck-cp-parent' ), CANUCKCP_VERSION );
			} elseif ( 'template-home.php' === $page_template ) {
				wp_enqueue_style( 'canuck-cp-template-child', get_template_directory_uri() . '/css/template-home-style.css', array( 'canuck-cp-parent' ), CANUCKCP_VERSION );
			} else {
				wp_enqueue_style( 'canuck-cp-template-child', get_template_directory_uri() . '/css/template-blank-style.css', array( 'canuck-cp-parent' ), CANUCKCP_VERSION );
			}
			wp_add_inline_style( 'canuck-cp-parent', $ka_css );
			wp_add_inline_style( 'canuck-cp-parent', $ka_skin_css );
			if ( true !== $disable_splide ) {
				// Load splide slider.
				wp_enqueue_style( 'splide-style', get_template_directory_uri() . '/js/splide/css/themes/splide-sea-green.css', array(), CANUCKCP_VERSION );
			}
		} else {
			if ( true !== $disable_splide ) {
				// Load splide slider.
				wp_enqueue_style( 'splide-style', get_template_directory_uri() . '/js/splide/css/themes/splide-sea-green.css', array(), CANUCKCP_VERSION );
			}
			wp_enqueue_style( 'canuck-cp-style', get_stylesheet_uri(), array(), CANUCKCP_VERSION );
			if ( 'template-portfolio.php' === $page_template ) {
				wp_enqueue_style( 'canuck-cp-template', get_theme_file_uri( '/css/template-portfolio-style.css' ), array( 'canuck-cp-style' ), CANUCKCP_VERSION );
			} elseif ( 'template-home.php' === $page_template ) {
				wp_enqueue_style( 'canuck-cp-template', get_theme_file_uri( '/css/template-home-style.css' ), array( 'canuck-cp-style' ), CANUCKCP_VERSION );
			}
			wp_add_inline_style( 'canuck-cp-style', $ka_css );
			wp_add_inline_style( 'canuck-cp-style', $ka_skin_css );
		}
	}
	add_action( 'wp_enqueue_scripts', 'canuckcp_styles' );
}

if ( ! function_exists( 'canuckcp_register_menu' ) ) {
	/**
	 * Register menus.
	 */
	function canuckcp_register_menu() {
		register_nav_menu( 'canuckcp_primary', esc_html__( 'Primary Menu', 'canuck-cp' ) );
		register_nav_menu( 'canuckcp_social', esc_html__( 'Social Menu', 'canuck-cp' ) );
	}
	add_action( 'init', 'canuckcp_register_menu' );
}

/**
 * Add excerpt support for pages
 */
function canuckcp_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'canuckcp_add_excerpts_to_pages' );

if ( ! function_exists( 'canuckcp_theme_supports' ) ) {
	/**
	 * Theme Support Functions.
	 *
	 * This function adds all theme support functions on the after_setup_theme hook.
	 * See the WordPress Codex for each support.
	 */
	function canuckcp_theme_supports() {
		global $canuckcp_block_editor_loaded;
		// Post formats.
		add_theme_support( 'post-formats', array( 'audio', 'gallery', 'image', 'quote', 'video' ) );
		// Custom Backgrounds.
		add_theme_support( 'custom-background' );
		// Feeds.
		add_theme_support( 'automatic-feed-links' );
		// editor style.
		add_editor_style();
		// Thumbnails.
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'canuckcp_feature', 1100, 367, true );
		add_image_size( 'canuckcp_small15', 300, 200, true );
		add_image_size( 'canuckcp_med15', 800, 533, true );
		add_image_size( 'canuckcp_gallery', 600, 331, true );
		add_image_size( 'canuckcp_gallery_thumb', 90, 60, true );
		set_post_thumbnail_size( 1100, 733, true );
		// Enable translation.
		load_theme_textdomain( 'canuck-cp', get_template_directory() . '/languages' );
		// HTML5 markup for comment lists, comment forms, search forms and galleries.
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'gallery', 'caption' ) );
		// Title tags.
		add_theme_support( 'title-tag' );
		// Custom logo support.
		$canuckcp_logo_args = array(
			'height'      => 100,
			'width'       => 230,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		);
		add_theme_support( 'custom-logo', $canuckcp_logo_args );
		// WooCommerce supports.
		if ( class_exists( 'WooCommerce' ) ) {
			add_theme_support( 'woocommerce' );
			add_theme_support( 'wc-product-gallery-slider' );
			add_theme_support( 'wc-product-gallery-zoom' );
			add_theme_support( 'wc-product-gallery-lightbox' );
		}
	}
	add_action( 'after_setup_theme', 'canuckcp_theme_supports' );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 * Note: this function taken from twentynineteen
 *
 * @global int $content_width Content width.
 */
function canuckcp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	$GLOBALS['content_width'] = apply_filters( 'canuckcp_content_width', 1600 );// phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedVariableFound
}
add_action( 'after_setup_theme', 'canuckcp_content_width', 0 );

if ( ! function_exists( 'canuckcp_custom_gallery_sizes' ) ) {
	/**
	 * Add custom gallery sizes.
	 *
	 * @param array $sizes is the array of selectable image sizes.
	 */
	function canuckcp_custom_gallery_sizes( $sizes ) {
		$custom_sizes = array(
			'canuckcp_small15'       => esc_html__( 'Small 1.5 to 1', 'canuck-cp' ),
			'canuckcp_gallery_thumb' => esc_html__( 'Thumbnails 1.5 to 1', 'canuck-cp' ),
			'canuckcp_med15'         => esc_html__( 'Medium 1.5 to 1', 'canuck-cp' ),
		);
		return array_merge( $sizes, $custom_sizes );
	}
	add_filter( 'image_size_names_choose', 'canuckcp_custom_gallery_sizes' );
}

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 * from twentyseventeen.
 */
function canuckcp_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}
add_action( 'wp_head', 'canuckcp_pingback_header' );

if ( ! function_exists( 'canuckcp_register_sidebars' ) ) {
	/**
	 * Register Side bars
	 * Thanks to Justin Tadlock for the post on sidebars
	 *
	 * @link http://justintadlock.com/archives/2010/11/08/sidebars-in-wordpress
	 */
	function canuckcp_register_sidebars() {
		register_sidebar(
			array(
				'id'            => 'canuckcp_default_sidebar_a',
				'name'          => esc_html__( 'Default A', 'canuck-cp' ),
				'description'   => esc_html__( 'Use for standard WordPress pages', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_default_sidebar_b',
				'name'          => esc_html__( 'Default B', 'canuck-cp' ),
				'description'   => esc_html__( 'Second sidebar for standard WordPress pages', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_blog_sidebar_a',
				'name'          => esc_html__( 'Blog A', 'canuck-cp' ),
				'description'   => esc_html__( 'First Blog Sidebar', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_blog_sidebar_b',
				'name'          => esc_html__( 'Blog B', 'canuck-cp' ),
				'description'   => esc_html__( 'Second Blog Sidebar', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_404_sidebar_a',
				'name'          => esc_html__( 'Error 404 A', 'canuck-cp' ),
				'description'   => esc_html__( 'Use this for your 404 page', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_404_sidebar_b',
				'name'          => esc_html__( 'Error 404 B', 'canuck-cp' ),
				'description'   => esc_html__( 'Use this for your 404 page', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_contact_sidebar_a',
				'name'          => esc_html__( 'Contact A', 'canuck-cp' ),
				'description'   => esc_html__( 'Use this for your Contact page', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_contact_sidebar_b',
				'name'          => esc_html__( 'Contact B', 'canuck-cp' ),
				'description'   => esc_html__( 'Use this for your Contact page', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_about_sidebar_a',
				'name'          => esc_html__( 'About A', 'canuck-cp' ),
				'description'   => esc_html__( 'Use this for your About page', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_about_sidebar_b',
				'name'          => esc_html__( 'About B', 'canuck-cp' ),
				'description'   => esc_html__( 'Use this for your About page', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_blog_feature',
				'name'          => esc_html__( 'Blog Page Feature', 'canuck-cp' ),
				'description'   => esc_html__( 'Used when the Blog Page Feature useage option is set to widget.', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_home_feature',
				'name'          => esc_html__( 'Home Page Feature', 'canuck-cp' ),
				'description'   => esc_html__( 'Used when the Home Page Feature useage option is set to widget.', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_home_section1_sidebar',
				'name'          => esc_html__( 'Home Page Section 1', 'canuck-cp' ),
				'description'   => esc_html__( 'Used when the Home Page Section 1 useage option is set to widget.', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_home_section3_sidebar',
				'name'          => esc_html__( 'Home Page Section 3', 'canuck-cp' ),
				'description'   => esc_html__( 'Used when the Home Page Section 3 useage option is set to widget.', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_home_section5_sidebar',
				'name'          => esc_html__( 'Home Page Section 5', 'canuck-cp' ),
				'description'   => esc_html__( 'Used when the Home Page Section 5 useage option is set to widget.', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_home_section7_sidebar',
				'name'          => esc_html__( 'Home Page Section 7', 'canuck-cp' ),
				'description'   => esc_html__( 'Used when the Home Page Section 7 useage option is set to widget.', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_home_section10_sidebar',
				'name'          => esc_html__( 'Home Page Section 10', 'canuck-cp' ),
				'description'   => esc_html__( 'Used when the Home Page Section 10 useage option is set to widget.', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_home_section11_sidebar',
				'name'          => esc_html__( 'Home Page Section 11', 'canuck-cp' ),
				'description'   => esc_html__( 'Used when the Home Page Section 11 useage option is set to widget.', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_footer_a_sidebar',
				'name'          => esc_html__( 'Footer-A', 'canuck-cp' ),
				'description'   => esc_html__( 'First column in footer', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_footer_b_sidebar',
				'name'          => esc_html__( 'Footer-B', 'canuck-cp' ),
				'description'   => esc_html__( 'Second column in footer', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_footer_c_sidebar',
				'name'          => esc_html__( 'Footer-C', 'canuck-cp' ),
				'description'   => esc_html__( 'Third column in footer', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_footer_d_sidebar',
				'name'          => esc_html__( 'Footer-D', 'canuck-cp' ),
				'description'   => esc_html__( 'Fourth column in footer', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_sidebar_1',
				'name'          => esc_html__( 'Sidebar 1', 'canuck-cp' ),
				'description'   => esc_html__( 'Use for your custom pages', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_sidebar_2',
				'name'          => esc_html__( 'Sidebar 2', 'canuck-cp' ),
				'description'   => esc_html__( 'Use for your custom pages', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_sidebar_3',
				'name'          => esc_html__( 'Sidebar 3', 'canuck-cp' ),
				'description'   => esc_html__( 'Use for your custom pages', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_sidebar_4',
				'name'          => esc_html__( 'Sidebar 4', 'canuck-cp' ),
				'description'   => esc_html__( 'Use for your custom pages', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_sidebar_5',
				'name'          => esc_html__( 'Sidebar 5', 'canuck-cp' ),
				'description'   => esc_html__( 'Use for your custom pages', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'id'            => 'canuckcp_sidebar_6',
				'name'          => esc_html__( 'Sidebar 6', 'canuck-cp' ),
				'description'   => esc_html__( 'Use for your custom pages', 'canuck-cp' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		if ( class_exists( 'WooCommerce' ) ) {
			register_sidebar(
				array(
					'id'            => 'canuckcp_woo_sidebar_a',
					'name'          => esc_html__( 'WooCommerce Sidebar a', 'canuck-cp' ),
					'description'   => esc_html__( 'Use this side bar for the Woo Commerce Shop Page', 'canuck-cp' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
				)
			);
			register_sidebar(
				array(
					'id'            => 'canuckcp_woo_sidebar_b',
					'name'          => esc_html__( 'WooCommerce Sidebar b', 'canuck-cp' ),
					'description'   => esc_html__( 'Use this side bar for the Woo Commerce Shop Page', 'canuck-cp' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h3 class="widget-title">',
					'after_title'   => '</h3>',
				)
			);
		}
	}
	add_action( 'widgets_init', 'canuckcp_register_sidebars' );
}

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function canuckcp_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
	var t, e = location.hash.substring(1);
	/^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())}, !1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'canuckcp_skip_link_focus_fix' );
