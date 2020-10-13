<?php
/**
 * Template Part, two column posts.
 *
 * Used in home.php.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

$canuckcp_post_count = 0;
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$canuckcp_post_count ++;
		if ( is_int( $canuckcp_post_count / 2 ) ) {
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'canuck-cp-two-col-right grid-post' ); ?>>
				<?php get_template_part( '/template-parts/blog-parts/blog', 'grid' ); ?>
			</article>
			<div class="clearfix"></div>
			<?php
		} else {
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'canuck-cp-two-col-left grid-post' ); ?>>
				<?php get_template_part( '/template-parts/blog-parts/blog', 'grid' ); ?>
			</article>
			<?php
		}
	}
	get_template_part( '/template-parts/partials', 'page-navi' );
} else {
	get_template_part( '/template-parts/partials', 'post-or-page-not-found' );
}
