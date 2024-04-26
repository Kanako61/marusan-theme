<?php
/*
Template Name: product
*/
/* product */
?>

<?php get_header(); ?>

<!-- ローディング画面 -->
<!--<div id="loading">
    <p>Loading...</p>
    <div id="loading-screen"></div>
</div>-->

<main class="l-contents-main page_main">

<!--page title-->
<h1 class="page_header_title content-title precut_title">
  <p class="en">Product</p><br>
  <p class="ja"><?php the_title(); ?></p>
</h1>
<!--page titleここまで-->

<div class="page_title-pic">
<div class="parallax-img js-trigger">
<picture>
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/product-b.webp" type="image/webp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/product-b.jpg" alt="プレカット">
</picture>
</div>
</div>

<div class="precut_content page_content">

<nav class="page_nav">
<ul class="page_nav_list">
  <li><a href="#precut-advantage">プレカットの<br class="sp_br">メリット</a></li>
  <li><a href="#precut-type">プレカットの<br class="sp_br">種類</a></li>
  <li><a href="#precut-dannetsuzai">断熱材</a></li>
  <li><a href="#precut-tatekata">建て方施工</a></li>
  <li><a href="#precut-kozo">構造計算</a></li>
  <li><a href="#precut-facility">設備</a></li>
</ul>
</nav>

<!--====================================================
    What PreCut　プレカットとは
=====================================================-->
<section class="page_section precut-about" id="precut-about">
  <dl class="precut-about_dl precut_dl fadein">
    <dt>在来・金物・枠組・パネルなどあらゆる工法にて​お客様のご要望に合わせた製品をご提供します。</dt>
    <dd>今や日本の住宅建築の当たり前となったプレカット工法、​1935年創業以来、様々な住宅や非住宅建築に携わってきた経験と知識と生産体制によって、​在来軸組工法や枠組壁工法のみならず、金物工法や、パネル工法、​多種多様な建築方法によってあらゆるお客様のご要望に合わせてご提案が可能です。​</dd>
  </dl>

  <div class="page_pic precut-about_pic precut_pic fadein">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/product-01.webp" type="image/webp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/product-01.jpg" alt="">
    </picture>

    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/product-02.webp" type="image/webp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/product-02.jpg" alt="">
    </picture>
  </div>
</section>


<!--====================================================
    precut-advantage プレカットのメリット
=====================================================-->
<section class="page_section precut-advantage" id="precut-advantage">
  <h2 class="page_section_h2 precut_h2  fadein">
    <p class="en">Advantage</p>
    <p class="ja">プレカットのメリット</p>
  </h2>
  
  <ul class="precut-advantage_list">
    <li class="fadein">
      <h3 class="advantage_title"><span class="number">01</span>高精度な、家づくり</h3>
      <dl>
        <dt>コンピュータ制御で高い加工精度の高品質な家づくりが可能</dt>
        <dd> CAD入力で設計し、コンピューター制御で機械加工をおこなうので、 品質にバラツキがなく、正確な木材加工製品ができます。</dd>
      </dl>
    </li>

    <li class="fadein">
      <h3 class="advantage_title"><span class="number">02</span>工期短縮</h3>
      <dl>
        <dt>プレカットにより、工程が短縮され、コストを抑え「ムダ」を削減</dt>
        <dd>大工さんが20日間くらい行う加工作業を、半日で終わらせる事が出来ます。</dd>
      </dl>
    </li>

    <li class="fadein">
      <h3 class="advantage_title"><span class="number">03</span>環境にやさしい</h3>
      <dl>
        <dt>建築現場での「ゴミ」の削減</dt>
        <dd>工場生産により現場でのカット作業が減るため、騒音やゴミが減少します。</dd>
      </dl>
    </li>
  </ul>
</section>


<!--====================================================
    precut-type プレカットの種類
