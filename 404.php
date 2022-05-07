<?php
/**
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bulduzer
 */

get_header();
?>

<div class="post-entry">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<header class="page-header page-not-found">
					<h1 class="page-title"><?php echo 'چنین صفحه‌ای وجود ندارد.'; ?></h1>
					<a href="<?php echo get_site_url(); ?>" class="text-center">
						بازگشت به خانه
					</a>
				</header><!-- .page-header -->
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
