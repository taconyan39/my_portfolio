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
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>
    <script src="https://kit.fontawesome.com/8e92148154.js" crossorigin="anonymous"></script>

    <!-- デフォルトのjQueryを読み込まないようにする -->
    <?php  wp_deregister_script('jquery'); ?>
    <?php wp_head(); ?>
</head>

<body class="l-body">
    <!-- header -->
    <header class="header">
      <ul class="header__item">
        <li class="header__tel">
          <i class="fas fa-phone-alt fa-xs"></i>06-1234-0000</li>
        <li class="header__btn">店舗情報・アクセス</li>
        <li class="header__btn-menu--wrapper">
          <input type="checkbox" id="nav-menu">
          <label for="nav-menu" class="header__btn-menu"><span></span></label>
          <p class="header__btn-menu--text">MENU</p>
        </li>
      </ul>
    </header>

    <section class="index-heading">
      <div class="site-width">
        <h1 class="logo"><img class="c-img" src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" alt="はなまるのロゴ"></h1>
      </div>
      <nav class="c-nav js-nav">
        <ul class="c-nav__list">
          <li class="c-nav__item"><a href="<?php echo home_url(); ?>">ホーム</a></li>
          <li class="c-nav__item"><a href="https://proposal-t.com">ポートフォリオ</a></li>
          <li class="c-nav__item"><a href="<?php echo home_url('demo'); ?>">デモサイト</a></li>
          <li class="c-nav__item"><a href="<?php echo get_post_type_archive_link('office'); ?>">事業所</a></li>
          <li class="c-nav__item"><a href="<?php echo home_url('album'); ?>">アルバム</a></li>
          <li class="c-nav__item"><a href="<?php echo get_post_type_archive_link('blog'); ?>">ブログ</a></li>
          <li class="c-nav__item"><a href="<?php echo home_url('contact'); ?>">お問い合わせ</a></li>
        </ul>
      </nav>
    </section>

      