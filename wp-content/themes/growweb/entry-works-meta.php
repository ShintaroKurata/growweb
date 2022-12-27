<div class="entry-works-meta">
    <time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" title="<?php echo esc_attr( get_the_date() ); ?>" <?php if ( is_single() ) { echo 'itemprop="datePublished" pubdate'; } ?>><?php the_time( get_option( 'date_format' ) ); ?></time>
    <span class="cat-links">
                <?php
                $terms = get_the_terms($post->ID,'works_cat');
                    echo $terms[0]->name;
                ?>
    </span>
    <span class="tag-links"><?php the_tags(); ?></span>
    <?php if ( is_single() ) { echo '<meta itemprop="dateModified" content="' . esc_attr( get_the_modified_date() ) . '" />'; } ?>
</div>