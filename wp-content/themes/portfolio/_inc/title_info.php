<title>
	<?php bloginfo('name'); ?>
	 | 
	<?php
		global $page, $paged;
		if(is_front_page()) : // トップページ
	?>
	笑顔を作る、はなまるサービス
	<?php
		elseif(is_page('album') || is_single() || is_tax('album') || is_tag()) :
			wp_title("");
		elseif(is_post_type_archive('office')):
	?>
		事業所一覧
	<?php elseif(is_post_type_archive('news')): ?>
		お知らせ一覧
	<?php elseif(is_post_type_archive('blog')): ?>
		ブログ一覧
	<?php endif; ?>
</title>