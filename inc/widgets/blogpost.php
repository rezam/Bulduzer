<?php

namespace BULDUZER\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( !defined( 'ABSPATH' ) ) exit;

class blogpost extends Widget_Base {

	public function get_name() {
		return 'blogpost';
	}

	public function get_title() {
		return 'پست وبلاگ';
	}

	public function get_icon() {
		return 'eicon-text';
	}

	public function get_categories() {
		return [ 'bulduzerelementor' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => 'تنظیمات',
			]
		);

		$categories = get_categories();
		$cats       = array();
		foreach ( $categories as $category ) {
			$cats[ $category->term_id ] = $category->name;
		}
		$default = key($cats);

		$this->add_control(
			'catsid',
			[
				'label'    => 'دسته‌بندی‌ها',
				'type'     => \Elementor\Controls_Manager::SELECT2,
				'options'  => $cats,
				'label_block' => true,
				'multiple' => true,
				'default' => $default
			]
		);

		$this->add_control(
			'author',
			[
				'label'   => 'نویسنده',
				'type'    => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes'
			]
		);

		$this->add_control(
			'time',
			[
				'label'   => 'زمان',
				'type'    => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes'
			]
		);

		$this->add_control(
			'post_order',
			[
				'label' => 'مرتب‌سازی',
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'DESC',
				'options' => [
					'ASC' => [
						'title' => 'صعودی',
						'icon' => 'fa fa-arrow-up'
					],
					'DESC' => [
						'title' => 'نزولی',
						'icon' => 'fa fa-arrow-down'
					],
				],
				'toggle' => true
			]
		);

        $this->add_control(
			'postbox_width',
			[
				'label'   => 'عریض',
				'type'    => \Elementor\Controls_Manager::SWITCHER,
				'default' => 'yes'
			]
		);

        $this->end_controls_section();

        $this->start_controls_section(
			'section_style',
			[
				'label' => 'استایل',
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => 'تایپوگرافی عنوان',
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .blog-title h3',
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
					'{{WRAPPER}} .blog-title h3' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'title_backcolor',
			[
				'label' => 'رنگ پس زمینه عنوان',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#030f27',
				'selectors' => [
					'{{WRAPPER}} .blog-title' => 'background-color: {{VALUE}}',
				],
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

        $this->add_control(
			'icon_color',
			[
				'label' => 'رنگ آیکن',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#030f27',
				'selectors' => [
					'{{WRAPPER}} .blog-title a.btn' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_control(
			'icon_backcolor',
			[
				'label' => 'رنگ پس‌زمینه آیکن',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#fdbe33',
				'selectors' => [
					'{{WRAPPER}} .blog-title a.btn' => 'background-color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'meta_typography',
				'label' => 'تایپوگرافی متا',
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .blog-meta p',
			]
		);

        $this->add_control(
			'meta_color',
			[
				'label' => 'رنگبندی متا',
				'type' => \Elementor\Controls_Manager::COLOR,
				'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'default' => '#fdbe33',
				'selectors' => [
					'{{WRAPPER}} .blog-meta::after' => 'color: {{VALUE}}',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'label' => 'تایپوگرافی توضیحات',
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .blog-text p',
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
					'{{WRAPPER}} .blog-text p' => 'color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		$catidd   = $settings['catsid'];
		$post_order = $settings['post_order'];
		$postbox = new \WP_Query ( array(
			'posts_per_page' => 5,
			'cat'            => $catidd,
            'order'          => $post_order
		) ); ?>
		
		<div class="container">
			<div class="row">
        
		<?php if ( $postbox->have_posts() ) : ?>
        <?php while( $postbox->have_posts() ): $postbox->the_post(); ?>
			<?php if ( 'yes' === $settings['postbox_width'] ): ?>
				<div class="col-lg-12">
			<?php else: ?>
				<div class="col-lg-6">
			<?php endif; ?>
                <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="blog-title" style="background-color:<?php $settings['title_backcolor']; ?>">
                        <style>.blog-meta::after{background:<?php $settings['meta_color']; ?>;}</style>
                        <h3 style="color:<?php $settings['title_color']; ?>"><?php echo get_the_title(); ?></h3>
                        <a class="btn" href="<?php esc_url( the_permalink() ); ?>" style="color:<?php $settings['icon_color']; ?>;background-color:<?php $settings['icon_backcolor']; ?>"><?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                    </div>
                    <div class="blog-meta">
                        <p>توسط <?php the_author(); ?>
                        در
                            <?php
                                $id = get_the_ID();
                                $cats = get_the_category($id);
                                echo '<a href="' . get_category_link($cats[0]->cat_ID) . '">';
                                    echo $cats[0]->name;
                                echo '</a>';
                            ?>
                        </a></p>
                    </div>
                    <div class="blog-text">
                        <p style="color:<?php $settings['description_color']; ?>">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <div class="error">
                <?php 'چیزی پیدا نشد.'; ?>
            </div>
		<?php endif; ?>
        
        </div>
	</div>
    <?php
	}

}
