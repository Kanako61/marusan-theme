<?php
/*
Template Name: Company
<?php
/*
Template Name: Company
*/
/* Company */
?>


<?php get_header(); ?>

<!-- ローディング画面 -->
<!--<div id="loading">
    <p>Loading...</p>
    <div id="loading-screen"></div>
</div>-->

<main class="l-contents-main page_main company_main">

<!--page title-->
<!--<h1 class="page_header_title content-title company_title fadein">
    <p class="en">Company</p>
    <p class="ja"><?php the_title(); ?></p>
</h1>-->
<!--page titleここまで-->


<div class="company_content page_content">

    <!--====================================================
        Top Message　代表挨拶
    =====================================================-->
    <section class="page_section page_message" id="message">

    <div class="message_top">
        <h2 class="page_section_h2 page_company_h2">社長挨拶</h2>
        <div class="page_pic message_pic">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/message.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/message.jpg" alt="代表取締役前田英俊社長">
            </picture>
        </div>
        <p class="company_name">
            株式会社マルサン<br>
            代表取締役 社長
        </p>
        <p class="name">
            <span class="name_ja">前田 英俊</span><br>
            <span class="name_en">MAEDA HIDETOSHI</span>
        </p>
    </div>

    <div class="message_bottom">
        <dl class="message_bottom_text">
            <dt>お客様第一で「高品質な製品」を作り続ける</dt>
            <dd>
                <p>当社は昭和10 年に下駄作りで創業しました。その後、住宅用木材の製材、木造住宅部材のプレカット加工と、長きにに渡り木材の加工に携わってきました。近年では、パネルの加工や、金物工法のプレカット等にも加工範囲を広げております。これらの製品をつくる上で、創業以来、我が社が拘ってきたことは、「お客様第一」ということ、そして、それを実現するために「高品質な製品」をつくり続けることです。これからも当社は、「高品質、高性能な木造住宅部材を供給し、安心、安全な住まいづくりに貢献する」こと、「精度の良い木造住宅部材を短納期、かつタイムリーに供給し、工期の短縮と職人不足の解消に貢献する」こと、「住宅産業界のあらたなニーズに対応し、木造住宅の更なる工業化の促進に貢献する」ことを我が社の使命とし、全社員一丸となって「お客様お役立ち企業」を目指してまいります。</p>
            </dd>
            <dd class="post">代表取締役社長<span class="name">前田 英俊</span></dd>
        </dl>
    </div>
    </section>

    <!--====================================================
        Philosophy　企業理念
    =====================================================-->
    <section class="page_section rinen" id="rinen">
        <h2 class="page_section_h2 page_company_h2 pattern01">企業理念</h2>

        <ul class="rinen_list">
            <li>私達はお客様に信頼される誠実な仕事をします。</li>
            <li>私達は商品の品質を高め理想の社会創りに貢献します。</li>
            <li>私達はすべての協力者と相互の繁栄を願い自信と情熱を持って行動します。</li>
        </ul>

        <div class="page_pic rinen_item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/rinen-item.png" alt="">
        </div>
    </section>

    <!--====================================================
        Overview　会社概要
    =====================================================-->
    <section class="page_section page_overview" id="overview">
    <!-- 背景の色 -->
    <div class="overview_bk-01"></div>
    <div class="overview_bk-02"></div>

    <div class="page_overview_inner">
        <h2 class="page_section_h2 page_company_h2">
            <p class="ja">会社概要</p>
        </h2>
        <div class="page_pic overview_pic">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/company-overview.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/company-overview.jpg" alt="会社概要">
            </picture>
        </div>
    </div>

    <div class="js-scrollable-wrap">
    <table class="overview_table page_table page_overview_table js-scrollable">
        <colgroup>
        <col span="2" />
        </colgroup>
        <tr>
            <th>会社名</th>
            <td>株式会社マルサン</td>
        </tr>
        <tr>
            <th>工場名</th>
            <td>東北プレカットワークス</td>
        </tr>
        <tr>
            <th>所在地</th>
            <td>
                <dl class="overview_table_address">
                    <dt>本社</dt>
                    <dd>〒964-0313 福島県二本松市小浜字鳥居町27-3<br>TEL 0243-55-2255 FAX 0243-55-2589</dd>
                    <dt>工場</dt>
                    <dd>〒964-0315 福島県二本松市成田字柏崎214<br>TEL 0243-55-2626 FAX 0243-55-2585</dd>
                </dl>
            </td>
        </tr>
        <tr>
            <th>代表</th>
            <td>前田 英俊</td>
        </tr>
        <tr>
            <th>資本金</th>
            <td>3,500万円</td>
        </tr>
        <tr>
            <th>規模</th>
            <td>
                <dl class="overview_table_scale">
                    <dt>敷地面積：</dt>
                    <dd>15,000m²</dd>
                </dl>
                <dl class="overview_table_scale">
                    <dt>工場面積：</dt>
                    <dd>6,000m²</dd>
                </dl>
                <dl class="overview_table_scale">
                    <dt>ストックヤード：</dt>
                    <dd>3,000m²</dd>
                </dl>
            </td>
        </tr>
        <tr>
            <th>営業拠点</th>
            <td>郡山営業所、福島営業所、東京営業所</td>
        </tr>
        <tr>
            <th>業務内容</th>
            <td>
                在来軸組工法のプレカット　　/ 金物工法のプレカット　　/ 在来パネル材　２×４工法用パネル材　　/ 現場吹付断熱の施工　　/ 羽柄プレカット材の製造販売及びこれらに関連する木材、造作材、建築金物、建材等の小売販売　　/ 在来軸組工法の建方工事　　/ 構造計算業務
            </td>
        </tr>
    </table>
    </div>
    </section>

    <!--====================================================
        History　沿革
    =====================================================-->
    <section class="page_section" id="history">

    <div class="history">

    <div class="history_content">
    <h2 class="page_section_h2 page_company_h2 fadein">
        <p class="en">History</p>
        <p class="ja">沿革</p>
    </h2>
        <ul class="history_content_list fadein">
            <li><span class="years">昭和10年</span><span class="text">桐材で下駄の製造開始</span></li>
            <li><span class="years">昭和26年</span><span class="text">有限会社丸三木工所とする</span></li>
            <li><span class="years">昭和50年</span><span class="text">丸三木材株式会社とする</span></li>
            <li><span class="years">平成元年</span><span class="text">プレカット工場（東北プレカットワークス）を設立</span></li>
            <li><span class="years">平成4年</span><span class="text">パネル組立ラインを設置</span></li>
            <li><span class="years">平成9年</span><span class="text">AQ認証を取得</span></li>
            <li><span class="years">平成13年</span><span class="text">金物工法プレカット加工を開始</span></li>
            <li><span class="years">平成15年</span><span class="text">合板プレカットラインを設置</span></li>
            <li><span class="years">平成19年</span><span class="text">FJ間柱製造設備を設置</span></li>
            <li><span class="years">平成23年</span><span class="text">施工事業部ビルコンを開設、吹付断熱施工を開始</span></li>
            <li><span class="years">平成24年</span><span class="text">社名を株式会社マルサンに変更</span></li>
            <li><span class="years">平成24年</span><span class="text">２×４パネル組立ライン設置</span></li>
        </ul>
    </div>
    </div>
    </section>


    <!--====================================================
        Access　アクセス
    =====================================================-->

    <section class="page_section" id="access">
    <h2 class="page_section_h2 page_company_h2 fadein">
        <p class="en">Access</p>
        <p class="ja">アクセス</p>
    </h2>

    <div class="page_access">
    <ul class="page_access_list">
        <li class="fadein">
            <dl class="page_access_list_dl">
                <dt>本社</dt>
                <dd>〒964-0313 福島県二本松市小浜字鳥居町27-3</dd>
                <dd>TEL 0243-55-2255  <br class="tab_br">FAX 0243-55-2589</dd>
                <dd class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.785161879082!2d140.50593451078726!3d37.56012512438011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602071b5aa3e05d5%3A0x417538084508ae6a!2z5qCq5byP5Lya56S-44Oe44Or44K144Oz!5e0!3m2!1sja!2sjp!4v1708253582787!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></dd>
            </dl>
        </li>

        <li class="fadein">
            <dl class="page_access_list_dl">
                <dt>工場</dt>
                <dd>〒964-0315 福島県二本松市成田字柏崎214</dd>
                <dd>TEL 0243-55-2626  <br class="tab_br">FAX 0243-55-2585</dd>
                <dd>施工事業部 ビルコン直通  工場内事務所 FAX 0243-24-1232</dd>
                <dd class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1582.6006457666995!2d140.48666439216964!3d37.528480195359975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6020704410368899%3A0x66a62fbbc9f2106d!2z5p2x5YyX44OX44Os44Kr44OD44OI44Ov44O844Kv44K577yI77yI5qCq77yJ44Oe44Or44K144Oz77yJ!5e0!3m2!1sja!2sjp!4v1708253536262!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></dd>
            </dl>
        </li>

        <li class="fadein">
            <dl class="page_access_list_dl">
                <dt>郡山営業所</dt>
                <dd>〒963-0725 福島県郡山市田村町金屋字川久保53-1</dd>
                <dd>TEL 024-983-9003  <br class="tab_br">FAX 024-953-6313</dd>
                <dd class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.7026632439197!2d140.39337871077788!3d37.37321183507485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60206ba41261e209%3A0x37177e4fa1f33c3e!2zKOagqinjg57jg6vjgrXjg7Mg6YOh5bGx5Za25qWt5omA!5e0!3m2!1sja!2sjp!4v1708253643224!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></dd>
            </dl>
        </li>

        <li class="fadein">
            <dl class="page_access_list_dl">
                <dt>福島営業所</dt>
                <dd>〒960-8164 福島県福島市八木田字神明52-1</dd>
                <dd>TEL 024-546-2436 <br class="tab_br">FAX 024-546-2441</dd>
                <dd class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3154.683974682079!2d140.43995811079688!3d37.75055761343886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a85a50c09602d%3A0x78af68dd53fa9177!2zKOagqinjg57jg6vjgrXjg7Mg56aP5bO25Za25qWt5omA!5e0!3m2!1sja!2sjp!4v1708253294698!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></dd>
            </dl>
        </li>

        <li class="fadein">
            <dl class="page_access_list_dl">
                <dt>東京事務所</dt>
                <dd>〒170-0005 東京都豊島区南大塚1-60-20 天翔大塚駅前ビルS916</dd>
                <!--<dd>TEL 024-546-2436  FAX 024-546-2441</dd>-->
                <dd class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.809996356575!2d139.72784181069738!3d35.730891127131144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d75db96c8e3%3A0x94a24ce875653064!2z5aSp57-U44Kq44OV44Kj44K55aSn5aGa!5e0!3m2!1sja!2sjp!4v1708244379916!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></dd>
            </dl>
        </li>
    </ul>
    </div>
    </section>



<!--====================================================
    list　リンクリスト
=====================================================-->
<aside class="pageOther">
    <ul class="pageOther_list fadein">
        <li><a href="<?php echo home_url('/'); ?>product"><p class="en">Product</p><p class="ja">商品情報</p></a></li>
        <li><a href="<?php echo home_url('/'); ?>initiatives"><p class="en">Initiatives</p><p class="ja">マルサンの取り組み</p></a></li>
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