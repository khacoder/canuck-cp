<?php
/**
 * Canuck Home Page template part - full slider - carousel navigation
 *
 * This template part is called by canuckcp_home_feature_options()
 * located in canuck-custom-functions.php
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $post, $canuckcp_feature_category;
$category_id  = get_cat_ID( $canuckcp_feature_category );
$args         = array(
	'category'    => $category_id,
	'numberposts' => 20,
);
$custom_posts = get_posts( $args );
$use_lazyload = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
if ( 0 !== $category_id && $custom_posts ) {
	?>
	<div id="canuck-cp-feature-thumb-wrapper-id" class="canuck-cp-feature-thumb-wrapper">
		<div id="canuck-cp-feature-thumbslider-feature-id" class="splide canuck-cp-feature-thumbslider-feature">
			<div class="splide__track feature">
				<ul class="splide__list">
					<?php
					$canuckcp_feature_pic_count = 0;
					foreach ( $custom_posts as $post ) { // phpcs:ignore
						setup_postdata( $post );
						$link_to_post          = ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_link_to_post', true ) ? false : true );
						$custom_feature_link   = ( '' === get_post_meta( $post->ID, 'canuckcp_custom_feature_link', true ) ? false : get_post_meta( $post->ID, 'canuckcp_custom_feature_link', true ) );
						$include_feature_title = ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_include_feature_title', true ) ? false : true );
						if ( has_post_thumbnail() ) {
							$canuckcp_feature_pic_count ++;
							?>
							<li class="splide__slide">
								<?php
								$thumb                  = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'canuckcp_med15' );
								$image_url              = $thumb[0];
								$canuckcp_feature_title = false === $include_feature_title ? get_post( get_post_thumbnail_id() )->post_excerpt : the_title_attribute( 'echo=0' );
								if ( '' === $canuckcp_feature_title ) {
									$imagetitle = '';
									$imagealt   = esc_html__( 'flexslider image', 'canuck-cp' );
								} else {
									$imagetitle = $canuckcp_feature_title;
									$imagealt   = $canuckcp_feature_title;
								}
								if ( true === $include_feature_title ) {
									if ( '' !== $canuckcp_feature_title ) {
										echo '<p class="splide-caption">' . wp_kses_post( $canuckcp_feature_title ) . '</p>';
									}
								}
								// Set up the link and image.
								if ( true === $link_to_post ) {
									?>
									<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute( 'echo=0' ); ?>">
										<img src="<?php echo esc_url( $image_url ); ?>"
											title="<?php echo esc_attr( $imagetitle ); ?>" alt="<?php echo esc_attr( $imagealt ); ?>" />
									</a>
									<?php
								} elseif ( false !== $custom_feature_link ) {
									?>
									<a href="<?php echo esc_url( $custom_feature_link ); ?>" title="<?php echo the_title_attribute( 'echo=0' ); ?>">
										<img src="<?php echo esc_url( $image_url ); ?>"
											title="<?php echo esc_attr( $imagetitle ); ?>" alt="<?php echo esc_attr( $imagealt ); ?>" />
									</a>
									<?php
								} else {
									?>
									<img src="<?php echo esc_url( $image_url ); ?>"
										title="<?php echo esc_attr( $imagetitle ); ?>" alt="<?php echo esc_attr( $canuckcp_feature_title ); ?>" />
									<?php
								}
								?>
							</li>
							<?php
						}
					}
					?>
				</ul>
			</div>
		</div>
		<div id="canuck-cp-feature-thumbslider-thumb-id" class="splide canuck-cp-feature-thumbslider-thumb">
			<div class="splide__track">
				<ul class="splide__list">
					<?php
					$canuckcp_feature_pic_count = 0;
					foreach ( $custom_posts as $post ) { // phpcs:ignore
						setup_postdata( $post );
						if ( has_post_thumbnail() ) {
							$canuckcp_feature_pic_count ++;
							?>
							<li class="splide__slide">
								<?php
								$thumb     = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'canuckcp_gallery_thumb' );
								$image_url = $thumb[0];
								?>
								<img src="<?php echo esc_url( $image_url ); ?>" title="<?php esc_attr_e( 'flex thumb', 'canuck-cp' ); ?>" alt="<?php esc_attr_e( 'flex thumb', 'canuck-cp' ); ?>" />
							</li>
							<?php
						}
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	<?php
} else {
	?>
	<div class="error"><?php esc_html_e( 'You have not set up your Feature posts so I can not find any images - see user documentation.', 'canuck-cp' ); ?></div>
	<?php
}
if ( 0 === $canuckcp_feature_pic_count ) {
	?>
	<div class="error">
		<h3><?php esc_html_e( 'Error: There were no feature images found for your slider. Did you select the correct category?', 'canuck-cp' ); ?></h3>
	</div>
	<?php
}
wp_reset_postdata();

