<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}


if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);
?>

<div class="singleProductContent">

    <div class="topImg">
        <?php
            // if ( $product->get_image_id() ) {
            //     $html = wc_get_gallery_image_html( $post_thumbnail_id, true );
            // } else {
            //     $html .= sprintf( '<img src="%s" alt="%s" class="" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
            // }

            // echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

            // do_action( 'woocommerce_product_thumbnails' );
		?>
    </div>
    
    
    <?php the_title( '<h1 class="text-center titleTop">', '</h1>' ); ?>

    <div class="text-center pb-1 mx-5">
	    <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
    </div>


    <div class="middleProduct mx-5">
        
        <h1 class="text-center titleTop">Informations complémentaires</h1>

        <div class="detailsProduct">
            <div class="nbDocument pl-5">Nombres de documents : <?php echo $product->get_virtual(); ?></div>

            <div class="priceProduct pr-5">Prix: <?php echo $product->get_price_html(); ?></div>
        </div>

        <div class="addToCartDiv">

            <?php do_action( 'woocommerce_single_product_summary' ); ?>
        
        </div>
    </div>

    <div class="bottomProduct">

    <h1 class="text-center titleTop">Quelques Avis</h1>

        <?php //do_action( 'woocommerce_after_single_product_summary' ); ?>

    </div>

</div>