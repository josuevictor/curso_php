<?php

    //RESGATAR ELEMENTOS DE ARRAY
    //REMOVER ELEMENTOS

    $arr = [1,2,3,4,5,6];

    $removidos = array_splice($arr, 1, 2);

    print_r($arr) . PHP_EOL;
    print_r($removidos);