<div class="svg-container">
    <svg viewbox="0 0 800 400" class="svg">
      <path id="curve" fill="#50c6d8" d="M 800 300 Q 400 350 0 300 L 0 0 L 800 0 L 800 300 Z">
      </path>
    </svg>
  </div>

  <header>
    <div class="head">
      <img src = <?php $src = !isset($_SESSION["username"])? "./assets/images/logo/banner.png" : "../assets/images/logo/banner.png";echo $src;?> alt="jspm rscoe">
    </div>
    <div class="ino"><img src=<?php $src = !isset($_SESSION["username"])? "./assets/images/inv.png" : "../assets/images/inv.png";echo $src;?> alt="inovision"><img src=<?php $src = !isset($_SESSION["username"])? "./assets/images/cm.png" : "../assets/images/cm.png";echo $src;?> alt=""></div>
    <h1 class="title2 "><img src=<?php $src = !isset($_SESSION["username"])? "./assets/images/cm.png" : "../assets/images/cm.png";echo $src;?> alt=""></h1>
    <br>
  </header>

<style>
  @import 'https://fonts.googleapis.com/css?family=Ubuntu:300, 400, 500, 700';
*, *:after, *:before {
  margin: 0;
  padding: 0;
  font-family: "Ubuntu", sans-serif;
}

.head{
  display:flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
}
.head img{
  height:100em;
  margin: -48em 0;

}
.ino{
  display:flex;
  align-items:center;
  justify-content: space-around;
}
.ino img{
  max-height:30em;
  margin: -5em 0 -7em 0;

}

.title2{
  display:none;
}
.title2 img{
  max-width: 80%;
}
@media only screen and (max-width: 600px) {
  .ino,.head{
    display:none;
  }
  .title2{
    margin:-5em 0 -5em 0;
    display:block;
  }
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

html, body {
    height: 100%;
    width: 100%;
    margin: 0;
    display: table;
} 
footer {
  display: table-row;
  vertical-align:middle;
  height: 10vh;
  clear: both;
  background: #dddee1;
  padding: 5vh 0;
  text-align: center;
  width:100%;
  margin-top:100px;
}
footer p{
    margin-top:calc(5vh - 1em);
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