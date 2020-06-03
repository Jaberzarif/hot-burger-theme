<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hot_Burger
 */

get_header();
?>

<div id="primary" class="container">
	<div class="row">
		<div class="col-xs-8 col-sm-8">
			<div class="flex border-bottom mt-4 mb-2">
				<div>
					<?php
					// Get author's display name
					$author_id = $post->post_author;
					$author_name = get_the_author_meta('display_name', $author_id);
					if (empty($author_name)) {
						$author_name = get_the_author_meta('nickname');
					}
					?>
					<strong><span>By</span></strong>
					<span><a class="" href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>"></a><?php echo $author_name; ?></span>
				</div>
				<div class="info-item">
					| <strong> Date:</strong> <?php echo get_the_date("d/m/Y", $id) ?>
				</div>
			</div>
			<?php
			while (have_posts()) :
				the_post();
				get_template_part('template-parts/content');

			endwhile;
			?>
			<?php
			wp_reset_query();
			?>
		</div>
		<div class="col-xs-4 col-sm-4">
			<aside id="secondary" class="widget-area">
				<?php dynamic_sidebar('sidebar-1'); ?>
			</aside><!-- #secondary -->
		</div>
	</div><!-- #main -->
</div>
<?php
get_footer();
