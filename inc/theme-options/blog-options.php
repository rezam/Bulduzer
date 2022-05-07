<?php

	/* ========================================================= */
	/*                    START WOO THEME OPTIONS                */
	/* ========================================================= */
	
	$wp_customize->add_section('bulduzer_blog_theme_section', array(
		'title' 	=> 'تظیمات وبلاگ',
		'panel' 	=> 'bulduzer_theme_options_panel',
		'priority' 	=> 10,
	));
	
	/* =============== START ONSALE TEXT SETTING ============== */

    $wp_customize->add_setting( 'bulduzer_blog_thumbnail_display', array(
        'capability' => 'edit_theme_options',
        'default' => 'yes',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'bulduzer_blog_thumbnail_display', array(
        'id'=> 'bulduzer_radio',
        'type' => 'radio',
        'section' => 'bulduzer_blog_theme_section',
        'label' => 'نمایش/عدم نمایش تصویر شاخص',
        'choices' => array(
            'yes' => 'نمایش',
            'no' => 'مخفی',
        ),
    ) );