<?php
session_start();

// Dummy user credentials (replace with your authentication logic)
$validUsername = "u";
$validPassword = "p";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate user credentials (in a real application, you would check against a database)
    $username = $_POST["username"];
    $password = $_POST["password"];
    $year = $_POST["year"];

    if ($username == $validUsername && $password == $validPassword) {
        // User authentication successful
        $_SESSION["username"] = $username;
        $_SESSION["year"] = $year;
        header("Location: dashboard.php");
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}

// Check if the user is already logged in and redirect to the dashboard
if (isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    
    <?php
    // Display error message if authentication fails
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>

    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="year">Year:</label>
        <select name="year" required>
            <option value="1">1<sup>st</sup></option>
            <option value="2">2<sup>nd</sup></option>
            <option value="3">3<sup>rd</sup></option>
        </select><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="licence">Accept Rules : </label>
        <input type="checkbox" name="licence" required><br>

        <button type="submit">Log In</button>
    </form>
</body>
</html>
