<?php
/**
 * Canuck Portfolio Four Column template part
 *
 * This template part is called by template-portfolio-side.php or template-portfolio.php
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

global $post,$canuckcp_feature_pic_count;
$category                   = esc_html( ( '' === get_post_meta( $post->ID, 'canuckcp_portfolio_category', true ) ? false : get_post_meta( $post->ID, 'canuckcp_portfolio_category', true ) ) );
$display_post_content       = ( ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_include_post_content', true ) ? false : true ) );
$display_post_content_title = ( ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_include_post_content_title', true ) ? false : true ) );
$display_image_caption      = ( ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_include_image_caption', true ) ? false : true ) );
$display_image_description  = ( ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_include_image_description', true ) ? false : true ) );
$canuckcp_portfolio_type    = sanitize_text_field( ( '' === get_post_meta( $post->ID, 'canuckcp_portfolio_type', true ) ? 'grid3' : get_post_meta( $post->ID, 'canuckcp_portfolio_type', true ) ) );
$include_pinterest_pinit    = get_theme_mod( 'canuckcp_include_pinit' ) ? true : false;
$category_id                = get_cat_ID( $category );
$args                       = array(
	'category'    => $category_id,
	'numberposts' => 20,
);
$custom_posts               = get_posts( $args );
if ( 0 !== $category_id && $custom_posts ) {
	?>
	<div class="masonry-gallery portfolio">
		<div class="masonry-grid-sizer"></div>
		<?php
		$canuckcp_feature_pic_count = 0;
		foreach ( $custom_posts as $post ) { // phpcs:ignore
			setup_postdata( $post );
			$link_to_post        = ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_link_to_post', true ) ? false : true );
			$custom_feature_link = ( '' === get_post_meta( $post->ID, 'canuckcp_custom_feature_link', true ) ? false : get_post_meta( $post->ID, 'canuckcp_custom_feature_link', true ) );
			$image_url           = get_the_post_thumbnail_url( $post->ID, 'large' );
			$image_caption       = get_post( get_post_thumbnail_id() )->post_excerpt;
			$image_desc          = get_post( get_post_thumbnail_id() )->post_content;
			if ( has_post_thumbnail() ) {
				$canuckcp_feature_pic_count ++;
				?>
				<div class="masonry-grid-item">
					<?php
					if ( true === $include_pinterest_pinit ) {
						echo '<img data-pin-no-hover="true" src="' . esc_url( $image_url ) . '" alt="' . esc_attr( $image_caption ) . '"/>';
					} else {
						echo '<img data-pin-no-hover="true" src="' . esc_url( $image_url ) . '" alt="' . esc_attr( $image_caption ) . '"/>';
					}
					?>
					<div class="masonry-image-overlay">
						<div class="masonry-overlay-wrap">
							<span class="masonry-links">
								<?php
								if ( true === $include_pinterest_pinit ) {
									echo '<a href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false"  data-pin-media="' . esc_url( $image_url ) . '"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="' . esc_attr__( 'Pinterest share image', 'canuck-cp' ) . '" /></a>'; // phpcs:ignore
								}
								if ( false !== $custom_feature_link ) {
									echo '<a href="' . esc_url( $custom_feature_link ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="font-icon">' . canuckcp_svg( 'link', '14', '#ffffff' ) . '</i></a>';// phpcs:ignore
								} elseif ( true === $link_to_post ) {
									echo '<a href="' . esc_url( get_the_permalink() ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="font-icon">' . canuckcp_svg( 'link', '14', '#ffffff' ) . '</i></a>';// phpcs:ignore
								}
								?>
								<a href="<?php echo esc_url( $image_url ); ?>" title="<?php the_title_attribute( 'echo=0' ); ?>" ><i class="font-icon"><?php echo canuckcp_svg( 'image', '14', '#ffffff' );// phpcs:ignore ?></i></a>
							</span>
							<span class="title"><?php echo wp_kses_post( $image_caption ); ?></span>
							<div class="content"><?php echo wp_kses_post( $image_desc ); ?></div>
						</div>
					</div>
				</div>
				<?php
			}
			if ( 'grid2' === $canuckcp_portfolio_type ) {
				if ( is_int( ( $canuckcp_feature_pic_count ) / 2 ) ) {
					echo '<div class="clearfix"></div>';
				}
			} elseif ( 'grid3' === $canuckcp_portfolio_type ) {
				if ( is_int( ( $canuckcp_feature_pic_count ) / 3 ) ) {
					echo '<div class="clearfix"></div>';
				}
			} elseif ( 'grid4' === $canuckcp_portfolio_type ) {
				if ( is_int( ( $canuckcp_feature_pic_count ) / 4 ) ) {
					echo '<div class="clearfix"></div>';
				}
			} elseif ( 'grid5' === $canuckcp_portfolio_type ) {
				if ( is_int( ( $canuckcp_feature_pic_count ) / 5 ) ) {
					echo '<div class="clearfix"></div>';
				}
			}
		}
		?>
	</div>
	<?php
} else {
	?>
	<div class="portfolio_error">
		<h3><?php esc_html_e( 'Error: no posts or category selected is wrong!', 'canuck-cp' ); ?></h3>
	</div>
	<?php
}
if ( 0 === $canuckcp_feature_pic_count ) {
	?>
	<div class="portfolio_error">
		<h3><?php esc_html_e( 'Error: There were no feature images found?', 'canuck-cp' ); ?></h3>
	</div>
	<?php
}
wp_reset_postdata();

