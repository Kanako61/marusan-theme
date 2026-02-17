<?php get_header(); ?>

<main style="text-align:center; padding:4rem 1rem;">
  <h1>ページが見つかりません</h1>
  <p>お探しのページは削除されたか、URLが変更された可能性があります。</p>

  <a href="<?php echo esc_url( home_url('/') ); ?>"
     style="display:inline-block; margin-top:2rem; padding:0.8em 1.5em; background:#333; color:#fff; text-decoration:none;">
    トップページへ戻る
  </a>
</main>

<?php get_footer(); ?>