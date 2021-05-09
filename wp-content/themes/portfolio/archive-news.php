<?php get_header(); ?>

    <!-- ページタイトル -->
    <section class="page-title">
      	<div class="u-site-width">
        	<h2>お知らせ一覧</h2>
      	</div>
    </section>

		<!-- パンくずリスト -->
		<?php get_template_part('_inc/breadcrumbs'); ?>
		<!-- /パンくずリスト -->
		
    <!-- コンテンツ -->
    <div class="u-site-width u-flex--between">
		<main class="l-main__2colum">
			<section class="p-news-archive">
				<ul class="p-news-archive__list">
					<!-- 全件表示のサブループ -->
					<?php
						$args = array(
							'post_type' => 'news',
							'order' => 'DESC',
							'posts_per_page' => -1
						);
						$my_query = new WP_Query($args);
						if (have_posts()):
						while (have_posts()): the_post();
					?>
					<li class="p-news-archive__item-wrapper">
						<div class="p-news-archive__item">
							<div class="p-news-archive__img c-img--outer">
								<img src="<?php echo get_field('news_img'); ?>" alt="" class="c-img">
							</div>
							<div class="p-news-archive__text">
								<div class="p-news-archive__top"><time><?php the_time('Y年m月d日'); ?></time></div>
								<div class="p-news-archive__body">
									<h2 class="p-news-archive__title">
									<?php the_title(); ?>
									</h2>
									<p><?php the_content('news'); ?></p>
								</div>
							</div>
							<?php if(get_field('news_link')): ?>
								<a href="<?php echo get_field('news_link'); ?>" class="p-news-archive__link">ページリンク &gt;&gt;</a>
							<?php endif; ?>
						</div>
					</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>
			</section>

		</main>
      
      <?php get_template_part('_inc/sidebar'); ?>
    </div>
<?php get_footer(); ?>