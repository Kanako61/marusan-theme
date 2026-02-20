<?php get_header(); ?>

<main class="l-contents-main page_main 404_main" style="text-align:center;">
    <div class="content_404 page_content">
        <h1>ページが見つかりません</h1>
        <p>お探しのページは削除されたか、URLが変更された可能性があります。</p>

        <a href="<?php echo esc_url( home_url('/') ); ?>" style="display:inline-block; margin-top:2rem; padding:0.8em 1.5em; background:#768d96; color:#fff; text-decoration:none; border-radius:0.6em;">トップページへ戻る
        </a>
    </div>
</main>

<style>
    .error404 .address {
        display:none;
    }
    .content_404 {
        margin-top:12em;
    }
    @media all and (max-width:768px) {
        .content_404 {
            margin-top:8em;
        }
    }
</style>

<?php get_footer(); ?>