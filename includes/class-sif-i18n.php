<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.adpu.net
 * @since    1.02
 *
 * @package    sif
 * @subpackage sif/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since    1.02
 * @package    sif
 * @subpackage sif/includes
 * @author     Jordi Verdaguer <info@adpu.net>
 */
class Sif_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.02
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sif',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
