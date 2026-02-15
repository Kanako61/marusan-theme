<?php
/**
 * フロントページテンプレート
 */
?>

<?php get_header(); ?>

<!-- ローディング画面 -->
<!--<div id="loading">
  <p>Loading...</p>
  <div id="loading-screen"></div>
</div>-->

<main class="main main_top className">

<!--====================================================

  mainImage

=====================================================-->

<div class="main_b">
<div id="slider"></div>
<div class="main_text">
    <p class="main_t fadein"><span class="main_t_ja">品質にこだわり続ける、<br class="sp_br">それが私たちのものづくり。</span><br><span class="main_t_en">Heigh Quality</span><br><span class="main_t_en">Manufacturing</span></p>
</div>
<!--動画のボタン-->
<div class="top-p_movie fadein">
  <a class="movie_btn" href="">
    <p class="top-p_movie_text">明日の家づくりを創る<br><span class="en">Promotion Movie</span></p>
    <div class="movie_pic">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/p-movie.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/p-movie.png" alt="プロモーションムービー">
        </picture>
      </div>
  </a>
</div>
<!--動画のボタン-->
</div>
          
<!--====================================================

  About Us
  私たちにできること

=====================================================-->

<section class="top_about top_section">
  <h2 class="top_h2 fadein"><span class="en">About Us</span><span class="ja">私たちにできること</span></h2>

  <div class="about_c">

  <div class="left_c">
  <p class="top_about_t fadein">プレカット材・木質加工品など、高精度・高品質な部材でお客様のご要望にお応えし、建築現場におけるごみ発生の削減、大幅な工期短縮に貢献します</p>
    <div class="parallax-img js-trigger left_c_01">
      <picture class="left_c_p">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-pic02.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-pic02.jpg" alt="工場内の画像">
      </picture>
    </div>

    <div class="parallax-img js-trigger left_c_02">
      <picture class="left_c_p">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-pic01.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-pic01.jpg" alt="プレカットの画像">
      </picture>
    </div>

    <div class="parallax-img js-trigger left_c_03">
      <picture class="left_c_p">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-pic03.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-pic03.jpg" alt="プレカット作業中の画像">
      </picture>
    </div>
  </div>

    <div class="right_c">
      <ul class="right_c_list">
          <!--会社情報-->
          <li class="btn_content fadein">
          <a href="<?php echo home_url('/') ?>company">
          <div class="right_c_pic">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-02.jpg" alt="会社の画像">
           </picture>
          </div>

          <dl>
            <dt>会社情報</dt>
            <dd>
              <ul>
                <li>理念</li>
                <li>代表挨拶</li>
                <li>会社概要</li>
                <li>沿革</li>
                <li>事務所紹介</li>
              </ul>
            </dd>
          </dl>
          </a>
        </li>
        <!--商品情報-->
        <li class="btn_content fadein">
          <a href="<?php echo home_url('/'); ?>product">
          <div class="right_c_pic">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-01.fpg" alt="木材の画像">
           </picture>
          </div>

          <dl>
            <dt>商品情報</dt>
            <dd>
              <ul>
                <li>プレカット</li>
                <li>断熱材</li>
                <li>建て方施工</li>
                <li>構造計算</li>
                <li>設備</li>
              </ul>
            </dd>
          </dl>
          </a>
        </li>

        <!--取り組み-->
        <li class="btn_content fadein">
          <a href="<?php echo home_url('/'); ?>initiatives">
          <div class="right_c_pic">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-03.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us-03.jpg" alt="自然の画像">
           </picture>
          </div>

          <dl>
            <dt>マルサンの取り組み</dt>
            <dd>
              <ul>
                <li>品質への取り組み</li>
                <li>SDGsへの取り組み</li>
              </ul>
            </dd>
          </dl>
          </a>
        </li>
    </ul>
  </div>
</div>


<div class="top-about_wood parallax-img js-trigger">
<picture>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wood-g.svg" alt="構造計算">
</picture>
</div>
</section>


<!--====================================================

  News
  お知らせ

=====================================================-->

<section class="news top_section">

<div class="news_bk pic_a">
  <div class="parallax-img js-trigger">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-b.jpg"></div>
  </div>
</div>

