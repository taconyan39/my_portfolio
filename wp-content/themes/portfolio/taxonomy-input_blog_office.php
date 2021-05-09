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
    <div class="u-site-width u-flex--between">
		<main class="l-main__2colum">
			<section class="p-blog-archive">
				<ul class="p-blog-archive__list">
				<?php
					$type = get_query_var('input_blog_office');
					$paged = get_query_var('paged') ? get_query_var('paged') : 1;
					$args = array(
					'tax_query' => array(
						array(
						'taxonomy' => 'input_blog_office',
						'field' => 'slug',
						'terms' => $type
						),
					),
					'post_type' => 'blog',
					'order' => 'DESC',
					'paged' => $paged
					);
					$my_query = new WP_Query($args);
					$pages = $my_query->max_num_pages;
					$wp_query->max_num_pages = $pages;

					if($my_query->have_posts()) :
					while($my_query->have_posts()) :
					$my_query->the_post();
					
					$post_object = get_field('blog_office');
				?>
				<li class="p-blog-archive__item-wrapper">
					<div class="p-blog-archive__item">
					<div class="p-blog-archive__img c-img--outer">
						<img src="<?php echo get_field('blog_img'); ?>" alt="" class="c-img">
					</div>
					<div class="p-blog-archive__text">
						<div class="p-blog-archive__top"><time><?php the_time('Y年m月d日'); ?></time></div>
						<div class="p-blog-archive__body">
						<a href="<?php the_permalink(); ?>">
							<h2 class="p-blog-archive__title">
							<?php the_title(); ?>
							</h2>
						</a>
						<p><?php the_content('blog'); ?></p>
						</div>
					</div>
					</div>
				</li>
				<?php endwhile; endif; ?>
				</ul>
			</section>

			<?php get_template_part('_inc/pager'); ?>
			<!-- 投稿した事業所の情報 -->
			<section class="l-section p-photo__office c-office-info">
				<div class="c-photo-info__item">
					<?php
						$term_id = get_queried_object_id();
						// タームIDスペシャル
						$term_idsp = 'album_office_'.$term_id; //タクソノミー名前＿+ term_id
						$post_object = get_field('link_office', $term_idsp);
						$image = get_post_meta($post_object, 'office_img', true);
						$size = 'thumbnail';
					?>
					<div class="c-photo-info__img">
						<?php echo wp_get_attachment_image($image, $size, false,
						array(
							'class' => 'c-img__height--100'
						)); ?>
					</div>
					<div class="c-photo-info__text p-photo-__photo-info">
						<h3 class="c-photo-info__name"><?php echo get_the_title($post_object); ?></h3>
						<div class="c-photo-info__detail">
							<dl>
								<dt>住所</dt>
								<dd><?php echo get_post_meta($post_object, 'office_addr', true); ?></dd>
								<dt>Tel</dt>
								<dd><?php echo get_post_meta($post_object, 'office_tel', true); ?></dd>
								<dt>営業時間</dt>
								<dd><?php echo get_post_meta($post_object, 'office_time', true); ?></dd>
							</dl>
						</div>
						<div class="c-photo-info__link">
							<a class="c-photo-info__link-btn" href="<?php echo get_permalink($post_object); ?>">こちらの事業所を見る</a>
						</div>
					</div>
				</div>
			</section>
		</main>
      
      <?php get_template_part('_inc/sidebar'); ?>
    </div>
<?php get_footer(); ?>