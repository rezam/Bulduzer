<?php

namespace BULDUZER\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( !defined( 'ABSPATH' ) ) exit;

class accordion extends Widget_Base {

	public function get_name() {
		return 'accordion';
	}

	public function get_title() {
		return 'پرسش و پاسخ';
	}

	public function get_icon() {
		return 'eicon-bullet-list';
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
			'title', [
				'label' => 'عنوان',
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '#',
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'description', [
				'label' => 'توضیحات',
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => 'توضیحات اینجاست',
				'show_label' => false,
			]
		);

		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => 'تایپوگرافی عنوان',
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .faqs .card-header a',
			]
		);

		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'label' => 'تایپوگرافی توضیحات',
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .faqs .card-body',
			]
		);

		$this->add_control(
			'list',
			[
				'label' => 'پرسش و پاسخ',
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
                        'title' => 'عنوان پرسش',
						'description' => 'پاسخ پرسش',
						'title_typography' => '',
                        'description_typography' => '',
					],
				],
				'title_field' => '{{{ title }}}',
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
			'box_color',
			[
				'label' => 'رنگبندی',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#fdbe33',
				'selectors' => [
					'{{WRAPPER}} .faqs .card-header [data-toggle="collapse"]::after' => 'color: {{VALUE}}',
					'{{WRAPPER}} .faqs .card-header [data-toggle="collapse"][aria-expanded="true"]' => 'background: {{VALUE}}',
				],
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
				'default' => '#121518',
				'selectors' => [
					'{{WRAPPER}} .faqs .card-header a' => 'color: {{VALUE}}',
				],
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
				'default' => '#666666',
				'selectors' => [
					'{{WRAPPER}} .faqs .card-body' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
        
        <!-- FAQs Start -->
		<div class="faqs">
		<?php $j = substr(str_shuffle(MD5(microtime())), 0, 10); ?>
			<div id="accordion-<?php echo $j; ?>">
				<style>.faqs .card-header [data-toggle="collapse"]::after{color:<?php echo $settings['box_color']; ?>};.faqs .card-header [data-toggle="collapse"][aria-expanded="true"]{background:<?php echo $settings['box_color']; ?>}</style>

				<?php
				if ( $settings['list'] ) {
					foreach (  $settings['list'] as $item ) {?>
						<div class="card wow fadeInRight" data-wow-delay="0.5s">
							<div class="card-header">
								<?php $i = substr(str_shuffle(MD5(microtime())), 0, 10); ?>
								<a class="card-link collapsed" data-toggle="collapse" href="#collapse<?php echo $i; ?>" style="color:<?php $settings['title_color']; ?>">
									<?php echo $item['title']; ?>
								</a>
							</div>
							<div id="collapse<?php echo $i; ?>" class="collapse" data-parent="#accordion-<?php echo $j; ?>">
								<div class="card-body" style="color:<?php $settings['description_color']; ?>"><?php echo $item['description']; ?></div>
							</div>
						</div><?php
					}
				}
				?>

			</div>
		</div>
		<!-- FAQs End -->

		<?php
	}

}