<div class="news_c fadein">
<div class="news_c_inner">
  <h2 class="news_h2 top_h2"><span class="en">News</span><span class="ja">お知らせ</span></h2>


  <!-- ここからループ -->
  <article id="post-<?php the_ID(); ?>"<?php post_class('news_content'); ?>>
  	<div class="news_content_inner">	
		<ul class="news_meta">
			<?php query_posts("cat=1&showposts=3"); ?> 
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post();  ?>
          <li class="news_meta_li">
						<ul class="news_meta_list">
              <li class="news_thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></li>
              <div class="news_meta_list_inner">
							<li class="news_meta_time">
								<time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d')?></time>
							</li>
							<li class="news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            </div>
						</ul>
          </li>
				<?php endwhile; ?>
			<?php endif; ?>
    </ul>
  	</div>

    <div class="top-button">
    <a href="<?php echo get_term_link('news', 'category'); ?>">お知らせ一覧</a>
  </div>
  </article>
  <!-- ループここまで -->
</div>
  </div>
</section>

<!--====================================================

  Product

=====================================================-->
<section class="t_precut top_section fadein">

  <div class="t_precut_c">
    <h2 class="top_h2"><span class="en">Product</span><span class="ja">商品情報</span></h2>

    <div class="t_precut_c_inner">
      <p>プレカット材・木質加工品など、高精度・高品質な部材でお客様のご要望にお応えし、建築現場におけるゴミ発生の削減、大幅な工期短縮に貢献します。お気軽にご相談、お問い合わせください。</p>
      <div class="top-button t_precut_b">
        <a href="<?php echo home_url('/'); ?>product">一覧を見る</a>
      </div>
    </div>
  </div>

  <!--swiperここから-->
  <div class="card l-section">
  <div class="l-inner">

  <div class="swiper">
  <div class="swiper-wrapper">

  <!--01-->
  <a href="<?php echo get_permalink( get_page_by_path( 'product' ) ); ?>#content1" class="swiper-slide">
    <article class="slide">
      <div class="slide-media img-cover">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/precut-05-2.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/precut-05-2.jpg" alt="在来工法プレカット">
        </picture>
      </div>
      <div class="slide-content">
        <h3 class="slide-h3">在来工法プレカット</h3>
        <p class="slide-text">土台、柱、梁といった軸組で支える工法です。​継手、仕口、ほぞ、ほぞ穴などで​木材と木材を接合します。</p>
      </div>
    </article>
  </a>
  <!--01 END-->

  <!--02-->
  <a href="<?php echo get_permalink( get_page_by_path( 'product' ) ); ?>#content2" class="swiper-slide">
    <article class="slide">
      <div class="slide-media img-cover">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/precut-05.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/precut-05.jpg" alt="金在来軸組工法">
        </picture>
      </div>
      <div class="slide-content">
        <h3 class="slide-h3">在来軸組工法</h3>
        <p class="slide-text">在来工法とは、日本で古くから発達してきた構法で、木造住宅の工法としては主流の工法です。</p>
      </div>
    </article>
  </a>
  <!--02 END-->

  <!--03-->
  <a href="<?php echo get_permalink( get_page_by_path( 'product' ) ); ?>#content3" class="swiper-slide">
    <article class="slide">
      <div class="slide-media img-cover">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/precut-list-02.jpg" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/precut-list-02.jpg" alt="金物工法">
      </picture>
      </div>
      <div class="slide-content">
        <h3 class="slide-h3">金物工法</h3>
        <p class="slide-text">金物工法とは在来軸組工法における継手・仕口部分を梁受け金物やホゾパイプで接合する工法です。</p>
      </div>
    </article>
  </a>
  <!--03 END-->

  <!--04-->
  <a href="<?php echo get_permalink( get_page_by_path( 'product' ) ); ?>#content4" class="swiper-slide">
    <article class="slide">
      <div class="slide-media img-cover">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/precut-list-06.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/precut-list-06.jpg" alt="パネル工法(在来)">
      </picture>
      </div>
      <div class="slide-content">
        <h3 class="slide-h3">パネル工法(在来)</h3>
        <p class="slide-text">性能向上を目指し、開発したのが、在来木造住宅用パネルです。プレカット構造材が住宅の骨組みとなり、パネルは下地材となります。</p>
      </div>
    </article>
  </a>
  <!--04 END-->

  <!--05-->
  <a href="<?php echo get_permalink( get_page_by_path( 'product' ) ); ?>#content5" class="swiper-slide">
    <article class="slide">
      <div class="slide-media img-cover">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/precut-list-07.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/precut-list-07.jpg" alt="枠組壁工法(2×4)">
      </picture>
      </div>
      <div class="slide-content">
        <h3 class="slide-h3">枠組壁工法(2×4)</h3>
        <p class="slide-text">これまでの在来工法とは大きく異なり、建物を柱や梁で支えるのではなく、面（耐力壁）と面で支える工法です。</p>
      </div>
    </article>
  </a>
  <!--05 END-->

    <!--06-->
    <a href="#" class="swiper-slide">
    <article class="slide">
      <div class="slide-media img-cover">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/precut-list-08.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/precut-list-08.jpg" alt="吹付断熱材">
      </picture>
      </div>
      <div class="slide-content">
        <h3 class="slide-h3">吹付断熱材</h3>
        <p class="slide-text">高気密高断熱住宅が当たり前になってきている昨今の住宅業界ですが、当社からも吹付による断熱材施工が可能です。​</p>
      </div>
    </article>
  </a>
  <!--06 END-->

  </div><!-- /swiper-wrapper -->

  <div class="swiper-controller">
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div><!-- /swiper -->

