<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php get_template_part('_inc/title_info'); ?>
    <!-- <link rel="stylesheet" type="text/css" href="./assets/css/reset.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="./assets/css/common.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>
    <script src="https://kit.fontawesome.com/8e92148154.js" crossorigin="anonymous"></script>

    <!-- デフォルトのjQueryを読み込まないようにする -->
    <?php  wp_deregister_script('jquery'); ?>
    <?php wp_head(); ?>
</head>

<body class="">
  <header class="l-header p-front-header">
    <div class="p-front-header__width">
      <h1 class="p-front-header__logo c-img--outer">
        <a href="<?php echo home_url('index'); ?>">
         <!-- TODO retina対応する -->
          <img class="c-img__height--100" src="<?php echo get_template_directory_uri(); ?>/assets/image/front-page/HanaMARU.png" alt="">
        </a>
      </h1>
      <nav class="p-front-header__nav">
        <!-- スムーススクロール -->
        <ul class="p-front-header__nav--wrapper">
          <li class="p-front-header__nav-item">
            <a href="#wp">WordPress</a>
          </li>
          <li class="p-front-header__nav-item">
            <a href="#laravel">Laravel</a>
          </li>
          <li class="p-front-header__nav-item">
            <a href="#html">HTML&CSS</a>
          </li>
          <li class="p-front-header__nav-item">
            <a href="#skill">Skill</a>
          </li>
        </ul>
      </nav>
      <a href="<?php echo home_url('contact'); ?>" class="p-front-header__demo-link">お問い合わせ</a>
      <div class="p-front-header__btn-menu--wrapper">
        <input type="checkbox" id="nav-menu">
        <label for="nav-menu" class="header__btn-menu"><span></span></label>
      </div>
    </div>
  </header>
  <!-- スマホ用nav -->
  <nav class="p-front-header__nav--smp">
    <ul class="p-front-header__nav--wrapper">
      <li class="p-front-header__nav-item">
        <a href="#wp">WordPress</a>
      </li>
      <li class="p-front-header__nav-item">
        <a href="#php">Laravel</a>
      </li>
      <li class="p-front-header__nav-item">
        <a href="#html">HTML&CSS</a>
      </li>
    </ul>
  </nav>
  <!-- /ヘッダーメニュー -->

  <section class="p-front-hero">
    <div class="p-front-hero__bottom">
      <div class="p-front-hero__news">
        <p class="p-front-hero__news-left">
          What's NEW?
        </p>
        <a class="p-front-hero__news-link" href="<?php echo get_post_type_archive_link('news'); ?>">一覧を見る</a>
        <?php
          $args = array(
            'post_type' => 'news',
            'order' => 'DESC',
            'posts_per_page' => 1
          );
          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) :
          while ($my_query->have_posts()) : $my_query->the_post();
        ?>
        <div class="p-front-hero__news-content">
          <time><?php echo get_field('news_date'); ?></time>
          <a href="<?php echo get_field('news_link'); ?>"><?php echo the_title(); ?></a>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
      <div class="p-front-hero__bottom-arrow">
      </div>
    </div>
  </section>

  <main>
    <!-- section A -->
    <section class="l-section p-front-section u-site-width" id="wp">
      <div class="p-front-section__title--wrapper">
        <span class="p-front-section__title--sub">Welcome</span>
        <h2 class="p-front-section__title">ようこそ</h2>
      </div>
      <div class="p-front-section__content">
        <h3 class="p-front-section__catchycopy">当サイトについて</h3>
        <p class="p-front-section__desc">
          この度はご訪問ありがとうございます。<br>
          当サイトは田島康史のポートフォリオサイトになっております。
          <br>
          こちらのサイトは介護施設をイメージして、WordPressで作成しております。
          <br>
          他のページもございますので、ぜひ御覧ください。
        </p>
      </div>
      <div class="p-front-section__btn--wrapper u-flex--center">
        <a href="<?php echo home_url('index'); ?>" class="c-btn c-btn--main p-front-section__btn">詳しく見る</a>
      </div>
    </section>
    <!-- /section A -->

    <!-- section B -->
    <div class="p-front-section__bg--about">
      <div class="p-front-section__layor">
        <section class="l-section p-front-section u-site-width" id="laravel">
          <div class="p-front-section__title--wrapper">
            <span class="p-front-section__title--sub-white">Laravel</span>
            <h2 class="p-front-section__title ">Proposal</h2>
          </div>
          <div class="p-front-section__content">
            <h3 class="p-front-section__catchycopy">企画書投稿サイト</h3>
            <p class="p-front-section__desc--bg">
              Laravelの勉強用に作成した企画書投稿サイトです。<br>
              ユーザー登録、記事投稿、お気に入り機能、レビュー機能などを実装しております。
              <br>
              フロントはVue.jsをしております。
            </p>
          </div>
          <div class="p-front-section__btn--wrapper u-flex--center">
            <a href="https://proposal-t.com/" class="c-btn c-btn--main p-front-section__btn">詳しく見る</a>
          </div>
        </section>
      </div>
    </div>
    <!-- / section B -->

    <!-- section C -->
    <section class="p-front-section__career" id="html">
      <div class="p-front-section__two-split">
        <div class="p-front-section__career--text">
          <div class="p-front-section__title--wrapper">
            <span class="p-front-section__title--sub">HTML&CSS</span>
            <h2 class="p-front-section__title--half">葉月しあポートフォリオサイト</h2>
            <p class="p-front-section__desc--half">
              こちらのサイトはイラストレーターの友人に作成したポートフォリオサイトです。
              <br>
              Bootstapで作成しております。
            </p>
            <a href="https://shiahadzuki.com/" class="c-btn c-btn--main p-front-section__career-btn">詳しく見る</a>
          </div>
        </div>
        <div class="p-front-section__career--img c-img--outer">
          <img class="c-img__w--100" src="<?php echo get_template_directory_uri(); ?>/assets/image/front-page/design_img_1__lg.png" alt="">
          
        </div>
      </div>
    </section>
    <!-- /section C -->

    <div class="p-front-section__bg">
      <!-- TODO 画像が荒い -->
      <section class="l-section p-front-section u-site-width" id="skill">
        <div class="p-front-section__title--wrapper">
          <span class="p-front-section__title--sub">Skill</span>
          <h2 class="p-front-section__title">スキル紹介</h2>
        </div>
        <ul class="p-front-section__card--container c-attention__list">
          <li class="p-front-section__card--stuff c-attention__item">
            <p class="p-front-section__card-img--outer c-img--outer">
              <img class="c-img__w--100" src="<?php echo get_template_directory_uri(); ?>/assets/image/front-page/icon_php.png" alt="">
            </p>
            <p class="c-attention__name">PHP</p>
          </li>
          <li class="p-front-section__card--stuff c-attention__item">
            <p class="p-front-section__card-img--outer c-img--outer">
              <img class="c-img__w--100" src="<?php echo get_template_directory_uri(); ?>/assets/image/front-page/wordpress.png" alt="">
            </p>
            <p class="c-attention__name">WordPress</p>
          </li>
          <li class="p-front-section__card--stuff c-attention__item">
            <p class="p-front-section__card-img--outer c-img--outer">
              <img class="c-img__w--100" src="<?php echo get_template_directory_uri(); ?>/assets/image/front-page/laravel.png" alt="">
            </p>
            <p class="c-attention__name">Laravel</p>
          </li>
          <li class="p-front-section__card--stuff c-attention__item">
            <p class="p-front-section__card-img--outer c-img--outer">
              <img class="c-img__w--100" src="<?php echo get_template_directory_uri(); ?>/assets/image/front-page/icon_vue.png" alt="">
            </p>
            <p class="c-attention__name">Vue</p>
          </li>
        </ul>
      </section>
    </div>
    <!-- / section D -->

    <!-- section E -->
    <div class="p-front-section__link--wrapper">
      <section class="p-front-section" id="contact">
        <div class="p-front-section__two-split">
          <a href="<?php echo home_url('index'); ?>" class="p-front-section__two-split--inner">
            <p class="c-img--outer p-front-section__link-item">
              <img class="c-img__height--100" src="<?php echo get_template_directory_uri(); ?>/assets/image/front-page/design_img_2.png" alt="">
            </p>
            <div class="p-front-section__link-item">
              <div class="p-front-section__title--wrapper">
                <span class="p-front-section__title--sub">WordPress</span>
                <p class="p-front-section__title--text">はなまる会</p>
              </div>
            </div>
          </a>
          <a href="https://proposal-t.com/" class="p-front-section__two-split--inner">
            <p class="c-img--outer p-front-section__link-item">
              <img class="c-img__height--100" src="<?php echo get_template_directory_uri(); ?>/assets/image/front-page/proposal_lg.png" alt="">
            </p>
            <div class="p-front-section__link-item">
              <div class="p-front-section__title--wrapper">
                <span class="p-front-section__title--sub">Laravel</span>
                <p class="p-front-section__title--text">Proposal</p>
              </div>
            </div>
          </a>
        </div>
      </section>
    </div>
    <!-- /section E -->

    <!-- section F -->
    <section class="l-section p-front-section u-site-width">
      <div class="p-front-section__title--wrapper">
        <span class="p-front-section__title--sub">お問い合わせ</span>
        <p class="u-mt--lg">
          お気軽にお問い合わせください</p>
      </div>
      <div class="p-front-section__btn--wrapper u-flex--center">
        <a href="<?php echo home_url('contact'); ?>" class="c-btn c-btn--main p-front-section__btn">お問い合わせページへ</a>
      </div>
    </section>
    <!-- /section F -->
  </main>

  <footer class="p-front-footer">
    <div class="p-front-footer__width">
      <ul class="p-front-footer__list">
        <li class="p-front-footer__item"><a href="#">プライバシーポリシー</a></li>
        <li class="p-front-footer__item"><a href="">FacebookFacebook</a></li>
        <li class="p-front-footer__item"><a href="">プライバシーポリシー</a></li>
      </ul>
      <p class="p-front-footer__copyright">&copy; 2021 ochazukeyaro</p>
      <p class="p-front-footer__link">
        デモサイトを見る
      </p>
    </div>
  </footer>
</body>

</html>