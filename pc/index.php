<?php get_header(); ?>
<div id="main_v">
<!-- ======================スライドここから======================= -->

<div id="slideshow">
	<div><img src="<?php bloginfo('template_url'); ?>/page_image/top/slide/slide1.jpg" /></div>
	<div><img src="<?php bloginfo('template_url'); ?>/page_image/top/slide/slide2.jpg" /></div>
	<div><img src="<?php bloginfo('template_url'); ?>/page_image/top/slide/slide3.jpg" /></div>
	<div><img src="<?php bloginfo('template_url'); ?>/page_image/top/slide/slide5.jpg" /></div>
</div>
</div>
<!-- ======================スライドここまで======================= -->

<!-- ======================OPENバナーここから=======================
<div id="topbnr">
<img src="<?php bloginfo('template_url'); ?>/images/top/topbnr_open.jpg" width="980" height="300" alt="OPEN記念イベント開催！"/>
</div>
======================OPENバナーここまで======================= -->

<div id="main">
<div id="contents">


<!--<div id="oshirase">
<p><strong>モンテホームはお盆期間も通常通り営業致します！<br />
	【お盆期間中の営業スケジュール】</strong>
2018年8月11日（土）～2018年8月15日（水）通常通り営業しております。<br />
※ 8月14日（火）は、定休日のため休業しております。</p>
</div>-->


<!-- ===================================お客様の声-->
<?php
$args = array(
	'post_type' => 'voice', /* 投稿タイプ */
	'posts_per_page' => 10 /* 件数表示 */
); ?>
<?php query_posts( $args ); ?>
<div id="top_voice">
<h3><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/top_voice_tit.gif" width="300" height="35" alt="ありがとうの輪" /></h3>
<?php if (have_posts()) : ?>
<ul id="slide_v" class="inner">
<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>
<li><a href="<? echo gr_get_image_src('voice_image01'); ?>" rel="lightbox[top_voice]"><?php
				printf('%s',
				gr_get_image('voice_image01',
				array( 'width' => 200, 'alt' => esc_attr( post_custom( '<?php the_title(); ?>' ) ) )
									)
								);
								?></a><br /><?php the_title(); ?><br />
<?php if(post_custom('voice_alt01')) ;echo post_custom( 'voice_alt01' ); ?>
<?php if(post_custom('voice_seko_url')) {?>
	<a href="<?php echo post_custom('voice_seko_url');?>" class="more">施工事例を見る　	&gt;</a>
	<?php }
$i++; //最後にループ回数を一つ進める
endwhile; ?>

</ul>

<br clear="all" />
<?php else : ?>
    	<p class="no_data">表示する記事はありませんでした</p>
<?php endif; ?>

</div>
<?php wp_reset_query(); ?>
<!-- ===================================/お客様の声-->


<!-- ===================================イベント情報-->
<div id="top_event">
<div class="clearfix">
<h3><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/top_event_tit.gif" width="185" height="35" alt="イベント" /></h3>
<?php

$args = array(
	'post_type' => 'event', /* 投稿タイプを指定 */
	'posts_per_page' => 2	/* 最大表示数 */
);
query_posts( $args );
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

<div class="event">
<p class="event-img">
	<script>
	  objectFitImages('img.object-fit-img');
	</script>
<?php
echo gr_get_image(
'event_img00',
array( 'size' => 'medium', 'alt' => esc_attr( post_custom( 'event_img_alt01' ) ) ,'class' => esc_attr("object-fit-img"))
)
?>
<?php if ( post_custom('event_csv00') ) : ?>
<a href="<?php echo get_permalink(); ?>"><img src="<?php echo site_url(); ?>/wp-content/themes/gaiheki/event/page_image<?php echo post_custom( 'event_csv00' ); ?>" border="0" alt="event"></a>
<?php endif; ?>
</p>
<!--event_content_left-->

<!--event_content_right-->
<div class="event-desc">
<p class="e-desc1"><?php the_title(); ?>
<br><strong>開催日：</strong><?php echo post_custom( 'event_date' ); ?><br /><strong>開催場所：</strong><?php echo post_custom( 'event_place' ); ?></p>
<p class="e-desc2"><a href="<?php the_permalink() ?>" class="banner_alpha">>詳細を見る</a></p>
</div>
</div>
<!--event_content-->
<?php endwhile; ?>
<?php else : ?>
<p style="margin-left:10px;">表示する記事はありませんでした</p>
<?php endif; ?>

