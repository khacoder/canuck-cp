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
			'enqueue' => 'Open+Sans:400',
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

/**
 * Share on pages helper.
 *
 * @param string $share_label is the label for the share output.
 */
function canuckcp_page_share( $share_label = '' ) {
	$canuckcp_use_social_share = get_theme_mod( 'canuckcp_use_social_share' ) ? true : false;
	$canuckcp_share_on_pages   = get_theme_mod( 'canuckcp_share_on_pages' ) ? true : false;
	if ( $canuckcp_use_social_share && $canuckcp_share_on_pages ) {
		$share_html = '<div class="canuck-cp-share-page">';
		if ( '' !== $share_label ) {
			$share_html .= '<span class="share-text-page">' . $share_label . '</span>';
		}
		if ( get_theme_mod( 'canuckcp_include_pinit' ) ? true : false ) {
			$share_html .= '<span title="' . esc_attr__( 'Share on Pinterest', 'canuck-cp' ) . '" class="pinterest-share">
							<a class="pinterest-share" data-pin-do="buttonBookmark" href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false">
							</a></span>';
		}
		if ( get_theme_mod( 'canuckcp_include_facebook' ) ? true : false ) {
			$share_html .= '<a class="facebook-share" href="https://www.facebook.com/sharer?u=' . get_the_permalink() . '" title="' . esc_attr__( 'Share on Facebook', 'canuck-cp' ) . '" target="_blank" rel="noopener">
							<i>' . canuckcp_svg( 'facebook-square', '16px', '#21759b' ) . '</i></a>';
		}
		if ( get_theme_mod( 'canuckcp_include_twitter' ) ? true : false ) {
			$share_html .= '<a class="twitter-share" title="' . esc_attr__( 'Share on Twitter', 'canuck-cp' ) . '" href="http://twitter.com/intent/tweet?text=Currently reading ' . get_the_title() . ' at&url=' . get_the_permalink() . '" target="_blank" rel="noopener"><i>' . canuckcp_svg( 'twitter-square', '16px', '#33ccff' ) . '</i></a>';
		}
		$share_html .= '</div>';
		return $share_html;
	} else {
		return false;
	}
}

/**
 * Share on posts helper.
 *
 * @param string $share_label is the label for the share output.
 */
function canuckcp_post_share( $share_label = '' ) {
	$canuckcp_use_social_share = get_theme_mod( 'canuckcp_use_social_share' ) ? true : false;
	$canuckcp_share_on_posts   = get_theme_mod( 'canuckcp_share_on_posts' ) ? true : false;
	if ( $canuckcp_use_social_share && $canuckcp_share_on_posts ) {
		$share_html = '<div class="canuck-cp-share-post">';
		if ( '' !== $share_label ) {
			$share_html .= '<span class="share-text-post">' . $share_label . '</span>';
		}
		if ( get_theme_mod( 'canuckcp_include_pinit' ) ? true : false ) {
			$share_html .= '<span title="' . esc_attr__( 'Share on Pinterest', 'canuck-cp' ) . '" class="pinterest-share"><a data-pin-do="buttonBookmark" href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false"></a></span>';
		}
		if ( get_theme_mod( 'canuckcp_include_facebook' ) ? true : false ) {
			$share_html .= '<a class="facebook-share" href="https://www.facebook.com/sharer?u=' . get_the_permalink() . '" title="' . esc_attr__( 'Share on Facebook', 'canuck-cp' ) . '" target="_blank" rel="noopener"><i>' . canuckcp_svg( 'facebook-square', '16px', '#21759b' ) . '</i></a>';
		}
		if ( get_theme_mod( 'canuckcp_include_twitter' ) ? true : false ) {
			$share_html .= '<a class="twitter-share" title="' . esc_attr__( 'Share on Twitter', 'canuck-cp' ) . '" href="http://twitter.com/intent/tweet?text=Currently reading ' . get_the_title() . ' at&url=' . get_the_permalink() . '" target="_blank" rel="noopener"><i>' . canuckcp_svg( 'twitter-square', '16px', '#33ccff' ) . '</i></a>';
		}
		$share_html .= '</div>';
		return $share_html;
	} else {
		return false;
	}
}

/**
 * Share on post meta helper.
 *
 * @param string $share_label is the label for the share output.
 */
function canuckcp_post_share_meta( $share_label = '' ) {
	$canuckcp_use_social_share = get_theme_mod( 'canuckcp_use_social_share' ) ? true : false;
	$canuckcp_share_on_posts   = get_theme_mod( 'canuckcp_share_on_posts' ) ? true : false;
	if ( $canuckcp_use_social_share && $canuckcp_share_on_posts ) {
		$share_html = '<div class="canuck-cp-share-meta">';
		if ( '' !== $share_label ) {
			$share_html .= '<span class="share-text-post">' . $share_label . '</span>';
		}
		if ( get_theme_mod( 'canuckcp_include_pinit' ) ? true : false ) {
			$share_html .= '<span title="' . esc_attr__( 'Share on Pinterest', 'canuck-cp' ) . '" class="pinterest-share"><a href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" data-pin-round="true" data-pin-custom="true"><img class="pinterest-no-hover" src="../wp-content/themes/canuck-cp/images/pinterest-p.svg"><img class="pinterest-hover-effect" src="../wp-content/themes/canuck-cp/images/pinterest-p-red.svg"></a></span>';
		}
		if ( get_theme_mod( 'canuckcp_include_facebook' ) ? true : false ) {
			$share_html .= '<a class="facebook-share" href="https://www.facebook.com/sharer?u=' . get_the_permalink() . '" title="' . esc_attr__( 'Share on Facebook', 'canuck-cp' ) . '" target="_blank" rel="noopener"><i>' . canuckcp_svg( 'facebook-f', '8px', '#000000' ) . '</i></a>';
		}
		if ( get_theme_mod( 'canuckcp_include_twitter' ) ? true : false ) {
			$share_html .= '<a class="twitter-share" title="' . esc_attr__( 'Share on Twitter', 'canuck-cp' ) . '" href="http://twitter.com/intent/tweet?text=Currently reading ' . get_the_title() . ' at&url=' . get_the_permalink() . '" target="_blank" rel="noopener"><i>' . canuckcp_svg( 'twitter', '14px', '#00000' ) . '</i></a>';
		}
		$share_html .= '</div>';
		return $share_html;
	} else {
		return false;
	}
}

