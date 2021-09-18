<?php
$allowed_views = array('books', 'account');
$account_menu_items = apply_filters('ct_books_account_menu_items', ct_books_get_account_menu_items());
$view = !empty($_GET['view']) && in_array($_GET['view'], $allowed_views) ? sanitize_key($_GET['view']) : '';

if (is_user_logged_in()) :
?>

	<div class="account-section">
		<div class="account-section__sidebar">
			<p class="account-section__sidebar__title"><?php esc_html_e('Navigation', 'ct-books'); ?></p>
			<ul class="account-section__menu">
				<?php foreach ($account_menu_items as $menu_item) : ?>
					<li class="account-section__menu__item<?php if (isset($menu_item['is_active']) && $menu_item['is_active']) : ?> is-active<?php endif; ?>">
						<a class="account-section__menu__link" href="<?php echo $menu_item['url']; ?>"><?php echo $menu_item['title']; ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="account-section__main">
			<?php
			if (empty($view)) :
				get_template_part('template-parts/account-section-dashboard');
			else :
				get_template_part('template-parts/account-section', $view);
			endif;
			?>
		</div>
	</div>
<?php endif; ?>
