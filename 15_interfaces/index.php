<?php

    interface Caracteristicas{

        const nome = "Victor";

        public function falar();

    }

    class Pessoa implements Caracteristicas{

        public $idade = 24;

        public function falar()
        {
            echo "Olá mundo! <br>";
        }

        public function dizerNome()
        {
            echo "Meu nome é:" . self::nome;
        }

    }

    $victor = new Pessoa;

    $victor->falar();

    $victor->dizerNome();