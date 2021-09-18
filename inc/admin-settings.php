<?php

add_action('admin_menu', 'ct_books_settings_menu');
function ct_books_settings_menu() {
	add_submenu_page(
		'edit.php?post_type=book',
		esc_html__('Settings', 'ct-books'),
		esc_html__('Settings', 'ct-books'),
		'manage_options',
		'ct-book-settings',
		'ct_books_render_page_settings',
		90
	);
}

function ct_books_render_page_settings() { ?>
	<div class="wrap">
		<div class="ct-books-admin-ui__header">
			<h1 class="ct-books-admin-ui__page-title"><?php esc_html_e('Library Settings', 'ct-books'); ?></h1>
		</div>
		<div class="ct-books-admin-ui__main"></div>
	</div>
<?php }
