<?php
$account_boxes = array(get_current_user_id());

if (!empty($account_boxes)) :
?>

	<div class="account-section-dashboard">
		<div class="account-section-dashboard__grid">
			<?php foreach ($account_boxes as $account_box) : ?>
				<div class="account-section-dashboard__col">
					<?php get_template_part('template-parts/account-box', '', $account_box); ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
<?php endif; ?>
