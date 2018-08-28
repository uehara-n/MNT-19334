<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/allpage.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/lightbox.css">
<?php if(is_page(2423)|| is_page(2429)|| is_page(360)|| is_page(2619)): ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/contact.css" />
<?php endif; ?>
<link rel="shortcut icon" href="/wp-content/themes/reform/images/favicon.ico">
<link rel="icon" href="/wp-content/themes/reform/images/favicon.ico">
<?php if ( !is_home() && !is_front_page() ) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/under.css">
<?php endif; ?>
<title>大津・守山・栗東でリフォームをお考えならモンテホームへ</title>
<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/reform/common/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/reform/common/js/heightLine.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/lightbox.js"></script>
<script type="text/javascript" src="../wp-content/themes/reform/js/rollover2.js"></script>
<script type="text/javascript" src="../wp-content/themes/reform/js/jquery.js"></script>
<script type="text/javascript" src="../wp-content/themes/reform/js/smoothscroll.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="../wp-content/themes/reform/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="../wp-content/themes/reform/js/jquery.nivo.slider.pack.js"></script>

<script>
	$(function() {
		var i = 1;
		$('#ogata_page .tanto .pic').each(function(){
		$(this).addClass('tantono' + (i++));
		});

		$('.tantono3').after($('.tantono2'),$('.tantono6'),$('.tantono5'),$('.tantono4'),$('.tantono1'));
	});
</script>

<?php if ( is_home() || is_front_page() ) : ?>
<link href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/slick.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<script type="text/javascript">
	//トップページ
	<?php if ( is_home() ) : ?>
$(window).load(function() {
		$('#slideshow').nivoSlider({//トップスライダー
        slices:10,
        animSpeed:400, //画像が切り替わるスピード
        pauseTime:5000, //画像が切り替わるまでの時間			directionNav:false,
								directionNav:false, //矢印を表示する
        directionNavHide:false, //マウスを乗せたときに矢印を表示
			controlNav:true //1,2,3...
		});    //
    var widthNum = $('.nivo-controlNav').width();
    $('.nivo-controlNav').css({marginLeft:-widthNum/2});
});
<?php endif; ?>
//トップページここまで
jQuery(function($) {//グローバルナビ固定

var nav    = $('#gnav'),
    offset = nav.offset();

$(window).scroll(function () {
  if($(window).scrollTop() > offset.top - 0) {
    nav.addClass('fixed');
  } else {
    nav.removeClass('fixed');
  }
});
});

$(function(){//ドロップダウン
	$('.globalnavi li').hover(function(){
		$('ul',this).show();
	},
	function(){
		$('ul',this).hide();
	});

});
$(function() {//横相談バナー

	var topBtn = $('#go_sodan');
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
});
$(function() {//キャンペーンバナー

	var topBtn = $('#go_campaign');
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
});
	<?php if ( is_home() ) : ?>

$(document).ready(function(){//VOICEスライダー
  $('#slide_v').bxSlider({
  auto: false,//自動切り替えの有無
  pause:6000,//停止時間※デフォルトは4000
  speed:1000,//動くスピード※デフォルトは500
  minSlides: 3,//一度に表示させる画像の最小値
  maxSlides: 3,//一度に表示させる画像の数
		// 1回の遷移でスライドさせる要素の数を指定する
		moveSlides: 1, // 0
  slideWidth: 190,
  slideMargin: 10,
  pager: false,
  prevText: '＜',
  nextText: '＞',
});
});
<?php endif; ?>

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68046274-1', 'auto');
  ga('send', 'pageview');

</script>
<!--<script>

    $.autopager({

        load: function(current, next) {

            doLightBox()
        }
    });

    </script>-->

<?php wp_head(); ?>
</head>

<body>
<div id="head">
  <h1><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/head/logo_new2.gif" width="273" height="83" alt="滋賀・京都でリフォームをお考えならモンテホームへ" /></a></h1>
  <!--<h2>
    <?php bloginfo('description'); ?>
  </h2>-->
  <div id="head_contact"> <img src="<?php echo get_template_directory_uri(); ?>/images/head/top_tel.png" width="257" height="40" alt="電話番号" /> <a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/head/h_sodan_rollout.gif" width="158" height="40" alt="無料相談" /></a> </div>
