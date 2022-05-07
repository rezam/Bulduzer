<?php

	/* ========================================================= */
	/*                   START FONT THEME OPTIONS                */
	/* ========================================================= */
	
	$wp_customize->add_section('bulduzer_font_theme_section', array(
		'title' 	=> 'تنظیمات تایپوگرافی',
		'panel' 	=> 'bulduzer_theme_options_panel',
		'priority' 	=> 10,
	));
	
	/* =============== START FOOTER COL SETTING ============== */
	
	$wp_customize->add_setting('bulduzer_font_select', array(
		'default'   => 'irenyekan',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_control( 'bulduzer_font_select', array(
        'type' => 'select',
        'section' => 'bulduzer_font_theme_section',
        'label' => 'فونت اصلی وبسایت',
        'choices' => array(
          'IRANYekan'       => 'ایران یکان',
          'gandom'          => 'گندم',
          'nahid'           => 'ناهید',
          'parastoo'        => 'پرستو',
          'sahel'           => 'ساحل',
          'samim'           => 'صمیم',
          'shabnam'         => 'شبنم',
          'tanha'           => 'تنها',
          'vazir'           => 'وزیر',
        ),
      ) );

    /* ================ END FOOTER COL SETTING =============== */

    /* ========================================================= */
	/*                    END FONT THEME OPTIONS                 */
	/* ========================================================= */