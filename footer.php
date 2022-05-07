<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bulduzer
 */

?>
            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s" style="background:<?php if (get_theme_mod( 'bulduzer_footer_back_color' )) : echo get_theme_mod( 'bulduzer_footer_back_color'); else: echo '#030f27'; endif; ?> !important;">
                <div class="container">
                    <div class="row">
                        <?php $footercol = get_theme_mod( 'bulduzer_footer_col' ); ?> 
                        <div class="<?php if ( $footercol === 'onecol' ) { echo 'col-lg-12'; } elseif( $footercol === 'twocol' ) { echo 'col-lg-6 col-12'; } elseif( $footercol === 'threecol' ) { echo 'col-md-6 col-lg-4'; } else { echo 'col-md-6 col-lg-3'; } ?>">
                            <div class="footer-link">
                                <?php if(is_active_sidebar('footer-1')) dynamic_sidebar('footer-1'); ?>
                            </div>
                        </div>
                        <?php if ( ( get_theme_mod( 'bulduzer_footer_col' ) === 'fourcol' ) || ( get_theme_mod( 'bulduzer_footer_col' ) === 'threecol' ) || ( get_theme_mod( 'bulduzer_footer_col' ) === 'twocol' ) ) : ?>
                        <div class="<?php if( $footercol === 'twocol' ) { echo 'col-lg-6 col-12'; } elseif( $footercol === 'threecol' ) { echo 'col-md-6 col-lg-4'; } else { echo 'col-md-6 col-lg-3'; } ?>">
                            <div class="footer-link">
                                <?php if(is_active_sidebar('footer-2')) dynamic_sidebar('footer-2'); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ( ( get_theme_mod( 'bulduzer_footer_col' ) === 'fourcol' ) || ( get_theme_mod( 'bulduzer_footer_col' ) === 'threecol' ) ) : ?>
                        <div class="<?php if( $footercol === 'threecol' ) { echo 'col-md-6 col-lg-4'; } else { echo 'col-md-6 col-lg-3'; } ?>">
                            <div class="footer-link">
                                <?php if(is_active_sidebar('footer-3')) dynamic_sidebar('footer-3'); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if ( ( get_theme_mod( 'bulduzer_footer_col' ) === 'fourcol' ) ) : ?>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <?php if(is_active_sidebar('footer-4')) dynamic_sidebar('footer-4'); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                    <?php wp_nav_menu( [ 'theme_location' => 'footer-menu', 'fallback_cb' => false ] );
                     ?>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <span>&copy; <a href="#">راکت وردپرس</a>، کلیه حقوق محفوظ است.</span>
                            <span>طراحی شده توسط <a href="https://wproket.ir">راکت وردپرس</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top" style="background:<?php if (get_theme_mod( 'bulduzer_main_color' )) : echo get_theme_mod( 'bulduzer_main_color'); else: echo '#fdbe33'; endif; ?> !important;"><i class="fa fa-chevron-up"></i></a>

            <?php wp_footer(); ?>
        </div>
    </body>
</html>