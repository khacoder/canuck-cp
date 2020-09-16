<?php
/**
 * Template Part, portfolio setup.
 * This file is the Singe Page template file, which is output a single post.
 *
 * @package   Canuck CP ClassicPress Theme
 * @copyright Copyright (C) 2020 or later Kevin Archibald
 * @license   http://www.gnu.org/licenses/gpl-2.0.html
 * @author    Kevin Archibald <www.kevinsspace.ca/contact/>
 */

if ( ! post_password_required() ) {
	if ( have_posts() ) : while ( have_posts() ) : the_post();// phpcs:ignore
			if ( '' !== trim( the_content() ) ) {
				?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="portfolio-post entry-content">
						<?php the_content( esc_html__( 'Read More', 'canuck-cp' ) ); ?>
					</div>
				</div>
				<?php
			}
	endwhile;
	endif;
}
