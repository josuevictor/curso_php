<?php

class Car {

    public $rodas = 20;
    public $aro = 20;
    public $cor = 'vermelho';

}

$ferrari = new Car;

echo $ferrari->rodas . "<br>";
echo $ferrari->aro . "<br>";

$ferrari->cor = 'azul';

echo $ferrari->cor;
