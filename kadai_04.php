<?php

function sum($max) {
  return $max * 2;
}
echo sum(5);
echo "\n";


function add($a,$b){
    return $a + $b;
}
echo add(2,5);
echo "\n";


function multiplication($array) {
    $result = 1;

    foreach($array as $item) {
      $result = $result * $item;
    }

    return $result;
}

echo multiplication([2, 4, 5]);
echo "\n";



function max_array($arr){

    $max_number = $arr[0];
    foreach($arr as $a){
     if($max_number < $a){
        $max_number = $a;
     }
    }

 return $max_number;
}
echo max_array([1,2,3,4,5]);
echo "\n";

?>
