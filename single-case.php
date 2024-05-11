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

<main class="l-contents-main single_main single-case_main free-area">
<div class="single_container">

	<h1 class="single_case_title text-c">
		<!--categoryのタイトル取得-->
		<p class="ja">
		<?php
			// 現在の投稿のカテゴリー情報を取得します
			$categories = get_the_category();

			// カテゴリーが存在する場合は、最初のカテゴリーの名前を表示します
			if (!empty($categories)) {
    			echo esc_html($categories[0]->name);
			}
		?>
		</p>
    </h1>

	<!--ここからコンテンツエリア-->
	<div class="single_content content-body">
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
