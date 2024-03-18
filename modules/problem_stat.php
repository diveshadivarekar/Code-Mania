<?php

// Easy C program statements
$easyStatements = [
    "Write a C program to calculate the sum of elements in an array.",
    "Write a C program to find the largest element in an array.",
    "Write a C program to reverse a string.",
    "Write a C program to check whether a number is even or odd.",
    "Write a C program to swap two numbers."
];

// Medium C program statements
$mediumStatements = [
    "Write a C program to find the factorial of a number using recursion.",
    "Write a C program to check whether a given string is a palindrome or not.",
    "Write a C program to implement the bubble sort algorithm.",
    "Write a C program to implement the selection sort algorithm.",
    "Write a C program to find the GCD (Greatest Common Divisor) of two numbers."
];

// Hard C program statements
$hardStatements = [
    "Write a C program to implement a stack using arrays and perform push and pop operations.",
    "Write a C program to implement a queue using arrays and perform enqueue and dequeue operations.",
    "Write a C program to implement the binary search algorithm.",
    "Write a C program to implement the quicksort algorithm.",
    "Write a C program to find the nth Fibonacci number."
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