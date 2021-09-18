<?php

function ct_books_register_cpts() {

	/**
	 * Post Type: Books.
	 */

	$labels = [
		"name" => __( "Books", 'ct-books' ),
		"singular_name" => __( "Book", 'ct-books' ),
		"menu_name" => __( "Books", 'ct-books' ),
		"all_items" => __( "All Books", 'ct-books' ),
		"add_new" => __( "Add new", 'ct-books' ),
		"add_new_item" => __( "Add new Book", 'ct-books' ),
		"edit_item" => __( "Edit Book", 'ct-books' ),
		"new_item" => __( "New Book", 'ct-books' ),
		"view_item" => __( "View Book", 'ct-books' ),
		"view_items" => __( "View Books", 'ct-books' ),
		"search_items" => __( "Search Books", 'ct-books' ),
		"not_found" => __( "No Books found", 'ct-books' ),
		"not_found_in_trash" => __( "No Books found in trash", 'ct-books' ),
		"parent" => __( "Parent Book:", 'ct-books' ),
		"featured_image" => __( "Featured image for this Book", 'ct-books' ),
		"set_featured_image" => __( "Set featured image for this Book", 'ct-books' ),
		"remove_featured_image" => __( "Remove featured image for this Book", 'ct-books' ),
		"use_featured_image" => __( "Use as featured image for this Book", 'ct-books' ),
		"archives" => __( "Book archives", 'ct-books' ),
		"insert_into_item" => __( "Insert into Book", 'ct-books' ),
		"uploaded_to_this_item" => __( "Upload to this Book", 'ct-books' ),
		"filter_items_list" => __( "Filter Books list", 'ct-books' ),
		"items_list_navigation" => __( "Books list navigation", 'ct-books' ),
		"items_list" => __( "Books list", 'ct-books' ),
		"attributes" => __( "Books attributes", 'ct-books' ),
		"name_admin_bar" => __( "Book", 'ct-books' ),
		"item_published" => __( "Book published", 'ct-books' ),
		"item_published_privately" => __( "Book published privately.", 'ct-books' ),
		"item_reverted_to_draft" => __( "Book reverted to draft.", 'ct-books' ),
		"item_scheduled" => __( "Book scheduled", 'ct-books' ),
		"item_updated" => __( "Book updated.", 'ct-books' ),
		"parent_item_colon" => __( "Parent Book:", 'ct-books' ),
	];

	$args = [
		"label" => __( "Books", 'ct-books' ),
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
		"hierarchical" => false,
		"rewrite" => [ "slug" => "book", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-book",
		"supports" => [ "title", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( 'book', $args );

	/**
	 * Post Type: Book Requests.
	 */

	$labels = [
		"name" => __( "Book Requests", 'ct-books' ),
		"singular_name" => __( "Book Request", 'ct-books' ),
		"menu_name" => __( "Book Requests", 'ct-books' ),
		"all_items" => __( "All Book Requests", 'ct-books' ),
		"add_new" => __( "Add new", 'ct-books' ),
		"add_new_item" => __( "Add new Book Request", 'ct-books' ),
		"edit_item" => __( "Edit Book Request", 'ct-books' ),
		"new_item" => __( "New Book Request", 'ct-books' ),
		"view_item" => __( "View Book Request", 'ct-books' ),
		"view_items" => __( "View Book Requests", 'ct-books' ),
		"search_items" => __( "Search Book Requests", 'ct-books' ),
		"not_found" => __( "No Book Requests found", 'ct-books' ),
		"not_found_in_trash" => __( "No Book Requests found in trash", 'ct-books' ),
		"parent" => __( "Parent Book Request:", 'ct-books' ),
		"featured_image" => __( "Featured image for this Book Request", 'ct-books' ),
		"set_featured_image" => __( "Set featured image for this Book Request", 'ct-books' ),
		"remove_featured_image" => __( "Remove featured image for this Book Request", 'ct-books' ),
		"use_featured_image" => __( "Use as featured image for this Book Request", 'ct-books' ),
		"archives" => __( "Book Request archives", 'ct-books' ),
		"insert_into_item" => __( "Insert into Book Request", 'ct-books' ),
		"uploaded_to_this_item" => __( "Upload to this Book Request", 'ct-books' ),
		"filter_items_list" => __( "Filter Book Requests list", 'ct-books' ),
		"items_list_navigation" => __( "Book Requests list navigation", 'ct-books' ),
		"items_list" => __( "Book Requests list", 'ct-books' ),
		"attributes" => __( "Book Requests attributes", 'ct-books' ),
		"name_admin_bar" => __( "Book Request", 'ct-books' ),
		"item_published" => __( "Book Request published", 'ct-books' ),
		"item_published_privately" => __( "Book Request published privately.", 'ct-books' ),
		"item_reverted_to_draft" => __( "Book Request reverted to draft.", 'ct-books' ),
		"item_scheduled" => __( "Book Request scheduled", 'ct-books' ),
		"item_updated" => __( "Book Request updated.", 'ct-books' ),
		"parent_item_colon" => __( "Parent Book Request:", 'ct-books' ),
	];

	$args = [
		"label" => __( "Book Requests", 'ct-books' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "book_request", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( 'book_request', $args );
}

add_action( 'init', 'ct_books_register_cpts' );
