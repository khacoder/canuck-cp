<?php
/**
 * Custom functions file
 *
 * This file contains custom functions for the theme.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

/**
 * Get Logo and show
 *
 * This function is called by canuckcp_header().
 * It checks to see if there is a header image from Appearance => Header if there it loads it.
 * If blank then a nothing is loaded.
 *
 * WordPress Functions used - see WordPress Codex
 *
 * @uses get_header_image() @uses home_url( '/' ) @uses header_image()
 * @uses get_custom_header() @uses get_template_directory_uri()
 */
function canuckcp_show_logo() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );
	if ( has_custom_logo() ) {
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( $logo[0] ); ?>" alt="<?php esc_attr_e( 'logo', 'canuck-cp' ); ?>">
		</a>
		<?php
	}
}

/**
 * Header Menu Function.
 *
 * This function sets up the menu for the header.
 * WordPress Functions - See the Codex.
 *
 * @uses has_nav_menu() @uses wp_nav_menu()
 */
function canuckcp_header_menu() {
	wp_nav_menu(
		array(
			'theme_location'  => 'canuckcp_primary',
			'container_class' => 'main-nav',
			'container_id'    => 'main-menu-right',
			'menu_class'      => 'main-menu',
			'menu_id'         => 'main-menu-ul',
			'depth'           => 4,
			'fallback_cb'     => 'false',
		)
	);
}

/**
 * The wpautop filter fix.
 *
 * Description: Fix issues when shortcodes are embedded in a block of content that is filtered by wpautop.
 * Author URI: http://www.johannheyne.de.
 *
 * @param string $content is the content of the post.
 */
function canuckcp_shortcode_paragraph_insertion_fix( $content ) {
	$array   = array(
		'<p>['    => '[',
		']</p>'   => ']',
		']<br />' => ']',
		']<br/>'  => ']',
		'<p></p>' => '',
	);
	$content = strtr( $content, $array );
	return $content;
}
add_filter( 'the_content', 'canuckcp_shortcode_paragraph_insertion_fix' );

/**
 * Home Page Area Selection Helper
 *
 * This function is called by template-home.php and is used to set up
 * the area variables on the the home page.
 *
 * @param string $area_select - section selected wor the home page area.
 * @return $area_select - simplified form of template part
 */
function canuckcp_home_area_selection( $area_select ) {
	if ( 'Section 1' === $area_select ) {
		$area_select = 'one';
	} elseif ( 'Section 2' === $area_select ) {
		$area_select = 'two';
	} elseif ( 'Section 3' === $area_select ) {
		$area_select = 'three';
	} elseif ( 'Section 4' === $area_select ) {
		$area_select = 'four';
	} elseif ( 'Section 5' === $area_select ) {
		$area_select = 'five';
	} elseif ( 'Section 6' === $area_select ) {
		$area_select = 'six';
	} elseif ( 'Section 7' === $area_select ) {
		$area_select = 'seven';
	} elseif ( 'Section 8' === $area_select ) {
		$area_select = 'eight';
	} elseif ( 'Section 9' === $area_select ) {
		$area_select = 'nine';
	} elseif ( 'Section 10' === $area_select ) {
		$area_select = 'ten';
	} elseif ( 'Section 11' === $area_select ) {
		$area_select = 'eleven';
	} elseif ( 'Section 12' === $area_select ) {
		$area_select = 'twelve';
	} elseif ( 'Section 13' === $area_select ) {
		$area_select = 'thirteen';
	} elseif ( 'Section 14' === $area_select ) {
		$area_select = 'fourteen';
	} elseif ( 'Section 15' === $area_select ) {
		$area_select = 'fifteen';
	} else {
		$area_select = 'none';
	}
	return $area_select;
}

/**
 * Home Page Section Options
 *
 * This function is called by template-home.php and is used to set up
 * the optional sections for the static home page
 *
 * @uses canuckcp_home_area_selection() in this file
 * @uses get_template_part() see WordPress Codex
 */
