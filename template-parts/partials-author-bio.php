<?php
/**
 * Template Part, author bio
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

global $canuckcp_page_title,$canuckcp_curauth,$canuckcp_exclude_page_title;
$include_bio = get_theme_mod( 'canuckcp_include_author_bio', false );
if ( true === $include_bio ) {
	if ( '' !== $canuckcp_curauth->description ) {
		?>
		<div class="author-bio-header">
			<?php echo get_avatar( $canuckcp_curauth->user_email, 150 ); ?>
			<div class="author-bio-content-wrap">
				<p><?php echo wp_kses_post( $canuckcp_curauth->description ); ?></p>
				<?php
				if ( '' !== $canuckcp_curauth->user_url ) {
					echo esc_html__( 'Website: ', 'canuck-cp' ) . '<a href="' . esc_url( $canuckcp_curauth->user_url ) . '">' . esc_url( $canuckcp_curauth->user_url ) . '</a>';
				}
				?>
			</div>
		</div>
		<?php
	}
}
echo '<div class="clearfix"></div>';
