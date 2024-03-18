<?php
session_start();

// Dummy user credentials (replace with your authentication logic)
// $validUsername = "u";
// $validPassword = "p";
$validPassword = array("rust","python","java");
$validPassword2 = array("react","mern","node","express");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate user credentials (in a real application, you would check against a database)
    $username = $_POST["username"];
    $password = $_POST["password"];
    $year = $_POST["year"];

    // if ($password == $validPassword) {
    if (in_array($password, $validPassword)){

        // Get the key/index of the value
        $key = array_search($password, $validPassword);

        // Remove the value from the array
        array_splice($validPassword, $key, 1);
          // Display the updated array
        // print_r($validPassword);


        // User authentication successful
        $_SESSION["username"] = $username;
        $_SESSION["year"] = $year;
        header("Location: modules/dashboard.php");
        exit();
    }
    elseif(in_array($password, $validPassword2)){
        // User authentication successful
        $_SESSION["username"] = $username;
        $_SESSION["year"] = $year;
        header("Location: modules/program.php");
        exit();
    }
    else {
        $error_message = "Invalid username or password.";
    }
}

// Check if the user is already logged in and redirect to the dashboard
if (isset($_SESSION["username"])) {
    header("Location: modules/dashboard.php");
    exit();
}
?>
