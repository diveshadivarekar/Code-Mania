<?php
include_once "questions.php";

// Choose the difficulty level based on the year variable
$year = $_SESSION["year"];
// echo "<script> alert('$year');</script>";
if ($year == 1) {
    // $selectedQuestions = $easyQuestions;
    // $selectedOptions = $easyOptions;
    // echo "<script> alert('in easy question');</script>";
    $combinedArray = array_combine($easyQuestions, $easyOptions);
} elseif ($year == 2) {
    // $selectedQuestions = $mediumQuestions;
    // $selectedOptions = $mediumOptions;
    // echo "<script> alert('in medium question');</script>";
    $combinedArray = array_combine($mediumQuestions, $mediumOptions);
} elseif ($year == 3) {
    // $selectedQuestions = $hardQuestions;
    // $selectedOptions = $hardOptions;
    // echo "<script> alert('in hard question');</script>";
    $combinedArray = array_combine($hardQuestions, $hardOptions);
} else {
    // Default to easy questions for other cases
    $combinedArray = array_combine($easyQuestions, $easyOptions);
}

// Shuffle the associative array
shuffle_assoc($combinedArray);

// Separate shuffled questions and options
$shuffledQuestions = array_keys($combinedArray);
$shuffledOptions = array_values($combinedArray);

// Function to shuffle an associative array while maintaining key-value relationships
function shuffle_assoc(&$array) {
    $keys = array_keys($array);
    shuffle($keys);
    foreach ($keys as $key) {
        $new[$key] = $array[$key];
    }
    $array = $new;
    return true;
}


?>