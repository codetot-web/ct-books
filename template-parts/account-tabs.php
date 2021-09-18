<?php
/**
 * Account Tabs UI
 */
$data = wp_parse_args($args, []);

$css_class ='account-tabs';
$css_class .= !empty($data['className']) ? ' ' . esc_html($data['className']) : '';

if (!empty($data['items'])) : ?>
	<div class="<?php echo $css_class; ?>">
		<div class="account-tabs__header">
			<?php foreach ($data['items'] as $nav_item) : ?>
				<a class="account-tabs__header__item" href="#<?php echo $nav_item['id']; ?>"><?php echo $nav_item['title']; ?></a>
			<?php endforeach; ?>
			<span class="account-tabs__line"></span>
		</div>
		<div class="account-tabs__content">
			<?php foreach ($data['items'] as $tab_content) : ?>
				<div class="account-tabs__tab-panel" id="<?php echo $tab_content['id']; ?>">
					<?php echo $tab_content['content']; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
<?php endif;
