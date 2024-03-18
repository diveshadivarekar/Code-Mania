<?php

// easy difficulty questions
$easyQuestions = array(
    "What is the size of 'int' data type in C language?",
    "Which of the following is not a valid variable name in C?",
    "What will be the output of the following code?\nint x = 5;\nprintf('%d', x++);",
    "What is the output of 'printf('%d', sizeof('hello'));'?",
    "In C, what does the 'break' statement do?",
    "What is the output of 'printf('%d', 5 / 2);'?",
    "What is the purpose of 'printf' function in C?",
    "What is the purpose of 'scanf' function in C?",
    "Which of the following is a valid way to initialize an array in C?",
    "What is the purpose of 'return' statement in C functions?",
    "What is the syntax to define a function in C?",
    "What is the purpose of 'sizeof' operator in C?",
    "What is the output of 'printf('%d', 5 % 2);'?",
    "What is the purpose of 'if' statement in C?",
    "What is the purpose of 'else' statement in C?",
    "What is the purpose of 'while' loop in C?",
    "What is the purpose of 'for' loop in C?",
    "What does the '&&' operator do in C?",
    "What does the '||' operator do in C?",
    "What is the purpose of 'switch' statement in C?"
);

// Medium difficulty questions
$mediumQuestions = array(
    "What is the output of 'printf('%d', 2 * 3 + 5);'?",
    "What does the '&&' operator do in C?",
    "What does the '||' operator do in C?",
    "What is the output of the following code?\nint x = 5;\nint y = 2;\nprintf('%d', x > y ? x : y);",
    "What is the output of the following code?\nint x = 10;\nint *ptr = &x;\nprintf('%d', ++*ptr);",
    "What is the purpose of 'typedef' keyword in C?",
    "What is the purpose of 'enum' keyword in C?",
    "What is the purpose of 'struct' keyword in C?",
    "What is the purpose of 'union' keyword in C?",
    "What is the purpose of 'break' statement in 'switch' statement?",
    "What is the purpose of 'continue' statement in loops?",
    "What is the purpose of 'goto' statement in C?",
    "What is the purpose of 'static' keyword in C?",
    "What is the purpose of 'extern' keyword in C?",
    "What is the output of the following code?\nint arr[5] = {1, 2, 3, 4, 5};\nprintf('%d', arr[3]);",
    "What is the output of the following code?\nint arr[] = {1, 2, 3, 4};\nprintf('%d', arr[4]);",
    "What is the output of the following code?\nint x = 5;\nint y = 2;\nprintf('%d', x++ + y);",
    "What is the output of the following code?\nint x = 10;\nint *ptr = &x;\nprintf('%d', *ptr++);",
    "What is the output of the following code?\nint x = 5;\nint *ptr = &x;\nprintf('%d', *ptr + 1);",
    "What is the output of the following code?\nint x = 5;\nint *ptr = &x;\nprintf('%d', *++ptr);",
);

