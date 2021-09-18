<?php if ( is_user_logged_in() ) : ?>
	<div class="account-section-content account-section-content--rented_books">
		<?php get_template_part('template-parts/account-tabs', '', array(
			'className' => 'account-tabs--books',
			'items' => ct_bones_get_account_books_tabs()
		)); ?>
	</div>
<?php endif; ?>
