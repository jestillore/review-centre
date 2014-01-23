<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   Review Centre
 * @author    Jillberth Estillore <contact@jillberthestillore.com>
 * @license   GPL-2.0+
 * @link      http://www.jillberthestillore.com
 * @copyright 2014 Jillberth Estillore
 *
 * @wordpress-plugin
 * Plugin Name:       Review Centre
 * Plugin URI:        http://downloads.jillberthestillore.com/wordpress/plugins/review-centre
 * Description:       Review management system for wordpress websites.
 * Version:           1.0.0
 * Author:            Jillberth Estillore
 * Author URI:        http://www.jillberthestillore.com
 * Text Domain:       plugin-name-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/jestillore/review-centre
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Advanced Custome Fields
 *----------------------------------------------------------------------------*/

define( 'ACF_LITE', true );

include_once('advanced-custom-fields/acf.php');

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-review-centre.php' );

register_activation_hook( __FILE__, array( 'Review_Centre', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Review_Centre', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Review_Centre', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-review-centre-admin.php' );
	add_action( 'plugins_loaded', array( 'Review_Centre_Admin', 'get_instance' ) );

}
