<?php
/*
Template Name: contact-thanks
*/
/* contact-thanks */
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
						<p class="page_contact_text">ご連絡ありがとうございます。<br class="pc_br">内容は担当者がご確認させていただきます。</p>

						<ul class="contact_progressbar">
   							<li>入力</li>
    						<li>確認</li>
    						<li class="active">完了</li>
						</ul>

                        <div class="content-body">
							<?php if ( has_post_thumbnail() ) : ?>
                            	<div class="content-eyecatch">
									<?php the_post_thumbnail('page_eyecatch'); ?>
                            	</div>
							<?php endif; ?>
							<?php the_content(); ?>
                        </div>

						<div class="contact_topBK-btn">
							<a href="<?php echo home_url('/'); ?>">トップページに戻る</a>
						</div>
                    </article>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

	</div>
</main>

<?php get_footer(); ?>