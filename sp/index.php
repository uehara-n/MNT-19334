<?php get_header(); ?>
<article>
<div id="wrapper">
	        <div class="slider-wrapper theme-default">
	            <div id="slider">
	                <img src="<?php echo get_template_directory_uri(); ?>/images/slide11.jpg" alt="slideImg1"/>
					 <img src="<?php echo get_template_directory_uri(); ?>/images/slide12.jpg" alt="slideImg2"/>
					 <img src="<?php echo get_template_directory_uri(); ?>/images/slide13.jpg" alt="slideImg3"/>
					 <img src="<?php echo get_template_directory_uri(); ?>/images/slide14.jpg" alt="slideImg4"/>
					 <img src="<?php echo get_template_directory_uri(); ?>/images/slide15.jpg" alt="slideImg5"/>
	        	</div>
	    	</div>
	    </div>
	<!--<div id="red_alert">
	<p>モンテホームはゴールデンウィーク期間も通常通り営業致します！<br>【ゴールデンウィーク期間中の営業スケジュール】<br>2018年4月28日（土）～2015年5月6日（日）通常通り営業しております。<br>※ 5月1日（火）は、定休日のため休業しております。</p>
	</div>-->
	<p style="margin: 30px 0 20px;"><a href="http://www.e-monte.co.jp/riyu"><img src="<?php echo get_template_directory_uri(); ?>/images/img4.png" alt="WHY CHOOSE?"></a></p>
	<div class="tel">

		<p><img src="<?php echo get_template_directory_uri(); ?>/images/tel-title.png" alt="Tel"></p>
<p><a href="tel:050-7302-3462"><img src="<?php echo get_template_directory_uri(); ?>/images/tel-img.png" alt="tel:050-7302-3462"></a></p>
	</div>

<section id="customer-voice">
	<p class="title6 text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/title6.png" alt="voice"></p>
	<div class="voices">
<?php
$args = array(
	'post_type' => 'voice', /* 投稿タイプ */
	'posts_per_page' => 6 /* 件数表示 */
); ?>
<?php query_posts( $args ); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>
<div class="voice">
<p><a href="<? echo gr_get_image_src('voice_image01'); ?>" rel="lightbox[top_voice]"><?php
				printf('%s',
				gr_get_image('voice_image01',
				array( 'width' => 200, 'alt' => esc_attr( post_custom( '<?php the_title(); ?>' ) ) )
									)
								);
								?></a></p>
								<p class="v-desc"><?php the_title(); ?>
<?php if(post_custom('voice_alt01')) ;echo post_custom( 'voice_alt01' ); ?><br><span>
<?php if(post_custom('voice_seko_url')) {?>
	<a href="<?php echo post_custom('voice_seko_url');?>" class="more">詳しく読む　＞</a></span></p>

	<?php }?>
</div>
<?php
$i++; //最後にループ回数を一つ進める
endwhile; ?>

<br clear="all" />
<?php else : ?>
    	<p class="no_data">表示する記事はありませんでした</p>
<?php endif; ?>
<?php wp_reset_query(); ?>


	</div>

</section>


<section id="event">
<?php

$args = array(
	'post_type' => 'event', /* 投稿タイプを指定 */
	'posts_per_page' => 2	/* 最大表示数 */
);
query_posts( $args );
?>

	<p class="title3 text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/title3.png" alt="event"></p>

	<div class="events">
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
										array( 'size' => 'medium', 'alt' => esc_attr( post_custom( 'event_img_alt01' ) ), 'class' => esc_attr('object-fit-img') )
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
								<p class="e-desc2"><a href="<?php the_permalink() ?>" class="banner_alpha">詳細を見る</a></p>
						</div>
				</div>
				<!--event_content-->
				<?php endwhile; ?>
<?php else : ?>
<p style="margin-left:10px;">表示する記事はありませんでした</p>
<?php endif; ?>
	</div>

<?php wp_reset_query(); ?>
	<p class="text-center con-btn"><a href="/event"><img src="<?php echo get_template_directory_uri(); ?>/images/event-btn.png" alt="イベント一覧"></a></p>
</section>


<section id="construction">
<?php $args = array(
			'post_type' => 'seko', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 12 /* 件数表示 */
			); ?>
	<?php query_posts( $args ); ?>
	<p class="text-center title4"><img src="<?php echo get_template_directory_uri(); ?>/images/title4.png" alt="施工事例"></p>

	<div class="constructions">
		<?php if (have_posts()) : ?>
	<?php $i = 0; ?>

	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

	<div class="construction <?php if($i%4==0){ echo " c_left";} ?> con-desc">
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
<img src="<?php echo site_url(); ?>/wp-content/themes/gaiheki/page_image<?php echo post_custom('seko_csv2') ?>" class="img" alt="施工事例"/>
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
	</div>
	<p class="text-center con-btn"><a href="/seko"><img src="<?php echo get_template_directory_uri(); ?>/images/construction-btn.png" alt="施工事例一覧"></a></p>
