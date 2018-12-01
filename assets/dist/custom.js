"use strict";

(function ($) {
  new Canvi({
    content: '.js-canvi-content',
    navbar: '.js-canvi-navbar--right',
    openButton: '.js-canvi-open-button--right',
    position: 'right',
    pushContent: false,
    isDebug: false,
    speed: '0.2s',
    width: '70vw',
    responsiveWidths: [{
      breakpoint: '600px',
      width: '340px'
    }]
  });

  if ($('.site-header[data-sticky="true"]').length) {
    $('.site-header[data-sticky="true"]').headroom({
      offset: 100
    });
    $(window).scroll(function () {
      if (0 < $(window).scrollTop()) {
        $('.site-header[data-sticky="true"]').addClass('is-scroll');
      } else if (0 >= $(window).scrollTop()) {
        $('.site-header[data-sticky="true"]').removeClass('is-scroll');
      }
    });
  }

  if ($('body[data-scroll-top="true"]').length) {
    var scrollToTop = function scrollToTop() {
      if (1000 < $(window).scrollTop()) {
        $('.scroll-to-top').addClass('is-visible');
      } else if (1000 >= $(window).scrollTop()) {
        $('.scroll-to-top').removeClass('is-visible');
      }
    };

    $('body[data-scroll-top="true"]').find('.scroll-to-top').click(function () {
      $('html, body').animate({
        scrollTop: 0
      }, 'slow');
      return false;
    });
    $(window).scroll(function () {
      scrollToTop();
    });
    scrollToTop();
  }

  $('.site-header__search').on('click', function () {
    var searchForm = $('.top-search-form'),
        header = $('.site-header');
    searchForm.addClass('is-open');
    header.addClass('is-search-open');
    setTimeout(function () {
      searchForm.find('input').focus();
    }, 200);
  });
  $('.top-search-form__close').on('click', function (e) {
    e.preventDefault();
    var searchForm = $('.top-search-form'),
        header = $('.site-header');
    searchForm.removeClass('is-open');
    header.removeClass('is-search-open');
    searchForm.find('input').blur();
  });

  if ($('body[data-magnific="true"]').length) {
    $('a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]').each(function () {
      if (0 == $(this).parents('.gallery').length) {
        $(this).magnificPopup({
          type: 'image',
          mainClass: 'mfp-with-zoom'
        });
      }
    });
    $('.gallery, .wp-block-gallery').each(function () {
      $(this).magnificPopup({
        delegate: 'a',
        type: 'image',
        mainClass: 'mfp-with-zoom',
        removalDelay: 250,
        gallery: {
          enabled: true
        },
        callbacks: {
          beforeOpen: function beforeOpen() {
            this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
          }
        }
      });
    });
  }

  if ($('body[data-highlight-js="true"]').length) {
    $('.wp-block-code code').each(function (i, block) {
      hljs.highlightBlock(block);
    });
  }
})(jQuery);
"use strict";

/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
(function () {
  var isIe = /(trident|msie)/i.test(navigator.userAgent);

  if (isIe && document.getElementById && window.addEventListener) {
    window.addEventListener('hashchange', function () {
      var id = location.hash.substring(1),
          element;

      if (!/^[A-z0-9_-]+$/.test(id)) {
        return;
      }

      element = document.getElementById(id);

      if (element) {
        if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
          element.tabIndex = -1;
        }

        element.focus();
      }
    }, false);
  }
})();
"use strict";

(function ($) {
  if ($('.slider-posts').length) {
    $('.slider-posts').slick({
      arrows: false,
      centerMode: true,
      centerPadding: '0',
      mobileFirst: true,
      slidesToShow: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 1000,
      variableWidth: true
    }).click(function (e) {
      if (e.pageX < $(window).width() * (1 / 5)) {
        $(this).slick('slickPrev');
      } else if (e.pageX > $(window).width() * (4 / 5)) {
        $(this).slick('slickNext');
      }
    });
  }
})(jQuery);