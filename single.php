<?php
/**
 * 投稿詳細ページテンプレート

 */

get_header(); ?>

<!-- ローディング画面 -->
<!--<div id="loading">
  <p>Loading...</p>
  <div id="loading-screen"></div>
</div>-->

<main class="l-contents-main single_main free-area">
<div class="single_container">
	<div class="content__wrap">
		<!--タイトル-->
		<h1 class="single_header_title content-title">
  			<?php the_title(); ?>
		</h1>
		<ul class="single_tit_list">
			<!--カテゴリー-->
	 		<li id="post-<?php the_ID(); ?>"<?php post_class('meta_category'); ?>><?php the_category(''); ?></li>
			<!--日付-->
			<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d')?></time>
		</ul>
		<!--ここからコンテンツエリア-->
		<div class="single_content content-body">
			<?php the_content(); ?>
		</div>
		<!--コンテンツエリアここまで-->
	</div>
</div>

<!--====================================================

  Contact
  お問い合わせ

=====================================================-->
<?php get_template_part('contact'); ?>

</main>

<?php get_footer(); ?>
