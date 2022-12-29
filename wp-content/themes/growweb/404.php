<?php get_header("post"); ?>
<article id="post-0" class="post not-found">
    <header class="header">
        <div>
            <h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Not Found', 'growweb' ); ?></h1>
        </div>
    </header>
    <div class="entry-content" itemprop="mainContentOfPage">
            <p class="not-found-text"><?php esc_html_e( 'Nothing found for the requested page. Try a search instead?', 'growweb' ); ?></p>
            <?php get_search_form(); ?>
    </div>
</article>
<?php get_footer(); ?>