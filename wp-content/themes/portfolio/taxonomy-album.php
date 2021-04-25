<?php get_header(); ?>

    <!-- ページタイトル -->
    <section class="page-title">
        <div class="u-site-width">
            <h2><?php echo single_term_title(); ?>の一覧</h2>
        </div>
    </section>

    <!-- パンくずリスト -->
    <?php get_template_part('_inc/breadcrumbs'); ?>
    <!-- /パンくずリスト -->
  
    <!-- コンテンツ -->
    <div class="u-site-width u-flex--between">
        <main class="l-main">
            <div class="p-photo">
                <section class="l-section p-photo__office p-photo-info">
                    <ul class="p-photo-info__wrapper">
                        <!-- サブループ -->
                        <?php
                            $type = get_query_var('album');
                            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                            $args = array(
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'album',
                                        'field' => 'slug',
                                        'terms' => $type
                                    ),
                                ),
                                'post_type' => 'photo',
                                'order' => 'DESC',
                                'paged' => $paged
                            );
                            $my_query = new WP_Query($args);
                            $pages = $my_query->max_num_pages;
                            $wp_query->max_num_pages = $pages;
                            if ($my_query->have_posts()) :
                            while ($my_query->have_posts()) :
                            $my_query->the_post();

                            $post_object = get_field('photo_office');
                        ?>
                        <li class="p-photo-info__item">
                            <div class="p-photo-info__img c-img--outer">
                                <!-- スマートカスタムフィールドのグループ名を入力する -->
                                <?php foreach(SCF::get('アルバムの写真') as $field_name => $field_value) : ?>
                                    <?php $carousel_thumbnail = wp_get_attachment_image_src($field_value['photo_img'], 'large');
                                    $carousel_thumbnail = esc_url($carousel_thumbnail[0]);
                                    if(!$carousel_thumbnail) {
                                        $carousel_thumbnail = 'https://placehold.jp/584x390.png';
                                    }
                                ?>
                                <img class="c-img__height--100" src="<?php echo $carousel_thumbnail; ?>" alt="<?php echo the_title(); ?>">
                                <!-- １枚だけ取り出している -->
                                <?php break; endforeach; ?>
                            </div>
                            <div class="p-photo-info__text p-photo__office-info">
                                <h3 class="p-photo-info__name"><?php echo the_title(); ?></h3>
                                <div class="p-photo-info__detail">
                                    <dl>
                                        <dt>撮影日</dt>
                                        <dd><?php echo get_field('photo_date'); ?></dd>
                                        <dt>事業所名</dt>
                                        <dd><?php echo get_the_title($post_object); ?></dd>
                                        <dt>イベント名  </dt>
                                        <dd><?php echo get_field('photo_name'); ?></dd>
                                    </dl>
                                </div>
                                <div class="p-photo-info__link">
                                    <a class="p-photo-info__link-btn--half c-btn--half c-btn--sub" href="<?php the_permalink($post_object); ?>">こちらの事業所を見る</a>
                                    <a class="p-photo-info__link-btn--half c-btn--half c-btn--main" href="<?php the_permalink(); ?>">写真の詳細を見る</a>
                                </div>
                            </div>
                        </li>
                        <?php endwhile; endif; ?>
                    </ul>
                </section>
            </div>
        </main>
        <?php get_template_part('_inc/pager'); ?>
    </div>
<?php get_footer(); ?>
