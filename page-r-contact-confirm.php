<?php
/*
Template Name: recruit-entory-confirm
*/
/* recruit-entory-confirm */
?>

<?php get_header(); ?>

<!-- ローディング画面 -->
<!--<div id="loading">
    <p>Loading...</p>
    <div id="loading-screen"></div>
</div>-->

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
						<p class="page_contact_text">入力内容をご確認頂きましたら<br class="pc_br">下記送信ボタンより内容を送信してください。</p>

						<ul class="contact_progressbar">
   							<li>入力</li>
    						<li class="active">確認</li>
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