<?php
/**
 * Posts functions file
 *
 * This file contains functions for posts including meta .
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

/**
 * Retrieves the IDs for images in a gallery.
 *
 * Uses Hybrid Media Grabber to get the gallery shortcode.
 *
 * @return array List of image IDs from the post gallery.
 */
function canuckcp_get_gallery_images() {
	global $content_width;
	$args           = array(
		'post_id'     => get_the_ID(),   // post ID (assumes within The Loop by default).
		'type'        => 'gallery',      // audio|video.
		'before'      => '',             // HTML before the output.
		'after'       => '',             // HTML after the output.
		'split_media' => true,           // Splits the media from the post content...KA note...original false.
		'width'       => $content_width, // Custom width. Defaults to the theme's content width.
	);
	$gallery_string = canuckcp_media_grabber_gallery( $args );
	if ( '' !== $gallery_string ) {
		$images  = array();
		$pattern = get_shortcode_regex();
		// Note: leave as double quotes, or the preg match will not work.
		preg_match( "/$pattern/s", $gallery_string, $match );// phpcs:ignore
		if ( $match ) {
			$atts = shortcode_parse_atts( $match[3] );
		} else {
			$atts = false;
		}
		if ( false !== $atts && isset( $atts['ids'] ) ) {
			$images = explode( ',', $atts['ids'] );
		} else {
			$images = false;
		}
	} else {
		$images = false;
	}
	if ( false === $images ) {
		$images = get_posts(
			array(
				'fields'         => 'ids',
				'numberposts'    => 20,
				'order'          => 'ASC',
				'orderby'        => 'menu_order',
				'post_mime_type' => 'image',
				'post_parent'    => get_the_ID(),
				'post_type'      => 'attachment',
			)
		);
	}
	if ( '' === $images || false === $images || empty( $images ) ) {
		$pattern = "/\<!-- wp:gallery(.*?)\]/s";// phpcs:ignore
		$content = get_the_content();
		preg_match( $pattern, $content, $text_to_search );
		if ( isset( $text_to_search[0] ) ) {
			$gallery_string = $text_to_search[0];
			$gallery_string = str_replace( '<!-- wp:gallery {"ids":[', '', $gallery_string );
			$gallery_string = str_replace( ']', '', $gallery_string );
			$images         = explode( ',', $gallery_string );
		} else {
			$images = false;
		}
	}
	return $images;
}

/** ========================================================================
 *                       Post Meta
 *  ======================================================================== */

/**
 * ---------------------- Edit Button --------------------------------------
 * Is user is logged in and can edit posts display an edit button.
 */
function canuckcp_post_meta_edit() {
	$user_exists = ( is_user_logged_in() && current_user_can( 'edit_posts' ) ) ? true : false;
	if ( true === $user_exists ) {
		edit_post_link( esc_attr__( 'Edit', 'canuck-cp' ), '<span class="pmeta-edit"><i class="edit font-icon" title="' . esc_attr__( 'Edit', 'canuck-cp' ) . '">' . canuckcp_svg( 'edit', '14', '#7f7f7f' ) . '</i>&nbsp;', '</span>' );// phpcs:ignore
	}
}

/**
 * ---------------------- No Title Button --------------------------------------
 * Provide a link to single.php if there is no title. exclamation-triangle
 */
function canuckcp_post_meta_no_title() {
	$title_exists = ( '' !== get_the_title() ) ? true : false;
	if ( '' === get_the_title() ) {
		?>
		<span class="pmeta-no-title">
			<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" title="<?php esc_attr_e( 'No title link', 'canuck-cp' ); ?>" >
				<i class="font-icon exclamation-triangle" title="<?php esc_attr_e( 'Single Page Link', 'canuck-cp' ); ?>"><?php echo canuckcp_svg( 'exclamation-triangle', '14', 'red' );// phpcs:ignore ?>&nbsp;</i>
			</a>
		</span>
		<span class="screen-reader-text updated">
			<?php esc_html_e( 'Single Page Link', 'canuck-cp' ); ?>"
		</span>
		<?php
	}
}