</div>
</div>
<!--swiperここまで-->

</section>


<!--====================================================

  Structural Calculation
  構造計算

=====================================================-->

<section class="kozo top_section">
  <div class="kozo_inner fadein">
  <h2 class="top_h2 kozo_h2"><span class="en">Structural Calculation</span><span class="ja"> 構造計算</span></h2>
  <div class="kozo-c">
    <div calss="left-c">
      <p class="fadein">「どの構造設計⼠がいいのかわからない」「そもそも近くに頼めるところがない」など、⼀般のお客さまの「？」にもお応えいたします。デザイン性のこだわりも、基準に適した材料のご提案も、従来⼯法・⾦物⼯法・その他多種多様な⼯法による構造計算は「⽊造」を熟知しているからこそのマルサンにお任せください。
      </p>

      <div class="top-button fadein">
        <a href="<?php echo home_url('/'); ?>product#precut-kozo">詳しく見る</a>
      </div>

      <div class="left-c_inner fadein">
        <dl>
          <dt>[業務提携先]</dt>
          <dd>
            <a href="https://www.moriair.com/" target="blank;">
              <picture class="moriair_pic">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/moriair.png" alt="メインビジュアル画像">
              </picture>
            </a>
          </dd>
        </dl>
      </div>
    </div>

    <div calss="right-c">
      <div class="kozo_pic pic_a">
        <div class="parallax-img js-trigger">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/kozo.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kozo.jpg" alt="構造計算">
          </picture>
        </div>
      </div>
    </div>

  </div>
  </div>
</section>

<!--====================================================

  Work Flow
  仕事の流れ

====================================================-->
<section class="top_workFlow top_section fadein">

<div class="mv03 l-section">
<div class="top_workFlow_inner">
<h2 class="top_h2 kozo_h2"><span class="en">Work Flow</span><span class="ja">仕事の流れ</span></h2>

<div class="top-button t-workFlow-b">
  <a href="<?php echo home_url('/'); ?>workflow">詳細を見る</a>
</div>
</div>

