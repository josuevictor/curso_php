<?php

    $nome = 'snoopy';
    $raca = 'shitzu';
    $idade = 6;

    $cachoro = compact("nome", "raca", "idade");

    //print_r($cachoro);

    foreach($cachoro as $caracteristica => $valor){
        echo "$caracteristica => $valor" . PHP_EOL;
    }
