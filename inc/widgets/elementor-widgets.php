<?php

/*
*
* Register Custom Widgets
*
*/

namespace BULDUZER;

class Widget_Loader {
	private static $_instance = null;
	
	public static function instance() {
		if (is_null(self::$_instance)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	function add_elementorbulduzer_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'bulduzerelementor',
			[
				'title' => 'بولدوزر',
				'icon' => 'fa fa-plug',
			]
		);
	
	}

	private function include_widgets_files() {
		require_once(__DIR__ . '/slider.php');
		require_once(__DIR__ . '/servicebox.php');
		require_once(__DIR__ . '/servicepost.php');
		require_once(__DIR__ . '/videobox.php');
		require_once(__DIR__ . '/teambox.php');
		require_once(__DIR__ . '/accordion.php');
		require_once(__DIR__ . '/testimonial.php');
		require_once(__DIR__ . '/blogpost.php');
		require_once(__DIR__ . '/woProductTag.php');
		require_once(__DIR__ . '/woProductCat.php');
	}

	public function register_widgets() {
		$this->include_widgets_files();

		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\slider());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\servicebox());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\servicepost());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\videobox());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\teambox());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\accordion());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\testimonial());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\blogpost());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\woProductTag());
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\woProductCat());
	}

	public function __construct() {
		add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets'], 99);
		add_action( 'elementor/elements/categories_registered', [ $this, 'add_elementorbulduzer_widget_categories' ] );
	}
}

Widget_Loader::instance();


