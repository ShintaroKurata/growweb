    <!-- page top -->
    <a href="#">
        <div id="page-top" class="back">
            <p>Page Top</p>
        </div>
    </a>
    <!-- page top end -->

    <footer>
        <div class="main-footer">
            <div class="footer-content">
                <div class="footer-logo"><p>GROW WEB</p></div>
                <nav class="footer-nav">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'place_footer',
                                'container' => false,
                            )
                        )
                    ?>
                </nav>
            </div>
        </div>
        <div class="copyright">
            <p>©️2022 GROWWEB All rights reserved.</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>