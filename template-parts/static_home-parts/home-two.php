<?php
/**
 * Canuck Home Page template part - layout option 2
 *
 * This template part is called by template-home.php
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

$sec2_bg_image     = get_theme_mod( 'canuckcp_section2_background_image', '' );
$sec2_use_parallax = get_theme_mod( 'canuckcp_section2_use_parallax', false );
$use_lazyload      = get_theme_mod( 'canuckcp_use_lazyload' ) ? true : false;
if ( '' !== $sec2_bg_image ) {
	if ( true === $sec2_use_parallax ) {
		$string2 = ' class="home-2-wide parallax-window" data-parallax="scroll" data-image-src="' . esc_url( $sec2_bg_image ) . '" data-speed="0.3" data-bleed="0" style="background: transparent;"';
	} elseif ( true === $use_lazyload ) {
		$string2 = ' class="home-2-wide lazyload" data-src="' . $sec2_bg_image . '"';
	} else {
		$string2 = ' class="home-2-wide" style="background-image: url( ' . $sec2_bg_image . ' );"';
	}
} else {
	$string2 = ' class="home-2-wide"';
}
?>
<div <?php echo $string2;// phpcs:ignore ?>>
	<div class="home-2-wide-overlay">
		<div class="home-2-wrap">
			<div class="servicebox one">
				<?php
				// Get options.
				$section2_box1_use_image_font = get_theme_mod( 'canuckcp_section2_box1_use_font_icon', false );
				$section2_box1_image_font     = get_theme_mod( 'canuckcp_section2_box1_image_font', 'no icon' );// phpcs:ignore
				$section2_box1_image          = get_theme_mod( 'canuckcp_section2_box1_image', '' );
				$section2_box1_title          = stripslashes( get_theme_mod( 'canuckcp_section2_box1_title', '' ) );
				$section2_box1_text           = stripslashes( get_theme_mod( 'canuckcp_section2_box1_text', '' ) );
				$section2_box1_include_link   = get_theme_mod( 'canuckcp_section2_box1_include_link', false );
				$section2_box1_button_link    = get_theme_mod( 'canuckcp_section2_box1_button_link', '#' );
				$section2_box1_button_icon    = get_theme_mod( 'canuckcp_section2_box1_button_icon', 'no icon' );// phpcs:ignore
				$section2_box1_button_label   = get_theme_mod( 'canuckcp_section2_box1_button_title', esc_html__( '...more', 'canuck-cp' ) );
				// check for old versions.
				if ( 'fa-' === substr( $section2_box1_image_font, 0, 3 ) || 'no icon' === $section2_box1_image_font ) {
					$section2_box1_image_font = 'check';
				}
				// Set up the button link.
				if ( true === $section2_box1_include_link ) {
					if ( '' === $section2_box1_button_label ) {
						if ( 'no icon' !== $section2_box1_button_icon ) {
							$section2_box1_button_title = canuckcp_svg( $section2_box1_button_icon, '14', '#7f7f7f' ) . esc_html__( 'more', 'canuck-cp' );// phpcs:ignore
						} else {
							$section2_box1_button_title = esc_html__( '...more', 'canuck-cp' );
						}
					} else {
						if ( 'no icon' !== $section2_box1_button_icon ) {
							$section2_box1_button_title = canuckcp_svg( $section2_box1_button_icon, '14', '#7f7f7f' ) . esc_html( $section2_box1_button_label );// phpcs:ignore
						} else {
							$section2_box1_button_title = esc_html( $section2_box1_button_label );
						}
					}
				}
				// Set up service box.
				if ( true === $section2_box1_include_link && '' === $section2_box1_button_label ) {
					// No link button so use image for link.
					if ( true === $section2_box1_use_image_font && '' !== $section2_box1_image_font ) {
						?>
						<div class="section2-graphic">
							<a class="section2-linked-fi" href="<?php echo esc_url( $section2_box1_button_link ); ?>">
								<i class="linked font-icon"><?php echo canuckcp_svg( $section2_box1_image_font, '16', '#7f7f7f' );// phpcs:ignore ?></i>
							</a>
						</div>
						<?php
					} elseif ( '' !== $section2_box1_image ) {
						?>
						<div class="section2-graphic">
							<a class="section2-linked-image" href="<?php echo esc_url( $section2_box1_button_link ); ?>">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img data-pin-no-hover="true" class="lazyload"
										src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section2_box1_image ); ?>"
										alt="<?php echo esc_attr( $section2_box1_title ); ?>" />
									<?php
								} else {
									?>
									<img data-pin-no-hover="true" src="<?php echo esc_url( $section2_box1_image ); ?>" alt="<?php echo esc_attr( $section2_box1_title ); ?>" />
									<?php
								}
								?>
								<div class="section2-image-overlay">
									<i><?php echo canuckcp_svg( 'link', '20', '#ffffff' );// phpcs:ignore ?></i>
								</div>
							</a>
						</div>
						<?php
					}
				} else {
					// Put in the image with no link.
					if ( true === $section2_box1_use_image_font ) {
						?>
						<div class="section2-graphic">
							<i class="no-link font-icon"><?php echo canuckcp_svg( $section2_box1_image_font, '16', '#7f7f7f' );// phpcs:ignore ?></i>
						</div>
						<?php
					} else {
						if ( '' !== $section2_box1_image ) {
							?>
							<div class="section2-graphic">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img data-pin-no-hover="true" class="lazyload no-link"
										src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section2_box1_image ); ?>"
										alt="<?php echo esc_attr( $section2_box1_title ); ?>" />
									<?php
								} else {
									?>
									<img data-pin-no-hover="true" class ="no-link" src="<?php echo esc_url( $section2_box1_image ); ?>" alt="<?php echo esc_attr( $section2_box1_title ); ?>" />
									<?php
								}
								?>
							</div>
							<?php
						}
					}
				}
				if ( '' !== $section2_box1_title ) {
					echo '<h4>' . esc_html( $section2_box1_title ) . '</h4>';
				}
				if ( '' !== $section2_box1_text ) {
					echo '<div class="servicebox-content">' . wp_kses_post( $section2_box1_text ) . '</div>';
				}
				if ( true === $section2_box1_include_link && '' !== $section2_box1_button_label ) {
					?>
					<div class="home-2-button">
						<a class="button1" href="<?php echo esc_url( $section2_box1_button_link ); ?>"><?php echo $section2_box1_button_title;// phpcs:ignore ?>
						</a>
					</div>
					<?php
				}
				?>
			</div>
			<div class="servicebox two">
				<?php
				// Get options.
				$section2_box2_use_image_font = get_theme_mod( 'canuckcp_section2_box2_use_font_icon', false );
				$section2_box2_image_font     = get_theme_mod( 'canuckcp_section2_box2_image_font', 'no icon' );// phpcs:ignore
				$section2_box2_image          = get_theme_mod( 'canuckcp_section2_box2_image', '' );
				$section2_box2_title          = stripslashes( get_theme_mod( 'canuckcp_section2_box2_title', '' ) );
				$section2_box2_text           = stripslashes( get_theme_mod( 'canuckcp_section2_box2_text', '' ) );
				$section2_box2_include_link   = get_theme_mod( 'canuckcp_section2_box2_include_link', false );
				$section2_box2_button_link    = get_theme_mod( 'canuckcp_section2_box2_button_link', '#' );
				$section2_box2_button_icon    = get_theme_mod( 'canuckcp_section2_box2_button_icon', 'no icon' );// phpcs:ignore
				$section2_box2_button_label   = get_theme_mod( 'canuckcp_section2_box2_button_title', esc_html__( '...more', 'canuck-cp' ) );
				// check for old versions.
				if ( 'fa-' === substr( $section2_box2_image_font, 0, 3 ) || 'no icon' === $section2_box2_image_font ) {
					$section2_box2_image_font = 'check';
				}
				// Set up the button link.
				if ( true === $section2_box2_include_link ) {
					if ( '' === $section2_box2_button_label ) {
						if ( 'no icon' !== $section2_box2_button_icon ) {
							$section2_box2_button_title = canuckcp_svg( $section2_box2_button_icon, '14', '#7f7f7f' ) . esc_html__( 'more', 'canuck-cp' );// phpcs:ignore
						} else {
							$section2_box2_button_title = esc_html__( '...more', 'canuck-cp' );
						}
					} else {
						if ( 'no icon' !== $section2_box2_button_icon ) {
							$section2_box2_button_title = canuckcp_svg( $section2_box2_button_icon, '14', '#7f7f7f' ) . esc_html( $section2_box2_button_label );// phpcs:ignore
						} else {
							$section2_box2_button_title = esc_html( $section2_box2_button_label );
						}
					}
				}
				// Set up service box.
				if ( true === $section2_box2_include_link && '' === $section2_box2_button_label ) {
					// No link button so use image for link.
					if ( true === $section2_box2_use_image_font && '' !== $section2_box2_image_font ) {
						?>
						<div class="section2-graphic">
							<a class="section2-linked-fi" href="<?php echo esc_url( $section2_box2_button_link ); ?>">
								<i class="linked font-icon"><?php echo canuckcp_svg( $section2_box2_image_font, '16', '#7f7f7f' );// phpcs:ignore ?></i>
							</a>
						</div>
						<?php
					} elseif ( '' !== $section2_box2_image ) {
						?>
						<div class="section2-graphic">
							<a class="section2-linked-image" href="<?php echo esc_url( $section2_box2_button_link ); ?>">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img data-pin-no-hover="true" class="lazyload"
										src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section2_box2_image ); ?>"
										alt="<?php echo esc_attr( $section2_box2_title ); ?>" />
									<?php
								} else {
									?>
									<img data-pin-no-hover="true" src="<?php echo esc_url( $section2_box2_image ); ?>" alt="<?php echo esc_attr( $section2_box2_title ); ?>" />
									<?php
								}
								?>
								<div class="section2-image-overlay">
								<i><?php echo canuckcp_svg( 'link', '20', '#ffffff' );// phpcs:ignore ?></i>
								</div>
							</a>
						</div>
						<?php
					}
				} else {
					// Put in the image with no link.
					if ( true === $section2_box2_use_image_font ) {
						?>
						<div class="section2-graphic">
						<i class="no-link font-icon"><?php echo canuckcp_svg( $section2_box2_image_font, '20', '#7f7f7f' );// phpcs:ignore ?></i>
						</div>
						<?php
					} else {
						if ( '' !== $section2_box2_image ) {
							?>
							<div class="section2-graphic">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img data-pin-no-hover="true" class="lazyload no-link"
										src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section2_box2_image ); ?>"
										alt="<?php echo esc_attr( $section2_box2_title ); ?>" />
									<?php
								} else {
									?>
									<img data-pin-no-hover="true" class ="no-link" src="<?php echo esc_url( $section2_box2_image ); ?>" alt="<?php echo esc_attr( $section2_box2_title ); ?>" />
									<?php
								}
								?>
							</div>
							<?php
						}
					}
				}
				if ( '' !== $section2_box2_title ) {
					echo '<h4>' . esc_html( $section2_box2_title ) . '</h4>';
				}
				if ( '' !== $section2_box2_text ) {
					echo '<div class="servicebox-content">' . wp_kses_post( $section2_box2_text ) . '</div>';
				}
				if ( true === $section2_box2_include_link && '' !== $section2_box2_button_label ) {
					?>
					<div class="home-2-button">
						<a class="button1" href="<?php echo esc_url( $section2_box2_button_link ); ?>"><?php echo $section2_box2_button_title;// phpcs:ignore ?></a>
					</div>
					<?php
				}
				?>
			</div>
			<div class="servicebox three">
				<?php
				// Get the options.
				$section2_box3_use_image_font = get_theme_mod( 'canuckcp_section2_box3_use_font_icon', false );
				$section2_box3_image_font     = get_theme_mod( 'canuckcp_section2_box3_image_font', 'no icon' );// phpcs:ignore
				$section2_box3_image          = get_theme_mod( 'canuckcp_section2_box3_image', '' );
				$section2_box3_title          = stripslashes( get_theme_mod( 'canuckcp_section2_box3_title', '' ) );
				$section2_box3_text           = stripslashes( get_theme_mod( 'canuckcp_section2_box3_text', '' ) );
				$section2_box3_include_link   = get_theme_mod( 'canuckcp_section2_box3_include_link', false );
				$section2_box3_button_link    = get_theme_mod( 'canuckcp_section2_box3_button_link', '#' );
				$section2_box3_button_icon    = get_theme_mod( 'canuckcp_section2_box3_button_icon', 'no icon' );// phpcs:ignore
				$section2_box3_button_label   = get_theme_mod( 'canuckcp_section2_box3_button_title', wp_kses_post( __( '...more', 'canuck-cp' ) ) );
				// check for old versions.
				if ( 'fa-' === substr( $section2_box3_image_font, 0, 3 ) || 'no icon' === $section2_box3_image_font ) {
					$section2_box3_image_font = 'check';
				}
				// Set up the button link.
				if ( true === $section2_box3_include_link ) {
					if ( '' === $section2_box3_button_label ) {
						if ( 'no icon' !== $section2_box3_button_icon ) {
							$section2_box3_button_title = canuckcp_svg( $section2_box3_button_icon, '14', '#7f7f7f' ) . esc_html__( 'more', 'canuck-cp' );// phpcs:ignore
						} else {
							$section2_box3_button_title = esc_html__( '...more', 'canuck-cp' );
						}
					} else {
						if ( 'no icon' !== $section2_box3_button_icon ) {
							$section2_box3_button_title = canuckcp_svg( $section2_box3_button_icon, '14', '#7f7f7f' ) . esc_html( $section2_box3_button_label );// phpcs:ignore
						} else {
							$section2_box3_button_title = esc_html( $section2_box3_button_label );
						}
					}
				}
				// Set up service box.
				if ( true === $section2_box3_include_link && '' === $section2_box3_button_label ) {
					// No link button so use image for link.
					if ( true === $section2_box3_use_image_font && '' !== $section2_box3_image_font ) {
						?>
						<div class="section2-graphic">
							<a class="section2-linked-fi" href="<?php echo esc_url( $section2_box3_button_link ); ?>">
								<i class="linked font-icon"><?php echo canuckcp_svg( $section2_box3_image_font, '16', '#7f7f7f' );// phpcs:ignore ?></i>
							</a>
						</div>
						<?php
					} elseif ( '' !== $section2_box3_image ) {
						?>
						<div class="section2-graphic">
							<a class="section2-linked-image" href="<?php echo esc_url( $section2_box3_button_link ); ?>">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img data-pin-no-hover="true" class="lazyload" 
										src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section2_box3_image ); ?>"
										alt="<?php echo esc_attr( $section2_box3_title ); ?>" />
									<?php
								} else {
									?>
									<img data-pin-no-hover="true" src="<?php echo esc_url( $section2_box3_image ); ?>" alt="<?php echo esc_attr( $section2_box3_title ); ?>" />
									<?php
								}
								?>
								<div class="section2-image-overlay">
									<i><?php echo canuckcp_svg( 'link', '20', '#ffffff' );// phpcs:ignore ?></i>
								</div>
							</a>
						</div>
						<?php
					}
				} else {
					// Put in the image with no link.
					if ( true === $section2_box3_use_image_font ) {
						?>
						<div class="section2-graphic">
							<i class="no-link font-icon"><?php echo canuckcp_svg( $section2_box3_image_font, '20', '#7f7f7f' );// phpcs:ignore ?></i>
						</div>
						<?php
					} else {
						if ( '' !== $section2_box3_image ) {
							?>
							<div class="section2-graphic">
								<?php
								if ( true === $use_lazyload ) {
									?>
									<img data-pin-no-hover="true" class="lazyload no-link"
										src="<?php echo esc_url( get_template_directory_uri() ) . '/images/placeholder15.png';// phpcs:ignore ?>"
										data-src="<?php echo esc_url( $section2_box3_image ); ?>"
										alt="<?php echo esc_attr( $section2_box3_title ); ?>" />
									<?php
								} else {
									?>
									<img data-pin-no-hover="true" class ="no-link" src="<?php echo esc_url( $section2_box3_image ); ?>" alt="<?php echo esc_attr( $section2_box3_title ); ?>" />
									<?php
								}
								?>
							</div>
							<?php
						}
					}
				}
				if ( '' !== $section2_box3_title ) {
					echo '<h4>' . esc_html( $section2_box3_title ) . '</h4>';
				}
				if ( '' !== $section2_box3_text ) {
					echo '<div class="servicebox-content">' . wp_kses_post( $section2_box3_text ) . '</div>';
				}
				if ( true === $section2_box3_include_link && '' !== $section2_box3_button_label ) {
					?>
					<div class="home-2-button">
						<a class="button1" href="<?php echo esc_url( $section2_box3_button_link ); ?>"><?php echo $section2_box3_button_title;// phpcs:ignore ?></a>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
