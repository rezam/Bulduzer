<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package bulduzer
 */

get_header();

if ( have_posts() ) : ?>

<header class="page-header">
	<h1 class="page-title">
		<?php
		/* translators: %s: search query. */
		printf( 'نتایج جستجو برای: %s', '<span>' . get_search_query() . '</span>' );
		?>
	</h1>
</header><!-- .page-header -->
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
		<div class="col-md-8">
			<main id="primary" class="site-main search-page">

				
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation(); ?>

			</main><!-- #main -->
		</div>
	</div>
</div>

<?php
else :

	get_template_part( 'template-parts/content', 'none' );

endif;
get_footer();
