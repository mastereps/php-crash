<?php

// Simple Function
// function sayHello() {
//     echo 'Hello, World!';
// }

// sayHello();

// With Parameters
// function greet($name) {
//     echo "Hello {$name}";
// }

// greet("Epe");

// Parameter Default Value
// function greet($name = 'Guest') {
//     echo "Hello {$name}<br>";
// }
// greet();
// greet('Epe');

// Return From Function
function multiply($a, $b) {
    return $a * $b;
}

$result = multiply(4, 5);
echo $result;