<div class="svg-container">
    <!-- I crated SVG with: https://codepen.io/anthonydugois/pen/mewdyZ -->
    <svg viewbox="0 0 800 400" class="svg">
      <path id="curve" fill="#50c6d8" d="M 800 300 Q 400 350 0 300 L 0 0 L 800 0 L 800 300 Z">
      </path>
    </svg>
  </div>

  <header>
    <h1>CODE MANIA</h1>
    <br>
    <h3>By JSPM's RSCOE POLYTECHNIC <br>COMPUTER DEPARTMENT</h3>
  </header>

<style>
  @import 'https://fonts.googleapis.com/css?family=Ubuntu:300, 400, 500, 700';
*, *:after, *:before {
  margin: 0;
  padding: 0;
  font-family: "Ubuntu", sans-serif;
}

.svg-container {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: -1;
}

svg path {
  transition: 0.1s;
}
svg:hover path {
  d: path("M 800 300 Q 400 250 0 300 L 0 0 L 800 0 L 800 300 Z");
}

/* body {
  background: #fff;
  color: #333;
  font-family: "Ubuntu", sans-serif;
  position: relative;
} */

h3 {
  font-weight: 400;
}

header {
    font-family:"roboto";
  color: #000;
  padding-top: 10vh;
  padding-bottom: 10vh;
  text-align: center;
}

/* main {
  background: linear-gradient(to bottom, #ffffff 0%, #dddee1 100%);
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  padding: 10vh 0 80vh;
  position: relative;
  text-align: center;
  overflow: hidden;
}
main::after {
  border-right: 2px dashed #eee;
  content: "";
  position: absolute;
  top: calc(10vh + 1.618em);
  bottom: 0;
  left: 50%;
  width: 2px;
  height: 100%;
} */

footer {
  background: #dddee1;
  padding: 5vh 0;
  text-align: center;
  position: relative;
}
footer p{
    margin-top:auto;
}

small {
  opacity: 0.5;
  font-weight: 300;
}
small a {
  color: inherit;
}
</style>

<script>
    (function() {
  // Variables
  var $curve = document.getElementById("curve");
  var last_known_scroll_position = 0;
  var defaultCurveValue = 350;
  var curveRate = 3;
  var ticking = false;
  var curveValue;

  // Handle the functionality
  function scrollEvent(scrollPos) {
    if (scrollPos >= 0 && scrollPos < defaultCurveValue) {
      curveValue = defaultCurveValue - parseFloat(scrollPos / curveRate);
      $curve.setAttribute(
        "d",
        "M 800 300 Q 400 " + curveValue + " 0 300 L 0 0 L 800 0 L 800 300 Z"
      );
    }
  }

  // Scroll Listener
  // https://developer.mozilla.org/en-US/docs/Web/Events/scroll
  window.addEventListener("scroll", function(e) {
    last_known_scroll_position = window.scrollY;

    if (!ticking) {
      window.requestAnimationFrame(function() {
        scrollEvent(last_known_scroll_position);
        ticking = false;
      });
    }

    ticking = true;
  });
})();

</script>