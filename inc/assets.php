<?php

add_action('wp_enqueue_scripts', 'ct_books_enqueue_assets');
function ct_books_enqueue_assets() {
	wp_enqueue_style('ct-bones-css', get_stylesheet_directory_uri(), array(), CT_BOOKS_VERSION);
}
