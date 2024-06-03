/*===============================================================

	グロナビ

===============================================================*/

//ハンバーガーメニュー
$(".hamburger_button").click(function () {
    $(this).toggleClass('active');
    $('.l-site_header').toggleClass('active');
});


// PCサイズでのみhoverイベントを有効にする
if (window.innerWidth > 900) {
  $('.menu-item-object-page').hover(
      function() {
          $(this).addClass('active');
          $(this).find('.sub-menu').addClass('active');
      },
      function() {
          $(this).removeClass('active');
          $(this).find('.sub-menu').removeClass('active');
      }
  );
}

// ハンバーガーメニュー内のリンククリック時にメニューを閉じる
const menuLinks = document.querySelectorAll('.global-nav__menu a');
menuLinks.forEach(link => {
  link.addEventListener('click', () => {
    if (window.innerWidth <= 900) { // モバイル表示の時だけ動作
      $('.hamburger_button').removeClass('active');
      $('.l-site_header').removeClass('active');
    }
  });
});


//要素追加
jQuery(document).ready(function($) {
  // 900px以下の場合のみ実行
  if ($(window).width() <= 900) {
      $('.menu-item-has-children').prepend('<span class="plus"></span>');
  }

  if ($(window).width() <= 900) {
    $('.menu-item-has-children .plus').click(function() {
        $(this).parent('.menu-item-has-children').toggleClass('active');
    });
  }
});


/*---------------------------------------------------------------
	動画ポップアップ
---------------------------------------------------------------*/
$('.movie_btn').modalVideo({
  channel: 'custom',
  url: $('#l-body').attr('data-tmpdir') + 'assets/images/top/marusan.mp4'
});

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
	採用ページタブ切り替え
---------------------------------------------------------------*/

/*document.addEventListener('DOMContentLoaded', function () {
  const tabs = document.querySelectorAll('.tab');
  const contents = document.querySelectorAll('.pageRecruit_content');

  function activateTab(index) {
    // すべてのタブとコンテンツからクラスを削除
    tabs.forEach(tab => tab.classList.remove('is-active'));
    contents.forEach(content => {
      content.classList.remove('is-display');
      content.style.display = 'none'; // displayをnoneに設定
    });

    // 指定されたタブとコンテンツにクラスを追加
    if (tabs[index]) {
      tabs[index].classList.add('is-active');
    }
    if (contents[index]) {
      contents[index].style.display = 'block'; // displayをblockに設定
      setTimeout(() => {
        contents[index].classList.add('is-display');
      }, 0); // 少し遅らせてクラスを追加
    }
  }

  // 各タブにクリックイベントを追加
  tabs.forEach((tab, index) => {
    tab.addEventListener('click', (event) => {
      event.preventDefault(); // デフォルトの動作をキャンセル
      activateTab(index);
    });
  });

  // ボタンのクリックイベントを設定する関数
  function addClickListener(buttonClass, tabIndex) {
    const buttons = document.querySelectorAll(buttonClass);
    if (buttons) {
      buttons.forEach(button => {
        button.addEventListener('click', (event) => {
          event.preventDefault(); // デフォルトの動作をキャンセル
          activateTab(tabIndex);
        });
      });
    }
  }

  // 各ボタンにイベントリスナーを追加
  addClickListener('.other_btn_01', 0);
  addClickListener('.other_btn_02', 1);
  addClickListener('.other_btn_03', 2);

  // ページ内リンクのクリックイベントを調整
  const pageLinks = document.querySelectorAll('a[href*="#"]');
  pageLinks.forEach(link => {
    link.addEventListener('click', (event) => {
      const target = document.querySelector(link.getAttribute('href'));
      if (target && !target.classList.contains('tab-03')) { // tab-03 の場合はスクロールしない
        event.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
});*/


