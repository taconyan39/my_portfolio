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
                <section class="l-section p-photo__office c-photo-info">
                    <ul class="c-photo-info__wrapper">
                        <!-- サブループ -->
                        <?php
                            $type = get_query_var('album_office');
                            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                            $args = array(
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'album_office',
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
                            echo get_field('photo_office');
                        ?>
                        <li class="c-photo-info__item">
                            <div class="c-photo-info__img c-img--outer">
                                <!-- スマートカスタムフィールドのグループ名を入力する -->
                                <?php foreach(SCF::get('アルバムの写真') as $field_name => $field_value) : ?>
                                    <?php $carousel_thumbnail = wp_get_attachment_image_src($field_value['photo_img'], 'large');
                                    $carousel_thumbnail = esc_url($carousel_thumbnail[0]);
                                    if(!$carousel_thumbnail) {
                                        $carousel_thumbnail = 'https://placehold.jp/584x390.png';
                                    }
                                ?>
                                <img class="c-img" src="<?php echo $carousel_thumbnail; ?>" alt="<?php echo the_title(); ?>">
                                <!-- １枚だけ取り出している -->
                                <?php break; endforeach; ?>
                            </div>
                            <div class="c-photo-info__text p-photo-__office-info">

                                <h3 class="c-photo-info__name"><?php echo the_title(); ?></h3>
                                <div class="c-photo-info__detail">
                                    <dl>
                                        <dt>撮影日</dt>
                                        <dd><?php echo get_field('photo_date'); ?></dd>
                                        <dt>事業所名</dt>
                                        <dd><?php echo get_the_title($post_object); ?></dd>
                                        <dt>イベント名  </dt>
                                        <dd><?php echo get_field('photo_name'); ?></dd>
                                    </dl>
                                </div>
                                <div class="c-photo-info__link">
                                    <a class="c-photo-info__link-btn--half c-btn--half c-btn--sub" href="<?php the_permalink($post_object); ?>">こちらの事業所を見る</a>
                                    <a class="c-photo-info__link-btn--half c-btn--half c-btn--main" href="<?php the_permalink(); ?>">写真の詳細を見る</a>
                                </div>
                            </div>
                        </li>
                        <?php endwhile; ?>
                        <?php else: ?>
                            <p style="font-size: 16px">該当する写真が見つかりません</p>
                        <?php endif; ?>
                    </ul>
                </section>
            </div>
            
            <!-- 投稿した事業所の情報 -->
            <section class="l-section p-photo__office c-office-info">
                <div class="c-photo-info__item">
                    <?php
                        $term_id = get_queried_object_id();
                        // タームIDスペシャル
                        $term_idsp = 'album_office_'.$term_id; //タクソノミー名前＿+ term_id
                        $post_object = get_field('link_office', $term_idsp);
                        $image = get_post_meta($post_object, 'office_img', true);
                        $size = 'thumbnail';
                    ?>
                    <div class="c-photo-info__img">
                        <?php echo wp_get_attachment_image($image, $size, false,
                        array(
                            'class' => 'c-img__height--100'
                        )); ?>
                    </div>
                    <div class="c-photo-info__text p-photo-__photo-info">
                        <h3 class="c-photo-info__name"><?php echo get_the_title($post_object); ?></h3>
                        <div class="c-photo-info__detail">
                            <dl>
                                <dt>住所</dt>
                                <dd><?php echo get_post_meta($post_object, 'office_addr', true); ?></dd>
                                <dt>Tel</dt>
                                <dd><?php echo get_post_meta($post_object, 'office_tel', true); ?></dd>
                                <dt>営業時間</dt>
                                <dd><?php echo get_post_meta($post_object, 'office_time', true); ?></dd>
                            </dl>
                        </div>
                        <div class="c-photo-info__link">
                            <a class="c-photo-info__link-btn" href="<?php echo get_permalink($post_object); ?>">こちらの事業所を見る</a>
                        </div>
                    </div>
                </div>
            </section>
            <?php get_template_part('_inc/other'); ?>
        </main>
    </div>
<?php get_footer(); ?>
