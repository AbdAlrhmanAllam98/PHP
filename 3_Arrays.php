<?php
/* ----------- Arrrays ----------- */

/*
  If you need to store multiple values from various data types, you can use arrays. Arrays hold "elements"
*/

// Simple array of numbers
$numbers = ['koala', 2, 3, 4, 5];
// echo $numbers[0];
// echo $numbers[3] + $numbers[4];
 
//  Associative arrays allow us to use named keys to identify values.
$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];
//  echo $colors[3];

// Associative array Strings as keys
$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];
// echo $hex['red'];
// var_dump($hex);


//  Multi-dimansional arrays are often used to store data in a table format.
// Single person
$person1 = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
  ];

// Array of people
$people = [
    $person1, //   [...$person1]
    [
      'first_name' => 'John',
      'last_name' => 'Doe',
      'email' => 'john@gmail.com',
    ],
    [
      'first_name' => 'Jane',
      'last_name' => 'Doe',
      'email' => 'jane@gmail.com',
    ],
  ];
//   echo $people[2]['email'];
//   var_dump($people);


  // Encode to JSON 
// print_r(json_encode($people));

// Decode from JSON
$jsonobj = '[{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"},{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}]';
print_r(json_decode($jsonobj));
?>