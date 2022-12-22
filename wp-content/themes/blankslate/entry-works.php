<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>
    <a href="<?php the_permalink(); ?>">
    <div class="works-image">
        <?php if(has_post_thumbnail()): ?>
            <?php echo get_the_post_thumbnail($post->ID,'grid') ?>
        <?php else: ?>
            <img src="wp-content/themes/growweb/assets/images/business-hero.jpeg" alt="サムネイル">
        <?php endif; ?>
    </div>
    </a>
    <?php if ( !is_search() ) { get_template_part( 'entry', 'works-meta' ); } ?>
    <?php if ( is_singular() ) { echo '<h1 class="entry-title" itemprop="headline">'; } else { echo '<h2 class="entry-title">'; } ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
    <?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
</header>
</article>