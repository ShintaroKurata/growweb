<a class="item-link" href="<?php the_permalink(); ?>">
    <div class="grid-item">
        <div class="blog-image-area">
            <div class="blog-image"><?php the_post_thumbnail(); ?></div>
            <div class="blog-category">
                テスト
            </div>
        </div>
        <div class="blog-text">
            <time class="release"><?php the_time('Y.m.d'); ?></time>
            <div class="blog-title"><?php the_title(); ?></div>
            <div class="blog-description">ブログディスクリプション</div>
        </div>
    </div>
</a>