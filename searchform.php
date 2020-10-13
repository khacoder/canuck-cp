<?php
/**
 * Search Form WordPress file.
 *
 * This file is the search form used in the theme.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

?>
<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'canuck-cp' ); ?></span>
		<input type="search" class="search-field"
				placeholder="<?php esc_attr_e( 'Search', 'canuck-cp' ); ?>"
				value="<?php echo get_search_query(); ?>" name="s"
				title="<?php esc_attr_e( 'Search for:', 'canuck-cp' ); ?>" />
	</label>
	<button type="submit" class="canuck-cp-search-icon-form" title="<?php esc_attr_e( 'search', 'canuck-cp' ); ?>"><?php echo canuckcp_svg( 'search', '16', '#7f7f7f' );// phpcs:ignore ?></button>
</form>
