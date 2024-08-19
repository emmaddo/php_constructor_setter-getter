<?php

function minusPlus($arr){
    $positiveArray = [];
    $negativeArray = [];
    $zeroArray = [];
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] == 0){
            array_push($zeroArray, $arr[$i]);
        }
        else if($arr[$i] >= 0){
            array_push($positiveArray, $arr[$i]);
        }
        else{
            array_push($negativeArray, $arr[$i]); 
        }
    }
    $countedArray = array(count($positiveArray), count($negativeArray), count($zeroArray));
    $ratioPositive = number_format(count($positiveArray) / count($arr), 6);
    $ratioNegative = number_format(count($negativeArray) / count($arr), 6);
    $ratioZero = number_format(count($zeroArray) / count($arr), 6);
echo "$ratioPositive\n$ratioNegative\n$ratioZero";
}

minusPlus([-4, 3, -9, 0, 4, 1]);