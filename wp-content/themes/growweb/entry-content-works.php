<div class="entry-content-works" itemprop="mainEntityOfPage">
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="works-thumbnail">
            <?php the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); ?>
        </div>
    <?php endif; ?>
    <meta itemprop="description" content="<?php echo esc_html( wp_strip_all_tags( get_the_excerpt(), true ) ); ?>" />
        <section class="post-works-content" itemprop="text">
            <?php the_content(); ?>
        </section>
    <div class="entry-links"><?php wp_link_pages(); ?></div>
</div>