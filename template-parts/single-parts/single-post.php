<?php
/**
 * Template Part, single post template part.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

global $canuckcp_single_layout_option;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php
	if ( 'fullwidth' === $canuckcp_single_layout_option ) {
		get_template_part( '/template-parts/partials', 'general-posts-side-feature' );
	} else {
		get_template_part( '/template-parts/partials', 'general-posts-top-feature' );
	}
	?>
</article>
<div class="clearfix"></div>
<div class="comments-wrap">
	<?php comments_template( '/comments.php', true ); ?>
</div>
<?php
