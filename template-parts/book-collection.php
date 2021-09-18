<?php
/**
 * Display related book series
 */
$book_collection_tax = 'book_collection';
$book_collection_terms = get_the_terms(get_the_ID(), $book_collection_tax);
$book_collection_object = !empty($book_collection_terms) && !is_wp_error($book_collection_terms) ? $book_collection_terms[0] : null;

$book_args = !empty($book_collection_object) ? array(
	'post_type' => 'book',
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => $book_collection_tax,
			'field' => 'term_id',
			'terms' => $book_collection_object->term_id
		)
	)
) : [];

$books = !empty($book_args) ? get_posts($book_args) : [];

if (!empty($books)) : ?>
	<div class="book-collection">
		<p class="book-collection__title"><?php esc_html_e('Same Collection', 'ct-books'); ?></p>
		<ul class="book-collection__list">
			<?php foreach($books as $book) : ?>
				<li class="book-collection__row<?php if ($book->ID === get_the_ID()) : ?> book-collection__row--current<?php endif; ?>">
					<?php if ($book->ID === get_the_ID()) : ?>
						<span class="book-collection__text"><?php echo $book->post_title; ?></span>
					<?php else :?>
						<a class="book-collection__link" href="<?php echo get_permalink($book->ID); ?>"><?php echo $book->post_title; ?></a>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
<?php endif; ?>
