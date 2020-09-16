<?php
/**
 * Template Part, general post method, used by author, category, date, search and tag pages
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

$use_lazyload = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			<?php
			if ( ! post_password_required() ) {
				if ( has_post_format( 'audio' ) ) {
					get_template_part( '/template-parts/postformat-parts/postformat', 'audio-feature' );
				} elseif ( has_post_format( 'gallery' ) ) {
					get_template_part( '/template-parts/postformat-parts/postformat', 'gallery-feature' );
				} elseif ( has_post_format( 'image' ) ) {
					if ( has_post_thumbnail() ) {
						get_template_part( '/template-parts/postformat-parts/postformat', 'image-feature' );
					}
				} elseif ( has_post_format( 'quote' ) ) {
					get_template_part( '/template-parts/postformat-parts/postformat', 'quote-feature' );
				} elseif ( has_post_format( 'video' ) ) {
					get_template_part( '/template-parts/postformat-parts/postformat', 'video-feature' );
				} else {
					if ( has_post_thumbnail() ) {
						$feature_image_url = get_the_post_thumbnail_url( $post->ID, 'large' );
						if ( true === $use_lazyload ) {
							?>
							<div class="image-post-feature">
								<img class="lazyload"
									src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
									data-src="<?php echo esc_url( $feature_image_url ); ?>"
									alt="<?php esc_attr_e( 'top feature image', 'canuck-cp' ); ?>" />
							</div>
							<?php
						} else {
							?>
							<img src="<?php echo esc_url( $feature_image_url ); ?>" alt="<?php esc_attr_e( 'top feature image', 'canuck-cp' ); ?>" />
							<?php
						}
					}
				}
			} else {
				$feature_image_url = get_template_directory_uri() . '/images/password800.jpg';// phpcs:ignore
				if ( true === $use_lazyload ) {
					?>
					<div class="image-post-feature">
						<img class="lazyload"
							src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
							data-src="<?php echo esc_url( $feature_image_url ); ?>"
							alt="<?php esc_attr_e( 'password required', 'canuck-cp' ); ?>" />
					</div>
					<?php
				} else {
					?>
					<img src="<?php echo esc_url( $feature_image_url ); ?>" alt="<?php esc_attr_e( 'password required', 'canuck-cp' ); ?>" />
					<?php
				}
			}
			?>
			<div class="post-wrap-tf">
				<div class="post-overlay-tf">
					<div class="post-header-tf">
						<h2 class="post-title entry-title">
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="post-meta-tf">
							<?php canuckcp_post_meta_full(); ?>
						</div>
					</div>
					<div class="post-content-tf entry-content">
						<?php
						if ( ! post_password_required() ) {
							if ( has_post_format( 'audio' ) ) {
								?>
								<div class="post-content-tf entry-content">
									<?php
									if ( has_excerpt() ) {
										the_excerpt();
										printf(
											'<div class="read-more-wrap"><a class="read-more" href="%1$s">%2$s</a></div>',
											esc_url( get_permalink( get_the_ID() ) ),
											esc_html__( 'Read More', 'canuck-cp' )
										);
									} else {
										the_excerpt();
									}
									?>
								</div>
								<?php
							} elseif ( has_post_format( 'quote' ) ) {
								if ( has_excerpt() ) {
									the_excerpt();
									printf(
										'<div class="read-more-wrap"><a class="read-more" href="%1$s">%2$s</a></div>',
										esc_url( get_permalink( get_the_ID() ) ),
										esc_html__( 'Read More', 'canuck-cp' )
									);
								} else {
									$trim_words      = get_theme_mod( 'canuckcp_excerpt_length', 30 );
									$canuckcp_more   = '&hellip;<div class="read-more-wrap"><a class="read-more" href="' . esc_url( get_permalink() ) . '">' . __( 'Read More', 'canuck-cp' ) . '</a></div>';
									$content         = get_the_content();
									$content         = canuckcp_strip_extracted_quote( $content );
									$content_trimmed = wp_trim_words( $content, $trim_words, $canuckcp_more );
									$excerpt         = apply_filters( 'the_excerpt', $content_trimmed );
									echo wp_kses_post( $excerpt );
								}
							} else {
								if ( has_excerpt() ) {
									the_excerpt();
									printf(
										'<div class="read-more-wrap"><a class="read-more" href="%1$s">%2$s</a></div>',
										esc_url( get_permalink( get_the_ID() ) ),
										esc_html__( 'Read More', 'canuck-cp' )
									);
								} else {
									the_excerpt();
								}
							}
							canuckcp_post_meta_pages();
						} else {
							echo get_the_password_form();// phpcs:ignore
						}
						?>
					</div>
				</div>
			</div>
		</article>
		<div class="clearfix"></div>
		<?php
	}
} else {
	get_template_part( '/template-parts/partials', 'post-or-page-not-found' );
}
