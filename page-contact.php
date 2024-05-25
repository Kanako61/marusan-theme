<?php
/*
Template Name: contact
*/
/* contact */
?>

<?php get_header(); ?>

<!-- ローディング画面 -->
<!--<div id="loading">
    <p>Loading...</p>
    <div id="loading-screen"></div>
</div>-->

<!-- ローディング画面 -->
<!--<div id="loading">
  <p>Loading...</p>
  <div id="loading-screen"></div>
</div>
-->

<main class="l-contents-main page_main page_contact_main">
	<div class="page_content">
		<div class="content__wrap">
			<?php if( have_posts() ) : ?>
				<?php while ( have_posts() ) :
					the_post();
				?>
					<article id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
						<h1 class="page_header_title content-title contact_title">
							<p class="ja"><?php the_title(); ?></p>
						</h1>

						<!-- コメント -->
						<p class="page_contact_text">株式会社マルサンのウェブサイトをご覧頂き、誠にありがとうございます。<br class="pc_br">フォームの項目（ <span class="red">＊</span> は必須）についてご入力の上で送信してください。</p>

						<!-- 電話 -->
						<div class="page_contact_tel">
							<h2 class="page_contact_h2">お電話でのお問い合わせ</h2>
							<ul class="page_contact_tel_list">
								<li>
									<p class="tel_num">0243-55-2626</p>
								</li>
								<li>
								<div class="page_contact_hours">
      								<p>平日 8:00〜17:00<br>(祝日・年末年始を除く)</p>
								</div>
								</li>
							</ul>
						</div>

						<ul class="contact_progressbar">
   							<li class="active">入力</li>
    						<li>確認</li>
    						<li>完了</li>
						</ul>

                        <div class="content-body">
							<?php if ( has_post_thumbnail() ) : ?>
                            	<div class="content-eyecatch">
									<?php the_post_thumbnail('page_eyecatch'); ?>
                            	</div>
							<?php endif; ?>
							<?php the_content(); ?>
                        </div>
                    </article>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

	</div>
</main>

<?php get_footer(); ?>