function canuckcp_home_page_sections() {
	$area_1  = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_1', 'none' ) ) );
	$area_2  = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_2', 'none' ) ) );
	$area_3  = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_3', 'none' ) ) );
	$area_4  = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_4', 'none' ) ) );
	$area_5  = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_5', 'none' ) ) );
	$area_6  = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_6', 'none' ) ) );
	$area_7  = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_7', 'none' ) ) );
	$area_8  = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_8', 'none' ) ) );
	$area_9  = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_9', 'none' ) ) );
	$area_10 = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_10', 'none' ) ) );
	$area_11 = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_11', 'none' ) ) );
	$area_12 = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_12', 'none' ) ) );
	$area_13 = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_13', 'none' ) ) );
	$area_14 = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_14', 'none' ) ) );
	$area_15 = esc_html( canuckcp_home_area_selection( get_theme_mod( 'canuckcp_home_area_15', 'none' ) ) );
	if ( 'none' !== $area_1 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_1 );
	}
	if ( 'none' !== $area_2 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_2 );
	}
	if ( 'none' !== $area_3 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_3 );
	}
	if ( 'none' !== $area_4 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_4 );
	}
	if ( 'none' !== $area_5 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_5 );
	}
	if ( 'none' !== $area_6 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_6 );
	}
	if ( 'none' !== $area_7 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_7 );
	}
	if ( 'none' !== $area_8 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_8 );
	}
	if ( 'none' !== $area_9 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_9 );
	}
	if ( 'none' !== $area_10 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_10 );
	}
	if ( 'none' !== $area_11 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_11 );
	}
	if ( 'none' !== $area_12 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_12 );
	}
	if ( 'none' !== $area_13 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_13 );
	}
	if ( 'none' !== $area_14 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_14 );
	}
	if ( 'none' !== $area_15 ) {
		get_template_part( '/template-parts/static_home-parts/home', $area_15 );
	}
}

/**
 * Simple array for how custom home sections are set up.
 * This is used to figure out the section overlay margins.
 * It sets up an array of the stacked section numbers used.
 */
function canuckcp_home_area_setup() {
	$home_area_setup     = array();
	$home_area_setup[1]  = get_theme_mod( 'canuckcp_home_area_1', 'none' );
	$home_area_setup[2]  = get_theme_mod( 'canuckcp_home_area_2', 'none' );
	$home_area_setup[3]  = get_theme_mod( 'canuckcp_home_area_3', 'none' );
	$home_area_setup[4]  = get_theme_mod( 'canuckcp_home_area_4', 'none' );
	$home_area_setup[5]  = get_theme_mod( 'canuckcp_home_area_5', 'none' );
	$home_area_setup[6]  = get_theme_mod( 'canuckcp_home_area_6', 'none' );
	$home_area_setup[7]  = get_theme_mod( 'canuckcp_home_area_7', 'none' );
	$home_area_setup[8]  = get_theme_mod( 'canuckcp_home_area_8', 'none' );
	$home_area_setup[9]  = get_theme_mod( 'canuckcp_home_area_9', 'none' );
	$home_area_setup[10] = get_theme_mod( 'canuckcp_home_area_10', 'none' );
	$home_area_setup[11] = get_theme_mod( 'canuckcp_home_area_11', 'none' );
	$home_area_setup[12] = get_theme_mod( 'canuckcp_home_area_12', 'none' );
	$home_area_setup[13] = get_theme_mod( 'canuckcp_home_area_13', 'none' );
	$home_area_setup[14] = get_theme_mod( 'canuckcp_home_area_14', 'none' );
	$home_area_setup[15] = get_theme_mod( 'canuckcp_home_area_15', 'none' );
	$home_final_setup    = array();
	$count               = 1;
	foreach ( $home_area_setup as $area => $section ) {
		if ( 'none' !== $section ) {
			$home_final_setup[ $count ] = str_ireplace( 'Section ', '', $section );
			$count++;
		}
	}
	return $home_final_setup;
}

/**
 * Function to use Justin Tadlocks Breadcrumb Trail
 */
