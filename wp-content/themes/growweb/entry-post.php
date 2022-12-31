<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>    
    <?php if ( is_singular() ) { echo '<h1 class="entry-title" itemprop="headline">'; } else { echo '<h2 class="entry-title">'; } ?>
        <?php the_title(); ?>
    <?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>
    <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
    <?php if ( !is_search() ) { get_template_part( 'entry', 'post-meta' ); } ?>
</header>
    <?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
</article>