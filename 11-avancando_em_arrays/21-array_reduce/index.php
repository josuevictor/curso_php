<?php

$arr = [1,2,3,4,5,6,7,8,9];

function soma ($a, $b){
    return $a + $b;
}

$result = array_reduce($arr, "soma");

echo $result;