function canuckcp_custom_breadcrumbs() {
	// Breadcrumb args.
	$breadcrumb_args = array(
		'container'     => 'nav',
		'before'        => '',
		'after'         => '',
		'show_on_front' => false,
		'network'       => false,
		'show_title'    => true,
		'show_browse'   => false,
		'echo'          => true,
		'labels'        => array(
			'browse'              => esc_html__( 'Browse:', 'canuck-cp' ),
			'aria_label'          => esc_attr_x( 'Breadcrumbs', 'breadcrumbs aria label', 'canuck-cp' ),
			'home'                => '<i class="fa fa-home" style="font-size: 1em;margin:0;padding:0;" title="' . esc_attr__( 'Home', 'canuck-cp' ) . '"></i>',
			'error_404'           => esc_html__( '404 Not Found', 'canuck-cp' ),
			'archives'            => esc_html__( 'Archives', 'canuck-cp' ),
			// Translators: %s is the search query. The HTML entities are opening and closing curly quotes.
			'search'              => esc_html__( 'Search results for &#8220;%s&#8221;', 'canuck-cp' ),
			// Translators: %s is the page number.
			'paged'               => esc_html__( 'Page %s', 'canuck-cp' ),
			// Translators: Minute archive title. %s is the minute time format.
			'archive_minute'      => esc_html__( 'Minute %s', 'canuck-cp' ),
			// Translators: Weekly archive title. %s is the week date format.
			'archive_week'        => esc_html__( 'Week %s', 'canuck-cp' ),
			// "%s" is replaced with the translated date/time format.
			'archive_minute_hour' => '%s',
			'archive_hour'        => '%s',
			'archive_day'         => '%s',
			'archive_month'       => '%s',
			'archive_year'        => '%s',
		),
	);
	if ( function_exists( 'breadcrumb_trail' ) ) {
		breadcrumb_trail( $breadcrumb_args );
	}
}

/**
 * Extract embed from selected content
 *
 * Modified from wp_extract_urls() in /wp-includes/functions.php
 *
 * Add content between <q></q>. The function extracts
 * the content between these tags and then and returns it as a string.
 * format <q>quote|author|author link</q>.
 * example <q>Only one thing is impossible for God: To find any sense in any copyright law on the planet.|Mark Twain|http://www.brainyquote.com/quotes/quotes/m/marktwain163473.html</q>.
 *
 * @param string $content is the post content.
 */
function canuckcp_extract_embed( $content ) {
	$pattern = "/\<q\>(.*?)\<\/q\>/s";// phpcs:ignore
	preg_match( $pattern, $content, $embed_string );
	if ( $embed_string ) {
		if ( $embed_string[0] ) {
			$embed_string[0] = str_replace( '<q>', '', $embed_string[0] );
		}
		if ( $embed_string[0] ) {
			$embed_string[0] = str_replace( '</q>', '', $embed_string[0] );
		}
		return $embed_string[0];
	} else {
		return false;
	}
}

/**
 * Remove content from first <q></q> tags and return it for display
 *
 * @param string $content is the post content.
 */
function canuckcp_strip_extracted_quote( $content ) {
	$pattern = "/\<q\>(.*?)\<\/q\>/s";// phpcs:ignore
	preg_match( $pattern, $content, $text_to_search );
	if ( isset( $text_to_search[0] ) ) {
		$content = str_replace( $text_to_search[0], '', $content );
	}
	$content = str_replace( '<p></p>', '', $content );
	return $content;
}

/**
 * Add Image Title to link on images.
 *
 * @param    string $link link to post.
 * @param    int    $id post id.
 */
function canuckcp_add_title_attachment_link( $link, $id = null ) {
	$id         = intval( $id );
	$_post      = get_post( $id );
	$post_title = esc_attr( $_post->post_title );
	return str_replace( '<a href', '<a title="' . $post_title . '" href', $link );
}
add_filter( 'wp_get_attachment_link', 'canuckcp_add_title_attachment_link', 10, 2 );

/**
 * This function converts hex colors to rgba colors,
 * with a opacity included.
 *
 * @param string $hex is the hex color string.
 * @param int    $opacity is the opacity.
 *
 * @return $rgb string style of the format 'rgba($r,$g,$b,$opacity')
 */
function canuckcp_hex_to_rgba( $hex, $opacity = 1 ) {
	$hex = sanitize_hex_color_no_hash( str_replace( '#', '', $hex ) );
	if ( 3 === strlen( $hex ) ) {
		$r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
		$g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
		$b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
	} else {
		$r = hexdec( substr( $hex, 0, 2 ) );
		$g = hexdec( substr( $hex, 2, 2 ) );
		$b = hexdec( substr( $hex, 4, 2 ) );
	}
	$rgb = 'rgba(' . $r . ',' . $g . ',' . $b . ',' . $opacity . ')';
	return $rgb;
}

/**
 * This function sets up the fonts that will be used by the theme.
 */
