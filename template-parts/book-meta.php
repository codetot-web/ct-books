<?php

$data = [];
$fields = array(
	'published_date' => esc_html__('Published Date', 'ct-books'),
	'publisher' => esc_html__('Publisher', 'ct-books'),
	'dimesion' => esc_html__('Dimesion', 'ct-books'),
	'contributor' => esc_html__('Contributor', 'ct-books')
);
foreach ($fields as $id => $label) {
	$data[] = array(
		'label' => $label,
		'value' => get_field($id) ? get_field($id) : '-'
	);
}

if (!empty($data)) : ?>
	<div class="book-meta">
		<ul class="book-meta__list">
			<?php foreach ($data as $row) : ?>
				<li class="book-meta__item">
					<span class="book-meta__label"><?php echo $row['label']; ?></span>
					<span class="book-meta__value"><?php echo $row['value']; ?></span>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
<?php
endif;
