<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */
/* For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
  Alternate SYNTAX
  for(initialize; condition; increment):
    // code to be executed
  endfor;
*/

/* ------------ While Loop ------------ */
/* Alternate SYNTAX
while (condition) :
 // code to be executed
endwhile;
*/
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks", $startdate);
while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}

/* ---------- Do While Loop --------- */
/* Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
    do...while loop will always execute the block of code once, even if the condition is false.
*/

/* ---------- Foreach Loop ---------- */
// Use the indexes within the loop
$posts = ['Post One', 'Post Two', 'Post Three'];
foreach ($posts as $index => $post) {
  echo "${index} => ${post} <br>";
}
// Use the keys within the loop for an associative array
$person = ['first_name' => 'Brad','last_name' => 'Traversy','email' => 'brad@gmail.com',];
// Get Keys
foreach ($person as $key => $val) {
    echo "$key => $val <br>";
}
?>