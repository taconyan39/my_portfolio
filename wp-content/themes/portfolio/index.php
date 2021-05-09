<?php get_header(); ?>

    <main class="main">
    <!-- key-visual -->
        <section class="key-visual l-section--full-width">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/toppage/kaigo_smile_m.jpg" alt="キービジュアル画像" class="c-img">
            <h2 class="key-visual__h2">笑顔になれる<br>理由がある</h2>
        </section>

        <section class="l-section">
            <p class="c-section__text">
              はなまるサービスでは利用者の笑顔を何よりも大切にしております。<br>
              <br>
              健康でいられる一番の秘訣は笑顔でいることです。
            </p>
        </section>

        <!-- カード -->
        <section class="l-section site-width about">
            <div class="card">
                <div class="card__top">
                  <span class="card__tag">食事</span>
                  <div class="card__img--wrapper c-img--outer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/meal.jpeg" alt="" class="c-img">
                  </div>
                </div>
                <div class="card__body">
                  <p>当施設では美味しい食事を提供することを大切にしています<br>
                  健康のために栄養バランスを気にしすぎると、薄味になることも多いです<br>
                  毎月アンケートにて食事の改善を行なっており、日々改善に努めています。<br>
                  </p>
                  <a href="https://shiahadzuki.com/" class="card__link">LINK</a>
                </div>
            </div>

            <div class="card">
              <div class="card__top">
                <span class="card__tag">健康</span>
                <div class="card__img--wrapper c-img--outer">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/rehabiri.jpg" alt="" class="c-img">
                </div>
              </div>
              <div class="card__body">
                <p>
                当施設ではリハビリ専用の設備を用意し、まるでスポーツジムのように利用していただけます。<br>
                予約制にはなりますが、理学療法士がトレーナーとして指導してくれます。
                </p>
                <a href="<?php echo get_post_type_archive_link('photo'); ?>" class="card__link">LINK</a>
              </div>
            </div>

            <div class="card">
              <div class="card__top">
                <span class="card__tag">Laravel</span>
                <div class="card__img--wrapper c-img--outer">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/heart.jpg" alt="" class="c-img">
                </div>
              </div>
              <div class="card__body">
                <p>当施設では看護師が常駐しています。
                    急な体調変化があったとしてもすぐに看護師が対応できますので、安心してご利用いただけます。
                </p>
                <a href="https://proposal-t.com/" class="card__link">LINK</a>
              </div>
            </div>
        </section>

        <!-- 更新情報 -->
        <section class="l-section index-news">
          <div class="index-news__item">
            <div class="index-news__heading">
              <h2 class="index-news__title">Blog<span>ブログ</span></h2>
              <a href="<?php echo get_post_type_archive_link('blog'); ?>" class="index-news__more link__underline">その他も見る&gt;&gt;</a>
            </div>
            <ul class="index-news__list">
              <?php
                $args = array(
                  'post_type' => 'blog',
                  'order' => 'DESC',
                  'posts_per_page' => 5
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) : while
                ($my_query->have_posts()) :
                $my_query->the_post();
              ?>
              <li class="index-news__list-item">
                <a href="<?php the_permalink(); ?>" class="link__underline"><time><?php echo get_field('news_date'); ?></time><?php echo the_title(); ?></a>
              </li>
              <?php endwhile; endif; wp_reset_postdata(); ?>
            </ul>
          </div>
          <div class="index-news__item">
            <div class="index-news__heading">
              <h2 class="index-news__title">News<span>おしらせ</span></h2>
              <a href="<?php echo get_post_type_archive_link('news'); ?>" class="index-news__more">おしらせ一覧も見る&gt;&gt;</a>
            </div>
            <ul class="index-news__list">
            <?php
                $args = array(
                  'post_type' => 'news',
                  'order' => 'DESC',
                  'posts_per_page' => 5
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) : while
                ($my_query->have_posts()) :
                $my_query->the_post();
              ?>
              <li class="index-news__list-item">
                <span><time><?php echo get_field('news_date'); ?></time><?php echo the_title(); ?></span>
              </li>
              <?php endwhile; endif; wp_reset_postdata(); ?>
            </ul>
            </ul>
          </div>
        </section>

        <!-- card02 -->
        <section class="l-section">
          <ul class="card02__list">
            <li class="card02__item">
              <a href="https://twitter.com/ochazukeyaro3">
                <div class="card02--left">
                  <h3 class="card02__heading">
                    OFFICE・・・・・・・・・・・・・・・
                  </h3>
                  <div class="card02__body">
                    <p>
                      事業所の紹介です<br>
                      大阪を中心に事業を運営しております。
                    </p>
                  </div>
                </div>
                <div class="card02--right">
                  <div class="card02--img">
                    <img class="c-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/toppage/icon_building.png" alt="Twitterのアイコン">
                  </div>
                  <span class="card02__link">Check</span>
                </div>
              </a>
            </li>
            <li class="card02__item">
              <a href="https://github.com/taconyan39?tab=repositories">
                <div class="card02--left">
                  <h3 class="card02__heading">
                    PHOTO・・・・・・・・・・・・・・・
                  </h3>
                  <div class="card02__body">
                    <p>各施設で撮影された写真です。
                    利用者様の笑顔を是非御覧ください
                    </p>
                  </div>
                </div>
                <div class="card02--right">
                  <div class="card02--img">
                    <img class="c-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/toppage/icon_photo.png" alt="">
                  </div>
                  <span class="card02__link">Check</span>
                </div>
              </a>
            </li>
            <li class="card02__item">
                <a href="<?php echo home_url('contact'); ?>">
                    <div class="card02--left">
                        <h3 class="card02__heading">
                          CONTACT・・・・・・・・・・・・・・・
                        </h3>
                        <div class="card02__body">
                          <p>お問い合わせフォームです。<br>お仕事のご相談やお問い合わせはこちらのページからお願いします。
                          </p>
                        </div>
                    </div>
                    <div class="card02--right">
                        <div class="card02--img">
                          <img class="c-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/toppage/icons8-mail-100.png" alt="">
                        </div>
                        <span class="card02__link">Contact</span>
                    </div>
                </a>
            </li>
          </ul>
        </section>
    </main>

<?php get_footer(); ?>