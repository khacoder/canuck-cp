<?php
/**
 * Canuck CP Single Post Side Feature
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
?>
<div class="side-feature-wrap">
	<?php
	if ( ! post_password_required() ) {
		get_template_part( '/template-parts/blog-parts/blog', 'feature-image' );
	} else {
		$background_image_url = get_template_directory_uri() . '/images/password800.jpg';// phpcs:ignore
		if ( true === $use_lazyload ) {
			?>
			<img class="lazyload"
				src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
				data-src="<?php echo esc_url( $background_image_url ); ?>"
				alt="<?php esc_attr_e( 'password required', 'canuck-cp' ); ?>">
			<?php
		} else {
			?>
			<img src="<?php echo esc_url( $background_image_url ); ?>" alt="<?php esc_attr_e( 'password required', 'canuck-cp' ); ?>">
			<?php
		}
	}
	?>
</div>
<div class="post-wrap-sf">
	<div class="post-overlay-sf">
		<div class="post-header-sf">
			<h2 class="post-title entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
		</div>
		<div class="post-content-sf entry-content">
			<?php
			if ( ! post_password_required() ) {
				the_content( esc_html__( 'Read more', 'canuck-cp' ) );
				canuckcp_post_meta_pages();
				if ( ! $canuckcp_exclude_post_share && $canuckcp_share_on_posts && canuckcp_post_share() ) {
					echo canuckcp_post_share();// phpcs:ignore
				}
			} else {
				echo get_the_password_form(); // phpcs:ignore
			}
			?>
		</div>
	</div>
</div>
<div class="post-meta-sf">
	<?php
	canuckcp_post_meta_full();
	?>
</div>
