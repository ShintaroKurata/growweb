<a class="item-link" href="<?php the_permalink(); ?>">
    <div class="grid-item">
        <div class="blog-image-area">
            <?php the_post_thumbnail('grid'); ?>
            <div class="blog-category">
                <?php
                $terms = get_the_terms($post->ID,'works_cat');
                    echo $terms[0]->name;
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