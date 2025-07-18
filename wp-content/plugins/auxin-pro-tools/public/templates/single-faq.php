<?php
/**
 * The Template for displaying all single faq
 *
 * 
 * @package    Auxin
 * @license    LICENSE.txt
 * @author     
 * @link       https://phlox.pro
 * @copyright  (c) 2010-2025 
*/
global $post;
$is_pass_protected = post_password_required();

get_header(); ?>
<?php //include 'slider.php'; ?>

    <main id="main" <?php auxin_content_main_class(); ?> >
        <div class="aux-wrapper">
            <div class="aux-container aux-fold">

                <div id="primary" class="aux-primary" >
                    <div class="content" role="main"  >
<?php
                        if ( have_posts() && ! $is_pass_protected ) :

                            auxpro_get_template_part( 'theme-parts/single', get_post_type() );

                            comments_template( '/comments.php', true );

                        elseif( $is_pass_protected ) :

                            echo get_the_password_form();

                        else:

                            auxpro_get_template_part( 'theme-parts/content', 'none' );

                        endif;

                        do_action( 'auxin_faq_single_after_article_primary', $post );
?>
                    </div><!-- end content -->
<?php              
                    global $post_next_prev_navigation;
                    echo empty( $post_next_prev_navigation ) ? '' : $post_next_prev_navigation;
?>
                </div><!-- end primary -->


                <?php get_sidebar(); ?>


            </div><!-- end container -->

        <?php do_action( 'auxin_faq_single_after_content_primary', $post ); ?>

        </div><!-- end wrapper -->
    </main><!-- end main -->

<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>
