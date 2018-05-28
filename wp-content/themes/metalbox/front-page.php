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
                    <div class="mb-layout-cell mb-content mb-postcontent">


                            <?php echo do_shortcode('[slick-slider category="4"]'); ?>

                            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <div id="post-<?php the_ID(); ?>" >

                <?php the_content(); ?>



            </div>
            <!-- /article -->
        <div class="mb-content-layout-wrapper layout-item-0">
                                    <div class="mb-content-layout layout-item-3">
                                        <div class="mb-content-layout-row">
                                            <?php get_news('general');?>
                                        </div>
                                    </div>
                                </div>
        <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h2><?php _e( 'Извините, пока нечего отобразить.', 'metalbox' ); ?></h2>

            </article>
            <!-- /article -->

        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /section -->
    </main>



<?php get_footer(); ?>