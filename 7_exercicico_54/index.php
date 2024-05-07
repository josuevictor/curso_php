<?php

class Pessoa{
    public $nome;
    public $idade;

    function andar()
    {
        echo "andou";
    }

}

$victor = new Pessoa;

$victor->nome = "Victor";
$victor->idade = 24;

echo "O nome dele é $victor->nome e tem $victor->idade anos <br>";

$victor->andar();