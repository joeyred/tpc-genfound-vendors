<?php

/**
 * Great Dishes is a dead simple plugin to make a menu for a restaurant.
 *
 * @package   TPC Vendors
 * @author    Joey Hayes
 * @copyright 2015 Joey Hayes
 * @license   GPL-2.0+
 * @link      https://github.com/joeyred
 *
 * @wordpress-plugin
 * Plugin Name:       TPC Vendors
 * Plugin URI:        https://github.com/joeyred/tpc-genfound-vendors
 * Description:       Simple Plugin for adding a custom post type for Vendors using theme stylings and built on Foundation for Sites 5.
 * Version:           0.1.0
 * Author:            Robin Cornett
 * Author URI:        https://github.com/joeyred
 * Text Domain:       tpc-genfound-vendors
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
*/

// Hook post type registration into 'init' action
add_action( 'init', 'tpc_register_custom_post_vendor' );

// Register Custom Post Type
function tpc_register_custom_post_vendor() {
	$labels = array(
		"name" => "Vendors",
		"singular_name" => "Vendor",
		"menu_name" => "Vendors",
		"all_items" => "All Vendors",
		"add_new" => "Add New",
		"add_new_item" => "Add New Vendor",
		"edit" => "Edit",
		"edit_item" => "Edit Vendor",
		"new_item" => "New Vendor",
		"view" => "View",
		"view_item" => "View Vendor",
		"search_items" => "Search Vendors",
		"not_found" => "No Vendor found",
		"not_found_in_trash" => "No Vendors found in Trash",
		"parent" => "Vendors",
		);

	$args = array(
		"labels" => $labels,
		"description" => "TPC Approved vendors with great products and services that can help your practice run more efficiently and grow.",
		"public" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "vendor", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-businessman",		
		"supports" => array( "title", "excerpt", "trackbacks", "revisions", "thumbnail" ),		
		"taxonomies" => array( "category", "post_tag" )
	);
	register_post_type( "vendor", $args );
}
?>