<?php get_header(); ?>

    <main class="l-main">

        <div class="p-mainVisual"></div>
        <section class="p-news">
            <div class="p-news__left">お知らせ</div>
            <div class="p-news__right">
                <span class="p-news__date">2021/01/01</span>
                <a href="#" class="p-news__text c-link--underline">ここにお知らせが表示されます</a>
            </div>
        </section>

        <section class="c-section p-welcome">
            <h2 class="c-section__title p-welcome__title">
              ようこそ、はなまる荘へ
            </h2>

            <div class="p-welcome__img--outer c-section__img c-img__outer">
                <img src="assets/image/welcome.jpg" class="c-img p-welcome__img" alt="">
            </div>

            <div class="p-welcome__body">
                <p class="p-welcome__text">はなまる荘は2021年OPENのサービス付き高齢者住宅です。<br>地域に貢献し、地域に愛される施設を目指した運営をしております。<br>皆様にはなまるを頂けるのサービスを日々提供し続けられるように努めております。</p>
            </div>
            <div class="p-welcome__btnArea u-flex--between">
                <a href="#" class="p-welcome__btn--primary c-btn c-btn--primary">施設のご案内</a>
                <a href="#" class="p-welcome__btn c-btn c-btn--second">お問合せ</a>
            </div>
        </section>

        <section class="c-section p-service">
            <h2 class="c-section__title p-service__title">
            サービス
            </h2>

            <ul class="p-service__items">
                <li class="p-service__item c-intorduction__row u-mb--3l">
                    <div class="p-service__img c-introduction__rowImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/meal.jpeg" alt="サービスの画像" class="c-img">
                    </div>
                  <div class="p-service__itemTxt c-introduction__rowTxt--wrapper">
                    <h3 class="p-service__itemTitle c-introduction__rowTitle">食事</h3>
                    <div class="p-service__txt c-introduction__rowTxt">
                      <p>食事は生活に必要なものですが、はなまる荘では食事の時間も生きがいの時間と位置づけ、ワンランク上の食事を提供できるように努めております。<br>
                        はなまる荘で取り組んでいることは数多くありますが、その中でも食事の時間は一番大切な時間であるとしています。<br>
                        おいしい食事を提供することはもちろん、口腔ケアの実施や嚥下機能の向上。<br>
                        嚥下状態に合わせた食事の工夫にも力を入れております。</p>
                    </div>
                  </div>
                </li>

                <li class="p-service__item c-intorduction__row u-mb--3l">
                  <div class="p-service__img c-introduction__rowImg">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/meal.jpeg" alt="サービスの画像" class="c-img">
                  </div>
                  <div class="p-service__itemTxt c-introduction__rowTxt--wrapper">
                    <h3 class="p-service__itemTitle c-introduction__rowTitle">食事</h3>
                    <div class="p-service__txt c-introduction__rowTxt">
                      <p>食事は生活に必要なものですが、はなまる荘では食事の時間も生きがいの時間と位置づけ、ワンランク上の食事を提供できるように努めております。<br>
                        はなまる荘で取り組んでいることは数多くありますが、その中でも食事の時間は一番大切な時間であるとしています。<br>
                        おいしい食事を提供することはもちろん、口腔ケアの実施や嚥下機能の向上。<br>
                        嚥下状態に合わせた食事の工夫にも力を入れております。</p>
                    </div>
                  </div>
                </li>

                <li class="p-service__item c-intorduction__row u-mb--3l">
                    <div class="p-service__img c-introduction__rowImg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/meal.jpeg" alt="サービスの画像" class="c-img">
                    </div>
                    <div class="p-service__itemTxt c-introduction__rowTxt--wrapper">
                        <h3 class="p-service__itemTitle c-introduction__rowTitle">食事</h3>
                        <div class="p-service__txt c-introduction__rowTxt">
                            <p>食事は生活に必要なものですが、はなまる荘では食事の時間も生きがいの時間と位置づけ、ワンランク上の食事を提供できるように努めております。<br>
                              はなまる荘で取り組んでいることは数多くありますが、その中でも食事の時間は一番大切な時間であるとしています。<br>
                              おいしい食事を提供することはもちろん、口腔ケアの実施や嚥下機能の向上。<br>
                              嚥下状態に合わせた食事の工夫にも力を入れております。</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </main>

<?php get_footer(); ?>
