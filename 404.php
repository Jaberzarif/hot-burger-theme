<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Hot_Burger
 */
get_header();
?>

	<div class="container">

		<section class="error-404 not-found">
			<div class="page-header center">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'your-best-fast-food' ); ?></h1>
				<img class="center" src="<?php echo get_template_directory_uri() ?>/style/img/404.png" alt="404"/>
			</div><!-- .page-header -->

			<div class="page-content center">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'your-best-fast-food' ); ?></p>

					<?php
					get_search_form();

					?>
			</div><!-- .page-content -->
			<div class="col-md-4">
		</section><!-- .error-404 -->

	</div><!-- #main -->

<?php
get_footer();
