<?php

/**
 * Hot Burger functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hot_Burger
 */
require 'config/config.php';
if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('your_best_fast_food_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function your_best_fast_food_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Hot Burger, use a find and replace
		 * to change 'your-best-fast-food' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('your-best-fast-food', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'your-best-fast-food'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'your_best_fast_food_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'your_best_fast_food_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function your_best_fast_food_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('your_best_fast_food_content_width', 640);
}
add_action('after_setup_theme', 'your_best_fast_food_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function your_best_fast_food_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'your-best-fast-food'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'your-best-fast-food'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'your_best_fast_food_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function your_best_fast_food_scripts()
{
	wp_enqueue_style('your-best-fast-food-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('your-best-fast-food-style', 'rtl', 'replace');

	// Bootstrap 
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/style/bootstrap/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/style/bootstrap/js/bootstrap.min.js', array('jquery'), '20120206', true);

	wp_enqueue_script('your-best-fast-food-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('your-best-fast-food-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true);
	wp_enqueue_style('custom-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css');
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'your_best_fast_food_scripts');

// Recommend plugins.
add_theme_support('recommend-plugins', array(
	'woocommerce' => array(
		'name' => 'WooCommerce',
		'active_filename' => '/woocommerce/woocommerce.php',
		/* translators: %s plugin name string */
		'description' => sprintf(esc_attr__('To enable shop features, please install and activate the %s plugin.', 'hot-burger'), '<strong>WooCommerce</strong>'),
	),
	'contact-form-7' => array(
		'name' => 'Contact 7',
		'active_filename' => '/contact-form-7/wp-contact-form-7.php',
		/* translators: %s plugin name string */
		'description' => sprintf(esc_attr__('To enable shop features, please install and activate the %s plugin.', 'hot-burger'), '<strong>Contact Form 7</strong>'),
	),
	'classic-editor' => array(
		'name' => 'Classic Editor',
		'active_filename' => '/classic-editor/classic-editor.php',
		/* translators: %s plugin name string */
		'description' => sprintf(esc_attr__('To enable shop features, please install and activate the %s plugin.', 'hot-burger'), '<strong>Classic Editor</strong>'),
	),
));

/**
 * Register Theme Info Page
 */
require_once(trailingslashit(get_template_directory()) . 'inc/lib/dashboard.php');

/**
 * Customizer options
 */
require_once(trailingslashit(get_template_directory()) . 'inc/lib/customizer.php');



if (class_exists('WooCommerce')) {

	/**
	 * WooCommerce options
	 */
	require_once(trailingslashit(get_template_directory()) . 'inc/lib/woocommerce.php');
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


require get_template_directory() . '/widgets/widget_loader.php';
/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// Main Menu 
require_once get_template_directory() . '/inc/menu/custom_menu.php';


function customtheme_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'customtheme_add_woocommerce_support');


// Get the Price 
function get_price_product()
{
	$product = wc_get_product(get_the_ID());
	$thePrice = $product->get_price(); //will give raw price
	return $thePrice . ' ' . get_woocommerce_currency_symbol();
}

// Get Shop Url 
function get_link_shop()
{
	$shop_page_url = get_permalink(woocommerce_get_page_id('shop'));
	return $shop_page_url;
}

// Get Cart url 
function get_link_cart()
{
	global $woocommerce;
	$cart_url = $woocommerce->cart->get_cart_url();
	return $cart_url;
}

// Get My account Url

function get_link_login()
{
	$myaccount_page_id = get_option('woocommerce_myaccount_page_id');
	if ($myaccount_page_id) {
		$myaccount_page_url = get_permalink($myaccount_page_id);
		return $myaccount_page_url;
	}
}

// Get Short description of product
function get_short_product_description()
{
	global $product;

	if (!$product->post->post_excerpt) return;
?>
	<?php return apply_filters('woocommerce_short_description', $product->post->post_excerpt) ?>
<?php
}
add_action('woocommerce_after_shop_loop_item_title', 'get_short_product_description', 1);


//1. Show Buttons
add_action('woocommerce_before_add_to_cart_quantity', 'display_quantity_plus');
function display_quantity_plus()
{
	echo '<button type="button" class="plus" >+</button>';
}


add_action('woocommerce_after_add_to_cart_quantity', 'display_quantity_minus');
function display_quantity_minus()
{
	echo '<button type="button" class="minus" >-</button>';
}

//2. Trigger jQuery script
add_action('wp_footer', 'add_cart_quantity_plus_minus');
function add_cart_quantity_plus_minus()
{
	// Only run this on the single product page
	if (!is_product()) return; ?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('form.cart').on('click', 'button.plus, button.minus', function() {
				// Get current quantity values
				var qty = $(this).closest('form.cart').find('.qty');
				var val = parseFloat(qty.val());
				var max = parseFloat(qty.attr('max'));
				var min = parseFloat(qty.attr('min'));
				var step = parseFloat(qty.attr('step'));
				// Change the value if plus or minus
				if ($(this).is('.plus')) {
					if (max && (max <= val)) {
						qty.val(max);
					} else {
						qty.val(val + step);
					}
				} else {
					if (min && (min >= val)) {
						qty.val(min);
					} else if (val > 1) {
						qty.val(val - step);
					}
				}
			});
		});
	</script>
<?php


function manual_excerpt($id)
{

		if (empty(get_the_excerpt($id))) {
			$content = get_post_field('post_content', $id);
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);
			return mb_substr(wp_strip_all_tags($content), 0, 301);
		}
		return get_the_excerpt($id);
}


// SEO 
function hot_burger_seo_title()
	{
		if (is_home()) {
			echo get_bloginfo('name') . ' - ' . get_bloginfo('description');
		}
		if (is_single()) {

			echo get_bloginfo('name') . ' - ' .   wp_title('', false);
		}
	}
	if (is_page()) {
		echo wp_title(' - ', true, 'right') . ' - ' . bloginfo('name');
	}
	if (is_author()) {
		echo get_bloginfo('name') . ' - Author Page';
	}
	if (is_search()) {
		echo get_bloginfo('name') . ' - Search Page';
	}
	if (is_tag()) {
		$current_tag = single_tag_title("", false);
		echo get_bloginfo('name')  . ' - ' . $current_tag;
	}
	if (is_archive()) {
		echo get_bloginfo('name') . ' - Archieve';
	}
}

function hot_burger_seo_type()
{
	if (is_home()) {
		echo 'website';
	}
	if (is_single()) {
		echo 'article';
	}
}

function hot_burger_seo_image()
{
	if (is_single()) {
		global $wp_query;
		$post_id  = $wp_query->get_queried_object_id();
		return generateThumbnail($post_id);
	} else {
		return '';
	}
}

function hot_burger_seo_description()
{
	if (is_single()) {
		global $wp_query;
		$post_id  = $wp_query->get_queried_object_id();
		echo manual_excerpt($post_id);
	} else {
		echo bloginfo('description');
	}
}

function hot_burger_seo_author()
{
	if (is_single()) {
		$author_name = get_the_author_meta('display_name');
		if (empty($author_name)) {
			$author_name = get_the_author_meta('nickname');
		}
		return $author_name;
	} else {
		echo bloginfo('name');
	}
}

// add product to cart 
function add_to_cart()
{
	$add_to_cart = do_shortcode('[add_to_cart_url id="' . $post->ID . '"]');
	return $add_to_cart;
}