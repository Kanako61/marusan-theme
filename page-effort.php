<?php
/*
Template Name: effort
*/
/* effort */
?>

<?php get_header(); ?>

<!-- ローディング画面 -->
<!--<div id="loading">
    <p>Loading...</p>
    <div id="loading-screen"></div>
</div>-->

<main class="l-contents-main page_main">

<!--page img-->
<div class="page_title-pic">
    <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/page-effort-bk.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/page-effort-bk.jpg" alt="働きやすい環境つくりと地域社会への貢献を目指して">
    </picture>
    <p class="copy">働きやすい環境つくりと<br>地域社会への貢献を目指して</p>
</div>

<!--page title-->
<!--s<h1 class="page_header_title content-title effort_title">
  <p class="ja"><?php the_title(); ?></p>
</h1>-->
<!--page titleここまで-->

<div class="effort_content page_content">

<section class="page_section effort_text">
<dl class="effort_text_dl">
    <dt>マルサンのSDGｓへの取り組み</dt>
    <dd>マルサンは家づくりを支える会社です。1935年創業以来、マルサンは住宅を取り巻く様々な課題やニーズに応えるべくサービスを創造して参りました。私たちは2016年に「明日の家づくりを創る」と言うスローガンを掲げ、住宅業界が抱える「人手不足の解消」「木造住宅の品質向上」と言った課題解決に貢献してきました。<br>
    地震大国である我が国はこれから超少子高齢化社会を迎え、住宅業界は更なる課題が浮き彫りになっていきます。「明日の家づくりを創る」と言うスローガンには、木造住宅における新しい家づくりの在り方を創造する意志が込められており、プレカット工場としての垣根を超えた企業に成長することを目指します。
    </dd>
    <dd class="effort_text_pic">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-logo.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-logo.png" alt="マルサン×DUDTAINABLE DEVELOPMENT GOALS">
        </picture>
        <p class="ffort_text_pic_p">私たちは持続可能な開発目標（SDGs）を支援しています。</p>
    </dd>
</dl>
</section>

<div class="effort_img_pic">
    <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-img-03.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort-img-03.jpg" alt="家づくりから世の中を良くしていきたい">
    </picture>
    <p class="copy">家づくりから<br>世の中を良くしていきたい</p>
</div>


<!--====================================================
    sdgs effort　SDGsへの取り組み
=====================================================-->
<section class="page_section page_sdgs">

<ul class="page_sdgs_list">
<!--ワークライフバランスと健康経営-->
<li class="page_sdgs_list_item 01">
    <div class="list_item_inner-01">
        <h2>ワークライフバランスと健康経営</h2>
        <div class="sdgs_icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-03.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-05.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-08.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-17.png">
        </div>
    </div>

    <div class="list_item_inner-02">
        <p>長時間労働の抑制や有給休暇の取得を会社から社員へ促し、社員のライフスタイルに応じた職場環境の整備を推進しています。  定期健康診断やメンタルヘルスチェック等の健康増進への支援や外国人技能実習生の労働環境整備を通じて社員の健康維持を大切にしています。</p>

        <div class="list_item_inner-02_img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-health.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-health.jpg" alt="2024 健康経営優良法人">
            </picture>
        </div>
    </div>

    <div class="list_item_inner-03">
        <p>健康経営優良法人認定制度とは、地域の健康課題に即した取組や日本健康会議が進める健康増進の取組をもとに、特に優良な健康経営を実践している大企業や中小企業等の法人を顕彰する制度です。<br>
        当社は2021年度から継続して健康経営優良法人の認定を受けています。</p>
    </div>
</li>


<!--社会問題の解決-->
<li class="page_sdgs_list_item 02">
    <div class="list_item_inner-01">
        <h2>社会問題の解決</h2>
        <div class="sdgs_icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-08.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-09.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-11.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-12.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-13.png">
        </div>
    </div>

    <div class="list_item_inner-03">
        <p>プレカット部材の導入により、建設現場での生産性向上や工期短縮による人手不足の解消に貢献しています。また、工場でプレカット加工を行うことで、建設現場での廃棄物の削減や騒音問題の解決に貢献しています。</p>
    </div>
</li>


<!--DXの推進​-->
<li class="page_sdgs_list_item 03">
    <div class="list_item_inner-01">
        <h2>DXの推進</h2>
        <div class="sdgs_icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-08.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-09.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-13.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-17.png">
        </div>
    </div>

    <div class="list_item_inner-03">
        <p>ＤＸ推進室を設置し、年度計画の中で取組み方針を策定。各種業務のＩＴ化を推進しています。<br>
        また、情報を一元管理する社内管理システムを構築し、全社での情報共有、業務効率の改善に取組んでいます。</p>
    </div>
</li>


<!--資源循環型社会の実現と省エネ-->
<li class="page_sdgs_list_item 04">
    <div class="list_item_inner-01">
        <h2>資源循環型社会の実現と省エネ</h2>
        <div class="sdgs_icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-07.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-12.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-13.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-15.png">
        </div>
    </div>

    <div class="list_item_inner-02">
        <p>プレカット加工時に発生するおがくずを畜産農家に提供し、堆肥として再利用しています。また、端材についても間柱等のオリジナル製品や、家庭用暖房の燃料として再利用しています。<br>照明設備や製造ライン等を導入する際は、省エネ設備を積極的に採用し、エネルギー使用量の削減に取組みます。</p>

        <div class="list_item_inner-02_img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-img-01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-img-01.jpg" alt="資源循環型社会の実現と省エネ">
            </picture>
        </div>
    </div>
</li>


<!--地域経済の活性化-->
<li class="page_sdgs_list_item 04">
    <div class="list_item_inner-01">
        <h2>地域経済の活性化</h2>
        <div class="sdgs_icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-04.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-11.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-13.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-15.png">
        </div>
    </div>

    <div class="list_item_inner-02">
        <p>県産材や国産材の利用を推奨し、地域資源の有効活用を促進します。<br>さらに、就業体験や工場見学会を開催し、地元福島県で開催される地域イベントへの参加を通じて地域活性化への貢献を行っています。</p>

        <div class="list_item_inner-02_img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-img-02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-img-02.jpg" alt="資地域経済の活性化">
            </picture>
        </div>
    </div>
</li>
</ul>
</section>


<!--====================================================

  quality
  品質への取り組み

=====================================================-->

<section class="page_section quality">
<h2>品質への取り組み</h2>
<div class="quality_aq">
    <p class="quality_aq_text">AQ認証は、木質建材等について品質性能等を客観的に評価・認証し、消費者に対し安全性及び居住性に優れた製品の提供を目的として（財）日本住宅・木材技術センターが認証するもので、認証製品には下記のようなAQマークを表示します。</p>
    <div class="quality_aq_pic">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/quality-img-01.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/quality-img-01.jpg" alt="AQ認証">
        </picture>
    </div>
</div>

<div class="quality_more">
    <ul class="quality_more_list">
        <li>
            <dl>
                <dt>認証取得日</dt>
                <dd>平成9年4月1日</dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>認証内容</dt>
                <dd>優良木質建材等の認証</dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>認証番号</dt>
                <dd>A-176</dd>
            </dl>
        </li>

    </ul>
    <div class="quality_more_pic">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/quality-img-02.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/quality-img-02.jpg" alt="AQ認証">
         </picture>
    </div>
</div>
</section>

</div>

<!--====================================================

  Contact
  お問い合わせ

=====================================================-->
<?php get_template_part('contact'); ?>

</main>

<?php get_footer(); ?>