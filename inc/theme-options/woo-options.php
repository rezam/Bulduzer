<?php

	/* ========================================================= */
	/*                    START WOO THEME OPTIONS                */
	/* ========================================================= */
	
	$wp_customize->add_section('bulduzer_woo_theme_section', array(
		'title' 	=> 'تظیمات فروشگاه',
		'panel' 	=> 'bulduzer_theme_options_panel',
		'priority' 	=> 10,
	));
	
	/* =============== START ONSALE TEXT SETTING ============== */

    $wp_customize->add_setting('bulduzer_woo_onsale_text', array(
		'default'   => '<span class="onsale">حراج</span>',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_woo_onsale_text', array(
        'id'=> 'bulduzer_woo_onsale_text',
        'label' => 'عنوان برچسب حراج فروشگاه:',
        'section' => 'bulduzer_woo_theme_section',
		'settings'	=> 'bulduzer_woo_onsale_text',
    ) );

    /* ================ END ONSALE TEXT SETTING =============== */

	/* =============== START WOO BASKET SETTING =============== */

	$wp_customize->add_setting( 'bulduzer_woo_basket_icon_display', array(
        'capability' => 'edit_theme_options',
        'default' => 'yes',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'bulduzer_woo_basket_icon_display', array(
        'id'=> 'bulduzer_radio',
        'type' => 'radio',
        'section' => 'bulduzer_woo_theme_section',
        'label' => 'نمایش/عدم نمایش سبد خرید در منو',
        'choices' => array(
            'yes' => 'نمایش',
            'no' => 'مخفی',
        ),
    ) );

    $wp_customize->add_setting('bulduzer_woo_basket_icon', array(
		'default'   => 'fas fa-shopping-basket',
		'transport' => 'refresh',
	));

	$wp_customize->add_control( 'bulduzer_woo_basket_icon', array(
        'id'=> 'bulduzer_woo_basket_icon',
        'label' => 'آیکن سبد خرید:',
        'description' => 'از <a href="https://fontawesome.com/v5.15/icons">آیکن‌های fontawesome</a> استفاده کنید',
        'section' => 'bulduzer_woo_theme_section',
		'settings'	=> 'bulduzer_woo_basket_icon',
    ) );

    /* ================ END WOO BASKET SETTING ================ */

	/* =============== START ACOUNT MENU SETTING ============== */

	$wp_customize->add_setting( 'bulduzer_woo_account_menu_display', array(
        'capability' => 'edit_theme_options',
        'default' => 'yes',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'bulduzer_woo_account_menu_display', array(
        'id'=> 'bulduzer_radio',
        'type' => 'radio',
        'section' => 'bulduzer_woo_theme_section',
        'label' => 'نمایش/عدم نمایش منو حساب کاربری',
        'choices' => array(
            'yes' => 'نمایش',
            'no' => 'مخفی',
        ),
    ) );

	/* =============== START ACOUNT MENU SETTING ============== */

    /* ============= START SIDEBAR POSITION SETTING =========== */

    $wp_customize->add_setting('bulduzer_woo_sidebar_choose', array(
		'default'   => 'shop-right',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_woo_sidebar_choose', array(
        'type' => 'select',
        'section' => 'bulduzer_woo_theme_section',
        'label' => 'انتخاب سایدبار صفحه اصلی فروشگاه',
        'choices' => array(
          'shop-right'  => 'سایدبار راست',
          'shop-left'   => 'سایدبار چپ',
          'no-sidebar'  => 'بدون سایدبار',
        ),
      ) );

    /* ============= END SIDEBAR POSITION SETTING ============ */

    /* ======= START PRODUCT SIDEBAR POSITION SETTING ======== */

    $wp_customize->add_setting('bulduzer_wooproduct_sidebar_choose', array(
		'default'   => 'shop-product-right',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_wooproduct_sidebar_choose', array(
        'type' => 'select',
        'section' => 'bulduzer_woo_theme_section',
        'label' => 'انتخاب سایدبار صفحه محصول',
        'choices' => array(
          'shop-product-right'  => 'سایدبار راست',
          'shop-product-left'   => 'سایدبار چپ',
          'no-sidebar'  => 'بدون سایدبار',
        ),
      ) );

    /* ======== END PRODUCT SIDEBAR POSITION SETTING ========= */

    /* =========== START WOO BTN FONT SIZE SETTING =========== */

    $wp_customize->add_setting('bulduzer_woo_btn_fontsize', array(
		'default'   => '16',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_woo_btn_fontsize', array(
        'id'            => 'bulduzer_woo_btn_fontsize',
        'label'         => 'اندازه فونت متن دکمه‌های فروشگاه:',
        'description'   => 'تنها عدد را به پیکسل وارد کنید (پیش‌فرض 16)',
        'section'       => 'bulduzer_woo_theme_section',
		'settings'      => 'bulduzer_woo_btn_fontsize',
    ) );

    /* =========== START WOO BTN FONT SIZE SETTING =========== */

    /* ============== START ADD TO TEXT SETTING ============== */

    $wp_customize->add_setting('bulduzer_woo_addtocart_text', array(
        'default'   => 'خرید',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control( 'bulduzer_woo_addtocart_text', array(
        'id'            => 'bulduzer_woo_addtocart_text',
        'label'         => 'عبارت جایگزین متن دکمه افزودن به سبد خرید:',
        'section'       => 'bulduzer_woo_theme_section',
        'settings'      => 'bulduzer_woo_addtocart_text',
    ) );

    /* =============== END ADD TO TEXT SETTING ============== */