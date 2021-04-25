<?php get_header(); ?>

    <!-- ページタイトル -->
    <section class="page-title">
        <div class="u-site-width">
            <h2>アルバム</h2>
        </div>
    </section>

    <!-- パンくずリスト -->
    <?php get_template_part('_inc/breadcrumbs'); ?>
    <!-- /パンくずリスト -->
  
    <!-- コンテンツ -->
    <div class="u-site-width u-flex--between">
        <main class="l-main">
            <article class="p-photo">
                <section class="p-photo__album">
                    <!-- slick -->
                    <div class="p-photo__img">
                        <div class="your-class">
                            <?php
                                $photoCountUp = 0;
                                foreach (SCF::get('アルバムの写真') as $field_name => $field_value) :
                                $carousel_thumbnail = wp_get_attachment_image_src($field_value['photo_img'], 'large');
                                $carousel_thumbnail = esc_url($carousel_thumbnail[0]);
                                if (!$carousel_thumbnail) {
                                    $carousel_thumbnail =  'https://placehold.jp/584x390.png';
                                }
                                if ($photoCountUp < 4) {
                            ?>
                                <li>
                                    <img src="<?php echo $carousel_thumbnail; ?>" alt="<?php echo the_title(); ?>">
                                </li>
                            <?php } $photoCountUp++; endforeach; ?>
                        </div>
                        <div class="slider-nav">
                            <?php 
                                // $arrayCountUp = 0;
                                // foreach (SCF::get('アルバムの写真') as $field_name => $field_value) :
                                // $carousel_thumbnail = wp_get_attachment_image_src($field_value['photo_img'], 'large');
                                // $carousel_thumbnail = esc_url($carousel_thumbnail[0]);
                                // if (!$carousel_thumbnail) {
                                //     $carousel_thumbnail =  'https://placehold.jp/584x390.png';
                                // }
                                // if ($arrayCountUp < 4) {
                            ?>
                            <!-- <p class="c-img--quarter"> -->
                                <img src="<?php echo $carousel_thumbnail; ?>" alt="<?php echo the_title(); ?>">
                            <!-- </p> -->
                            <?php 
                        // } $arrayCountUp++; endforeach; ?>
                        </div>
                    </div>
                    <!-- /slick -->
                    <div class="p-photo__info">
                      <h2 class="p-photo__title"><?php //echo the_title(); ?></h2>
                      <div class="p-photo__info-detail">
                        <dl>
                          <dt>事業所名</dt>
                          <dd><?php echo get_field('photo_office'); ?></dd>
                          <dt>撮影日</dt>
                          <dd><?php echo get_field('photo_date'); ?></dd>
                          <dt>イベント名</dt>
                          <dd><?php echo get_field('photo_name'); ?></dd>
                        </dl>
                      </div>
                      <div class="p-photo__link">
                        <a href="#">この事業所の他の写真を見る ></a>
                      </div>
                    </div>
                </section>

                <section class="l-section p-photo__comment">
                    <p class="p-photo__comment-title">コメント</p>
                    <p><?php echo get_field('photo_text'); ?>
                    </p>
                </section>

                <!-- 投稿した事業所の情報 -->
                <section class="l-section p-photo__office c-office-info">
                    <div class="c-photo-info__item">
                        <?php 
                            $post_object = get_field('photo_office');
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

                <!-- 他の写真 -->
                <section>
                    <?php get_template_part('_inc/other'); ?>
                </section>
                <!-- /他の写真 -->
            
            </article>
        </main>
    </div>
    <?php get_footer(); ?>

    <!-- 記述を削除 -->
    <!-- slick -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <script>
        $(".your-class").slick({
            slidesToShow: 1,
            arrows: true,
            fade:true,
            asNavFor: ".slider-nav",
        });
        $(".slider-nav").slick({
            slideToShow: 4,
            asNavFor: ".your-class",
            centerMode: true,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 384,
                    settings: {
                        swipe: true,
                        arrows: false,
                        slidesToShoqw: 3,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    </script>
