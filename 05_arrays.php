<?php
//
////// Create array
//$fruits = array("Tomato","Banana","Orange","Apple");
////
////// Print the whole array
////echo '<pre>';
////var_dump($fruits);
////echo '</pre>';
////
////// Get element by index
////echo $fruits[2].'<br>';
////
////// Set element by index
////$fruits[0] = 'mango';
////echo '<pre>';
////var_dump($fruits);
////echo '</pre>';
////
////// Check if array has element at index 2
////isset($fruits[4]); // false
////
////// Append element
////$fruits[] = 'Banana';
////echo '<pre>';
////var_dump($fruits);
////echo'</pre>';
////
////// Print the length of the array
////echo count($fruits).'<br>';
////
////// Add element at the end of the array
////array_push($fruits,'foo');
////echo '<pre>';
////var_dump($fruits);
////echo '<pre>';
////
////// Remove element from the end of the array
////echo array_pop($fruits);
////echo '<pre>';
////var_dump($fruits);
////echo '<pre>';
////
////// Add element at the beginning of the array
////array_unshift($fruits, 'Pea');
////echo '<br>';
////var_dump($fruits);
////echo '<br>';
////
//////1 Remove element from the beginning of the array
////echo array_shift($fruits);
////echo '<br>';
////var_dump($fruits);
////echo '<br>';
//// Split the string into an array
//// $string = "Banana,Apple,Peach";
//// echo '<pre>';
//// var_dump(explode(",", $string));
//// echo '</pre>';
//
//// // Combine array elements into string
////echo implode("&", $fruits);
////
////// Check if element exist in the array
////echo '<pre>';
////var_dump(in_array('grapse',$fruits));
////echo '</pre>';
////
////// Search element index in the array
////var_dump(array_search('Orange', $fruits));
////echo '<pre>';
//////echo '<pre>';
//////var_dump($fruits);
//////echo '<pre>';
//
//// Merge two arrays
////$vegetables = ["Potato", "cucumber"];
////echo '<pre>';
////var_dump(array_merge($fruits,$vegetables));
////var_dump([...$fruits, ...$vegetables]);
////echo '<pre>';
//
//// Sorting of array (Reverse order also)
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';
//rsort($fruits);
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';
//sort($fruits); // Ascending order
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Sandeep',
    'surname' => 'Thakur',
    'age' => '30',
    'hobbies' => 'Ludo'
  ];
echo '<pre>';
print_r($person);
//var_dump($person);
echo '</pre>';

// Get element by key
echo $person['surname']. '<br>';
// Set element by key
$person['channel'] = 'Traversy Media';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
//if (!isset($person['address'])) {
//    $person['address'] = "unknown";
//}
//echo '<pre>';
//var_dump($person);
//echo '</pre>';
//$person['address'] = $person['address']??= 'unknown';
$person['address']??= 'Birgunj';
echo '<pre>';
var_dump($person);
echo '</pre>';
// Check if array has specific key

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';
// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';
// Sorting associative arrays by values, by keys
//ksort($person);
asort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
$todos = [
['title' => 'Todo title 1', 'completed' => true],
['title' => 'Todo title 2', 'completed' => false],
];
echo '<pre>';
var_dump($todos);
echo '</pre>';