/*---------------------------------------------------------------
メインビジュアル
---------------------------------------------------------------*/
//画像の設定
var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
		//if (windowwidth > 768){
			var responsiveImage = [//PC用の画像
				{ src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image01.jpg'},
				{ src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image02.jpg'},
				{ src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image03.jpg'},
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image04.jpg'},
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image05.jpg'},
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image06.jpg'},
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image07.jpg'}
			];
		/*} else {
			var responsiveImage = [//タブレットサイズ（768px）以下用の画像
				{ src: './img/img_sp_01.jpg' },
				{ src: './img/img_sp_02.jpg' },
				{ src: './img/img_sp_03.jpg' }
			];
		}*/

//Vegas全体の設定
$('#slider').vegas({
		overlay: true,//画像の上に網線やドットのオーバーレイパターン画像を指定。
		transition: 'fade2',//切り替わりのアニメーション。fade、fade2、slideLeft、slideLeft2、slideRight、slideRight2、slideUp、slideUp2、slideDown、slideDown2、zoomIn、zoomIn2、zoomOut、zoomOut2、swirlLeft、swirlLeft2、swirlRight、swirlRight2、burnburn2、blurblur2、flash、flash2が設定可能。
		transitionDuration: 2000,//切り替わりのアニメーション時間をミリ秒単位で設定
		delay: 5000,//スライド間の遅延をミリ秒単位で。
		animationDuration: 20000,//スライドアニメーション時間をミリ秒単位で設定
		animation: 'random',//スライドアニメーションの種類。
		slides: responsiveImage,//画像設定を読む
		//timer:false,// プログレスバーを非表示したい場合はこのコメントアウトを外してください
	});


/*---------------------------------------------------------------
	建設資材・プレカットswiperスライド
---------------------------------------------------------------*/
const mySwiper = new Swiper('.card .swiper', {
  slidesPerView: 'auto',
  spaceBetween: 16,
  grabCursor: true,
  pagination: {
    el: '.card .swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.card .swiper-button-next',
    prevEl: '.card .swiper-button-prev',
  },
  breakpoints: {
    1025: {
      spaceBetween: 32,
    }
  },
});


/*---------------------------------------------------------------
	WorkFlow swiperスライド
---------------------------------------------------------------*/
let mySwiper_main;

const mySwiper_thumb = new Swiper('.mv03 .swiper-thumb', {
  slidesPerView: 6,
  spaceBetween: 8,
  direction: 'vertical',
  roundLengths: true,
  speed: 1000,
  grabCursor: true,
  slideToClickedSlide: true,
  breakpoints: {
    600: {
      spaceBetween: 8,
    },
    1025: {
      spaceBetween: 16,
    }
  },
  thumbs: {
    swiper: mySwiper_main,
  },
});

mySwiper_main = new Swiper('.mv03 .swiper-main', {
  direction: 'vertical',
  loop: true,
  loopAdditionalSlides: 1,
  speed: 2000,
  allowTouchMove: true,
  autoplay: {
    delay: 7000,
    disableOnInteraction: false,
    waitForTransition: false,
  },
  thumbs: {
    swiper: mySwiper_thumb,
  },
});



/*---------------------------------------------------------------
	スクロールでクラス追加
---------------------------------------------------------------*/
document.querySelectorAll(".className").forEach((el, index) => {
  ScrollTrigger.create({
    trigger: el,
    id: index + 1,
    start: '10% end',
    toggleClass: { targets: el, className: "classActive" },
    once: false,
    onLeaveBack: () => {
      // 画面外にスクロールしたときに実行されるコード
      el.classList.remove("classActive");
    },
  });
});


/*ロゴのアニメーション*/
$(function(){
  $(window).scroll(function() {
    // main_topにclassActiveがある場合
    if($('.main_top').hasClass('classActive')) {
      $('.l-site_header .logo a').children('img').attr('src', $('#l-body').attr('data-tmpdir') + 'assets/images/common/logo-black.png');
    } else {
      // classActiveがない場合はクラスを削除
      $('.l-site_header .logo a').children('img').attr('src', $('#l-body').attr('data-tmpdir') + 'assets/images/common/logo-white.png');
    }
  });
});