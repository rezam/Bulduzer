<?php
/**
 * bulduzer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bulduzer
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


if ( ! function_exists( 'bulduzer_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bulduzer_setup() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'woocommerce',
			array(
				'thumbnail_image_width' => 300,
				'single_image_width'    => 500,
				'product_grid'          => array(
					'default_rows'    => 3,
					'min_rows'        => 1,
					'default_columns' => 4,
					'min_columns'     => 1,
					'max_columns'     => 6,
				),
			)
		);
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => 'منوی اصلی',
				'footer-menu' => 'منوی فوتر',
				'account-menu' => 'حساب کاربری',
			)
		);

		add_filter( 'nav_menu_link_attributes', 'bulduzer_menu_add_class', 10, 3 );

		function bulduzer_menu_add_class( $atts, $item, $args ) {
			$class = 'nav-item nav-link'; // or something based on $item
			$atts['class'] = $class;
			return $atts;
		}

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'bulduzer_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'bulduzer_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bulduzer_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bulduzer_content_width', 640 );
}
add_action( 'after_setup_theme', 'bulduzer_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bulduzer_widgets_init() {
	register_sidebar(
		array(
			'name'          => 'سایدبار وبلاگ',
			'id'            => 'sidebar-1',
			'description'   => 'ابزارک‌های خود را اضافه کنید.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'جایگاه اول فوتر',
			'id'            => 'footer-1',
			'description'   => 'ابزارک‌های خود را اضافه کنید.',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'جایگاه دوم فوتر',
			'id'            => 'footer-2',
			'description'   => 'ابزارک‌های خود را اضافه کنید.',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'جایگاه سوم فوتر',
			'id'            => 'footer-3',
			'description'   => 'ابزارک‌های خود را اضافه کنید.',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'جایگاه چهارم فوتر',
			'id'            => 'footer-4',
			'description'   => 'ابزارک‌های خود را اضافه کنید.',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'سایدبار راست فروشگاه',
			'id'            => 'shop-right',
			'description'   => 'ابزارک‌های خود را اضافه کنید.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'سایدبار چپ فروشگاه',
			'id'            => 'shop-left',
			'description'   => 'ابزارک‌های خود را اضافه کنید.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'سایدبار راست محصول',
			'id'            => 'shop-product-right',
			'description'   => 'ابزارک‌های خود را اضافه کنید.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'سایدبار چپ محصول',
			'id'            => 'shop-product-left',
			'description'   => 'ابزارک‌های خود را اضافه کنید.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'bulduzer_widgets_init' );

function mytheme_customize_register( $wp_customize ) {
  
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );

}
  add_action( 'customize_register', 'mytheme_customize_register',50 );

/**
 * Enqueue scripts and styles.
 */
function bulduzer_scripts() {
	
	// enqueue bulduzer styles
	wp_enqueue_style( 'bulduzer-bootstrap-css', get_template_directory_uri() . '/lib/bootstrap/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'bulduzer-fontawesome-css', get_template_directory_uri() . '/lib/fontawesome/all.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'bulduzer-flaticon-css', get_template_directory_uri() . '/lib/flaticon/font/flaticon.css', array(), _S_VERSION );
	wp_enqueue_style( 'bulduzer-animate-css', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'bulduzer-owlcarousel-css', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'bulduzer-lightbox-css', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'bulduzer-slick-css', get_template_directory_uri() . '/lib/slick/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'bulduzer-slicktheme-css', get_template_directory_uri() . '/lib/slick/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'bulduzer-main-css', get_template_directory_uri() . '/style.css', array(), _S_VERSION );

	// enqueue bulduzer scripts
	wp_enqueue_script( 'bulduzer-jquery-js', get_template_directory_uri() . '/lib/jquery/jquery-3.4.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bulduzer-bootstrap-js', get_template_directory_uri() . '/lib/bootstrap/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bulduzer-easing-js', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bulduzer-wow-js', get_template_directory_uri() . '/lib/wow/wow.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bulduzer-owlcarousel-js', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bulduzer-isotope-js', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bulduzer-lightbox-js', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bulduzer-waypoints-js', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bulduzer-counterup-js', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bulduzer-slick-js', get_template_directory_uri() . '/lib/slick/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bulduzer-main-js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );


	wp_enqueue_script( 'bulduzer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bulduzer_scripts' );

/* Theme Customization Panel */
function bulduzer_register($wp_customize) {
	$wp_customize->add_panel( 'bulduzer_theme_options_panel', array(
	  'title' 		=> 'تنظیمات قالب',
	  'description' => 'پنل تنظیمات قالب',
	  'priority' 	=> 120,
	) );
	
	require get_template_directory() . '/inc/theme-options/topbar-options.php';
	require get_template_directory() . '/inc/theme-options/footer-options.php';
	require get_template_directory() . '/inc/theme-options/color-options.php';
	require get_template_directory() . '/inc/theme-options/typography-options.php';
	class_exists( 'WooCommerce' ) ? require get_template_directory() . '/inc/theme-options/woo-options.php' : '';
	require get_template_directory() . '/inc/theme-options/blog-options.php';
}
add_action("customize_register","bulduzer_register");

require get_template_directory() . '/inc/theme-options/override-styles-and-options.php';

require get_template_directory() . '/inc/widgets/elementor-widgets.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function new_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function my_custom_styles()
{
 echo "<style>body{font-family:" . get_theme_mod( 'bulduzer_font_select' ) . "!important;}</style>";
}
add_action( 'wp_head', 'my_custom_styles' );


if( ! function_exists( 'better_comments' ) ):
function better_comments($comment, $args, $depth) {
    ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="comment-body">
        <div class="comment-img">
            <?php echo get_avatar( $comment, $size='80' ); ?>
        </div>

		<div class="comment-text">
			<?php if ($comment->comment_approved == '0') : ?>
				<em><?php 'دیدگاه شما در دست بررسی است.' ?></em>
				<br />
			<?php endif; ?>
			<h3><?php echo get_comment_author() ?></h3>
			<span><?php echo get_comment_date( '', $comment ); ?></span>
			<?php comment_text() ?>
			<span class="btn"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></span>
		</div>
    </div>
   </li>

<?php
        }
endif;

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
