<?php

// Easy C program statements
$easyStatements = [
    'Write a program to print "Hello, World!"',
    'Write a program to add two numbers',
    'Write a program to find the factorial of a number',
    'Write a program to check if a number is even or odd',
    // Add more easy statements as needed
];

// Medium C program statements
$mediumStatements = [
    'Write a program to find the sum of elements in an array',
    'Write a program to reverse a string',
    'Write a program to check if a string is a palindrome',
    'Write a program to find the largest element in an array',
    // Add more medium statements as needed
];

// Hard C program statements
$hardStatements = [
    'Write a program for binary search in a sorted array',
    'Write a program to implement a linked list',
    'Write a program to perform matrix multiplication',
    'Write a program to implement quicksort algorithm',
    // Add more hard statements as needed
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