<?php
/**
 * Canuck Portfolio Four Column template part
 *
 * This template part is called by template-portfolio-side.php or template-portfolio.php
 *
 * @package     Canuck CP ClassicPress Theme
 * @copyright   Copyright (C) 2020 or later Kevin Archibald
 * @license     http://www.gnu.org/licenses/gpl-2.0.html
 * @author      Kevin Archibald <https://kevinsspace.ca/contact/>
 */

echo '<div class="portfolio-grid-3">';
	get_template_part( '/template-parts/portfolio-parts/portfolio', 'grid' );
echo '</div>';
echo '<div class="clearfix" ></div>';
