<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hot_Burger
 */

?>
</div>
<!-- Footer -->
<section id="footer">
  <div class="container">
    <div class="row text-center text-xs-center text-sm-left text-md-left">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5 class="footer-title">Hot Burger Info</h5>
        <ul class="list-unstyled quick-links">
          <?php dynamic_sidebar('sidebar-footer-1'); ?>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5 class="footer-title">My Hot Burger</h5>
        <ul class="list-unstyled quick-links">
          <?php dynamic_sidebar('sidebar-footer-2'); ?>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5 class="footer-title">Quick links</h5>
        <ul class="list-unstyled quick-links">
          <?php dynamic_sidebar('sidebar-footer-3'); ?>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
        <ul class="list-unstyled list-inline social text-center">
          <li class="list-inline-item"><a href="<?php echo $GLOBALS['hotBurger']['Facebook']; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
          <li class="list-inline-item"><a href="<?php echo $GLOBALS['hotBurger']['Twitter']; ?>" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
          <li class="list-inline-item"><a href="<?php echo $GLOBALS['hotBurger']['Instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="<?php echo $GLOBALS['hotBurger']['Youtube']; ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
      </hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
        <p class="h6">&copy <?php echo date("Y"); ?> | <?php bloginfo( 'name' ); ?> - All right Reversed.
        </p>
      </div>
      </hr>
    </div>
  </div>
</section>
<!-- ./Footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>