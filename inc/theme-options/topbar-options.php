<?php

	/* ========================================================= */
	/*                  START TOPBAR THEME OPTIONS               */
	/* ========================================================= */
	
	$wp_customize->add_section('bulduzer_topbar_theme_section', array(
		'title' 	=> 'تنظیمات نوار بالا',
		'panel' 	=> 'bulduzer_theme_options_panel',
		'priority' 	=> 10,
	));
	
	/* =============== START TOPBAR COLOR SETTING ============== */
	
	$wp_customize->add_setting('bulduzer_topbar_back_color', array(
		'default'   => '#fdbe33',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bulduzer_topbar_back_color', 
		array(
			'label'      => 'رنگ پس زمینه نوار بالا',
			'section'    => 'bulduzer_topbar_theme_section',
			'settings'   => 'bulduzer_topbar_back_color',
		) ) 
	);

    /* ================ END TOPBAR COLOR SETTING =============== */

    /* =============== START NAVBAR COLOR SETTING ============== */
	
	$wp_customize->add_setting('bulduzer_navbar_back_color', array(
		'default'   => '#030f27',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bulduzer_navbar_back_color', 
		array(
			'label'      => 'رنگ پس زمینه نوار منو',
			'section'    => 'bulduzer_topbar_theme_section',
			'settings'   => 'bulduzer_navbar_back_color',
		) ) 
	);

    /* ================ END NAVBAR COLOR SETTING =============== */

    /* =============== START TOPBAR BOX1 SETTING ============== */
	
	$wp_customize->add_setting( 'bulduzer_topbar_boxone_display', array(
        'capability' => 'edit_theme_options',
        'default' => 'yes',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'bulduzer_topbar_boxone_display', array(
        'id'=> 'bulduzer_radio',
        'type' => 'radio',
        'section' => 'bulduzer_topbar_theme_section',
        'label' => 'نمایش/عدم نمایش جعبه اول',
        'choices' => array(
            'yes' => 'نمایش',
            'no' => 'مخفی',
        ),
    ) );

    $wp_customize->add_setting('bulduzer_topbar_boxone_icon', array(
		'default'   => 'flaticon-calendar',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_topbar_boxone_icon', array(
        'id'=> 'bulduzer_topbar_boxone_icon',
        'label' => 'آیکن جعبه اول:',
        'description' => 'از <a href="https://fontawesome.com/v5.15/icons">آیکن‌های fontawesome</a> استفاده کنید',
        'section' => 'bulduzer_topbar_theme_section',
		'settings'	=> 'bulduzer_topbar_boxone_icon',
    ) );
	
	$wp_customize->add_setting('bulduzer_topbar_boxone_title', array(
		'default'   => 'ساعت کاری',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_topbar_boxone_title', array(
        'id'=> 'bulduzer_topbar_boxone_title',
        'label' => 'عنوان جعبه اول:',
        'section' => 'bulduzer_topbar_theme_section',
		'settings'	=> 'bulduzer_topbar_boxone_title',
    ) );

    $wp_customize->add_setting('bulduzer_topbar_boxone_desc', array(
		'default'   => 'شنبه تا چهارشنبه، ۸:۰۰ - ۱۷:۰۰',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_topbar_boxone_desc', array(
        'id'=> 'bulduzer_topbar_boxone_desc',
        'label' => 'توضیحات جعبه اول:',
        'section' => 'bulduzer_topbar_theme_section',
		'settings'	=> 'bulduzer_topbar_boxone_desc',
    ) );

    /* ================ END TOPBAR BOX1 SETTING =============== */

    /* =============== START TOPBAR BOX2 SETTING ============== */
	
	$wp_customize->add_setting( 'bulduzer_topbar_boxtwo_display', array(
        'capability' => 'edit_theme_options',
        'default' => 'yes',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'bulduzer_topbar_boxtwo_display', array(
        'id'=> 'bulduzer_radio',
        'type' => 'radio',
        'section' => 'bulduzer_topbar_theme_section',
        'label' => 'نمایش/عدم نمایش جعبه دوم',
        'choices' => array(
            'yes' => 'نمایش',
            'no' => 'مخفی',
        ),
    ) );

    $wp_customize->add_setting('bulduzer_topbar_boxtwo_icon', array(
		'default'   => 'flaticon-call',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_topbar_boxtwo_icon', array(
        'id'=> 'bulduzer_topbar_boxtwo_icon',
        'label' => 'آیکن جعبه دوم:',
        'description' => 'از <a href="https://fontawesome.com/v5.15/icons">آیکن‌های fontawesome</a> استفاده کنید',
        'section' => 'bulduzer_topbar_theme_section',
		'settings'	=> 'bulduzer_topbar_boxtwo_icon',
    ) );
	
	$wp_customize->add_setting('bulduzer_topbar_boxtwo_title', array(
		'default'   => 'تماس بگیرید',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_topbar_boxtwo_title', array(
        'id'=> 'bulduzer_topbar_boxtwo_title',
        'label' => 'عنوان جعبه دوم:',
        'section' => 'bulduzer_topbar_theme_section',
		'settings'	=> 'bulduzer_topbar_boxtwo_title',
    ) );

    $wp_customize->add_setting('bulduzer_topbar_boxtwo_desc', array(
		'default'   => '+۹۱۲۳۴۵۶۷۸۹',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_topbar_boxtwo_desc', array(
        'id'=> 'bulduzer_topbar_boxtwo_desc',
        'label' => 'توضیحات جعبه دوم:',
        'section' => 'bulduzer_topbar_theme_section',
		'settings'	=> 'bulduzer_topbar_boxtwo_desc',
    ) );

    /* ================ END TOPBAR BOX2 SETTING =============== */

    /* =============== START TOPBAR BOX3 SETTING ============== */
	
	$wp_customize->add_setting( 'bulduzer_topbar_boxthree_display', array(
        'capability' => 'edit_theme_options',
        'default' => 'yes',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'bulduzer_topbar_boxthree_display', array(
        'id'=> 'bulduzer_radio',
        'type' => 'radio',
        'section' => 'bulduzer_topbar_theme_section',
        'label' => 'نمایش/عدم نمایش جعبه سوم',
        'choices' => array(
            'yes' => 'نمایش',
            'no' => 'مخفی',
        ),
    ) );

    $wp_customize->add_setting('bulduzer_topbar_boxthree_icon', array(
		'default'   => 'flaticon-send-mail',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_topbar_boxthree_icon', array(
        'id'=> 'bulduzer_topbar_boxthree_icon',
        'label' => 'آیکن جعبه سوم:',
        'description' => 'از <a href="https://fontawesome.com/v5.15/icons">آیکن‌های fontawesome</a> استفاده کنید',
        'section' => 'bulduzer_topbar_theme_section',
		'settings'	=> 'bulduzer_topbar_boxthree_icon',
    ) );
	
	$wp_customize->add_setting('bulduzer_topbar_boxthree_title', array(
		'default'   => 'ارسال ایمیل',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_topbar_boxthree_title', array(
        'id'=> 'bulduzer_topbar_boxthree_title',
        'label' => 'عنوان جعبه سوم:',
        'section' => 'bulduzer_topbar_theme_section',
		'settings'	=> 'bulduzer_topbar_boxthree_title',
    ) );

    $wp_customize->add_setting('bulduzer_topbar_boxthree_desc', array(
		'default'   => 'info@example.com',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_topbar_boxthree_desc', array(
        'id'=> 'bulduzer_topbar_boxthree_desc',
        'label' => 'توضیحات جعبه سوم:',
        'section' => 'bulduzer_topbar_theme_section',
		'settings'	=> 'bulduzer_topbar_boxthree_desc',
    ) );

    /* ================ END TOPBAR BOX3 SETTING =============== */

    /* ========================================================= */
	/*                   END TOPBAR THEME OPTIONS                */
	/* ========================================================= */