<?php
/**
 * Template part file that contains the contact b sidebar default content.
 *
 * This file is called by page.php.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

if ( ! dynamic_sidebar( 'canuckcp_contact_sidebar_b' ) ) {
	?>
	<h2><?php esc_html_e( 'Contact Sidebar B', 'canuck-cp' ); ?></h2>
	<p><?php esc_html_e( 'Go to Appearance => Widgets and drag a widget over to this sidebar.', 'canuck-cp' ); ?></p>
	<?php
}
