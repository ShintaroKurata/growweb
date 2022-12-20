</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">
    <div class="footer-content">
        <div class="footer-logo">
            <?php
                if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
                echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
                if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
            ?>
        </div>
        <nav id="footer-menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
        </nav> 
    </div>
    <div id="copyright">
    &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>