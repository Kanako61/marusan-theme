/*---------------------------------------------------------------
メインビジュアル
---------------------------------------------------------------*/
/*画像設定*/

var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
/*if (windowwidth > 768){*/
    var responsiveImage = [ // PC用の画像
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image01.jpg' },
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image02.jpg' },
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image03.jpg' },
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image04.jpg' },
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image05.jpg' },
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image06.jpg' },
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image07.jpg' }
    ];
/*} else {
    var responsiveImage = [ // タブレットサイズ（768px）以下用の画像
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image01_sp.jpg' },
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image02_sp.jpg' },
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image03_sp.jpg' },
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image04_sp.jpg' },
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image05_sp.jpg' },
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image06_sp.jpg' },
        { src: $('#l-body').attr('data-tmpdir') + 'assets/images/top/main_image07_sp.jpg' }
    ];
}*/

// 配列をランダムにシャッフルする関数
function shuffleArray(array) {
    for (var i = array.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = array[i];
        array[i] = array[j];
        array[j] = temp;
    }
}

// responsiveImage配列をシャッフル
shuffleArray(responsiveImage);

// Vegas全体の設定
$('#slider').vegas({
    overlay: true, 
    transition: 'fade2',
    transitionDuration: 2000,
    delay: 5000,
    animationDuration: 20000,
    animation: 'random',
    slides: responsiveImage,
    // timer:false // プログレスバーを非表示したい場合はこのコメントアウトを外す
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