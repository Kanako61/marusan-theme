<?php
/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_image_size( 'page_eyecatch', 1100, 610, true); /* アイキャッチ画像のサイズ */
	add_image_size( 'archive_thumbnail', 200, 150, true);
	add_theme_support( 'custom-logo' ); 
	add_theme_support( 'custom-header' ); /* カスタムヘッダー */
	add_theme_support( 'html5', array( /* HTML5のタグで出力 */
		//add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
		//'search-form',
		//'comment-form',
		//'comment-list',
		//'gallery',
		//'caption',
	) );
}
add_action( 'after_setup_theme', 'my_setup' );


//管理画面ブロックエディタ用CSSの追加
add_action( 'after_setup_theme', function(){
	// ブロックエディタ用スタイル機能をテーマに追加 
	add_theme_support('editor-styles');
	// ブロックエディタ用CSSの読み込み
	add_editor_style('/assets/css/editor-style.css');
});

//archive.php適用
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] ='blog'; //記事一覧ページのスラッグ名
	}
	return $args;
	}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

//archiveのタイトル変更
function change_aioseop_title( $title ) {
	if ( is_category() ) { /* カテゴリーアーカイブの場合 */
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
		$title = single_tag_title( '', false );
	} elseif ( is_post_type_archive( 'blog' ) ) { /* blog投稿タイプのアーカイブの場合 */
		$title = 'Blog';
	}
	return $title;
	}
add_filter( 'aioseop_title', 'change_aioseop_title' );


//navを有効にする
  function my_menu_init() {
	register_nav_menus( array(
		'global'  => 'グローバルメニュー',
		'footer-nav'  => 'フッターメニュー',
	) );
}
add_action( 'init', 'my_menu_init' );

//svg有効化
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
	}
add_filter('upload_mimes', 'cc_mime_types');

// 画像のリサイズ機能OFF
//add_filter("big_image_size_threshold", "__return_false");

//bodyにスラッグのclassをつける
function add_class_page_slug($classes) {
    if( is_page() ) {
        $page = get_post( get_the_ID() );
        $classes[] = $page->post_name;
    }
    return $classes;
}
add_filter('body_class', 'add_class_page_slug');


// bodyにスラッグのclassをつける(singleページ)
function add_category_class_to_body( $classes ) {
    if ( is_single() ) {
        $categories = get_the_category();
        foreach( $categories as $category ) {
            if ( $category->slug == 'case' ) {
                $classes[] = 'single-case';
            } elseif ( $category->slug == 'news' ) {
                $classes[] = 'single-news';
            }
        }
    }
    return $classes;
}
add_filter( 'body_class', 'add_category_class_to_body' );


//共通CSS読み込み
function theme_enqueue_styles() {
    wp_enqueue_style( 'vegas.min.css', get_template_directory_uri() . '/assets/css/vegas.min.css');
	wp_enqueue_style( 'swiper-bundle.min.css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
	wp_enqueue_style( 'scroll-hint.css', get_template_directory_uri() . '/assets/css/scroll-hint.css');
	//wp_enqueue_style( 'normalize.css', get_template_directory_uri() . '/assets/css/normalize.css');
	//wp_enqueue_style( 'locomotive-scroll.min.css', get_template_directory_uri() . '/assets/css/locomotive-scroll.min.css');
	wp_enqueue_style( 'modal-video.min.css',get_template_directory_uri() . '/assets/css/modal-video.min.css');
	
    wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');

//GSAP読み込み
/* function theme_gsap_script(){
	wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js', array(), false, true);
	wp_enqueue_script( 'gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js', array('gsap-js'), false, true );
  }
  add_action( 'wp_enqueue_scripts', 'theme_gsap_script' ); */

  

//jsファイルの読み込み  bodyタグの直前で読み込む

function themes_file_scripts() {
    if (is_admin()) return;

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);

    // ローカルのjQueryファイルをフォールバックとして設定
    add_action('wp_footer', function() {
        ?>
        <script>
        window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.7.1.min.js"><\/script>');
        </script>
        <?php
    });

    // その他のスクリプト
    wp_enqueue_script('swiper-bundle.min.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('vegas.min.js', get_template_directory_uri() . '/assets/js/vegas.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('scroll-hint.min.js', get_template_directory_uri() . '/assets/js/scroll-hint.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('jquery-modal-video.min.js', get_template_directory_uri() . '/assets/js/jquery-modal-video.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('sticky-sidebar.min.js', get_template_directory_uri() . '/assets/js/sticky-sidebar.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('script.js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0', true);

    if (is_front_page() || is_home()) {
        wp_enqueue_script('script-top', get_template_directory_uri() . '/assets/js/script-top.js', array('jquery'), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'themes_file_scripts');



// 記事ページのテンプレート設定
function custom_load_single_template($template) {
    if (is_single() && in_category('news')) {
        return locate_template(array('single-news.php'));
    } elseif (is_single() && in_category('case')) {
        return locate_template(array('single-case.php'));
    }
    return $template;
}
add_filter('single_template', 'custom_load_single_template');


//Lazy BlocksのText Areaの出力に改行を入れる
function my_custom_lazyblock_handlebars_helper ( $handlebars )
{
    //  {{{nl2br hoge}}}
    $handlebars->registerHelper('nl2br', function ($data) {
        return nl2br($data);
    });
}
add_action( 'lzb_handlebars_object', 'my_custom_lazyblock_handlebars_helper' );











