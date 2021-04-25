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
	<div class="u-site-width u-flex--between">
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
								$size = 'full';
								?>
						<div class="c-office-info__img">
							<a href="<?php the_permalink(); ?>" class="c-img--outer u-height--100">
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
							<div class="c-office-info__link">
								<a class="c-office-info__link-btn c-btn c-btn--sub" href="<?php the_permalink($post_object); ?>">こちらの事業所を見る</a>
							</div>
						</div>
					</div>
				</section>
				<?php
					$prev_post = get_previous_post();
					$next_post = get_next_post();
				?>
				<div class="p-blog__desc-bottom">
					<?php if($prev_post): ?>	
						<a class="c-link__underline" href="<?php echo get_the_title($prev_post->ID); ?>">古い記事へ</a>
					<?php endif; ?>
					<?php if($next_post): ?>
						<a class="c-link__underline" href="<?php echo get_the_title($next_post->ID); ?>">新しい記事へ</a>
					<?php endif; ?>
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
