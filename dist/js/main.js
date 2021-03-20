"use strict";

window.addEventListener("load", function () {
  // HeroSlider(引数: element, speed, delay)
  // const hero = new HeroSlider('.swiper-container', 2000, 4000);
  // hero.start();
  new HamburgerButton('.js-button-hamburger');
  new FormLabelFloat('.js-input');
});
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/*********************************** 
  Swiper
************************************/
var HeroSlider = /*#__PURE__*/function () {
  function HeroSlider(element, speed, delay) {
    _classCallCheck(this, HeroSlider);

    this.element = element;
    this.speed = speed;
    this.delay = delay;
    this.swiper = this._initSwiper();
  }

  _createClass(HeroSlider, [{
    key: "_initSwiper",
    value: function _initSwiper() {
      return new Swiper(this.element, {
        //Optional parameters
        loop: true,
        effect: "fade",
        speed: this.speed
      });
    }
  }, {
    key: "start",
    value: function start() {
      this.swiper.params.autoplay = {
        delay: this.delay,
        disableOnInteraction: false
      };
      this.swiper.autoplay.start();
    }
  }]);

  return HeroSlider;
}();
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/*********************************** 
  HamburgerButton
************************************/
var HamburgerButton = /*#__PURE__*/function () {
  function HamburgerButton(element) {
    _classCallCheck(this, HamburgerButton);

    this.element = element;
    this.trigger = document.querySelector(this.element);
    this.target = document.querySelector('body');

    this._addEvent();
  }

  _createClass(HamburgerButton, [{
    key: "_toggleClass",
    value: function _toggleClass() {
      this.target.classList.toggle('is-active-drawer');
    }
  }, {
    key: "_getAttr",
    value: function _getAttr() {
      this.attr = this.trigger.getAttribute('aria-expanded');
    }
  }, {
    key: "_trueAttr",
    value: function _trueAttr() {
      this.trigger.setAttribute('aria-expanded', 'true');
    }
  }, {
    key: "_falseAttr",
    value: function _falseAttr() {
      this.trigger.setAttribute('aria-expanded', 'false');
    }
  }, {
    key: "_addEvent",
    value: function _addEvent() {
      var _this = this;

      if (this.trigger) {
        this.trigger.addEventListener('click', function () {
          _this._toggleClass();

          _this._getAttr();

          if (_this.attr === 'false') {
            _this._trueAttr();
          } else {
            _this._falseAttr();
          }
        });
      }
    }
  }]);

  return HamburgerButton;
}();
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/*********************************** 
  FormLabelFloat
************************************/
var FormLabelFloat = /*#__PURE__*/function () {
  function FormLabelFloat(element) {
    _classCallCheck(this, FormLabelFloat);

    this.element = element;
    this.trigger = document.querySelectorAll(this.element);

    this._addEvent();
  }

  _createClass(FormLabelFloat, [{
    key: "_addEvent",
    value: function _addEvent() {
      var _this = this;

      if (this.trigger) {
        this.trigger.forEach(function (value) {
          value.addEventListener('focus', function () {
            _this.parent = value.parentNode;

            _this.parent.classList.add('is-float');
          });
          value.addEventListener('blur', function () {
            _this.parent.classList.remove('is-float');
          });
        });
      }
    }
  }]);

  return FormLabelFloat;
}();