<?php

namespace BULDUZER\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( !defined( 'ABSPATH' ) ) exit;

class teambox extends Widget_Base {

	public function get_name() {
		return 'teambox';
	}

	public function get_title() {
		return 'جعبه تیم';
	}

	public function get_icon() {
		return 'eicon-person';
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
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'توضیحات جعبه',
				'label_block' => true,
			]
		);

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'icon',
			[
				'label' => 'آیکن',
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-instagram',
					'library' => 'solid',
				],
			]
		);

        $repeater->add_control(
			'icon_link', [
				'label' => 'لینک شبکه اجتماعی',
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '#',
				'label_block' => true,
			]
		);

        $this->add_control(
			'list',
			[
				'label' => 'لیست آیکن‌ها',
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
                        'icon' => 'fab fa-instagram',
						'icon_link' => '#',
					],
				],
				'title_field' => '{{{ icon_link }}}',
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'section_btn_style',
			[
				'label' => 'استایل',
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
			'section_btn_style',
			[
				'label' => 'استایل متن',
			]
		);

        $this->add_control(
			'title_color',
			[
				'label' => 'رنگ متن عنوان',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#fdbe33',
				'selectors' => [
					'{{WRAPPER}} .team .team-text h2' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'description_color',
			[
				'label' => 'رنگ توضیحات عنوان',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .team .team-text p' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'text_back_color',
			[
				'label' => 'رنگ پس زمینه متن',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#030f27',
				'selectors' => [
					'{{WRAPPER}} .team .team-text' => 'background-color: {{VALUE}}',
				],
			]
		);
        
        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>

        <!-- Team Start -->
        <div class="team">
            <div class="wow fadeIn<?php echo $settings['box_effect']; ?>" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="<?php echo $settings['box_image']['url']; ?>" alt="Team Image">
                    </div>
                    <div class="team-text" style="background-color:<?php $settings['text_back_color']; ?>;">
                        <h2 style="color:<?php $settings['title_color']; ?>;"><?php echo $settings['title']; ?></h2>
                        <p style="color:<?php $settings['description_color']; ?>;"><?php echo $settings['description']; ?></p>
                    </div>
                    <div class="team-social"><?php
                        if ( $settings['list'] ) {
                            foreach ( $settings['list'] as $item ) { ?>
                                <a class="social-tw" href="<?php echo $item['icon_link']; ?>"><?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                            <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

		<?php
	}

}