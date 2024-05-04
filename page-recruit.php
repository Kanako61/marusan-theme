<?php
/*
Template Name: recruit
*/
/* recruit */
?>

<?php get_header(); ?>

<!-- ローディング画面 -->
<!--<div id="loading">
    <p>Loading...</p>
    <div id="loading-screen"></div>
</div>-->

<main class="l-contents-main page_main">

<!--page title-->
<h1 class="page_header_title content-title recruit_title">
  <p class="en">Recruit</p><br>
  <p class="ja"><?php the_title(); ?></p>

</h1>
<!--page titleここまで-->

<div class="page_title-pic">
<div class="parallax-img js-trigger">
<picture>
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-b.webp" type="image/webp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-b.jpg" alt="株式会社マルサン">
</picture>
</div>
</div>

<div class="recruit_content page_content">

<ul class="page_recruit_list">
<!--====================================================

  加工機オペレーター

=====================================================-->
<li class="page_section page_recruit_item">
<h2 class="page_section_h2 recruit_h2">
  <p class="en">Processing Machine Operators</p>
  <p class="ja">加工機オペレーター</p>
</h2>

<div class="page_recruit_pic">
<picture>
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-01.webp" type="image/webp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-01.jpg" alt="加工機オペレーター">
</picture>
</div>

<dl class="page_recruit_text">
  <dt>ハウスロジスティクスの中心</dt>
  <dd>近年、住宅建設は工場加工の比率が高くなっています。<br>
  その中でも構造体加工に当たるプレカット加工は中心に当たります。
  加工機と制御用のPCを操作して、CADで出力されたデータの取り組み、加工順に合わせた材料の準備と製材品を加工して木造住宅用の部材を生産、加工された製品（完成品）の検品・梱包と出荷ヤードへの搬出を行います。</dd>
</dl>

<div class="page_recruit_btn">
  <a href="<?php echo home_url('/'); ?>recruit01">この求人の詳細を見る</a>
</div>
</li>


<!--====================================================

  CADオペレーター

=====================================================-->
<li class="page_section page_recruit_item">
<h2 class="page_section_h2 recruit_h2">
<p class="en">CAD Operator</p>
  <p class="ja">CADオペレーター</p>
</h2>

<div class="page_recruit_pic">
<picture>
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-02.webp" type="image/webp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-02.jpg" alt="CADオペレーター">
</picture>
</div>

<dl class="page_recruit_text">
  <dt>平面を立体に</dt>
  <dd>お客様(取引先工務店様)が作成した図面を元に、プレカット専用CADを使い図面のデータ入力をしていく仕事です。<br>CADの有力にあたってお客様との打合せに伺ったり、加工の詳細について電話やメールを使ったやり取りも行います。入力したデータは、お客様への見積りの元データとしても使われ、工場では、CADで入力したデータや図面を元にして加工が行われます。
  </dd>
</dl>

<div class="page_recruit_btn">
  <a href="<?php echo home_url('/'); ?>recruit02">この求人の詳細を見る</a>
</div>
</li>


<!--====================================================

  セールスドライバー

=====================================================-->
<li class="page_section page_recruit_item">
<h2 class="page_section_h2 recruit_h2">
  <p class="en">Sales Driver</p>
  <p class="ja">セールスドライバー</p>
</h2>

<div class="page_recruit_pic">
<picture>
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-03.webp" type="image/webp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/recruit-03.jpg" alt="セールスドライバー">
</picture>
</div>

<dl class="page_recruit_text">
  <dt>工場とお客様をつなぐ</dt>
  <dd>工場で加工した製品（プレカット材）や、一部の住宅資材を建築現場にお届けするお仕事です。<br>現場搬入時はユニックによる荷降ろしが基本となります。<br>その他に小口の素材品（加工していない製材品）の配達も行います。</dd>
</dl>

<div class="page_recruit_btn">
  <a href="<?php echo home_url('/'); ?>recruit03">この求人の詳細を見る</a>
</div>
</li>

</ul>


<!--====================================================
    list　リンクリスト
=====================================================-->
<aside class="pageOther">
    <ul class="pageOther_list">
        <li><a href="<?php echo home_url('/'); ?>company"><p class="en">Company</p><p class="ja">会社情報</p></a></li>
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