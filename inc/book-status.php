<?php

add_action('after_switch_theme', 'ct_bones_book_status_generator');
function ct_bones_book_status_generator() {
	$book_status_tax = 'book_status';

	$book_statuses = get_terms(array(
		'taxonomy' => $book_status_tax,
		'hide_empty' => false
	));

	if (!empty($book_statuses) || is_wp_error($book_statuses)) {
		return;
	}

	$success_count = 0;
	$error_count = 0;
	$dummy_terms = array(
		'available'     => esc_html__('Available', 'ct-books'),
		'not_available' => esc_html__('Not Available', 'ct-books')
	);

	foreach ($dummy_terms as $term_slug => $term_name) {
		$exist_term = term_exists($term_name, $book_status_tax);

		if ( !$exist_term) {
			$result = wp_insert_term(
				$term_name,
				$book_status_tax,
				array(
					'slug' => $term_slug
				)
			);

			if (is_wp_error($result)) {
				$error_count++;
				error_log('Create book_status term not success. Error: ' . $result->get_error_message());
			} else {
				$success_count++;
			}
		}
	}

    if ($success_count > 0 || $error_count > 0) {
        add_action('admin_notices', function() use($success_count, $error_count) {
			if ($success_count > 0) {
				add_settings_error(
					'ct_books_book_status_generator',
					esc_attr('book_status_generated'),
					sprintf('Generated book status. %1$s success and %2$s failure.', $success_count, $error_count)
				);
			}
		});
    }
}
