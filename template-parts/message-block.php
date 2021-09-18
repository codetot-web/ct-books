<?php

$data = wp_parse_args($args, []);
$allowed_types = ['error', 'warning', 'success', 'info'];

$css_class = 'message-block';
$css_class .= !empty($data['type']) && in_array($data['type'], $allowed_types) ? ' is-' . $data['type'] : '';
$css_class .= !empty($data['className']) ? ' ' . esc_html($data['className']) : '';

if (!empty($data['type']) && in_array($data['type'], $allowed_types) && !empty($data['message'])) : ?>
	<div class="<?php echo $css_class; ?>">
		<div class="message-block__content"><?php echo sanitize_text_field($data['message']); ?></div>
	</div>
<?php endif;
