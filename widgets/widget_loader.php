<?php

function  Hot_Burger_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Main Sidebar', 'Hot_Burger'),
        'id'            => 'main-sidebar',
        'description'   => esc_html__('All the widgets of the first sidebar here: main sidebar.', 'Hot_Burger'),
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action('widgets_init', 'Hot_Burger_widgets_init');


function Hot_Burger_footer_1_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Footer Sidebar Left', 'Hot_Burger'),
        'id'            => 'sidebar-footer-1',
        'description'   => esc_html__('All the widgets of the first sidebar here: Footer Sidebar Left', 'Hot_Burger'),
        'before_widget' => '<!-- Footer Widget 1 --><div class="footer-widget-left">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action('widgets_init', 'Hot_Burger_footer_1_widgets_init');

function Hot_Burger_footer_2_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Footer Sidebar Center', 'Hot_Burger'),
        'id'            => 'sidebar-footer-2',
        'description'   => esc_html__('All the widgets of the first sidebar here: Footer Sidebar Center', 'Hot_Burger'),
        'before_widget' => '<!-- Footer Widget 2 --><div class="footer-widget-center">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action('widgets_init', 'Hot_Burger_footer_2_widgets_init');

function Hot_Burger_footer_3_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Footer Sidebar Right', 'Hot_Burger'),
        'id'            => 'sidebar-footer-3',
        'description'   => esc_html__('All the widgets of the first sidebar here: Footer Sidebar Right', 'Hot_Burger'),
        'before_widget' => '<!-- Footer Widget 3 --><div class="footer-widget-right">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action('widgets_init', 'Hot_Burger_footer_3_widgets_init');

// Footer Widgets
require 'single-widget/widget_footer_left.php';
