<?php
/**
 * Template Part, multiple page navigation.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

?>
<nav class="postpagenav">
	<div class="clearfix"></div>
	<?php
	the_posts_pagination(
		array(
			'mid_size'  => 3,
			'prev_text' => '<i class="font-icon">' . canuckcp_svg( 'angle-double-left', '14', '#7f7f7f' ) . '</i>',
			'next_text' => '<i class="font-icon">' . canuckcp_svg( 'angle-double-right', '14', '#7f7f7f' ) . '</i>',
		)
	);
	?>
	<br/>
</nav>
