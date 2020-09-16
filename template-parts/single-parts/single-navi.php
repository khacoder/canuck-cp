<?php
/**
 * Template Part, single page navigation.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

?>
<div class="postpagenav">
	<?php
	if ( is_attachment() ) {
		$left  = '<i class="fa fa-hand-o-left"></i>&nbsp;&nbsp;' . esc_html__( 'View previous', 'canuck-cp' );
		$right = esc_html__( 'View next', 'canuck-cp' ) . '&nbsp;&nbsp;<i class="fa fa-hand-o-right"></i>'
		?>
		<h2 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'canuck-cp' ); ?></h2>
		<div class="left"><?php next_image_link( '', $left ); ?></div>
		<div class="right"><?php previous_image_link( '', $right ); ?></div>
		<?php
	} else {
		$exclude = canuckcp_exclude_category_validation();
		echo '<h2 class="screen-reader-text">' . esc_html__( 'Post navigation', 'canuck-cp' ) . '</h2>';
		next_post_link( '<div class="right">%link&nbsp;&nbsp;<i class="font-icon">' . canuckcp_svg( 'angle-double-right', '14', '#7f7f7f' ) . '</i><span class="screen-reader-text">' . __( 'Next Post', 'canuck-cp' ) . ' : </span></div>', '%title', false, $exclude );
		previous_post_link( '<div class="left"><i class="font-icon">' . canuckcp_svg( 'angle-double-left', '14', '#7f7f7f' ) . '</i><span class="screen-reader-text">' . __( 'Previous Post', 'canuck-cp' ) . ' : </span>&nbsp;&nbsp;%link</div>', '%title', false, $exclude );
	}
	?>
</div>
