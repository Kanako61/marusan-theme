<?php
/*
Template Name: initiatives
*/
/* initiatives */
?>

<?php get_header(); ?>

<!-- ローディング画面 -->
<!--<div id="loading">
    <p>Loading...</p>
    <div id="loading-screen"></div>
</div>-->

<main class="l-contents-main page_main">

<!--page title-->
<h1 class="page_header_title content-title initiatives_title">
  <p class="en">Initiatives</p><br>
  <p class="ja"><?php the_title(); ?></p>
</h1>
<!--page titleここまで-->

<div class="page_title-pic">
<div class="parallax-img js-trigger">
<picture>
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/initiatives-b.webp" type="image/webp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/initiatives-b.jpg" alt="">
</picture>
</div>
</div>

<div class="initiatives_content page_content">

<!--====================================================
    Quality Initiatives　品質への取り組み
=====================================================-->
<section class="page_section quality" id="quality">
<h2 class="page_section_h2 initiatives_h2 fadein">
    <p class="en">Quality Initiatives</p>
    <p class="ja">品質への取り組み</p>
</h2>
<dl class="quality_dl fadein">
    <dt>AQ（Approved Quality）認証</dt>
    <dd>AQ認証は、木質建材等について品質性能等を客観的に評価・認証し、消費者に対し安全性及び居住性に優れた製品の提供を目的として（財）日本住宅・木材技術センターが認証するもので、認証製品には下記のようなAQマークを表示します。</dd>
</dl>

<div class="quality_inner">
<div class="quality_inner_pic fadein">
<picture>
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/initiatives-01.webp" type="image/webp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/initiatives-01.jpg" alt="株式会社マルサン">
</picture>
</div>


<div class="js-scrollable-wrap quality_table fadein">
<table class="page_table js-scrollable">
<colgroup>
<col span="2" />
</colgroup>
<tr>
  <th>認証取得日</th>
  <td>平成9年4月1日</td>
</tr>
<tr>
  <th>認証内容</th>
  <td>優良木質建材等の認証</td>
</tr>
<tr>
  <th>認証番号</th>
  <td>A-176</td>
</tr>
</table>
</div>

</div>
</section>


<!--====================================================
    sdgs Initiatives　SDGsへの取り組み
=====================================================-->
<section class="page_section page_sdgs" id="page_sdgss">
<h2 class="page_section_h2 initiatives_h2 fadein">
    <p class="en">SDGs Initiatives</p>
    <p class="ja">SDGsへの取り組み</p>
</h2>

<p class="sdgs-all_text fadein">当社では、2015年に国連でSDGsが採択されるよりも前から環境への取り組みを進めており、2022年にはSDGs宣言を行いました。</p>

<ul class="page_sdgs_list">
<!--社会問題の解決-->
<li class="page_sdgs_list_item columns2 fadein">
    <div class="page_sdgs_text fadein">
    <dl class="initiatives_dl">
      <dt>社会問題の解決</dt>
      <dd><p>プレカットによる高品質な木造住宅部材の提供を通じて、社会問題・環境問題の解決に貢献しています。​</p>
      <ul>
        <li>プレカット部材の導入により、建設現場での生産性向上や工期短縮による人手不足の解消に貢献しています。​</li>
        <li>工場でプレカット加工を行うことで、建設現場での廃棄物の削減や騒音問題の解決に貢献しています。</li>
      </ul>
      </dd>
    </dl>
    <div class="sdgs_icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_08_ja_2.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_11_ja_2.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_12_ja_2.png">
    </div>
    </div>

    <div class="page_sdgs_pic fadein">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/initiatives-06.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/initiatives-06.jpg" alt="SDGs宣言書">
        </picture>
    </div>
</li>

<!--資源循環型社会の実現と省エネ​-->
<li class="page_sdgs_list_item fadein">
<div class="page_sdgs_text columns2 sp-layout fadein">
    <div class="page_sdgs_pic">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/initiatives-03.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/initiatives-03.jpg" alt="ゼロミッションの流れ">
        </picture>
    </div>

    <div class="page_sdgs_text fadein">
        <dl class="initiatives_dl">
            <dt>資源循環型社会の実現と省エネ​</dt>
            <dd><p>ゼロエミッション活動により、廃棄物の再利用や廃棄物ゼロを目標として業務に取組み、資源循環型社会の実現を目指します。​</p>
            <ul>
                <li>プレカット加工時に発生するおがくずを畜産農家に提供し、堆肥として再利用しています。また、端材についても間柱等のオリジナル製品や、家庭用暖房の燃料として再利用しています。​​</li>
                <li>照明設備や製造ライン等を導入する際は、省エネ設備を積極的に採用し、エネルギー使用量の削減に取組みます。​</li>
            </ul>
            </dd>
        </dl>
        <div class="sdgs_icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_03_ja_2.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_12_ja_2.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_13_ja_2.png">
        </div>
    </div>
