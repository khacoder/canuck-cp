<?php
/**
 * Template Part, masonry.sets up the masonry content for the masonrt custom template.
 *
 * @package   Canuck CP ClassicPress Theme
 * @copyright Copyright (C) 2020 or later Kevin Archibald
 * @license   http://www.gnu.org/licenses/gpl-2.0.html
 * @author    Kevin Archibald <www.kevinsspace.ca/contact/>
 */

$include_pinterest_pinit = get_theme_mod( 'canuckcp_include_pinit' ) ? true : false;
$images                  = array();
$use_lazyload            = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
if ( ! post_password_required() ) {
	if ( have_posts() ) : while ( have_posts() ) : the_post();// phpcs:ignore
			if ( has_shortcode( $post->post_content, 'gallery' ) ) {
				// Retrieve all galleries of this post.
				$galleries = get_post_galleries_images( $post );
			} else {
				$galleries = false;
			}
			if ( '' !== trim( get_the_content() ) ) {
				$content = strip_shortcodes( get_the_content() );
				?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="portfolio-post entry-content">
						<?php echo wp_kses_post( $content ); ?>
					</div>
				</div>
				<?php
			}
	endwhile;
	endif;
	if ( false !== $galleries ) {
		?>
		<div class="masonry-gallery">
			<div class="masonry-grid-sizer"></div>
			<?php
			$count = 1;
			foreach ( $galleries[0] as $image ) {
				?>
				<div class="masonry-grid-item">
					<?php
					if ( true === $include_pinterest_pinit ) {
						?>
						<img data-pin-no-hover="true"
							src="<?php echo esc_url( $image ); ?>"
							alt="<?php echo esc_attr__( 'gallery image ', 'canuck-cp' ) . $count;// phpcs:ignore ?>"
							title="<?php echo esc_attr__( 'Image #', 'canuck-cp' ) . $count;// phpcs:ignore ?>" />
						<?php
					} else {
						?>
						<img src="<?php echo esc_url( $image ); ?>"
							alt="<?php echo esc_attr__( 'gallery image ', 'canuck-cp' ) . $count;// phpcs:ignore ?>"
							title="<?php esc_attr__( 'Image #', 'canuck-cp' ) . $count; ?>" />
						<?php
					}
					?>
					<span class="masonry-image-overlay">
						<span class="masonry-overlay-wrap">
							<span class="masonry-text">
								<?php
								if ( true === $include_pinterest_pinit ) {
									echo '<a href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false"  data-pin-media="' . esc_url( $image ) . '"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="' . esc_attr__( 'Pinterest share image', 'canuck-cp' ) . '" /></a>'; // phpcs:ignore
								}
								echo '&nbsp;&nbsp;#' . $count;// phpcs:ignore
								?>
							</span>
						</span>
					</span>
				</div>
				<?php
				$count++;
			}
			?>
		</div>
		<?php
	}
}
