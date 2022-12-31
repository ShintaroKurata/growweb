<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php growweb_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" class="site-header" role="banner">
            <div id="branding">
                <div class="post-site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <?php
                    if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
                    if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
                    ?>
                </div>
            </div>
            <nav id="menu" class="post-menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
            </nav>
            <button type="button" class="mb-btn js-btn">
                    <span class="mb-btn-line"></span>
            </button>
        </header>
    <div id="container" class="two-column">
    <main class="page-content" role="main">