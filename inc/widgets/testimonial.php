<?php

namespace BULDUZER\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( !defined( 'ABSPATH' ) ) exit;

class testimonial extends Widget_Base {

	public function get_name() {
		return 'testimonial';
	}

	public function get_title() {
		return 'دیدگاه';
	}

	public function get_icon() {
		return 'eicon-blockquote';
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
        
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'testimonial_image',
			[
				'label' => 'انتخاب تصویر',
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$repeater->add_control(
			'testimonial_name', [
				'label' => 'نام مشتری',
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'نام مشتری',
				'label_block' => true,
			]
		);

        $repeater->add_control(
			'testimonial_jobtitle', [
				'label' => 'حرفه',
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'حرفه',
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'testimonial_content', [
				'label' => 'توضیحات',
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => 'توضیحات',
				'show_label' => false,
			]
		);

        $this->add_control(
			'testimonial',
			[
				'label' => 'دیدگاه مشتریان',
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
                        'testimonial_image' => '',
						'testimonial_name' => 'نام مشتری',
						'testimonial_jobtitle' => 'حرفه',
						'testimonial_content' => 'توضیحات',
					],
				],
				'title_field' => '{{{ testimonial_name }}}',
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'section_style',
			[
				'label' => 'استایل',
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
					'{{WRAPPER}} .testimonial .testimonial-item span' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'label' => 'تایپوگرافی توضیحات',
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .testimonial .testimonial-item span',
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => 'رنگ عنوان',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#fdbe33',
				'selectors' => [
					'{{WRAPPER}} .testimonial .testimonial-item h3' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => 'تایپوگرافی عنوان',
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .testimonial .testimonial-item h3',
			]
		);

		$this->add_control(
			'jobtitle_color',
			[
				'label' => 'رنگ متن شغل',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .testimonial .testimonial-item h4' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'jobtitle_typography',
				'label' => 'تایپوگرافی متن شغل',
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .testimonial .testimonial-item h4',
			]
		);

        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display(); ?>
		<div class="testimonial wow fadeIn" data-wow-delay="0.1s">
        <?php if ( $settings['testimonial'] ) { ?>
            <div class="owl-carousel testimonials-carousel">
			<?php foreach ( $settings['testimonial'] as $item ) { ?>
				<div class="testimonial-item">
					<div class="testimonial-slider-nav">
						<div class="slider-nav"><img src="<?php echo $item['testimonial_image']['url']; ?>"></div>
					</div>
					<span style="color:<?php $settings['description_color']; ?>"><?php echo $item['testimonial_content'] ?></span>
					<h3 style="color:<?php $settings['title_color']; ?>"><?php echo $item['testimonial_name'] ?></h3>
					<h4 style="color:<?php $settings['jobtitle_color']; ?>"><?php echo $item['testimonial_jobtitle'] ?></h4>
				</div>
			<?php } ?>
        </div> <?php
		} ?>
        </div> <?php
	}

}