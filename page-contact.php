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

<main class="l-contents-main page_main">
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
						<p>株式会社マルサンのウェブサイトをご覧頂き、誠にありがとうございます。<br>フォームの項目（ ＊ は必須）についてご入力の上で送信してください。</p>

						<!-- 電話 -->
						<div class="page_contact_tel">
							
						</div>

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