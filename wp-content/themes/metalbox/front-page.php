<?php
/*Template Name:Главная страница
 *
 */
?>
<?php get_header(); ?>

    <main role="main">
        <div class="mb-layout-wrapper">
            <div class="mb-content-layout">
                <div class="mb-content-layout-row">
                    <div class="mb-layout-cell mb-content"><article class="mb-post mb-article">


                            <?php echo do_shortcode('[slick-slider category="4"]'); ?>

                            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>



            </article>
            <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h2><?php _e( 'Извините, пока нечего отобразить.', 'metalbox' ); ?></h2>

            </article>
            <!-- /article -->

        <?php endif; ?>
        </div>
        <!-- /section -->
    </main>



<?php get_footer(); ?>