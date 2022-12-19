<?php
function my_enqueue_scripts(){
    wp_enqueue_script("jquery");
    wp_enqueue_script("script_js",get_template_directory_uri(). '/assets/js/script.js',array(),'');
    wp_enqueue_script("bootstrap_min_js",get_template_directory_uri(). '/assets/js/bootstrap.min.js',array());
    wp_enqueue_style("bootstrap_min_css",get_template_directory_uri(). '/assets/css/bootstrap.min.css',array());
    wp_enqueue_style("my_style",get_template_directory_uri(). '/style.css',array());
    wp_enqueue_style("destyle",get_template_directory_uri(). '/assets/css/destyle.css',array());
    wp_enqueue_script('style_fontawesome', 'https://kit.fontawesome.com/c6a7963f91.js',array());
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

//ヘッダー、フッターのカスタムメニュー化
register_nav_menus(
    array(
        'place_global' => 'グローバル',
        'place_footer' => 'フッターナビ',
    )
);

//メイン画像上にテンプレートごとの文字列を表示
function get_main_title() {
    if(is_singular('post')):
        $category_obj = get_the_category();
        return $category_obj[0]->name;
    elseif(is_page()):
        return get_the_title();
    elseif(is_category()):
        return get_cat_title();
    endif;
}

//アイキャッチ
add_theme_support('post-thumbnails');
add_image_size('top',1077,622,true);
add_image_size('detail',1100,330,true);
add_image_size('post',630,420,true);
add_image_size('search',168,168,true);
add_image_size('grid',355,200,true);


//カスタム投稿タイプ
function create_post_type() {
 
  register_post_type( 'works', /* カスタム投稿タイプスラッグ */
    array(
      'labels' => array( /* 表示させる文字 */
        'name' => '制作実績',
        'singular_name' => '制作実績',
        'all_items' => '制作実績一覧',
        'add_new' => '制作実績の追加',
        'add_new_item' => '制作実績追加',
        'edit_item' => '制作実績の編集',
        'new_item' => '制作実績追加',
        'view_item' => '制作実績を表示',
        'search_items' => '制作実績を検索',
        'not_found' =>  '制作実績が見つかりません',
        'not_found_in_trash' => 'ゴミ箱内に制作実績が見つかりませんでした。',
        'parent_item_colon' => ''
      ),
      'public' => true, /* 管理画面にメニューを作る */
      'show_ui' => true, /* 管理画面にメニューを作る */
      'query_var' => true,
      'hierarchical' => false, /* 固定ページみたいに記事間の親子関係をつくる */
      'supports' => array('title','editor','thumbnail','excerpt'), /* 管理画面で登録できる項目 */
      'menu_position' =>5, /* 管理画面のメニューの位置（5,10,15・・・） */
      'has_archive' => true, /* アーカイブページを持つ */
      'rewrite' => array( /* slug:スラッグ名　with_front:アーカイブページURLに/archive/をつける */
        'slug' => 'works','with_front' => false)
    )
  );

    register_taxonomy('works_cat','works', array(
        'hierarchical' => true,
        'labels' => array( /* 表示させる文字 */
            'name' => 'カテゴリー',
            'singular_name' => 'カテゴリー',
            'search_items' =>  'カテゴリーを検索',
            'all_items' => 'すべてのカテゴリー',
            'parent_item' => '親分類',
            'parent_item_colon' => '親分類：',
            'edit_item' => '編集',
            'update_item' => '更新',
            'add_new_item' => 'カテゴリーを追加',
            'new_item_name' => '名前',
        ),
        'show_ui' => true, /* 管理画面にメニューを作る */
        'rewrite' => array(
            'slug' => 'works','with_front' => true,'hierarchical' => true)
    ));
 
}
add_action( 'init', 'create_post_type' );


register_sidebar(array(
    'name'=>'コンタクトエリア',
    'id' => 'contact',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
    ));
