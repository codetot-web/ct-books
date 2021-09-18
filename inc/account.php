<?php

function ct_bones_get_account_page() {
	return get_page_by_path('account');
}

function ct_bones_get_account_page_url() {
	$account_page = ct_bones_get_account_page();

	return !empty($account_page) ? get_permalink($account_page) : '';
}

function ct_bones_get_account_books_tabs() {
	$items = [];


	$items[] = array(
		'id' => 'readed-books',
		'title' => esc_html__('Readed Books', 'ct-books'),
		'content' => 'Updating...'
	);

	$items[] = array(
		'id' => 'pending-requests',
		'title' => esc_html__('Pending Requests', 'ct-books'),
		'content' => 'Updating...'
	);

	return $items;
}

function ct_books_get_account_boxes($user_id) {
	$items = [];

	$account_page_url = ct_bones_get_account_page_url();

	if (empty($user_id)) {
		return $items;
	}

	$rented_book_number = 1;
	$items[] = array(
		'title' => esc_html__('Readed books', 'ct-books'),
		'content' => sprintf(_n('%s book', '%s books', $rented_book_number, 'ct-books'), $rented_book_number),
		'button_text' => __('View all', 'ct-books'),
		'button_url' => add_query_arg(array(
			'view'=> 'books',
			'tab' => 'readed_books'
		), $account_page_url)
	);

	$pending_request = 1;
	$items[] = array(
		'title' => esc_html__('Pending Request', 'ct-books'),
		'content' => sprintf(_n('%s request', '%s requests', $pending_request, 'ct-books'), $pending_request),
		'button_text' => __('View all', 'ct-books'),
		'button_url' => add_query_arg(array(
			'view' => 'books',
			'tab' => 'pending_request'
		), $account_page_url)
	);

	return $items;
}

function ct_books_get_account_menu_items() {
	$account_page_url = ct_bones_get_account_page_url();

	return array(
		array(
			'is_active' => empty($_GET['view']),
			'url' => $account_page_url,
			'title' => esc_html__('Dashboard', 'ct-books')
		),
		array(
			'is_active' => !empty($_GET['view']) && $_GET['view'] === 'books',
			'url' => add_query_arg('view', 'books', $account_page_url),
			'title' => esc_html__('Your Books', 'ct-books')
		),
		array(
			'is_active' => !empty($_GET['view']) && $_GET['view'] === 'account',
			'url' => add_query_arg('view', 'account', $account_page_url),
			'title' => esc_html__('Account', 'ct-books')
		),
		array(
			'url' => wp_logout_url($account_page_url),
			'title' => esc_html__('Log Out')
		)
	);
}

/**
 * Register login/register shortcode
 */
add_action('init', 'ct_books_register_account_shortcode');
function ct_books_register_account_shortcode() {
	add_shortcode('ct-books-account', 'ct_books_generate_account_content');
	add_shortcode('ct-books-register-form', 'ct_books_generate_register_form');
}

function ct_books_generate_account_content() {
	if (is_user_logged_in()) {
		ob_start();
		get_template_part('template-parts/account-section');
		$content = ob_get_clean();
	} else {
		$content =  wp_login_form();
	}

	return $content;
}
