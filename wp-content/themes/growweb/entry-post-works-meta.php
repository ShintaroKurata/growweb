<div class="entry-works-meta">
    <time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" title="<?php echo esc_attr( get_the_date() ); ?>" <?php if ( is_single() ) { echo 'itemprop="datePublished" pubdate'; } ?>><?php echo get_the_date( 'Y' ); ?>年</time>
    <div class="cat-links">
        <span class="cat-links-item">
            <?php if (has_term('','works_cat' )):?>
                <?php echo get_the_term_list($post->ID, 'works_cat','','</span><span class="cat-links-item">',''); ?>
            <?php else: ?>
            <?php endif; ?>
        </span>
    <div>
    <div class="tag-links">
        <span class="tag-links-item"><?php the_tags(); ?></span>
    </div>
    <?php if ( is_single() ) { echo '<meta itemprop="dateModified" content="' . esc_attr( get_the_modified_date() ) . '" />'; } ?>
</div>