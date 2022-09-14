<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Inter:wght@500&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
        <!-- header section start -->
        <header>
                <div class="main-header">
                            <!-- logo start -->
                            <div class="logo">
                                    <a href="<?php bloginfo('url'); ?>">GROWWEB</a>
                            </div>
                            <!-- logo end -->

                            <!-- menu start -->
                            <div>
                                <nav class="global-nav main-menu">
                                    <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'place_global',
                                                'container' => false,
                                            )
                                        )
                                    ?>
                                </nav>
                            </div>
                            <!-- menu end -->
                            <button type="button" class="mb-btn js-btn">
                                <span class="mb-btn-line"></span>
                            </button>
                </div>
        </header>
        <!--Header section end-->

    <?php if(is_front_page() ): ?>
        <div class="hero-back-ground">
            <section class="hero-section">
                    <div class="hero-text">
                        <h2>Fuctional,Reasonable,</h2>
                        <div class="hero-description">
                            <p>私たちが目指すのは、価値あるものが適切に評価されるような仕組みづくりです。
                            あなたのサービスの認知がまだ少ないなら、私たちが「WEB」を用いて支援します。</p>
                        </div>
                            <a href="#contact"><button class="hero-button">お問い合わせはこちら</button></a>
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
                                        echo $category[0]->cat_name;
                                        ?>
                                </span>
                            </div>
                            <div class="post-tag">
                                <ul class="post-meta list-inline">
                                    <li class="date" itemprop="datePublished" datetime="<?php the_time('c');?>"><i class="fa fa-clock-o"></i> <?php the_time('Y.m.d');?></li>
                                </ul>
                                <ul class="post-meta-comment">
                                    <li class="author">
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        </div>
        <!-- thumbnail section end -->
    <?php endif; ?>

    