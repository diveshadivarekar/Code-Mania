<?php include_once "modules/handleLogin.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Code Mania</title>
</head>
<body>
    <?php include_once "modules/header.php"; ?>
    
    <?php
    // Display error message if authentication fails
    if (isset($error_message)) {
        echo "<center><p style='color: red;'>$error_message</p></center>";
    }
    ?>
    <div class="container">
    <div class="form_area">
        <p class="title">SIGN UP</p>
        <form autocomplete="off" method="post" action="">
            <div class="form_group">
                <label class="sub_title" for="username">Name</label>
                <input autocomplete="off" name="username" placeholder="Enter your full name" class="form_style" type="text" required>
            </div>
            <div class="form_group">
            <label class="sub_title"for="year">Year:</label>
                <select class="form_style" name="year" required>
                    <option value="1">1<sup>st</sup></option>
                    <option value="2">2<sup>nd</sup></option>
                    <option value="3">3<sup>rd</sup></option>
                </select>
            </div>
            <div class="form_group">
                <label class="sub_title" for="password">Password</label>
                <input name= "password" placeholder="Enter your password" id="password" class="form_style" type="password" required>
            </div>
            <div>
            <div class="form_group">
                <label class="sub_title" for="licence">Accept Rules :  <input type="checkbox" name="licence" required></label>
            </div>
            <button class="btn" type="submit">Log In</button>
            </a></div><a class="link" href=""></a>
        </form>
    </div>
    <a class="link" href=""></a>
</div>
    <?php include_once "modules/footer.php"; ?>
</body>
</html>
