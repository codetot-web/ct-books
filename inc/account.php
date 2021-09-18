<?php

function ct_books_get_account_boxes($user_id) {
	$items = [];

	if (empty($user_id)) {
		return $items;
	}

	return $items;
}

function ct_books_get_account_menu_items() {
	$account_page = get_page_by_path('account');
	$account_page_url = get_permalink($account_page);

	return array(
		array(
			'url' => $account_page_url,
			'title' => esc_html__('Dashboard', 'ct-books')
		),
		array(
			'url' => add_query_arg('view', 'rented_books', $account_page_url),
			'title' => esc_html__('Rented Books', 'ct-books')
		),
		array(
			'url' => add_query_arg('view', 'edit_account', $account_page_url),
			'title' => esc_html__('Edit account', 'ct-books')
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