=====================================================-->
<section class="page_section precut-type" id="precut-type">
  <h2 class="page_section_h2 precut_h2 fadein">
    <p class="en">Pre-cut types</p>
    <p class="ja">プレカットの種類</p>
  </h2>

  <div class="sec">
  <div class="container">
  <div class="precut-box">  

  <aside class="sidebar">
    <div class="sidebar-inner">
    <h2 class="page_sidebar_h2">プレカット</h2>
      <ul id="js-index__list">
        <li>
          <a href="#content1" class="is-active">在来工法</a>
        </li>
        <li>
          <a href="#content2">在来軸組工法</a>
        </li>
        <li>
          <a href="#content3">金物工法</a>
        </li>
        <li>
          <a href="#content4">パネル工法</a>
        </li>
        <li>
          <a href="#content5">枠組壁工法</a>
        </li>
      </ul>
    </div>
  </aside>

  <ul class="precut-type_list">
    <!---------------------------
      在来工法
    ---------------------------->
    <li class="fadein scroll__target js-index__area" id="content1">
    <h3 class="precut_h3 precut-type-h3">在来工法</h3>
    <div class="precut-type_list_top">
      <div class="precut-type_list_top_pic">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-01.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-01.jpg" alt="在来工法">
      </picture>
      </div>

      <div class="precut-type_list_top_text">
      <p>土台、柱、梁といった軸組で支える工法です。​継手、仕口、ほぞ、ほぞ穴などで​木材と木材を接合します。</p>

      <p>以前は、各部材の、継手・仕口などの複雑な​加工を大工さんが鋸やノミを使って加工し​建てていましたが、プレカットを行うことで、現場での工期短縮・騒音減少・ごみの削減を​図ることができ、かつ精度・強度・品質を​より高めることが出来ます。​</p>
      </div>
    </div>

    <!--<div class="precut-type_list_bottom_pic">
      <div class="pic_bottom_list">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-01.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-01.jpg" alt="">
        </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-01.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-01.jpg" alt="">
      </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-01.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-01.jpg" alt="">
      </picture>
      </div>
    </div>-->
    </li>


     <!---------------------------
      在来軸組工法
    ---------------------------->
    <li class="fadein scroll__target js-index__area" id="content2">
    <h3 class="precut_h3 precut-type-h3">在来軸組工法</h3>
    <div class="precut-type_list_top">
      <div class="precut-type_list_top_pic">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-02.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-02.jpg" alt="在来軸組工法">
      </picture>
      </div>

      <div class="precut-type_list_top_text">
      <p>在来工法とは、日本で古くから発達してきた構法で、木造住宅の工法としては主流の工法です。</p>

      <p>在土台、柱、梁といった軸組で支える工法です。​継手、仕口、ほぞ、ほぞ穴などで木材と木材を接合します。​</p>

      <p>以前は、各部材の、継手・仕口などの複雑な加工を大工さんが鋸やノミを使って加工し建てていましたが、プレカットを行うことで、現場での工期短縮・騒音減少・ごみの削減を図ることができ、かつ精度・強度・品質をより高めることが出来ます。​</p>
      </div>
    </div>

    <!--<div class="precut-type_list_bottom_pic">
      <div class="pic_bottom_list">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-02.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-02.jpg" alt="">
        </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-02.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-02.jpg" alt="">
      </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-02.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-02.jpg" alt="">
      </picture>
      </div>
    </div>-->
    </li>


    <!---------------------------
      金物工法
    ---------------------------->
    <li class="fadein scroll__target js-index__area" id="content3">
    <h3 class="precut_h3 precut-type-h3">金物工法</h3>
    <div class="precut-type_list_top">
      <div class="precut-type_list_top_pic">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-03.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-03.jpg" alt="金物工法">
      </picture>
      </div>

      <div class="precut-type_list_top_text">
        <p>金物工法とは在来軸組工法における継手・仕口部分を梁受け金物やホゾパイプで接合する工法です。​</p>
        <p>在来工法と比較し、部材の断面欠損が小さくなる為、接合部の強度を上げることが可能になります。​これにより柱や梁が少なくても耐震性の高い空間を作ることが出来ます。​</p>
        <p>金物工法とは在来軸組工法における継手・仕口部分を梁受け金物やホゾパイプで接合する工法です。​</p>
      </div>
    </div>

    <!--<div class="precut-type_list_bottom_pic">
      <div class="pic_bottom_list">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
        </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
      </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
      </picture>
      </div>
    </div>-->
    </li>

    <!---------------------------
      パネル工法（在来）
    ---------------------------->
    <li class="fadein scroll__target js-index__area" id="content4">
    <h3 class="precut_h3 precut-type-h3">パネル工法</h3>
    <div class="precut-type_list_top">
      <div class="precut-type_list_top_pic">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-04.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-04.jpg" alt="パネル工法(在来)">
      </picture>
      </div>

      <div class="precut-type_list_top_text">
      <p>在来木造住宅のさらなる、性能向上を目指し、開発したのが、在来木造住宅用パネルです。プレカット構造材が住宅の骨組みとなり、パネルは下地材となります。​</p>

      <p>工期の短縮・気密性の向上・耐震性能の向上等のメリットを生み出します。また、床パネルは建築現場における大工職人の足場となり、現場の安全性向上が期待できます。​</p>

      <p>当社では、主に、壁用の在来パネルを生産しております。​通常、在来工法では、壁に筋違い（すじがい）を施行して壁倍率を確保するというやり方が一般的ですが、在来壁パネルの場合、壁用の合板に予め枠材や断熱材を取り付けることにより、建築現場の工機短縮はもとより、気密・断熱性能・耐震性等が向上し、より高性能な住宅を提供することができます。​
      </p>
    </div>
    </div>

    <!--<div class="precut-type_list_bottom_pic">
      <div class="pic_bottom_list">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
        </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
      </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/precut-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
      </picture>
      </div>
    </div>-->
    </li>


    <!---------------------------
      枠組壁工法（2×4）
    ---------------------------->
    <li class="fadein scroll__target js-index__area" id="content5">
    <h3 class="precut_h3 precut-type-h3">枠組壁工法（2×4）</h3>
    <div class="precut-type_list_top">
      <div class="precut-type_list_top_pic">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="枠組壁工法（2×4）">
      </picture>
      </div>

      <div class="precut-type_list_top_text">
      <p>これまでの在来工法とは大きく異なり、建物を柱や梁で支えるのではなく、面（耐力壁）と面で支える工法です。</p>

      <p>モノコック構造によって耐震性・耐火性・断熱性・気密性・防音性を高める事が可能になりました。​</p>

      <p>当社では長年に渡って培ってきたプレカット加工技術と在来工法向けのパネル組立技術を活用し、平成２４年よりツーバイフォー工法用のパネルの生産を行っております。ＣＡＤ／ＣＡＭで部材のカットを行っているのでより高い精度のパネルの供給を実現しています。​</p>
    </div>
    </div>
    <!--<div class="precut-type_list_bottom_pic">
      <div class="pic_bottom_list">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
        </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
      </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
      </picture>
      </div>
    </div>-->
    </li>
  </ul>
  </div>
