<?php
/**
 * Comment.php
 *
 * This file delivers all the comments, pingbacks, trackbacks, and the
 * comment form when called. It is the default file called in the comments_template() call.
 * It was taken from twentyfourteen and modified.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php
	if ( have_comments() ) {
		?>
		<h4 class="comments-title">
			<?php
			$number_comments = get_comments_number();
			if ( 0 === $number_comments ) {
				esc_html_e( 'No Comments Yet', 'canuck-cp' );
			} elseif ( 1 === $number_comments ) {
				esc_html_e( '1 Comment', 'canuck-cp' );
			} else {
				echo intval( $number_comments ) . ' ' . esc_html__( 'Comments', 'canuck-cp' );
			}
			?>
		</h4>
		<div class="comment-list">
			<?php
				wp_list_comments(
					array(
						'style'       => 'div',
						'short_ping'  => true,
						'avatar_size' => 50,
					)
				);
			?>
		</div>
		<?php
		if ( 1 < get_comment_pages_count() && get_option( 'page_comments' ) ) {
			?>
			<nav class="commentnav" role="navigation">
				<div class="left"><?php previous_comments_link( '<i class="font-icon caret-left">' . canuckcp_svg( 'sticky-note', '16', '#7f7f7f' ) . '</i> ' . __( 'Older Comments', 'canuck-cp' ) );// phpcs:ignore ?></div>
				<div class="right"><?php next_comments_link( __( 'Newer Comments', 'canuck-cp' ) . ' <i class="font-icon caret-left">' . canuckcp_svg( 'sticky-note', '16', '#7f7f7f' ) . '</i>' );// phpcs:ignore ?></div>
			</nav>
			<?php
		}
	}
	if ( true !== comments_open() ) {
		?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'canuck-cp' ); ?></p>
		<?php
	}
	comment_form();
	?>
</div>