<?php wp_reset_query(); ?>

<div class="btn"><a href="/event"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/t_event_btn_rollout.gif" width="184" height="29" alt="イベント情報一覧を見る" /></a></div>
</div>
</div>
<!-- ===================================/イベント情報-->

<!-- ======================トップ　現場日記　ここから======================= -->
<div id="top_genbanikki">
<h3><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/top_dairy_tit.gif" width="192" height="35" alt="現場日記" /></h3>

<div class="underbox">
<?php $args = array(
			'post_type' => 'genbanikki', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 3 /* 件数表示 */
			); ?>
	<?php query_posts( $args ); ?>
	<?php if (have_posts()) : ?>
	<?php $i = 0; ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

<div class="box">
<?php
$files = get_children("post_parent=$id&post_type=attachment&post_mime_type=image");
if (!empty($files)){
$keys = array_keys($files);
$num=$keys[0];
$thumb=wp_get_attachment_thumb_url($num);
print '<a href="' . clean_url(get_permalink()) . '" title="' .
the_title_attribute('echo=0') . '"><img src="' . clean_url($thumb) .
'" width="210" alt="' . the_title_attribute('echo=0') . '" class="img" /></a>' . "\n";
}
?>

<div class="city"><?php the_time('Y年n月j日');?><br/>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?><br />
<?php the_excerpt(); ?></a></div>
</div>
<?php $count++; //最後にループ回数を一つ進める ?>
<?php endwhile; ?>
<?php else : ?>
<p style="margin-left:10px;">現在登録されておりません。</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
<br clear="all">
<div class="btn"><a href="/genbanikki"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/t_genbanikki_btn_rollout.gif" width="156" height="29" alt="現場日記一覧を見る" /></a></div>
<br clear="all">
</div>
</div>

<!-- ======================トップ　現場日記　ここまで======================= -->



<!-- ====================================施工事例 -->
<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 12 /* 件数表示 */
			); ?>
	<?php query_posts( $args ); ?>

<div id="top_works">
	<h3><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/top_seko_tit.gif" width="198" height="35" alt="施工事例" /></h3>
	<?php if (have_posts()) : ?>
	<?php $i = 0; ?>

	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

	<div class="box <?php if($i%4==0){ echo " c_left";} ?>">
	<a href="<?php the_permalink() ?>">
		<?php if (post_custom('seko_after_image')):
								printf(
									'%s',
									gr_get_image(
										'seko_after_image',
										array( 'width' => 150, 'alt' => esc_attr( post_custom( 'seko_comment' ) ) )
									)
								);
								elseif (post_custom('seko_point_image01')):
								printf(
									'%s',
									gr_get_image(
										'seko_point_image01',
										array( 'width' => 150, 'alt' => esc_attr( post_custom( 'seko_point01' ) ) )
									)
								);
								endif;?>
								<?php if(get_post_meta($post->ID,'seko_csv2',true)): ?>
<img src="<?php echo site_url(); ?>/wp-content/themes/gaiheki/page_image<?php echo post_custom('seko_csv2') ?>" class="img" width="220" />
<?php endif ?></a>
	<h4><?php echo post_custom( 'seko_city' ); ?>　<?php echo post_custom( 'seko_name' ); ?></h4>
	<p class="txt"><?php the_title(); ?></p>
	<p class="more"><a href="<?php the_permalink() ?>">&gt;詳しく見る</a></p>
	</div>

<?php
$i++; //最後にループ回数を一つ進める
?>

<?php endwhile; ?>
<?php else : ?>
    <p class="no_data">表示する施工事例はありませんでした</p>

<?php endif; ?>
<?php wp_reset_query(); ?>
	<br clear="all" />
		<span class="btn"><a href="/seko"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/work/t_works_btn_rollout.gif" width="156" height="29" alt="一覧を見る" /></a></span>
</div>
<!-- ====================================/施工事例 -->

