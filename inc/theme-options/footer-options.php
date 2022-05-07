<?php

	/* ========================================================= */
	/*                  START FOOTER THEME OPTIONS               */
	/* ========================================================= */
	
	$wp_customize->add_section('bulduzer_footer_theme_section', array(
		'title' 	=> 'تنظیمات فوتر',
		'panel' 	=> 'bulduzer_theme_options_panel',
		'priority' 	=> 10,
	));
	
	/* =============== START FOOTER COL SETTING ============== */
	
	$wp_customize->add_setting('bulduzer_footer_col', array(
		'default'   => 'fourcol',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_footer_col', array(
        'type' => 'select',
        'section' => 'bulduzer_footer_theme_section',
        'label' => 'تعداد ستون',
        'description' => 'لطفا تعداد ستون فوتر را انتخاب کنید',
        'choices' => array(
          'onecol'      => 'یک ستون',
          'twocol'      => 'دو ستون',
          'threecol'    => 'سه ستون',
          'fourcol'     => 'چهار ستون',
        ),
      ) );

    /* ================ END FOOTER COL SETTING =============== */

    /* ============== START FOOTER COLOR SETTING ============= */
	
	$wp_customize->add_setting('bulduzer_footer_back_color', array(
		'default'   => '#030f27',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 
		new WP_Customize_Color_Control( 
		$wp_customize, 
		'bulduzer_footer_back_color', 
		array(
			'label'      => 'رنگ پس زمینه فوتر',
			'section'    => 'bulduzer_footer_theme_section',
			'settings'   => 'bulduzer_footer_back_color',
		) ) 
	);

    /* =============== END FOOTER COLOR SETTING ============== */
