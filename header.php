<?php
/**
 * ヘッダーテンプレート
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>

	<!--Googleフォント-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique:wght@400;500&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?> id="l-body" data-tmpdir="<?php echo esc_url(get_template_directory_uri()); ?>/">
	<?php wp_body_open(); ?>

	<header class="l-site_header">
		<?php if ( is_home() || is_front_page() ) : ?>
		<!--トップページのみ-->
		<div class="logo">
			<a href="<?php echo esc_url(home_url() ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-white.png" alt="<?php bloginfo('name'); ?>">
			</a>
		</div>
		<?php else : ?>
		<!--トップページそれ以外-->
		<div class="logo">
			<a href="<?php echo esc_url(home_url() ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-black.png" alt="<?php bloginfo('name'); ?>">
			</a>
		</div>
		<?php endif; ?>

		<!--ハンバーガーボタン-->
		<div class="hamburger_button">
			<span class="hamburger_button_item"></span>
			<span class="hamburger_button_item"></span>
		</div>

		<!--ナビゲーション表示-->
		<?php 
			wp_nav_menu( array(
				'theme_location' => 'global',
				'container' => 'nav',
				'menu_class' => 'global-nav__menu'
			) );
		?>
	</header>