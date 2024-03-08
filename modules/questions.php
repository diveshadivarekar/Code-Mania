<?php
// Define easy, medium, and hard arrays for questions and options
$easyQuestions = array(
    "What does PHP stand for?",
    "What is the primary purpose of a session in PHP?",
    "Which PHP function is used to get the length of a string?",
    "What is the correct way to comment out multiple lines of PHP code?",
    "What does the 'echo' statement do in PHP?"
);

$easyOptions = array(
    array("Personal Home Page", "Hypertext Preprocessor", "Private Home Page", "Public Home Page"),
    array("Store data on the server for later use", "Create a secure connection to the database", "Display data to the user", "Validate form submissions"),
    array("str_length()", "string_length()", "strlen()", "length()"),
    array("// This is a comment", "# This is a comment", "/* This is a comment */", "<!-- &lt;!-- This is a comment --&gt; -->"),
    array("Prints output to the browser", "Defines a constant", "Declares a variable", "Creates a function")
);

$mediumQuestions = array(
    "What is the difference between 'include' and 'require' in PHP?",
    "How can you prevent SQL injection in PHP?",
    "What is the purpose of the 'header' function in PHP?",
    "Which operator is used for concatenating two strings in PHP?",
    "How do you declare a constant in PHP?"
);

$mediumOptions = array(
    array("Both include and require include a file, but require will produce a fatal error if the file is not found", "Include is used for HTML files, and require is used for PHP files", "Require is used for HTML files, and include is used for PHP files", "Both include and require produce a warning if the file is not found"),
    array("Use prepared statements with parameterized queries", "Sanitize user input using htmlentities", "Encode user input with base64_encode", "Use addslashes() function on user input"),
    array("Send an HTTP header to the browser", "Redirect the user to another page", "Define a custom HTTP status code", "Enable output buffering"),
    array("+", ".", "&", "%"),
    array("define(constant_name, value)", "const CONSTANT_NAME = value", "constant CONSTANT_NAME = value", "\$constant_name = value")
);

$hardQuestions = array(
    "What is the difference between '== and '===' in PHP?",
    "Explain the use of the ternary operator in PHP.",
    "How does autoloading work in PHP?",
    "What is the use of the 'use' statement in PHP namespaces?",
    "How can you optimize the performance of a PHP application?"
);

$hardOptions = array(
    array("'==' is a loose comparison, '===' is a strict comparison", "'==' compares both value and type, '===' only compares value", "'==' is used for strings, '===' is used for integers", "'===' is a loose comparison, '==' is a strict comparison"),
    array("It is a shorthand for an if-else statement", "It is used for arithmetic operations", "It is a bitwise operator", "It is used for type casting"),
    array("It automatically includes the required classes when they are needed", "It allows dynamic class loading without explicitly including the class files", "It enables automatic class instantiation", "It is used for including external libraries"),
    array("It imports classes or namespaces into the current file", "It is used for creating aliases for classes", "It is used to define global constants", "It is required when using multiple namespaces in a file"),
    array("Use opcode caching", "Minimize database queries", "Implement lazy loading for classes", "Optimize database queries using indexes")
);
?>