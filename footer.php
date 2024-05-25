<?php
/**
 * フッターテンプレート
 */
?>
<footer id="footer" class="footer site-footer">

<!--====================================================

  所在地

=====================================================-->

<section class="address">
	<h2 class="top_h2">アクセス</h2>
	<div class="address_inner">
	<ul class="address_list">
	<!--本社-->	
	<li class="address_list_li koriyama">	
		<dl class="address_dl">
			<dt>本社</dt>
			<dd>
				<p>〒964-0313<br>福島県二本松市小浜字鳥居町27-3</p>
				<ul class="address_dl_list">
					<li>
						<dl class="address_tel">
							<dt>TEL：</dt>
							<dd>0243-55-2255</dd>
						</dl>
					</li>
					<li>
						<dl class="address_fax">
							<dt>FAX：</dt>
							<dd>0243-55-2589</dd>
						</dl>
					</li>
				</ul>
			</dd>
		</dl>
	</li>
	<!--本社ここまで-->	


	<!--工場-->	
	<li class="address_list_li koriyama">	
		<dl class="address_dl">
			<dt>工場</dt>
			<dd>
				<p>〒964-0315<br>福島県二本松市成田字柏崎214</p>
				<ul class="address_dl_list">
					<li>
						<dl class="address_tel">
							<dt>TEL：</dt>
							<dd>0243-55-2626</dd>
						</dl>
					</li>
					<li>
						<dl class="address_fax">
							<dt>FAX：</dt>
							<dd>0243-55-2585</dd>
						</dl>
					</li>
				</ul>
			</dd>
		</dl>
	</li>
	<!--工場ここまで-->	


	<!--郡山営業所-->	
	<li class="address_list_li koriyama">	
		<dl class="address_dl">
			<dt>郡山営業所</dt>
			<dd>
				<p>〒963-0725<br>福島県郡山市田村町金屋字川久保53-1</p>
				<ul class="address_dl_list">
					<li>
						<dl class="address_tel">
							<dt>TEL：</dt>
							<dd>024-983-9003</dd>
						</dl>
					</li>
					<li>
						<dl class="address_fax">
							<dt>FAX：</dt>
							<dd>024-953-6313</dd>
						</dl>
					</li>
				</ul>
			</dd>
		</dl>
	</li>
	<!--郡山営業所ここまで-->	


	<!--福島営業所-->	
	<li class="address_list_li koriyama">	
		<dl class="address_dl">
			<dt>福島営業所</dt>
			<dd>
				<p>〒960-8164<br>福島県福島市八木田字神明52-1</p>
				<ul class="address_dl_list">
					<li>
						<dl class="address_tel">
							<dt>TEL：</dt>
							<dd>024-546-2436</dd>
						</dl>
					</li>
					<li>
						<dl class="address_fax">
							<dt>FAX：</dt>
							<dd>024-546-2441</dd>
						</dl>
					</li>
				</ul>
			</dd>
		</dl>
	</li>
	<!--福島営業所ここまで-->


	<!--東京事務所-->	
	<li class="address_list_li koriyama">	
		<dl class="address_dl">
			<dt>東京事務所</dt>
			<dd>
				<p>〒170-0005<br>東京都豊島区南大塚1-60-20 天翔大塚駅前ビルS916</p>
				<!--<ul class="address_dl_list">
					<li>
						<dl class="address_tel">
							<dt>TEL：</dt>
							<dd>024-546-2436</dd>
						</dl>
					</li>
					<li>
						<dl class="address_fax">
							<dt>FAX：</dt>
							<dd>024-546-2441</dd>
						</dl>
					</li>
				</ul>-->
			</dd>
		</dl>
	</li>
	<!--東京営業所ここまで-->
	</ul>
	</div>
</section>

<!--====================================================

　所在地ここまで　END

=====================================================-->

<div class="footer_main">
<div class="footer_content">
	<div class="footer_logo">
		<a href="<?php echo esc_url(home_url() ); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="株式会社マルサン">
		</a>
	</div>

	<!--ナビゲーション表示-->
	<div class="footerNav">
		<div class="footerNav_l">
		<?php 
			wp_nav_menu( array(
				'theme_location' => 'footer-nav',
				'container' => 'nav',
				'menu_class' => 'footer-nav__menu'
			) );
		?>
		</div>

		<ul class="footerNav_r_list">
			<li><a href="<?php echo home_url('/'); ?>security">情報セキュリティ基本方針</a></li>
			<li><a href="<?php echo home_url('/'); ?>privacy-policy">個人情報の取扱い</a></li>
			<li><p class="copyright">&copy;2024 Marusan Co., Ltd. All Rights Reserved.</p></li>
		</ul>
	</div>
</div>
</div>
</footer>

<!-- GoogleMap API -->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIYTWMK4fwVb0dmmp4LBDb8SQVAOsXyJ4&callback=initMap" async defer></script>-->
<?php wp_footer(); ?>


</body>
</html>
