<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<aside id="sidebar" role="complementary">
    <div id="primary" class="widget-area">
        <ul class="xoxo">
            <?php dynamic_sidebar( 'primary-widget-area' ); ?>
            <ul>
                <?php
                query_posts('showposts=5&post_type=works');
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                <li class="side-works-list-item">
                    <div>
                        <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="side-cat-links">
                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                        <span class="side-cat-links-item">
                            <?php if (has_term('','works_cat' )):?>
                                <?php echo get_the_term_list($post->ID, 'works_cat','','</span><span class="cat-links-item">',''); ?>
                            <?php else: ?>
                            <?php endif; ?>
                        </span>
                    </div>
                </li>
                <?php endwhile; endif; ?>
            </ul>
        </ul>
    </div>
</aside>
<?php endif; ?>