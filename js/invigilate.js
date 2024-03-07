let chance = 2;

// Add focus change event listener
window.addEventListener("blur", function () {
  // Redirect to logout when the window loses focus
  chance--;
  if (chance <= 0) {
    window.location.href = "logout.php";
  }
});

// Maximize the window for fullscreen-like experience
// window.onload = function() {
//     document.documentElement.requestFullscreen();
// };
