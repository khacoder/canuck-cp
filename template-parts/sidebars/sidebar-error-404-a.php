<?php
/**
 * Template part file that contains the 404 sidebar b default content.
 *
 * This file is called by 404.php.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

if ( ! dynamic_sidebar( 'canuckcp_404_sidebar_a' ) ) {
	the_widget( 'WP_Widget_Search' );
	the_widget( 'canuckcp_recent_posts_widget' );
}
