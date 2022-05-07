<?php

	/* ========================================================= */
	/*                   START COLOR THEME OPTIONS               */
	/* ========================================================= */
	
	$wp_customize->add_section('bulduzer_color_theme_section', array(
		'title' 	=> 'تظیمات رنگبندی',
		'panel' 	=> 'bulduzer_theme_options_panel',
		'priority' 	=> 10,
	));
	
	/* =============== START MAIN COLOR SETTING ============== */
	
	$wp_customize->add_setting('bulduzer_main_color', array(
		'default'   => '#fdbe33',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bulduzer_main_color', 
		array(
			'label'      => 'رنگ اولیه',
			'section'    => 'bulduzer_color_theme_section',
			'settings'   => 'bulduzer_main_color',
		) ) 
	);

    /* ================ END MAIN COLOR SETTING =============== */

    /* =============== START SEC COLOR SETTING ============== */
	
	$wp_customize->add_setting('bulduzer_sec_color', array(
		'default'   => '#030f27',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bulduzer_sec_color', 
		array(
			'label'      => 'رنگ دوم',
			'section'    => 'bulduzer_color_theme_section',
			'settings'   => 'bulduzer_sec_color',
		) ) 
	);

    /* ================ END SEC COLOR SETTING =============== */

	/* ============== START ONSALE COLOR SETTING ============ */

	$wp_customize->add_setting('bulduzer_onsale_color', array(
		'default'   => '#fdbe33',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bulduzer_onsale_color', 
		array(
			'label'      => 'رنگ نشان فروش ویژه',
			'section'    => 'bulduzer_color_theme_section',
			'settings'   => 'bulduzer_onsale_color',
		) ) 
	);

	/* =============== END ONSALE COLOR SETTING ============= */

	/* ============== START BUTTON COLOR SETTING ============ */

	$wp_customize->add_setting('bulduzer_basketbtn_color', array(
		'default'   => '#515151',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bulduzer_basketbtn_color', 
		array(
			'label'      => 'رنگ متن دکمه افزودن به سبد خرید محصول',
			'section'    => 'bulduzer_color_theme_section',
			'settings'   => 'bulduzer_basketbtn_color',
		) ) 
	);

	$wp_customize->add_setting('bulduzer_back_basketbtn_color', array(
		'default'   => '#ebe9eb',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bulduzer_back_basketbtn_color', 
		array(
			'label'      => 'رنگ پس‌زمینه دکمه افزودن به سبد خرید محصول',
			'section'    => 'bulduzer_color_theme_section',
			'settings'   => 'bulduzer_back_basketbtn_color',
		) ) 
	);

	/* =============== END BUTTON COLOR SETTING ============= */

	/* ============== START PRICE COLOR SETTING ============= */

	$wp_customize->add_setting('bulduzer_price_color', array(
		'default'   => '#fdbe33',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bulduzer_price_color', 
		array(
			'label'      => 'رنگ قیمت محصول',
			'section'    => 'bulduzer_color_theme_section',
			'settings'   => 'bulduzer_price_color',
		) ) 
	);

	/* =============== END PRICE COLOR SETTING ============== */

	/* ============== START PRICE COLOR SETTING ============= */

	$wp_customize->add_setting('bulduzer_stock_color', array(
		'default'   => '#515151',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bulduzer_stock_color', 
		array(
			'label'      => 'رنگ عبارت موجودی محصول',
			'section'    => 'bulduzer_color_theme_section',
			'settings'   => 'bulduzer_stock_color',
		) ) 
	);

	/* =============== END PRICE COLOR SETTING ============== */