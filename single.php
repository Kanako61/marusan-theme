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


<!--最近の記事ここから-->
<aside class="single-news">
<h2 class="single-news_h2">Latest Articles</h2>

<div class="single_meta">
<?php
	$args = array(
		'posts_per_page' => 3 // 表示件数
	);
	$posts = get_posts( $args );
		foreach ( $posts as $post ): // ループの開始
		setup_postdata( $post ); // 記事データの取得
	?>

	<ul class="item_meta">
     <!--アイキャッチ画像表示-->
	<li class="item_pic">
		<a href="<?php the_permalink(); ?>">
		<?php if(has_post_thumbnail() ): ?>
			<?php the_post_thumbnail('item_meta_thumbnail'); ?>
		<?php else: ?>
			<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/assets/images/dummy-image.png" alt="">
		<?php endif; ?>
		</a>
   </li>

	<li class="item_inner">
  		<div id="post-<?php the_ID(); ?>"<?php post_class('item_category'); ?>><?php the_category(''); ?></div>
		<time class="item_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d')?></time>
	</li>

	<li class="item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

     <!--本文抜粋表示-->
	<!--<li class="item_excerpt"><?php echo mb_substr( get_the_excerpt(), 0, 40); ?></li>-->
</ul>
<?php
	endforeach; // ループの終了
?>
</div>
</aside>
<!--最近の記事ここまで-->

</main>
<!--====================================================

  Contact
  お問い合わせ

=====================================================-->
<?php get_template_part('contact'); ?>

<?php get_footer(); ?>
