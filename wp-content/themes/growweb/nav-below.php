<?php $args = array(
'prev_text' => sprintf( esc_html__( '%s older', 'growweb' ), '<span class="meta-nav"><i class="fa-solid fa-angles-left"></i></span>' ),
'next_text' => sprintf( esc_html__( 'newer %s', 'growweb' ), '<span class="meta-nav"><i class="fa-solid fa-angles-right"></i></span>' )
);
the_posts_navigation( $args );