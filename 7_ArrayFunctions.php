<?php
/* --------- Array Functions -------- */

$fruits = ['apple', 'banana', 'orange'];
// Get array length
echo count($fruits);
// Search array
echo in_array('banana', $fruits);

// Add to an array
$fruits[] = 'grape';   //add to last of the array
array_push($fruits, 'mango', 'berry');
array_unshift($fruits, 'kiwi'); // Adds to the beginning

// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element with no shifting to indexes 
unset($fruits[2]);          // 0 1 3 4

// Split into chunks of 2  => htt2sm l aktr mn array kol array feha 2 elements
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray[0]);

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
//$arr3==$arr4
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2]; // Use Spread =>allow iterable to Expand in place

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
// Array of keys
$keys = array_keys($c);

// Flip make value is key and key is value with same order
$flipped = array_flip($c);
var_dump($flipped);

// Create array of numbers with range()
$numbers = range(1, 20);
// Map through array and create a new one
$newNumbers=array_map(function($number){
    return 'Number '.$number.'<br>';
},$numbers);
// Filter array
$lessThan10 = array_filter($numbers, fn($number) => $number < 10);

// Array Reduce
// "accumlator" holds the return value of the previous iterations
$sum = array_reduce($numbers, fn($accumlator, $current) => $accumlator + $current);
var_dump($sum);


$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);
?>