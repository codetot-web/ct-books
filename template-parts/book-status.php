<?php
/**
 * Display book status in single book
 *
 * @package CT_Books
 * @author khoipro
 * @since 0.0.1
 *
 */

$book_statuses = get_the_terms(get_the_ID(), 'book_status');
$book_status = !empty($book_statuses) && !is_wp_error($book_statuses) ? $book_statuses[0] : null;
$status_css_class = !empty($book_status) ? sanitize_title_with_dashes($book_status->slug) : '';
$status_css_class = !empty($book_status) ? str_replace('_', '-', $status_css_class) : '';
// Generate css class
$book_status_css_class = 'book-status';
$book_status_css_class .= !empty($status_css_class) ? ' is-' . $status_css_class : '';

if (!empty($book_status)) : ?>
	<p class="<?php echo $book_status_css_class; ?>">
		<span class="book-status__label"><?php esc_html_e('Status', 'ct-books'); ?></span>
		<span class="book-status__value"><?php echo $book_status->name; ?></span>
	</p>
<?php endif;
