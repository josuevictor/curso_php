<?php

class Humano{
    const OLHOS = 2;
    const BRACOS = 2;
    const PERNAS = 2;

    public function mostrarConstatnte()
    {
        echo self::BRACOS;
    }
}

$victor = new Humano;

echo $victor::OLHOS . PHP_EOL;

$victor->mostrarConstatnte();