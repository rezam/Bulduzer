<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bulduzer
 */

get_header();
?>

<div class="container pt-5">
    <div class="row">
    
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) :	the_post(); ?>
        <div class="col-lg-4">
            <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-img">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="blog-title">
                    <h3><?php echo get_the_title(); ?></h3>
                    <a class="btn" href="<?php esc_url( the_permalink() ); ?>">+</a>
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
                    <p> <?php the_excerpt(); ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <span style="display:inline-block"><?php the_posts_navigation(); ?></span>
            </div>
        </div>
    </div>
    <?php else : ?>
        <div class="error">
            <?php 'چیزی پیدا نشد.'; ?>
        </div>
    <?php endif; ?>
    </div>
</div>


<?php
get_footer();
