<footer class="entry-footer">
    <h2>GROWWEBへのご相談・お見積り</h2>
    <a href="/contact">
        <button class="entry-footer-contact">        
            <p><i class="fa-solid fa-envelope"></i>お問い合わせはこちら</p>
        </button>
    </a>
    <?php if ( comments_open() ) { echo '<span class="meta-sep">|</span> <span class="comments-link"><a href="' . esc_url( get_comments_link() ) . '">' . sprintf( esc_html__( 'Comments', 'growweb' ) ) . '</a></span>'; } ?>
</footer>