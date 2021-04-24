<?php get_header(); ?>

    <!-- ページタイトル -->
    <section class="page-title">
        <div class="u-site-width">
            <h2>ブログ一覧ページ</h2>
        </div>
    </section>

    <!-- パンくずリスト -->
    <?php get_template_part('_inc/breadcrumbs'); ?>
    <!-- /パンくずリスト -->
  
    <!-- コンテンツ -->
    <div class="u-site-width flex-between">
        <main class="main__2colum">
            <section class="p-blog-archive">
                <ul class="p-blog-archive__list">
                    <?php
                    $tag = get_queried_object();
                    $args = array(
                        'tag' => $tag->slug,
                        'post_type' => 'blog',
                        'order' => 'DESC',
                        'posts_per_page' => 5
                    );
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) :
                    while ($my_query->have_posts()) :
                    $my_query->the_post();
                    ?>
                    <li class="p-blog-archive__item-wrapper">
                        <a href="<?php the_permalink(); ?>" class="p-blog-archive__item">
                            <div class="p-blog-archive__img">
                                <img src="<?php echo get_field('blog_img'); ?>" alt="" class="img">
                            </div>
                            <div class="p-blog-archive__text">
                                <div class="p-blog-archive__top"><time><?php the_time('Y年m月d日'); ?>></time></div>
                                <div class="p-blog-archive__body">
                                    <h2 class="p-blog-archive__title">
                                      <?php the_title(); ?>
                                    </h2>
                                    <p><?php the_content('blog'); ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; endif; ?>
                </ul>
            </section>
        </main>
        <?php get_template_part('_inc/sidebar'); ?>
        <?php get_template_part('_inc/pager'); ?>
    </div>
<?php get_footer(); ?>
