<?php

namespace BULDUZER\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( !defined( 'ABSPATH' ) ) exit;

class servicebox extends Widget_Base {

	public function get_name() {
		return 'servicebox';
	}

	public function get_title() {
		return 'جعبه خدمات';
	}

	public function get_icon() {
		return 'eicon-tools';
	}

	public function get_categories() {
		return ['bulduzerelementor'];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => 'محتوا',
			]
		);

        $this->add_control(
			'icon',
			[
				'label' => 'آیکن',
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'flaticon-worker',
					'library' => 'solid',
				],
			]
		);

        $this->add_control(
			'title', [
				'label' => 'عنوان',
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'عنوان جعبه',
				'label_block' => true,
			]
		);

        $this->add_control(
			'description', [
				'label' => 'توضیحات',
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => 'توضیحات جعبه',
				'show_label' => false,
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'section_icon_style',
			[
				'label' => 'استایل آیکن',
			]
		);

        $this->add_control(
			'show_icon',
			[
				'label' => 'نمایش آیکن',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => 'بله',
				'label_off' => 'خیر',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'icon_color',
			[
				'label' => 'رنگ آیکن',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .feature-item .feature-icon i' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'icon_size',
			[
				'label' => 'اندازه آیکن',
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'fa-xs'  => 'fa-xs',
					'fa-sm' => 'fa-sm',
					'fa-lg' => 'fa-lg',
					'fa-2x' => 'fa-2x',
					'fa-3x' => 'fa-3x',
                    'fa-5x' => 'fa-5x',
					'fa-7x' => 'fa-7x',
                    'fa-10x' => 'fa-10x',
				],
			]
		);

        $this->add_control(
			'show_icon_effect',
			[
				'label' => 'نمایش دورگیر آیکن',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => 'بله',
				'label_off' => 'خیر',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'section_title_style',
			[
				'label' => 'استایل عنوان',
			]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'title_typography',
                    'label' => 'تایپوگرافی عنوان',
                    'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .feature-text h3',
                ]
            );

            $this->add_control(
                'title_color',
                [
                    'label' => 'رنگ متن',
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => \Elementor\Scheme_Color::get_type(),
                        'value' => \Elementor\Scheme_Color::COLOR_1,
                    ],
                    'default' => '#fff',
                    'selectors' => [
                        '{{WRAPPER}} .feature-text h3' => 'color: {{VALUE}}',
                    ],
                ]
            );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_description_style',
            [
                'label' => 'استایل توضیحات',
            ]
            );

            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'description_typography',
                    'label' => 'تایپوگرافی توضیحات',
                    'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .feature-text p',
                ]
            );

            $this->add_control(
                'description_color',
                [
                    'label' => 'رنگ توضیحات',
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'scheme' => [
                        'type' => \Elementor\Scheme_Color::get_type(),
                        'value' => \Elementor\Scheme_Color::COLOR_1,
                    ],
                    'default' => '#fff',
                    'selectors' => [
                        '{{WRAPPER}} .feature-text p' => 'color: {{VALUE}}',
                    ],
                ]
            );

        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
        <!-- Feature Start-->
        <?php if ( 'yes' != $settings['show_icon_effect'] ) : ?>
            <style>.feature .feature-icon::before, .feature .feature-icon::after {display:none;}</style>
        <?php endif; ?>
        <div class="feature wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="feature-item">
                        <?php if ( 'yes' === $settings['show_icon'] ) : ?>
                            <div class="feature-icon">
                                <?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true', 'class' => $settings['icon_size'] ] ); ?>
                            </div>
                        <?php endif; ?>
                        <div class="feature-text">
                            <h3 style="<?php $setting['title_color']; ?>"><?php echo $settings['title']; ?></h3>
                            <p style="<?php $setting['description_color']; ?>"><?php echo $settings['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->
		<?php
	}

}