// Hard difficulty questions
$hardQuestions = array(
    "Explain the 'volatile' keyword in C.",
    "What is the difference between 'malloc' and 'calloc' functions in C?",
    "What is the purpose of 'const' keyword in C?",
    "Explain the concept of 'pointer to a pointer' in C with an example.",
    "What are 'function pointers' in C language?",
    "What is the purpose of 'register' keyword in C?",
    "What is the purpose of 'auto' keyword in C?",
    "What is the purpose of 'inline' keyword in C?",
    "What is the purpose of 'volatile' keyword in C?",
    "Explain the concept of 'preprocessor directives' in C with examples.",
    "What is the output of the following code?\n#define SQUARE(x) x*x\nint main() {\nint y = SQUARE(2+3);\nprintf('%d', y);\nreturn 0;\n}",
    "What is the output of the following code?\nint main() {\nint x = 5;\nprintf('%d', ++x + x++);\nreturn 0;\n}",
    "What is the output of the following code?\nint main() {\nint x = 10;\nprintf('%d', x * (x--, --x));\nreturn 0;\n}",
    "What is the output of the following code?\nint main() {\nint x = 10;\nint *ptr = &x;\nprintf('%d', *ptr * ++*ptr);\nreturn 0;\n}",
    "What is the output of the following code?\nint main() {\nint arr[5] = {1, 2, 3, 4, 5};\nint *ptr = arr + 2;\nprintf('%d', *ptr);\nreturn 0;\n}",
    "What is the output of the following code?\nint main() {\nint arr[5] = {1, 2, 3, 4, 5};\nint *ptr = arr;\nprintf('%d', *(ptr + 3));\nreturn 0;\n}",
    "What is the output of the following code?\nint main() {\nint arr[5] = {1, 2, 3, 4, 5};\nint *ptr = arr + 1;\nprintf('%d', *(ptr - 1));\nreturn 0;\n}",
    "What is the output of the following code?\nint main() {\nint arr[5] = {1, 2, 3, 4, 5};\nint *ptr = arr + 3;\nprintf('%d', *(ptr - 1));\nreturn 0;\n}",
    "What is the output of the following code?\nint main() {\nint arr[5] = {1, 2, 3, 4, 5};\nint *ptr = arr + 1;\nprintf('%d', *(ptr + 1));\nreturn 0;\n}",
    "What is the output of the following code?\nint main() {\nint arr[5] = {1, 2, 3, 4, 5};\nint *ptr = arr + 2;\nprintf('%d', *(ptr - 2));\nreturn 0;\n}"
);

// Options for the questions (two-dimensional arrays)
// easy difficulty options
$easyOptions = array(
    array("4 bytes", "2 bytes", "Depends on the compiler", "8 bytes"),
    array("my_var", "_variable", "123var", "var123"),
    array("5", "6", "4", "Undefined behavior"),
    array("5", "6", "5 (number of characters in 'hello')", "Compiler error"),
    array("Exits the current loop or switch statement", "Continues to the next iteration of the loop", "Stops the program execution", "No effect"),
    array("2", "2.5", "2.0", "Compiler error"),
    array("Print formatted output to the console", "Scan formatted input from the console", "Allocate memory dynamically", "Declare a constant variable"),
    array("Read formatted input from the console", "Print formatted output to the console", "Allocate memory dynamically", "Declare a constant variable"),
    array("{1, 2, 3}", "{1, 2, 3,}", "{1, 2, 3, 4}", "{1, 2, 3, 4, 5}"),
    array("To return a value from a function", "To terminate the program execution", "To define a variable", "To skip the next line of code"),
    array("int function_name() { }", "void function_name() { }", "function_name() { }", "int function_name { }"),
    array("To determine the size of a variable", "To calculate the square of a number", "To concatenate strings", "To perform arithmetic operations"),
    array("1", "2", "0", "Compiler error"),
    array("To check a condition and execute a block of code", "To declare a variable", "To print output to the console", "To declare a function"),
    array("To provide an alternative block of code when a condition is not true", "To execute a block of code repeatedly", "To define a function", "To skip the next line of code"),
    array("To repeatedly execute a block of code as long as the condition is true", "To execute a block of code at least once", "To define a function", "To skip the next line of code"),
    array("To execute a block of code repeatedly with initialization, condition, and update", "To provide an alternative block of code when a condition is not true", "To define a function", "To skip the next line of code"),
    array("Performs logical AND operation", "Performs logical OR operation", "Performs logical NOT operation", "None of the above"),
    array("Performs logical OR operation", "Performs logical AND operation", "Performs logical NOT operation", "None of the above"),
    array("To execute a block of code based on the value of an expression", "To skip the next line of code", "To repeatedly execute a block of code", "To define a function")
);

