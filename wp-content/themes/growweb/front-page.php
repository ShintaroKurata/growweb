<?php get_header("front"); ?>
    <!-- hero section start-->
        <div class="hero-back-ground">
            <section class="hero-section">
                    <div class="hero-text">
                        <h2>We put yours into orbit.</h2>
                        <div class="hero-description">
                            <p>私たちが目指すのは、価値あるものが適切に評価されるような仕組みづくりです。<br>あなたのサービスの認知がまだ少ないなら、私たちがWebを用いて支援します。</p>
                        </div>
                        <a href="/contact">
                            <div class="contact-button">
                                <p class="btn-text">お問い合わせはこちら</p>
                                <span class="btn-circle-triangle"></span>
                            </div>
                        </a>
                    </div>
                    <div class="scrolldown"><span></span></div>
            </section>
        </div>
    <!-- hero section end -->
    <!-- news section start -->
        <section class="news-section">
            <h2 class="section-title">NEWS</h2>
                <div class="news-content">
                    <div class="news-list">
                        <ul>
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
                    <div>
                    <?php
                    $category_id = get_cat_ID('news');
                    $category_link = get_category_link( $category_id );
                    ?>
                    <div class="btn-wrapper">
                        <a href="<?php echo esc_url( $category_link ); ?>">
                            <div class="contact-button section-button">
                                <p class="btn-text section-btn-text">VIEW MORE</p>
                                <span class="btn-circle-triangle"></span>
                            </div>
                        </a>
                    </div>
                </div>
        </section>
    <!-- news section end -->
    <!-- point section start -->
        <section class="point-section bg-pattern Diagonal_v2">
            <h2 class="section-title business-title">Our Business</h2>
                    <!-- １つ目 -->
                    <div class="point-content">
                        <div class="point-content-left">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-design-sample.jpeg">
                        </div>
                        <div class="point-text">
                            <h3>Webデザイン</h3>
                            <p class="business-en">Web Design</p>
                            <p class="business-desc">GROWWEBのWebデザインはSEO検定１級取得者のコンサルタントが担当します。単なる見た目の施しに終始せず、ユーザーと検索エンジンの両方に最適化したWebサイトを設計・開発します。</p>
                        </div>
                    </div>
                    <!-- １つ目終わり -->
                    
                    <!-- ２つ目 -->
                    <div class="point-content">
                        <div class="point-text point-reverse">
                            <h3>SEOコンサルティング</h3>
                            <p class="business-en">SEO Consulting</p>
                            <p class="business-desc">複数のメディア運営経験で裏打ちされたSEO知識をもって、貴社メディアの検索エンジンにおける順位向上のサポートをします。戦略部分の上流から、記事執筆の下流までのトータルで対応可能です。</p>
                        </div>
                        <div class="point-content-right">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-consulting-sample.jpeg">
                        </div>
                    </div>
                    <!-- ２つ目終わり -->

                    <!-- ３つ目 -->
                    <div class="point-content">
                        <div class="point-content-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/web-media-sample.jpeg"></div>
                        <div class="point-text">
                            <h3>メディア運営</h3>
                            <p class="business-en">Media</p>
                            <p class="business-desc">GROWWEBは、中小企業の事業拡大に寄与することを目的に運営されています。メディア事業では、求職者やWeb担当者の困り事を解決するポータルとしてコンテンツを提供しています。</p>
                        </div>
                    </div>
                    <!-- ３つ目終わり -->
        </section>
    <!-- point section end -->
    <!-- works section start -->
        <section class="works-section">
            <h2 class="section-title">Works</h2>
            <div class="works-wrapper">
                <div class="works-grid-area">
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
                </div>
                <div class="btn-wrapper">
                        <a href="<?php echo get_post_type_archive_link('works'); ?>">
                            <div class="contact-button section-button">
                                <p class="btn-text section-btn-text">VIEW MORE</p>
                                <span class="btn-circle-triangle"></span>
                            </div>
                        </a>
                </div>
            </div>

            
        </section>
    <!-- works section end -->
    <!-- flow section start -->
    <section class="flow-section">
        <div class="flow-cover">
            <h2 class="section-title">Web Design Flow</h2>
            <div class="flow-grid">
                <div class="flow-content">
                    <div class="flow-content-wrapper">
                        <div class="flow-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png">
                        </div>
                        <p class="flow-num">1</p> 
                        <div class="flow-description">
                            <p class="flow-label">フォームからお申し込み</p>
                            <p class="flow-text">当サイトのお問い合わせフォームよりご連絡ください。担当者よりご連絡いたします。</p>
                        </div>
                    </div>
                </div>
                <div class="flow-content">
                    <div class="flow-content-wrapper">
                        <div class="flow-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reply.png">
                        </div>
                        <p class="flow-num">2</p>
                        <div class="flow-description"> 
                            <p class="flow-label">無料でお見積もり・相談</p>
                            <p class="flow-text">無料お見積り・相談を承っております。デザインやサイトに求める機能の実装にかかる費用を予めご確認いただけます。</p>
                        </div>
                    </div>
                </div>
                <div class="flow-content">
                    <div class="flow-content-wrapper">
                        <div class="flow-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/document.png">
                        </div>
                        <p class="flow-num">3</p>
                        <div class="flow-description"> 
                            <p class="flow-label">ご契約</p>
                            <p class="flow-text">打ち合わせ時にお客様に合わせてご提案をいたします。</p>
                        </div>
                    </div>
                </div>
                <div class="flow-content">
                    <div class="flow-content-wrapper">
                        <div class="flow-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/construct.png">
                        </div>
                        <p class="flow-num">4</p>
                        <div class="flow-description">                             
                            <p class="flow-label">構築・開発</p>
                            <p class="flow-text">実際にWEBサイトを構築・開発いたします。</p>
                        </div>
                    </div>
                </div>
                <div class="flow-content flow-content-last">
                    <div class="flow-content-wrapper">
                        <div class="flow-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/website.png">
                        </div>
                        <p class="flow-num">5</p>
                        <div class="flow-description"> 
                            <p class="flow-label">納品</p>
                            <p class="flow-text">発注日より約１ヶ月以内に納品のご連絡を差し上げます。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- flow section end -->

    <!-- faqs section start -->
    <section class="faqs-section">
        <h2 class="section-title">FAQS</h2>
        <div class="faqs-grid">
            <div class="faqs-content">
                <div class="faqs-title">
                    <div class="faqs-title-icon">
                        <span>Q</span>
                    </div>
                    <p>情報の管理体制はどうなっていますか？</p>
                </div>
                <div class="faqs-answer">
                    <div class="faqs-answer-icon">
                        <span>A</span>
                    </div>
                    <p>ご利用時にNDAを含むご契約を結ばせていただいております。業務上知り得た情報は、作業の範囲内でのみ利用させていただきます。</p>
                </div>
            </div>

            <div class="faqs-content">
                <div class="faqs-title">
                    <div class="faqs-title-icon">
                        <span>Q</span>
                    </div>
                    <p>サイト保守契約を別途結ぶ必要はありますか？</p>
                </div>
                <div class="faqs-answer">
                    <div class="faqs-answer-icon">
                        <span>A</span>
                    </div>
                    <p>別途運用に関するプランがございますので、必要に応じてご利用いただけます。もちろんご自身で保守運用をすることも可能です。</p>
                </div>
            </div>

            <div class="faqs-content faqs-content-end">
                <div class="faqs-title">
                    <div class="faqs-title-icon">
                        <span>Q</span>
                    </div>
                    <p>サイトの一部だけの改修・作成なども対応可能ですか？</p>
                </div>
                <div class="faqs-answer">
                    <div class="faqs-answer-icon">
                        <span>A</span>
                    </div>
                <p>はい。サイトの新規制作以外の要望につきましても対応可能です。詳しい内容につきましては、お問い合わせ時にお見積もり等させていただきます。</p>
                </div>
            </div>
        </div>
    </section>
    <!-- faqs section end -->
<?php get_footer(); ?>