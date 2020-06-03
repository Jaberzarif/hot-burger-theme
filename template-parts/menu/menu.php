<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo esc_url(home_url('/')) ?>">
  <?php 
   $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>
  <img class="logo" src="<?php echo $image[0]; ?>" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background:transparent !important">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'menu-1',
      'menu_id'        => 'primary-menu',
      'menu_class'     =>  'navbar-nav mr-auto',
      'walker' => new HOTBURGER_MENU_WALKER()
    ));
    ?>
    <div class="form-inline my-2 mx-2 my-lg-0">
      <form id="searchform" method="get" action="<?php echo esc_url(home_url('/')) ?>">
        <input class="search" type="search" name="s" placeholder="search product" />
      </form>
    </div>

    <div class="form-inline my-2 my-lg-0">
      <?php 
      if (class_exists('WooCommerce')) {
      ?>
      <a href="<?php echo get_link_login(); ?>" class="btn btn-gold my-2 my-sm-0"><?php esc_html_e('My Account', 'woocommerce'); ?></a>
      <a href="<?php echo get_link_cart(); ?>" class="btn btn-white my-2 my-sm-0"><i class="fas fa-shopping-bag"></i> <?php esc_html_e('Cart', 'woocommerce'); ?></a>
      <?php }?>
    </div>

  </div>


</nav>