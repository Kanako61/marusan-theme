<?php
/**
 * 固定ページテンプレート
 */
get_header(); ?>

<!-- ローディング画面 -->
<!--<div id="loading">
  <p>Loading...</p>
  <div id="loading-screen"></div>
</div>
-->

<main class="l-contents-main page_main free-area">
	<div class="page_content">
		<div class="content__wrap">
			<?php if( have_posts() ) : ?>
				<?php while ( have_posts() ) :
					the_post();
				?>
					<article id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
					<h1 class="page_header_title content-title page_default_title">
  						<p class=""><?php the_title(); ?></p>
					</h1>
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

<!--====================================================

  Contact
  お問い合わせ

=====================================================-->
<?php get_template_part('contact'); ?>

</main>

<?php get_footer(); ?>
