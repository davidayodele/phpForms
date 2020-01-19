<div class="clock"><!-- Adapted from Peter Butcher - https://github.com/pbutcher -->
  <div id="flipdown" class="flipdown"></div>
</div>


<style type="text/css">
	
/* THEMES */

/********** Theme: dark **********/
/* Font styles */
.flipdown.flipdown__theme-dark {
  font-family: sans-serif;
  font-weight: bold;
}
/* Rotor group headings */
.flipdown.flipdown__theme-dark .rotor-group-heading:before {
  color: #000000;
}
/* Delimeters */
.flipdown.flipdown__theme-dark .rotor-group:nth-child(n+2):nth-child(-n+3):before,
.flipdown.flipdown__theme-dark .rotor-group:nth-child(n+2):nth-child(-n+3):after {
  background-color: #151515;
}
/* Rotor tops */
.flipdown.flipdown__theme-dark .rotor,
.flipdown.flipdown__theme-dark .rotor-top,
.flipdown.flipdown__theme-dark .rotor-leaf-front {
  color: #FFFFFF;
  background-color: #151515;
}
/* Rotor bottoms */
.flipdown.flipdown__theme-dark .rotor-bottom,
.flipdown.flipdown__theme-dark .rotor-leaf-rear {
  color: #EFEFEF;
  background-color: #202020;
}
/* Hinge */
.flipdown.flipdown__theme-dark .rotor:after {
  border-top: solid 1px #151515;
}

/********** Theme: light **********/
/* Font styles */
.flipdown.flipdown__theme-light {
  font-family: sans-serif;
  font-weight: bold;
}
/* Rotor group headings */
.flipdown.flipdown__theme-light .rotor-group-heading:before {
  color: #EEEEEE;
}
/* Delimeters */
.flipdown.flipdown__theme-light .rotor-group:nth-child(n+2):nth-child(-n+3):before,
.flipdown.flipdown__theme-light .rotor-group:nth-child(n+2):nth-child(-n+3):after {
  background-color: #DDDDDD;
}
/* Rotor tops */
.flipdown.flipdown__theme-light .rotor,
.flipdown.flipdown__theme-light .rotor-top,
.flipdown.flipdown__theme-light .rotor-leaf-front {
  color: #222222;
  background-color: #DDDDDD;
}
/* Rotor bottoms */
.flipdown.flipdown__theme-light .rotor-bottom,
.flipdown.flipdown__theme-light .rotor-leaf-rear {
  color: #333333;
  background-color: #EEEEEE;
}
/* Hinge */
.flipdown.flipdown__theme-light .rotor:after {
  border-top: solid 1px #222222;
}

/* END OF THEMES */

.flipdown {
  overflow: visible;
  width: 510px;
  height: 110px;
}

.flipdown .rotor-group {
  position: relative;
  float: left;
  padding-right: 30px;
}

.flipdown .rotor-group:last-child {
  padding-right: 0;
}

.flipdown .rotor-group-heading:before {
  display: block;
  height: 30px;
  line-height: 30px;
  text-align: center;
}

.flipdown .rotor-group:nth-child(1) .rotor-group-heading:before {
  content: 'Days';
}

.flipdown .rotor-group:nth-child(2) .rotor-group-heading:before {
  content: 'Hours';
}

.flipdown .rotor-group:nth-child(3) .rotor-group-heading:before {
  content: 'Minutes';
}

.flipdown .rotor-group:nth-child(4) .rotor-group-heading:before {
  content: 'Seconds';
}

.flipdown .rotor-group:nth-child(n+2):nth-child(-n+3):before {
  content: '';
  position: absolute;
  bottom: 20px;
  left: 115px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
}

.flipdown .rotor-group:nth-child(n+2):nth-child(-n+3):after {
  content: '';
  position: absolute;
  bottom: 50px;
  left: 115px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
}

.flipdown .rotor {
  position: relative;
  float: left;
  width: 50px;
  height: 80px;
  margin: 0px 5px 0px 0px;
  border-radius: 4px;
  font-size: 4rem;
  text-align: center;
  perspective: 200px;
}

.flipdown .rotor:last-child {
  margin-right: 0;
}

