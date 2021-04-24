<?php get_header(); ?>

    <!-- ページタイトル -->
    <section class="page-title">
      <div class="u-site-width">
			<h2>事業所</h2>
      </div>
    </section>

		<!-- パンくずリスト -->
		<?php get_template_part('_inc/breadcrumbs'); ?>
		<!-- /パンくずリスト -->
  
    <!-- コンテンツ -->
    <div class="u-site-width flex-between"></div>
		<main class="l-main">
			<article class="p-office">
				<div class="p-office__img">
					<img src="<?php echo get_field('office_img'); ?>" alt="">
				</div>
				<!-- office-info -->
				<section class="l-section">
					<h2 class="p-office__title l-section__title">事業所情報</h2>
					<h3 class="p-office__name"><?php echo the_title(); ?></h3>
					<dl>
						<dt>住所</dt>
						<dd><?php echo get_field('office_addr'); ?></dd>
						<dt>TEL</dt>
						<dd><?php echo get_field('office_tel'); ?></dd>
						<dt>FAX</dt>
						<dd><?php echo get_field('office_fax'); ?></dd>
						<dt>営業時間</dt>
						<dd><?php echo get_field('office_open'); ?>~<?php echo get_field('office_close'); ?></dd>
						<dt>サービス区分</dt>
						<dd><?php echo get_field('office_type'); ?></dd>
					</dl>
				</section>
				<!-- access -->
				<section class="l-section">
					<h2 class="p-office__title l-section__title">アクセス</h2>
					<div class="c-container">
						<?php echo get_field('office_map'); ?>
					</div>
				</section>
			</article>
		</main>
    </div>
<?php get_footer(); ?>
