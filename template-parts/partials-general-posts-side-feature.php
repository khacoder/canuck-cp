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
							canuckcp_post_meta_pages();
						} else {
							echo get_the_password_form(); // phpcs:ignore
						}
						?>
					</div>
				</div>
			</div>
			<div class="post-meta-sf">
				<?php canuckcp_post_meta_full(); ?>
			</div>
		</article>
		<div class="clearfix"></div>
		<?php
	}
} else {
	get_template_part( '/template-parts/partials', 'post-or-page-not-found' );
}