.flipdown .rotor-top,
.flipdown .rotor-bottom {
  overflow: hidden;
  position: absolute;
  width: 50px;
  height: 40px;
}

.flipdown .rotor-leaf {
  z-index: 1;
  position: absolute;
  width: 50px;
  height: 80px;
  transform-style: preserve-3d;
  transition: transform 0s;
}

.flipdown .rotor-leaf.flipped {
  transform: rotateX(-180deg);
  transition: all 0.5s ease-in-out;
}

.flipdown .rotor-leaf-front,
.flipdown .rotor-leaf-rear {
  overflow: hidden;
  position: absolute;
  width: 50px;
  height: 40px;
  margin: 0;
  transform: rotateX(0deg);
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
}

.flipdown .rotor-leaf-front {
  line-height: 80px;
  border-radius: 4px 4px 0px 0px;
}

.flipdown .rotor-leaf-rear {
  line-height: 0px;
  border-radius: 0px 0px 4px 4px;
  transform: rotateX(-180deg);
}

.flipdown .rotor-top {
  line-height: 80px;
  border-radius: 4px 4px 0px 0px;
}

.flipdown .rotor-bottom {
  bottom: 0;
  line-height: 0px;
  border-radius: 0px 0px 4px 4px;
}

.flipdown .rotor:after {
  content: '';
  z-index: 2;
  position: absolute;
  bottom: 0px;
  left: 0px;
  width: 50px;
  height: 40px;
  border-radius: 0px 0px 4px 4px;
}

@media (max-width: 550px) {

  .flipdown {
    width: 312px;
    height: 70px;
  }

  .flipdown .rotor {
    font-size: 2.2rem;
    margin-right: 3px;
  }

  .flipdown .rotor,
  .flipdown .rotor-leaf,
  .flipdown .rotor-leaf-front,
  .flipdown .rotor-leaf-rear,
  .flipdown .rotor-top,
  .flipdown .rotor-bottom,
  .flipdown .rotor:after {
    width: 30px;
  }

  .flipdown .rotor-group {
    padding-right: 20px;
  }

  .flipdown .rotor-group:last-child {
    padding-right: 0px;
  }

  .flipdown .rotor-group-heading:before {
    font-size: 0.8rem;
    height: 20px;
    line-height: 20px;
  }

  .flipdown .rotor-group:nth-child(n+2):nth-child(-n+3):before,
  .flipdown .rotor-group:nth-child(n+2):nth-child(-n+3):after {
    left: 69px;
  }

  .flipdown .rotor-group:nth-child(n+2):nth-child(-n+3):before {
    bottom: 13px;
    height: 8px;
    width: 8px;
  }

  .flipdown .rotor-group:nth-child(n+2):nth-child(-n+3):after {
    bottom: 29px;
    height: 8px;
    width: 8px;
  }

  .flipdown .rotor-leaf-front,
  .flipdown .rotor-top {
    line-height: 50px;
  }

  .flipdown .rotor-leaf,
  .flipdown .rotor {
    height: 50px;
  }

  .flipdown .rotor-leaf-front,
  .flipdown .rotor-leaf-rear,
  .flipdown .rotor-top,
  .flipdown .rotor-bottom,
  .flipdown .rotor:after {
    height: 25px;
  }
}

</style>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', () => {

  // Unix timestamp (in seconds), 86400s = 60s * 60min * 24h
  var DaysFromNow = (new Date().getTime() / 1000) + (86400 * 289) + 1;

  // Set up FlipDown
  var flipdown = new FlipDown(DaysFromNow)

    // Start the countdown
    .start()

    // Do something when the countdown ends
    .ifEnded(() => {
      console.log('The countdown has ended!');
    });
  
  /*
  // Toggle theme
  var interval = setInterval(() => {
    let body = document.body;
    body.classList.toggle('light-theme');
    body.querySelector('#flipdown').classList.toggle('flipdown__theme-dark');
    body.querySelector('#flipdown').classList.toggle('flipdown__theme-light');
  },5000000);
  */
  
 /* body.querySelector('#flipdown').classList.toggle('flipdown__theme-light');
  }, 5000);


  https://codepen.io/main2018/pen/MWYBEbV
 */
});
</script>

