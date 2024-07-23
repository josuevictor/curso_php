<?php


    $dataNascimento = mktime(17, 53, 00, 04, 20, 2000);

    echo $dataNascimento . PHP_EOL;

    $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

    echo  $dataNascimentoFormatada;