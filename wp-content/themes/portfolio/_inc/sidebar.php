<!-- サイドバー -->
<aside class="l-sidebar">
  <?php get_search_form(); ?>
  <div class="p-widget">
    <h3 class="p-widget__title">最近の投稿</h3>
      <ul class="p-widget__list">
        <li class="p-widget__item">
          <a href="#">サンプルテキストサンプルテキスト　サンプルテキストoverflow: hidden;</a>
        </li>
        <li class="p-widget__item">
          <a href="#">サンプル</a>
        </li>
        <li class="p-widget__item">
          <a href="#">サンプル</a>
        </li>
        <li class="p-widget__item">
          <a href="#">サンプル</a>
        </li>
      </ul>
    </h3>
  </div>

  <div class="p-widget">
    <h3 class="p-widget__title">最近のコメント</h3>
      <ul class="p-widget__list">
        <li class="p-widget__item">
          <a href="#">Hello world! に Mr WordPress より</a>
        </li>
        <li class="p-widget__item">
          <a href="#">サンプル</a>
        </li>
        <li class="p-widget__item">
          <a href="#">サンプル</a>
        </li>
        <li class="p-widget__item">
          <a href="#">サンプル</a>
        </li>
      </ul>
    </h3>
  
  </div>
  <div class="p-widget">
    <h3 class="p-widget__title">キーワード</h3>
      <ul class="p-widget__list">
        <?php
          $posttags = get_tags();
          if ($posttags) :
          foreach ($posttags as $tag) :
        ?>

        <li class="p-widget__item">
            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag keyword__tag"><?php echo $tag->name; ?></a>
        </li>
        <?php endforeach; endif; ?>
      </ul>
    </h3>
  </div>
</aside>