</section>
<p class="img1"><a href="/raiten"><img src="<?php echo get_template_directory_uri(); ?>/images/img1.png" alt="raiten"></a></p>
<section id="navi">
	<p class="text-center title1"><img src="<?php echo get_template_directory_uri(); ?>/images/title1.png" alt="NAVI"></p>
	<nav id="menu">
		<ul>
			<li>
				<a class="menu-group">会社案内<span>COMPANY</span></a>
				<div class="inner">
					<ul class="comList comList01">
						<li><a href="http://www.e-monte.co.jp/company">会社案内</a></li>
						<li><a href="http://www.e-monte.co.jp/staff">スタッフ紹介</a></li>
						<li><a href="http://www.e-monte.co.jp/raiten">来店予約</a></li>
						<li><a href="http://www.e-monte.co.jp/riyu	">選ばれる理由</a></li>
					</ul>
				</div>
			</li>

			<li>
				<a class="menu-group">施工事例<span>WORKS</span></a>
				<div class="inner">
					<ul class="comList comList01">
						<li><a href="http://www.e-monte.co.jp/seko_cat/ohuro">お風呂</a></li>
						<li><a href="http://www.e-monte.co.jp/seko_cat/toilet">トイレ</a></li>
						<li><a href="http://www.e-monte.co.jp/seko_cat/kitchen">キッチン</a></li>
						<li><a href="http://www.e-monte.co.jp/seko_cat/senmen">洗面所</a></li>
						<li><a href="http://www.e-monte.co.jp/seko_cat/all">オール電化</a></li>
						<li><a href="http://www.e-monte.co.jp/seko_cat/sun">太陽光発電</a></li>
						<li><a href="http://www.e-monte.co.jp/seko_cat/battery">蓄電池</a></li>
						<li><a href="http://www.e-monte.co.jp/seko_cat/gaiheki">外壁・屋根</a></li>
						<li><a href="http://www.e-monte.co.jp/seko_cat/naiso">内装</a></li>
						<li><a href="http://www.e-monte.co.jp/seko_cat/kyuto">給湯器</a></li>
						<li><a href="http://www.e-monte.co.jp/seko_cat/exterior">エクステリア</a></li>
						<li><a href="http://www.e-monte.co.jp/seko_cat/genkan">玄関</a></li>
						<li><a href="http://www.e-monte.co.jp/seko_cat/mado">窓</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a class="menu-group"></span>リフォームメニュー<span>MENU</span></a>
				<div class="inner">
					<ul class="comList comList01">


				        <li><a href="http://www.e-monte.co.jp/ofuro">お風呂</a></li>
				        <li><a href="http://www.e-monte.co.jp/toilet">トイレ</a></li>
				        <li><a href="http://www.e-monte.co.jp/kitchen">キッチン</a></li>
				        <li><a href="http://www.e-monte.co.jp/senmen">洗面</a></li>
						<li><a href="http://www.e-monte.co.jp/kyuto">給湯器</a></li>

					  	<li><a href="http://www.e-monte.co.jp/naiso">内装</a></li>
					  	<li><a href="http://www.e-monte.co.jp/alldenka">オール電化</a></li>

					  	 <li><a href="http://www.e-monte.co.jp/gaiheki">外壁・屋根</a></li>
					  	 <li><a href="http://www.e-monte.co.jp/solar">太陽光発電</a></li>
					  	 <li><a href="http://www.e-monte.co.jp/tikuden">蓄電池</a></li>

					</ul>
				</div>
			</li>
			<li>
				<a href="http://www.e-monte.co.jp/special"></span>大規模リフォーム<span>RENOVATION</span></a>
			</li>
			<li>
				<a href="http://www.e-monte.co.jp/faq"></span>よくある質問<span>Q&A</span></a>
			</li>
			<li>
				<a href="http://www.e-monte.co.jp/chirashi"></span>最新チラシ<span>FILTER</span></a>
			</li>
		</ul>
	</nav>

</section>

<section id="field-diary">
	<p class="text-center title2"><img src="<?php echo get_template_directory_uri(); ?>/images/title2.png" alt="現場日記"></p>
	<div class="diary-in">
<?php $args = array(
			'post_type' => 'genbanikki', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 2 /* 件数表示 */
			); ?>
	<?php query_posts( $args ); ?>
	<?php if (have_posts()) : ?>
	<?php $i = 0; ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>

