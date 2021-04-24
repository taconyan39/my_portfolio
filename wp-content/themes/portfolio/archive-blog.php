<?php get_header(); ?>

    <!-- ページタイトル -->
    <section class="page-title">
      	<div class="u-site-width">
        	<h2>ブログ一覧ページ</h2>
      	</div>
    </section>

		<!-- パンくずリスト -->
		<?php get_template_part('_inc/breadcrumbs'); ?>
		<!-- /パンくずリスト -->
		
    <!-- コンテンツ -->
    <div class="u-site-width flex-between">
		<main class="l-main__2colum">
			<section class="p-blog-archive">
				<ul class="p-blog-archive__list">
					<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post(); ?>
					<li class="p-blog-archive__item-wrapper">
						<a href="<?php the_permalink(); ?>" class="p-blog-archive__item">
							<div class="p-blog-archive__img c-img--outer">
								<img src="<?php echo get_field('blog_img'); ?>" alt="" class="c-img">
							</div>
							<div class="p-blog-archive__text">
								<div class="p-blog-archive__top"><time><?php the_time('Y年m月d日'); ?></time></div>
								<div class="p-blog-archive__body">
									<h2 class="p-blog-archive__title">
									<?php the_title(); ?>
									</h2>
									<p><?php the_content('blog'); ?></p>
								</div>
							</div>
						</a>
					</li>
					<?php endwhile; endif; ?>
				</ul>
			</section>

			<?php get_template_part('_inc/pager'); ?>
		</main>
      
      <?php get_template_part('_inc/sidebar'); ?>
    </div>
<?php get_footer(); ?>