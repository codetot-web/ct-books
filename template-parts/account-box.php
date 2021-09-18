<?php
$data = wp_parse_args($args, array());

if (!empty($data['title']) && !empty($data['content']) ) :
?>
	<div class="account-box">
		<p class="account-box__title"><?php echo esc_html($data['title']); ?></p>
		<p class="account-box__content"><?php echo sanitize_text_field($data['content']); ?></p>
		<?php if (!empty($data['button_text']) && !empty($data['button_url'])) : ?>
			<p class="account-box__cta">
				<a class="account-box__button" href="<?php echo esc_url($data['button_url']); ?>"><?php echo esc_html($data['button_text']); ?></a>
			</p>
		<?php endif; ?>
	</div>
<?php endif; ?>
