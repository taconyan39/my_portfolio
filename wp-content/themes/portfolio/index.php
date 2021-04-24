<?php get_header(); ?>

    <main class="main">
    <!-- key-visual -->
        <section class="key-visual l-section--full-width">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/toppage/kaigo_smile_m.jpg" alt="キービジュアル画像" class="c-img">
            <h2 class="key-visual__h2">笑顔になれる<br>理由がある</h2>
        </section>

        <section class="l-section">
            <p class="c-section__text">ポートフォリオサイトへ訪問いただきありがとうございます。<br>
                前職でしていた介護業界のサイトをイメージして作成しております。<br>
                質問、お仕事の依頼はお問い合わせページからお願いします。
            </p>
        </section>

        <!-- カード -->
        <section class="l-section site-width about">
            <div class="card">
                <div class="card__top">
                  <span class="card__tag">HTML&CSS</span>
                  <div class="card__img--wrapper c-img--outer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/toppage/design_img_1.png" alt="" class="c-img">
                  </div>
                </div>
                <div class="card__body">
                  <p>イラストレーターの葉月しあさんのページ作成のお手伝いをさせていただきました。<br>
                  ワンページでわかりやすいようにサイトを作成さていただきました
                  </p>
                  <a href="https://shiahadzuki.com/" class="card__link">LINK</a>
                </div>
            </div>

            <div class="card">
              <div class="card__top">
                <span class="card__tag">WordPress</span>
                <div class="card__img--wrapper c-img--outer">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/toppage/design_img_2.png" alt="" class="c-img">
                </div>
              </div>
              <div class="card__body">
                <p>
                  当サイトはWordPressdeで構成されております。<br>
                  ブログの記事一覧や写真の表示などの機能も搭載しております。
                </p>
                <a href="<?php echo get_post_type_archive_link('photo'); ?>" class="card__link">LINK</a>
              </div>
            </div>

            <div class="card">
              <div class="card__top">
                <span class="card__tag">Laravel</span>
                <div class="card__img--wrapper c-img--outer">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/image/toppage/design_img_3.png" alt="" class="c-img">
                </div>
              </div>
              <div class="card__body">
                <p>Laravelで制作しました、アイデアの投稿サイトです。<br>
                アイデアの投稿やお気に入り登録、レビューの投稿機能が実装されています。
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
                    Twitter・・・・・・・・・・・・・・・
                  </h3>
                  <div class="card02__body">
                    <p>Twitterのアカウントです。<br>
                      介護や、プログラミングに関することをツイートしています。<div class=""></div>
                    </p>
                  </div>
                </div>
                <div class="card02--right">
                  <div class="card02--img">
                    <img class="c-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/toppage/icons8-twitter-96.png" alt="Twitterのアイコン">
                  </div>
                  <span class="card02__link">Check</span>
                </div>
              </a>
            </li>
            <li class="card02__item">
              <a href="https://github.com/taconyan39?tab=repositories">
                <div class="card02--left">
                  <h3 class="card02__heading">
                    Github・・・・・・・・・・・・・・・
                  </h3>
                  <div class="card02__body">
                    <p>Githubのアカウントです。<br>

                    </p>
                  </div>
                </div>
                <div class="card02--right">
                  <div class="card02--img">
                    <img class="c-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/toppage/icons8-github-96.png" alt="">
                  </div>
                  <span class="card02__link">Check</span>
                </div>
              </a>
            </li>
            <li class="card02__item">
                <a href="<?php echo home_url('contact'); ?>">
                    <div class="card02--left">
                        <h3 class="card02__heading">
                          Contact・・・・・・・・・・・・・・・
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