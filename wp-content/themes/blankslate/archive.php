<?php get_header("post"); ?>
<header class="header archive-header">
<h1 class="archive-works-title" itemprop="name"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h1>
<div class="archive-meta" itemprop="description"><?php if ( '' != get_the_archive_description() ) { echo esc_html( get_the_archive_description() ); } ?></div>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php get_footer(); ?>