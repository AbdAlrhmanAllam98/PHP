<?php
/* ------------ Functions ----------- */
//   - Functions have their own local scope as opposed to global scope
$x=10;
function scope()
{
    global $x;   //akny b2ol $x=10;
    echo $x;
    $x=12;
    echo $x;
}
scope();

// Adding params
function registerUser($username)
{
  echo "User ${username} has been registered! <br>";
}
// Pass in an argument
registerUser('Brad');

// Adding default values
function add($num1=5, $num2=5)
{
  return "Sum is". $num1 + $num2;
}
$sum = add(num2:10); //to Add value to specific argument 
echo $sum.'<br>';

// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($num1, $num2) {
  return $num1 + $num2;
};
echo $add(5, 5).'<br>';

// Arrow function
$multiply = fn($num1, $num2) => $num1 * $num2;
echo $multiply(5, 5).'<br>';

//Lambda Function
function operation($num,$logic){
    $logic($num);
}
echo operation(10,function($data){
    $data*$data;
});