<div id="top_menu">
	<h3><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/top_reform_tit.gif" width="368" height="35" alt="リフォームメニュー" /></h3>
	<a href="http://www.lixil.co.jp/reform/patto/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/bnr_patto_top_948.jpg" width="690" alt="リクシルPATTOリフォーム" class="mb10" /></a>
	<ul>
		<li><a href="/ofuro"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/top_menu_icon_01.png" width="160" height="100" alt="お風呂" /></a></li>
		<li><a href="/toilet"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/top_menu_icon_02.png" width="160" height="100" alt="トイレ" /></a></li>
		<li><a href="/kitchen"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/top_menu_icon_03.png" width="160" height="100" alt="キッチン" /></a></li>
		<li><a href="/senmen"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/top_menu_icon_04.png" width="160" height="100" alt="洗面所" /></a></li>
		<li><a href="/alldenka"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/top_menu_icon_05.png" width="160" height="100" alt="オール電化" /></a></li>
		<li><a href="/solar"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/top_menu_icon_06.png" width="160" height="100" alt="太陽光発電" /></a></li>
		<li><a href="/tikuden"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/top_menu_icon_07.png" width="160" height="100" alt="蓄電池" /></a></li>
        <li><a href="/kyuto"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/top_menu_icon_08.png" width="160" height="100" alt="給湯器" /></a></li>
        <li><a href="/naiso"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/top_menu_icon_09.png" width="160" height="100" alt="内装" /></a></li>
		<li><a href="/gaiheki"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/top_menu_icon_10.png" width="160" height="100" alt="外壁・屋根" /></a></li>
		<li><a href="/genkan"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/top_menu_icon_11.png" width="160" height="100" alt="玄関" /></a></li>
		<li><a href="/mado"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/top_menu_icon_12.png" width="160" height="100" alt="窓" /></a></li>
	</ul>
</div>

<div class="insta_box">
	<div class="insta_logo_tit clearfix">
		<a href="https://www.instagram.com/montehome_lixil/?hl=ja" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/insta_logo.png" alt="リフォームショップモンテホーム"></a>
		<p><a href="https://www.instagram.com/montehome_lixil/?hl=ja" target="_blank"><span>@montehome_lixi</span><br />
				LIXILリフォームショップモンテホーム 2017年10月14日大津市に新店舗OPEN!! 住宅リフォームのことはもちろん、不動産・新築、日々暮らしに関連する情報など幅広く更新していければと開設しました</a>
		</p>
	</div>

	<div class="insta_inner">
	<script>
	$(function() {
			var accessToken = '6123923880.8987392.03c591436606496a98d9b7230e815cd1';
			var userid = 6123923880; // ユーザーID
			var count = 16; // 取得件数
			$.ajax({
					url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent/?access_token=' + accessToken + '&count=' + count,
					dataType: 'jsonp',
					success: function(data) {
							var insert = '<ul>';
							for (var i = 0; i < data['data'].length; i++) {
									insert += '<li>';

											// 画像とリンク先
											insert += '<a href="' + data['data'][i]['link'] + '" target="_blank">';
											insert += '<img src="' + data['data'][i]['images']["standard_resolution"]['url'] + '" class="instagram-image" />';
											insert += '</a>';


									insert += '</li>';
							};
							insert += '</ul>';
							$('.insta_inner').append(insert);
					}
			});
	});
	</script>
	</div><!--/.insta_inner-->
</div><!--insta_box-->


<!-- ===================================お客様アンケート-->
<div id="top_enquete">
<div class="clearfix">
<h3><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/top_enquete_tit.gif" alt="お客様アンケート" /></h3>
<?php

$args = array(
	'post_type' => 'enquete', /* 投稿タイプを指定 */
	'posts_per_page' => 3	/* 最大表示数 */
);
query_posts( $args );
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

<div class="one">
<h4><?php the_title(); ?></h4>
<?php
           				printf(
							'<a href="%1$s" rel="lightbox[enquete]" >%2$s</a>',
							gr_get_image_src( 'enquete_photo' ),
							gr_get_image(
								'enquete_photo',
								array(
									'size' => full,
								)
							)
						);
?>
</div>
<?php endwhile; ?>
<?php else : ?>
<p style="margin-left:10px;">表示する記事はありませんでした</p>
<?php endif; ?>

<?php wp_reset_query(); ?>

<div class="btn"><a href="/enquete"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/menu/t_enquete_btn_rollout.gif" alt="お客様の声を見る" /></a></div>
</div>
</div>
<!-- ===================================/お客様アンケート-->


<?php gr_kaiyu(); ?>
<?php gr_contact_banner(); ?>



</div>
<?php get_sidebar(); ?>
<br clear="all" />

</div>
<!-- / #contents -->
<?php get_footer(); ?>
