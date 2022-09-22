<?php get_header(); ?>
    <!-- news section start -->
        <section class="news-section">
            <h2 class="section-title">お知らせ</h2>
                        <ul class="news-list">
                            <?php
                            $args = array(
                                'posts_per_page'   => 5, 
                                'orderby'          => 'ID', 
                                'order'            => 'DESC',
                            );

                            $datas = get_posts( $args );

                            if ( $datas ): 

                            foreach ( $datas as $post ): 
                                setup_postdata( $post ); 
                            ?>
                                    <a href="<?php echo get_permalink($post->ID); ?>">
                                    <li>
                                        
                                        <div class="news-tag">
                                            <?php
                                            $category = get_the_category(); 
                                            echo $category[0]->cat_name;
                                            ?>
                                        </div>
                                        <time class="release"><?php the_time('Y.m.d'); ?></time>
                                        <div class="news-title"><?php echo get_the_title($post->ID); ?><div>
                                        
                                    </li>
                                    </a>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                <?php
                $category_id = get_cat_ID('お知らせ');
                $category_link = get_category_link( $category_id );
                ?>
                <a class="btn-wrapper" href="<?php echo esc_url( $category_link ); ?>"><button class="btn2">View more</button></a>
        </section>
    <!-- news section end -->

    <!-- point section start -->
        <section class="point-section bg-pattern Diagonal_v2">
            <h2 class="section-title">GROW WEBの強み</h2>
                    <!-- １つ目 -->
                    <div class="point-content">
                        <div class="point-content-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/friend_mans_mono.png"></div>
                        <div class="point-text">
                            <h3><span>01</span>プランから実装までを１人で完結</h3>
                            <p>これはサンプルです。これはサンプルです。これはサンプルです。これはサンプルです。これはサンプルです。これはサンプルです。</p>
                        </div>
                    </div>
                    <!-- １つ目終わり -->
                    
                    <!-- ２つ目 -->
                    <div class="point-content">
                        <div class="point-text point-reverse">
                            <h3><span>02</span>プランから実装までを１人で完結</h3>
                            <p>これはサンプルです。</p>
                        </div>
                        <div class="point-content-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/friend_mans_mono.png">
                        </div>
                    </div>
                    <!-- ２つ目終わり -->

                    <!-- ３つ目 -->
                    <div class="point-content">
                        <div class="point-content-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/friend_mans_mono.png"></div>
                        <div class="point-text">
                            <h3><span>03</span>プランから実装までを１人で完結</h3>
                            <p>これはサンプルです。これはサンプルです。これはサンプルです。これはサンプルです。これはサンプルです。これはサンプルです。</p>
                        </div>
                    </div>
                    <!-- ３つ目終わり -->
        </section>
    <!-- point section end -->
    <!-- works section start -->
        <section class="works-section">
            <h2 class="section-title">制作実績</h2>
            <ul class="works-grid">
                <?php
                $taxonomy_name = 'works'; // タクソノミーのスラッグ名を入れる

                $args = array(
                    'posts_per_page'   => 3, 
                    'post_type' => 'works',
                    'orderby'          => 'ID', 
                    'order'            => 'DESC',
                );

                $cumtomPosts = get_posts( $args );
                
                    foreach($cumtomPosts as $post):
                        
                        setup_postdata( $post );
                ?>
                <a href="<?php echo get_permalink($post->ID); ?>">
                    <li class="works-content">
                        <div class="works-image">
                            <?php if(has_post_thumbnail()): ?>
                                <?php echo get_the_post_thumbnail($post->ID,'grid') ?>
                            <?php else: ?>
                                <img src="wp-content/themes/growweb/assets/images/business-hero.jpeg" alt="サムネイル">
                            <?php endif; ?>
                        </div>
                        <div class="works-title"><p><?php echo get_the_title($post->ID); ?></p></div>
                        <div class="works-tag"><i class="fa-solid fa-tags"></i><p><?php  $terms = get_the_terms($post->ID,'works_cat'); echo $terms[0]->name; ?></p></div>
                    </li>
                </a>     
                <?php
                    endforeach;
                    wp_reset_postdata();
                ?>  
            </ul>
                    

            <a class="btn-wrapper" href="<?php echo get_post_type_archive_link('works'); ?>"><button class="btn2">View more</button></a>
        </section>
    <!-- works section end -->

    <!-- flow section start -->
    <section class="flow-section">
        <div class="flow-cover">
            <h2 class="section-title">制作フロー</h2>
            <div class="flow-grid">
                <div class="flow-content"><p>お問い合わせ</p></div>
                <div class="flow-content"><p>ご連絡</p></div>
                <div class="flow-content"><p>ご提案</p></div>
                <div class="flow-content"><p>構築・開発</p></div>
                <div class="flow-content"><p>納品</p></div>
            </div>
        </div>
    </section>
    <!-- flow section end -->

    <!-- faqs section start -->
    <section class="faqs-section">
        <h2 class="section-title">よくある質問</h2>
        <div class="faqs-grid">
            <div class="faqs-content">
                <div class="faqs-title">
                    <i class="fa-solid fa-circle-question"></i>&nbsp;質問<br>
                    <p>サイト納品後の使い方がわかりません。</p>
                </div>
                <div class="faqs-answer">
                    <i class="fa-regular fa-face-smile"></i>&nbsp;回答<br>
                    <p>納品時に、簡単なサイトの使い方をお教えします。その際に、外部サイトも含めたおすすめの記事や本などもご紹介いたしますので、ご安心ください。</p>
                </div>
            </div>

            <div class="faqs-content">
                <div class="faqs-title">
                    <i class="fa-solid fa-circle-question"></i>&nbsp;質問
                    <p>サイト保守契約を別途結ぶ必要はありますか？</p>
                </div>
                <div class="faqs-answer">
                    <i class="fa-regular fa-face-smile"></i>&nbsp;回答<br>
                    <p>別の会社を利用される場合や、ご自身で保守が可能な場合などは、保守契約を結ぶ必要はありません。WEBサイト（HP）は、定期的にメンテナンスをしないと、バグが起きる可能性がありますので、いずれにしろ保守は必要です。</p>
                </div>
            </div>

            <div class="faqs-content">
                <div class="faqs-title">
                <i class="fa-solid fa-circle-question"></i>&nbsp;質問
                <p>なぜ料金が安いのですか？質は大丈夫ですか？</p>
                </div>
                <div class="faqs-answer">
                    <i class="fa-regular fa-face-smile"></i>&nbsp;回答
                <p>料金が安い理由は、営業・ディレクション・構築・納品を少人数で行なっており、コストがかからないからです。質に関しては、満足できない場合は返金可能ですので、納品時に判断してください。ディレクションと構築が同じ人であり、齟齬が生じないため、「発注時と出来上がりが違う」といった問題はありません。</p>
                </div>
            </div>
        </div>
    </section>
    <!-- faqs section end -->

    <!-- contact section start -->
    <section class="contact-section">
        <h2 class="section-title">お問い合わせ</h2>
    </section>
    <!-- contact section end -->

<?php get_footer(); ?>