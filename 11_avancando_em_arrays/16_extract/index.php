<?php

    $arr = [
      'cor' => 'azul',
      'forma' => 'redondo',
      'material' => 'aço'
    ];

    extract($arr);

    echo $cor .PHP_EOL;
    echo $forma .PHP_EOL;
    echo $material .PHP_EOL;

    $nome = 'Victor';

    $pessoa = [
        'nome' => 'Josué',
        'idade' => 24
    ];

    echo $nome;

    extract($pessoa);

    echo $nome .PHP_EOL;
    echo $idade;

