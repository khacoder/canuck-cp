<?php
/**
 * Canuck Post Format Standard
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

$post_style   = esc_html( get_theme_mod( 'canuckcp_blog_style', 'top_feature' ) );
$use_lazyload = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
?>
<div class="grid-feature-wrap">
	<?php
	if ( ! post_password_required() ) {
		if ( has_post_format( 'audio' ) ) {
			get_template_part( '/template-parts/postformat-parts/postformat', 'audio-feature' );
		} elseif ( has_post_format( 'gallery' ) ) {
			get_template_part( '/template-parts/postformat-parts/postformat', 'gallery-feature' );
		} elseif ( has_post_format( 'image' ) && has_post_thumbnail() ) {
			get_template_part( '/template-parts/postformat-parts/postformat', 'image-feature' );
		} elseif ( has_post_format( 'quote' ) ) {
			get_template_part( '/template-parts/postformat-parts/postformat', 'quote-feature' );
		} elseif ( has_post_format( 'video' ) ) {
			get_template_part( '/template-parts/postformat-parts/postformat', 'video-feature' );
		} else {
			get_template_part( '/template-parts/postformat-parts/postformat', 'standard-feature' );
		}
	} else {
		$background_image_url = get_template_directory_uri() . '/images/password800.jpg';
		if ( true === $use_lazyload ) {
			?>
			<img class="lazyload"
				src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
				data-src="<?php echo esc_url( $background_image_url ); ?>"
				alt="<?php esc_attr_e( 'password reqired', 'canuck-cp' ); ?>">
			<?php
		} else {
			?>
			<img src="<?php echo esc_url( $background_image_url ); ?>" alt="<?php esc_attr_e( 'password reqired', 'canuck-cp' ); ?>">
			<?php
		}
	}
	?>
</div>
<div class="post-wrap-grid">
	<div class="post-overlay-grid">
		<div class="post-header-grid">
			<h2 class="post-title entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
			<div class="post-meta-grid">
				<?php canuckcp_post_meta_grid(); ?>
			</div>
		</div>
		<div class="post-content-grid entry-content">
			<?php
			if ( ! post_password_required() ) {
				if ( has_post_format( 'quote' ) ) {
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
				echo get_the_password_form();// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
			?>
		</div>
	</div>
</div>
