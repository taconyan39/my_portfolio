<section class="l-section c-attention">
    <h2 class="c-attention__title">こんな写真もあります</h2>
    <ul class="p-photo__attention-img c-attention__list">
        <?php
            $countUp = 0;
            $taxonomy_name = 'album';
            $taxonomys = get_terms($taxonomy_name);
            
            if(!is_wp_error($taxonomys) && count($taxonomys)):
            foreach($taxonomys as $taxonomy):

            $term_id = esc_html($taxonomy->term_id);
            $term_idsp = "album_".$term_id;//タクソノミー名前＿+ term_id
            $photo = get_field('album_top_img', $term_idsp); //タクソノミー名を入力する
            if($countUp < 4){
                $terms = get_the_terms($post->ID, 'album');
                foreach($terms as $term){
                    $term_link = get_term_link($term);
                if(esc_html($taxonomy->name === $term->name)){
                  // 同じ名前のタクソノミーは表示されないようにしている
                    $countUp--;
                }else{
        ?>
            
        <li class="c-img--outer">
            <a href="c-attention__item">
                <p class="c-img--outer c-attention__img">
                    <img class="c-img" src="<?php echo $photo; ?>" alt="<?php echo esc_html($taxonomy->name); ?>">
                </p>
                <p class="c-attention__name"><?php echo esc_html($taxonomy->name); ?></p>
            </a>
        </li>
        <?php }}} ?>
        <?php $countUp++; endforeach;endif; ?>
    </ul>
</section>