<?php get_header('category'); ?>
    <!-- cover section start -->
        <div class="cover-back-ground">
            <section class="cover-section">
                <div class="cover-text">
                    <h1>
                        <?php
                        $category = get_the_category();
                        echo $category[0]->cat_name;
                        ?>
                    </h1>
                    <div class="cover-description">
                        <p>このページでは、GROW WEBのお知らせを一覧することができます。</p>
                    </div>
                </div>
            </section>
        </div>
        <!-- cover section end -->

    <!-- grid section start -->
        <section class="grid-section">
                        <div class="grid-wrapper">
                            <?php
                            if(have_posts()):
                                while(have_posts()):the_post();
                                get_template_part('content-archive');
                                endwhile;
                            endif;
                            ?>
                        </div>
        </section>
    <!-- grid section end -->

    <!-- contact section start -->
    <section class="contact-section">
        <?php dynamic_sidebar('contact'); ?>
    </section>
    <!-- contact section end -->

    <?php get_footer(); ?>