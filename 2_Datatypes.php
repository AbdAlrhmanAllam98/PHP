<?php
/*
--------- PHP Data Types ---------
- String -> series of characters surrounded by quotes
- Integer -> Whole numbers
- Float -> Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

$name = 'Brad'; // String it Can be single or double quotes
$age = '20'+'4'; // Integer
$cashOnHand = 10.5; //Float
$hasKids = true; // Boolean

var_dump($cashOnHand);   //float(10.5)
echo "${name} is ${age} years old   ";  //template literals

echo "$name is $age years old   ";      //double quotes

//CONST  => are never going to change
define('HOST','LOCALHOST');
echo HOST;   //LOCALHOST

?>
