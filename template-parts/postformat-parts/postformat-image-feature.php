<?php
/**
 * Template Part, image feature for image post format
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2016  kevinhaig
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      kevinhaig <www.kevinsspace.ca/contact/>
 */

global $post;
$include_pinterest_pinit = get_theme_mod( 'canuckcp_include_pinit' ) ? true : false;
$add_nopin               = ( true === $include_pinterest_pinit ) ? 'data-pin-no-hover="true" ' : '';
$use_lazyload            = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
if ( has_post_thumbnail() ) {
	?>
	<div class="post-format-image-feature">
		<?php
		$image_url     = get_the_post_thumbnail_url( $post->ID, 'canuckcp_med15' );
		$image_caption = get_post( get_post_thumbnail_id() )->post_excerpt;
		$image_meta    = wp_get_attachment_metadata( get_post_thumbnail_id() );
		if ( true === $use_lazyload ) {
			?>
			<img class="lazyload" <?php echo $add_nopin;// phpcs:ignore ?>
				src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
				data-src="<?php echo esc_url( $image_url ); ?>"
				alt="<?php echo esc_attr( $image_caption ); ?>">
			<?php
		} else {
			?>
			<img <?php echo $add_nopin;// phpcs:ignore ?>src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_caption ); ?>">
			<?php
		}
		?>
		<div class="post-format-image-overlay">
			<div class="post-format-image-overlay-content">
				<?php
				if ( true === $include_pinterest_pinit ) {
					echo '<a href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false"  data-pin-media="' . esc_url( $image_url ) . '"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="' . esc_attr__( 'Pinterest share image', 'canuck-cp' ) . '" /></a>'; // phpcs:ignore
				}
				?>
				<span>
					<?php
					esc_html_e( 'Camera: ', 'canuck-cp' );
					echo esc_html( $image_meta['image_meta']['camera'] );
					?>
				</span>
				<span>
					<?php
					esc_html_e( 'Aperture: ', 'canuck-cp' );
					echo esc_html( $image_meta['image_meta']['aperture'] );
					?>
				</span>
				<span>
					<?php
					esc_html_e( 'Focal Length: ', 'canuck-cp' );
					echo esc_html( $image_meta['image_meta']['focal_length'] );
					?>
				</span>
				<?php
				// Note-leave as non strict or it will break and cause a divide by zero error.
				if ( 0 != $image_meta['image_meta']['shutter_speed'] ) {// phpcs:ignore
					$shutter_speed = round( 1 / $image_meta['image_meta']['shutter_speed'], 0 );
				} else {
					$shutter_speed = '';
				}
				?>
				<span>
					<?php
					esc_html_e( 'Shutter Speed: ', 'canuck-cp' );
					echo esc_html( $shutter_speed );
					?>
				</span>
				<span>
					<?php
					esc_html_e( 'ISO: ', 'canuck-cp' );
					echo esc_html( $image_meta['image_meta']['iso'] );
					?>
				</span>
				<?php
				if ( '' !== get_post( get_post_thumbnail_id() )->post_excerpt ) {
					?>
					<h6><?php echo wp_kses_post( get_post( get_post_thumbnail_id() )->post_excerpt ); ?></h6>
					<?php
				}
				if ( '' !== get_post( get_post_thumbnail_id() )->post_content ) {
					?>
					<span><?php echo wp_kses_post( get_post( get_post_thumbnail_id() )->post_content ); ?></span>
					<?php
				}
				?>
			</div>
		</div>
	</div>
	<?php
}
