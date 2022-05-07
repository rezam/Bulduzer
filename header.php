<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bulduzer
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
		<?php wp_head(); ?>

    </head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar" style="background:<?php if (get_theme_mod( 'bulduzer_topbar_back_color' )) : echo get_theme_mod( 'bulduzer_topbar_back_color'); else: echo '#fdbe33'; endif; ?> !important;">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="<?php echo get_site_url(); ?>" class="navbar-brand">
                                    <h1>
                                        <?php bloginfo( 'name' ); ?>
                                    </h1>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                            <?php if ( ( get_theme_mod( 'bulduzer_topbar_boxone_display' ) == '' ) || ( get_theme_mod( 'bulduzer_topbar_boxone_display' ) == 'yes' ) ) : ?>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="<?php if (get_theme_mod( 'bulduzer_topbar_boxone_icon' )) : echo get_theme_mod( 'bulduzer_topbar_boxone_icon'); else: echo 'flaticon-calendar'; endif; ?>"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3><?php if (get_theme_mod( 'bulduzer_topbar_boxone_title' )) : echo get_theme_mod( 'bulduzer_topbar_boxone_title'); else: echo 'ساعت کاری'; endif; ?></h3>
                                            <p><?php if (get_theme_mod( 'bulduzer_topbar_boxone_desc' )) : echo get_theme_mod( 'bulduzer_topbar_boxone_desc'); else: echo 'شنبه تا چهارشنبه، ۸:۰۰ - ۱۷:۰۰'; endif; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ( ( get_theme_mod( 'bulduzer_topbar_boxtwo_display' ) == '' ) || ( get_theme_mod( 'bulduzer_topbar_boxtwo_display' ) == 'yes' ) ) : ?>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="<?php if (get_theme_mod( 'bulduzer_topbar_boxtwo_icon' )) : echo get_theme_mod( 'bulduzer_topbar_boxtwo_icon'); else: echo 'flaticon-call'; endif; ?>"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3><?php if (get_theme_mod( 'bulduzer_topbar_boxtwo_title' )) : echo get_theme_mod( 'bulduzer_topbar_boxtwo_title'); else: echo 'تماس بگیرید'; endif; ?></h3>
                                            <p><?php if (get_theme_mod( 'bulduzer_topbar_boxtwo_desc' )) : echo get_theme_mod( 'bulduzer_topbar_boxtwo_desc'); else: echo '+9123456789'; endif; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ( ( get_theme_mod( 'bulduzer_topbar_boxthree_display' ) == '' ) || ( get_theme_mod( 'bulduzer_topbar_boxthree_display' ) == 'yes' ) ) : ?>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="<?php if (get_theme_mod( 'bulduzer_topbar_boxthree_icon' )) : echo get_theme_mod( 'bulduzer_topbar_boxthree_icon'); else: echo 'flaticon-send-mail'; endif; ?>"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3><?php if (get_theme_mod( 'bulduzer_topbar_boxthree_title' )) : echo get_theme_mod( 'bulduzer_topbar_boxthree_title'); else: echo 'ارسال ایمیل'; endif; ?></h3>
                                            <p><?php if (get_theme_mod( 'bulduzer_topbar_boxthree_desc' )) : echo get_theme_mod( 'bulduzer_topbar_boxthree_desc'); else: echo 'info@example.com'; endif; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar" style="background:<?php if (get_theme_mod( 'bulduzer_topbar_back_color' )) : echo get_theme_mod( 'bulduzer_topbar_back_color'); else: echo '#fdbe33'; endif; ?> !important;">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background:<?php if (get_theme_mod( 'bulduzer_navbar_back_color' )) : echo get_theme_mod( 'bulduzer_navbar_back_color'); else: echo '#030f27'; endif; ?> !important;">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="منوی اصلی">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <?php

                        wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-1',
                            'menu_class'      => 'navbar-nav ml-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );

                        ?>
                        <?php if ( ( get_theme_mod( 'bulduzer_woo_account_menu_display' ) == '' ) || ( get_theme_mod( 'bulduzer_woo_account_menu_display' ) == 'yes' ) ) : ?>
                        <button class="navbar-toggler account" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-controls="bs-example-navbar-collapse-2" aria-expanded="false" aria-label="حساب کاربری">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                        <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'account-menu',
                            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'bs-example-navbar-collapse-2',
                            'menu_class'      => 'navbar-nav mr-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
                        <?php endif; ?>
                        <?php if ( ( get_theme_mod( 'bulduzer_woo_basket_icon_display' ) == '' ) || ( get_theme_mod( 'bulduzer_woo_basket_icon_display' ) == 'yes' ) ) : ?>
                        <div class="woo-bar">
                            <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
        
                            $count = WC()->cart->cart_contents_count;
                            ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php 'مشاهده سبد خرید'; ?>"><i class="<?php if (get_theme_mod( 'bulduzer_woo_basket_icon' )) : echo get_theme_mod( 'bulduzer_woo_basket_icon'); else: echo 'fas fa-shopping-basket'; endif; ?> fa-lg"></i><?php 
                            if ( $count > 0 ) {
                                ?>
                                <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
                                <?php
                            }
                                ?></a>

                            <?php } ?>
                        </div>
                        <?php endif; ?>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->