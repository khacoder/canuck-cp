<?php
/**
 * Custom functions file for adding Canuck metabox to page panels
 *
 * This file contains custom functions for the theme.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

/**
 * =============================================================================================
 *                     Custom Page Meta Box
 * =============================================================================================
 */
/**
 * Add meta box to pages.
 *
 * The format for the add_meta_box() is as follows:
 * add_meta_box( $id, $title, $callback, $post_type, $context, $priority, $callback_args );
 * $id : (string) (required) HTML 'id' attribute of the edit screen section Default: None
 * $title : (string) (required) Title of the edit screen section, visible to user Default: None
 * $callback : (callback) (required) Function that prints out the HTML for the edit screen section.
 *             Pass function name as a string
 * $post_type : (string) (required) The type of Write screen on which to show the edit screen section
 *              ('post', 'page', 'link', or 'custom_post_type' where custom_post_type is the custom post type slug)
 *              Default: None
 * $context : (string) (optional) The part of the page where the edit screen section should be shown
 *            ('normal', 'advanced', or 'side'). (Note that 'side' doesn't exist before 2.7)Default: 'advanced'
 * $priority : (string) (optional) The priority within the context where the boxes should show
 *             ('high', 'core', 'default' or 'low') Default: 'default'
 * $callback_args : (array) (optional) Arguments to pass into your callback function. The callback will receive
 *                  the $post object and whatever parameters are passed through this variable. Default: null
 *
 * @since 0.0.1
 */
