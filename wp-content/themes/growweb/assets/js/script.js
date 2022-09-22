// #page-topをクリックした際の設定
jQuery('#page-top').click(function () {
  jQuery('body,html').animate({
        scrollTop: 0//ページトップまでスクロール
    }, 500);//ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false;//リンク自体の無効化
});


// ハンバーガーメニュー
jQuery(function() {
  jQuery('.intro').addClass('go');
  
  jQuery('.reload').click(function() {
      jQuery('.intro').removeClass('go').delay(200).queue(function(next) {
        jQuery('.intro').addClass('go');
        next();
      });
  
    });
  })

  jQuery(function () {
    jQuery('.js-btn').on('click', function () {        // js-btnクラスをクリックすると、
      jQuery('.menu , .mb-btn-line').toggleClass('open'); // メニューとバーガーの線にopenクラスをつけ外しする
    })
  });