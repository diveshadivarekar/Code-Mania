<?php

// Easy C program statements
$easyStatements = [
    "Write a program to check the palindrome of string without using library functions."
];

// Medium C program statements
$mediumStatements = [
    "Print all the armstrong number from 1 to 1000."
];

// Hard C program statements
$hardStatements = [
    "Write a C program to implement the insertion sort algorithm.(consider a dummy array of 10 elements)."
];

// Function to get a random statement based on the year
function getRandomStatement($year) {
    global $easyStatements, $mediumStatements, $hardStatements;

    switch ($year) {
        case 1:
            return $easyStatements[array_rand($easyStatements)];
            break;
        case 2:
            return $mediumStatements[array_rand($mediumStatements)];
            break;
        case 3:
            return $hardStatements[array_rand($hardStatements)];
            break;
        default:
            return "Invalid year";
            break;
    }
}

?>