<div class="diary">
<?php
$files = get_children("post_parent=$id&post_type=attachment&post_mime_type=image");
if (!empty($files)){
$keys = array_keys($files);
$num=$keys[0];
$thumb=wp_get_attachment_thumb_url($num);
print '<a href="' . clean_url(get_permalink()) . '" title="' .
the_title_attribute('echo=0') . '"><img src="' . clean_url($thumb) .
'" width="210" alt="' . the_title_attribute('echo=0') . '" class="img" alt="diary"/></a>' . "\n";
}
?>

<div class="city diary-txt"><?php the_time('Y年n月j日');?><br/>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?><br />
<?php the_excerpt(); ?></a></div>
</div>
<?php $count++; //最後にループ回数を一つ進める ?>
<?php endwhile; ?>
<?php else : ?>
<p style="margin-left:10px;">現在登録されておりません。</p>
<?php endif; ?>
<?php wp_reset_query(); ?>

	</div>
	<p class="text-center con-btn"><a href="/genbanikki"><img src="<?php echo get_template_directory_uri(); ?>/images/diary-btn.png" alt="現場日記詳細"></a></p>
</section>


<section id="introduction">
	<p class="img2"><img src="<?php echo get_template_directory_uri(); ?>/images/img2.png" alt="intro"></p>
	<!-- <p class="img3"><a href="http://www.e-monte.co.jp/shiharai"><img src="<?php echo get_template_directory_uri(); ?>/images/img3.png" alt="intro2"></a></p> -->
</section>


















<section id="enquete">
<p class="text-center title7"><img src="<?php echo get_template_directory_uri(); ?>/images/title7.png" alt="お客様の声"></p>

<?php $args = array(
			'post_type' => 'enquete', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 2 /* 件数表示 */
			); ?>
	<?php query_posts( $args ); ?>
	<?php if (have_posts()) : ?>
	<?php $i = 0; ?>
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

<?php $count++; //最後にループ回数を一つ進める ?>
<?php endwhile; ?>
<?php else : ?>
<p style="margin-left:10px;">現在登録されておりません。</p>
<?php endif; ?>
<?php wp_reset_query(); ?>


<p class="text-center con-btn"><a href="/enquete"><img src="<?php echo get_template_directory_uri(); ?>/images/enquete-btn.png" alt="お客様の声をもっと見る"></a></p>
</section>






















<section id="reform-menu">
	<p class="title5 text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/title5.png" alt="リフォーム"></p>
	<div class="reforms">
		<a href="http://www.e-monte.co.jp/ofuro" class="reform"><p><img src="<?php echo get_template_directory_uri(); ?>/images/reform1.png" alt="お風呂"></p></a>
		<a href="http://www.e-monte.co.jp/toilet" class="reform"><p><img src="<?php echo get_template_directory_uri(); ?>/images/reform2.png" alt="トイレ"></p></a>
		<a href="http://www.e-monte.co.jp/kitchen" class="reform"><p><img src="<?php echo get_template_directory_uri(); ?>/images/reform3.png" alt="キッチン"></p></a>
		<a href="http://www.e-monte.co.jp/senmen" class="reform"><p><img src="<?php echo get_template_directory_uri(); ?>/images/reform4.png" alt="洗面所"></p></a>
		<a href="http://www.e-monte.co.jp/alldenka" class="reform"><p><img src="<?php echo get_template_directory_uri(); ?>/images/reform5.png" alt="オール電化"></p></a>
		<a href="http://www.e-monte.co.jp/solar" class="reform"><p><img src="<?php echo get_template_directory_uri(); ?>/images/reform6.png" alt="太陽光発電"></p></a>
		<a href="http://www.e-monte.co.jp/tikuden" class="reform"><p><img src="<?php echo get_template_directory_uri(); ?>/images/reform7.png" alt="蓄電池"></p></a>
		<a href="http://www.e-monte.co.jp/kyuto" class="reform"><p><img src="<?php echo get_template_directory_uri(); ?>/images/reform8.png" alt="給湯器"></p></a>
		<a href="http://www.e-monte.co.jp/naiso" class="reform"><p><img src="<?php echo get_template_directory_uri(); ?>/images/reform9.png" alt="内装"></p></a>
		<a href="http://www.e-monte.co.jp/gaiheki" class="reform"><p><img src="<?php echo get_template_directory_uri(); ?>/images/reform10.png" alt="外壁・屋根"></p></a>
	</div>
	<div class="tel">
		<p><img src="<?php echo get_template_directory_uri(); ?>/images/tel-title.png" alt="Tel"></p>
		<p><a href="tel:050-7302-3462"><img src="<?php echo get_template_directory_uri(); ?>/images/tel-img.png" alt="tel:050-7302-3462"></a></p>
	</div>
</section>


</article>
<?php get_footer(); ?>
