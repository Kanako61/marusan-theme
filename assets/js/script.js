/*===============================================================

	ハンバーガーメニュー

===============================================================*/
  $(".hamburger_button").click(function () {
    $(this).toggleClass('active');
    $('.l-site_header').toggleClass('active');
});

/*---------------------------------------------------------------
ローミング
---------------------------------------------------------------*/
/*const loadingAreaGrey = document.querySelector('#loading');
const loadingAreaGreen = document.querySelector('#loading-screen');
const loadingText = document.querySelector('#loading p');

window.addEventListener('load',() => {
  //ローディング中(グレースクリーン)
  loadingAreaGrey.animate(
    {
      opacity:[1,0],
      visibility:'hidden',
    },
    {
      duration:1000,
      delay:1200,
      easing:'ease',
      fill:'forwards',
    }
  );

    //ローディング中(薄緑スクリーン)
    loadingAreaGreen.animate(
      {
        translate:['0 100vh', '0 0', '0 -100vh']
      },
      {
        duration:2000,
        delay:800,
        easing:'ease',
        fill:'forwards',
      }
    );

    //ローディング中(テキスト)
    loadingText.animate(
      [
        {
          opacity: 1,
          offset: .8 //80%
        },
        {
          opacity:0,
          offset: 1 //100%
        },
      ],
      {
        duration:1200,
        easing:'ease',
        fill:'forwards',
      }
    );
});*/


/*---------------------------------------------------------------
	事業内容スライド
---------------------------------------------------------------*/

(function() {
  const thumb = document.querySelectorAll('.precut_list .thumb-media');
  
  const switchThumb = (index) => {
    document.querySelector('.precut_list .thumb-media-active').classList.remove('thumb-media-active');
    thumb[index].classList.add('thumb-media-active');
  }
  
  const mySwiper = new Swiper('.precut_list .swiper', {
    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },
    speed: 500,
    navigation: {
      nextEl: '.precut_list .swiper-button-next',
      prevEl: '.precut_list .swiper-button-prev',
    },
    on: {
      afterInit: (swiper) => {
        thumb[swiper.realIndex].classList.add('thumb-media-active');
        for (let i = 0; i < thumb.length; i++) {
          thumb[i].onclick = () => {
            swiper.slideTo(i);
          };
        }
      },
      slideChange: (swiper) => {
        switchThumb(swiper.realIndex);
      },
    }
  });
  }());


/*---------------------------------------------------------------
	背景パララックス
---------------------------------------------------------------*/

/*背景画像のパララックス*/

/*
// セレクタ ".js-trigger" で要素を取得
const items = gsap.utils.toArray(".js-trigger");

// 各要素に対してアニメーションを設定
items.forEach((item) => {
  gsap.fromTo(
    item.querySelector("img"), // アニメーションを適用する画像要素を取得
    {
      yPercent: 0, // パララックス前の要素の位置
    },
    {
      yPercent: -30, // 上に要素の幅の1/5分移動
      ease: "none", // イージングなし
      scrollTrigger: {
        trigger: item, // アニメーションのトリガー要素
        start: "top bottom", // アニメーション開始位置
        end: "bottom top", // アニメーション終了位置
        scrub: 1, // 動作を遅らせる
      },
    }
  );
});

*/

/*===============================================================

	固定ページ

===============================================================*/

/*---------------------------------------------------------------
	よくある質問　ドロップダウン
---------------------------------------------------------------*/
$(document).ready(function(){
  $(".question").on("click", function() {
    $(this).next().slideToggle(200);
    $(this).toggleClass("active");
  });
});


/*---------------------------------------------------------------
	table スクロールヒント
---------------------------------------------------------------*/
window.addEventListener('DOMContentLoaded', function() {
  new ScrollHint('.js-scrollable', {
      i18n: {
          scrollable: 'スクロールできます'
      }
  });
});


/*---------------------------------------------------------------
	スクロールフェードイン
---------------------------------------------------------------*/
// スクロールで要素を表示
const animateFade = (entries, obs) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.animate(
        {
          opacity:[0, 1],
          //filter:['blur(.4rem)', 'blur(0)'],
          translate:['0 4rem', 0],
        },
        {
          duration:2000,
          easing:'ease',
          fill:'forwards',
        },
      );

      obs.unobserve(entry.target);
    }
  });
};

//　監視設定
const fadeObserver = new IntersectionObserver(animateFade);

const fadeElements = document.querySelectorAll('.fadein');
fadeElements.forEach((fadeElement) => {
  fadeObserver.observe(fadeElement);
});



/*---------------------------------------------------------------
	動画ポップアップ
---------------------------------------------------------------*/
$('.movie_btn').modalVideo({
  channel: 'custom',
  url: $('#l-body').attr('data-tmpdir') + 'assets/images/top/marusan.mp4'
});


/*---------------------------------------------------------------
	サイドバー追従
---------------------------------------------------------------*/
const sidebar = new StickySidebar('.sidebar', {
  containerSelector: '.precut-box',
  innerWrapperSelector: '.sidebar-inner',
  topSpacing: 60,
  bottomSpacing: 0
});

const areas = document.querySelectorAll('.js-index__area');
const options = {
  root: null,
  rootMargin: '-50% 0px',
  threshold: 0
};
const observer = new IntersectionObserver(doWhenIntersect, options);
areas.forEach(area => {
  observer.observe(area);
});
/**
* 交差したときに呼びだす関数
* @param entries
*/
function doWhenIntersect(entries) {
  entries.forEach(entry => {
      if (entry.isIntersecting) {
          activateIndex(entry.target);
      }
  });
}
/**
* 目次の色を変える関数
* @param element
*/
function activateIndex(element) {
  const currentActiveIndex = document.querySelector('#js-index__list .is-active');
  if(currentActiveIndex !== null) {
      currentActiveIndex.classList.remove('is-active');
  }
  const newActiveIndex = document.querySelector(`a[href='#${element.id}']`);
  newActiveIndex.classList.add('is-active');
}



























