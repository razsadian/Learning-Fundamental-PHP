## covered a lot of material in this lesson, so let’s review (LESSON 1):

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

example :

- echo "Hello, Learner!";
- echo "\nWe hope you enjoyed this lesson.";
- echo "\nAre you excited?" . "\nTo learn more?";
- $favorite_language = "PHP";
- $message = "$favorite_language is by far our favorite language.";
- $message .= " It's yours now too, right?";
- echo "\n" . $message . " Right?!";

## this lesson, we learned all about using numbers in PHP. Let’s review what we covered (LESSON 2):

- PHP has two number data types: integers and floating point numbers
- Operations have an order of precedence meaning that certain types of operations in a chain will be evaluated before others: first evaluated will be any operation wrapped in parenthesis (()), next exponents (**) then multiplication * and division (/), and finally addition (+) and subtraction (-). The acronym PEMDAS can be a helpful way of remembering the order.
- We can assign number values to variables and then perform numerical operations with them.
