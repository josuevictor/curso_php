<?php

    $arr = [
        $arr1 = [1,2,3,4],
        $arr2 = [5,6,7,8],
        $arr3 = [9,10,11,12],
    ];

    for($i = 0 ; $i <= count($arr) ; $i++){
        print_r($arr[$i]);
        for($j = 0 ; $j <= count($arr[$i]) ; $j++){
            echo '---';
        }

        echo 'array' . $i;
    }