<?php
/**
 * Canuck CP Author Widget
 *
 * This file is a widget that will allow you to set up a bio for your authors
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 *
 * @wordpress-plugin
 * Plugin Name: Canuck Author Widget
 * Plugin URI: http://kevinsspace.ca/canuckdemo/
 * Description: A widget for the Canuck CP Theme that displays a WordPress Author
 * Version: 0.0.8
 * Author: Kevin Archibald
 * Author URI: http://kevinsspace.ca/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Use widgets_init action hook to execute custom function.
add_action( 'widgets_init', 'canuckcp_author_register_widget' );

/**
 * Register our widget.
 */
function canuckcp_author_register_widget() {
	register_widget( 'Canuck_CP_Author_Widget' );
}

/**
 * Widget Class
 */
class Canuck_CP_Author_Widget extends WP_Widget {
	/**
	 * Sets up the widgets name etc.
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'canuckcp_author_widget_class',
			'description' => esc_html__( 'Display author biography', 'canuck-cp' ),
		);
		parent::__construct( 'canuckcp_author_widget', esc_html__( 'Canuck CP Author Widget', 'canuck-cp' ), $widget_ops );
	}
	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options.
	 */
	public function form( $instance ) {
		$canuckcp_author_defaults = array(
			'canuckcp_author_title'   => esc_html__( 'About the Author', 'canuck-cp' ),
			'canuckcp_author_name'    => '',
			'canuckcp_author_email'   => '',
			'canuckcp_author_website' => '',
			'canuckcp_author_bio'     => '',
		);
		$instance                 = wp_parse_args( (array) $instance, $canuckcp_author_defaults );
		$title                    = $instance['canuckcp_author_title'];
		$name                     = $instance['canuckcp_author_name'];
		$email                    = $instance['canuckcp_author_email'];
		$website                  = $instance['canuckcp_author_website'];
		$bio                      = $instance['canuckcp_author_bio'];
		echo '<p>' . esc_html__( 'Title : ', 'canuck-cp' ) .
					'<input class="widefat" id="' . esc_attr( $this->get_field_id( 'canuckcp_author_title' ) ) .
					'" name="' . esc_attr( $this->get_field_name( 'canuckcp_author_title' ) ) .
					'" type="text" value="' . esc_attr( $title ) . '" /></p>';
		echo '<p>' . esc_html__( 'Name : ', 'canuck-cp' ) .
					'<input class="widefat" id="' . esc_attr( $this->get_field_id( 'canuckcp_author_name' ) ) .
					'" name="' . esc_attr( $this->get_field_name( 'canuckcp_author_name' ) ) .
					'" type="text" value="' . esc_attr( $name ) . '" /></p>';
		echo '<p>' . esc_html__( 'Email : ', 'canuck-cp' ) .
					'<input class="widefat" id="' . esc_attr( $this->get_field_id( 'canuckcp_author_email' ) ) .
					'" name="' . esc_attr( $this->get_field_name( 'canuckcp_author_email' ) ) .
					'" type="text" value="' . esc_attr( $email ) . '" /></p>';
		echo '<p>' . esc_html__( 'Website : ', 'canuck-cp' ) .
					'<input class="widefat" id="' . esc_attr( $this->get_field_id( 'canuckcp_author_website' ) ) .
					'" name="' . esc_attr( $this->get_field_name( 'canuckcp_author_website' ) ) .
					'" type="text" value="' . esc_url( $website ) . '" /></p>';
		echo '<p>' . esc_html__( 'Biography : ', 'canuck-cp' ) . '<textarea class="widefat" id="' . esc_attr( $this->get_field_id( 'canuckcp_author_bio' ) ) .
					'" name="' . esc_attr( $this->get_field_name( 'canuckcp_author_bio' ) ) . '">' . wp_kses_post( $bio ) . '</textarea></p>';
	}
	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options.
	 * @param array $old_instance The previous options.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                            = $old_instance;
		$instance['canuckcp_author_title']   = sanitize_text_field( $new_instance['canuckcp_author_title'] );
		$instance['canuckcp_author_name']    = sanitize_text_field( $new_instance['canuckcp_author_name'] );
		$instance['canuckcp_author_email']   = sanitize_email( $new_instance['canuckcp_author_email'] );
		$instance['canuckcp_author_website'] = esc_url_raw( $new_instance['canuckcp_author_website'] );
		$instance['canuckcp_author_bio']     = wp_kses_post( $new_instance['canuckcp_author_bio'] );
		return $instance;
	}
	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args Arguments for widget.
	 * @param array $instance Instance.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		$titlename = empty( $instance['canuckcp_author_title'] ) ? '' : $instance['canuckcp_author_title'];
		$title     = apply_filters( 'widget_title', $titlename, $instance, $this->id_base );
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
		$canuckcp_author_name    = $instance['canuckcp_author_name'];
		$canuckcp_author_email   = $instance['canuckcp_author_email'];
		$canuckcp_author_website = $instance['canuckcp_author_website'];
		$canuckcp_author_bio     = $instance['canuckcp_author_bio'];
		?>
		<div class="canuck-cp-author-widget">
			<?php
			if ( '' !== $canuckcp_author_email ) {
				echo '<span class="author-widget-avatar">' . get_avatar( $canuckcp_author_email, 150 ) . '</span>';
			}
			?>
			<span class="author-widget-content-wrap">
				<?php
				if ( '' !== $canuckcp_author_name ) {
					echo '<span class="author-widget-name">' . esc_html( $canuckcp_author_name ) . '</span><br/>';
				}
				if ( '' !== $canuckcp_author_bio ) {
					echo '<span class="author-widget-bio">' . wp_kses_post( $canuckcp_author_bio ) . '</span>';
				} else {
					echo esc_html__( 'You should probably put a few nice words here...it is a bio after all :)', 'canuck-cp' );
				}
				if ( '' !== $canuckcp_author_website ) {
					echo '<br/><a class="author-widget-website" href="' . esc_url( $canuckcp_author_website ) . '" title="' . esc_attr__( 'Author Website', 'canuck-cp' ) . '" target="_blank" >' . esc_html__( 'Website', 'canuck-cp' ) . '</a>';
				}
				?>
			</span>
		</div>
		<?php
		echo $args['after_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}

