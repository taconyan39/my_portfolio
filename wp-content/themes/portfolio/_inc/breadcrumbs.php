<nav class="u-site-width">
  <ol class="c-breadcrumbs">
    <li class="c-breadcrumbs__item">
      <a href="<?php echo home_url(); ?>">ホーム</a>
    </li>
    <!-- ブログ一覧 -->
    <?php if(is_post_type_archive('blog')) : ?>
      <li class="c-breadcrumbs__item">ブログ一覧</li>
    <!-- ブログ詳細 -->
    <?php elseif(is_singular('blog')): ?>
      <li class="c-breadcrumbs__item">
        <a href="<?php echo get_post_type_archive_link('blog'); ?>">ブログ一覧</a>
      </li>
      <li class="c-breadcrumbs__item">
        <?php echo the_title(); ?>
      </li>
    <!-- /ブログ -->

    <!-- おしらせ一覧 -->
    <?php elseif(is_post_type_archive('news')) : ?>
      <li class="c-breadcrumbs__item">おしらせ一覧</li>
    <!-- /お知らせ -->

    <!-- 写真一覧 -->
    <?php elseif(is_post_type_archive('photo')): ?>
      <li class="c-breadcrumbs__item">写真一覧</li>
    <!-- 写真詳細 -->
    <?php elseif(is_singular('photo')): ?>
      <li class="c-breadcrumbs__item"><a href="<?php echo get_permalink( get_page_by_path(album)->ID); ?>"><span><?php echo the_title(); ?></span></li>
      <li class="c-breadcrumbs__item">
        <?php
          $terms = get_the_terms($post->ID, 'album');
          foreach($terms as $term){
            $term_link = get_term_link($term);
        ?>
        <a href="<?php echo $term_link; ?>"><?php echo $term->name; ?>一覧</a>
        <?php } ?>
      </li>
      <li class="c-breadcrumbs__item">
        <?php echo the_title(); ?>
      </li>
    <!-- 事業所一覧 -->
    <?php elseif(is_post_type_archive('office')) :?>
      <li class="c-breadcrumbs__item">事業所一覧</li>
    <!-- 事業所詳細 -->
    <?php elseif(is_singular('office')) :?>
      <li class="c-breadcrumbs__item">
        <a href="<?php echo get_post_type_archive_link('office'); ?>">事業所一覧</a>
      </li>
      <li class="c-breadcrumbs__item"><?php echo get_the_title(); ?>
      </li>
    <!-- タグ -->
    <?php elseif(is_tag()) : ?>
      <li class="c-breadcrumbs__item">
        <a href="<?php echo get_post_type_archive_link('blog'); ?>">ブログ一覧</a>
      </li>
      <li class="c-breadcrumbs__item">
        <?php single_term_title(); ?>
      </li>
    <!-- 固定ページ -->
    <?php elseif(is_page('album')) : ?>
      <li class="c-breadcrumbs__item">
        アルバム
      </li>
    <!-- アルバムタクソノミーページ -->
    <?php elseif(is_tax('album')) : ?>
      <li class="c-breadcrumbs__item">
        <a href="<?php echo get_permalink(get_page_by_path('album')->ID); ?>">アルバム</a>
      </li>
      <li class="c-breadcrumbs__item">
        <?php echo single_term_title(); ?>の写真一覧
      </li>
    <!-- 事業所ブログ、タクソノミーページ -->
    <?php elseif(is_tax('input_blog_office')) : ?>
      <li class="c-breadcrumbs__item">
        <a href="<?php echo get_post_type_archive_link('blog'); ?>">アルバム</a>
      </li>
      <li class="c-breadcrumbs__item">
        <?php echo single_term_title(); ?>写真一覧
      </li>
    <!-- 事業所写真一覧 -->
    <?php elseif(is_tax('input_blog_office')) : ?>
      <li class="c-breadcrumbs__item">
        <a href="<?php echo get_permalink(get_page_by_path('album')->ID); ?>">写真一覧</a>
      </li>
      <li class="c-breadcrumbs__item">
        <?php echo single_term_title(); ?>の写真一覧
      </li>
    <?php endif; ?>
  </ol>
</nav>