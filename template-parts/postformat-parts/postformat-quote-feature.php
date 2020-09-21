<?php
/**
 * Template Part, quote feature for quote post format
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2016  kevinhaig
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      kevinhaig <www.kevinsspace.ca/contact/>
 */

$include_pinterest_pinit = get_theme_mod( 'canuckcp_include_pinit' ) ? true : false;
$add_nopin               = ( true === $include_pinterest_pinit ) ? 'data-pin-no-hover="true" ' : '';
$use_lazyload            = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
$content                 = get_the_content();
$embed                   = canuckcp_extract_embed( $content );
if ( false !== $embed ) {
	$quote_data = explode( '|', $embed );
}
if ( isset( $quote_data[0] ) ) {
	$quote_data_filtered = $quote_data[0];
}
$post_style = esc_html( get_theme_mod( 'canuckcp_blog_style', 'top_feature' ) );
if ( has_post_thumbnail() && false !== $embed ) {
	$background_image_url = get_the_post_thumbnail_url( $post->ID, 'canuckcp_med15' );
} elseif ( false !== $embed ) {
	$background_image_url = get_template_directory_uri() . '/images/quote800.jpg';
}
if ( false !== $embed ) {
	?>
	<div class="quote-post-feature">
		<?php
		if ( true === $use_lazyload ) {
			?>
			<img class="lazyload" <?php echo $add_nopin;// phpcs:ignore ?>
				src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
				data-src="<?php echo esc_url( $background_image_url ); ?>"
				alt="<?php esc_attr_e( 'quote background', 'canuck-cp' ); ?>">
			<?php
		} else {
			?>
			<img <?php echo $add_nopin;// phpcs:ignore ?> src="<?php echo esc_url( $background_image_url ); ?>" alt="<?php esc_attr_e( 'quote background', 'canuck-cp' ); ?>">
			<?php
		}
		?>
		<div class="quote-post-feature-overlay">
			<span class="quote-post-feature-quote"><i class="fa fa-quote-left"></i><?php echo wp_kses_post( $quote_data_filtered ); ?></span>
			<?php
			if ( isset( $quote_data[2] ) ) {
				if ( isset( $quote_data[1] ) ) {
					$quote_author = '<a href="' . esc_url( $quote_data[2] ) . '">' . esc_html( $quote_data[1] ) . '</a>';
				}
			} elseif ( isset( $quote_data[1] ) ) {
				$quote_author = esc_html( $quote_data[1] );
			} else {
				$quote_author = '';
			}
			if ( '' !== $quote_author ) {
				?>
				<span class="quote-post-feature-author"><?php echo wp_kses_post( $quote_author ); ?></span>
				<?php
			}
			?>
		</div>
	</div>
	<?php
}
