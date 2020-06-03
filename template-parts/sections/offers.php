<?php
echo'<div class="offers">
        <h1 class="main-content-title">Our offers</h1>
        <div class="container">
            <div class="row">';
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 6,
    'product_cat'    => 'offers'
);

$loop = new WP_Query($args);

while ($loop->have_posts()) : $loop->the_post();
    global $product;
echo '<div class="col-sm-4 col-md-6 col-lg-4">
        <div class="card mb-4 box-shadow">
            <div class="card-img-top">
            <a href="' . get_permalink() . '">' . woocommerce_get_product_thumbnail() . '</a>
            </div>
            <div class="card-body">
                <a class="product-link" href="' . get_permalink() . '"><h4 class="card-text"> ' . get_the_title() . '</h4></a>
                <p>'.get_short_product_description().'</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="' . get_permalink() . '" class="btn btn-sm btn-gold"><i class="fas fa-eye"></i></a>
                        <a href="'.add_to_cart().'" class="btn btn-sm btn-gold"><i class="fas fa-shopping-cart"></i></a>
                    </div>
                    
                <span class="price">'. get_price_product() .'</span>
            </div>
        </div>
    </div>
    </div>';

endwhile;
wp_reset_query();

echo'
</div>
</div>
<div class="center" style="margin-top: 15px; margin-bottom:15px;">
<a href="'.get_home_url().'/product-category/offers/" class="btn btn-gold">See All Offers</a>
</div>';



