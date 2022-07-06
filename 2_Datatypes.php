<?php
/*
- PHP is general purpose scripting language for web development, interpreted server-side language
- Browser sends a http request to the server and php code is processed in server and sends response to the browser

--------- PHP Data Types ---------
- String -> series of characters surrounded by quotes
- Integer -> Whole numbers
- Float -> Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource

- gettype() => to get datatype of Return
- Type casting   (integer) 10.32   (Class)  variable||value
*/

// Type Juggling + Automatic Type Conversion
$age = 20+'4'; // Integer
echo 5 + '5 Lessons'; // 10 => Warning  datatype return is Integer

$name = 'Brad'; // String it Can be single or double quotes
$cashOnHand = 10.5; //Float
$hasKids = true; // Boolean

var_dump($cashOnHand);   //float(10.5)
echo `${name} is ${age} years old  `;  //template literals

echo "$name is $age years old   ";      //double quotes

//Herodoc to show data easiest and parse variables 
echo <<<"navlinks"
<ul>
  <li>$name</li>
  <li>$name</li>
  <li>$name</li>
  <li>$name</li>
</ul>
navlinks;

// Nowdoc to Escaping 
echo <<<'Now'
Hello PHP
Special Characters $$$ ' ' ' """"" \\\\
Hello My Name Is $name
Now;

//CONST  => are never going to change
define('HOST','LOCALHOST');
echo HOST.'<br>';   //LOCALHOST
echo DEFAULT_INCLUDE_PATH;
/*
Pre-Defined Constants [Case Sensitive]
- PHP_VERSION 
- PHP_OS_FAMILY
- PHP_INT_MAX
- DEFAULT_INCLUDE_PATH
Magic Constants [Case Insensitive]
- __LINE__  -> السطر للي احنا فيه حاليا
- __FILE__  -> path of file
- __DIR__   -> path of folder [path without file name]
*/
?>
