<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php generate_do_element_classes( 'content' ); ?>>
		<main id="main" <?php generate_do_element_classes( 'main' ); ?>>
			<?php
			/**
			 * generate_before_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_before_main_content' );

			if ( generate_has_default_loop() ) {
				if ( have_posts() ) :
					?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
							printf(
								/* translators: 1: Search query name */
								__( 'Search Results for: %s', 'generatepress' ),
								'<span>' . get_search_query() . '</span>'
							);
							?>
						</h1>
					</header>

					<?php

					get_template_part('template-parts/book-search');

					echo '<div class="book-list">';

					while ( have_posts() ) :

						the_post();

						if (!empty($_GET['post_type']) && $_GET['post_type'] === 'book') :

							get_template_part( 'content', 'book');

						else :

							generate_do_template_part( 'search' );

						endif;

					endwhile;

					echo '</div>';

					/**
					 * generate_after_loop hook.
					 *
					 * @since 2.3
					 */
					do_action( 'generate_after_loop', 'search' );

				else :

					generate_do_template_part( 'none' );

				endif;
			}

			/**
			 * generate_after_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_after_main_content' );
			?>
		</main>
	</div>

	<?php
	/**
	 * generate_after_primary_content_area hook.
	 *
	 * @since 2.0
	 */
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

	get_footer();
