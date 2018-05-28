<?php get_header(); ?>

<!-- main content goes here -->
<main role="main">
	<!-- section -->
	<section>
        <div class="mb-postmetadataheader">
            <h2 class="mb-postheader"><span class="mb-postheadericon"><?php the_title(); ?></span></h2>
        </div>

    <div class="mb-postcontent mb-postcontent-0 clearfix">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <div class="mb-content-layout-wrapper layout-item-0">
            <div class="mb-content-layout layout-item-1">
                  <div class="mb-layout-cell layout-item-2" style="width: 100%">
                    <?php the_content(); ?>
                  </div>
            </div>
        </div>

            <?php endwhile; ?>

            <?php else: ?>

                <!-- article -->
                <article>

                    <h2><?php _e( 'Sorry, nothing to display.', 'teatrhotel' ); ?></h2>

                </article>
                <!-- /article -->
    </div>
	<?php endif; ?>

	</section>
	<!-- /section -->
</main>
<?php get_footer(); ?>
