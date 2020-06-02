<?php


function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_javascript() 
{
    wp_register_script('custom', get_template_directory_uri(). '/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');



// add menus
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('custom-header');

// Register menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'footer-menu' => 'Footer Menu'
    )
);


//Add image sizes
add_image_size('post_image', 1100, 750, true);


// Add woocommerce for BARM Theme Support
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



// // CHANGE PRODUCT IMAGE
// function custom_new_product_image($a) {

//     $class = 'attachment-shop_thumbnail wp-post-image'; // Default cart thumbnail class.
//     $src = [PATH_TO_YOUR_NEW_IMAGE];

//     // Construct your img tag.
//     $a = '<img';
//     $a .= ' src="' . $src . '"';
//     $a .= ' class="' . $class . '"';
//     $a .= 'width=150';
//     $a .= ' />';

//     // Output.
//     return $a;

// }

// add_filter( 'woocommerce_cart_item_thumbnail', 'custom_new_product_image' );