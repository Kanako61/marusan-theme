<?php
/**
 * 記事一覧テンプレート
 */

get_header(); ?>
<main class="l-contents-main category_main category-news_main">
<div class="category_container">
	<!--トップの画像-->
	<div class="page_pic category-news_pic">
		<picture>
			<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/news/page-news-bk.webp" type="image/webp">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/npage-news-bk.jpg" alt="お知らせ">
		</picture>
		<div class="copy">
			<p class="copy_text">明日の家づくりを創る</p>
		</div>
    </div>
	
    <h1 class="category_header_title content-title category_news_title text-c">
		<!--categoryのタイトル取得-->
		<p class="ja"><?php if ( is_category() ) : ?>
			<?php single_cat_title(); ?>
			<?php else: ?>		
		<?php endif; ?></p>
    </h1>

		
	<article class="category_news w-80v">
	<?php if(have_posts() ) : ?>
		<?php
			while (have_posts() ) :
			the_post();
		?>
        <ul class="category_news_list">
		<a href="<?php the_permalink(); ?>" class="news_link">
			<li class="category__list_item">
				<ul class="item_meta">
					<li class="item_inner">
						<time class="item_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d')?></time>
						<div class="new-icon">
						<?php
							$day  = 7; // 表示させる期間の日数を入れます
							$today = date_i18n('U');
							$post_day = get_the_time('U');
							$term = date('U',($today - $post_day)) / 86400;
							if( $day > $term ){
								echo 'new!';
							}
							?>
						</div>
					</li>

					<li class="item_title"><?php the_title(); ?></li>
				</ul>
			</li>
			</a>
		</ul>
		<?php endwhile; ?>
	<?php endif; ?>
	</article>
	</div>
</div><!-- .container -->
</main>

<!--ページネーションここから-->
<nav class="navigation pagination news" role="navigation" aria-label="投稿">
<?php the_posts_pagination(
    array(
        'mid_size'  => 5, // 現在ページの左右に表示するページ番号の数
        'prev_next' => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text' => __( ''), // 「前へ」リンクのテキスト
        'next_text' => __( ''), // 「次へ」リンクのテキスト
        'type'      => 'list', // 戻り値の指定 (plain/list)
    )
); ?>
</nav>
<!--ページネーションここまで-->

<!--====================================================

  Contact
  お問い合わせ

=====================================================-->

<?php get_template_part('contact'); ?>

<?php get_footer(); ?>
