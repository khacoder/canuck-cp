<?php
/**
 * Template Part recent posts
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 */

?>
<br/>
<h4><?php esc_html_e( 'Recent Posts', 'canuck-cp' ); ?></h4>
<ul class="fa-ul recent-posts">
	<?php
	$id_picks_string = canuckcp_exclude_category_validation();
	$id_picks        = array();
	$id_picks        = explode( ',', $id_picks_string );
	$counter         = 0;
	$filtered_list   = '';
	foreach ( $id_picks as $pick ) {
		if ( 1 < intval( $id_picks[ $counter ] ) ) {
			$filtered_list .= '-' . intval( $id_picks[ $counter ] ) . ',';
		}
		$counter++;
	}
	$exclude_ids  = trim( $filtered_list, ',' );
	$x            = "'" . $exclude_ids . "'";
	$args         = array(
		'numberposts' => '5',
		'category'    => $x,
		'post_status' => 'publish',
	);
	$recent_posts = wp_get_recent_posts( $args );
	foreach ( $recent_posts as $recent ) {
		echo '<li><i class="fa-li fa fa-check-square"></i><a href="' . esc_url( get_permalink( $recent['ID'] ) ) . '" title="' . esc_attr( $recent['post_title'] ) . '" >' . wp_kses_post( $recent['post_title'] ) . '</a> </li> ';
	}
	echo '<br/>';
	wp_reset_postdata();
	?>
</ul>