function canuckcp_fonts() {
	$header_font     = get_theme_mod( 'canuckcp_header_font', 'Open Sans' ); // phpcs:ignore
	if ( 'default' === $header_font ) {
		$header_font = 'Open Sans';
	}
	$body_font       = get_theme_mod( 'canuckcp_body_font', 'Open Sans' ); // phpcs:ignore
	if ( 'default' === $body_font ) {
		$body_font = 'Open Sans';
	}
	$page_title_font = get_theme_mod( 'canuckcp_page_title_font', 'Open Sans' ); // phpcs:ignore
	if ( 'default' === $page_title_font ) {
		$page_title_font = 'Open Sans';
	}
	$fonts       = array(
		'Open Sans'           => array(
			'type'    => 'google',
			'enqueue' => 'Open+Sans:300,400',
			'family'  => "'Open Sans', 'Lucida Sans', sans-serif",
		),
		'default'             => array(
			'type'    => 'standard',
			'enqueue' => 'none',
			'family'  => 'none',
		),
		'Arial'               => array(
			'type'    => 'standard',
			'enqueue' => 'none',
			'family'  => 'Arial, sans-serif',
		),
		'Artifika'            => array(
			'type'    => 'google',
			'enqueue' => 'Artifika:400,400i',
			'family'  => 'Artifika, Cambria, serif',
		),
		'Arvo'                => array(
			'type'    => 'google',
			'enqueue' => 'Arvo:400,400i',
			'family'  => "Arvo, 'Courier New', serif",
		),
		'Book Antiqua'        => array(
			'type'    => 'standard',
			'enqueue' => 'none',
			'family'  => "'Book Antiqua', serif",
		),
		'Bubbler One'         => array(
			'type'    => 'google',
			'enqueue' => 'Bubbler+One',
			'family'  => "'Bubbler One', 'Courier New', sans-serif",
		),
		'Cabin'               => array(
			'type'    => 'google',
			'enqueue' => 'Cabin:400,400i',
			'family'  => 'Cabin, Tahoma, sans-serif',
		),
		'Cambria'             => array(
			'type'    => 'standard',
			'enqueue' => 'none',
			'family'  => 'Cambria, serif',
		),
		'Comic Sans MS'       => array(
			'type'    => 'standard',
			'enqueue' => 'none',
			'family'  => "'Comic Sans MS', sans-serif",
		),
		'Corben'              => array(
			'type'    => 'google',
			'enqueue' => 'Corben',
			'family'  => "Corben, 'Book Antiqua', cursive",
		),
		'Droid Sans'          => array(
			'type'    => 'google',
			'enqueue' => 'Droid+Sans:400,400i',
			'family'  => "'Droid Sans', Tahoma, sans-serif",
		),
		'Droid Serif'         => array(
			'type'    => 'google',
			'enqueue' => 'Droid+Serif:400,400i',
			'family'  => "'Droid Serif', Cambria, serif",
		),
		'Great Vibes'         => array(
			'type'    => 'google',
			'enqueue' => 'Great+Vibes',
			'family'  => "'Great Vibes', cursive",
		),
		'Georgia'             => array(
			'type'    => 'standard',
			'enqueue' => 'none',
			'family'  => 'Georgia, serif',
		),
		'Josefin Sans'        => array(
			'type'    => 'google',
			'enqueue' => 'Josefin+Sans:400,400i',
			'family'  => "'Josefin Sans', Tahoma, serif",
		),
		'Josefin Slab'        => array(
			'type'    => 'google',
			'enqueue' => 'Josefin+Slab:400,400i',
			'family'  => "'Josefin Slab', 'Courier New', serif",
		),
		'Karla'               => array(
			'type'    => 'google',
			'enqueue' => 'Karla:400,400i',
			'family'  => 'Karla, Arial, sans-serif',
		),
		'Lato'                => array(
			'type'    => 'google',
			'enqueue' => 'Lato:400,400i',
			'family'  => 'Lato, Arial,sans-serif',
		),
		'Lobster'             => array(
			'type'    => 'google',
			'enqueue' => 'Lobster',
			'family'  => 'Lobster, cursive',
		),
		'Old Standard TT'     => array(
			'type'    => 'google',
			'enqueue' => 'Old+Standard+TT:400,400i',
			'family'  => "'Old Standard TT', 'Times New Roman', serif",
		),
		'Playfair Display SC' => array(
			'type'    => 'google',
			'enqueue' => 'Playfair+Display+SC',
			'family'  => "'Playfair Display SC', 'Book Antiqua', serif",
		),
		'PT Sans'             => array(
			'type'    => 'google',
			'enqueue' => 'PT+Sans:400,400i',
			'family'  => "'PT Sans', 'Trebuchet MS', sans-serif",
		),
		'PT Serif'            => array(
			'type'    => 'google',
			'enqueue' => 'PT+Serif:400,400i',
			'family'  => "'PT Serif', Cambria, serif",
		),
		'Puritan'             => array(
			'type'    => 'google',
			'enqueue' => 'Puritan:400,400i',
			'family'  => 'Puritan, Arial, sans-serif',
		),
		'Raleway'             => array(
			'type'    => 'google',
			'enqueue' => 'Raleway:300,300i',
			'family'  => 'Raleway, Tahoma, sans-serif',
		),
		'Rock Salt'           => array(
			'type'    => 'google',
			'enqueue' => 'Rock+Salt',
			'family'  => "'Rock Salt', cursive",
		),
		'Tahoma'              => array(
			'type'    => 'standard',
			'enqueue' => 'none',
			'family'  => 'Tahoma, sans-serif',
		),
		'Times New Roman'     => array(
			'type'    => 'standard',
			'enqueue' => 'none',
			'family'  => "'Times New Roman', serif",
		),
		'Titillium Web'       => array(
			'type'    => 'google',
			'enqueue' => 'Titillium+Web:400,400i',
			'family'  => "'Titillium Web', Tahoma, sans-serif",
		),
		'Trebuchet MS'        => array(
			'type'    => 'standard',
			'enqueue' => 'none',
			'family'  => "'Trebuchet MS', sans-serif",
		),
		'Ubuntu'              => array(
			'type'    => 'google',
			'enqueue' => 'Ubuntu:400,400i',
			'family'  => 'Ubuntu, Tahoma, sans-serif',
		),
		'Verdana'             => array(
			'type'    => 'standard',
			'enqueue' => 'none',
			'family'  => 'Verdana, sans-serif',
		),
		'Vollkorn'            => array(
			'type'    => 'google',
			'enqueue' => 'Vollkorn:400,400i',
			'family'  => "Vollkorn, 'Times New Roman', serif",
		),
	);
	$theme_fonts = array(
		'header' => array(
			'type'    => $fonts[ $header_font ]['type'],
			'enqueue' => $fonts[ $header_font ]['enqueue'],
			'family'  => $fonts[ $header_font ]['family'],
		),
		'body'   => array(
			'type'    => $fonts[ $body_font ]['type'],
			'enqueue' => $fonts[ $body_font ]['enqueue'],
			'family'  => $fonts[ $body_font ]['family'],
		),
		'page'   => array(
			'type'    => $fonts[ $page_title_font ]['type'],
			'enqueue' => $fonts[ $page_title_font ]['enqueue'],
			'family'  => $fonts[ $page_title_font ]['family'],
		),
	);
	return $theme_fonts;
}

