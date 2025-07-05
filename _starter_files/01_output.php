<?php

/** 
*?Educational file to explain output functions in PHP
*/ 

/*
 * PHP Output and Comments Explanation
 * This file explains the different output methods in PHP:
 * - echo
 * - print
 * - print_r
 * - var_dump
 * - HTML + PHP Integration
 * - Escaping characters
 */

//! output -- echo / string - number - html
echo 'Hi';  // Printing text using echo
echo 99999; // Printing number
echo '<h1>wellcom</h1>'; // Printing html

//! Using print - like echo, but slightly slower
print 'Hi'; // Printing text using print

//! Using print_r for an array
print_r ('Go array!'); // text
print_r ([1,2,3,4]); // print_r - Displays more detailed information. Can be used to print an array.

//! Using var_dump to know data type

var_dump('The is a string'); //shoe data type (:
var_dump([10,'text',true]); // Specifies the type of each element in the array (;

//! Example of escaping characters
echo "Quote inside text: O\ 'Wow!' reilly";

// single line comment 

/*
-------------------------------->>
* multi-line comment
*/
?>

 <!--You can generate any HTML you need within a .php file.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Output Example for PHP</title>
</head>
<body>
 <!--It's possible to generate PHP code, which will include any variables you define. -->
    <h2>Hi<?php print " PHP"; ?></h2>
    <!-- The semicolon is only allowed to be omitted after a statement
      if it is immediately followed by a closing PHP tag ?>. -->
    <h4>Home <?= 'page' ?></h4>

</body>
</html>
