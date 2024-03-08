var startTime = Math.floor(Date.now() / 1000);

// Function to update the timer display
function updateTimer() {
  // Get the current time
  var currentTime = Math.floor(Date.now() / 1000);

  // Calculate elapsed time in seconds
  var elapsedSeconds = currentTime - startTime;

  // Display the elapsed time in the input textbox
  document.getElementById("timerInput").value = formatTime(elapsedSeconds);
}

// Function to format seconds into HH:MM:SS
function formatTime(seconds) {
  var hours = Math.floor(seconds / 3600);
  var minutes = Math.floor((seconds % 3600) / 60);
  var remainingSeconds = seconds % 60;

  return (
    padZero(hours) + ":" + padZero(minutes) + ":" + padZero(remainingSeconds)
  );
}

// Function to pad single-digit numbers with a leading zero
function padZero(num) {
  return num < 10 ? "0" + num : num;
}

// Update the timer every second (1000 milliseconds)
setInterval(updateTimer, 1000);
