<?php
/* --------- Array Functions -------- */
/*
-array_change_key_case(Array[Required], Case[Optional])=>Changes The Case Of All Keys In An Array
    Case { [CASE_LOWER => Default] , [CASE_UPPER] }

- array_count_values(Array[Required])=>Counts All The Values Of An Array without repetition
    [A=>3, B=>1 , C=>0]  number of repeat for every element

- array_reverse(Array[Required], Preserve[Optional])=>Reverse Array Elements with handling indexes
    if i want every element reversed with his index put in Preserve ->True

- count(Array[Required], Mode[Optional])
    Mode [ 0 => (Default) Does Not Count Elements in Multidimensional Arrays,
           1 => Count Elements in Multidimensional Arrays and Multidimensional Array herself ]

- in_array(Search[Required], Array[Required], Type[Optional]) =>Checks If A Value Exists In An Array not intersted in datatype
    if i want to identical of Search and Array element put in the Type -> True
      $search = ["1", 2, 3, 4];
      if (in_array(1, $search, True))  --> False because Search and Array not Identical

- array_key_exists(Key[Required], Array[Required]) => Check If Key Is Exists in associative array will return Boolean Value.

- array_keys(Array[Required], Value[Optional], Type[Optional])=>Return The Array Keys in indexed Array
    if i want to get keys for specific value put the Value parameter <second param>
    Type=>[ False (Default) -> No Checking For data Type, True -> Check For Type]
        $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Osama", "Eman", 1, "1"];
        print_r(array_keys($friends, 1, True)); output [[0]=> 7]-> get Number 1 only because Type is true

- array_values(Array[Required]) => Return All The Values Of An Array

- array_pad(Array[Required], Size[Required], Value[Required])=>Pad Array To The Specified Length With A Value
    Negative Size Add Elements Before Original Items
    If Size < Array Length Nothing Will Be Deleted

-Every Array Has An Internal Pointer To Its "Current" Element,Which Is Initialized To The First Element.
    - current(Array[Required]) => Return The Current Element In An Array
    - each(Array[Required])    =>  returns the current element< key=>value >, value and key, and moves the internal pointer forward
    - next(Array[Required])    => Advance The Internal Pointer
    - prev(Array[Required])    => Rewind The Internal Pointer
    - reset(Array[Required])   => Put The Internal Pointer On First Element
    - end(Array[Required])     => Put The Internal Pointer On Last Element

- array_merge(Array[Required], Other_Array/s[Optional])=>Merge One Or More Arrays
    Associative Array With The Same Name Override The Value Of The Previous One.
        $merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
        $merge_two = ["One" => "HTML", "Four" => "Python"];
        print_r(array_merge($merge_one, $merge_two));  //Array ( [One] => HTML [Two] => CSS [Three] => JavaScript [Four] => Python )
    Numeric Key Will Be Renumbered without overriding, value will be repeated
        $merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
        $merge_four = [40 => "Python", "10" => "Go"];
        print_r(array_merge($merge_three, $merge_four)); //Array ( [0] => PHP [1] => CSS [2] => JavaScript [3] => Python [4] => Go ) 

- array_replace(Array[Required], Replacement/s[Optional])=>Replaces Elements From Passed Arrays Into The First Array
    Same Key => Value In Second Array Replace Same Key Regardless of data type its value In First Array
    If Key In Second Array Not Found In Fisrt Array It Will Be Created
        print_r(array_replace($merge_three, $merge_four)); //Array ( [10] => Go [20] => CSS [30] => JavaScript [40] => Python )

- array_rand(Array[Required], Num[Optional])=> Pick [One , More=> Num parameter] Random Keys Out Of An Array
      print_r(array_rand($nums, 3));

- shuffle(Array[Required])=> Shuffle(randomizes the order of the elements in the array), It works on the original Array.
      shuffle($nums);  
      print_r($nums);

- array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])=>Extract A Slice Of The Array
    Length[Negative => Stop Slicing Until This Index منطقه محظورة, Not Set => All Elements From Start Position]
    Preserve Keys[False => (Default) Reset Keys, True => Preserve Keys important for numeric Keys] If Array Have String Keys, It Will Always Preserve The Keys

- array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
    Remove A Portion Of The Array And Replace It With Something Else, it works on the original array

- sort(Array[Required])=>Sort An Indexed Array In Ascending Order
- rsort(Array[Required])=>Sort An Indexing Array In Descending Order
- asort(Array[Required])=>Sort An Associative Array In Ascending Order According To The Value
- arsort(Array[Required])=>Sort An Associative Array In Descending Order According To The Value
- ksort(Array[Required])=>Sort An Associative Array In Ascending Order According To The Key
- krsort(Array[Required])=>Sort An Associative Array In Descending Order According To The Key
- natsort(Array[Required])=>Sorts An Array By Using A "Natural Order" Algorithm

- array_product(Array[Required])=> Calculate The Product Of Values In An Array
- array_sum(Array[Required])=>Calculate The Sum Of Values In An Array    
*/

$fruits = ['apple', 'banana', 'orange'];


// Search array
echo "in_array function => ".in_array('banana', $fruits);

// Add to an array
$fruits[] = 'grape';   //add to last of the array
array_push($fruits, 'mango', 'berry');
array_unshift($fruits, 'kiwi'); // Adds to the beginning

// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element with no shifting to indexes 
unset($fruits[2]);          // 0 1 3 4

/*array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
    Split An Array Into Chunks [Return A Multidimensional Indexed Array]
    Preserve_Key=> [False => Default Reindex The Keys, True Preserve The Keys if this associative array-> key=>value ]
*/
$countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
echo '<pre>';
print_r(array_chunk($countries, 2, true));
echo '</pre>';

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3= [...$arr1, ...$arr2]; // Use Spread =>allow iterable to Expand in place

// Combine arrays (Keys & values) they must have the same number of elements
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
//- array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
$first_names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
$last_names = ["Ameer", "Samy", "Shady", "Amr", "Mohamed", "Ibrahim"];
echo nl2br("\n");
print_r(array_map(fn($f, $l) => "Hello Mr $f $l", $first_names, $last_names));
echo nl2br("\n");

//array_filter(Array[Required], Callback Function[Required], Flag[Optional])
//Flag[ARRAY_FILTER_USE_KEY,ARRAY_FILTER_USE_BOTH,0 Default => Send target value As Arguments]
$nums = [1 => 3, 6 => 1, 3 => 2, 4 => 8, 5 => 4];
function check_nums($key, $value) {
    return $key> 4 || $value > 4;
}
print_r(array_filter($nums, "check_nums" , ARRAY_FILTER_USE_BOTH));
// print_r(array_filter($nums, fn($key,$value)=> $key > 4 || $value > 4 , ARRAY_FILTER_USE_BOTH));
echo nl2br("\n");

//array_reduce(Array[Required], Callback Function[Required], Initial_Value[Optional])=> Reduce The Array To A Single Value
// "accumlator" holds the return value of the previous iterations || Initial value
$sum = array_reduce($numbers, fn($accumlator, $current) => $accumlator + $current,10);
echo $sum;
echo nl2br("\n");

$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);
?>