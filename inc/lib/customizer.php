<?php
/**
 * Hot Burger Theme Customizer
 *
 * @package Hot Burger
 */

function hot_burger_customizer_scripts() {
    wp_enqueue_style( 'hot-burger-customize',get_template_directory_uri().'/customizer/css/customize.css', '', 'screen' );
    wp_enqueue_script( 'hot-burger-customize', get_template_directory_uri() . '/customizer/js/customize.js', array( 'jquery' ), '20170404', true );
}
add_action( 'customize_controls_enqueue_scripts', 'hot_burger_customizer_scripts' );