<div class="top-workFlow_wood parallax-img js-trigger">
<picture>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wood-g.svg" alt="構造計算">
</picture>
</div>

  <div class="swiper-area">
    <div class="swiper swiper-main">
      <div class="swiper-wrapper">

        <!--スライド１-->
        <div class="swiper-slide">
          <article class="slide">
            <div class="slide-media img-cover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-flow01.jpg" alt="図面作成・見積もり依頼"></div>
            <!--<div class="slide-content">
              <h3 class="slide-title">Lorem ipsum</h3>
              <p class="slide-text">Dolor sit amet</p>
            </div>-->
          </article>
        </div>

        <!--スライド２-->
        <div href="#" class="swiper-slide">
          <article class="slide">
            <div class="slide-media img-cover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-flow02.jpg" alt="伏面作成・見積書作成"></div>
            <!--<div class="slide-content">
              <h3 class="slide-title">Sed eiusmod</h3>
              <p class="slide-text">Tempor incidunt ut labore</p>
            </div>-->
          </article>
        </div>

       <!--スライド３-->
        <div href="#" class="swiper-slide">
          <article class="slide">
            <div class="slide-media img-cover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-flow03.jpg" alt="打ち合わせ・図面作成"></div>
            <!--<div class="slide-content">
              <h3 class="slide-title">Ut enim</h3>
              <p class="slide-text">Ad minim veniam.</p>
            </div>-->
          </article>
        </div>

        <!--スライド４-->
        <div href="#" class="swiper-slide">
          <article class="slide">
            <div class="slide-media img-cover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-flow04.jpg" alt="加工"></div>
            <!--<div class="slide-content">
              <h3 class="slide-title">Quis nostrum<br>exercitationem</h3>
              <p class="slide-text">Ullam corporis suscipit laboriosam</p>
            </div>-->
          </article>
        </div>

        <!--スライド５-->
        <div href="#" class="swiper-slide">
          <article class="slide">
            <div class="slide-media img-cover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-flow05.jpg" alt="検品・出荷"></div>
            <!--<div class="slide-content">
              <h3 class="slide-title">Quis nostrum<br>exercitationem</h3>
              <p class="slide-text">Ullam corporis suscipit laboriosam</p>
            </div>-->
          </article>
        </div>

        <!--スライド６-->
        <div href="#" class="swiper-slide">
          <article class="slide">
            <div class="slide-media img-cover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-flow06.jpg" alt="納品・上棟"></div>
            <!--<div class="slide-content">
              <h3 class="slide-title">Quis nostrum<br>exercitationem</h3>
              <p class="slide-text">Ullam corporis suscipit laboriosam</p>
            </div>-->
          </article>
        </div>
      </div><!-- /swiper-wrapper -->
    </div><!-- /swiper-main -->

    <div class="swiper swiper-thumb">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="thumb">
            <div class="thumb-media img-cover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-flow01.jpg" alt="図面作成・見積もり依頼"></div>
            <h3 class="thumb-title"><span class="thumb-title_num">01.</span>図面作成・見積もり依頼</h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="thumb">
            <div class="thumb-media img-cover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-flow02.jpg" alt="図伏図・見積書作成"></div>
            <h3 class="thumb-title"><span class="thumb-title_num">02.</span>伏図・見積書作成</h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="thumb">
            <div class="thumb-media img-cover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-flow03.jpg" alt="打合せ・図面承認"></div>
            <h3 class="thumb-title"><span class="thumb-title_num">03.</span>打合せ・図面承認</h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="thumb">
            <div class="thumb-media img-cover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-flow04.jpg" alt="加工"></div>
            <h3 class="thumb-title"><span class="thumb-title_num">04.</span>加工</h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="thumb">
            <div class="thumb-media img-cover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-flow05.jpg" alt="検品・出荷"></div>
            <h3 class="thumb-title"><span class="thumb-title_num">05.</span>検品・出荷</h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="thumb">
            <div class="thumb-media img-cover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/work-flow06.jpg" alt="納品・上棟"></div>
            <h3 class="thumb-title"><span class="thumb-title_num">06.</span>納品・上棟</h3>
          </div>
        </div>
      </div><!-- /swiper-wrapper -->
    </div><!-- /swiper-thumb -->
  </div><!-- /swiper-area -->
</div>
</section>

<!--ループ文字-->  
<div class="wrapper fadein">
<div class="parallax-img js-trigger">
  <p class="loop">Heigh Quality Manufacturing</p>
  <p class="loop loop2">Heigh Quality Manufacturing</p>
</div>
</div>




<!--====================================================

  Recruit
  採用情報

=====================================================-->
<aside class="top_recruit top_section fadein">
  <ul class="top_recruit_list">
  <li class="top_recruit_list_item t-r-text">
      <h2 class="top_h2 top_recruit_h2 fadein"><span class="en">Recruit</span><span class="ja">採用情報</span></h2>
      
      <p class="fadein">木造住宅の木材プレカットの加工や販売、現場吹付断熱材施工など、住宅建築に深く関わる仕事をしています。</p>

      <div class="top-button t-workFlow-b fadein">
        <a href="<?php echo home_url('/'); ?>recruit">求人情報をみる</a>
      </div>
    </li>

    <!--加工機オペレーター-->
    <li class="top_recruit_list_item t-r-pic fadein">
      <a href="<?php echo home_url('/'); ?>recruit01">
      <p class="title_en">Processing<br>Machine<br>Operators</p>
      <p class="title_ja">加工機オペレーター</p>
      <picture class="t-recruit_pic">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit-02.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit-02.jpg" alt="加工機オペレーター">
      </picture>
      </a>
    </li>

    <!--CADオペレーター-->
    <li class="top_recruit_list_item t-r-pic fadein">
    <a href="<?php echo home_url('/'); ?>recruit02">
      <p class="title_en">CAD Operator</p>
      <p class="title_ja">CADオペレーター</p>
      <picture class="t-recruit_pic">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit-03.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit-03.jpg" alt="CADオペレーター">
      </picture>
      </a>
    </li>

    <!--セールスオペレーター-->
    <li class="top_recruit_list_item t-r-pic fadein">
    <a href="<?php echo home_url('/'); ?>recruit03">
      <p class="title_en">Sales Driver</p>
      <p class="title_ja">セールスドライバー</p>
      <picture class="t-recruit_pic">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit-01.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit-01.jpg" alt="セールスドライバー">
      </picture>
      </a>
    </li>
  </ul>
  
</aside>
<!--====================================================

  Contact
  お問い合わせ

=====================================================-->
<?php get_template_part('contact'); ?>

</main>

<?php get_footer(); ?>