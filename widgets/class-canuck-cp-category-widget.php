<?php
/**
 * Canuck Category Widget
 *
 * This file is a widget was modified from the WordPress Category Widget.
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <www.kevinsspace.ca/contact/>
 *
 * @wordpress plugin
 * Plugin Name: Canuck Category Widget
 * Plugin URI: http://kevinsspace.ca/canuckdemo/
 * Description: A widget for the Canuck CP Theme that allows the user to remove categories from the list.
 * Version: 0.0.9
 * Author: Kevin Archibald
 * Author URI: http://kevinsspace.ca/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Use widgets_init action hook to execute custom function.
 */
add_action( 'widgets_init', 'canuckcp_register_category_widget' );

/**
 * Register our widget.
 */
function canuckcp_register_category_widget() {
	register_widget( 'Canuck_CP_Category_Widget' );
}

/**
 * Categories widget class
 */
class Canuck_CP_Category_Widget extends WP_Widget {
	/**
	 * Sets up the widgets name etc.
	 */
	public function __construct() {
		$widget_ops = array(
			'classname'   => 'canuckcp_category_widget_class',
			'description' => esc_html__( 'Display selected categories', 'canuck-cp' ),
		);
		parent::__construct( 'canuckcp_category_widget', esc_html__( 'Canuck CP Category Widget', 'canuck-cp' ), $widget_ops );
	}
	/**
	 * Outputs the options form on admin.
	 *
	 * @param array $instance The widget options.
	 */
	public function form( $instance ) {
		$canuckcp_category_defaults = array(
			'canuckcp_title'        => esc_html__( 'Categories', 'canuck-cp' ),
			'canuckcp_count'        => false,
			'canuckcp_hierarchical' => false,
			'canuckcp_dropdown'     => false,
		);
		$instance                   = wp_parse_args( (array) $instance, $canuckcp_category_defaults );
		$title                      = $instance['canuckcp_title'];
		$count                      = $instance['canuckcp_count'];
		$hierarchical               = $instance['canuckcp_hierarchical'];
		$dropdown                   = $instance['canuckcp_dropdown'];
		// Validate data.
		if ( true !== $count ) {
			$count = false;
		}
		if ( true !== $hierarchical ) {
			$hierarchical = false;
		}
		if ( true !== $dropdown ) {
			$dropdown = false;
		}
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'canuckcp_title' ) ); ?>"><?php esc_html_e( 'Title:', 'canuck-cp' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'canuckcp_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'canuckcp_title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
			<input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'canuckcp_dropdown' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'canuckcp_dropdown' ) ); ?>"<?php checked( $dropdown ); ?> />
			<label for="<?php echo esc_attr( $this->get_field_id( 'canuckcp_dropdown' ) ); ?>"><?php esc_html_e( 'Display as dropdown', 'canuck-cp' ); ?></label><br />

			<input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'canuckcp_count' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'canuckcp_count' ) ); ?>"<?php checked( $count ); ?> />
			<label for="<?php echo esc_attr( $this->get_field_id( 'canuckcp_count' ) ); ?>"><?php esc_html_e( 'Show post counts', 'canuck-cp' ); ?></label><br />

			<input type="checkbox" class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'canuckcp_hierarchical' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'canuckcp_hierarchical' ) ); ?>"<?php checked( $hierarchical ); ?> />
			<label for="<?php echo esc_attr( $this->get_field_id( 'canuckcp_hierarchical' ) ); ?>"><?php esc_html_e( 'Show hierarchy', 'canuck-cp' ); ?></label>
		</p>
		<?php
	}
	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options.
	 * @param array $old_instance The previous options.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                          = $old_instance;
		$instance['canuckcp_title']        = wp_kses_post( $new_instance['canuckcp_title'] );
		$instance['canuckcp_count']        = ! empty( $new_instance['canuckcp_count'] ) ? true : false;
		$instance['canuckcp_hierarchical'] = ! empty( $new_instance['canuckcp_hierarchical'] ) ? true : false;
		$instance['canuckcp_dropdown']     = ! empty( $new_instance['canuckcp_dropdown'] ) ? true : false;
		return $instance;
	}
	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args Arguments for widget.
	 * @param array $instance Instance.
	 */
	public function widget( $args, $instance ) {
		/** This filter is documented in wp-includes/default-widgets.php */
		$title = apply_filters( 'widget_title', empty( $instance['canuckcp_title'] ) ? esc_html__( 'Categories', 'canuck-cp' ) : $instance['canuckcp_title'], $instance, $this->id_base );
		$c     = ! empty( $instance['canuckcp_count'] ) ? true : false;
		$h     = ! empty( $instance['canuckcp_hierarchical'] ) ? true : false;
		$d     = ! empty( $instance['canuckcp_dropdown'] ) ? true : false;
		// Get exclude ids.
		$exclude_ids   = canuckcp_exclude_category_validation();
		$id_picks      = array();
		$id_picks      = explode( ',', $exclude_ids );
		$filtered_list = '';
		$counter       = 0;
		foreach ( $id_picks as $pick ) {
			if ( 1 < intval( $id_picks[ $counter ] ) ) {
				$filtered_list .= intval( $id_picks[ $counter ] ) . ',';
			}
			$counter++;
		}
		$exclude_ids = trim( $filtered_list, ',' );
		$x           = $exclude_ids;
		echo $args['before_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		if ( '' !== $title ) {
			echo $args['before_title'] . $title . $args['after_title']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
		$cat_args = array(
			'orderby'           => 'name',
			'show_count'        => $c,
			'hierarchical'      => $h,
			'exclude'           => $x,
			'show_option_none'  => esc_html__( 'Select Category', 'canuck-cp' ),
			'option_none_value' => 'none',
			'value_field'       => 'slug',
		);
		if ( true === $d ) {
			$cat_args['option_none_value'] = esc_html__( 'Select Category', 'canuck-cp' );
			/**
			 * Filter the arguments for the Categories widget drop-down.
			 *
			 * @since 2.8.0
			 *
			 * @see wp_dropdown_categories()
			 *
			 * @param array $cat_args An array of Categories widget drop-down arguments.
			 */
			wp_dropdown_categories( apply_filters( 'widget_categories_dropdown_args', $cat_args ) ); // phpcs:ignore
			?>
			<script type='text/javascript'>
			/* <![CDATA[ */
				var dropdown = document.getElementById("cat");
				function onCatChange() {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>category/"+dropdown.options[dropdown.selectedIndex].value;
				}
				dropdown.onchange = onCatChange;
			/* ]]> */
			</script>
			<?php
		} else {
			?>
			<ul>
				<?php
				$cat_args['title_li'] = '';
				/**
				 * Filter the arguments for the Categories widget.
				 *
				 * @since 2.8.0
				 *
				 * @param array $cat_args An array of Categories widget options.
				 */
				wp_list_categories( apply_filters( 'widget_categories_args', $cat_args ) );  // phpcs:ignore
				?>
			</ul>
			<?php
		}
		echo $args['after_widget']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}

