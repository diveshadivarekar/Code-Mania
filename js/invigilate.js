let chance = 2;

// Get the form and the submit button by their IDs
var myForm = document.getElementById("myForm");
var submitButton = document.getElementById("subbtn");

// Add an event listener to the submit button
submitButton.addEventListener("click", function () {
  // Use the submit() method to submit the form
  myForm.submit();
});

// Add focus change event listener
window.addEventListener("blur", function () {
  // Redirect to logout when the window loses focus
  chance--;
  if (chance <= 0) {
    myForm.submit();
    window.location.href = "logout.php";
  }
});

// Maximize the window for fullscreen-like experience
// window.onload = function() {
//     document.documentElement.requestFullscreen();
// };
