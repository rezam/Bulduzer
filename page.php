<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bulduzer
 */

get_header();
?>

<?php
	while ( have_posts() ) :
		the_post(); ?>

	<!-- Page Header Start -->
	<div class="page-header" style="background:<?php if (get_theme_mod( 'bulduzer_main_color' )) : echo get_theme_mod( 'bulduzer_main_color'); else: echo '#fdbe33'; endif; ?>">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2><?php echo the_title(); ?></h2>
				</div>
				<div class="col-12">
					<a href="<?php echo get_permalink() ?>">خانه</a>
					<a href="<?php echo get_permalink() ?>"><?php echo the_title(); ?></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

	<!-- Single Post Start-->
	<div class="page single">
		<div class="container">
			<div class="row">
				<?php if( !( is_cart() || is_checkout() || is_account_page() ) ): ?>
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
				<?php endif; ?>
				<div class="<?php echo ( is_cart() || is_checkout() || is_account_page() ) ? 'col-lg-12' : 'col-lg-8'; ?>">
					<div class="single-content wow fadeInUp">
						<?php the_content(); ?>
					</div>
					<?php if ( get_the_category(get_the_ID()) ) : ?>
					<div class="single-tags wow fadeInUp">
						<span>دسته‌بندی‌ها</span>
						<?php
							$id = get_the_ID();
							$cats = get_the_category($id);
							echo '<a href="' . get_category_link($cats[0]->cat_ID) . '">';
								echo $cats[0]->name;
							echo '</a>';
						?>
					</div>
					<?php endif; ?>
					<?php if( !( is_cart() || is_checkout() || is_account_page() ) ): ?>
					<?php if ( get_the_tag_list() ) : ?>
					<div class="single-tags wow fadeInUp">
						<span>برچسب‌ها</span>
						<?php echo get_the_tag_list(); ?>
					</div>
					<?php endif; ?>
					<div class="single-bio wow fadeInUp">
						<div class="single-bio-img">
							<img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), array( 'size' => 450 ) ) ?>" />
						</div>
						<div class="single-bio-text">
							<h3><?php echo get_the_author_meta( 'nickname' ); ?></h3>
							<?php echo get_the_author_meta( 'description' ); ?>
						</div>
					</div>
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Single Post End-->

<?php
	endwhile;
get_footer();