/**
 * ---------------------- include tags --------------------------------------
 * List the tags for the post.
 */
function canuckcp_post_meta_tags() {
	if ( true === has_tag() ) {
		?>
		<span class="pmeta-taglist">
			<i class="font-icon tags" title="<?php esc_attr_e( 'Tags', 'canuck-cp' ); ?>"><?php echo canuckcp_svg( 'tags', '14', '#7f7f7f' );// phpcs:ignore ?></i>&nbsp;<?php the_tags( '' ); ?>
		</span> 
		<?php
	}
}

/**
 * ---------------------- link pages --------------------------------------
 * Provide page links if they are used.
 */
function canuckcp_post_meta_pages() {
	$link_pages_exist = ( '' !== wp_link_pages( 'echo=0' ) ) ? true : false;
	if ( true === $link_pages_exist ) {
		?>
		<span class="pmeta-pagelist">
			<?php
			$page_text = '<i class="font-icon copy" title="' . esc_attr__( 'Pages', 'canuck-cp' ) . '">' . canuckcp_svg( 'copy', '14', '#7f7f7f' ) . '</i>&nbsp;';
			wp_link_pages( 'before=' . $page_text . ':&after=' );
			?>
		</span>
		<?php
	}
}

/**
 * ---------------------- include timestamp --------------------------------------
 * List the post date.
 */
function canuckcp_post_meta_timestamp() {
	?>
	<span class="pmeta-timestamp post-date updated">
		<i class="font-icon clock" title="<?php esc_attr_e( 'Timestamp', 'canuck-cp' ); ?>"><?php echo canuckcp_svg( 'clock', '14', '#7f7f7f' );// phpcs:ignore ?></i>&nbsp;
		<a href="<?php echo esc_url( get_month_link( get_post_time( 'Y' ), get_post_time( 'm' ) ) ); ?>">
				<?php the_time( get_option( 'date_format' ) ); ?>
			</a>
	</span>
	<span class="screen-reader-text updated">
		<?php the_time( get_option( 'date_format' ) ); ?>
	</span>
	<?php
}

/**
 * ---------------------- include author --------------------------------------
 * List the post author.
 */
function canuckcp_post_meta_author() {
	?>
	<span class="vcard pmeta-author author fn">
		<i class="font-icon user" title="<?php esc_attr_e( 'Author', 'canuck-cp' ); ?>"><?php echo canuckcp_svg( 'user', '12', '#7f7f7f' );// phpcs:ignore ?></i>&nbsp;<?php the_author_posts_link(); ?>
	</span>
	<span class="screen-reader-text vcard author fn">
		<?php esc_html_e( 'By:', 'canuck-cp' ); ?>&nbsp;<?php the_author_posts_link(); ?>
	</span>
	<?php
}

/**
 * ---------------------- include categories --------------------------------------
 * List the post categories.
 */
function canuckcp_post_meta_category() {
	if ( true === has_category() ) {
		?>
		<span class="pmeta-categories">
			<i class="font-icon category" title="<?php esc_attr_e( 'Categories', 'canuck-cp' ); ?>"><?php echo canuckcp_svg( 'category', '16', '#7f7f7f' );// phpcs:ignore ?></i>&nbsp;<?php the_category( ', ' ); ?></span>
		<?php
	}
}

/**
 * ---------------------- comments link --------------------------------------
 * This function provides the comments count and link.
 */
