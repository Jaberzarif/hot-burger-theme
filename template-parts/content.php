<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BossFight_Gaming
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();
		
		$defaults = array(
			'before'           => '<div class="page-navigation">',
			'after'            => '</div>',
			'link_before'      => '',
			'link_after'       => '',
			'next_or_number'   => 'next',
			'separator'        => '',
			'nextpagelink'     => esc_html__('Next', 'hot-burger'),
			'previouspagelink' => esc_html__('Back', 'hot-burger'),
			'pagelink'         => '%',
			'echo'             => 1
		);
		wp_link_pages($defaults);
		
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->