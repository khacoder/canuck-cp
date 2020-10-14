<?php
/**
 * Canuck CP Archives Widget
 *
 * This file is a widget and was modified from the WordPress Archives Widget.
 * Post count options have been removed because the filters cause this not to work.
 * The reason is when the tables are joined duplicate posts are effectively created for each category.
 * The resulting count is the categories for the month and not the posts.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 *
 * @wordpress plugin
 * Plugin Name: Canuck Category Widget
 * Plugin URI: http://kevinsspace.ca/canuckdemo/
 * Description: A widget for the Canuck CP Theme that allows the user to remove categories from the list.
 * Version: 1.0.3
 * Author: Kevin Archibald
 * Author URI: http://kevinsspace.ca/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Use widgets_init action hook to execute custom function.
 */
add_action( 'widgets_init', 'canuckcp_register_archives_widget' );

/**
 * Register our widget.
 */
function canuckcp_register_archives_widget() {
	register_widget( 'Canuck_CP_Archives_Widget' );
}

/**
 * Archives widget class.
 */
class Canuck_CP_Archives_Widget extends WP_Widget {
	/**
	 * Sets up the widgets name etc.
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'canuckcp_widget_archive_class',
			'description'                 => esc_html__( 'A monthly archive of your Posts with excluded categories omitted.', 'canuck-cp' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'canuckcp_archives', esc_html__( 'Canuck CP Archives Widget', 'canuck-cp' ), $widget_ops );
	}
	/**
	 * Outputs the content for the current Archives widget instance.
	 *
	 * @since 2.8.0
	 *
	 * @param array $args     Display arguments including 'before_title', 'after_title',
	 *                        'before_widget', and 'after_widget'.
	 * @param array $instance Settings for the current Archives widget instance.
	 */
	public function widget( $args, $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Archives', 'canuck-cp' );
		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$d     = ! empty( $instance['dropdown'] ) ? '1' : '0';
		echo $args['before_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
		if ( $d ) {
			$dropdown_id = "{$this->id_base}-dropdown-{$this->number}";
			?>
			<label class="screen-reader-text" for="<?php echo esc_attr( $dropdown_id ); ?>"><?php echo $title; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></label>
			<select id="<?php echo esc_attr( $dropdown_id ); ?>" name="archive-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
				<?php
				/**
				 * Filters the arguments for the Archives widget drop-down.
				 *
				 * @since 2.8.0
				 * @since 4.9.0 Added the `$instance` parameter.
				 *
				 * @see wp_get_archives()
				 *
				 * @param array $args     An array of Archives widget drop-down arguments.
				 * @param array $instance Settings for the current Archives widget instance.
				 */
				$canuckcp_dropdown_args = apply_filters(
					'widget_archives_dropdown_args',// phpcs:ignore
					array(
						'type'            => 'monthly',
						'format'          => 'option',
						'show_post_count' => 0,
					),
					$instance
				);
				switch ( $canuckcp_dropdown_args['type'] ) {
					case 'yearly':
						$label = esc_html__( 'Select Year', 'canuck-cp' );
						break;
					case 'monthly':
						$label = esc_html__( 'Select Month', 'canuck-cp' );
						break;
					case 'daily':
						$label = esc_html__( 'Select Day', 'canuck-cp' );
						break;
					case 'weekly':
						$label = esc_html__( 'Select Week', 'canuck-cp' );
						break;
					default:
						$label = esc_html__( 'Select Post', 'canuck-cp' );
						break;
				}
				?>
				<option value=""><?php echo esc_html( $label ); ?></option>
				<?php
				$exclude_input = sanitize_text_field( get_theme_mod( 'canuckcp_exclude_categories', '' ) );
				if ( '' !== trim( $exclude_input ) ) {
					add_filter( 'getarchives_where', 'canuckcp_customarchives_where' );
					add_filter( 'getarchives_join', 'canuckcp_customarchives_join' );
					wp_get_archives( $canuckcp_dropdown_args );
					remove_filter( 'getarchives_where', 'canuckcp_customarchives_where' );
					remove_filter( 'getarchives_join', 'canuckcp_customarchives_join' );
				} else {
					wp_get_archives( $canuckcp_dropdown_args );
				}
				?>
			</select>
			<?php
		} else {
			?>
			<ul>
				<?php
				/**
				 * Filters the arguments for the Archives widget.
				 *
				 * @since 2.8.0
				 * @since 4.9.0 Added the `$instance` parameter.
				 *
				 * @see wp_get_archives()
				 *
				 * @param array $args     An array of Archives option arguments.
				 * @param array $instance Array of settings for the current widget.
				 */
				$exclude_input = sanitize_text_field( get_theme_mod( 'canuckcp_exclude_categories', '' ) );
				if ( '' !== trim( $exclude_input ) ) {
					add_filter( 'getarchives_where', 'canuckcp_customarchives_where' );
					add_filter( 'getarchives_join', 'canuckcp_customarchives_join' );
					wp_get_archives(
						apply_filters(
							'widget_archives_args',// phpcs:ignore
							array(
								'type'            => 'monthly',
								'show_post_count' => 0,
							),
							$instance// phpcs:ignore
						)
					);
					remove_filter( 'getarchives_where', 'canuckcp_customarchives_where' );
					remove_filter( 'getarchives_join', 'canuckcp_customarchives_join' );
				} else {
					wp_get_archives(
						apply_filters(
							'widget_archives_args',// phpcs:ignore
							array(
								'type'            => 'monthly',
								'show_post_count' => 0,
							),
							$instance// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						)
					);
				}
				?>
			</ul>
			<?php
		}
		echo $args['after_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
	/**
	 * Handles updating settings for the current Archives widget instance.
	 *
	 * @since 2.8.0
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget_Archives::form().
	 * @param array $old_instance Old settings for this instance.
	 * @return array Updated settings to save.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance             = $old_instance;
		$new_instance         = wp_parse_args( (array) $new_instance, array( 'title' => '', 'count' => 0, 'dropdown' => '') );//phpcs:ignore 
		$instance['title']    = sanitize_text_field( $new_instance['title'] );
		$instance['dropdown'] = $new_instance['dropdown'] ? 1 : 0;
		return $instance;
	}
	/**
	 * Outputs the settings form for the Archives widget.
	 *
	 * @since 2.8.0
	 *
	 * @param array $instance Current settings.
	 */
	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'count' => 0, 'dropdown' => '') );// phpcs:ignore
		$title    = sanitize_text_field( $instance['title'] );
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'canuck-cp' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<input class="checkbox" type="checkbox"<?php checked( $instance['dropdown'] ); ?> id="<?php echo esc_attr( $this->get_field_id( 'dropdown' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'dropdown' ) ); ?>" /> <label for="<?php echo esc_attr( $this->get_field_id( 'dropdown' ) ); ?>"><?php esc_html_e( 'Display as dropdown', 'canuck-cp' ); ?></label>
		</p>
		<?php
	}
}
