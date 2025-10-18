<<<<<<< HEAD
## covered a lot of material in this lesson, so let’s review (LESSON 1):
=======
## covered a lot of material in this lesson, so let’s review:
>>>>>>> 073391001a1d3f883650d05a168c18bfa2b3f3e2

- Strings are collections of text that the computer treats as a single piece of data.
- A string can be any length and contain any letters, numbers, symbols, or spaces surrounded by quotation marks.
- In order to include certain characters inside strings we have to use escape sequences.
- An operator is a character that performs a task in our code.
- We can use the concatenation operator (.) to combine two strings into one.
- Variables are a fundamental programming concept which allow us to easily reuse data in our code.
- We declare a variable using the dollar sign ($) followed by the variable name and then use the assignment operator (=) to give it a value.
- PHP has variable parsing which allows us to include variables directly in our strings.
- Once a variable has been assigned, we can change its value. This is called reassignment.
- We can create an alias for a variable, instead of just a copy, using the reference assignment operator (=&).
- Operations to the right of the assignment operator will be evaluated before assignment takes place.
- The concatenating assignment operator (.=) is a shorthand notation for reassigning a string variable to its current value appended with another string value.

## example :

- echo "Hello, Learner!";
- echo "\nWe hope you enjoyed this lesson.";
- echo "\nAre you excited?" . "\nTo learn more?";
- $favorite_language = "PHP";
- $message = "$favorite_language is by far our favorite language.";
- $message .= " It's yours now too, right?";
- echo "\n" . $message . " Right?!";

## this lesson, we learned all about using numbers in PHP. Let’s review what we covered:

- PHP has two number data types: integers and floating point numbers
- We can use arithmetic operators for performing math operations:

## Operation: ## Example:

- Addition + - echo 1 + 4.5; // Prints: 5.5
- Subtraction - - echo 9 - 1; // Prints: 8
- Multiplication _ - echo -1.9 _ 2.9; // Prints: -5.51
- Division / - echo 9 / 1; // Prints: 9
- Modulo % - echo 11 % 3; // Prints: 2
- Exponentiation ** - echo 8**2; // Prints: 64
