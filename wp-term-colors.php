<?php

/**
 * Plugin Name: WP Term Colors
 * Plugin URI:  https://wordpress.org/plugins/wp-term-colors/
 * Author:      John James Jacoby
 * Author URI:  https://profiles.wordpress.org/johnjamesjacoby/
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Description: Pretty colors for categories, tags, and other taxonomy terms.  Minor loading modifications made by Red Pixel Studios.
 * Version:     0.2.0
 * Text Domain: wp-term-colors
 * Domain Path: /assets/lang/
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Initialize the main WordPress Term Color class
 *
 * @since 0.2.0
 */
function _wp_term_colors_init() {
	
	if ( function_exists( 'add_term_meta' ) ) {
		
		require_once dirname( __FILE__ ) . '/includes/class-wp-term-colors.php';
		
		new WP_Term_Colors( __FILE__ );
		
	}
}
add_action( 'init', '_wp_term_colors_init', 99 );
