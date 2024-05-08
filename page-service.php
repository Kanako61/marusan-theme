<?php
/*
Template Name: service
*/
/* product */
?>

<?php get_header(); ?>

<!-- ローディング画面 -->
<!--<div id="loading">
    <p>Loading...</p>
    <div id="loading-screen"></div>
</div>-->

<main class="l-contents-main page_main service_main">

<!--page img-->
<div class="page_title-pic">
<picture>
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/page-service-bk.webp" type="image/webp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/page-service-bk.jpg" alt="プレカット">
</picture>
</div>

<div class="service_content page_content">

<!--page title-->
<!--<h1 class="page_header_title content-title service_title">
  <p class="ja"><?php the_title(); ?></p>
</h1>-->
<!--page titleここまで-->


<!--====================================================
    プレカット
=====================================================-->
<section class="page_section page_precut">
  <h2 class="page_section_h2 page_precut_h2">プレカット</h2>
  <p>今や日本の住宅建築の当たり前となったプレカットは1995年に発生した阪神・淡路大震災の復興をきっかけに普及が広がりました。1935年創業以来、様々な住宅建築に携わってきたマルサンでは、プレカットが普及する前の1989年にプレカット工場を設立。35年以上に渡ってプレカットの先駆者としてプレカットの普及に尽力して参りました。対応可能な工法は在来工法だけでなく、あらゆる金物工法やパネル工法、2×4工法にも対応。今ではプレカットのみならず、吹付断熱の施工や建方工事の請負など、住宅建築を多方面にてサポート、ご提案致します。</p>
</section>


<!--スライドここから-->
<section class="precut_list l-section">
  <div class="l-inner">

  <ul class="thumb-wrapper">
    <li class="thumb-media">
      <div class="thumb-media_img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/thumb-media-01.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/thumb-media-01.jpg" alt="在来工法">  
        </picture>
      </div>
      <p class="precut_tit">在来<br class="p_br">工法</p>
    </li>

    <li class="thumb-media">
      <div class="thumb-media_img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/thumb-media-02.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/thumb-media-02.jpg" alt="金物工法">  
        </picture>
      </div>
      <p class="precut_tit">金物<br class="p_br">工法</p>
    </li>

    <li class="thumb-media">
      <div class="thumb-media_img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/thumb-media-03.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/thumb-media-03.jpg" alt="パネル工法">  
        </picture>
      </div>
      <p class="precut_tit">パネル<br class="p_br">工法</p>
    </li>

    <li class="thumb-media">
      <div class="thumb-media_img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/thumb-media-04.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/thumb-media-04.jpg" alt="2×4工法">  
        </picture>
      </div>
      <p class="precut_tit">2×4<br class="p_br">工法</p>
    </li>
  </ul><!-- /thumb -->

    <ul class="swiper swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-watch-progress swiper-backface-hidden precut_list_c">
      <div class="swiper-wrapper" id="swiper-wrapper-8311066e659334865" aria-live="polite" style="transition-duration: 0ms;">

      <li class="swiper-slide swiper-slide-next" role="group" aria-label="7 / 10" style="width: 720px; opacity: 0; transform: translate3d(-4320px, 0px, 0px); transition-duration: 0ms;">
        <div class="slide">
          <div class="slide-media">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/slide-media-01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/slide-media-01.jpg" alt="2×4工法">  
            </picture>
          </div>
          <dl class="slide-title">
            <dt class="text-c">在来工法</dt>
            <dd><p>日本で古くから伝わる伝統的工法。現代の建築基準に合わせて発展してきました。大工職人が現場で行っていた仕口や継手の加工をマルサンの工場にて完全自動化。職人技を機械化することで、伝統的工法を受け継ぎ、現代の住宅建築の安全・効率化を根本から支えます。</p></dd>  
          </dl>
        </div>
      </li>

      <li class="swiper-slide swiper-slide-next" role="group" aria-label="7 / 10" style="width: 720px; opacity: 0; transform: translate3d(-4320px, 0px, 0px); transition-duration: 0ms;">
        <div class="slide">
          <div class="slide-media">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/slide-media-02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/slide-media-02.jpg" alt="2×4工法">  
            </picture>
          </div>
          <dl class="slide-title">
            <dt class="text-c">金物工法</dt>
            <dd><p>在来工法における継手や仕口を金物同士によって接合させる工法。在来工法と比較すると、木材の断面欠損が少ない為、より高強度で安定した建築が可能です。金物は工場にてあらかじめ取り付けられ、現場ではドリフトピンを打つのみの為、熟練技術を必要としない施工が可能です。</p></dd>  
          </dl>
        </div>
      </li>

      <li class="swiper-slide swiper-slide-next" role="group" aria-label="7 / 10" style="width: 720px; opacity: 0; transform: translate3d(-4320px, 0px, 0px); transition-duration: 0ms;">
        <div class="slide">
          <div class="slide-media">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/slide-media-03.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/slide-media-03.jpg" alt="2×4工法">  
            </picture>
          </div>
          <dl class="slide-title">
            <dt class="text-c">パネル工法</dt>
            <dd><p>在来工法に加えて構造用合板を用いて耐震性向上を図る工法です。構造用合板と柱材等を組み立てることでパネルを作成します。パネルにあらかじめ断熱材を接着するため、現場での工期短縮や気密・断熱性能の向上を実現します。また、あらゆるパネル工法にも対応が可能です。</p></dd>  
          </dl>
        </div>
      </li>

      <li class="swiper-slide swiper-slide-next" role="group" aria-label="7 / 10" style="width: 720px; opacity: 0; transform: translate3d(-4320px, 0px, 0px); transition-duration: 0ms;">
        <div class="slide">
          <div class="slide-media">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/slide-media-04.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/slide-media-04.jpg" alt="2×4工法">  
            </picture>
          </div>
          <dl class="slide-title">
            <dt class="text-c">2×4工法</dt>
            <dd><p>2×4材を用いて枠組を作成し、構造用合板を用いてパネルを構成していきます。床・壁・屋根を一体化させ「六面体構造」を形成することで高い耐震性と耐久性を実現可能です。マルサンの工場にてパネルを作成するため、現場ではパネルを組み合わせるだけで施工が可能になります。</p></dd>  
          </dl>
        </div>
      </li>
    </div>
    </ul><!-- /swiper-wrapper -->

      <!--<div class="swiper-controller">
        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-8311066e659334865" aria-disabled="false"></div>
        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-8311066e659334865" aria-disabled="false"></div>
      </div>-->
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>

  </div><!-- /swiper-main -->
