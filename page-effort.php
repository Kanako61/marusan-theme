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
    <dt>マルサンのSDGｓへの<br class="sp_br">取り組み</dt>
    <dd>1935年創業以来、マルサンは住宅を取り巻く様々な課題やニーズに応えるべく数多くのサービスを創造してまいりました。2016年に掲げた「<span class="blue">明日の家づくりを創る</span>」というスローガンのもと、住宅業界の「<span class="blue">人手不足の解消</span>」「<span class="blue">木造住宅の性能向上</span>」といった課題解決に貢献しています。<br>
    地震大国である我が国は超少子高齢社会を迎え、住宅業界は更なる課題と共に新しい局面を迎え始めています。「明日の家づくりを創る」と言うスローガンには、木造住宅における新しい家づくりの在り方を創造する意志が込められており、プレカット工場としての垣根を超えた企業に成長することを目指しています。
    </dd>
    <dd class="effort_text_pic">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-logo.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-logo.png" alt="マルサン×DUDTAINABLE DEVELOPMENT GOALS">
        </picture>
        <p class="effort_text_pic_p">私たちは持続可能な開発目標（SDGs）を支援しています。</p>
    </dd>
</dl>
</section>

<div class="effort_img_pic">
    <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-img-03.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort-img-03.jpg" alt="家づくりから理想の社会創りを">
    </picture>
    <p class="copy">家づくりから<br>理想の社会創りを</p>
</div>


<!--====================================================
    sdgs effort　SDGsへの取り組み
=====================================================-->
<section class="page_section page_sdgs">

<ul class="page_sdgs_list">
<!--ワークライフバランスと健康経営-->
<li class="page_sdgs_list_item item-01">
    <div class="list_item_inner-01">
        <h2 class="page_sdgs_h2">ワークライフバランスと<br class="sp">健康経営</h2>
        <div class="sdgs_icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-03.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-05.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-08.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-17.png">
        </div>
    </div>

    <div class="list_item_inner-02">
        <p class="item-01_text">長時間労働の抑制や各種の休暇を取得しやすい環境づくりなど、社員のライフスタイルに応じた働きやすい職場環境を整備することは企業の大切なつとめです。マルサンは、定期健康診断やメンタルヘルスチェック等の健康増進への支援や外国人の労働環境整備などを通じて社員の健康維持をサポートしています。
        </p>

        <div class="list_item_inner-02_img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-health.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-health.jpg" alt="2024 健康経営優良法人">
            </picture>
        </div>
    </div>

    <div class="list_item_inner-03">
        <p class="item-01_text02">健康経営優良法人認定制度とは、地域の健康課題に即した取組や日本健康会議が進める健康増進の取組をもとに、特に優良な健康経営を実践している大企業や中小企業等の法人を顕彰する制度です。​<br>
        当社は2021年度から継続して健康経営優良法人の認定を受けています。</p>
    </div>
</li>


<!--DXの推進​-->
<li class="page_sdgs_list_item item-03">
    <div class="list_item_inner-01">
        <h2 class="page_sdgs_h2">DXの推進</h2>
        <div class="sdgs_icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-08.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-09.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-13.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-17.png">
        </div>
    </div>

    <div class="list_item_inner-03">
        <p class="item-01_text01">DX推進室を設置し、年度計画の中で取組方針を策定。経営方針としてDX推進を打ち出しています。社内のあらゆる業務を見直し、デジタル技術を活用した情報共有や業務効率改善によって仕事がしやすい環境を構築し、常に改善を繰り返す仕組みづくりを進めています。。</p>
    </div>
</li>


<!--社会問題の解決-->
<li class="page_sdgs_list_item item-02">
    <div class="list_item_inner-01">
        <h2 class="page_sdgs_h2">社会問題の解決</h2>
        <div class="sdgs_icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-08.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-09.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-11.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-12.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-13.png">
        </div>
    </div>

    <div class="list_item_inner-03">
        <p class="item-01_text01">プレカット部材の導入により、建設現場での生産性向上や工期短縮による人手不足の解消に貢献しています。<br>また、工場でプレカット加工を行うことで、建設現場での廃棄物の削減や騒音問題の解決に貢献しています。</p>
    </div>
</li>


<!--資源循環型社会の実現とカーボンニュートラル-->
<li class="page_sdgs_list_item
item-04">
    <div class="list_item_inner-01">
        <h2 class="page_sdgs_h2">資源循環型社会の実現と<br>カーボンニュートラル</h2>
        <div class="sdgs_icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-07.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-12.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-13.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-15.png">
        </div>
    </div>

    <div class="list_item_inner-02">
        <p class="item-01_text01">プレカット加工時に通常は廃棄する端材やおがくずが必ず発生します。マルサンでは短くなった端材を繋ぎ合わせ新しい柱を製品化しています。他にも家庭用暖房の燃料として地域の一般家庭に販売したり、おがくずは畜産農家に提供し堆肥等に再利用しています。各種設備更新では積極的に省エネ設備を採用し、エネルギー使用量も削減。<br>木材の有効利用と省エネによって、CO2排出量の抑制にも取り組んでいます。</p>

        <div class="list_item_inner-02_img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-img-01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-img-01.jpg" alt="資源循環型社会の実現と省エネ">
            </picture>
        </div>
    </div>
</li>


<!--地域活性化への取り組み-->
<li class="page_sdgs_list_item item-05">
    <div class="list_item_inner-01">
        <h2>地域活性化への取り組み</h2>
        <div class="sdgs_icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-04.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-11.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-13.png">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/sustaina-icon-15.png">
        </div>
    </div>

    <div class="list_item_inner-02">
        <p class="item-01_text01">県産材や国産材の利用を推奨し、地域資源の有効活用を促進しています。<br>さらに、小学生から高校生の職場体験や工場見学会、そして地域イベントでの木工教室の開催を通して地域の活性化にも力を入れています。</p>

        <div class="list_item_inner-02_img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-img-02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/effort-img-02.jpg" alt="地域活性化への取り組み">
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
    <p class="quality_aq_text">JAS規格に規定されていないプレカット材等の新しい木質建材の品質性能等を客観的に評価・認証する制度として「AQ認証」があります。当社では平成9年にAQ認証を取得して以来、3年毎に行われる再評価を経ながら、現在まで認証を維持しております。</p>
    <div class="quality_aq_pic">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/effort/quality-img-02.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/effort/quality-img-02.jpg" alt="AQ認証">
        </picture>
    </div>
</div>

<div class="nintei">
    <ul class="nintei_list">
        <li><a href="<?php echo get_template_directory_uri(); ?>/assets/images/effort/quality-img-01.jpg">認定書</a></li>
    </ul>
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