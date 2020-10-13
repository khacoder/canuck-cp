<?php
/**
 * Template part file that contains the sidebar_5 default content.
 *
 * This file is called by all page.php, index.php, single.php.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

if ( ! dynamic_sidebar( 'canuckcp_sidebar_5' ) ) {
	?>
	<h2><?php esc_html_e( 'Sidebar 5', 'canuck-cp' ); ?></h2>
	<p><?php esc_html_e( 'Go to Appearance => Widgets and drag a widget over to this sidebar.', 'canuck-cp' ); ?></p>
	<?php
}