// Medium difficulty options
$mediumOptions = array(
    array("11", "10", "13", "15"),
    array("Performs logical AND operation", "Performs logical OR operation", "Performs logical NOT operation", "None of the above"),
    array("Performs logical OR operation", "Performs logical AND operation", "Performs logical NOT operation", "None of the above"),
    array("5", "10", "2", "Compiler error"),
    array("11", "12", "10", "Compiler error"),
    array("It creates an alias name for a data type", "It declares a variable in the global scope", "It defines a new data type", "It declares a variable that cannot be changed"),
    array("It defines a set of named integer constants", "It defines a variable with multiple values", "It declares a function", "It creates an alias name for a data type"),
    array("It defines a structure with multiple members", "It declares a variable with a fixed size", "It defines a set of named integer constants", "It creates an alias name for a data type"),
    array("It defines a data type that can store different types of data", "It defines a variable with a fixed size", "It defines a structure with multiple members", "It creates an alias name for a data type"),
    array("Exits the switch statement and continues with the next line of code", "Exits the current loop or switch statement", "Exits the function and returns a value", "None of the above"),
    array("Skips the remaining code in the current iteration and continues with the next iteration", "Exits the current loop or switch statement", "Exits the function and returns a value", "None of the above"),
    array("Transfers control to a labeled statement in the same function", "Exits the current loop or switch statement", "Exits the function and returns a value", "None of the above"),
    array("It specifies that the variable has a global scope", "It specifies that the variable can be accessed from any function", "It specifies that the variable retains its value between function calls", "All of the above"),
    array("It declares a variable in the global scope", "It defines a set of named integer constants", "It creates an alias name for a data type", "It specifies that the variable retains its value between function calls"),
    array("4", "5", "3", "Compiler error"),
    array("Compiler error", "0", "Garbage value", "4"),
    array("7", "6", "6.5", "5"),
    array("11", "12", "10", "Compiler error"),
    array("6", "7", "8", "5"),
    array("11", "12", "10", "Compiler error")
);

// Hard difficulty options
$hardOptions = array(
    array("It indicates that the variable can be modified asynchronously", "It specifies that the variable has a global scope", "It specifies that the variable can be accessed from any function", "All of the above"),
    array("calloc initializes memory to zero, malloc doesn't", "malloc initializes memory to zero, calloc doesn't", "There is no difference between them", "calloc is obsolete, malloc is the preferred function"),
    array("It specifies that the variable cannot be modified", "It specifies that the variable cannot be accessed from any other file", "It specifies that the variable has a global scope", "It specifies that the variable can be modified asynchronously"),
    array("It is a pointer that points to another pointer", "It is a pointer that points to a function", "It is a pointer that points to an integer", "It is a pointer that points to a character"),
    array("Pointers that point to functions", "Pointers that point to memory locations", "Pointers that store arrays", "Pointers that point to variables"),
    array("It suggests the compiler to store the variable in the CPU register", "It specifies that the variable has a global scope", "It specifies that the variable can be accessed from any function", "It specifies that the variable retains its value between function calls"),
    array("It specifies that the variable has a local scope", "It suggests the compiler to store the variable in the CPU register", "It specifies that the variable can be accessed from any function", "All of the above"),
    array("It suggests the compiler to inline the function", "It specifies that the variable has a global scope", "It specifies that the variable can be accessed from any function", "All of the above"),
    array("It indicates that the variable can be modified asynchronously", "It specifies that the variable has a local scope", "It suggests the compiler to inline the function", "All of the above"),
    array("They are directives to the preprocessor which instruct it to do specific tasks before the compilation process", "They are used to define macros", "They are used to include header files", "All of the above"),
    array("25", "10", "13", "Compiler error"),
    array("11", "12", "10", "Compiler error"),
    array("100", "50", "110", "Compiler error"),
    array("110", "100", "90", "Compiler error"),
    array("3", "4", "5", "Compiler error"),
    array("4", "5", "3", "Compiler error"),
    array("1", "2", "3", "Compiler error"),
    array("2", "3", "4", "Compiler error"),
    array("3", "4", "5", "Compiler error")
);

?>