/**
 * This function sends the email notification after the contact form has been submitted
 *
 * @param string $author name of author.
 * @param string $author_email author's email address.
 * @param string $message string.
 */
function canuckcp_email_notification( $author, $author_email, $message ) {
	// enter for email other then admin email.
	$contact_email = get_theme_mod( 'canuckcp_contact_email', '' );
	// Add filter to use html in contact area.
	add_filter( 'wp_mail_content_type', 'canuckcp_wp_mail_content_type' );
	// Get email address.
	if ( isset( $contact_email ) && '' !== $contact_email ) {
		$emailto = is_email( $contact_email );
	} else {
		$emailto = is_email( get_option( 'admin_email' ) );
	}
	$subject_trans = esc_html__( 'You have received a message from your website!', 'canuck-cp' );
	$subject       = $subject_trans;
	$body_trans    = 'Name: ' . esc_html( $author ) . '<br/><br/>'
					. 'Email: ' . is_email( $author_email ) . '<br/><br/>'
					. 'Comments: <br/><br/>'
					. wp_kses_post( $message );
	$body          = $body_trans;
	$headers_trans = 'From: ' . esc_html( $author ) . ' <' . is_email( $author_email ) . '>';
	$headers       = $headers_trans;
	// Send email.
	wp_mail( $emailto, $subject, $body, $headers );
	// Reset content-type to avoid conflicts -- http://core.trac.wordpress.org/ticket/23578.
	remove_filter( 'wp_mail_content_type', 'canuckcp_wp_mail_content_type' );
}

/**
 * This function sets up wp_mail() to use html
 */
function canuckcp_wp_mail_content_type() {
	return 'text/html';
}

/**
 * Add the honeypot, a hidden textarea field.
 */
function canuckcp_add_comment_honeypot() {
	echo '<p class="comment-custom"><textarea name="additional-comment"></textarea></p>';
}

/**
 * Check if the more_comment field is set. If it's not empty, it's spam. Otherwise, return the status already set.
 *
 * @param bool|string $approved The approval status that will be modified if the honeypot is filled.
 *
 * @return string
 */
function canuckcp_check_comment_honeypot( $approved ) {
	return empty( $_POST['additional-comment'] ) ? $approved : 'spam';// phpcs:ignore
}

add_action( 'comment_form', 'canuckcp_add_comment_honeypot' );
add_filter( 'pre_comment_approved', 'canuckcp_check_comment_honeypot' );

if ( get_theme_mod( 'canuckcp_use_recaptcha', false ) ? true : false ) {
	/**
	 * Google recaptcha add before the submit button.
	 *
	 * @param array $submit_field .
	 */
	function canuckcp_add_google_recaptcha( $submit_field ) {
		$site_key                     = get_theme_mod( 'canuckcp_recaptcha_sitekey', '' );
		$submit_field['submit_field'] = '<div class="g-recaptcha" data-sitekey="' . $site_key . '"></div><br>' . $submit_field['submit_field'];
		return $submit_field;
	}
	if ( ! is_user_logged_in() ) {
		add_filter( 'comment_form_defaults', 'canuckcp_add_google_recaptcha' );
	}

	/**
	 * Google recaptcha check, validate and catch the spammer.
	 *
	 * @param string $captcha is the captcha response.
	 */
	function canuckcp_is_valid_captcha( $captcha ) {
		$secret_key      = get_theme_mod( 'canuckcp_recaptcha_secretkey', '' );
		$request         = wp_safe_remote_get( 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $captcha );
		$verify_response = wp_remote_retrieve_body( $request );
		$response_data   = json_decode( $verify_response );
		if ( $response_data['success'] ) {
			return true;
		} else {
			return false;
		}
	}
	/**
	 * Verify recaptcha check.
	 */
	function canuckcp_verify_google_recaptcha() {
		$recaptcha = $_POST['g-recaptcha-response'];// phpcs:ignore
		if ( empty( $recaptcha ) ) {
			wp_die( esc_html__( "ERROR: please select 'I am not a robot'!><p><a href='javascript:history.back()'>« Back</a></p>", 'canuck-cp' ) );
		} elseif ( ! canuckcp_is_valid_captcha( $recaptcha ) ) {
			wp_die( esc_html__( 'Sorry, there was a problem submitting your comment.', 'canuck-cp' ) );
		}
	}
	if ( ! is_user_logged_in() ) {
		add_action( 'pre_comment_on_post', 'canuckcp_verify_google_recaptcha' );
	}
}