function canuckcp_add_page_custom_meta_box() {
	add_meta_box(
		'canuckcp_page_custom_meta_box',
		__( 'Canuck Page Options', 'canuck-cp' ),
		'canuckcp_show_page_custom_meta_box',
		'page',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'canuckcp_add_page_custom_meta_box' );

/**
 * The Callback
 *
 * The callback is used to display the options on the page
 *
 * @since 0.0.1
 */
function canuckcp_show_page_custom_meta_box() {
	global $post;
	$page_template = basename( get_page_template() );
	// Initial notes.
	echo '<span>' . wp_kses_post( __( 'If you are using a Portfolio template, or a Feature template, select the template and <strong>Save Draft</strong> to see more options.', 'canuck-cp' ) ) . '</span>';
	echo '<span><br/>' . esc_html__( 'Also note that the static home page, "Template: Home Page" does not use these options.', 'canuck-cp' ) . '</span>';
	// Use nonce for verification.
	wp_nonce_field( basename( __FILE__ ), 'canuckcp_page_meta_box_nonce' );
	// **************** Page Layout Option ****************************************************.
	$page_layout = esc_html( get_post_meta( $post->ID, 'canuckcp_metabox_page_layout', true ) );
	?>
	<p>
		<span style="clear:both;width:200px;float:left;" class="page-meta-layout"><?php esc_html_e( 'Page Layout Options', 'canuck-cp' ); ?></span>
		<select name="page_layout" id="page-layout-id">
			<option<?php selected( 'right_sidebar' === $page_layout ); ?> value="right_sidebar"><?php esc_html_e( 'Right Sidebar', 'canuck-cp' ); ?></option>
			<option<?php selected( 'left_sidebar' === $page_layout ); ?> value="left_sidebar"><?php esc_html_e( 'Left Sidebar', 'canuck-cp' ); ?></option>
			<option<?php selected( 'both_sidebars' === $page_layout ); ?> value="both_sidebars"><?php esc_html_e( 'Both Sidebars', 'canuck-cp' ); ?></option>
			<option<?php selected( 'fullwidth' === $page_layout ); ?> value="fullwidth"><?php esc_html_e( 'Full Width', 'canuck-cp' ); ?></option>
		</select>
	</p>
	<?php
	// **************** Page Title Option ****************************************************.
	$exclude_title = ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_title', true ) ? false : true );
	?>
	<p>
		<span style="clear:both;width:200px;float:left;" class="exclude-page-title"><?php esc_html_e( 'Exclude Page Title', 'canuck-cp' ); ?></span>
		<input type="checkbox" name="exclude_page_title" id="exclude_page-title-id" <?php checked( $exclude_title, true ); ?>>
	</p>
	<?php
	// **************** Sidebar A Option ****************************************************
	$sidebar_a = esc_html( get_post_meta( $post->ID, 'canuckcp_metabox_sidebar_a', true ) );
	?>
	<p>
		<span style="clear:both;width:200px;float:left;" class="page-meta-sidebar-a"><?php esc_html_e( 'Sidebar A Options', 'canuck-cp' ); ?></span>
		<select name="sidebar_a" id="sidebar-a-id">
			<option<?php selected( 'default-a' === $sidebar_a ); ?> value="default-a"><?php esc_html_e( 'Default Sidebar A', 'canuck-cp' ); ?></option>
			<option<?php selected( 'default-b' === $sidebar_a ); ?> value="default-b"><?php esc_html_e( 'Default Sidebar B', 'canuck-cp' ); ?></option>
			<option<?php selected( 'blog-a' === $sidebar_a ); ?> value="blog-a"><?php esc_html_e( 'Blog Sidebar A', 'canuck-cp' ); ?></option>
			<option<?php selected( 'blog-b' === $sidebar_a ); ?> value="blog-b"><?php esc_html_e( 'Blog Sidebar B', 'canuck-cp' ); ?></option>
			<option<?php selected( 'about-a' === $sidebar_a ); ?> value="about-a"><?php esc_html_e( 'About Sidebar A', 'canuck-cp' ); ?></option>
			<option<?php selected( 'about-b' === $sidebar_a ); ?> value="about-b"><?php esc_html_e( 'About Sidebar B', 'canuck-cp' ); ?></option>
			<option<?php selected( 'contact-a' === $sidebar_a ); ?> value="contact-a"><?php esc_html_e( 'Contact Sidebar A', 'canuck-cp' ); ?></option>
			<option<?php selected( 'contact-b' === $sidebar_a ); ?> value="contact-b"><?php esc_html_e( 'Contact Sidebar B', 'canuck-cp' ); ?></option>
			<option<?php selected( 'sidebar-1' === $sidebar_a ); ?> value="sidebar-1"><?php esc_html_e( 'Extra Sidebar 1', 'canuck-cp' ); ?></option>
			<option<?php selected( 'sidebar-2' === $sidebar_a ); ?> value="sidebar-2"><?php esc_html_e( 'Extra Sidebar 2', 'canuck-cp' ); ?></option>
			<option<?php selected( 'sidebar-3' === $sidebar_a ); ?> value="sidebar-3"><?php esc_html_e( 'Extra Sidebar 3', 'canuck-cp' ); ?></option>
			<option<?php selected( 'sidebar-4' === $sidebar_a ); ?> value="sidebar-4"><?php esc_html_e( 'Extra Sidebar 4', 'canuck-cp' ); ?></option>
			<option<?php selected( 'sidebar-5' === $sidebar_a ); ?> value="sidebar-5"><?php esc_html_e( 'Extra Sidebar 5', 'canuck-cp' ); ?></option>
			<option<?php selected( 'sidebar-6' === $sidebar_a ); ?> value="sidebar-6"><?php esc_html_e( 'Extra Sidebar 6', 'canuck-cp' ); ?></option>
		</select>
	</p>
	<?php
	// **************** Sidebar B Option ****************************************************.
	$sidebar_b = esc_html( get_post_meta( $post->ID, 'canuckcp_metabox_sidebar_b', true ) );
	?>
	<p>
		<span style="clear:both;width:200px;float:left;" class="page-meta-sidebar-b"><?php esc_html_e( 'Sidebar B Options', 'canuck-cp' ); ?></span>
		<select name="sidebar_b" id="sidebar-b-id">
			<option<?php selected( 'default-b' === $sidebar_b ); ?> value="default-b"><?php esc_html_e( 'Default Sidebar B', 'canuck-cp' ); ?></option>
			<option<?php selected( 'default-a' === $sidebar_b ); ?> value="default-a"><?php esc_html_e( 'Default Sidebar A', 'canuck-cp' ); ?></option>
			<option<?php selected( 'blog-a' === $sidebar_b ); ?> value="blog-a"><?php esc_html_e( 'Blog Sidebar A', 'canuck-cp' ); ?></option>
			<option<?php selected( 'blog-b' === $sidebar_b ); ?> value="blog-b"><?php esc_html_e( 'Blog Sidebar B', 'canuck-cp' ); ?></option>
			<option<?php selected( 'about-a' === $sidebar_b ); ?> value="about-a"><?php esc_html_e( 'About Sidebar A', 'canuck-cp' ); ?></option>
			<option<?php selected( 'about-b' === $sidebar_b ); ?> value="about-b"><?php esc_html_e( 'About Sidebar B', 'canuck-cp' ); ?></option>
			<option<?php selected( 'contact-a' === $sidebar_b ); ?> value="contact-a"><?php esc_html_e( 'Contact Sidebar A', 'canuck-cp' ); ?></option>
			<option<?php selected( 'contact-b' === $sidebar_b ); ?> value="contact-b"><?php esc_html_e( 'Contact Sidebar B', 'canuck-cp' ); ?></option>
			<option<?php selected( 'sidebar-1' === $sidebar_b ); ?> value="sidebar-1"><?php esc_html_e( 'Extra Sidebar 1', 'canuck-cp' ); ?></option>
			<option<?php selected( 'sidebar-2' === $sidebar_b ); ?> value="sidebar-2"><?php esc_html_e( 'Extra Sidebar 2', 'canuck-cp' ); ?></option>
			<option<?php selected( 'sidebar-3' === $sidebar_b ); ?> value="sidebar-3"><?php esc_html_e( 'Extra Sidebar 3', 'canuck-cp' ); ?></option>
			<option<?php selected( 'sidebar-4' === $sidebar_b ); ?> value="sidebar-4"><?php esc_html_e( 'Extra Sidebar 4', 'canuck-cp' ); ?></option>
			<option<?php selected( 'sidebar-5' === $sidebar_b ); ?> value="sidebar-5"><?php esc_html_e( 'Extra Sidebar 5', 'canuck-cp' ); ?></option>
			<option<?php selected( 'sidebar-6' === $sidebar_b ); ?> value="sidebar-6"><?php esc_html_e( 'Extra Sidebar 6', 'canuck-cp' ); ?></option>
		</select>
	</p>
	<?php
	// **************** Exclude Share Option ****************************************************.
	$exclude_share = ( '' === get_post_meta( $post->ID, 'canuckcp_exclude_share', true ) ? false : true );
	?>
	<p>
		<span style="clear:both;width:200px;float:left;" class="meta-exclude-page-share">Exclude Share Buttons</span>
		<input type="checkbox" name="exclude_page_share" id="exclude_page-share-id" <?php checked( $exclude_share, true ); ?>>
	</p>
	<?php
	// Additional options available when Template = Feature Template.
	if ( 'template-feature.php' === $page_template ) {
		?>
		<span><br/><?php esc_html_e( 'Additional options available when Template is set to Feature Template', 'canuck-cp' ); ?></span>
		<?php
		// **************** Feature Slider Category ****************************************************.
		$feature_category = esc_html( get_post_meta( $post->ID, 'canuckcp_metabox_feature_category', true ) );
		$categories       = get_categories();
		?>
		<p>
			<span style="clear:both;width:200px;float:left;" class="feature-category"><?php esc_html_e( 'Feature Slider Category', 'canuck-cp' ); ?></span>
				<select name="feature_category" id="feature-category-id">
					<?php
					foreach ( $categories as $category ) {
						?>
						<option<?php echo ( esc_html( $category->name ) === $feature_category ? ' selected="selected"' : '' ); ?> value="<?php echo esc_attr( $category->name ); ?>">
							<?php echo esc_html( $category->name ); ?>
						</option>
						<?php
					}
					?>
			</select>
		</p>
		<?php
		// **************** Feature Slider Type ****************************************************
		$feature_type = esc_html( get_post_meta( $post->ID, 'canuckcp_metabox_feature_type', true ) );
		?>
		<p>
			<span style="clear:both;width:200px;float:left;" class="feature-type"><?php esc_html_e( 'Feature Type', 'canuck-cp' ); ?></span>
			<select name="feature_type" id="feature-type-id">
				<option<?php selected( 'button-nav-15to1' === $feature_type ); ?> value="button-nav-15to1"><?php esc_html_e( 'Button navigation', 'canuck-cp' ); ?></option>
				<option<?php selected( 'thumbnail' === $feature_type ); ?> value="thumbnail"><?php esc_html_e( 'Thumbnail navigation', 'canuck-cp' ); ?></option>
			</select>
		</p>
		<?php
	}// End if().
	// Additional options available when Template = Portfolio Template.
	if ( 'template-portfolio.php' === $page_template ) {
		?>
		<p><strong><?php esc_html_e( 'Additional options available when Template is set to Portfolio Template', 'canuck-cp' ); ?></strong></p>
		<span><strong><?php esc_html_e( 'Posts', 'canuck-cp' ); ?> - </strong><?php esc_html_e( 'Before setting up a Portfolio Page you will need to have set up posts with a feature image of a specific category.', 'canuck-cp' ); ?></span>
		<span> <?php esc_html_e( 'When you set up your posts and insert your featured images, pay attention to the image links in the Canuck Post Options.', 'canuck-cp' ); ?></span>
		<span><br/><strong><?php esc_html_e( 'Portfolio Category - ', 'canuck-cp' ); ?></strong><?php esc_html_e( 'Select the category you used from the dropdown selector below.', 'canuck-cp' ); ?></span>
		<span><br/><strong><?php esc_html_e( 'Portfolio Type - ', 'canuck-cp' ); ?></strong><?php esc_html_e( 'Select the type of portfolio you want from the dropdown selector below.', 'canuck-cp' ); ?></span>
		<span><br/><strong><?php esc_html_e( 'Post Title and Content - ', 'canuck-cp' ); ?></strong><?php esc_html_e( 'Can be used for the Classic Portfolio styles only.', 'canuck-cp' ); ?></span>
		<span><br/><strong><?php esc_html_e( 'Image Caption and Description - ', 'canuck-cp' ); ?></strong><?php esc_html_e( 'You set these up in the media editor for your image.', 'canuck-cp' ); ?></span>
		<span> <?php esc_html_e( 'They can be optionally used in the Classic Portfolio styles and are used in all the Grid Portfolio styles.', 'canuck-cp' ); ?></span>
		<span> <?php esc_html_e( 'The idea is to use image title and description as a short introduction to a more extensive post which you would then link to.', 'canuck-cp' ); ?></span>
		<span><br/><strong><?php esc_html_e( 'Tip 1 - ', 'canuck-cp' ); ?></strong><?php esc_html_e( 'Keep layouts to less than 4 columns including sidebars, the exception being the Grid 5 columns in the fullwidth layout.', 'canuck-cp' ); ?></span>
		<span><br/><strong><?php esc_html_e( 'Tip 2 - ', 'canuck-cp' ); ?></strong><?php esc_html_e( 'Make your title and descriptions shorter when you have more columns on the page.', 'canuck-cp' ); ?></span>
		<?php
		// **************** Portfolio Category ****************************************************.
		$portfolio_category = esc_html( get_post_meta( $post->ID, 'canuckcp_portfolio_category', true ) );
		$categories         = get_categories();
		?>
		<p>
			<span style="clear:both;width:200px;float:left;" class="portfolio-category"><?php esc_html_e( 'Portfolio Category', 'canuck-cp' ); ?></span>
			<select name="portfolio_category" id="portfolio-category-id">';
				<?php
				foreach ( $categories as $category ) {
					?>
					<option<?php echo ( esc_html( $category->name ) === $portfolio_category ? ' selected="selected"' : '' ); ?> value="<?php echo esc_attr( $category->name ); ?>">
						<?php echo esc_html( $category->name ); ?>
					</option>
					<?php
				}
				?>
			</select>
		</p>
		<?php
		// **************** Portfolio Columns ****************************************************.
		$portfolio_type = esc_html( get_post_meta( $post->ID, 'canuckcp_portfolio_type', true ) );
		?>
		<p>
			<span style="clear:both;width:200px;float:left;" class="portfolio-type"><?php esc_html_e( 'Portfolio Type', 'canuck-cp' ); ?></span>
			<select name="portfolio_type" id="portfolio-type-id">
				<option<?php selected( 'classic1' === $portfolio_type ); ?> value="classic1"><?php esc_html_e( 'Classic 1 column', 'canuck-cp' ); ?></option>
				<option<?php selected( 'classic2' === $portfolio_type ); ?> value="classic2"><?php esc_html_e( 'Classic 2 columns', 'canuck-cp' ); ?></option>
				<option<?php selected( 'classic3' === $portfolio_type ); ?> value="classic3"><?php esc_html_e( 'Classic 3 columns', 'canuck-cp' ); ?></option>
				<option<?php selected( 'classic4' === $portfolio_type ); ?> value="classic4"><?php esc_html_e( 'Classic 4 columns', 'canuck-cp' ); ?></option>
				<option<?php selected( 'fullwidth' === $portfolio_type ); ?> value="fullwidth"><?php esc_html_e( 'fullwidth', 'canuck-cp' ); ?></option>
				<option<?php selected( 'grid2' === $portfolio_type ); ?> value="grid2"><?php esc_html_e( 'Grid 2 columns', 'canuck-cp' ); ?></option>
				<option<?php selected( 'grid3' === $portfolio_type ); ?> value="grid3"><?php esc_html_e( 'Grid 3 columns', 'canuck-cp' ); ?></option>
				<option<?php selected( 'grid4' === $portfolio_type ); ?> value="grid4"><?php esc_html_e( 'Grid 4 columns', 'canuck-cp' ); ?></option>
				<option<?php selected( 'grid5' === $portfolio_type ); ?> value="grid5"><?php esc_html_e( 'Grid 5 columns', 'canuck-cp' ); ?></option>
				<option<?php selected( 'masonry3' === $portfolio_type ); ?> value="masonry3"><?php esc_html_e( 'Masonry 3 columns', 'canuck-cp' ); ?></option>
			</select>
		</p>
		<?php
		// **************** Portfolio Include Post Title ****************************************************
		$portfolio_post_title = get_post_meta( $post->ID, 'canuckcp_metabox_include_post_content_title', true ) ? true : false;
		?>
		<p>
			<span style="clear:both;width:200px;float:left;" class="include-post-title"><?php esc_html_e( 'Include Post Title', 'canuck-cp' ); ?></span>
			<input type="checkbox" name="portfolio_post_title" id="portfolio-post-title-id" <?php checked( $portfolio_post_title, true ); ?>>
		</p>
		<?php
		// **************** Portfolio Include Post Content ****************************************************
		$portfolio_post_content = get_post_meta( $post->ID, 'canuckcp_metabox_include_post_content', true ) ? true : false;
		?>
		<p>
			<span style="clear:both;width:200px;float:left;" class="include-post-content"><?php esc_html_e( 'Include Post Content', 'canuck-cp' ); ?></span>
			<input type="checkbox" name="portfolio_post_content" id="portfolio-post-content-id" <?php checked( $portfolio_post_content, true ); ?>>
		</p>
		<?php
		// **************** Portfolio Include Image Caption ****************************************************
		$portfolio_image_caption = get_post_meta( $post->ID, 'canuckcp_metabox_include_image_caption', true ) ? true : false;
		?>
		<p>
			<span style="clear:both;width:200px;float:left;" class="include-image-caption"><?php esc_html_e( 'Include Feature Image Caption', 'canuck-cp' ); ?></span>
			<input type="checkbox" name="portfolio_image_caption" id="portfolio-image-caption-id" <?php checked( $portfolio_image_caption, true ); ?>>
		</p>
		<?php
		// **************** Portfolio Include Feature Image Caption ****************************************************
		$portfolio_image_desc = get_post_meta( $post->ID, 'canuckcp_metabox_include_image_description', true ) ? true : false;
		?>
		<p>
			<span style="clear:both;width:200px;float:left;" class="include-image-desc"><?php esc_html_e( 'Include Feature Image Description', 'canuck-cp' ); ?></span>
			<input type="checkbox" name="portfolio_image_desc" id="portfolio-image-desc-id" <?php checked( $portfolio_image_desc, true ); ?>>
		</p>
		<?php
	}
}

/**
 * Save the data.
 *
 * This functon takes the meta data and saves it to the WordPress Database.
 *
 * @since 0.0.1
 * @param int $post_id is the post id.
 */
function canuckcp_save_page_custom_meta( $post_id ) {
	global $post;
	$page_template = basename( get_page_template() );
	// Verify nonce.
	if ( false === isset( $_POST['canuckcp_page_meta_box_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['canuckcp_page_meta_box_nonce'] ) ), basename( __FILE__ ) ) ) {// Input var okay.
		return $post_id;
	}
	// Check autosave.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// Check permissions.
	if ( isset( $_POST['post_type'] ) && 'page' === $_POST['post_type'] ) {// Input var okay.
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		}
	} elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	// Page layout, do not save the default.
	$page_layout_old = esc_html( get_post_meta( $post_id, 'canuckcp_metabox_page_layout', true ) );
	$page_layout_new = ( isset( $_POST['page_layout'] ) ? sanitize_text_field( wp_unslash( $_POST['page_layout'] ) ) : '' );// Input var okay.
	$default         = 'right_sidebar';
	if ( '' !== $page_layout_new && '' === $page_layout_old && $default !== $page_layout_new ) {
		// If a new meta value was added and there was no previous value, add it.
		add_post_meta( $post_id, 'canuckcp_metabox_page_layout', $page_layout_new, true );
	} elseif ( '' !== $page_layout_new && $page_layout_new !== $page_layout_old && $default !== $page_layout_new ) {
		// If the new meta value does not match the old value, update it.
		update_post_meta( $post_id, 'canuckcp_metabox_page_layout', $page_layout_new );
	} elseif ( '' === $page_layout_new || $default === $page_layout_new && '' !== $page_layout_old ) {
		// Delete meta if default is used.
		delete_post_meta( $post_id, 'canuckcp_metabox_page_layout' );
	}
	// Include post title.
	$exclude_title_old = get_post_meta( $post_id, 'canuckcp_metabox_title', true ) ? true : false;
	$exclude_title_new = ( isset( $_POST['exclude_page_title'] ) ? true : false );// Input var okay.
	if ( true === $exclude_title_new && false === $exclude_title_old ) {
		// If a new meta value was added and there was no previous value, add it.
		add_post_meta( $post_id, 'canuckcp_metabox_title', true, true );
	} elseif ( false === $exclude_title_new && true === $exclude_title_old ) {
		// If there is no new meta value but an old value exists, delete it.
		delete_post_meta( $post_id, 'canuckcp_metabox_title' );
	}
	// Sidebar a option.
	$sidebar_a_old = esc_html( get_post_meta( $post_id, 'canuckcp_metabox_sidebar_a', true ) );
	$sidebar_a_new = ( isset( $_POST['sidebar_a'] ) ? sanitize_text_field( wp_unslash( $_POST['sidebar_a'] ) ) : '' );// Input var okay.
	$default       = 'default-a';
	if ( '' !== $sidebar_a_new && '' === $sidebar_a_old && $default !== $sidebar_a_new ) {
		// If a new meta value was added and there was no previous value, add it.
		add_post_meta( $post_id, 'canuckcp_metabox_sidebar_a', $sidebar_a_new, true );
	} elseif ( '' !== $sidebar_a_new && $sidebar_a_new !== $sidebar_a_old && $default !== $sidebar_a_new ) {
		// If the new meta value does not match the old value, update it.
		update_post_meta( $post_id, 'canuckcp_metabox_sidebar_a', $sidebar_a_new );
	} elseif ( '' === $sidebar_a_new || $default === $sidebar_a_new && '' !== $sidebar_a_old ) {
		// Delete meta if default is used.
		delete_post_meta( $post_id, 'canuckcp_metabox_sidebar_a' );
	}
	// Sidebar b option.
	$sidebar_b_old = esc_html( get_post_meta( $post_id, 'canuckcp_metabox_sidebar_b', true ) );
	$sidebar_b_new = ( isset( $_POST['sidebar_b'] ) ? sanitize_text_field( wp_unslash( $_POST['sidebar_b'] ) ) : '' );// Input var okay.
	$default       = 'default-b';
	if ( '' !== $sidebar_b_new && '' === $sidebar_b_old && $default !== $sidebar_b_new ) {
		// If a new meta value was added and there was no previous value, add it.
		add_post_meta( $post_id, 'canuckcp_metabox_sidebar_b', $sidebar_b_new, true );
	} elseif ( '' !== $sidebar_b_new && $sidebar_b_new !== $sidebar_b_old && $default !== $sidebar_b_new ) {
		// If the new meta value does not match the old value, update it.
		update_post_meta( $post_id, 'canuckcp_metabox_sidebar_b', $sidebar_b_new );
	} elseif ( '' === $sidebar_b_new || $default === $sidebar_b_new && '' !== $sidebar_b_old ) {
		// Delete meta if default is used.
		delete_post_meta( $post_id, 'canuckcp_metabox_sidebar_b' );
	}
	// Exclude share buttons.
	$exclude_share_old = get_post_meta( $post_id, 'canuckcp_exclude_share', true ) ? true : false;
	$exclude_share_new = ( isset( $_POST['exclude_page_share'] ) ? true : false );// Input var okay.
	if ( true === $exclude_share_new && false === $exclude_share_old ) {
		// If a new meta value was added and there was no previous value, add it.
		add_post_meta( $post_id, 'canuckcp_exclude_share', true, true );
	} elseif ( false === $exclude_share_new && true === $exclude_share_old ) {
		// If there is no new meta value but an old value exists, delete it.
		delete_post_meta( $post_id, 'canuckcp_exclude_share' );
	}
	// Additional options available when Template = Feature Template.
	if ( 'template-feature.php' === $page_template ) {
		// Feature category.
		$feature_category_old = esc_html( get_post_meta( $post_id, 'canuckcp_metabox_feature_category', true ) );
		$feature_category_new = ( isset( $_POST['feature_category'] ) ? sanitize_text_field( wp_unslash( $_POST['feature_category'] ) ) : '' );// Input var okay.
		if ( '' !== $feature_category_new && '' === $feature_category_old ) {
			// If a new meta value was added and there was no previous value, add it.
			add_post_meta( $post_id, 'canuckcp_metabox_feature_category', $feature_category_new, true );
		} elseif ( '' !== $feature_category_new && $feature_category_new !== $feature_category_old ) {
			// If the new meta value does not match the old value, update it.
			update_post_meta( $post_id, 'canuckcp_metabox_feature_category', $feature_category_new );
		} elseif ( '' === $feature_category_new && '' !== $feature_category_old ) {
			// If there is no new meta value but an old value exists, delete it.
			delete_post_meta( $post_id, 'canuckcp_metabox_feature_category' );
		}
		// Feature slider type.
		$feature_type_old = esc_html( get_post_meta( $post_id, 'canuckcp_metabox_feature_type', true ) );
		$feature_type_new = ( isset( $_POST['feature_type'] ) ? sanitize_text_field( wp_unslash( $_POST['feature_type'] ) ) : '' );// Input var okay.
		$default          = 'button-nav-15to1';
		if ( '' !== $feature_type_new && '' === $feature_type_old && $default !== $feature_type_new ) {
			// If a new meta value was added and there was no previous value, add it.
			add_post_meta( $post_id, 'canuckcp_metabox_feature_type', $feature_type_new, true );
		} elseif ( '' !== $feature_type_new && $feature_type_new !== $feature_type_old && $default !== $feature_type_new ) {
			// If the new meta value does not match the old value, update it.
			update_post_meta( $post_id, 'canuckcp_metabox_feature_type', $feature_type_new );
		} elseif ( '' === $feature_type_new || $default === $feature_type_new && $feature_type_old ) {
			// If there is no new meta value but an old value exists, delete it.
			delete_post_meta( $post_id, 'canuckcp_metabox_feature_type' );
		}
	}
	// Additional options available when Template = Portfolio Template.
	if ( 'template-portfolio.php' === $page_template ) {
		// Portfolio category.
		$portfolio_category_old = esc_html( get_post_meta( $post_id, 'canuckcp_portfolio_category', true ) );
		$portfolio_category_new = ( isset( $_POST['portfolio_category'] ) ? sanitize_text_field( wp_unslash( $_POST['portfolio_category'] ) ) : '' );// Input var okay.
		if ( '' !== $portfolio_category_new && '' === $portfolio_category_old ) {
			// If a new meta value was added and there was no previous value, add it.
			add_post_meta( $post_id, 'canuckcp_portfolio_category', $portfolio_category_new, true );
		} elseif ( '' !== $portfolio_category_new && $portfolio_category_new !== $portfolio_category_old ) {
			// If the new meta value does not match the old value, update it.
			update_post_meta( $post_id, 'canuckcp_portfolio_category', $portfolio_category_new );
		} elseif ( '' === $portfolio_category_new && '' !== $portfolio_category_old ) {
			// If there is no new meta value but an old value exists, delete it.
			delete_post_meta( $post_id, 'canuckcp_portfolio_category' );
		}
		// Portfolio columns.
		$portfolio_type_old = esc_html( get_post_meta( $post_id, 'canuckcp_portfolio_type', true ) );
		$portfolio_type_new = ( isset( $_POST['portfolio_type'] ) ? sanitize_text_field( wp_unslash( $_POST['portfolio_type'] ) ) : '' );// Input var okay.
		$default            = 'classic1';
		if ( '' !== $portfolio_type_new && '' === $portfolio_type_old && $default !== $portfolio_type_new ) {
			// If a new meta value was added and there was no previous value, add it.
			add_post_meta( $post_id, 'canuckcp_portfolio_type', $portfolio_type_new, true );
		} elseif ( '' !== $portfolio_type_new && $portfolio_type_new !== $portfolio_type_old && $default !== $portfolio_type_new ) {
			// If the new meta value does not match the old value, update it.
			update_post_meta( $post_id, 'canuckcp_portfolio_type', $portfolio_type_new );
		} elseif ( '' === $portfolio_type_new || $default === $portfolio_type_new && '' !== $portfolio_type_old ) {
			// If there is no new meta value but an old value exists, delete it.
			delete_post_meta( $post_id, 'canuckcp_portfolio_type' );
		}
		// Include post title.
		$portfolio_post_title_old = get_post_meta( $post_id, 'canuckcp_metabox_include_post_content_title', true ) ? true : false;
		$portfolio_post_title_new = ( isset( $_POST['portfolio_post_title'] ) ? true : false );// Input var okay.
		if ( true === $portfolio_post_title_new && false === $portfolio_post_title_old ) {
			// If a new meta value was added and there was no previous value, add it.
			add_post_meta( $post_id, 'canuckcp_metabox_include_post_content_title', $portfolio_post_title_new, true );
		} elseif ( false === $portfolio_post_title_new || false === $portfolio_post_title_new && $portfolio_post_title_old ) {
			// If there is no new meta value but an old value exists, delete it.
			delete_post_meta( $post_id, 'canuckcp_metabox_include_post_content_title' );
		}
		// Include post content.
		$portfolio_post_content_old = get_post_meta( $post_id, 'canuckcp_metabox_include_post_content', true ) ? true : false;
		$portfolio_post_content_new = ( isset( $_POST['portfolio_post_content'] ) ? true : false );// Input var okay.
		if ( true === $portfolio_post_content_new && false === $portfolio_post_content_old ) {
			// If a new meta value was added and there was no previous value, add it.
			add_post_meta( $post_id, 'canuckcp_metabox_include_post_content', $portfolio_post_content_new, true );
		} elseif ( false === $portfolio_post_content_new || false === $portfolio_post_content_new && true === $portfolio_post_content_old ) {
			// If there is no new meta value but an old value exists, delete it.
			delete_post_meta( $post_id, 'canuckcp_metabox_include_post_content' );
		}
		// Include image caption.
		$portfolio_image_caption_old = get_post_meta( $post_id, 'canuckcp_metabox_include_image_caption', true ) ? true : false;
		$portfolio_image_caption_new = ( isset( $_POST['portfolio_image_caption'] ) ? true : false );// Input var okay.
		if ( true === $portfolio_image_caption_new && false === $portfolio_image_caption_old ) {
			// If a new meta value was added and there was no previous value, add it.
			add_post_meta( $post_id, 'canuckcp_metabox_include_image_caption', $portfolio_image_caption_new, true );
		} elseif ( false === $portfolio_image_caption_new || false === $portfolio_image_caption_new && true === $portfolio_image_caption_old ) {
			// If there is no new meta value but an old value exists, delete it.
			delete_post_meta( $post_id, 'canuckcp_metabox_include_image_caption' );
		}

		// Include image description.
		$portfolio_image_desc_old = get_post_meta( $post_id, 'canuckcp_metabox_include_image_description', true ) ? true : false;
		$portfolio_image_desc_new = ( isset( $_POST['portfolio_image_desc'] ) ? true : false );// Input var okay.
		if ( true === $portfolio_image_desc_new && false === $portfolio_image_desc_old ) {
			// If a new meta value was added and there was no previous value, add it.
			add_post_meta( $post_id, 'canuckcp_metabox_include_image_description', $portfolio_image_desc_new, true );
		} elseif ( false === $portfolio_image_desc_new || false === $portfolio_image_desc_new && true === $portfolio_image_desc_old ) {
			// If there is no new meta value but an old value exists, delete it.
			delete_post_meta( $post_id, 'canuckcp_metabox_include_image_description' );
		}
	}
}
add_action( 'save_post', 'canuckcp_save_page_custom_meta' );

/**
 * =============================================================================================
 *                     Custom Post Meta Box
 * =============================================================================================
 */

/**
 * Add meta box to posts.
 *
 * The format for the add_meta_box() is as follows:
 * add_meta_box( $id, $title, $callback, $post_type, $context, $priority, $callback_args );
 * $id : (string) (required) HTML 'id' attribute of the edit screen section Default: None
 * $title : (string) (required) Title of the edit screen section, visible to user Default: None
 * $callback : (callback) (required) Function that prints out the HTML for the edit screen section.
 *             Pass function name as a string
 * $post_type : (string) (required) The type of Write screen on which to show the edit screen section
 *              ('post', 'page', 'link', or 'custom_post_type' where custom_post_type is the custom post type slug)
 *              Default: None
 * $context : (string) (optional) The part of the page where the edit screen section should be shown
 *            ('normal', 'advanced', or 'side'). (Note that 'side' doesn't exist before 2.7)Default: 'advanced'
 * $priority : (string) (optional) The priority within the context where the boxes should show
 *             ('high', 'core', 'default' or 'low') Default: 'default'
 * $callback_args : (array) (optional) Arguments to pass into your callback function. The callback will receive
 *                  the $post object and whatever parameters are passed through this variable. Default: null
 *
 * @since 0.0.1
 */
function canuckcp_add_post_custom_meta_box() {
	add_meta_box(
		'canuckcp_post_custom_meta_box',
		__( 'Canuck Post Options', 'canuck-cp' ),
		'canuckcp_show_post_custom_meta_box',
		'post',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'canuckcp_add_post_custom_meta_box' );

/**
 * The Callback.
 *
 * The callback is used to display the options on the post.
 *
 * @since 0.0.1
 */
function canuckcp_show_post_custom_meta_box() {
	global $post;
	// Use nonce for verification.
	wp_nonce_field( basename( __FILE__ ), 'canuckcp_post_meta_box_nonce' );
	?>
	<span>
		<br/>
		<?php esc_html_e( 'If using the feature image for a home, blog or feature slider clicking this option will place the the post title in caption strip on the image.', 'canuck-cp' ); ?>
	</span>
	<?php
	// **************** Include Link to Post ****************************************************
	$include_feature_title = ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_include_feature_title', true ) ? false : true );
	?>
	<p>
		<span style="clear:both;width:200px;float:left;" class="link-to-title">
			<?php esc_html_e( 'Add post title caption to image', 'canuck-cp' ); ?>
		</span>
		<input type="checkbox" name="include_feature_title" id="include_feature_title_id" <?php checked( $include_feature_title, true ); ?>>
	</p>
	<span>
		<br/>
		<?php esc_html_e( 'Feature images can have no links, link to the post, or provide a custom link.', 'canuck-cp' ); ?>
	</span>
	<?php
	// **************** Include Link to Post ****************************************************
	$link_to_post = ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_link_to_post', true ) ? false : true );
	?>
	<p>
		<span style="clear:both;width:200px;float:left;" class="link-to-post">
			<?php esc_html_e( 'Link feature image to this post', 'canuck-cp' ); ?>
		</span>
		<input type="checkbox" name="link_to_post" id="link-to-post-id" <?php checked( $link_to_post, true ); ?>>
	</p>
	<?php
	// **************** Use feature image custom link ****************************************************
	$custom_link = get_post_meta( $post->ID, 'canuckcp_custom_feature_link', true );
	?>
	<p>
		<span style="clear:both;width:200px;float:left;" class="custom-link">
			<?php esc_html_e( 'Input a custom link', 'canuck-cp' ); ?>
			<br/>
			<?php esc_html_e( 'format: //yourlink.com', 'canuck-cp' ); ?>
		</span>
		<input type="text" name="custom_link" id="custom-link-id" value="<?php echo esc_url( $custom_link ); ?>" size="30" />
	</p>
	<?php
	// **************** Exclude Share Option ****************************************************.
	$exclude_post_share = ( '' === get_post_meta( $post->ID, 'canuckcp_exclude_post_share', true ) ? false : true );
	?>
	<p>
		<span style="clear:both;width:200px;float:left;" class="meta-exclude-post-share">Exclude Share Buttons</span>
		<input style="margin: 10px 0 0 0;" type="checkbox" name="exclude_post_share" id="exclude_post-share-id" <?php checked( $exclude_post_share, true ); ?>>
	</p>
	<?php
}
/**
 * Save the data.
 *
 * This functon takes the meta data and saves it to the WordPress Database.
 *
 * @since 0.0.1
 * @param string $post_id id the post id.
 */
function canuckcp_save_post_custom_meta( $post_id ) {
	global $post;
	// Verify nonce.
	if ( false === isset( $_POST['canuckcp_post_meta_box_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['canuckcp_post_meta_box_nonce'] ) ), basename( __FILE__ ) ) ) {// Input var okay.
		return $post_id;
	}
	// Check autosave.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// Check permissions.
	if ( isset( $_POST['post_type'] ) && 'page' === $_POST['post_type'] ) {// Input var okay.
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		}
	} elseif ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	// Add post title as caption..
	$include_feature_title_old = get_post_meta( $post_id, 'canuckcp_metabox_include_feature_title', true ) ? true : false;
	$include_feature_title_new = ( isset( $_POST['include_feature_title'] ) ? true : false );// Input var okay.
	if ( true === $include_feature_title_new && false === $include_feature_title_old ) {
		// If a new meta value was added and there was no previous value, add it.
		add_post_meta( $post_id, 'canuckcp_metabox_include_feature_title', true, true );
	} elseif ( true === $include_feature_title_new && true === $include_feature_title_old ) {
		// If there is no new meta value but an old value exists, delete it.
		update_post_meta( $post_id, 'canuckcp_metabox_include_feature_title', $include_feature_title_new );
	} elseif ( false === $include_feature_title_new || false === $include_feature_title_new && true === $include_feature_title_old ) {
		// If there is no new meta value but an old value exists, delete it.
		delete_post_meta( $post_id, 'canuckcp_metabox_include_feature_title' );
	}
	// Link to post.
	$link_to_post_old = get_post_meta( $post_id, 'canuckcp_metabox_link_to_post', true ) ? true : false;
	$link_to_post_new = ( isset( $_POST['link_to_post'] ) ? true : false );// Input var okay.
	if ( true === $link_to_post_new && false === $link_to_post_old ) {
		// If a new meta value was added and there was no previous value, add it.
		add_post_meta( $post_id, 'canuckcp_metabox_link_to_post', true, true );
	} elseif ( true === $link_to_post_new && true === $link_to_post_old ) {
		// If there is no new meta value but an old value exists, delete it.
		update_post_meta( $post_id, 'canuckcp_metabox_link_to_post', $link_to_post_new );
	} elseif ( false === $link_to_post_new || false === $link_to_post_new && true === $link_to_post_old ) {
		// If there is no new meta value but an old value exists, delete it.
		delete_post_meta( $post_id, 'canuckcp_metabox_link_to_post' );
	}
	// Custom link.
	$custom_link_old = esc_url( get_post_meta( $post_id, 'canuckcp_custom_feature_link', true ) );
	$custom_link_new = ( isset( $_POST['custom_link'] ) ? esc_url_raw( wp_unslash( $_POST['custom_link'] ) ) : '' );// Input var okay.
	if ( '' !== $custom_link_new && '' === $custom_link_old ) {
		// If a new meta value was added and there was no previous value, add it.
		add_post_meta( $post_id, 'canuckcp_custom_feature_link', $custom_link_new, true );
	} elseif ( '' !== $custom_link_new && $custom_link_new !== $custom_link_old ) {
			// If the new meta value does not match the old value, update it.
			update_post_meta( $post_id, 'canuckcp_custom_feature_link', $custom_link_new );
	} elseif ( '' === $custom_link_new && '' !== $custom_link_old ) {
		// If there is no new meta value but an old value exists, delete it.
		delete_post_meta( $post_id, 'canuckcp_custom_feature_link' );
	}
	// Exclude share buttons.
	$exclude_post_share_old = get_post_meta( $post_id, 'canuckcp_exclude_post_share', true ) ? true : false;
	$exclude_post_share_new = ( isset( $_POST['exclude_post_share'] ) ? true : false );// Input var okay.
	if ( true === $exclude_post_share_new && false === $exclude_post_share_old ) {
		// If a new meta value was added and there was no previous value, add it.
		add_post_meta( $post_id, 'canuckcp_exclude_post_share', true, true );
	} elseif ( false === $exclude_post_share_new && true === $exclude_post_share_old ) {
		// If there is no new meta value but an old value exists, delete it.
		delete_post_meta( $post_id, 'canuckcp_exclude_post_share' );
	}
}
add_action( 'save_post', 'canuckcp_save_post_custom_meta' );
