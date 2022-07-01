<?php
/*
--------- PHP OUTPUTS ---------
-echo ->output Strings, Numbers, HTML,..etc
-print ->works like echo, but can only take in a single argument
-print_r() -> print single values and arrays with indexes
-var_dump() -> returns more info like data type and length for every element
-var_export() -> outputs a string representation of a variable.
*/

$k="HELLO";
//hyt3rdo gmb b3dehom w msh byt7tlhom parentheses echo and print
echo 123,'hello',10.45;   //123hello10.45
print $k;                //HELLO

print_r([1,3,5]);        //Array ( [0] => 1 [1] => 3 [2] => 5 )
var_dump([1,'32',3]);   //array(3) { [0]=> int(1) [1]=> string(2) "32" [2]=> int(3) }
var_export($k);         //'HELLO'

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Brad', 'nice guy');
printf('1 + 1 = %d', 1 + 1); 
?>

<h1><?= $k; ?></h1>
<h3> <?= 'WORLD';?>  </h3>