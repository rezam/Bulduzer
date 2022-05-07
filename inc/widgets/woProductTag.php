<?php

namespace BULDUZER\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( !defined( 'ABSPATH' ) ) exit;

class woProductTag extends Widget_Base {

	public function get_name() {
		return 'woProductTag';
	}

	public function get_title() {
		return 'محصول بر اساس برچسب';
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

        $tags = get_terms( ['taxonomy' => 'product_tag'] );
		$tag       = array();
		foreach ( $tags as $tagItem ) {
			$tag[ $tagItem->term_id ] = $tagItem->name;
		}
		$default = key($tag);
		

		$this->add_control(
			'catsid',
			[
				'label'    => 'برچسب‌ها',
				'type'     => \Elementor\Controls_Manager::SELECT2,
				'options'  => $tag,
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

        <ul>
            <?php
				$product_numbers = $settings['product_numbers'];
				$tags_id = $settings['catsid'];
                $args = [
                    'post_type'     => 'product',
                    'posts_per_page'=> $product_numbers,
					'tax_query' => [
							[
								'taxonomy' => 'product_tag',
								'field' => 'term_id',
								'terms' => $tags_id,
							]
						],
                    ];
                $loop = new \WP_Query( $args ); ?>
                <div class="<?php echo 'yes' === $settings['product_width'] ? 'container-full' : 'container';  ?>">
                    <div class="row">
                        <?php if ( $loop->have_posts() ): ?>
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="<?php echo $settings['product_col']; ?> col-md-4 col-12">
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