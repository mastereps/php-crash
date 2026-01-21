<?php

// Single Line comment
/*
mul
*/

$name = 'Zura';
$age = 32;
$isFather = false;
$money = 19.99;
$salary = null;

// echo "Hello {$name} ".''. $age .''. $salary . $isFather .' Hehehe'; -> Print The variable

// Print the types of variables
/*echo gettype($salary) .'<br>';
echo gettype($isFather) .'<br>';
echo gettype($money) .'<br>';
echo gettype($name) .'<br>';
echo gettype($age) .'<br>';*/

// print the whole variable information
// print_r($name);
// echo '<br>';
// var_dump($name);
// echo '<br>';


// Change the value and print the type -> PHP variables are Dynamic
// $name = 32;
// echo gettype( $name ) .'<br>';

// Variable Checking Function
// var_dump(is_string($name));
// echo '<br>';
// var_dump(is_string($age));
// echo '<br>';
// var_dump(is_int($age));
// echo '<br>';
// var_dump(is_bool($isFather));
// echo '<br>';
// var_dump(is_double($money));
// echo '<br>';
 
// Check if variable is defined
var_dump(isset($name));
echo '<br>';
var_dump(isset($country));
echo '<br>';
var_dump(isset($salary));
echo '<br>';

// Error encounter <br br tag incomplete ending tag
 