</div>
<div id="gnav">
  <ul class="globalnavi">
    <li><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/gnav/gnav_home_rollout.gif" width="85" height="62" alt="ホーム" /></a></li>
    <li><a href="<?php bloginfo('url'); ?>/company"><img src="<?php echo get_template_directory_uri(); ?>/images/gnav/gnav_company_rollout.gif" width="175" height="62" alt="会社案内" /></a>
      <ul>
        <li><a href="<?php bloginfo('url'); ?>/company">会社案内</a></li>
        <li><a href="<?php bloginfo('url'); ?>/staff">スタッフ紹介</a></li>
      </ul>
    </li>
    <li><a href="<?php bloginfo('url'); ?>/seko"><img src="<?php echo get_template_directory_uri(); ?>/images/gnav/gnav_seko_rollout.gif" width="175" height="62" alt="施工事例" /></a>
      <ul>
        <li><a href="<?php bloginfo('url'); ?>/seko_cat/ohuro">お風呂</a></li>
        <li><a href="<?php bloginfo('url'); ?>/seko_cat/toilet">トイレ</a></li>
        <li><a href="<?php bloginfo('url'); ?>/seko_cat/kitchen">キッチン</a></li>
        <li><a href="<?php bloginfo('url'); ?>/seko_cat/senmen">洗面所</a></li>
        <li><a href="<?php bloginfo('url'); ?>/seko_cat/all">オール電化</a></li>
        <li><a href="<?php bloginfo('url'); ?>/seko_cat/sun">太陽光発電</a></li>
        <li><a href="<?php bloginfo('url'); ?>/seko_cat/battery">蓄電池</a></li>
        <li><a href="<?php bloginfo('url'); ?>/seko_cat/gaiheki">外壁・屋根</a></li>
        <li><a href="<?php bloginfo('url'); ?>/seko_cat/naiso">内装</a></li>
        <li><a href="<?php bloginfo('url'); ?>/seko_cat/kyuto">給湯器</a></li>
        <li><a href="<?php bloginfo('url'); ?>/seko_cat/exterior">エクステリア</a></li>
        <li><a href="<?php bloginfo('url'); ?>/seko_cat/genkan">玄関</a></li>
        <li><a href="<?php bloginfo('url'); ?>/seko_cat/mado">窓</a></li>
      </ul>
    </li>

    <li><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/gnav/gnav_reform_rollout.gif" width="175" height="62" alt="リフォームメニュー" /></a>
      <ul>
	  <li class="nolink_b">水まわりリフォーム</li>
        <li class="indent"><a href="<?php bloginfo('url'); ?>/ofuro">お風呂</a></li>
        <li class="indent"><a href="<?php bloginfo('url'); ?>/toilet">トイレ</a></li>
        <li class="indent"><a href="<?php bloginfo('url'); ?>/kitchen">キッチン</a></li>
        <li class="indent"><a href="<?php bloginfo('url'); ?>/senmen">洗面</a></li>
		<li class="indent"><a href="<?php bloginfo('url'); ?>/kyuto">給湯器</a></li>
	  <li class="nolink_b">内装リフォーム</li>
	  	<li class="indent"><a href="<?php bloginfo('url'); ?>/naiso">内装</a></li>
	  	<li class="indent"><a href="<?php bloginfo('url'); ?>/alldenka">オール電化</a></li>
	  <li class="nolink_b">外装リフォーム</li>
	  	 <li class="indent"><a href="<?php bloginfo('url'); ?>/gaiheki">外壁・屋根</a></li>
	  	 <li class="indent"><a href="<?php bloginfo('url'); ?>/solar">太陽光発電</a></li>
	  	 <li class="indent"><a href="<?php bloginfo('url'); ?>/tikuden">蓄電池</a></li>
      </ul>
    </li>

    <li><a href="<?php bloginfo('url'); ?>/special"><img src="<?php echo get_template_directory_uri(); ?>/images/gnav/gnav_sun_rollout.gif" width="175" height="62" alt="大規模リフォーム" /></a>
    </li>
    <li><a href="<?php bloginfo('url'); ?>/faq"><img src="<?php echo get_template_directory_uri(); ?>/images/gnav/gnav_faq_rollout.gif" alt="よくあるご質問" width="175" height="62"/></a></li>
  </ul>
</div>
