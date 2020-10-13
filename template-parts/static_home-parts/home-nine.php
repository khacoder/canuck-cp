<?php
/**
 * Canuck Home Page template part - layout option 9 - portfolio section
 *
 * This template part is called by template-home.php
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

// Get the options.
$section9_title              = stripslashes( get_theme_mod( 'canuckcp_section9_title', '' ) );
$section9_text               = stripslashes( get_theme_mod( 'canuckcp_section9_text', '' ) );
$section9_portfolio_category = get_theme_mod( 'canuckcp_section9_portfolio_category', '' );
$section9_portfolio_columns  = get_theme_mod( 'canuckcp_section9_portfolio_columns', '3' );
$sec9_bg_image               = get_theme_mod( 'canuckcp_section9_background_image', '' );
$sec9_use_parallax           = get_theme_mod( 'canuckcp_section9_use_parallax', false );
$include_pinterest_pinit     = get_theme_mod( 'canuckcp_include_pinit' ) ? true : false;
$use_lazyload                = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
if ( '' !== $sec9_bg_image ) {
	if ( true === $sec9_use_parallax ) {
		$string9 = ' class="home-9-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec9_bg_image ) . '" data-speed="0.3" data-bleed="20" style="background: transparent;"';
		// Workaround for overlays on parralax sections :(.
	} elseif ( true === $use_lazyload ) {
		$string9 = ' class="home-9-wide lazyload" data-src="' . esc_url( $sec9_bg_image ) . '"';
	} else {
		$string9 = ' class="home-9-wide" style="background-image: url( ' . esc_url( $sec9_bg_image ) . ' );"';
	}
} else {
	$string9 = ' class="home-9-wide"';
}
?>
<div <?php echo $string9;// phpcs:ignore ?>>
	<div class="home-9-wide-overlay">
		<div class="home-9-wrap">
			<?php
			if ( '' !== $section9_title ) {
				echo '<div class="home-9-title">';
					echo '<h2>' . wp_kses_post( $section9_title ) . '</h2>';
				echo '</div>';
			}
			if ( '' !== $section9_text ) {
				echo '<div class="home-9-text">';
					echo '<p>' . wp_kses_post( $section9_text ) . '</p>';
				echo '</div>';
			}
			?>
			<div class="home-9-columns-<?php echo esc_attr( $section9_portfolio_columns ); ?>">
				<?php
				$category_id = get_cat_ID( esc_html( $section9_portfolio_category ) );
				global $post,$canuckcp_feature_pic_count;
				$args         = array(
					'category'    => $category_id,
					'numberposts' => 20,
				);
				$custom_posts = get_posts( $args );
				if ( false != $category_id && $custom_posts ) {// phpcs:ignore
					$canuckcp_feature_pic_count = 0;
					foreach ( $custom_posts as $post ) { // phpcs:ignore
						setup_postdata( $post );
						$link_to_post        = ( '' === get_post_meta( $post->ID, 'canuckcp_metabox_link_to_post', true ) ? false : true );
						$custom_feature_link = ( '' === get_post_meta( $post->ID, 'canuckcp_custom_feature_link', true ) ? false : get_post_meta( $post->ID, 'canuckcp_custom_feature_link', true ) );
						$image_url           = get_the_post_thumbnail_url( $post->ID, 'canuckcp_med15' );
						$image_caption       = get_post( get_post_thumbnail_id() )->post_excerpt;
						$image_desc          = get_post( get_post_thumbnail_id() )->post_content;
						if ( has_post_thumbnail() ) {
							$canuckcp_feature_pic_count ++;
							?>
							<div class="section9-portfolio-container">
								<?php
								// data-pin-no-hover is there for Pinerest, if used either in plugin or by theme.
								if ( true === $use_lazyload ) {
									?>
									<img data-pin-no-hover="true" class="lazyload"
										src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $image_url ); ?>"
										alt="<?php echo esc_attr( $image_caption ); ?>" />
									<?php
								} else {
									?>
									<img data-pin-no-hover="true" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_caption ); ?>"/>
									<?php
								}
								?>
								<div class="image-overlay">
									<div class="overlay-wrap">
										<span class="links">
											<?php
											if ( true === $include_pinterest_pinit ) {
												echo '<a href="https://www.pinterest.com/pin/create/button/" data-pin-round="true" data-pin-hover="false"  data-pin-media="' . esc_url( $image_url ) . '"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="' . esc_attr__( 'Pinterest share image', 'canuck-cp' ) . '" /></a>'; // phpcs:ignore
											}
											if ( false !== $custom_feature_link ) {
												echo '<a href="' . esc_url( $custom_feature_link ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="link font-icon">' . canuckcp_svg( 'link', '14', '#ffffff' ) . '</i></a>';// phpcs:ignore
											} elseif ( true === $link_to_post ) {
												echo '<a href="' . esc_url( get_the_permalink( $post->ID ) ) . '" title="' . the_title_attribute( 'echo=0' ) . '" ><i class="link font-icon">' . canuckcp_svg( 'link', '14', '#ffffff' ) . '</i></a>';// phpcs:ignore
											}
											echo '<a href="' . esc_url( $image_url ) . '" ><i class="link font-icon">' . canuckcp_svg( 'image', '14', '#ffffff' ) . '</i></a>';// phpcs:ignore
											?>
										</span>
										<span class="title">
											<?php
											echo wp_kses_post( $image_caption );
											?>
										</span>
										<div class="content">
											<?php
											echo wp_kses_post( $image_desc );
											?>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
						if ( 3 === $section9_portfolio_columns ) {
							if ( is_int( ( $canuckcp_feature_pic_count ) / 3 ) ) {
								echo '<div class="clearfix"></div>';
							}
						} elseif ( 4 === $section9_portfolio_columns ) {
							if ( is_int( ( $canuckcp_feature_pic_count ) / 4 ) ) {
								echo '<div class="clearfix"></div>';
							}
						}
					}
				} else {
					?>
					<div class="error">
						<h3><?php esc_html_e( 'Error: There are no posts or category selected is wrong!', 'canuck-cp' ); ?></h3>
					</div>
					<?php
				}
				if ( 0 === $canuckcp_feature_pic_count ) {
					?>
					<div class="error">
						<h3><?php esc_html_e( 'Error: There were no feature images found?', 'canuck-cp' ); ?></h3>
					</div>
					<?php
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</div>
