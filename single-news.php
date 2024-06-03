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

<main class="l-contents-main single_main single-news_main free-area">
<div class="single_container">

	<h1 class="category_header_title category_news_title text-c">
		<!--categoryのタイトル取得-->
		<p class="ja">
		<?php
			$categories = get_the_category();

			// カテゴリーが存在する場合は、最初のカテゴリーの名前を表示します
			if (!empty($categories)) {
    			echo esc_html($categories[0]->name);
			}
		?>
		</p>
    </h1>


	<ul class="single-news_list">
		<!--タイトル-->
		<li class="single-news_title">
  			<?php the_title(); ?>
		</li>
		<!--日付-->
		<li class="single-news_time">
			<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d')?></time>
		</li>
	</ul>
	<!--ここからコンテンツエリア-->
	<div class="single_content single-news-content content-body">
		<?php the_content(); ?>
	</div>
	<!--コンテンツエリアここまで-->
</div>

<!--====================================================

  Contact
  お問い合わせ

=====================================================-->
<?php get_template_part('contact'); ?>

</main>

<?php get_footer(); ?>
