<?php
/**
 * Template Part, blog side-feature.
 *
 * Used in home.php.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'canuck-cp-one-col side-feature-post' ); ?> >
			<?php
				get_template_part( '/template-parts/postformat-parts/postformat', 'side-feature' );
			?>
		</article>
		<div class="clearfix"></div>
		<div class="bottom-line-1"></div>
		<?php
	}
	get_template_part( '/template-parts/partials', 'page-navi' );
} else {
	get_template_part( '/template-parts/partials', 'post-or-page-not-found' );
}
