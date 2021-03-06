<?php
/**
 * Canuck CP Single Post Top Feature
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

$use_excerpts                = get_theme_mod( 'canuckcp_use_excerpts', false );
$use_lazyload                = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
$canuckcp_share_on_posts     = get_theme_mod( 'canuckcp_share_on_posts' ) ? true : false;
$canuckcp_exclude_post_share = get_post_meta( $post->ID, 'canuckcp_exclude_post_share', true ) ? true : false;
if ( ! post_password_required() ) {
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
				<?php
				canuckcp_post_meta_full();
				?>
			</div>
		</div>
		<div class="post-content-tf entry-content">
			<?php
			if ( ! post_password_required() ) {
				the_content( esc_html__( 'Read more', 'canuck-cp' ) );
				canuckcp_post_meta_pages();
				if ( ! $canuckcp_exclude_post_share && $canuckcp_share_on_posts && canuckcp_post_share() ) {
						echo canuckcp_post_share();// phpcs:ignore
				}
			} else {
				echo get_the_password_form();// phpcs:ignore
			}
			?>
		</div>
	</div>
</div>
