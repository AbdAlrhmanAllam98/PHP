<?php

/* ---------- If Statements --------- */

/*
if (condition) {
  // code to be executed if condition is true
}
elseif(condition){
  // code to be executed if this condition is true
}
else{
  // code to be executed if Preconditions is not true
}
Alternate Syntax
  if (Condition) :
    // Block of code 
  elseif (Condition) :
    // Block of code 
  else:
    // Block of code 
  endif;
*/

/* -------- Ternary Operator -------- */
$posts = ['fd','fsd'];
/*
  The ternary operator is a shorthand if statement.
    condition ? true : false;
*/
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice.
// echo !empty($posts[0]) ? $posts[0] : 'There are no posts';

// Assign a variable based on a condition
$firstPost = !empty($posts) ? $posts[0] : 'There are no posts';
// echo $firstPost;

// Null Coalescing Operator ?? (PHP 7.4)
$firstPost = $posts[1] ?? null;
var_dump($firstPost);

/* -------- Switch Statements ------- */
$favcolor = 'green';
switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}
?>