/**
 * Filter to remove selected categories from archive
 *
 * Source: https://stackoverflow.com/questions/2789228/exclude-category-from-wp-get-archives/5945750#5945750
 * Before Use: add_filter( 'getarchives_where', 'canuckcp_customarchives_where' ); to set up use
 * After Use: remove_filter( 'getarchives_where', 'canuckcp_customarchives_where' );
 *
 * @param string $x is a string.
 */
function canuckcp_customarchives_where( $x ) {
	// Get exclude ids.
	$exclude_ids = canuckcp_exclude_category_validation();
	global $wpdb;
	$exclude = $exclude_ids; // category id to exclude.
	return $x . " AND $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id NOT IN ($exclude)";
}
/**
 * Filter to exclude selected categories from archive
 *
 * Before Use: add_filter( 'getarchives_join', 'canuckcp_customarchives_join' ); to execute
 * After Use: remove_filter( 'getarchives_join', 'canuckcp_customarchives_join' );
 *
 * @param string $x is a string.
 */
function canuckcp_customarchives_join( $x ) {
	global $wpdb;
	return $x . " INNER JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id) INNER JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)";
}

if ( ! function_exists( 'canuckcp_strip_first_block_gallery' ) ) {
	/**
	 * Remove content from first <q></q> tags and return it for display.
	 *
	 * @param string $content is the post content string.
	 */
	function canuckcp_strip_first_block_gallery( $content ) {
		$pattern = "/\<!-- wp:gallery(.*?)\/wp:gallery --\>/s";// phpcs:ignore
		preg_match( $pattern, $content, $text_to_search );
		if ( isset( $text_to_search[0] ) ) {
			$content = str_replace( $text_to_search[0], '', $content );
		}
		return $content;
	}
}
