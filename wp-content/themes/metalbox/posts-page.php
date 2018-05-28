<?php
/*Template Name:Статьи страница
 *
 */
?>
<?php
global $metalbox;
?>
<?php get_header(); ?>

    <main role="main">
        <div class="mb-layout-wrapper">
            <div class="mb-content-layout">
                <div class="mb-content-layout-row">
                    <div class="mb-layout-cell mb-content mb-postcontent">


                        <article class="mb-post mb-article">
                            <div class="mb-postmetadataheader">
                                <h2 class="mb-postheader"><span class="mb-postheadericon">Статьи, отзывы о нас</span></h2>
                            </div>

                            <div class="mb-postcontent mb-postcontent-0 clearfix">
                                <div class="mb-content-layout">
                                    <div class="mb-content-layout-row">
                                        <div class="mb-layout-cell layout-item-0" style="width: 100%">
                                            <p>
                                                <span style="font-weight: bold; color: #033276;">Статьи:</span></p>

                                               <?php get_posts_links('posts'); ?>



                                            <p><span style="font-weight: bold; color: #033276;">Статьи о нас:</span></p>
                                    <?php foreach ($metalbox['post_page_sections'] as $item){
                                            ?>
                                            <p>
                                                    <span style="color: #033276;">
                                                        <a href="<?php echo $item['url-links'];?>">
                                                            <span style="color: #033276; "><?php echo $item['label-links'];?></span>
                                                        </a>
                                                    </span>
                                                <br>
                                            </p>
                                            <?php
                                            }
                                          ?>
                                            <p><span style="color: #033276; font-weight: bold;">Госзакупки:</span></p>
                                            <p><a href="<?php echo $metalbox['url-zakupki'];?>"><span style="color: #033276;"><?php echo $metalbox['label-zakupki'] ;?></span></a>
                                                <span style="font-weight: bold;"><br></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </article>


                                    <div class="mb-content-layout-row">
                                        <?php get_news('general');?>
                                    </div>
                    </div>



                </div>
            </div>
        </div>

    </main>



<?php get_footer(); ?>