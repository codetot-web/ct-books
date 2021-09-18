<?php

function ct_books_register_taxes() {

	/**
	 * Taxonomy: Topics.
	 */

	$labels = [
		"name" => __( "Topics", 'ct-books' ),
		"singular_name" => __( "Topic", 'ct-books' ),
		"menu_name" => __( "Topics", 'ct-books' ),
		"all_items" => __( "All Topics", 'ct-books' ),
		"edit_item" => __( "Edit Topic", 'ct-books' ),
		"view_item" => __( "View Topic", 'ct-books' ),
		"update_item" => __( "Update Topic name", 'ct-books' ),
		"add_new_item" => __( "Add new Topic", 'ct-books' ),
		"new_item_name" => __( "New Topic name", 'ct-books' ),
		"parent_item" => __( "Parent Topic", 'ct-books' ),
		"parent_item_colon" => __( "Parent Topic:", 'ct-books' ),
		"search_items" => __( "Search Topics", 'ct-books' ),
		"popular_items" => __( "Popular Topics", 'ct-books' ),
		"separate_items_with_commas" => __( "Separate Topics with commas", 'ct-books' ),
		"add_or_remove_items" => __( "Add or remove Topics", 'ct-books' ),
		"choose_from_most_used" => __( "Choose from the most used Topics", 'ct-books' ),
		"not_found" => __( "No Topics found", 'ct-books' ),
		"no_terms" => __( "No Topics", 'ct-books' ),
		"items_list_navigation" => __( "Topics list navigation", 'ct-books' ),
		"items_list" => __( "Topics list", 'ct-books' ),
		"back_to_items" => __( "Back to Topics", 'ct-books' ),
	];


	$args = [
		"label" => __( "Topics", 'ct-books' ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'book_topic', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "book_topic",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "book_topic", [ "book" ], $args );

	/**
	 * Taxonomy: Authors.
	 */

	$labels = [
		"name" => __( "Authors", 'ct-books' ),
		"singular_name" => __( "Author", 'ct-books' ),
		"menu_name" => __( "Authors", 'ct-books' ),
		"all_items" => __( "All Authors", 'ct-books' ),
		"edit_item" => __( "Edit Author", 'ct-books' ),
		"view_item" => __( "View Author", 'ct-books' ),
		"update_item" => __( "Update Author name", 'ct-books' ),
		"add_new_item" => __( "Add new Author", 'ct-books' ),
		"new_item_name" => __( "New Author name", 'ct-books' ),
		"parent_item" => __( "Parent Author", 'ct-books' ),
		"parent_item_colon" => __( "Parent Author:", 'ct-books' ),
		"search_items" => __( "Search Authors", 'ct-books' ),
		"popular_items" => __( "Popular Authors", 'ct-books' ),
		"separate_items_with_commas" => __( "Separate Authors with commas", 'ct-books' ),
		"add_or_remove_items" => __( "Add or remove Authors", 'ct-books' ),
		"choose_from_most_used" => __( "Choose from the most used Authors", 'ct-books' ),
		"not_found" => __( "No Authors found", 'ct-books' ),
		"no_terms" => __( "No Authors", 'ct-books' ),
		"items_list_navigation" => __( "Authors list navigation", 'ct-books' ),
		"items_list" => __( "Authors list", 'ct-books' ),
		"back_to_items" => __( "Back to Authors", 'ct-books' ),
	];


	$args = [
		"label" => __( "Authors", 'ct-books' ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'book_author', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "book_author",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "book_author", [ "book" ], $args );

	/**
	 * Taxonomy: Statuses.
	 */

	$labels = [
		"name" => __( "Statuses", 'ct-books' ),
		"singular_name" => __( "Status", 'ct-books' ),
		"menu_name" => __( "Statuses", 'ct-books' ),
		"all_items" => __( "All Statuses", 'ct-books' ),
		"edit_item" => __( "Edit Status", 'ct-books' ),
		"view_item" => __( "View Status", 'ct-books' ),
		"update_item" => __( "Update Status name", 'ct-books' ),
		"add_new_item" => __( "Add new Status", 'ct-books' ),
		"new_item_name" => __( "New Status name", 'ct-books' ),
		"parent_item" => __( "Parent Status", 'ct-books' ),
		"parent_item_colon" => __( "Parent Status:", 'ct-books' ),
		"search_items" => __( "Search Statuses", 'ct-books' ),
		"popular_items" => __( "Popular Statuses", 'ct-books' ),
		"separate_items_with_commas" => __( "Separate Statuses with commas", 'ct-books' ),
		"add_or_remove_items" => __( "Add or remove Statuses", 'ct-books' ),
		"choose_from_most_used" => __( "Choose from the most used Statuses", 'ct-books' ),
		"not_found" => __( "No Statuses found", 'ct-books' ),
		"no_terms" => __( "No Statuses", 'ct-books' ),
		"items_list_navigation" => __( "Statuses list navigation", 'ct-books' ),
		"items_list" => __( "Statuses list", 'ct-books' ),
		"back_to_items" => __( "Back to Statuses", 'ct-books' ),
	];


	$args = [
		"label" => __( "Statuses", 'ct-books' ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'book_status', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "book_status",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "book_status", [ "book" ], $args );

	/**
	 * Taxonomy: Collections.
	 */

	$labels = [
		"name" => __( "Collections", 'ct-books' ),
		"singular_name" => __( "Collection", 'ct-books' ),
		"menu_name" => __( "Collections", 'ct-books' ),
		"all_items" => __( "All Collections", 'ct-books' ),
		"edit_item" => __( "Edit Collection", 'ct-books' ),
		"view_item" => __( "View Collection", 'ct-books' ),
		"update_item" => __( "Update Collection name", 'ct-books' ),
		"add_new_item" => __( "Add new Collection", 'ct-books' ),
		"new_item_name" => __( "New Collection name", 'ct-books' ),
		"parent_item" => __( "Parent Collection", 'ct-books' ),
		"parent_item_colon" => __( "Parent Collection:", 'ct-books' ),
		"search_items" => __( "Search Collections", 'ct-books' ),
		"popular_items" => __( "Popular Collections", 'ct-books' ),
		"separate_items_with_commas" => __( "Separate Collections with commas", 'ct-books' ),
		"add_or_remove_items" => __( "Add or remove Collections", 'ct-books' ),
		"choose_from_most_used" => __( "Choose from the most used Collections", 'ct-books' ),
		"not_found" => __( "No Collections found", 'ct-books' ),
		"no_terms" => __( "No Collections", 'ct-books' ),
		"items_list_navigation" => __( "Collections list navigation", 'ct-books' ),
		"items_list" => __( "Collections list", 'ct-books' ),
		"back_to_items" => __( "Back to Collections", 'ct-books' ),
	];


	$args = [
		"label" => __( "Collections", 'ct-books' ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'book_collection', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "book_collection",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		"show_in_graphql" => false,
	];
	register_taxonomy( "book_collection", [ "book" ], $args );
}
add_action( 'init', 'ct_books_register_taxes' );
