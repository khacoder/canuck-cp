<?php
/**
 * Template Part, general post method, used by author, category, date, search and tag pages
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			<div class="post-wrap-archive">
				<div class="post-overlay-archive">
					<div class="post-header-archive">
						<h2 class="post-title entry-title">
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="post-meta-tf">
							<?php canuckcp_post_meta_full(); ?>
						</div>
					</div>
					<div class="post-content-archive entry-content">
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
		</article>
		<div class="clearfix"></div>
		<?php
	}
} else {
	get_template_part( '/template-parts/partials', 'post-or-page-not-found' );
}
