<?php
/**
 * Canuck CP Recent Posts Widget
 *
 * This file is a widget was modified from the WordPress Recent Pots Widget.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 *
 * @wordpress-plugin
 * Plugin Name: Canuck Category Widget
 * Plugin URI: http://kevinsspace.ca/canuckdemo/
 * Description: A widget for the Canuck Theme that allows the user to remove categories from the list
 * Version: 1.0.3
 * Author: Kevin Archibald
 * Author URI: http://kevinsspace.ca/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Use widgets_init action hook to execute custom function.
 */
add_action( 'widgets_init', 'canuckcp_register_recent_posts_widget' );

/**
 * Register our widget.
 */
function canuckcp_register_recent_posts_widget() {
	register_widget( 'Canuck_CP_Recent_Posts_Widget' );
}

/**
 * Recent_Posts widget w/ category exclude class.
 * This allows specific Category IDs to be removed from the Sidebar Recent Posts list
 */
class Canuck_CP_Recent_Posts_Widget extends WP_Widget {
	/**
	 * Sets up the widgets name etc.
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'canuck-cp-recent-posts',
			'description' => esc_html__( 'Display recent posts, allow excluded categories', 'canuck-cp' ),
		);
		parent::__construct( 'canuckcp_recent_posts_widget', esc_html__( 'Canuck CP Recent Posts Widget', 'canuck-cp' ), $widget_ops );
	}
	/**
	 * Outputs the options form on admin.
	 *
	 * @param array $instance The widget options.
	 */
	public function form( $instance ) {
		// Defaults.
		$canuckcp_recent_posts_defaults = array(
			'canuckcp_title' => esc_html__( 'Recent Posts', 'canuck-cp' ),
			'canuckcp_count' => 5,
		);
		$instance                       = wp_parse_args( (array) $instance, $canuckcp_recent_posts_defaults );
		$title                          = $instance['canuckcp_title'];
		$count                          = $instance['canuckcp_count'];
		// Validate data.
		$count = is_int( $count ) ? $count : 5;
		?>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'canuckcp_title' ) ); ?>"><?php esc_html_e( 'Title:', 'canuck-cp' ); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'canuckcp_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'canuckcp_title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></p>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'canuckcp_count' ) ); ?>"><?php esc_html_e( 'Number of posts to show:', 'canuck-cp' ); ?></label>
		<input id="<?php echo esc_attr( $this->get_field_id( 'canuckcp_count' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'canuckcp_count' ) ); ?>" type="text" value="<?php echo intval( $count ); ?>" size="3" /></p>
		<?php
	}
	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options.
	 * @param array $old_instance The previous options.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                   = $old_instance;
		$instance['canuckcp_title'] = esc_html( $new_instance['canuckcp_title'] );
		$instance['canuckcp_count'] = ! empty( $new_instance['canuckcp_count'] ) ? intval( $new_instance['canuckcp_count'] ) : 5;
		return $instance;
	}
	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args Arguments for widget.
	 * @param array $instance Instance.
	 */
	public function widget( $args, $instance ) {
		// This filter is documented in wp-includes/default-widgets.php.
		$title         = apply_filters( 'widget_title', empty( $instance['canuckcp_title'] ) ? esc_html__( 'Recent Posts', 'canuck-cp' ) : $instance['canuckcp_title'], $instance, $this->id_base );
		$c             = ! empty( $instance['canuckcp_count'] ) ? intval( $instance['canuckcp_count'] ) : 5;
		$exclude_ids   = canuckcp_exclude_category_validation();
		$id_picks      = array();
		$id_picks      = explode( ',', $exclude_ids );
		$filtered_list = '';
		$counter       = 0;
		foreach ( $id_picks as $pick ) {
			if ( 1 < intval( $id_picks[ $counter ] ) ) {
				$filtered_list .= '-' . intval( $id_picks[ $counter ] ) . ',';
			}
			$counter++;
		}
		$exclude_ids = trim( $filtered_list, ',' );
		$x           = $exclude_ids;
		echo wp_kses_post( $args['before_widget'] );
		if ( $title ) {
			echo wp_kses_post( $args['before_title'] ) . wp_kses_post( $title ) . wp_kses_post( $args['after_title'] );
		}
		$post_args    = array(
			'numberposts'      => $c,
			'category'         => $x,
			'post_status'      => 'publish',
			'suppress_filters' => false,
		);
		$recent_posts = wp_get_recent_posts( $post_args );
		?>
		<ul>
			<?php
			foreach ( $recent_posts as $recent ) {
				if ( ! post_password_required( $recent['ID'] ) ) {
					if ( has_post_thumbnail( $recent['ID'] ) ) {
						$thumb     = wp_get_attachment_image_src( get_post_thumbnail_id( $recent['ID'], 'thumbnail' ) );
						$image_url = esc_url( $thumb[0] );
					} else {
						$integer   = rand( 1, 5 );// phpcs:ignore
						$image_url = get_template_directory_uri() . '/images/standard' . $integer . '_150.jpg';
					}
				} else {
					$image_url = get_template_directory_uri() . '/images/password150.jpg';
				}
				echo '<li>';
					echo '<img src="' . esc_url( $image_url ) . '" alt="' . esc_attr__( 'recent_post_image', 'canuck-cp' ) . '">';
					echo '<div class="recent-post-wrap">';
						echo '<a href="' . esc_url( get_permalink( $recent['ID'] ) ) . '">' . wp_kses_post( $recent['post_title'] ) . '</a>';
						echo '<span class="pmeta-timestamp post-date updated">' . get_the_time( get_option( 'date_format' ), $recent['ID'] ) . '</span>';// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					echo '</div>';
				echo '</li> ';
			}
			?>
		</ul>
		<?php
		echo wp_kses_post( $args['after_widget'] );
		wp_reset_postdata();
	}
}

