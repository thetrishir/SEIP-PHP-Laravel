<?php
require_once 'vendor\autoload.php';

use App\classes\Basics;
use App\classes\Hello;
use App\classes\Test;

$hola = new Hello;
echo $hola->hello();

echo '<br> Hello <br>';

$test = new Test;
echo $test->test();

echo '<br> Hello <br>';

$bas = new Basics;
$bas->basic();

echo '<br> <br> <br>';

// Rules of Variable :
    //Does :
        // 1. Use $ sign at first.
        // 2. Use A-Z, a-z, 0-9
        // 3. Start with small letter
        // 4. If there is 2 or more words then every words after the first word should be capital at first
    //Dont :
        // 1. Dont use Numbers at first
        // 2. Dont use special signs
        // 3. Dont use built in keywords

//Operators in PHP
    // 1. Arithmatic Operators
        // Unary Operators : (++,--)
        // Binary Operators : (+,-,*,/,%,**)
        // Ternary Operators : 
    // 2. Assignment Operators : (=,+=,-=,*=,/=,%=,.=)
    // 3. Conditional Operators : ()
    // 4. Logical Operators : (&&, ||, !, or, and)

// Statements :
    // 1. Single line statements : $x=$y;
    // 2. Repeated statements : for, foreach, while, do while, swith


$x = '10';
$y = '10';
echo 'h'.($x!==$y);
echo gettype($x);
echo gettype($y);
    