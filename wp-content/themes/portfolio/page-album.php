<?php get_header(); ?>

    <!-- ページタイトル -->
    <section class="page-title">
        <div class="u-site-width">
            <h2>アルバム</h2>
        </div>
    </section>
    <!-- /ページタイトル -->

    <!-- パンくずリスト -->
    <?php get_template_part('_inc/breadcrumbs'); ?>
    <!-- /パンくずリスト -->

    <!-- コンテンツ -->
    <div class="u-site-width u-flex--between">
        <main class="l-main">
            <article class="p-album">

                <section class="l-section c-attention">
                    <h2 class="c-attention__title">アルバムカテゴリ</h2>
                    <ul class="p-album__attention-img c-attention__list">
                        <?php
                            $taxonomy_name = 'album';
                            $taxonomys = get_terms($taxonomy_name);

                            if(!is_wp_error($taxonomys) && count($taxonomys)) :
                            foreach($taxonomys as $taxonomy):

                            $term_id = esc_html($taxonomy->term_id);
                            $term_idsp = "album_".$term_id; //タクソノミー名前＿+term_id
                            $photo = get_field('album_top_img', $term_idsp);
                        ?>
                        <li class="c-img__column c-attention__item">
                            <a href="<?php the_permalink(get_page_by_path('album')->ID); ?><?php echo esc_html($taxonomy->slug); ?>" class="u-flex--column">
                                <p class="c-img--outer c-attention__img">
                                    <img class="c-img" src="<?php echo $photo; ?>" alt="<?php  ; ?>">
                                </p>
                                <p class="c-attention__name"><?php echo $taxonomy->name; ?></p>
                            </a>
                        </li>
                        <?php endforeach; endif; ?>
                    </ul>
                </section>
                <a  href="<?php echo get_post_type_archive_link('photo') ?>">最新の写真を見る</a>
            </article>

        </main>
    </div>
    <!-- footer -->
    <?php get_footer(); ?>
    <!-- /footer -->
