<?php get_header(); ?>
    <div class="page-main">
        <div class="lead-inner">
            <!-- breadcrumb sectuon start -->
                <section class="breadcrumb-section">

                </section>
            <!-- breadcrumb sectuon end -->

            <!-- content section start -->
            <section class="post-content" itemprop="text">
                <?php
                    if(have_posts()):
                        while(have_posts()):the_post();
                            the_content();
                        endwhile;
                    endif;
                ?>
            </section>
            <!-- content section end -->
            <?php posts_nav_link(); ?>

            <!-- cta section start -->
            <!-- cta section end -->

            <!-- contact section start -->
            <section class="contact-section">
                <h2 class="section-title">お問い合わせ</h2>
            </section>
            <!-- contact section end -->
        </div>
    </div>

<?php get_footer(); ?>