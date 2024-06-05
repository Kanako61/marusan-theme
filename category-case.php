<?php
/**
 * 記事一覧テンプレート
 */

get_header(); ?>
<main class="l-contents-main category_main category-case_main">
<div class="category_container">
	<!--トップの画像-->
	<div class="page_pic category-case_pic">
		<picture>
			<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/case/case-title-bk.webp" type="image/webp">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/case/case-title-bk.jpg" alt="納入事例">
		</picture>
    </div>
	
    <h1 class="category_header_title content-title">
		<!--categoryのタイトル取得-->
		<p class="ja"><?php if ( is_category() ) : ?>
			<?php single_cat_title(); ?>
			<?php else: ?>		
		<?php endif; ?></p>
    </h1>
		
	<article class="category-case_ct">
	<?php if(have_posts() ) : ?>
		<?php
			while (have_posts() ) :
			the_post();
		?>
        <ul class="category-case_list">
			<li class="category__list_item">
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

					<!--タイトル-->
					<li class="item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				</ul>
			</li>
		</ul>
		<?php endwhile; ?>
	<?php endif; ?>
	</article>

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
</div><!-- .container -->



</main>

<?php get_footer(); ?>
