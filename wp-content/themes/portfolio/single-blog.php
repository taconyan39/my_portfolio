<?php get_header(); ?>

    <!-- ページタイトル -->
	<section class="page-title">
		<div class="u-site-width">
			<h2>ブログ</h2>
		</div>
	</section>

	<!-- breadcrumbs -->
	<?php get_template_part('_inc/breadcrumbs'); ?> 
    <!-- コンテンツ -->
	<div class="u-site-width flex-between u-mt--3l">
		<main class="l-main__2colum">
			<article class="p-blog">
				<h2 class="p-blog__title"><?php echo the_title(); ?></h2>
				<div class="p-blog__info">
					<ul>
						<li>
							<time><?php echo the_time('Y年m月d日'); ?></time>
						</li>
						<li>
							<span class="p-blog__category">カテゴリー：<?php echo the_category(); ?></span>
						</li>
					</ul>
				</div>
				<div class="p-blog__desc">
					<div class="p-blog__img c-img--outer">
						<img src="<?php echo get_field('blog_img'); ?>" alt="<?php echo the_title(); ?>" class="img">
					</div>
					<p><?php echo the_content(); ?></p>
				</div>
				<div class="c-tag__wrapper"><?php echo the_tags('<div class="c-tag top__tag">', '</div><div class="c-tag top__tag">','</div>'); ?></div>

				<!-- 投稿した事業所 -->
				<section class="l-section c-office-info">
					<h3 class="c-office-info__title">投稿した事業所</h3>
					<div class="c-office-info__item">
						<?php
								$post_object = get_field('blog_office');
								$image = get_post_meta($post_object, 'office_img', true);
								$size = 'thumbnail';
								?>
						<div class="c-office-info__img">
							<a href="<?php the_permalink(); ?>" class="c-office-info__img c-img--outer">
									<?php
										echo wp_get_attachment_image($image, $size, false,
											array(
												'class' => 'c-img__height--100'
											)
										);
								?>
							</a>
						</div>
						<div class="c-office-info__text">
								<h4 class="c-office-info__name">
									<a href="<?php the_permalink(); ?>"><?php echo get_the_title($post_object); ?></a>
								</h4>
							<div class="c-office-info__detail">
								<dl>
									<dt>住所</dt>
									<dd><?php echo get_post_meta($post_object, 'office_addr', true); ?></dd>
									<dt>TEL</dt>
									<dd><?php echo get_post_meta($post_object, 'office_tel', true); ?></dd>
									<dt>営業時間</dt>
									<dd><?php echo get_post_meta($post_object, 'office_time', true); ?></dd>
								</dl>
							</div>
						</div>
					</div>
				</section>
				<div class="p-blog__desc-bottom">
						<a href="#">新しい記事へ</a>
						<a href="#">古い記事へ</a>
				</div>
				<div class="p-blog__comment">
						<form for="" class="p-blog__comment-form c-form">
								<label for="name">名前<span>必須</span>
										<input type="text" id="name">
								</label>
								<label for="comment">コメント
										<textarea name="comment" id="" cols="100%" rows="6"></textarea>
								</label>
								<label for="btn">
										<input type="button" value="送信" id="btn">
								</label>
						</form>
				</div>
			</article>
		</main>
		<?php get_template_part('_inc/sidebar'); ?>
	</div>
<?php get_footer(); ?>
