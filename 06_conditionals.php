<?php

$age = 20;
$salary = 300000;

//// Sample if
//if ($age === 20) {
//    echo "1";
//}
//
//// Without circle braces
//if ($age === 20) echo "1";
//
//// Sample if-else
//if ($age > 20) {
//    echo "1";
//}
//else {
//    echo "2";
//}
// Difference between == and ===
//if ($age == 20) {
//    echo "1".'<br>';
//}
//if($age === '20') {
//    echo "2".'<br>';
//}
$age == 20;  // true
$age == '20'; // true

$age === 20; // true
$age === '20'; // false
// if AND
//if ($age > 20 && $salary === 300000){
//    echo "Do something";
//}
if ($age > 20 || $salary === 300000){
    echo "Do something".'<br>' ;
}
// if OR

// Ternary if
echo $age < 20 ? 'Young' : 'Old'.'<br>';
echo $age < 22 ? 'Young' : 'Old';

// Short ternary
$myAge = $age ?: 18;
echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator
 $myName = isset($name) ? $name : 'Mohan';
 $myName = $name ?? 'Mohan';
 echo ($myName).'<br>';

// switch
$userRole = 'Ram'; // editor, user, admin
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Invalid role';
}