</div>
</div>
</section>


<!--====================================================
     吹付断熱材
=====================================================-->
<section class="page_section page_kdannetsuzai" id="precut-dannetsuzai">
  <h2 class="page_section_h2 precut_h2 fadein">
    <p class="en">heat insulating material</p>
    <p class="ja">吹付断熱材</p>
  </h2>

  <div class="precut-type_list_top fadein">
    <div class="precut-type_list_top_pic">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/product-03.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/product-03.jpg" alt="吹付断熱材">
    </picture>
    </div>

    <div class="precut-type_list_top_text">
    <p>高気密高断熱住宅が当たり前になってきている昨今の住宅業界ですが、当社からも吹付による断熱材施工が可能です。​</p>
    <p>日本アクアのアクアフォームは熱伝導率0.036W/mkと業界トップクラスの性能を誇ります。</p>
    <p>吹付による施工で気密も確保できるため、より高気密高断熱による住宅を実現できます。</p>
    </div>
    </div>

    <!--<div class="precut-type_list_bottom_pic fadein">
      <div class="pic_bottom_list">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
        </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
      </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
      </picture>
      </div>
    </div>-->
</section>


<!--====================================================
     建て方施工　manner of construction
=====================================================-->
<section class="page_section page_tatekata" id="precut-tatekata">
  <h2 class="page_section_h2 precut_h2 fadein">
    <p class="en">manner of construction</p>
    <p class="ja">建て方施工</p>
  </h2>

  <div class="precut-type_list_top fadein">
    <div class="precut-type_list_top_pic">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/product-04.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/product-04.jpg" alt="">
    </picture>
    </div>

    <div class="precut-type_list_top_text">
    <p>近年、少子高齢化、人口減少に伴い、住宅業界では大工の人手不足が深刻化しています。当社では大工経験のある社員が建方工事を行うチームを結成し、建方を請け負っています。​</p>
    <p>従来のプレカットのみならず、建方まで一貫して行うことが出来るようになりました。</p>
    </div>
    </div>

    <!--<div class="precut-type_list_bottom_pic fadein">
      <div class="pic_bottom_list">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
        </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
      </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
      </picture>
      </div>
    </div>-->
