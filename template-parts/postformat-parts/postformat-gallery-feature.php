<?php
/**
 * Template Part, gallery feature for gallery post format
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $content_width;
$post_style   = esc_html( get_theme_mod( 'canuckcp_blog_style', 'top_feature' ) );
$images       = array();
$images       = canuckcp_get_gallery_images();
$use_lazyload = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
if ( false !== $images ) {
	?>
	<div class="gallery-post-wrap">
		<div id="gallery-post-feature-id" class="splide gallery-post-feature">
			<div class="splide__track feature">
				<ul class="splide__list">
					<?php
					// Get image data and set images to the same height.
					$imagedata  = array();
					$imagecount = 1;
					$minheight  = 1000;
					foreach ( $images as $image ) {
						$thumb = wp_get_attachment_image_src( $image, 'canuckcp_gallery' );
						if ( false !== $thumb ) {
							$imagedata[ $imagecount ]['url']    = $thumb[0];
							$imagedata[ $imagecount ]['width']  = $thumb[1];
							$imagedata[ $imagecount ]['height'] = $thumb[2];
							if ( $thumb[2] < $minheight ) {
								$minheight = $thumb[2];
							}
							$imagecount++;
						}
					}
					$count = count( $imagedata );
					for ( $i = 1; $i < $count + 1; $i++ ) {
						if ( $imagedata[ $i ]['height'] > $minheight ) {
							$imagedata[ $i ]['adjheight'] = intval( $minheight );
							$imagedata[ $i ]['adjwidth']  = $imagedata[ $i ]['width'] * $minheight / $imagedata[ $i ]['height'];
						} else {
							$imagedata[ $i ]['adjheight'] = intval( $imagedata[ $i ]['height'] );
							$imagedata[ $i ]['adjwidth']  = intval( $imagedata[ $i ]['width'] );
						}
					}
					for ( $i = 1; $i < $count + 1; $i++ ) {
						?>
						<li class="splide__slide">
							<img src="<?php echo esc_url( $imagedata[ $i ]['url'] ); ?>"
									title="" alt="<?php esc_attr_e( 'flex feature', 'canuck-cp' ); ?>"
									height="<?php echo intval( $imagedata[ $i ]['adjheight'] ); ?>"
									width="<?php echo intval( $imagedata[ $i ]['adjwidth'] ); ?>" />
						</li>
						<?php
					}
					?>
				</ul>
			</div>
		</div>
		<div id="gallery-post-thumbnails-id" class="splide gallery-post-thumbnails">
			<div class="splide__track">
				<ul class="splide__list">
					<?php
					// Set up the carousel.
					foreach ( $images as $image ) {
						if ( 'top_feature' === $post_style ) {
							$thumb = wp_get_attachment_image_src( $image, 'canuckcp_gallery_thumb' );
						} else {
							$thumb = wp_get_attachment_image_src( $image, 'canuckcp_gallery_thumb' );
						}
						if ( false !== $thumb ) {
							$image_url = $thumb[0];
							?>
							<li class="splide__slide">
								<img src="<?php echo esc_url( $image_url ); ?>" title="" role="button" tabindex="0" alt="<?php esc_attr_e( 'splide thumb', 'canuck-cp' ); ?>" />
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
	<div class="error">
		<h3><?php esc_html_e( 'Error: Unable to find a gallery?', 'canuck-cp' ); ?></h3>
	</div>
	<?php
}
