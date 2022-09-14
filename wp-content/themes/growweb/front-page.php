<?php get_header(); ?>
    <!-- news section start -->
        <section class="news-section">
            <h2 class="section-title">お知らせ</h2>
                        <ul class="news-list">
                            <?php
                                if(have_posts()):
                                    while(have_posts()):the_post();
                            ?>
                                <a href="<?php the_permalink(); ?>">
                                    <li>
                                        <div class="news-tag">NEWS</div>
                                        <time class="release"><?php the_time('Y.m.d'); ?></time>
                                        <p class="news-title"><?php the_title(); ?><p>
                                    </li>
                                </a>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </ul>
                <a><button class="btn2 news-button">View more</button></a>
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
            <h2 class="section-title">制作事例</h2>
            <div class="works-grid">
                <div class="works-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aleinter-cover.png">
                    <div class="works-title"><p>株式会社ALE INTERNATIONAL</p></div>
                    <div class="works-tag"><i class="fa-solid fa-tags"></i><p>アパレル</p></div>
                </div>

                <div class="works-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aleinter-cover.png">
                    <div class="works-title"><p>株式会社ALE INTERNATIONAL</p></div>
                    <div class="works-tag"><i class="fa-solid fa-tags"></i><p>アパレル</p></div>
                </div>

                <div class="works-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aleinter-cover.png">
                    <div class="works-title"><p>株式会社ALE INTERNATIONAL</p></div>
                    <div class="works-tag"><i class="fa-solid fa-tags"></i><p>アパレル</p></div>
                </div>
            </div>

            <a><button class="btn2 works-button">View more</button></a>
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