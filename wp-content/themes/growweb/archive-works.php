<?php get_header("page"); ?>
<header class="header archive-header">
    <h1 class="archive-works-title" itemprop="name">Works</h1>
    <div class="archive-meta archive-works-meta" itemprop="description">
        <p>お客様とのウェブ制作に関する契約上、実績の一部のみ公開しております。<br>その他の制作実績についてはお問い合わせよりご依頼いただければ個別に対応いたします。</p>
    </div>
</header>
<section class="grid-section">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry-works' ); ?>
    <?php endwhile; endif; ?>
</section>
<?php get_template_part( 'nav', 'below' ); ?>
<?php get_footer(); ?>