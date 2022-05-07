<?php

function woocommerce_custom_sale_text($text, $post, $_product) {
    $onsale_text = "";
    if (get_theme_mod( 'bulduzer_woo_onsale_text' )) : $onsale_text = get_theme_mod( 'bulduzer_woo_onsale_text'); else: $onsale_text = 'حراج'; endif;
	return "<span class='onsale'>" . $onsale_text . "</span>";
}
add_filter('woocommerce_sale_flash', 'woocommerce_custom_sale_text', 10, 3);


function woocommerce_custom_single_add_to_cart_text() {
    $addtocartText = "";
    if (get_theme_mod( 'bulduzer_woo_addtocart_text' )) : $addtocartText = get_theme_mod( 'bulduzer_woo_addtocart_text'); else: $addtocartText = 'افزودن به سبد خرید'; endif;
    return $addtocartText; 
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 

function woocommerce_custom_product_add_to_cart_text() {
    $addtocartText = "";
    if (get_theme_mod( 'bulduzer_woo_addtocart_text' )) : $addtocartText = get_theme_mod( 'bulduzer_woo_addtocart_text'); else: $addtocartText = 'خرید'; endif;
    return $addtocartText; 
}
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  


function color_override() {

    ?>
        <style>
            .woocommerce span.onsale, .elementor .woo-products-one li .onsale {
                background: <?php if (get_theme_mod( 'bulduzer_onsale_color' )) : echo get_theme_mod( 'bulduzer_onsale_color'); else: echo '#fdbe33'; endif; ?>;
            }
            .page .woocommerce a.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover, .elementor .woo-products-one li a.add_to_cart_button {
                color: <?php if (get_theme_mod( 'bulduzer_basketbtn_color' )) : echo get_theme_mod( 'bulduzer_basketbtn_color'); else: echo '#515151'; endif; ?>;
                background: <?php if (get_theme_mod( 'bulduzer_back_basketbtn_color' )) : echo get_theme_mod( 'bulduzer_back_basketbtn_color'); else: echo '#ebe9eb'; endif; ?>
            }
            .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price {
                color: <?php if (get_theme_mod( 'bulduzer_price_color' )) : echo get_theme_mod( 'bulduzer_price_color'); else: echo '#fdbe33'; endif; ?>;
            }
            .woocommerce div.product .stock {
                color: <?php if (get_theme_mod( 'bulduzer_stock_color' )) : echo get_theme_mod( 'bulduzer_stock_color'); else: echo '#515151'; endif; ?>;
            }
            .sidebar .sidebar-widget .widget-title::after, .sidebar .widget.widget_block h2::after, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order,  .elementor .woo-products-one li a.add_to_cart_button:hover {
                background:<?php if (get_theme_mod( 'bulduzer_main_color' )) : echo get_theme_mod( 'bulduzer_main_color'); else: echo '#fdbe33'; endif; ?> !important;
            }
            .woocommerce-info {
                border-top-color:<?php if (get_theme_mod( 'bulduzer_sec_color' )) : echo get_theme_mod( 'bulduzer_sec_color'); else: echo '#030f27'; endif; ?> !important;
            }
            .woocommerce-info::before {
                color: <?php if (get_theme_mod( 'bulduzer_sec_color' )) : echo get_theme_mod( 'bulduzer_sec_color'); else: echo '#030f27'; endif; ?> !important;
            }
            .woocommerce form .form-row.woocommerce-validated .select2-container, .woocommerce form .form-row.woocommerce-validated input.input-text, .woocommerce form .form-row.woocommerce-validated select {
                border-color: <?php if (get_theme_mod( 'bulduzer_sec_color' )) : echo get_theme_mod( 'bulduzer_sec_color'); else: echo '#030f27'; endif; ?> !important;
            }
            .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button {
                font-size: <?php if (get_theme_mod( 'bulduzer_woo_btn_fontsize' )) : echo get_theme_mod( 'bulduzer_woo_btn_fontsize'); else: echo '#fdbe33'; endif; ?>px !important;
            }
        </style>
    <?php

}
add_action( 'wp_head', 'color_override' );