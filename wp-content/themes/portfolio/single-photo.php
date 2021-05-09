<?php get_header(); ?>
<?php  
    $terms = get_the_terms($post->ID, 'album_office');
    $office_name = $terms[0]->name;
?>

    <!-- ページタイトル -->
    <section class="page-title">
        <div class="u-site-width">
            <h2><?php echo $office_name; ?>のアルバム</h2>
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
                        <div class="p-photo__img-main">
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
                                $arrayCountUp = 0;
                                foreach (SCF::get('アルバムの写真') as $field_name => $field_value) :
                                $carousel_thumbnail = wp_get_attachment_image_src($field_value['photo_img'], 'large');
                                $carousel_thumbnail = esc_url($carousel_thumbnail[0]);
                                if (!$carousel_thumbnail) {
                                    $carousel_thumbnail =  'https://placehold.jp/584x390.png';
                                }
                                if ($arrayCountUp < 4) {
                            ?>
                                <img src="<?php echo $carousel_thumbnail; ?>" alt="<?php echo the_title(); ?>">
                            <?php } $arrayCountUp++; endforeach; ?>
                        </div>
                    </div>
                    <!-- /slick -->
                    <div class="p-photo__info">
                      <h2 class="p-photo__title"><?php echo the_title(); ?></h2>
                      <div class="p-photo__info-detail">
                        <dl>
                          <dt>事業所名</dt>
                          <dd><?php echo $office_name; ?></dd>
                          <dt>撮影日</dt>
                          <dd><?php echo get_field('photo_date'); ?></dd>
                          <dt>イベント名</dt>
                          <dd><?php echo get_field('photo_name'); ?></dd>
                        </dl>
                        <div class="p-photo__link u-mt--xl">
                            <a class="u-text--underline" href="<?php 
                            echo get_term_link($terms[0]) ; ?>">この事業所の他の写真を見る &gt;&gt;</a>
                        </div>
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
                <h3 class="c-office-info__title">投稿した事業所</h3>
                    <div class="c-office-info__item">
                        <?php 
                            $post_object = get_field('photo_office');
                            $image = get_post_meta($post_object, 'office_img', true);
                            $size = 'full';
                        ?>
                        <div class="c-office-info__img">
                        <a href="<?php the_permalink(); ?>" class="c-img--outer u-height--100">
                            <?php echo wp_get_attachment_image($image, $size, false,
                            array(
                                'class' => 'c-img__height--100'
                            )); ?>
                        </a>
                        </div>
                        <div class="c-office-info__text">
                            <h4 class="c-office-info__name">
									<a href="<?php the_permalink(); ?>"><?php echo get_the_title($post_object); ?></a>
								</h4>
                          <div class="c-office-info__detail">
                              <dl>
                                  <dt>住所</dt>
                                  <dd><?php echo get_post_meta($post_object, 'office_addr', true); ?></dd>
                                  <dt>Tel</dt>
                                  <dd><?php echo get_post_meta($post_object, 'office_tel', true); ?></dd>
                                  <dt>営業時間</dt>
                                  <dd><?php echo get_post_meta($post_object, 'office_time', true); ?></dd>
                              </dl>
                          </div>
                          <div class="c-office-info__link">
								<a class="c-office-info__link-btn c-btn c-btn--sub" href="<?php the_permalink($post_object); ?>">こちらの事業所を見る</a>
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
        $(".p-photo__img-main").slick({
        slidesToShow: 1,
        arrows: false,
        fade: true,
        asNavFor: ".slider-nav",
      });
      $(".slider-nav").slick({
        slidesToShow: 4,
        asNavFor: ".p-photo__img-main",
        centerMode: true,
        focusOnSelect: true,
        responsive: [
          {
            breakpoint: 384,
            settings: {
              swipe: true,
              arrows: false,
              slidesToShow: 3,
              slidesToScroll: 1,
            },
          },
        ],
      });
    </script>
