<?php get_header(); ?>

    <!-- ページタイトル -->
    <section class="page-title">
        <div class="u-site-width">
            <h2>
                <?php
                    $post_object = get_field('photo_office');
                    echo get_the_title($post_object);
                ?>
            </h2>
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
                        <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post(); ?>
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
                                        <dd><?php echo get_field('photo_office'); ?></dd>
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
                        <?php endwhile; endif; ?>
                    </ul>
                </section>
            </div>

        </main>
    </div>
<?php get_footer(); ?>
