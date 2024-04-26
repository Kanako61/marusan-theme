<?php
/*
Template Name: Work Flow
*/
/* WorkFlow */
?>

<?php get_header(); ?>

<!-- ローディング画面 -->
<!--<div id="loading">
    <p>Loading...</p>
    <div id="loading-screen"></div>
</div>-->

<main class="l-contents-main page_main">

<!--page title-->
<h1 class="page_header_title content-title workFlow_title fadein">
  <p class="en">Work Flow</p><br>
  <p class="ja"><?php the_title(); ?></p>
</h1>
<!--page titleここまで-->

<div class="page_title-pic">
<div class="parallax-img js-trigger">
<picture>
    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/about-us-b.webp" type="image/webp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images//workflow/about-us-b.jpg" alt="株式会社マルサン">
</picture>
</div>
</div>

<div class="workFlow_content page_content">

<p class="workFlow_text fadein">当社プレカット工場絵では、プレカット図の作成からお打合せ、製造、納品まで、営業と設計、工場が一体になってご提供させていただきます。また、ご要望に合わせて、構造計算や建方、吹付断熱の施工など、様々なご提案が可能です。</p>

<section class="page_section page_fLow">
<h2 class="page_section_h2 fadein">
    <p class="en">Client company</p>
    <p class="ja">ご注文から納品まで</p>
</h2>
<ul class="page_flow_list">
    <li class="page_flow_list_item">
        <div class="page_flow_content">
        <h3 class="page_flow_h3 fadein"><span class="page_flow_h3_num">01.</span>図面作成・見積依頼</h3>
        <p class="page_flow_text fadein">平面図・立面図等を頂き、使用する材種や​工法、着工日や上棟日を伺いながら打ち合わせをします。</p>
        </div>
        <div class="page_flow_pic fadein">
        <div class="page_flow_pic_box">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/work-flow01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/work-flow01.jpg" alt="図面作成・見積依頼">
            </picture>
        </div>
        </div>
    </li>
    <li class="page_flow_list_item">
        <div class="page_flow_content">
        <h3 class="page_flow_h3 fadein"><span class="page_flow_h3_num">02.</span>伏図・見積書作成​</h3>
        <p class="page_flow_text fadein">頂いた図面を基にプレカット図を作成します。​熟練設計者によって無駄のない木拾い、積算を行います。​</p>
        </div>
        <div class="page_flow_pic fadein">
        <div class="page_flow_pic_box">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/work-flow02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/work-flow02.jpg" alt="伏図・見積書作成">
            </picture>
        </div>
        </div>
    </li>
    <li class="page_flow_list_item">
        <div class="page_flow_content">
        <h3 class="page_flow_h3 fadein"><span class="page_flow_h3_num">03.</span>打合せ・図面承認​</h3>
        <p class="page_flow_text fadein">作成した伏図を基に、細かい納まり等を確認します。プレカット図面の最終承認を頂き、納品日を確定させます。​</p>
        </div>
        <div class="page_flow_pic fadein">
        <div class="page_flow_pic_box">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/work-flow03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/work-flow03.jpg" alt="打合せ・図面承認">
            </picture>
        </div>
        </div>
    </li>
    <li class="page_flow_list_item">
        <div class="page_flow_content">
        <h3 class="page_flow_h3 fadein"><span class="page_flow_h3_num">04.</span>加工​</h3>
        <p class="page_flow_text fadein">承認を頂いたプレカット図面に基づいて工場にて材料を加工します。木材は反りや割れ、節等、一つとして同じものはありません。当社熟練社員が一本一本を見定め、品質を高めています。</p>
        </div>
        <div class="page_flow_pic fadein">
        <div class="page_flow_pic_box">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/work-flow04.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/work-flow04.jpg" alt="加工">
            </picture>
        </div>
        </div>
    </li>
    <li class="page_flow_list_item">
        <div class="page_flow_content">
        <h3 class="page_flow_h3 fadein"><span class="page_flow_h3_num">05.</span>検品・出荷</h3>
        <p class="page_flow_text fadein">完成した製品の品質に問題がないかを細かく確認し、上棟日に合わせて出荷します。​</p>
        </div>
        <div class="page_flow_pic fadein">
        <div class="page_flow_pic_box">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/work-flow05.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/work-flow05.jpg" alt="検品・出荷">
            </picture>
        </div>
        </div>
    </li>
    <li class="page_flow_list_item">
        <div class="page_flow_content">
        <h3 class="page_flow_h3 fadein"><span class="page_flow_h3_num ">06.</span>納品・上棟</h3>
        <p class="page_flow_text fadein">製品はレイヤ別に梱包、番付が機械にて印字されているので分かりやすくなっています。​また上棟の依頼を受けた物件については当社の大工チームが棟上げを行います。</p>
        </div>
        <div class="page_flow_pic fadein">
        <div class="page_flow_pic_box">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/work-flow06.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/work-flow06.jpg" alt="納品・上棟">
            </picture>
        </div>
        </div>
    </li>
</ul>
</section>



<!--====================================================
    list　リンクリスト
=====================================================-->
<aside class="pageOther">
    <ul class="pageOther_list">
        <li><a href="<?php echo home_url('/'); ?>company"><p class="en">Company</p><p class="ja">会社情報</p></a></li>
        <li><a href="<?php echo home_url('/'); ?>product"><p class="en">Product</p><p class="ja">商品情報</p></a></li>
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