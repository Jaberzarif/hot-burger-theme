<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hot_Burger
 */
global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<div class="col-md-3">
	<div class="card mb-4 box-shadow">
		<div class="card-img-top">
			<?php echo woocommerce_get_product_thumbnail() ?>
		</div>
		<div class="card-body">
			<h4 class="card-text"> <?php echo get_the_title() ?></h4>
			<p> <?php echo get_short_product_description() ?> </p>
			<div class="d-flex justify-content-between align-items-center">
				<div class="btn-group">
					<a href="<?php echo get_permalink(get_the_ID()) ?>" class="btn btn-sm btn-gold">View</a>
				</div>
				<span class="price"><?php echo get_price_product() ?></span>
			</div>
		</div>
	</div>
</div>