document.addEventListener('DOMContentLoaded', function () {
  const tabs = document.querySelectorAll('.tab');
  const contents = document.querySelectorAll('.pageRecruit_content');

  function activateTab(index, scroll = false) {
    // すべてのタブからクラスを削除
    tabs.forEach(tab => tab.classList.remove('is-active'));
    // すべてのコンテンツからクラスを削除
    contents.forEach(content => {
      if (content.classList.contains('is-display')) {
        content.classList.remove('is-display');
        setTimeout(() => {
          content.classList.remove('is-active');
        }, 500); // 0.5秒後に非表示にする
      }
    });

    // 指定されたタブとコンテンツにクラスを追加
    if (tabs[index]) {
      tabs[index].classList.add('is-active');
    }
    if (contents[index]) {
      if (index === 0 || index === 1 || index === 2) { // tab-01, tab-02, tab-03 の場合のみフェード切り替えのアニメーションを適用
        contents[index].classList.add('is-active');
        setTimeout(() => {
          contents[index].classList.add('is-display');
          if (scroll) {
            contents[index].scrollIntoView({ behavior: 'smooth' });
          }
        }, 10); // 微小な遅延を入れる
      } else {
        // tab-01, tab-02, tab-03 以外の場合はフェード切り替えのアニメーションを適用しない
        contents[index].classList.add('is-active');
        contents[index].classList.add('is-display');
        if (scroll) {
          contents[index].scrollIntoView({ behavior: 'smooth' });
        }
      }
    }
  }

  // 各タブにクリックイベントを追加
  tabs.forEach((tab, index) => {
    tab.addEventListener('click', (event) => {
      event.preventDefault(); // デフォルトの動作をキャンセル
      activateTab(index);
    });
  });

  // ボタンのクリックイベントを設定する関数
  function addClickListener(buttonClass, tabIndex) {
    const buttons = document.querySelectorAll(buttonClass);
    if (buttons) {
      buttons.forEach(button => {
        button.addEventListener('click', (event) => {
          event.preventDefault(); // デフォルトの動作をキャンセル
          activateTab(tabIndex, true);
        });
      });
    }
  }

  // 各ボタンにイベントリスナーを追加
  addClickListener('.other_btn_01', 0); // .other_btn_01ボタンは最初のタブ（インデックス0）をアクティブにする
  addClickListener('.other_btn_02', 1); // .other_btn_02ボタンは2番目のタブ（インデックス1）をアクティブにする
  addClickListener('.other_btn_03', 2); // .other_btn_03ボタンは3番目のタブ（インデックス2）をアクティブにする

  // ページ内リンクのクリックイベントを調整
  const pageLinks = document.querySelectorAll('a[href*="#"]');
  pageLinks.forEach(link => {
    link.addEventListener('click', (event) => {
      const target = document.querySelector(link.getAttribute('href'));
      if (target && !target.classList.contains('tab-03')) { // tab-03 の場合はスクロールしない
        event.preventDefault();
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
});



/*---------------------------------------------------------------
	事業内容スライド
---------------------------------------------------------------*/

(function() {
  const thumb = document.querySelectorAll('.precut_list .thumb-media');
  
  const switchThumb = (index) => {
    document.querySelector('.precut_list .thumb-media-active')?.classList.remove('thumb-media-active'); // Nullish coalescing operatorを使用して修正
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
        const urlParams = new URLSearchParams(window.location.search);
        const slideIndex = urlParams.get('slide');
        if (slideIndex !== null) {
          swiper.slideTo(Number(slideIndex));
        }
        thumb[swiper.realIndex].classList.add('thumb-media-active');
        for (let i = 0; i < thumb.length; i++) {
          thumb[i].onclick = () => {
            swiper.slideTo(i);
            switchThumb(i);
          };
        }
      },
      slideChange: (swiper) => {
        switchThumb(swiper.realIndex);
      },
    }
  });

  // Navigation text click event listeners
  const nav1 = document.querySelector('.nav1');
  const nav2 = document.querySelector('.nav2');
  const nav3 = document.querySelector('.nav3');
  const nav4 = document.querySelector('.nav4');

  nav1.onclick = () => {
    mySwiper.slideTo(0);
    switchThumb(0);
  };
  nav2.onclick = () => {
    mySwiper.slideTo(1);
    switchThumb(1);
  };
  nav3.onclick = () => {
    mySwiper.slideTo(2);
    switchThumb(2);
  };
  nav4.onclick = () => {
    mySwiper.slideTo(3);
    switchThumb(3);
  };

  // Scroll to element with ID from hash with offset
  const scrollToHashElement = () => {
    const hash = window.location.hash;
    if (hash) {
      const element = document.querySelector(hash);
      if (element) {
        const yOffset = -80; // Adjust the offset value as needed
        const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
        window.scrollTo({ top: y, behavior: 'smooth' });
      }
    }
  }

  // Handle initial load with hash in URL
  window.addEventListener('load', scrollToHashElement);

  // Handle hash change in URL
  window.addEventListener('hashchange', scrollToHashElement);
}())


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





























