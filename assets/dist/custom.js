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
      if ($(window).scrollTop() > 0) {
        $('.site-header[data-sticky="true"]').addClass('is-scroll');
      } else if ($(window).scrollTop() <= 0) {
        $('.site-header[data-sticky="true"]').removeClass('is-scroll');
      }
    });
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