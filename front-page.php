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
<div class="main_message">
  <picture>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-main-message.png" alt="明日の家づくりを創る">
  </picture>
</div>
<!--動画のボタン-->
<div class="top-p_movie">
  <a class="movie_btn" href="">
    <div class="movie_pic">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/p-movie.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/p-movie.png" alt="プロモーションムービー">
        </picture>
      </div>
  </a>
</div>
<!--動画のボタン-->
</div>
          
<!--====================================================

  Company
  会社情報

=====================================================-->

<section class="top_company top_section">
  <div class="company_c">
    <h2 class="top_h2">創業90年</h2>
    <p class="company_c_text">これまで住宅業界の課題をプレカットによって解決してきました。<br>これからは住宅・非住宅問わず、<br class="pc_br">建築業界の未来を支える会社として活躍していきます。</p>
    <div class="top-button">
      <a href="<?php echo home_url('/'); ?>company">会社情報</a>
    </div>
  </div>
</section>


<!--====================================================

  Service
  事業内容

=====================================================-->

<section class="top_service top_section">
  <!--背景-->
  <div class="top_service_bk">
    <div class="top_service_bk-01"></div>
    <div class="top_service_bk-02"></div>
    <div class="top_service_bk-03"></div>
    <div class="top_service_bk-04"></div>
  </div>
  <!--背景ここまで-->
  <div class="top_service_c">
    <div class="top_service_left">
      <h2 class="top_h2 top-_service_h2">事業内容</h2>
      <p class="top_service_left_text">プレカットは在来工法をはじめ、金物やパネル、 2×4 工 法 な ど あらゆる工法に対応。今後住宅業界で必須とも言われる構造計算への対応、人手不足が叫ばれる現場建方の仕事まで、住宅建築を多方面から支えていきます。</p>
      <div class="top-button">
        <a href="<?php echo home_url('/'); ?>service">より詳しく</a>
      </div>
    </div>
    <div class="top_service_img">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/gaiyou.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gaiyou.jpg" alt="事業内容">
      </picture>
    </div>
  </div>
</section>


<!--====================================================

  Work Flow
  仕事の流れ

====================================================-->

<section class="top_workflow top_section">
  <div class="top_workflow_inner">
    <div class="inner_box">
      <h2 class="top_h2">ご注文の流れ</h2>
      <dl class="top_workflow_dl">
        <dt>マルサンにしか<br>できないことを目指して。</dt> 
        <dd>マルサンの強みは図面作成から製造、配送、建築まで一貫して対応・管理が出来るところです。お客様のご要望に合わせた提案が可能です。</dd>
      </dl>
      <div class="top-button">
        <a href="<?php echo home_url('/'); ?>workflow">より詳しく</a>
      </div>
    </div>
    <ul class="top_workflow_img">
      <li class="top_workflow_img_01">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-workflow01.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-workflow01.jpg" alt="ご注文の流れ">
        </picture>
      </li>
      <li class="top_workflow_img_02">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-workflow02.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-workflow02.jpg" alt="ご注文の流れ">
        </picture>
      </li>
      <li class="top_workflow_img_03">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-workflow03.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-workflow03.jpg" alt="ご注文の流れ">
        </picture>
      </li>
      <li class="top_workflow_img_04">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-workflow04.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-workflow04.jpg" alt="ご注文の流れ">
        </picture>
      </li>
      <li class="top_workflow_img_05">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-workflow05.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-workflow05.jpg" alt="ご注文の流れ">
        </picture>
      </li>
    </ul>
  </div>
</section>


<!--====================================================

  Case Studies
  納入う事例

====================================================-->
<section class="top_case top_section">
  <h2 class="top_h2">納入事例</h2>
  <div class="top_case_img">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-case.webp" type="image/webp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-case.png" alt="導入事例">
    </picture>
  </div>
  <p class="top_case_text">これまで当社のプレカットによって建てられた建物は4万棟以上。<br class="pc_br">日本における近代住宅建築の発展と共に歩んできました。数えきれない導入の一例と、住宅の垣根を超えた建築の実例を紹介します。</p>
  <div class="top-button">
    <a href="<?php echo get_term_link('case', 'category'); ?>">より詳しく</a>
  </div>
</section>

<!--背景-->
<div class="top_case_bk"></div>
<!--背景ここまで-->


<!--====================================================

  effort
  取り組み

====================================================-->
<section class="top_effort top_section">
  <div class="top_effort_inner">
    <h2 class="top_h2">取り組み</h2>
    <p class="top_effort_text">働く人がより働きやすい環境を作るための取り組みや地域社会への貢献をマルサンでは常に心がけています。</p>
    <div class="top-button">
      <a href="<?php echo home_url('/'); ?>effort">より詳しく</a>
    </div>
  </div>
</section>

<!--====================================================

  News
  お知らせ

=====================================================-->

<section class="top_news top_section">
  <div class="top_news_inner">
  <h2 class="top_h2">お知らせ</h2>

  <!-- ここからループ -->
  <article id="post-<?php the_ID(); ?>"<?php post_class('news_content'); ?>>
  	<div class="top_news_content">	
		<ul class="top_news_meta">
			<?php query_posts("cat=1&showposts=4"); ?> 
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post();  ?>
          <li class="top_news_meta_li">
						<ul class="top_news_meta_list">
              <!--<li class="news_thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></li>-->
              <div class="top_news_box">
							<li class="top_news_meta_time">
								<time class="top_news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d')?></time>
							</li>
							<li class="top_news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
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
</section>

<!--背景-->
<div class="top_news_bk"></div>
<!--背景ここまで-->

<!--====================================================

  Recruit
  採用情報

=====================================================-->

<section class="top_recruit top_section">
  <h2 class="top_h2">採用情報</h2>
  <div class="top_recruit_inner">
  <!--背景-->
  <div class="top_recruit_bk">
    <div class="top_recruit_bk-01"></div>
    <div class="top_recruit_bk-02"></div>
    <div class="top_recruit_bk-03"></div>
  </div>
  <!--背景ここまで-->

  <div class="top_recruit_img">
    <div class="top_service_img_01">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-recruit01.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-recruit01.jpg" alt="ドライバー">
      </picture>
    </div>
    <div class="top_service_img_01">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-recruit02.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-recruit02.jpg" alt="加工機オペレーター">
      </picture>
    </div>
    <div class="top_service_img_01">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-recruit03.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top-recruit03.jpg" alt="CADオペレーター">
      </picture>
    </div>
  </div>

  <div class="top_recruit_text">
    <h3 class="top_recruit_h3 top_h3">100年企業のその先へ</h3>

    <p class="recruit_text">マルサンが見ているのは10年20年もっと先の未来です<br class="pc_br">
    どんな時代にも必要とされる企業であり続けたい<br class="pc_br">
    明日の家づくりを創る<br class="pc_br">
    まだまだ成長していくマルサンで私たちと一緒に働いてみませんか</p>

    <div class="top-button">
      <a href="<?php echo home_url('/'); ?>recruit">採用ページ</a>
    </div>
  </div>
  </div>
</section>

<!--====================================================

  Contact
  お問い合わせ

=====================================================-->
<?php get_template_part('contact'); ?>

</main>

<?php get_footer(); ?>