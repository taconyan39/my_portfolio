<?php get_header(); ?>

  <!-- ページタイトル -->
  <section class="page-title">
    <div class="u-site-width">
      <h2>事業所一覧</h2>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('_inc/breadcrumbs'); ?>
  <!-- /パンくずリスト -->
  
  <!-- コンテンツ -->
  <div class="u-site-width"></div>
    <main class="l-main">
      <section class="l-section p-office-list">
        <ul class="p-office-list__wrapper">
          <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>" class="p-office-list__item">
              <div class="c-img--outer p-office-list__img">
                <img src="<?php echo get_field('office_img'); ?>" alt="<?php echo the_title(); ?>" class="c-img">
              </div>
              <h3 class="p-office-list__title"><?php the_title(); ?></h3>
              <dl>
                <dt>住所</dt>
                <dd><?php echo get_field('office_addr'); ?></dd>
                <dt>TEL</dt>
                <dd><?php echo get_field('office_tel'); ?></dd>
                <dt>営業時間</dt>
                <dd><?php echo get_field('office_time'); ?></dd>
              </dl>
            </a>
          </li>
          <?php endwhile; endif; ?>
        </ul>
      </section>
      <?php get_template_part('_inc/pager'); ?>
    </main>
  </div>
  <?php get_footer(); ?>
