<?php
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Logout functionality
if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}
?>
<?php include_once "problem_stat.php";?>
<?php include_once "config.php";?>

<?php
$year = $_SESSION["year"];
$problem_stat = getRandomStatement($year);
$validToken = array("dist","pass","fail");

// all correct = dist
// partially correct = pass
// attempted  = fail

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST["tok"];
    if (in_array($token, $validToken)){
        // Store the data in the database
        $name = $_SESSION["username"];
        $time_taken = $_POST["t"];

        if ($token == "dist"){
            $sql = "INSERT INTO program_result (name, year, stat,timeTaken,token) VALUES ('$name', '$year', '$problem_stat','$time_taken',1)";
        }elseif($token == "pass"){
            $sql = "INSERT INTO program_result (name, year, stat,timeTaken,token) VALUES ('$name', '$year', '$problem_stat','$time_taken',2)";
        }elseif($token == "fail"){
            $sql = "INSERT INTO program_result (name, year, stat,timeTaken,token) VALUES ('$name', '$year', '$problem_stat','$time_taken',3)";
        }
        else{}
        
        if ($conn->query($sql) === TRUE) {
            include_once "header.php";
            echo "<center>";
            echo "<h3>you would be notified about the results very soon.</h3>";
            echo "<br>";
            echo "<h3>make sure to logout before leaving the arena. </h3><br><br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
        include_once "logoutbtn.php";
        echo '<form method="post" action="">';
        echo '    <button class="button2 type1" type="submit" name="logout">Log Out</button>';
        echo '</form>';
        echo "</center>";
        include_once "footer.php";
        exit();
    }else {
        $error_message = "Invalid Token.";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/util.css">
    <style>
        body {
            <?php
                $year = $_SESSION["year"];
                switch ($year) {
                    case 1:
                        echo 'background-color: #ff9999;'; // Year 1 color
                        break;
                    case 2:
                        echo 'background-color: #99ff99;'; // Year 2 color
                        break;
                    case 3:
                        echo 'background-color: #9999ff;'; // Year 3 color
                        break;
                    default:
                        echo 'background-color: #ffffff;'; // Default color
                }
            ?>
        }
        body{
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Ensure full viewport height */
        }
        .container{
            margin: 0 auto;
            width: 80%; /* Adjust the width as needed */
            max-width: 80vw; /* Set a maximum width if desired */
            height: 80vh; /* Adjust the height as needed */
        }
        iframe{
            width: 100%;
            height: 100%;
        }
    </style>
    <title>Round 2 Program Round</title>
  </head>
  <body>
  <!-- <script src="../js/invigilate.js"></script> -->
    <script src="../js/index.js"></script>
    <?php include_once "header.php"; ?>
    <div id="timer"></div>
    <!-- <div class="profile">
        <div class="pro_img">
            <img src="https://robohash.org/<?php echo $_SESSION["username"] ?>" alt="profile">
        </div>
        <p><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
    </div> -->

    <center><h1>Round 2 Program Round</h1>
    <br>
    <h3><b>Program statement : </b><?php echo $problem_stat ;?></h3>
</center>

    <br>    
    <div class="container">
        <iframe
        src="https://www.programiz.com/c-programming/online-compiler/#google_vignette"
        width="600"
        height="400"
        frameborder="0"
        ></iframe>
    </div>
    <?php
    // Display error message if authentication fails
    if (isset($error_message)) {
        echo "<center><p style='color: red;'>$error_message</p></center>";
    }
    ?>
    <?php
    echo "<style>.input-group {
        display: flex;
        align-items: center;
        justify-content: center;
        margin:20px;
      }
      
      .input {
        min-height: 50px;
        max-width: 150px;
        padding: 0 1rem;
        font-size: 15px;
        border: 1px solid #5e4dcd;
        border-radius: 6px 0 0 6px;
      }
      
      .button--submit {
        min-height: 50px;
        padding: .5em 1em;
        border: none;
        border-radius: 0 6px 6px 0;
        background-color: #5e4dcd;
        color: #fff;
        font-size: 15px;
        cursor: pointer;
        transition: background-color .3s ease-in-out;
      }
      
      .button--submit:hover {
        background-color: #5e5dcd;
      }
      
      .input:focus, .input:focus-visible {
        border-color: #3898EC;
        outline: none;
      }
      </style>";
    ?>
    <form id = "myForm" method="post" action="">
    <input hidden name="t" type="text" id="timerInput" value="00:00:00" readonly>
    <center>
        <label for="token">Ask Invigilator for code verification</label>
    <div class="input-group">
        <input class="input" name="tok" placeholder="Invigilator Token" id="token" type="password" required>
        <button class="button--submit" id = "subbtn"type="submit"><span>Submit</span></button>
    </div>
</center>
    </form> 
    <?php include_once "footer.php"; ?>
  </body>
</html>