</div>

<div class="page_sdgs_text columns2 margin-style fadein">
    <div class="page_sdgs_text fadein">
        <p>20??年に福島県が主催したゼロエミッション活動コンクールにおいて、当社は“優秀事業所”を受賞しました。​
        このコンクールは、循環型社会の実現に向けて、地域における組織・団体や事業所等において実際に取り組んでいる、ごみ減量化・リサイクル推進のための活動で他のモデルとなるような事例を、「もったいない活動（一般団体）部門」、「ゼロエミッション（事業者）部門」の2部門で募集したものです。</p>
    </div>
    <div class="page_sdgs_pic fadein">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/initiatives-02.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/initiatives-02.jpg" alt="ゼロミッション活動間クール賞状・盾">
        </picture>
    </div>
</div>
</li>


<!--ワークライフバランスと健康経営​-->
<li class="page_sdgs_list_item fadein">
     <dl class="initiatives_dl fadein">
        <dt>ワークライフバランスと健康経営​</dt>
        <dd><p>社員のライフスタイルに応じた職場環境の整備を推進します。</p>
        <ul>
            <li>長時間労働の抑制、年次有給休暇の取得促進や外国人技能実習生が相談しやすい環境の提供等、組織的な支援を通じて、多様な人材が働きやすい職場を目指します。​​​</li>
            <li>定期健康診断、メンタルヘルスチェック等健康増進への支援を通じて、社員の健康維持を推進しています。​​</li>
        </ul>
        </dd>
    </dl>
    <div class="sdgs_icon fadein">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_03_ja_2.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_05_ja_2.png">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_08_ja_2.png">
    </div>

    <div class="page_sdgs_text columns2 margin-style fadein">
    <div class="page_sdgs_pic fadein">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/initiatives-04.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/initiatives-04.jpg" alt="健康経営優良法人ロゴ">
        </picture>
    </div>

    <div class="page_sdgs_text fadein">
        <p>健康経営優良法人認定制度とは、地域の健康課題に即した取組や日本健康会議が進める健康増進の取組をもとに、特に優良な健康経営を実践している大企業や中小企業等の法人を顕彰する制度です。​</p>
        <p>当社は2021年度から継続して健康経営優良法人の認定を受けています。</p>
    </div>
    </div>
</li>


<!--DXの推進​-->
<li class="page_sdgs_list_item fadein">
    <div class="page_sdgs_text fadein">
    <dl class="initiatives_dl">
      <dt>DXの推進</dt>
      <dd><p>DXの推進による新たな価値の創出と各種業務の効率化を目指します。</p>
      <ul>
        <li>DX推進室を設置し、年度計画の中で取組み方針を策定。各種業務のIT化を推進しています。</li>
        <li>情報を一元管理する社内管理システムを構築し、全社での情報共有、業務効率の改善に取組んでいます。​</li>
      </ul>
      </dd>
    </dl>
    <div class="sdgs_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_09_ja_2.png">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_11_ja_2.png">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_12_ja_2.png">
    </div>
    </div>
</li>

<!--地域経済の活性化​-->
<li class="page_sdgs_list_item columns2 fadein">
    <div class="page_sdgs_text fadein">
    <dl class="initiatives_dl">
      <dt>地域経済の活性化</dt>
      <dd><p>DXの推進による新たな価値の創出と各種業務の効率化を目指します。</p>
      <ul>
        <li>地域活動への参加や地域資源の活用を通して、地域社会の活性化に貢献します。</li>
        <li>県産材や国産材の利用を推奨し、地域資源の有効活用を促進します。​​</li>
        <li>就業体験、工場見学会、地域イベントへの参加等を通じて、地域の活性化に貢献します。​​​</li>
      </ul>
      </dd>
    </dl>
    <div class="sdgs_icon">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_08_ja_2.png">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_09_ja_2.png">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_11_ja_2.png">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_icon_12_ja_2.png">
    </div>
    </div>

    <div class="page_sdgs_pic fadein">
        <picture>
            <!--<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/initiatives-04.webp" type="image/webp">-->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/initiatives/sdg_event.jpeg" alt="活動の様子">
        </picture>
    </div>
</li>
</ul>
</section>


<!--====================================================
    list　リンクリスト
=====================================================-->
<aside class="pageOther">
    <ul class="pageOther_list">
        <li><a href="<?php echo home_url('/') ?>company"><p class="en">Company</p><p class="ja">会社情報</p></a></li>
        <li><a href="<?php echo home_url('/') ?>product"><p class="en">Product</p><p class="ja">商品情報</p></a></li>
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