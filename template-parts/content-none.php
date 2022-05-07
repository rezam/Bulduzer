<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bulduzer
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php echo 'چیزی یافت نشد'; ?></h1>
	</header><!-- .page-header -->
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-md-8">
				<?php
				if ( is_home() && current_user_can( 'publish_posts' ) ) :

					printf(
						'<p>' . wp_kses(
							/* translators: 1: link to WP admin new post page. */
							'اولین نوشته خود را منتشر کنید <a href="%1$s">از اینجا شروع کنید</a>.',
							array(
								'a' => array(
									'href' => array(),
								),
							)
						) . '</p>',
						esc_url( admin_url( 'post-new.php' ) )
					);

				elseif ( is_search() ) :
					?>

					<p class="text-right"><?php echo 'جستجو با عبارت مدنظر شما نتیجه‌ای نداشت. لطفا عبارت دیگری را امتحان کنید.'; ?></p>
					<?php

				else :
					?>

					<p class="text-right"><?php echo 'متاسفانه عبارت مورد نظر شما نتیجه‌ای در پی نداشته است.'; ?></p>
					<?php

				endif;
				?>
			</div>
		</div>
	</div>
</section><!-- .no-results -->