function canuckcp_comments_link() {
	global $post;
	$comment_count = intval( get_comments_number() );
	if ( 0 === $comment_count ) {
		if ( false === get_theme_mod( 'canuckcp_exclude_no_comments_link', false ) ) {
			?>
			<span class="pmeta-post-comments">
				<i class="font-icon comment" title="<?php esc_attr_e( 'Comments', 'canuck-cp' ); ?>"><?php echo canuckcp_svg( 'comment', '16', '#7f7f7f' );// phpcs:ignore ?></i>
				<a href="<?php echo esc_url( get_comments_link() ); ?>">
					<?php esc_html_e( 'No Comments', 'canuck-cp' ); ?>
				</a>
			</span>
			<?php
		}
	} elseif ( 1 === $comment_count ) {
		?>
		<span class="pmeta-post-comments">
			<i class="font-icon comment" title="<?php esc_attr_e( 'Comments', 'canuck-cp' ); ?>"><?php echo canuckcp_svg( 'comment', '16', '#7f7f7f' );// phpcs:ignore ?></i>
			<a href="<?php echo esc_url( get_comments_link() ); ?>">
				<?php echo esc_html( number_format_i18n( $comment_count ) ) . ' ' . esc_html__( 'Comment', 'canuck-cp' ); ?>
			</a>
		</span>
		<?php
	} else {
		?>
		<span class="pmeta-post-comments">
			<i class="font-icon comments" title="<?php esc_attr_e( 'Comments', 'canuck-cp' ); ?>"><?php echo canuckcp_svg( 'comments', '16', '#7f7f7f' );// phpcs:ignore ?></i>
			<a href="<?php echo esc_url( get_comments_link() ); ?>">
				<?php echo esc_html( number_format_i18n( $comment_count ) ) . ' ' . esc_html__( 'Comments', 'canuck-cp' ); ?>
			</a>
		</span>
		<?php
	}
}

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function canuckcp_excerpt_more( $more ) {
	return sprintf(
		'&hellip;<div class="read-more-wrap"><a class="read-more" href="%1$s">%2$s</a></div>',
		esc_url( get_permalink( get_the_ID() ) ),
		esc_html__( 'Read More', 'canuck-cp' )
	);
}
add_filter( 'excerpt_more', 'canuckcp_excerpt_more' );

/**
 * Filter the read more link string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function canuckcp_modify_read_more_link( $more ) {
	return sprintf(
		'<div class="read-more-wrap"><a class="read-more" href="%1$s">%2$s</a></div>',
		esc_url( get_permalink( get_the_ID() ) ),
		esc_html__( 'Read More', 'canuck-cp' )
	);
}
add_filter( 'the_content_more_link', 'canuckcp_modify_read_more_link' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function canuckcp_custom_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}
	$excerpt_length = get_theme_mod( 'canuckcp_excerpt_length', 30 );
	return $excerpt_length;
}
add_filter( 'excerpt_length', 'canuckcp_custom_excerpt_length', 999 );

/**
 * Excerpt Password - WordPress Codex - display password form in protected posts
 *
 * @param string $excerpt is the excerpt of the post.
 */
function canuckcp_excerpt_password_form( $excerpt ) {
	if ( post_password_required() ) {
		$excerpt = get_the_password_form();
	}
	return $excerpt;
}
add_filter( 'the_excerpt', 'canuckcp_excerpt_password_form' );

/**
 * This function is a helper for post meta in feature-top layouts
 */
