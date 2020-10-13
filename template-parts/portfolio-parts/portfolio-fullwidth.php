<?php
/**
 * Canuck Portfolio One Column template part
 *
 * This template part is called by template-portfolio-side.php or template-portfolio.php
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

global $post,$canuckcp_feature_pic_count;
$category                   = esc_html( ( '' === get_post_meta( $post->ID, 'canuckcp_portfolio_category', true ) ? false : esc_html( get_post_meta( $post->ID, 'canuckcp_portfolio_category', true ) ) ) );
$display_post_content       = ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_include_post_content', true ) ? false : true );
$display_post_content_title = ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_include_post_content_title', true ) ? false : true );
$display_image_caption      = ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_include_image_caption', true ) ? false : true );
$display_image_description  = ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_include_image_description', true ) ? false : true );
$include_pinterest_pinit    = get_theme_mod( 'canuckcp_include_pinit' ) ? true : false;
$category_id                = get_cat_ID( $category );
$args                       = array(
	'category'    => $category_id,
	'numberposts' => 20,
);
$custom_posts               = get_posts( $args );
$use_lazyload               = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
if ( 0 !== $category_id && $custom_posts ) {
	$canuckcp_feature_pic_count = 0;
	foreach ( $custom_posts as $post ) { // phpcs:ignore
		setup_postdata( $post );
		// Get the switches to exclude a feature image link or customize the link.
		$link_to_post        = ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_link_to_post', true ) ? false : true );
		$custom_feature_link = ( '' === get_post_meta( $post->ID, 'canuckcp_custom_feature_link', true ) ? false : get_post_meta( $post->ID, 'canuckcp_custom_feature_link', true ) );
		$image_url           = get_the_post_thumbnail_url( $post->ID, 'canuckcp_med15' );
		$post_title          = the_title_attribute( 'echo=0' );
		$post_content        = get_the_content();
		$image_caption       = get_post( get_post_thumbnail_id() )->post_excerpt;
		$image_desc          = get_post( get_post_thumbnail_id() )->post_content;
		if ( has_post_thumbnail() ) {
			$canuckcp_feature_pic_count ++;
			?>
			<div class="portfolio-full">
				<div class="portfolio-classic-item-wrap">
					<?php
					if ( true === $include_pinterest_pinit ) {
						if ( true === $use_lazyload ) {
							?>
							<img class="lazyload" data-pin-no-hover="true"
								src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
								data-src="<?php echo esc_url( $image_url ); ?>"
								alt="<?php echo esc_attr( $image_caption ); ?>"/>
							<?php
						} else {
							?>
							<img data-pin-no-hover="true" 
								src="<?php echo esc_url( $image_url ); ?>"
								alt="<?php echo esc_attr( $image_caption ); ?>"/>
							<?php
						}
					} else {
						if ( true === $use_lazyload ) {
							?>
							<img class="lazyload" data-pin-no-hover="true"
								src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
								data-src="<?php echo esc_url( $image_url ); ?>"
								alt="<?php echo esc_attr( $image_caption ); ?>"/>
							<?php
						} else {
							?>
							<img data-pin-no-hover="true"
								src="<?php echo esc_url( $image_url ); ?>"
								alt="<?php echo esc_attr( $image_caption ); ?>"/>
							<?php
						}
					}
					?>
					<div class="portfolio-classic-overlay">
						<div class="portfolio-classic-overlay-wrap>">
							<span class="links">
								<?php
								if ( true === $include_pinterest_pinit ) {
									echo '<a href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false"  data-pin-media="' . esc_url( $image_url ) . '"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="' . esc_attr__( 'Pinterest share image', 'canuck-cp' ) . '" /></a>'; // phpcs:ignore
								}
								if ( false !== $custom_feature_link ) {
									echo '<a href="' . esc_url( $custom_feature_link ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="font-icon">' . canuckcp_svg( 'link', '14', '#ffffff' ) . '</i></a>';// phpcs:ignore
								} elseif ( true === $link_to_post ) {
									echo '<a href="' . esc_url( get_the_permalink() ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="font-icon">' . canuckcp_svg( 'link', '14', '#ffffff' ) . '</i></a>';// phpcs:ignore
								}
								echo '<a href="' . esc_url( $image_url ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="font-icon">' . canuckcp_svg( 'image', '14', '#ffffff' ) . '</i></a>';// phpcs:ignore
								?>
							</span>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<?php
				if ( true === $display_post_content_title ) {
					?>
					<h3 class="display-content-title"><?php echo wp_kses_post( $post_title ); ?></h3>
					<?php
				}
				if ( true === $display_post_content ) {
					?>
					<div class="display-content">
						<?php
						$post_content = do_shortcode( $post_content );
						echo wp_kses_post( $post_content );
						?>
					</div>
					<?php
				}
				if ( true === $display_image_caption ) {
					?>
					<div class="display-caption">
						<h3><?php echo wp_kses_post( $image_caption ); ?></h3>
					</div>
					<?php
				}
				if ( true === $display_image_description ) {
					?>
					<div class="display-description"><?php echo wp_kses_post( $image_desc ); ?></div>
					<?php
				}
				?>
				<div class="clearfix"></div>
			</div>
			<?php
		}
	}
} else {
	?>
	<div class="portfolio_error">
		<h3><?php esc_html_e( 'Error: no posts or categories are wrong!', 'canuck-cp' ); ?></h3>
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
?>
<div class="clearfix" ></div>
<?php
wp_reset_postdata();
