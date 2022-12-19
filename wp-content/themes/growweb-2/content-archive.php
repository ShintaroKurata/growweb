<a class="item-link" href="<?php the_permalink(); ?>">
    <div class="grid-item">
        <div class="blog-image-area">
            <div class="blog-image"><?php the_post_thumbnail('grid'); ?></div>
            <div class="blog-category">
                <?php
                $category = get_the_category(); 
                echo $category[0]->cat_name;
                ?>
            </div>
        </div>
        <div class="blog-text">
            <time class="release"><?php the_time('Y.m.d'); ?></time>
            <div class="blog-title"><?php the_title(); ?></div>
            <div class="blog-description"><?php echo get_the_excerpt(); ?></div>
        </div>
    </div>
</a>