function canuckcp_post_meta_full() {
	$post_style = esc_html( get_theme_mod( 'canuckcp_blog_style', 'top_feature' ) );
	if ( is_single() ) {
		$canuckcp_layout_option = esc_html( get_theme_mod( 'canuckcp_single_post_layout', 'right_sidebar' ) );
	} else {
		$canuckcp_layout_option = esc_html( get_theme_mod( 'canuckcp_blog_layout', 'right_sidebar' ) );
	}
	$exclude_timestamp = get_theme_mod( 'canuckcp_exclude_timestamp', false );
	$exclude_author    = get_theme_mod( 'canuckcp_exclude_author', false );
	$exclude_category  = get_theme_mod( 'canuckcp_exclude_category', false );
	$exclude_tags      = get_theme_mod( 'canuckcp_exclude_tags', false );
	if ( is_single() ) {
		if ( 'fullwidth' === $canuckcp_layout_option ) {
			canuckcp_comments_link();
		}
	} else {
		if ( 'side_feature' === $post_style && 'both_sidebars' !== $canuckcp_layout_option ) {
			canuckcp_comments_link();
		}
	}
	if ( false === $exclude_timestamp ) {
		canuckcp_post_meta_timestamp();
	}
	if ( false === $exclude_author ) {
		canuckcp_post_meta_author();
	}
	if ( false === $exclude_category ) {
		canuckcp_post_meta_category();
	}
	if ( false === $exclude_tags ) {
		canuckcp_post_meta_tags();
	}
	if ( is_single() ) {
		if ( 'fullwidth' !== $canuckcp_layout_option ) {
			canuckcp_comments_link();
		}
	} else {
		if ( 'side_feature' !== $post_style || 'both_sidebars' === $canuckcp_layout_option ) {
			canuckcp_comments_link();
		}
	}
	if ( is_sticky() ) {
		?>
		<span class="pmeta-sticky">
			<i class="font-icon sticky-note" title="<?php esc_attr_e( 'Sticky Post', 'canuck-cp' ); ?>"><?php echo canuckcp_svg( 'sticky-note', '16', '#7f7f7f' );// phpcs:ignore ?></i>
			<?php esc_html_e( 'Sticky Post', 'canuck-cp' ); ?>
		</span>
		<?php
	}
	canuckcp_post_meta_edit();
	canuckcp_post_meta_no_title();
}

/**
 * This function is a helper for post meta in feature-top layouts
 */
function canuckcp_post_meta_grid() {
	$post_style        = esc_html( get_theme_mod( 'canuckcp_blog_style', 'top_feature' ) );
	$exclude_timestamp = get_theme_mod( 'canuckcp_exclude_timestamp', 0 );
	$exclude_author    = get_theme_mod( 'canuckcp_exclude_author', 0 );
	$exclude_category  = get_theme_mod( 'canuckcp_exclude_category', 0 );
	$exclude_tags      = get_theme_mod( 'canuckcp_exclude_tags', 0 );
	canuckcp_post_meta_timestamp();
	canuckcp_comments_link();
	if ( is_sticky() ) {
		?>
		<span class="pmeta-sticky">
			<i class="font-icon sticky-note" title="<?php esc_attr_e( 'Sticky Post', 'canuck-cp' ); ?>"><?php echo canuckcp_svg( 'sticky-note', '16', '#7f7f7f' );// phpcs:ignore ?></i>
		</span>
		<?php
	}
	canuckcp_post_meta_edit();
	canuckcp_post_meta_no_title();
}

/**
 * Helper to validate exclude category list.
 *
 * @return $exclude_ids - list of validated category ids to exclude
 */
function canuckcp_exclude_category_validation() {
	$exclude_input = sanitize_text_field( get_theme_mod( 'canuckcp_exclude_categories', '' ) );
	// Validate Exclude list.
	$id_picks      = array();
	$id_picks      = explode( ',', $exclude_input );
	$counter       = 0;
	$filtered_list = '';
	foreach ( $id_picks as $pick ) {
		if ( 1 < intval( $id_picks[ $counter ] ) ) {
			$filtered_list .= intval( $id_picks[ $counter ] ) . ',';
		}
		$counter++;
	}
	$exclude_ids = trim( $filtered_list, ',' );
	return $exclude_ids;
}

/**
 * This function checks for categories to exclude from posts,
 * from the list in the customize options panel. The category id's are
 * excluded in the blog index by using the 'pre_get_posts' filter.
 *
 * @param string $query is the global $query.
 */
function canuckcp_exclude_category( $query ) {
	$exclude_categories_list = canuckcp_exclude_category_validation();
	if ( '' !== $exclude_categories_list ) {
		$exclude_ids          = array();
		$exclude_ids          = explode( ',', $exclude_categories_list );
		$negative_exclude_ids = array();
		foreach ( $exclude_ids as $exclude_id ) {
			$negative_exclude_ids[] = $exclude_id * ( -1 );
		}
		if ( ! is_admin() && $query->is_main_query() ) {
			$query->set( 'cat', $negative_exclude_ids );
		}
	}
}
add_action( 'pre_get_posts', 'canuckcp_exclude_category' );

