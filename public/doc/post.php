<?php

function safan_doc_register_my_cpts_doc() {

	/**
	 * Post Type: Docs.
	 */

	$labels = [
		"name" => __( "Safan Docs", "safan-doc" ),
		"singular_name" => __( "Safan Doc", "safan-doc" ),
	];

	$args = [
		"label" => __( "Safan Docs", "safan_doc" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "sdoc", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-media-document",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "doc", $args );
}

add_action( 'init', 'safan_doc_register_my_cpts_doc' );
