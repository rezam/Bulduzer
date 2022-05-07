<?php

namespace BULDUZER\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( !defined( 'ABSPATH' ) ) exit;

class woProductCat extends Widget_Base {

	public function get_name() {
		return 'woProductCat';
	}

	public function get_title() {
		return 'محصول بر اساس دسته';
	}

	public function get_icon() {
		return 'eicon-cart';
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

        $categories = get_terms( ['taxonomy' => 'product_cat'] );
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
			'product_width',
			[
				'label' => 'عریض کردن ردیف',
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => 'نمایش',
				'label_off' => 'مخفی',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'product_numbers',
			[
				'label' => 'تعداد محصولات',
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 8,
				'step' => 1,
				'default' => 4,
			]
		);

		$this->add_control(
			'product_col',
			[
				'label' => 'تعداد محصول در یک سطر',
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'col-lg-3',
				'options' => [
					'col-lg-6' => '2 محصول',
					'col-lg-4' => '3 محصول',
					'col-lg-3' => '4 محصول',
					'col-lg-2' => '6 محصول',
				],
			]
		);
        
        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display(); ?>

        <ul class="woo-products-one" data-wow-delay="0.1s">
            <?php
				$product_numbers = $settings['product_numbers'];
				$cats_id = $settings['catsid'];
                $args = [
                    'post_type'     => 'product',
                    'posts_per_page'=> $product_numbers,
					'tax_query' => [
							[
								'taxonomy' => 'product_cat',
								'field' => 'term_id',
								'terms' => $cats_id,
							]
						],
                    ];
                $loop = new \WP_Query( $args ); ?>
                <div class="<?php echo 'yes' === $settings['product_width'] ? 'container-full' : 'container';  ?>">
                    <div class="row">
                        <?php if ( $loop->have_posts() ): ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="<?php echo $settings['product_col']; ?> col-md-3 col-12">
                                    <?php wc_get_template_part( 'content', 'product' ); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <div class="col-lg-12">
                                <p class="text-right">محصولی یافت نشد.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php wp_reset_postdata();
            ?>
        </ul>
		<?php
	}

}