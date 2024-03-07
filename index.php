<?php include_once "modules/handleLogin.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php include_once "modules/header.php"; ?>
    <h1>Login Page</h1>
    
    <?php
    // Display error message if authentication fails
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>

    <form autocomplete="off" method="post" action="">
        <label for="username">Username:</label>
        <input autocomplete="false" type="text" name="username" required><br>

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
    <?php include_once "modules/footer.php"; ?>
</body>
</html>
