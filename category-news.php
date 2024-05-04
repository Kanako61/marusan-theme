<?php
/**
 * 記事一覧テンプレート
 */

get_header(); ?>
<main class="l-contents-main archive_main">
<div class="archive_container">
	<div class="content__wrap">
    <h1 class="archive_header_title content-title fadein">
	<!--archiveのタイトル取得-->
	<p class="en">NEWS</p><br>
	<p class="ja"><?php if ( is_category() ) : ?>
		<?php single_cat_title(); ?>
		<?php else: ?>		
	<?php endif; ?></p>
    </h1>

	<!-- ローディング画面 -->
	<!--
	<div id="loading">
    	<p>Loading...</p>
    	<div id="loading-screen"></div>
	</div>
	-->
		
	<article class="archive_news">
	<?php if(have_posts() ) : ?>
		<?php
			while (have_posts() ) :
			the_post();
		?>
        <ul class="archive_news_list">
			<li class="archive__list_item fadein">
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
			</li>
		</ul>
		<?php endwhile; ?>
	<?php endif; ?>
	</article>
	</div>
</div><!-- .container -->
</main>

<!--ページネーションここから-->
<nav class="navigation pagination" role="navigation" aria-label="投稿">
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
