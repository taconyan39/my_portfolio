<?php get_header(); ?>

  <?php
    if(have_posts() && get_search_query()) :
		while (have_posts()) :
		the_post();
		get_template_part( '_inc/search');
	endwhile;
?>

<?php else : ?>
	<div class="col_full">
		<div class="wrap-col">
			<p>検索ワードに該当する記事がありませんでした。</p>
		</div>
	</div>

<?php endif; ?>

<?php get_footer(); ?>