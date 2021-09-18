<?php
$data = wp_parse_args($args, array());

if (!empty($data['title']) && !empty($data['content']) ) :
?>
	<div class="account-box">
		<p class="account-box__title"><?php echo sanitize_title($data['title']); ?></p>
		<p class="account-box__content"><?php echo sanitize_text_field($data['content']); ?></p>
	</div>
<?php endif; ?>
