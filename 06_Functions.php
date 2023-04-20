<?php
/* 
==============================================================
-------------------------- Functions ----------- -------------
==============================================================
  - Functions have their own local scope as opposed to global scope
  - When We Create A Function We Give It A Name So We Can Call It Later With That Name=> User Defined Function
  - Built-in Function -> Named Function

- Variable Function
  PHP Allow To Use Variable Like Function
  When You Append Parentheses () To Variable PHP Will Look For Function With That Name
      function say_hello($someone) {
        return "Hello $someone";
      }
      $func2 = "say_hello";
      echo $func2("Osama");
- Function Exists   ->  بشوف لو الفانكشن دي موجوده ولا لا 
    function_exists("Func Name")

- Passing Arguments by Reference
    By Default, Function Arguments Are Passed By Value
    To Pass The Argument By Reference -> put & before parameter in the function
      function add_five(&$number) {
        $number += 5;
        return $number;
      }

*/
$x=10;
function scope() 
{
    global $x;   //akny b2ol $x=10; 
    echo $x;
    $x=12;
    echo "Scope function $x <br>";
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
function add($num1=5, $num2=5):int  //Return Type Declarations
{
  return $num1 + $num2;
}
$sum = add(num2:10); //to Add value to specific argument 
echo $sum.'<br>';

/* ---------------------- Anonymous Functions -------------------- 
Often used for [closures and callback functions]
Sometimes We Need To Create A Function For Specific Task to use it once 
*/
$msg = "Say Hi";
$say_hi = function($someone)use($msg) {  // OR we can put global before variable at inner function  global $msg;
  return "$msg $someone <br>";
};
echo $say_hi("Allam");

/* ---------------------- Arrow Function -------------------- 
Short Syntax For Anonymous Function and  Automatic Use Variables From Parent Scope.
Syntax[Function Replaces With fn, No Need For Curly Braces, Return Is Omitted] 
*/
$multiply = fn($num1, $num2) => $num1 * $num2;
echo $multiply(5, 5).'<br>';

//Lambda Function
function operation($num,$logic){
    return $logic($num);
}
echo operation(10,function($data){
    return $data*$data . "<br>";
});

// PHP Variadic Functions
$group_of_skills = ["HTML", "CSS", "JS", "PHP"];
function get_data($name, $country = "Private", ...$skills) { //SPREAD 
  echo "Hello $name Your Country Is $country <br>";
  foreach ($skills as $skill) :
    echo "-- $skill <br>";
  endforeach;
}
//  get_data("Osama", "Egypt", "HTML","CSS","JS","PHP");
// get_data("Osama", "Egypt", ...$group_of_skills);  // UNPACKING  
get_data("Osama", "Egypt", ...["HTML", "CSS", "JS", "PHP"]);