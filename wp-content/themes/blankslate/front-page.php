<?php get_header(); ?>
    <!-- hero section start-->
    <?php if(is_front_page() ): ?>
            <div class="hero-back-ground">
                <section class="hero-section">
                        <div class="hero-text">
                            <h2>We put yours into orbit.</h2>
                            <div class="hero-description">
                                <p>私たちが目指すのは、価値あるものが適切に評価されるような仕組みづくりです。<br>あなたのサービスの認知がまだ少ないなら、その後押しを、私たちがWebを用いて支援します。</p>
                            </div>

                            <div class="contact-button">
                                <a href="#contact">
                                    <button class="hero-button">お問い合わせはこちら</button>
                                    <span class="btn-circle-triangle"></span>
                                </a>
                            </div>
                        </div>
                        <div class="scrolldown4"><span>Scroll</span></div>
                </section>
            </div>
        <?php else: ?>
            <!-- thumbnail section start -->
            <div class="thumbnail-back-ground">
                <section class="thumbnail-section">
                    <div class="thumbnail-wrapper">
                        <?php if( get_the_post_thumbnail() ) : ?>
                            <div class="thumbnail">
                                <?php the_post_thumbnail('post'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="thumbnail-text">
                            <h1><?php the_title(); ?></h1>
                        </div>

                        <?php if(is_single()): ?>
                            <div class="post-meta-area">
                                <div class="cat-name">
                                    <span>
                                            <?php
                                            $category = the_category(); 
                                            if(isset($category)){
                                            echo $category[0]->cat_name;
                                            }
                                            ?>
                                    </span>
                                </div>
                                <div class="post-tag">
                                    <ul class="post-meta list-inline">
                                        <li class="date" itemprop="datePublished" datetime="<?php the_time('c');?>"><i class="fa fa-clock-o"></i> <?php the_time('Y.m.d');?></li>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
            </div>
            <!-- thumbnail section end -->
        <?php endif; ?>

    <!-- hero section end -->
    <!-- news section start -->
        <section class="news-section">
            <h2 class="section-title">NEWS</h2>
                <div class="news-content">
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
                    <div class="section-button">
                        <a  href="<?php echo esc_url( $category_link ); ?>">
                        <button class="hero-button">View more</button>
                        <span class="btn-circle-triangle"></span>
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
                            <p>GROWWEBのWebデザインはSEOコンサルタントが担当します。単なる見た目の施しに終始せず、ユーザーと検索エンジンの両方に最適化したWebサイトを設計・開発します。</p>
                        </div>
                    </div>
                    <!-- １つ目終わり -->
                    
                    <!-- ２つ目 -->
                    <div class="point-content">
                        <div class="point-text point-reverse">
                            <h3>SEOコンサルティング</h3>
                            <p class="business-en">SEO Consulting</p>
                            <p>GROWWEBのWebデザインはSEOコンサルタントが担当します。単なる見た目の施しに終始せず、ユーザーと検索エンジンの両方に最適化したWebサイトを設計できます。</p>
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
                            <p>GROWWEBは、中小企業の事業拡大に寄与することを目的に運営されています。メディア事業では、求職者やWeb担当者の困り事を解決するポータルとしてコンテンツを提供しています。</p>
                        </div>
                    </div>
                    <!-- ３つ目終わり -->
        </section>
    <!-- point section end -->
    <!-- works section start -->
        <section class="works-section">
            <h2 class="section-title">Works</h2>
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
                    

            <div class="section-button">
                        <a href="<?php echo get_post_type_archive_link('works'); ?>"><button>View more</button>
                        <span class="btn-circle-triangle"></span>
                        </a>
            </div>

            
        </section>
    <!-- works section end -->

    <!-- flow section start -->
    <section class="flow-section">
        <div class="flow-cover">
            <h2 class="section-title">Web Design FLow</h2>
            <div class="flow-grid">
                <div class="flow-content">
                    <div class="flow-content-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png">
                        <div class="flow-description">
                            <p class="flow-label">フォームからお問い合わせ</p>
                            <p class="flow-text">当サイトのお問い合わせフォームよりご連絡ください。担当者よりご連絡いたします。</p>
                        </div>
                    </div>
                </div>
                <div class="flow-content">
                    <div class="flow-content-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reply.png">
                        <div class="flow-description">
                            <p class="flow-label">無料でお見積もり・相談</p>
                            <p class="flow-text">無料お見積り・相談を承っております。デザインやサイトに求める機能の実装にかかる費用を予めご確認いただけます。</p>
                        </div>
                    </div>
                </div>
                <div class="flow-content">
                    <div class="flow-content-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/document.png">
                        <div class="flow-description">
                            <p class="flow-label">ご契約</p>
                            <p class="flow-text">打ち合わせ時にお客様に合わせてご提案をいたします。</p>
                        </div>
                    </div>
                </div>
                <div class="flow-content">
                    <div class="flow-content-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/construct.png">
                        <div class="flow-description">
                            <p class="flow-label">構築・開発</p>
                            <p class="flow-text">実際にWEBサイトを構築・開発いたします。</p>
                        </div>
                    </div>
                </div>
                <div class="flow-content">
                    <div class="flow-content-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/website.png">
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
    <section id="contact" class="contact-section">
        <?php dynamic_sidebar('contact'); ?>
    </section>
    <!-- contact section end -->

<?php get_footer(); ?>