</section>

<!--====================================================

  その他の事業

=====================================================-->
<section class="page_section page_other-precut">
  <dl class="page_other-precut_inner">
    <dt>プレカットを超えた<br class="sp_br">取り組み</dt>
    <dd>プレカット工場設立から35年以上、住宅を取り巻く環境は時代と共に大きく変化してきました。住宅ニーズや働き手の環境、法改正など、様々な変化に対応していく必要が出てきています。マルサンでは住宅建築を多方面からサポート出来るように様々な事業を展開し続けていきます。</dd>
  </dl>

<div class="other-precut_box">
  <ul class="other-precut_list">
    <!--建築資材-->
    <li>
      <dl class="other-precut_list_dl">
        <dt>建築資材</dt>
        <dd>やり方材から住宅設備まで、建築に係るあらゆる部材を取り扱っております。短納期での配達も対応できますので、資材に関することは何でもお気軽にご相談ください。</dd>  
      </dl>

      <div class="other-precut_list_img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/other-list-01.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/other-list-01.jpg" alt="建築資材">  
        </picture>
      </div>
    </li>

    <!--構造計算-->
    <li>
      <dl class="other-precut_list_dl">
        <dt>構造計算</dt>
        <dd>建築基準法改正によって構造計算を要する建物の範囲が拡大される見通しです。マルサンでは工務店様や建築事務所様に代わって構造計算業務をサポートすることが可能です。</dd>  
      </dl>

      <div class="other-precut_list_img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/other-list-02.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/other-list-02.jpg" alt="構造計算">  
        </picture>
      </div>
    </li>

    <!--吹付断熱-->
    <li>
      <dl class="other-precut_list_dl">
        <dt>吹付断熱</dt>
        <dd>気密・断熱・防音性・耐久性に優れた吹付断熱によってより性能の高い家づくりが可能です。熱伝導率0.036W/mk、業界最高基準での施工をマルサンが行います。</dd>  
      </dl>

      <div class="other-precut_list_img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/other-list-03.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/other-list-03.jpg" alt="吹付断熱">  
        </picture>
      </div>
    </li>

    <!--建て方-->
    <li>
      <dl class="other-precut_list_dl">
        <dt>建方</dt>
        <dd>マルサンで大工経験のある社員で建方班を結成。人手不足が深刻な建築現場をマルサンがプレカットから建方まで一貫して請け負います。</dd>  
      </dl>

      <div class="other-precut_list_img">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/service/other-list-04.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/other-list-04.jpg" alt="吹付断熱">  
        </picture>
      </div>
    </li>

  </ul>
</div>
</section>

</div>

</main>

<?php get_footer(); ?>