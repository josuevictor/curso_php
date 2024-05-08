<?php

abstract class ClasseAbstrata{

    public static function testeClasseAbstrata()
    {
        echo "Este método é de uma classe abstrata! <br>";
    }

    abstract public function metodoAbstrato();

}

ClasseAbstrata::testeClasseAbstrata();

class novaClasse extends ClasseAbstrata{

    public function metodoAbstrato()
    {
        echo "testando método abstrato <br>";
    }

}

$n =  new novaClasse;
$n->metodoAbstrato();