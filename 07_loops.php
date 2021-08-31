<?php

// while
//while(true) {
//
//}

//// Loop with $counter
$counter = 0;
//while ($counter < 0){      /* first check then print */
//    echo ($counter).'<br>';
////    if($counter === 6) {
////        break;
////    }
//    $counter++;
//}
////do - while
//do{             /* first print then check */
//    echo $counter.'<br>';
//    $counter++;
//} while ($counter < 0);

// for
for ($i = 0; $i < 12; $i++) {
    echo $i.'<br>';
}
// foreach
$fruits = ["Apple","Banana","Orange"];
foreach ($fruits as $i => $fruits) {
    echo $i.' - '.$fruits.'<br>';
}

// Iterate Over associative array.
$person = [
    'name' => 'Sandeep',
    'surname' => 'Thakur',
    'age'   => 20,
    'hobbies' => ['Cricket','video Games'],
];
foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key .' '.implode(",", $value) .'<br>';
    } else {
        echo $key .' '. $value .'<br>';
    }
}