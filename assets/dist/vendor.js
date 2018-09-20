"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Canvi =
/*#__PURE__*/
function () {
  function Canvi() {
    var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

    _classCallCheck(this, Canvi);

    this.options = Object.assign({
      speed: '0.3s',
      width: '300px',
      isDebug: false,
      position: 'left',
      pushContent: true,
      navbar: '.canvi-navbar',
      content: '.canvi-content',
      openButton: '.canvi-open-button'
    }, options);
    this.isOpen = false;
    this.body = document.querySelector('body');
    this.transitionEvent = this._whichTransitionEvent();
    this.navbar = document.querySelector(this.options.navbar);
    this.content = document.querySelector(this.options.content);
    this.openButton = document.querySelector(this.options.openButton);
    this.init();
  }

  _createClass(Canvi, [{
    key: "init",
    value: function init() {
      if (this.options.isDebug) {
        console.log('%c %s', 'color: #e01a51; font-style: italic;', 'CANVI: Init is running...');

        this._objectLog();
      }

      this._buildMarkup();

      this._initializeMainEvents();

      this._triggerCanviEvent('canvi.init');

      this.navbar.setAttribute('inert', '');
      this.navbar.setAttribute('aria-hidden', 'true');
    }
  }, {
    key: "open",
    value: function open() {
      var _this = this;

      if (this.isOpen) {
        return;
      }

      if (this.options.isDebug) {
        console.log('%c %s', 'color: #e01a51; font-style: italic;', 'CANVI: Open is running...');
      }

      this._triggerCanviEvent('canvi.before-open');

      this._buildOverlay();

      this._setZindex();

      this.content.classList.add('is-canvi-open');
      this.body.classList.add('is-canvi-open');
      this.navbar.classList.add('is-canvi-open');

      this._responsiveWidth();

      (this.options.pushContent ? this.content : this.navbar).addEventListener(this.transitionEvent, function (event) {
        return _this._transtionOpenEnd(event);
      });
      this.navbar.removeAttribute('inert');
      this.navbar.removeAttribute('aria-hidden');
      this.isOpen = true;
    }
  }, {
    key: "close",
    value: function close() {
      var _this2 = this;

      if (!this.isOpen) {
        return;
      }

      if (this.options.isDebug) {
        console.log('%c %s', 'color: #e01a51; font-style: italic;', 'CANVI: Close is running...');
      }

      this._triggerCanviEvent('canvi.before-close');

      this.overlay.classList.add('canvi-animate-out');
      this.content.style.transform = 'translateX(0)';
      this.body.classList.remove('is-canvi-open');
      this.navbar.classList.remove('is-canvi-open');
      (this.options.pushContent ? this.content : this.navbar).addEventListener(this.transitionEvent, function (event) {
        return _this2._transitionCloseEnd(event);
      });
      this.navbar.setAttribute('inert', '');
      this.navbar.setAttribute('aria-hidden', 'true');
      this.isOpen = false;
    }
  }, {
    key: "toggle",
    value: function toggle() {
      if (this.options.isDebug) {
        console.log('%c %s', 'color: #e01a51; font-style: italic;', 'CANVI: Toggle is running...');
      }

      this.isOpen ? this.close() : this.open();
    }
  }, {
    key: "_buildMarkup",
    value: function _buildMarkup() {
      if (this.options.isDebug) {
        console.log('%c %s', 'color: #ccc; font-style: italic;', 'CANVI: Build markup...');
      }

      if (this.options.position) {
        this.navbar.setAttribute('data-position', this.options.position);
        this.navbar.setAttribute('data-push-content', this.options.pushContent);
      }

      this.navbar.style.width = this.options.width;
      this.body.classList.add('is-canvi-ready');
    }
  }, {
    key: "_responsiveWidth",
    value: function _responsiveWidth() {
      var _this3 = this;

      if (this.navbar.classList.contains('is-canvi-open') && window.matchMedia('(min-width: 0px)').matches) {
        this.navbar.style.width = this.options.width;

        this._responsiveWidthHelper(this.options.width);
      }

      if (this.navbar.classList.contains('is-canvi-open') && Array.isArray(this.options.responsiveWidths) && this.options.responsiveWidths.length > -1) {
        this.options.responsiveWidths.forEach(function (element) {
          if (window.matchMedia("(min-width: ".concat(element.breakpoint, ")")).matches) {
            _this3.navbar.style.width = element.width;

            _this3._responsiveWidthHelper(element.width);
          }
        });
      }
    }
  }, {
    key: "_responsiveWidthHelper",
    value: function _responsiveWidthHelper(width) {
      if (this.options.pushContent) {
        this.content.style.transform = this.options.position === 'left' ? "translateX(".concat(width, ")") : "translateX(-".concat(width, ")");
      }
    }
  }, {
    key: "_buildOverlay",
    value: function _buildOverlay() {
      var _this4 = this;

      if (this.options.isDebug) {
        console.log('%c %s', 'color: #32da94; font-style: italic;', 'CANVI: Build overlay...');
      }

      if (!this.content.querySelector('.canvi-overlay')) {
        console.log('create canvi overlay');
        this.overlay = document.createElement('div');
        this.overlay.className = 'canvi-overlay';
        this.content.appendChild(this.overlay);
      }

      this.overlay.addEventListener('click', function () {
        return _this4.close();
      });

      this._setTransitionSpeed();
    }
  }, {
    key: "_removeOverlay",
    value: function _removeOverlay() {
      var _this5 = this;

      if (this.options.isDebug) {
        console.log('%c %s', 'color: #32da94; font-style: italic;', 'CANVI: Remove overlay...');
      }

      if (this.overlay) {
        this.content.removeChild(this.overlay);
        this.overlay.removeEventListener('click', function () {
          return _this5.open();
        });
      }
    }
  }, {
    key: "_initializeMainEvents",
    value: function _initializeMainEvents() {
      var _this6 = this;

      if (this.options.isDebug) {
        console.log('%c %s', 'color: #ccc; font-style: italic;', 'CANVI: Init main events...');
        console.log('%c %s', 'color: #999; font-style: italic;', '---------');
      }

      this.body.addEventListener('keyup', function (e) {
        if (_this6.isOpen && e.keyCode == 27) {
          _this6.close();
        }
      });

      if (this.openButton) {
        this.openButton.addEventListener('click', function () {
          return _this6.open();
        });
      }

      window.addEventListener('resize', function () {
        return _this6._responsiveWidth();
      });
    }
  }, {
    key: "_transtionOpenEnd",
    value: function _transtionOpenEnd(event) {
      var _this7 = this;

      if (!this.isOpen || event.propertyName !== 'transform') {
        return;
      }

      if (this.options.isDebug) {
        console.log('%c %s', 'color: #ff7600; font-style: italic;', 'CANVI: Open transition end...');
        console.log('%c %s', 'color: #999; font-style: italic;', '---------');
      }

      this._triggerCanviEvent('canvi.after-open');

      (this.options.pushContent ? this.content : this.navbar).removeEventListener(this.transitionEvent, function (event) {
        return _this7._transtionOpenEnd(event);
      });
    }
  }, {
    key: "_transitionCloseEnd",
    value: function _transitionCloseEnd(event) {
      var _this8 = this;

      if (this.isOpen || event.propertyName !== 'transform') {
        return;
      }

      if (this.options.isDebug) {
        console.log('%c %s', 'color: #ff7600; font-style: italic;', 'CANVI: Close transition end...');
      }

      this._triggerCanviEvent('canvi.after-close');

      this._removeOverlay();

      this._resetZindex();

      (this.options.pushContent ? this.content : this.navbar).removeEventListener(this.transitionEvent, function (event) {
        return _this8._transitionCloseEnd(event);
      });
      this.content.classList.remove('is-canvi-open');
    }
  }, {
    key: "_setTransitionSpeed",
    value: function _setTransitionSpeed() {
      this.navbar.style.transitionDuration = this.options.speed;
      this.content.style.transitionDuration = this.options.speed;
      this.overlay.style.animationDuration = this.options.speed;
    }
  }, {
    key: "_setZindex",
    value: function _setZindex() {
      this.navbar.style.zIndex = this.options.pushContent ? 20 : 10;
      this.content.style.zIndex = this.options.pushContent ? 40 : 5;
    }
  }, {
    key: "_resetZindex",
    value: function _resetZindex() {
      this.navbar.style.zIndex = 1;
      this.content.style.zIndex = 5;
    }
  }, {
    key: "_whichTransitionEvent",
    value: function _whichTransitionEvent() {
      var el = document.createElement('fakeelement'),
          transitions = {
        'transition': 'transitionend',
        'OTransition': 'oTransitionEnd',
        'MozTransition': 'transitionend',
        'WebkitTransition': 'webkitTransitionEnd'
      };

      for (var t in transitions) {
        if (el.style[t] !== undefined) {
          return transitions[t];
        }
      }
    }
  }, {
    key: "_triggerCanviEvent",
    value: function _triggerCanviEvent(name) {
      this.body.dispatchEvent(new CustomEvent(name, {
        details: {
          navbar: this.navbar,
          openButton: this.openButton,
          content: this.content
        }
      }));
    }
  }, {
    key: "_objectLog",
    value: function _objectLog() {
      console.groupCollapsed('Canvi Object');
      console.log('Open Button: ', this.openButton);
      console.log('Navbar: ', this.navbar);
      console.log('Content: ', this.content);
      console.groupEnd();
    }
  }]);

  return Canvi;
}();