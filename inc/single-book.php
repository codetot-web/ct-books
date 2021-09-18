<?php

add_action('generate_after_entry_header', 'ct_books_add_book_detail', 10);
function ct_books_add_book_detail() {
    if (!is_singular('book')) {
        return;
    }

	get_template_part('template-parts/book-status');

	get_template_part('template-parts/book-form');

	get_template_part('template-parts/book-meta');

	get_template_part('template-parts/book-collection');
}

add_action('wp', 'ct_books_process_book_rent_action');
function ct_books_process_book_rent_action() {
	if (is_admin() || !is_singular('book')) {
		return;
	}

	$has_rent_action = !empty($_GET['action']) && $_GET['action'] === 'rent';
	$is_logged_in = is_user_logged_in();
	$user_id = is_user_logged_in() ? get_current_user_id() : null;
	$has_right_nonce = is_user_logged_in() && !empty($_GET['user_nonce']) && wp_verify_nonce($_GET['user_nonce'], 'user_' . $user_id);

	if (
		$has_rent_action && $is_logged_in & $has_right_nonce
	) {
		echo 'passed';
	}
}
