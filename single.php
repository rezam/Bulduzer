<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bulduzer
 */

get_header();
?>

<?php
	while ( have_posts() ) :
		the_post(); ?>

	<!-- Page Header Start -->
	<div class="page-header" style="background:<?php if (get_theme_mod( 'bulduzer_main_color' )) : echo get_theme_mod( 'bulduzer_main_color'); else: echo '#fdbe33'; endif; ?> !important;">
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
	<div class="single">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
				<div class="col-lg-8">
					<div class="single-content wow fadeInUp">
						<?php if ( ( get_theme_mod( 'bulduzer_blog_thumbnail_display' ) == '' ) || ( get_theme_mod( 'bulduzer_blog_thumbnail_display' ) == 'yes' ) ) : ?>
							<?php the_post_thumbnail(); ?>
						<?php endif; ?>
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
						endif;?>
				</div>
			</div>
		</div>
	</div>
	<!-- Single Post End-->

<?php
	endwhile;
get_footer();
