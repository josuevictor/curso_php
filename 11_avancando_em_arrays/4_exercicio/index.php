<?php

    $array = range(10, 45);

    //print_r($array);

    for($i = 0 ; $i <= count($array) ; $i++){
        $arrSum =  $array[$i] + 6;
        echo '-' . PHP_EOL;

        if($arrSum <= 30){
            print_r($arrSum);
        }else{
            echo 'Valor muito alto';
            die();
        }
    }