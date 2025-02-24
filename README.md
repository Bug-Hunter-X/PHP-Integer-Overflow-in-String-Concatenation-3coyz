# PHP Integer Overflow in String Concatenation

This repository demonstrates a subtle bug in PHP related to integer overflow when concatenating large numbers with strings.  When a very large integer is generated and then concatenated with a string (like a currency symbol), the integer might overflow, leading to an incorrect total.

The `bug.php` file shows the code with the error. The `bugSolution.php` file presents a solution using type casting to ensure that the numerical value is correctly handled as a string during concatenation, preventing the overflow.