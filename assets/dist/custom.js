"use strict";

(function ($) {
  /*new Canvi({
  	content: '.js-canvi-content',
  	navbar: '.js-canvi-navbar--right',
  	openButton: '.js-canvi-open-button--right',
  	position: 'right',
  	pushContent: false,
  	isDebug: false,
  	speed: '0.2s',
  	width: '70vw',
  	responsiveWidths: [
  		{
  			breakpoint: '600px',
  			width: '340px'
  		}
  	]
  });*/
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