<?php get_header(); ?>

    <!-- breadcrumb sectuon start -->
        <section class="breadcrumb-section">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
        </section>
    <!-- breadcrumb sectuon end -->

    <!-- content section start -->
    <?php 
    if(have_posts()):
        while(have_posts()):the_post();
            get_template_part('content-single');
        endwhile;
    endif;
    ?>
    <!-- content section end -->

    <!-- cta section start -->
    <!-- cta section end -->

    <!-- contact section start -->
    <section class="contact-section">
        <h2 class="section-title">お問い合わせ</h2>
    </section>
    <!-- contact section end -->

    <?php get_footer(); ?>