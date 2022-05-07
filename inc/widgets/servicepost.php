<?php

namespace BULDUZER\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( !defined( 'ABSPATH' ) ) exit;

class servicepost extends Widget_Base {

	public function get_name() {
		return 'servicepost';
	}

	public function get_title() {
		return 'جعبه خدمات 2';
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
			'box_image',
			[
				'label' => 'انتخاب تصویر',
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
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

        $this->add_control(
			'icon',
			[
				'label' => 'آیکن',
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-plus',
					'library' => 'solid',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => 'استایل کلی',
			]
		);

        $this->add_control(
			'box_effect',
			[
				'label' => 'افکت جعبه',
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'Up'  => 'بالا',
					'Right' => 'راست',
					'Down' => 'پایین',
					'Left' => 'چپ',
					'none' => 'هیچ‌یک',
				],
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => 'استایل عنوان',
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
					'{{WRAPPER}} .service-text h3' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'title_backcolor',
			[
				'label' => 'رنگ پس‌زمینه عنوان',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#030f27',
				'selectors' => [
					'{{WRAPPER}} .service-text' => 'background-color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => 'تایپوگرافی عنوان',
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .service-text h3',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'section_description_style',
			[
				'label' => 'استایل توضیحات',
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
					'{{WRAPPER}} .service-img .service-overlay p' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'description_backcolor',
			[
				'label' => 'رنگ پس‌زمینه توضیحات',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => 'rgba(3, 15, 39, .7)',
				'selectors' => [
					'{{WRAPPER}} .service .service-overlay' => 'background-color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'label' => 'تایپوگرافی توضیحات',
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .service-img .service-overlay p',
			]
		);

        $this->end_controls_section();

		$this->start_controls_section(
			'section_btn_style',
			[
				'label' => 'استایل دکمه',
			]
		);

        $this->add_control(
			'btn_color',
			[
				'label' => 'رنگ آیکن دکمه',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#030f27',
				'selectors' => [
					'{{WRAPPER}} .service-text a' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'btn_backcolor',
			[
				'label' => 'رنگ پس‌زمینه دکمه',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#fdbe33',
				'selectors' => [
					'{{WRAPPER}} .service-text a' => 'background-color: {{VALUE}}',
				],
			]
		);
        
        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
        <!-- Service Start -->
        <div class="service">
			<div class="wow fadeIn<?php echo $settings['box_effect']; ?>" data-wow-delay="0.6s">
				<div class="service-item">
					<div class="service-img">
						<img src="<?php echo $settings['box_image']['url']; ?>" alt="Image">
						<div class="service-overlay">
							<p style="color:<?php $settings['description_color']; ?>;background-color:<?php $settings['description_backcolor']; ?>"><?php echo $settings['description']; ?></p>
						</div>
					</div>
					<div class="service-text">
						<h3 style="color:<?php $settings['title_color']; ?>;background-color:<?php $settings['title_backcolor']; ?>"><?php echo $settings['title']; ?></h3>

						<a class="btn" href="<?php echo $settings['box_image']['url']  ?>" data-lightbox="service" style="color:<?php $settings['btn_color']; ?>;btn-backcolor:<?php $settings['description_backcolor']; ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?></a>

					</div>
				</div>
			</div>
        </div>
        <!-- Service End -->
		<?php
	}

}