<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Inter:wght@500&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c6a7963f91.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body>
        <!-- header section start -->
        <header>
            <div class="main-header">
                        <!-- logo start -->
                        <div class="logo">
                                <a href="">GROWWEB</a>
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