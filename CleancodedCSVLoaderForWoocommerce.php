<?php
/*
Plugin Name: Cleancoded Woocommerce CSV Import
Description: CSV import for Woocommerce
Version: 1.0
Author: Cleancoded
License: GPL
parent: woocommerce
*/

/**
 * This file is part of woocommerce-csvloader.
 * 
 * Cleancoded Woocommerce CSV Import is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * woocommerce-csvloader is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 */

class CleancodedCSVLoaderForWoocommerce {
	function __construct() {
		add_action( 'init', array( $this, 'init' ) );
		if ( is_admin() ) {
			add_action( 'admin_menu', array( $this, 'admin_menu' ), 99 );
		}
	}

	function init() {
		if ( function_exists( 'load_plugin_textdomain' ) )
			load_plugin_textdomain( 'tcp_csvl', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	function admin_menu() {
		
if (function_exists('add_menu_page'))
{
add_menu_page('Csv Loader', 'Csv Loader', 'administrator', dirname( __FILE__ ) . '/admin/CSVLoader.php');
}
	}
}

new CleancodedCSVLoaderForWoocommerce();
?>