</section>


<!--====================================================
     構造計算
=====================================================-->
<section class="page_section page_kozo" id="precut-tatekata">
  <h2 class="page_section_h2 precut_h2 fadein">
    <p class="en">Structural Calculation</p>
    <p class="ja">構造計算</p>
  </h2>

  <div class="precut-type_list_top fadein">
    <div class="precut-type_list_top_pic">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/product-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/product-05.jpg" alt="">
    </picture>
    </div>

    <div class="precut-type_list_top_text">
    <p>2025年に4号特例の縮小が見込まれており、2階建て木造住宅の建築において構造規定審査の対象になることが予定されています。</p>
    <p>当社では4号特例縮小に対応できる様に、株式会社モリエアとの業務提携により、ビルダーに向けた構造計算業務にも対応しております。</p>
    </div>
    </div>

    <!--<div class="precut-type_list_bottom_pic fadein">
      <div class="pic_bottom_list">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
        </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/product/precut-05.jpg" alt="">
      </picture>
      </div>
      <div class="pic_bottom_list">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.webp" type="image/webp">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/precut-05.jpg" alt="">
      </picture>
      </div>
    </div>-->
</section>

<!--====================================================
     設備
=====================================================-->
<section class="page_section page_facility" id="precut-facility">
  <h2 class="page_section_h2 precut_h2 fadein">
    <p class="en">facility</p>
    <p class="ja">設備</p>
  </h2>

  <div class="page_facility_text fadein">
    <dl class="precut_dl">
      <dt>最新鋭のプレカット機にて月間約6,000坪の加工を実現</dt>
      <dd>宮川工機の全自動多種加工機を導入。高性能ロボットによる仕口加工にて、より多彩な加工が可能になりました。手加工によるロスを減らし、より多くの生産を実現しました。加工坪数は最大で月間約6000坪。一般的な住宅を約30坪と仮定した場合、約200棟の住宅構造体を加工可能です。</dd>
    </dl>
  </div>


  <div class="js-scrollable-wrap">
    <table class="facility page_table js-scrollable">
        <colgroup>
        <col span="2" />
        </colgroup>
        <tr class="fadein">
            <th>主要設備</th>
            <td>
              <ul class="facility_table_list">
                <li>横架材プレカット加工ライン  宮川工機製 VX-03W</li>
                <li>柱材プレカット加工ライン  宮川工機製 MPS-34</li>
                <li>柱・束プレカット加工機  宮川工機製 MGM-4</li>
                <li>羽柄材プレカット加工機  宮川工機製 MPS-25K</li>
                <li>合板プレアット加工機  宮川工機製 MDP-13、MDP-14</li>
                <li>２×４組立ライン  庄内機械製</li>
              </ul>
            </td>
        </tr>
        <tr class="fadein">
            <th>CAD</th>
            <td>トーアCAD、MP-CAD、ネットイーグル、アーキトレンドZERO</td>
        </tr>
        <tr class="fadein">
            <th>対応金物工法</th>
            <td>クレテックＰ３、ＨＳＳ、ＳＳマルチ、プレセッターＳＵ等</td>
        </tr>
    </table>
  </div>

  <div class="page_facility_pic">
    <div class="page_facility_pic_item fadein">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/equipment-01.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/equipment-01.jpg" alt="">
      </picture>
    </div>

    <div class="page_facility_pic_item fadein">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/product/equipment-02.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product/equipment-02.jpg" alt="">
      </picture>
    </div>
  </div>  
</section>


<!--====================================================
    list　リンクリスト
=====================================================-->
<aside class="pageOther">
    <ul class="pageOther_list">
        <li><a href="<?php echo home_url('/') ?>company"><p class="en">Company</p><p class="ja">会社情報</p></a></li>
        <li><a href="<?php echo home_url('/') ?>initiatives"><p class="en">initiatives</p><p class="ja">マルサンの取り組み</p></a></li>
    </ul>
</aside>

</div>

<!--====================================================

  Contact
  お問い合わせ

=====================================================-->
<?php get_template_part('contact'); ?>

</main>

<?php get_footer(); ?>