<!-- フッター -->
<footer class="l-footer">
    <div class="u-site-width">
        <div class="l-footer__content">
            <div class="l-footer__logo">
                <h2 class="c-img--outer l-footer__logo--outer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" alt="" class="c-img" alt="はなまるのロゴ">
                </h2>
              </div>
            <nav class="l-footer__nav">
				<ul class="l-footer__nav-list">
					<li class="l-footer__nav-item"><a href="<?php echo home_url(); ?>">ホーム</a></li>
					<li class="l-footer__nav-item"><a href="https://proposal-t.com">ポートフォリオ</a></li>
					<li class="l-footer__nav-item"><a href="<?php echo home_url('demo'); ?>">デモサイト</a></li>
					<li class="l-footer__nav-item"><a href="<?php echo get_post_type_archive_link('office'); ?>">事業所</a></li>
					<li class="l-footer__nav-item"><a href="<?php echo get_post_type_archive_link('photo'); ?>">写真</a></li>
					<li class="l-footer__nav-item"><a href="<?php echo get_post_type_archive_link('blog'); ?>">ブログ</a></li>
					<li class="l-footer__nav-item"><a href="<?php echo home_url('contact'); ?>">お問い合わせ</a></li>
				</ul>
            </nav>
        </div>
        <p class="l-footer__copyright">Copyright Ochazukeyaro. All Rights Reserved.</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>