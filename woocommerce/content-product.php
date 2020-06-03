<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<div class="col-sm-4 col-md-6 col-lg-4">
	<div class="card mb-4 box-shadow">
		<div class="card-img-top">
			<a href="<?php echo get_permalink() ?>"><?php echo woocommerce_get_product_thumbnail() ?>
		</div>
		<div class="card-body">
			<a class="product-link" href="<?php echo get_permalink() ?>">
				<h4 class="card-text"> <?php echo get_the_title() ?></h4>
			</a>
			<p> <?php echo get_short_product_description() ?> </p>
			<div class="d-flex justify-content-between align-items-center">
				<div class="btn-group">
					<a href="<?php echo get_permalink(get_the_ID()) ?>" class="btn btn-sm btn-gold"><i class="fas fa-eye"></i></a>
					<a href="<?php echo add_to_cart()?> " class="btn btn-sm btn-gold"><i class="fas fa-shopping-cart"></i></a>
				</div>
				<span class="price"><?php echo get_price_product() ?></span>
			</div>
		</div>
	</div>
</div>