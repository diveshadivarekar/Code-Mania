<?php
    // Define the questions and options
    $questions = array(
        "What does PHP stand for?",
        "Which of the following is not a data type in PHP?",
        "What is the purpose of the 'echo' statement in PHP?",
        "What is the default port number for HTTP?",
        "What is the correct syntax for a 'for' loop in PHP?"
    );

    $options = array(
        array("Personal Home Page", "Hypertext Preprocessor", "Private Home Page", "Public Home Page"),
        array("Boolean", "String", "Float", "Integer"),
        array("Prints output to the browser", "Defines a constant", "Declares a variable", "Creates a function"),
        array("80", "8080", "8081", "8000"),
        array("for (\$i = 0; \$i < 10; \$i++)", "for (\$i = 1 to 10)", "for (\$i = 0; \$i <= 10; \$i++)", "for (\$i = 10; \$i > 0; \$i--)")
    );

    // Combine questions and options into an associative array
    $combinedArray = array_combine($questions, $options);
    // Shuffle the associative array
    shuffle_assoc($combinedArray);

    // Separate shuffled questions and options
    $shuffledQuestions = array_keys($combinedArray);
    $shuffledOptions = array_values($combinedArray);

    function shuffle_assoc(&$array) {
        $keys = array_keys($array);
        shuffle($keys);
        foreach($keys as $key) {
            $new[$key] = $array[$key];
        }
        $array = $new;
        return true;
    }
?>