<?php

    $array = [
        'Victor' => 24,
        'Bianca' => 23,
        'Arthur' => 9,
        'Layla' => 16
    ];

    asort($array);

    print_r($array);

    arsort($array);

    print_r($array);

    ksort($array);

    print_r($array);