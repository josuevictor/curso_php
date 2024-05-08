<?php

    class Calculadora{

        public $valor1;
        public $valor2;

        public function somar($valor1, $valor2)
        {
            return $valor1 + $valor2;
        }

        public function subtrair($valor1, $valor2)
        {
            return $valor1 - $valor2;
        }

        public function multiplicar($valor1, $valor2)
        {
            return $valor1 * $valor2;
        }

        public function dividir($valor1, $valor2)
        {
            return $valor1 / $valor2;
        }

    }

    $operacao = new Calculadora;

    echo $operacao->somar(5, 5) . "<br>";
    echo $operacao->subtrair(5, 5) . "<br>";
    echo $operacao->multiplicar(5, 5) . "<br>";
    echo $operacao->dividir(5, 5) . "<br>";