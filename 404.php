<?php
/**
 * Template for displaying 404 page
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package my_wp_theme
 */

get_header();
?>

	<main id="primary" class="l-constrained">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( '404 - Page Not Found', 'my-wp-theme' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'Sorry, but the page you requested has not been found.', 'my-wp-theme' ); ?></p>
        <p><?php esc_html_e( 'If you entered a web address, please make sure it is spelled and formatted correctly in the address bar of your browser.', 'my-wp-theme' ); ?></p>
        <p><?php esc_html_e( 'You can also try search or use  below categories to find what you are looking for. ', 'my-wp-theme' ); ?></p>

					<?php get_search_form();?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Categories', 'my-wp-theme' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

				

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
