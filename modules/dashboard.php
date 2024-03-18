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

<?php include_once "config.php";?>

<?php
include 'mcq.php';
// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize the score
    $score = 0;

    // Check each answer and calculate the score
    for ($i = 0; $i < count($shuffledQuestions); $i++) {
        error_reporting(0);
        $answer = $_POST["q" . $i];
        if ($answer == array_search("Hypertext Preprocessor", $shuffledOptions[$i])) {
            $score++;
        }
    }

    // Store the data in the database
    $name = $_SESSION["username"];
    $year = $_SESSION["year"];
    $time_taken = $_POST["t"];

    $sql = "INSERT INTO quiz_results (name, year, score,timeTaken) VALUES ('$name', '$year', '$score','$time_taken')";
    
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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </style>
    <title>Round 1 Quiz Round</title>

</head>
<body>
    <script src="../js/invigilate.js"></script>
    <script src="../js/index.js"></script>
    <?php include_once "header.php"; ?>
    <div id="timer"></div>
    <!-- <div class="profile">
        <div class="pro_img">
            <img src="https://robohash.org/<?php echo $_SESSION["username"] ?>" alt="profile">
        </div>
        <p><?php echo htmlspecialchars($_SESSION["username"]); ?></p>
    </div> -->

    <center><h1>Round 1 Quiz Round</h1></center>     
    
    <form id = "myForm" method="post" action="">
    <input hidden name="t" type="text" id="timerInput" value="00:00:00" readonly>
    <?php 
    
        $maxQuestionsToShow =15;    
        for ($i = 0; $i < min($maxQuestionsToShow, count($shuffledQuestions)); $i++):
    ?>
    <div class="card">
        <p style="margin-bottom:5px"><strong><?php echo ($i + 1) . ". " . $shuffledQuestions[$i]; ?></strong></p>
        <?php // Shuffle the options for each question
            shuffle($shuffledOptions[$i]);
            foreach ($shuffledOptions[$i] as $key => $option): ?>
                
            <div class="card-content container">
                <label> 
                    <input type="radio" name="q<?php echo $i; ?>" value="<?php echo $key; ?>" required>
                    <span></span>
                    <?php echo $option; ?>
                </label><br>
            </div>
            
        <?php endforeach; ?>
    </div>
    <?php endfor; ?>
        <center><button class="button" id = "subbtn"type="submit"><span>Submit</span></button></center>
    </form>     
    <?php 
    include "footer.php"; ?>
</body>
</html>
