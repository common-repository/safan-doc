<?php

function safan_doc_register_my_taxes_catrgory() {

	/**
	 * Taxonomy: Categories.
	 */

	$labels = [
		"name" => __( "Categories", "safan-doc" ),
		"singular_name" => __( "Category", "safan-doc" ),
	];

	$args = [
		"label" => __( "Categories", "safan-doc" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'catrgory', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "catrgory",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		];
	register_taxonomy( "catrgory", [ "doc" ], $args );
}
add_action( 'init', 'safan_doc_register_my_taxes_catrgory' );
