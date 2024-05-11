<?php

    class Pessoa{

    }

    class Animal{

    }

    class Professor extends Pessoa{

    }

    $victor = new Pessoa;

    $snoopy = new Animal;

    if ($victor instanceof Pessoa) {
        echo "Victor é um humano <br>";
    } else {
        echo "Victor não é um humano <br>";
    }

    if ($snoopy instanceof Pessoa) {
        echo "Snoopy é um humano <br>";
    } else {
        echo "Snoopy não é um humano <br>";
    }

    $jose = new Professor;

    if ($jose instanceof Pessoa) {
        echo "jose é um humano <br>";
    } else {
        echo "jose não é um humano <br>";
    }

    if ($jose instanceof Professor) {
        echo "jose é um humano <br>";
    } else {
        echo "jose não é um humano <br>";
    }