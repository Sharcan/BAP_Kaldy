<?php
add_action( 'woocommerce_before_shop_loop', 'barm_forma');
function barm_forma(){
    echo'<center><h2>Acheter une formation</h2></center>';
}


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
add_image_size('post_image', 1100, 550, false);


// Add woocommerce for BARM Theme Support
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

//add a widget

register_sidebar(
    array(
        'name'=>'categories sidebar',
        'id'=>'categories-sidebar',
        'class'=>'',
        'before_title'=> '<h4>',
        'after_title'=>'</h4>',
    )
);


// Custom add_actions

// function test(){
//     echo '<div class="qty">Quantity: </div>';
// }

// add_action('woocommerce_before_add_to_cart_quantity', 'test', 10);
