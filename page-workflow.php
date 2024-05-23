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

<main class="l-contents-main page_main workflow_main">

<!--page img-->
<div class="page_title-pic">
    <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-bk.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-bk.jpg" alt="ご注文の流れ">
    </picture>
    <h1 class="page_workflow_h1"><?php the_title(); ?></h1>
</div>


<div class="workFlow_content page_content">

<section class="page_section page_flow">
<h2 class="page_section_h2 page_workflow_h2">
    <p class="ja">ご注文から納品まで</p>
</h2>
<ul class="page_flow_list">
    <li class="page_flow_list_item">
        <div class="page_flow_content">
        <h3 class="page_flow_tit"><span class="page_flow_tit_num">01.</span><span>見積依頼</span></h3>
        <p class="page_flow_text">平平面図・立面図等を頂き、使用する材種や工法、着工日や上棟日を伺います。<br class="pc_br">住宅、非住宅、あらゆる工法に対応しますので、まずは一度お気軽にご相談下さい。</p>
        </div>
        <div class="page_flow_pic">
        <div class="page_flow_pic_box">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-01.jpg" alt="見積依頼">
            </picture>
        </div>
        </div>
    </li>
    <li class="page_flow_list_item">
        <div class="page_flow_content">
        <h3 class="page_flow_tit"><span class="page_flow_tit_num">02.</span><span>伏図作成・見積書作成​</span></h3>
        <p class="page_flow_text">頂いた図面を基にプレカット図を作成します。熟練設計者によって無駄のない木拾い、積算を行います。​</p>
        </div>
        <div class="page_flow_pic">
        <div class="page_flow_pic_box">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-02.jpg" alt="伏図・見積書作成">
            </picture>
        </div>
        </div>
    </li>
    <li class="page_flow_list_item">
        <div class="page_flow_content">
        <h3 class="page_flow_tit"><span class="page_flow_tit_num">03.</span><span>打合せ・図面承認</span>​</h3>
        <p class="page_flow_text">作成した伏図を基に、細かい納まり等を確認します。プレカット図面の最終承認を頂き、納品日を確定させます。​</p>
        </div>
        <div class="page_flow_pic">
        <div class="page_flow_pic_box">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-03.jpg" alt="打合せ・図面承認">
            </picture>
        </div>
        </div>
    </li>
    <li class="page_flow_list_item">
        <div class="page_flow_content">
        <h3 class="page_flow_tit"><span class="page_flow_tit_num">04.</span><span>加工​</span></h3>
        <p class="page_flow_text">承認を頂いたプレカット図面の通りに、材料を加工していきます。木材には反りや割れ、節があり、適材適所に使う必要がありますが、経験豊富な当社の社員が一本一本見定めています。</p>
        </div>
        <div class="page_flow_pic">
        <div class="page_flow_pic_box">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-04.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-04.jpg" alt="加工">
            </picture>
        </div>
        </div>
    </li>
    <li class="page_flow_list_item">
        <div class="page_flow_content">
        <h3 class="page_flow_tit"><span class="page_flow_tit_num">05.</span><span>検品・出荷</span></h3>
        <p class="page_flow_text">完成した製品の品質に問題がないかを細かく確認し、上棟日に合わせて出荷します。​</p>
        </div>
        <div class="page_flow_pic">
        <div class="page_flow_pic_box">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-05.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-05.jpg" alt="検品・出荷">
            </picture>
        </div>
        </div>
    </li>
    <li class="page_flow_list_item">
        <div class="page_flow_content">
        <h3 class="page_flow_tit"><span class="page_flow_tit_num">06.</span><span>納品・上棟</span></h3>
        <p class="page_flow_text">製品はレイヤ別に梱包、番付が機械にて印字されているので分かりやすくなっています。また上棟の依頼を受けた物件については当社の大工チームが棟上げを行います。</p>
        </div>
        <div class="page_flow_pic">
        <div class="page_flow_pic_box">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-06.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workflow/page-workflow-06.jpg" alt="納品・上棟">
            </picture>
        </div>
        </div>
    </li>
</ul>
</section>

<aside class="page_section page_flow_other">
    <h2 class="page_section_h2 page_flow_other_h2">
    <span>
    構造計算や吹付断熱の施工もお任せ</span>
    </h2>

    <p class="page_flow_other_text">マルサンではプレカットのみならず、構造計算業務や吹付断熱施工も行っております。<br class="pc_br">プレカット対応工法や、関連業務の詳細はこちらをご覧ください。</p>

    <h3 class="page_flow_other_h3">マルサン事業案内</h3>
    <div class="top-button">
      <a href="<?php echo home_url('/'); ?>service">詳しくはこちら</a>
    </div>
</aside>

</div>

<!--====================================================

  Contact
  お問い合わせ

=====================================================-->
<?php get_template_part('contact'); ?>

</main>

<?php get_footer(); ?>