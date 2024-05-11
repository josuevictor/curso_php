<?php

class Pessoa {

    function falar()
    {
        echo "Olá, eu sou um objeto! <br>";
    }

}

$victor = new Pessoa;

$victor->falar();