<script type="text/javascript">
"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var FlipDown = function () {
  function FlipDown(uts) {
    var el = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'flipdown';
    var opt = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};

    _classCallCheck(this, FlipDown);

    if (typeof uts !== 'number') {
      throw new Error("FlipDown: Constructor expected unix timestamp, got ".concat(_typeof(uts), " instead."));
    }

    if (_typeof(el) === 'object') {
      opt = el;
      el = 'flipdown';
    }

    this.version = '0.2.2';
    this.initialised = false;
    this.now = this._getTime();
    this.epoch = uts;
    this.countdownEnded = false;
    this.hasEndedCallback = null;
    this.element = document.getElementById(el);
    this.rotors = [];
    this.rotorLeafFront = [];
    this.rotorLeafRear = [];
    this.rotorTops = [];
    this.rotorBottoms = [];
    this.countdown = null;
    this.daysRemaining = 0;
    this.clockValues = {};
    this.clockStrings = {};
    this.clockValuesAsString = [];
    this.prevClockValuesAsString = [];
    this.opts = this._parseOptions(opt);

    this._setOptions();

    console.log("FlipDown ".concat(this.version, " (Theme: ").concat(this.opts.theme, ")"));
  }

  _createClass(FlipDown, [{
    key: "start",
    value: function start() {
      if (!this.initialised) this._init();
      this.countdown = setInterval(this._tick.bind(this), 1000);
      return this;
    }
  }, {
    key: "ifEnded",
    value: function ifEnded(cb) {
      this.hasEndedCallback = function () {
        cb();
        this.hasEndedCallback = null;
      };

      return this;
    }
  }, {
    key: "_getTime",
    value: function _getTime() {
      return new Date().getTime() / 1000;
    }
  }, {
    key: "_hasCountdownEnded",
    value: function _hasCountdownEnded() {
      if (this.epoch - this.now < 0) {
        this.countdownEnded = true;

        if (this.hasEndedCallback != null) {
          this.hasEndedCallback();
          this.hasEndedCallback = null;
        }

        return true;
      } else {
        this.countdownEnded = false;
        return false;
      }
    }
  }, {
    key: "_parseOptions",
    value: function _parseOptions(opt) {
      return {
        theme: opt.hasOwnProperty('theme') ? opt.theme : 'dark'
      };
    }
  }, {
    key: "_setOptions",
    value: function _setOptions() {
      this.element.classList.add("flipdown__theme-".concat(this.opts.theme));
    }
  }, {
    key: "_init",
    value: function _init() {
      this.initialised = true;

      if (this._hasCountdownEnded()) {
        this.daysremaining = 0;
      } else {
        this.daysremaining = Math.floor((this.epoch - this.now) / 86400).toString().length;
      }

      var dayRotorCount = this.daysremaining <= 2 ? 2 : this.daysremaining;

      for (var i = 0; i < dayRotorCount + 6; i++) {
        this.rotors.push(this._createRotor(0));
      }

      var dayRotors = [];

      for (var i = 0; i < dayRotorCount; i++) {
        dayRotors.push(this.rotors[i]);
      }

      this.element.appendChild(this._createRotorGroup(dayRotors));
      var count = dayRotorCount;

      for (var i = 0; i < 3; i++) {
        var otherRotors = [];

        for (var j = 0; j < 2; j++) {
          otherRotors.push(this.rotors[count]);
          count++;
        }

        this.element.appendChild(this._createRotorGroup(otherRotors));
      }

      this.rotorLeafFront = Array.prototype.slice.call(this.element.getElementsByClassName('rotor-leaf-front'));
      this.rotorLeafRear = Array.prototype.slice.call(this.element.getElementsByClassName('rotor-leaf-rear'));
      this.rotorTop = Array.prototype.slice.call(this.element.getElementsByClassName('rotor-top'));
      this.rotorBottom = Array.prototype.slice.call(this.element.getElementsByClassName('rotor-bottom'));

      this._tick();

      this._updateClockValues(true);

      return this;
    }
  }, {
    key: "_createRotorGroup",
    value: function _createRotorGroup(rotors) {
      var rotorGroup = document.createElement('div');
      rotorGroup.className = 'rotor-group';
      var dayRotorGroupHeading = document.createElement('div');
      dayRotorGroupHeading.className = 'rotor-group-heading';
      rotorGroup.appendChild(dayRotorGroupHeading);
      appendChildren(rotorGroup, rotors);
      return rotorGroup;
    }
  }, {
    key: "_createRotor",
    value: function _createRotor() {
      var v = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;
      var rotor = document.createElement('div');
      var rotorLeaf = document.createElement('div');
      var rotorLeafRear = document.createElement('figure');
      var rotorLeafFront = document.createElement('figure');
      var rotorTop = document.createElement('div');
      var rotorBottom = document.createElement('div');
      rotor.className = 'rotor';
      rotorLeaf.className = 'rotor-leaf';
      rotorLeafRear.className = 'rotor-leaf-rear';
      rotorLeafFront.className = 'rotor-leaf-front';
      rotorTop.className = 'rotor-top';
      rotorBottom.className = 'rotor-bottom';
      rotorLeafRear.textContent = v;
      rotorTop.textContent = v;
      rotorBottom.textContent = v;
      appendChildren(rotor, [rotorLeaf, rotorTop, rotorBottom]);
      appendChildren(rotorLeaf, [rotorLeafRear, rotorLeafFront]);
      return rotor;
    }
  }, {
    key: "_tick",
    value: function _tick() {
      this.now = this._getTime();
      var diff = this.epoch - this.now <= 0 ? 0 : this.epoch - this.now;
      this.clockValues.d = Math.floor(diff / 86400);
      diff -= this.clockValues.d * 86400;
      this.clockValues.h = Math.floor(diff / 3600);
      diff -= this.clockValues.h * 3600;
      this.clockValues.m = Math.floor(diff / 60);
      diff -= this.clockValues.m * 60;
      this.clockValues.s = Math.floor(diff);

      this._updateClockValues();

      this._hasCountdownEnded();
    }
  }, {
    key: "_updateClockValues",
    value: function _updateClockValues() {
      var _this = this;

      var init = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : false;
      this.clockStrings.d = pad(this.clockValues.d, 2);
      this.clockStrings.h = pad(this.clockValues.h, 2);
      this.clockStrings.m = pad(this.clockValues.m, 2);
      this.clockStrings.s = pad(this.clockValues.s, 2);
      this.clockValuesAsString = (this.clockStrings.d + this.clockStrings.h + this.clockStrings.m + this.clockStrings.s).split('');
      this.rotorLeafFront.forEach(function (el, i) {
        el.textContent = _this.prevClockValuesAsString[i];
      });
      this.rotorBottom.forEach(function (el, i) {
        el.textContent = _this.prevClockValuesAsString[i];
      });

      function rotorTopFlip() {
        var _this2 = this;

        this.rotorTop.forEach(function (el, i) {
          if (el.textContent != _this2.clockValuesAsString[i]) {
            el.textContent = _this2.clockValuesAsString[i];
          }
        });
      }

      function rotorLeafRearFlip() {
        var _this3 = this;

        this.rotorLeafRear.forEach(function (el, i) {
          if (el.textContent != _this3.clockValuesAsString[i]) {
            el.textContent = _this3.clockValuesAsString[i];
            el.parentElement.classList.add('flipped');
            var flip = setInterval(function () {
              el.parentElement.classList.remove('flipped');
              clearInterval(flip);
            }.bind(_this3), 500);
          }
        });
      }

      if (!init) {
        setTimeout(rotorTopFlip.bind(this), 500);
        setTimeout(rotorLeafRearFlip.bind(this), 500);
      } else {
        rotorTopFlip.call(this);
        rotorLeafRearFlip.call(this);
      }

      this.prevClockValuesAsString = this.clockValuesAsString;
    }
  }]);

  return FlipDown;
}();

function pad(n, len) {
  n = n.toString();
  return n.length < len ? pad("0" + n, len) : n;
}

function appendChildren(parent, children) {
  children.forEach(function (el) {
    parent.appendChild(el);
  });
}
</script>