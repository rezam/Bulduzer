<?php

namespace BULDUZER\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( !defined( 'ABSPATH' ) ) exit;

class videobox extends Widget_Base {

	public function get_name() {
		return 'videobox';
	}

	public function get_title() {
		return 'جعبه ویدیو';
	}

	public function get_icon() {
		return 'eicon-video-camera';
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
			'video_link', [
				'label' => 'لینک ویدیو یا صفحه',
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '#',
				'label_block' => true,
			]
		);

        $this->add_control(
			'link_action',
			[
				'label' => 'باز شدن لینک',
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'_blank'  => 'پنجره جدید',
					'_self' => 'همین پنجره',
				],
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
			'btn_icon_color',
			[
				'label' => 'رنگ آیکن دکمه',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#030f27',
				'selectors' => [
					'{{WRAPPER}} .video .btn-play span' => 'border-left-color: {{VALUE}}',
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
					'{{WRAPPER}} .video .btn-play:before' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .video .btn-play:after' => 'background-color: {{VALUE}}',
				],
			]
		);
        
        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>

        <!-- Video Start -->
        <div class="video wow fadeIn" data-wow-delay="0.1s">
            <style>.video .btn-play:before,.video .btn-play:after {background-color: <?php echo $settings['btn_backcolor']; ?>}.video .btn-play span{color: <?php echo $settings['btn_icon_color']; ?>}</style>
            <a target="<?php echo $settings['link_action']; ?>" href="<?php echo $settings['video_link']; ?>"><button type="button" class="btn-play"><span></span></button></a>
        </div>

		<?php
	}

}